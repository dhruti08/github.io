<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("location: index.php"); // Redirect to the login page if not logged in
    exit();
}


?>
<html>
<head>
<link rel="stylesheet" href="nav.css">
<link rel="stylesheet" href="home.css">

</head>
<body>
<header>
<nav>
<ul>
<li>
<a href="login1.php">LOGOUT</a>
</li>
</ul>
</nav>
</header>

<div class="head">
<h2> Task Management System</h2>
</div>
<br>
<br>
<div class="flex">
<div class="container">
<a href="complete.php">
<center>
<img src="ctask.png"><br>
<br>
<div class="font">COMPLETED <br>TASK </div>
</center>
</a>
</div>

<div class="container">
<a href="pending.php">
<center>
<img src="pp.png"><br>
<br>
<div class="font"> PENDING <br>TASK </div>
</center>
</a>
</div>

<div class="container">
<a href="assign.php">
<center>
<img src="assign.png"><br>
<br>
<div class="font">ASSIGN <br>TASK </div>
</center>
</a>
</div>
</div>
</body>
</html>