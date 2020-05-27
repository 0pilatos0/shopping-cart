@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1>User Profile</h1>
        <hr>
        <h2>Mijn Bestellingen</h2>
        <br><br>
        @foreach($orders as $order)
        <div class="card">
            <div class="card-header">
            <strong>Total Price: ${{ $order->cart->totalPrice }}</strong>
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                <ul class="list-group">
                    @foreach($order->cart->items as $item)
                    <li class="list-group-item"> 
                        {{ $item['item']['title'] }} || {{ $item['qty']}}x
                    <span class="badge badge-secondary">${{ $item['price'] }}</span></li>
                    @endforeach
                </ul> 
                </blockquote>
            </div>
        </div>
        <br>
       
        @endforeach
    </div>
</div>
@endsection