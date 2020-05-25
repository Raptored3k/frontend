<?php 
	session_start();
	if(isset($_SESSION['gender']))
		unset($_SESSION['gender']);
	header("Location: index.php");
?>