<?php

//loop through and include each pixel
function displayPixels($pixels) {
	for($x = 0; $x < count($pixels); $x++) {
		include($_SERVER['DOCUMENT_ROOT'].'/pixel_looper/pixels/'.$pixels[$x].'.php');
	}
}

// instructions
// add pixels to the pixels folder, individually, with proper names
// i.e. facebook.php with a facebook pixel in it
// then, include the usage example below on each page

// usage example
// include($_SERVER['DOCUMENT_ROOT']."/ospk/pixels/_loop.php");
// $pixels = array("livechat");
// displayPixels($pixels); 

?>