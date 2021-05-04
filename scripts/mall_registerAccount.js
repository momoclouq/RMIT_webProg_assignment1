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

// check phone number
btn = document.querySelector("#submitBtn");
        btn.addEventListener("click", function (ev){
        // Check any 10 digits
        phone_pattern = /^([0-9]{1}[-|.| ]?){9,11}$/;
        value = document.querySelector("#phone").value;

        if (!phone_pattern.test(value)){
        /*********testing************
        //     alert("Valid phone number");
        // } else {
        **********testing***********/
            alert("Invalid phone number");
        }
        });
        /*********backup***********
                        // Check phone number with "-"
                        // phone_pattern_2 = /^(([0-9]+\W){8,10})[0-9]$/;
                        // phone_pattern_3 = /^([0-9]+\W)([0-9]+\W)([0-9]{3,5})$/;
                        *********backup***********/


// Check password
btn = document.querySelector("#submitBtn");
      btn.addEventListener("click", function (ev){
        //   Check password pattern
          password_pattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,20}$/
        var password = document.querySelector("#password").value,
            confirmPassword = document.querySelector("#passwordRe").value;
            //check password strength
            if (!password_pattern.test(password)){
            /*********testing************    
            //     alert("Valid password.");}
            // else{
            */
                alert("Password must be 8-20 charaters with at least 1 upper and lower case and atleast 1 special character and no space")
            };
            //confirm password
            if (password == ""){
                alert("Password cannot be empty.");
            }
            else if(password != confirmPassword){
                alert("Password didn't match.")
            }
      });
// check email
btn = document.querySelector("#submitBtn");
      btn.addEventListener("click", function (ev){
        email_pattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
        value = document.querySelector("#emailAddress").value;
        if (!email_pattern.test(value)){
        /**********testing***********
        //     alert("Valid Email address.");
        // }
        //else{
            **********testing***********/
            alert("Invalid Email address.");
        }

        });
//check name, city, address
btn = document.querySelector("#submitBtn");
        btn.addEventListener("click", function (ev){
            name_pattern = /^[\D]{3,}$/;
            fname = document.querySelector("#firstName").value;
            if(!name_pattern.test(fname)){
                alert("First name must have more than 3 characters.")                
            }
        });

btn = document.querySelector("#submitBtn");
        btn.addEventListener("click", function (ev){
            name_pattern = /^[\D]{3,}$/;
            lname = document.querySelector("#lastName").value;
            if(!name_pattern.test(lname)){
                alert("Last name must have more than 3 charaters.")                
            }
        });
btn = document.querySelector("#submitBtn");
        btn.addEventListener("click", function (ev){
            name_pattern = /^[\D]{3,}$/;
            city = document.querySelector("#city").value;
            if(!name_pattern.test(city)){
                alert("City must have more than 3 charaters.")                
            }
        });
btn = document.querySelector("#submitBtn");
        btn.addEventListener("click", function (ev){
            name_pattern = /^[\D]{3,}$/;
            address = document.querySelector("#address").value;
            if(!name_pattern.test(address)){
                alert("Address must have more than 3 charaters.")                
            }
        });

// Zipcode check
btn = document.querySelector("#submitBtn");
        btn.addEventListener("click", function (ev){
            code_pattern = /^[\d]{4,6}$/;
            zipcode = document.querySelector("#zipcode").value;
            if(!code_pattern.test(zipcode)){
                alert("Zipcode must have 4-6 digits.")                
            }
        });