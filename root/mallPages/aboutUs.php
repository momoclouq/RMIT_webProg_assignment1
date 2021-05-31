<?php
    //get data from file
    $source_link = $_SERVER["DOCUMENT_ROOT"] . "/../files/common_pages/aboutus.json";
    $source_str = file_get_contents($source_link);
    $source = json_decode($source_str);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="information about the developers">
    <meta name="keywords" content="developers information details team">
    <meta name="author" content="Team Developers">
    <title>About us</title>

    <link rel="stylesheet" href="../style/mall/common.css">
    <link rel="stylesheet" href="../style/mall/AboutUs/AboutUs.css">
    <link rel="stylesheet" href="../style/cookie-consent/cookie-consent.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
</head>
<body>
      <div class="boxWrapper">
      <?php
          require './components/navbar.php';
      ?>

          <main class="mallAboutUs">
            <h1 class="aboutUsHeader">The Team</h1>
            <section id="AboutUs">
              <div class="TeamRow">
                  <div class="TeamColumn">
                    <div class="card">
                      <img src="../resources/images/Minh.jpg" alt="Minh">
                      <div class="container">
                        <h2>Pham Hoang Minh</h2>
                        <p class="title">Head Developer</p>
                        <p>s3871126@rmit.edu.vn</p>
                      </div>
                    </div>
                  </div>
                  <div class="TeamColumn">
                    <div class="card">
                      <img src="../resources/images/Anh.jpg" alt="Anh">
                      <div class="container">
                        <h2>Tran Quang Anh</h2>
                        <p class="title">Developer & Tester</p>
                        <p>s3836276@rmit.edu.vn</p>
                      </div>
                    </div>
                  </div>
                  <div class="TeamColumn">
                    <div class="card">
                      <img src="../resources/images/Dat.jpg" alt="Dat">
                      <div class="container">
                        <h2>Nguyen Thanh Dat</h2>
                        <p class="title">Developer & Manager</p>
                        <p>s3870837@rmit.edu.vn</p>
                      </div>
                    </div>
                  </div>
                  <div class="TeamColumn">
                    <div class="card">
                      <img src="../resources/images/Phat.jpg" alt="Phat" style="width:100%">
                      <div class="container">
                        <h2>Tran Tan Phat</h2>
                        <p class="title">Developer</p>
                        <p>s3836612@rmit.edu.com</p>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
              </div>
              <section id="member2"></section>
              <section id="member3"></section>
              <section id="member4"></section>
              </section>
              <div class="cookie-container">
                <p>
                    We use cookie to store the data given to us stored locally on your machine to give you the best experience the site. To find out more, please read our <a href="mallPages/privacy.html">privacy policy</a>.
                </p>
                <button class="cookie-butn">Okay</button>
            </div>
            </main>

            <!-- <footer class="mallFooter">
              <nav>
                  <div class="FooterRow">
                      <div class="FooterColumn">
                          <div class="footerheading">Support</div>
                          <ul><a href="FAQs.html">FAQ</a></ul>
                          <ul><a href="contact.html">Contact Form</a></ul>
                          <ul><a href="fees.html">Fee</a></ul>
                      </div>
                      <div class="FooterColumn">
                          <div class="footerheading">Info</div>
                          <ul><a href="aboutUs.html">About us</a></ul>
                          <ul><a href="tos.html">ToS</a></ul>
                          <ul><a href="privacy.html">Privacy Policy</a></ul>
                          <ul><a href="copyright.html">CopyRight</a></ul>
                      </div>
                      <div class="FooterColumn">
                          <div class="footerheading">Join Us</div>
                          <ul><a href="Account/registerAccount.html">Sign up</a></ul>
                          <ul color="white" style="text-decoration: underline;"><b><p>Had an account?</p></b></ul>
                          <ul><a href="Account/myAccount-Log-in.html">Sign in</a></ul>
                      </div>
                  </div>
              </nav>
          </footer> -->
          <?php
            require './components/footer.php';
          ?>
    </div>
    <script src="../scripts/cookie-consent.js"></script>
    <script src="../scripts/mall_index.js"></script>
    <script src="../scripts/mall_aboutUs.js"></script>
</body>
</html>
