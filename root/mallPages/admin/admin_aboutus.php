<?php
    session_start();

    //check if the admin is logged in
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]["type"] != "admin"){
        header('location: ../Account/myAccount-Log-in.php');
    }

    //get data from file
    $source_link = $_SERVER["DOCUMENT_ROOT"] . "/../files/common_pages/tos.json";
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
    <title>Edit Developers profile pic</title>

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
        <div><a href="admin_dashboard.php">Back to dashboard</a></div>
        <h1 class="dashboard_title">Adjust term of service</h1>
        <?php 
            if($_POST['change_request'] == "1") echo "<h2 class=\"status_success\">Term of service updated</h2>";
        ?>
        <br>


    <!--create form from source data-->
        <form action="" method="POST">
            <section>
                <label for="title">Title</label>
                <textarea id="title" name="title" rows="1" cols="50"><?php echo $source->title; ?></textarea>
            </section>

            <section>
                <label>Intro content</label>
                <br>
                <?php
                    $index = 0;
                    foreach($source->intro->text as $text){
                        echo "<textarea id=\"intro_text$index\" name=\"intro_text[]\" rows=\"1\" cols=\"50\">$text</textarea>";
                        echo "<br>";
                        $index++;
                    }
                ?>
            </section>
            <br>

            <section>
                <label for="content_title">Content title</label>
                <br>
                <textarea id="content_title" name="content_title" rows="1" cols="50"><?php echo $source->content->title; ?></textarea>
            </section>

            <section>
                <label>Content text</label>
                <br>
                <?php
                    $index = 0;
                    foreach($source->content->text as $text){
                        echo "<textarea id=\"content_text$index\" name=\"content_text[]\" rows=\"1\" cols=\"50\">$text</textarea>";
                        echo "<br>";
                        $index++;
                    }
                ?>
            </section>

            <br>
            <section>
                <label for="lasword_title">lastword title</label>
                <br>
                <textarea id="lasword_title" name="lastword_title" rows="1" cols="50"><?php echo $source->lastword->title; ?></textarea>
            </section>

            <section>
                <label>lastword content</label>
                <br>
                <?php
                    $index = 0;
                    foreach($source->lastword->content as $text){
                        echo "<textarea id=\"lastword_content$index\" name=\"lastword_content[]\" rows=\"1\" cols=\"50\">$text</textarea>";
                        echo "<br>";
                        $index++;
                    }
                ?>
            </section>
            
            <input type="hidden" name="change_request" value="1">
            <button type="submit">Submit changes</button>
        </form>
    </main>

    <?php
        require $_SERVER["DOCUMENT_ROOT"] . "/mallPages/components/footer.php";
    ?>

    <script src="/scripts/mall_index.js"></script>
    <script src="/scripts/cookie-consent.js"></script>
</body>

</html>