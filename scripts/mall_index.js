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
console.log(myAccountElement);
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

 
//Infinite scrolling
let currentScrollWidth = [0,0];

function isHovering(element){
    return element.classList.contains("hovering");
}

//check desktop and tablet screen
function isTabletDesktop(){
    return window.innerWidth > 767;
}

const scrollbars = document.querySelectorAll(".listScrollMenu");
for (let i = 0; i < scrollbars.length; i++){
    //scrolling effect
    let offset = 2;

    //calculate if the list is scrollable 
    let totalChildrenWidth = 0;
    let totalChildren = scrollbars[i].children;
    for (let k = 0; k < totalChildren.length; k++){
        let element = totalChildren[k];

        totalChildrenWidth += element.offsetWidth;
    }

    //if the list is scrollable then set up events
    if (totalChildrenWidth > scrollbars[i].offsetWidth){
        setInterval(() => {
            if (isTabletDesktop() && !isHovering(scrollbars[i]) || !isTabletDesktop()){
                scrollbars[i].scrollLeft += offset;
    
                if (scrollbars[i].scrollLeft == currentScrollWidth[i]){
                    scrollbars[i].scroll(0,0);
                } else currentScrollWidth[i] = scrollbars[i].scrollLeft; 
            }
        }, 100);
    
        //hover effect
        scrollbars[i].addEventListener("mouseover", function(){
            scrollbars[i].classList.add("hovering");
        });
    
        scrollbars[i].addEventListener("mouseout", function(){
            scrollbars[i].classList.remove("hovering");
        });
    } else {
        //center the list if the list is not scrollable (too short)
        scrollbars[i].classList.add("listScrollMenu_center");
    }
}