<?php
session_start();
$user = $_SESSION['username'];

if ($user)

{
//user is logged in
		if (isset($_POST['submit']))
		{
		//check fields		
		$oldpassword = md5($_POST['oldpassword']);
		$newpassword = md5($_POST['newpassword']);
		$repeatnewpassword = md5($_POST['repeatnewpassword']);
		
		//check pass against db
		$connect = mysqli_connect("localhost","root","");
		mysqli_select_db($connect,"movie");
		$queryget = mysqli_query($connect,"SELECT password FROM users WHERE username='$user'");	
		$row = mysqli_fetch_assoc($queryget);
		
		$oldpassworddb = $row['password'];		
		
		//check pass
		if ($oldpassword==$oldpassworddb)
		{
						
		//check twonew pass
		if ($newpassword==$repeatnewpassword)
		{
		//success
		//change pass in db					
			
				$querychange = mysqli_query($connect,"
				UPDATE users SET password='$newpassword' WHERE username='$user'");
				
				session_destroy();
				include_once "config/core.php";
				echo "Đổi mật khẩu thành công! <a href='{$home_url}login.php'>Đăng nhập</a>";

				
		}
		else

			die("Mật khẩu mới không đúng! <a href='http://localhost/BTL/changepassword.php'>Thử lại</a>");
											
		}
		else
			die("Mật khẩu cũ không đúng! <a href='http://localhost/BTL/changepassword.php'>Thử lại</a>");
													
		}
		
		else
		{
		echo"<form id='changepass' action='changepassword.php' method='POST'>
			Old password<br>
			<div class='pass'>   
			<input type='text' name='oldpassword' placeholder='Mật khẩu cũ'>
			</div>
			<br>
			New password
			<div class='pass'>	
			<input type='password' placeholder='Mật khẩu mới' name='newpassword'>
			</div>
			<br>
			Repeat new password
			<div class='pass'>	
			<input type='password' placeholder='Nhập lại mật khẩu mới' name='repeatnewpassword'>
			</div>
			<br>
			<div class='pass'>
			<input type='submit' name='submit' value='Change Password'>	
			</div>	
			</form>";

}		
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Change password</title>
	<link rel="shortcut icon" type="image/x-icon" href="imgs/icon.ico">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.php">
    
    <style>
    	body{background-color: #f8f9fa;}
    </style>
</head>
<body>
	
</body>
</html>