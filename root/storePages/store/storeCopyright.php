<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Copyright policies for using the store">
    <meta name="keywords" content="Copyright term store services">
    <meta name="author" content="Team Developers">
    <title>Store copyright</title>

    <link rel="stylesheet" href="/style/Store/common.css">
    <link rel="stylesheet" href="/style/Store/copyright.css">
    <link rel="stylesheet" href="/style/cookie-consent/cookie-consent.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://kit.fontawesome.com/6af8588f7a.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="boxWrapper">
        <?php
            require $_SERVER["DOCUMENT_ROOT"] . "/storePages/store/components/navbar.php";
            get_navbar();
        ?>
    
        <main> 
            <div class="wrapper">
                <section class="copyright_title">Copyright policies</section>
    
                <section class="copyright_intro">
                    <div class="copyright_intro_text">Mall provides translated versions of our Help Center as a convenience, though they are not meant to change the content of our policies. The English version is the official language we use to enforce our policies. To view this article in a different language, use the language dropdown at the bottom of the page.</div>
                    <div class="copyright_intro_text">We abide by local copyright laws and protect the rights of copyright holders, so we don’t allow ads that are unauthorized to use copyrighted content. If you are legally authorized to use copyrighted content, apply for certification to advertise. If you see unauthorized content, submit a copyright-related complaint.</div>
                </section>
    
                <section class="copyright_content">
                    <div class="copyright_content_title">Copyrighted content</div>
                    <p class="copyright_content_text"><i class="fas fa-times redColor"></i> Unauthorized sites or software that capture, copy, or provide access to copyrighted content</p>
                    <p class="copyright_content_text"><i class="fas fa-times redColor"></i> Sites or apps that facilitate unauthorized offline distribution of copyrighted content</p>
                    <p class="copyright_content_text"><i class="fas fa-times redColor"></i> Software, sites, or tools that remove digital rights management (DRM) technology from copyrighted material or otherwise circumvent copyright (irrespective of whether the intended use is legitimate or not</p>
                </section>
    
                <section class="copyright_lastword">
                    <div class="copyright_lastword_title">Need help?</div>
                    <div class="copyright_lastword_content">If you have questions about our policies, let us know: <a href="#">Contact Mall Support</a></div>
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
            require $_SERVER["DOCUMENT_ROOT"] . "/storePages/store/components/footer.php";
            get_footer();
        ?>
    </div>
    <script src="/scripts/cookie-consent.js"></script>
    <script src="/scripts/mall_index.js"></script>
    <!-- <script src="/scripts/cart_quantity.js"></script> -->
</body>
</html>