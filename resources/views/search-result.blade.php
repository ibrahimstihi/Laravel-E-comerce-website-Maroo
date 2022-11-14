@extends('layouts.layout')
@section('content')
   

   <div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
        <span class="bg-secondary pr-6">({{$products->count()}}) result for '{{ request()->input('query')}}'</span>
    </h2>
    <div class="row px-xl-5">
@foreach ($products as $product)
    <div class="col-lg-3 col-md-4 col-sm-6 pb-1" href="/">
        <div class="product-item bg-light mb-4">
            <div class="product-img position-relative overflow-hidden">
                <?php
                  foreach ($product->product_images as $image)
                      $imagePath = $image
                ?>                        
                <img class="img-fluid w-100" src="{{ asset($imagePath->image) }}" alt="" class="img-fluid rounded">
                <div class="product-action"> 
                    <a class="btn btn-outline-dark btn-square" href="{{ route('product.show',$product) }}"><i class="fa-solid fa-camera"></i></a>
                </div>
            </div>
            <div class="text-center py-4">
                <a class="h6 text-decoration-none text-truncate" href="{{ route('product.show',$product) }}">{{ $product->title }}</a>
                <div class="d-flex align-items-center justify-content-center mt-2">
                    <h5>{{ $product->price }}</h5>
                    <h6 class="text-muted ml-2">
                        @if($product->old_price!=0)
                           <del>{{ $product->old_price }}</del>
                        @endif
                    </h6>
                </div>
            </div>
        </div>
    </div>
@endforeach
</div>
@endsection