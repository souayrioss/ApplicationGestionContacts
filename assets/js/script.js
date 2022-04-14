const input = document.getElementsByTagName("input");
const log = document.getElementById("log");
const signUp = document.getElementById("signUp");
const formInput = document.querySelectorAll(".form_input");
const para = document.createElement("p");
const  usernameRegex = /^[a-zA-Z0-9]{6,20}$/
const  emailRegex = /^[a-zA-Z0-9._-]+[@]+[\w]+[.]+(com|ma|org|io|fr|uk)$/
const passwordRegex = /^[0-9a-zA-Z_@!/*$-]{8,}$/;
const openModelAdd = document.getElementById("openModelAdd");
const modelAdd =document.getElementById("modelAdd");
const closeModelAdd = document.getElementById("closeModelAdd");
console.log(openModelAdd)
console.log(closeModelAdd)
console.log(modelAdd)
openModelAdd.onclick = function (){
    modelAdd.classList.remove("hidden");
}
closeModelAdd.onclick = function (event){
    event.preventDefault()
    modelAdd.classList.add("hidden");
}
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
    if(signUp){
        signUp.addEventListener('click' , function(event){
            if(!usernameRegex.test(input[0].value)){
                event.preventDefault()
                    input[0].classList.add("border-red-500");
                    input[0].focus();
                    formInput[0].appendChild(para);
                    para.textContent = "The usename should contain only numbers and letters.";
                    para.classList.add("text-red-500");
                    
            }else if(!emailRegex.test(input[1].value)){
                    event.preventDefault()
                    input[1].classList.add("border-red-500");
                    input[1].focus();
                    formInput[1].appendChild(para);
                    para.textContent = "The email should be : example@domane.com";
                    para.classList.add("text-red-500");

                }else if(!passwordRegex.test(input[2].value)){
                    event.preventDefault()
                    input[2].classList.add("border-red-500");
                    input[2].focus();
                    formInput[2].appendChild(para);
                    para.textContent = "the password should contain numbers, letters and _ @ -.";
                    para.classList.add("text-red-500");
                    }else if(input[2].value.trim() !== input[3].value.trim()){
                        event.preventDefault()
                        input[3].classList.add("border-red-500");
                        input[3].focus();
                        formInput[3].appendChild(para);
                        para.textContent = "password not verified";
                        para.classList.add("text-red-500");
                        }
        })
    
}
