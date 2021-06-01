<?php
    //validate functions
    function validate_email($email, $source){
        //search through files, if found the email, reject
        foreach($source as $account){
            if($account['email'] == $email) return false;
        }

        $emailPattern = '/^(([^<>()\[\]\.,;:\s@"]+(\.[^<>()\[\]\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';
        if(preg_match($emailPattern, $email) > 0) return true;
        return false;
    }

    function validate_phone($phone, $source){
        //search through files, if found the phone, reject
        foreach($source as $account){
            if($account['phone'] == $phone) return false;
        }

        $phonePattern = '/^([0-9]{1}[-|.| ]?){9,11}$/';
        if(preg_match($phonePattern, $phone)) return true;
        return false;
    }

    function validate_password($password){
        $passPattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,20}$/';
        if(preg_match($passPattern, $password)) return true;
        return false;
    }

    function validate_passwordRe($password, $passwordRe){
        if ($password == $passwordRe) return true;
        return false;
    }

    function validate_firstName($firstName){
        $firstNamePattern = '/^[\D]{3,}$/';
        if(preg_match($firstNamePattern, $firstName)) return true;
        return false;
    }

    function validate_lastName($lastName){
        $lastNamePattern = '/^[\D]{3,}$/';
        if(preg_match($lastNamePattern, $lastName)) return true;
        return false;
    }

    function validate_address($address){
        $addressPattern = '/^([a-zA-Z0-9 ]){3,}$/';
        if(preg_match($addressPattern, $address)) return true;
        return false;
    }

    function validate_city($city){
        $cityPattern = '/^[\D]{3,}$/';
        if(preg_match($cityPattern, $city)) return true;
        return true;
    }

    function validate_zipcode($zipcode){
        $zipcodePattern = '/^[\d]{4,6}$/';
        if(preg_match($zipcodePattern, $zipcode)) return true;
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
    $source_link = $_SERVER["DOCUMENT_ROOT"] . "/../files/account/user_pass.json";
    $source_str = file_get_contents($source_link);
    $source = json_decode($source_str);

    //list of errors
    $errors = "";


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
        header("location: /mallPages/Account/registerAccount.php?success=1");
    } else {
        if(!validate_email($email, $source)) $errors = $errors . "&email=1"; 
        if(!validate_phone($phone, $source)) $errors = $errors . "&phone=1";
        if(!validate_password($password)) $errors = $errors . "&pass=1";
        if(!validate_passwordRe($password, $passwordRe)) $errors = $errors . "&passRe=1";
        if(!validate_firstName($firstName)) $errors = $errors . "&firstName=1";
        if(!validate_lastName($lastName)) $errors = $errors . "&lastName=1";
        if(!validate_address($address)) $errors = $errors . "&address=1";
        if(!validate_city($city)) $errors = $errors . "&city=1";
        if(!validate_zipcode($zipcode)) $errors = $errors . "&zipcode=1";
        header("location: /mallPages/Account/registerAccount.php?fail=1" . $errors);
    }
?>