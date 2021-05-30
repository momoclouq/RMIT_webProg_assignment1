<?php

function get_footer($store_id = "1"){
    $output = <<<"HTML"
        <footer class="mallFooter">
            <nav>
                <div class="FooterRow">
                <div class="FooterColumn">
                <div class="footerheading">Navigation</div>
                <ul><a href="/storePages/store/storeHome.php?id=$store_id">Home</a></ul>
                <ul><a href="/storePages/store/storeContact.php">Contact</a></ul>
                </div>
                <div class="FooterColumn">
                <div class="footerheading">Info</div>
                <ul><a href="/storePages/store/storeAboutUs.php">About us</a></ul>
                <ul><a href="/storePages/store/storeCopyright.php">CopyRight</a></ul>
                </div>
                <div class="FooterColumn">
                <div class="footerheading">Back To Mall</div>
                <ul><a href="/index.php">Home</a></ul>
                <ul><a href="/mallPages/BrowseStoreCategory.php">Browse</a></ul>
                <ul><a href="/mallPages/contact.php">Mall Support</a></ul>
                </div>
                </div>
            </nav>
        </footer>
    HTML;

    echo $output;
}

?>


