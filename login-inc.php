<?php
session_start();

if(isset($_POST['submit'])){

	include('dbConnection.php');

	$uname = mysqli_real_escape_string($conn, $_POST['name']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

	if(empty($uname) || empty($password)){
		echo "Fill the details";
		header("refresh:3; url=index.html");

	} else {
		$sql = " SELECT * FROM users WHERE Name='$uname' && Password='$password'";

			if(!mysql_query($sql)){
				echo "Incorrect Username or Password";
				header("refresh:3; url=index.html");
			} else {
				$_SESSION['u-uname'] = $row['Name'];
				$_SESSION['u-password'] = $row['Password']; 
					?>   <h1 style="text-align: center;size: 50px"> Succesfully Logged In...!</h1>  <?php
					header("refresh:3; url=index.html");
			}
		exit();
		echo "ffhfhfhjfhjfhjfjhfjhf";
	}
}
?>