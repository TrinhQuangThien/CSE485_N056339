<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script language="javascript">
		function show_confirm()
		{
			if(confirm("Bạn có muốn xóa dòng dữ liệu này hay không"))
			{
				return true;
			}
			else
			{
				return false;
			}
		}
	</script>

</head>
<body>
	<div id="top">
		<h3 style="color:#FFF"> Welcome Admin, <a href="../login.php" style="color:#FFF">(Logout)</a></h3>
		<div id="menu">
			<ul>
				<li><a href="list_user.php">Quản lí thành viên</a></li>
				<li><a href="list_category.php">Quản lí danh mục</a></li>
				<li><a href="list_movie.php">Quản lí phim</a></li>
				<li><a href="list_comment.php">Quản lí binh luận</a></li>
			</ul>

		</div>
		<div style="clear: left;"></div>