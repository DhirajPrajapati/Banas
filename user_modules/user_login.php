<?php

include('../user_config/dbconfig.php');
include('../user_controller/user_login.php');


if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $res = user_login($email,$password);

    if(!empty($res))
    {
        session_start();
        $_SESSION = $res;
        echo '<script type="text/javascript">alert ("Login Succesfull");';
		echo 'window.location.href = "../index.php";';
		echo '</script>';
    }
    else{
        echo '<script type="text/javascript">alert ("Login UnSuccesfull");';
		echo 'window.location.href = "../login.php";';
		echo '</script>';
    }
}




?>