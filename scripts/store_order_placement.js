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
            <li class="product">
                <div class="prodImg"><img src="../../resources/images/Product Image/${item.tag}.jpeg" alt="${item.name}"></div>
                <div class="prodContent">
                    <div class="prodDesc">
                        <div class="prodName"><a href="product/cate1prod1.html">${item.name}</a></div>
                        <div class="prodPrice">$${item.price}.00</div>
                    </div>
                    <div class="prodQuanity">
                        <button>Remove</button>
                        <label for="quanity">Quanity <input type="number" id="quanity" name="quanity" value="${item.inCart}"></label>
                    </div>
                </div>
            </li>
            `
        })

        totalPriceElement.innerHTML += `$${totalCost}.00`;

    }
}

displayCart();