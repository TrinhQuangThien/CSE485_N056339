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
            <ul class="navbar-nav">
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
                    <a class="dropdown-item" href="#">Đổi mật khẩu</a>
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
    <br><br>

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

        <!-- Slide Image -->

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="imgs/ban1.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Spiderman Home Coming</h5>
                        <p>3.005.555 lượt xem</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="imgs/ban2.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Thạch đại gia</h5>
                        <p>4.903.609 lượt xem</p>
                        <span></span>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="imgs/ban3.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Stars war</h5>
                        <p>6.065.280 lượt xem</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <br><br>

        <!-- Main -->

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <section id="single-home">
                        <h2 class="header-film">Phim hay</h2>
                        <ul class="MovieList">
                            <li>
                                <article class="TPost">
                                    <a href="venom.html">
                                        <img class="card-img-top" alt="venom" src="imgs/venom2.jpg" />
                                        <div class="card-block">
                                            <h5 class="card-title">
                                                Venom
                                            </h5>
                                            <p class="card-text">
                                                1 tuần trước - 1000 lượt xem
                                            </p>
                                        </div>
                                    </a>
                                </article>
                            </li>
                            <li>
                                <article class="TPost">
                                    <a href="grinch.html">
                                        <img class="card-img-top" alt="grinch" src="imgs/grinch.jpg" />
                                        <div class="card-block">
                                            <h5 class="card-title">
                                                The Grinch
                                            </h5>
                                            <p class="card-text">
                                                1 tuần trước - 1000 lượt xem
                                            </p>
                                        </div>
                                    </a>
                                </article>
                            </li>
                            <li>
                                <article class="TPost">
                                    <a href="spider-man-home-coming.html">
                                        <img class="card-img-top" alt="spider-man-home-coming" src="imgs/spiderman1.jpg" />
                                        <div class="card-block">
                                            <h5 class="card-title">
                                                Spider-man: Home Coming
                                            </h5>
                                            <p class="card-text">
                                                1 tuần trước - 1000 lượt xem
                                            </p>
                                        </div>
                                    </a>
                                </article>
                            </li>
                            <li>
                                <article class="TPost">
                                    <a href="venom.html">
                                        <img class="card-img-top" alt="ghostrider" src="imgs/ghostrider.jpg" />
                                        <div class="card-block">
                                            <h5 class="card-title">
                                                Ghost Rider
                                            </h5>
                                            <p class="card-text">
                                                1 tuần trước - 1000 lượt xem
                                            </p>
                                        </div>
                                    </a>
                                </article>
                            </li>
                            <li>
                                <article class="TPost">
                                    <a href="venom.html">
                                        <img class="card-img-top" alt="transformers3" src="imgs/tran3.jpg" />
                                        <div class="card-block">
                                            <h5 class="card-title">
                                                Transformers 3: Dark of the Moon
                                            </h5>
                                            <p class="card-text">
                                                1 tuần trước - 1000 lượt xem
                                            </p>
                                        </div>
                                    </a>
                                </article>
                            </li>
                            <li>
                                <article class="TPost">
                                    <a href="venom.html">
                                        <img class="card-img-top" alt="transformers4" src="imgs/tran4.jpg" />
                                        <div class="card-block">
                                            <h5 class="card-title">
                                                Transformers 4: Age of Extinction
                                            </h5>
                                            <p class="card-text">
                                                1 tuần trước - 1000 lượt xem
                                            </p>
                                        </div>
                                    </a>
                                </article>
                            </li>
                            <li>
                                <article class="TPost">
                                    <a href="venom.html">
                                        <img class="card-img-top" alt="transformers5" src="imgs/tran5.jpg" />
                                        <div class="card-block">
                                            <h5 class="card-title">
                                                Transformers 5: The Last Knight
                                            </h5>
                                            <p class="card-text">
                                                1 tuần trước - 1000 lượt xem
                                            </p>
                                        </div>
                                    </a>
                                </article>
                            </li>
                            <li>
                                <article class="TPost">
                                    <a href="venom.html">
                                        <img class="card-img-top" alt="hulk" src="imgs/hulk.jpg" />
                                        <div class="card-block">
                                            <h5 class="card-title">
                                                Hulk
                                            </h5>
                                            <p class="card-text">
                                                1 tuần trước - 1000 lượt xem
                                            </p>
                                        </div>
                                    </a>
                                </article>
                            </li>

                        </ul>
                    </section>

                    <!-- pagination -->

                    <nav class="page-list">
                        <ul class="pagination pg-dark">
                            <li class="page-item">
                                <a class="page-link" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link">1</a></li>
                            <li class="page-item"><a class="page-link">2</a></li>
                            <li class="page-item"><a class="page-link">3</a></li>
                            <li class="page-item"><a class="page-link">4</a></li>
                            <li class="page-item"><a class="page-link">5</a></li>
                            <li class="page-item">
                                <a class="page-link" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- scrollbar -->
                <div class="col-md-4">
                    <div class="top-film">
                        <h2 class="header-film">Trailer phim mới</h2>                                   
                        <div class="scrollbar scrollbar-primary">
                            <div class="force-overflow">
                                <ul class="list-top-film">
                                    <li class="list-top-film-item">
                                        <a href="Mutants.html">
                                            <div>
                                                <img class="list-top-film-item-thumb" src="imgs/x-man8.jpg" alt="x-man">
                                            </div>
                                            <div class="list-top-film-item-info">
                                                <span class="title-film">X-Man: Dark Phoenix</span>
                                                <span class="time-film">107 phút</span>
                                                <span class="view-film">Lượt xem: 120000</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-top-film-item">
                                        <a href="Mutants.html">
                                            <div>
                                                <img class="list-top-film-item-thumb" src="imgs/bee.jpg" alt="bumblebee">
                                            </div>
                                            <div class="list-top-film-item-info">
                                                <span class="title-film">Bumblebee</span>
                                                <span class="time-film">107 phút</span>
                                                <span class="view-film">Lượt xem: 120000</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-top-film-item">
                                        <a href="Mutants.html">
                                            <div>
                                                <img class="list-top-film-item-thumb" src="imgs/avenger4.jpg" alt="avengers4">
                                            </div>
                                            <div class="list-top-film-item-info">
                                                <span class="title-film">Avengers 4: Annihilation</span>
                                                <span class="time-film">107 phút</span>
                                                <span class="view-film">Lượt xem: 120000</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-top-film-item">
                                        <a href="Mutants.html">
                                            <div>
                                                <img class="list-top-film-item-thumb" src="imgs/alita.jpg" alt="alita">
                                            </div>
                                            <div class="list-top-film-item-info">
                                                <span class="title-film">Alita: Thiên thần chiến binh</span>
                                                <span class="time-film">107 phút</span>
                                                <span class="view-film">Lượt xem: 120000</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-top-film-item">
                                        <a href="Mutants.html">
                                            <div>
                                                <img class="list-top-film-item-thumb" src="imgs/aqua.jpg" alt="aquaman">
                                            </div>
                                            <div class="list-top-film-item-info">
                                                <span class="title-film">Aquaman: Đế vương Atlatis</span>
                                                <span class="time-film">107 phút</span>
                                                <span class="view-film">Lượt xem: 120000</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-top-film-item">
                                        <a href="Mutants.html">
                                            <div>
                                                <img class="list-top-film-item-thumb" src="imgs/godzilla.jpg" alt="godzilla">
                                            </div>
                                            <div class="list-top-film-item-info">
                                                <span class="title-film">Godzilla: King of the Monsters</span>
                                                <span class="time-film">107 phút</span>
                                                <span class="view-film">Lượt xem: 120000</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-top-film-item">
                                        <a href="Mutants.html">
                                            <div>
                                                <img class="list-top-film-item-thumb" src="imgs/spiderman.jpg" alt="spider-man-far-from-home">
                                            </div>
                                            <div class="list-top-film-item-info">
                                                <span class="title-film">Spider Man: Far From Home</span>
                                                <span class="time-film">107 phút</span>
                                                <span class="view-film">Lượt xem: 120000</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-top-film-item">
                                        <a href="Mutants.html">
                                            <div>
                                                <img class="list-top-film-item-thumb" src="" alt="">
                                            </div>
                                            <div class="list-top-film-item-info">
                                                <span class="title-film">Mutants</span>
                                                <span class="time-film">107 phút</span>
                                                <span class="view-film">Lượt xem: 120000</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-top-film-item">
                                        <a href="Mutants.html">
                                            <div>
                                                <img class="list-top-film-item-thumb" src="" alt="">
                                            </div>
                                            <div class="list-top-film-item-info">
                                                <span class="title-film">Mutants</span>
                                                <span class="time-film">107 phút</span>
                                                <span class="view-film">Lượt xem: 120000</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-top-film-item">
                                        <a href="Mutants.html">
                                            <div>
                                                <img class="list-top-film-item-thumb" src="" alt="">
                                            </div>
                                            <div class="list-top-film-item-info">
                                                <span class="title-film">Mutants</span>
                                                <span class="time-film">107 phút</span>
                                                <span class="view-film">Lượt xem: 120000</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>                                          
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer-->

        <div class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center"> 
                        <p> <a href="https://goo.gl/maps/AUq7b9W7yYJ2" target="_blank"> Fake street, 100 NYC - 20179, USA</a> </p>
                        <p> <a href="tel:+246 - 542 550 5462">+1 - 256 845 87 86</a> </p>
                        <p class="mb-0"> <a href="mailto:info@pingendo.com">info@pingendo.com</a> </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 d-flex align-items-center justify-content-center my-3"> <a href="#">
                        <i class="d-block fa fa-facebook-official text-muted fa-lg mr-2"></i>
                    </a> <a href="#">
                        <i class="d-block fa fa-instagram text-muted fa-lg mx-2"></i>
                    </a> <a href="#">
                        <i class="d-block fa fa-google-plus-official text-muted fa-lg mx-2"></i>
                    </a> <a href="#">
                        <i class="d-block fa fa-pinterest-p text-muted fa-lg mx-2"></i>
                    </a> 
                    <i class="d-block fa fa-twitter text-muted fa-lg ml-2"></i>
                </a> 
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p class="mb-0">© 2014-2018 Movie. All rights reserved</p>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
