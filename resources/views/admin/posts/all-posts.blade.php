@extends('admin.master')
@section('title')
    Admin | All Posts
@endsection
@section('content')
<section class="content-header border-bottom">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>All Posts</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="admin/dashboard">Home</a></li>
            <li class="breadcrumb-item active">All Posts</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <style>
    svg.w-5.h-5 {
    width: 10px;
}
.hidden.sm\:flex-1.sm\:flex.sm\:items-center.sm\:justify-between {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 20px;
    margin-bottom: 40px;
}
.flex.justify-between.flex-1.sm\:hidden {
    display: none;
}
  </style>
  @if (session()->has('message'))
  <div class=" alert alert-success">{{session()->get('message')}}</div>  
@endif
  <div class="col-md-11 mx-auto">
    <div class="card-body p-0">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Title</th>
              <th>Image</th>
              <th>Exerpt</th>
              <th>Category</th>
              <th>Author</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $key=>$post)
            <tr>
              <td>{{$key+1}}</td>
              <td>{{$post->title}}</td>
              <td>
                <img src="{{asset('images')}}/{{$post->image}}" alt="" width="50">
              </td>
              <td>{{$post->exerpt}}</td>
              <td>{{$post->category->cat_name}}</td>
              <td>{{$post->user->name}}</td>
              <td>
                <a href="{{route('admin.update-post',$post->id)}}" class=" mr-3"><i class="fas fa-edit"></i></a>
                <a href="{{route('admin.delete-post',$post->id)}}"><i class="fas fa-trash"></i></a>
              </td>
            </tr>
            @endforeach
              
          </tbody>
        </table>
        {{$posts->links()}}
      </div>
  </div>
@endsection