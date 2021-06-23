<?php

	include('connect_database.php');
	
	$bookID= $_POST['book_id'];
	$ISBN= $_POST['ISBN'];
	$title= $_POST['title'];
	$author= $_POST['author'];
	$description= $_POST['description'];
	$publisher= $_POST['publisher'];
	$publishedDate= $_POST['published_date'];
	$price= $_POST['price'];
	$pages= $_POST['pages'];
	$category= $_POST['category'];
	
	// replace all the single quote to " \' "
	$title=str_replace("'","\'",$title);
	$author=str_replace("'","\'",$author);
	$description=str_replace("'","\'",$description);
	$publisher=str_replace("'","\'",$publisher);
	
	$sql="UPDATE english_book SET Product_ID='$bookID', ISBN='$ISBN', Title='$title', Author='$author', Description='$description', Publisher='$publisher', Published_date='$publishedDate', Price='$price', Pages='$pages', Category='$category', Time_Edited=CURRENT_TIMESTAMP WHERE Product_ID='$bookID'";
	
	if ($conn->query($sql)===TRUE){
		echo "
		<script type=\"text/javascript\">
			alert(\"Update Book Successful.\");
			window.location=\"edit(getBook).php\";
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