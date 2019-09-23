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
							<a href="comments.php"><li  class="actve">Comments</li></a>
							<a href="workdone.php"><li>Upload New Projects</li></a>
							<a href="viewprojects.php"><li>View Projects</li></a>
							<a href="change_password.php"><li>Change Admin Password</li></a>
						</ul>
					</div>						
				</div>
				<div class="col-md-8">
					<div class="col-sm-12 col-md-12">
						<h3><b>Comments</b></h3><br/><br/>
						<table cellpadding="10px" cellspacing="5px" border="3px" class="table">
							<thead>
								<tr>
									<th><b>Author</b></th>
									<th><b>Comment</b></th>
									<th><b>In response to</b></th>
									<th><b>Submitted on</b></th>
									<th><b>Action</b></th>
								</tr>
							</thead>
							<tbody>
								<?php
								//define how many results per page
		                          $results_per_page = 10;  

		                          //find out the number of results stored in the database
		                          $result = mysql_query("SELECT * FROM comments");
		                          $num_of_results = mysql_num_rows($result);

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
								$sql="SELECT comments.commentid, comments.commenter, comments.comment, posts.posttitle, posts.postid, comments.commenttime FROM comments,posts WHERE comments.postid=posts.postid ORDER BY comments.commentid DESC LIMIT " .$this_page_first_result.','.$results_per_page;
								$r = mysql_query($sql);

								if($r){
									while ($row = mysql_fetch_array($r)) {
										echo "<tr>";
										echo '<td>'.$row['commenter'].'</td>';
										echo '<td>'.$row['comment'].'</td>';
										echo '<td><a href="previewpost.php?id='.$row['postid'].'">'.$row['posttitle'].'</a></td>';
										echo '<td>'.$row['commenttime'].'</td>';
										echo '<td><a href="deletecomment.php?id='.$row['commentid'].'">&nbsp;&nbsp;&nbsp;<span class="fa fa-trash-o" style="color:#f9341e; text-align:center;"></span></a>';
										echo "</tr>";
									}
								}
								?>
							</tbody>
						</table>
					</div>
					<div class="col-sm-11 col-sm-push-1" style="margin-top:15px;">
	                    <?php
	                       // echo "<b>Page: </b>";
	                     echo '<ul class="pagination">
	                                  <li><a href="#">&laquo;</a></li>';
	                        //display the links to the pages
	                        for ($page=1; $page<=$num_of_pages; $page++) { 
	                           //echo '<span><a href="research-papers.php?page='.$page.'" style="border:solid 1px;padding:5px;margin:5px;background-color:skyblue;color:white;"><b>'.$page.'   </b></a></span>';
	                           
	                            echo '<li><a href="comments.php?page='.$page.'">'.$page.'   </a></li>';
	                            
	                          }
	                          echo '<li><a href="#">&raquo;</a></li>
	                                </ul>';
	                    ?>
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