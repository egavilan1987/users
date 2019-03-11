<html>
	<head>
		<title>Users Register</title>		
	</head> 

	<nav style="font-size:20px", align='center'>
		<a href="index.php">Home</a> 
		<a href="userReports.php">All User</a> 
	</nav>
<body>
	<br>
	<form method='post' action='userRegister.php'>
		<table width='500' border='3' align='center'>
	      	<tr>
				<th bgcolor='DodgerBlue' colspan='5'>Users Register</h>
			</tr>
	  		<tr >
				<td align='right'>Name:</td>
				<td>
					<input type='text' name='name' required>
				</td>
			</tr>
			<tr>
				<td align='right'>E-mail:</td>
				<td>
					<input type='email' name='email' required>
				</td>
			</tr>
			<tr>
				<td align='right'>Telephone: </td>
				<td>
					<input type='text' name='telephone' required>
				</td>
			</tr>
			<tr>
				<td align='right'>Password :</td>
				<td>
					<input type='password' name='password' required>
				</td>
			</tr>
			<tr>
				<td align='right'>Birthday: </td>
				<td>
					<input type='date' name='bday' required>
				</td>
			</tr>
			<tr>
				<td align='right'>Sex: </td>
				<td>
					<select name='sex' required>
					  <option value="Male">Male</option>
					  <option value="Female">Female</option>
					  <option value="Other">Other</option>
					</select>
				</td>
			</tr>
			<tr>
				<td align='center' colspan='6'>
					<input type='submit' name='submit' value='Register'>
				</td>
			</tr>  
	  	</table>  
	</form>
	<br>
</body>

</html>
<?php

require_once "connection.php";

if(isset($_POST['submit']))
{
	 $name = $_POST['name'];
	 $email = $_POST['email'];
	 $telephone = $_POST['telephone'];
	 $password = $_POST['password'];
	 $bday = $_POST['bday'];
	 $sex = $_POST['sex'];


$sql = "INSERT INTO users(user_name, user_email, user_phone, user_password, user_birthday, user_sex, created_date, updated_date) VALUES('$name','$email','$telephone','$password', '$bday', '$sex', NOW(),NOW())";
$query=mysqli_query($conn,$sql);


if($query){
		echo "<center><b>Data of the New User Registered.</b></center><br>";
		echo 
		"<table align='center' border='4'>
			</tr>
			<tr bgcolor='DodgerBlue' align='center'>
				<th>Name</th>
				<th>E-mail</th>
				<th>Telephone</th>
				<th>Birthday</th>
				<th>Sex</th>
			</tr>
			<tr>
				<td>$name</td>
				<td>$email</td>
				<td>$telephone</td>
				<td>$bday</td>
				<td>$sex</td>
			</tr>
		</table>";
		}
	}
?>

</body>
