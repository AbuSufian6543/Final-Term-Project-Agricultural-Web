<?php
	//session_start();
	
	
    //require_once('../model/DB_config.php');
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
	if(isset($_POST['submit'])){

		$name= $_POST['name'];
		
		$email= $_POST['email'];
		$gender= $_POST['gender'];
		
		if( !empty($name)&& !empty($email) && !empty($gender))
		{
		
		
		$query="insert into intern (name,email,gender) values ('$name','$email','$gender')";
		
			mysqli_query($conn,$query);
			
					echo("Apply successfully");
					die;
				}
				else{
					echo("Null Value found");
				}
			}
		
		
		
		
		
?>