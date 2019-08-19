function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") 
    	{
        	x.className += "responsive";
    	} 
    else 
    	{
        	x.className = "topnav";
    	}
}

// Accordion 
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) 
{
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
 
// Display Nearest Orphanages onclick of Food and Cloths

function displayOrphanages(){

   // display = document.getElementById('orphanages').style;
  //  notDisplay = document.getElementById('body').style;
   
    //   document.getElementById('body').style.visibility.hidden;
     //  document.getElementById('orphanages').style.visibility.visibile;

    //   alert("Hello its working...!")
        
}


// Get the login modal
var modal = document.getElementById('login');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
