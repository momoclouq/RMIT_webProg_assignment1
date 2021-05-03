let nameElement = document.getElementById("fullname");
let phoneElement = document.getElementById("phone");
let emailElement = document.getElementById("email");
let messageNameElement = document.getElementById("message");
let submitElement = document.querySelector('.submitBtn');


// Phone pattern: /^([0-9]{1}[-|.| ]?){9,11}$/
// email pattern: /^([a-zA-Z0-9]{1}[.]?){2,}([a-zA-Z0-9]{1})@([a-zA-Z0-9]{1}[.]?){1,}[.][a-zA-Z]{2,5}$/

function Validate(){
    if(nameElement){
        nameElement.onblur = function(){
            let nameErrorMessage = nameValidator();
            let nameErrorElemet = document.querySelector('.fullname-error');
            if(nameErrorMessage){
                nameErrorElemet.innerHTML = nameErrorMessage;
                nameElement.classList.add('invalid');
            } 
            else {
                nameErrorElemet.innerHTML = '';
                nameElement.classList.remove('invalid');
            }
            
        } 

        nameElement.oninput = function(){
            let nameErrorMessage = nameValidator();
            let nameErrorElemet = document.querySelector('.fullname-error');
            nameErrorElemet.innerHTML = '';
            nameElement.classList.remove('invalid');
            if(nameErrorMessage){
                nameErrorElemet.innerHTML = nameErrorMessage;
                nameElement.classList.add('invalid');
            }
        } 
    }

    if(phoneElement){
        phoneElement.onblur = function(){
            let phoneErrorMessage = phoneValidator();
            let phoneErrorElemet = document.querySelector('.phone-error');
            if(phoneErrorMessage){
                phoneErrorMessage.innerHTML = nameErrorMessage;
                phoneElement.classList.add('invalid');
            } 
            else {
                phoneErrorElemet.innerHTML = '';
                phoneElement.classList.remove('invalid');
            }
            
        } 

        phoneElement.oninput = function(){
            let phoneErrorMessage = phoneValidator();
            let phoneErrorElemet = document.querySelector('.phone-error');
            phoneErrorElemet.innerHTML = '';
            phoneElement.classList.remove('invalid');
            if(phoneErrorMessage){
                phoneErrorElemet.innerHTML = phoneErrorMessage;
                phoneElement.classList.add('invalid');
            }
        } 
    }


    if(emailElement){
        emailElement.onblur = function(){
            let emailErrorMessage = emailValidator();
            let emailErrorElemet = document.querySelector('.email-error');
            if(emailErrorMessage){
                emailErrorElemet.innerHTML = emailErrorMessage;
                emailElement.classList.add('invalid');
            } else {
                emailErrorElemet.innerHTML = '';
                emailElement.classList.remove('invalid');
            }
        } 

        emailElement.oninput = function(){
            let emailErrorMessage = emailValidator();
            let emailErrorElemet = document.querySelector('.email-error');
            emailErrorElemet.innerHTML = '';
            emailElement.classList.remove('invalid');
            if(emailErrorMessage){
                emailErrorElemet.innerHTML = emailErrorMessage;
                emailElement.classList.add('invalid');
            }
        } 
    }


}

function nameValidator(){
    const namePattern = /^[\D]{3,}$/;
    if(namePattern.test(nameElement.value)){
        return undefined;
    }
    return "The name is invalid";
}

function phoneValidator(){
    const phonePattern = /^([0-9]{1}[-|.| ]?){9,11}$/;
    if(phonePattern.test(phoneElement.value)){
        return undefined;
    }
    else {
        return 'Phone number is invalid'
    }
    
}

function emailValidator(){
    const emailPattern = /^([a-zA-Z0-9]{1}[.]?){2,}([a-zA-Z0-9]{1})@([a-zA-Z0-9]{1}[.]?){1,}[.][a-zA-Z]{2,5}$/;
    if(emailPattern.test(emailElement.value)){
        return undefined;
    }
    return 'The email is invalid';
    }
    
    

Validate();

