<?php
	//echo '<pre>'; print_r($_SERVER); echo '</pre>';
	var_dump($_SERVER['HTTP_HOST']);
	var_dump($_SERVER['SERVER_ADDR']);
	$redirect_link = '';
	$redirect_link = '<a href="http://'.$_SERVER['SERVER_ADDR'].':7001">View Stream</a>';
	$redirect_link_2 = '<a href="http://'.$_SERVER['SERVER_ADDR'].'">View Stream 2</a>';
	if(isset($_SESSION['username'])) {

	}
?>
