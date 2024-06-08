<?php
namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Post;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function addToWishlist(Request $request)
    {
        // Check if the item is already in the wishlist
        $existingItem = Wishlist::where('title', $request->input('title'))->first();

        if ($existingItem) {
            return redirect()->back()->with('error', 'Product is already in your wishlist.');
        }

        // Create wishlist item with post details
        Wishlist::create([
            'image' => $request->input('image'),
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);

        return redirect()->back()->with('success', 'Product added to wishlist.');
    }

    public function removeFromWishlist($id)
    {
        // Retrieve the specific wishlist item by its ID
        $wishlistItem = Wishlist::findOrFail($id);

        // Delete the item from the wishlist
        $wishlistItem->delete();

        return redirect()->back()->with('success', 'Product removed from wishlist.');
    }

    public function viewWishlist(): View
    {
        $wishlistItems = Wishlist::all();
        return view('wishlist.index', compact('wishlistItems'));
    }

}
