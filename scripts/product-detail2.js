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

let addElementProduct2 = document.getElementById("add_product_to_cart2");
let buyNowElementProduct2 = document.getElementById("buy_now_product2");
let product2QuantityElement = document.getElementById("product2_quantity");

addElementProduct2.addEventListener('click', () =>{
    if(sessionStorage.getItem("LogInStatus")){
        cartNumbers();
    } else {
        window.location.href = "../../../mallPages/Account/myAccount-Log-in.html";
    }
})

function cartNumbers(){
    let productNumbers = sessionStorage.getItem("cartNumbers");
    let newQuantityValue2 = product2QuantityElement.value;
    let totalCartNumbers = parseInt(newQuantityValue2) + parseInt(productNumbers);

    if(productNumbers){
        sessionStorage.setItem("cartNumbers", totalCartNumbers);
        document.querySelector("#cart_nav").innerHTML = `(${sessionStorage.getItem("cartNumbers")})`;
    } else {
        sessionStorage.setItem("cartNumbers", newQuantityValue2);
        document.querySelector("#cart_nav").innerHTML = `(${sessionStorage.getItem("cartNumbers")})`;
    }

    setItems();
}

function setItems(){
    let newQuantityValue2 = product2QuantityElement.value;
    let oldQuantityValue2 = sessionStorage.getItem("product2Numbers");
    let totalProduct2 = parseInt(newQuantityValue2) + parseInt(oldQuantityValue2);
    if (oldQuantityValue2){
        sessionStorage.setItem("product2Numbers", totalProduct2);
    } else {
        sessionStorage.setItem("product2Numbers", newQuantityValue2);
    }
   
    let thisProduct = products[0];
    thisProduct.inCart = sessionStorage.getItem("product2Numbers");
    sessionStorage.setItem("product2InCart", JSON.stringify(thisProduct));
    console.log(sessionStorage.getItem("product2InCart"));  
}
