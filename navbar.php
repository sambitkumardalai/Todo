<html>
	<head>
			<title>My Todo App</title>
			<head>
			<link rel="stylesheet" href="css/navbar.css">
			</head>
			
	</head>
	
	<body>
		<nav>
			<img class="logo" src="img/todo_1280px.jpg">
			<ul>
				<li><a href="user_home.php">HOME</a></li>
				<li><a href="add_todo.php">ADD TODO</a></li>
				<li><a href="user_profile.php">PROFILE</a></li>
				<li><a href="logout.php">LOG OUT</a></li>
				<li><span style="font:bold italic 18px arial;">
							<?php
								session_start();
								 echo "Welcome ".$_SESSION['name'];
							?> 
				</span></li>
			</ul>
		</nav>
	</body>
</html>