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
<script type="text/javascript" src='tinymce\js\tinymce\tinymce.min.js'></script>
  <script type="text/javascript">
  tinymce.init({
    selector: '#myTextarea',
    theme: 'modern',
    height: 300,
    plugins: [
      'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
      'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
      'save table contextmenu directionality emoticons template paste textcolor'
    ],
    content_css: 'css/content.css',
    toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons',
	images_upload_url: 'upload.php',
    images_upload_handler: function(blobInfo, success, failure) {
      var xhr, formData,

      xhr = new XMLHttpRequest();
      xhr.withCredentials = false;
      xhr.open('POST','upload.php');

      xhr.onload = function() {
        var json;

        if (xhr.status != 200){
          failure ('HTTP Error: ' + xhr.status);
          return;
        }

        json = JSON.parse(xhr.responseText);

        if (!json || typeof json.location != 'string') {
          failure ('invalid JSON: ' + xhr.responseText);
          return;
        }

        success(json.location);
        
      }

      formData = new FormData();
      formData.append ('file', blobInfo.blob(), blobInfo.filename());

      xhr.send(formData);
    }
  });
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
							<a href="posts.php"><li  class="actve">Make Posts</li></a>
							<a href="viewposts.php"><li>View Posts</li></a>
							<a href="comments.php"><li>Comments</li></a>
							<a href="workdone.php"><li>Upload New Projects</li></a>
							<a href="viewprojects.php"><li>View Projects</li></a>
							<a href="change_password.php"><li>Change Admin Password</li></a>
						</ul>
					</div>						
				</div>
				<div class="col-md-8">
                    <?php
                        $id = $_GET ['id'];

                        $result = mysql_query("SELECT * FROM posts where postid = '$id'");

                        while ($row = mysql_fetch_array($result))
                            {
                            $title = $row['posttitle'];
                            //$att=$row['attachedfile'];
                            //$email=$row['email'];
                            $post=$row['blogPost'];
                            //$resarea=$row['researcharea'];
                            //$subdate=$row['submissiondate'];
                            $slug=$row['slugged_title'];
                        }
                    ?>
                    <?php
                    if(isset($_POST['title'])&&isset($_POST['post'])) {
                    	$id = $_POST['id'];
                    	$ttle = $_POST['title'];
                    	function create_url_slug($ttle){
							$slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $ttle);
							return $slug;
						}
                    	$slugged = create_url_slug($ttle);
                    	$pst = $_POST['post'];

                    	
                    	if(!empty($ttle)&&!empty($pst)) {
                    		$query = "UPDATE posts SET posttitle='".mysql_real_escape_string($ttle)."', blogPost='".mysql_real_escape_string($pst)."', slugged_title='$slugged' WHERE postid='$id'";
                    		$query_update = mysql_query($query);

                    		if($query_update=true){
                    			header("location:previewpost.php?id=$id");
                    		}
                    		else{
                    			echo '<p style="color:red;">An error occurred. Please try again.</p>';
                    		}
                    	}
                    	else{
                    		echo '<p style="color:red;">All fields are required.</p>';
                    	}
                    }
                    ?>
					<h3><b>Edit Post</b></h3><br/><br/>
					<form action="editpost.php" method="post" enctype="multipart/form-data">
                        <input name="id" type="hidden" value="<?php echo $id; ?>">
						<div class="form-group">
							<label for="title">Title of Post</label>
							<input type="text" name="title" class="form-control" id="title" style="width:400px;" value="<?php echo $title; ?>"/>
						</div>
						<!--<div class="form-group">
							<label for="file">Select File</label>
							<input type="file" name="file" id="file" value="<?php echo $att; ?>"/>
						</div>-->
						<div class="form-group">
							<label for="myTextarea">Post</label>
							<!--<textarea name="message" class="form-control" id="post" style="min-height: 350px;"></textarea>-->
							<textarea name="post" id="myTextarea"><?php echo $post; ?></textarea>
						</div>
						<div class="form-group">										
							<input type="submit" name="msg" class="btn btn-primary" id="submit" value="POST" style="width:120px;"/>
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