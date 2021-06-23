<?php
	include('connect_database.php');
	
	$emailAddress=$_POST['emailAddress'];
	
	$sql="INSERT INTO subscriber (emailAddress) VALUES ('$emailAddress')";
	
	if ($conn->query($sql)===TRUE){
		echo "
		<script type=\"text/javascript\">
			alert(\"Thank You for your Subscribe!\");
			window.location=\"main.php\";
		</script>";
		
	}
	
	else {
		echo "
		<script type=\"text/javascript\">
			alert(\"Subscribe Fail!\");
			history.go(-1);
		</script>";
	}
?>