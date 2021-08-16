<?php

    $db = mysqli_connect("localhost", "root", "", "agriculture");
    if(!$db){
        die('error in db'. mysqli_error($db));
    }else{
          $id = $_GET['id'];
          $qry = "select * from research where researchno = $id";
          $run = $db-> query($qry);
          if($run->num_rows>0){
                 while($row = $run-> fetch_assoc()){
                       $researchname = $row['researchname'];
          }

    }
}

    
 ?>

 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <title>Edit Research</title>
 </head>
 <body>
    <h1>Edit Research</h1>
    <div align="right">
    <a href="../view/requiredResearch.php">Back</a>
    </div>
        <form method="post">
        <label>Research Name:</label><br>
        <input type="text" name="researchname" value="<?php echo $researchname; ?>">
        <br><br>
        <input type="submit" name="update" value="Update">
      </form>
 </body>
 </html>

 <?php
      
      if (isset($_POST['update'])){
          $researchname = $_POST['researchname'];

          $qry = "update research set researchname='$researchname' where researchno= $id";

          if(mysqli_query($db, $qry)){
            header('location: ../view/requiredResearch.php');
          }else{
            echo mysqli_error($db);
          }
      }

?>