function toggleMobileMenu(menu){
	menu.classList.toggle('open');
}

// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

//get second modal
var modalTwo = document.getElementById('id02');

window.onclick = function(event){
	if(event.target == modalTwo)
	{
		modalTwo.style.display = "none";
	}
}

//get third modal
var modalThree = document.getElementById('id03');

window.onclick = function(event){
	if(event.target == modalThree)
	{
		modalThree.style.display ="none"
	}
}
