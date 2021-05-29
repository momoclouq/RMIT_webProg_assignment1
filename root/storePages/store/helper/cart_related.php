<?php
    session_start();

    function redirect(){
        if(isset($_POST["id"])) {
            $current_id = $_POST["id"];
            $url = "/storePages/store/product/cate1prod1.php?id=$current_id" . "?success=1";
            header("location: $url");
        } else header("location: /storePages/store/product/cate1prod1.php?id=1");
    }

    function add_product_to_cart($product_id, $quanity){
        foreach($_SESSION['cart'] as $item){
            if($item["product_id"] == $product_id) {
                $item["quanity"] = $item["quanity"] + $quanity;
                return;
            }
        }
        $_SESSION['cart'][] = array("product_id"=>$product_id, "quanity"=>$quanity);
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