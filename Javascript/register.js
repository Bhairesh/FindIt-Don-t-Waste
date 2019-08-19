function register() 
{
    document.getElementById('myModal2').style.display = "block";
}

// When the user clicks on <span> (x), close the modal
function closePopup2() 
{
    document.getElementById('myModal2').style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event)
{
    if (event.target == document.getElementById('myModal2')) {
        document.getElementById('myModal2').style.display = "none";
    }
}