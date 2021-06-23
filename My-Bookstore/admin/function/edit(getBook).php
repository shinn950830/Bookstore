<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	error_reporting( error_reporting() & ~E_NOTICE );
	include('../session.php');
?>
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
		
		<title>Edit Book | Bookstore</title>
	</head>
	<body>
		<nav class="navbar navbar-default">
  			<?php include('../../webpageLayout/navMenu(admin).php');?>
		</nav>
		
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-9 col-sm-8 blog-posts">
					<div class="page-header">
						<h3>Edit Book</h3>
					</div>
					<form method="post" action="edit(searchBook).php">
						<label>Search Book: </label>
						<input type="text" name="searchText" class="searchTb"/>
						<select name="searchType">
							<option value="Title">Title</option>
							<option value="Author">Author</option>
							<option value="Category">Category</option>
						</select>
						<input type="submit" value="Search"/>
					</form>
		
					<?php
						include('connect_database.php');
	
						$sql="SELECT * FROM english_book";
	
						$result=$conn->query($sql);
	
						if($result->num_rows>0){
							echo "<form method=\"POST\" action=\"editBookDetail.php\">
									<table class=\"table\">
										<tr>
											<th>Select</th>
											<th>Product ID</th>
											<th>ISBN</th>
											<th>Title</th>
											<th>Author</th>
											<th>Time Added</th>
											<th>Time Edited</th>	
										</tr>";
							while($row = $result->fetch_assoc()){
								echo "<tr><td><input type=\"radio\" name=\"editSelection\" value=\"".$row['Product_ID']. "\"/></td><td>".$row['Product_ID']."</td><td>".$row['ISBN']."</td><td>".$row['Title']."</td><td>".$row['Author']."</td><td>".$row['Time_Added']."</td><td>".$row['Time_Edited']."</td></tr>";
							}
							echo "</table><br/><input type=\"submit\" value=\"Edit\" class=\"submitBtn\"></form>";
						}
	
						else{
							echo "0 Result";
						}
						$conn->close();
					?>
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