<?php
require_once 'dbconfig.php';
$id=$_GET['id'];
$status=$_GET['status'];
if($status==0)
	$status=1;
else
	$status=0;
$qry="update todos set status=$status where id=$id";
if(mysqli_query($con,$qry))
	header("location:user_home.php");
else
	echo mysqli_error($con);
?>