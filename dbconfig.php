<?php
	$conn = new mysqli("localhost","root","","midterms");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>