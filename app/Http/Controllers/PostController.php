<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use App\Models\Admin;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{

    /**
     * index
     * 
     * @return View
     */
    public function index(): View
    {
        $posts = Post::latest()->paginate(5);

        return view('posts.index', compact('posts'));
    }

    public function create(): View
    {

        return view('posts.create', );
    }

    public function berita(): View
    {
        return view('posts.berita');
    }

    public function checkout($id): View
    {
        $post = Post::findOrFail($id);
        return view('posts.checkout', compact('post'));
    }

    public function viewAdmin(): View
    {
        $post = Post::all();
        return view('posts.admin', compact('post'));
    }


    //admin
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->intended('/admin/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

    //user
    public function showLoginuser()
    {
        return view('user.login');
    }

    public function showRegistrationForm()
    {
        return view('user.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->intended('/user/dashboard');
    }

    public function loginuser(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/user/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logoutuser(Request $request)
    {
        Auth::logout();
        return redirect()->route('user.login');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:10000',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('storage/posts'), $imageName);

        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->image = $imageName;
        $post->save();

        return redirect()->route('portofolio.index')->with('success', 'Post created successfully.');
    }


    //menampilkan
    public function show(string $id): View
    {
        $post = Post::findOrFail($id);

        return view('posts.show', compact('post'));
    }


    //hapus
    public function destroy($id): RedirectResponse
    {
        $post = Post::findOrFail($id);

        Storage::delete('public/posts/' . $post->image);

        $post->delete();

        return redirect()->route('portofolio.index')->with(['success' => 'Data Berhasil Dihapus']);
    }

    //edit dan update
    public function edit(string $id): View
    {
        $post = Post::findOrFail($id);

        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request, [
            'image' => 'image|mimes:jpeg,jpg,png|max:10000',
            'title' => 'required|min:2',
            'content' => 'required|min:5'
        ]);

        $post = Post::findOrFail($id);

        if ($request->hasFile('image')) {
            // Upload image
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());

            // Delete old image
            Storage::delete('public/posts/' . $post->image);

            $post->update([
                'image' => $image->hashName(),
                'title' => $request->title,
                'content' => $request->content
            ]);
        } else {
            $post->update([
                'title' => $request->title,
                'content' => $request->content
            ]);
        }
        // Redirect to index
        return redirect()->route('portofolio.index')->with(['success' =>  'Berhasil Disimpan!']);
    }
}
