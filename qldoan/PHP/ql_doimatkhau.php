	<?php 
   		session_start();
    	if (isset($_SESSION['tendangnhap']) && ($_SESSION['capdotruycap']==2)) {
           
   		}
   		else{   			
   			header("location:dangnhap.php");
   			exit();
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
		include("nd_doimatkhau.php");
		include("bottom_qt.php");
 		?>
	</div>
	
</body>
</html>