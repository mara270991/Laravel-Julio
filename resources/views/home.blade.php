@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Has ingresado a tu cuenta!
                    {{ Auth::user()->name }}
                    <img src="/storage/images/{{ Auth::user()->avatar }}" width="100">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
