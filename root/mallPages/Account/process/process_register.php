<?php
    //validate functions
    function validate_email($email, $source){
        foreach($source as $line){
            if(strcmp($email,$line["email"]) == 0) {
                return false;
            }
        }
        if(preg_match('/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/',$email)){
            return true;
        }
            return false;       
    } 

    function validate_phone($phone, $source){
        foreach($source as $line){
            if(strcmp($phone,$line["phone"]) == 0) {
                return false;
            }
        }
        if(preg_match('/^([0-9]{1}[-|.| ]?){9,11}$/',$phone)){
            return true;
        }
            return false;
    }

    function validate_password($password){
        if(preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,20}$/',$password)){
            return true;
        }
            return false;
        // echo 'Invalid password';
    }

    function validate_passwordRe($password, $passwordRe){
        if($password !== $passwordRe){
            return false;
            echo 'Password does not match';
        } else return true;
    }


    function validate_firstName($firstName){
        if(preg_match('/^[\D]{3,}$/',$firstName)){
            return true;
        }   
        return false;
    }

    function validate_lastName($lastName){
        if(preg_match('/^[\D]{3,}$/',$lastName)){
            return true;
        }   
        return false;
    }

    function validate_address($address){
        if(preg_match('/^[\D]{3,}$/',$address)){
            return true;
        }
        return false;
    }

    function validate_city($city){
        if(preg_match('/^[\D]{3,}$/',$city)){
            return true;
        }
        echo "Invalid input";
        return false;
    }

    function validate_zipcode($zipcode){
        if(preg_match('/^[\d]{4,6}$/',$zipcode)){
        return true;
    } 
    return false;
    }

    //process data
    $email = $_POST['emailAddress'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $passwordRe = $_POST['passwordRe'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $zipcode = $_POST['zipcode'];

    //open file
    $source_link = $_SERVER["DOCUMENT_ROOT"] . "../../files/account/user_pass.json";
    $source_str = file_get_contents($source_link);
    $source = json_decode($source_str,true);

    //every section is valid
    if(validate_email($email, $source) 
    && validate_phone($phone, $source)
    && validate_password($password)
    && validate_passwordRe($password, $passwordRe)
    && validate_firstName($firstName)
    && validate_lastName($lastName)
    && validate_address($address)
    && validate_city($city)
    && validate_zipcode($zipcode)){
        //add new data to file
        $source[] = array(
            "email" => $email,
            "phone" => $phone,
            "password" => hash("sha256", $password),
            "firstName" => $firstName,
            "lastName" => $lastName,
            "address" => $address,
            "city" => $city,
            "zipcode" => $zipcode
        );
        $new_json = json_encode($source);
        file_put_contents($source_link, $new_json);

        //return to register page
        header('location: /mallPages/Account/registerAccount.php?success=1');
    } else {
        header('location: /mallPages/Account/registerAccount.php?fail=1');
    }
?>