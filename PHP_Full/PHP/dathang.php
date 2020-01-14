<?php
   
	session_start();
    require_once 'conn.php';
	// if(isset($_SESSION['getid'])){
	// 	if(isset($_SESSION['loginu'])){
	// 		echo '<div class="tieude">Giỏ hàng của bạn | <span>Xin chào bạn:<strong><em> '.$_SESSION['loginu'].'</em></strong><a href="update_cart.php?thoat=1" style="text-decoration:underline;color:#fff; margin-left:10px;">Đăng Xuất</a></span></div>';
	// 	}else{
			echo '<div class="tieude">Giỏ hàng của bạn</div>';
		
			
			echo '<div class="box_giohang">';
			echo '  <table width="100%" border="1" style="border-collapse:collapse; margin:5px; text-align:center;">';
			
			echo'  <tr>';
			// echo '<td>MÃ SP</td>';
			echo'<td>Tên SP</td>';
			echo'<td>Hình ảnh</td>';
			echo'<td>Giá sp</td>';
			echo'<td>SL</td>';
			echo'<td>Tổng tiền</td>';
			echo'<td>Quản lý</td>';
			echo'</tr>';
    $thanhtien=0;
    // error_reporting(2);
	foreach(isset($_SESSION['id']) as $cart_item){
        // error_reporting(2);
			$id=$cart_item['id'];
			$sql="select * from products where id='$id'";
			$row=$conn->query($sql);
			$dong=mysqli_fetch_array($row);
		 	echo'<tr>';
			echo'<td>'.$dong['name'].'</td>';
			echo'<td><img src="../Image/'.$dong['image'].'" width="100" height="100" /></td>';
			echo'<td>'.number_format($dong['price']).'</td>';
			echo'<td><a href="update_cart.php?cong='.$cart_item['id'].'" style="margin-right:2px;"><img src="../Image/cao1.jpg" width="20" height="20"></a>'.$cart_item['quantity'].'<a href="update_cart.php?tru='.$cart_item['id'].'" style="margin-left:2px;"><img src="imgs/subtract.png" width="20" height="20"></a></td>';
			$tongtien=0;
			$tongtien=$cart_item['quantity']*$cart_item['price'];
			$thanhtien=($thanhtien + $tongtien);
			echo'<td>'.number_format($tongtien).'</td>';
			// echo'<td><a href="update_cart.php?xoa='.$cart_item['id'].'"><img src="../Image/cao2.jpg" width="30" height="30"></a></td>';
			echo'</tr>';
			echo '<tr>';
			echo'</tr>';
			
  	}
			// echo '
			// <tr>
				
			// 	<td colspan="5"><a href="update_cart.php?xoatoanbo=1"  style="text-decoration:none;" >Xóa toàn bộ</a>	
				
			// 	</td>
				
				
			// 	<td>Thành tiền : '.number_format($thanhtien).'VNĐ'.'</td>
				
			
			// </tr>';
			
	// }else{
		
	// 	echo 'Giỏ hàng của bạn trống';
	// }
	

 	echo'</table>';
	
	
  ?>
            <ul	class="control">
              <p><a href="test.php">Tiếp tục mua hàng</a></p>
                <p><a href="?dangkymoi.php">Đăng ký mới</a></p>
                <p><a href="?loginu.php">Bạn đã có tài khoản</a></p>
                <?php
				// if(isset($_SESSION['loginu'])&&isset($_SESSION['getid'])){
				?>
                 <p style="float:right; background:#FF0;text-decoration:none;"><a href="thanhtoan.php" style="color:#000;margin:5px;">Thanh toán</a></p>
				<?php
				// }
				?>
        	</ul>
    
        </div>
