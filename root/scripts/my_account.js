let emailElement = document.querySelector(".email_my_account");
let emailAccount = sessionStorage.getItem("user");

emailElement.innerHTML = "Email: " + emailAccount;