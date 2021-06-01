<?php
    session_start();
    unset($_SESSION['loggedin']);
    header('location: myAccount-Log-in.php');
?>