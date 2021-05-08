let cookieContainer = document.querySelector(".cookie-container");
let cookieButton = document.querySelector(".cookie-butn");

cookieButton.addEventListener("click", () => {
    cookieContainer.classList.remove("active");
    localStorage.setItem("cookieBannerDisplayed", "true")
});

setTimeout(() => {
        if(!localStorage.getItem("cookieBannerDisplayed")){
            cookieContainer.classList.add("active");
            
    }
}, 2000);