<?php
require_once 'conn.php';
require_once 'add_User.php';
// require_once 'loginu.php';

if(isset($_POST['submit'])){
    add_User();
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dang ky</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
        }

        .navbar {
            overflow: hidden;
            background-color: #333;
            position: fixed;
            top: 0;
            width: 100%;
        }

        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
            font-size: 17px;
        }

        .navbar a:hover {
            background: #ddd;
            color: black;
        }

        .form-group {
            width: 500px;
        }

        .list {
            margin-top: 20px;
            color: #7A7A63;
        }

        img {
            width: 150px;
            height: 150px;
        }

        ul li:hover {
            background-color: #EABBBB;
            color: #69A487
        }

        ul li a {
            text-decoration: none;
            color: black;
        }

        #danhmuc {
            width: 262px;
            font-weight: bold;
            font-size: 18px;
            background-color: orange;
            height: 40px;
            padding-top: 10px
        }

        ul .nd {
            text-decoration: none;
        }


        #danhmuc .nd {
            text-decoration: none;
            text-align: center;
        }

        #dkhoan {
            font-weight: bold;
            font-size: 17px;
        }

        #giohang:hover {
            color: red;
            border: 1px solid red;
        }

        #menu {
            margin-left: 200px;
        }

        .image {
            width: 20px;
            height: 20px;
        }

        #hoasn a {
            text-decoration: none;
            text-align: center;
            margin-top: 20px;
            color: yellow;
        }

        .carousel-inner img {
            width: 100%;
            height: 100%;
        }

        hr {
            margin-bottom: 0px;
        }

        #saumenu {
            margin-top: 100px;
        }

        .list-group li {
            margin-left: 20px;
        }
        .container-fluid{
            margin-top: 190px;
        }
    </style>
</head>

<body>
    <div class="Home">
        <div class="trangchu">
            <div class="navbar">
                <nav>
                    <a href="../PHP/test.php">Trang chủ</a>
                    <a href="">Sản phẩm</a>
                    <a href="#"> Dịch vụ</a>
                    <a href="#"> Tin tức </a>
                    <a href="../PHP/lienhe.php"> Liên hệ</a>
                    <a href="../PHP/loginu.php"><i class="fas fa-user">Đăng nhập</i></a>
                    <a href="../PHP/dangky.php"><i class="fas fa-user">Đăng ký</i></a>
                    <a href="#"><i class="fas fa-cart-plus">&emsp;Giỏ hàng(<span>0</span>)</i></a>
                    <a href="#">Log out</a>
                </nav>
            </div>
        </div>
        <div class="container" id="saumenu">
            <div class="row">
                <div class="col-md-3">
                    <ul class="list-group">
                        <div id="danhmuc"><a href="#" class="nd"> <i class="fas fa-bars"></i> DANH MỤC SẢN PHẨM </a></div>
                        <li><a href="">Giày Nam</a> </li>
                        <li><a href="">Giày Nam</a> </li>
                        <li><a href="">Giày Nam</a> </li>
                    </ul>
                </div>
                <div class="col-md-9" style="height: 300px;">
                    <div class="slidee">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                <li data-target="#myCarousel" data-slide-to="3"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="../Image/slide1.jpg" alt="" style="height: 500px; width: 1000px; margin-left:0px; margin-top: 0px; margin-bottom: 0px;">
                                </div>
                                <div class="item">
                                    <img src="../Image/slide2.jpg" alt="" style="height: 500px; width: 1000px; margin-left:0px; margin-top: 0px; margin-bottom: 0px;">
                                </div>
                                <div class="item">
                                    <img src="../Image/slide3.jpg" alt="" style="height: 500px; width: 1000px; margin-left:0px; margin-top: 0px; margin-bottom: 0px;">
                                </div>
                                <div class="item">
                                    <img src="../Image/slide4.jpg" alt="" style="height: 500px; width: 1000px; margin-left:0px; margin-top: 0px; margin-bottom: 0px;">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ============================================================================================ -->
        <div class="container-fluid" id="formdk">
            <div class="row-fluid">
                <div class="col-md-offset-4 col-md-4" id="box">
                    <h1 style=" text-shadow: 2px 2px orange;"> ĐĂNG KÝ TÀI KHOẢN</h1>
                    <hr>
                    <form class="form-horizontal"  method="POST" id="login_form">
                        <fieldset>
                             <div class="form-group">
                                <div class="col-md-6">
                                    <div class="input-group"> <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-user"></i></span>
                                        <input name="fullname" placeholder="Tên Đây Đủ" class="form-control" type="text">
                                    </div>
                                </div>
                            </div> 
                            <div class="form-group">
                                <div class="col-md-6">
                                    <div class="input-group"> <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-user"></i></span> 
                                        <input name="username" placeholder="Tên Đăng Nhập" class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <div class="input-group"> <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-lock"></i></span>
                                        <input name="password" placeholder="Mật Khẩu" class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <div class="input-group"> <span class="input-group-addon">
                                        <i class="fas fa-envelope"></i></span>
                                        <input name="email" placeholder="Địa Chỉ Email" class="form-control" type="text">
                                    </div>
    
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <div class="input-group"> <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-lock"></i></span>
                                        <input name="address" placeholder="Nhập địa chỉ" class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <div class="input-group"> <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-lock"></i></span>
                                        <input name="phone" placeholder="Số Điện Thoại" class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <button type="submit" name="submit" id="dangky" class="btn btn-md btn-danger">Đăng Ký</button>
                                </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>