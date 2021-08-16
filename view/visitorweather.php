<!DOCTYPE html>
<html>

<head>
	<title> Weather</title>
</head>
<header class="nav">
<a href="../index_home.html">Home </a> |<a href="visitor_Dashboard.html">Back</a>
</header>
<link rel="stylesheet" type="text/css" href="Tasniacss/pagestyle.css">
<body>
 <h1 align="center"> Weather Update </h1>
	<table border="1" align="center" width="80%">
		
            
                <tr>
                <th>Date</th>
                <th>Temp(degree)</th>
                <th>Humadity(%)</th>
                <th>Wind(km/h)</th>
                
                </tr>
 <?php
        $conn=mysqli_connect("localhost","root","","agriculture");
        $sql="SELECT * FROM weather";
		$result=$conn->query($sql);
		
		if($result->num_rows >0){
			while($row=$result-> fetch_assoc()){
			echo "<tr><td>".$row["date"]."</td><td>".$row["temp"]."</td><td>".$row["humidity"]."</td><td>".$row["wind"]."</td></tr>";
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
	
<p> &copy;Copyright Reserved.</p>
 
 
</footer>
</body>
</html>