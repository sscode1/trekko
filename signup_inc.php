<?php
session_start();
// for signing in
if(isset($_POST['signup']))
{			//isset -> checks if something is existing inside the file
	include_once 'dbh_inc.php';

	$phone = mysqli_real_escape_string($conn, $_POST['phone']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	//to check if any field is empty
	if(empty($phone) || empty($email) || empty($uid) || empty($pwd)) {
		header("Location: signup.html?signup=emptyfield");
		exit();
	}
	else
	{
		//check if input characters are valid
		if(!preg_match("/^[a-zA-Z]*$/",$uid))
		{
		//perg_match : goes in and checks if have some certain characters inside the string
			header("Location: signup.html?signup=invalid");
			exit();
		}
		else
		{
			//check for valid email
			if(!filter_var($email, FILTER_VALIDATE_EMAIL))
			{
			//filter_var :checks a certain string using a specific method inside the php lang
				header("Location: signup.html?signup=invalid_email");
				exit();
			}
			else
			{
				$sql ="SELECT * FROM trekko WHERE user_id='$uid'";
				$result = mysqli_query($conn,$sql);
				$result_check = mysqli_num_rows ($result);

				if($result_check >0)
				{
					header("Location: signup.html?signup=invalid_userid");
					exit();
				}
				else
				{
					//hashing or encrypting the password
					$hashpwd = password_hash($pwd,PASSWORD_DEFAULT);
					//insert the user into the database

					$sql = "INSERT INTO trekko (user_id,email,phone,pwd) VALUES ('$uid','$email','$phone','$hashpwd')";
					mysqli_query($conn,$sql);
					//now we retrirve this user from the database to get his ID
					$sql = "SELECT * FROM trekko WHERE user_id='$uid'";
					$result = mysqli_query($conn,$sql);
					$row = mysqli_fetch_assoc($result);
					$id = $row['id'];
					//now we try to insert the image
					$file = $_FILES['file'];
					if($_FILES['file']['error'] != 4)		//4 indicates that no file was selected.
					{
						$fileName = $_FILES['file']['name'];
						$fileSize = $_FILES['file']['size'];
						$fileType = $_FILES['file']['type'];
						$fileError = $_FILES['file']['error'];
						$fileTmpName = $_FILES['file']['tmp_name'];

						$fileExt = explode('.',$fileName);
						$fileActualExt = strtolower(end($fileExt));
						$allowed = array('jpg','jpeg','png');

						if($fileError != 0){
							echo $fileError."<br>";
							echo "there's an error while uploading the image"."<br>";
						}
						else{
							if(in_array($fileActualExt, $allowed)){
								if($fileSize < 10000000){ //approx 10mb
									$fileNewName = "profile".$id.".".$fileActualExt;
									$fileDestination = "images/".$fileNewName;
									move_uploaded_file($fileTmpName, $fileDestination);
									$sql = "INSERT INTO images (username,status,format) values ('$uid',1,'$fileActualExt')";	//1 means uploaded
									mysqli_query($conn,$sql);
								}
							}else{
								echo "files of this type are notallowed";
							}
						}
					}
					else{
						$def_ext = '.jpeg';
						$sql = "INSERT INTO images (username,status,format) VALUES ('$uid',0,'$def_ext')";
						mysqli_query($conn,$sql);
					}
					$_SESSION['username'] = $uid;
					header("Location: index.php?signup=success");
				}
			}
		}
	}
}

else {
	header("Location: signup.html");
	exit();		//closes and stops the script from running the code after the else statement
}
?>