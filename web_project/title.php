<?php
	include('connect_db.php');
	$name_ad = $_GET['name_ad'];
	$query_string = 'SELECT * FROM adviser WHERE name LIKE "'.$name_ad.'"';
	$result = mysql_query($query_string,$conn);
	while($row = mysql_fetch_array($result,MYSQL_ASSOC)){
		echo "<label>".$row['title']."</label>";
	}
?>