<?php
include("db.php");

if($_GET['id']){
	$id = $_GET['id'];
	$sql = "DELETE FROM portfolio WHERE portfolioid = '$id' ";
	mysql_query("$sql");
}

header("location: viewprojects.php");
?>