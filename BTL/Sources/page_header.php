<?php
// core configuration
include_once "config/core.php";
// set page title
$page_title="MovieVG";

// include login checker

// include page header HTML

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo "$page_title"; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="../imgs/icon.ico">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.php">
    <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../jquery.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <!-- livesearch -->
    <script>
    function showResult(str) {
        if (str.length==0) { 
            document.getElementById("livesearch").innerHTML="";
            document.getElementById("livesearch").style.border="0px";
            return;
        }
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        } else {  // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
    xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
        document.getElementById("livesearch").innerHTML=this.responseText;
        document.getElementById("livesearch").style.border="1px solid #A5ACB2";
        }
    }
    xmlhttp.open("GET","livesearch.php?q="+str,true);
    xmlhttp.send();
    }
</script>

</head> 
<body>
    <!-- menu -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand" href="../movie.php">
            <img src="../imgs/logo.png" alt="Trang Chủ">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">menu</span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Thể loại</a>
                    <div class="dropdown-content" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="action.html">Anime</a>
                        <a class="dropdown-item" href="fantasy.html">Hành động</a>
                        <a class="dropdown-item" href="adventure.html">Kinh dị</a>
                        <a class="dropdown-item" href="School.html">Hài hước</a>
                        <a class="dropdown-item" href="">Tình cảm</a>
                        <a class="dropdown-item" href="">Cổ trang</a>
                        <a class="dropdown-item" href="">Võ thuật</a>
                        <a class="dropdown-item" href="">Viễn tưởng</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quốc gia</a>
                    <div class="dropdown-content" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="f2015.html">Âu Mỹ</a>
                        <a class="dropdown-item" href="f2015.html">Hàn Quốc</a>
                        <a class="dropdown-item" href="f2015.html">Trung Quốc</a>
                        <a class="dropdown-item" href="f2015.html">Nhật Bản</a>
                        <a class="dropdown-item" href="f2015.html">Việt Nam</a>
                        <a class="dropdown-item" href="f2015.html">Anh</a>
                        <a class="dropdown-item" href="f2015.html">Pháp</a>
                        <a class="dropdown-item" href="f2015.html">Ấn độ</a>
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
                <input class="form-control mr-sm-2" type="text" placeholder="Tìm kiếm" aria-label="Search" onkeyup="showResult(this.value)">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                <div id="livesearch"></div>
            </form>
        </div>
        
        <?php
        // login and logout options will be here 
        // check if users / customer was logged intdiv(dividend, divisor)
        // if user was logged in, show "Edit Profile", "Orders" and "Logout" options
        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){
            ?>
            <ul class="navbar-nav">
                <li <?php echo $page_title=="Edit Profile" ? "class='active'" : ""; ?> class="nav-item dropdown">
                    <a id="user" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo htmlspecialchars($_SESSION['username']); ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" id="logout">
                        <a class="dropdown-item" href="<?php echo $home_url; ?>logout.php" >Logout</a>
                        <a class="dropdown-item" href="<?php echo $home_url; ?>changepassword.php">Change password</a>
                    </div>
                </li>
            </ul>
        <?php
        }
        // show login and register options here 
        // if user was not logged in, show the "login" and "register" options
        else{
            ?>
            <ul class="navbar-nav">
                <li <?php echo $page_title=="Login" ? "class='active'" : ""; ?>>
                    <a href="<?php echo $home_url; ?>login.php">
                        <button class="buttonl">Login</button>
                    </a>
                </li>

                <li <?php echo $page_title=="Register" ? "class='active'" : ""; ?>>
                    <a href="<?php echo $home_url; ?>register.php">
                      <button class="buttong">Register</button>
                    </a>
                </li>
            </ul>
        <?php
        }
        ?>
  </nav>
  <br>
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
<br>