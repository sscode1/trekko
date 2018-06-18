<?php
	include_once 'dbh_inc.php';
	session_start();
	
	if(isset($_SESSION['username'])){
		if(isset($_POST['rev']))
		{
			$user = $_SESSION['username'];
			//this is for rating
			$rate = mysqli_escape_string($conn,$_POST['star']);
			$review = mysqli_escape_string($conn,$_POST['review']);
			//$place = mysqli_escape_string($conn,$_POST['place']);

			//check if the fields are empty
			if(empty($review)){
				header("Location: review.php?review=empty_field");
				exit();
			}
			else{
				//now theres nothing left to check
				$sql = "INSERT INTO reviews (username,rating,review) VALUES ('$user','$rate','$review')";
				$result = mysqli_query($conn,$sql);
				//echo $user." ".$rate." ".$review;
				header("Location: index.php?review=successfull");
				exit();
			}
		}
	}
	else{
		header("Location: login.html?login=please_login");
	}
?>
