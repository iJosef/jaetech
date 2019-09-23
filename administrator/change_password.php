<?php
include("sessionstart.php");
?>
<?php
include("db.php");
?>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="icon" href="img/logo.png"/>
<!--
<script language="javascript" type="text/javascript">
function validate()
{
    var x = document.forms["changepass"]["oldpass"].value;
    if (x == "")
    {
        alert("please enter admin old password");
        return false;
    }
    var x = document.forms["changepass"]["npass"].value;
    if (x == "")
    {
        alert("please enter new password");
        return false;
    }
    var x = document.forms["changepass"]["rnpass"].value;
    if (x == "")
    {
        alert("please re-enter new password");
        return false;
    }
    var y = document.forms["changepass"]["npass"].value;
    var z = document.forms["changepass"]["rnpass"].value;
    if (y != z)
    {
        alert("new passwords don't match!!");
        return false;
    }
}
</script>-->
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
							<a href="workdone.php"><li>Upload New Projects</li></a>
							<a href="viewprojects.php"><li>View Projects</li></a>
							<a href="change_password.php"><li  class="actve">Change Admin Password</li></a>
						</ul>
					</div>							
				</div>
				<div class="col-md-8">
					<h3><b>Change Admin Password</b></h3><br/><br/>
					<form action="processpasswordchange.php" method="post" id="changepass" onsubmit="return validate()">
								<div class="form-group">
									<label for="oldpass">Old Password*</label>
									<input type="password" name="oldpass" class="form-control" id="oldpass" maxlength="10" minlength="6" placeholder="Please enter old password"/>
								</div>
								<div class="form-group">
									<label for="npass">New Password*</label>
									<input type="password" name="npass" class="form-control" id="npass" maxlength="10" minlength="6" placeholder="Please enter new password"/>
								</div>
								<div class="form-group">
									<label for="rnpass">Re-Type New Password*</label>
									<input type="password" name="rnpass" class="form-control" id="rnpass" maxlength="10" minlength="6" placeholder="Please re-type new password"/>
								</div>
								<div class="form-group">										
									<input type="submit" name="login" class="btn btn-primary" id="submit" value="Submit" style="width:150px; font-weight:bold;"/>
								</div>
							</form>
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