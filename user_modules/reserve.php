<?php

include('../user_config/dbconfig.php');
include('../user_controller/reservation.php');

if(isset($_POST['submit']))
{
    $source = $_POST['source'];
    $dest = $_POST['dest'];
    $date = $_POST['date'];
    $passenger = $_POST['passenger'];

    $run = Reservation($source,$dest,$date,$passenger);

    if($run){
        echo '<script type="text/javascript">alert("Reservation Succesfull")</script>';
        header('Location: ../MyBookings.php');
    }
    else{
        echo '<script type="text/javascript">alert("Reservation UnSuccesfull")</script>';
        header('Location: ../reservation.php');
    }

}

?>