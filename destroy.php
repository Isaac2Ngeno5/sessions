<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>destroy session</title>
</head>
<body>
<?php
	//session destroy by unsetting the session variables
	session_unset();

	//using the session destgroy function
	session_destroy();
?>
	
</body>
</html>