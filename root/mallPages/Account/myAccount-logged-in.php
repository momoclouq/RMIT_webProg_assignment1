<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Profile page for mall account">
    <meta name="keywords" content="profile user information data loggedin detail">
    <meta name="author" content="Team Developers">
    <title>My Account</title>

    <link rel="stylesheet" href="../../style/mall/common.css"> 
    <link rel="stylesheet" href="../../style/mall/myaccount_info/myAccountInfo.css">
    <link rel="stylesheet" href="../../style/cookie-consent/cookie-consent.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
</head>
<body>
    <div class="boxWrapper">
        <header class="mallHeader">
            <nav>
                <ul class="menu">
                    <li class="logo"><a href="/index.php">Logo</a></li>
                    <li class="item mallName"><a href="/index.php">Shopping mall</a></li>
    
                    <li class="item"><a href="/mallPages/aboutUs.php">About us</a></li>
                    <li class="item"><a href="/mallPages/fees.php">Copyright</a></li>
                    <li class="item subMenu2"><a href="#">Browse</a></li>
                    <li class="item item2"><a href="/mallPages/BrowseStoreLetter.php">Browse By name</a></li>
                    <li class="item item2"><a href="/mallPages/BrowseStoreCategory.php">Browse By category</a></li>
                    <li class="item"><a href="/mallPages/FAQs.php">FAQs</a></li>
                    <li class="item"><a href="/mallPages/contact.php">Contact</a></li>
                    <li class="item account_mall_nav"><a>My Account</a></li>
                    <li class="toggle"><span class="bars"></span><li>
                </ul>
            </nav>
        </header>

        <main>
            <div class="introduction">
                <h3>Account Information</h3>
            </div>
            
            <div class="main-container">
                <div class="left-container">
                    <img src="../../resources/images/MyAccount/avatar1.jpeg" alt="Profile Picture">
                </div>

                <div class="right-container">
                    <div class="row">
                        Name: Bruce Wayne
                    </div>
                    <div class="row">Phone: 735-185-7301</div>
                    <div class="row email_my_account"></div>
                    <div class="row">Gender: Male</div>
                    <div class="row">Date of Birth: March 30, 1939</div>
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
                require '../components/footer.php';
            ?>
    </div>
    <script src="../../scripts/cookie-consent.js"></script>
    <script src="../../scripts/mall_index.js"></script>
    <script src="../../scripts/my_account.js"></script>
</body>
</html>