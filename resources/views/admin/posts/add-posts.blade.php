@extends('admin.master')
@section('title')
    admin | add Posts
@endsection
@section('content')
<section class="content-header border-bottom">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add Posts</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="admin/dashboard">Home</a></li>
            <li class="breadcrumb-item active">Add POsts</li>
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
              <h3 class="card-title text-center font-semibold">ADD POST</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

           
            <form action="{{route('admin.store-post')}}" method="post" enctype="multipart/form-data">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="title">Posts Title</label>
                  <input type="text" name="title" class="form-control" id="title" placeholder="Enter Post Title" value="{{old('title')}}">
                  @error('title')
                      <span class=" text-danger text-sm">{{$message}}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="slug">Post Slug</label>
                  <input type="text" name="slug" class="form-control" id="slug" placeholder="Enter post slug" value="{{old('slug')}}">
                  @error('slug')
                      <span class=" text-danger text-sm">{{$message}}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exerpt">Post Exerpt</label>
                  <textarea class="form-control" name="exerpt" id="exerpt" rows="10" placeholder="Post Exerpt">{{old('exerpt')}}</textarea>
                  @error('exerpt')
                      <span class=" text-danger text-sm">{{$message}}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="description">Post description</label>
                  <textarea class="form-control" name="description" id="description" rows="10" placeholder="Post description">{{old('description')}}</textarea>
                  @error('description')
                      <span class=" text-danger text-sm">{{$message}}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="category_id">Select Category</label>
                  <select name="category_id" id="category_id" class="form-control" value="{{old('category_id')}}">
                    @if ($cat)
                    @foreach ($cat as $key=>$item)
                    <option value="{{$item->id}}">{{$item->cat_name}}</option>
                    @endforeach 
                    @endif
                    <option value="0">Uncategorized</option>
                  </select>
                    
                </div>
                <div class="form-group">
                  <label for="image">Post Image</label>
                  <input type="file" name="image" id="image" class="form-control" value="{{old('image')}}">
                  @error('image')
                      <span class=" text-danger text-sm">{{$message}}</span>
                  @enderror
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-dark">ADD POST</button>
              </div>
            </form>
          </div>
    </div>
@endsection