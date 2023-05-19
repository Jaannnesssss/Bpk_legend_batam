<?php
	$koneksi = new mysqli("localhost","root","","hitung");

	// Check connection
	if ($koneksi -> connect_errno) {
	  echo "Failed to connect to MySQL: " . $koneksi -> connect_error;
	  exit();
	}
?>