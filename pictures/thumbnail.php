<?php

// Get some request parameters we're going to use.
// We're expecting the parameters below to exist.
//$file = $_GET['path'];
//$width = $_GET['width'];
//$height = $_GET['height'];

/*$extension = explode('.', $file, 2)[1];

if (extension == "png") {
	$imgresource = imagecreatefrompng($file);
	header("Content-Type: image/png");
}
else {
	$imgresource = imagecreatefromjpeg($file);
	header("Content-Type: image/jpeg");
}

//echo $imgresource;
$scaledimage = imagescale($imgresource, $width, -1, IMG_BICUBIC);
imagejpeg($scaledimage);*/

$filename = $_GET['path'];;
$percent = 0.1;

// Content type
header('Content-Type: image/jpeg');

// Get new dimensions
list($width, $height) = getimagesize($filename);
$new_width = $width * $percent;
$new_height = $height * $percent;

// Resample
$image_p = imagecreatetruecolor($new_width, $new_height);
$image = imagecreatefromjpeg($filename);
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

// Output
imagejpeg($image_p, null, 100);

?>