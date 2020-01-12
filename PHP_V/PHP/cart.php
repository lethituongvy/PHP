<?php
session_start(); ?>
<?php
require_once 'conn.php';


if (isset($_SESSION["id"])) {

    $sql = "INSERT INTO orders (id,date_order ) VALUES ( ?, ?)";

    if ($stmt = $link->prepare($sql)) {

        $stmt->bind_param("is", $id, $date_order);
        mysqli_set_charset($link, "utf8");
        $idO = $_SESSION["id"];
        $id = $idO;
        $date = date('Y-m-d H:i:s');
        $date_order = $date;
        $stmt->execute();
    }

    $sql2 = "SELECT max(id) FROM orders";
    $rs = mysqli_query($link, $sql2);
    if ($rs) {
        while ($row = mysqli_fetch_assoc($rs)) {
            $arr[] = $row;
        }
    }
    foreach ($arr as $key => $value) {
        $idOder = $value['max(id)'];
    }

    $sql1 = "INSERT INTO product_order (product_id,order_id,quantity ) VALUES ( ?,?,?)";

    if ($stmt = $link->prepare($sql1)) {

        $stmt->bind_param("iii", $product_id, $order_id, $quantity);
        mysqli_set_charset($link, "utf8");
        $order_id = $idOder;

        $pro duct_id = $_POST["id"];
        if (isset($product_id)) {
            echo "<div class='alert alert-danger'>
                    <script>alert(' Sản phẩm này đã có trong giỏ hàng của bạn!')</script>
                     <meta http-equiv='refresh' content='1;url=../test.php'>
                </div>";
        }
        $quantity = $_POST['quantity'];
        $stmt->execute();
        header('Location: ../test.php');
    } else {
        echo "ERROR: Could not prepare query: $sql. " . $link->error;
    }

    $stmt->close();

} else {
    echo "<div class='alert alert-danger'>
          <script>alert(' Bạn chưa đăng nhập tài khoản!')</script>
           <meta http-equiv='refresh' content='1;url=../PHP/loginu.php'>
      </div>";
}


?>