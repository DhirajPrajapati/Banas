<?php

error_reporting(0);

include('../user_config/dbconfig.php');

function CHECK_USER($email){
	include('../user_config/dbconfig.php');
	$sql= "SELECT `email` FROM `user` WHERE `email`='$email'";
	$result=mysqli_query($connection,$sql);
	$count=mysqli_num_rows($result);

	if ($count==1) {
		$admin_data=mysqli_fetch_assoc($result);
	    $res = $admin_data;
	} 

	return($res);
}



?>