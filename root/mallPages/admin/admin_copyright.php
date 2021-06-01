<?php
    session_start();

    //check if the admin is logged in
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]["type"] != "admin"){
        header('location: ../Account/myAccount-Log-in.php');
    }

    //get data from file
    $source_link = $_SERVER["DOCUMENT_ROOT"] . "/../files/common_pages/copyright.json";
    $source_str = file_get_contents($source_link);
    $source = json_decode($source_str);

    //process the change_request
    if($_POST['change_request'] == "1"){
        $source->title = $_POST['title'];
        $source->intro->text = $_POST['intro_text'];
        $source->content->title = $_POST['content_title'];
        $source->content->text = $_POST['content_text'];
        $source->lastword->title = $_POST['lastword_title'];
        $source->lastword->content = $_POST['lastword_content'];
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
    <title>Edit Copyright terms</title>

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
        <div class="back_btn"><a href="admin_dashboard.php">Back to dashboard</a></div>
        <h1 class="dashboard_title">Adjust copyright term</h1>
        <?php 
            if($_POST['change_request'] == "1") echo "<h2 class=\"status_success\">Copyright terms updated</h2>";
        ?>
        <br>


    <!--create form from source data-->
        <form action="" method="POST">
            <section class="change_panel">
                <label for="title">Title</label>
                <textarea class="input_field" id="title" name="title" rows="2" cols="100"><?php echo $source->title; ?></textarea>
            </section>

            <section class="change_panel">
                <label>Intro content</label>
                <br>
                <?php
                    $index = 0;
                    foreach($source->intro->text as $text){
                        echo "<textarea class=\"input_field\" id=\"intro_text$index\" name=\"intro_text[]\" rows=\"2\" cols=\"100\">$text</textarea>";
                        echo "<br>";
                        $index++;
                    }
                ?>
            </section>
            <br>

            <section class="change_panel">
                <label for="content_title">Content title</label>
                <br>
                <textarea class="input_field" id="content_title" name="content_title" rows="2" cols="100"><?php echo $source->content->title; ?></textarea>
            </section>

            <section class="change_panel">
                <label>Content text</label>
                <br>
                <?php
                    $index = 0;
                    foreach($source->content->text as $text){
                        echo "<textarea class=\"input_field\" id=\"content_text$index\" name=\"content_text[]\" rows=\"2\" cols=\"100\">$text</textarea>";
                        echo "<br>";
                        $index++;
                    }
                ?>
            </section>

            <br>
            <section class="change_panel">
                <label for="lasword_title">lastword title</label>
                <br>
                <textarea class="input_field" id="lasword_title" name="lastword_title" rows="2" cols="100"><?php echo $source->lastword->title; ?></textarea>
            </section>

            <section class="change_panel">
                <label>lastword content</label>
                <br>
                <?php
                    $index = 0;
                    foreach($source->lastword->content as $text){
                        echo "<textarea class=\"input_field\" id=\"lastword_content$index\" name=\"lastword_content[]\" rows=\"2\" cols=\"100\">$text</textarea>";
                        echo "<br>";
                        $index++;
                    }
                ?>
            </section>
            
            <input type="hidden" name="change_request" value="1">
            <button class="submit_btn" type="submit">Submit changes</button>
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