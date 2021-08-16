<?php

    $db = mysqli_connect("localhost", "root", "", "agriculture")
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Research List | Leaf</title>
</head>
<body>
    <h1 align="center">Insert research</h1>
    <div align="right">
    <a href="research.php">Back</a>
    </div>
      <form method="post">
        <label>Research Name:</label><br>
        <textarea cols="40" rows="4" name="researchname"></textarea>
        <br><br>
        <input type="submit" name="submit" value="Submit">
      </form>

      <hr>
      <h3>Research List</h3>
      <table border="1">
        <tr>
        <th>Research No</th>
        <th>Research Name</th>
            </tr>
            <?php
                 $i =1;
                 $qry = "select * from research";
                 $run = $db-> query($qry);
                 if($run->num_rows>0){
                         while($row = $run-> fetch_assoc()){
                             $id = $row['researchno'];
                             $researchname = $row['researchname'];
            ?>
            <tr>
                
                <td><?php echo $i++?></td>
                <td><?php echo $row['researchname']?></td>
                <td>
                    <a href="../controller/expert'sResearchEdit.php?id=<?php echo $id; ?>">Edit</a> | 
                    <a href="../controller/expert'sResearchDelete.php?id=<?php echo $id; ?>" onclick="return confirm('Are you sure?')">Delete</a>
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
     $researchno = $_POST['researchno'];
     $researchname = $_POST['researchname'];

     $qry = "insert into research values('$researchno', '$researchname')";
     if(mysqli_query($db,$qry)){
            echo '<script> alert("New Research is registered successfully");</script>';
            header('location: requiredResearch.php');
     }else{
             echo mysqli_error($db);
     }

     }
?>