@extends('layouts.master')
@section('title')
  Laravel shopping cart
@endsection
@section('content')
    @if(Session::has('cart'))
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <ul class="list-group">
                @foreach($products as $product)
                    <li class="list-group-item">
                        <span class="badge badge-primary">{{ $product['qty'] }}x</span>
                        <strong>{{ $product['item']['title'] }}</strong>
                        <span class="badge badge-secondary ">${{ $product['price'] }}</span>
                        <div class="btn-group float-right">
                        <button type="button" class="btn btn-outline-primary dropdown-toggle " data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Action
                        </button>
                        <div class="dropdown-menu ">
                            <a class="dropdown-item" href="{{ route('product.reduceByOne', ['id' => $product['item']['id']]) }}">Verwijder 1</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('product.remove', ['id' => $product['item']['id']]) }}">Verwijder alle</a>
                        </div>
                        </div>
                    </li>
                @endforeach
                </ul>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <strong>Total: {{$totalPrice}}</strong>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <a href="{{route('checkout')}}" type="button" class="btn btn-success">Afrekenen</a>
            </div>
        </div>
    @else
    <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h2>Geen items in winkelwagen</h2>
            </div>
        </div>
    @endif
@endsection
