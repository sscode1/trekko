<?php
    session_start();
    include_once 'dbh_inc.php';
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	.parent{
		width:1810px;
		height: 830px;
	}
	.dp_container{
		width:18%;
		height:35%;
		margin-left:28%;
		margin-top: 4%;
		border-radius: 1000px; 
	}
	</style>
</head>
</html>
<?php
	$id = $_SESSION['username'];	//this stores the user id

	if(isset($_SESSION['username'])){
		$sql = "SELECT * FROM images WHERE username='$id'";
		$result = mysqli_query($conn,$sql);
		$result_check = mysqli_num_rows($result);
		$row = mysqli_fetch_assoc($result);

		if($result_check > 0)
		{
			//now check if theres a profile picture updated
			if($row['status'] == 0){
				//echo "status is 0.. displaying the default image"."<br>";
				//no profile pic available
				echo "<img src='images/default_image.jpg'>";
				//give an option to upload their pro pic
				echo 	"<form action='upload2.php' method='POST' enctype='multipart/form-data'>
						<input type='file' name='file'>
						<button type='submit' name='submit'>UPLOAD</button>
						</form>";

			}
			else{		
				$format = $row['format'];
				echo "<div class='parent'>";
				echo "<img src='images/profile".$id.".".$format."' class='dp_container'>";
				echo 	"<form action='upload2.php' method='POST' enctype='multipart/form-data'>
						<input type='file' name='file'>
						<button type='submit' name='submit'>UPLOAD</button>
						</form>";
				echo "<a href='review.php'> review trekko</a> ";
				echo "</div>";

			}
		}
		//make sure that u add the user to the images database as well
		else{
			echo "no user";
		}
	}
	else{
		echo "<h1> Please Log in </h1>
		<a href='login.php'> LOG-IN</a>";
	}
?>