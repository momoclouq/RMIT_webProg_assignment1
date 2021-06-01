<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Store Product By Category</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Browse products by category">
        <meta name="keywords" content="category product browse different type">
        <meta name="author" content="Team Developers">

        <link rel="stylesheet" href="/style/Store/common.css">
        <link rel="stylesheet" href="/style/Store/storeBrowseCategory.css">
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
                        <form>
                            <div class="catergory">
                                <h3>Choose a category</h3>
                                <select name="products" id="products">
                                <option value="clothes">Clothes</option>
                                <option value="kitchen">Kitchen</option>
                                <option value="beauty">Beauty</option>
                                <option value="toys">Toys</option>
                                <option value="electtronics">Electronics</option>
                                </select>
                            </div>
                            
                            <div class="brand catergory">
                                <h3>Brand</h3>
                                <input type="checkbox" name="brand" id="brand" value="gucci">
                                <label for="brands">Gucci</label>
                                <br>
                                <input type="checkbox" name="brand" id="brand" value="channel">
                                <label for="brands">Channel</label>
                                
                                <br>
                                <input type="checkbox" name="brand" id="brand" value="buberry">
                                <label for="brands">Buberry</label>
                                
                                <br>
                                <input type="checkbox" name="brand" id="brand" value="dior">
                                <label for="brands">Dior</label>
                                
                                <br>
                                <input type="checkbox" name="brand" id="brand" value="hermes">
                                <label for="brands">Hermes</label>
                            </div>
                            
            
                        
                        </form>
                </div>
                
                
                <div class="product-list">
                    <!--a random list of products-->
                    <div class="card">
                        <a href="../store/product/cate1prod1.html">
                        <div class="product-imgage">
                            <img src="../../resources/images/Product Image/product_1.jpeg" alt="Shirt">
                        </div>
                        <div class="product-content">
                            <div class="product-text">
                                <div class="product-title">
                                    <a href="../store/product/cate1prod1.html">Blue cross style flannel</a>
                                </div>
                                <div class="product-description">by H&M</div>
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
                                <p class="product-price"><span class="dollar">$</span>250</p>
                                <p class="product-price">$300</p>
                            </div>
                            
                        </div>
                        </a>
                        
                    </div>

                    <div class="card">
                        <a href="../store/product/cate1prod1.html">
                        <div class="product-imgage">
                            <img src="../../resources/images/Product Image/product_2.jpeg" alt="shoes">
                        </div>
                        <div class="product-content">
                            <div class="product-text">
                                <div class="product-title">
                                    <a href="../store/product/cate1prod1.html">Colorful Running Shoe</a>
                                </div>
                                <div class="product-description">by Nike</div>
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
                                <p class="product-price"><span class="dollar">$</span>750</p>
                                <p class="product-price">$1000</p>
                            </div>
                            
                        </div>
                        </a>
                        
                        
                    </div>


                    <div class="card">
                        <a href="../store/product/cate1prod1.html">
                        <div class="product-imgage">
                            <img src="../../resources/images/Product Image/product_3.webp" alt="Black Shoes">
                        </div>
                        <div class="product-content">
                            <div class="product-text">
                                <div class="product-title">
                                    <a href="../store/product/cate1prod1.html">Black Tennis Shoes</a>
                                </div>
                                <div class="product-description">by Nike</div>
                            </div>
                            <div class="product-rating">
                                <span>&#9733</span>
                                    <span>&#9733</span>
                                    <span>&#9733</span>
                                    <span>&#9733</span>
                                    <span>&#9734</span>
                                    <span class="review-number">(1000)</span>
                            </div>
                            <div class="price-row">
                                <p class="product-price"><span class="dollar">$</span>250</p>
                                <p class="product-price">$300</p>
                            </div>
                            
                        </div>
                        </a>
                        
                        
                    </div>

                    <div class="card">
                        <a href="../store/product/cate1prod1.html">
                        <div class="product-imgage">
                            <img src="../../resources/images/Product Image/product_4.jpeg" alt="Teddy Bear">
                        </div>
                        <div class="product-content">
                            <div class="product-text">
                                <div class="product-title">
                                    <a href="../store/product/cate1prod1.html">a cute little softy teddy bear</a>
                                </div>
                                <div class="product-description">by Toy Is Fun</div>
                            </div>
                            <div class="product-rating">
                                <span>&#9733</span>
                                    <span>&#9733</span>
                                    <span>&#9733</span>
                                    <span>&#9733</span>
                                    <span>&#9734</span>
                                    <span class="review-number">(200)</span>
                            </div>
                            <div class="price-row">
                                <p class="product-price"><span class="dollar">$</span>80</p>
                                <p class="product-price">$150</p>
                            </div>
                            
                        </div>
                        </a>
                        
                        
                    </div>

                    <div class="card">
                        <a href="../store/product/cate1prod1.html">
                        <div class="product-imgage">
                            <img src="../../resources/images/Product Image/product_5.jpeg" alt="Phone Toy">
                        </div>
                        <div class="product-content">
                            <div class="product-text">
                                <div class="product-title">
                                    <a href="../store/product/cate1prod1.html">A Little Coloful Phone For Kids</a>
                                </div>
                                <div class="product-description">by Apple</div>
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
                                <p class="product-price"><span class="dollar">$</span>450</p>
                                <p class="product-price">$799</p>
                            </div>
                            
                        </div>
                        </a>
                        
                        
                    </div>
                    

                    <div class="card">
                        <a href="../store/product/cate1prod1.html">
                        <div class="product-imgage">
                            <img src="../../resources/images/Product Image/product_6.jpeg" alt="Corn Peeler">
                        </div>
                        <div class="product-content">
                            <div class="product-text">
                                <div class="product-title">
                                    <a href="../store/product/cate1prod1.html">Corn Peeler</a>
                                </div>
                                <div class="product-description">by BestBuy</div>
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
                                <p class="product-price"><span class="dollar">$</span>150</p>
                                <p class="product-price">$200</p>
                            </div>
                            
                        </div>
                        </a>
                        
                        
                    </div>

                    <div class="card">
                        <a href="../store/product/cate1prod1.html">
                        <div class="product-imgage">
                            <img src="../../resources/images/Product Image/product_7.jpeg" alt="Green Blender">
                        </div>
                        <div class="product-content">
                            <div class="product-text">
                                <div class="product-title">
                                    <a href="../store/product/cate1prod1.html">Powerful Green Blender</a>
                                </div>
                                <div class="product-description">by IKEA</div>
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
                                <p class="product-price"><span class="dollar">$</span>250</p>
                                <p class="product-price">$499</p>
                            </div>
                            
                        </div>
                        </a>
                        
                        
                    </div>

                    <div class="card">
                        <a href="../store/product/cate1prod1.html">
                        <div class="product-imgage">
                            <img src="../../resources/images/Product Image/product_8.jpeg" alt="Blue Toaster">
                        </div>
                        <div class="product-content">
                            <div class="product-text">
                                <div class="product-title">
                                    <a href="../store/product/cate1prod1.html">Cute Blue Toaster</a>
                                </div>
                                <div class="product-description">by IKEA</div>
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
                                <p class="product-price"><span class="dollar">$</span>450</p>
                                <p class="product-price">$700</p>
                            </div>
                            
                        </div>
                        </a>
                        
                        
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
                get_footer($_GET['id']);
            ?>
        </div>

        <script src="/scripts/cookie-consent.js"></script>
        <script src="/scripts/store_index.js"></script>
        <script src="/scripts/cart_quantity.js"></script>
    </body>
</html>