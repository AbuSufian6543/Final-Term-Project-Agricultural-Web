<?php


        

    if(!isset($_POST["upload"]))
    {
        header("HTTP/1.0 404 Not Found");
        exit();
    }


    session_start();


    require_once("../Model/ffarmerUserService.php");




    $error="";


    if(empty($_FILES["profilePicture"]["name"]))
    {
        $error = "*select an image";
    }
    else if(pathinfo($_FILES["profilePicture"]["name"], PATHINFO_EXTENSION) != "png" && pathinfo($_FILES["profilePicture"]["name"], PATHINFO_EXTENSION) != "jpg")
    {
        $error = ".png and .jpg only";
    }


    if($error == "")
    {
        $destination = "../View/fimg/". $_FILES["profilePicture"]["name"];
        $src = $_FILES["profilePicture"]["tmp_name"];

        if(move_uploaded_file($src, $destination))
        {

            if(updateProfilePicture($_SESSION["userName"], $_FILES["profilePicture"]["name"]))
            {
                unset($_SESSION["profilePictureError"]);
                header("location: ../View/fchangeProfilePicture.php?uploaded=true");
            }
            else
            {
                unset($_SESSION["profilePictureError"]);
                header("location: ../View/fchangeProfilePicture.php?failed=true");
            }

            
        }
        else
        {
            $error = "*failed to upload the image";
            $_SESSION["profilePictureError"] = $error;
            $_SESSION["enteredChangeProfilePictureValidation"] = "true";
            header("location: ../View/fchangeProfilePicture.php");
        }
    }
    else
    {
        $_SESSION["profilePictureError"] = $error;
        $_SESSION["enteredChangeProfilePictureValidation"] = "true";
        header("location: ../View/fchangeProfilePicture.php");
    }

    









 
    





?>