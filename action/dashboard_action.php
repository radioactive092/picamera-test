<?php
	//echo '<pre>'; print_r($_SERVER); echo '</pre>';
	var_dump($_SERVER['HTTP_HOST']);
	var_dump($_SERVER['SERVER_ADDR']);
	$redirect_link = '';
	$redirect_link = $_SERVER['SERVER_ADDR'].':7001';
	if(isset($_SESSION['username'])) {

	}
?>
