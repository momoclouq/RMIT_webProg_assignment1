let nameElement = document.getElementById("fullname");
let phoneElement = document.getElementById("phone");
let emailElement = document.getElementById("email");
let messageNameElement = document.getElementById("message");
let formElement = document.querySelector('form');
let checkAllButton = document.querySelector(".checkAll_btn");
let textareaElement = document.getElementById('message');
let statusElement = document.querySelector('.status');


// Phone pattern: /^([0-9]{1}[-|.| ]?){9,11}$/
// email pattern: /^([a-zA-Z0-9]{1}[.]?){2,}([a-zA-Z0-9]{1})@([a-zA-Z0-9]{1}[.]?){1,}[.][a-zA-Z]{2,5}$/

// Add event to check Name Element
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

// Check the name element to satisfied with the requirement
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

// Pattern to check the name
function nameValidator(){
    const namePattern = /^[\D]{3,}$/;
    if(namePattern.test(nameElement.value)){
        return undefined;
    }
    return "The name is invalid";
}

// Add event to check Email Element
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

// Check the email element to satisfied with the requirement
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

// Pattern to check the email
function emailValidator(){
    const emailPattern = /^([a-zA-Z0-9]{1}[.]?){2,}([a-zA-Z0-9]{1})@([a-zA-Z0-9]{1}[.]?){1,}[.][a-zA-Z]{2,5}$/;
    if(emailPattern.test(emailElement.value)){
        return undefined;
    }
    return 'The email is invalid';
}


// Add event to check Phone Element
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

// Check the phone element to satisfied with the requirement
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

// Pattern to check the phone
function phoneValidator(){
    const phonePattern = /^([0-9]{1}[-|.| ]?){9,11}$/;
    if(phonePattern.test(phoneElement.value)){
        return undefined;
    }
    else {
        return 'Phone number is invalid'
    }
    
}

// Add event to check Contact Method element
function validateContactMethod(){
    let radioElements = document.querySelectorAll('input[name="contactMethod"]');
    radioElements.forEach((radio) => {
        radio.addEventListener("change", checkContactMethod);
    })

}

// Check the Contact Method element to satisfied with the requirement
function checkContactMethod(){
    let radioErrorElemet = document.querySelector('.contactMethod-error');
    let radioElements = document.querySelectorAll('input[name="contactMethod"]');
    if(!Array.prototype.slice.call(radioElements).some(x => x.checked)){
        radioErrorElemet.innerHTML = "Please choose at least one option";
        return false;
    } else {
        radioErrorElemet.innerHTML = "";
        return true;
    }}

// Add event to check Contact Dat element
function validateContactDay(){
    let checkboxElements = document.querySelectorAll('input[name="contactDay"]');
    checkboxElements.forEach((checkbox) => {
        checkbox.addEventListener("click", checkContactDay);
    })
    }

// Check the Contact Day element to satisfied with the requirement
function checkContactDay(){
    let checkboxElements = document.querySelectorAll('input[name="contactDay"]');
    let checkboxErrorElemet = document.querySelector('.contactDay-error');
    
    if(!Array.prototype.slice.call(checkboxElements).some(x => x.checked)){
        checkboxErrorElemet.innerHTML = "Please choose at least one day";
        return false;
    } else {
        checkboxErrorElemet.innerHTML = "";
        return true;
    }
    
}



// Check All the option of check box of contact day
function check(checked = true) {
    const allCheckboxElement = document.querySelectorAll('input[name="contactDay"]');
    allCheckboxElement.forEach((checkbox) => {
        checkbox.checked = checked;
    });
}

// Add event to check all button
function checkAll() {
    check();
    checkContactDay();
    // reassign click event handler
    this.onclick = uncheckAll;
}

function uncheckAll() {
    check(false);
    checkContactDay();
    // reassign click event handler
    this.onclick = checkAll;
}

// Add event to check the message element
function validateMessage(){
    if(textareaElement){
        textareaElement.addEventListener('input', checkMessage);
    }
}

// Check the Contact Day element to satisfied with the requirement
function checkMessage(){
    let textareaErrorElement = document.querySelector('.message-error');
    const upperLimit = 500;
    const lowerLimit = 50;
       
    if(textareaElement.value.length < lowerLimit){
            
        textareaErrorElement.innerHTML = "You have to type " + (lowerLimit - textareaElement.value.length) + " more letters";
        textareaErrorElement.style.color = 'red';
        return false;
    } 
    
    if(textareaElement.value.length > upperLimit){
            
        textareaErrorElement.innerHTML = "You have to delete " + (textareaElement.value.length - upperLimit) + " letters";
        textareaErrorElement.style.color = 'red';
        return false;
    }
    
    if(textareaElement.value.length == upperLimit){
        textareaErrorElement.innerHTML = "You have reach the words limit";
        textareaErrorElement.style.color = 'red';
        return true;
    }
    
    if(textareaElement.value.length < upperLimit && textareaElement.value.length >= lowerLimit){
            
        textareaErrorElement.innerHTML = "You can type more " + (upperLimit - textareaElement.value.length) + " letters";
        textareaErrorElement.style.color = 'green';
        return true;
    }
    
    
}

// Assign all behaviour of all element 
function ValidateBehaviour(){
    validateName();
    validatePhone();
    validateEmail();
    validateContactMethod();
    validateContactDay();
    validateMessage();
    checkAllButton.onclick = checkAll;
    checkAllButton.addEventListener('doubleclick', function(e){
        e.preventDefault();
    })
}

// Call the function to add all event listener to all elements
ValidateBehaviour();

// Handle the submit event
formElement.addEventListener('submit', function(event){
    event.preventDefault();
    let isEmailValid = checkEmail();
    let isNameValid = checkName();
    let isPhoneValid = checkPhone();
    let isContactMethodChecked = checkContactMethod();
    let isContactDayChecked = checkContactDay();
    let isMessageValid = checkMessage();
    checkContactDay();
    console.log(isMessageValid);
    if (isEmailValid && isNameValid && isPhoneValid && isContactMethodChecked && isContactDayChecked && isMessageValid){
        statusElement.innerHTML = 'Form send!';
    } else {
        statusElement.innerHTML = '';
    }
})

// Handle the reset event 
formElement.addEventListener('reset', function(event){
    let nameErrorElemet = document.querySelector('.fullname-error');
    let emailErrorElemet = document.querySelector('.email-error');
    let phoneErrorElemet = document.querySelector('.phone-error');
    let radioErrorElemet = document.querySelector('.contactMethod-error');
    let checkboxErrorElemet = document.querySelector('.contactDay-error');
    let textareaErrorElement = document.querySelector('.message-error');

    nameErrorElemet.innerHTML = '';
    emailErrorElemet.innerHTML = '';
    phoneErrorElemet.innerHTML = '';
    radioErrorElemet.innerHTML = '';
    checkboxErrorElemet.innerHTML = '';
    textareaErrorElement.innerHTML = '';
    statusElement.innerHTML = '';

    phoneElement.classList.remove('invalid');
    nameElement.classList.remove('invalid');
    emailElement.classList.remove('invalid');
})










