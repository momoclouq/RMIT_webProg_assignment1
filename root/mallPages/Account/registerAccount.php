<?php
$message = '';
$error = '';
if(isset($_POST["submit"])){
    // check empty inputs
    if(empty($_POST["emailAddress"])){
        $error = "<label class='text-danger'>Enter Email</label>";
    }
    else if(empty($_POST['phone'])){
         $error = "<label class='text-danger'>Enter Phone no.</label>";
     }
    else if(empty($_POST['password'])){
        $error = "<label class='text-danger'>Enter password</label>";
    }
    /*else if(empty($_POST['firstName'])){
        $error = "<label class='text-danger'>Enter your first name</label>";
    }
    else if(empty($_POST['lastName'])){
        $error = "<label class='text-danger'>Enter your last name</label>";
    }
    else if(empty($_POST['address'])){
        $error = "<label class='text-danger'>Enter address</label>";
    }
    else if(empty($_POST['city'])){
        $error = "<label class='text-danger'>Enter city name</label>";
    }
    else if(empty($_POST['zipcode'])){
        $error = "<label class='text-danger'>Enter zipcode</label>";
    }*/
    else {
    // data storing and scans
        if(file_exists('../../../files/account/user_pass.json')){
            $current_data = file_get_contents('../../../files/account/user_pass.json');
            $array_data = json_decode($current_data, true);
            $extra = array(
                'emailAddress'  =>  $_POST['emailAddress'],
                'phone'         =>  $_POST['phone'],
                'password'      =>  $_POST['password'],
                // 'firstName'     =>  $_POST['firstName'],
                // 'lastName'      =>  $_POST['lastName'],
                // 'address'       =>  $_POST['address'],
                // 'city'          =>  $_POST['city'],
                // 'zipcode'       =>  $_POST['zipcode']
                // // 'busiName'      =>  $_POST['busiName'],
                // // 'storeName'     =>  $_POST['storeName'],
                // // 'storeType'     =>  $_POST['storeType']
            );
            $array_data[] = $extra;
            $final_data = json_encode($array_data);
            if(file_put_contents('../../../files/account/user_pass.json', $final_data)){
                //for testing
                $message = "<label class='text-success'>Account register successful</label>";
            }
        }
        else{
            $error = 'Missing data file';
        }
    }
};
//password hash
$password = password_hash('password', PASSWORD_DEFAULT);
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

        <link rel="stylesheet" href="../../style/mall/common.css">
        <link rel="stylesheet" href="../../style/mall/registerAcc/register.css">
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
                        <li class="toggle"><span class="bars"></span><li>
                    </ul>
                </nav>
            </header>
    
            <main class="mallRegister">
                <section class="registerForm">
                    <article class="introduction">
                        <h1>Sign up</h1>
                        <p>Create a user account to start shopping</p>
                        <p>Or register your store to start your business</p>
                        <!-- display error message -->
                        <div class="">
                            <?php
                            if(isset($error)){
                                echo $error;
                            }
                            ?>
                        </div>
                    </article>

                    <form method = post novalidate>
                        <label for="emailAddress">Email address</label>
                        <input type="email" id="emailAddress" name="emailAddress" placeholder="abcde@mail.com">
                        <span class="errorEmailMSG ErrorMessage"></span>
                        <br>
    
                        <label for="phone">Phone number</label>
                        <input type="tel" id="phone" name="phone" placeholder="123456789">
                        <span class="errorPhoneMSG ErrorMessage"></span>
                        <br>
    
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                        <span class="errorPasswordMSG ErrorMessage"></span>
                        <br>
                        <label for="passwordRe">Retype password</label>
                        <input type="password" id="passwordRe" name="passwordRe" required>
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
                        <span class="errorCityMSG ErrorMessage"></span>
                        <br>
    
                        <label for="zipcode">Zipcode</label>
                        <input type="text" id="zipcode" name="zipcode" pattern="\d{4,6}">
                        <span class="errorZipcodeMSG ErrorMessage"></span>
                        <br>
    
                        <label for="country">Country</label>
                        <select>
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
                            <input type="submit" name="submit" id="submitBtn" value="Submit">
                        </div>
                        <!-- display feedback message -->
                        <!-- <div class='status'></div> -->
                        <div class="successMessage">
                            <?php
                            if(isset($message)){
                                echo $message;
                            }
                            ?>
                        </div>
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
                require '../components/footer.php';
            ?>
        </div>
        
        <script src="../../scripts/mall_registerAccount.js"></script>
        <script src="../../scripts/cookie-consent.js"></script>
    </body>
</html>