<?php 
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

?>
<html>

<head>
	<title> Articles | Leaf </title>
    <link rel="stylesheet" href="expert style.css">
</head>

<body>
	<table border="1" width="100%">
	  <form method="post" action="">
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
            </div>
            </td>
			</td>
            <td>
            
                <?php
    


    if (isset($_POST['send'])) {

        $message = $_POST['message'];
        $username = $_POST['username'];
        
        $sql = "insert into messages (message, username) values ('$message', '$username')";

        if ($con->query($sql) === TRUE) {
          echo "";
        } else {
          echo "Error: " . $sql . "<br>" . $con->error;
        }
    }

            $sql = "select * from messages";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
               
        ?>
        <h3><?php echo $row['username']; ?></h3>
        <p><?php echo $row['message']; ?></p>

        <?php } } ?>

                <div id="box1">
                <label>Name  : <br><input type="text" name="username" value="<?php echo $user_data['username']; ?>"><br></label>
	            <label>Send  : <br><textarea cols="30" rows="2" name="message"></textarea><br></label>
                <input type="submit" name="send" value="Send">
                </div>
                
    

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