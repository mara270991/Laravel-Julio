@extends('front.template')

@section('pageTitle', 'Listado de productos')

@section('mainContent')
<br>
	<div class="listado">Listado de productos</div>

	@auth
		<h2>Hola }}</h2>
	@endauth

	<p class="cant-productos">En nuestra base de datos hay un total de: {{ $totalProducts }} de productos.</p>

	<div class="boton-crear-centrado">


	<a href="/products/create" class="boton-crear">CREAR PRODUCTO</a>

	</div>

        <div class="row">

          @foreach ($products as $product)
            <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="products-general">
                <img src="/storage/images/{{ $product->poster }}" width="50%">
                <h3 class="detalle-title-product"> {{ $product->name }}  </h3>
                <h3 class="price"> ${{ $product->price }} </h3>

                <div class="boton">
                <a href="/products/{{ $product->id }}/edit" > EDITAR  </a>
                </div>

                <form action="/products/{{ $product->id }}" method="post">
            			@csrf
            			{{ method_field('delete') }}

                  	<button class="boton-borrar" type="submit">BORRAR</button>

                </form>
                  </div>
                  </div>
                  @endforeach

        </div>
        <br>
        <div class="">
          {{ $products->links() }}
        </div>





	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection
