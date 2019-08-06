@extends('front.template')

@section('pageTitle', 'Estas viendo: ' . $theProduct->name)

@section('mainContent')

	<div class="descripcion-producto">
	<div class="container">
	  <div class="row">
	    <div class="col-12 col-md-9">
	      <div class="img-product">
	        <img src="/storage/images/{{ $theProduct->poster }}"  alt="Responsive image" style="width:40%">
	      </div>
	    </div>
	    <div class="col-12 col-md-3">
	      <section class="detalle-producto">
	        <h3 class="titulo-producto">{{ $theProduct->name }}</h3>
	        <hr>
	        <p class="precio-producto">{{ $theProduct->price }}</p>
	        <p class="descripcion">{{ $theProduct->description }}</p>
					<p class="descripcion">{{ $theProduct->category->name }}</p>
					<br>

						<div class="form-group">
							<label class="dar-el-color">Colores: </label>
							<p class="form-control" name="colors">
								<select name="colors[]">

									@foreach ($colors as $color)
									@if($theProduct->colors->contains($color->id))
			            <option value="{{ $color->id }} " class="eleccion-colores">{{ $color->name }}</option>
									@endif
								 @endforeach
			          </select>
								<br>
							</p>
						<br>
						</div>
						<div class="form-group">
							<label class="dar-el-color">Talles: </label>
							<p class="form-control" name="sizes">
								<select name="sizes[]">

									@foreach ($sizes as $size)
									@if($theProduct->sizes->contains($size->id))
									<option value="{{ $size->id }} " class="eleccion-colores">{{ $size->name }}</option>
									@endif
								 @endforeach
								</select>
								<br>
							</p>
						<br>
						</div>


	      </section>
	      <br>
				@if(Auth::user() &&  Auth::user()->admin == 0)
				<div class="boton">
				<a href="/products/{{ $theProduct->id }}/thanks" > COMPRAR  </a>
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
@endsection
