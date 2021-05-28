<?php
    function get_store_information($store_id){
        $file = fopen("../../../files/given_data/stores.csv", "r");
        flock($file, LOCK_SH);
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