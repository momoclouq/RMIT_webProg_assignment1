<?php
    session_start();
    //if the product does not exist redirect to the first item
    require $_SERVER["DOCUMENT_ROOT"] . "/storePages/store/helper/product_related.php";
    $product_main = get_product_information($_GET['id']);
    if(!isset($_GET["id"]) || count($product_main) == 0) header('location: /storePages/store/product/cate1prod1.php?id=1');    

    //initialize cart
    if(!isset($_SESSION['cart'])) $_SESSION['cart'] = [];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="item 1 from store">
      <meta name="keywords" content="item product store">
      <meta name="author" content="Team Developers">
    <title>Product 1</title>

    <link rel="stylesheet" href="/style/Store/common.css">
    <link rel="stylesheet" href="/style/mall/Product/product.css">
    <link rel="stylesheet" href="/style/cookie-consent/cookie-consent.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
</head>
<body>
  <div class="boxWrapper">
        <?php
            require $_SERVER["DOCUMENT_ROOT"] . "/storePages/store/components/navbar.php";
            get_navbar($product_main[4]);
        ?>

        <main>

          <?php
              //success message pop up - removing pop up still needs javascript
              if(isset($_GET["success"])){
                $successMes = <<<"HTML"
                    <div class="successPopup">
                      Item added to cart
                    </div>
                HTML;

                echo $successMes;
                echo $_SESSION['cart'];
              }
          ?>
          
          <section id="listDetail">
            
            <div class="card">
              <div class="card_img">
                  <img src="/resources/images/Product Image/product_1.jpeg" alt="Blue Flannel">
              </div>
                
              <div class="card_content">

                  <div class="card_content_product_title">
                    <h3><?php echo $product_main[1]; ?></h3>
                    
                  </div>

                  <div class="card_content_product_price">
                    <?php echo "\$$product_main[2]"; ?>
                  </div>

                  <div class="card_content_product_description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste nesciunt totam similique quasi commodi tempora ab earum! Dignissimos, accusantium. Repellat delectus rerum, illum nam accusantium nostrum nemo tempore. Itaque fugiat animi omnis enim recusandae, labore vero veniam ullam numquam esse totam molestiae explicabo dolorum tenetur quia fugit praesentium id laudantium?     
                  </div>

                  <div class="card_content_buying">
                      <form action="/storePages/store/helper/cart_related.php" method="post" class="card_content_buying_option">
                        <select>
                          <option>XL</option>
                          <option>L</option>
                          <option>M</option>
                          <option>S</option>
                        </select>
                        <input type="number" name="quanity" min="1" placeholder="Quantity" value="1" id="product1_quantity">
                        <input type="hidden" id="productId" name="id" value=<?php echo $_GET['id'] ?>$>
                        <div class="card_content_buying_button">
                          <button type="submit" name="add1" value="1" id="add_product_to_cart1">Add to Cart</button> 
                          <button type="submit" name="addX" value="1" id="buy_now_product1">Buy Now</button>
                        </div>
                      </form>
                  </div>
            </div>
                
          </section>
            
          <section class="recommended_items">
              <div class="recommended_items_heading">
                <h3>Recommended Items</h3>
              </div>
              
              <div class="recommended_items_container">
                <div class="grid-item">
                  <a href="cate1prod2.html">
                    <div class="grid-item-image">
                      <img src="/resources/images/Product Image/product_2.jpeg" alt="recommend1" class="recommendation">
                    </div>
                    <div class="grid-item-title">
                      <p id="ItemDesc">Colorful Running Shoe (Real)</p>
                    </div>
                  </a>
                </div>

                <div class="grid-item">
                  <a href="cate1prod2.html" >
                    <div class="grid-item-image">
                      <img src="/resources/images/Product Image/product_4.jpeg" alt="recommend1" class="recommendation">
                    </div>
                    <div class="grid-item-title">
                      <p id="ItemDesc">Soft Teddy Bear</p>
                    </div>
                  </a>
                </div>

                <div class="grid-item">
                  <a href="cate1prod1.html" >
                    <div class="grid-item-image">
                      <img src="/resources/images/Product Image/product_5.jpeg" alt="recommend1" class="recommendation">
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

        <?php
            require $_SERVER["DOCUMENT_ROOT"] . "/storePages/store/components/footer.php";
            get_footer($product_main[4]);
        ?>
        <script src="/scripts/cookie-consent.js"></script>
        <script src="/scripts/store_index.js"></script>
        <script src="/scripts/product-detail1.js"></script>
        <script src="/scripts/cart_quantity.js"></script>
  </div>
</body>
</html>
