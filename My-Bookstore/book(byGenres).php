<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	error_reporting( error_reporting() & ~E_NOTICE );
	include('admin/session.php');
	include('connect_database.php');
	$genres=$_GET['category'];
	$sql="SELECT * FROM english_book WHERE Category='$genres'";
	$sql2="SELECT DISTINCT Category FROM english_book";
	$sql3="SELECT * FROM anouncement ORDER BY timeAdded DESC";
	$result=$conn->query($sql);
	$result2=$conn->query($sql2);
	$result3=$conn->query($sql3);
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
		
		
		<script>
			function getBookSearch(input){
				type=document.getElementById("searchType").value;
				
				if (input.length == 0) { 
        			return;
    			}

				else if(window.XMLHttpRequest){
					xmlhttp=new XMLHttpRequest();
				}
				else{
					xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				}

				xmlhttp.onreadystatechange=function(){
					if(this.readyState==4 && this.status==200){
						document.getElementById("product").innerHTML=this.responseText;
					}
				};

				xmlhttp.open("GET","getBookSearch.php?searchText="+input+"&searchType="+type,true);
				xmlhttp.send();
			}
		</script>
		
	

		<title>Books | Bookstore</title>
	</head>

	<body>
		<nav class="navbar navbar-default">
  			<?php include('webpageLayout/navMenu.php');?>
		</nav>
		
		
		
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1 class="page-title">
						Books
						<small>
							<p>Showing <?php echo $result->num_rows;?> results</p>
						</small>
					</h1>
					<form>
						<input type="text" name="searchText" placeholder="Search" size="50" onkeyup="getBookSearch(this.value)"/>
						<select id="searchType">
							<option value="Title">Title</option>
							<option value="Author">Author</option>
							<option value="Category">Category</option>
						</select>
						<button>Search</button>
					</form>
				</div>
				<div class="col-sm-4">
				</div>
			</div>	
			<div class="row">
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
					<div class="anouncement">
						<div class="sidebar">
							<div class="sidebar-entry widget_categories categories-2">
								<h3 class="sidebar-entry-title">Announcement</h3>
									<?php
									if($result3->num_rows>0){
										while($row = $result3->fetch_assoc()){
											echo "<br/><p><i>[".$row['timeAdded']."]</i> ".$row['content']."</p>";
										}
									}
									
									else{
										echo "No Anouncement.";
									}
								?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-9 col-sm-8 pull-right-md">
					<div class="row">
						<div id="product">
							<?php
								while($row = $result->fetch_assoc()){
									echo "
									<div class=\"item-column col-lg-4 col-md-4 col-sm-6 col-xs-12\">
										<div class=\"itemBook\">
											<a href=\"bookDetails.php?bookID=".$row['Product_ID']."&author=".$row['Author']."\">
												<div class=\"item-image\">
													<img width=\"145\" height=\"185\" src=\"".$row['bookCover']."\" alt=\"".$row['Title']."\"/>
												</div>
											</a>
											<div class=\"item-info\">
												<h4 class=\"no-right-margin\">".$row['Title']."</h4>
												<small class=\"product-terms\">".$row['Category']."</small>
												<h4 class=\"price\">RM ".$row['Price']."</h4>
											</div>
										</div>
									</div>
								";
								}
							?>
						</div>
					</div>
				</div>
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
		<script>$("#navBook").toggleClass('active');</script>
	</body>
</html>