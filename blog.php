<!DOCTYPE html>
<html lang="en">
<html>

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Blog/News - JaeTech - Nigerian webiste designing, Nigerian website management, Nigerian social media management, IT solutions, Tech news</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="icon" href="img/logo.png"/>
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
				<div class="col-md-7">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 align="left" class="ffam"><b>Blog/News</b></h3><br/><br/>
							<?php
							include("db.php");

							/*$result = mysqli_query($db, "SELECT * FROM posts ORDER BY postid DESC LIMIT 10");

							if($result){
								while($row = mysqli_fetch_array($result)){
									//$id = $row['postid'];
									echo '<div class="col-md-12">';
									echo '<div class="panel panel-default">';
									echo '<div class="panel-body">';
									echo '<div class="col-md-2">';
									echo '<img src="postfiles/'.$row["attachedfile"].'"  alt="'.$row['posttitle'].'" class="img-responsive img-rounded" width="" height=""/>';
									echo '</div>';
									echo '<div class="col-md-10">';
									echo '<br/><span><h5 style="font-weight:bold; font-size:17px;"><a href="view_post.php?post ='.$row['postid'].'">'.$row['posttitle'].'</a></h5></span>';
									echo '<br/><p align="right"><i style="font-weight:bold; font-size:14px;">'.$row["dateTime"].'</i></p>';
									echo '</div>';
									echo '</div>';
									echo '</div>';
									echo '</div>';
								}
							}*/

							 //define how many results per page
							 $results_per_page = 5;  
							 
							//find out the number of results stored in the database
							$result = mysqli_query($db, "SELECT * FROM posts");
							$num_of_results = mysqli_num_rows($result);
			
							//determine the number of pages available
							$num_of_pages = ceil($num_of_results/$results_per_page);
			
							//determine which page number visitor is currently on
							if (!isset($_GET['page'])) {
								$page = 1;
							}else{
								$page = $_GET['page'];
							}
			
							//determine the sql LIMIT starting number for the results on the displaying page
							$this_page_first_result = ($page-1)*$results_per_page;
							//retrieve selected results from database and display them on page
							$sql = "SELECT * FROM posts ORDER BY postid DESC LIMIT " .$this_page_first_result.','.$results_per_page;
							$res = mysqli_query($db, $sql);
							//$result = mysqli_query($db, "SELECT * FROM posts ORDER BY postid DESC LIMIT 10");

							if($res){
								while($row = mysqli_fetch_array($res)){
									$postID = $row["postid"];
									$attFILE = $row["attachedfile"];
									$postTITLE = $row["posttitle"];
									$TandD = $row["dateTime"];
									$slugd = $row["slugged_title"];
								
									echo '<div class="col-md-12">';
									echo '<div class="panel panel-default">';
									echo '<div class="panel-body">';
									echo '<div class="col-sm-3 col-md-3">';
									echo '<img src="postfiles/'.$attFILE.'"  alt="'.$postTITLE.'" class="img-thumb img-rounded"/>';
									echo '</div>';
									echo '<div class="col-md-9">';
									echo '<br/><span><h5 style="font-weight:bold; font-size:17px;text-transform:capitalize;"><a href="view-post.php?post='.$slugd.'">'.$postTITLE.'</a></h5></span>';
									echo '<br/><p align="right"><i style="font-weight:bold; font-size:11px;">'.$TandD.'</i></p>';
									echo '</div>';
									echo '</div>';
									echo '</div>';
									echo '</div>';
								}
							}
							
							?>
							<div class="col-sm-11 col-sm-push-1" style="margin-top:15px;">
								<?php
								
								// echo "<b>Page: </b>";
								echo '<ul class="pagination">
								<li><a href="#">&laquo;</a></li>';
									//display the links to the pages
									for ($page=1; $page<=$num_of_pages; $page++) { 
									//echo '<span><a href="research-papers.php?page='.$page.'" style="border:solid 1px;padding:5px;margin:5px;background-color:skyblue;color:white;"><b>'.$page.'   </b></a></span>';
										
											echo '<li><a href="blog.php?page='.$page.'">'.$page.'   </a></li>';
										
									}
									echo '<li><a href="#">&raquo;</a></li>
									</ul>';
								?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 align="left" class="ffam"><b>Popular Posts</b></h3><br/><br/>
							<?php
							$res = mysqli_query($db, "SELECT * FROM posts ORDER BY hitz DESC LIMIT 5 ");

							if($res){
								while($row = mysqli_fetch_array($res)){
									$postID = $row["postid"];
									$sluggd = $row["slugged_title"];

									echo '<div class="col-md-12">';
									echo '<div class="col-md-2">';
									echo '<img src="postfiles/'.$row["attachedfile"].'"  alt="'.$row["posttitle"].'" width="40" height="40"/>';
									echo '</div>';
									echo '<div class="col-md-10">';
									echo '<p style="font-weight:bold; font-size:14px;text-transform:capitalize;"><a href="view-post.php?post='.$sluggd.'">'.$row["posttitle"].'</a></p>';									
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
</body>
</html>