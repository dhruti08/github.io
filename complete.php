
<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("location: index.php"); // Redirect to the login page if not logged in
    exit();
}
?>

<html>
<head><title> completed task</title>
<link rel="stylesheet" href="nav.css">
<link rel="stylesheet" href="table.css">

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
<h2><center>COMPLETED TASK</center></h2>
<table border="1" cellpadding="5" height="100" width="1050" cellspacing="0">
<tr>
<th>EMPLOYEE ID</th>
<th>TASK ID</th>
<th>TASK NAME</th>
<th>STATUS</th>
<th>ACTION</th>
</tr>

<?php 
include('connection.php');
$match = "completed";
$sql = "SELECT * FROM completed WHERE status='$match'";
$result = mysqli_query($con,$sql);
if (mysqli_num_rows($result)>0)
{
while ($row = mysqli_fetch_assoc($result))
{
?>
<form method="POST" action="delete.php">
<tr>
<td> <input type="text" name="id" value="<?php echo $row['employeeid']; ?>"></td>
<td> <input type="text" name="taskid" value="<?php echo $row['taskid']; ?>"></td>
<td> <?php echo $row['taskname']; ?></td>
<td> <?php echo $row['status']; ?></td>
<td> <input type="submit" class="button" name="Delete" value="Delete"/></a></td>
</tr>
</form>
<?php }
} else { ?>
<tr>
<td colspan="5"> NO DATA FOUND </td> 
</tr>
<?php } ?>
</table>

</bod
y>
</html>