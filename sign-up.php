<?php
	$msg="";
	if(isset($_POST['signup']))
	{
		require_once 'dbconfig.php';
		$name=$_POST['name'];
		$email=$_POST['email'];
		$cppassword=$_POST['cppassword'];
		$password=$_POST['password'];
		if($cppassword==$password)
		{
			$password=md5($_POST['password']);
			$qry="insert into user values('$name','$email','$password')";
			if(mysqli_query($con,$qry))
				$msg="Account is created. Login to Continue";
			else
				$msg="Sorry something went wrong".mysqli_error($con);
			mysqli_close($con);
		}
		else
			$msg="Error:Password does not match";
	}
?>

<html>
	<head>
			<title>My Todo App</title>
			<link rel="stylesheet" href="css/index.css">
	</head>
	
	<body>
	<div class="indexpage">
		<table align="center">
			<tr>
				<td>
					<img src="img/todo_1280px.jpg" alt="todo image" width="200px" height="250px">
					<br>
					<h2 class="signtext">Sign Up</h2>
				</td>
				<td>
				<span><?php echo $msg ?> </span>
					<form action="" method="post">
						<input type="name" name="name" placeholder="Name">
						<input type="email" name="email" placeholder="Email">
						<input type="password" name="password" placeholder="Password">
						<input type="password" name="cppassword" placeholder="Confirm Password">
						<input type="submit" name="signup" value="Sign Up">
					</form>
					<a href="index.php">Already Have an Account ? Sign In !!</a>
				</td>
			</tr>
		</table>
		</div>
	</body>
</html>