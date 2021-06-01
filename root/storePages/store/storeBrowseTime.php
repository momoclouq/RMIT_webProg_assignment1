<?php
    session_start();
    //process file first
    function cmp_by_time_newest($prod1, $prod2){
        $time1 = DateTime::createFromFormat('Y-m-d H:i:s', substr($prod1[3], 0, -1));
        $time2 = DateTime::createFromFormat('Y-m-d H:i:s', substr($prod2[3], 0, -1));

        if ($time1 == $time2) return 0;
        if ($time1 > $time2) return -1;
        if ($time1 < $time2) return 1;
    }

    function cmp_by_time_oldest($prod1, $prod2){
        $time1 = DateTime::createFromFormat('Y-m-d H:i:s', substr($prod1[3], 0, -1));
        $time2 = DateTime::createFromFormat('Y-m-d H:i:s', substr($prod2[3], 0, -1));

        if ($time1 == $time2) return 0;
        if ($time1 > $time2) return 1;
        if ($time1 < $time2) return -1;
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

    $mapping = [
        'new' => 'cmp_by_time_newest',
        'old' => 'cmp_by_time_oldest'
    ];

    $sort_method = 'cmp_by_time_newest';
    

    if(isset($_GET['sort']) && !empty($_GET['sort'])){
        $sort_method = $mapping[$_GET['sort']];
    }


    if(!is_array($all_product_in_store)){
        $all_product_in_store = [];
    }


    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }

    usort($all_product_in_store, $sort_method);
    $item_quantity = count($all_product_in_store);
    $product_per_page = 2;
    $offset = ($page - 1) * $product_per_page;
  
    $total_pages = ceil(count($all_product_in_store)/$product_per_page);

    $items_per_page = array_slice($all_product_in_store, $offset, 2);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Store Product By Time</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/style/Store/common.css">
        <link rel="stylesheet" href="/style/Store/storeBrowseCatergoryTime.css">
        <link rel="stylesheet" href="/style/cookie-consent/cookie-consent.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
    </head>

    <body>
        <div class="boxWrapper">
            <?php
                require $_SERVER["DOCUMENT_ROOT"] . "/storePages/store/components/navbar.php";
                get_navbar($_GET['id']);
            ?>
    
    <main>
                <div class="main-content">
    
                    <div class="left-container">
                        <form method="GET">
                            <div class="catergory">
                                <h3>Sort by time</h3>
                                <ul class="sort">
                                    <li><a href="?id=<?=$_GET['id'];?>&sort=new">Newest</a></li>
                                    <li><a href="?id=<?=$_GET['id'];?>&sort=old">Oldest</a></li>
                                </ul>

                            </div>            
                        </form>
                    </div>    

                        <div class="product-list">
                            <!--a random list of products-->
                            <?php
                                foreach($items_per_page as $item){
                                    $hype_price = doubleval($item[2]) + 500;
                                    $output = <<<"HTML"
                                        <div class="card">
                                            <a href="/storePages/store/product/cate1prod1.php?id=$item[0]">
                                                <div class="product-imgage">
                                                    <img src="../../resources/images/Product Image/product_1.jpeg" alt="Shirt">
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-text">
                                                        <div class="product-title">
                                                            <a href="/storePages/store/product/cate1prod1.php?id=$item[0]">$item[1]</a>
                                                        </div>
                                                        <div class="product-description">Fake description</div>
                                                    </div>
                                                    <div class="product-rating">
                                                        <span>&#9733</span>
                                                            <span>&#9733</span>
                                                            <span>&#9733</span>
                                                            <span>&#9733</span>
                                                            <span>&#9734</span>
                                                            <span class="review-number">(400)</span>
                                                    </div>
                                                    <div class="price-row">
                                                        <p class="product-price"><span class="dollar">$</span>$item[2]</p>
                                                        <p class="product-price">\$($hype_price)</p>
                                                    </div>
                                                    
                                                </div>
                                            </a>
                                        </div>
                                    HTML;
                                    
                                    echo $output;

                                }
                            ?>
                        </div>

                        <div class="pagination_container">
                            <ul>
                                <li><a  class="pagination" href="?id=<?=$_GET['id'];?>&page=1&sort=<?=$_GET['sort'];?>">First</a></li>
                                <li class="<?php if($page <= 1){ echo 'disabled'; } ?>">
                                    <a  class="pagination" href="<?php if($page <= 1){ echo '#'; } else { echo "?id=" . $_GET['id']. "&page=".($page - 1)."&sort=" . $_GET['sort']; } ?>">Prev</a>
                                </li>
                                <li class="<?php if($page >= $total_pages){ echo 'disabled'; } ?>">
                                    <a class="pagination"href="<?php if($page >= $total_pages){ echo '#'; } else { echo "?id=" . $_GET['id']. "&page=".($page + 1)."&sort=" . $_GET['sort']; } ?>">Next</a>
                                </li>
                                <li><a  class="pagination" href="?id=<?=$_GET['id'];?>&page=<?php echo $total_pages; ?>&sort=<?=$_GET['sort'];?>">Last</a></li>
                            </ul>
                        </div>

                </div>
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
        <script src="/scripts/cart_quantity.js"></script>
    </body>
</html>