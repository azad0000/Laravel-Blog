<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $posts=Post::where('category_id',9)->get();
        $allPosts=Post::with('Category','User')->paginate(9);
        return view('home',compact('posts','allPosts'));
    }
}
