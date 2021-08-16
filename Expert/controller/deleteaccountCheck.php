<?php 
session_start();

	include("../controller/connection.php");
	include("../controller/functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$type = $_POST['type'];

		if(!empty($username) && !empty($email) && !empty($password) && !empty($type) && !is_numeric($username))
		{

			//save to database
			$user_id = random_num(20);
			$query = "delete from users where user_id = '$id'";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>
