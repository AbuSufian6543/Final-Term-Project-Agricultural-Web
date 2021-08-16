<html>

<head>
	<title> Articles | Leaf </title>
</head>

<body>
    
      <table border="1" width="100%">
	  <form method="post" action="../controller/admin articleCheck.php">
		<tr>
			<td>
				<img src="aa.jpg" alt="logo" width="550px" height="250px">
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
                        <a href="viewProfile.php">View Profile</a>
                    </li>
                    <li>
                        <a href="AdminEditProfile.php">AdminEditProfile</a>
                    </li>
                 
                    <li>
                        <a href="admin contact.php">admin contact</a>
                    </li>
                    
                    <li>
                        <a href="admin community.php">admin community</a>
                    </li>
                   
                    <li>
                        <a href="login.php">Logout</a>
                    </li>
                </ul>
			</td>
            <td> 
            	<label>Headline: <br><textarea cols="40" rows="2" name="headline"></textarea><br></label>
	            <label>Your Article  : <br><textarea cols="70" rows="5" name="article"></textarea><br></label>
	            <input type="submit" name="post" value="Post">
                <br>
                <br>
                <a href="../controller/articleCheck.php">View your previous articles</a>
            
            </td>
		</tr>
		
		<tr>
			<td colspan="2" align="center">
				19-39444-1@student.aiub.edu
			</td>
		</tr>
		</form>			
	</table>
</body>
</html>