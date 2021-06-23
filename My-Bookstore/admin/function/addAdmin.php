<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	error_reporting( error_reporting() & ~E_NOTICE );
	include('../session.php');
?>
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
		
		<title>Add Admin | Bookstore</title>
	</head>
	
	<body>
		<nav class="navbar navbar-default">
			<?php include('../../webpageLayout/navMenu(admin).php');?>
		</nav>
			
		<div class="container">
				<div class="row">
					<div class="col-lg-9 col-md-9 col-sm-8 blog-posts">
						<div class="content">
							<div class="page-header">
								<h3>Add New Administrator</h3>
							</div>
							<form action="addAdmin(process).php" method="POST">
								<label>Username: </label>
								<input type="text" placeholder="username" name="username" />
								<br /><br />
								<label>Password: </label>
								<input type="password" placeholder="**********" name="password"/>
								<br /><br />
								<label>First Name: </label>
								<input type="text" placeholder="firstname" name="firstname"/>
								<br /><br />
								<label>Last Name: </label>
								<input type="text" placeholder="lastname" name="lastname"/>
								<br /><br />
								<input type="submit" value="Submit" class="submitBtn"/>
								<input type="reset" value="Clear" class="clearBtn" />
							</form>
						</div>
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


