//navigation bar//
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

// User Authentication for My Account Page
let myAccountElement = document.querySelector(".account_mall_nav");

 myAccountElement.onclick = function(){
    //Is the user authenticated?
    if (sessionStorage.getItem('LogInStatus') === null) {
     window.location.pathname = "mallPages/Account/myAccount-Log-in.html";
    }
    else {
    //The user is authenticated and the authentication has not expired.
        window.location.pathname = "mallPages/Account/myAccount-logged-in.html";
    }
}

//log out functionality
if (sessionStorage.getItem('LogInStatus') != null) {
    let logOutBtn = document.createElement("li");
    let logOutLink = document.createElement("a");
    logOutLink.href="#";
    logOutLink.textContent = "Log out";
    logOutLink.addEventListener("click", function(){
        sessionStorage.removeItem('LogInStatus');
    });

    logOutBtn.classList.add("item");

    logOutBtn.appendChild(logOutLink);

    let menu = document.querySelector(".menu");
    let cartBtn = document.querySelector(".cart_mall_nav");
    menu.insertBefore(logOutBtn, cartBtn);
    console.log(menu);
}