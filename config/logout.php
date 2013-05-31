<?php
	session_start();
	if($_SESSION['user_id'] < "0" ){ 
		header("location:login.php"); 
	}
	else{
		session_unset();
		header("location:/index.php");
	}
?>