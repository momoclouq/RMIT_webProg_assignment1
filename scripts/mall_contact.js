let nameElement = document.getElementById("fullname");
let phoneElement = document.getElementById("phone");
let emailElement = document.getElementById("email");
let messageNameElement = document.getElementById("message");
let formElement = document.querySelector('form');
let checkAllElement = document.getElementById('checkAll');


// Phone pattern: /^([0-9]{1}[-|.| ]?){9,11}$/
// email pattern: /^([a-zA-Z0-9]{1}[.]?){2,}([a-zA-Z0-9]{1})@([a-zA-Z0-9]{1}[.]?){1,}[.][a-zA-Z]{2,5}$/

function ValidateBehaviour(){
    validateName();
    validatePhone();
    validateEmail();
}

function checkPhone(){
    let phoneErrorMessage = phoneValidator();
    let phoneErrorElemet = document.querySelector('.phone-error');
    if(phoneErrorMessage){
        phoneErrorElemet.innerHTML = phoneErrorMessage;
        phoneElement.classList.add('invalid');
        return false;
    } 
    else {
        phoneErrorElemet.innerHTML = '';
        phoneElement.classList.remove('invalid');
        return true;
    }
}

function checkEmail(){
    let emailErrorMessage = emailValidator();
    let emailErrorElemet = document.querySelector('.email-error');
    if(emailErrorMessage){
        emailErrorElemet.innerHTML = emailErrorMessage;
        emailElement.classList.add('invalid');
        return false;
    } else {
        emailErrorElemet.innerHTML = '';
        emailElement.classList.remove('invalid');
        return true;
    }

}

function checkName(){
    let nameErrorMessage = nameValidator();
    let nameErrorElemet = document.querySelector('.fullname-error');
    if(nameErrorMessage){
        nameErrorElemet.innerHTML = nameErrorMessage;
        nameElement.classList.add('invalid');
        return false;
    } else {
        nameErrorElemet.innerHTML = '';
        nameElement.classList.remove('invalid');
        return true;
    }
}

function validateName(){
    if(nameElement){
        nameElement.onblur = checkName;

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
}

function validatePhone(){
    if(phoneElement){
        phoneElement.onblur = checkPhone;

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
}

function validateEmail(){
    if(emailElement){
        emailElement.onblur = checkEmail;

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


function check(checked = true) {
    const alala = document.querySelectorAll('input[name="contactDay"]');
    alala.forEach((cb) => {
        cb.checked = checked;
    });
}


    
ValidateBehaviour();
formElement.addEventListener('submit', function(event){
    event.preventDefault();
    let isEmailValid = checkEmail();
    let isNameValid = checkName();
    let isPhoneValid = checkPhone();
    if (isEmailValid && isNameValid && isPhoneValid){
        alert('Pass');
    } else {
        console.log('Fail');
    }
})

checkAllElement.onclick = checkAll;

function checkAll(){
    check();
    this.onclick = uncheckAll;
}

function uncheckAll() {
    check(false);
    // reassign click event handler
    this.onclick = checkAll;
}






