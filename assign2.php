<?php
include("connection.php");
$taskname = $_POST['task'];
$status = "Pending";
if(!empty($_POST['emp'])) {  

$empid = $_POST['emp'];
}
 
$sql = "INSERT INTO completed (employeeid,taskname,status) values ('$empid','$taskname','$status')";
mysqli_query($con,$sql); 
header("location: pending.php");
?>