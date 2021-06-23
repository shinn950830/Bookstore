<?php
	
	include("connect_database.php");
	
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
  
  	
	
	
	//upload the book cover
	$target_dir = "../../bookCover/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		if($check !== false) {
			$uploadOk = 1;
		} else {
			echo "
				<script type=\"text/javascript\">
					alert(\"File is not an image.\");
					history.go(-1);
				</script>";
		}
	}
	
	// Check if file already exists
	if (file_exists($target_file)) {
		echo "
			<script type=\"text/javascript\">
				var userConfirm=confirm(\"Sorry, file already exists.<br/>Do you want to continue?\");
				if(userConfirm==false){
					history.go(-1);
				}	
			</script>";
		$uploadOk = 0;
	}
	
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
		echo "
			<script type=\"text/javascript\">
				alert(\"Sorry, only JPG, JPEG, PNG & GIF files are allowed.\");
				history.go(-1);
			</script>";
	}
	
	// if everything is ok, try to upload file
	 if($uploadOk==1) {
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		} else {
			echo "
				<script type=\"text/javascript\">
					alert(\"The directory wass not found on your server.\");
					history.go(-1);
				</script>
				";
		}
	}
	
	
	$imagePath="bookCover/".basename($_FILES["fileToUpload"]["name"]);
	
	// replace all the single quote to " \' "
	$title=str_replace("'","\'",$title);
	$author=str_replace("'","\'",$author);
	$description=str_replace("'","\'",$description);
	$publisher=str_replace("'","\'",$publisher);
	$imagePath=str_replace("'","\'",$imagePath);
	
	$sql="INSERT INTO english_book(Product_ID, ISBN, Title, Author, Description, Publisher, Published_date, Price, Pages, Category, bookCover) VALUES('$bookID', '$ISBN', '$title', '$author', '$description', '$publisher', '$publishedDate', '$price', '$pages', '$category','$imagePath')";
	
	if ($conn->query($sql)===TRUE){
		echo "
		<script type=\"text/javascript\">
			alert(\"Insert Book Successful.\");
			window.location=\"inputNewBook.php\";
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