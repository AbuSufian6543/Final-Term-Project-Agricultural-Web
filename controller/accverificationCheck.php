<?php
	session_start();
	include("../view/connection.php");
    include("../view/functions.php");

    $user_data = check_login($con);

	if(isset($_POST['submit'])){

		$email= $_POST['email'];
		

		if($user_data['email'] === $email){
			
			header('location: ../view/verificationCode.php');
			die;
		}else{
			echo '<script> alert("Sorry!! you input wrong email");</script>';
		}
	}else{
		echo "invalid request...";
	}

?>