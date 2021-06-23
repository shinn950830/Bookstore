<?php 
	error_reporting(E_ALL ^ E_DEPRECATED);
	error_reporting( error_reporting() & ~E_NOTICE );
	include('admin/session.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1">
		 <link rel="shortcut icon" href="favicon.ico">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="CSS/AboutUsdesign.css">
		<link href="owl.carousel/assets/css/bootstrapTheme.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="CSS/Design.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  		
		
		<!--Google Font-->
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Glegoo">
		
		<title>About Us | Bookstore</title>
	</head>
	
	<body>
		
        <nav class="navbar navbar-default">
  			<?php include('webpageLayout/navMenu.php');?>
		</nav>
        
        <div id="aboutUsPhoto">
			<div class="container">
			<h1 style="text-align:center;">Meet Our Team</h1>
			<hr/>
				<div class="row-fluid">
					<div  class="col-md-4">                   
					<img class ="headimg" src="AboutUsPhoto/1.jpg" alt="Team Member1" />
					<br/>
					<p><strong>Lee Wen Dick</strong></p>
					<p class="position">User Interface Designer</p>
					<p>
						<a href="https://www.facebook.com/MervynLee.pianoguy">
							<img id="facebookImg" style ="border-radius: 50%;" src="AboutUsPhoto/fb1.jpg" alt="Facebook icon" height="38" width="38" />
						</a>
						<a href="mailto:a@gmail.com">
							<img id="mailImg" style ="border-radius: 50%;" src="AboutUsPhoto/mail1.jpg" alt="Mail icon" height="29" width="35" />
						</a>
					</p>
				</div>
				
					<div  class="col-md-4">
					<img class ="headimg" src="AboutUsPhoto/2.jpg" alt="Team Member2" />
					<br/>
					<p><strong>Gooi Hao Ming</strong></p>
					<p class="position">Database Administrator</p>
					<p>
						<a href="https://www.facebook.com/lewisgooi95?fref=ts">
							<img id="facebookImg" style ="border-radius: 50%;"src="AboutUsPhoto/fb1.jpg" alt="Facebook icon" height="38" width="38" />
						</a>
						<a href="mailto:shinn950830@gmail.com">
							<img id="mailImg" style ="border-radius: 50%;" src="AboutUsPhoto/mail1.jpg" alt="Mail icon" height="29" width="35" />
						</a>
					</p>
				</div>
				
					<div  class="col-md-4">
					<img class ="headimg" src="AboutUsPhoto/3.jpg" alt="Team Member3" />
					<br/>
					<p><strong>Tan Huey Jie</strong></p>
					<p class="position">Interactive Designer</p>
					<p>
						<a href="https://www.facebook.com/hueyjie?fref=ts">
							<img id="facebookImg" style ="border-radius: 50%;" src="AboutUsPhoto/fb1.jpg" alt="Facebook icon" height="38" width="38" />
						</a>
						<a href="mailto:b@gmail.com">
							<img id="mailImg" style ="border-radius: 50%;" src="AboutUsPhoto/mail1.jpg" alt="Mail icon" height="29" width="35" />
						</a>
					<p>
				</div>
				</div>
			</div>
        </div>
       
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
		<script>$("#navAboutUs").toggleClass('active');</script>
	</body>
</html>