let products = [
    {
        name: "Black Shoe",
        tag: "product_2",
        price: 200,
        inCart: 0
    },
    {
        name: "Blue Flannel",
        tag: "product_1",
        price: 40,
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
    let cartItems = sessionStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);

    if (oldQuantityValue2){
        sessionStorage.setItem("product2Numbers", totalProduct2);
    } else {
        sessionStorage.setItem("product2Numbers", newQuantityValue2);
    }
   
    let thisProduct = products[0];
    thisProduct.inCart = sessionStorage.getItem("product2Numbers");

    if(cartItems != null){
        if(cartItems[thisProduct.tag] == undefined){
            cartItems = {
                ...cartItems,
                [thisProduct.tag]: thisProduct
            }
        }
        cartItems[thisProduct.tag].inCart = parseInt(sessionStorage.getItem("product2Numbers"));
    } else {
        cartItems = {
            [thisProduct.tag]: thisProduct
        }
    }

    sessionStorage.setItem("productsInCart", JSON.stringify(cartItems));
    totalCost()
}

function totalCost(){
    let thisProduct = products[0];
    let product2Price = thisProduct.price;
    let newProduct2Quantity = sessionStorage.getItem("product2Numbers");
    let newCostProduct2 = product2Price * newProduct2Quantity; 
    sessionStorage.setItem("product2TotalCost", newCostProduct2);
    console.log(sessionStorage.getItem("product2TotalCost"));
}
