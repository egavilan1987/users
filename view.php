<?php

$conn = mysqli_connect("localhost","root","","users");

if(!$conn){
	die("Connection failed: ".mysql_connect_error());
}

$edit_record = $_GET['details'];

$sql = "SELECT * FROM  users WHERE id_user='$edit_record'";
$query = mysqli_query($conn, $sql) or die("Bad Query: $sql");


while ($row=mysqli_fetch_assoc($query))
	{		
	 	$id_user = $row['id_user'];
	 	$name = $row['user_name'];
	 	$email = $row['user_email'];
	 	$telephone = $row['user_phone'];
	 	$bday = $row['user_birthday'];
	 	$sex = $row['user_sex'];
	 	$created = $row['created_date'];
		$updated = $row['updated_date'];

	}
?>

<html>
	<head>
		<title>Updating Users's Record</title>		
	</head>  

<body>
	<nav style="font-size:20px", align='center'>
		<a href="index.php">Home</a> 
		<a href="userRegister.php">Add user</a> 
		<a href="userReports.php">All Users</a> 
	</nav>
	<br>
	<form method='post' action='edit.php?edit_form=<?php echo $edit_id; ?>'>
		<table width='500' border='3' align='center'>
	      	<tr>
				<th bgcolor='DodgerBlue' colspan='5'>User Detail</h>
			</tr>
	  		<tr >
				<td align='right'>Name:</td>
				<td>
					<input type='text' name='name' value='<?php echo $name; ?>' readonly>
				</td>
			</tr>
			<tr>
				<td align='right'>E-mail:</td>
				<td>
					<input type='email' name='email' value='<?php echo $email; ?>' readonly>
				</td>
			</tr>
			<tr>
				<td align='right'>Telephone: </td>
				<td>
					<input type='text' name='telephone' value='<?php echo $telephone; ?>' readonly>
				</td>
			</tr>
			<tr>
				<td align='right'>Birthday: </td>
				<td>
					<input type='date' name='bday' value='<?php echo $bday; ?>'readonly>
				</td>
			</tr>
			<tr>
				<td align='right'>Sex: </td>
				<td>
					<input type='text' name='sex' value='<?php echo $sex; ?>'readonly>
				</td>
			</tr>
			<tr>
				<td align='right'>Created at: </td>
				<td>
					<input type='text' name='created' value='<?php echo $created; ?>'readonly>
				</td>
			</tr>
			<tr>
				<td align='right'>Last Update at: </td>
				<td>
					<input type='text' name='updated' value='<?php echo $updated; ?>'readonly>
				</td>
			</tr>
	  	</table>  
	</form>
	<br>
</body>
</html>


