<?php 

session_start();

    include("../model/connection.php");
    include("../model/functions.php");

    $user_data = check_login($con);

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $id = $_SESSION['user_id'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(!empty($username) && !empty($email) && !empty($password) && !is_numeric($username))
        {

            //save to database
        $user_id = random_num(20);
        $updatequery = "update users set username = '$username', password= '$password', email= '$email' where user_id = '$id'";
            

            mysqli_query($con, $updatequery);

            header("Location: viewProfile.php");
            die;
        }else
        {
            echo "Please enter some valid information!";
        }
    }
?>
<html>

<head>
	<title> Edit Profile | Leaf </title>
</head>

<body>
    <style type="text/css">
    #box1{
        background-color: yellow;
        margin: auto;
        border: 2px solid;
    }
    </style>
	<table border="1" width="100%">
		<tr>
			<td>
				<img src="s.png" alt="logo" width="450px" height="350px">
			</td>
			
			<td align="right">
				<a href="login.php"> Logout</a>
			</td>
		</tr>
		
		<tr style="height:150px;">
			<td>
				<h4>Account</h4><br>
                <div id="box1">
                
            </div>
			</td>
            <td align="center">
                <h3>Edit Profile</h3>
<div style="background: red;">
    <form method="post" action="">
        <fieldset>
            <legend>Edit profile</legend>
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" value="<?php echo $user_data['username']; ?>"></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" value="<?php echo $user_data['password']; ?>"></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" value="<?php echo $user_data['email']; ?>"></td>
                    <td></td>
                </tr>
            
                <tr>
                    <td></td>
                    <td><input type="submit" name="update" value="Update"></td>
                    <td></td>
                </tr>
            </table>
        </fieldset>
    </form>
</div>
            </td>
		</tr>
		
		<tr>
			<td colspan="2" align="center">
				19-39444-1@student.aiub.edu
			</td>
		</tr>			
	</table>
</body>
</html>