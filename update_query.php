<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['update'])){
		$user_id = $_POST['user_id'];
		$name = $_POST['name'];
		$dob = $_POST['dob'];
		$loca = $_POST['loca'];
		$intrest = $_POST['inter'];
		
		mysqli_query($conn, "UPDATE `user` SET `name` = '$name', `dob` = '$dob', `location` = '$loca',`intrest` = '$intrest' WHERE `ID` = '$user_id'") or die(mysqli_error());

		header("location: index.php");
	}
?>