let products = [
    {
        name: "Black Shoe",
        tag: "blackshoe",
        price: 200,
        inCart: 0
    },
    {
        name: "Blue Flannel",
        tag: "blueflannel",
        price: 20,
        inCart: 0
    }
]

let addElementProduct1 = document.getElementById("add_product_to_cart1");
let buyNowElementProduct1 = document.getElementById("buy_now_product1");
let product1QuantityElement = document.getElementById("product1_quantity");

addElementProduct1.addEventListener('click', () =>{
    if(sessionStorage.getItem("LogInStatus")){
        cartNumbers();
    } else {
        window.location.href = "../../../mallPages/Account/myAccount-Log-in.html";
    }
})



function cartNumbers(){
    let productNumbers = sessionStorage.getItem("cartNumbers");
    let newQuantityValue1 = product1QuantityElement.value;
    let totalCartNumbers = parseInt(newQuantityValue1) + parseInt(productNumbers);

    if(productNumbers){
        sessionStorage.setItem("cartNumbers", totalCartNumbers);
        document.querySelector("#cart_nav").innerHTML = `(${sessionStorage.getItem("cartNumbers")})`;
    } else {
        sessionStorage.setItem("cartNumbers", newQuantityValue1);
        document.querySelector("#cart_nav").innerHTML = `(${sessionStorage.getItem("cartNumbers")})`;
    }


    setItems();
}

function setItems(){
    let newQuantityValue1 = product1QuantityElement.value;
    let oldQuantityValue1 = sessionStorage.getItem("product1Numbers");
    let totalProduct1 = parseInt(newQuantityValue1) + parseInt(oldQuantityValue1);
    if (oldQuantityValue1){
        sessionStorage.setItem("product1Numbers", totalProduct1);
    } else {
        sessionStorage.setItem("product1Numbers", newQuantityValue1);
    }
   
    let thisProduct = products[1];
    thisProduct.inCart = sessionStorage.getItem("product1Numbers");
    
    sessionStorage.setItem("product1InCart", JSON.stringify(thisProduct));
    console.log(sessionStorage.getItem("product1InCart"));  
}




