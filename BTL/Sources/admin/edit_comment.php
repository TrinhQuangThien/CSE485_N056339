<?php
	require("form/header.php");
	$id=$_GET["id"];

	if(isset($_POST["ok"]))
	{
		// Lấy lựa chọn duyệt cm của người dung
		$check=$_POST["txtcheck"];
		// mở kết nối với csdl
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
		$sql = "UPDATE comment SET cm_check='$check' WHERE comment_id='$id'";
		$conn->query($sql);
		header("location:list_comment.php");
		$conn->close();

	}
  ?>


  	<div id="wrapper2">
  		<fieldset style="width: 250px;margin:20px auto 10px;">
  			<legend>Xét duyệt bình luận</legend>
  			<form action="edit_comment.php?id=<?php echo $id; ?> " method="post">
  				<table>
  					<tr>
	  					<td>Duyệt comment</td>
	  					<td>
	  						<select name="txtcheck">
	  							<option value="0">Chưa duyệt</option>;
	  							<option value="1"> Đã duyệt</option>;
	  						</select>
	  					</td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" value="Updata" name="ok"></td>
					</tr>
  				</table>
  			</form>
  		</fieldset>
  	</div>
 <?php
 	require("form/footer.php")
   ?>