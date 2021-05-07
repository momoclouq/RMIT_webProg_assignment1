

function displayCart(){
    // Get the price and calculate the total price
    let totalNumberHeading = document.querySelector(".title");
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

                    </div>
                    <div class="prodDetails">
                        <div class="productPrice">
                            $${item.price}.00
                        </div>
                        <div class="productQuantity">
                            <ion-icon class="decreaseQuantity decrease${item.tag}" name="remove-outline"></ion-icon>
                            <input type="tel" id="quanity${item.tag}" name="quanity" maxlength="10" readonly value="${item.inCart}">
                            <ion-icon class="increaseQuantity increase${item.tag}" name="add-outline"></ion-icon>
                        </div>
                                    
                    </div>
                </div>
                </li>
            `
        })

        displayTotalPrice();
      

    }
}

function orderDone(){
    let orderDoneElement = document.querySelector(".orderBtn");
 
    orderDoneElement.addEventListener('click', function(e) {
        e.preventDefault();
        let product1TotalPrice = sessionStorage.getItem("product1TotalCost");
        let product2TotalPrice = sessionStorage.getItem("product2TotalCost");
        if(product1TotalPrice || product2TotalPrice){
            window.location.href = "storeThank.html";
        }  
    })
}

function continueShopping(){
    let continueShoppingElement = document.querySelector(".continueBtn");
    
    continueShoppingElement.addEventListener('click', function(e) {
        e.preventDefault();
        let product1TotalPrice = sessionStorage.getItem("product1TotalCost");
        let product2TotalPrice = sessionStorage.getItem("product2TotalCost");
        if(product1TotalPrice || product2TotalPrice){
            history.go(-1);
        }  
    })
}

function increaseQuantity(){
    let increase1Element = document.querySelector(".increaseproduct_1");
    let increase2Element = document.querySelector(".increaseproduct_2");
  

    if(increase1Element){
        increase1Element.addEventListener('click', function() {
            let product1QuantityCart = document.getElementById("quanityproduct_1");
            let productsInCart = sessionStorage.getItem("productsInCart");
            productsInCart = JSON.parse(productsInCart);
            let currentCartNumber = sessionStorage.getItem("cartNumbers");
            currentCartNumber = Number.parseInt(currentCartNumber, 10);
            let newCartNumber = currentCartNumber + 1;
            productsInCart["product_1"].inCart += 1;
            sessionStorage.setItem("product1Numbers", productsInCart["product_1"].inCart);
            product1QuantityCart.value = sessionStorage.getItem("product1Numbers");
            sessionStorage.setItem("cartNumbers", newCartNumber);
            document.querySelector("#cart_nav").innerHTML = `(${sessionStorage.getItem("cartNumbers")})`;
            sessionStorage.setItem("productsInCart", JSON.stringify(productsInCart));
            totalCost1();
        })
    }

    if(increase2Element){
        increase2Element.addEventListener('click', function() {
            
            let product2QuantityCart = document.getElementById("quanityproduct_2");
            let productsInCart = sessionStorage.getItem("productsInCart");
            productsInCart = JSON.parse(productsInCart);
            let currentCartNumber = sessionStorage.getItem("cartNumbers");
            currentCartNumber = Number.parseInt(currentCartNumber, 10);
            let newCartNumber = currentCartNumber + 1;
            productsInCart["product_2"].inCart += 1;
            sessionStorage.setItem("product2Numbers", productsInCart["product_2"].inCart);
            product2QuantityCart.value = sessionStorage.getItem("product2Numbers");
            sessionStorage.setItem("cartNumbers", newCartNumber);
            document.querySelector("#cart_nav").innerHTML = `(${sessionStorage.getItem("cartNumbers")})`;
            sessionStorage.setItem("productsInCart", JSON.stringify(productsInCart));
            totalCost2();
        })
    }
    
}

function decreaseQuantity(){
    let decrease1Element = document.querySelector(".decreaseproduct_1");
    let decrease2Element = document.querySelector(".decreaseproduct_2");
    

    if(decrease1Element){
        decrease1Element.addEventListener('click', function() {
            let product1QuantityCart = document.getElementById("quanityproduct_1");
            if(product1QuantityCart.value === "1"){
                
            } else {
                let productsInCart = sessionStorage.getItem("productsInCart");
                productsInCart = JSON.parse(productsInCart);
                let currentCartNumber = sessionStorage.getItem("cartNumbers");
                currentCartNumber = Number.parseInt(currentCartNumber, 10);
                let newCartNumber = currentCartNumber - 1;
                productsInCart["product_1"].inCart -= 1;
                sessionStorage.setItem("product1Numbers", productsInCart["product_1"].inCart);
                product1QuantityCart.value = sessionStorage.getItem("product1Numbers");
                sessionStorage.setItem("cartNumbers", newCartNumber);
                document.querySelector("#cart_nav").innerHTML = `(${sessionStorage.getItem("cartNumbers")})`;
                sessionStorage.setItem("productsInCart", JSON.stringify(productsInCart));
                totalCost1();
            }
            
        })
    }

    if(decrease2Element){
        decrease2Element.addEventListener('click', function() {
            let product2QuantityCart = document.getElementById("quanityproduct_2");
            if(product2QuantityCart.value === "1"){

            } else {
                let productsInCart = sessionStorage.getItem("productsInCart");
                productsInCart = JSON.parse(productsInCart);
                let currentCartNumber = sessionStorage.getItem("cartNumbers");
                currentCartNumber = Number.parseInt(currentCartNumber, 10);
                let newCartNumber = currentCartNumber - 1;
                productsInCart["product_2"].inCart -= 1;
                sessionStorage.setItem("product2Numbers", productsInCart["product_2"].inCart);
                product2QuantityCart.value = sessionStorage.getItem("product2Numbers");
                sessionStorage.setItem("cartNumbers", newCartNumber);
                document.querySelector("#cart_nav").innerHTML = `(${sessionStorage.getItem("cartNumbers")})`;
                sessionStorage.setItem("productsInCart", JSON.stringify(productsInCart));
                totalCost2();
            }
            
        })
    }
    
}

function totalCost1(){
    let totalProductNumber = sessionStorage.getItem("product1Numbers");
    let productsInCart = sessionStorage.getItem("productsInCart");
    productsInCart = JSON.parse(productsInCart);
    let priceProduct1 = productsInCart["product_1"].price;
    let totalPrice1 = totalProductNumber * priceProduct1;
    sessionStorage.setItem("product1TotalCost", totalPrice1);
    displayTotalPrice();
}

function totalCost2(){
    let totalProductNumber = sessionStorage.getItem("product2Numbers");
    let productsInCart = sessionStorage.getItem("productsInCart");
    productsInCart = JSON.parse(productsInCart);
    let priceProduct2 = productsInCart["product_2"].price;
    let totalPrice2 = totalProductNumber * priceProduct2;
    sessionStorage.setItem("product2TotalCost", totalPrice2);
    displayTotalPrice();
}

function displayTotalPrice(){
    let product1TotalPrice = sessionStorage.getItem("product1TotalCost");
    product1TotalPrice = Number.parseInt(product1TotalPrice, 10);
    let product2TotalPrice = sessionStorage.getItem("product2TotalCost");
    product2TotalPrice = Number.parseInt(product2TotalPrice, 10);
    let totalCost = product1TotalPrice + product2TotalPrice;
    let totalPriceElement = document.querySelector(".priceTotalText");

    if(product1TotalPrice && product2TotalPrice){
        totalPriceElement.innerHTML = `$${totalCost}.00`;
        sessionStorage.setItem("totalPriceCart", totalCost);
    } else if (product1TotalPrice) {
        totalPriceElement.innerHTML = `$${product1TotalPrice}.00`;
        sessionStorage.setItem("totalPriceCart", product1TotalPrice);
    } else if(product2TotalPrice) {
        totalPriceElement.innerHTML = `$${product2TotalPrice}.00`;
        sessionStorage.setItem("totalPriceCart", product2TotalPrice);
    }
    
}

function couponDiscount(){
    let couponValueElement = document.getElementById("coupon");
    let applyCouponElement = document.querySelector(".couponBtn");
    let totalPriceElement = document.querySelector(".priceTotalText");
    let currentFinalPrice = sessionStorage.getItem("totalPriceCart");
    currentFinalPrice = Number.parseInt(currentFinalPrice, 10);
    
    if(couponValueElement && totalPriceElement){
        applyCouponElement.addEventListener('click', function(e) {
            e.preventDefault();
            
            let couponValue = couponValueElement.value;
           
            // COSC2430-DI
            if(couponValue === "COSC2430-HD"){
                let errorCouponElement = document.querySelector(".errorCoupon");
                currentFinalPrice = currentFinalPrice - (currentFinalPrice*0.2);
                sessionStorage.setItem("totalPriceCart", currentFinalPrice);
                totalPriceElement.innerHTML = `$${currentFinalPrice}.00`;
                applyCouponElement.disabled = true;
                errorCouponElement.innerHTML = "";
            }

            else if(couponValue === "COSC2430-DI"){
                let errorCouponElement = document.querySelector(".errorCoupon");
                currentFinalPrice = currentFinalPrice - (currentFinalPrice*0.1);
                sessionStorage.setItem("totalPriceCart", currentFinalPrice);
                totalPriceElement.innerHTML = `$${currentFinalPrice}.00`;
                applyCouponElement.disabled = true;
                errorCouponElement.innerHTML = "";
            }
            else{
                let errorCouponElement = document.querySelector(".errorCoupon");
                errorCouponElement.innerHTML = "The coupon is invalid";
            }
            
        })
    }
}


displayCart();
increaseQuantity();
decreaseQuantity();
couponDiscount();
continueShopping();
orderDone();


