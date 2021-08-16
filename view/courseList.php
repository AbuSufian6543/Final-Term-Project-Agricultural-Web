<html>

<head>
	<title> Course List | Leaf </title>
</head>

<body>
	<table border="1" width="100%">
	  <form method="post" action="../controller/imdad courseListCheck.php">
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
                        <a href="imdad viewProfile.php">View Profile</a>
                    </li>
                    <li>
                        <a href="imdad EditProfile.php">Edit Profile</a>
                    </li>
                    <li>
                        <a href="imdad ProfilePic.php">Change Profile Picture</a>
                    </li>
                    <li>
                        <a href="imdad article.php">Articles</a>
                    </li>
                    <li>
                        <a href="imdad events.php">Events</a>
                    </li>
                    <li>
                        <a href="imdad news.php">News</a>
                    </li>
                    <li>
                        <a href="imdad optionGallary.php">Gallary</a>
                    </li>
                    <li>
                        <a href="imdad contact.php">Contact Us</a>
                    </li>
                    <li>
                        <a href="imdad expertList.php">Expert List</a>
                    </li>
                    <li>
                        <a href="imdad community.php">Our Community</a>
                    </li>
                    <li>
                        <a href="imdad qna.php">QnA</a>
                    </li>
                    <li>
                        <a href="imdad message.php">Messages</a>
                    </li>
                    <li>
                        <a href="imdad courses.php">Courses</a>
                    </li>
                    <li>
                        <a href="imdad research.php">Research</a>
                    </li>
                    <li>
                        <a href="imdad weather.php">Weather Update</a>
                    </li>
                    <li>
                        <a href="imdad donate.php">Donate</a>
                    </li>
                    <li>
                        <a href="imdad Help.php">Help & Suggestion</a>
                    </li>
                    <li>
                        <a href="imdad sponsorList.php">Sponsor list</a>
                    </li>
                    <li>
                        <a href="imdad attendence.php">Attendence</a>
                    </li>
                    <li>
                        <a href="imdad notification.php">Notificaton</a>
                    </li>
                    <li>
                        <a href="imdad accVerification.php">Account Verification</a>
                    </li>
                    <li>
                        <a href="imdad deleteAccount.php">Delete Account</a>
                    </li>
                    <li>
                        <a href="login.php">Logout</a>
                    </li>
                </ul>
			</td>
            <td>
	            <form method="post">
                <label>Course Name:</label><br>
                <textarea cols="40" rows="4" name="coursename"></textarea>
                <br><br>
                <input type="submit" name="submit" value="Submit">
                </form>

                <hr>
                <h3>Course List</h3>
                <table border="1">
                <tr>
                <th>Course Id</th>
                <th>Course Name</th>
                </tr>
                <?php
                 $i =1;
                 $qry = "select * from courses";
                 $run = $db-> query($qry);
                 if($run->num_rows>0){
                         while($row = $run-> fetch_assoc()){
                             $id = $row['courseid'];

                ?>
                <tr>
                
                <td><?php echo $i++?></td>
                <td><?php echo $row['coursename']?></td>
                <td>
                    <a href="imdad courseEdit.php?id=<?php echo $id; ?>">Edit</a> | 
                    <a href="imdad courseDelete.php?id=<?php echo $id; ?>" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
                </tr>
                <?php
                        }
                 }
                ?>
               </table>

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

<?php
     if(isset($_POST['submit'])){
     $courseid = $_POST['courseid'];
     $coursename = $_POST['coursename'];

     $qry = "insert into courses values('$courseid', '$coursename')";
     if(mysqli_query($db,$qry)){
            echo '<script> alert("Course is registered successfully");</script>';
            header('location: user.php');
     }else{
             echo mysqli_error($db);
     }

     }
?>

