<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="item 1 from store">
      <meta name="keywords" content="item product store">
      <meta name="author" content="Team Developers">
    <title>Product 2</title>

    <link rel="stylesheet" href="../../../style/Store/common.css">
    <link rel="stylesheet" href="../../../style/cookie-consent/cookie-consent.css">
    <link rel="stylesheet" href="../../../style/mall/Product/product.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
</head>
<body>
  <div class="boxWrapper">
    <header class="mallHeader">
      <nav>
          <ul class="menu">
              <li class="logo"><a href="../storeHome.html">Store 1</a></li>
              <li class="item mallName"><a href="../storeHome.html">Home</a></li>

              <li class="item"><a href="../storeAboutUs.html">About us</a></li>
              <li class="item subMenu2"><a href="#">Products</a></li>
              <li class="item item2"><a href="../storeBrowseCategory.html">Browse By Category</a></li>
              <li class="item item2"><a href="../storeBrowseTime.html">Browse By Created time</a></li>
              <li class="item lastItem"><a href="../storeContact.html">Contact</a></li>
              <li class="item account_mall_nav"><a>My Account</a></li>
              <li class="item cart_mall_nav"><a href="../storeOrderPlacement.html">Cart<span id="cart_nav"></span></a></li>
              <li class="toggle"><span class="bars"></span><li>
          </ul>
      </nav>
    </header>

        <main>
          
          <section id="listDetail">
            
            <div class="card">
              <div class="card_img">
                  <img src="../../../resources/images/Product Image/product_2.jpeg" alt="Tailored Jeans">
              </div>
                
              <div class="card_content">

                  <div class="card_content_product_title">
                    <h3>Colorful Running Shoes</h3>
                    
                  </div>

                  <div class="card_content_product_price">
                    $200.00
                  </div>

                  <div class="card_content_product_description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste nesciunt totam similique quasi commodi tempora ab earum! Dignissimos, accusantium. Repellat delectus rerum, illum nam accusantium nostrum nemo tempore. Itaque fugiat animi omnis enim recusandae, labore vero veniam ullam numquam esse totam molestiae explicabo dolorum tenetur quia fugit praesentium id laudantium?     
                  </div>

                  <div class="card_content_buying">
                    <div class="card_content_buying_option">
                      <select>
                        <option>4 US</option>
                        <option>5 US</option>
                        <option>6 US</option>
                        <option>7 US</option>
                        <option>8 US</option>
                        <option>9 US</option>
                        <option>10 US</option>
                        <option>11 US</option>
                        <option>12 US</option>
                      </select>
                      <input type="number" min="1" placeholder="Quantity" id="product2_quantity" value="1">
                      <div class="card_content_buying_button">
                        <button id="add_product_to_cart2">Add to Cart</button> 
                        <button id="buy_now_product2">Buy Now</button>
                      </div>
                    </div>
                    
                  </div>
                  
            </div>
                
          </section>
            
          <section class="recommended_items">
              <div class="recommended_items_heading">
                <h3>Recommended Items</h3>
              </div>
              
              <div class="recommended_items_container">
                <div class="grid-item">
                  <a href="cate1prod1.html">
                    <div class="grid-item-image">
                      <img src="../../../resources/images/Product Image/product_1.jpeg" alt="recommend1" class="recommendation">
                    </div>
                    <div class="grid-item-title">
                      <p id="ItemDesc">Blue Flannel (Real)</p>
                    </div>
                  </a>
                </div>

                <div class="grid-item">
                  <a href="cate1prod1.html" >
                    <div class="grid-item-image">
                      <img src="../../../resources/images/Product Image/product_4.jpeg" alt="recommend1" class="recommendation">
                    </div>
                    <div class="grid-item-title">
                      <p id="ItemDesc">Soft Teddy Bear</p>
                    </div>
                  </a>
                </div>

                <div class="grid-item">
                  <a href="cate1prod1.html" >
                    <div class="grid-item-image">
                      <img src="../../../resources/images/Product Image/product_5.jpeg" alt="recommend1" class="recommendation">
                    </div>
                    <div class="grid-item-title">
                      <p id="ItemDesc">Colorful Phone</p>
                    </div>
                  </a>
                </div>
              </div>
          </section>
          <div class="cookie-container">
            <p>
                We use cookie to store the data given to us stored locally on your machine to give you the best experience the site. To find out more, please read our <a href="mallPages/privacy.html">privacy policy</a>.
            </p>
            <button class="cookie-butn">Okay</button>
          </div>

        </main>

        <footer class="mallFooter">
          <nav>
            <div class="FooterRow">
              <div class="FooterColumn">
              <div class="footerheading">Navigation</div>
              <ul><a href="../../store/storeHome.html">Home</a></ul>
              <ul><a href="../../store/storeContact.html">Contact</a></ul>
            </div>
            <div class="FooterColumn">
              <div class="footerheading">Info</div>
              <ul><a href="../storeAboutUs.html">About us</a></ul>
              <ul><a href="../storeCopyright.html">CopyRight</a></ul>
            </div>
            <div class="FooterColumn">
              <div class="footerheading">Back To Mall</div>
              <ul><a href="../../../index.html">Home</a></ul>
              <ul><a href="../../../mallPages/BrowseStoreCategory.html">Browse</a></ul>
              <ul><a href="../../../mallPages/contact.html">Mall Support</a></ul>
              </div>
            </div>
          </nav>
        </footer>
        <script src="../../../scripts/cookie-consent.js"></script>
        <script src="../../../scripts/store_index.js"></script>
        <script src="../../../scripts/cart_quantity.js"></script>
        <script src="../../../scripts/product-detail2.js"></script>
        
  </div>

  
</body>
</html>