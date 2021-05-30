<?php
    session_start();

    //check if the admin is logged in
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]["type"] != "admin"){
        header('location: ../Account/myAccount-Log-in.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="admin dashboard">
    <meta name="author" content="Team Developers">
    <title>Admin dashboard</title>

    <link rel="stylesheet" href="/style/mall/common.css">
    <link rel="stylesheet" href="/style/cookie-consent/cookie-consent.css">
    <link rel="stylesheet" href="/style/mall/admin/dashboard.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
</head>

<body>
    <?php
        require $_SERVER["DOCUMENT_ROOT"] . "/mallPages/components/navbar.php";
    ?>

    <main>
        <h1 class="dashboard_title">Dashboard for Admin</h1>
        <section class="dashboard_options">
            <div><a href="admin_tos.php">Change Term of service content</a></div>
            <div><a href="admin_copyright.php">Change copyright terms</a></div>
            <div><a href="admin_privacy.php">Change privacy terms</a></div>
            <div><a href="admin_aboutus.php">Change about us photo</a></div>
        </section>
    </main>

    <?php
        require $_SERVER["DOCUMENT_ROOT"] . "/mallPages/components/footer.php";
    ?>

    <script src="/scripts/mall_index.js"></script>
    <script src="/scripts/cookie-consent.js"></script>
</body>

</html>
    