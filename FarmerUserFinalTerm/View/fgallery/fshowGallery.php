

<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" href="styles.css">
 
    </head>

    <body>

        <?php include_once("../fheader.php"); ?>



        <tr height="500px">

            <?php include_once("../fdashboardSidebarHeader.php"); ?>


            <td>
                
				 <?php

     echo "<h1 align='center'><u>Gallery</u></h1><br>";
     foreach(glob("*.png") as $filename){
     	echo "<p>$filename</p><br>";
     	echo "<img src='$filename' alt='$filename' width='200' height='100'/>";
     }

     foreach(glob("*.jpg") as $filename){
     	echo "<p>$filename</p><br>";
     	echo "<img src='$filename' alt='$filename' width='200' height='100'/>";
     }
     echo "<br>";
?>
				
				</td>
        
        
            <?php include_once("../fdashboardSidebarFooter.php"); ?>
            
        </tr>

        <?php include_once("../ffooter.php"); ?>


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