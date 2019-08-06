@extends('front.template')

@section('pageTitle', 'Estas viendo: ' . $categories->name)

@section('mainContent')

<div class="row">

  @foreach ($productsCat as $product)
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
        <a class="volver "href="/"> VOLVER</a>
        </div>

</div>
@endsection
