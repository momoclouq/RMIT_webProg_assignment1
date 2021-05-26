let cartNavQuantity = document.querySelector("#cart_nav");
if (cartNavQuantity){
    if(sessionStorage.getItem("cartNumbers")){
        cartNavQuantity.innerHTML = `(${sessionStorage.getItem("cartNumbers")})`;
    }else {
        cartNavQuantity.textContent = "(0)";    
    } 
}

