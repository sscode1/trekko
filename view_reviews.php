<?php
	session_start();
	include_once 'header.html';
	include_once 'dbh_inc.php';

	$sql = "SELECT * FROM reviews ";
	$result = mysqli_query($conn,$sql);
	$result_check = mysqli_num_rows($result);
?>
<html>
<body>
<h1>REVIEWS</h1><br>
<div>
	<table border="2" style="border-color:white">
		<tr>
			<th> USER </th>
			<th> RATING </th>
			<th> REVIEW </th>
		</tr>
		<?php
		while($row = mysqli_fetch_row($result)){
			?>
		<tr>	
			<td><?php echo $row[1]."<br>"; ?></td>
			<td><?php echo $row[2]."<br>"; ?></td>
			<td><?php echo $row[3]."<br>"; ?></td> 	
		</tr>
		<?php
			}
			?>
	</table>
</div>
</body>
</html>