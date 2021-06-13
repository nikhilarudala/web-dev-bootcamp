<?php
	$email=$_POST['emailid'];

	echo $email;
	$server="localhost:3306";
	$dbname="web-dev";
	$User: "root@localhost";
	$password="";

	$conn=mysqli_connect($server,$dbname,$User,$password)
	if (!$conn) {
		// code...
		echo "server connection failed";
	}else{
		echo "server connection authorised";
		$sflag=1;
	}

	if ($sflag==1) {
		// create sql injection into table...
		$sql="INSERT INTO emailform(emailid) array_values(
		".$email.");

		echo $sql;
	}
?>