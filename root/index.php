<?php
    //process file first
    function cmp_by_time_reverse($prod1, $prod2){
        $time1 = DateTime::createFromFormat('Y-m-d H:i:s', substr($prod1[3], 0, -1));
        $time2 = DateTime::createFromFormat('Y-m-d H:i:s', substr($prod2[3], 0, -1));

        if ($time1 == $time2) return 0;
        if ($time1 > $time2) return -1;
        if ($time1 < $time2) return 1;
    }

    //access file
    $file = fopen("../files/given_data/products.csv", "r");
    flock($file, LOCK_SH);
    $title = fgets($file);


    //get all items related to the store
    $all_product_in_store = [];
    while($line = fgets($file)){
        //split the data
        $items = explode(",", $line);
         $all_product_in_store[] = $items;
           
    }

    flock($file, LOCK_UN);
    fclose($file);

  

    //sort by time descending
    usort($all_product_in_store, "cmp_by_time_reverse");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Home page mall">
    <meta name="keywords" content="Homepage stores products services buy sell sale">
    <meta name="author" content="Team Developers">
    <title>Mall Homepage</title>

    <link rel="stylesheet" href="style/mall/common.css">
    <link rel="stylesheet" href="style/cookie-consent/cookie-consent.css">
    <link rel="stylesheet" href="style/mall/index/index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
