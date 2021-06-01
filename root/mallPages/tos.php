<?php
    session_start();
    //get data from file
    $source_link = $_SERVER["DOCUMENT_ROOT"] . "/../files/common_pages/tos.json";
    $source_str = file_get_contents($source_link);
    $source = json_decode($source_str);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Term of services for mall">
    <meta name="keywords" content="TOS term services mall">
    <meta name="author" content="Team Developers">
    <title>Term of Services</title>

    <link rel="stylesheet" href="/style/mall/common.css">
    <link rel="stylesheet" href="/style/mall/tos/tos.css">
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
                <section class="tos_title"><?php echo $source->title; ?></section>
    
                <section class="tos_intro">
                    <?php
                        $index = 0;
                        foreach($source->intro->text as $text){
                            echo "<div class=\"tos_intro_text\">$text</div>";
                            $index++;
                        }
                    ?>
                </section>
    
                <section class="tos_content">
                    <div class="tos_content_title"><?php echo $source->content->title; ?></div>
                    <ul>
                        <?php
                            $index = 0;
                            foreach($source->content->text as $text){
                                echo "<li class=\"tos_content_text\">$text</li>";
                                $index++;
                            }
                        ?>
                    </ul>
                </section>
    
                <section class="tos_lastword">
                    <div class="tos_lastword_title"><?php echo $source->lastword->title; ?></div>
                    <ul>
                        <?php
                            $index = 0;
                            foreach($source->lastword->content as $text){
                                echo "<li class=\"tos_lastword_content\">$text</li>";
                                $index++;
                            }
                        ?>
                    </ul>
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