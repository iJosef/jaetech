<!DOCTYPE html>
<html lang="en">
<html>

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Contact Us - JaeTech - Nigerian webiste designing, Nigerian website management, Nigerian social media management, IT solutions, Tech news</title>
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
                    <li><a href="blog.php">Blog/News</a></li>
					<li class="active"><a href="contact.php">Contact Us</a></li>
				</ul>

				<ul class="nav navbar-nav nbar visible-sm visible-xs">
					<li><a href="index.php">Home</a></li>
					<!--<li><a href="aboutus.html">About Us</a></li>
                    <li><a href="services.html">Our Services</a></li>-->
                    <li><a href="portfolio.php">Projects</a></li>
                    <li><a href="blog.php">Blog</a></li>                    
					<li class="active"><a href="contact.php">Contact Us</a></li>
				</ul>		
			</nav>
		</div>
	</header>
	<!-- Body content-->
	<div class="container margin">
		<div class="row">
			<div class="col-md-12">
				<h3 align="center" style="font-family: cursive;"><b>Get In Touch With Us</b></h3><br/><br/>
				<div class="row">
					<div class="col-md-7 col-lg-7">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h5><b>Message/Feedback</b></h5>
							</div>
							<div class="panel-body">
								<?php
								if(isset($_POST['fullname'])&& isset($_POST['email'])&& isset($_POST['message'])){
									$fn = stripslashes($_POST['fullname']);
									$email = stripslashes($_POST['email']);
									$msg = stripslashes($_POST['message']);
									
									if(!empty($fn) && !empty($email) && !empty($msg)){
										if(strlen($fn)>25 || strlen($email)>50 || strlen($msg)>1000){
											echo '<script language="javascript" type="text/javascript"> alert("Sorry, maximum length for some field has been exceeded.");</script>';
											echo '<script language="javascript" type="text/javascript"> window.location="contact.php";</script>';
											
											exit;
										}
										else{
											$to = 'jaetechit@gmail.com';
											$subject = 'Contact Form Submitted';
											$body = $fn."\n".$msg;
											$headers = 'From: '.$email;
									
											if(@mail($to, $subject, $body, $headers)){
												echo '<p style="color:green;">Thank you for contacting us. We\'ll be in touch soon.</p>';
											}
											else{
												echo '<p style="color:red;">An error occurred. Please try again later.</p>';
											}
										}
									}
									else{
										echo '<p style="color:red;">All fields are required.</p>';
									}
									
								}
								?>
								<form action="contact.php" method="post" id="contact" onsubmit="return validate()">
									<div class="form-group">
										<label for="fullname">Full Name*</label>
										<input type="text" name="fullname" class="form-control" id="fullname" maxlength="25" placeholder="Please enter your name"/>
									</div>
									<div class="form-group">
										<label for="email">Email*</label>
										<input type="text" name="email" class="form-control" id="email" maxlength="50" placeholder="Please enter your email address"/>
									</div>
									<div class="form-group">
										<label for="message">Message*</label>
										<textarea name="message" class="form-control" id="message" maxlength="1000" placeholder="Message/Feedback here...." style="min-height: 200px;"></textarea>
									</div>
									<div class="form-group">										
										<input type="submit" name="msg" class="btn btn-success" id="submit" value="SEND" style="width:170px;"/>
									</div>
								</form>								
							</div>
						</div>			

					</div>
					<div class="col-md-5 col-lg-5">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h5 align="center"><b>Contact Information</b></h5>
							</div>
							<div class="panel-body" style="text-align:center;">
								 <span> <i class="glyphicon glyphicon-earphone"></i>&nbsp;&nbsp;<b>Tel:</b> <a href="tel:+2348155383532"> +234 (0)8155383532</a><br/>&nbsp;&nbsp;<a href="tel:+2348136595944"> +234 (0)8136595944</a><br/>&nbsp;&nbsp;<a href="tel:+2347085596566"> +234 (0)7085596566</a></span><br/><br/>
    							<span><i class="glyphicon glyphicon-envelope"></i>&nbsp;&nbsp;<b>Email: </b><a href="mailto:jaetechit@gmail.com">jaetechit@gmail.com</a></span><br/><br/>
   								 <span>You can follow us on social media: <br/><a href="#"><span class="fa fa-facebook-square icn"></span></a>&nbsp;&nbsp;<a href="#"><span class="fa fa-twitter-square icn"></span></a>&nbsp;&nbsp;<a href="#"><span class="fa fa-linkedin-square icn"></span></a></span>
							</div>
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