@extends('dashboard.layouts.main')

@section('container')
<a href="/dashboard/posts" class="btn btn-success"> back to my post</a>
<a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"> EDIT</a>
<form class="d-inline" action="/dashboard/posts/{{ $post->slug }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger" onclick="return confirm('yakin?')">DELETE</button>
</form>
<img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}">
<h2>{{ $post->title }}</h2>
<article>{!! $post->body !!}</article>
@endsection 