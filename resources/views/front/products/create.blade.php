@extends('front.template')

@section('pageTitle', 'Crear un producto')

@section('mainContent')
	<p class="listado">Formulario para crear productos</p>

	<div class="container">



	<form  action="/products" method="post" enctype="multipart/form-data">
		@csrf
		<div class="row" >
			<div class="col-12">
				<div class="form-group">
						<label class="imput-create">Nombre del producto:</label>

						<div class="centrado">
					<input
						type="text"
						name="name"
						value="{{ $errors->has('name') ? null : old('name') }}"
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
					<label class="imput-create">Descripción:</label>

					<div class="centrado">
					<input
						type="text"
						name="description"
						value="{{ $errors->has('description') ? null : old('description') }}"
						class="form-control"
					>
					@error('description')
						<span class="text-danger">
							{{ $message }}
						</span>
					@enderror
					</div>
				</div>
				<br>
			</div>



        <div class="col-12">
          <div class="form-group">
						  <label  class="imput-create">Precio: </label>

						<div class="centrado">
            <input
              type="text"
              name="price"
              value="{{ $errors->has('price') ? null : old('price') }}"
              class="form-control"
            >
						@error('price')
							<span class="text-danger">
								{{ $message }}
							</span>
						@enderror
						</div>
					</div>
					<br>
				</div>
						<div class="col-12">
								<label class="imput-create">Subí una imagen:</label>

							<div class="form-group">
								<div class="centrado">
								<input
								 type="file"
								 name="poster"
								 class="form-control"
								 >
								 @error('poster')
		 							<span class="text-danger">
		 								{{ $message }}
		 							</span>
		 						@enderror
							</div>
							</div>
							<br>
						</div>


          <div class="col-12">
            <div class="form-group">
							<label class="imput-create">Colores: </label>

								<div class="centrado">

							@error('colors')
							 <span class="text-danger">
								 {{ $message }}
							 </span>
						 @enderror
              <p class="form-control" name="colors">
                @foreach ($colors as $color)
                  <input type="checkbox" name="colors[]" value="{{ $color->id }}">{{ $color->name }}

								@endforeach
								<br>
              </p>
							  </div>
            </div>
            <br>
            </div>

						<div class="col-12">
	            <div class="form-group">
	              <label class="imput-create">Talles: </label>

								<div class="centrado">
								@error('sizes')
								 <span class="text-danger">
									 {{ $message }}
								 </span>
							 @enderror
	              <p class="form-control" name="sizes">
	                @foreach ($sizes as $size)
	                  <input  type="checkbox" name="sizes[]" value="{{ $size->id }}">{{ $size->name }}
	                @endforeach
	              </p>
	            </div>
							 </div>
							<br>
							</div>

							<div class="col-12">
								<div class="form-group">
									<label class="imput-create">Categorias: </label>
								<br>
									<div class="centrado">
									<select class="form-control" name="categories">
										@foreach ($categories as $category)
										<option value="{{ $category->id }}">{{ $category->name }}</option>
										@endforeach
									</select>
								</div>
								</div>
	            <br>
	            </div>
								</div>
								<div class="boton-crear-centrado">
							<div class="col-12">

								<button type="submit" class="boton-crear">Guardar producto</button>

							</div>
							</div>
							<br>
							<br>


	</form>

		</div>


@endsection
