<?php

    $db = mysqli_connect("localhost", "root", "", "agriculture");
    if(!$db){
        die('error in db'. mysqli_error($db));
    }

    $id = $_GET['id'];

    $qry = "delete from admin where adminid = $id";
    if(mysqli_query($db, $qry)){
        header('location:admin panel.php');
    }else{
        echo mysqli_error($db);
    }
 ?>