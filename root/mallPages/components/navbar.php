<header class="mallHeader">
    <nav>
        <ul class="menu">
            <li class="logo"><a href="/index.php">Logo</a></li>
            <li class="item mallName"><a href="/index.php">Shopping mall</a></li>

            <li class="item"><a href="/mallPages/aboutUs.php">About us</a></li>
            <li class="item"><a href="/mallPages/fees.php">Fees</a></li>
            <li class="item subMenu2"><a href="#">Browse</a></li>
            <li class="item item2"><a href="/mallPages/BrowseStoreLetter.php">Browse By name</a></li>
            <li class="item item2"><a href="/mallPages/BrowseStoreCategory.php">Browse By category</a></li>
            <li class="item"><a href="/mallPages/FAQs.php">FAQs</a></li>
            <li class="item"><a href="/mallPages/contact.php">Contact</a></li>
            <?php
                if($_SESSION['loggedin']['type'] == "admin"){
                    echo "<li class=\"item\"><a href=\"/mallPages/admin/admin_dashboard.php\">Admin Dash</a></li>";
                }
            ?>
            <li class="item account_mall_nav"><a href="/mallPages/Account/myAccount-logged-in.php">My Account</a></li>
            <li class="toggle"><span class="bars"></span><li>
        </ul>
    </nav>
</header>
