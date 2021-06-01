<?php
    session_start();
    //check if the user is already loggedin
    if(isset($_SESSION['loggedin'])) header('location: /mallPages/Account/myAccount-logged-in.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Register account for mall">
        <meta name="keywords" content="Register new account form details">
        <meta name="author" content="Team Developers">
        <title>Register a new account</title>

        <link rel="stylesheet" href="/style/mall/common.css">
        <link rel="stylesheet" href="/style/mall/registerAcc/register.css">
        <link rel="stylesheet" href="/style/cookie-consent/cookie-consent.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
    </head>

    <body>
        <div class="boxWrapper">
            <?php
                require $_SERVER["DOCUMENT_ROOT"] . "/mallPages/components/navbar.php";
            ?>
    
            <main class="mallRegister">
                <section class="registerForm">
                    <article class="introduction">
                        <h1>Sign up</h1>
                        <p>Create a user account to start shopping</p>
                        <p>Or register your store to start your business</p>
                    </article>

                    <form action="./process/process_register.php" method="POST" novalidate>
                        <label for="emailAddress">Email address</label>
                        <input type="email" id="emailAddress" name="emailAddress" placeholder="abcde@mail.com">
                        <span class="errorEmailMSG ErrorMessage"></span>
                        <br>
    
                        <label for="phone">Phone number</label>
                        <input type="tel" id="phone" name="phone" placeholder="123456789">
                        <span class="errorPhoneMSG ErrorMessage"></span>
                        <br>
    
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" minlength="8" required>
                        <span class="errorPasswordMSG ErrorMessage">
                            <?php if(isset($password_error)) {?>
                                <p><?php echo $password_error ?></p>
                            <?php } ?>
                        </span>
                        <br>
                        <label for="passwordRe">Retype password</label>
                        <input type="password" id="passwordRe" name="passwordRe" minlength="8" required>
                        <span class="errorPasswordReMSG ErrorMessage"></span>
                        <br>

                        <div class="line"></div>
    
                        <label for="profilePic">Upload your profile picture</label>
                        <input type="file" id="profilePic" name="profilePic" size="100">
                        <br>
    
                        <label for="firstName">First name</label>
                        <input type="text" id="firstName" name="firstName" placeholder="Minh">
                        <span class="errorFnameMSG ErrorMessage"></span>
                        <br>
    
                        <label for="lastName">Last name</label>
                        <input type="text" id="lastName" name="lastName" placeholder="Pham">
                        <span class="errorLnameMSG ErrorMessage"></span>
                        <br>
    
                        <label for="address">Address</label>
                        <input type="text" id="address" name="address" placeholder="somewhere">
                        <span class="errorAddressMSG ErrorMessage"></span>
                        <br>
    
                        <label for="city">City</label>
                        <input type="text" id="city" name="city" placeholder="Ho Chi Minh">
                        <span class="errorCityMSG ErrorMessage">
                        </span>
                        <br>
    
                        <label for="zipcode">Zipcode</label>
                        <input type="text" id="zipcode" name="zipcode" pattern="\d{4,6}">
                        <span class="errorZipcodeMSG ErrorMessage"></span>
                        <br>
    
                        <label for="country">Country</label>
                        <select name="country">
                            <option value="AF">Afghanistan</option>
                            <option value="AL">Albania</option>
                            <option value="AI">Anguilla</option>
                            <option value="AU">Australia</option>
                            <option value="BE">Belgium</option>
                            <option value="BW">Botswana</option>
                            <option value="KH">Cambodia</option>
                            <option value="VN">Viet Nam</option>
                            <option value="YE">Yemen</option>
                        </select>
                        <br>
    
                        <label for="accountType">Account type</label>
                        <br>
                        <div class="options">
                            <label for="storeOwner">
                                store owner
                                <input type="radio" id="storeOwner" name="accountType" value="storeOwner" onclick="handleClick(this)">
                            </label>
                            
                            <label for="shopper">
                                shopper
                                <input type="radio" id="shopper" name="accountType" value="shopper" onclick="handleClick(this)">
                            </label>
                        </div>
                        <br>
    
                        <div class="forOwner hidden">
                            <label for="busiName">Business name</label>
                            <input type="text" id="busiName" name="busiName">
                            <br>
    
                            <label for="storeName">Store name</label>
                            <input type="text" id="storeName" name="storeName">
                            <br>
    
                            <label for="storeType">Type of Store</label>
                            <select>
                                <option value="department">Department</option>
                                <option value="grocery">Grocery</option>
                                <option value="restaurant">Restaurant</option>
                                <option value="clothing">Clothing</option>
                                <option value="accessory">Accessory</option>
                                <option value="pharmacy">Pharmacy</option>
                                <option value="technology">Technology</option>
                                <option value="pet">Pet</option>
                                <option value="toy">Toy</option>
                                <option value="speciality">Speciality</option>
                                <option value="thrift">Thrift</option>
                                <option value="service">Service</option>
                                <option value="kiosk">Kiosk</option>
                            </select>
                            
                            <br>
                        </div>
                        
                        <div class="options">
                            <input type="reset" value="Reset form">
                            <input type="submit" id="submitBtn" value="Submit">
                        </div>
                        <?php
                            if(isset($_GET['success'])) {
                                $success_mes = <<<"HTML"
                                    <div class='status'>Account created</div>
                                HTML;
                                echo $success_mes;
                            }
                            else if(isset($_GET['fail'])){
                                $success_mes = <<<"HTML"
                                    <div class='status'>Account not created</div>
                                HTML;
                                echo $success_mes;
                            }
                        ?>
                    </form>
                </section>
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
        
        <!-- <script src="/scripts/mall_registerAccount.js"></script> -->
        <script src="/scripts/cookie-consent.js"></script>
    </body>
</html>