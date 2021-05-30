<?php
    session_start();

    //check if the cart is empty or does not exist
    if(!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0){
        header("location: /storePages/store/product/cate1prod1.php?id=1");
    }

    require $_SERVER["DOCUMENT_ROOT"] . "/storePages/store/helper/product_related.php";
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Shopping cart</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Shopping cart for orders">
        <meta name="keywords" content="Shopping product cart placement store">
        <meta name="author" content="Team Developers">

        <link rel="stylesheet" href="/style/Store/common.css">
        <link rel="stylesheet" href="/style/cookie-consent/cookie-consent.css">
        <link rel="stylesheet" href="/style/Store/orderPlacement/orderPlacement.css">
        <link rel="stylesheet" href="/style/cookie-consent/cookie-consent.css">

    <body>
        <div class="boxWrapper">
            <?php
                require $_SERVER["DOCUMENT_ROOT"] . "/storePages/store/components/navbar.php";
                get_navbar();
            ?>
    
            <main>
                <section class="introduction">
                    <div><span class="title">Shopping cart</span> <span class="itemnumber"></span></div>
                </section>
    
                <section class="storeCart">
                    <ul class="product-list">

                    <!--php section-->
            <?php
                $totalCost = 0;

                foreach($_SESSION['cart'] as $product_id => $quanity){
                    $information = get_product_information($product_id);

                    $totalCost += (float)$information[2] * $quanity;

                    if(count($information) > 0){
                        $output = <<<"HTML"
                            <li class="product">
                                <div class="prodImg"><img src="/resources/images/Product Image/product_1.jpeg" alt="$information[1] on display"></div>
                                <div class="prodContent">
                                    <div class="prodDesc">
                                        <div class="prodName">
                                            <h3>$information[1]</h3>    
                                        </div>
                                        <div class="productPrice">
                                            \$$information[2]
                                        </div>
                                    </div>

                                        <div class="prodQuanity">
                                            <ion-icon class="adjustBtn decreaseQuantity" name="remove-outline"></ion-icon>
                                            <input type="tel" id="quanity" name="quanity" maxlength="10" readonly value="$quanity">
                                            <ion-icon class="adjustBtn increaseQuantity" name="add-outline"></ion-icon>
                                        </div>
                                </div>
                            </li>
                        HTML;

                        echo $output;
                    }
                }
            ?>

            <!--php section-->
                    </ul>
                </section>
    
                <section class="checkout">
                    <?php 
                        //apply coupon if possible
                        $error_mes = "";
                        if(isset($_POST['coupon'])){
                            $coupon = $_POST['coupon'];
                            if($coupon == "COSC2430-HD") {
                                $totalCost *= 80/100;
                                $error_mes = "coupon used: 20% reduction";
                            }
                            else if($coupon == "COSC2430-DI") {
                                $totalCost *= 90/100;
                                $error_mes = "coupon used: 10% reduction";
                            }
                            else $error_mes = "Coupon code is invalid";
                        }
                    ?>

                    <div class="summary">
                            <span class="priceText">Total amount: </span>
                            <span class="priceTotalText"><?php echo $totalCost; ?></span>
                    </div>

                    <form action="" method="POST" class="checkout_coupon">
                        <input type="text" name="coupon" id="coupon" placeholder="Coupon code" />
                        <button type="submit" class="couponBtn">Apply</button>
                    </form>
                    <?php 
                    //display the error/success message
                        if($error_mes != ""){
                            $output = <<<"HTML"
                                <div class="errorCoupon">
                                    $error_mes
                                </div>
                            HTML;
                            echo $output;
                        }
                    ?>
                    
                    <form action="processOrder.php" method="POST" class="options">
                        <button type="submit" name="continue" value="1" class="continueBtn">Continue Shopping</button>
                        <button type="submit" name="process" value="1" class="orderBtn">Order</button>
                    </form>
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
                get_footer();
            ?>
        </div>
        <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
        <script src="/scripts/store_index.js"></script>
        <script src="/scripts/cookie-consent.js"></script>
        <script src="/scripts/cart_quantity.js"></script>
        <!-- <script src="/scripts/store_order_placement.js"></script> -->
    </body>
</html>