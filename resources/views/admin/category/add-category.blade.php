@extends('admin.master')
@section('title')
    admin | add Category
@endsection
@section('content')
<section class="content-header border-bottom">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add Category</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="admin/dashboard">Home</a></li>
            <li class="breadcrumb-item active">Add Category</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
    <div class="col-md-8 mx-auto mt-3">
        @if (session()->has('message'))
           <div class=" alert alert-success">{{session()->get('message')}}</div>  
        @endif
        <div class="card card-light">
            <div class="card-header">
              <h3 class="card-title text-center font-semibold">ADD CATEGORY</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('admin.store-category')}}" method="post" enctype="multipart/form-data">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="cat_name">Category Name</label>
                  <input type="text" name="cat_name" class="form-control" id="cat_name" placeholder="Enter category name" value="{{old('cat_name')}}">
                  @error('cat_name')
                      <span class=" text-danger text-sm">{{$message}}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="cat_slug">Category Slug</label>
                  <input type="text" name="cat_slug" class="form-control" id="cat_slug" placeholder="Enter category slug" value="{{old('cat_slug')}}">
                  @error('cat_slug')
                      <span class=" text-danger text-sm">{{$message}}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="cat_img">Category Image</label>
                  <input type="file" name="cat_img" class="form-control" id="cat_img" value="{{old('cat_img')}}">
                  @error('cat_img')
                      <span class=" text-danger text-sm">{{$message}}</span>
                  @enderror
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-dark">ADD CATEGORY</button>
              </div>
            </form>
          </div>
    </div>
@endsection