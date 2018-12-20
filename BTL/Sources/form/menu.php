<?php
// core configuration
include_once "config/core.php";
 
// set page title
$page_title="Movie";
 
// include login checker

// include page header HTML

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Movie</title>
    <link rel="shortcut icon" type="image/x-icon" href="imgs/icon.ico">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.php">
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>

</head> 
<body>
    <!-- menu -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand" href="movie.php">
            <img src="imgs/logo.png" alt="Trang Chủ">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">menu</span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Thể loại</a>
                    <div class="dropdown-content" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="action.html">Anime</a>
                        <a class="dropdown-item" href="fantasy.html">Hành động</a>
                        <a class="dropdown-item" href="adventure.html">Kinh dị</a>
                        <a class="dropdown-item" href="School.html">Hài hước</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quốc gia</a>
                    <div class="dropdown-content" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="f2015.html">Âu Mỹ</a>
                        <a class="dropdown-item" href="f2015.html">Hàn Quốc</a>
                        <a class="dropdown-item" href="f2015.html">Trung Quốc</a>
                        <a class="dropdown-item" href="f2015.html">Nhật Bản</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tintuc.html">Phim mới</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="bxh.html">Phim chiếu rạp</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        
        <?php
        // login and logout options will be here 
        // check if users / customer was logged in
        // if user was logged in, show "Edit Profile", "Orders" and "Logout" options
        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){
        ?>
        <ul class="nav navbar-nav navbar-right">
            <li <?php echo $page_title=="Edit Profile" ? "class='active'" : ""; ?>>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    &nbsp;&nbsp;<?php echo htmlspecialchars($_SESSION['username']); ?>
                    &nbsp;&nbsp;<span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu" id="logout">
                    <li><a href="<?php echo $home_url; ?>logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
        <?php
        }
         
        // show login and register options here 
        // if user was not logged in, show the "login" and "register" options
        else{
        ?>
        <ul class="nav navbar-nav navbar-right">
            <li <?php echo $page_title=="Login" ? "class='active'" : ""; ?>>
                <a href="<?php echo $home_url; ?>login.php">
                    <span class="glyphicon glyphicon-log-in"></span> Log In
                </a>
            </li>
         
            <li <?php echo $page_title=="Register" ? "class='active'" : ""; ?>>
                <a href="<?php echo $home_url; ?>register.php">
                    <span class="glyphicon glyphicon-check"></span> Register
                </a>
            </li>
        </ul>
        <?php
        }
        ?>
        
    </nav>
    <br><br><br>

        <?php
            // to prevent undefined index notice
            $action = isset($_GET['action']) ? $_GET['action'] : "";
         
            // if login was successful
            if($action=='login_success'){
                echo "<div class='alert alert-info'>";
                    echo "<strong>Hi " . $_SESSION['username'] . ", welcome back!</strong>";
                echo "</div>";
            }
         
            // if user is already logged in, shown when user tries to access the login page
            else if($action=='already_logged_in'){
                echo "<div class='alert alert-info'>";
                    echo "<strong>You are already logged in.</strong>";
                echo "</div>";
            }
         
            // content once logged in
       
        ?>