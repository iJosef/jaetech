<?php
include("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<html>

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>
<?php 
$pst_id = $_GET['post'];

$r= mysqli_query($db, "SELECT posttitle FROM posts WHERE slugged_title = '$pst_id'");
while ($row = mysqli_fetch_array($r)) {
											$pstttle = strtoupper($row['posttitle']);
										}
  										echo $pstttle;
?> - JaeTech - Nigerian webiste designing, Nigerian website management, Nigerian social media management, IT solutions, Tech news
</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="icon" href="img/logo.png"/>
<style>
p img{
  vertical-align: middle;
  display: block;
  height: auto;
  max-width: 100%;
  text-align: center;
}
</style>
</head>
<body>
	<!--header starts here-->
	<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">			
		<div class="container nbar">
			<div class="navbar-header">
				<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.php" class="navbar-brand"><img src="img/logo.png" alt="jaetech_logo"  style="height:100px; margin-left: 80px;" align="left" class="img-responsive"/></a>
			</div>
			<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">		
				
				<ul class="nav navbar-nav nbar visible-md visible-lg mrgin">
					<li><a href="index.php">Home</a></li>
					<!--<li><a href="aboutus.html">About Us</a></li>
                    <li><a href="services.html">Our Services</a></li>-->
                    <li><a href="portfolio.php">Projects</a></li>                    
                    <li class="active"><a href="blog.php">Blog/News</a></li>
					<li><a href="contact.php">Contact Us</a></li>
				</ul>

				<ul class="nav navbar-nav nbar visible-sm visible-xs">
					<li><a href="index.php">Home</a></li>
					<!--<li><a href="aboutus.html">About Us</a></li>
                    <li><a href="services.html">Our Services</a></li>-->
                    <li><a href="portfolio.php">Projects</a></li>                    
                    <li class="active"><a href="blog.php">Blog</a></li>
					<li><a href="contact.php">Contact Us</a></li>
				</ul>		
			</nav>
		</div>
	</header>
	<!--Body content-->
	<div class="container margin">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-8">
					<div class="panel panel-default">
						<div class="panel-body">
							<?php
							include ("db.php");

							/*$pst_id = $_GET['post'];

							$result = mysqli_query($db, "SELECT * FROM posts WHERE posttitle = '$pst_id'");

							if($result){
								while($row = mysqli_fetch_array($result)){
									//$pstid = $row['postid'];

									echo '<h3 align="center"><b>'.$row["posttitle"].'</b></h3><br/><br/>';
									echo '<div style="margin:auto; width: 50%;">';
									echo '<img src="postfiles/'.$row["attachedfile"].'"  alt="'.$row["posttitle"].'" class="img-responsive" width="100%" height="50px"/><br/><br/>';
									echo "</div>";
									echo '<div style="text-align:center; font-size: 15px;">';
									echo $row['blogPost'];
									echo '</div>';
								}
							}*/

							$postID = $_GET ["post"];

							if(!empty($postID)){

								

								$result = mysqli_query($db, "SELECT * FROM posts WHERE slugged_title = '$postID'");

								while ($row = mysqli_fetch_array($result)) {
																$pstttle = $row['posttitle'];
																$a_file = $row['attachedfile'];
																$b_post = $row['blogPost'];
																$h = $row['hitz'];
																$pid = $row['postid'];
															}	
								 		echo '<h3 align="center" style="font-family:cursive;text-transform:uppercase;"><b>'.$pstttle.'</b></h3><br/><br/>';
										echo '<div style="margin:auto; width: 50%;">';
										echo '<img src="postfiles/'.$a_file.'"  alt="'.$pstttle.'" class="img-responsive" width="100%" height="50px"/><br/><br/>';
										echo "</div>";
										echo '<div style="text-align:center; font-size: 15px;">';
										echo $b_post;
										echo '</div>';
										mysqli_query($db, "update posts set hitz = $h + 1 WHERE postid = '$pid'");
										
										echo '<a href="https://web.facebook.com/sharer/sharer.php?u=localhost/jaetech/view-post.php?post='.$postID.'" class="btn btn-primary">Share on<span class="fa fa-facebook-square icn" style="font-size:16px;"></span></a>';
							}					
							?>
							<br/><br/>
							<h4 align="left"><b>Comments</b></h4><br/>
							<?php

							
							$r = mysqli_query($db, "SELECT * FROM comments WHERE slugged_title = '$postID' ORDER BY commenttime DESC");

							while ($row = mysqli_fetch_array($r)) {
								$comntr = $row['commenter'];
								$comnt = $row['comment'];
								$comnttime = $row['commenttime'];
								$pid = $row['postid'];
							

							/*echo '<div class="panel panel-default">';
							echo '<div class="panel-body">';
							echo '<h5 align="left"><b>'.$comntr.'</b></h5>';
							echo '<div style="text-align:justify; font-size: 15px;">';
							echo $comnt;
							echo "</div>";
							echo '<br/><p align="right"><i style="font-weight:bold; font-size:12px;">'.$comnttime.'</i></p>';
							echo "</div>";
							echo "</div>";*/

							echo '<div class="col-xs-12">';
							echo '<blockquote>';
							echo '<p class="text-justify">'.$comnt.'</p>';
							echo '<footer><b>- '.$comntr.'</b><br/><i style="text-align:right; font-size:11px;">'.$comnttime.'</i></footer>';
							echo '</blockquote>';
							echo '</div>';

							
						}

							?>
							<br/><br/><br/>
							<h4 align="left"><b>Post A Comment</b></h4><br/>
							<form  action="procomment.php" method="post" id="comments" onsubmit="return validate()">
								<input type="hidden" name="pid" value="<?php echo $pid; ?>">
								<input type="hidden" name="sid" value="<?php echo $postID;?>">
								<div class="form-group">
									<label for="fulname">Full Name*</label>
									<input type="text" name="fulname" class="form-control" id="fulname" placeholder="Please enter your name" style="width:65%"/>
								</div>
								<div class="form-group">
									<label for="mail">E-mail<br/>(Optional)</label>
									<input type="email" name="mail" class="form-control" id="mail" placeholder="Please enter your email address" style="width:65%"/>
								</div>
								<div class="form-group">
									<label for="comment">Comment*</label>
									<textarea name="comment" class="form-control" id="comment" placeholder="Write a comment" style="min-height: 150px; width:65%"></textarea>
								</div>
								<div class="form-group">										
									<input type="submit" name="sndcomment" class="btn btn-primary" id="submit" value="Comment" style="width:150px;"/>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 align="center" class="ffam"><b>Latest Posts</b></h3><br/><br/>
							<?php
							//$postID;
							$limt = 5;
							$r = "SELECT * FROM posts ORDER BY postid  DESC LIMIT " .$limt;
							$res = mysqli_query($db, $r);
							if($res){
								while($row = mysqli_fetch_array($res)){
									$pstID = $row["postid"];
									$slug = $row["slugged_title"];
																		
								

									echo '<div class="col-md-12">';
									echo '<div class="col-md-2">';
									echo '<img src="postfiles/'.$row["attachedfile"].'"  alt="'.$row["posttitle"].'" width="40" height="50"/>';
									echo '</div>';
									echo '<div class="col-md-10 col-md-push-1">';
									echo '<p style="font-weight:bold; font-size:13px; text-transform:capitalize;"><a href="view-post.php?post='.$slug.'">'.$row["posttitle"].'</a></p>';									
									echo '</div>';
																		
									echo '</div>';
									//echo'<hr width="390">';
								
								}
							}
							?>
						</div>						
					</div>
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 align="center" class="ffam"><b>Popular Posts</b></h3><br/><br/>
							<?php
							$res = mysqli_query($db, "SELECT * FROM posts ORDER BY hitz DESC LIMIT 5 ");

							if($res){
								while($row = mysqli_fetch_array($res)){
									$pID = $row["postid"];
									$slugg = $row["slugged_title"];

									echo '<div class="col-md-12">';
									echo '<div class="col-md-2">';
									echo '<img src="postfiles/'.$row["attachedfile"].'"  alt="'.$row["posttitle"].'" width="40" height="50"/>';
									echo '</div>';
									echo '<div class="col-md-10 col-md-push-1">';
									echo '<p style="font-weight:bold; font-size:13px;text-transform:capitalize;"><a href="view-post.php?post='.$slugg.'">'.$row["posttitle"].'</a></p>';									
									echo '</div>';
																		
									echo '</div>';
									//echo'<hr width="390">';
								}
							}
							
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer -->
	<footer>
		<div class="container" style="border-top: 1px solid grey;">
			<hr />
			<p class="text-center">Copyright &copy; JaeTech 2018. All rights reserved.</p>
		</div>
	</footer>
    <script src="js/jquery-2.0.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>	
	<script src="js/script.js"></script>
</body>
</html>