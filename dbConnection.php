	<?php
	
	$conn = mysqli_connect('localhost','root','','finditdb');

	if(mysqli_connect_errno()){
		die('Cannot connect to database' . mysqli_connect_errno());
	}
?>