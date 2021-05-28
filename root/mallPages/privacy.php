<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Privacy policies for using mall services">
    <meta name="keywords" content="Privacy policy mall services term">
    <meta name="author" content="Team Developers">
    <title>privacy policies</title>

    <link rel="stylesheet" href="../style/mall/common.css">
    <link rel="stylesheet" href="../style/mall/privacy/privacy.css">
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
                <section class="pri_title">Privacy Policies</section>
    
                <section class="pri_intro">
                    <div class="pri_intro_text">As privacy has become the most major issue in our world right now, we try to convey our decisions on the data you provide as clear as water</div>
                    <div class="pri_intro_text">We oblige to the local laws about privacy issue, which is non existent but you get the point. That is why we also come up with our own privacy values and actions in order to squeeze every bit of information we can from the naive users, You!</div>
                </section>
    
                <section class="pri_content">
                    <div class="pri_content_title">Why we must collect your data?</div>
                    <ul>
                        <li class="pri_content_text"><span class="text_item">Provide our services:</span> We use your information to deliver our services, like processing the terms you search for in order to return results or helping you share content by suggesting recipients from your contacts.</li>
                        <li class="pri_content_text"><span class="text_item">Maintain & improve our services:</span> We also use your information to ensure our services are working as intended, such as tracking outages or troubleshooting issues that you report to us. And we use your information to make improvements to our services — for example, understanding which search terms are most frequently misspelled helps us improve spell-check features used across our services.                    </li>
                        <li class="pri_content_text"><span class="text_item">Develop new services:</span> We use the information we collect in existing services to help us develop new ones. For example, understanding how people organized their photos in Picasa, Google’s first photos app, helped us design and launch Google Photos.</li>
                    </ul>
                </section>
    
                <section class="pri_content">
                    <div class="pri_content_title">Are we trustworthy?</div>
                    <div class="pri_content_text">Yes, we are as trustworthy as the monkey which can fly</div>
                </section>
    
                <section class="pri_lastword">
                    <div class="pri_lastword_title">Need help?</div>
                    <div class="pri_lastword_content">If you have questions about our Privacy policies, let us know: <a href="contact.html">Contact Mall Support</a></div>
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