<!-- Latest compiled and minified CSS & JS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="//code.jquery.com/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<?php

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "fashion_mylishop");

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$id = mysqli_real_escape_string($link, $_REQUEST['id']);
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$category_id = mysqli_real_escape_string($link, $_REQUEST['category_id']);
$image = mysqli_real_escape_string($link, $_REQUEST['image']);
$description = mysqli_real_escape_string($link, $_REQUEST['description']);
$price = mysqli_real_escape_string($link, $_REQUEST['price']);
$saleprice = mysqli_real_escape_string($link, $_REQUEST['saleprice']);
$created = mysqli_real_escape_string($link, $_REQUEST['created']);
$quantity = mysqli_real_escape_string($link, $_REQUEST['quantity']);
$keyword = mysqli_real_escape_string($link, $_REQUEST['keyword']);
$status = mysqli_real_escape_string($link, $_REQUEST['status']);

// Attempt insert query execution
$sql = "INSERT INTO products (id, name , category_id,image, description,price,saleprice,created,quantity,keyword,status)
VALUES ('$id','$name', '$category_id','$image', '$description ','$price','$saleprice','$created','$quantity','$keyword','$status')";

if (mysqli_query($link, $sql)) {
    echo "Chuc mung, ban da them san pham thanh cong";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

if (isset($_GET['addps'])) {
    echo "<script type=\"/text/javascript\">
alert(\"Ban da them thanh cong\");</script>";
}
if (isset($_GET['pf'])) {
    echo "<script type=\"/text/javascript\">alert(\"k the them\");</script>";
}

header("location: admin.php?addps=success");

// Close connection
mysqli_close($link);
?>