<?php
	session_start();

	//removes all values assigned for the session variables
	session_unset();
	session_destroy();

		header("Location: index.php");
?>
