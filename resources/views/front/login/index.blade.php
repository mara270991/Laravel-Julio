@include('front.link')
@section('pageTitle', 'Registro')

<div class="formulario-login">

  <form class="login" method="post">
    <img class="logoform"src="images/logo.png" alt="">
    <br>
    <br>
    <label for=""> Usuario: <span class="invalid-feedback"> </span> </label>
    <br>
    <input
    type="text"
    name="user"
    value="">
    <br>
    <label for=""> Email: <span class="invalid-feedback"> </span> </label>
    <br>
    <input
    type="text"
    name="email"
    value="">
    <br>
    <label for=""> Contraseña: <span class="invalid-feedback"></span></label>
    <br>
    <input
    type="password"
    name="password"
    value="">
    <hr>
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="rememberUser">
      Recordarme
    </label>
    <br>
    <button type="submit" class="btn btn-success"><b>Ingresar</b></button>
    <br>
    <br>
    <a href="login-registro.php" class="registro"> Si no estas regristado, creá un usuario aquí </a>
    <br>
    <br>
    <a class="volver" href="index"> <span><< Home</span> </a>
  </form>

    </div>
    </div>
