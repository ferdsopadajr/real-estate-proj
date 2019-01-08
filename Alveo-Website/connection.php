<?php
	// create connection
	$connection = mysqli_connect('localhost', 'root', 'password', 'alveoprop_db');

	// check connection
	if(!$connection){
		die("Connection Failed: ". mysqli_connect_error());
	}
?>