<?php

session_start();
include('../user_config/dbconfig.php');
include('../user_controller/contact_us.php');

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $run = contact_us($name,$email,$subject,$message);

    if($run)
    {
        echo '<script type="text/javascript">alert ("Thank You Contacting Us.");';
		echo 'window.location.href = "../index.php";';
		echo '</script>';
    }
    else
    {
        echo '<script type="text/javascript">alert ("Something Went Wrong Try Again Later.");';
		echo 'window.location.href = "../index.php";';
		echo '</script>';
    }

}



?>