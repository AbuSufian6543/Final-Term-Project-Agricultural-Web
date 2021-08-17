<?php 
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

?>
<<!DOCTYPE html>
<html>
<head>
    <title>Profile | Leaf</title>
</head>
<body>
    <style type="text/css">
        #box{

        background-color: lightblue;
        margin: auto;
        width: 300px;
        padding: 20px;
        border: 2px solid;
    }
    </style>
      <h1 align="center">Your Profile</h1>
</body>
  <div id="box">
  <p>
      <b>Name:</b> <?php echo $user_data['username']; ?><br>
      <b>Email:</b> <?php echo $user_data['email']; ?><br>
      <b>Role:</b> <?php echo $user_data['type']; ?>
  </p>
</div>
</html>
<?php
    /*session_start();

    include("connection.php");
    include("functions.php");

    $id = $_SESSION['user_id'];
    $sqlselect = "select * from users where user_id = '$id' limit 1";
    $records = mysql_query($sqlselect);
    $count = mysql_num_rows($records);

    if($count==1){
        $field = mysql_fetch_array($records);

        $_SESSION['user_id']=$field['user_id'];
        $_SESSION['username']=$field['username'];
        $_SESSION['email']=$field['email'];
        $_SESSION['password']=$field['password'];
        $_SESSION['type']=$field['type'];

    }
    else{
        echo "not success";
    }*/

?>   