<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	error_reporting( error_reporting() & ~E_NOTICE );
	include('admin/session.php');
	include('connect_database.php');
	$bookID=$_GET['bookID'];
	$bookAuthor=$_GET['author'];
	$sql="SELECT * FROM english_book where Product_ID='$bookID'";
	$sql2="SELECT DISTINCT Category FROM english_book";
	$sql3="SELECT * FROM english_book where Product_ID='$bookID'";
	$sql4="SELECT * FROM english_book WHERE Author='$bookAuthor'";
	$result=$conn->query($sql);
	$result2=$conn->query($sql2);
	$result3=$conn->query($sql3);
	$result4=$conn->query($sql4);
	
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
	
		<?php
			while($row = $result3->fetch_assoc()){
				echo "<title>".$row['Title']." | Bookstore</title>";
			}
		?>
	</head>

	<body>
		<nav class="navbar navbar-default">
  			<?php include('webpageLayout/navMenu.php');?>
		</nav>
		
		
		
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-sm-8 pull-right-md">
					<div class="row">
						<?php
							while($row = $result->fetch_assoc()){
								echo"
									<div class=\"col-lg-6 col-md-6 col-sm-6 shop-itme\">
										<img width=\"555\" height=\"710\" src=\"".$row['bookCover']."\" alt=\"".$row['Title']."\"/>
									</div>
									
									<div class=\"col-lg-6 col-md-6 col-sm-6\">
										<h1>".$row['Title']."
										<small>".$row['Category']."</small>
										</h1>
										
										<div>
											<p id=\"description\" style=\"text-align:justify;\">".$row['Description']."</p>
										</div>
										
										<div class=\"itemOffer\">
											<p class=\"detailPrice\">
												<span class=\"amount\">RM ".$row['Price']."</span>
											</p>
										</div>
										<div class=\"clear\"></div>
									</div>
									
									<div class=\"col-sm-12\">
										<div>
											<h3>Additional Information</h3>
										</div>
										<table class=\"table\">
											<tr>
												<td>BOOK AUTHOR</td>
												<td>".$row['Author']."</td>
											</tr>
											<tr>
												<td>PUBLISHER</td>
												<td>".$row['Publisher']."</td>
											</tr>
											<tr>
												<td>ISBN</td>
												<td>".$row['ISBN']."</td>
											</tr>
											<tr>
												<td>PAGES</td>
												<td>".$row['Pages']."</td>
											</tr>
											<tr>
												<td>PUBLISHED DATE</td>
												<td>".$row['Published_date']."</td>
											</tr>
										</table>
									</div>
									
								";
							}
						
						?>
					</div>
				</div>
				<div class="col-md-3 col-sm-4">
					<div class="sidebar">
						<div class="sidebar-entry widget_categories categories-2">
							<h3 class="sidebar-entry-title">Book Genres</h3>		
							<ul>	
								<?php
									while($row = $result2->fetch_assoc()){
										echo "<li><a href=\"book(byGenres).php?category=".$row['Category']."\">".$row['Category']."</a></li>";
									}
								?>
								<li><a href="book.php">Show All</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div id = "bestSeller">		
			 <div id="dyna-bestseller">
				 <div class="container">   
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Related Books</h2>              
                        </div>
                 </div>
          			<div class="row">                
            			<div class="span12">
                            <div id="owl-bestseller" class="owl-carousel  ">
                                <?php
                          		while($row = $result4->fetch_assoc()){
                          			echo "<div class=\"item\">
                          						<div class=\"item-image-main\">
                          							<a href=\"bookDetails.php?bookID=".$row['Product_ID']."&author=".$row['Author']."\"><img width=\"145\" height=\"185\" src=\"".$row['bookCover']."\" alt=\"".$row['Title']."\"/></a>
                          							<div class=\"clearDiv\">	
                          							</div>
                          						</div>
                          						<div class=\"item-info-main\">
                          							<p>".$row['Title']."</p>
                          						</div>
                          					</div>";
                          		}
                          	?>		
                            </div>
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
		<script>$("#navBook").toggleClass('active');</script>
	</body>
</html>