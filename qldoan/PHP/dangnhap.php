<?php 
	if (isset($_POST['thoat'])) {
		header("location:../index.php");
		exit();	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Đăng Nhập</title>
	<link rel="stylesheet" type="text/css" href="../CSS/dangnhap_css.css">
	<link rel="shortcut icon" type="image/jpg" href="../IMG/huyhieudoan.jpg"/>
</head>
<body style="background-color: #3333CC;
	padding: 0px;" >
	<div class="layout-khung">
		<div class="anh-bia">
			<a href="../index.php">
				<img class="kich-thuoc-ah" src="../img/bita.jpg" alt="anh bia khoa trường đại học kiên giang">
			</a>
		</div>
		<div class="layout-center">
			<div class="layout-1">				
				<div class="hinh-avata">
					<img class="hinh-avata"  src="../img/1.png" alt="avata">
				</div>
			</div>
			<div class="layout-2">
				<h1 class="vitri-mau-chu">Đăng nhập</h1>				
			</div>
			<div class="layout-3">
				<form action="dangnhap.php" method="POST" accept-charset="utf-8">
					<div class="layout-us-pw">
						<input class="kich-thuoc-chu" type="text" name="tendangnhap" value="" required placeholder="Nhập tên đăng nhập">
					</div>
					<div class="layout-us-pw">
						<input class="kich-thuoc-chu" type="password" name="matkhau" value="" required placeholder="Nhập tên mật khẩu">
					</div>
					<div class="layout-us-pw">
						<table style="border:40px;">
							<tr>
								<input class="kich-thuoc-chu-ok" type="submit" name="dangnhap" value="Đăng nhập">
							</tr>				
							<tr>
								<input class="kich-thuoc-chu-ok" type="submit" name="thoat" value="Thoát">
							</tr>											
						</table>
						<br> <br>
						<p style="margin: auto; text-align: center; color: #990000;">Chưa có tài khoản <a href="dangky.php" title="">Đăng ký</a></p>
						
					</div>
				</form>
			</div>	
			<div class="layout-4 kich-thuoc-chu">
				<?php		
					include ("conn.php");
					if (isset($_POST['dangnhap'])) {
						$tendangnhap=$matkhau="";
						if ($_POST['tendangnhap']==NULL) {
							echo"Nhập tên đăng nhập <br>";
						}
						else {
							$tendangnhap=$_POST['tendangnhap'];
							if ($_POST['matkhau']==NULL) {
								echo "Nhập mật khâu vào";
							}
							else{
								$matkhau=($_POST['matkhau']);
							}
						}
						
						if ($tendangnhap && $matkhau) {
 		       				$sql= "SELECT tendangnhap,matkhau,capdotruycap,mstt  from taikhoan where tendangnhap ='".$tendangnhap."' ";
 	         				$query= mysqli_query($con,$sql);
					       	$row= mysqli_fetch_array($query); 
			 				if (mysqli_num_rows($query)) {
 			 					if ($row["matkhau"]== $matkhau) {
 			 						session_start();
 				                	$_SESSION['tendangnhap']=$row['tendangnhap'];
 				                 	$_SESSION['capdotruycap'] =$row['capdotruycap'];
 				                 	$_SESSION['mstt']=$row['mstt'] ;	
 				                 	if ($_SESSION['capdotruycap']<3) {
 				                 	    header("location: web_quantri.php");            	
 				                 	} 
 				                 	elseif ($_SESSION['capdotruycap']==10) {
 				                 	     header("location:../index.php");
 				                 	}                
 									
 								}
 								else{
			 						echo "Lỗi MẬT KHẨU";
			 					}
 							}
   							else{
   								echo "LỖi TÊN ĐANH NHẬP";
   							}
						}
					}
				?>
			</div>				
		</div>
		<div class="layout-dia-chi">
			<?php 
			include("../bottom.php")
			 ?>
		</div>			
	</div>
	
</body>
</html>