<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<style type="text/css">
		.signup input{
			width:40%;
			height:40px;
			padding: 0px 5%;
			margin-bottom: 4px;
			border:none;
			line-height: 40px;
			background-color: #fff;

		}

	</style>
</head>
<body style="text-align: center;background-image: url('Images/login.jpg');background-size:1300px 1000px;">
	<br><br><br><br><br><br><br>
	<h2>Sign Up</h2>
	<form class="signup" action="<?php $_PHP_SELF ?>" method="post">
		<input type="text" name="Uid" placeholder="User ID" required>
		<input type="text" name="Name" placeholder="Name" required>
		<input type="text" name="Psword" placeholder="Password" required>
		<input type="text" name="Email" placeholder="Email" required>
		<input type="text" name="Phone" placeholder="Phone" required>
		<input type="text" name="Address" placeholder="Address" required><br><br>
		<button type="submit"  name="submit" style="background-color: #0984e3;border-radius: 5px;padding: 14px 20px;margin: 8px 0;width: 10%;border-radius: 5px;border:none;color: white;">Sign Up	</button><br>

		<!--<a href="inde.html.login">Login</a>-->
	</form>

</body>
</html>
<?php

include('dbConnection.php');

// data insert code starts here.
if(isset($_POST['submit']))
{
			$uid = $_POST['Uid'];
			$password = $_POST['Psword'];
			$name = $_POST['Name'];
			$email = $_POST['Email'];
			$phone = $_POST['Phone'];
			$address = $_POST['Address']; 
	
	$res= "INSERT INTO users (ID,Name,Password,Email,Phone,Address) VALUES ('$uid','$name','$password','$email','$phone','$address')";


	if(mysqli_query($conn,$res))
	{
		?>
		<script>
		alert('Successfull Registered.....!');
        window.location='index.html'
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('Data is not sufficient try again....!');
        window.location='signUp.php'
        </script>
		<?php
	}
}
// data insert code ends here.
?>