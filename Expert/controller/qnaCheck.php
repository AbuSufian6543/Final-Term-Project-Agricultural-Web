<!DOCTYPE html>
<html>
<head>
	<title>QnA | Leaf</title>
</head>
<body>
	<center>
		<img src="Companylogo.png" height="100px" width="200px"><br>
		<a href="../view/login.php">Logout</a> |
		<a href="../view/qna.php">Back</a>
		
	</center>
</body>
</html>

<?php
    include("../view/connection.php");

	if (isset($_POST['post'])) {
        
        $question = $_POST["question"];
		$answer = $_POST["answer"];
	    
		
		$sql = "insert into qna (question, answer) values ('$question','$answer')";

		if ($con->query($sql) === TRUE) {
		  echo "";
		} else {
		  echo "Error: " . $sql . "<br>" . $con->error;
		}
	}

			$sql = "select * from qna";
			$result = $con->query($sql);

			if ($result->num_rows > 0) {
			  // output data of each row
			  while($row = $result->fetch_assoc()) {
			   
		?>
		<h3><?php echo $row['question']; ?></h3>
		<p><?php echo $row['answer']; ?></p>

		<?php } } ?>
