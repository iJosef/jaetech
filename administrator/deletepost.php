<?php
include("db.php");

if($_GET['id']){
	$id = $_GET['id'];
	$sql = "DELETE FROM posts WHERE postid = '$id' ";
	mysql_query("$sql");
}

header("location: viewposts.php");
?>