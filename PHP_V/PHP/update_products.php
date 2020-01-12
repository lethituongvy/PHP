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

    <head>
        <style type="text/css">
            input {
                width: 300px;
                height: 30px;
                text-align: center;
            }
        </style>
        <title>Update a Record in MySQL Database</title>
    </head>

<body>
    <?php
    include_once 'conn.php';

    if (isset($_POST['update'])) {
        $id = $_GET['getId'];
        $name = $_POST['name'];
        $category_id = $_POST['category_id'];
        $image = $_POST['image'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $saleprice = $_POST['saleprice'];
        $created = $_POST['created'];
        $quantity = $_POST['quantity'];
        $keyword = $_POST['keyword'];
        $status = $_POST['status'];

        $sql = "UPDATE products SET
            id='$id', name='$name', category_id='$category_id',
            image='$image',description='$description',saleprice='$saleprice',created='$created',quantity='$quantity',keyword='$keyword',status='$status' WHERE id='$id'";
        echo "Updated data successfully\n";
        $reault = mysqli_query($conn,$sql);
        header("location: admin.php?addps=success");
        mysqli_close($conn);
    } else {
    ?>
        <?php

        if (isset($_GET['notimage'])) {
            $noimage = 'Vui lòng chọn hình ảnh hợp lệ!';
        } else {
            $noimage = '';
        }
        ?>
        <form action="" method="POST" role="form">
            <legend>Admin</legend>

            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="form-group">
                        <label for="">Id</label>
                        <input type="number" class="form-control" id="id" name="id" value="<?php error_reporting(0);
                                                                                            echo $_POST['id']; ?>">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="form-group">
                        <label for="">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php error_reporting(0);
                                                                                                echo $_POST['name']; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="form-group">
                        <label for="">category_id</label>
                        <input type="text" class="form-control" id="category_id" name="category_id" value="<?php error_reporting(0);
                                                                                                            echo $_POST['category_id']; ?>">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="form-group">
                        <label> Chọn hình ảnh sản phẩm </label>
                        <input type="file" name="image" required>
                        <span style="color: red">
                            <?php echo $notimage; ?>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="form-group">
                        <label for="">description</label>
                        <input type="text" class="form-control" id="description" name="description" value="<?php error_reporting(0);
                                                                                                            echo $_POST['description']; ?>">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="form-group">
                        <label for="">price</label>
                        <input type="text" class="form-control" id="price" name="price" value="<?php error_reporting(0);
                                                                                                echo $_POST['price']; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="form-group">
                        <label for="">saleprice</label>
                        <input type="text" class="form-control" id="saleprice" name="saleprice" value="<?php error_reporting(0);
                                                                                                        echo $_POST['saleprice']; ?>">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="form-group">
                        <label for="">created</label>
                        <input type="text" class="form-control" id="created" name="created" value="<?php error_reporting(0);
                                                                                                    echo $_POST['created']; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="form-group">
                        <label for="">quantity</label>
                        <input type="text" class="form-control" id="quantity" name="quantity" value="<?php error_reporting(0);
                                                                                                        echo $_POST['quantity']; ?>">

                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="form-group">
                        <label for="">keyword</label>
                        <input type="text" class="form-control" id="keyword" name="keyword" value="<?php error_reporting(0);
                                                                                                    echo $_POST['keyword']; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="form-group">
                        <label for="">status</label>
                        <input type="text" class="form-control" id="status" name="status" value="<?php error_reporting(0);
                                                                                                    echo $_POST['status']; ?>">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="form-group">
                <input name="update" type="submit" id="update" value="Update">
                </div>
                </div>
            </div>
            
        </form>
    <?php
    }
    ?>

</body>

</html>