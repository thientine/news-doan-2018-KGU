<?php 
	include("conn.php");
	$sql1="select count(*) as sobai from bantin";
	$query1=mysqli_query($con,$sql1);
	$row1=mysqli_fetch_array($query1);
	$dem=$row1['sobai'];
	$sql2="select count(*) as sotk from taikhoan";
	$query2=mysqli_query($con,$sql2);
	$row2=mysqli_fetch_array($query2);
	$sotk=$row2['sotk'];
	$q3 = "select count(*) as sovanban from vanban";
	$q3 = mysqli_query($con,$q3);
	$r3 = mysqli_fetch_array($q3);
	$sovanban =$r3['sovanban'];

?>
	<style>
		.mot a{
			text-decoration: none;
			color: Navy;
		}
	</style>
	<div class="thaydoi">
		<div class="title">
			<br>
			<h2>Trang Quản trị hệ thống</h2>
		</div>
		<div class="noidungthaydoi">
			<div class="mot">
				<ul>
		 			<h2 >
		 				<li style="background-color:#f93b0c"><a href="" title="">Tổng số bản tin: 
		 				<?php echo $dem; ?>
		 				</a>
		 				</li>
		 			</h2>
		 			<h2>
		 				<li style="background-color: #3399ff"> 
		 					<a href="" title="">Tổng số văn bản: <?php echo $sovanban; ?></a>
		 				</li>
		 			</h2>
		 			<h2 >
		 				<li style="background-color: #ff9900">
		 					<a href="" title="">Tổng số người dùng : <?php echo $sotk; ?></a> 				
		 				</li>
		 			</h2>
		 		</ul>
		 	</div>
		 </div>
	</div>
</div>


