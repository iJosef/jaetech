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
<title>JaeTech - Nigerian webiste designing, Nigerian website management, Nigerian social media management, IT solutions, Tech news</title>
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
					<li  class="active"><a href="index.php">Home</a></li>
					<!--<li><a href="aboutus.html">About Us</a></li>
                    <li><a href="services.html">Our Services</a></li>-->
                    <li><a href="portfolio.php">Projects</a></li>
                    <li><a href="blog.php">Blog/News</a></li>                    
					<li><a href="contact.php">Contact Us</a></li>
				</ul>

				<ul class="nav navbar-nav nbar visible-sm visible-xs">
					<li  class="active"><a href="index.php">Home</a></li>
					<!--<li><a href="aboutus.html">About Us</a></li>
                    <li><a href="services.html">Our Services</a></li>-->
                    <li><a href="portfolio.php">Projects</a></li>
                    <li><a href="blog.php">Blog</a></li>                    
					<li><a href="contact.php">Contact Us</a></li>
				</ul>		
			</nav>
		</div>
	</header>
	<!--Body content-->
	<div class="container margin">
		<!--slider starts-->
        <div>
            <div id="myCarousel" class="carousel slide" data-interval="4000" data-ride="carousel">
                <!--carousel indicators-->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                  <li data-target="#myCarousel" data-slide-to="3"></li>
                  <li data-target="#myCarousel" data-slide-to="4"></li>
                </ol>
                <!--carousel items-->
                <div class="carousel-inner">
                  <div class="item active"> <img src="img/technology.jpg" alt="first slide" style="height:300px; width: 100%;"> </div>
                  <div class="item"> <img src="img/techie.jpg" alt="second slide" style="height:300px; width: 100%;"> </div>
                  <div class="item"> <img src="img/image.jpg" alt="third slide" style="height:300px; width: 100%;"> </div>
                  <div class="item"> <img src="img/tech.jpg" alt="fourth slide" style="height:300px; width: 100%;"> </div>
                  <div class="item"> <img src="img/software.jpg" alt="fifth slide" style="height:300px; width: 100%;"> </div>
                </div>
                <!-- carousel nav-->
                <a class="carousel-control left" href="#myCarousel" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span></a> <a class="carousel-control right" href="#myCarousel" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a> 
            </div>
        </div>
      <!--end of slider-->
		<div class="col-md-12" style="border-top: 1px solid grey; border-bottom: 1px solid grey;">
			<h2 align="center" class="ffam"><b>Welcome to <span style="font-family:cursive;">JAETECH</span></b></h2><br/>
			<p align="center">We are a totally indigenous Information Technology (IT) company that transforms the lives of businesses and brands by creating platforms that make them work smarter and their work easier. We are an innovation-driven enterprise that provides IT solutions and support that are proven secure and easy to use. Our solutions range from Website development and design, Website management to Social media marketing, amongst others which have successfully impacted positively on the lives of businesses and brands. Our goal is to deliver platforms that help our clients run more profitable businesses and discover better ways to achieve their business goals and objectives.</p>
		</div>
		<div  class="col-md-12" style="border-top: 1px solid grey; border-bottom: 1px solid grey;">
			<h2 align="center" class="ffam"><b>Our Principles</b></h2><br/>
			<div class="col-md-12">
				<div class="col-md-4">
					<div class="col-sm-3"><span class="fa fa-eye" style="font-size:80px;color:skyblue;margin-top:30px;"></span></div>
					<div class="col-sm-8 col-sm-push-1">
						<h3><u>Our vision</u></h3>
						<p style="text-align:justify;">To be the preferred business and brand transforming platform.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="col-sm-3"><span class="fa fa-cogs" style="font-size:80px;color:skyblue;margin-top:30px;"></span></div>
					<div class="col-sm-8 col-sm-push-1">
						<h3><u>Our mission</u></h3>
						<p style="text-align:justify;">We create platforms to make work easier and smarter, while making life better.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="col-sm-3"><span class="fa fa-gavel" style="font-size:80px;color:skyblue;margin-top:30px;"></span></div>
					<div class="col-sm-8 col-sm-push-1">
						<h3><u>Our core customs</u></h3>
						<p style="text-align:justify;">Team work | Commitment | Passion | Uniqueness | Integrity | Spontaneity</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12" style="border-top: 1px solid grey; border-bottom: 1px solid grey;">
		<h2 align="center" class="ffam"><b>Projects Done</b></h2><br/><br/>
		<div class="col-md-12">	
		<?php
		$res = mysqli_query($db, "SELECT * FROM portfolio ORDER BY portfolioid DESC LIMIT 4");

			if($res){
				while ($row = mysqli_fetch_array($res)) {		
					$p_id = $row['portfolioid'];
					echo '<div>';
					echo '<ul class="col-md-3">';
					echo '<a href="'.$row["website"].'" target="_blank"><img src="uploads/'.$row["photo"].'"  alt="'.$row["title"].'" class="img-responsive"  style="height:200px; width:100%;"/></a><br/>';
					echo '<p align="center"><a href="'.$row["website"].'" target="_blank">'.$row["title"].'</a></p>';
					echo '</ul>';
					echo '</div>';
				}
			}				
		
		?>
		</div>
		<br/>
		<p align="right" style="font-weight:bold; font-size:14px;"><a href="portfolio.php" class="btn btn-primary">See more..</a></p>
		</div>
		<div class="col-md-12" style="border-top: 1px solid grey; border-bottom: 1px solid grey;">
			<h2 align="center" class="ffam"><b>Recent Posts</b></h2><br/><br/>
			<div class="col-md-12">
			<?php
			$result = mysqli_query($db, "SELECT * FROM posts ORDER BY postid DESC LIMIT 4");

			if($result){
				while ($row = mysqli_fetch_array($result)) {
					$id = $row['postid'];
					$slugd = $row["slugged_title"];
					echo '<div>';
					echo '<ul class="col-md-3">';
					echo '<img src="postfiles/'.$row["attachedfile"].'"  alt="'.$row["posttitle"].'" class="img-responsive"  style="height:200px; width:100%;"/><br/>';
					echo '<p align="center" style="font-weight:bold; font-size:15px;text-transform:capitalize;"><a href="view-post.php?post='.$slugd.'">'.$row["posttitle"].'</a></p>';
					echo '</ul>';
					echo '</div>';
				}
			}
			?>
			</div>
			<br/>
			<p align="right" style="font-weight:bold; font-size:14px;"><a href="blog.php" class="btn btn-primary">See more..</a></p>
		</div>

	</div>
	<!-- Footer -->
	<footer>
		<div class="container">
			<hr />
			<p class="text-center">Copyright &copy; JaeTech 2018. All rights reserved.</p>
		</div>
	</footer>
    <script src="js/jquery-2.0.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>	
</body>
</html>