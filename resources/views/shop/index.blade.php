@extends('layouts.master')
@section('title')
  Laravel shopping cart
@endsection
@section('content')
<div class="alert alert-dismissible fade show alert-danger" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  <strong>Disclaimer:</strong> Dit is een schoolproject, Ik ben niet verantwoordelijk voor alle mogelijke beveiligings fouten in deze webshop.
</div>

<div class="jumbotron">
  <h1 class="display-3">Mijn Webshop</h1>
  <p class="lead">dit is mijn super coole webshop waar ik producten verkoop voor een voledig geloofwaardige prijs, en dus totaal geen mensen oplicht</p>
  <hr class="my-4">
  <p>Mochten er fouten zijn laat het me weten</p>
  
  <p class="lead">
    <a class="btn btn-primary" href="{{ route('product.shop', ['id' => 1])}}" role="button">Lekker winkelen</a>
  </p>
</div>


@endsection