</head>
<body>
    <div class ="boxWrapper">
        <?php
            require "./mallPages/components/navbar.php";
        ?>
    
        <main>
            <section id="newStoreList">
                <div class="listHeader">New stores</div>

                <div class="listScrollMenu">
                    <?php 
                        if(!is_array($all_stores)){
                            $all_stores = [];
                        }

                        $store_quantity = count($all_stores);
                        //print out 10 most recent items
                        for ($i = 0; $i < $store_quantity; $i++){
                            $store = $$all_stores[$i];
                       
                            $output = <<<"HTML"
                                        <div class="listScrollMenu_item">
                                            <a href="storePages/store/storeHome.php?id=$store[0]">
                                            <div class="listScrollMenu_item_icon">
                                                <img src="resources/images/Store Image/store_2.jpeg">
                                            </div>
                                            <div class="listScrollMenu_item_name">
                                                $store[1]
                                            </div>
                                            </a> 
                                        </div>    
                                    HTML;
                            
                            echo $output;
                            if($i == 10){
                                break;
                            }
                        }
                    ?> 
                </div>
            </section>
    
            <section id="newProductList">
                <div class="listHeader">New Products</div>
                <div class="listScrollMenu">
                    <?php 

                        if(!is_array($all_product_in_store)){
                            $all_product_in_store = [];
                        }

                        $item_quantity = count($all_product_in_store);
                        //print out 10 most recent items
                        for ($i = 0; $i < $item_quantity; $i++){
                            $product = $all_product_in_store[$i];
                       
                            $output2 = <<<"HTML"
                                        <div class="listScrollMenu_item">
                                            <a href="/storePages/store/product/cate1prod1.php?id=$product[0]">
                                            <div class="listScrollMenu_item_icon">
                                                <img src="resources/images/Product Image/product_1.jpeg">
                                            </div>
                                            <div class="listScrollMenu_item_name">
                                                $product[1]
                                            </div>
                                            <div class="listScrollMenu_item_price_info">
                                                <div class="listScrollMenu_item_store">
                                                    $product[4]
                                                </div>
                                                <div class="listScrollMenu_item_price">
                                                    $product[2]
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                    HTML;
                            
                            echo $output2;
                            if($i == 10){
                                break;
                            }
                        }
                    ?>
                </div>
            </section>

            <section id="newStoreList">
                <div class="listHeader">Featured Stores</div>
                <div class="listScrollMenu">
                    <div class="list_display_store_card">
                        <a href="storePages/store/storeHome.html">
                        <div class="list_display_store_icon">
                            <img src="resources/images/Store Image/store1.jpeg" alt="Louis Vuition">
                        </div>
                        <div class="list_display_store_content">
                            <div class="list_display_store_content_title">
                                    Louis Vuition
                            </div>
                            <div class="list_display_store_content_description">
                                Luxury Clothing
                            </div>
                        </div>
                        </a>
                    </div>

                    <div class="list_display_store_card">
                        <a href="storePages/store/storeHome.html">
                        <div class="list_display_store_icon">
                            <img src="resources/images/Store Image/store_2.jpeg" alt="Gucci">
                        </div>
                        <div class="list_display_store_content">
                            <div class="list_display_store_content_title">
                                    Gucci
                            </div>
                            <div class="list_display_store_content_description">
                                Luxury Clothing
                            </div>
                        </div>
                        </a>
                    </div>


                    <div class="list_display_store_card">
                        <a href="storePages/store/storeHome.html">
                        <div class="list_display_store_icon">
                            <img src="resources/images/Store Image/store_3.jpeg" alt="IKEA">
                        </div>
                        <div class="list_display_store_content">
                            <div class="list_display_store_content_title">
                                    IKEA
                            </div>
                            <div class="list_display_store_content_description">
                                Home Furniture
                            </div>
                        </div>
                        </a>
                    </div>


                    <div class="list_display_store_card">
                        <a href="storePages/store/storeHome.html">
                        <div class="list_display_store_icon">
                            <img src="resources/images/Store Image/store_4.png" alt="Best Buy">
                        </div>
                        <div class="list_display_store_content">
                            <div class="list_display_store_content_title">
                                    Best Buy
                            </div>
                            <div class="list_display_store_content_description">
                                Gadget Retailer
                            </div>
                        </div>
                        </a>
                    </div>


                    <!-- <div class="list_display_store_card">
                        <a href="storePages/store/storeHome.html">
                        <div class="list_display_store_icon">
                            <img src="resources/images/Store Image/store5.jpeg" alt="h&M">
                        </div>
                        <div class="list_display_store_content">
                            <div class="list_display_store_content_title">
                                    H&M
                            </div>
                            <div class="list_display_store_content_description">
                                Fast Fashion
                            </div>
                        </div>
                        </a>
                    </div>


                    <div class="list_display_store_card">
                        <a href="storePages/store/storeHome.html">
                        <div class="list_display_store_icon">
                            <img src="resources/images/Store Image/store_6.png" alt="Zara">
                        </div>
                        <div class="list_display_store_content">
                            <div class="list_display_store_content_title">
                                    Zara
                            </div>
                            <div class="list_display_store_content_description">
                                Fast Fashion
                            </div>
                        </div>
                        </a>
                    </div> -->


                    <!-- <div class="list_display_store_card">
                        <a href="storePages/store/storeHome.html">
                        <div class="list_display_store_icon">
                            <img src="resources/images/Store Image/store_7.png" alt="Bosch">
                        </div>
                        <div class="list_display_store_content">
                            <div class="list_display_store_content_title">
                                    Bosch
                            </div>
                            <div class="list_display_store_content_description">
                                Electronics Store
                            </div>
                        </div>
                        </a>
                    </div> -->


                    <!-- <div class="list_display_store_card">
                        <a href="storePages/store/storeHome.html">
                        <div class="list_display_store_icon">
                            <img src="resources/images/Store Image/store_8.png" alt="Apple">
                        </div>
                        <div class="list_display_store_content">
                            <div class="list_display_store_content_title">
                                    Apple
                            </div>
                            <div class="list_display_store_content_description">
                                Electronics Store
                            </div>
                        </div>
                        </a>
                    </div> -->
                </div>
                
            </section>
    
            
            <section id="featureProductList">
                <div class="listHeader">Featured Products</div>
                <div class="listScrollMenu">
                    <div class="list_display_products">
                        <div class="list_display_product_card">
                            <a href="storePages/store/product/cate1prod1.html">
                            <div class="list_display_product_icon">
                                <img src="resources/images/Product Image/product_1.jpeg" alt="Flannel Shirt">
                            </div>
                            <div class="list_display_product_content">
                                <div class="list_display_product_content_title">
                                        Blue Flannel Shirt
                                </div>
                                <div class="list_display_product_content_description">
                                    by H&M (Real)
                                </div>
                            </div>
                            </a>
                        </div>
    
                        <div class="list_display_product_card">
                            <a href="storePages/store/product/cate1prod2.html">
                            <div class="list_display_product_icon">
                                <img src="resources/images/Product Image/product_2.jpeg" alt="Colorful Running Shoes">
                            </div>
                            <div class="list_display_product_content">
                                <div class="list_display_product_content_title">
                                    Colorful Running Shoe
                                </div>
                                <div class="list_display_product_content_description">
                                    by Nike (Real)
                                </div>
                            </div>
                            </a>
                        </div>
    
                        <div class="list_display_product_card">
                            <a href="storePages/store/product/cate1prod1.html">
                            <div class="list_display_product_icon">
                                <img src="resources/images/Product Image/product_3.webp" alt="Black Running Shoe">
                            </div>
                            <div class="list_display_product_content">
                                <div class="list_display_product_content_title">
                                    Black Running Shoe
                                </div>
                                <div class="list_display_product_content_description">
                                    by Nike
                                </div>
                            </div>
                            </a>
                        </div>
    
                        <!-- <div class="list_display_product_card">
                            <a href="storePages/store/product/cate1prod1.html">
                            <div class="list_display_product_icon">
                                <img src="resources/images/Product Image/product_4.jpeg" alt="Colorful Phone Toy">
                            </div>
                            <div class="list_display_product_content">
                                <div class="list_display_product_content_title">
                                    Colorful Phone Toy"
                                </div>
                                <div class="list_display_product_content_description">
                                    by H&M
                                </div>
                            </div>
                            </a>
                        </div>
    
                        <div class="list_display_product_card">
                            <a href="storePages/store/product/cate1prod1.html">
                            <div class="list_display_product_icon">
                                <img src="resources/images/Product Image/product_5.jpeg" alt="Teddy Bear">
                            </div>
                            <div class="list_display_product_content">
                                <div class="list_display_product_content_title">
                                        Cute Teddy Bear
                                </div>
                                <div class="list_display_product_content_description">
                                    by H&M
                                </div>
                            </div>
                            </a>
                        </div> -->
    
                        <!-- <div class="list_display_product_card">
                            <a href="storePages/store/product/cate1prod1.html">
                            <div class="list_display_product_icon">
                                <img src="resources/images/Product Image/product_6.jpeg" alt="Corn Peeler">
                            </div>
                            <div class="list_display_product_content">
                                <div class="list_display_product_content_title">
                                        Corn Peeler
                                </div>
                                <div class="list_display_product_content_description">
                                    by BestBuy
                                </div>
                            </div>
                            </a>
                        </div> -->
                </div>
                
            </section>

            
        </main>
        <div class="cookie-container">
            <p>
                We use cookie to store the data given to us stored locally on your machine to give you the best experience the site. To find out more, please read our <a href="mallPages/privacy.html">privacy policy</a>.
            </p>
            <button class="cookie-butn">Okay</button>
        </div>
    
        <?php
            require "./mallPages/components/footer.php";
        ?>
    </div>

    <script src="scripts/cookie-consent.js"></script>
    <script src="scripts/mall_index.js"></script>
</body>
</html>