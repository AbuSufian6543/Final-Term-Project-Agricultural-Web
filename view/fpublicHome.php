<?php


    session_start();


    if(isset($_SESSION["loggedInUserName"]) || isset($_COOKIE["loggedInUserName"]) )
    {
        header("Location: ../View/fdashboard.php");
    }

    

?>










<!DOCTYPE html>
<html>
    <head>
        <title> Public Home </title>
    </head>

<body>
















            <?php include_once("../View/fheaderBeforLogin.php"); ?>
            <tr height="400px">


                <td colspan="2" align="Center">
                    <marquee direction="left" scrollamount="20"><h3 style="background-color:Tomato;">নো মাস্ক নো সার্ভিস। করোনাভাইরাসের বিস্তার রোধে এখনই ডাউনলোড করুন Corona Tracer BD অ্যাপ। ডাউনলোড করতে ক্লিক করুন https://bit.ly/coronatracerbd। করোনাভাইরাস রোগ কোভিড-১৯ এর বিস্তার রোধকল্পে সার্বিক কার্যাবলি/চলাচলে বিধি-নিষেধ আরোপ *** বঙ্গবন্ধু'র কৃষি বিষয়ক বাণী *** করোনা ভাইরাসের প্রভাব মোকাবিলায় কৃষি মন্ত্রীর ভিডিও বার্তা  ***  </h3> </marquee><br>
                    <table>
                        <tr>
                            <td align="center" width="200px"> <img src="../View/fimg/farmerr.png" width="100px" height="100px"> </td>
                            
                        </tr>

                        <tr>
                            <td align="center" width="200px"> Farmer <br> <a href="../View/flogIn.php">Login</a> or <a href="../View/fregistration.php">Sign Up</a>  </td>
                            </tr>

                    </table>
                </td>

 
            </tr>
            <?php include_once("../View/ffooterBeforeLogin.php"); ?>


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