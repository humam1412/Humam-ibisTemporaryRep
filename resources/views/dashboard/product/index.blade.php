@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">My Product</h1>
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
  <a href="/dashboard/product/create" class="btn btn-primary mb-2"> Create New Post</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama Produk</th>
          <th scope="col">Category</th>
          <th scope="col">Price</th>
          <th scope="col">Description</th>
          <th scope="col">image</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->category->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->image }}</td>
            <td>
                <a href="/dashboard/product/{{ $product->id }}"> show detail</a>
                <a href="/dashboard/product/{{ $product->id }}/edit"> edit</a>
                <form class="d-inline" action="/dashboard/product/{{ $product->id }}" method="post">
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