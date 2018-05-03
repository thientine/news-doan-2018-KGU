
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../CSS/noidungthaydoi_qt_css.css">
	<link rel="stylesheet" type="text/css" href="../CSS/noidungthaydoi_ql_nguoidung_css.css">
</head>
<body>
	<div class="thaydoi">
		 	<div class="title">
		 		<br>
		 		<h2>Quản lý người dùng</h2>
		 	</div>
		 	<br><br>
		 	<div class="noidungthaydoi">
		 		<?php 
		 			include("conn.php");
		 			$sql="select * from taikhoan";
		 			$query=mysqli_query($con,$sql);
		 			if(mysqli_num_rows($query)==0){
		 				echo "chưa có user nào cả";
		 			}
		 			else{
		 				echo"
						    	<table  class='table-1' border='1' >
						    		<tr class='tr-h' bgcolor='lightpink'>
						    			<th >STT</th>
						    			<th >Tên đăng nhập</th>
						    			<th >mật khẩu</th>	
						    			<th >Cập độ truy cập</th>
						    			<th >Mã thông tin</th>	
						    			<th >Sữa</th>	
						    			<th >Xóa</th>		
						    		</tr>
						    ";
						    $tem=0;
							while($row=mysqli_fetch_array($query)){	
								$tem++;	
															
								if ($tem%2) {
									echo"<tr class='tr-h' bgcolor='#99ffcc'>";
								}
								else{
									echo"<tr class='tr-h' bgcolor='lightskyblue'>";
								}
									
										echo"<td heigh='30'>$tem</td>";
										echo"<td>$row[tendangnhap]</td>";
										echo"<td>$row[matkhau]</td>";
										echo"<td>$row[capdotruycap]</td>";
										echo "<td>$row[mstt]</td>";
										echo"<td><a href='#'>Sữa</a></td>";
										echo"<td><a href='xoataikhoan.php?$row[idtk]'>Xóa</a></td>";
										
								}
									echo "<tr>";
								
							
							echo"</table>";
		 			}
		 		 ?>
		 	</div>
		 </div>
	
</body>
</html>

