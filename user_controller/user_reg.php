<?php

include('../user_config/dbconfig.php');

error_reporting(0);

function user_reg($name,$email,$password){
    include('../user_config/dbconfig.php');
    $query = "INSERT INTO `user`(`username`, `email`, `password`) VALUES ('$name','$email','$password')";
    $run = mysqli_query($connection,$query);
    return($run);
}


?>