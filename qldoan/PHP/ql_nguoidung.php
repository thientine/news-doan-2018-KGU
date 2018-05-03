
	<?php 
   		session_start();
    	if (isset($_SESSION['tendangnhap'])!='' && $_SESSION['capdotruycap']<3) {
           
             
   		}
   		else{
   			$_SESSION['tendangnhap']="Khách";
   			header("location:dangnhap.php");
   		}
	 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div style="width: 90%; margin: auto; ">
		<?php 
		$p=$_SESSION['tendangnhap'];
		include("top_qt.php");
		include("menu_web_ql_left.php");
		include("noidungthaydoi_ql_nguoidung.php");
		include("bottom_qt.php");
 		?>
	</div>
	
</body>
</html>
	