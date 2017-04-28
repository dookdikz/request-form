<?php
	include('connect_db.php');
	$branch_code = $_GET['branch_code'];
	$query_string = 'SELECT * FROM branch WHERE code LIKE "'.$branch_code.'"';
	$result = mysql_query($query_string,$conn);
	while($row = mysql_fetch_array($result,MYSQL_ASSOC)){
		echo "<label>".$row['name']."</label>";
	}
?>