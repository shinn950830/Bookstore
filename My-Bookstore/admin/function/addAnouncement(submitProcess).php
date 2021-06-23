<?php

	include ('connect_database.php');
	
	$anouncement=$_POST['anouncement'];
	$PIC=$_POST['PIC'];

	// replace all the single quote to " \' "
	$anouncement=str_replace("'","\'",$anouncement);
	
	$sql="INSERT INTO anouncement (content, personAdded) VALUES ('$anouncement', '$PIC')";
	
	
	if ($conn->query($sql)===TRUE){
		echo "
		<script type=\"text/javascript\">
			alert(\"New Announcement added successfully.\");
			window.location=\"addAnouncement.php\";
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