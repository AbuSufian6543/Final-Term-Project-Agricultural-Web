<?php

    $db = mysqli_connect("localhost", "root", "", "agriculture")
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Weather</title>
</head>
<body>
    <h1 align="center">Insert research</h1>
    <div align="right">
    <a href="#.php">Back</a>
    </div>
      <form method="post">
        <label>Date:</label><br>
        <input type="Date" name="date" value="">
        <br><br>
        <label>Temp (°C):</label><br>
        <input type="text" name="temp" value="">
        <br><br>
        <label>Humidity:</label><br>
        <input type="text" name="humidity" value="">
        <br><br>
        <label>Wind:</label><br>
        <input type="text" name="wind" value="">
        <br><br>
        <input type="submit" name="submit" value="Submit">
      </form>

      <hr>
      <h3>Weather List</h3>
      <table border="1">
        <tr>
        <th>Weather id</th>
        <th>Date</th>
        <th>Temerature (°C)/(F)</th>
        <th>Humidity</th>
        <th>Wind(km/h)</th>
            </tr>
            <?php
                 $i =1;
                 $qry = "select * from weather";
                 $run = $db-> query($qry);
                 if($run->num_rows>0){
                         while($row = $run-> fetch_assoc()){
                             $id = $row['weather_no'];
                             $date = $row['date'];
                             $temp = $row['temp'];
                             $humidity = $row['humidity'];
                             $wind = $row['wind'];
            ?>
            <tr>
                
                <td><?php echo $i++?></td>
                <td><?php echo $row['date']?></td>
                <td><?php echo $row['temp']?></td>
                <td><?php echo $row['humidity']?></td>
                <td><?php echo $row['wind']?></td>
                <td>
                    <a href="weather Edit.php?id=<?php echo $id; ?>">Edit</a> | 
                    <a href="weather delete.php?id=<?php echo $id; ?>" onclick="return confirm('Are you sure?')">Delete</a>
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
     $weather_no = $_POST['weather_no'];
     $date = $_POST['date'];
     $temp = $_POST['temp'];
     $humidity = $_POST['humidity'];
     $wind = $_POST['wind'];

     $qry = "insert into weather values('$weather_no', '$date', '$temp', '$humidity', '$wind')";
     if(mysqli_query($db,$qry)){
            echo '<script> alert("New Research is registered successfully");</script>';
            header('location:adminweather.php');
     }else{
             echo mysqli_error($db);
     }

     }
?>