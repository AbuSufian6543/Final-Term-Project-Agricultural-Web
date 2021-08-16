<?php



    session_start();


    if(!isset($_SESSION["loggedInUserName"]) && !isset($_COOKIE["loggedInUserName"]))
    {
        header("Location: ../View/flogin.php");
    }

    require_once("../Model/ffarmingTipsService.php");

    $farmingTips = retrieveFarmingTips();

    

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Research Result</title>
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>

        <?php include_once("fheader.php"); ?>

        <tr height="500px">

            <?php include_once("fdashboardSidebarHeader.php"); ?>

                        <td>

                            <div style="padding-left: 50px;">
                            
                                <h2> View Research Result </h2>
                                <hr>

                                <?php
                                
                                    if(is_null($farmingTips))
                                    {
                                
                                ?>
                                        <table><tr> <td align=center colspan=6> <h3> No Tips to show! </h3> </td> </tr></table>

                                <?php

                                    }

                                    else
                                    {

                                        for($i=0; $i<count($farmingTips); $i++)
                                        {
                                
                                ?>
                                        <table>
                                            <tr>
                                                <td>
                                                    <h3><?=$farmingTips[$i]["headline"]?></h3>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <?=$farmingTips[$i]["tips_details"]?>
                                                </td>
                                            </tr>
                                            <tr height="20px">
                                            <td>
                                            </td>
                                            </tr>
                                        </table>

                                <?php

                                        }

                                    }
                                
                                ?>

                            </div>
                            
                        
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