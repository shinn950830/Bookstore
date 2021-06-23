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
		
		<title>Journal | Bookstore</title>
	</head>
	
	
	<body>
		<nav class="navbar navbar-default">
  			<?php include('webpageLayout/navMenu.php');?>
		</nav>
		
			<div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        
                        <div class="post-image">

                            <a href="Journal1.php" class="" title="Digital vs. Print: The Book Battle Rages On">
                                <img width="1140" height="640" src="JournalPhoto/1.jpg" alt="eco_bookshop1">
								<u id="cont">Continue reading...</u>
                            </a>
                        </div>
                        <h2 class = "title"><a href ="Journal1.php">Digital vs. Print : The Book Battle Rages On</a></h2>
                            <p>As the holiday shopping season swings into full force, itâ€™s interesting to watch people buying books. Many a wish list has everything from the latest by Stephen King to an&nbsp;Amazon Gift Card (an actual card or via email) to a new e-reader device. Yet the battle for which is more popular is truly running neck and neck. No matter who you ask, the answer is always different, and usually very passionate. Christine Donovan, from Deerfieldâ€¦</p>

                        <a class="read-more" href="Journal1.php">Continue readingÂ»</a>
                        <p>&nbsp;</p>

                  

             
                        <div class="post-image">
                        <a href="Journal2.php" class="" title="Two Books with Horrible Dating Advice">
                                <img width="1140" height="640" src="JournalPhoto/2.jpg" alt="eco_bookshop2">
								<u id="cont">Continue reading...</u>
                            </a>
                        </div>

                            <h2  class = "title"><a href="Journal2.php">Two Books with Horrible Dating Advice</a></h2>
                            <p>When I was single, I hated datingâ€”which is probably why I didnâ€™t do much of it. There are so many unspoken rules, and girls play games, and itâ€™s enough to make you want to become a celibate monk. Okay, itâ€™s not quite that bad.&nbsp;Fortunately, I was lucky enough to find the right girl, and the rest is history. But even though my â€œgameâ€� probably sucked, I knew some common rules of dating. I mean, theâ€¦</p>
                            <a class="read-more" href="Journal2.php">Continue readingÂ»</a>
                            <p>&nbsp;</p>

               
                        <div class="post-image">
                        <a href="Journal3.php" class="" title="Writing, Creativity and Motivation">
                                <img width="1140" height="640" src="JournalPhoto/3.jpg" alt="eco_bookshop3">
								<u id="cont">Continue reading...</u>
                            </a>
                        </div>
                        <h2 class="title">
                        <a href="Journal3.php">Writing, Creativity and Motivation</a></h2>
                        <p>Voltaire is reputed to have said to a client â€œâ€¦ madam, here is the novel you commissioned itâ€™s in two volumes, if I had more time I could have written it in one.â€� What a dramatic statement! It gets to the heart of new writers problems â€“ how to be clear and concise. As an established writer I am frequently asked for advice but fail miserably in supplying answers. I have been writing now forâ€¦</p>
                        <a class="read-more" href="Journal3.php">Continue readingÂ»</a>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
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