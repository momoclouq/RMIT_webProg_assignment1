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

    function subtract_1_from_cart($product_id){
        if(isset($_SESSION["cart"][$product_id])){
            if((int)$_SESSION['cart'][$product_id] - 1 <= 0) $_SESSION['cart'][$product_id] = 1;
            else $_SESSION['cart'][$product_id] = (int)$_SESSION['cart'][$product_id] - 1;
            return;
        }
    }

    function add_1_from_cart($product_id){
        add_product_to_cart($product_id, 1);
    }

    function remove_product_from_cart($product_id){
        $temp = $_SESSION['cart'];
        if(isset($_SESSION["cart"][$product_id])){
            unset($temp[$product_id]);
            $_SESSION['cart'] = $temp;
            return;
        }
    }

    //initialize cart if not yet available
    if(!isset($_SESSION['cart'])) $_SESSION['cart'] = [];

    //process request
    if(!isset($_POST["id"]) 
    || (!isset($_POST['add1']) && !isset($_POST['addX']) && !isset($_POST['addOnly1']) && !isset($_POST['subtractOnly1']) && !isset($_POST['remove'])) 
    || !isset($_POST['quanity'])){
        redirect();
    } else {        
        //redirect
        if(isset($_POST['add1'])) {
            add_product_to_cart($_POST["id"], $_POST['quanity']);
            redirect(); 
        }

        if(isset($_POST['addX'])) {
            add_product_to_cart($_POST["id"], $_POST['quanity']);
            header("location: /storePages/store/storeOrderPlacement.php");
        }

        if(isset($_POST['addOnly1'])){
            add_1_from_cart($_POST["id"]);
            header("location: /storePages/store/storeOrderPlacement.php");
        }

        if(isset($_POST['subtractOnly1'])){
            subtract_1_from_cart($_POST["id"]);
            header("location: /storePages/store/storeOrderPlacement.php");
        }

        if(isset($_POST['remove'])){
            remove_product_from_cart($_POST["id"]);
            header("location: /storePages/store/storeOrderPlacement.php");
        }
    }
?>