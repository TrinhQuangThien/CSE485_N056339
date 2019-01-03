<?php 
require("form/header.php")
 ?>

		<div id="wrapper">
			<table>
				<tr>
					<td colspan="3"></td>
					<td colspan="2"><a href="add_movie.php" style="color: #C36">Thêm Phim</a></td>
				<tr>
				<tr style="background: #0F6">
					<td style="width: 50px; color:#FFF">STT</td>
					<td style="width: 100px; color:#FFF">Tên Phim</td>
					<td style="color:#FFF">Thông Tin Phim</td>
					<td style="width: 100px;color:#FFF">Edit</td>
					<td style="width: 100px;color:#FFF">Delete</td>
				</tr>
				<?php
				//mở kết nối với cơ sở dữ liệu
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
						} 

					$stt=1; // biến số thứ tự
						$sql = "SELECT * from film";
					  $result=mysqli_query($conn,$sql);
					 while( $row=mysqli_fetch_assoc($result))

					{
					echo"<tr>";
					echo"<td>$stt</td>";
					echo"<td>$row[film_name]</td>";
					echo"<td>$row[information]</td>";
					echo"<td><a href='edit_movie.php?id=$row[film_id]' style='color: #93F'>Edit</a></td>";
					echo"<td><a href='#' style='color:#F3F'>Delete</a></td>";
					echo"</tr>";
					$stt++;
					}
					mysqli_close($conn);
				  ?>
				
					
			</table>
			
		</div>

	</div>
	<div id="bottom">Copyright cai gif ddaays</div>


</body>
</html>