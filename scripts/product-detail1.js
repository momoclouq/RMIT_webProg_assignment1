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

buyNowElementProduct1.addEventListener('click', () => {
    
    if(sessionStorage.getItem("LogInStatus")){
        cartNumbers();
        window.location.href = "../storeOrderPlacement.html";
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

    //popup success add to cart message
    //???
    
    setItems();
}

function setItems(){
    let newQuantityValue1 = product1QuantityElement.value;
    let oldQuantityValue1 = sessionStorage.getItem("product1Numbers");
    let totalProduct1 = parseInt(newQuantityValue1) + parseInt(oldQuantityValue1);
    let cartItems = sessionStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);

    if (oldQuantityValue1){
        sessionStorage.setItem("product1Numbers", totalProduct1);
    } else {
        sessionStorage.setItem("product1Numbers", newQuantityValue1);
    }
   
    let thisProduct = products[1];
    thisProduct.inCart = parseInt(sessionStorage.getItem("product1Numbers"));
  

    if(cartItems != null){
        if(cartItems[thisProduct.tag] == undefined){
            cartItems = {
                ...cartItems,
                [thisProduct.tag]: thisProduct
            }
        }
        cartItems[thisProduct.tag].inCart = parseInt(sessionStorage.getItem("product1Numbers"));
    } else {
        cartItems = {
            [thisProduct.tag]: thisProduct
        }
    }

    sessionStorage.setItem("productsInCart", JSON.stringify(cartItems));
    totalCost();
}

function totalCost(){
    let thisProduct = products[1];
    let product1Price = thisProduct.price;
    let newProduct1Quantity = sessionStorage.getItem("product1Numbers");
    let newCostProduct1 = product1Price * newProduct1Quantity; 
    sessionStorage.setItem("product1TotalCost", newCostProduct1);
    console.log(sessionStorage.getItem("product1TotalCost"));
}



