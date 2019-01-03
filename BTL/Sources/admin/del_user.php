<?php 
	$id=$_GET["id"];
	
	// kết nối với cơ sở dự liệu:
	$host= "localhost";
    				$db_name = "movie";
  					$username = "root";
    				$password = "";
    				$conn;
    				$conn=new mysqli($host,$username,$password,$db_name);
    				mysqli_set_charset($conn,"utf8");
					if ($conn->connect_error) 
						{
							die("Connection failed: " . $conn->connect_error);
						} ;
			
	$sql = "DELETE FROM users WHERE users_id=$id";

	$conn->query($sql);
    header("location:list_user.php");
	$conn->close();
?>

