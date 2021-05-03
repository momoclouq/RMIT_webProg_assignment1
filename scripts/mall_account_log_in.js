let userNameElement = document.getElementById("username");
let passwordElement = document.getElementById("password");
let submitElement = document.querySelector(".submit");

function logIn(){

    if(userNameElement){
        userNameElement.onblur = function(){
            let emailErrorMessage = emailValidator();
            let emailErrorElemet = document.querySelector('.email-error');
            if(emailErrorMessage){
                emailErrorElemet.innerHTML = emailErrorMessage;
                userNameElement.classList.add('invalid');
            } else {
                emailErrorElemet.innerHTML = '';
                userNameElement.classList.remove('invalid');
            }
        } 

        userNameElement.oninput = function(){
            let emailErrorMessage = emailValidator();
            let emailErrorElemet = document.querySelector('.email-error');
            emailErrorElemet.innerHTML = '';
            userNameElement.classList.remove('invalid');
            if(emailErrorMessage){
                emailErrorElemet.innerHTML = emailErrorMessage;
                userNameElement.classList.add('invalid');
            }
        } 
    }

    if(passwordElement){

    }


}

function emailValidator(){
    const emailPattern = /^([a-zA-Z0-9]{1}[.]?){2,}([a-zA-Z0-9]{1})@([a-zA-Z0-9]{1}[.]?){1,}[.][a-zA-Z]{2,5}$/;
    if(emailPattern.test(userNameElement.value)){
        return undefined;
    }
    return 'The email is invalid';
}

function passwordValidator(){
    const passwordPattern = /^[password]$/;
    if(passwordPattern.test(passwordElement.value)){
        return undefined;
    }
    return 'The password is invalid';
}

logIn();
function navigate(){
    window.location.href = "myAccount-logged-in.html";
}

submitElement.addEventListener('click', navigate);