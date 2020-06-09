<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['save'])){
		$name = $_POST['name'];
		$dob = $_POST['dob'];
		$location = $_POST['loca'];
		$intrest = $_POST['inter'];
		
		mysqli_query($conn, "INSERT INTO `user` ( `name`, `dob`, `location`, `intrest`)VALUES( '$name', '$dob', '$location', '$intrest')") or die(mysqli_error($conn));
		
		header("location: index.php");
	}
?>