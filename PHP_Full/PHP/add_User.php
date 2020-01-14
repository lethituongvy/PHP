<?php
function add_User()
{
   require'conn.php';
   // error_reporting(2);  
   $UserFullname = $_POST['fullname']; 
   $UserName = $_POST['username'];
   $UserPassword = $_POST['password'];
   $UserEmail = $_POST['email'];
  
   $UserAddress = $_POST['address'];
   $UserPhone = $_POST['phone'];
   //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
   if (!$UserFullname || !$UserName ||  !$UserPassword || !$UserEmail  || !$UserEmail || !$UserAddress || !$UserPhone ) {
      echo "Vui lòng nhập đầy đủ thông tin. 
      <a href='javascript: history.go(-1)'>Trở lại</a>";
       exit;
   }

   
   // Kiểm tra username đã tồn tại chưa
    $ktuser = "SELECT username FROM users WHERE username='$UserName'";
    $rs = $conn->query($ktuser)->fetch_all();

    if ($rs) {
       echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác.
        <a href='javascript: history.go(-1)'>Trở lại</a>";
       exit;
    } 
    
   // Kiểm tra email đã tồn tại chưa
    $ktemail = "SELECT email FROM users WHERE email='$UserEmail'";
    $results = $conn->query($ktemail)->fetch_all();

    if ($rs) {
       echo "Email này đã có người dùng. Vui lòng chọn Email khác.
        <a href='javascript: history.go(-1)'>Trở lại</a>";
       exit;
    }

    $sql = " INSERT INTO users(fullname,username,password,email,address,phone) VALUE
   ('$UserFullname','$UserName','$UserPassword','$UserEmail','$UserAddress','$UserPhone')";
   $conn->query($sql);
       header('location: loginu.php');
     
   }
