<html>

<head>
	<title> QnA  </title>
</head>
<header class="nav">
<a href="../index_home.html">Home </a> |<a href="visitor_Dashboard.html">Menu</a>
</header>
<link rel="stylesheet" type="text/css" href="Tasniacss/pagestyle.css">

<body>
	<table border="1" width="100%">
	  <form method="post" action="../controller/visitorqnaCheck.php">
		<tr>
            <td> 
            	<label>Question: <br><textarea cols="40" rows="2" name="question"></textarea><br></label>
            	<label>Answer: <br><textarea cols="60" rows="10" name="answer"></textarea><br></label>
	            
	            <input type="submit" name="post" value="Post">
                <br>
                <br>
                <a href="../controller/visitorqnaCheck.php">privious QnA</a>
            </td>
		</tr>
		
		
		</form>			
	</table>
	<footer class="fixed-footer">
	
<p> 19-40005-1@student.aiub.edu</p>
 
 
</footer>
</body>
</html>
