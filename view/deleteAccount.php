<?php 
session_start();

    include("imdad connection.php");
    include("imdad functions.php");


    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $type = $_POST['type'];

        if(!empty($username) && !empty($email) && !empty($password) && !empty($type) && !is_numeric($username))
        {

            //save to database
            $user_id = random_num(20);
            $query = "delete from users where user_id = '$id'";

            mysqli_query($con, $query);

            header("Location: login.php");
            die;
        }else
        {
            echo "Please enter some valid information!";
        }
    }
?>

<html>

<head>
    <title> !!Delete Account!! | Leaf </title>
</head>

<body>
    <table border="1" width="100%">
        <form method="post" action="../controller/imdad deleteaccountcheck.php">
        <tr>
            <td>
                <img src="imdad Companylogo.png" alt="logo" width="100px" height="50px">
            </td>
            
            <td align="right">
                <a href="login.php"> Logout</a>
            </td>
        </tr>
        
        <tr style="height:150px;">
            <td>
                <h4>Account</h4><br>
                <ul>
                    <li>
                        <a href="imdad home.php">Dashboard</a>
                    </li>
                    <li>
                        <a href="viewProfile.php">View Profile</a>
                    </li>
                    <li>
                        <a href="EditProfile.php">Edit Profile</a>
                    </li>
                    <li>
                        <a href="ProfilePic.php">Change Profile Picture</a>
                    </li>
                    <li>
                        <a href="article.php">Articles</a>
                    </li>
                    <li>
                        <a href="events.php">Events</a>
                    </li>
                    <li>
                        <a href="news.php">News</a>
                    </li>
                    <li>
                        <a href="optionGallary.php">Gallary</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact Us</a>
                    </li>
                    <li>
                        <a href="expertList.php">Expert List</a>
                    </li>
                    <li>
                        <a href="community.php">Our Community</a>
                    </li>
                    <li>
                        <a href="qna.php">QnA</a>
                    </li>
                    <li>
                        <a href="message.php">Messages</a>
                    </li>
                    <li>
                        <a href="courses.php">Courses</a>
                    </li>
                    <li>
                        <a href="research.php">Research</a>
                    </li>
                    <li>
                        <a href="weather.php">Weather Update</a>
                    </li>
                    <li>
                        <a href="donate.php">Donate</a>
                    </li>
                    <li>
                        <a href="Help.php">Help & Suggestion</a>
                    </li>
                    <li>
                        <a href="sponsorList.php">Sponsor list</a>
                    </li>
                    <li>
                        <a href="attendence.php">Attendence</a>
                    </li>
                    <li>
                        <a href="notification.php">Notificaton</a>
                    </li>
                    <li>
                        <a href="accVerification.php">Account Verification</a>
                    </li>
                    <li>
                        <a href="deleteAccount.php">Delete Account</a>
                    </li>
                    <li>
                        <a href="login.php">Logout</a>
                    </li>
                </ul>
            </td>
            <td> 
                <h1>Delete Account!!!!!!!!!!!!!!</h1>
                are you sure, you want to delete your account?? You will no longer get this account return, if you click yes!!!
                If you do not want to delete, just select others options on the left side.
                <br><br>
                <input type="submit" name="delete" value="Delete">   
            </td>
        </tr>
        
        <tr>
            <td colspan="2" align="center">
                18-39032-3@student.aiub.edu
            </td>
        </tr>
      </form>           
    </table>
</body>
</html>