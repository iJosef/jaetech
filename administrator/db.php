<?php
$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db = "jaetecdb";

$db =mysql_connect($mysql_host,$mysql_user,$mysql_pass) or die("Could not connect to database");

@mysql_select_db($mysql_db, $db) or die("Could not select database");
?>