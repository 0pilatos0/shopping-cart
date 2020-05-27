@extends('layouts.master')
@section('title')
  Laravel shopping cart
@endsection
@section('content')
  @if(Session::has('success'))
  <div class="row">
    <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
      <div id="charge-message" class="alert alert-success">
        {{ Session::get('success')}}
      </div>
    </div>
  </div>
  @endif
  @foreach($products->chunk(3) as $productChunk)
  <div class="row">
        @foreach($productChunk as $product)
        <div class="col-xs-18 col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="{{ $product->imagePath }}" alt="">
              <div class="caption">
                <a href="{{route('product.product', ['id' => $product->id])}}"><h4>{{ $product->title }}</h4></a>
                <p class="description">{{ $product->description }}</p>
                <p>
                    <div ><h5 class="price">{{ $product->price }}$</h5></div>
                    <a href="{{ route('product.addToCart', ['id' => $product->id])}}" class="btn btn-success" role="button">Add to Cart</a></p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
  @endforeach
@endsection
