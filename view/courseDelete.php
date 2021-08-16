<?php

    $db = mysqli_connect("localhost", "root", "", "agriculture");
    if(!$db){
        die('error in db'. mysqli_error($db));
    }

    $id = $_GET['id'];

    $qry = "delete from courses where courseid = $id";
    if(mysqli_query($db, $qry)){
        header('location: user.php');
    }else{
        echo mysqli_error($db);
    }
 ?>