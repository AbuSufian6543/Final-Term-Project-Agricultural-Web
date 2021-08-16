<?php

    if (realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ))
    {
        header("HTTP/1.0 404 Not Found");
        exit();  

    }



?>






<td valign="top" colspan="2">


                <table border="1" style="border-collapse: collapse;" width="100%">

                    <tr height="500px">
                    
                        <td width="270px" valign="top">



                
                            <table style="padding-left: 15px;" width="100%">


                                <tr>
                                    <td>
                                        <h2>Farmer Dashboard</h2>
                                        <hr>
                                    </td>
                                </tr>



                                <tr>
                                    <td>

                                        <ul>
                                            <li><a href="../View/fdashboard.php">Dashboard</a></li><br>
                                            <li><a href="../View/fpostAdvertisements.php">Post Advertisements</a></li><br>
                                            <li>View Advertisements</li><br>
                                            <ul>
                                                <li><a href="../View/fviewOwnAdvertisements.php">Your Advertisements</a></li><br>
                                                <li><a href="../View/fviewOtherFarmerAdvertisements.php">Other Farmer Advertisements</a></li><br>
                                            </ul>
                                            <li>Research/Complain</li><br>
                                            
                                        <ul>
                                            <li><a href="../View/fviewFarmingTips.php">Research Result</a></li><br>
                                            <li><a href="../View/fpostComplaint.php">Post Complaint</a></li><br></ul>

<li>Modify Profile</li><br>
                                            <li><a href="../View/fviewProfile.php">View Profile</a></li><br>
                                            <li><a href="../View/feditProfile.php">Edit Profile</a></li><br>
                                            <li><a href="../View/fdeleteAccount.php">Delete Account</a></li><br>
                                            <li><a href="../Controller/flogOut.php">Logout</a></li><br>
                                        </ul>

<li> Apply for Internship</li><br>
										
										<ul>
                                            <li><a href="../View/fcoursedata.php">Course Data</a></li><br>
											<li><a href="../View/fshowCourseList.php">Show Course Lists</a></li><br>
											<li><a href="../View/fgallery/fshowGallery.php">Show Gallery</a></li><br>
                                            
                                        </ul>


<li>Apply for Loan</li><br>
                                            <ul>
                                                <li><a href="../View/floan/home.php">Home</a></li><br>
                                                <li><a href="../View/fviewAcceptedEquiptments.php">Equipments Accepted</a></li><br>
                                            </ul>


<li>Help and Suggestion</li><br>  <ul>
                                            <li><a href="../View/fhelp.php">Help</a></li><br>
                                            
                                        </ul>
<li>Weather</li><br>  <ul>
                                            <li><a href="../View/fweather.php">Weather</a></li><br>
                                            
                                        </ul>
<li>Donate</li><br>  <ul>
                                            <li><a href="../View/fdonate.php">Donate</a></li><br>
                                            
                                        </ul>

                                    </td>
                                    
                                </tr>


                            </table>

                        </td>

