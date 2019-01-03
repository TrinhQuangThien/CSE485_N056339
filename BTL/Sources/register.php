<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="shortcut icon" type="image/x-icon" href="imgs/icon.ico">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body class="bg-light">

<?php
// define variables and set to empty values
$nameErr = $emailErr = $usernameErr = $passwordErr = "";
$name = $email = $username = $password = "";

if (isset($_POST['register'])) {
  if (empty($_POST["name"])) {
    $nameErr = "* Name is required";
  } 
  if (empty($_POST["email"])) {
    $emailErr = "* Email is required";
  }
  if (empty($_POST["username"])) {
    $usernameErr = "* Username is required";
  }
  if (empty($_POST["password"])) {
    $passwordErr = "* Password is required";
  }
  else{
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "movie";
    $con = mysqli_connect($host,$user,$pass,$db);
    mysqli_set_charset($con,'UTF8');

    $name = isset($_POST["name"])?$_POST["name"]:"";
    $username = isset($_POST["username"])?$_POST["username"]:"";
    $email = isset($_POST["email"])?$_POST["email"]:"";
    $password = isset($_POST["password"])?$_POST["password"]:"";

        // Mã khóa mật khẩu
     $password = md5($password);

        //Kiểm tra tên đăng nhập này đã có người dùng chưa
    if (mysqli_num_rows(mysqli_query($con, "SELECT username FROM users WHERE username='$username'")) > 0){
        echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

        //Lưu thông tin thành viên vào bảng

        $sql = mysqli_query($con,"insert into `users`(`name`,`username`,`email`,`password`) values('$name','$username','$email','$password')");

    if($sql){
        echo "Đăng ký thành công! <a href='login.php'>Đăng nhập</a>";
    }
  }

}
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">

        <p>&larr; <a href="movie.php">Home</a>

        <h4>Trang Đăng ký Tài Khoản</h4>
        <p>Đã có tài khoản? <a href="login.php">Đăng nhập tại đây</a></p>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

            <div class="form-group">
                <label for="name">Your name</label>
                <input class="form-control" type="text" name="name" placeholder="Name" value="<?php echo $name;?>" />
                <span class="error"><?php echo $nameErr;?></span>
            </div>

            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" type="text" name="username" placeholder="Username" value="<?php echo $username;?>" />
                <span class="error"><?php echo $usernameErr;?></span>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" placeholder="Email" value="<?php echo $email;?>" />
                <span class="error"><?php echo $emailErr;?></span>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Password" value="<?php echo $password;?>" />
                <span class="error"><?php echo $passwordErr;?></span>
            </div>

            <input type="submit" class="btn btn-success btn-block" name="register" value="Đăng ký" />

        </form>
            
        </div>

        <div class="col-md-6">
        </div>

    </div>
</div>

</body>
</html> 