<?php
	include("connect_database.php");
	$sql="SELECT DISTINCT Category from english_book";
	$result=$conn->query($sql);
	
	echo"
		<div class=\"container\">
			<div class=\"row\">
				<div class=\"col-md-3 col-sm-4\">
					<div class=\"sidebar widget_nav_menu\">
						<h3>Genres</h3>
						<div class=\"footer-genres-container\">
							<ul class=\"footer-genres\">";
								while($row = $result->fetch_assoc()){
										echo "<li><a href=\"../book(byGenres).php?category=".$row['Category']."\">".$row['Category']."</a></li>";
									}
							echo"</ul>
						</div>
					</div>
				</div>
				<div class=\"col-md-3 col-sm-4\">
					<div class=\"sidebar widget_nav_menu\">
						<h3>Site Map</h3>
						<div class=\"footer-siteMap-container\">
							<ul class=\"footer-siteMap\">
								<li><a href=\"../main.php\">Home</a></li>
								<li><a href=\"../book.php\">Books</a></li>
								<li><a href=\"../Journal.php\">Journal</a></li>
								<li><a href=\"../AboutUs.php\">About Us</a></li>
								<li><a href=\"../ContactUs.php\">Contact Us</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class=\"col-md-3 col-sm-4\">
					<div class=\"sidebar widget_nav_menu\">
						<h3>Social</h3>
						<div class=\"footer-social-container\">
							<ul class=\"footer-social\">
								<li><a href=\"#\">Facebook</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class=\"col-md-3 col-sm-4\">
					<div class=\"sidebar widget_nav_menu\">
						<h3>Subscribe</h3>
						<small>Subscribe to our weekly newsletter.</small>
						<div class=\"footer-subscribe-container\">
							<form method=\"POST\" action=\"subscribe(process).php\">
								<input type=\"text\" placeholder=\"E-mail Address\" name=\"emailAddress\" class=\"form-control form-effect\"/>
								<input type=\"submit\" value=\"Subscribe!\" class=\"btn btn-default\"/>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class=\"footer-bottom\">
				<div class=\"row\">
					<div class=\"col-md-12\">
						<p>Copyright © 2014 - UTAR Website Assignment</p>
						<div class=\"footer-menu\">
							<ul class=\"footer-bottom-menu\">
								<li><a href=\"../main.php\">Home</a></li>
								<li><a href=\"../book.php\">Books</a></li>
								<li><a href=\"../Journal.php\">Journal</a></li>
								<li><a href=\"../AboutUs.php\">About Us</a></li>
								<li><a href=\"../ContactUs.php\">Contact Us</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	";
?>