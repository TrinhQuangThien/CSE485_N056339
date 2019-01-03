<?php 
 	require("form/header.php")
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
			

		// câu truy vấn
		$sql = "select genre_id,country_id,film_name,movies, actor,information,film_year from film where film_id=$id";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_assoc($result)

		

	
  ?>
	
	<div id="wrapper2">
		<fieldset>
			<legend>Chỉnh sửa bài viết</legend>
			<form>
				<table>
					<tr>
						<td>Thể Loại</td>
						<td>
							<select>
								<option>anime</option>
								<option>Hành Động</option>
								<option>Kinh Dị</option>
								<option>Hài Hước</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Quốc Gia</td>
						<td>
							<select>
								<option>Âu mỹ</option>
								<option>Hàn Quốc</option>
								<option>Trung Quốc</option>
								<option>Nhật Bản</option>
							</select>
						</td>
					</tr>
					<td>Phim</td>
						<td><input type="file" size="25" name="movies"></td>
					</tr>
					<tr>
						<td>Tên Phim</td>
						<td><input type="text" size="50" value="<php echo $row['film_name']?>"></td> 
					</tr>
					<tr>
						<td>Diễn Viên</td>
						<td><input type="text" size="50" alue="<php echo $row['actor']?>"></td>
					</tr>
					<tr>
						<td>Năm sản xuất</td>
						<td><input type="text" size="25" alue="<php echo $row['film_year']?>"></td>
					</tr>
					<tr>
						<td>Thông tin phim</td>
						<td><textarea cols="55" rows="10" alue="<php echo $row['information']?>"></textarea></td>
						
					</tr>
					
					<tr>
						<td></td>
						<td><input type="submit" value="Update" name="ok" /></td>
					</tr>

				</table>
			</form>
		</fieldset>
		
	</div>
	



  <?php
  	require("form/footer.php")
    ?>