@extends('admin.master')
@section('title')
    Admin | All Category
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
            <li class="breadcrumb-item active">All Category</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  @if (session()->has('message'))
           <div class=" alert alert-danger">{{session()->get('message')}}</div>  
        @endif
  <div class="col-md-10 mx-auto">
    <div class="card-body p-0">
        <table class="table table-striped">
          <thead>
            <tr>
              <th style="width: 10px">#</th>
              <th>Name</th>
              <th>Image</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($categories as $key=>$category)
              <tr>
                <td>{{$key+1}}</td>
                <td>{{$category->cat_name}}</td>
                <td>
                  <img src="{{asset('images')}}/{{$category->cat_img}}" alt="" width="50">
                </td>
                <td>
                    <a href="{{route('admin.edit-category',[$category->id])}}" class=" mr-3"><i class="fas fa-edit"></i></a>
                    <a href="{{route('admin.delete-category',[$category->id])}}"><i class="fas fa-trash"></i></a>
                </td>
              </tr>
              @endforeach
            
          </tbody>
        </table>
      </div>
  </div>
@endsection