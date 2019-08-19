<?php
	
	$conn = mysql_connect('localhost','root','');
	if(!$conn)
	{
		echo "Not Connected";
	}
	if(!mysql_select_db('sampledb'))
	{
		echo "Database not selectted";

	}
	//taking the html form names

	$Name = $_POST['username'];
	$Email = $_POST['email'];

	

	if(!mysql_query($sql))
	{
		echo "Not inserted";
	}
	else 
	{
				echo "Inserted";
				//header("refresh:2; url=index.html");
	}
?>