<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="icon" href="img/logo.png"/>
<script language="javascript" type="text/javascript">
function validate()
{
    var x = document.forms["login"]["username"].value;
    if (x == "")
    {
        alert("please enter username");
        return false;
    }
    var x = document.forms["login"]["password"].value;
    if (x == "")
    {
        alert("please enter password");
        return false;
    }
}
</script>
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
				<div class="adlogin">					
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3><span class="glyphicon glyphicon-user" style="font-size: 70px; color:gray;"></span>&nbsp;&nbsp;Admin Login</h3>
						</div>
						<div class="panel-body">	
							<form action="processlogin.php" method="post" id="login" onsubmit="return validate()">
								<div class="form-group">
									<label for="username">Username*</label>
									<input type="text" name="username" class="form-control" id="username" placeholder="Please enter username"/>
								</div>
								<div class="form-group">
									<label for="password">Password*</label>
									<input type="password" name="password" class="form-control" id="password" maxlength="10" minlength="6" placeholder="Please enter password"/>
								</div>
								<div class="form-group">										
									<input type="submit" name="login" class="btn btn-primary" id="submit" value="LOGIN" style="width:150px; font-weight:bold;"/>
								</div>
							</form>
						</div>
					</div>
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