<?php
	include('connect_database.php');
	
	$sql="SELECT * FROM enquiry WHERE checked=0 ORDER BY timeAdded DESC";
	$result=$conn->query($sql);
	if($result->num_rows>0){
		while($row = $result->fetch_assoc()){
			echo "Name: ".$row['name']."<br/> Email: <a class=\"emailLink\" href=\"mailto:".$row['email']."\">".$row['email']."</a><br/> Subject: ".$row['subject']."<br/> Comment: ".$row['comment']."<br/> Time Submited: ".$row['timeAdded']."<br/> <hr/>";
			
		}
		
		echo $result->num_rows." Enquiries.";
	}
	
	else{
		echo "Don't have any enquiry.";
	}
	
	
	
	$conn->close();			
?>	