<?php
	session_start();
	
	$un='hasan';
	$ps='hasan';
	
	if($_POST['un']==$un && $_POST['ps']==$ps)
	{
		$_SESSION['un']=$un;
		header("location:home.php");
	}
	else
	{
		$_SESSION['count']='1';
		header("location:index.php");
	}
?>