<?php
include("sessionstart.php");
?>
<?php
include("db.php");


$name = $_FILES['file']['name'];
$extension =strtolower(substr($name, strpos($name, ".") +1 ));
$type = $_FILES['file']['type'];
$size = $_FILES['file']['size'];

$tmp = $_FILES['file']['tmp_name'];

$title = $_POST['title'];
$website = $_POST['website'];



if(isset($name)){
	if(!empty($name)){

		if(($extension == 'jpg'|| $extension == 'jpeg' || $extension == 'png')&& ($type == 'image/jpeg' || $type == 'image/png')){

			$loc = '../uploads/';

			if(move_uploaded_file($tmp, $loc.$name)){
				mysql_query("INSERT INTO portfolio (photo, title, website)
					VALUES ('$name','".mysql_real_escape_string($title)."','".mysql_real_escape_string($website)."')");
				echo "New Data Uploaded!! &nbsp;&nbsp;<a href=\"viewprojects.php\">Click to View</a> <br/><br/>";

			}
			else{
				echo "There was an error  &nbsp;&nbsp;<a href=\"workdone.php\">Click to Return</a>";
				exit();
			}
		}
		else{
			echo "File must be jpg/jpeg/png  &nbsp;&nbsp;<a href=\"workdone.php\">Click to Return</a>";
			exit();
		}
	}
	else{
		echo "Please choose a file  &nbsp;&nbsp;<a href=\"workdone.php\">Click to Return</a>";
		exit();
	}
}
?>

