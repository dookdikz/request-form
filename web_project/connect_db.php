<?php

$servername = "localhost";
$username = "root";
$password = "root";
$db = "SE";
// Create connection

$conn = mysql_connect($servername, $username, $password);
mysql_query( "SET NAMES UTF8" );
$sdb = mysql_select_db($db) ;
?>