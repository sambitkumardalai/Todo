<?php
 require_once 'navbar.php';
 require_once 'dbconfig.php';
 $email=$_SESSION['email'];
 $qry="select *from todos where user_email='$email' order by status,day";
 $res=mysqli_query($con,$qry) or die(mysqli_error($con));
 if(mysqli_num_rows($res)>0){
	 ?>
	<html>
		<link rel="stylesheet" href="css/user_home.css">
	<head>
	</head>
	<body>
		<div class="userhomepagebody">
			<table>
		<caption>Your Todo(s)</caption>
		<tr>
		<th>Todo</th>
		<th>Date</th>
		<th>Time</th>
		<th>Status</th>
		<th>Action</th>
		</tr>
		<?php
			while($todo=mysqli_fetch_assoc($res)){
				echo " <tr>
					<td>$todo[todo]</td>
					<td>$todo[day]</td>
					<td>$todo[time]</td>
					<td>";
					if($todo['status']==0)
						echo "Incomplete";
					else
						echo "Completed";
				
				echo "</td>	<td>
				<div class='links'>
				<a href='toggle_status.php?id=".$todo['id']."& status=".$todo['status']."'>Change Status</a>
				<a href='delete_todo.php?id=".$todo['id']."'>Remove</a></div>
			</td>
		</tr>";
		}
		?>
	</table>
		</div>
	</body>
	
	</html>
	<?php 
 }
 ?>