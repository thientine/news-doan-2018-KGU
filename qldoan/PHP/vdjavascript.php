<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/dangky_css.css">
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.0.min.js"></script>


</head>
<body>
  
  <div id="the1" class="layout-1">
		<div class="layout-1-1">				
			<h2>Đăng ký tài khoản mới</h2>	
		</div>
	 	<hr>
	 	<div class="layout-1-2">
	 		<form action="dangky.php" method="POST" accept-charset="utf-8">
	 			<table class="table-1">
		 			<tr>
		 				<th>Tên đăng nhập</th>
		 				<td> <input type="text" name="tendangnhapdk" required value="" placeholder="nhập tên đăng nhập"><label><i>(*)</i></label>
		 				</td>
		 			</tr>
		 			<tr>
		 				<th>Mật khẩu</th>
		 				<td> <input type="text" name="matkhaudk" required value="" placeholder="nhập mật khẩu">
		 				<label><i>(*)</i></label></td>
		 			</tr>
		 			<tr>
		 				<th>Nhập lại mật khẩu</th>
		 				<td> <input type="text" name="nhaplaimatkhaudk" required value="" placeholder="nhập lại mật khẩu"></td>
		 			</tr>
		 			<!-- <tr>
		 				<th>Quyền truy cập</th>
		 				<td>
		 					<select name="quyentruycap">
		 						<option value="">Chọn cấp độ</option>
		 						<option value="1">1</option>
		 						<option value="2">2</option>
		 						<option value="3">3</option>
		 						<option value="4">4</option>
		 						<option value="5">5</option>
		 						
		 					</select>
		 				</td>
		 			</tr> -->
		 			<tr>
		 				<th colspan="2" style="text-align: center; ">
		 					<button name="tieptheo">tiếp theo</button>
		 				</th>
		 			</tr>

	 			</table>
	 		</form>
	 		
	 	</div>
	</div>
  <div id="the2" class="layout-2">
		<div class="layout-2-1">			
			<h2>Thông tin tài khoản mới</h2>	
		</div>
	 	<hr>
	 	<div class="layout-1-2">
	 		<form action="dangky.php" method="POST" accept-charset="utf-8">
	 			<table class="table-1">
	 				<tr>
	 					<th> Mã Số Giảng Viên<i><br>( hoặc MSSV)</i></th>
	 					<td> 
	 						<input type="text" name="" value="" placeholder="Nhập mã số vào" required> <label><i>(*)</i></label>
	 					</td>
	 				</tr>
		 			<tr>
		 				<th>Họ Và tên</th>
		 				<td> <input type="text" name="hovaten" required value="" placeholder="nhập tên họ và tên"> <label><i>(*)</i></label>
		 				</td>
		 			</tr>
		 			<tr>
		 				<th>Giới tính</th>
		 				<td>
		 					<input type="radio" name="gioitinh" value="Nam" required>Nam
		 					<input type="radio" name="gioitinh" value="Nữ" placeholder="">Nữ  	
		 					<label><i>(*)</i></label>			
		 				</td>
		 			</tr>
		 			<tr>
		 				<th>Ngày sinh</th>
		 				<td> 
		 					<input type="date" name="ngaysinh" max="2100-12-31" required> <label><i>(*)</i></label>
		 				</td>

		 			</tr>
		 			<tr>
		 				<th>Đơn vị</th>
		 				<td>
		 					<select  required name="donvi" style="height: 30px; font-size: 16px;">	
		 						<option value=""> Chọn Khoa</option>
		 						<?php 
		 							$tam=1;
		 							$donvi = "select tendoankhoa from doankhoa";
		 							$truyvan = mysqli_query($con,$donvi);
		 							while ($row = mysqli_fetch_array($truyvan)) {
		 								$tendoankhoa = $row['tendoankhoa'];
		 								echo "<option value='$tam'>$tendoankhoa</option>";
		 								$tam++;
		 							}
		 						 ?>
		 						
		 					</select>
		 				</td>		 				
		 			</tr>
		 			<tr>
		 				<th>Chức vụ Đoàn</th>
		 				<td>
		 					<select required name="chucvu" style="height: 30px; font-size: 16px;">
		 						<option value=""> Chọn chức vụ</option>
		 						<?php 
		 							$tam=2;
		 							$donvi = "select tenchucvudoan from chucvudoan";
		 							$truyvan = mysqli_query($con,$donvi);
		 							while ($row = mysqli_fetch_array($truyvan)) {
		 								$tenchucvudoan = $row['tenchucvudoan'];
		 								echo "<option value='$tam2'>$tenchucvudoan</option>";
		 								$tam2++;
		 							}
		 						?>
		 					</select>
		 				</td>
		 			</tr>
		 			<tr>
		 				<th>Số điện thoại</th>
		 				<td>
		 					<input type="text" name="Sodienthoai" value="" placeholder="nhập số điện thoại" required>
		 				</td>
		 			</tr>
		 			<tr>
		 				<th>Email</th>
		 				<td>
		 					<input type="email" name=email"" value="" placeholder="nhập email vào" required>
		 				</td>
		 			</tr>
		 			<tr>
		 				<th colspan="2" style="text-align: center; "><input style="width: auto; background: #99ffcc " type="submit" name="dangky" value="Đăng ký"></th>
		 			</tr>
		 			
	 			</table>
	 		</form>
	 		
	 	</div>
	</div>
</body>
</html>