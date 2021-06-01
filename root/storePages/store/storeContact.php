<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="/style/Store/common.css">
        <link rel="stylesheet" href="/style/mall/Contact/contact.css">
        <link rel="stylesheet" href="/style/cookie-consent/cookie-consent.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
    </head>

    <body>
        <div class="boxWrapper">
            <?php
                require $_SERVER["DOCUMENT_ROOT"] . "/storePages/store/components/navbar.php";
                get_navbar();
            ?>
    
            <main>
                <div class="wrapper">
                    <form action="#" method="POST" novalidate>
                        <h3>Contact Form</h3>
                        <div class='status'></div>
                        <div class="field-input">
                            <div class="input_header">
                                <label for="purpose">Contact purpose</label>
                            </div>
                            
                            <select name="purpose" id="purpose" required>
                                <option value="business">Business</option>
                                <option value="personal">Personal</option>
                            </select>
                        </div>
                        
                        <!-- At least 3 letters -->
                        <div class="field-input">
                            <div class="input_header">
                                <label for="fullname">Full Name</label>
                            </div>
                            
                            <input type="text" name="fullname" id="fullname" maxlength="50" placeholder="Nguyen Van Anh" autocomplete="off">
                            <span class='fullname-error errorMessage'></span>
                        </div>


                        <!-- Valid form [name]@[domain]
                        * [name] at least 3 characacters, consists of letters (a-z A-Z), digits and dots
                        Dots cannot be next to each other and dot cannot located at the beginning or at the end
                        * [domain] consists of letters (a-z A-Z), digits and at least one dot (required for dot is the same with the [name])
                        after the last dot, contains only letters has at least 2 characters and at most 5 characters -->
                        <div class="field-input">
                            <div class="input_header">
                                <label for="email">Email</label>
                            </div>
                            
                            <input type="email" name="email" id="email" maxlength="100" placeholder="nguyenvanang@gmail.com">
                            <span class='errorMessage email-error'></span>
                        </div>

                         <!-- Contains 9 to 1  digits, can use space, dot and dash (not at the beginning or at the end, cannot be next to each other)
                        * Valid: 0123456789, 0-1-2-3.4.5 6.7-8-9, 0123.345-789 
                        * Invalid: 01234567890123, (0123)456789, 012..3456789 -->
                        <div class="field-input">
                            <div class="input_header">
                                <label for="phone">Phone Number</label>
                            </div>
                            
                            <input type="tel" name="phone" id="phone" placeholder="0741472941">
                            <span class='phone-error errorMessage'></span>
                        </div>

                        <!-- One option for prefer contact method -->
                        <div class="field-input">
                            <div class="input_header contact_method">
                            Contact Method
                            </div>
                            
                            <div class="method_selection">
                                <input type="radio" name="contactMethod" value="phone" id="phoneMethod">
                                <label for="phoneMethod" class="method">Phone</label>
                                <br>
                                <input type="radio" name="contactMethod" value="email" id="emailMethod">
                                <label for="emailMethod" class="method">Email</label>
                            </div>
                            <span class='contactMethod-error errorMessage'></span>
                            
                        </div>
                        <!-- One option for prefer contact day -->
                        <div class="field-input">
                            <div class="input_header contact">
                            Contact Day 
                            </div>
                            
                            <div class="day_selection">
                                <div>
                                    <input type="checkbox" name="contactDay" value="monday" id="mon">
                                    <label for="mon" class="WeekDay">Monday</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="contactDay" value="tuesday" id="tues">
                                    <label for="tues" class="WeekDay">Tuesday</label>
                                </div>
                                
                                <div>
                                    <input type="checkbox" name="contactDay" value="wednesday" id="wed"> 
                                    <label for="wed" class="WeekDay">Wednesday</label>
                                </div>
                                
                                <div>
                                    <input type="checkbox" name="contactDay" value="thursday" id="thurs">          
                                    <label for="thurs" class="WeekDay">Thursday</label>
                                </div>

                                <div>
                                    <input type="checkbox" name="contactDay" value="friday" id="fri">
                                    <label for="fri" class="WeekDay">Friday</label>
                                </div>
                                
                                <div>
                                    <input type="checkbox" name="contactDay" value="saturday" id="sat">
                                    <label for="sat" class="WeekDay">Saturday</label> 
                                </div>
                               
                                <div>
                                    <input type="checkbox" name="contactDay" value="sunday" id="sun">
                                    <label for="sun" class="WeekDay">Sunday</label>
                                </div>
                                
                                <div>
                                    <input type="button" class="checkAll_btn" id="checkAll" value="ALL">
                                </div>
                                
                            </div>
                            <span class='contactDay-error errorMessage'></span>
                            
                        </div>

                        <!-- 50 to 500 letters
                        * Update continuosly about the current status 
                        * Too short: You can type zzz more letters
                        * Too long: Deleting zzz letters is needed
                        * Can type: You can type zzz more letters -->
                        <div class="field-input">
                            <div class="input_header">Message</div>
                            <textarea name="message" id="message" placeholder="Message"></textarea>
                            <span class='message-error errorMessage'></span>
                        </div>

                        <div class="btn">
                            <input class="resetBtn" type="reset" value="Clear">
                            <input class="submitBtn" type="submit" value="Send">
                        </div>
                    
                    

                    </form>
                </div>
                <div class="cookie-container">
                    <p>
                        We use cookie to store the data given to us stored locally on your machine to give you the best experience the site. To find out more, please read our <a href="mallPages/privacy.html">privacy policy</a>.
                    </p>
                    <button class="cookie-butn">Okay</button>
                </div>
                
                
            </main>
        
            <?php
                require $_SERVER["DOCUMENT_ROOT"] . "/storePages/store/components/footer.php";
                get_footer();
            ?>
        </div>    
        <script src="/scripts/cookie-consent.js"></script>
        <script src="/scripts/store_index.js"></script>
        <script src="/scripts/mall_contact.js"></script>
        <script src="/scripts/cart_quantity.js"></script>
    </body>
</html>
