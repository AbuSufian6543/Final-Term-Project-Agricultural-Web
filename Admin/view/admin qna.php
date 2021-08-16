<html>

<head>
	<title> QnA | Agriculture </title>
</head>

<body>
	<table border="1" width="100%">
	  <form method="post" action="../controller/admin qnaCheck.php">
		<tr>
			<td>
				<img src="404.jpg" alt="logo" width="300px" height="250px">
			</td>
			
			<td align="right">
				<a href="login.php"> Logout</a>
			</td>
		</tr>
		
		<tr style="height:150px;">
			<td>
				<h4>Account</h4><br>
          
			</td>
            <td> 
            	<label>Question: <br><textarea cols="40" rows="2" name="question"></textarea><br></label>
	            <label>Answer  : <br><textarea cols="70" rows="10" name="answer"></textarea><br></label>
	            <input type="submit" name="post" value="Post">
                <br>
                <br>
                <a href="../controller/admin qnaCheck.php">View your privious uploaded QnA</a>
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
