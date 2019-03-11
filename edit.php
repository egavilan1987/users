<?php

require_once "connection.php";

$edit_record = $_GET['edit'];

$sql = "SELECT * FROM  users WHERE id_user='$edit_record'";
$query = mysqli_query($conn, $sql) or die("Bad Query: $sql");

while ($row=mysqli_fetch_assoc($query))
	{		
	 	$edit_id = $row['id_user'];
	 	$name = $row['user_name'];
	 	$email = $row['user_email'];
	 	$telephone = $row['user_phone'];
	 	$bday = $row['user_birthday'];
	 	$sex = $row['user_sex'];	 	
	}
?>

<html>
	<head>
		<title>Updating Users's Record</title>		
	</head>  

<body>
	<br><br>
	<nav style="font-size:20px", align='center'>
		<a href="index.php">Home</a> 
		<a href="userRegister.php">Add user</a> 
		<a href="userReports.php">All Users</a> 
	</nav>

	<br><br>

	<form method='post' action='edit.php?edit_form=<?php echo $edit_id; ?>'>
		<table width='500' border='3' align='center'>
	      	<tr>
				<th bgcolor='DodgerBlue' colspan='5'>Udpating User Information</h>
			</tr>
	  		<tr >
				<td align='right'>Name:</td>
				<td>
					<input type='text' name='name' value='<?php echo $name; ?>' required>
				</td>
			</tr>
			<tr>
				<td align='right'>E-mail:</td>
				<td>
					<input type='email' name='email' value='<?php echo $email; ?>' required>
				</td>
			</tr>
			<tr>
				<td align='right'>Telephone: </td>
				<td>
					<input type='text' name='telephone' value='<?php echo $telephone; ?>' required>
				</td>
			</tr>
			<tr>
				<td align='right'>Birthday: </td>
				<td>
					<input type='date' name='bday' value='<?php echo $bday; ?>'required>
				</td>
			</tr>
			<tr>
				<td align='right'>Sex: </td>
				<td>
					<select name='sex' value='<?php echo $sex; ?>' required>
					  <option value="Male">Male</option>
					  <option value="Female">Female</option>
					  <option value="Other">Other</option>
					</select>
				</td>
			</tr>
			<tr>
				<td align='center' colspan='6'>
					<input type='submit' name='update' value='Update'>
				</td>
			</tr>  
	  	</table>  
	</form>
	<br>
</body>
</html>

<?php
if (isset($_POST['update'])) {

	$edit_record1 = $_GET['edit_form'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$telephone = $_POST['telephone'];
	$bday = $_POST['bday'];
	$sex = $_POST['sex'];

$sql1 = "UPDATE users SET 
				user_name = '$name', 
				user_email = '$email',
				user_phone = '$telephone',
				user_birthday = '$bday',
				user_sex = '$sex',
				updated_date = NOW()

				WHERE id_user = '$edit_record1'";

$query1 = mysqli_query($conn,$sql1);

if($query1){
		echo"<script>window.open('userReports.php?updated=Record hass been updated..!','_self')</script>";
		}
	}
?>
