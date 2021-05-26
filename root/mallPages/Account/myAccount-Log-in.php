<?php
     session_start();

     function check_combination_admin($username, $password){
        $source_str = file_get_contents("../../../files/account/admin_pass.json");
        $source = json_decode($source_str);

        foreach ($source as $combination){
            if ($combination->name == $username && $combination->pass == hash("sha256", $password)) return true;
        }

        return false;
     }

     function check_combination_user($username, $password){
        $source_str = file_get_contents("../../../files/account/user_pass.json");
        $source = json_decode($source_str);

        foreach ($source as $combination){
            if ($combination->name == $username && $combination->pass == hash("sha256", $password)) return true;
        }

        return false;
     }

     if (isset($_POST['act'])){
         if (isset($_POST['username']) && isset($_POST['password'])){
             $username = htmlentities($_POST['username']);
             $password = htmlentities($_POST['password']);

             if (check_combination_admin($username, $password)){
                $_SESSION['loggedin'] = array("type" => "admin", "username" => $username);
                header('location: ../admin/admin_dashboard.php');
             } else if (check_combination_user($username, $password)){
                $_SESSION['loggedin'] = array("type" => "user", "username" => $username);
                header('location: myAccount-logged-in.php');
             } else {
                 $error = "invalid user or password, please try again";
             }
         }
     }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Log in form for mall account">
    <meta name="keywords" content="Signin Login mall account shopping password">
    <meta name="author" content="Team Developers">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>

    <link rel="stylesheet" href="../../style/mall/common.css">
    <link rel="stylesheet" href="../../style/mall/myaccount_login/myAccount_log_in.css">
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
                <h3>Sign-In</h3>
                <?php
                    if (isset($error)) {
                        echo "<p>$error</p>";
                    }
                ?>
                <div class="box">
                    <form action="myAccount-Log-in.php" method="post" novalidate>
                        <div class="input-field">
                            <input type="text" name="username" id="username" autocomplete="off" required>
                            <label for="username" class="label-name">
                                <span class="content-name">Email</span>
                            </label>
                        </div>
                        
                        <div class="input-field">
                            <input type="password" name="password" id="password" required>
                            <label for="password" class="label-name">
                                <span class="content-name">Password</span>
                            </label>
                            
                        </div>
                        <div id="log_in_error"></div>
                        
                        <input class="submit" name="act" type="submit" value="Continue">
                    </form>
                </div> 
                <div class="end-box">
                    <p><a href="/mallPages/Account/forgotPassword.php" class="pass">Forget password</a></p>  
                    <p><a href="/mallPages/Account/registerAccount.php" class="register">Register new account</a></p>  
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

    <script src="../../scripts/mall_index.js"></script>
    <script src="../../scripts/cookie-consent.js"></script>
    <script src="../../scripts/mall_account_log_in.js"></script>
</body>
</html>