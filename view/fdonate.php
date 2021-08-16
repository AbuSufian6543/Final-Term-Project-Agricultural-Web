<?php



    session_start();


    if(!isset($_SESSION["loggedInUserName"]) && !isset($_COOKIE["loggedInUserName"]))
    {
        header("Location: ../View/flogin.php");
    }

    require_once("../Model/ffarmerUserService.php");
    

    $userData = retrieveFarmerUser($_SESSION["loggedInUserName"] ?? $_COOKIE["loggedInUserName"]);

    $_SESSION["userID"] = $userData["id"];
    $_SESSION["name"] = $userData["name"];
    $_SESSION["email"] = $userData["email"];
    $_SESSION["userName"] = $userData["username"];
    $_SESSION["password"] = $userData["password"];




    

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" href="styles.css">
 
    </head>

    <body>

        <?php include_once("fheader.php"); ?>



        <tr height="500px">

            <?php include_once("fdashboardSidebarHeader.php"); ?>


            <td>
                <form method="post" action="../controller/fVisdonateCheck.php">
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
				</tr></td>
        
        
            <?php include_once("fdashboardSidebarFooter.php"); ?>
            
        </tr>

        <?php include_once("ffooter.php"); ?>


        <script type="text/javascript">

        
            function toggleDarkMode()
            {
                let darkModeStatus = localStorage.getItem("darkModeStatus");
                var content = document.getElementsByTagName("body")[0];
                var darkModeToggler = document.getElementById("darkModeToggler");
                
                if(darkModeStatus == "enabled")
                {
                    darkModeToggler.classList.remove('active');
                    content.classList.remove('dark');

                    localStorage.setItem("darkModeStatus", "disabled" );
                }
                else
                {
                    darkModeToggler.classList.toggle('active');
                    content.classList.toggle('dark');

                    localStorage.setItem("darkModeStatus", "enabled" );

                }
            }


            function updateDarkMode()
            {
                let darkModeStatus = localStorage.getItem("darkModeStatus");
                var content = document.getElementsByTagName("body")[0];
                var darkModeToggler = document.getElementById("darkModeToggler");

                if(darkModeStatus == "enabled")
                {
                    darkModeToggler.classList.toggle('active');
                    content.classList.toggle('dark');

                    localStorage.setItem("darkModeStatus", "enabled");
                }
                else
                {
                    darkModeToggler.classList.remove('active');
                    content.classList.remove('dark');
                    localStorage.setItem("darkModeStatus", "disabled");

                }
            }

        </script>
    </body>
</html>