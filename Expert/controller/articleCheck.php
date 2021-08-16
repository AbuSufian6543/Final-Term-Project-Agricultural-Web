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
    include("../view/connection.php");

	if (isset($_POST['post'])) {

		$headline = $_POST['headline'];
		$article = $_POST['article'];
		
		$sql = "insert into articles (headline, article) values ('$headline','$article')";

		if ($con->query($sql) === TRUE) {
		  echo "";
		} else {
		  echo "Error: " . $sql . "<br>" . $con->error;
		}
	}

			$sql = "select * from articles";
			$result = $con->query($sql);

			if ($result->num_rows > 0) {
			  // output data of each row
			  while($row = $result->fetch_assoc()) {
			   
		?>
		<h3><?php echo $row['headline']; ?></h3>
		<p><?php echo $row['article']; ?></p>

		<?php } } ?>
	
