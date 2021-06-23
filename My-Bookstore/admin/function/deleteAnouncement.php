<?php
	
	include('connect_database.php');
	
	$deleteID=$_POST['deleteSelection'];
	
	$sql="DELETE FROM anouncement WHERE AnounceID=\"$deleteID\"";
	
	
	if($conn->query($sql)===TRUE){
		echo "
		<script type=\"text/javascript\">
			alert(\"Anouncement with ID ".$deleteID." delete successfully\");
			window.location=\"addAnouncement.php\";
		</script>";	
	}
	
	else{
		echo"
		<script type=\"text/javascript\">
			alert(\"Error deleteing record: ".$conn->error."\");
			history.go(-1);
		</script>";
	}

	$conn->close();
	

?>