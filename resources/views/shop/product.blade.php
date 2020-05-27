@extends('layouts.master')
@section('title')
  Laravel shopping cart
@endsection
@section('content')
        @foreach($products as $product)
        <div class="jumbotron">
            <a href="{{ route('product.shop')}}">back</a>
            <h1 class="display-3">{{ $product->title }}</h1>
            <img src="{{ $product->imagePath }}" alt="">
            <p class="lead">{{ $product->description }}</p>
            <hr class="my-4">
            <div >
                <h5 class="price">{{ $product->price }}$</h5>
            </div>
            <p class="lead">
            <a href="{{ route('product.addToCart', ['id' => $product->id])}}" class="btn btn-success" role="button">Add to Cart</a>
            </p>
        </div>

        @endforeach
@endsection
