<?php
$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="jaetecdb";

$db =@mysqli_connect($mysql_host,$mysql_user,$mysql_pass) or die("Could not connect to database");

@mysqli_select_db($db, $mysql_db) or die("Could not select database");
?>