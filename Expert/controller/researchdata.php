<?php
$conn = mysqli_connect("localhost", "root", "", "agriculture");
$result = mysqli_query($conn, "SELECT * FROM research");
 
$researchdata = array();
while ($row = mysqli_fetch_object($result))
{
    array_push($researchdata, $row);
}
 
echo json_encode($researchdata);
exit();