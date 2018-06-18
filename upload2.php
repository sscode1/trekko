<?php
	//check whether a user is logged in
	session_start();
	include_once 'dbh_inc.php';

	$id = $_SESSION['username'];
if(isset($_SESSION['username'])){
	if(isset($_POST['submit'])){
		//$_FILES is super global variable
		$file = $_FILES['file'];

		$fileName = $_FILES['file']['name'];	//else $fileName = $file['file']['name'];
		//here name in ['name'] is the index of the assosiative array.
		//even 'type', 'error', 'size' and 'tmp_name'(temporary location) are the indexes of the assosiative array
		$fileType = $_FILES['file']['type'];	//we wont be using this much
		$fileSize = $_FILES['file']['size'];
		$fileError = $_FILES['file']['error'];
		$fileTmpName = $_FILES['file']['tmp_name'];

		//specify the type of file u want to allow users to upload
		$fileExt = explode('.',$fileName);	//this makes the filename into 2 parts, its name and extension
		//here we need to compare the allowed format and current file format
		//here end retrives the last data of the array
		$fileActualExt = strtolower(end($fileExt));	

		$allowed = array('jpg','jpeg','png','pdf');

		if(in_array($fileActualExt, $allowed)){
			if($fileError === 0){
				if($fileSize  < 4000000){		//here 1000000 is in KB
					//gives unique id as per the micro seconds occured since 1970(i guess xD)
					//the uniqueid is in date format 
					$fileNameNew = "profile".$id.".".$fileActualExt;	
					
					$fileDestination = 'uploads/'.$fileNameNew;
					/*echo $fileTmpName;*/
					//now we have to move the file from temporary location to actual location/destination
					move_uploaded_file($fileTmpName, $fileDestination);
					//update the status of the profile
					$sql = "UPDATE images SET status=1,format='$fileActualExt' WHERE username='$id' ";
					mysqli_query($conn,$sql);
					header("Location: profile.php?upload=success");
					

				} else{
					echo "file too big to upload";
				}
			}else{
				echo "theres an error while uploading the file";
			}
		} else{
			echo "u cant upload files of this type";
		}

	}
}
?>