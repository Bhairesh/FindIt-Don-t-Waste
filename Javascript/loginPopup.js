	// Get the modal
//var modal = document.getElementById('myModal');

// Get the <span> element that closes the modal
//var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
function display() 
{
    document.getElementById('myModal').style.display = "block";
}

// When the user clicks on <span> (x), close the modal
function closePopup() 
{
    document.getElementById('myModal').style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event)
{
    if (event.target == document.getElementById('myModal')) {
        document.getElementById('myModal').style.display = "none";
    }
}


//sign up

function display2()
{
	var name = window.prompt("Username:");
	var password = window.prompt("password:");
	var email = window.prompt("Email:");
	var phone = window.prompt("Phone:");
	var address = window.prompt("Address:");

	if((name) or (password) or (email) or (address) != null)
	{
		if(!isNaN(phone)){
			<?php
				$sql = "INSERT INTO users (Name,Password,Email,Phone,Address) Values ('name','password','$email','phone','address')";
			?>
		}
	}
}