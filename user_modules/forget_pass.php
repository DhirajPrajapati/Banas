<?php

include('../user_config/dbconfig.php');
include('../user_controller/forget.php');

if(isset($_POST['submit'])){

	$email = $_POST['email'];

	$result = CHECK_USER($email);

	if ($result['email'] == $email) 
	{
		header('Location: ../resetpassword.php?user='.$email);
	}
	else
	{
		echo '<script type="text/javascript">alert ("User does not exist");';
		echo 'window.location.href = "../forget.php?user_not_verified";';
		echo '</script>';
	}

}

?>