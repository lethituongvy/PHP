<!-- Latest compiled and minified CSS & JS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="//code.jquery.com/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<?php
require_once 'conn.php';

$id = mysqli_real_escape_string($conn, $_REQUEST['id']);
$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
$category_id = mysqli_real_escape_string($conn, $_REQUEST['category_id']);
$image = mysqli_real_escape_string($conn, $_REQUEST['image']);
$description = mysqli_real_escape_string($conn, $_REQUEST['description']);
$price = mysqli_real_escape_string($conn, $_REQUEST['price']);
$saleprice = mysqli_real_escape_string($conn, $_REQUEST['saleprice']);
$created = mysqli_real_escape_string($conn, $_REQUEST['created']);
$quantity = mysqli_real_escape_string($conn, $_REQUEST['quantity']);
$keyword = mysqli_real_escape_string($conn, $_REQUEST['keyword']);
$status = mysqli_real_escape_string($conn, $_REQUEST['status']);

$sql = "INSERT INTO products (id, name , category_id,image, description,price,saleprice,created,quantity,keyword,status)
VALUES ('$id','$name', '$category_id','$image', '$description ','$price','$saleprice','$created','$quantity','$keyword','$status')";
$rs = mysqli_query($conn,$sql);
if ($rs) {
    echo "<div><script>alertChuc mung, ban da them san pham thanh cong! </script></div>";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
if (isset($_GET['addps'])) {
    echo "<script type=\"/text/javascript\">
alert(\"Ban da them thanh cong\");</script>";
}
if (isset($_GET['pf'])) {
    echo "<script type=\"/text/javascript\">alert(\"k the them\");</script>";
}
header("location: admin.php?addps=success");
mysqli_close($conn);
?>