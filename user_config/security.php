<?php
error_reporting(0);
session_start();
include('dbconfig.php');

if(!$_SESSION['username'])
{
    header('Location: login.php');
}


?>