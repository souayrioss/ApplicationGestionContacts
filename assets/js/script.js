const input = document.getElementsByTagName("input");
const log = document.getElementById("log");
const signUp = document.getElementById("signUp");
const formInput = document.querySelectorAll(".form_input");
const para = document.createElement("p");
const  usernameRegex = /^[a-zA-Z0-9]{6,20}/
const passwordRegex = /^[0-9a-zA-Z_@!/*$-]{8,}$/;
if(log){
    log.addEventListener('click' , function(event){
        if(!usernameRegex.test(input[0].value)){
            event.preventDefault()
                input[0].classList.add("border-red-500");
                input[0].focus();
                formInput[0].appendChild(para);
                para.textContent = "the usename should contain only numbers and letters.";
                para.classList.add("text-red-500");
                
        }else if(!passwordRegex.test(input[1].value)){
                event.preventDefault()
                input[1].classList.add("border-red-500");
                input[1].focus();
                formInput[1].appendChild(para);
                para.textContent = "the password should contain numbers, letters and _ @ -.";
                para.classList.add("text-red-500");
        }
    })
    
}
