<?php
    function get_product_information($product_id){
        $link = $_SERVER["DOCUMENT_ROOT"] . "/../files/given_data/products.csv";
        $file = fopen($link, "r");
        flock($file, LOCK_SH);
        $product = [];

        //remove title
        $title = fgets($file);

        while($line = fgets($file)){
            //split the data
            $items = explode(",", $line);
            if ($items[0] == $product_id) {
                $product = $items;
                break;
            }
        }

        flock($file, LOCK_UN);
        fclose($file);

        return $product;
    }
?>