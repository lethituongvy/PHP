<?php
$conn = new mysqli("localhost", "root", "", "fashion_mylishop");
mysqli_set_charset($conn, "utf8");

error_reporting(2);
?>
<!DOCTYPE html>
<html>

<head>
  <title>SEARCH</title>
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
    .img{
      width: 200px;
      height: 100px;
      text-align: center;
    }
  </style>
</head>

<body>

  <div class="container" id="listsearch">
    <div class="row">
      <?php
      if (isset($_GET['submit']) && $_GET["search"] != '') {
        echo "</br><a href='test.php'><h1>Back home </h1></a></br></br>";
        $search = $_GET['search'];
        $query = "SELECT * FROM products WHERE name like '%$search%' ";

        $sql = mysqli_query($conn, $query);
        $num = mysqli_num_rows($sql);
        if ($num > 0) {
          echo $num . " ket qua tra ve voi tu khoa $emsp; <b>" . $search . "</b>";
          foreach ($sql as $row) {
      ?>
      </hr>
      </br>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
              <div class="thumbnail">
                <img style="width:150px; height:150px;" src="../Image/<?php echo $row['image']; ?> ">
                <div class="caption">
                  <h3 style="text-align: center;"><?php echo $row['name']; ?></h3>
                  <p style="text-align: center;">
                    <span style="font-size: 18px;"><?php echo $row['price']; ?>đ</span>&emsp;&emsp;&emsp;
                    <span style="color: red"><s><?php echo $row['saleprice']; ?></s>đ</span>
                  </p>
                  <p style="text-align: center;">
                    <i id="iconcard" class="fas fa-cart-plus"></i> &emsp;&emsp;&emsp;
                    <i id="iconheart" class="far fa-heart"></i>
                  </p>
                  <p style="text-align: center;">
                  <a href="detail.php?id=<?php echo  $row['id'];  ?>" class="btn-btn-danger">Chi tiết</a>
                  </p>
                </div>
              </div>
            </div>
      <?php  }
        }
      }
      ?>
    </div>
  </div>
</body>

</html>