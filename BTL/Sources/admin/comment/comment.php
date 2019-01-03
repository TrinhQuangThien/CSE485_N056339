<?php 
	session_start();
	require('from/header.php');

	$id=$_GET("id");

	$loi=array();
	$loi["name"]=$loi["mess"]=NULL;
	$name=$mess=NULL;
	if(isset($_POST[ok]))
	{
		// đã nhạp tiê đề chưa
		if(empty($_POST["txtname"]))
		{
			$loi["name"]="Xin vui lòng nhập tên";
		}
		else
		{
			$name=$_POST["txtname"];
		}
		// xem cos nhaap mess chuwa
		
		if (empty($_POST["txtmess"]))
		 {
			$loi["mess"]="Xin vui lòng nhập mess";
		}
		else
		{
			$mess=$_POST("txtname");
		}
		if($name&&$mess)
		{

			//mowr ket noi voi csdl
			require("config/database.php");
			// thực hiện câu truy vấn
			mysql_query("insert into comment(comment_id,users_id,film_id,comment_name,content,comment_time,cm_check);
					value('$comment_id','$users_id','$film_id','$comment_name','$content','$comment_time','$cm_check')");
			mysql_close($conn);

			echo"<script type='text/javascript'>";
				echo"alert('Bình luận của bạn dã được gửi yêu câu thành công và đang chờ iểm duyệt trước khi hiện lên trang')";
			echo "</script";
		}
	}		
 ?>

	
	
<div id="comment">
	<fieldset>
		<legend>Comment</legend>
		<form action="movie.php" method="post">
			<table>
				<tr>
					<td>Name</td>
					<td><input type="text" size="25" name="txtname" value="<?php echo $loi['name'];?>"></td>
				</tr>
				<tr>
					<td>Mess</td>
					<td><textarea cols="text" rows="5" name="txtmess" ><?php echo $loi['mess'];?></textarea></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Submit" name="ok"></td>
				</tr>
			</table> 
			
		</form>
	</fieldset>
	
</div>


