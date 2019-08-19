
<?php  
    			include('dbConnection.php');				

				// data insert code starts here.
if(isset($_POST['submit']))
{
			
			$name = $_POST['Name'];
			$email = $_POST['Email'];
			$phone = $_POST['Phone'];
			$msg = $_POST['Message']; 
	
	$res= "INSERT INTO contactus (Name,Email,Phone,Message) VALUES ('$name','$email','$phone','$msg')";


	if(mysqli_query($conn,$res))
	{
		?>
		<script>
		alert('Thank you...We have recieved your message we will contact you ASAP.');
        window.location='index.html'
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('Sorry....Please try again....!');
        window.location='index.html'
        </script>
		<?php
	}
}
// data insert code ends here.
  ?>
