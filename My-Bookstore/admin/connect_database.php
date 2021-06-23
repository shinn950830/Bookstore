<?php
	$servername="10.42.60.246";
	$username="sangfor";
	$password="@Sangfor123";
	$dbname="book_store";
			
			
	// Create connection
	$conn= new mysqli($servername, $username, $password,$dbname);
	//mysql_set_charset('utf8',$conn);	
	// Check connection
	if($conn -> connect_error){	
		die("Connection failed: ". $conn->connect_error);
		}
	
?>
	