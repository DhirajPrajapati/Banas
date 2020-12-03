<?php

include('../user_config/dbconfig.php');

error_reporting(0);

function contact_us($name,$email,$subject,$message){
    include('../user_config/dbconfig.php');
    $query = "INSERT INTO `contact`(`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')";
    $run = mysqli_query($connection,$query);
    return($run);
}


?>