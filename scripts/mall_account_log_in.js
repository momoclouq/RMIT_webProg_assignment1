let userNameElement = document.getElementById("username");
let passwordElement = document.getElementById("password");
let submitElement = document.querySelector(".submit");
let errorElement = document.getElementById("log_in_error");

function logIn(){     

    if(passwordElement) {
       let passwordErrorMessage = passwordValidator();
       console.log(passwordErrorMessage);
       if(passwordErrorMessage === undefined){     
         errorElement.innerHTML = "Password is invalid";
         sessionStorage.setItem("LogInStatus", "In");
         sessionStorage.setItem("user", userNameElement.value);
         navigate();
       } else {
            errorElement.innerHTML = "Passwrod is invalid";
            errorElement.style.color = "red";
            errorElement.style.textAlign = "center";
       }
    }


}

function passwordValidator(){
    const passwordPattern = /^password$/;
    if(passwordPattern.test(passwordElement.value)){
        return undefined;
    }
    return 'The password is invalid';
    
}

function navigate(){
    window.location.href = "myAccount-logged-in.html";
    
}

submitElement.addEventListener('click', function(e){
    e.preventDefault();
    logIn();
});

