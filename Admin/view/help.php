<!DOCTYPE html>
<html>
<head>
	<title>Help Suggestion Page</title>
</head>
<header class="nav">
<a href="admin dashboard.html">Back</a>
</header>
<link rel="stylesheet" type="text/css" href="css/formstyle.css">
<body>

<div class="center" height="50px">
	<form id="myform" method="post" action="../controller/helpsugestion.php">
		<fieldset>
			<legend>Contact Us</legend>
			<table>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email"></td>
				</tr>
				
				<tr>
					
					<label>Reply: <br><textarea  input type="reply" name="reply"></textarea><br></label>
					
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" id="submit" value="send"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</div>
<br>
  <footer class="fixed-footer">
	
<p> &copy;Copyright 19-39444-1 </p>
 
 
</footer>
<script type="text/javascript">
 $(document).ready(function(){
 
		var form=$('#myform');
		$('#submit').click(function(){
		
		$.ajax({
		url:form.attr("action"),
		type:'post',
		data:$("#myform input").serialize(),
		success:function(data){
		console.log(data);
		}
		
		});
		
			});
		
		

</body>
</html>