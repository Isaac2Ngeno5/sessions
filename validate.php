<?php
	require "condb.php";
	
	$vmail = "script@gmail.com";
	$vword = "1234";

	$email = $_POST['email'];
	$password = $_POST['password'];

	if(isset($_POST['submit'])){
		$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
		$result = $conn->query($sql);
	
		if ($result->num_rows > 0) {
	    // output data of each row
		    while($row = $result->fetch_assoc()) {
		    	session_start();
		    	$_SESSION['email'] = $row["id"];
					header("location:welcome.php");
		    }
		} else {
	    	echo "0 results";
		}
		$conn->close();
	}else{
		header("location:login.php");
	}
?>