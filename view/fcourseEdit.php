<?php

    $db = mysqli_connect("localhost", "root", "", "agriculture");
    if(!$db){
        die('error in db'. mysqli_error($db));
    }else{
          $id = $_GET['id'];
          $qry = "select * from courses where id = $id";
          $run = $db-> query($qry);
          if($run->num_rows> 0){
                 while($row = $run-> fetch_assoc()){
                       $coursename = $row['Name'];
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
        <form method="post">
        <label>Course Name:</label><br>
        <input type="text" name="coursename" value="<?php echo $coursename; ?>">
        <br><br>
        <input type="submit" name="update" value="Update">
      </form>
 </body>
 </html>
 
 
 
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Update Record</h2>
                    <p>Please edit the input values and submit to update the course record.</p>
                    <form method="post">
        <label>Course Name:</label><br>
        <input type="text" name="coursename" value="<?php echo $coursename; ?>">
        <br><br>
        <input type="submit" name="update" value="Update">
      </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 <?php
      
      if (isset($_POST['update'])){
          $coursename = $_POST['coursename'];

          $qry = "update courses set Name ='$coursename' where id= $id";

          if(mysqli_query($db, $qry)){
            header('location: fcoursedata.php');
          }else{
            echo mysqli_error($db);
          }
      }

?>