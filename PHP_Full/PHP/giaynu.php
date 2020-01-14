<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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

        .col-xs-3 {
            margin-top: 80px;
        }
    </style>
</head>

<body>
    <div class="trangchu">
        <div class="navbar">
            <nav>
                <a href="../PHP/test.php">Trang chủ</a>
                <a href="../PHP/sanpham.php">Sản phẩm</a>
                <a href="../PHP/sanpham.php"> Dịch vụ</a>
                <a href="../PHP/sanpham.php"> Tin tức </a>
                <a href="../PHP/lienhe.php"> Liên hệ</a>
                <a href="../PHP/loginu.php"><i class="fas fa-user">Đăng nhập</i></a>
                <a href="../PHP/dangky.php"><i class="fas fa-user">Đăng ký</i></a>
                <a href="../PHP/cart.php"><i class="fas fa-cart-plus">&emsp;Giỏ hàng(<span>0</span>)</i></a>
                <div class="search-container">
                    <form action="search.php">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit" name="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </nav>
        </div>
    </div>
    <h2 style="text-align: center; margin-top:10%">THỜI TRANG NỮ</h2>
    <?php
    require_once 'conn.php';
    mysqli_set_charset($conn, 'UTF8');
    require_once 'conn.php';
    $sql = "SELECT p.* FROM products p, categories c where p.category_id = c.id";
    $rs = $conn->query($sql);
    while ($row = mysqli_fetch_assoc($rs)) {
        if ($row['category_id'] == 2) {
    ?>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <?php mysqli_set_charset($conn, 'UTF8'); ?>
                <div class="thumbnail">
                <img style="width:150px; height:150px;" src="../Image/<?php echo $row['image']; ?>";>
                    <div class="caption">
                        <h3 style="text-align: center;"><?php echo $row['name']; ?></h3>
                        <p style="text-align: center;">
                            <span><del><?php echo $row['saleprice']; ?></del></span>
                        </p>
                        <p style="text-align: center;">
                            <span><?php echo $row['price']; ?></span>
                        </p>
                        <p style="text-align: center;">
                            <i id="iconcard" class="fas fa-cart-plus"></i> &emsp;&emsp;&emsp;
                            <i id="iconheart" class="far fa-heart"></i>
                        </p>
                        <p style="text-align: center;">
                        <span><a href="dathang.php?getid=<?php echo $row['id']; ?>" type="submit" name="submit" class="btn btn-danger">Mua</a></span>
                            <span><a href="detail.php?id=<?php echo  $row['id'];  ?>" class="btn-btn-danger">Chi tiết</a></span>
                        </p>
                    </div>
                </div>
            </div>
    <?php }
    } ?>
</body>

</html>