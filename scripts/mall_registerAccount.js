function handleClick(evt){
    let formForOwner = document.querySelector(".forOwner");

    if (evt.value == "storeOwner") {
        formForOwner.classList.remove("hidden");
    }
    else {
        formForOwner.classList.add("hidden");
    }
}

function closeSubMenu() {
    console.log("sub menu changed");
    let allSubMenuItems = document.querySelectorAll(".item2");

    for (let i = 0; i < allSubMenuItems.length; i++){
        if (allSubMenuItems[i].classList.contains("visible")){
            allSubMenuItems[i].classList.remove("visible");
        } else {
            allSubMenuItems[i].classList.add("visible");
        }
    }
}

let toggleBtn = document.querySelector(".toggle");
toggleBtn.addEventListener("click", () => {
    console.log("clicked");
    let allItems = document.querySelectorAll(".item");

    for (let i = 0; i < allItems.length; i++){
        if (allItems[i].classList.contains("active")){
            allItems[i].classList.remove("active");
        } else {
            allItems[i].classList.add("active");
        }
    }

    let allSubMenuItems = document.querySelectorAll(".item2");
    for (let i = 0; i < allSubMenuItems.length; i++){
        if (allSubMenuItems[i].classList.contains("visible")){
            allSubMenuItems[i].classList.remove("visible");
        }
    }

    let menu = document.querySelector(".mallHeader");
    menu.classList.toggle("off");
});

let toggleSubMenu = document.querySelector(".subMenu2");
toggleSubMenu.addEventListener("click", closeSubMenu)


//for hiding the navbar
let prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  let menu = document.querySelector(".mallHeader");
  let currentScrollPos = window.pageYOffset;
  console.log("scrolling");
  if (prevScrollpos > currentScrollPos && !menu.classList.contains("off")) {
    document.querySelector("header").classList.add("visible");
    document.querySelector("header").classList.remove("invisible");
  } else if (!menu.classList.contains("off")) {
    document.querySelector("header").classList.remove("visible");
    document.querySelector("header").classList.add("invisible");
  }
  prevScrollpos = currentScrollPos;
}

// Validator
let fnameElement = document.getElementById("firstName");
let lnameElement = document.getElementById("lastName");
let phoneElement = document.getElementById("phone");
let emailElement = document.getElementById("emailAddress");
let cityElement = document.getElementById("city");
let zipcodeElement = document.getElementById("zipcode");
let addressElement = document.getElementById("address")
let passwordElement = document.getElementById("password");
let passwordReElement = document.getElementById("passwordRe");
let formElement = document.querySelector('form');
let statusElement = document.querySelector('.status');
// Add event to check Name Element
//FirstName
function validateFName(){
    if(fnameElement){
        fnameElement.onblur = checkFName;

        fnameElement.oninput = function(){
            let fnameErrorMessage = fnameValidator();
            let fnameErrorElemet = document.querySelector('.errorFnameMSG');
            fnameErrorElemet.innerHTML = '';
            fnameElement.classList.remove('invalid');
            if(fnameErrorMessage){
                fnameErrorElemet.innerHTML = fnameErrorMessage;
                fnameElement.classList.add('invalid');
            }
        } 
    }
}
//LastName
function validateLName(){
    if(fnameElement){
        lnameElement.onblur = checkLName;

        lnameElement.oninput = function(){
            let lnameErrorMessage = lnameValidator();
            let lnameErrorElemet = document.querySelector('.errorLnameMSG');
            lnameErrorElemet.innerHTML = '';
            lnameElement.classList.remove('invalid');
            if(lnameErrorMessage){
                lnameErrorElemet.innerHTML = lnameErrorMessage;
                lnameElement.classList.add('invalid');
            }
        } 
    }
}

