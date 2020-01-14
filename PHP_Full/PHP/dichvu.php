<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
            margin-top: 80px;
        }

        .list-group li {
            margin-left: 20px;
        }

        .container {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="Home">
        <div class="trangchu">
            <div class="navbar">
                <nav>
                    <a href="../PHP/test.php">Trang chủ</a>
                    <a href="../PHP/sanpham.php">Sản phẩm</a>
                    <a href="../PHP/dichvu.php"> Dịch vụ</a>
                    <a href="../PHP/tintuc.php"> Tin tức </a>
                    <a href="../PHP/lienhe.php"> Liên hệ</a>
                    <a href="../PHP/login.php"><i class="fas fa-user">Đăng nhập</i></a>
                    <a href="../PHP/dangky.php"><i class="fas fa-user">Đăng ký</i></a>
                    <a href="#"><i class="fas fa-cart-plus">&emsp;Giỏ hàng(<span>0</span>)</i></a>
                    <div class="search-container">
                      <form action="search.php">
                          <input type="text" placeholder="Search.." name="search">
                          <button type="submit" name="submit"><i class="fa fa-search"></i></button>
                      </form>
                  </div>
                </nav>
            </div>
        </div>
        <div class="container" id="saumenu">
            <div class="row">
                <div class="col-md-3">
                    <ul class="list-group">

                        <div id="danhmuc"><a href="#" class="nd"> <i class="fas fa-bars"></i> DANH MỤC SẢN PHẨM </a>
                        </div>
                        <li><a href="../PHP/giaynam.php">Thời trang nam</a> </li>
                        <li><a href="../PHP/giaynu.php">Thời trang nữ</a> </li>
                        <li><a href="../PHP/hangmoive.php">Hàng mới về</a> </li>
                    </ul>
                </div>
                <div class="col-md-9">
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
                                    <img src="../Image/slide1.jpg" alt="" style="height: 500px; width: 1000px; ">
                                </div>
                                <div class="item">
                                    <img src="../Image/slide2.jpg" alt="" style="height: 500px; width: 1000px; ">
                                </div>
                                <div class="item">
                                    <img src="../Image/slide3.jpg" alt="" style="height: 500px; width: 1000px; ">
                                </div>
                                <div class="item">
                                    <img src="../Image/slide4.jpg" alt="" style="height: 500px; width: 1000px; ">
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

            <div class="container">

                <h2> DỊCH VỤ CHĂM SÓC KHÁCH HÀNG</h2>
                <h3>Hướng dẫn chăm sóc khách hàng</h3>

                <p> Hướng dẫn sử dụng dịch vụ/p>

                    <p> Chính sách bảo hành bảo trì</p>

                    <h3>Dịch vụ hỏi đáp thắc mắc qua</h3>

                    <span id="icons">
                        <i id="fb" class="fab fa-facebook-square"></i>
                        <i id="in" class="fab fa-instagram"></i>
                        <i id="tw" class="fab fa-twitter-square"></i>
                        <i id="lin" class="fab fa-linkedin"></i>
                    </span>

                    <h3>Mạng xã hội liên hệ với chúng tôi</h3>
                    <p>Email: info@thegioihoagiay.com</p>

                    <p>Fanpage: https://vi-vn.facebook.com/thegioihoagiay.com.vn</p>

                    <p>Youtube: http://www.youtube.com/user/thegioihoagiay</p>
            </div>
</body>

</html>