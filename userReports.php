<html>
	<head>
		<title>User Reports</title>
	</head>
	<body>
	<nav style="font-size:20px", align='center'>
		<a href="index.php">Home</a> 
		<a href="userRegister.php">Add user</a> 
	</nav>
	<br>
		<table align='center' width='1000' border='4'>
			<tr>
			<td colspan='20' align='center' bgcolor='DodgerBlue'>
			<h1>Users Report</h1></td>
			</tr>

			<tr align='center'>
				<th>No.</th>
				<th>Name</th>
				<th>E-Mail</th>
				<th>Telephone</th>
				<th>Birthday</th>
				<th>Sex</th>
				<th>Delete</th>
				<th>Edit</th>
				<th>Details</th>
			</tr>
			
		<?php
		$conn = mysqli_connect("localhost","root","","users");

		if(!$conn){
			die("Connection failed: ".mysql_connect_error());
		}

		$sql = "SELECT * FROM users";

		$query = mysqli_query($conn,$sql) or die("Bad Query: $sql");

		$i=1;

		while ($row=mysqli_fetch_assoc($query))
			{		
			?>
			<tr align="center">
			<td><?php //echo $i; $i++; 
			echo $row['id_user'];?></td>
			<td><?php echo $row['user_name']; ?></td>
			<td><?php echo $row['user_email']; ?></td>
			<td><?php echo $row['user_phone']; ?></td>
			<td><?php echo $row['user_birthday']; ?></td>
			<td><?php echo $row['user_sex']; ?></td>
			<td><a href='delete.php?delete=<?php echo $row['id_user']; ?>' onclick="return confirm('Are you sure?');" >Delete</a></td>
			<td><a href="edit.php?edit=<?php echo $row['id_user']; ?>">Edit</a></td>
			<td><a href="view.php?details=<?php echo $row['id_user']; ?>">Details</a></td>
			</tr>
		<?php } ?>
		</table>
	</body>
</html>
