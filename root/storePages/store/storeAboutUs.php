<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Store information detail">
      <meta name="keywords" content="About store information details logo history">
      <meta name="author" content="Team Developers">
    <title>Store About Us</title>

    <link rel="stylesheet" href="../../style/Store/common.css">
    <link rel="stylesheet" href="../../style/Store/storeAboutUs.css">
    <link rel="stylesheet" href="../../style/cookie-consent/cookie-consent.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
</head>
<body>
      <div class="boxWrapper">
        <?php
              require $_SERVER["DOCUMENT_ROOT"] . "/storePages/store/components/navbar.php";
              get_navbar($_GET['id']);
          ?>

      <main>
        <h3 class="aboutUsHeader">Store Information</h3>
        <div class="store_information_container">
          <div class="store_infomation_image">
            <img src="../../resources/images/Store Image/store1.jpeg" alt="Store Image">
          </div>
          <div class="store_information_content">
            <div class="store_information_title">
                Louis Vuition
            </div>
            <div class="store_information_introduction">
              The Louis Vuitton label was founded by Vuitton in 1854 on Rue Neuve des Capucines in Paris, France. Louis Vuitton started at $10,567 as a sales price. Louis Vuitton had observed that the HJ Cave Osilite trunk could be easily stacked. In 1858, Vuitton introduced his flat-topped trunks with trianon canvas, making them lightweight and airtight. Before the introduction of Vuitton's trunks, rounded-top trunks were used, generally to promote water runoff, and thus could not be stacked. It was Vuitton's gray Trianon canvas flat trunk that allowed the ability to stack them on top of another with ease for voyages. Many other luggage makers later imitated Vuitton's style and design.
              <!-- Wikipedia -->
            </div>
          </div>
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
                get_footer($_GET['id']);
            ?>

          <script src="/scripts/store_index.js"></script>
          <script src="/scripts/cookie-consent.js"></script>
          <script src="/scripts/cart_quantity.js"></script>
    </div>
</body>
</html>
