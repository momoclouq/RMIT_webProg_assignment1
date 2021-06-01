<?php
    function get_store_information($store_id){
        $link = $_SERVER["DOCUMENT_ROOT"] . "/../files/given_data/stores.csv";
        $file = fopen($link, "r");
        $store = [];

        //remove title
        $title = fgets($file);

        while($line = fgets($file)){
            //split the data
            $items = explode(",", $line);
            if ($items[0] == $store_id) {
                $store = $items;
                break;
            }
        }

        flock($file, LOCK_UN);
        fclose($file);

        return $store;
    }
?>