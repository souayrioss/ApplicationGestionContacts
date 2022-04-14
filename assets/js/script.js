const input = document.getElementsByTagName("input");
const log = document.getElementById("log");
const signUp = document.getElementById("signUp");
const formInput = document.querySelectorAll(".form_input");
const para = document.createElement("p");
const  usernameRegex = /^[a-zA-Z0-9]{6,20}$/
const  emailRegex = /^[a-zA-Z0-9._-]+[@]+[\w]+[.]+(com|ma|org|io|fr|uk)$/
const passwordRegex = /^[0-9a-zA-Z_@!/*$-]{8,}$/;
const nameRegex = /^[a-z]{2,20}$/i;
const phoneRegex = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
const openModelAdd = document.getElementById("openModelAdd");
const modelAdd =document.getElementById("modelAdd");
const closeModelAdd = document.getElementById("closeModelAdd");
const addContact = document.getElementById("addContact");
const addContactForm = document.getElementById("addContactForm");
const inputAddContact = addContactForm.querySelectorAll("input")
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
openModelAdd.onclick = function (){
    modelAdd.classList.remove("hidden");
}
closeModelAdd.onclick = function (event){
    event.preventDefault()
    modelAdd.classList.add("hidden");
}
if(addContact){
    addContact.addEventListener('click' , function(event){
        if(!nameRegex.test(inputAddContact[0].value)){
                event.preventDefault()
                    inputAddContact[0].classList.add("border-red-500");
                    inputAddContact[0].focus();
                    formInput[0].appendChild(para);
                    para.textContent = "The first name should contain only letters.";
                    para.classList += "text-red-500 text-sm";
                    
            }else if(!nameRegex.test(inputAddContact[1].value)){
                    event.preventDefault()
                    inputAddContact[0].classList.remove("border-red-500");
                    inputAddContact[1].classList.add("border-red-500");
                    inputAddContact[1].focus();
                    formInput[1].appendChild(para);
                    para.textContent = "The last name should contain only letters.";
                    para.classList.add("text-red-500");
                }else if(!phoneRegex.test(inputAddContact[2].value)){
                    event.preventDefault()
                    inputAddContact[1].classList.remove("border-red-500");
                    inputAddContact[2].classList.add("border-red-500");
                    inputAddContact[2].focus();
                    formInput[2].appendChild(para);
                    para.textContent = "the phone should be :0623456789 or +212612345678.";
                    para.classList.add("text-red-500");
                    }else if(!emailRegex.test(inputAddContact[3].value)){
                        event.preventDefault()
                        inputAddContact[2].classList.remove("border-red-500");
                        inputAddContact[3].classList.add("border-red-500");
                        inputAddContact[3].focus();
                        formInput[3].appendChild(para);
                        para.textContent = "The email should be : example@domane.com";
                        para.classList.add("text-red-500");
                    }
                    else if(inputAddContact[4].value.trim() === ""){
                        event.preventDefault()
                        inputAddContact[3].classList.remove("border-red-500");
                        inputAddContact[4].classList.add("border-red-500");
                        inputAddContact[4].focus();
                        formInput[4].appendChild(para);
                        para.textContent = "The address should not be empty ";
                        para.classList.add("text-red-500");
                    }
    })
        
    
}