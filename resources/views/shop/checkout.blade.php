@extends('layouts.master')
@section('title')
  Laravel shopping cart
@endsection
@section('content')
<div class="row">
    <div class="col-xs-20 col-sm-6 col-md-4">
        <h1>Checkout</h1>
        <h4>Your Total: ${{ $total }}</h4>
        <form action="{{ route('checkout') }}" method="post" id="checkout-form">
            <div class="row">
                <div class="form-group ">
                    <label for="name">Name</label> 
                    <input id="name" name="name" type="text" required="required" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">E-Mail voor bevestiging</label> 
                    <input id="email" name="email" type="email" required="required" class="form-control">
                </div>
                <div class="form-group">
                    <label for="address">Address</label> 
                    <input id="address" name="address" type="text" required="required" class="form-control">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="card-name">Cart Holder Name</label> 
                        <input id="card-name" name="card-name" type="text" required="required" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="card-number">Credit Card Number</label> 
                        <input id="card-number" name="card-number" type="text" required="required" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="card-expiry-month">Expiration month</label> 
                        <input id="card-expiry-month" name="card-expiry-month" type="text" required="required" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="card-expiry-year">Expiration Year</label> 
                        <input id="card-expiry-year" name="card-expiry-year" type="text" required="required" class="form-control">
                    </div>
                    <div class="form-group col-md-2">
                    <label for="card-cvc">CVC</label> 
                    <input id="card-cvc" name="card-cvc" type="text" required="required" class="form-control">
                </div> 
                </div>
                
            </div>
            {{ csrf_field()}}
            <button type="submit" class="btn btn-success">Buy now</button>
            
        </form>
    </div>
</div>
@endsection
