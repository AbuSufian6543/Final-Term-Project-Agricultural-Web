<?php
$conn = mysqli_connect("localhost", "root", "", "agriculture");
$result = mysqli_query($conn, "SELECT * FROM expert");
 
$data = array();
while ($row = mysqli_fetch_object($result))
{
    array_push($data, $row);
}
 
echo json_encode($data);
exit();