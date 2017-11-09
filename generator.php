<?php

if(isset($_REQUEST['content'])){

	$size          = $_REQUEST['size'];
	$content 	   = $_REQUEST['content'];
	$correction    = strtoupper($_REQUEST['correction']);
	$encoding      = $_REQUEST['encoding'];
	

	$rootUrl = "https://chart.googleapis.com/chart?cht=qr&chs=$size&chl=$content&choe=$encoding&chld=$correction";
	
	echo '<div id="results"><div><img src="'.$rootUrl.'"></div><div>The complete URL: ' . $rootUrl . '</div></div>';
}
?>