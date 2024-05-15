@extends('dashboard.layouts.main')

@section('container')
<a href="/dashboard/product" class="btn btn-success">back</a>
<a href="/dashboard/product/{{ $products->id }}/edit" class="btn btn-warning"> EDIT</a>
<form class="d-inline" action="/dashboard/product/{{ $products->id }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger" onclick="return confirm('yakin?')">DELETE</button>
</form>
<img src="{{ asset('storage/' . $products->image) }}" alt="{{ $products->category->name }}">
<h2>{{ $products->name }}</h2> 
<h2>{{ $products->price }}</h2> 
<article>{!! $products->description !!}</article>
@endsection 