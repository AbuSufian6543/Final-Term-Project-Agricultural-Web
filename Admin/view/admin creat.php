<?php

    $db = mysqli_connect("localhost", "root", "", "agriculture")
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>data table</title>
</head>
<body>
      <form method="post">
      	<label>Expert Name:</label><br>
      	<input type="text" name="expertname">
      	<br><br>
      	<label>Expert Email:</label><br>
      	<input type="text" name="expertemail">
      	<br><br>
      	
      	<input type="submit" name="submit" value="Submit">
      </form>

      <hr>
      <h3>ExpertList</h3>
      <table border="1">
      	<tr>
      	 <th>Expert ID</th>
      	 <th>Expert Name</th>
      	 <th>Expert Email</th>
            </tr>
            <?php
                 $i =1;
                 $qry = "select * from expert";
                 $run = $db-> query($qry);
                 if($run->num_rows>0){
                 	     while($row = $run-> fetch_assoc()){
                             $id = $row['expertid'];

            ?>
            <tr>
            	
            	<td><?php echo $i++?></td>
            	<td><?php echo $row['expertname']?></td>
            	<td><?php echo $row['expertemail']?></td>
            	<td>
            		<a href="admin expert Edit.php?id=<?php echo $id; ?>">Edit</a> | 
            		<a href="admin expert Delete.php?id=<?php echo $id; ?>" onclick="return confirm('Are you sure?')">Delete</a>
            	</td>
            </tr>
            <?php
                        }
                 }
             ?>
      </table>
</body>
</html>
<?php
     if(isset($_POST['submit'])){
     $expertid = $_POST['expertid'];
     $expertname = $_POST['expertname'];
     $expertemail=$_POST['expertemail'];

     $qry = "insert into expert values('$expertid', '$expertname','$expertemail')";
     if(mysqli_query($db,$qry)){
     	    echo '<script> alert("Expert is registered successfully");</script>';
     	    header('location: admin creat.php');
     }else{
     	     echo mysqli_error($db);
     }

     }
?>