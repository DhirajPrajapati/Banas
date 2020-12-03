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
    <link rel="stylesheet" href="css/reservation.css" />
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

    <section id="reservation">
      <video src="video/production ID_5167998.mp4" muted loop autoplay></video>
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-12">
            <div class="form-box">
              <h2>Register Your Ticket</h2>
              <form action="user_modules/reserve.php" method="post">
                <div class="input-field col m6 s12">
                  <select name="source" required>
                    <option disabled selected>Source</option>
                    <option>Mumbai Central</option>
                    <option>Andheri</option>
                    <option>Ram Mandir</option>
                    <option>Goregaon</option>
                    <option>Malad</option>
                    <option>Borivali</option>
                    <option>Dhaisar</option>
                  </select>
                </div>
                <div class="input-field col m6 s12">
                  <select name="dest" required>
                    <option disabled selected>Destination</option>
                    <option>Surat</option>
                    <option>Ahemdabad</option>
                    <option>Baroda</option>
                    <option>Chappi</option>
                    <option>Deesa</option>
                    <option>Dhanera</option>
                    <option>Kalol</option>
                    <option>Kanodar</option>
                    <option>Mehsana</option>
                    <option>Palanpur</option>
                    <option>Sidhpur</option>
                    <option>Valsad</option>
                    <option>Vapi</option>
                  </select>
                </div>
                <div class="input-field col m6 s12">
                  <input type="text" name="date" class="datepicker" required/>
                  <label for="date">Date</label>
                </div>
                <div class="input-field col m6 s12">
                  <input type="number" name="passenger" class="number" min="1" max="10" required/>
                  <label for="passenger">No. of passenger</label>
                </div>
                <div class="button center">
                  <button type="submit" name="submit" class="btn blue waves-effect waves-light center">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

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
