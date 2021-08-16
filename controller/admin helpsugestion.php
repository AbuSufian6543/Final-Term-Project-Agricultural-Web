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
		if( $reply=='')
		{
			echo "<script>alert('Please enter the reply')</script>";
		}
		$query="insert into help (name,email,reply) values ('$name','$email','$reply')";
		try{
			$result= mysqli_query($conn,$query);
			if($result){
				if(mysqli_affected_rows($conn)>0){
					echo("Your reply successfully sent");
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