<?php
// starting session
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>sessions</title>
</head>
<body>
<?php
	//set session variables
	$_SESSION['favcolor'] = 'green';
	$_SESSION['favanimal'] = 'cat';

	echo "session variables are set";
?>
</body>
</html>