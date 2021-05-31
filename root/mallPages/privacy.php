<?php
    //get data from file
    $source_link = $_SERVER["DOCUMENT_ROOT"] . "/../files/common_pages/privacy.json";
    $source_str = file_get_contents($source_link);
    $source = json_decode($source_str);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Privacy policies for using mall services">
    <meta name="keywords" content="Privacy policy mall services term">
    <meta name="author" content="Team Developers">
    <title>privacy policies</title>

    <link rel="stylesheet" href="/style/mall/common.css">
    <link rel="stylesheet" href="/style/mall/privacy/privacy.css">
    <link rel="stylesheet" href="/style/cookie-consent/cookie-consent.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
</head>

<body>
    <div class="boxWrapper">
        <?php
            require $_SERVER["DOCUMENT_ROOT"] . "/mallPages/components/navbar.php";
        ?>
    
        <main> 
            <div class="wrapper">
                <section class="pri_title"><?php echo $source->title; ?></section>
    
                <section class="pri_intro">
                    <?php
                        $index = 0;
                        foreach($source->intro->text as $text){
                            echo "<div class=\"pri_intro_text\">$text</div>";
                            $index++;
                        }
                    ?>
                </section>

                <?php
                    for($i = 0; $i< count($source->content); $i++){
                        echo "<section>";
                        $actual_title = $source->content[$i]->title;
                        $titleHTML = <<<"HTML"
                            <div class="pri_content_title">$actual_title</div>
                        HTML;
                        echo $titleHTML;

                        echo "<ul>";
                        for($k = 0; $k < count($source->content[$i]->text); $k++){
                            $actual_content = $source->content[$i]->text[$k];
                            echo "<li class=\"pri_content_text\"><span class=\"text_item\">$actual_content</li>";
                        }
                        echo "</ul>";
                        echo "</section>";
                    }
                ?>
    
                <section class="pri_lastword">
                    <div class="pri_lastword_title"><?php echo $source->lastword->title; ?></div>
                    <?php
                        $index = 0;
                        foreach($source->lastword->content as $text){
                            echo "<div class=\"pri_lastword_content\">$text</li>";
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