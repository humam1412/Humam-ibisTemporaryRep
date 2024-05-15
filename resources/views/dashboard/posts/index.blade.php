@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">My POSTS</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
      <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
    </div>
    <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle d-flex align-items-center gap-1">
      <svg class="bi"><use xlink:href="#calendar3"/></svg>
      This week
    </button>
  </div>
</div>
 @if (session()->has('success'))
     <div class="alert alert-primary" role="alert">{{ session('success') }}</div>
 @endif
<div class="table-responsive small">
  <a href="/dashboard/posts/create" class="btn btn-primary mb-2"> Create New Post</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
       
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->category->name }}</td>
            <td>
                <a href="/dashboard/posts/{{ $post->slug }}"> show detail</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit"> edit</a>
                <form class="d-inline" action="/dashboard/posts/{{ $post->slug }}" method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-warning" onclick="return confirm('yakin?')">DELETE</button>
              </form>
            </td>
            
          </tr> 
        @endforeach
        
             </tbody>
    </table>
  </div>
@endsection