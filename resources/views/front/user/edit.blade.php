@extends('front.template')

@section('pageTitle', 'Editá tus datos')

@section('mainContent')

	<h2 class="listado">Editá tus datos</h2>

	<form  action="/profile/{{ $userToEdit->id }}"  method="post" enctype="multipart/form-data">
		@csrf
    {{ method_field('put') }}
		<div class="row" >
			<div class="col-12">
				<div class="form-group">
					<label class="imput-create">Nombre:</label>
							<div class="centrado">
							<input
								type="text"
								name="name"
								value="{{ old('name', $userToEdit->name) }}"
								class="form-control"
							>
							@error('name')
								<span class="text-danger">
									{{ $message }}
								</span>
							@enderror
							</div>
				</div>
				<br>
			</div>

      <br>

						<div class="col-12">
							<div class="form-group">
								<label class="imput-create">Subí una imagen</label>
								<div class="centrado">
								<input
								 type="file"
								 name="avatar"
								 class="form-control"
								 >
								 @error('image')
		 							<span class="text-danger">
		 								{{ $message }}
		 							</span>
		 						@enderror
								</div>
							</div>
							<br>
						</div>

						<div class="col-12">
						<div class="form-group" >
								<label for="country" class="imput-create">País</label>
								<div class="centrado">
									<select
										class="form-control @error('country') is-invalid @enderror"
										name="country"
										id="country"
									>
										<option value="">Elegí un país</option>
									</select>

										@error('country')
												<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
												</span>
										@enderror
										</div>
										</div>
								</div>

						<br>

						<div class="col-12">
								<div class="form-group" style="display: none;" >
								<label for="country" class="imput-create">Provincia:</label>
								<div class="centrado">
									<select
										class="centrado form-control @error('provincia') is-invalid @enderror"
										name="city"
										id="city"
									>
										<option value="">Elegí una provincia</option>
									</select>

										@error('provincia')
												<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
												</span>
										@enderror
										</div>
										</div>
								</div>
							</div>

							<br>

							<div class="col-12">
								<div class="boton-crear-centrado">
								<button type="submit" class="boton-crear">Guardar tus datos</button>
							</div>
						</div>
				</div>
	</form>

<script src="/js/fetch.js"></script>
@endsection
