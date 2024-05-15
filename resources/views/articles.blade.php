{{-- var_dump = @dd($post)   --}}

@extends('layout.main')

@section('container')
  
<div class="container-fluid py-5">
    
    <div class="container" style="flex-wrap: wrap">
        <div class="mx-auto text-center mb-5" style="max-width: 500px;">
            <h6 class="text-primary text-uppercase">Our Blog</h6>
            <h1 class="display-5">Artkel Terbaru Seputar Pertanian</h1>
        </div>
        
        <div class="row g-5">
            
@foreach ($post as $pos)
            <div class="col-lg-4" style="display: flexbox; flex-wrap:wrap;">
                <div class="blog-item position-relative overflow-hidden">
                    <img class="img-fluid" src="{{ asset('storage/' . $pos->image) }}" alt="">
                    <a class="blog-overlay" href="">
                        <h4 class="text-white">{{ $pos->title }}</h4>
                        <span class="text-white fw-bold">{{ $pos->category->name }}</span>
                    </a>
                </div>
            </div>
            
@endforeach
            {{-- <div class="col-lg-4">
                <div class="blog-item position-relative overflow-hidden">
                    <img class="img-fluid" src="photos/img/blog-2.jpg" alt="">
                    <a class="blog-overlay" href="">
                        <h4 class="text-white">Lorem elitr magna stet eirmod labore amet</h4>
                        <span class="text-white fw-bold">Jan 01, 2050</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item position-relative overflow-hidden">
                    <img class="img-fluid" src="photos/img/blog-3.jpg" alt="">
                    <a class="blog-overlay" href="">
                        <h4 class="text-white">Lorem elitr magna stet eirmod labore amet</h4>
                        <span class="text-white fw-bold">Jan 01, 2050</span>
                    </a>
                </div>
            </div> --}}
        </div>
    </div>
</div>

@endsection

