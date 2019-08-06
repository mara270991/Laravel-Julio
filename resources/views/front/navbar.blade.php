<header class="main-header">
    <input type="checkbox" id="btn-menu">
    <label for="btn-menu" class="fas fa-bars boton-menu"> </label>
    <a href="/">
      <img class="logo-menu" src="/images/logo.png" alt="logo-isabella">
      </a>
    <ul class="iconos-menu">
      <aside class="cambios">
      CAMBIOS Y DEVOLUCIONES EN TODOS NUESTROS LOCALES
      <br>

      </aside>
      <li><form class="formulario" method="get" action="/products/result/">
          <input type="text" name="word"> </li>
          <button class="submit-search" type="submit" name="button"> <i class="fas fa-search"></i></button>
          </form>
      <li><a href=#shop><span>Tu Carrito</span>  <i class="fas fa-shopping-cart"></i></a></li>
      @guest
        <li><a href=/register> <span>Registrate</span><i class="fas fa-user-plus"></i></a></li>
        <li><a href=/login> <span>ingresá</span><i class="fas fa-user"></i></a></li>
      @else
        <li><a href=/profile/{{ Auth::user()->id }}> <span>Hola {{ Auth::user()->name }}</span><i class="fas fa-user-circle"></i></a></li>
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
      <li><a href="/products ">Colección</a></li>
      <li class="submenu"><a href="#coleccion">Categorías  <i class="fas fa-angle-down"></i></a>
         <ul>
           <li><a href="/categories/1">Remeras</a></li>
           <li><a href="/categories/2">Pantalones</a></li>
           <li><a href="/categories/3">Camperas</a></li>
          <li><a href="/categories/4">New arrivals</a></li>
          <li><a href="/categories/5">Buzos</a></li>
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
