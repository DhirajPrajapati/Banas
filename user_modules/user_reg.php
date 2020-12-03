<?php

session_start();
include('../user_config/dbconfig.php');
include('../user_controller/user_reg.php');

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $run = user_reg($name,$email,$password);

    if($run)
    {
        session_start();
        $_SESSION = $run;
        $_SESSION['success']="User Add Succesfully";
        echo '<script type="text/javascript">alert("User Added Successfully")</script>';  
        echo '<script type="text/javascript>window.location.href = "../index.php";</script>';
        header('Location: ../index.php');
    }
    else
    {
        echo '<script type="text/javascript">alert("User Not Registered.");';
        echo 'window.location.href = "../register.php";';
        echo "</script>";
    }
}

?>