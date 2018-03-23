<?php
	//declare variables for connecting with data
	$host = "localhost";
	$user = "root";
	$password = "";
	$datbase = "bel";

	//conecting with database
	$con = mysqli_connect($host, $user, $password);
	//select database
	mysqli_select_db($con, $datbase);
?>