<?php 
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

?>
<html>

<head>
    <title> Home | Leaf </title>

</head>

<body>
    

        
              
    <style type="text/css">

    
    #box{

        background-color: lightblue;
        margin: auto;
        border: 2px solid;
        width: 600px;
        height: 300px;
        padding: 20px;
    }
    #box1{
        background-color: lightblue;
        margin: auto;
        border: 2px solid;
    }
    </style>

    <table border="1" width="100%">
        <tr>
            <td>
                <img src="Companylogo.png" alt="logo" width="100px" height="50px">
            </td>
            
            <td align="right">
                <a href="login.php"> Logout</a>
            </td>
        </tr>
        
        <tr style="height:150px;">
            
            <td>
                <h4>Account</h4><br>
                <div id="box1">
                <ul>
                    <li>
                        <a href="home.php">Dashboard</a>
                    </li>
                    <li>
                        <a href="viewProfile.php">View Profile</a>
                    </li>
                    <li>
                        <a href="EditProfile.php">Edit Profile</a>
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
                        <a href="login.php">Logout</a>
                    </li>
                </ul>
            </td>
            </div>
            <td align="center"> 
                <div id="box">
                                <h3> Welcome,<?php echo $user_data['username']; ?>!!</h3><br>
                                <h4> <u>Description</u> </h4><br>
                                <p> This is the website for farmers to solve their farm related problem. Besides, they can also learn about farming through courses. They can connected with chat,QnA,News,Articles</p>
                </div>
            </td>
        </tr>
        
        <tr>
            <td colspan="2" align="center">
                18-39032-3@student.aiub.edu
            </td>
        </tr>           
    </table>
</body>
</html>