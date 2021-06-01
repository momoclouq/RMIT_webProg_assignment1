<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Search stores with alphabet">
        <meta name="keywords" content="Search store alphabet letter different">
        <meta name="author" content="Team Developers">
        <title>Store by Letter</title>
        <link rel="stylesheet" href="/style/mall/common.css">
        <link rel="stylesheet" href="/style/mall/browseStore_letter/browseStoreLetter.css">
        <link rel="stylesheet" href="/style/cookie-consent/cookie-consent.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
    </head>

    <body>
        <div class="boxWrapper">
            <?php
                require $_SERVER["DOCUMENT_ROOT"] . "/mallPages/components/navbar.php";
            ?>
    
            <main>
                <div class="main-content">
                    <div class="upper-container">
                        <h3>Browse Stores By Name</h3>
                        <form action="#" method="get">
                            <div class="letters-container">
                                <?php
                                    $alphabet = range('a', 'z');
                                    foreach($alphabet as $character){
                                        echo "<button type=\"submit\" name=\"character\" value=\"$character\">" . strtoupper($character) . "</button>";
                                    }
                                ?>
                            </div>
                        </form>
                        
                    
                    
                    <div class="product-list">
                        <!--a random list of products-->
                        <?php
                            function print_all_stores($character = "?"){
                                //file preparation
                                $file = fopen("../../files/given_data/stores.csv", "r");
                                flock($file, LOCK_SH);
                                $title = fgets($file);
                                while($line = fgets($file)){
                                    //split the data
                                    $items = explode(",", $line);

                                    //check the get value for store character
                                    if ($character == "?" || strtolower($items[1][0]) == $character){
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
                            
                            if(!isset($_GET["character"])) print_all_stores();
                            else print_all_stores($_GET["character"]);    
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
                require $_SERVER["DOCUMENT_ROOT"] . "/mallPages/components/footer.php";
            ?>
        </div>
        <script src="/scripts/cookie-consent.js"></script>
        <script src="/scripts/mall_index.js"></script>
    </body>
</html>