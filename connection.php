<?php


$server = 'localhost';
$username = 'root';
$password = 'Dhruti08@';
$dbname = 'db';

$con = mysqli_connect($server,$username,$password,$dbname);

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
?>