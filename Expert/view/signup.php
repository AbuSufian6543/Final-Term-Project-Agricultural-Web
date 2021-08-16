<!DOCTYPE html>
<html>
<head>
	<title>Signup | Leaf</title>
</head>
<body>
	<h3>Signup | Leaf</h3>
<div style="background: limegreen;">
	<form method="post" action="signupCheck.php">
		<fieldset>
			<legend>Signup</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username"></td>
					<td></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
					<td></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email"></td>
					<td></td>
				</tr>
				<tr>
					<td>Type</td>
					<td>
						<select name="type">
							<option value="admin">Admin</option>
							<option value="user">User</option>
							<option value="expert">Expert</option>
						</select>
					</td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Signup"></td>
					<td></td>
				</tr>
			</table>
		</fieldset>
	</form>
</div>
</body>
</html>