<header class="main-header">
    <input type="checkbox" id="btn-menu">
    <label for="btn-menu" class="fas fa-bars boton-menu"> </label>
    <a href="/">
      <img class="logo-menu" src="../images/logo.png" alt="logo-isabella">
      </a>
    <ul class="iconos-menu">
      <aside class="cambios">
      CAMBIOS Y DEVOLUCIONES EN TODOS NUESTROS LOCALES
      <br>
      <!-- @if (Auth::user())
      <h1>{{ Auth::user()->name }}</h1>
      <img src="/storage/images/{{ Auth::user()->avatar }}" width="10">
      @endif -->
      </aside>
      <li><form class="formulario" method="get" action="procesar.php">
          <input type="text" name="termino_busqueda"> </li>
          <button class="submit-search" type="submit" name="button"> <i class="fas fa-search"></i></button>
          </form>
      <li><a href=#shop><span>Tu Carrito</span>  <i class="fas fa-shopping-cart"></i></a></li>
      @guest
        <li><a href=register> <span>Registrate</span><i class="fas fa-user-plus"></i></a></li>
        <li><a href=login> <span>ingresá</span><i class="fas fa-user"></i></a></li>
      @else
        <li><a href=profile> <span>Hola {{ Auth::user()->name }}</span><i class="fas fa-user-circle"></i></a></li>
        <li><a class="dropdown-item" href="{{ route('logout') }}"
            onclick="
            event.preventDefault();
            document.getElementById('logout-form').submit();">
            <span>Salir</span><i class="fas fa-sign-out-alt"></i>
        </a>
        </li>

        <form class="formulario" id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

      @endguest
    </ul>

  <nav class="menu">
    <ul >
      <li><a href="newarrivals">New arrivals</a></li>
      <li class="submenu"><a href="#coleccion">Colección  <i class="fas fa-angle-down"></i></a>
         <ul>
          <li><a href="#pantalones">Pantalones</a></li>
          <li><a href="#buzos-camperas">Buzos - Camperas</a></li>
          <li><a href="#remeras">Remeras</a></li>
          <li><a href="#sale">Sale</a></li>
        </ul>
      </li>
      <li><a href="#accesorios">Accesorios</a></li>
      <li><a href="#sprin-summer">Spring/Summer</a></li>
      <li><a href="#lookbook">Lookbook</a></li>
      <li><a href="#contacto">Contacto</a></li>
      <div class="redes-nav">
        <li><a href='http://www.twitter.com'><i class="fab fa-twitter"></i></a> </li>
        <li><a href='http://www.facebook.com/brakeupoficial'><i class="fab fa-facebook"></i></a></li>
        <li><a href='http://www.instagram.com/brakeupoficial'><i class="fab fa-instagram"></i></a></li>
      </div>
    </ul>
  </nav>


</header>
