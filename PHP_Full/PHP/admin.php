<?php
require_once 'conn.php';
include_once 'delete_product.php';
// require_once 'add_product.php';

$sql = "SELECT * FROM products";
$rs = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <style>
        .form-group {
            width: 500px;
        }

        body {
            margin: 0;
            padding: 0;
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

        h2 {
            text-align: center;
        }

        input {
            width: 300px;
            height: 30px;
            text-align: center;
        }
    </style>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
    <h2>TRANG QUẢN TRỊ NỘI DUNG</h2>
    <div class="trangchu">
        <div class="navbar">
            <nav>
                <a href="../PHP/test.php">Quản lí loại hàng</a>
                <a href="">Quản lí nhà sản xuất</a>
                <a href="#"> Quản lí sản phẩm</a>
                <a href="#"> Quản lí đơn hàng </a>
                <a href="../PHP/lienhe.php"> Quản lí tin tức</a>
                <a href="../PHP/login.php"><i class="fas fa-user">Quản lí video</i></a>
                <a href="../PHP/logout.php"><i class="fas fa-user">Thoát</i></a>
            </nav>
        </div>
    </div>
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="text-align: center"> Thêm sản phẩm </h1>
                </div>

                <div class="col-lg-12" style="padding-bottom:120px">
                    <form action="add_product.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <label> Tên sản phẩm </label>
                                    <input type="text" class="form-control" name="name" placeholder="Nhập tên sản phẩm" required />
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <label> Danh mục sản phẩm </label>
                                    <select class="form-control" name="category_id">
                                        <?php
                                        $sql = "SELECT * FROM categories";
                                        $result = mysqli_query($conn, $sql);
                                        if ($result) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                                <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <label for="image">Hình ảnh</label>
                                    <input type="file" class="form-control" name="image" id="image">
                                </div>
                            </div>
                            <!-- //Chọn hình ảnh sản phẩm -->
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <label> Mô tả sản phẩm </label>
                                    <textarea class="form-control" rows="3" name="description"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <label> Giá sản phẩm </label>
                                    <input type="number" class="form-control" name="price" placeholder="Nhập giá sản phẩm" min="10" required />
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <label> Giá cũ sản phẩm </label>
                                    <input type="number" class="form-control" name="saleprice" placeholder="Nhập giá sản phẩm" min="10" required />
                                </div>
                            </div>
                        </div>
                        <!-- giá  mới -->
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <label> Ngày </label>
                                    <input type="number" class="form-control" name="created" placeholder="Nhập ngày" min="0" required />
                                </div>
                            </div>
                            <!-- ngày nhập -->
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <label> Số lượng sản phẩm </label>
                                    <input type="number" class="form-control" name="quantity" placeholder="Nhập số lượng sản phẩm" required />
                                </div>
                            </div>
                        </div>
                        <!-- //Số lượng sản phẩm -->
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <label> Từ khóa </label>
                                    <input type="text" class="form-control" name="keyword" placeholder="Nhập từ khóa" min="10" required />
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <label> Status </label>
                                    <input type="number" class="form-control" name="status" placeholder="Nhập status" value="0" min="0" max="5" />
                                </div>
                            </div>
                        </div>
                        <!-- //Số lượng sản phẩm -->
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <button type="submit" name="addProduct" class="btn btn-warning btn-block btn-lg"> Thêm </button>
                            </div>
                        </div>
                    </form>
                    <div class="sp">
                        <h1 class="font-weight-light text-center text-lg-left mt-4
                    mb-0">Sản phẩm có trong cửa hàng</h1>
                        <table id="tbl" border="2" width="1200px" text-align="center" ;>
                            <thead>
                                <tr class="table-primary table-header">
                                    <th> Mã sp</th>
                                    <th> Tên </th>
                                    <th> Mã loại </th>
                                    <th>Hình ảnh</th>
                                    <th>Giá (đ)</th>
                                    <th>Giá cũ (đ)</th>
                                    <th>Ngày</th>
                                    <th>Sửa</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_assoc($rs)) {
                                ?>
                                    <tr align="center" ;>
                                        <td><?php echo $row['id'] ?></td>
                                        <td><?php echo $row['name'] ?></td>
                                        <td><?php echo $row['category_id'] ?></td>
                                        <td><img src="../Image/<?php echo $row['image']; ?> " width="150px" ; height="150px" ;></td>
                                        <td><?php echo $row['price'] ?></td>
                                        <td><?php echo $row['saleprice'] ?></td>
                                        <td><?php echo $row['quantity'] ?></td>
                                        <td><a href="update_products.php?getId=<?php echo $row['id']; ?>">Sửa</a></td>
                                        <td><a href="delete_product.php?getId=<?php echo $row['id']; ?>">Xóa</a></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>