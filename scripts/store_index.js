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
   //setting default attribute to disabled of minus button
   document.querySelector(".minus-btn").setAttribute("disabled", "disabled");

   //taking value to increment decrement input value
   var valueCount;

   //taking price value in variable
   var price = document.getElementById("price").innerText;

   //price calculation function
   function priceTotal() {
       var total = valueCount * price;
       document.getElementById("price").innerText = total
       console.log(Math.ceil(.95));
   };




   let allIncreaseButton = document.querySelectorAll(".plus-btn");
   //plus button
   allIncreaseButton.forEach((button) => {
        button.addEventListener("click", function() {
            //getting value of input
            valueCount = document.getElementById("quantity").value;
    
            //input value increment by 1
    
            valueCount++;
    
            //setting increment input value
            document.getElementById("quantity").value = valueCount;
    
            if (valueCount > 1) {
                document.querySelector(".minus-btn").removeAttribute("disabled");
                document.querySelector(".minus-btn").classList.remove("disabled")
            }
    
            //calling price function
            priceTotal()
        })
   });
   
    let allminusButton = document.querySelectorAll(".minus-btn");
    allminusButton.forEach((button) => {
        button.addEventListener("click", function() {
            //getting value of input
            valueCount = document.getElementById("quantity").value;
     
            //input value increment by 1
            valueCount--;
     
            //setting increment input value
            document.getElementById("quantity").value = valueCount
     
            if (valueCount == 1) {
                document.querySelector(".minus-btn").setAttribute("disabled", "disabled")
            }
     
            //calling price function
            priceTotal()
        })
    })
     
        
    




    

    

    
 