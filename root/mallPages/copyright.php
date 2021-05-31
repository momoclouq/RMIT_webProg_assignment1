<?php
    //get data from file
    $source_link = $_SERVER["DOCUMENT_ROOT"] . "/../files/common_pages/copyright.json";
    $source_str = file_get_contents($source_link);
    $source = json_decode($source_str);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Copyright policies for using mall services">
    <meta name="keywords" content="Copyright mall policies services">
    <meta name="author" content="Team Developers">
    <title>Copyright</title>

    <link rel="stylesheet" href="/style/mall/common.css">
    <link rel="stylesheet" href="/style/mall/copyright/copyright.css">
    <link rel="stylesheet" href="/style/cookie-consent/cookie-consent.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://kit.fontawesome.com/6af8588f7a.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="boxWrapper">
        <?php
            require $_SERVER["DOCUMENT_ROOT"] . "/mallPages/components/navbar.php";
        ?>
    
        <main> 
            <div class="wrapper">
                <section class="copyright_title"><?php echo $source->title; ?></section>
    
                <section class="copyright_intro">
                    <?php
                        $index = 0;
                        foreach($source->intro->text as $text){
                            echo "<div class=\"copyright_intro_text\">$text</div>";
                            $index++;
                        }
                    ?>
                </section>
    
                <section class="copyright_content">
                    <div class="copyright_content_title"><?php echo $source->content->title; ?></div>
                    <?php
                        $index = 0;
                        foreach($source->content->text as $text){
                            echo "<p class=\"copyright_content_text\"><i class=\"fas fa-times redColor\"></i>$text</li>";
                            $index++;
                        }
                    ?>
                </section>
    
                <section class="copyright_lastword">
                    <div class="copyright_lastword_title"><?php echo $source->lastword->title; ?></div>
                    <?php
                        $index = 0;
                        foreach($source->lastword->content as $text){
                            echo "<div class=\"copyright_lastword_content\">$text</li>";
                            $index++;
                        }
                    ?>
                </section>
            </div>
            <div class="cookie-container">
                <p>
                    We use cookie to store the data given to us stored locally on your machine to give you the best experience the site. To find out more, please read our <a href="mallPages/privacy.html">privacy policy</a>.
                </p>
                <button class="cookie-butn">Okay</button>
            </div>
        </main>
           
        <?php
            require $_SERVER["DOCUMENT_ROOT"] . "/mallPages/components/footer.php";
        ?>
    </div>

    <script src="/scripts/mall_index.js"></script>
    <script src="/scripts/cookie-consent.js"></script>
</body>
</html>