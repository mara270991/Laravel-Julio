@extends('front.template')

@section('pageTitle', 'Página de inicio')

@section('mainContent')
<div class="home">
  <div class="row">
    <div class="col-12">
      <div class="home-slider">
        <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="images/foto-01.jpg" alt="">
        </div>

        <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="images/slider-01.jpg" alt="">

        </div>

        <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                      <img src="images/slider-02.jpg" alt="">

        </div>

                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                    <br>

                    <!-- The dots/circles -->
                    <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                    </div>

      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-3 col-md-6 col-xs-12">
      <div class="home-seccion">
        <a class="imagen-home" href="/categories/3">
          <img class="home-seccion-img"src="images/foto-05.jpg" alt="newarrivals">
        </a>
          <h2 class="home-title-seccion"> CAMPERAS </h2>

    </div>
    </div>
    <div class="col-lg-3 col-md-6 col-xs-12">
      <div class="home-seccion">
        <a class="imagen-home" href="/categories/2">
          <img class="home-seccion-img" src="images/foto-06.jpg" alt="lookbook">
          </a>
          <h2 class="home-title-seccion"> PANTALONES </h2>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-xs-12">
      <div class="home-seccion">
        <a class="imagen-home" href="/categories/1">
          <img class="home-seccion-img" src="images/foto-07.jpg" alt="coleccion">
            </a>
          <h2 class="home-title-seccion"> REMERAS </h2>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-xs-12">
      <div class="home-seccion">
        <a class="imagen-home" href="/categories/5">
        <img class="home-seccion-img" src="images/foto-08.jpg" alt="accesorios">
          </a>
        <h2 class="home-title-seccion"> BUZOS </h2>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="hastag">
        <a href="/categories/4" class="title-hastag"> #AlwaysANewlook</a>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-4 col-md-4 col-xs-12">
      <div class="home-socialmedia">
        <a class="imagen-home" href="https://www.facebook.com/ ">
          <img src="images/foto-02.jpg" alt="">
          </a>
          <img class="social-icon" src="images/social-10.png" alt="">
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-xs-12">

      <div class="home-socialmedia">
    <a class="imagen-home" href="https://www.instagram.com/">
          <img src="images/foto-03.jpg" alt="">
          </a>
            <img class="social-icon" src="images/social-11.png" alt="">
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-xs-12">
      <div class="home-socialmedia">
        <a class="imagen-home" href="https://www.twitter.com">
          <img src="images/foto-04.jpg" alt="">
          </a>
            <img class="social-icon" src="images/social-09.png" alt="">
      </div>
    </div>
  </div>
</div>

<script src="/js/home.js"></script>
@endsection
