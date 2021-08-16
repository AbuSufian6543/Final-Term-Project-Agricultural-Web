

<!DOCTYPE html>
<html>
<head>
	<title>Donate Page</title>
</head>
<header class="nav">
<a href="../index_home.html">Home </a> |<a href="visitor_Dashboard.html">Back</a>
</header>
<link rel="stylesheet" type="text/css" href="Tasniacss/formstyle.css">

<body>

<div>
	<form method="post" action="../controller/VisdonateCheck.php">
		<fieldset>
			<legend>Donate Here</legend>
			<table>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name"></td>
				</tr>
				
				 <tr>
					<td>Account No </td>
					<td><input type="account_no" name="account_no"></td>
				</tr>
				<tr>
					<td>Amount</td>
					<td><input type="amount" name="amount"></td>
				</tr>
				
				
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="send"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</div>
<footer class="fixed-footer">
	
<p>19-40005-1@student.aiub.edu</p>
 
 
</footer>
</body>
</html>