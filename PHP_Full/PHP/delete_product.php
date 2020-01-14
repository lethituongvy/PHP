<?php

if (isset($_GET['getId'])) {
    $id = $_GET['getId'];
    $conn = new mysqli("localhost", "root", "", "fashion_mylishop");
    error_reporting(2);
    mysqli_set_charset($conn, "utf8");
    $sql = "delete from products where id =" . $id;
    $rs = mysqli_query($conn, $sql);
    header("Location: admin.php");
}
?>