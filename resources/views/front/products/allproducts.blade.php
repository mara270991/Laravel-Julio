@extends('front.template')

@section('pageTitle', 'Listado de productos')

@section('mainContent')
<br>

	@if(Auth::user() &&  Auth::user()->admin == 1)
	<div class="listado">Listado de productos</div>
	<p class="cant-productos">En nuestra base de datos hay un total de: {{ $totalProducts }} de productos.</p>
	@endif



	@if(Auth::user() &&  Auth::user()->admin == 1)
	<div class="boton-crear-centrado">
	<a href="/products/create" class="boton-crear">CREAR PRODUCTO</a>
	</div>
	@endif


        <div class="row">

          @foreach ($products as $product)
            <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="products-general">
                <img src="/storage/images/{{ $product->poster }}" width="50%">
                <h3 class="detalle-title-product"> {{ $product->name }}  </h3>
                <h3 class="price"> ${{ $product->price }} </h3>

								@if(Auth::user() &&  Auth::user()->admin == 1)
                <div class="boton">
                <a href="/products/{{ $product->id }}/edit" > EDITAR  </a>
                </div>

                <form action="/products/{{ $product->id }}" method="post">
            			@csrf
            			{{ method_field('delete') }}

                  	<button class="boton-borrar" type="submit">BORRAR</button>
									</form>
								@else

								<div class="boton">
                <a href="/products/{{ $product->id }}" > VER PRODUCTO  </a>
                </div>

								@endif

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
