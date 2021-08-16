<html>

<head>
	<title> User List </title>
</head>
<header class="nav">
<a href="../index_home.html">Home </a> |<a href="visitor_Dashboard.html">Menu</a>
</header>
<link rel="stylesheet" type="text/css" href="Tasniacss/pagestyle.css">
<body>
 <h1 align="center"> User List </h1>
	<table border="1" align="center" width="80%">
		
            
                <tr>
                <th>Name</th>
                <th>Email</th>
                
                </tr>
 <?php
        $conn=mysqli_connect("localhost","root","","agriculture");
        $sql="SELECT * FROM users";
		$result=$conn->query($sql);
		
		if($result->num_rows >0){
			while($row=$result-> fetch_assoc()){
			echo "<tr><td>".$row["username"]."</td><td>".$row["email"]."</td></tr>";
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