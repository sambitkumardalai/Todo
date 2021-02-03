<?php
require_once 'dbconfig.php';
$id=$_GET['id'];
$qry="delete from todos where id=$id";
if(mysqli_query($con,$qry))
	header("location:user_home.php");
else
	echo mysqli_error($con);
?>