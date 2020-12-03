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
    <section id="log-reg">
      <div class="container">
        <div class="row">
          <div
            class="d-flex justify-content-center col-sm-12 col-md-12 col-lg-12 col-12"
          >
            <div class="box center">
              <h2>REGISTER</h2>
              <form action="user_modules/user_reg.php" method="post">
                <div class="input-field">
                  <i class="material-icons prefix">account_circle</i>
                  <input id="u_name" name="name" type="text" class="white-text validate" />
                  <label for="u_name" class="white-text">Username</label>
                </div>
                <div class="input-field">
                  <i class="material-icons prefix">email</i>
                  <input id="email" name="email" type="email" class="white-text validate" />
                  <label for="email" class="white-text">Email</label>
                </div>
                <div class="input-field">
                  <i class="material-icons prefix">lock</i>
                  <input
                    id="password"
                    name="password"
                    type="password"
                    class="white-text validate"
                  />
                  <label for="password" class="white-text">Password</label>
                </div>
                <div class="input-field">
                  <button
                    type="submit"
                    class="btn waves-effect waves-light blue"
                    name="submit"
                  >
                    Submit
                  </button>
                </div>
              </form>
              <p>Already have an Account? <a href="login.php">Login</a></p>
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
