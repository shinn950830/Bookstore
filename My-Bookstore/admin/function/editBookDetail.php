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
		
		<title>Edit Book Details | Bookstore</title>
	</head>
	
	<body>
		<nav class="navbar navbar-default">
  			<?php include('../../webpageLayout/navMenu(admin).php');?>
		</nav>
		
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-9 col-sm-8 blog-posts">
					<?php
						include('connect_database.php');
	
						$editID=$_POST['editSelection'];

	
						$sql="SELECT * from english_book WHERE Product_ID=\"$editID\"";
						$result=$conn->query($sql);
	
	
						if($result->num_rows>0){
						while($row = $result->fetch_assoc()){


		
						echo
						"<h1>Book Details</h1>
						<form method=\"POST\" action=\"edit(process).php\">
								<fieldset>
									<table>
										<tr>
											<td><label>Book ID:</label></td>
											<td><input type=\"text\" size=50 name=\"book_id\" value=\"".$row['Product_ID']."\" required/></td>
										</tr>
										<tr>
											<td><label>ISBN:</label></td>
											<td><input type=\"text\" size=50 name=\"ISBN\" value=\"".$row['ISBN']."\" required/></td>
										</tr>
										<tr>
											<td><label>Book Title:</label></td>
											<td><input type=\"text\" size=100 name=\"title\" value=\"".$row['Title']."\" required/></td>
										</tr>
										<tr>
											<td><label>Author:</label></td>
											<td><input type=\"text\" size=50 name=\"author\" value=\"".$row['Author']."\" required/></td>
										</tr>
										<tr>
											<td><label>Product Description:</label><br></td>
											<td><textarea cols=\"40\" rows=\"10\" name=\"description\" required>".$row['Description']."</textarea></td>
										</tr>
										<tr>
											<td><label>Price:</label></td>
											<td><input type=\"text\" size=50 name=\"price\" value=\"".$row['Price']."\" required/></td>
										</tr>
										<tr>
											<td><label>Pages:</label></td>
											<td><input type=\"text\" size=50 name=\"pages\" value=\"".$row['Pages']."\" /></td>
										</tr>
										<tr>
											<td><label>Category:</label></td>
											<td><input type=\"text\" size=50 name=\"category\" value=\"".$row['Category']."\" required/></td>
										</tr>
										<tr>
											<td><label>Publisher:</label></td>
											<td><input type=\"text\" size=50 name=\"publisher\" value=\"".$row['Publisher']."\" /></td>
										</tr>
										<tr>
											<td><label>Published Date:</label></td>
											<td><input type=\"date\" name=\"published_date\" value=\"".$row['Published_date']."\"/></td>
										</tr>
										<tr colspan=2>
											<td><input type=\"submit\" value=\"Update\" class=\"submitBtn\" onclick=\"insertConfirm();\"/></td>
										</tr>
									</table>
								</fieldset>
							</form>";
	
						}
					}

					else{
						echo "0 result";
					}
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