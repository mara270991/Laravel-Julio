@include('front.link')
@section('pageTitle', 'Registro')

<div class="fondo">
    <div class="row">
        <div class="col-lg-8 col-md-12">


            <div class="formulario-registro">
                <form class="login"  method="post" enctype="multipart/form-data" >
                    <img class="logoform"src="images/logo.png" alt="logo-isabella">

                    <br>
                    <label for=""> Usuario: <span class="invalid-feedback"> </span> </label>
                    <br>
                    <input
                    type="text"
                    name="user"
                    value="">
                    <br>
                    <label for=""> Nombre Completo: <span class="invalid-feedback"> </span> </label>
                    <br>
                    <input
                    type="text"
                    name="name"
                    value="">
                    <br>
                    <label> Pais de Nacimiento:</label>
                    <br>
                    <select name="country">
                        <option value="">Elegí un país</option>

                          <option value=""

                          </option>

                    </select>
                    <div class="invalid-feedback">

                      </div>

                    <hr>
                    <br>
                    <label for=""> Email: <span class="invalid-feedback"> </span></label>
                    <br>
                    <input
                    type="email"
                    name="email"
                    value="">
                    <br>
                    <label for=""> Confirmación de Email:<span class="invalid-feedback"> </span> </label>
                    <br>
                    <input
                    type="email"
                    name="emailConfirmation"
                    value="">
                    <br>
                    <label for=""> Contraseña:<span class="invalid-feedback"> </span> </label>
                    <br>
                    <input
                    type="password"
                    name="password"
                    value="">
                    <br>
                    <label for=""> Confirmacion de Contraseña:<span class="invalid-feedback"> </span> </label>
                    <br>
                    <input
                    type="password"
                    name="rePassword"
                    value="">
                    <br>
                    <br>
                    <label>Subí tu imagen de perfil <span class="invalid-feedback"></span> </label>
                    <br>
                    <input
                    class"examinar"
                    type="file"
                    name="avatar" >
                    <br>
                    <hr>
                    <button
                    type="submit"
                    class="btn btn-success">Registrate</button>
                    <br>

                    <a class="volver" href="index"> <span><< Home</span> </a>

              </form>
            </div>
          </div>
          <div class="col-4 ">
                  <img class="imagen-registro" src="images/imagen-registro-02.jpg" alt="">
          </div>
      </div>
    </div>
