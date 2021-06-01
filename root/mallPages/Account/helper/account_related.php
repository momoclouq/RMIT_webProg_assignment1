<?php
    function get_account($username){
        $link = $_SERVER["DOCUMENT_ROOT"] . "/../files/account/user_pass.json";
        $source_str = file_get_contents($link);
        $source = json_decode($source_str);

        foreach ($source as $combination){
            if ($combination->email == $username) return $combination;
        }

        unset($_SESSION['loggedin']);
        header("location: ../myAccount-log-in.php");
    }
?>