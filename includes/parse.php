<?php
function refresher($feed_url) {
	$content = file_get_contents($feed_url);
	echo $content;
}
$urlString = $_POST['str'];
if ($urlString) {
	refresher($urlString);
}
?>
