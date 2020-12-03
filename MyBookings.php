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
    <link rel="stylesheet" href="css/booking.css" />
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
                <a class="nav-link" href="reservation.php"
                  ><i class="material-icons prefix left">arrow_back</i>BACK</a
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- ! Header End -->


    <!-- ! Receipt Start -->

    <section id="receipt">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading center">
                        <h2>Receipt</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-12">
                    <table class="table table-bordered">
                        <?php
                            
                            include('user_config/dbconfig.php');

                            $username = $_SESSION['username'];

                            $query = "SELECT * FROM `reservation` WHERE `username` = '$username'";
                            $query_run = mysqli_query($connection, $query) or die(mysqli_error($connection));
                                
                        ?>
                        <thead>
                            <tr>
                            <th colspan="2" scope="col">Receipt</th>
                            </tr>
                        </thead>
                        <?php
                    
                            if(mysqli_num_rows($query_run) > 0)
                            {
                                while($data = mysqli_fetch_assoc($query_run))
                            {
                        ?>
                        <tbody>
                            <tr>
                                <th>Reservation No.</th>
                                <td><?php $number = rand(31,10000); echo $number; ?></td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td><?php echo $_SESSION['username'] ?></td>
                            </tr>
                            <tr>
                                <th>Source</th>
                                <td><?php echo $data['source'] ?></td>
                            </tr>
                            <tr>
                                <th>Destination</th>
                                <td><?php echo $data['destination'] ?></td>
                            </tr>
                            <tr>
                                <th>Date</th>
                                <td><?php echo $data['date'] ?></td>
                            </tr>
                            <tr>
                                <th>Passenger</th>
                                <td><?php echo $data['passenger'] ?></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <a href="receipt.php?id=<?php echo $data['id']; ?>"><button type="button" class="btn btn-sucess green waves-effect waves-light">Generate</button></a>
                                </td>
                            </tr>
                            <?php
                                    }
                                }
                                else
                                {
                                    echo "No Record Found";
                                }
                                        
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- ! Receipt End -->

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
