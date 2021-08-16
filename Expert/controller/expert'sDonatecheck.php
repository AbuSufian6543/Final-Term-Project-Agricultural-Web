<!DOCTYPE html>
<html>
<head>
	<title>Article | Leaf</title>
</head>
<body>
	<center>
		<img src="Companylogo.png" height="100px" width="200px"><br>
		<a href="../view/login.php">Logout</a> |
		<a href="../view/article.php">Back</a>
		
	</center>
</body>
</html>
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