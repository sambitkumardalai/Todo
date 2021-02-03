<?php
	require_once 'dbconfig.php';
	require_once 'navbar.php';
	$msg="";
	session_start();
	$e=$_SESSION['email'];
	if(isset($_POST['delete']))
	{	
			$q_u="delete from user where email='$e'"; 
			mysqli_query($con,$q_u);
			$q_t="delete from todos where user_email='$e'";
			mysqli_query($con,$q_t);
		
		
		/*$tables=array("user","todos");
		foreach($tables as $t)
		{
			$q="delete from $t where email='$e' or user_email='$e'"; 
			mysqli_query($con,$q);
		}*/
		
		mysqli_close($con);
		session_destroy();
		header("location:index.php");
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
				<span><?php echo $msg;?>
				<form action="" method="post">
					<input type="submit" name="delete" value="Delete" style="background-color:red;margin-left:200px;">
				</form>
				</td>
			</tr>
		</table>
		</div>
	</body>
</html>