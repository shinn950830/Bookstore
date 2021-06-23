<?php
	include('connect_database.php');
	
	$sql="SELECT * FROM anouncement ORDER BY timeAdded DESC";
	
	$result=$conn->query($sql);
	if($result->num_rows>0){
		echo "
			<form method=\"POST\" action=\"deleteAnouncement.php\">
			<table class=\"table\">
				<tr>
					<th>Select</th>
					<th>ID</th>
					<th>Time Added</th>
					<th>Content</th>
					<th>Person In Charge</th>	
				</tr>"; 
		while($row = $result->fetch_assoc()){
			echo "<tr><td><input type=\"radio\" name=\"deleteSelection\" value=\"".$row['AnounceID']. "\"/></td><td>".$row['AnounceID']."</td><td>".$row['timeAdded']."</td><td>".$row['content']."</td><td>".$row['personAdded']."</td>";
		}
		echo "</table><br/><input type=\"submit\" value=\"Delete\" class=\"submitBtn\"></form>";
	}
	
	else{
		echo "No Anouncement";
	}
	$conn->close();
?>