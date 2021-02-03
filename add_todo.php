<?php
	require_once 'navbar.php';
	$msg="";
	if(isset($_POST['add']))
	{
		require_once 'dbconfig.php';
		$id=0;
		$email=$_SESSION['email'];
		$todo=$_POST['todo'];
		$date=$_POST['date'];
		$time=$_POST['time'];
		$status=0;
		$qry="insert into todos values($id,'$email','$todo','$date','$time',$status)";
		if(mysqli_query($con,$qry))
			header("location:user_home.php");
		else
			$msg="sorry something went wrong".mysqli_error($con);
		mysqli_close($con);
	}
	
?>

<html>
	<head>
			<title>My Todo App</title>
			<link rel="stylesheet" href="css/add_todo.css">
	</head>
	
	<body>
		<div class="addtodopage">
		<table align="center">
			<tr>
				<td>
					<img class="addtodoimg" src="img/todo_1280px.jpg" alt="todo image">
					<br>
					<h2 style="margin-left:48%";>Add Todo</h2>
				</td>
				<td>
				<span class="span"><?php echo $msg ?>; </span>
					<form action="" method="post">
					<div class="addtodolable">
						<label for="todo">TODO:</label>
						<input type="text" name="todo" required>
						<label for="date">DATE:</label>
						<input type="date" name="date" required>
						<label for="time">TIME:</label>
						<input type="time" name="time" required>
						<input type="submit" name="add" value="Add Todo">
					</div>
					</form>
				</td>
			</tr>
		</table>
		</div>
	</body>
</html>