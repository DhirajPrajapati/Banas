<?php

include('../user_config/dbconfig.php');
include('../user_controller/reset.php');

if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$newpass = md5($_POST['password']);
	$confirm = md5($_POST['c_password']);

	if ($newpass != $confirm) {
		echo '<script type="text/javascript">alert ("Passwords did not match");';
		echo 'window.history.back();';
		echo '</script>';
	}else{
		$res = FORGET_PASS($email,$new);
	}
}


?>