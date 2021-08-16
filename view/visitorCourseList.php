<html>

<head>
	<title> Course List </title>
</head>
<header class="nav">
<a href="../index_home.html">Home </a> |<a href="visitor_Dashboard.html">Back</a>
</header>
<link rel="stylesheet" type="text/css" href="Tasniacss/pagestyle.css">
<body>
 <h1 align="center"> Course List </h1>
	<table border="1" width="100%">
		
            
                <tr>
                <th>Course Id</th>
                <th>Course Name</th>
                </tr>
 <?php
        $conn=mysqli_connect("localhost","root","","agriculture");
        $sql="SELECT * FROM courses";
		$result=$conn->query($sql);
		
		if($result->num_rows >0){
			while($row=$result-> fetch_assoc()){
			echo "<tr><td>".$row["courseid"]."</td><td>".$row["coursename"]."</td></tr>";
		      }
			  echo"</table>";
		}
		else{
			echo"No results";
		}
         $conn->close();       
 ?>
                
	</table>
	<footer class="fixed-footer">
	
<p> 19-40005-1@student.aiub.edu</p>
 
 
</footer>
</body>
</html>