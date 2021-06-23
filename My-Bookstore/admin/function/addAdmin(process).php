<?php

	include ('connect_database.php');
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$password=hash('ripemd160', $password);
	
	$sql="INSERT INTO userLogin (username, password, first_name, last_name) VALUES ('$username', '$password', '$firstname', '$lastname')";
	
	
	if ($conn->query($sql)===TRUE){
		echo "
		<script type=\"text/javascript\">
			alert(\"New Admin created successfully.\");
			window.location=\"addAdmin.php\";
		</script>";
		
	}
	
	else {
		echo "
		<script type=\"text/javascript\">
			alert(\"Error:".$conn->error."\");
			history.go(-1);
		</script>";
	}
	
	
	$conn->close();



?>