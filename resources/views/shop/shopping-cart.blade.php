@extends('layouts.master')
@section('title')
  Laravel shopping cart
@endsection
@section('content')
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Winkelwagen</h1>
     </div>
</section>
    @if(Session::has('cart'))
<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Product</th>
                            <th scope="col">Available</th>
                            <th scope="col" class="text-center">Quantity</th>
                            <th scope="col" class="text-right">Price</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                            <td>{{ $product['item']['title'] }} </td>
                            <td>In stock</td>
                            <td class="text-right">{{ $product['qty'] }}</td>
                            <td class="text-right">{{ $product['price'] }} €</td>
                            <td class="text-right">
                                <a class="btn btn-sm btn-success" href="{{ route('product.increaseByOne', ['id' => $product['item']['id']]) }}" ><i class="fas fa-arrow-up"></i> </a>
                                <a class="btn btn-sm btn-danger" href="{{ route('product.reduceByOne', ['id' => $product['item']['id']]) }}"><i class="fas fa-arrow-down"></i> </a> 
                                <a class="btn btn-sm btn-danger" href="{{ route('product.remove', ['id' => $product['item']['id']]) }}"><i class="fa fa-trash"></i> </a> 
                            </td>

                        </tr>
                    @endforeach

                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Total</strong></td>
                            <td class="text-right"><strong>{{$totalPrice}} €</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <a class="btn btn-lg btn-block btn-light" href="{{ route('product.shop')}}">Continue Shopping</a>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <a class="btn btn-lg btn-block btn-success " href="{{ route('checkout') }}">Checkout</a>
                </div>
            </div>
        </div>
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
