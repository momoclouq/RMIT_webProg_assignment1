<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Forgot password reset page">
    <meta name="keywords" content="Forgot password email phone number mall account">
    <meta name="author" content="Team Developers">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Assistance</title>

    <link rel="stylesheet" href="../../style/mall/common.css">
    <link rel="stylesheet" href="../../style/mall/forgotPassword/forgetPass.css">
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
            <div class="container">
                <div class="description-box">
                    <h3>Password Assistance</h3>
                    <p>Enter the email address or phone number associated with your mall account</p>
                </div>
                <div class="box">
                    <form action="#" method="post">
                        <div class="input-field">
                            <label for="email" class="label-name">
                                <span class="content-name">Email address or phone number</span>
                            </label>
                            <input type="email" name="email" id="email" required autocomplete="off">
                        </div>
                        
                        <input class="submit" type="submit" value="Continue">
                    </form>
                </div>
                
                <div class="end-box">
                    <p>If you no longer use the email address or phone number associated with your account, you may contact <a href="#">Custormer Service</a> for help restoring to access to your account.</p>  
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
</body>
</html>