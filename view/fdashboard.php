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
                <h1 class="welcomeHeading">Welcome <?php echo $_SESSION["name"]; ?></h1> 
                <marquee direction="left" scrollamount="20"><h3>নো মাস্ক নো সার্ভিস। করোনাভাইরাসের বিস্তার রোধে এখনই ডাউনলোড করুন Corona Tracer BD অ্যাপ। ডাউনলোড করতে ক্লিক করুন https://bit.ly/coronatracerbd।  করোনাভাইরাস রোগ কোভিড-১৯ এর বিস্তার রোধকল্পে সার্বিক কার্যাবলি/চলাচলে বিধি-নিষেধ আরোপ *** বঙ্গবন্ধু'র কৃষি বিষয়ক বাণী *** করোনা ভাইরাসের প্রভাব মোকাবিলায় কৃষি মন্ত্রীর ভিডিও বার্তা  ***  </h3> </marquee><br>
                
                <h2 class="postAdNow">Post your advertisements <a href="../View/fpostAdvertisements.php">now</a>! </h2>
            
            </td>
        
        
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