<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\UploadedFile\move;

class PostController extends Controller
{
    public function add_post(){
        $cat = Category::all();
        return view('admin.posts.add-posts',compact('cat'));
    }
    public function store_post(Request $request){
        $user = Auth::user()->id;
        $validated = $request->validate([
            'title' => 'required|unique:posts|max:255',
            'slug' => 'required|unique:posts|max:255',
            'exerpt'=>'required|max:500',
            'image'=>'required|mimes:jpg,jpeg,png,svg|max:5000'
        ]);

        
        $newImage = 'image'.'-'.time().'.'.$request->image->extension();
        

        $posts = new Post();
        $posts->user_id = $user;
        $posts->category_id = $request->category_id;
        $posts->title = $request->title;
        $posts->slug = $request->slug;
        $posts->exerpt = $request->exerpt;
        $posts->description = $request->description;
        $posts->image = $newImage; 
        $posts->save();
        $request->image->move(public_path('images'),$newImage);
        
        return redirect()->back()->with('message','Posts add successfully!!');
        
    }
    public function show_post(){
        $posts = Post::with('category','user')->paginate(10);
        // dd($posts);
        return view('admin.posts.all-posts',compact('posts'));
    }
    public function edit_post($id){
        $cat = Category::all();
        $posts = Post::where('id',$id)->get();
        return view('admin.posts.update-posts',compact('posts','cat'));
    }
    public function update_post(Request $request,$id){
        $posts = Post::where('id',$id)->first();
        $this->validate($request,[
            'image'=>'unique',
        ]);
        $posts->title=$request->title;
        $posts->slug=$request->slug;
        $posts->exerpt=$request->exerpt;
        $posts->description=$request->description;
        if($request->image){
            $image = 'image'.time().'.'.$request->image->extension();
            $posts->image=$image;
            $request->image->move(public_path('images'),$image);
        }
        
        $posts->save();
        
        return redirect()->back()->with('message','Posts Update successfully!!');
    }
    public function delete_post($id){
        $post = Post::where('id',$id)->first();
        $post->delete();
        return redirect()->back()->with('message','Posts Delete successfully!!');
    }
}
