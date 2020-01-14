
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

.clear{
	clear:both;
}
.wrapper{
	width:1000px;
	height:auto;
	
	margin:auto;
	
}
.header{
	width:100%;
	height:200px;
	
}
.menu{
	width:100%;
	height:40px;
	margin-top:2px;
	background:#C40C42;
}
.menu ul {
	width:100%;
	height:40px;
	list-style:none;
	padding-left:10px;
}
.menu ul li{
	float:left;
	line-height:40px;
	text-align:center;
	width:80px;
	height:40px;
}
.menu ul li a{
	text-decoration:none;
	color:#fff;
	font-size:18px;
	display:block;
}
.menu ul li:hover{
	background:#39F;
}

.content{
	width:100%;
	height:auto;
	
	margin-top:2px;
}
.content_left{
	width:28%;
	height:auto;
	border:1px solid #D9D9D9;
	float:left;
	margin-top:2px;
}
.hangbanchay {
	width:100%;
	height:auto;
	
	text-align:center;
	list-style:none;
	
}
.hangbanchay li{
	width:100%;
	height:auto;
	border-bottom:1px dashed #30C;
	margin:auto;
	
}
.hangbanchay li:hover{
	background:#C40C42;
	
}
.hangbanchay a{
	text-decoration:none;
	display:block;
}
.hangbanchay p{
	padding:5px;
	color:skyblue;
	font-weight:bold;
}
.tintucsp{
	width:100%;
	height:auto;
	list-style:none;
}
.tintucsp li{
	width:auto;
	height:auto;
	padding:10px;
	border-bottom:1px dashed #CCC;
	
}
.tintucsp a{
	text-decoration:none;
	color:#000;
	font-size:18px;
}
.tintucsp li:hover{
	background:#C40C42;
	
}
.tieude{
	width:auto;
	height:40px;
	background:#C40C42;
	font-size:20px;
	text-align:center;
	padding:5px;
	color:#fff;
	line-height:40px;
}
.box_list{
	width:98%;
	height:auto;
	
	margin:2px;
	
}
.list{
	width:100%;
	height:100%;
	list-style:none;
}
.list li{
	width:auto;
	height:20px;
	padding-left:10px;
	padding-top:5px;
	background:#F2F2F2;
	
}
.list li a{
	text-decoration:none;
	color:#000;
	display:block;
}
.list li:hover{
	background:#C40C42;
}
.content_right{
	width:71%;
	height:auto;
	border:1px solid #D9D9D9;
	float:right;
	margin-top:2px;
}
.box_product{
	width:98%;
	height:auto;
	
	margin:auto;
	
}
.product{
	list-style:none;
	width:98%;
	height:auto;
	margin:auto;
}
.product li{
	width:217px;
	height:300px;
	text-align:center;
	padding-top:5px;
	float:left;
	margin:5px;
	
}
.product a{
	text-decoration:none;
}
.product li:hover{
	background:#C40C42;
}
.product p{
	padding-top:2px;
	color:#000;
	font-size:18px;
	
}
.footer{
	width:100%;
	height:120px;
	border:1px solid #000;
	background:#C40C42;
	margin-top:5px;
}
/* chi tiet san pham*/
.box_chitietsp{
	width:98%;
	height:300px;
	
	margin:2px;
	
}
.box_hinhanh{
	width:35%;
	height:300px;
	
	float:left;
}
.hinhanhphongto{
	width:100%;
	height:100px;
	list-style:none;
}
.hinhanhphongto li{
	width:70px;
	height:70px;
	float:left;
	margin-left:5px;
	border:1px solid #CCC;
}


