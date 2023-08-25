
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
<link rel="stylesheet" href="assign.css">

</head>
<body>
<header>
<nav>
<ul>
<li>
<a href="home.php"> HOME </a>&nbsp; &nbsp;
<a href="login1.php">LOGOUT</a>
</li>
</ul>
</nav>
</header>

<div class="container">
<h2> <center>ASSIGN TASK</center><h2><br>
<form method="POST" action="assign2.php">
TASK NAME:  &nbsp; &nbsp; &nbsp;<input type="text" name="task"/><br><br><br>

<?php 

include("connection.php");
$sql="SELECT employeeid FROM login";
$result = mysqli_query($con,$sql);
if (mysqli_num_rows($result)>0)
{

?>

EMPLOYEE ID:&nbsp; <select name="emp">

<option>Select</option>
<?php
while ($row = mysqli_fetch_assoc($result))
{?>
<option value="<?php echo $row['employeeid']; ?>"><?php echo $row['employeeid']; ?></option>
<?php }} ?>

</select>

<br><br><br>
<center><input type="submit" value="ASSIGN" class="button" name="assign"/></center>


</form>
</div>
</body>
</html>