<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Thank you page</title>
        <meta name="description" content="Thank you and summary page for ordering">
        <meta name="keywords" content="summary order code thank">
        <meta name="author" content="Team Developers">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="../../style/Store/common.css">
        <link rel="stylesheet" href="../../style/Store/orderPlacement/orderThank.css">
        <link rel="stylesheet" href="../../style/cookie-consent/cookie-consent.css">
    <body>
        <div class="boxWrapper">
        <?php
                require $_SERVER["DOCUMENT_ROOT"] . "/storePages/store/components/navbar.php";
                get_navbar();
            ?>
    
            <main>
                <section class="thankMessage">
                    <div class="thankImg"><img src="../../resources/images/success.png" alt="purchase success icon"></div>
                    <div class="thankWord">Thank you for your purchase</div>
                    <div class="line"></div>
                </section>
    
                <section class="orderDetails">
                    
                    <div>Your order tracking code:</div>
                    <div class="orderCode">XKTAIFLAMFK</div>
                    <div>You can visit your order <a href="#">here</a> </div>
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

        <script src="/scripts/store_index.js"></script>
        <script src="/scripts/cookie-consent.js"></script>
        <!-- <script src="/scripts/cart_quantity.js"></script> -->
    </body>
</html>