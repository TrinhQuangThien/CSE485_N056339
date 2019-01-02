<?php
// core configuration
include_once "config/core.php";
 
// set page title
$page_title = "Login";
 
// include login checker
$require_login=false;
include_once "checklogin.php";

// default to false
$access_denied=false;
 
// post code will be here
// if the login form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // email check will be here
    // include classes
    include_once "config/database.php";  
    include_once "objects/user.php";
     
    // get database connection
    $database = new Database();
    $db = $database->getConnection();
     
    // initialize objects
    $user = new User($db);
    //check if username and password in the database
    $user->username=$_POST['username'];
     
    // check if email exists, also get user details using this emailExists() method
    $username_exists = $user->usernameExists();
   
    // login validation will be here
    // validate login
    
    //echo"$user->username";
    if (!$username_exists) echo"co";
    if ($username_exists && $user->username=$_POST['username']){
     
        // if it is, set the session value to true
        $_SESSION['logged_in'] = true;
        $_SESSION['users_id'] = $user->users_id;
        $_SESSION['access_level'] = $user->access_level;
        $_SESSION['username'] = htmlspecialchars($user->username, ENT_QUOTES, 'UTF-8') ;
           
        // if access level is 'Admin', redirect to admin section
        if($user->access_level=='Admin'){
            header("Location: {$home_url}admin.php?action=login_success");
        }
     
        // else, redirect only to 'Customer' section
        else{
            header("Location: {$home_url}movie.php?action=login_success");
        }
    }
     
    // if username does not exist or password is wrong
else{
        $access_denied=true;
    }
}
 
// login form html will be here
echo "<div class='container mt-5'>";
    echo "<div class='row'>";
        echo "<div class='col-md-6'>";

        echo "<p>&larr; <a href='movie.php'>Home</a>";

        echo "<h4>Trang Đăng Nhập</h4>";
        echo "<p>Không có tài khoản? <a href='register.php'>Đăng ký tại đây</a></p>";

        // get 'action' value in url parameter to display corresponding prompt messages
        $action=isset($_GET['action']) ? $_GET['action'] : "";

        // alert messages will be here
        
        // tell the user he is not yet logged in
        if($action =='not_yet_logged_in'){
            echo "<div class='alert alert-danger margin-top-40' role='alert'>Please login.</div>";
        }
         
        // tell the user to login
        else if($action=='please_login'){
            echo "<div class='alert alert-info'>
                <strong>Please login to access that page.</strong>
            </div>";
        }
         
        // tell the user if access denied
        if($access_denied){
            echo "<div class='alert alert-danger margin-top-40' role='alert'>
                Access Denied.<br /><br />
                Your username or password maybe incorrect
            </div>";
        }

        echo "<form class='form-signin' action='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "' method='post'>";

            echo "<div class='form-group'>";
                echo "<label for='username'>Username</label>";
                echo "<input class='form-control' type='text' name='username' placeholder='Username' />";
            echo "</div>";
            echo "<div class='form-group'>";
                echo "<label for='password'>Password</label>";
                echo "<input class='form-control' type='password' name='password' placeholder='Password' />";
            echo "</div>";

            echo "<input type='submit' class='btn btn-success btn-block' name='login' value='Đăng Nhập' />";

        echo "</form>";
            
        echo "</div>";

        echo "<div class='col-md-6'>";
            echo "<!-- isi dengan sesuatu di sini -->";
        echo "</div>";

    echo "</div>";
echo "</div>";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">

    
</body>
</html>