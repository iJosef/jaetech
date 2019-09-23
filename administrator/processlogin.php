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
				
				<!--<ul class="nav navbar-nav nbar visible-md visible-lg mrgin">
					<li  class="active"><a href="index.php">Home</a></li>
                    <li><a href="services.html">Our Services</a></li>
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
	<div class="container margin bg">
		<div class="row">
			<div class="col-md-12">
				<?php
				include("db.php");

				$uname = $_POST['username'];
				$pswd = $_POST['password'];
				$hash_p = md5($pswd);

				/*$login = mysql_query("SELECT * FROM users WHERE username = '".mysql_real_escape_string($uname)."' and password = '".mysql_real_escape_string($hash_p)."'");*/
$login = mysql_query("SELECT * FROM users WHERE username = '$uname' and password = '$pswd'");


				$count = mysql_num_rows($login);
				$row = mysql_fetch_array($login);

				if($count == 1){
					session_start();
					$_SESSION['user'] = $row['username'];
					header("location:posts.php");
				}
				else{
					echo '<script language="javascript" type="text/javascript">alert("Wrong Username or Password!!")</script>';
					echo '<script language="javascript" type="text/javascript">window.location= "index.php";</script>';
				}
				?>
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