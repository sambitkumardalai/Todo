<?php
	require_once 'dbconfig.php';
	require_once 'navbar.php';
	$msg="";
	session_start();
	$e=$_SESSION['email'];
	
	if(isset($_POST['change']))
	{
		$newpassword=md5($_POST['password']);
		
		$qry="update user set password='$newpassword' where email='$e' ";
		if(mysqli_query($con,$qry))
			$msg="Password changed";
			
		else
			$msg="Sorry something went wrong".mysqli_error($con);
		mysqli_close($con);
	}
?>
<html>
	<head>
			<link rel="stylesheet" href="css/add_todo.css">
	</head>
	
	<body>
		<div class="addtodopage">
		<table align="center">
			<tr >
				<td>
					<form action="" method="post">
					<div class="addtodolable">
					<td>
					<span style="display:block;margin-left:40px;"><?php echo $msg;?></span>
					<form action="" method="post">
					<input type="password" name="password" placeholder="Enter Password">
					<input type="password" name="cppassword" placeholder="Confirm Password">
					<input type="submit" name="change" value="Change" >
					</form>
					</td>
					</div>
					</form>
				</td>
			</tr>
		</table>
		</div>
	</body>
</html>