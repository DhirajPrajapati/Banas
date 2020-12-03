<?php

error_reporting(0);
session_start();

function Reservation($source,$dest,$date,$passenger){
    include('../user_config/dbconfig.php');
    $username = $_SESSION['username'];
    $query = "INSERT INTO `reservation`(`username`, `source`, `destination`, `date`, `passenger`) VALUES ('$username','$source','$dest','$date','$passenger')";
    $run = mysqli_query($connection,$query);
    return($run);
}

?>