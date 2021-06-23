<?php

	include('connect_database.php');
	
	$name=$_POST['Name'];
	$email=$_POST['Email'];
	$subject=$_POST['Subject'];
	$comment=$_POST['Comment'];
	
	// replace all the single quote to " \' "
	$subject=str_replace("'","\'",$subject);
	$comment=str_replace("'","\'",$comment);
	
	$sql="INSERT INTO enquiry (name, email, subject, comment) VALUES('$name', '$email', '$subject','$comment')";
	
	
	if ($conn->query($sql)===TRUE){
		echo "
		<script type=\"text/javascript\">
			alert(\"Enquiry form submitted Successfully.\");
			window.location=\"../contactUs.php\";
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