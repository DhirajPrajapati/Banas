<?php

error_reporting(0);

function user_login($email,$password){
    include('../user_config/dbconfig.php');
    $query = "SELECT * FROM `user` WHERE `email`='$email' AND `password`='$password'";
    $run = mysqli_query($connection,$query);

    if ($run==1) {
        $data=mysqli_fetch_assoc($run);
        $res = $data;
        }
        return($res); 
}


?>