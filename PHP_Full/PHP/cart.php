<?php
require_once 'conn.php';


if (isset($_POST['cart'])) {

    $sql = "INSERT INTO orders (id,date_order ) VALUES ( ?, ?)";

    if ($stmt = $conn->prepare($sql)) {

        $stmt->bind_param($id, $date_order);
        mysqli_set_charset($conn, "utf8");
        $idO = $_GET["id"];
        $id = $idO;
        $date = date('Y-m-d H:i:s');
        $date_order = $date;
        $stmt->execute();
    }

    $sql2 = "SELECT max(id) FROM orders";
    $rs = mysqli_query($conn, $sql2);
    if ($rs) {
        while ($row = mysqli_fetch_assoc($rs)) {
            $arr[] = $row;
        }
    }
    foreach ($arr as $key => $value) {
        $idOder = $value['max(id)'];
    }

    $sql1 = "INSERT INTO product_order (product_id,order_id,quantity ) VALUES ( ?,?,?)";

    if ($stmt = $conn->prepare($sql1)) {

        $stmt->bind_param("iii", $product_id, $order_id, $quantity);
        mysqli_set_charset($conn, "utf8");
        $order_id = $idOder;

        $product_id = $_POST["id"];
        if (isset($product_id)) {
            echo "<div class='alert alert-danger'>
                    <script>alert(' Sản phẩm này đã có trong giỏ hàng của bạn!')</script>
                     <meta http-equiv='refresh' content='1;url=../PHP/test.php'>
                </div>";
        }
        $quantity = $_POST['quantity'];
        $stmt->execute();
        header('Location:displayCart.php');
    } else {
        echo "ERROR: Could not prepare query: $sql. " . $conn->error;
    }

    mysqli_close($stmt);

} else {
    echo "<div class='alert alert-danger'>
          <script>alert(' Bạn chưa đăng nhập tài khoản!')</script>
           <meta http-equiv='refresh' content='1;url=../PHP/displayCart.php'>
      </div>";
}
?>