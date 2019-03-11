<html>
	<head>
		<title>User Reports</title>
	</head>
	<body>
	<br><br>
	<nav style="font-size:20px", align='center'>
		<a href="index.php">Home</a> 
		<a href="userRegister.php">Add user</a> 
		<a href="userReports.php">All Users</a> 
	</nav>
	</body>
</html>



<?php

require_once "connection.php";

$delete_record = $_GET['delete'];


mysqli_query($conn, "DELETE FROM users WHERE  id_user = '$delete_record'");

echo "<center><br><b>Record Has Been Deleted Successfully!</b></center><br>";

?>