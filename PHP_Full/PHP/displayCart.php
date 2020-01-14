<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./code/sport.css">
    <style type="text/css">
    .wrapper {
        width: 900px;
        margin: 0 auto;
    }

    .page-header h2 {
        margin-top: 0;
    }

    table tr td:last-child a {
        margin-right: 15px;
    }
</style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h1 class="pull-left">Giỏ Hàng</h1>
                        <!-- <a href="../code/thanhtoan.php" class="btn btn-danger pull-right">Thanh Toán<br></a> -->
                        <a href="../PHP/test.php" class="btn btn-primary pull-right">Quay lại</a>

                    </div>
                    <?php
                    require_once 'conn.php';
                    if(isset($_POST['id'])){
                    $user_id = $_SESSION["id"];
                }
                    $sql = "SELECT products.name, products.price ,products.image, product_order.quantity, products.price* product_order.quantity 
        as total FROM products,product_order,orders WHERE products.id = product_order.product_id 
        and product_order.order_id = orders.id and orders.user_id ='$user_id' " ;
                    // echo $sql;
                    $linkImage = '../Image/';
                    if ($result = mysqli_query($conn, $sql)) {
                        if (mysqli_num_rows($result) > 0) {
                            echo "<table class='table table-bordered table-striped'>";
                            echo "<thead>";
                            echo "<tr>";
                            echo "<th>Image</th>";
                            echo "<th>Name</th>";
                            echo "<th>Price</th>";
                            echo "<th>Quantity</th>";
                            echo "<th>Total</th>";
                            echo "<th>Action</th>";
                            echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr>";
                    ?>
                                <td><img src=" <?php echo $linkImage . $row['image'] ?>" width=50px></td>
                    <?php
                                echo "<td>" . $row['name'] . "</td>";
                                echo "<td>" . $row['price'] . "</td>";
                                echo "<td>" . $row['quantity'] . "</td>";
                                echo "<td>" . $row['total'] . "</td>";
                                echo "<td width='10px'>";
                                echo "<a href='deleteCart.php?id=" . $row['id'] . "' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                            echo "</tbody>";
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else {
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else {
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                    }
                    // Close connection
                    mysqli_close($conn);
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>