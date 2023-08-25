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
    <title>Completed Task</title>
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="table.css">
    <style>
        a {
            text-decoration: none;
        }
    </style>
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
    <h2><center>PENDING TASK</center></h2>
    <table border="1" cellpadding="5" height="100" width="1050" cellspacing="0">
        <tr>
            <th>EMPLOYEE ID</th>
            <th>TASK ID</th>
            <th>TASK NAME</th>
            <th>STATUS</th>
        </tr>
        <?php 
        include('connection.php');
        $match = "pending";
        $sql = "SELECT * FROM completed WHERE status='$match'";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
    <td><?php echo $row['employeeid']; ?></td>
    <td><?php echo $row['taskid']; ?></td>
    <td><?php echo $row['taskname']; ?></td>
    <td>
        <a href="pending2.php?employeeid=<?php echo $row['employeeid']; ?>&taskid=<?php echo $row['taskid']; ?>">
            <?php echo $row['status']; ?>
        </a>
    </td>
</tr>

        <?php }
        } else { ?>
        <tr>
            <td colspan="5">NO DATA FOUND</td> 
        </tr>
        <?php } ?>
    </table>
</body>
</html>

</html>