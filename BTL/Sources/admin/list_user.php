<?php 
require("form/header.php")
 ?>
		<div id="wrapper">
			<table>
				<tr style="background: #0F6">
					<td style="color:#FFF">STT</td>
					<td style="color:#FFF">Username</td>
					<td style="color:#FFF">Email</td>
					<td style="color:#FFF">Level</td>
					<td style="color:#FFF">Delete</td>
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
						$sql = "SELECT * from users";
					  $result=mysqli_query($conn,$sql);
					 while( $row=mysqli_fetch_assoc($result))

					{
						echo"<tr>";
							echo"<td>$stt</td>";
							echo"<td>$row[username]</td>";
							echo"<td>$row[email]</td>";
							if($row['access_level']==1)
							{
								echo"<td>Thành Viên</td>";
							}
							else
							{
								echo"<td>Admin</td>";
							};
							echo"<td><a href='del_user.php?id=$row[users_id]' onclick='return show_confirm()' style='color:#F3F'>Delete</a></td>";
						echo"</tr>";
						$stt++;
					}
						mysqli_close($conn);
					
				 ?>
				 
			</table>
			
		</div>

	</div>
		<?php 
require("form/footer.php")
 ?>