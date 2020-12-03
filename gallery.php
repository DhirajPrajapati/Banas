<?php

session_start();
include('user_config/security.php');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Banas ~ Live To Travel</title>
    <link rel="icon" href="logo/logo.png" type="icon" />
    <!-- ! font awesome -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
      integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
      crossorigin="anonymous"
    />
    <!-- ! Import Google Icon Font-->
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <!-- ! Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- ! Materialize CSS -->
    <link rel="stylesheet" href="css/materialize.css" />
    <!-- ! Style CSS -->
    <link rel="stylesheet" href="css/Gallery.css" />
  </head>
  <body>
    <!-- ! Header Start -->
    <header>
      <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">BANAS</a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php"
                  ><i class="material-icons prefix left">arrow_back</i>BACK</a
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- ! Header End -->

    <!-- ! Gallery Start -->
    <section id="gallery">
      <div class="container">
        <div class="section"><br><br><br>
          <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4 col-12">
              <div class="gallery-box">
                <img src="image/surat.jpg" class="img-fluid rounded" alt="" />
                <div class="overlay-text">
                  <h2 class="text">SURAT</h2>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 col-12">
              <div class="gallery-box">
                <img src="image/Ahemdabad.jpg" class="img-fluid rounded" alt="" />
                <div class="overlay-text">
                  <h2 class="text">Ahemdabad</h2>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 col-12">
              <div class="gallery-box">
                <img src="image/baroda.jpg" class="img-fluid rounded" alt="" />
                <div class="overlay-text">
                  <h2 class="text">baroda</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4 col-12">
              <div class="gallery-box">
                <img src="image/Chappi.jpg" class="img-fluid rounded" alt="" />
                <div class="overlay-text">
                  <h2 class="text">Chappi</h2>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 col-12">
              <div class="gallery-box">
                <img src="image/Deesa.jpg" class="img-fluid rounded" alt="" />
                <div class="overlay-text">
                  <h2 class="text">Dessa</h2>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 col-12">
              <div class="gallery-box">
                <img src="image/Dhanera.jpg" class="img-fluid rounded" alt="" />
                <div class="overlay-text">
                  <h2 class="text">Dhanera</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4 col-12">
              <div class="gallery-box">
                <img src="image/Kalol.jpg" class="img-fluid rounded" alt="" />
                <div class="overlay-text">
                  <h2 class="text">Kalol</h2>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 col-12">
              <div class="gallery-box">
                <img src="image/Kanodar.jpg" class="img-fluid rounded" alt="" />
                <div class="overlay-text">
                  <h2 class="text">Kanodar</h2>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 col-12">
              <div class="gallery-box">
                <img src="image/Mehsana.jpg" class="img-fluid rounded" alt="" />
                <div class="overlay-text">
                  <h2 class="text">Mehsana</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4 col-12">
              <div class="gallery-box">
                <img src="image/palanpur.jpg" class="img-fluid rounded" alt="" />
                <div class="overlay-text">
                  <h2 class="text">palanpur</h2>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 col-12">
              <div class="gallery-box">
                <img src="image/Sidhpur.jpg" class="img-fluid rounded" alt="" />
                <div class="overlay-text">
                  <h2 class="text">Sidhpur</h2>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 col-12">
              <div class="gallery-box">
                <img src="image/valsad.jpg" class="img-fluid rounded" alt="" />
                <div class="overlay-text">
                  <h2 class="text">valsad</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ! Gallery End -->

        <!-- ! Footer Start -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-12">
            <div class="footer-content">
              <h4>BANAS TRAVELS &copy;</h4>
              <h5>All Rights Reserved</h5>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- ! Footer End -->


    <!-- ! jQuery JS -->
    <script src="js/jquery-3.4.1.js"></script>
    <!-- ! Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- ! Materialize JS -->
    <script src="js/materialize.min.js"></script>
    <!-- ! Gsap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js"></script>
    <!-- ! Typed JS -->
    <script src="js/typed.min.js"></script>
    <!-- ! Custom JS -->
    <script src="js/script.js"></script>
  </body>
</html>
