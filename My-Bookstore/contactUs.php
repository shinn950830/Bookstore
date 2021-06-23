<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	error_reporting( error_reporting() & ~E_NOTICE );
	include('admin/session.php');
	include('connect_database.php');
	$sql="SELECT DISTINCT Category from english_book";
	$result=$conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="CSS/Design.css">
		
		<link href="owl.carousel/assets/css/bootstrapTheme.css" rel="stylesheet">
		
		<!-- Owl Carousel Assets(Links) -->
		<link href="owl.carousel/owl-carousel/owl.carousel.css" rel="stylesheet">
    	<link href="owl.carousel/owl-carousel/owl.theme.css" rel="stylesheet">
		<link href="owl.carousel/assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    	
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		
		
		<!-- Owl Carousel Assets(Scripts) -->
		<script src="owl.carousel/assets/js/jquery-1.9.1.min.js"></script> 
		<script src="owl.carousel/owl-carousel/owl.carousel.js"></script>
		<script src="owl.carousel/assets/js/bootstrap-collapse.js"></script>
    	<script src="owl.carousel/assets/js/bootstrap-transition.js"></script>
    	<script src="owl.carousel/assets/js/bootstrap-tab.js"></script>
		<script src="owl.carousel/assets/js/google-code-prettify/prettify.js"></script>
    	<script src="owl.carousel/assets/js/application.js"></script>
		
		<!--3D bookshow-->
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
			
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
		
		<!--Google Maps-->
		<script src="https://maps.googleapis.com/maps/api/js"></script>
		 <script>
			  function initialize() {
				var mapCanvas = document.getElementById('map');
				var mapOptions = {
				  center: new google.maps.LatLng(4.329860, 101.134392),
				  zoom: 16,
				  mapTypeId: google.maps.MapTypeId.ROADMAP
				}
				var map = new google.maps.Map(mapCanvas, mapOptions)
			  }
			  google.maps.event.addDomListener(window, 'load', initialize);
    	</script>
		

		<title>Contact Us | Bookstore</title>
	</head>

	<body>
		<nav class="navbar navbar-default">
  			<?php include('webpageLayout/navMenu.php');?>
		</nav>
		
		
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="enquiry">
						<h2>Enquiry Form</h2>
						<form method="POST" action="enquiryForm(submitProcess).php" onsubmit="return submitConfirm()">
							<div class="form-group">
								<label>Name: </label>
								<input type="text" name="Name" class="form-control form-effect"/>
							</div>
					
							<div class="form-group">
								<label>Email: </label>
								<input type="text" name="Email" class="form-control form-effect"/>
							</div>
					
							<div class="form-group">
								<label>Subject: </label>
								<input type="text" name="Subject" class="form-control form-effect"/>
							</div>
					
							<div class="form-group">
								<label>Comment: </label>
								<textarea cols="40" rows="10" name="Comment" class="form-control form-effect" required></textarea>
							</div>
							<input type="submit" value="Submit" class="btn-default"/>
							<input type="reset" value="Clear" class="btn-default"/>
						</form>
					</div>
				</div>
				
				<div class="col-md-6 col-sm-12">
					<h2>We are Here</h2>
					<div id="map"></div>
					<div class="address">
						<h3>Address</h3>
						<p>1207, Jalan Seksyen 1/3, 31900 Kampar, Perak</p>
						<p>bookstore@example.com</p>
						<br/>
						<h3>Opening Hours</h3>
						<p>Everyday 9am-9pm</p>
					</div>
				</div>
			</div>
		</div>
		<footer class="site-footer" style="background-color:#CFC4B2;">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-4">
						<div class="sidebar widget_nav_menu">
							<h3>Genres</h3>
							<div class="footer-genres-container">
								<ul class="footer-genres">
									<?php
										while($row = $result->fetch_assoc()){
											echo "<li><a href=\"book(byGenres).php?category=".$row['Category']."\">".$row['Category']."</a></li>";
										}
									?>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-4">
						<div class="sidebar widget_nav_menu">
							<h3>Site Map</h3>
							<div class="footer-siteMap-container">
								<ul class="footer-siteMap">
									<li><a href="main.php">Home</a></li>
									<li><a href="book.php">Books</a></li>
									<li><a href="Journal.php">Journal</a></li>
									<li><a href="AboutUs.php">About Us</a></li>
									<li><a href="ContactUs.php">Contact Us</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-4">
						<div class="sidebar widget_nav_menu">
							<h3>Social</h3>
							<div class="footer-social-container">
								<ul class="footer-social">
									<li><a href="#">Facebook</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-4">
						<div class="sidebar widget_nav_menu">
							<h3>Subscribe</h3>
							<small>Subscribe to our weekly newsletter.</small>
							<div class="footer-subscribe-container">
								<form method="POST" action="subscribe(process).php">
									<input type="text" placeholder="E-mail Address" name="emailAddress" class="form-control form-effect"/>
									<input type="submit" value="Subscribe!" class="btn btn-default"/>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-bottom">
					<div class="row">
						<div class="col-md-12">
							<p>Copyright © 2014 - UTAR Website Assignment</p>
							<div class="footer-menu">
								<ul class="footer-bottom-menu">
									<li><a href="main.php">Home</a></li>
									<li><a href="book.php">Books</a></li>
									<li><a href="Journal.php">Journal</a></li>
									<li><a href="AboutUs.php">About Us</a></li>
									<li><a href="ContactUs.php">Contact Us</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<?php
			if(isset($_SESSION['login_user'])){
				echo"
				<script>
						$(\"a.loginText\").attr('href', 'admin/logout.php');
						$(\"a.loginText\").text(\"Logout\");
						$(\"a.adminPanel\").attr('href','admin/profile.php');
						$(\"a.adminPanel\").text(\"Admin Panel\");
				</script>	
				";
			}
		?>
		<script>$("#navContactUs").toggleClass('active');</script>
	</body>
</html>