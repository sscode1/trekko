<?php
	session_start();
	include_once 'dbh_inc.php';
	//include_once 'header.php';
	$sql = "SELECT * FROM reviews ";
	$result = mysqli_query($conn,$sql);

?>
<html>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
	#p1{
		margin-left:20px;
	}

	#p2{
		margin-left:20px;
	}

	#p3{
		margin-left:7%;
	}
	.col{
		border:solid 2px green;
		width:40%;
	}

	#col1{
		border:solid 2px red;
		height:10px;
	}
	#col1{
		border:solid 2px blue;
		height:10px;
	}
</style>
<body>
<!-- here the code for header file -->
<div class="header">
	<h2> HEADER </h2>
</div>
<h1>REVIEWS</h1><br>
<div>
		<?php
		while($row = mysqli_fetch_row($result)){
			?>
			<div class="sm-12">
				<div class="row">
					<div class="col-lg-6">
						<p id="p1"><?php echo $row[1]; ?></p>
					</div>
					<div class="col-lg-6">
						<p id="p2">Rating:<?php echo $row[2]; ?></p>
					</div>
				</div>
				<div class="row">
					<p id="p3"><?php echo $row[3]; ?></p>
					<br>
				</div>
			</div>
		<?php
			}
			?>
</div>

</body>
</html>