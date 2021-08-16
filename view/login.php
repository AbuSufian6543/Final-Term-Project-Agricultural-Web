<?php 

session_start();

	include("connection.php");
	include("functions.php");
    

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(!empty($username) && !empty($password) && !is_numeric($username))
		{

			//read from database
			$query = "select * from users where username = '$username' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{
                        if($user_data['type'] === 'expert'){
						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: home.php");
						die;
					   }
					   if($user_data['type'] === 'admin'){
						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: admin dashboard.html");
						die;
					   }else{
					   	$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: ../findex.php");
						die;
					   }

					}
				}
			}
			
			echo '<script> alert("wrong username or password!");</script>';
		}else
		{
			echo '<script> alert("wrong username or password!");</script>';
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login | Leaf</title>
</head>
<body>


		<img src="Companylogo.png" height="100px" width="200px"><br>
		<a href="signup.php">Signin</a><br>
		<h3>Login Page</h3>
	<div style="background: limegreen;">
		<form method="post">
			<fieldset>
				<legend>Login</legend>
				<table>
					<tr>
						<td>Username</td>
						<td><input type="text" name="username"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="password"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="submit" value="Submit"></td>
					</tr>
				</table>
			</fieldset>
		</form>
	</div>
</body>
</html>