// Declaring Variabels
var modal = document.getElementById('m-feature');
var userViewModal = document.getElementById('s-feature');
var userApproveModal = document.getElementById('id03');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    else if(event.target == userViewModal){
        modal.style.display = "none";
    }
    else if(event.target == userApproveModal){
        modal.style.display = "none";
    }
}