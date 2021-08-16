

<!DOCTYPE html>
<html>
<head>
	<title>Donate Page</title>
</head>

<body>

<div>
	<form method="post" action="../controller/admindonateCheck.php">
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

</body>
</html>