.box_info{
	width:64%;
	height:300px;
	border-left:1px solid #000;
	float:right;
	padding-left:5px;
}
.box_info p{
	margin:10px;
}
.box_detail{
	width:100%;
	height:400px;
	
	
	
}
.button_dathang{
	width:200px;
	height:40px;
	border:1px solid #000;
	border-radius:25px;
	margin:10px;
	margin-top:40px;
	
}
.button_dathang p{
	font-size:20px;
	font-weight:bold;
	
	text-align:center;
	line-height:40px;
	
	
}
.button_dathang  a{
	color:#0C9;
	text-decoration:none;
	display:block;
}
.button_dathang:hover{
	background:#C40C42;
}
.sanphamlienquan{
	width:100%;
	height:250px;
	
}
.sanphamlienquan ul {
	width:auto;
	list-style:none;
	height:auto;
}
.sanphamlienquan ul li{
	width:215px;
	height:auto;
	
	text-align:center;
	margin:8px;
	float:left;
}
.sanphamlienquan a{
	text-decoration:none;
	color:skyblue;
}
.hinhanhsp{
	width:100%;
	height:auto;
	margin:auto;
	list-style:none;
}
.hinhanhsp img{
	width:600px;
	margin-top:10px;
}
.hinhanhsp li{
	text-align:center;
}
/*Gio hang*/
.box_giohang{
	width:98%;
	height:auto;
	
	
	margin:2px;
}
.button_capnhapgiohang{
	width:150px;
	height:40px;
	line-height:40px;
	border:1px solid #000;
	border-radius:25px;
	margin:5px;
	float:right;
}
.button_capnhapgiohang:hover{
	background:#0C3;
}
.button_capnhapgiohang a{
	display:block;
	color:red;
	font-size:18px;
	text-decoration:none;
}
.control p{
	font-size:18px;
	color:skyblue;
	margin:10px;
	float:left;
	color:blue;
	text-decoration:none;
}
.control a{
	text-decoration:none;
}
.control a:hover{
	text-decoration:underline;
	
}
/*Dang ky*/
.thongbao{
	width:100%;
	height:200px;
	border:1px solid #D9D9D9;
}
.thongbao p{
	font-size:22px;
	color:red;
	margin:2px;
}
.dangky tr td{
	padding:5px;
}
.dangky input{
	width:100%;
	height:20px;
}
.ghichu textarea{
	width:100%;
	height:60px;
}
.ghichu p{
	margin:5px;
	text-decoration:underline;
}
.button_gui{
	width:100px;
	height:100px;
	border:1px solid #000;
	border:25px;
}
.tabs_panel ul{
	list-style-type:none;
}
.tabs_panel .tabs li	{
	list-style-type:none;
	display:inline-block;
	padding:10px 20px;
	background:#C40C42;
	border-radius:10px 10px 0 0;
	color:#fff;
	font-weight:200;
	cursor:pointer;
}
.tabs_panel ul li.active{
	color:#000;
	background:#9F0;
}
.tabs_panel .panel{
	display:none;
	background:#fff;
	color:#000;
	padding:30px;
}
.tabs_panel .panel.active{
	display:block;
}
.scroll-to-top{
	display: fixed;
}
    </style>
</head>

<body>

<?php
    require 'conn.php';
    if (isset($_POST['gui'])) {
        $UserFullname = $_POST['fullname'];
        $UserEmail = $_POST['email'];
        $UserAddress = $_POST['address'];
        $UserPhone = $_POST['phone'];
        $sql = " INSERT INTO users_order(fullname,email,address,phone) VALUES
   ('$UserFullname','$UserName','$UserPassword','$UserEmail','$UserAddress','$UserPhone')";
        if ($sql) {
            echo '<h3 style="margin-left:5px;">Bạn đã mua hang thành công</h3>';
            echo '<a href="test.php?quanli" style="margin:20px;text-decoration:none;">Quay lại để mua hàng</a>';
        }
    }
    ?>

    <div class="thongbao">
        <p><img src="../Image/cao1.jpg" width="100" height="50"></p>
        <p>- Vui lòng không đặt số lượng 1 sản phẩm</p>
        <p>- Không đặt đơn hàng có tổng giá trị dưới 200.000đ</p>
        <p>- Đơn hàng nhiều sản phẩm. Vui lòng liệt kê danh sách + số lượng qua Email, Zalo</p>
    </div>
    <div class="dangky">
        <p style="font-size:18px; color:red;margin:5px;">Các mục dấu * là bắt buộc tối thiểu. Vui lòng điền đầy đủ và chính xác (Số nhà, Ngõ, thôn xóm/ấp, Phường/xã, huyện/quận, tỉnh, TP)</p>
        <form action="" method="post" enctype="multipart/form-data">
            <table width="100%" border="1" style="border-collapse:collapse;">
                <tr>
                    <td width="40%">Họ tên người mua <strong style="color:red;"> (*)</strong></td>
                    <td width="60%"><input type="text" name="fullname" size="50"></td>
                </tr>
                <tr>
                    <td>Địa chỉ Email <strong style="color:red;"> (*)</strong></td>
                    <td width="60%"><input type="text" name="email" size="50"></td>
                </tr>
                <tr>
                    <td>Mật khẩu <strong style="color:red;"> (*)</strong></td>
                    <td width="60%"><input type="password" name="pass" size="50"></td>
                </tr>
                <tr>
                    <td>Điện thoại <strong style="color:red;"> (*)</strong></td>
                    <td width="60%"><input type="text" name="phone" size="50"></td>
                </tr>
                <tr>
                    <td>Địa chỉ nhận hàng <strong style="color:red;"> (*)</strong></td>
                    <td width="60%"><input type="text" name="diachi" size="50"></td>
                </tr>
                <tr>
                    <td colspan="2">

                        <p><input type="submit" name="gui" value="Gửi thông tin" /></p>

                    </td>
                </tr>
            </table>
        </form>
        <div class="ghichu">
            <p>Ghi chú nếu có :</p>
            <textarea name="ghichu">

           </textarea>
        </div>
    </div>

</body>
</html>