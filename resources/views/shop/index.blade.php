@extends('layouts.master')
@section('title')
  Laravel shopping cart
@endsection
@section('content')
  @foreach($products->chunk(3) as $productChunk)
  <div class="row">
        @foreach($productChunk as $product)
        <div class="col-xs-18 col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="{{ $product->imagePath }}" alt="">
              <div class="caption">
                <h4>{{ $product->title }}</h4>
                <p class="description">{{ $product->description }}</p>
                <p>
                    <div ><h5 class="price">{{ $product->price }}$</h5></div>
                    <a href="#" class="btn btn-success" role="button">Add to Cart</a></p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
  @endforeach
@endsection
