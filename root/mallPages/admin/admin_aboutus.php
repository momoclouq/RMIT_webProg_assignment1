<?php
    session_start();

    //check if the admin is logged in
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]["type"] != "admin"){
        header('location: ../Account/myAccount-Log-in.php');
    }

    //get data from file
    $source_link = $_SERVER["DOCUMENT_ROOT"] . "/../files/common_pages/aboutus.json";
    $source_str = file_get_contents($source_link);
    $source = json_decode($source_str);

    //process the change_request
    if($_POST['change_request'] == "1"){
        foreach($source as $name => $image_link){
            $path_separated = explode("/", $image_link);
            $path_separated[count($path_separated)-1] = $_POST[$name];
            $path = implode("/",$path_separated);

            $source->$name = $path;
        }
    }

    $newSource = json_encode($source);
    file_put_contents($source_link, $newSource);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="admin dashboard">
    <meta name="author" content="Team Developers">
    <title>Edit Developers profile pic</title>

    <link rel="stylesheet" href="/style/mall/common.css">
    <link rel="stylesheet" href="/style/cookie-consent/cookie-consent.css">
    <link rel="stylesheet" href="/style/mall/admin/dashboard.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
</head>

<body>
<div class="boxWrapper">
    <?php
        require $_SERVER["DOCUMENT_ROOT"] . "/mallPages/components/navbar.php";
    ?>

    <main>
        <div><a href="admin_dashboard.php">Back to dashboard</a></div>
        <h1 class="dashboard_title">Adjust developer's profile pics</h1>
        <?php 
            if($_POST['change_request'] == "1") echo "<h2 class=\"status_success\">Profile pics updated</h2>";
        ?>
        <br>
    <!--create form from source data-->
        <h2>To update the profile pic, please add the pic into this directory first:</h2>
        <h3>/resources/image/profilePic/</h3>
        <form action="" method="POST">
            <?php
                foreach($source as $name => $image_link){
                    $path_separated = explode("/", $image_link);
                    $filename = $path_separated[count($path_separated)-1];

                    $output = <<<"HTML"
                        <section>
                            <h2>Developer: $name</h2>
                            <label for=$name>Enter new filename</label>
                            <input type="text" id=$name value=$filename name=$name>
                            <br>
                            <img class="profile_pic" src=$image_link alt=$name>
                        </section>
                    HTML;
                    echo $output;
                }
            ?>
            
            <input type="hidden" name="change_request" value="1">
            <button type="submit">Submit changes</button>
        </form>

         
    </main>

    <?php
        require $_SERVER["DOCUMENT_ROOT"] . "/mallPages/components/footer.php";
    ?> 
    </div>

    <script src="/scripts/mall_index.js"></script>
    <script src="/scripts/cookie-consent.js"></script>
</body>

</html>