@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">edit post</h1>
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

<form method="post" action="/dashboard/posts/{{ $post->slug }}">
  @method('put')
    @csrf
    <div class="mb-3">
      <label f" class="form-label">Title</label>
      <input type="text" class="form-control" value="{{ old('title', $post->title) }}" name="title" @error('title')
          is-invalid
      @enderror id="title" >
      @error('title')
          <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" value="{{ old('slug', $post->slug) }}" required class="form-control" name="slug" id="slug" >
        @error('slug')
          <div class="invalid-feedback">{{ $message }}</div>
      @enderror
      </div>

      <div class="mb-3">
        <label for="category" class="form-label">category</label>
        <select class="form-select" name="category_id" aria-label="Default select example">
            
          @foreach ($categories as $cat)
            @if (old('category_id', $post->category_id) == $cat->id)
             
            <option value="{{ $cat->id }}" selected>{{ $cat->name }}</option>
            @else
                
            @endif
            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
            @endforeach
          </select>
      </div>
      
      <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input class="form-control" name="image" type="file" id="image">
        @error('image')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
     @enderror
      </div>

      <div class="mb-3 mt-2">
        <label for="body" class="form-label">body</label>
        @error('body')
        <p>{{ $message }}</p>
        @enderror
        <input id="body" name="body" value="{{ old('body', $post->body) }}" type="hidden" name="content">
        <trix-editor input="body"></trix-editor> 
        {{-- <label for="summernote" class="form-label">body</label>
        <input type="text" id="summernote" name="body" value="{{ old('body', $post->body) }}"> --}}
    </div>

       

    <button type="submit" class="btn btn-primary">update</button>
  </form>



@endsection