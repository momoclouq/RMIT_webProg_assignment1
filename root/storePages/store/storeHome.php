<?php
    //redirect
    if (!$_GET['id']) header('location: /storePages/store/storeHome.php?id=1');

    //process file first
    function cmp_by_time_reverse($prod1, $prod2){
        $time1 = DateTime::createFromFormat('Y-m-d H:i:s', substr($prod1[3], 0, -1));
        $time2 = DateTime::createFromFormat('Y-m-d H:i:s', substr($prod2[3], 0, -1));

        if ($time1 == $time2) return 0;
        if ($time1 > $time2) return -1;
        if ($time1 < $time2) return 1;
    }

    //access file
    $file = fopen("../../../files/given_data/products.csv", "r");
    flock($file, LOCK_SH);
    $title = fgets($file);
    $foundStore = false;

    //get all items related to the store
    $all_product_in_store = [];
    while($line = fgets($file)){
        //split the data
        $items = explode(",", $line);

        if ($items[4] == $_GET['id']){
            $all_product_in_store[] = $items;
            $foundStore = true;
        }
    }
    flock($file, LOCK_UN);
    fclose($file);

    //if store does not exist, redirect to the first store
    if (!$foundStore) header('location: /storePages/store/storeHome.php?id=1');

    //sort by time descending
    usort($all_product_in_store, "cmp_by_time_reverse");
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Store 1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Store home page">
        <meta name="keywords" content="home store product detail price pictures">
        <meta name="author" content="Team Developers">

        <link rel="stylesheet" href="/style/Store/common.css">
        <link rel="stylesheet" href="/style/cookie-consent/cookie-consent.css">
        <link rel="stylesheet" href="/style/Store/storeHome.css">
    </head>

    <body>
        <div class="boxWrapper">
            <?php 
                require "./components/navbar.php";
                get_navbar($_GET['id']);
            ?>
    
            <main>
                <section id="newProductList">
                    <div class="listHeader">New Products</div>
                    <div class="listScrollMenu">
                        <?php 
                            //print out 5 most recent items
                            for ($i = 0; $i < 5; $i++){
                                $product = $all_product_in_store[$i];
                        
                                $output = <<<"HTML"
                                    <div class="listScrollMenu_item">
                                        <a href="/storePages/store/product/cate1prod1.php?id=$product[0]">
                                        <div class="listScrollMenu_item_icon">
                                            <img src="/resources/images/product.jpeg">
                                        </div>
                                        <div class="listScrollMenu_item_name">
                                            $product[1]
                                        </div>
                                        <div class="listScrollMenu_item_price_info">
                                            <div class="listScrollMenu_item_store">
                                                fake description
                                            </div>
                                            <div class="listScrollMenu_item_price">
                                                $product[2]\$
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                HTML;
                        
                                echo $output;
                            }
                        ?>
                    </div>
                </section>

                <section id="featureProductList">
                    <div class="listHeader">Featured Products</div>
                    <div class="list_display_products">
                        <?php
                            //print out all featured products
                            foreach($all_product_in_store as $items){
                                if ($items[6] == true) {
                                    $output = <<<"HTML"
                                        <div class="list_display_product_card">
                                            <a href="/storePages/store/product/cate1prod1.php?id=$items[0]">
                                            <div class="list_display_product_icon">
                                                <img src="/resources/images/Product Image/product_1.jpeg" alt="$items[1] pic">
                                            </div>
                                            <div class="list_display_product_content">
                                                <div class="list_display_product_content_title">
                                                        $items[1] 
                                                </div>
                                                <div class="list_display_product_content_description">
                                                    fake description
                                                </div>
                                                <div>
                                                    $items[2]\$
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                    HTML;

                                    echo $output;
                                }
                            }
                        ?>
                </section>
                <div class="cookie-container">
                    <p>
                        We use cookie to store the data given to us stored locally on your machine to give you the best experience the site. To find out more, please read our <a href="mallPages/privacy.html">privacy policy</a>.
                    </p>
                    <button class="cookie-butn">Okay</button>
                </div>
            </main>
    
            <?php
                require "./components/footer.php";
                get_footer($_GET['id']);
            ?>
        </div>
        
        <script src="/scripts/store_index.js"></script>
        <script src="/scripts/cookie-consent.js"></script>
        <script src="/scripts/cart_quantity.js"></script>
    </body>
</html>