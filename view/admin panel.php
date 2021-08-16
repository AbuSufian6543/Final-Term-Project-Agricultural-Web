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
      	<label>Admin Name:</label><br>
      	<input type="text" name="adminname">
      	<br><br>
      	<label>Admin Email:</label><br>
      	<input type="text" name="adminemail">
      	<br><br>
      	
      	<input type="submit" name="submit" value="Submit">
      </form>

      <hr>
      <h3>AdminList</h3>
      <table border="1">
      	<tr>
      	 <th>Admin ID</th>
      	 <th>Admin Name</th>
      	 <th>Admin Email</th>
            </tr>
            <?php
                 $i =1;
                 $qry = "select * from admin";
                 $run = $db-> query($qry);
                 if($run->num_rows>0){
                 	     while($row = $run-> fetch_assoc()){
                             $id = $row['adminid'];

            ?>
            <tr>
            	
            	<td><?php echo $i++?></td>
            	<td><?php echo $row['adminname']?></td>
            	<td><?php echo $row['adminemail']?></td>
            	<td>
            		<a href="admin panel Edit.php?id=<?php echo $id; ?>">Edit</a> | 
            		<a href="admin panel Delete.php?id=<?php echo $id; ?>" onclick="return confirm('Are you sure?')">Delete</a>
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
     $adminid = $_POST['adminid'];
     $adminname = $_POST['adminname'];
     $adminemail=$_POST['adminemail'];

     $qry = "insert into admin values('$adminid', '$adminname','$adminemail')";
     if(mysqli_query($db,$qry)){
     	    echo '<script> alert("Admin is registered successfully");</script>';
     	    header('location: admin panel.php');
     }else{
     	     echo mysqli_error($db);
     }

     }
?>