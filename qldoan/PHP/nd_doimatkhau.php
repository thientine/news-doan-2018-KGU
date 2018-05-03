
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../CSS/noidungthaydoi_qt_css.css">
	<link rel="stylesheet" type="text/css" href="../CSS/noidungthaydoi_ql_nguoidung_css.css">
	<link rel="stylesheet" type="text/css" href="../CSS/doimatkhau_css.css">
</head>
<body>
	<div class="thaydoi">
		 	<div class="title">
		 		<br>
		 		<h2>Đổi mật khẩu</h2>
		 	</div>
		 	<br><br>
		 	<div class="noidungthaydoi">
		 		<form action="doimatkhau_submit" method="POST" accept-charset="utf-8">
			 		<table  class="table1">
			 			<tr>
			 				<th>
			 					<label>Tên đăng nhập</label>
			 				</th>
			 				<td>
			 					<label> <?php echo $_SESSION['tendangnhap'] ?> </label>
			 				</td>
			 			</tr>
			 			<tr>
			 				<th>
			 					<label>Nhập mật khẩu cũ</label>
			 				</th>
			 				<td>
			 					<input type="text" name="" value="" placeholder="Nhập mật khẩu cũ">
			 				</td>
			 			</tr>
			 			<tr>
			 				<th>
			 					<label>Nhập mật khẩu mới</label>
			 				</th>
			 				<td>
			 					<input type="text" name="" value="" placeholder="Nhập mật khẩu mới">
			 				</td>
			 			</tr>
			 			<tr>
			 				<th>
			 					<label>Nhập lại mật khẩu mới</label>
			 				</th>
			 				<td>
			 					<input type="text" name="" value="" placeholder="Nhập lại mật khẩu mới">
			 				</td>
			 			</tr>
			 		</table>
			 		<br>
			 		<br>

			 		<div class="nut" >
			 			<input type="button" name="doimatkhau" value="Đổi mật khẩu">
			 			<input type="reset" name="lammoi" value="Làm mới">
			 			<input type="button" name="thoat" value="Thoát">
			 		</div>
		 		</form>
		 	</div>
		 </div>
	
</body>
</html>

