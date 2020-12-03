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
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- ! header Start -->
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
              <li class="nav-item active">
                <a class="nav-link" href="#home"
                  >HOME <span class="sr-only">(current)</span></a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#gallery">GALLERY</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">ABOUT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">CONTACT</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?php echo ($_SESSION['username']); ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item"  href="MyBookings.php">My Bookings</a>
                  <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal" href="#">Logout</a>
                </div>
              </li>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- ! Header End -->

    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you Sure You Want To Logout  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <form action="user_controller/logout.php" method="POST">
            <button type="submit" name="logout" class="btn btn-primary">Logout</button>
          </form>
      </div>
    </div>
  </div>
</div>

    <!-- ! Home Start -->
    <section id="home">
      <div class="overlay"></div>
      <div class="custom-shape-divider-bottom-1598764340">
        <svg
          data-name="Layer 1"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 1200 120"
          preserveAspectRatio="none"
        >
          <path
            d="M1200 120L0 16.48 0 0 1200 0 1200 120z"
            class="shape-fill"
          ></path>
        </svg>
      </div>
      <div class="home-intro">
        <h1>BANAS TRAVELS</h1>
        <h2>Live <span class="typing"></span></h2>
        <a href="reservation.php"waves-effect waves-light">Reservation</a>
      </div>
    </section>
    <!-- ! Home End -->

    <!-- ! GAllery Start -->
    <section id="gallery">
      <div class="conatiner">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-12">
            <div class="heading">
              <h2>GALLERY</h2>
              <p>Travelling Gallery</p>
            </div>
          </div>
        </div>
        <div class="ml-5 mr-5 row">
          <div class="col-sm-12 col-md-3 col-lg-3">
            <div class="gallery-box">
              <img src="image/surat.jpg" class="img-fluid rounded" alt="" />
              <div class="overlay-text">
                <h2 class="text">SURAT</h2>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-3 col-lg-3">
            <div class="gallery-box">
              <img src="image/Ahemdabad.jpg" class="img-fluid rounded" alt="" />
              <div class="overlay-text">
                <h2 class="text">Ahemdabad</h2>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-3 col-lg-3">
            <div class="gallery-box">
              <img src="image/baroda.jpg" class="img-fluid rounded" alt="" />
              <div class="overlay-text">
                <h2 class="text">Baroda</h2>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-3 col-lg-3">
            <div class="gallery-box">
              <img src="image/Chappi.jpg" class="img-fluid rounded" alt="" />
              <div class="overlay-text">
                <h2 class="text">Chappi</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="gallery-button col-sm-12 col-md-12 col-lg-12 col-12">
            <a href="gallery.php" class="waves-effect waves-light">View</a>
          </div>
        </div>
      </div>
    </section>
    <!-- ! GAllery End -->

    <!-- ! About Start -->
    <section id="about">
      <div class="custom-shape-divider-top-1598778162">
        <svg
          data-name="Layer 1"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 1200 120"
          preserveAspectRatio="none"
        >
          <path
            d="M1200 120L0 16.48 0 0 1200 0 1200 120z"
            class="shape-fill"
          ></path>
        </svg>
      </div>
      <div class="about-content">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-12">
              <div class="heading">
                <h2>ABOUT</h2>
                <p>Know More About Us</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 col-12">
              <div class="about-img">
                <img
                  src="image/home.jpg"
                  class="materialboxed img-fluid rounded"
                  alt="About"
                />
              </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 col-12">
              <div class="about-info">
                <h2>BANAS TRAVELS</h2>
                <p>
                  <strong>Founder:</strong> Chelabhai Prajapati <br> 
                  <strong>Co Founder:</strong> Bharat Chelabhai Prajapati <br> 
                  <strong>SINCE:</strong> 2005 <br>
                  We provide best serivce in your field we assure that our customer are full satisfied and we have more than 5000+ customers which are satisfied with our service.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ! About End -->

    <!-- ! Contact Start -->
    <section id="contact">
      <div class="custom-shape-divider-top-1598801826">
        <svg
          data-name="Layer 1"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 1200 120"
          preserveAspectRatio="none"
        >
          <path
            d="M1200 120L0 16.48 0 0 1200 0 1200 120z"
            class="shape-fill"
          ></path>
        </svg>
      </div>
      <div class="bg-box container">
        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-6 col-12">
            <div class="contact-left">
              <h2>GET IN TOUCH</h2>
              <br />
              <i class="cl material-icons left prefix">call</i>
              <p class="text-muted">+91 8108 45 0723</p>
              <i class="cl material-icons left prefix">email</i>
              <p class="text-muted">prajapatidheeraj005@gmail.com</p>
              <ul>
                <li>
                  <a href="#" class="btn-floating pulse blue tooltipped" data-position="bottom" data-tooltip="Facebook"
                    ><i class="material-icons">facebook</i></a
                  >
                </li>
                <li>
                  <a href="#" class="btn-floating pulse purple tooltipped" data-position="bottom" data-tooltip="Instagram"
                    ><i class="fab fa-instagram"></i
                  ></a>
                </li>
                <li>
                  <a href="#" class="btn-floating pulse blue tooltipped" data-position="bottom" data-tooltip="Telegram"
                    ><i class="fab fa-telegram"></i
                  ></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-6 col-12">
            <div class="contact-right">
              <h2>CONTACT ME</h2>
              <form action="user_modules/contact_us.php" method="post">
                <div class="input-field">
                  <i class="material-icons prefix">account_circle</i>
                  <input id="name" name="name" type="text" class="validate" required />
                  <label for="name">Name</label>
                </div>
                <div class="input-field">
                  <i class="material-icons prefix">email</i>
                  <input id="email" name="email" type="email" class="validate" required />
                  <label for="email">Email</label>
                </div>
                <div class="input-field">
                  <i class="material-icons prefix">subject</i>
                  <input id="subject" name="subject" type="text" class="validate" required />
                  <label for="subject">Subject</label>
                </div>
                <div class="input-field">
                  <i class="material-icons prefix">message</i>
                  <textarea
                    id="message"
                    name="message"
                    class="materialize-textarea"
                    required
                  ></textarea>
                  <label for="message">Message</label>
                </div>
                <div class="button center">
                  <button type="submit" name="submit" class="btn btn-dark waves-effect blue waves-light">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <br /><br />
    </section>
    <!-- ! Contact End -->

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
    <!-- ! Sweet Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- ! Custom JS -->
    <script src="js/script.js"></script>
  </body>
</html>