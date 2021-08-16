<!DOCTYPE html>
<html>
<head>
	<title>QnA </title>
</head>
<header class="nav">
<a href="../index_home.html">Home </a> |<a href="visitor_Dashboard.html">Menu</a>
</header>
<link rel="stylesheet" type="text/css" href="../view/css/pagestyle.css">
<body>
	<center>
		
		
		<a href="../view/visitor_qna.php">Back</a>
		
		
	</center>
	<footer class="fixed-footer">
	
<p> 19-40005-1@student.aiub.edu</p>
 
 
</footer>

</body>
</html>

<?php
    include("../view/connection.php");

	if (isset($_POST['post'])) {
        
        $question = $_POST["question"];
        $answer = $_POST["answer"];
		
		
		
	    
		
		$sql = "insert into qna (question,answer ) values ('$question','$answer')";

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
