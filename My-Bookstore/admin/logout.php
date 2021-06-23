<?php

	session_start();
	if(session_destroy()) // Destroying All Sessions
	{
		header("Location: ../Main.php"); // Redirecting To Home Page
	}
	
?>