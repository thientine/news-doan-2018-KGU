	<?php 
   		session_start();
    	if (isset($_SESSION['tendangnhap']) && $_SESSION['capdotruycap']<3) {
           
   		}
   		else{   			
   			header("location:dangnhap.php");
   			exit();
   		}
	 ?>
   <?php 
      include("conn.php");
      $sql="delete from taikhoan where idtk=$row[idtk]";
      
    ?>
	