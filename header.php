<?php
	include_once 'dbh_inc.php';
?>

<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>User Dropdown Header</title>

	<link rel="stylesheet" href="assets/demo.css">
	<link rel="stylesheet" href="assets/header-user-dropdown.css">
	<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>


</head>

<body>

<header class="header-user-dropdown">

	<div class="header-limiter">
		<h1><a href="#"><span>TREKKO</span></a></h1>

		<nav>
			<a href="#">Upcoming Events</a>
		<!--	<a href="#">Contact</a>
			<a href="#">About Us</a>-->
			<a href="#">Signin Options</a>
		</nav>


		<div class="header-user-menu">
			<?php 
				if(isset($SESSION['username'])){
					$id = $SESSION['username'];
					$sql = "SELECT * FROM images WHERE username='$id'";
					$result = mysqli_query($conn,$sql);
					$result_check = mysqli_num_rows($result);
					$row = mysqli_fetch_assoc($result);
					$format = $row['format'];
					
					if($result_check > 0)
            		{
            			//now check if theres a profile picture updated
            			if($row['status'] == 0){
            				//echo "status is 0.. displaying the default image"."<br>";
            				//no profile pic available
            				echo "<img src='uploads/default_image.jpg'>";
            			}
            			else{		
            				echo "<img src='uploads/profile".$id.".".$format."' alt='User Image'>";
            			}
            		}
				}
				else{
					echo "<img src='uploads/default_image.jpg' alt='User Image'>";	
				}
			?>

			<ul>
				<li><a href="profile.php">Profile</a></li>
				<li><a href="logout.php" class="highlight">Logout</a></li>
			</ul>
		</div>

	</div>

</header>

<!-- The content of your page would go here. -->




</body>

</html>
