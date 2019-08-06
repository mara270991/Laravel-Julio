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
        <p class="gracias"> ¡Gracias por su compra {{ Auth::user()->name }} !</p>
        <h3 class="titulo-producto"> Usted compro: {{ $theProduct->name }}</h3>
        <hr>
        <p class="precio-producto-compra">Costo: {{ $theProduct->price }}</p>
        <p class="descripcion">Descripción: {{ $theProduct->description }}</p>
        <p class="descripcion">Cateogoria: {{ $theProduct->category->name }}</p>
        <p class="descripcion">  Te envíamos un correo a <b> {{ Auth::user()->email }} </b> con información sobre tu compra.</p>
        <hr>
        <p class="descripcion">Para conocer el estado de su envío haga clic <a href="http://www.sairesenvios.com.ar/tracking/?c=QZA871"><b> AQUI </b></a> </p>
        <br>
  </div>
    </div>
   </div>
     </div>

@endsection
