@extends('front.template')

@section('pageTitle', 'Gracias por su compra')

@section('mainContent')


<div class="descripcion-producto">
<div class="container">
  <div class="row">
    <div class="col-12 col-md-9">
      <div class="img-product">
        <img src="/storage/images/{{ $theProduct->poster }}"  alt="Responsive image" style="width:40%">
      </div>
    </div>
    <div class="col-12 col-md-3">
      <section class="detalle-producto">
        <p class="gracias"> ¡Gracias por su compra!</p>
        <h3 class="titulo-producto">{{ $theProduct->name }}</h3>
        <hr>
        <p class="precio-producto-compra">{{ $theProduct->price }}</p>
        <p class="descripcion">{{ $theProduct->description }}</p>
        <p class="descripcion">{{ $theProduct->category->name }}</p>
        <br>
  </div>
    </div>
   </div>
     </div>

@endsection
