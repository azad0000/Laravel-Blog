@extends('admin.master')
@section('title')
    admin | edit Category
@endsection
@section('content')
<section class="content-header border-bottom">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Category</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="admin/dashboard">Home</a></li>
            <li class="breadcrumb-item active">Edit Category</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
        @if (session()->has('message'))
           <div class=" alert alert-success">{{session()->get('message')}}</div>  
        @endif
    <div class="col-md-8 mx-auto mt-3">
        <div class="card card-light">
            <div class="card-header">
              <h3 class="card-title text-center font-semibold">EDIT CATEGORY</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            @foreach ($edit_cat as $item)
            <form action="{{route('admin.update-category',[$item->id])}}" method="post" enctype="multipart/form-data">
              @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="cat_name">Category Name</label>
                <input type="text" name="cat_name" class="form-control" id="cat_name" value="{{$item->cat_name}}">
              </div>
              <div class="form-group">
                <label for="cat_slug">Category Slug</label>
                <input type="text" name="cat_slug" class="form-control" id="cat_slug" value="{{$item->cat_slug}}">
              </div>
              <div class="form-group">
                <label for="cat_img">Category Image</label>
                <input type="file" name="cat_img" class="form-control" id="cat_slug">
                <img src="{{asset('images')}}/{{$item->cat_img}}" alt="" width="100" class=" mt-2">
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-dark">ADD CATEGORY</button>
            </div>
          </form> 
            @endforeach
            
          </div>
    </div>
@endsection