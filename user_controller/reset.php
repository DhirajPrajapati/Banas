<?php

error_reporting(0);

include('../user_config/dbconfig.php');

function FORGET_PASS($email,$new){
    include '../user_config/dbconfig.php';

     $sql= "UPDATE `user` SET `password`='$newpass' WHERE `email` = '$email'";
     $result=mysqli_query($connection,$sql);

   if ($result){
       echo '<script type="text/javascript">alert("Password Changed Successfully");';
       echo 'window.location.href = "../login.php?password_changed";';
       echo '</script>';
   }else{
       echo '<script type="text/javascript">alert("Error Updating Password");';
       echo 'window.location.href = "../resetpassword.php?error";';
       echo '</script>';
   }
}



?>