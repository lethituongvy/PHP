!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style-login.css" />
<title>Đăng nhập vào trang</title>
<style>
/* CSS Document */
body{
	background:#292931;
}
#login{
	position:absolute;
	top:50%;
	left:50%;
	transform:translate(-50%,-50%);
}
#login h2{
	text-align:center;
	color:white;
	font-family:sans-senif;
	font-size:35px;
}
#login input {
	display:block;
	width:320px;
	height:40px;
	padding:10px;
	font-size:14px;
	font-family:sans-senif;
	color:white;
	background:rgba(0,0,0,0.3);
	outline:none;
	border:1px solid rgba(0,0,0,0.3);
	border-radius:5px;
	box-shadow:inset 0px -5px 45px rgba(100,100,100,0.2),0px 1px 1px rgba(200,200,200,0.2);
	margin-bottom:10px;
}
#login #button{
	background:#55acee;
	font-size:18px;
	text-align:center;
	vertical-align:middle;
	width:320px;
}
</style>
</head>
<?php
	session_start();
	include('config.php');
	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql="select * from users where username='$username' and password='$password' limit 1 ";
		$row=mysqli_query($conn,$sql);
		$count=mysqli_num_rows($row);
		if($count>0){
			$_SESSION['dangnhap']=$username;
			header('location:test.php');
		}else{
			
			echo '<script>alert("Tài khoản hoặc mật khẩu không đúng.Làm ơn đăng nhập lại.");</script>';
			header('location:loginu.php');
		}
	}
?>
<body>
<div id="login">
	<form action="loginu.php" method="post" enctype="multipart/form-data">
    <h2>Đăng nhập</h2>
    <input type="text" name="username" id="username" placeholder="Enter username..." required="required" />
     <input type="password" name="password" id="password" placeholder="Enter password..." required="required" />
      <input type="submit" name="login" id="button" value="Sign in"/>
    </form>

</div>
	

</div>
</body>
</html>