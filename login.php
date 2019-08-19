<?php
	session_start();
	include('dbConnection.php');

	//taking the html form names

	$uname = $_POST['uid'];
	$password = $_POST['password'];

	$admin = "admin";
	$adminpas = "420";


	$Username = "select ID from users";
	$Password = "select Password from users";


	if($uname == $admin AND $password == $adminpas)
	{
			//$_session['username'] = $uname 
			header("refresh:0; url=adminPage.php");

	 } else {
		if ($uname = $Username AND $password = $Password) {
			 ?>   <h1 style="text-align: center;size: 50px"> Welcome User....!!</h1>  <?php
			header("refresh:1; url=index.html");
		}	
		else 
		{		
			?> <h1 style="text-align: center;size: 50px"></h1> Incorrect Username or Password...!! <?php
			?><script type="text/javascript"> document.getElementById('login').style.display"</script><?php
	}
}
?>


