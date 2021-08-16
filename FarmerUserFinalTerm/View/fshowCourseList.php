<html>

<head>
	<title> Expert List | Leaf </title>
</head>

<body>
	<table border="1" width="100%">
		<tr>
			<td>
				<img src="Companylogo.png" alt="logo" width="100px" height="50px">
			</td>
			
			<td align="right">
				<a href="flogin.php"> Logout</a>
			</td>
		</tr>
		
		<tr style="height:150px;">
			<td>
				<h4>Account</h4><br>
                <ul>
                    <li>
                        <a href="fhome.php">Dashboard</a>
                    </li>
                    <li>
                        <a href="fviewProfile.php">View Profile</a>
                    </li>
                    <li>
                        <a href="fEditProfile.php">Edit Profile</a>
                    </li>
                    <li>
                        <a href="fProfilePic.php">Change Profile Picture</a>
                    </li>
                    <li>
                        <a href="farticle.php">Articles</a>
                    </li>
                    <li>
                        <a href="fevents.php">Events</a>
                    </li>
                    <li>
                        <a href="fnews.php">News</a>
                    </li>
                    <li>
                        <a href="foptionGallary.php">Gallery</a>
                    </li>
                    <li>
                        <a href="fcontact.php">Contact Us</a>
                    </li>
                    <li>
                        <a href="fexpertList.php">Expert List</a>
                    </li>
                    <li>
                        <a href="fcommunity.php">Our Community</a>
                    </li>
                    <li>
                        <a href="fqna.php">QnA</a>
                    </li>
                    <li>
                        <a href="fmessage.php">Messages</a>
                    </li>
                    <li>
                        <a href="fcourses.php">Courses</a>
                    </li>
                    <li>
                        <a href="fresearch.php">Research</a>
                    </li>
                    <li>
                        <a href="fweather.php">Weather Update</a>
                    </li>
                    <li>
                        <a href="fdonate.php">Donate</a>
                    </li>
                    <li>
                        <a href="fHelp.php">Help & Suggestion</a>
                    </li>
                    <li>
                        <a href="fsponsorList.php">Sponsor list</a>
                    </li>
                    <li>
                        <a href="fattendence.php">Attendence</a>
                    </li>
                    <li>
                        <a href="fnotification.php">Notificaton</a>
                    </li>
                    <li>
                        <a href="faccVerification.php">Account Verification</a>
                    </li>
                    <li>
                        <a href="fdeleteAccount.php">Delete Account</a>
                    </li>
                    <li>
                        <a href="flogin.php">Logout</a>
                    </li>
                </ul>
			</td>
            <td align="center">
                <h1>Course List:</h1>
                <table border="1">
                <tr>
                <th>Course Id</th>
                <th>Course Name</th>
                </tr>
 
                <tbody id="data"></tbody>
                </table>
 
                <script>
                var ajax = new XMLHttpRequest();
                ajax.open("GET", "fcoursedata.php", true);
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
                 <a href="fcourseList.php">Create New Course</a>
            </td>
		</tr>
		
		<tr>
			<td colspan="2" align="center">
				18-38659-3@student.aiub.edu
			</td>
		</tr>			
	</table>
</body>
</html>