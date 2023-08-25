<?php
session_start();
include('connection.php');

$username = $_POST['fname'];
$password = $_POST['pass'];

$sql = "SELECT * FROM login WHERE username='$username' and password='$password'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
if ($count == 1) {
        $_SESSION['username'] = $username;
        header("location: home.php");
exit(); 
}

else
{     
    echo '<script>alert("Invalid Password or Username")</script>';
	include('index.php');
}     


?>