<?php
    session_start();
    if(isset($_POST['continue'])) header("location: /storePages/store/storeHome.php?id=1");
    if(isset($_POST['process'])){
        if(isset($_SESSION["loggedin"]))
            header("location: /storePages/store/storeThank.php");
        else header("location: /mallPages/Account/myAccount-Log-in.php");
    }
?>