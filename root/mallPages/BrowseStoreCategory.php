<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Search stores with category">
        <meta name="keywords" content="Search store category different">
        <meta name="author" content="Team Developers">
        <title>Store Category</title>

        <link rel="stylesheet" href="../style/mall/common.css">
        <link rel="stylesheet" href="../style/mall/browseStore_cate/browseStoreCatergory.css">
        <link rel="stylesheet" href="../style/cookie-consent/cookie-consent.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
    </head>

    <body>
        <div class="boxWrapper">
        <?php
            require './components/navbar.php';
        ?>
    
            <main>
                <div class="main-content">
    
                    <div class="left-container">
                        <form>
                            <div class="catergory">
                                <h3>Choose a category</h3>
                                <form action="" method="get">
                                    <select name="products" id="products" onchange="this.form.submit()">
                                    <option selected disabled>Choose store type</option>
                                    <?php
                                        //get all the selection from categories file
                                        $file = fopen("../../files/given_data/categories.csv", "r");
                                        flock($file, LOCK_SH);
                                        $title = fgets($file);
                                        while($line = fgets($file)){
                                            //split the data
                                            $items = explode(",", $line);
        
                                            $output = 0;
                                            if($items[0] == $_GET["products"]){
                                                $output = <<<"HTML"
                                                    <option value="$items[0]" selected>$items[1]</option>
                                                HTML;
                                            } else {
                                                $output = <<<"HTML"
                                                    <option value="$items[0]">$items[1]</option>
                                                HTML;
                                            }
                                            
                                            echo $output;
                                        }
                                        flock($file, LOCK_UN);
                                        fclose($file);
                                    ?>
                                    </select>
                                </form>
                            </div>
                        </form>
                    </div>
    
                    <div class="product-list">
                        <!--a random list of products-->
                        <?php
                        //print all stores with the correct category
                            function print_all_stores($category_id = "?"){
                                //file preparation
                                $file = fopen("../../files/given_data/stores.csv", "r");
                                flock($file, LOCK_SH);
                                $title = fgets($file);
                                while($line = fgets($file)){
                                    //split the data
                                    $items = explode(",", $line);

                                    //check the get value for store category id
                                    if ($category_id == "?" || $items[2] == $category_id){
                                        $output = <<<"HTML"
                                            <div class="card">
                                                <div class="product-imgage">
                                                    <a href="/storePages/store/storeHome.php?id=$items[0]"><img src="../resources/images/Store Image/store1.jpeg" alt="$items[1]"></a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-text">
                                                        <div class="product-title">
                                                            <a href="/storePages/store/storeHome.php?id=$items[0]">$items[1]</a>
                                                        </div>
                                                        <div class="product-description">fake description</div>
                                                    </div>     
                                                </div>   
                                            </div>
                                        HTML;

                                        echo $output;
                                    }
                                }
                                flock($file, LOCK_UN);
                                fclose($file);
                            }
                            
                            if(!isset($_GET["products"])) print_all_stores();
                            else print_all_stores($_GET["products"]);    
                        ?>
    
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
                require './components/footer.php';
            ?>
        </div>
        <script src="../scripts/cookie-consent.js"></script>
        <script src="../scripts/mall_index.js"></script>
    </body>
</html>