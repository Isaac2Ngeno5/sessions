<?php
	session_start();

	if (!isset($_SESSION['email'])) {
		header("location: login.php");
	}else{
		echo "Welcome ".$_SESSION['email'];
		echo "\n <a href='logout.php'>LOgout</a>";
	}
?>