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
		<link rel="stylesheet" type="text/css" href="CSS/JournalHomeDesign.css">
		<link rel="stylesheet" type="text/css" href="CSS/Design.css">
		<link href="owl.carousel/assets/css/bootstrapTheme.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		
		<!--Google Font-->
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Glegoo">
		
		<title>Journal2 | Bookstore</title>
	</head>
	
	
	<body>
		<nav class="navbar navbar-default">
  			<?php include('webpageLayout/navMenu.php');?>
		</nav>
		<div class="container">
			<div class="row">
				<div class="col-sm-9">
					<img width="847" height="476"  src = "JournalPhoto/2.jpg">
						<p>&nbsp;</p>

						<h2>Two Books with Horrible Dating Advice</h2>
						<p>When I was single, I hated datingâ€”which is probably why I didnâ€™t do much of it. There are so many unspoken rules, and girls play games, and itâ€™s enough to make you want to become a celibate monk. Okay, itâ€™s not quite that bad.&nbsp;Fortunately, I was lucky enough to find the right girl, and the rest is history.</p>
						
						<p>But even though my â€œgameâ€� probably sucked, I knew some common rules of dating. I mean, the really, really basic doâ€™s and donâ€™ts.</p>
						<p>The same canâ€™t be said for some of these characters from literature. These guys and girls really knew how to screw up some relationships.</p>
						<p>Hereâ€™s the type of advice they might give you based on their stories.</p>
						<blockquote><p>â€œGirly, spineless men are the most attractive kind of men. Obsess over them, and never stop obsessing over them.â€�</p></blockquote>
						<p>â€“Scarlett Oâ€™Hara (Gone With The Wind)</p>
						<p>We all know Rhett Butler had serious game. You know who had terrible game? Ashley Wilkes, the man whom Scarlett spends almost the entirety of Gone With The Wind obsessing over. Sheâ€™s the worst. Sheâ€™s the literal worst.</p>
						<blockquote><p>â€œIf you stalk her enough, sheâ€™ll eventually love you.â€�</p></blockquote>
						<p> â€“Gatsby (The Great Gatsby)</p>
						
						<p>Ladies, if you knew that a dude built his house across the lake just so he could stand on a dock and longingly stare at a light on your dock, and if you knew that same dude threw million dollar parties in hopes youâ€™d show up, and&nbsp;if you also knew that same dude liked to hide in the bushes outside your house, wouldnâ€™t you just fall head over heels in love? Or maybe youâ€™d just call the police. Itâ€™s a miracle Daisy never had a restraining order put out on Gatsby.</p>
						<p>Ladies, if you knew that a dude built his house across the lake just so he could stand on a dock and longingly stare at a light on your dock, and if you knew that same dude threw million dollar parties in hopes youâ€™d show up, and&nbsp;if you also knew that same dude liked to hide in the bushes outside your house, wouldnâ€™t you just fall head over heels in love? Or maybe youâ€™d just call the police. Itâ€™s a miracle Daisy never had a restraining order put out on Gatsby.</p>
				</div>
				<aside class="col-sm-3">
					<div class="sidebar">
						<div class="sidebar_cate1">
							<h3 class="sidebar-entry-title">Categories</h3>
								<ul>
									<li><a href="#">Accesories</a></li>
									<li><a href="#">Blog</a></li>
									<li><a href="Journal1.php">Books</a></li>
									<li><a href="Journal2.php">Inspiration</a></li>
									<li><a href="Journal3.php">Love</a></li>
									<li><a href="#">Posters</a></li>
									<li><a href="#">Review</a></li>
									<li><a href="#">Thought</a></li>
									
								</ul>
						
						</div>
					
					</div>
					
					
				</aside>
			</div>
		</div>
		<footer class="site-footer" style="background-color:#CFC4B2;">
			<?php include('webpageLayout/footer.php');?>
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
		<script>$("#navJournal").toggleClass('active');</script>
	</body>	
</html>