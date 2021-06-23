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
		
		<title>Journal3 |The Bookstore</title>
	</head>
	
	
	<body>
		<nav class="navbar navbar-default">
  			<?php include('webpageLayout/navMenu.php');?>
		</nav>
		
		<div class="container">
        <div class="row">
			<div class="col-sm-9">
				<img src = "JournalPhoto/3.jpg">
					<p>&nbsp;</p>
						<h2>Writing, Creativity and Motivation</h2>


							<p>Voltaire is reputed to have said to a client â€œâ€¦ madam, here is the novel you commissioned itâ€™s in two volumes, if I had more time I could have written it in one.â€� What a dramatic statement! It gets to the heart of new writers problems â€“ how to be clear and concise.</p>
							<p>As an established writer I am frequently asked for advice but fail miserably in supplying answers. I have been writing now for over 40 years and still cannot give a clear prescription for the aspiring novelist. But here are some ideas.</p>
							<p>Firstly, start from a base in which you have some competence or knowledge. I was asked recently to review a manuscript produced by a female. What a surprise â€“ and yet it wasnâ€™t a surprise. The plot was clear, too clear from the beginning. I suspected it was a paradigm of Mills &amp; Boon with little originality by the writer, so hereâ€™s another pointer â€“ originality.</p>
							<p>My first steps into the writing dimension began at school. I was awarded the prize, a novel, for writing and I used the narrative to form the plot for my next writing venture the following year. Much to my astonishment another prize was gained. I didnâ€™t write thereafter for fifteen years as work took up all my attention.</p>
							<p>I decided to undertake post graduate studies in management, this led me into academic life and all its demands for writing articles, albeit academic. The big test came with my Doctorate â€“ it extended to 121,000 words but it proved to me that I could sustain arguments.</p>
							<p>My novels are based on experience and an extensive vocabulary of reading. So let me emphasise the need for new writers to research the â€˜environmentâ€™ around their works. Get the realism, facts and appeal correct and your off to a good start.</p>
							<p>What about the process? Well thereâ€™s no magic formula. I find I can write best in the late afternoon and early evening â€“ perhaps five hours at a stretch. Others will have different approaches when say a chapter at a time can be written. Do what you are content with. If you have to force yourself you may be destroying the creative drives.</p>
							<p>Itâ€™s essential to have inspiration, without this you have no real appeal. This may come from your personal circumstances, from friends, work situations or just a â€˜bolt of lighteningâ€™ among many inspiring thoughts you have day by day.</p>
							<p>Finally can I say something about motivation. Itâ€™s all up to you no one can motivate you, and certainly the thought of high income is a non- starter for most of us. Even once a book has been completed it is essential to keep thinking positively as you send endless manuscripts to literary editors, most of whom are masters at scuppering you earnest endeavours. All of your powers of motivation will be severely tried as you go about finding a publisher.</p>
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