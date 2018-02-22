<?php
	session_start();
	session_destroy();

	echo "session expired. <a href='login.php'>login again</a>";
?>