<!DOCTYPE html>
<html>
<head>
	<title>Events | Leaf</title>
</head>
<body>
	<center>
		<img src="Companylogo.png" height="100px" width="200px"><br>
		<a href="../view/login.php">Logout</a> |
		<a href="../view/events.php">Back</a>
		
	</center>
</body>
</html>

<?php
    include("../view/connection.php");

	if (isset($_POST['submit'])) {

		$date = $_POST['date'];
		$eventname = $_POST['eventname'];
		
		$sql = "insert into events (date, eventname) values ('$date','$eventname')";

		if ($con->query($sql) === TRUE) {
		  echo "";
		} else {
		  echo "Error: " . $sql . "<br>" . $con->error;
		}
	}

			$sql = "select * from events";
			$result = $con->query($sql);

			if ($result->num_rows > 0) {
			  // output data of each row
			  while($row = $result->fetch_assoc()) {
			   
		?>
		<h3><?php echo $row['date']; ?></h3>
		<p><?php echo $row['eventname']; ?></p>

		<?php } } ?>
	
