<?php
	$msg="";
	if(isset($_POST['signin']))
	{
		require_once 'dbconfig.php';
		$email=$_POST['email'];
		$password=md5($_POST['password']);
		$qry="select *from user where email='$email' and password='$password'";
		$res=mysqli_query($con,$qry);
		if(mysqli_num_rows($res)>0)
		{
			$user=mysqli_fetch_assoc($res);
			session_start();
			$_SESSION['name']=$user['name'];
			$_SESSION['email']=$user['email'];
			header("location:user_home.php");
		}
		else
			$msg="Invalid Username or Password";
		mysqli_close($con);
	}
?>



<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
			<title>My Todo App</title>
			<link rel="stylesheet" href="./css/index.css">
	</head>
	
	<body>
	<div class="indexpage">
		<table align="center">
			<tr>
				<td>
					<img src="./img/todo_1280px.jpg" alt="todo image">
					<br>
					<h2 class="signtext">Sign In</h2>
				</td>
				<td>
				<span><?php echo $msg;?></span>
					<form action="" method="post">
						<input type="email" name="email" placeholder="Email">
						<input type="password" name="password" placeholder="Password">
						<input type="submit" name="signin" value="Sign In">
					</form>
					<a href="sign-up.php">New User ? Create an Account !!</a>
				</td>
			</tr>
		</table>
		</div>
	</body>
</html>