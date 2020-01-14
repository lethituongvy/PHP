<?php
	@session_start();
	include 'config.php';
    include 'conn.php';
		$name=$_SESSION['loginu'];	
		$sql="insert into product_order (fullname) value ('".$name."')";
		$rs=$conn->query($sql);
		if($rs){
			for($i=0;$i<count($_SESSION['product']);$i++){
			$max=$conn->query("select max(id) from product_order");
			$row=mysqli_fetch_array($max);
			
			$order_id=$row[0];
			$product_id=$_SESSION['product'][$i]['id'];
			$quantity=$_SESSION['product'][$i]['quantity'];
			
			$price=$_SESSION['product'][$i]['gia'];
		}
	}	
		unset($_SESSION['product']);
		header('location:test.php?quanly=camon');
	
?>