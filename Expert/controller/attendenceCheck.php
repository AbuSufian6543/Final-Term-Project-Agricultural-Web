<!DOCTYPE html>
<html>
<head>
	<title>Attendence | Leaf</title>
</head>
<body>
	<center>
		<img src="Companylogo.png" height="100px" width="200px"><br>
		<a href="../view/login.php">Logout</a> |
		<a href="../view/attendence.php">Back</a>
		
	</center>
</body>
</html>

<?php
    include("../view/connection.php");

	if (isset($_POST['submit'])) {

		$date = date('y/m/d');
        $attendname = $_POST['attendname'];
		
		$sql = "insert into attendence (date, attendname) values ('$date','$attendname')";

		if ($con->query($sql) === TRUE) {
		  echo "";
		} else {
		  echo "Error: " . $sql . "<br>" . $con->error;
		}
	}

			$sql = "select * from attendence";
			$result = $con->query($sql);

			if ($result->num_rows > 0) {
			  // output data of each row
			  while($row = $result->fetch_assoc()) {
			   
		?>
		<h3><u><?php echo $date; ?></u></h3>
		<p><?php echo $row['attendname']; ?></p>

		<?php } } ?>
	
