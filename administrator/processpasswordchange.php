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

				$oldp = $_POST['oldpass'];
				$npass = $_POST['npass'];
				$rnpass = $_POST['rnpass'];
				$hash_np = md5($npass);
				$id = 1;

				

				

				if(!empty($oldp)||!empty($npass)||!empty($rnpass)){
					if($npass == $rnpass){
						$r = mysql_query("SELECT * FROM users where userid = '$id'");
						$rc = mysql_num_rows($r);
						$rw = mysql_fetch_array($r);

						if($rc == 1){
							
								$id = $rw['userid'];
								$s= mysql_query("UPDATE users SET password = '".mysql_real_escape_string($hash_np)."' WHERE userid ='".mysql_real_escape_string($id)."'");

								if($s){
									header("location:index.php");
									
								}else{
									echo '<script language="javascript" type="text/javascript">alert("An error occurred")</script>';
									echo '<script language="javascript" type="text/javascript">window.location= "change_password.php";</script>';
								}						
						}
						else{
							echo '<script language="javascript" type="text/javascript">alert("passwords do not match")</script>';
							echo '<script language="javascript" type="text/javascript">window.location= "change_password.php";</script>';
						}
					}
					else{
						echo '<script language="javascript" type="text/javascript">alert("your new passwords do not match!!")</script>';
						echo '<script language="javascript" type="text/javascript">window.location= "change_password.php";</script>';
					}
				}
				else{
					echo '<script language="javascript" type="text/javascript">alert("You left a field empty!!")</script>';
					echo '<script language="javascript" type="text/javascript">window.location= "change_password.php";</script>';
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