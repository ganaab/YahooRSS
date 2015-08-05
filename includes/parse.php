<?php
function refresher($feed_url) {
	//getFeed($feed_url);
	$content = file_get_contents($feed_url); //Get the link via the normal way.
	echo $content; //Send all the raw data back to the ajax function.
}
$urlString = $_POST['str']; //Grab the str sent from ajax through POST.
if ($urlString) { //Check if str exists
	refresher($urlString);
}
?>
