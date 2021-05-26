<!DOCTYPE html>
<html>
    <head>
        <title>Create admin account</title>
        <style>
            * {
                box-sizing: border-box;
            }

            .wrapper {
                width: 100vw;
                height: 100vh;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .create_form {
                border: 0.5px solid black;
                padding: 30px;
            }

            .input_field{
                padding: 5px;
                background:#e0e0e0;
                margin-bottom: 5px;
            }

            input[type="text"], input[type="password"]{
                width: 100%;
                padding: 5px;
                margin-top: 5px;
            }

            .buttons {
                display: flex;
                justify-content: space-between;
                flex-grow: 1;
            }

            .buttons button{
                width: 48%;
                padding: 20px;
                font-size: 1.1em;
            }
        </style>
    </head>

    <body>
    <!--process request and display result-->

<?php
    function check_admin_name($name, $source){
        //check validity
        if (strlen($name) < 8) return false;

        //check if name is in the system or not
        foreach ($source as $pair){
            if($pair->name == $name) return false;
        }
        return true;
    }

    function check_password($pass, $pass_repeat){
        if ($pass != $pass_repeat) return false;
        if (strlen($pass) < 7) return false;
        return true;
    }

    //process request
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        //collect data from request
        $admin_name = htmlentities($_POST['admin_name']);
        $password = htmlentities($_POST['pass']);
        $password_repeat = htmlentities($_POST['pass_repeat']);

        $source_str = file_get_contents("files/account/admin_pass.json");
        $source = json_decode($source_str);

        //check validity of the username
        if (!check_admin_name($admin_name, $source)) {
            echo "<h1>admin name is taken or is not valid</h1>";
        } else if (!check_password($password, $password_repeat)) {
            echo "<h1>password and password repeat are not the same, or the password is invalid</h1>";
        } else {
            //write data to source
            $source[] = array("name" => $admin_name, "pass" => hash("sha256" ,$password));
            file_put_contents("files/account/admin_pass.json", json_encode($source));
            echo "<h1>account created</h1>";
        }
    }
?>
        <div class="wrapper">
            <form class="create_form" action="install.php" method="post">
                <h1>Create an admin account</h1>
                <h2>Shopping mall system</h2>
                <hr>

                <div class="input_field">
                    <label for="admin_name"><b>Admin Name</b></label>
                    <br>
                    <input type="text" placeholder="Enter admin name" name="admin_name" required>
                </div>
                
                <div class="input_field">
                    <label for="pass"><b>Password</b></label>
                    <br>
                    <input type="password" placeholder="Enter Password" name="pass" required>
                </div>
                
                <div class="input_field">
                    <label for="pass_repeat"><b>Repeat Password</b></label>
                    <br>
                    <input type="password" placeholder="Repeat Password" name="pass_repeat" required>
                </div>

                <div class="buttons">
                    <button type="reset">Reset form</button>
                    <button type="submit" class="create_admin_btn">Create account</button>
                </div>
            </form>
        </div>
    </body>
</html>

