<?php
	$mysqli = new mysqli("localhost","root","","bpk_bd");

	// Check connection
	if ($mysqli -> connect_errno) {
	  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
	  exit();
	}
?>