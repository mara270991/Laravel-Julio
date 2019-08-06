@extends('front.template')

@section('pageTitle', 'Perfil del usuario')

@section('mainContent')
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <br>
      @if (Auth::user())
      <h1>Hola {{ Auth::user()->name }} !</h1>
      <img src="/storage/images/{{ Auth::user()->avatar }}" width="10">
      @endif
      <br><br>
      <a href="/profile/{{$user->id}}/edit" class="btn btn-success">Editá tus datos</a>

      <hr>
    </div>
  </div>
</div>
@endsection
