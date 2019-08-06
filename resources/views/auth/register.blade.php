@extends('front.template')
@section('pageTitle', 'Registro')
@yield('content')
@section('content')
<div class="container formulario-registro">
    <div class="row justify-content-center">
        <div class="col-12">

                    <form id='form' class="login" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-3 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-9">
                                <input
                                id="name"
                                type="text"
                                class="form-control"
                                name="name"
                                value="{{ old('name') }}"
                                required autocomplete="name"
                                autofocus
                                data-nombre='Nombre'
                                >
                                <div class="invalid-feedback">

                      					</div>

                                @error('name')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="email" class="col-3 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-9">
                                <input
                                id="email"
                                type="email"
                                class="form-control"
                                name="email"
                                value="{{ old('email') }}"
                                required autocomplete="email"
                                data-nombre='Email'
                                >

                                <div class="invalid-feedback">

                      					</div>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="avatar" class="col-3 col-form-label text-md-right">{{ __('Subí tu imagen') }}</label>

                            <div class="col-9">
                                <input
                                id="avatar"
                                type="file"
                                class="form-control"
                                name="avatar"
                                value="{{ old('avatar') }}"
                                required autocomplete="avatar"
                                data-nombre="imagen"
                                >

                                <div class="invalid-feedback">

                                </div>
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="password" class="col-3 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-9">
                                <input
                                id="password"
                                type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password"
                                required autocomplete="new-password"
                                data-nombre="Contraseña"
                                >

                                <div class="invalid-feedback">

                                </div>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-3 col-form-label text-md-right">{{ __('Confirma Contraseña') }}</label>

                            <div class="col-9">
                                <input
                                id="password-confirm"
                                type="password"
                                class="form-control"
                                name="password_confirmation"
                                required autocomplete="new-password"
                                data-nombre="Confirmar contraseña"
                                >

                                <div class="invalid-feedback">

                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="country" class="col-3 col-form-label text-md-right">País</label>

                            <div class="col-9">
                              <select
                                class="form-control"
                                name="country"
                                id="country"
                                data-nombre="País"
                              >
                                <option value="">Elegí un país</option>
                              </select>

                              <div class="invalid-feedback">

                              </div>

                                @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-group row" style="display: none;">
                            <label for="country" class="col-3 col-form-label text-md-right">Provincia:</label>

                            <div class="col-9">
                              <select
                                class="form-control"
                                name="city"
                                id="city"
                                data-nombre="Provincia"
                              >
                                <option value="">Elegí una provincia</option>
                              </select>

                              <div class="invalid-feedback">

                              </div>
                                @error('provincia')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Registrate') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="col-md-6 offset-md-4">
                      <a class="volver" href="/"> <span><< Home</span> </a>
                    </div>



        </div>
    </div>
</div>
<script src="/js/fetch.js"></script>
<script src="/js/validateUsers.js"></script>
@endsection
