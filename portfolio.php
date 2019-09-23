<!DOCTYPE html>
<html lang="en">
<html>

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Portfolio - JaeTech - Nigerian webiste designing, Nigerian website management, Nigerian social media management, IT solutions, Tech news</title>
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
                    <li  class="active"><a href="portfolio.php">Projects</a></li>                    
                    <li><a href="blog.php">Blog/News</a></li>
					<li><a href="contact.php">Contact Us</a></li>
				</ul>

				<ul class="nav navbar-nav nbar visible-sm visible-xs">
					<li><a href="index.php">Home</a></li>
					<!--<li><a href="aboutus.html">About Us</a></li>
                    <li><a href="services.html">Our Services</a></li>-->
                    <li  class="active"><a href="portfolio.php">Projects</a></li>                    
                    <li><a href="blog.php">Blog</a></li>
					<li><a href="contact.php">Contact Us</a></li>
				</ul>		
			</nav>
		</div>
	</header>
	<!--Body content-->
	<div class="container margin">
		<div class="row">
			<div class="col-md-12">	
			<h3 align="center" style="font-family: cursive;"><b>Our Projects</b></h3><br/><br/>			
					<?php
					include("db.php");

					$result = mysqli_query($db, "SELECT * FROM portfolio ORDER BY portfolioid DESC LIMIT 10");

					if($result){
						while ($row = mysqli_fetch_array($result)) {		
										$p_id = $row['portfolioid'];
										echo '<div>';
										echo '<ul class="col-md-4">';
										echo '<a href="'.$row["website"].'" target="_blank"><img src="uploads/'.$row["photo"].'"  alt="'.$row["title"].'" class="img-responsive"  style="height:200px; width:100%;"/></a><br/>';
										echo '<p align="center"><a href="'.$row["website"].'" target="_blank">'.$row["title"].'</a></p>';
										echo '</ul>';
										echo '</div>';
									}
					}				
					?>								
				
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