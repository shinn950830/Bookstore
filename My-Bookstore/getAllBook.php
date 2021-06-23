<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	error_reporting( error_reporting() & ~E_NOTICE );
	include('admin/session.php');
	include('connect_database.php');
	$sql="SELECT * FROM english_book";

	$result=$conn->query($sql);

	echo"
		<h3>	Showing ".$result->num_rows." results</h3>";

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