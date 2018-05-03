<?php 
	session_start();
	if (isset($_SESSION['tendangnhap'])&& $_SESSION['capdotruycap']!="") {
		include("conn.php");
	}
	else{
		header("location:dangnhap.php");
		exit();
	}
	if (isset($_POST['dangbai'])) {
			
		$tieude = $_POST['tieude'];
		$avata = $_POST['avata'];
		$trichdan = $_POST['trichdan'];
		$loaitin = $_POST['loaitin'];
		$thoigian = getdate();
		$noidungtin = $_POST['noidungtin'];		
		$sql="insert into bantin (tieude,avata,trichdan,tenloaitin,noidung) values ('$tieude','$avata','$trichdan','$loaitin','$noidungtin')";
		if (mysqli_query($con, $sql)) {
			echo "
				<script type='text/javascript'>
					alert('Đã gởi bài đăng thành công');
				</script>";
		} 
		else {
   				 echo "Lỗi: " . $sql . "<br>" . mysqli_error($con);
			}		
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Đăng tin tức mới</title>
	<link rel="stylesheet" type="text/css" href="../css/dangtintucmoi_css.css">
</head>
<body>
	<div class="layout-1">
		<form action="dangtintucmoi.php" method="POST" accept-charset="utf-8">
			<table class="table-1">
				<tr>
					<th>Tiêu đề bản tin</th>
					<td><input type="text" name="tieude" value="" placeholder="nhập tiêu đề" required></td>
				</tr>
				<tr>
					<th>Hình bản tin</th>
					<td>
						<input type="file" name="avata" required> 
					</td>
				</tr>
				<tr>
					<th>Trích dẫn bản tin</th>
					<td> <input type="text" name="trichdan" value="" placeholder=" nhập trích dẫn" required></td>
				</tr>
				<tr>
					<th>Loại bản tin</th>
					<td>
						<select name="loaitin" required style="font-size: 20px">
						 	<option value="">Chọn loại tin</option>
						 	<?php 
						 		$tam3 =1;
  								$sql="select * from loaitin";
  								$query = mysqli_query($con,$sql);
  								while ($row = mysqli_fetch_array($query) ){
  									$loaibantin=$row['tenloaitin'];
  									echo "<option value='$loaibantin'>$loaibantin</option>}
  									option";
  								}

						 	?>
						 </select> 
					</td>
				</tr>
				<tr>
					<th>Time tin gởi tin</th>
					<td> 
						<?php
							$dt= new DateTime();
							echo $dt->format('d-m-Y H:i:s');
						?>
				</tr>
				<tr>
					<th>Nội dung bản tin</th>
					<td>
						<textarea class="font-size"  name="noidungtin" rows="20" cols="80"></textarea>
					</td>
				</tr>
				<tr>
					<td colspan="2" style="text-align: center;">
						<input class="input-1" style="width: 30%;" type="submit" name="dangbai" value="Đăng bài">
					
						<input class="input-1" style="width: 30%;" type="reset" name="reset" value="Reset">
					</td>
				</tr>
			</table>
		</form>
	</div>
	<?php 
		$con->close();
	 ?>
</body>
</html>