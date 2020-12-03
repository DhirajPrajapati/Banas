<?php

include('user_config/dbconfig.php');
// include('user_config/security.php');

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
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <section id="login">
      <div class="container">
        <div class="row">
          <div
            class="d-flex justify-content-center col-sm-12 col-md-12 col-lg-12 col-12"
          >
            <div class="form center">
              <h2>Forget Password</h2><br><br>
              <form action="user_modules/forget_pass.php" method="post">
                <div class="input-field">
                  <i class="material-icons prefix">email</i>
                  <input id="email" name="email" type="email" class="white-text validate" />
                  <label for="email" class="white-text">Email</label>
                </div>
                <!-- <div class="input-field">
                  <input id="user" name="user" type="hidden"/>
                </div> -->
                <div class="input-field">
                  <button
                    type="submit"
                    id="submit"
                    class="btn waves-effect waves-light blue"
                    name="submit"
                  >
                    Submit
                  </button>
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
    <!-- ! Sweet Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- ! Custom JS -->
    <script src="js/script.js"></script>
  </body>
</html>