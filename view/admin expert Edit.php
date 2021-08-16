<?php

    $db = mysqli_connect("localhost", "root", "", "agriculture");
    if(!$db){
        die('error in db'. mysqli_error($db));
    }else{
          $id = $_GET['id'];
          $qry = "select * from expert where expertid = $id";
          $run = $db-> query($qry);
          if($run->num_rows>0){
                 while($row = $run-> fetch_assoc()){
                       $expertname = $row['expertname'];
                       $expertemail = $row['expertemail'];
          }

    }
}

    
 ?>

 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <title>Edit Expert</title>
 </head>
 <body>
        <form method="post">
        <label>ExpertName:</label><br>

        <input type="text" name="expertname" value="<?php echo $expertname; ?>">
        <br><br>
        <label>ExpertEmail:</label><br>

        <input type="text" name="expertemail" value="<?php echo $expertemail; ?>">
        <br><br>
        <input type="submit" name="update" value="Update">
      </form>
 </body>
 </html>

 <?php
      
      if (isset($_POST['update'])){
          $expertname = $_POST['expertname'];
          $expertemail = $_POST['expertemail'];

          $qry = "update expert set expertname='$expertname',expertemail='$expertemail' where expertid= $id";

          if(mysqli_query($db, $qry)){
            header('location:admin creat.php');
          }else{
            echo mysqli_error($db);
          }
      }

?>