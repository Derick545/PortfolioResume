//Declaring Variables
const form = document.querySelector(".myUpload form"),
continueBtn = form.querySelector(".Button"),
errorText = form.querySelector(".error-text");

//when form is submitted prevent it from changing
form.onsubmit = (e)=>{
    e.preventDefault(); //Preventing form submitting
}
continueBtn.onclick = ()=>{
    //Ajax
    let xhr = new XMLHttpRequest(); //creating XML object
    xhr.open("POST", "upload-content.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
            let data = xhr.response;
            if(data == "success"){
                location.href = "Upload.php"
            } 
            else{
                errorText.textContent = data;
                errorText.style.display = "block";
                
            }
            }
           
        }
    }
    //Send form data through ajax to php
    let formData = new FormData(form); //creating new formData
    xhr.send(formData); //Sendind form data to php
}