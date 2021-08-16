<!DOCTYPE html>
<html>
<head>
	<title>Help & Suggestion | Leaf</title>
</head>
<body>
	<center>
		<img src="Companylogo.png" height="100px" width="200px"><br>
		<a href="../view/login.php">Logout</a> |
		<a href="../view/Help.php">Back</a>
		
	</center>
</body>
</html>

<?php
	//session_start();
	
	
    $servername="localhost";
	$username="root";
	$password="";
	$dbname="agriculture";
	try{
		$conn=mysqli_connect($servername,$username,$password,$dbname);
		//echo("successfull connection");
	}
	catch(MySQLi_Sql_Exception $ex){
		
		echo("error in connection");
	}
	extract($_POST);
	
	if(isset($_POST['submit'])){

		
		if( $name =='')
		{
			echo "<script>alert('Please enter the name')</script>";
		}
		if( $email =='')
		{
			echo "<script>alert('Please enter the email')</script>";
		}
		if( $message=='')
		{
			echo "<script>alert('Please enter the message')</script>";
		}
		$query="insert into help (name,email,message) values ('$name','$email','$message')";
		try{
			$result= mysqli_query($conn,$query);
			if($result){
				if(mysqli_affected_rows($conn)>0){
					echo("Your message successfully sent");
				}
				else{
					echo("Failed");
				}
			}
		}
		catch(Exception $ex){
			echo("error".$ex->getMessage());
		}
		
		
		
	}

?>