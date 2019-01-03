<?php
	require("form/header.php");
	$loi=array();
	$loi["movies"]=$loi["film_name"]=$loi["actor"]=$loi["information"]=$loi["film_year"]=NULL;
	$movies=$film_name=$actor=$information=$film_year=NULL;

	if(isset($_POST["ok"]))
	{
		// Lấy id thể loại
		$genre_id=$_POST["txtgenre"];
		$country_id=$_POST["txtcountry"];

		// check có chon phim hay chua
		if($_FILES["movies"]["error"]>0)
		{
			$loi["movies"]="* Xin vui lòng chọn file <br/>";
		}
		else{
			// 
			$movies=$_FILES["movies"]["name"];
		}
		//check co nhap ten phim hay chưa
		if(empty($_POST["txtfilm_name"]))
		{
			$loi["film_name"]="* Vui lòng nhập tên phim <br/>";
		}
		else{
			$film_name=$_POST["txtfilm_name"];
		}
		//check co nhap ten đạo diễn hay chuea
		if(empty($_POST["txtactor"]))
		{
			$loi["actor"]="* Vui lòng nhập tên  diễn viên<br/>";
		}
		else{
			$actor=$_POST["txtactor"];

		}
		if(empty($_POST["txtfilm_year"]))
		{
			$loi["film_year"]="* Vui lòng nhập tên phim <br/>";
		}
		else{
			$film_year=$_POST["txtfilm_year"];
		}
		//check co nhap thông tin phim hay chua
		if(empty($_POST["txtinformation"]))
		{
			$loi["information"]="* Vui lòng nhập thông tin phim <br/>";
		}
		else{
			$information=$_POST["txtinformation"];
		}
		//check co nhap sản xuất hay chưa
		

		if($movies && $film_name && $actor  && $film_year && $information)
		{
			//Mở kết nối với csdl
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
			// thực hiện câu truy vấn csdl
			//
			
			$sql = "INSERT INTO film (movies,film_name,actor,information,film_year,genre_id,country_id)
VALUES ('$movies', '$film_name', '$actor','$information','$film_year','$genre_id','$country_id')";
			
			if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
			$conn->close();
		}
	}
  ?>

 	<div id="wrapper2">
 		<fieldset style="width: 600px; margin:20px auto 10px;">
 			<legend>Thêm Phim</legend>
			<form action="add_movie.php" method="post" enctype="multipart/form-data">
				<table>
					<tr>
						<td>Thể Loại</td>
						<td>
							<select name="txtgenre">
								<option value="1">anime</option>
								<option value="2">Hành Động</option>
								<option value="3">Kinh Dị</option>
								<option value="4">Hài Hước</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Quốc Gia</td>
						<td>
							<select name="txtcountry">
								<option value="1">Âu mỹ</option>
								<option value="2">Hàn Quốc</option>
								<option value="3">Trung Quốc</option>
								<option value="4">Nhật Bản</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Phim</td>
						<td><input type="file" size="25" name="movies"></td>
					</tr>
					<tr>
						<td>Tên Phim</td>
						<td><input type="text" size="50" name="txtfilm_name"></td>
					</tr>
					<tr>
						<td>Diễn Viên</td>
						<td><input type="text" size="50" name="txtactor"></td>
					</tr>
					<tr>
						<td>Năm sản xuất</td>
						<td><input type="text" size="25" name="txtfilm_year"></td>
					</tr>
					<tr>
						<td>Thông tin phim</td>
						<td><textarea cols="55" rows="10" name="txtinformation" ></textarea></td>
						
					</tr>
					
					<tr>
						<td></td>
						<td><input type="submit" value="Add" name="ok" /></td>
					</tr>
				</table>
			</form>
 		</fieldset>
 	</div>
 	<div style="width: 290px;margin: 10px auto; text-align: center;color:#F00;">
 		<?php 
 			echo $loi["movies"];
 			echo $loi["film_name"];
 			echo $loi["actor"];
 			echo $loi["film_year"];
 			echo $loi["information"];
 			
 		 ?>
 	</div>

 <?php 
 	require("form/footer.php");
  ?>