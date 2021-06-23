<?php
	include('login.php'); // Includes Login Script

	if(isset($_SESSION['login_user'])){
		header("location: profile.php");
	}
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
		
		<title>Staff Login | Bookstore</title>
		
	</head>

	<body>
		<nav class="navbar navbar-default">
  			<?php include('../webpageLayout/navMenu.php');?>
		</nav>
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
					<div id="main">
						<h1>Staff Login</h1>
						<div id="login">
							<h2>Login Form</h2>
								<form action="" method="post">
									<label>UserName :</label>
									<input id="name" name="username" placeholder="username" type="text" class="form-control form-effect">
									<label>Password :</label>
									<input id="password" name="password" placeholder="**********" type="password" class="form-control form-effect">
									<input name="submit" type="submit" value=" Login " class="loginBtn">
									<span><?php echo $error; ?></span>
								</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>