// Check the name element to satisfied with the requirement
//First Name
function checkFName(){
    let fnameErrorMessage = fnameValidator();
    let fnameErrorElemet = document.querySelector('.errorFnameMSG');
    if(fnameErrorMessage){
        fnameErrorElemet.innerHTML = fnameErrorMessage;
        fnameElement.classList.add('invalid');
        return false;
    } else {
        fnameErrorElemet.innerHTML = '';
        fnameElement.classList.remove('invalid');
        return true;
    }
}
// Last Name
function checkLName(){
    let lnameErrorMessage = lnameValidator();
    let lnameErrorElemet = document.querySelector('.errorLnameMSG');
    if(lnameErrorMessage){
        lnameErrorElemet.innerHTML = lnameErrorMessage;
        lnameElement.classList.add('invalid');
        return false;
    } else {
        lnameErrorElemet.innerHTML = '';
        lnameElement.classList.remove('invalid');
        return true;
    }
}

// Pattern to check the name
//First Name
function fnameValidator(){
    const fnamePattern = /^[\D]{3,}$/;
    if(fnamePattern.test(fnameElement.value)){
        return undefined;
    }
    return "Name must have more than 3 charaters";
}
//Last Name
function lnameValidator(){
    const lnamePattern = /^[\D]{3,}$/;
    if(lnamePattern.test(lnameElement.value)){
        return undefined;
    }
    return "Name must have more than 3 charaters";
}

