<?php
	session_start();
	include_once 'dbh_inc.php';
    
	if(isset($_POST['login'])){
		$user = mysqli_escape_string($conn,$_POST['uid']);
		$pass = mysqli_escape_string($conn,$_POST['pwd']);

		$sql = "SELECT * from trekko WHERE user_id='$user'";
		$result = mysqli_query($conn,$sql);
		$result_check = mysqli_num_rows($result);
        
		if(empty($user) || empty($pass)){
			header("Location : login.php?login=emptyfield");
			exit();
		}
		else{
			if(empty($result)){
			    echo "no user";
			    header("Location : login.html?login=no_user_found");
				exit();
			}
			else{
				$row = mysqli_fetch_assoc($result);
					if(password_verify($pass,$row['pwd'])){
						$_SESSION['username'] = $user;
						header("Location:index.php?login=success");
					}
					else{
						header("Location: login.html?login=wrong_password");
					}
				}
			}
	}

	else{
		echo "hey something is wrong";
	}
