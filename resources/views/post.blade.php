{{-- @dd($post) --}}

@extends('layout.main')

@section('container')
 <article>
    <p> By. <a href="/authors/{{ $post->user->id }}">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->slug }}</a></p>
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->body }}</p>
</article> 
@endsection