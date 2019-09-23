<?php
include("db.php");

if($_GET['id']){
	$id = $_GET['id'];
	$sql = "DELETE FROM comments WHERE commentid = '$id' ";
	mysql_query("$sql");
}

header("location: comments.php");
?>