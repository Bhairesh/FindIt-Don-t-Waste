<?php
	include('dbConnection.php');


		$Uname = $_POST['name'];
		$Password = $_POST['password'];
		$Phone = $_POST['phone'];
		$Email = $_POST['email'];
		$Address = $_POST['address'];


	$Insert = "INSERT INTO user ('Name','Password','Phone','Email','Address') values ('$Uname','$Password','$Phone','$Email','$Address')";

	if(!mysql_query($Insert))
	{
		echo "Data is not sufficiant to register..!";
	}
	else 
	{
		echo "You have registered Succesfully..!";
		//header("refresh:2; url=index.html");
	}

?>