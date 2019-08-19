	<?php
	
	include('dbConnection.php');	
	//taking the html form names

	$Name = $_POST['Name'];
	$Email = $_POST['Email'];
	$Phone = $_POST['phone'];
	$Address = $_POST['Address'];
	

	$sql = "INSERT INTO orphanagesList (Name,Email,Phone,Address) Values ('$Name','$Email','$Phone','$Address')";

	if((is_numeric($Phone)))
	{
		if(mysql_query($sql))
					{
						echo "Inserted";
						header("refresh:0");
					}		
	}
	else 
	{
				echo "Not Inserted";
				
	}
?>