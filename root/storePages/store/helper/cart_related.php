<?php
    session_start();

    function redirect(){
        $current_id = $_POST["id"];
        $url = "/storePages/store/product/cate1prod1.php?id=$current_id" . "&success=1";
        header("location: $url");
    }

    function add_product_to_cart($product_id, $quanity){
        if(isset($_SESSION["cart"][$product_id])){
            $_SESSION['cart'][$product_id] = (int)$_SESSION['cart'][$product_id] + (int) $quanity;
            return;
        }

        $_SESSION['cart'][$product_id] = $quanity;
    }

    //initialize cart if not yet available
    if(!isset($_SESSION['cart'])) $_SESSION['cart'] = [];

    //process request
    if(!isset($_POST["id"]) || (!isset($_POST['add1']) && !isset($_POST['addX'])) || !isset($_POST['quanity'])){
        redirect();
    }

    //add product to cart
    add_product_to_cart($_POST["id"], $_POST['quanity']);

    //redirect
    if(isset($_POST['add1'])) redirect(); 

    if(isset($_POST['addX'])) header("location: /storePages/store/storeOrderPlacement.php");

?>