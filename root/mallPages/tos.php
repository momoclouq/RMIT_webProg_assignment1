<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Term of services for mall">
    <meta name="keywords" content="TOS term services mall">
    <meta name="author" content="Team Developers">
    <title>Term of Services</title>

    <link rel="stylesheet" href="../style/mall/common.css">
    <link rel="stylesheet" href="../style/mall/tos/tos.css">
    <link rel="stylesheet" href="../style/cookie-consent/cookie-consent.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
</head>
<body>
    <div class="boxWrapper">
        <?php
          require './components/navbar.php';
        ?>
    
        <main> 
            <div class="wrapper">
                <section class="tos_title">Term of service</section>
    
                <section class="tos_intro">
                    <div class="tos_intro_text">Using our mall system means that you must be a proper human being with an IQ score higher than 100. By accepting that you are never gonna find a bug in our system, you will submit to the mighty deity that is the developers</div>
                    <div class="tos_intro_text">We abide by local copyright laws and protect the rights of copyright holders, so we don’t allow ads that are unauthorized to use copyrighted content. If you are legally authorized to use copyrighted content, apply for certification to advertise. If you see unauthorized content, submit a copyright-related complaint.</div>
                </section>
    
                <section class="tos_content">
                    <div class="tos_content_title">Using Mall services on behalf of organizations</div>
                    <ul>
                        <li class="tos_content_text">an authorized representative of that organization must agree to these terms</li>
                        <li class="tos_content_text">your organization’s administrator may assign a Google Account to you. That administrator might require you to follow additional rules and may be able to access or disable your Google Account.</li>
                        <li class="tos_content_text">Software, sites, or tools that remove digital rights management (DRM) technology from copyrighted material or otherwise circumvent copyright (irrespective of whether the intended use is legitimate or not</li>
                    </ul>
                </section>
    
                <section class="tos_lastword">
                    <div class="tos_lastword_title">Need help?</div>
                    <div class="tos_lastword_content">If you have questions about our Term of Services, let us know: <a href="contact.html">Contact Mall Support</a></div>
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
            require './components/footer.php';
          ?>
    </div>
    
    <script src="../scripts/mall_index.js"></script>
    <script src="../scripts/cookie-consent.js"></script>
</body>
</html>