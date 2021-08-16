<?php

    $db = mysqli_connect("localhost", "root", "", "agriculture");
    if(!$db){
        die('error in db'. mysqli_error($db));
    }else{
          $id = $_GET['id'];
          $qry = "select * from weather where weather_no = $id";
          $run = $db-> query($qry);
          if($run->num_rows>0){
                 while($row = $run-> fetch_assoc()){
                       $date = $row['date'];
                       $temp = $row['temp'];
                       $humidity = $row['humidity'];
                       $wind = $row['wind'];
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
    <a href="weather.php">Back</a>
    </div>
        <form method="post">
        <label>Date:</label><br>
        <input type="Date" name="date" value="<?php echo $date; ?>">
        <br><br>
        <label>Temperature (°C):</label><br>
        <input type="text" name="temp" value="<?php echo $temp; ?>">
        <br><br>
        <label>Humidity:</label><br>
        <input type="text" name="humidity" value="<?php echo $humidity; ?>">
        <br><br>
        <label>Wind (km/h):</label><br>
        <input type="text" name="wind" value="<?php echo $wind; ?>">
        <br><br>
        <input type="submit" name="update" value="Update">
      </form>
 </body>
 </html>

 <?php
      
      if (isset($_POST['update'])){
          $date = $_POST['date'];
          $temp = $_POST['temp'];
          $humidity = $_POST['humidity'];
          $wind = $_POST['wind'];

          $qry = "update weather set date='$date', temp='$temp', humidity='$humidity', wind='$wind'  where weather_no = $id";

          if(mysqli_query($db, $qry)){
            header('location: weather.php');
          }else{
            echo mysqli_error($db);
          }
      }

?>