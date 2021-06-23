<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	error_reporting( error_reporting() & ~E_NOTICE );
	include('../session.php');
?>
<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../../CSS/Design.css">
		<link href="../../CSS/style(admin).css" rel="stylesheet" type="text/css">
		
		<link href="../../owl.carousel/assets/css/bootstrapTheme.css" rel="stylesheet">
		
		<!-- Owl Carousel Assets(Links) -->
		<link href="../../owl.carousel/owl-carousel/owl.carousel.css" rel="stylesheet">
    	<link href="../../owl.carousel/owl-carousel/owl.theme.css" rel="stylesheet">
		<link href="../../owl.carousel/assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    	
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		
		
		<!-- Owl Carousel Assets(Scripts) -->
		<script src="../../owl.carousel/assets/js/jquery-1.9.1.min.js"></script> 
		<script src="../../owl.carousel/owl-carousel/owl.carousel.js"></script>
		<script src="../../owl.carousel/assets/js/bootstrap-collapse.js"></script>
    	<script src="../../owl.carousel/assets/js/bootstrap-transition.js"></script>
    	<script src="../../owl.carousel/assets/js/bootstrap-tab.js"></script>
		<script src="../../owl.carousel/assets/js/google-code-prettify/prettify.js"></script>
    	<script src="../../owl.carousel/assets/js/application.js"></script>
		
		
			
		<!--Google Font-->
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Glegoo">
				
		<title>Insert New Book | Bookstore</title>
		
		<script type="text/javascript">
			function insertConfirm(){
				var userConfirm=confirm("Are you sure you want to insert?");
				if(userConfirm){
					return true;	
				}
				else{
					return false;
				}
			}
		</script>		
	</head>
	
	<body>
		<nav class="navbar navbar-default">
  			<?php include('../../webpageLayout/navMenu(admin).php');?>
		</nav>
		
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-9 col-sm-8 blog-posts">
					<div class="page-header">
						<h3>Add New Book</h3>
					</div>
					<form method="POST" action="insertBook.php" onsubmit="return insertConfirm()" enctype="multipart/form-data" role="">
						<div class="form-group">	
							<label>Book ID:</label>
							<input type="text" size=50 name="book_id" class="form-control" required/>
						</div>
						
						<div class="form-group">
							<label>ISBN:</label>
							<input type="text" size=50 name="ISBN" class="form-control" required/>
						</div>
						
						<div class="form-group">
							<label>Book Title:</label>
							<input type="text" size=50 name="title" class="form-control" required/>
						</div>
				
						<div class="form-group">
							<label>Author:</label>
							<input type="text" size=50 name="author" class="form-control" required/>
						</div>
				
						<div class="form-group">
							<label>Product Description:</label><br>
							<textarea cols="40" rows="10" name="description" class="form-control" required></textarea>
						</div>
				
						<div class="form-group">
							<label>Price:</label>
							<input type="text" size=50 name="price" class="form-control" required/>
						</div>
				
						<div class="form-group">
							<label>Pages:</label>
							<input type="text" size=50 name="pages" class="form-control" />
						</div>
				
						<div class="form-group">
							<label>Category:</label>
							<input type="text" size=50 name="category" class="form-control" required/>
						</div>
				
						<div class="form-group">
							<label>Publisher:</label>
							<input type="text" size=50 name="publisher" class="form-control" />
						</div>
				
						<div class="form-group">
							<label>Published Date:</label>
							<input type="date" name="published_date"/>
						</div>
				
						<div class="form-group">
							<label>Book Cover:</label>
							<input type="file" name="fileToUpload" id="fileToUpload"/>
						</div>
					
						<input type="submit" value="Insert" class="btn btn-default" name="submit"/>
						<input type="reset" value="Clear" class="btn btn-default"/>
						
					</form>
				</div>
				
				<aside class="col-lg-3 col-md-3 col-sm-4">
					<?php include('adminNavMenu.php');?>
				</aside>
			</div>
		</div>
		<?php
			if(isset($_SESSION['login_user'])){
				echo"
				<script>
						$(\"a.loginText\").attr('href', '../logout.php');
						$(\"a.loginText\").text(\"Logout\");
						$(\"a.adminPanel\").attr('href','../profile.php');
						$(\"a.adminPanel\").text(\"Admin Panel\");
				</script>	
				";
			}
		?>
	</body>
</html>