<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fees information for using mall services">
    <meta name="keywords" content="Fee information mall services substription plan">
    <meta name="author" content="Team Developers">
    <title>Subscription plan</title>

    <link rel="stylesheet" href="../style/mall/common.css">
    <link rel="stylesheet" href="../style/mall/fee/fee.css">
    <link rel="stylesheet" href="../style/cookie-consent/cookie-consent.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="boxWrapper">
        <?php
          require './components/navbar.php';
        ?>
    
        <main>
           
                <section class="main-content">
                    <div class="introduction">
                        <h3>Choose your plan</h3>
                        <p>We offer a lot of plans that will suit you. Please choose the best that fit you. We are looking forward to having you in our team with us</p>
                    </div>
                    
                    <div class="container">
                        <div class="card">
                            <div class="header">
                                <div class="plan-name">Silver</div>
                                <div class="price">
                                    <div class="dollar-sign">$</div>
                                    <p>500</p>
                                    <div class="monthly-fee">/month</div>
                                </div>
                            </div>
                            
                            <div class="description">
                                <div class="commission"><span class="verify">&#x261E;</span> Commission 30% per product</div>
                                <div class="notify"><span class="verify">&#9989;</span>Get discount voucher</div>
                                <div class="social-analytics"><span class="verify">&#10060;</span>Social Analytics</div>
                                <div class="advanced-social-analytics"><span class="verify">&#10060;</span>Advanced Social Analytics </div>
                            </div>
                            
                        </div>
    
    
                        <div class="card">
    
                            <div class="header">
                                <div class="plan-name">Gold</div>
                                <div class="price">
                                    <div class="dollar-sign">$</div>
                                    <p>1000</p>
                                    <div class="monthly-fee">/month</div>
                                </div>
                            </div>
                            <div class="description">
                                <div class="commission"><span class="verify">&#x261E;</span> Commission 20% per product</div>
                                <div class="notify"><span class="verify">&#9989;</span>Get discount voucher</div>
                                <div class="social-analytics"><span class="verify">&#9989;</span>Social Analytics</div>
                                <div class="advanced-social-analytics"><span class="verify">&#10060;</span>Advanced Social Analytics</div>
                            </div>
                        </div>
    
    
                        <div class="card">
                            <div class="header">
                                <div class="plan-name">Platinum</div>
                                <div class="price">
                                    <div class="dollar-sign">$</div>
                                    <p>2000</p>
                                    <div class="monthly-fee">/month</div>
                                </div>
                            </div>
                            <div class="description">
                                <div class="commission"><span class="verify">&#x261E;</span> Commission 15% per product</div>
                                <div class="notify"><span class="verify">&#9989;</span>Get discount voucher</div>
                                <div class="social-analytics"><span class="verify">&#9989;</span>Social Analytics</div>
                                <div class="advanced-social-analytics"><span class="verify">&#9989;</span>Advanced Social Analytics</div>
                            </div>
                        </div>
                   
                    </div>
                </section>
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