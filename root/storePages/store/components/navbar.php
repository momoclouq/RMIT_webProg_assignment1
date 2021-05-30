<?php

function get_navbar($store_id){
    require $_SERVER["DOCUMENT_ROOT"] . "/storePages/store/helper/store_related.php";
    $store_name = "empty";

    //access file to get store name
    $store_name = get_store_information($store_id)[1];

    //get items in the cart
    if(!isset($_SESSION['cart'])) $cart_value = 0;
    else $cart_value = count($_SESSION['cart']);

    $output = <<<"HTML"
        <header class="mallHeader">
            <nav>
                <ul class="menu">
                    <li class="logo"><a href="/storePages/store/storeHome.php?id=$store_id">$store_name</a></li>
                    <li class="item mallName"><a href="/storePages/store/storeHome.php?id=$store_id">Home</a></li>

                    <li class="item"><a href="/storePages/store/storeAboutUs.php">About us</a></li>
                    <li class="item subMenu2"><a href="#">Products</a></li>
                    <li class="item item2"><a href="/storePages/store/storeBrowseCategory.php">Browse By Category</a></li>
                    <li class="item item2"><a href="/storePages/store/storeBrowseTime.php?id=$store_id">Browse By Created time</a></li>
                    <li class="item lastItem"><a href="/storePages/store/storeContact.php?id=$store_id">Contact</a></li>
                    <li class="item account_mall_nav"><a>My Account</a></li>
                    <li class="item cart_mall_nav"><a href="/storePages/store/storeOrderPlacement.php">Cart<span id="cart_nav">$cart_value</span></a></li>
                    <li class="toggle"><span class="bars"></span><li>
                </ul>
            </nav>
        </header>
    HTML;

    echo $output;
}

?>
<!-- header with cart
<header class="mallHeader">
        <nav>
            <ul class="menu">
                <li class="logo"><a href="../storeHome.html">Store 1</a></li>
                <li class="item mallName"><a href="../storeHome.html">Home</a></li>

                <li class="item"><a href="../storeAboutUs.html">About us</a></li>
                <li class="item subMenu2"><a href="#">Products</a></li>
                <li class="item item2"><a href="../storeBrowseCategory.html">Browse By Category</a></li>
                <li class="item item2"><a href="../storeBrowseTime.html">Browse By Created time</a></li>
                <li class="item lastItem"><a href="../storeContact.html">Contact</a></li>
                <li class="item account_mall_nav"><a>My Account</a></li>
                <li class="item cart_mall_nav"><a href="../storeOrderPlacement.html">Cart<span id="cart_nav"></span></a></li>
                <li class="toggle"><span class="bars"></span><li>
            </ul>
        </nav>
      </header> -->

