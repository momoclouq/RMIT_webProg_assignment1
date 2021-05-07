let product1TotalPrice = sessionStorage.getItem("product1TotalCost");
product1TotalPrice = Number.parseInt(product1TotalPrice, 10);
let product2TotalPrice = sessionStorage.getItem("product2TotalCost");
product2TotalPrice = Number.parseInt(product2TotalPrice, 10);
let totalCost = product1TotalPrice + product2TotalPrice;
let totalPriceElement = document.querySelector(".priceText");
let totalNumberHeading = document.querySelector(".title");

function displayCart(){
    let cartItems = sessionStorage.getItem("productsInCart");
    cartItems = JSON.parse(cartItems);
    let productList = document.querySelector(".product-list");
   

    if(cartItems && productList){
        productList.innerHTML = "";
        totalNumberHeading.innerHTML += ` (${sessionStorage.getItem("cartNumbers")} items)`;
        Object.values(cartItems).map(item => {
          
            productList.innerHTML += `
            <li class="product ${item.tag}_cart">
                <div class="prodImg"><img src="../../resources/images/Product Image/${item.tag}.jpeg" alt="product1 on display"></div>
                <div class="prodContent">
                    <div class="prodDesc">
                        <div class="prodName">
                            <h3>${item.name}</h3>    
                        </div>
                        <div class="action_button">
                            <p class="action_button_remove ${item.tag}_remove">Remove</p>
                        </div>
                    </div>
                    <div class="prodDetails">
                        <div class="productPrice">
                            $${item.price}.00
                        </div>
                        <div class="productQuantity">
                            <ion-icon class="increaseQuantity" name="add-outline"></ion-icon>
                            <input type="tel" id="quanity${item.tag}" name="quanity" maxlength="10" value="${item.inCart}">
                            <ion-icon class="decreaseQuantity" name="remove-outline"></ion-icon>
                        </div>
                                    
                    </div>
                </div>
                </li>
            `
        })

        
        if(product1TotalPrice && product2TotalPrice){
            totalPriceElement.innerHTML += `$${totalCost}.00`;
        } else if (product1TotalPrice) {
            totalPriceElement.innerHTML += `$${product1TotalPrice}.00`;
        } else if(product2TotalPrice) {
            totalPriceElement.innerHTML += `$${product2TotalPrice}.00`;
        }
        

    }
}

displayCart();