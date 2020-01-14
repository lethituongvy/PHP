<?php
	@session_start();
    // include('admincp/modules/config.php');
    include 'config.php';
	//
	if(isset($_SESSION['thoat'])&& $_SESSION['thoat']==1){
		unset($_SESSION['loginu']);
		header('location:test.php?quanly=dathang');
	}
	else{
		echo "sai";
	}
	//tru sp
	if(isset($_GET['tru'])){
		$id=$_GET['tru'];
		foreach($_SESSION['product'] as $cart_item){
			if($id!=$cart_item['id']){
				
				$product[]=array('name'=>$cart_item['name'],'id'=>$cart_item['id'],'quantity'=>$cart_item['quantity'],'price'=>$cart_item['price']);
				$_SESSION['product']=$product;
			}else{
				$giam=$cart_item['quantity']-1;
				if($cart_item['quantity']>1){
				$product[]=array('name'=>$cart_item['name'],'id'=>$cart_item['id'],'quantity'=>$giam,'price'=>$cart_item['price']);
				
				}else{
					$giam=1;
					$product[]=array('name'=>$cart_item['name'],'id'=>$cart_item['id'],'quantity'=>$giam,'price'=>$cart_item['price']);
				}
				$_SESSION['product']=$product;
			}

			header('location:test.php?quanly=dathang');
		}
		
	}
	//cong them sp
	if(isset($_GET['cong'])){
		$id=$_GET['cong'];
		foreach($_SESSION['product'] as $cart_item){
			if($id!=$cart_item['id']){
				
				$product[]=array('name'=>$cart_item['name'],'id'=>$cart_item['id'],'quantity'=>$cart_item['quantity'],'price'=>$cart_item['price']);
				$_SESSION['product']=$product;
			}else{
				$tang=$cart_item['quantity']+1;
				if($cart_item['quantity']<9){
				
				$product[]=array('name'=>$cart_item['name'],'id'=>$cart_item['id'],'quantity'=>$tang,'price'=>$cart_item['price']);
				
			}else{
				
				$product[]=array('name'=>$cart_item['name'],'id'=>$cart_item['id'],'quantity'=>$cart_item['quantity'],'price'=>$cart_item['price']);
			}
			$_SESSION['product']=$product;
			}
			
			header('location:test.php?quanly=dathang');
		}
		
	}
	//xoa san pham
	if(isset($_SESSION['product'])&&isset($_GET['xoa'])){
		$id=$_GET['xoa'];
		foreach($_SESSION['product'] as $cart_item){
			if($cart_item['id']!= $id){
				$product[]=array('name'=>$cart_item['name'],'id'=>$cart_item['id'],'quantity'=>$cart_item['quantity'],'price'=>$cart_item['price']);
			}
		$_SESSION['product']=$product;
		header('location:index.php?quanly=dathang');
		}
	}
	//xoa toan bo giohang
	if(isset($_GET['xoatoanbo'])&&$_GET['xoatoanbo']==1){
		session_destroy();
		header('location:test.php?quanly=dathang');
	}
	//them giohang
	if(isset($_POST['add_to_cart'])){
		$id=$_GET['id'];
		$quantity=$_POST['quantity'];
		$sql="select * from products where id='$id' limit 1";
		$row=$conn->query($sql);
		$dong=mysqli_fetch_array($row);
		if($dong){
			$new_product=array(array('name'=>$dong['name'],'id'=>$id,'quantity'=>$quantity,'price'=>$dong['price']));
			if(isset($_SESSION['product'])){
				$found=false;
				foreach($_SESSION['product'] as $cart_item){
					if($cart_item['id'] == $id){
						$product[]=array('name'=>$cart_item['name'],'id'=>$cart_item['id'],'quantity'=>$quantity,'price'=>$cart_item['price']);
						$found=true;
					}else{
						$product[]=array('name'=>$cart_item['name'],'id'=>$cart_item['id'],'quantity'=>$cart_item['quantity'],'price'=>$cart_item['price']);
					}
					
				}if($found==false){
					$_SESSION['products']=array_merge($product,$new_product);
				}else{
					$_SESSION['products']=$product;
				}
			}else{
				$_SESSION['products']=$new_product;
			}
		}
		header('location:test.php?quanly=dathang');
	}
?>

