	<?php 
   		session_start();
    	if (isset($_SESSION['tendangnhap']) && $_SESSION['capdotruycap']==2) {
           
   		}elseif(isset($_SESSION['tendangnhap']) && $_SESSION['capdotruycap']==10){
   				header("location:../index.php");
   				exit();
   		}
   		else{   			
   			header("location:dangnhap.php");
   			exit();
   		}
	 ?>
   <title>Quan trị hệ thống</title>
    <link rel="shortcut icon" type="image/jpg" href="../IMG/huyhieudoan.jpg"/>
	 <div style="width: 90%; margin: auto;">			
				<?php 
				include("top_qt.php");
				include("menu_web_ql_left.php");
				include("noidungthaydoi_qt.php");
				include("bottom_qt.php");	 
	 ?>
</div>