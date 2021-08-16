<?php

    $db = mysqli_connect("localhost", "root", "", "agriculture");
    if(!$db){
        die('error in db'. mysqli_error($db));
    }else{
          $id = $_GET['id'];
          $qry = "select * from courses where courseid = $id";
          $run = $db-> query($qry);
          if($run->num_rows>0){
                 while($row = $run-> fetch_assoc()){
                       $coursename = $row['coursename'];
          }

    }
}

    
 ?>

 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <title>Edit Course</title>
 </head>
 <body>
    <h1>Edit Course</h1>
    <div align="right">
    <a href="user.php">Back</a>
    </div>
        <form method="post">
        <label>Course Name:</label><br>
        <input type="text" name="coursename" value="<?php echo $coursename; ?>">
        <br><br>
        <input type="submit" name="update" value="Update">
      </form>
 </body>
 </html>

 <?php
      
      if (isset($_POST['update'])){
          $coursename = $_POST['coursename'];

          $qry = "update courses set coursename='$coursename' where courseid= $id";

          if(mysqli_query($db, $qry)){
            header('location: user.php');
          }else{
            echo mysqli_error($db);
          }
      }

?>