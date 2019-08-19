//Register orphanage
// When the user clicks the button, open the modal 
function requestOrphanage() 
{
    document.getElementById('myModal1').style.display = "block";
}

// When the user clicks on <span> (x), close the modal
function closePopup1() 
{
    document.getElementById('myModal1').style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event)
{
    if (event.target == document.getElementById('myModal1')) {
        document.getElementById('myModal1').style.display = "none";
    }
}