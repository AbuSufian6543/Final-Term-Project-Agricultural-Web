<html>

<head>
	<title> Article</title>
</head>
<header class="nav">
<a href="../index_home.html">Home </a> |<a href="visitor_Dashboard.html">Back</a>
</header>
<link rel="stylesheet" type="text/css" href="Tasniacss/pagestyle.css">
<body>
 <h1 align="center"> Article </h1>
	<form method="post" >
		
		<?php
    include("connection.php");

	if (isset($_POST['post'])) {
        
        $headline= $_POST["headline"];
        $article = $_POST["article"];
		
		
		
	    
		
		
	
	}
			$sql = "select * from articles";
			$result = $con->query($sql);

			if ($result->num_rows > 0) {
			  // output data of each row
			  while($row = $result->fetch_assoc()) {
			   
		?>
		<h3 >headline:<?php echo $row['headline']; ?></h3>
		<p>Article:<?php echo $row['article']; ?></p>

		<?php } } ?>

		<footer class="fixed-footer">
	
<p> 19-40005-1@aiub.edu</p>
 
 </form>
</footer>
</body>
</html>