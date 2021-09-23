<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile\move;

class CategoryController extends Controller
{
    public function add_category(){
        return view('admin.category.add-category');
    }
    public function store_category(Request $request){

        $this->validate($request,[
            'cat_name'=>['required','max:255','unique:categories'],
            'cat_slug'=>['required','max:255','unique:categories'],
            'cat_img'=>['required','max:5000','mimes:jpg,jpeg,png,svg'],
        ]);
        $cat_image = 'cat_image'.'-'.time().'.'.$request->cat_img->extension();
        $cat = new Category();
        $cat->cat_name = $request->cat_name;
        $cat->cat_slug = $request->cat_slug;
        $cat->cat_img = $cat_image;
        $cat->save();
        $request->cat_img->move(public_path('images'),$cat_image);
        return redirect()->back()->with('message','Category Add Successfully');
    }
    public function show_category(){
        $categories = Category::all();
        return view('admin.category.show-category',compact('categories'));
    }
    public function edit_category($id){
        $edit_cat = Category::where('id',$id)->get();
        return view('admin.category.edit-category',compact('edit_cat'));
    }
    public function update_category(Request $request,$id){
        $cat = Category::where('id',$id)->first();
        $cat->cat_name = $request->cat_name;
        $cat->cat_slug = $request->cat_slug;
        if($request->cat_img){
            $cat_image = 'cat_image'.'-'.time().'.'.$request->cat_img->extension();
            $cat->cat_img = $cat_image;
            $request->cat_img->move(public_path('images'),$cat_image);
        } 
        $cat->save();
        return redirect()->back()->with('message','Category Update Successfully');
    }
    public function delete_category($id){
        $cat = Category::where('id',$id)->first();
        $cat->delete();
        return redirect()->back()->with('message','Category Delete Successfully');
    }
}
