<?php

    $db = mysqli_connect("localhost", "root", "", "agriculture");
    if(!$db){
        die('error in db'. mysqli_error($db));
    }

    $id = $_GET['id'];

    $qry = "delete from research where researchno = $id";
    if(mysqli_query($db, $qry)){
        header('location: ../view/requiredResearch.php');
    }else{
        echo mysqli_error($db);
    }
 ?>