<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Frequently asked questions when using mall services">
    <meta name="keywords" content="FAQs questions frequently mall services support help">
    <meta name="author" content="Team Developers">
    <title>FAQ</title>

    <link rel="stylesheet" href="/style/mall/common.css">
    <link rel="stylesheet" href="/style/mall/FAQ/FAQ.css">
    <link rel="stylesheet" href="/style/cookie-consent/cookie-consent.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
</head>
<body>
    <div class="boxWrapper">
        <?php
            require $_SERVER["DOCUMENT_ROOT"] . "/mallPages/components/navbar.php";
        ?>
        
        <main class="mallFAQs">
            <h1 class="FAQHeader">Questions and answers</h1>
            <section id="listQuestions">
                <article>
                    <div class="question"><span>Question 1:</span> What is the purpose of this mall?</div>
                    <div class="answer">While we do not intend to create this mall, we tried to think about what could potentially benefit the people and also make us lots of money. That was when we thought of a mall! To sell items at a reasonable profit</div>
                </article>
                <article>
                    <div class="question"><span>Question 2:</span> Are the items good and how can I check their origin?</div>
                    <div class="answer">As first, we did not know where the items came from either, we just sold them wishing that no one died using them. But now, we can proudly say that more than 70% of the products are under our company's supervision</div>
                </article>
                <article>
                    <div class="question"><span>Question 3:</span> I saw that the prices of the products are more expensive compared to other providers, what are the reasons behind this?</div>
                    <div class="answer">Our company strives to be the best provider since the beginning of the startup, that is the reason why our products are always more nicely packed and felt the most premium. The effort spent in developing such an experience was costly and we had to shift some of the cost to the consumer</div>
                </article>
                <article>
                    <div class="question"><span>Question 4:</span> Can I order products online through your website? and How?</div>
                    <div class="answer">We do not have that functionality at the moment, but we are working on it and will bring out the beta soon. You can access the service starting from August by purchasing the early access bundle.</div>
                </article>
                <article>
                    <div class="question"><span>Question 5:</span> Are there any discount programs for the consumers?</div>
                    <div class="answer">No, never. Haha, our team has not had such a good laugh for a while now, thank you for asking</div>
                </article>
                <article>
                    <div class="question"><span>Question 6:</span> I registered as a premium member at your mall and now I want to cancel my subscription but I saw on the website that It will cost me 100$. Is it a mistake?</div>
                    <div class="answer">Yes, that was a mistake from our IT team and we deeply apologised for the misinformation. Cancling the subscription should not cost 100$, the correct number would be 200$.</div>
                </article>
                <article>
                    <div class="question"><span>Question 6:</span>: I registered as a premium member at your mall and now I want to cancel my subscription but I saw on the website that It will cost me 100$. Is it a mistake?</div>
                    <div class="answer">Yes, that was a mistake from our IT team and we deeply apologised for the misinformation. Cancling the subscription should not cost 100$, the correct number would be 200$.</div>
                </article>
                <article>
                    <div class="question"><span>Question 6:</span> I registered as a premium member at your mall and now I want to cancel my subscription but I saw on the website that It will cost me 100$. Is it a mistake?</div>
                    <div class="answer">Yes, that was a mistake from our IT team and we deeply apologised for the misinformation. Cancling the subscription should not cost 100$, the correct number would be 200$.</div>
                </article>
                <article>
                    <div class="question"><span>Question 6:</span> I registered as a premium member at your mall and now I want to cancel my subscription but I saw on the website that It will cost me 100$. Is it a mistake?</div>
                    <div class="answer">Yes, that was a mistake from our IT team and we deeply apologised for the misinformation. Cancling the subscription should not cost 100$, the correct number would be 200$.</div>
                </article>
                <article>
                    <div class="question"><span>Question 6:</span> I registered as a premium member at your mall and now I want to cancel my subscription but I saw on the website that It will cost me 100$. Is it a mistake?</div>
                    <div class="answer">Yes, that was a mistake from our IT team and we deeply apologised for the misinformation. Cancling the subscription should not cost 100$, the correct number would be 200$.</div>
                </article>
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

    <script src="/scripts/mall_index.js"></script>
    <script src="/scripts/cookie-consent.js"></script>
</body>
</html>
