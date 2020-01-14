<?php 
  require_once 'conn.php';
  $prd = 0;
  if(isset($_POST['cart'])){
      $prd = count($_SESSION['cart']);
  }
  
?> 

<?php
require_once 'conn.php';
$sql = "SELECT * FROM products";
$rs = $conn->query($sql);
// $rs = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tuong Vy</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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

    #saumenu {
        margin-top: 110px;
    }

    .list-group li {
        margin-left: 20px;
    }

    .thumbnail {
        width: 300px;
        height: 350px;
    }

    .thumbnail img {
        width: 150px;
        height: 150px;
    }

    .topnav .search-container {
        float: right;
    }

    .topnav input[type=text] {
        padding: 6px;
        margin-top: 8px;
        font-size: 17px;
        border: none;
    }

    .navbar .search-container button {
        float: right;
        padding: 6px 10px;
        margin-top: 8px;
        background: #ddd;
        font-size: 17px;
        border: none;
        cursor: pointer;
    }

    .navbar .search-container button:hover {
        background: #ccc;
    }

    @media screen and (max-width: 600px) {
        .navbar .search-container {
            float: none;
        }

        .navbar a,
        .navbar input[type=text],
        .navbar .search-container button {
            float: none;
            display: block;
            text-align: left;
            width: 20%;
            margin: 0;
            /* padding: 14px; */
        }

        .navbar input[type=text] {
            border: 1px solid #ccc;
        }
    }

    .banchay {
        margin-top: 100px;
    }

    /* .foot {
            background-color: black;
            color: wheat;
        } */
    .danhmuc li a {
        background-color: black;
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
                    <a href="../PHP/loginu.php"><i class="fas fa-user">Đăng nhập</i></a>
                    <a href="../PHP/dangky.php"><i class="fas fa-user">Đăng ký</i></a>
                    <a href="../PHP/addcart.php?id=<?php echo $kq['id']; ?>"><i class="fas fa-cart-plus">&emsp;Giỏ hàng(<span>0</span>)</i></a>							
                    <!-- <a href="../PHP/cart.php"><i class="fas fa-cart-plus">&emsp;Giỏ hàng(<span>0</span>)</i></a> -->
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
            <div class="banchay">
            <div class="container-fluid">
                <?php
                mysqli_set_charset($conn, 'UTF8');
                require_once 'conn.php';
                require_once 'hangmoive.php';
                ?>
            </div>
            </hr>
            <div class="container-fluid">
                <?php
                mysqli_set_charset($conn, 'UTF8');
                require_once 'conn.php';
                require_once 'giaynam.php';
                ?>
            </div>
            <hr>
            <div class="container-fluid">
                <?php
                mysqli_set_charset($conn, 'UTF8');
                require_once 'conn.php';
                require_once 'giaynu.php';
                ?>
            </div>
        </div>
        </div>
        </hr>
    </div>
    </hr>
    <div class="foot">
        <div class="col-sm-4">
            <h4> DỊCH VỤ KHÁCH HÀNG</h4>
            <p> Hướng dẫn thanh toán</p>
            <p> Hướng dẫn sử dụng dịch vụ</p>
            <p> Chính sách bảo hành bảo trì</p>
            <h4> MẠNG XÃ HỘI</h4>
            <span id="icons">
                <i id="fb" class="fab fa-facebook-square"></i>
                <i id="in" class="fab fa-instagram"></i>
                <i id="tw" class="fab fa-twitter-square"></i>
                <i id="lin" class="fab fa-linkedin"></i>
            </span>
        </div>
        <div class="col-sm-4">
            <h4>LIÊN HỆ</h4>
            <p> 101B Lê Hữu Trác - Phước Mỹ - Sơn Trà - Đà Nẵng</p>
            <p> Tel: (+84) 35 446 7064 - Fax: (+84) 38 438 9063</p>
            <p> Email: levy18032000@gmail.com</p>
        </div>
        <div class="col-sm-4">
            <h4>THÔNG TIN</h4>
            <p>Giới thiệu</p>
            <p>Chính sách bảo mật thông tin</p>
            <p>Điều khoản & điều kiện mua hàng</p>
            <p>Đối tác</p>
            <p>Cửa hàng đại diện</p>
            <p>Liên hệ</p>
        </div>
    </div>
</body>

</html>