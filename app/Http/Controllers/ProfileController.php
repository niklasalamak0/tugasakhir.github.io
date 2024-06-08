<?php
 
namespace App\Http\Controllers;
 
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
 
class ProfileController extends Controller
{
    public function index(){
        return view('pages.profile');
    }
 
    public function purchase(){
        return view('pages.purchase');
    }
}