// Add event to check Phone Element
function validatePhone(){
    if(phoneElement){
        phoneElement.onblur = checkPhone;

        phoneElement.oninput = function(){
            let phoneErrorMessage = phoneValidator();
            let phoneErrorElemet = document.querySelector('.errorPhoneMSG');
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
    let phoneErrorElemet = document.querySelector('.errorPhoneMSG');
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

// Add event to check Address Element
function validateAddress(){
    if(addressElement){
        addressElement.onblur = checkAddress;

        addressElement.oninput = function(){
            let addressErrorMessage = addressValidator();
            let addressErrorElemet = document.querySelector('.errorAddressMSG');
            addressErrorElemet.innerHTML = '';
            addressElement.classList.remove('invalid');
            if(addressErrorMessage){
                addressErrorElemet.innerHTML = addressErrorMessage;
                addressElement.classList.add('invalid');
            }
        } 
    }
}

// Check the address element to satisfied with the requirement
function checkAddress(){
    let addressErrorMessage = addressValidator();
    let addressErrorElemet = document.querySelector('.errorAddressMSG');
    if(addressErrorMessage){
        addressErrorElemet.innerHTML = addressErrorMessage;
        addressElement.classList.add('invalid');
        return false;
    } else {
        addressErrorElemet.innerHTML = '';
        addressElement.classList.remove('invalid');
        return true;
    }
}

// Pattern to check the address
function addressValidator(){
    const addressPattern = /^[\D]{3,}$/;
    if(addressPattern.test(addressElement.value)){
        return undefined;
    }
    return "The address is invalid";
}

// Add event to check Email Element
function validateEmail(){
    if(emailElement){
        emailElement.onblur = checkEmail;

        emailElement.oninput = function(){
            let emailErrorMessage = emailValidator();
            let emailErrorElemet = document.querySelector('.errorEmailMSG');
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
    let emailErrorElemet = document.querySelector('.errorEmailMSG');
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
    const emailPattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(emailPattern.test(emailElement.value)){
        return undefined;
    }
    return 'The email is invalid';
}

// Add event to check city Element
function validateCity(){
    if(cityElement){
        cityElement.onblur = checkCity;

        cityElement.oninput = function(){
            let cityErrorMessage = cityValidator();
            let cityErrorElemet = document.querySelector('.errorCityMSG');
            cityErrorElemet.innerHTML = '';
            cityElement.classList.remove('invalid');
            if(cityErrorMessage){
                cityErrorElemet.innerHTML = cityErrorMessage;
                cityElement.classList.add('invalid');
            }
        } 
    }
}

// Check the city element to satisfied with the requirement
function checkCity(){
    let cityErrorMessage = cityValidator();
    let cityErrorElemet = document.querySelector('.errorCityMSG');
    if(cityErrorMessage){
        cityErrorElemet.innerHTML = cityErrorMessage;
        cityElement.classList.add('invalid');
        return false;
    } else {
        cityErrorElemet.innerHTML = '';
        cityElement.classList.remove('invalid');
        return true;
    }
}

// Pattern to check the city
function cityValidator(){
    const cityPattern = /^[\D]{3,}$/;
    if(cityPattern.test(cityElement.value)){
        return undefined;
    }
    return "The city name is invalid";
}

// Add event to check zipcode Element
function validateZipcode(){
    if(zipcodeElement){
        zipcodeElement.onblur = checkZipcode;

        zipcodeElement.oninput = function(){
            let zipcodeErrorMessage = zipcodeValidator();
            let zipcodeErrorElemet = document.querySelector('.errorZipcodeMSG');
            zipcodeErrorElemet.innerHTML = '';
            zipcodeElement.classList.remove('invalid');
            if(zipcodeErrorMessage){
                zipcodeErrorElemet.innerHTML = zipcodeErrorMessage;
                zipcodeElement.classList.add('invalid');
            }
        } 
    }
}

// Check the zipcode element to satisfied with the requirement
function checkZipcode(){
    let zipcodeErrorMessage = zipcodeValidator();
    let zipcodeErrorElemet = document.querySelector('.errorZipcodeMSG');
    if(zipcodeErrorMessage){
        zipcodeErrorElemet.innerHTML = zipcodeErrorMessage;
        zipcodeElement.classList.add('invalid');
        return false;
    } 
    else {
        zipcodeErrorElemet.innerHTML = '';
        zipcodeElement.classList.remove('invalid');
        return true;
    }
}

// Pattern to check the zipcode
function zipcodeValidator(){
    const zipcodePattern = /^[\d]{4,6}$/;
    if(zipcodePattern.test(zipcodeElement.value)){
        return undefined;
    }
    else {
        return 'Zipcode number is invalid'
    }
    
}

// Add event to check zipcode Element
function validateZipcode(){
    if(zipcodeElement){
        zipcodeElement.onblur = checkZipcode;

        zipcodeElement.oninput = function(){
            let zipcodeErrorMessage = zipcodeValidator();
            let zipcodeErrorElemet = document.querySelector('.errorZipcodeMSG');
            zipcodeErrorElemet.innerHTML = '';
            zipcodeElement.classList.remove('invalid');
            if(zipcodeErrorMessage){
                zipcodeErrorElemet.innerHTML = zipcodeErrorMessage;
                zipcodeElement.classList.add('invalid');
            }
        } 
    }
}

// Check the zipcode element to satisfied with the requirement
function checkZipcode(){
    let zipcodeErrorMessage = zipcodeValidator();
    let zipcodeErrorElemet = document.querySelector('.errorZipcodeMSG');
    if(zipcodeErrorMessage){
        zipcodeErrorElemet.innerHTML = zipcodeErrorMessage;
        zipcodeElement.classList.add('invalid');
        return false;
    } 
    else {
        zipcodeErrorElemet.innerHTML = '';
        zipcodeElement.classList.remove('invalid');
        return true;
    }
}

// Pattern to check the zipcode
function zipcodeValidator(){
    const zipcodePattern = /^[\d]{4,6}$/;
    if(zipcodePattern.test(zipcodeElement.value)){
        return undefined;
    }
    else {
        return 'Zipcode number is invalid'
    }
    
}

// Add event to check password Element
function validatePassword(){
    if(passwordElement){
        passwordElement.onblur = checkPassword;

        passwordElement.oninput = function(){
            let passwordErrorMessage = passwordValidator();
            let passwordErrorElemet = document.querySelector('.errorPasswordMSG');
            passwordErrorElemet.innerHTML = '';
            passwordElement.classList.remove('invalid');
            if(passwordErrorMessage){
                passwordErrorElemet.innerHTML = passwordErrorMessage;
                passwordElement.classList.add('invalid');
            }
        } 
    }
}

// Check the password element to satisfied with the requirement
function checkPassword(){
    let passwordErrorMessage = passwordValidator();
    let passwordErrorElemet = document.querySelector('.errorPasswordMSG');
    if(passwordErrorMessage){
        passwordErrorElemet.innerHTML = passwordErrorMessage;
        passwordElement.classList.add('invalid');
        return false;
    } 
    else {
        passwordErrorElemet.innerHTML = '';
        passwordElement.classList.remove('invalid');
        return true;
    }
}

// Pattern to check the password
function passwordValidator(){
    const passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,20}$/;
    if(passwordPattern.test(passwordElement.value)){
        return undefined;
    }
    else {
        return 'Password must be 8-20 charaters with at least 1 upper and lower case and atleast 1 special character and no space'
    }
    
}

// Add event to recheck password Element
function validateRePassword(){
    if(passwordReElement){
        passwordReElement.onblur = checkRePassword;

        passwordReElement.oninput = function(){
            let passwordReErrorMessage = passwordReValidator();
            let passwordReErrorElemet = document.querySelector('.errorPasswordReMSG');
            passwordReErrorElemet.innerHTML = '';
            passwordReElement.classList.remove('invalid');
            if(passwordReErrorMessage){
                passwordReErrorElemet.innerHTML = passwordReErrorMessage;
                passwordReElement.classList.add('invalid');
            }
        } 
    }
}

// Check the password element to satisfied with the requirement
function checkRePassword(){
    let passwordReErrorMessage = passwordReValidator();
    let passwordReErrorElemet = document.querySelector('.errorPasswordReMSG');
    if(passwordReErrorMessage){
        passwordReErrorElemet.innerHTML = passwordReErrorMessage;
        passwordReElement.classList.add('invalid');
        return false;
    } 
    else {
        passwordReErrorElemet.innerHTML = '';
        passwordReElement.classList.remove('invalid');
        return true;
    }
}

// Pattern to check the password
function passwordReValidator(){
    let passwordReErrorElemet = document.querySelector('#passwordRe');
    if(passwordElement.value){
        console.log(passwordElement.value);
        console.log(passwordReErrorElemet.value);
        if(passwordElement.value === passwordReErrorElemet.value){
            return undefined;
        } else {
            return "Password did not match!"
        }
    }
    else {
        return 'Please enter the password first'
    }
    
}

// Assign all behaviour of all element 
function ValidateBehaviour(){
    validateFName();
    validateLName();
    validateAddress();
    validateCity();
    validatePhone();
    validateZipcode();
    validateEmail();
    validatePassword();
    validateRePassword();
}

// Call the function to add all event listener to all elements
ValidateBehaviour();

// Handle the submit event
formElement.addEventListener('submit', function(event){
    event.preventDefault();
    let isEmailValid = checkEmail();
    let isFNameValid = checkFName();
    let isLNameValid = checkLName();
    let isPhoneValid = checkPhone();
    let isZipcodeValid = checkZipcode();
    let isAddressValid = checkAddress();
    let isPasswordValid = checkPassword();
    let isPasswordReValid = checkRePassword();
    let isCityValid = checkCity();
    if (isEmailValid && isFNameValid && isLNameValid && isPhoneValid && isAddressValid && isCityValid && isZipcodeValid && isPasswordValid && isPasswordReValid){
        statusElement.innerHTML = 'Form send!';
    } else {
        statusElement.innerHTML = '';
    }
})

// Handle the reset event 
formElement.addEventListener('reset', function(event){
    let fnameErrorElemet = document.querySelector('.errorFnameMSG');
    let lnameErrorElemet = document.querySelector('.errorLnameMSG');
    let emailErrorElemet = document.querySelector('.errorEmailMSG');
    let phoneErrorElemet = document.querySelector('.errorPhoneMSG');
    let zipcodeErrorElemet = document.querySelector(".errorZipcodeMSG");
    let addressErrorElemet = document.querySelector(".errorAddressMSG");
    let passwordErrorElemet= document.querySelector(".errorPasswordMSG");
    let passwordReErrorElemet= document.querySelector(".errorPasswordReMSG");
    let cityErrorElemet= document.querySelector(".errorCityMSG");

    // let phoneErrorElemet = document.querySelector('.phone-error');


    fnameErrorElemet.innerHTML = '';
    lnameErrorElemet.innerHTML = '';
    emailErrorElemet.innerHTML = '';
    passwordErrorElemet.innerHTML = '';
    zipcodeErrorElemet.innerHTML = '';
    phoneErrorElemet.innerHTML = '';
    addressErrorElemet.innerHTML = '';
    passwordReErrorElemet.innerHTML = '';
    cityErrorElemet.innerHTML = '';
    // phoneErrorElemet.innerHTML = '';

    statusElement.innerHTML = '';
})
