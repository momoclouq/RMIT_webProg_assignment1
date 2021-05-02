let nameElement = document.getElementById("fullname");
let phoneElement = document.getElementById("phone");
let emailElement = document.getElementById("email");
let messageNameElement = document.getElementById("message");


// Phone pattern: /^([0-9]{1}[-|.| ]?){9,11}$/
// email pattern: /^([a-zA-Z0-9]{1}[.]?){2,}([a-zA-Z0-9]{1})@([a-zA-Z0-9]{1}[.]?){1,}[.][a-zA-Z]{2,5}$/

function Validate(){
    if(nameElement){
        nameElement.onblur = function(){
            const nameErrorMessage = nameValidator();
            if(nameErrorMessage){
                console.log(nameErrorMessage);
            }
            console.log('valid');
        } 

        nameElement.oninput = function(){
            const nameErrorMessage = nameValidator();
            if(nameErrorMessage){
                console.log(nameErrorMessage);
            }
            console.log('valid');
        } 
    }

    if(phoneElement){
        phoneElement.onblur = function(){
            const phoneErrorMessage = phoneValidator();
            if(phoneErrorMessage){
                console.log(phoneErrorMessage);
            }
            console.log('valid');
        } 
    }


    if(emailElement){
        emailElement.onblur = function(){
            const emailErrorMessage = emailValidator();
            if(emailErrorMessage){
                console.log(emailErrorMessage);
            }
            console.log('valid');
        } 
    }


}

function nameValidator(){
    if(nameElement.value.length < 3){
        return "The name is too short";
    }
    return undefined;
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