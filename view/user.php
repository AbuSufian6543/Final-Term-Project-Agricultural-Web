<?php

    $db = mysqli_connect("localhost", "root", "", "agriculture")
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Course List | Leaf</title>
    <link rel="stylesheet" href="expert style.css">
</head>
<body>
    <h1 align="center">Create Course</h1>
    <div align="right">
    <a href="showCourseList.php">Back</a>
    </div>
      <form method="post">
      	<label>Course Name:</label><br>
      	<textarea cols="40" rows="4" name="coursename"></textarea>
      	<br><br>
      	<input type="submit" name="submit" value="Submit">
      </form>

      <hr>
      <h3>Course List</h3>
      <div id="box1">
      <table border="1">
      	<tr>
            
      	<th>Course Id</th>
      	<th>Course Name</th>
            </tr>
            <?php
                 $i =1;
                 $qry = "select * from courses";
                 $run = $db-> query($qry);
                 if($run->num_rows>0){
                 	     while($row = $run-> fetch_assoc()){
                             $id = $row['courseid'];

            ?>
            <tr>
            	
            	<td><?php echo $i++?></td>
            	<td><?php echo $row['coursename']?></td>
            	<td>
            		<a href="courseEdit.php?id=<?php echo $id; ?>">Edit</a> | 
            		<a href="courseDelete.php?id=<?php echo $id; ?>" onclick="return confirm('Are you sure?')">Delete</a>
            	</td>
            </tr>
            <?php
                        }
                 }
             ?>

      </table>
  </div>
</body>
</html>
<?php
     if(isset($_POST['submit'])){
     $courseid = $_POST['courseid'];
     $coursename = $_POST['coursename'];

     $qry = "insert into courses values('$courseid', '$coursename')";
     if(mysqli_query($db,$qry)){
     	    echo '<script> alert("Course is registered successfully");</script>';
     	    header('location: user.php');
     }else{
     	     echo mysqli_error($db);
     }

     }
?>