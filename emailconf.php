<?php
	require 'dbh_inc.php';

	$username = $_GET['username'];
	$code = $_GET['code'];

	$sql = mysqli_query("SELECT * FROM trekko WHERE user_id='$username'");
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($result);

	if($code == $row['code']){
		$sql = "UPDATE trekko SET confirm='1' AND code='0' WHERE user_id='$username'";
		mysqli_query($conn,$sql);
		$_SESSION['username'] = $username;
		header("Location: index.php?signup=complete");
	}
	else{
		header("Location: signup.html?code=DoNotMatch");
	}
?>