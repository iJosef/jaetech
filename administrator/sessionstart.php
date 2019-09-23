<?php
session_start();
if(!isset($_SESSION['user'])){
	header("location: index.php");
}
$currentuser_session = $_SESSION['user'];
?>