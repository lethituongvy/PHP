<?php
    $conn = mysqli_connect("localhost","root","", "fashion_mylishop");
    if(!$conn){
        die("Connect faild:".mysqli_connect_error());
    }
?>