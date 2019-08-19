	<?php
	
	include('dbConnection.php');	
	//taking the html form names

	$Name = $_POST['Name'];
	$Password = $_POST['Password'];
	$Email = $_POST['Email'];
	$Phone = $_POST['phone'];
	$Address = $_POST['Address'];
	

	$sql = "INSERT INTO users (Name,Password,Email,Phone,Address) Values ('$Name','$Password','$Email','$Phone','$Address')";

	if((is_numeric($Phone)))
	{
		if(mysql_query($sql))
					{	
						echo "Inserted";
						header("refresh:0; url=displayUsers.php");

					}	
	}
	else 
	{
				echo "Not Inserted";
				//header("refresh:2; url=");
	}
?>