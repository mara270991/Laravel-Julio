@extends('front.template')

@section('pageTitle', 'Estas viendo: ' . $theProduct->name)

@section('mainContent')
	<h2>Nombre del producto {{ $theProduct->name }}</h2>
	<h2>El precio: {{ $theProduct->price }}</h2>
	<h2>Breve descripción: {{ $theProduct->description }}</h2>
	<img src="/storage/images/{{ $theProduct->poster }}" width="10%">
	<h2>Categoria: {{ $theProduct->category->name }}</h2>

@endsection
