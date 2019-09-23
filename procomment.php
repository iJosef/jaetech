<?php
include ("db.php");

$fn = stripslashes($_POST['fulname']);
$email = stripslashes($_POST['mail']);
$cmnt = stripslashes($_POST['comment']);
$time = date("M-d-Y H:i", strtotime ("+1 hour"));
$pid = $_POST['pid'];
$sid = $_POST['sid'];

if(!empty($fn) && !empty($cmnt)){

	$sql = mysqli_query($db, "INSERT INTO comments (commenter, eMail, comment, commenttime, postid, slugged_title)
					VALUES ('".mysqli_real_escape_string($fn)."','".mysqli_real_escape_string($email)."','".mysqli_real_escape_string($cmnt)."','$time','$pid','$sid')");
	if($sql){

	header("location:view-post.php?post=$sid");
   }
   else{
   	echo mysqli_error();
   }
}
?>
