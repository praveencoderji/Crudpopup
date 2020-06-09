<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['save'])){
		$id = $_POST['delete_id'];
		
		
		mysqli_query($conn, "DELETE  FROM `user` WHERE id= '$id'") or die(mysqli_error());
		
		header("location: index.php");
	}
?>