<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	error_reporting( error_reporting() & ~E_NOTICE );
	include('admin/session.php');
	include('connect_database.php');
	$sql="SELECT * from english_book ORDER BY Time_Added DESC LIMIT 6";
	$sql2="SELECT * from english_book WHERE bestSeller=1";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1">
		 <link rel="shortcut icon" href="favicon.ico">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="CSS/Design.css">
		
		<link href="owl.carousel/assets/css/bootstrapTheme.css" rel="stylesheet">
		
		<!-- Owl Carousel Assets(Links) -->
		<link href="owl.carousel/owl-carousel/owl.carousel.css" rel="stylesheet">
    	<link href="owl.carousel/owl-carousel/owl.theme.css" rel="stylesheet">
		<link href="owl.carousel/assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    	
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  		
		
		
		<!-- Owl Carousel Assets(Scripts) -->
		<script src="owl.carousel/assets/js/jquery-1.9.1.min.js"></script> 
		<script src="owl.carousel/owl-carousel/owl.carousel.js"></script>
		<script src="owl.carousel/assets/js/bootstrap-collapse.js"></script>
    	<script src="owl.carousel/assets/js/bootstrap-transition.js"></script>
    	<script src="owl.carousel/assets/js/bootstrap-tab.js"></script>
		<script src="owl.carousel/assets/js/google-code-prettify/prettify.js"></script>
    	<script src="owl.carousel/assets/js/application.js"></script>
		
		
		<!--Google Font-->
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Glegoo">
		
		
		<title>The Bookstore</title>
	</head>

	<body>
		<nav class="navbar navbar-default">
  			<?php include('webpageLayout/navMenu.php');?>
		</nav>
		
		<div id = "header"></div>
		
	
		
		<div id = "bestSeller">		
			 <div id="dyna-bestseller">
				 <div class="container">   
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Bestsellers</h2>
                            <small>Top selling books of 2015</small>                
                        </div>
                 </div>
          			<div class="row">                
            			<div class="span12">
                            <div id="owl-bestseller" class="owl-carousel  ">
                                <?php
                          		$result2=$conn->query($sql2);
                          		while($row = $result2->fetch_assoc()){
                          			echo "<div class=\"item\">
										<a href=\"bookDetails.php?bookID=".$row['Product_ID']."&author=".$row['Author']."\">
                          						<div class=\"item-image-main\">
                          							<img width=\"145\" height=\"185\" src=\"".$row['bookCover']."\" alt=\"".$row['Title']."\"/>
                          							<div class=\"clearDiv\">	
                          							</div>
                          						</div>
                          						<div class=\"item-info-main\">
                          							<p>".$row['Title']."</p>
                          						</div>
										</a>
                          			</div>";
                          		}
                          	?>		
                            </div>
						</div>
          			</div>
        		</div>
    		</div>
		</div>
		
		<div id = "newArrival">
			 <div id="dyna-newArri">
				<div class="container">
                    
                      <div class="row">
                        <div class="col-sm-12">
                             <h2>New Arrival</h2>
                            <small>New Books added every week! Check Back Often.</small>
                        </div>
                 </div>
				  <div class="row">
					<div class="span12">

						<div id="owl-newArri" class="owl-carousel">  
							
							<?php
                          		$result=$conn->query($sql);
                          		while($row = $result->fetch_assoc()){
                          			echo "<div class=\"item\">
										<a href=\"bookDetails.php?bookID=".$row['Product_ID']."&author=".$row['Author']."\">
                          						<div class=\"item-image-main\">
                          							<img width=\"145\" height=\"185\" src=\"".$row['bookCover']."\" alt=\"".$row['Title']."\"/>
                          							<div class=\"clearDiv\">	
                          							</div>
                          						</div>
                          						<div class=\"item-info-main\">
                          							<p>".$row['Title']."</p>
                          						</div>
										</a>
                          			</div>";
                          		}
                          	?>		
						</div>	  	
						<p>&nbsp;</p>
						<p>&nbsp;</p>
					</div>
				  </div>
				</div>
            </div>
        </div>
		
    	<script>
			$(".owl-carousel").each(function() {

			  var $this = $(this);

			  $this.owlCarousel({

			  items : 5, //5 items above 1000px browser width
			  itemsDesktop : [1000,3], //3 items between 1000px and 901px
			  itemsDesktopSmall : [900,2], // 2 items betweem 900px and 601px
			  itemsTablet: [600,2], //2 items between 600 and 0;
			  itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
			  autoPlay: 5000,
			  stopOnHover: true,
			  });

			  // Custom Navigation Events
			  $this.parent().find(".next").click(function(){
				$this.trigger('owl.next');
			  })
			  $this.parent().find(".prev").click(function(){
				$this.trigger('owl.prev');
			  })
		 

			});
		</script>
                 
		<div id = "AuthorMonth" style="padding-bottom:50px;">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">

					<h2>Author of the Month</h2>
					<small>And his/her Bestsellers</small>	
					</div>
				</div>

				<div class="row">
					<div class="col-sm-4">
						<img align="left" src = MainImage/jk-rowling-official-portrait.jpg alt="jk-rowling-official-portrait">
					</div>
					<div class="col-sm-8">
						<div class="row">
							<div class="col-sm-12">
								 <div id="AuthorIntro">
									 <h2>JK Rowling</h2>
									 <small>Novel Prize Winner 2008<br/></small>
									<p>&nbsp;</p>
								
								 <p>Born in Yate, England, on July 31, 1965, J.K. Rowling came from humble economic means before writing Harry Potter and the Sorcerer's Stone, a children's fantasy novel. The work was an international hit and Rowling wrote six more books in the series, which sold into the hundreds of millions and was adapted into a blockbuster film franchise. In 2012, Rowling released the non-Potter novel The Casual Vacancy.</p>
							<p>&nbsp;</p>
								</div>
							</div>
						</div>											   
						<div class="row">
								<div id="AuthorBook">
									<div class="col-sm-3">
										<figure><a href="bookDetails.php?bookID=E0013&author=J.K. Rowling"><img class="float" width="165" height="211" src = "BestAuthorBook/1.jpg"><figcaption>Harry Potter and the Deathly Hallows</figcaption></a></figure>

									</div>

									  <div class="col-sm-3">

										  <figure><a href="bookDetails.php?bookID=E0011&author=J.K. Rowling"><img class="float" width="165" height="211" src = "BestAuthorBook/2.jpg"><figcaption>Harry Potter and the Order of the Pheonix</figcaption></a></figure>
									</div>

									  <div class="col-sm-3">

										  <figure><a href="bookDetails.php?bookID=E0007&author=J.K. Rowling"><img class="float" width="165" height="211" src = "BestAuthorBook/3.jpg"><figcaption>Harry Potter and the Sorcerers Stone</figcaption></a></figure>
									</div>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>
		
		<footer class="site-footer" style="background-color:#CFC4B2;">
			<?php 
			include(__DIR__.'/webpageLayout/footer.php');?>
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
		<script>$("#navMain").toggleClass('active');</script>
		
	</body>
</html>