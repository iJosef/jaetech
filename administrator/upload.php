<?php
//allowed origins to upload images
$accepted_origins = array("http://localhost","http://127.0.0.1");

//images upload path
$imageFolder = "../images/";

reset($_FILES);

$temp = current($_FILES);

if (is_uploaded_file($temp['tmp_name'])) {
	if (isset($_SERVER['HTTP_ORIGIN'])) {

		//some origin requests won't set an origin. if the origin is set, it must be valid.
		if(in_array($_SERVER['HTTP_ORIGIN'], $accepted_origins)) {
			header('Access-Control-Allow-Origin: '. $_SERVER['HTTP_ORIGIN']);
		}
		else{
			header("HTTP/1.1 403 Origin Denied");
			return;
		}
	}

	//sanitize input
	if (preg_match("/([^\w\s\d\-_,;:\[\]\(\).])|([\.]{2,})/", $temp['name'])) {
		header("HTTP/1.1 400 Invalid file name");
		return;
	}

	//verify extension
	if(!in_array(strtolower(pathinfo($temp['name'], PATHINFO_EXTENSION)), array("gif","jpg","png"))) {
		header("HTTP/1.1 400 Invalid Extention");
		return;
	}

	//accept upload if there was no origin, or if it is an accepted origin
	$filetowrite = $imageFolder.$temp['name'];
	move_uploaded_file($temp['tmp_name'], $filetowrite);

	//respond to the successful upload with JSON
	//use a location key to specify the path to the saved image resourse
	//{location: '/your/uploaded/image/file'}
    //echo json_encode(array('location'=>$filetowrite));
    $k = substr($filetowrite, 3);

    echo json_encode(array('location'=>$k));
}
else{
	//notify editor that the upload failed
	header("HTTP/1.1 500 Server Error");
}
?>