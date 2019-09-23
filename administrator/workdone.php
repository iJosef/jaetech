<?php
include("sessionstart.php");
?>
<html>
<head>
<title></title>
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
				<span style="float:right; margin-top:50px;"><a href="sessionend.php" class="btn btn-danger"><i class="fa fa-sign-out"></i>&nbsp;Logout</a></span>
				<!--<ul class="nav navbar-nav nbar visible-md visible-lg mrgin">
					<li  class="active"><a href="index.php">Home</a></li>
                    <li><a href="services.html">Our Services</a></li>
                    <li><a href="services.html">Portfolio</a></li>
                    <li><a href="aboutus.html">About Us</a></li>
					<li><a href="contact.php">Contact Us</a></li>
				</ul>

				<ul class="nav navbar-nav nbar visible-sm visible-xs">
					<li  class="active"><a href="index.php">Home</a></li>
                    <li><a href="services.html">Our Services</a></li>
                    <li><a href="aboutus.html">About Us</a></li>
					<li><a href="contact.php">Contact Us</a></li>
				</ul>-->		
			</nav>
		</div>
	</header>
	<!--Body content-->
	<div class="container margin">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-4">
					<div class="sec-nvbar">
						<ul>
							<a href="posts.php"><li>Make Posts</li></a>
							<a href="viewposts.php"><li>View Posts</li></a>
							<a href="comments.php"><li>Comments</li></a>
							<a href="workdone.php"><li class="actve">Upload New Projects</li></a>
							<a href="viewprojects.php"><li>View Projects</li></a>
							<a href="change_password.php"><li>Change Admin Password</li></a>
						</ul>
					</div>						
				</div>
				<div class="col-md-8">
					<h3><b>Upload New Project</b></h3><br/><br/>			
					<form action="processworkdone.php" method="post" enctype="multipart/form-data">
						<input type="file" name="file"/><br/><br/>
							<div class="form-group">
										<label for="title">Company Name</label>
										<input type="text" name="title" class="form-control" id="title" style="width:400px;"/>
							</div>
							<div class="form-group">
										<label for="title">Website Name</label>
										<input type="url" name="website" class="form-control" id="title" style="width:400px;"/>
							</div>
							<div class="form-group">										
										<input type="submit" name="msg" class="btn btn-primary" id="submit" value="UPLOAD" style="width:120px;"/>
							</div>
					</form>
					<a href="viewprojects.php" class="btn btn-link">Click to View Projects</a>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer -->
	<footer>
		<div class="container">
			<hr />
			<p class="text-center">Copyright &copy; JaeTech 2017. All rights reserved.</p>
		</div>
	</footer>
    <script src="js/jquery-2.0.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>	
</body>
</html>
