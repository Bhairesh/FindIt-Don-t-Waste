
<?php
	
	$conn = mysqli_connect('localhost','root','','finditdb');


// data insert code starts here.
if(isset($_POST['submit']))
{
	$name = $_POST['Name'];
	$email = $_POST['Email'];
	$website = $_POST['Website'];
	$phone = $_POST['Phone'];
	$address = $_POST['Address'];
	
	$res= "INSERT INTO request_orphanage (Name,Email,Website,Phone,Address) VALUES ('$name','$email','$website','$phone','$address')";

	if(mysqli_query($conn,$res))
	{
		?>
		<script>
		alert('Request sent successfullyy...');
        window.location='donateSomething.php'
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('Error requesting ...');
        window.location='donateSomething.php'
        </script>
		<?php
	}
}
// data insert code ends here.




?>