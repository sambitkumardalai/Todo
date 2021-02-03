<?php
	require_once 'dbconfig.php';
	require_once 'navbar.php';
	$qry="select *from user where email='$_SESSION[email]'";
	$res=mysqli_query($con,$qry);
	$user=mysqli_fetch_assoc($res);
?>
<html>
	<head>
		<link rel="stylesheet" href="css/user_home.css">
	</head>
<body>
		<div class="userprofilebody">
	<table>
		<caption>Your Profile</caption>
		<tr>
			<td>Name:</td>
			<td><?php echo $user['name'];?></td>
		</tr>
		
		<tr>
			<td>Email:</td>
			<td><?php echo $user['email'];?></td>
		</tr>
		
		<tr>
			<td>Password:</td>
			<td>********</td>
		</tr>
		
		<tr>
			<td class="profilelinks">
				<a href="change_password.php">Change Password</a>
				<a href="delete.php">Delete Account</a>
			</td>
		</tr>
	</table>
	</div>
</body>
</html>
