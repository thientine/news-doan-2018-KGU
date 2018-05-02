<?php 
   		session_start();
    	if (isset($_SESSION['tendangnhap']) ) {
           
   		}   		
   		else{
   			$_SESSION['tendangnhap']="Khách";
   			
   		}
	 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Đoàn trường Đại Học Kiên Giang</title>
	<link rel="shortcut icon" type="image/jpg" href="IMG/huyhieudoan.jpg"/>
	<link rel="stylesheet" type="text/css" href="css/top_css.css">
</head>
<body>
	<div class="top">
		<div class="menu1" >
			<ul class="menu">
			    <li><a href="index.php">Trang chủ</a></li>
			    <li><a href="#">Giới thiệu</a>
			        <ul class="sub-menu">
				        <li><a href="gioithieuchung.php">Giới thiệu chung</a></li>
				        <li><a href="#">Cơ Cấu</a>
				        	<ul class="sub-menu">
				                <li><a href="#">Ban Chấp Hành</a></li>
				                <li><a href="#">Các Ban</a></li>
				                <li><a href="#">Đoàn Trực thược</a></li>
				             </ul>
				        </li>
			        </ul>
    			</li>
			    <li><a href="#">Văn Bản</a></li>
			    <li><a href="#">Bản tin</a>
			    	<ul class="sub-menu">
				        <li><a href="#">Tin Đoàn Trường</a></li>
				        <li><a href="#">Tin Đoàn Khoa</a>
				        	<ul class="sub-menu">
				                <li><a href="#">Thông Tin & Truyền Thông</a></li>
				                <li><a href="#">Kinh Tế Du Lịch</a></li>
				                <li><a href="#">Thực Phẩm</a></li>
				                <li><a href="#">Nông Nghiệp</a></li>
				        		<li><a href="#">Kỹ Thuật Xây Dựng</a></li>
				             </ul>
				        </li>
			        </ul>
			    </li>
			    <li><a href="#">Liên hệ</a></li>
			</ul>	
		</div>
		<div style="float: right; width: 35%;">
			<div style="margin: auto; width: 100%; height: 30px; margin-top: 10px">
				<table style="border-spacing: 0px 10px 0 0; ">
					<tr>
						<td>Xin chào: <?php echo $_SESSION['tendangnhap']." &nbsp&nbsp&nbsp&nbsp";?></td>
						<td> <a href="PHP/dangnhap.php">Đăng Nhập</a>&nbsp</td>
						<td><a href="PHP/dangxuat.php"> &nbsp/&nbsp&nbsp&nbsp  Đăng xuất</a></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<div class="hinhbia">
		<div style="margin: auto; width: 70%">
			<a href="index.php" title=""><img style="" src="IMG/1.jpg" alt="Trường Đại học Kiên Giang"></a>
		</div>
	</div>
	
	