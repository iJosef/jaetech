<?php
include("sessionstart.php");
?>
<?php
include("db.php");


$title = strtolower($_POST['title']);

$slugged = create_url_slug($title);
$file = $_FILES['file']['name'];
$ext = strtolower(substr($file, strpos($file,".") +1 ));
$type = $_FILES['file']['type'];
$tmp = $_FILES['file']['tmp_name'];
$post = $_POST['post'];
$time = date("M-d-Y H:i", strtotime ("+1 hour"));





function create_url_slug($title){
	$slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $title);
	return $slug;
}

if(isset($file)){
	if(!empty($file)){
		if(($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' || $ext == 'mp4') & ($type == 'image/jpeg' || $type == 'image/png' || $type == 'video/mp4')){
			$loc = '../postfiles/';

			if(move_uploaded_file($tmp, $loc.$file)){
				$sql = mysql_query("INSERT INTO posts (posttitle, attachedfile, blogPost, slugged_title, dateTime)
					VALUES ('".mysql_real_escape_string($title)."','$file','".mysql_real_escape_string($post)."', '$slugged','$time')");


				if($sql){
				echo "NEW POST UPLOADED!! &nbsp;&nbsp;<a href=\"viewposts.php\">Click to View</a> <br/><br/>";	
				}
				else{
					echo "An error occured<br/><br>";
					echo mysql_error();
				}		
			}
			else{
				echo "An unexpected error occured";
				exit();
			}
		}
		else{
			echo "File must be Jpeg/Jpg/png/mp4";
			exit();
		}
	}
	else{
		echo "Please choose a file";
		exit();
	}
}
?>