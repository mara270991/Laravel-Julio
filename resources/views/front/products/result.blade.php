@extends('front.template')

@section('pageTitle', 'Listado de productos')

@section('mainContent')



@forelse ($products as $product)
  <div class="descripcion-producto">
	<div class="container">
	  <div class="row">
	    <div class="col-12 col-md-9">
	      <div class="img-product">
	        <img src="/storage/images/{{ $product->poster }}"  alt="Responsive image" style="width:40%">
	      </div>
	    </div>
	    <div class="col-12 col-md-3">
	      <section class="detalle-producto">
	        <h3 class="titulo-producto">{{ $product->name }}</h3>
	        <hr>
	        <p class="precio-producto">{{ $product->price }}</p>
	        <p class="descripcion">{{ $product->description }}</p>
					<p class="descripcion">{{ $product->category->name }}</p>
					<br>


	      </section>
	      <br>
				@if(Auth::user() &&  Auth::user()->admin == 0)
				<div class="boton">
				<a href="/products/{{ $product->id }}/thanks" > COMPRAR  </a>
				</div>
				@else
				<div class="boton">
				<a href="/login" > COMPRAR  </a>
				</div>
				@endif
	    </div>
	  </div>
	</div>
	<a class="volver "href="/"> VOLVER </a>
	</div>
  @empty
  <br>
  <div class="detalle-producto">No hay resultados</div>
  @endforelse
@endsection
