<?php

$conn = mysqli_connect('localhost','root','','finditdb');

if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}
else{
	$_PHP_SELF ;
}

$sql = 'SELECT * FROM orphanageslist';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/FindIt-Don't Waste/Docs/bootstrap-3.3.7-dist/css/bootstrap.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="Javascript/script.js"></script>
<script type="text/javascript" src="javascript/accordin.js"></script>
<script type="text/javascript" src="Javascript/requestOrphanage.js"></script>

<link rel="stylesheet" href="CSS/loginPopup.css">
<script type="text/javascript" src="Javascript/loginPopup.js"></script>

<link rel="stylesheet" href="CSS/style.css">
<link rel="stylesheet" href="CSS/w3(3).css">
<link rel="stylesheet" href="CSS/w3(4).css">

<title>FindIt-Don't Waste</title>

<style type="text/css">
	#list:hover{
   		background-color: #fefefe;
	}

	#list div{
    border: 1px solid;padding: 10px;box-shadow: 5px 10px 18px #888888;
	}
	.request-form input{
			width:60%;
			height:40px;
			padding: 0px 5%;
			line-height: 40px;
			background-color: #f3f3f3;
	}
</style>
<head>
<!--
	<script type="text/javascript">

		$(document).ready(function() {
			$("#orphanageDetails").hide();
  			$("#list").click(function() {
    			$("#orphanages").hide();
    			$("#orphanageDetails").show();
  			});
		});

		function displayDelivery(){
			window.location="delivery.php";
		}

		function displayContact(){
			
		}

	</script>
-->
</head>

<!-- Body Starts Here -->
<body id="body"  style="background-position: center;background-repeat: no-repeat;background-size: cover;background-image: url('Images/mosaic-2721425.jpg');">

    <!-- Navbar (sit on top) -->
<div class="" style="">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;position: relative;">
    <a href="index.html.#home" class="w3-bar-item w3-button">FindIt</a>
    <div class="w3-right">
      <a href="index.html.#donate" class="w3-bar-item w3-button">Donate</a>
      <a href="donateSomething.html" class="w3-bar-item w3-button">Orphanages</a>
     <!-- <a href="#about" class="w3-bar-item w3-button">About</a>-->
      <a href="index.html.#contact" class="w3-bar-item w3-button">Contact</a>

     <!-- <a href="#" class=""><span style=""><img src="Images/search.png" style="height: 30px;width: 43px;margin:0px 0px 1px 10px;" onclick=""></span></a> <input type="text" name="search" placeholder="Search orphanages.." style="border: none;">-->

      <span style=""><img src="Images/login-face.png" style="height: 30px;width: 30px;margin:4px 1px 1px 10px;" onclick="document.getElementById('login').style.display='block'"></span>
    </div>
  </div>
</div>
	<button style="margin:10px 25px 0px 0px;float: right;border-radius: 4px;" onclick="requestOrphanage()">Request to Add Orphanage</button>

<div>
		<!-- Nearest Orphanages Block -->
			
		<div id="orphanages" style="margin:5% 5% 5% 5%;text-align: center;top:">

				<h2>Orphanages</h2><br><br>

		  <div style="width:100%;">


<!--.......................Displaying all the Orphanages in the database..................................-->

		  	<?php
		
		while ($row = mysqli_fetch_array($query))
		{
			?><div id="list" style="background-color: #badc58;border-style: groove;padding: 10px;box-shadow: 5px 8px 18px #888888;width: 70%;max-height: 300px;float: left;margin:5px 5px 5px 15%;border-radius: 10px;"><?php
			echo '
					<h3>Name: &nbsp '.$row['Name'].'</h3>
					<h3>Email: &nbsp '.$row['Email'].'</h3>
					<h3>Website: &nbsp '.$row['Website'].'</h3>
					<h3>Address: &nbsp '.$row['Address'].'</h3>
					<h3>Contact: &nbsp '.$row['Phone'].'</h3>
				 ';	
			?>
		<!--	<i class="fa fa-phone fa-3x" aria-hidden="true" onclick="displayContact()"></i> &nbsp &nbsp &nbsp -->
			<a href="delivery.php" target="blank"><i class="fa fa-truck fa-3x" aria-hidden="true" onclick=""></i></a>
			</div>
			<?php	 
		}
		?> 
		<!--	<div class="" style="background-color: ;border-style: groove;width: 70%;float: left;margin:5px 5px 5px 15%;border-radius: 10px;">

				<div style="height:250px;width:150px;margin:0px 0px 0px 0px; text-align:center;">
					

				</div>
				<div style="max-height: 200px;">asdfghjkl</div>			

			</div>
		
			<div class="" style="background-color: ;border-style: groove;width: 70%;float: left;margin:5px 5px 5px 15%;border-radius: 10px;">

				<div style="height:250px;width:150px;margin:0px 0px 0px 0px;text-align:center;"></div>
				<div style="max-height: 200px;">sdfghjkl</div>

			</div>
			
			<div class="" style="background-color: ;border-style: groove;width: 70%;float: left;margin:5px 5px 5px 15%;border-radius: 10px;">

				<div style="height:250px;width:150px;text-align:center;margin:0px 0px 0px 0px;"></div>
				<div style="max-height: 200px;">sdfghjkl</div>	

			</div>-->
		  </div>

		<!--<button style="float:left;margin:10px 0px 0px 0px;">Previuos..</button>	 -->
			
		<!--	<button style="float: right;margin:10px 0px 0px 0px;" id="Next">Next..</button>-->


				<!--                       Request to add orphanage                     -->
							<div id="myModal1" class="modal">	
			 			<!-- Modal content orphanage button -->
 								<div class="modal-content">
    								<span class="close" onclick="closePopup1()">&times;</span>	
    		   						
								<form action="requestOrphanage.php" method="POST" class="request-form" style="background-color: #fff;background-image: url('Images/login.jpg');background-position: center;background-repeat: no-repeat;background-size: cover;"></br>
									<p>Request to Add your Orphanage and get served</p><br><br>
        							<input type="text" name="Name" placeholder="Orphanage Name" required style="border: none;"></br></br>
        							<input type="text" name="Email" placeholder="Email" required style="border: none;"></br></br>
        							<input type="text" name="Website" placeholder="Website" required style="border: none;"></br></br>
        							<input type="number" name="Phone" placeholder="Phone number" required style="border: none;"></br></br>
        							<input type="text" name="Address" placeholder="Address..." required style="border: none;"></br></br>
        							<input type="submit" name="submit" value="Send Request" style="text-align: center;width: auto;border-radius: 4px;"></br></br>	
    							</form>
		   						</div>
							</div>
		</div> 
<!--
		<div id="orphanageDetails">	
			<div>
			<!--	<img src="Images/leaf.png" alt="Image" style="display: block; margin-left: auto; margin-right: auto;margin:max-width: 70%;max-height: 500px;margin-top: 40px; ">
			</div>
			<br><br><br><br><br><br>
			<div>
				<div style="width:50%;text-align:center;float: left;"> 
					<button class="callbtn" onclick="displayContact()" style="">Call</button>
				</div>

				<div style="width:50%;text-align:center;float: right;">
					<button class="deliverbtn" onclick="displayDelivery()" style="">Deliver</button>
				</div>
			</div>
		</div>

</div>

<div>
	<div style="width:29%;float: left;border-color: black;max-height: 40%;margin-bottom: 5px;">
		
	</div>
	<div style="width:69%;float: right;border-color: black;max-height: 40%;margin-bottom: 5px;">
		
	</div>

</div>
-->

</body>
</html>