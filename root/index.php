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
    $all_product = [];
    while($line = fgets($file)){
        //split the data
        $items = explode(",", $line);
        $all_product[] = $items;
           
    }

    flock($file, LOCK_UN);
    fclose($file);

    $file = fopen("../files/given_data/stores.csv", "r");
    flock($file, LOCK_SH);
    $title = fgets($file);


    //get all items related to the store
    $all_store = [];
    while($line = fgets($file)){
        //split the data
        $items = explode(",", $line);
        $all_store[] = $items;
           
    }

    flock($file, LOCK_UN);
    fclose($file);

  

    //sort by time descending
    usort($all_product, "cmp_by_time_reverse");
    usort($all_store, "cmp_by_time_reverse");
    
  
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
                        if(!is_array($all_store)){
                            $all_store = [];
                        }

                        $store_quantity = count($all_store);
                        //print out 10 most recent items
                        for ($j = 0; $j < $store_quantity; $j++){
                            $store = $all_store[$j];
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
                            if($j == 10){
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

                        if(!is_array($all_product)){
                            $all_product= [];
                        }

                        $item_quantity = count($all_product);
                        //print out 10 most recent items
                        for ($i = 0; $i < $item_quantity; $i++){
                            $product = $all_product[$i];
                       
                            $output2 = <<<"HTML"
                                        <div class="listScrollMenu_item">
                                            <a href="/storePages/store/product/cate1prod1.php?id=$product[0]">
                                            <div class="listScrollMenu_item_icon">
                                                <img src="resources/images/Product Image/product_5.jpeg">
                                            </div>
                                            <div class="listScrollMenu_item_name">
                                                $product[1]
                                            </div>
                                            <div class="listScrollMenu_item_price_info">
                                                <div class="listScrollMenu_item_price">
                                                    $product[2]\$
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
                    <?php
                        if(!is_array($all_store)){
                            $all_store = [];
                        }
                        
                        $store_quantity = count($all_store);
                        $count = 0;
                        for ($j = 0; $j < $store_quantity; $j++){
                            $store = $all_store[$j];
                            
                            if(strcasecmp($store[4], 'TRUE') === 1){
                                $output = <<<"HTML"
                                <div class="list_display_store_card">
                                    <a href="storePages/store/storeHome.php?id=$store[0]">
                                    <div class="list_display_store_icon">
                                        <img src="resources/images/Store Image/store_2.jpeg" alt="$store[1]">
                                    </div>
                                    <div class="list_display_store_content">
                                        <div class="list_display_store_content_title">
                                                $store[1]
                                        </div>
                                        <div class="list_display_store_content_description">
                                            Fake Clothing
                                        </div>
                                    </div>
                                    </a>
                                </div>  
                            HTML;
                            $count++;    
                            echo $output;
                            if($count == 10){
                                break;
                            }
                            } 
                        }
                    ?>
                </div>
                
            </section>
    
            
            <section id="featureProductList">
                <div class="listHeader">Featured Products</div>
                <div class="listScrollMenu">
                    <div class="list_display_products">
                        <?php
                            if(!is_array($all_product)){
                                $all_product = [];
                            }
                            
                            $item_quantity = count($all_product);
                            $count = 0;
                            for ($j = 0; $j < $item_quantity; $j++){
                                $product = $all_product[$j];
                                
                                if(strcasecmp($product[5], 'TRUE') === 0){
                                    
                                    $output = <<<"HTML"
                                        <div class="list_display_product_card">
                                            <a href="/storePages/store/product/cate1prod1.php?id=$product[0]">
                                            <div class="list_display_product_icon">
                                                <img src="resources/images/Product Image/product_1.jpeg" alt="$product[1]">
                                            </div>
                                            <div class="list_display_product_content">
                                                <div class="list_display_product_content_title">
                                                    $product[1]
                                                </div>
                                                <div class="list_display_product_content_description">
                                                    $product[2]\$
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                    HTML;
                                    $count++;    
                                    echo $output;
                                    if($count == 10){
                                        break;
                                    }
                                }
                            } 
                            
                        ?>
                        
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