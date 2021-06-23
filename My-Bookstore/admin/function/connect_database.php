<?php
	$servername="10.10.20.20:10002";
	$username="sangfor";
	$password="@Sangfor123";
	$dbname="book_store";
			
			
	// Create connection
	$conn= new mysqli($servername, $username, $password,$dbname);
			
	// Check connection
	if($conn -> connect_error){	
		die("Connection failed: ". $conn->connect_error);
		}
	
?>
	