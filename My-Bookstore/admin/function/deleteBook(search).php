<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	error_reporting( error_reporting() & ~E_NOTICE );
	include('../session.php');
?>
<!DOCTYPE html>
<html lang="en">
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
			function insertConfirm(){
				var userConfirm=confirm("Are you sure you want to Delete this book?");
				if(userConfirm){
					return true;	
				}
				else{
					return false;
				}
			}
		</script>
		<title>Search Result | Bookstore</title>
	</head>
	
	<body>
	<nav class="navbar navbar-default">
  		<?php include('../../webpageLayout/navMenu(admin).php');?>
	</nav>
		
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-9 col-sm-8 blog-posts">
					<div class="page-header">
						<h3>Delete Book</h3>
					</div>
					<?php
						include('connect_database.php');
	
						$searchTxT=$_POST['searchText'];
						$searchType=$_POST['searchType'];
	
						$sql="SELECT * from english_book WHERE $searchType LIKE '$searchTxT%' OR $searchType LIKE '%$searchTxT%' OR $searchType LIKE '%$searchTxT'";
	
						$result=$conn->query($sql);
	
						if($result->num_rows>0){
							echo "<form method=\"POST\" action=\"deleteBook.php\" onsubmit=\"return insertConfirm()\"\">
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
								echo "<tr><td><input type=\"radio\" name=\"deleteSelection\" value=\"".$row['Product_ID']. "\"/></td><td>".$row['Product_ID']."</td><td>".$row['ISBN']."</td><td>".$row['Title']."</td><td>".$row['Author']."</td><td>".$row['Time_Added']."</td><td>".$row['Time_Edited']."</td>";
							}
							echo "</table><br/><input type=\"submit\" value=\"Delete\" class=\"submitBtn\"></form>";
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