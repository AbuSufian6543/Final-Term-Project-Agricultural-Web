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
                    
                 

echo ' <a href="../View/fdashboard.php">Dashboard </a>';
//echo "<html><br><br><br><div id='loading'><p><img src='loader.gif'> Please wait 6 seconds...</p></div></html>";
//sleep(6);
//header('Location: http://localhost/dashboard/Sufian/FarmerUserFinalTerm/View/dashboard.php');

//sleep(5);
//header("Location: http://localhost/dashboard/Sufian/FarmerUserFinalTerm/View/dashboard.php");

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



