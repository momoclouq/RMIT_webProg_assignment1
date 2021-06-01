<?php
    session_start();

    //check if the admin is logged in
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]["type"] != "admin"){
        header('location: ../Account/myAccount-Log-in.php');
    }

    //get data from file
    $source_link = $_SERVER["DOCUMENT_ROOT"] . "/../files/common_pages/aboutus.json";
    $source_str = file_get_contents($source_link);
    $source = json_decode($source_str);
    $link = $_SERVER["DOCUMENT_ROOT"] . "/resources/images/profilePic";
    //process the change_request
    if($_POST['change_request'] == "1"){
       
        foreach($source as $name => $image_link){
            if(isset($_FILES[$name])){
                
                $errors= array();
                $file_name = $_FILES[$name]['name'];
                $file_size =$_FILES[$name]['size'];
                $file_tmp =$_FILES[$name]['tmp_name'];
                $file_type=$_FILES[$name]['type'];
                $file_ext=strtolower(end(explode('.',$_FILES[$name]['name'])));
                    
                $extensions= array("jpeg","jpg","png");
                    
                if(in_array($file_ext,$extensions)=== false){
                    $errors[]="extension not allowed, please choose a JPEG or PNG file.";
                }
                    
                if($file_size > 2097152){
                    $errors[]='File size must be excately 2 MB';
                }
                    
                if(empty($errors)==true){
                    move_uploaded_file($file_tmp,$link."/".$file_name);
                    $path_separated = explode("/", $image_link);
                    $path_separated[count($path_separated)-1] = $file_name;
                    $path = implode("/",$path_separated);
                    $source->$name = $path;
                }
            }
        }       
    }

    $newSource = json_encode($source);
    file_put_contents($source_link, $newSource);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="admin dashboard">
    <meta name="author" content="Team Developers">
    <title>Edit Developers Profile Picture</title>

    <link rel="stylesheet" href="/style/mall/common.css">
    <link rel="stylesheet" href="/style/cookie-consent/cookie-consent.css">
    <link rel="stylesheet" href="/style/mall/admin/dashboard.css">
    <link rel="stylesheet" href="/style/mall/admin/adminAboutUs.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">


</head>

<body>
<div class="boxWrapper">
    <?php
        require $_SERVER["DOCUMENT_ROOT"] . "/mallPages/components/navbar.php";
    ?>

    <main>
        <div class="back_btn"><a href="admin_dashboard.php">Back to dashboard</a></div>
        <h1 class="dashboard_title">Change the profile picture</h1>
        <?php 
            if($_POST['change_request'] == "1") echo "<h2 class=\"status_success\">Profile picture have been updated</h2>";
        ?>
        <br>
    <!--create form from source data-->
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="change_container">
                <?php
                    foreach($source as $name => $image_link){
                        $path_separated = explode("/", $image_link);
                        $filename = $path_separated[count($path_separated)-1];
                        $format_name = ucfirst($name);
                        $output = <<<"HTML"
                            <section class="individual">
                                <h2>Developer: $format_name</h2>
                                <input class="image_upload" type="file" id=$name value=$filename name=$name>
                                <br>
                                <img class="profile_pic" src=$image_link alt=$name>
                            </section>
                        HTML;
                        echo $output;
                    }
                ?>
            </div>
            
            
            <input type="hidden" name="change_request" value="1">
            <button class="submit_btn" type="submit">Submit changes</button>
        </form>

         
    </main>

    <?php
        require $_SERVER["DOCUMENT_ROOT"] . "/mallPages/components/footer.php";
    ?> 
    </div>

    <script src="/scripts/mall_index.js"></script>
    <script src="/scripts/cookie-consent.js"></script>
</body>

</html>