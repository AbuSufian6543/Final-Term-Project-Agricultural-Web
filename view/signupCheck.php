<!DOCTYPE html>
<html>
<head>
	<title>Signup | Leaf</title>
</head>
<body>
	<center>
		<img src="Companylogo.png" height="100px" width="200px"><br>
		<a href="../view/login.php">Login</a> |
		<a href="../view/signup.php">Back</a> 
		
	</center>
</body>
</html>
<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$type = $_POST['type'];

		if(!empty($username) && !empty($email) && !empty($password) && !empty($type) && !is_numeric($username))
		{
            if(strlen($password) > 5){
			$user_id = random_num(20);
			$query = "insert into users (user_id,username,email,password,type) values ('$user_id','$username','$email','$password','$type')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else{
			echo "<script>alert('Password should be more than 4 charecter')</script>";
		}
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>