<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	error_reporting( error_reporting() & ~E_NOTICE );
	include('session.php');
	include('connect_database.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../CSS/Design.css">
		<link href="../CSS/style(admin).css" rel="stylesheet" type="text/css">
		
		<link href="../owl.carousel/assets/css/bootstrapTheme.css" rel="stylesheet">
		
		<!-- Owl Carousel Assets(Links) -->
		<link href="../owl.carousel/owl-carousel/owl.carousel.css" rel="stylesheet">
    	<link href="../owl.carousel/owl-carousel/owl.theme.css" rel="stylesheet">
		<link href="../owl.carousel/assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    	
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		
		
		<!-- Owl Carousel Assets(Scripts) -->
		<script src="../owl.carousel/assets/js/jquery-1.9.1.min.js"></script> 
		<script src="../owl.carousel/owl-carousel/owl.carousel.js"></script>
		<script src="../owl.carousel/assets/js/bootstrap-collapse.js"></script>
    	<script src="../owl.carousel/assets/js/bootstrap-transition.js"></script>
    	<script src="../owl.carousel/assets/js/bootstrap-tab.js"></script>
		<script src="../owl.carousel/assets/js/google-code-prettify/prettify.js"></script>
    	<script src="../owl.carousel/assets/js/application.js"></script>
		
			
		<!--Google Font-->
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Glegoo">
		<title>Admin Homepage | Bookstore</title>
	</head>

	<body>
		<nav class="navbar navbar-default">
  			<?php include('../webpageLayout/navMenu.php');?>
		</nav>
		
		
		
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-9 col-sm-8 blog-posts">
					<div class="page-header">
						<h3>Welcome, <i><?php echo $login_session; ?></i></h3>
					</div>
		
					<div class="Enquiry">
						<h2>Recent Enquiry</h2>
						<?php
							include('function/getEnquiry.php');
						?>
				
						<h2>Past Enquiry</h2>
						<?php
							include('function/getPastEnquiry.php')
						?>
					</div>
				</div>
				
				<aside class="col-lg-3 col-md-3 col-sm-4">
					<div class="sidebar">
						<div class="sidebar-entry widget_categories categories-2">
							<h3 class="sidebar-entry-title">Administrator Menu</h3>		
							<ul>
								<li class="cat-item cat-item-56"><a href="function/inputNewBook.php">Add Book</a></li>
								<li class="cat-item cat-item-57"><a href="function/edit(getBook).php">Edit Book</a></li>
								<li class="cat-item cat-item-58"><a href="function/deleteBook(getBook).php">Remove Book</a></li>
								<li class="cat-item cat-item-64"><a href="function/addanouncement.php">Add Announcement</a></li>
								<li class="cat-item cat-item-64"><a href="function/addAdmin.php">Add Admin</a></li>
								<li class="cat-item cat-item-64"><a href="function/showSubscriber.php">Show Subscriber</a></li>	
							</ul>
						</div>
					</div>
				</aside>
			</div>
		</div>
		<?php
			if(isset($_SESSION['login_user'])){
				echo"
				<script>
						$(\"a.loginText\").attr('href', 'logout.php');
						$(\"a.loginText\").text(\"Logout\");
				</script>	
				";
			}
		?>
	</body>
</html>



					