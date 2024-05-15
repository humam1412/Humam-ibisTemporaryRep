{{-- var_dump = @dd($products1)    --}}

@extends('layout.main')

@section('container')
<div class="container-fluid py-5">
    <div class="container">
        <div class="mx-auto text-center mb-5" style="max-width: 500px;">
            <h6 class="text-primary text-uppercase">Products</h6>
            <h1 class="display-5">Bibit</h1>
        </div>
        <div class="owl-carousel product-carousel px-5">
            @foreach ($products1 as $product)
            <div class="pb-5">
                <div class="product-item position-relative bg-white d-flex flex-column text-center">
                    <img class="img-fluid mb-4" src="{{ asset('storage/' . $product->image) }}" alt="">
                    <h6 class="mb-3">{{ $product->image }}</h6>
                    <h5 class="text-primary mb-0">{{ $product->price }}</h5>
                    <div class="btn-action d-flex justify-content-center">
                        <a class="btn bg-primary py-2 px-3" href=""><i class="bi bi-cart text-white"></i></a>
                        <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- <img src=" {{ 'storage/post-image/4cdqtPtmXGlhDUvgi8BYXVn4bEQpW3XND1kjQsHM.jpg' }}" alt=""> --}}
           
            
          
        </div>
    </div><br><br>
    <div class="container mt-10">
        <div class="mx-auto text-center mb-5" style="max-width: 500px;">
            <h6 class="text-primary text-uppercase">Products</h6>
            <h1 class="display-5">Pelatihan</h1>
        </div>
        <div class="owl-carousel product-carousel px-5">
            @foreach ($products2 as $product)
            <div class="pb-5">
                <div class="product-item position-relative bg-white d-flex flex-column text-center">
                    <img class="img-fluid mb-4" src="photos/img/product-1.png" alt="">
                    <h6 class="mb-3">{{ $product->name }}</h6>
                    <h5 class="text-primary mb-0">{{ $product->price }}</h5>
                    <div class="btn-action d-flex justify-content-center">
                        <a class="btn bg-primary py-2 px-3" href=""><i class="bi bi-cart text-white"></i></a>
                        <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
            
            
          
        </div>
    </div><br><br>
    <div class="container mt-10">
        <div class="mx-auto text-center mb-5" style="max-width: 500px;">
            <h6 class="text-primary text-uppercase">Products</h6>
            <h1 class="display-5">Instalasi</h1>
        </div>
        <div class="owl-carousel product-carousel px-5">
            @foreach ($products3 as $product)
            <div class="pb-5">
                <div class="product-item position-relative bg-white d-flex flex-column text-center">
                    <img class="img-fluid mb-4" src="photos/img/product-1.png" alt="">
                    <h6 class="mb-3">{{ $product->name }}</h6>
                    <h5 class="text-primary mb-0">{{ $product->price }}</h5>
                    <div class="btn-action d-flex justify-content-center">
                        <a class="btn bg-primary py-2 px-3" href=""><i class="bi bi-cart text-white"></i></a>
                        <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
            
            
          
        </div>
    </div><br><br>
    <div class="container mt-10">
        <div class="mx-auto text-center mb-5 mt-7" style="max-width: 500px;">
            <h6 class="text-primary text-uppercase">Products</h6>
            <h1 class="display-5">Perlengkapan</h1>
        </div>
        <div class="owl-carousel product-carousel px-5">
            @foreach ($products4 as $product)
            <div class="pb-5">
                <div class="product-item position-relative bg-white d-flex flex-column text-center">
                    <img class="img-fluid mb-4" src="photos/img/product-1.png" alt="">
                    <h6 class="mb-3">{{ $product->name }}</h6>
                    <h5 class="text-primary mb-0">{{ $product->price }}</h5>
                    <div class="btn-action d-flex justify-content-center">
                        <a class="btn bg-primary py-2 px-3" href=""><i class="bi bi-cart text-white"></i></a>
                        <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
            
            
          
        </div>
    </div>
</div>
@endsection

