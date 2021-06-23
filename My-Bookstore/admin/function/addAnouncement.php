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
		
		<script type="text/javascript">
			function submitConfirm(){
				var userConfirm=confirm("Are you sure you want to submit the form?");
				if(userConfirm){
					return true;	
				}
				else{
					return false;
				}
			}
		</script>
		<title>Add Announcement | Bookstore</title>
	</head>

	<body>
		<nav class="navbar navbar-default">
  			<?php include('../../webpageLayout/navMenu(admin).php');?>
		</nav>
		
		
		
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-9 col-sm-8 blog-posts">
					<?php include('getAnouncement.php');?>
					<div class="page-header">
						<h3>Announcement Adding Form</h3>
					</div>
					<form method="POST" action="addAnouncement(submitProcess).php" onsubmit="return submitConfirm()">
						<div class="form-group">
							<label>Announcement: </label>
							<textarea cols="40" rows="10" name="anouncement" class="form-control form-effect" required></textarea>
						</div>
						<div class="form-group">
							<label>Person In Charge: </label>
							<input type="text" name="PIC" value="<?php echo $login_session; ?>" class="form-control form-effect" readonly="readonly" />
						</div>
						<input type="submit" value="Submit" class="btn-default"/>
						<input type="reset" value="Clear" class="btn-default"/>
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



					