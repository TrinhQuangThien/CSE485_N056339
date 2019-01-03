<?php 
require("form/header.php")
 ?>
		<div id="wrapper">
			<table>
				<tr style="background: #0F6">
					<td style="width: 50px; color:#FFF">STT</td>
					<td style="width: 100px; color:#FFF">Name</td>
					<td style="color:#FFF">Messger</td>
					<td style="width: 50px;color:#FFF">Link</td>
					<td style="width: 80px;color:#FFF">Duyệt</td>
					<td style="width: 80px;color:#FFF">Delete</td>
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
						$sql = "SELECT * from comment";
					  $result=mysqli_query($conn,$sql);
					 while( $row=mysqli_fetch_assoc($result))
					 {
					echo"<tr>";				
						echo"<td>$stt</td>";
						echo"<td>$row[comment_name]</td>";
						echo"<td>$row[content]</td>";
						echo"<td><a href='#' style='color: #93F'>Xem</a></td>";
						if($row['cm_check']=='0')
						{
							echo"<td><a href='edit_comment.php?id=$row[comment_id]' style='color: #09F'>Chưa duyệt</a></td>";
						}
						else{
							echo"<td><a href='edit_comment.php?id=$row[comment_id]' style='color: #09F'>Đã duyệt</a></td>";
						}
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