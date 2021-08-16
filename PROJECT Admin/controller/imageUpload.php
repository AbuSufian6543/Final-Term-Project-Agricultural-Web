<?php
	  $filename = $_FILES['image']['name'];
	  $filesize = $_FILES['image']['size'];
	  $filetemp = $_FILES['image']['tmp_name'];
	  $ext = explode('.', $filename);
	  $location = 'images/'.time().'.'.$ext[1];
	  if(move_uploaded_file($filetemp, $location)){
		echo "<img src=".$location." height=200 width=300 />";
	  }else{
		echo "image upload error";
     
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<br>
<a href="imageUpload.html">
</body>
</html>