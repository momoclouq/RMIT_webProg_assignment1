<?php
    session_start();

    //check if the admin is logged in
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]["type"] != "admin"){
        header('location: ../Account/myAccount-Log-in.php');
    }

    //get data from file
    $source_json = file_get_contents("../../../files/common_pages/tos.json");
    $source = json_decode($source_json);
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
    <?php require '../components/navbar.php'; ?>

    <main>
        <div><a href="admin_dashboard.php">Back to dashboard</a></div>
        <h1 class="dashboard_title">Adjust term of service</h1>
        <form action="admin_tos.php" method="post">
            <section>
                <label for="title">Title</label>
                <textarea id="title" name="title" rows="1" cols="50"><?php echo $source->title; ?></textarea>
            </section>

            <section>
                <label for="intro_text">Intro content</label>
                <textarea id="intro_title" name="intro_title" rows="1" cols="50"><?php echo $source->title; ?></textarea>
            </section>
            
        </form>
    </main>

    <?php require '../components/footer.php' ?>

    <script src="../../scripts/mall_index.js"></script>
    <script src="../../scripts/cookie-consent.js"></script>
</body>

</html>