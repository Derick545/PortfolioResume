const passwordField = document.querySelector(".my-form input[type='password']"),
toggleBtn = document.querySelector(".my-form .single-input i");

toggleBtn.onclick = ()=>{
    if(passwordField.type == "password"){
        passwordField.type = "text";
        toggleBtn.classList.add("active");
    } 
    else{
        passwordField.type = "password";
        toggleBtn.classList.remove("active");
    }
}