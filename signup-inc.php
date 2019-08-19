<?php

if(isset($_POST['submit'])){

	include('dbConnection.php');

	$uname = mysqli_real_escape_string($conn, $_POST['name']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$phone = mysqli_real_escape_string($conn, $_POST['phone']);
	$address = mysqli_real_escape_string($conn, $_POST['address']);
	
	if(empty($uname) || empty($password) || empty($email) || empty($phone) || empty($address) ){
			echo "Plaese fill the complete form";
		//	header("refresh:7; url=signUp.php");
			exit();
	} else {
			$sql = "Insert into users (Name,Password,Phone,Email,Address) values ('$uname','$password','$phone','$email','$address')";
			mysql_query($sql);
			?>   <h1 style="text-align: center;size: 50px"> Succesfully Registred</h1>  <?php
			header("refresh:3; url=signUp.php");
			exit();
			}

	} else {
			echo "Plaese fill the complete form";
			//header("refresh:3; url=signUp.php");
			exit();
			}
?>