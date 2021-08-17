<html>

<head>
	<title> Course List | Leaf </title>
    <link rel="stylesheet" href="expert style.css">
</head>

<body>
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
                        <a href="optionGallary.php">Gallery</a>
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
            <td align="center">
                
                <h1>Course List:</h1>
                <div id="box1">
                <table border="1">
                <tr>
                <th>Course Id</th>
                <th>Course Name</th>
                </tr>

 
                <tbody id="data"></tbody>
                </table>
            </div>
 
                <script>
                var ajax = new XMLHttpRequest();
                ajax.open("GET", "coursedata.php", true);
                ajax.send();
 
                ajax.onreadystatechange = function() {
                   if (this.readyState == 4 && this.status == 200) {
                var data = JSON.parse(this.responseText);
                console.log(data);
 
                var html = "";
                for(var a = 0; a < data.length; a++) {
                        var courseid = data[a].courseid;
                        var coursename = data[a].coursename;
                
 
                html += "<tr>";
                    html += "<td>" + courseid + "</td>";
                    html += "<td>" + coursename + "</td>";

                html += "</tr>";
                }
                document.getElementById("data").innerHTML += html;
            }
        };
         </script>
                <br>
                 <div id="box1"><a href="user.php">Create New Course</a></div>
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