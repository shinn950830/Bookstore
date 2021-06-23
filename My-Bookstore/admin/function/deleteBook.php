<?php
	
	include('connect_database.php');
	
	$deleteID=$_POST['deleteSelection'];
	
	$sql="DELETE FROM english_book WHERE Product_ID=\"$deleteID\"";
	
	
	if($conn->query($sql)===TRUE){
		echo "
		<script type=\"text/javascript\">
			alert(\"Book with ID ".$deleteID." delete successfully\");
			window.location=\"deleteBook(getBook).php\";
		</script>";
		
	}
	
	else{
		echo"Error deleteing record: ".$conn->error;
	}

	$conn->close();
	
	



?>