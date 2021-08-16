<?php
	
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
		
		
		$account_no= $_POST['account_no'];
		$amount= $_POST['amount'];
		
		
		
		if( !empty($name)&&  !empty($account_no)&& !empty($amount))
		{
		
		
		$query="insert into donate(name,account_no,amount) values ('$name','$account_no','$amount')";
		
			mysqli_query($conn,$query);
			
					echo("donate successfully");
					die;
				}
				else{
					echo("Null Value found");
				}
			}
			
		
		
		
		
	

?>