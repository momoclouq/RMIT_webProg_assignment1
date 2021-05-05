let userNameElement = document.getElementById("username");
let passwordElement = document.getElementById("password");
let submitElement = document.querySelector(".submit");


function logIn(){     

    if(passwordElement) {
       let passwordErrorMessage = passwordValidator();
       console.log(passwordErrorMessage);
       if(passwordErrorMessage === undefined){     
         sessionStorage.setItem("LogInStatus", "In");
         sessionStorage.setItem("user", userNameElement.value);
         console.log(sessionStorage.getItem("user"));
         navigate();
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

