<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <!-- Document Meta
    ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--IE Compatibility Meta-->
    <meta name="author" content="zytheme" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="123">
    <link href="https://demo.zytheme.com/hairy/assets/images/favicon/favicon1.png" rel="icon">

    <!-- Fonts
    ============================================= -->
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900%7COpen+Sans:300,300i,400,400i,600,600i,700,700i,800,800i' rel='stylesheet' type='text/css'>
    <script src="https://kit.fontawesome.com/9095fec69c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

    <!-- Stylesheets
    ============================================= -->
    <link type="text/css" href="assets/css/external.css" rel="stylesheet">
    <link type="text/css" href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css"  href="assets/css/style.css" rel="stylesheet"/>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="https://demo.zytheme.com/hairy/assets/js/html5shiv.js"></script>
      <script src="https://demo.zytheme.com/hairy/assets/js/respond.min.js"></script>
    <![endif]-->

    <!-- Document Title
    ============================================= -->
    <title>Reekoo Barbershop</title>
</head>

<body>
    <div class="preloader">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" class="wrapper clearfix">
<?php include 'header.php'?>
<!-- Page Title #1
============================================= -->
<section id="page-title" class="page-title bg-overlay bg-overlay-dark bg-parallax">
    <div class="bg-section">
        <img src="https://demo.zytheme.com/hairy/assets/images/page-titles/3.jpg" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <div class="title title-2 text-center">
                    <div class="title--content">
                        <div class="title--heading mb-20">
                            <h1>Giở Hàng</h1>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <ol class="breadcrumb breadcrumb-bottom">
                        <li><a href="index.php">Trang Chủ</a></li>
                        <li><a href="index.php">Cửa Hàng</a></li>
                        <li class="active">Giở Hàng</li>
                    </ol>
                </div>
                <!-- .title end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #page-title end -->

<!-- Shop Cart
============================================= -->
<section id="shopcart" class="shop shop-cart bg-white">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="shop-cart-heading">
                    Bạn có (<?php 
                        if(isset($_SESSION['cart'])){
                            $items = $_SESSION['cart'];
                            echo count($items);
                        }else{
                            echo 0;
                        }
                    ?> món)
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="cart-table table-responsive">
                    <table class="table">
                        <thead>
                            <tr class="cart-product">
                                <th></th>
                                <th class="cart-product-item">#</th>
                                <th class="cart-product-price">Tên người nhận</th>
                                <th class="cart-product-quantity">Ngày đặt hàng</th>
                                <th class="cart-product-total">Tổng tiền</th>
                                <th class="cart-product-quantity">Phương thức</th>
                                <th class="cart-product-total">Tình trạng</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            if(isset($_SESSION['iduser'])){
                                $iduser = $_SESSION['iduser'];
                                    $sql="SELECT * FROM donhang WHERE iduser = '$iduser' ORDER BY iddonhang DESC";
                                    $query=mysqli_query($conn, $sql); 
                                    $sql2="SELECT tennguoidung FROM taikhoan WHERE iduser = '$iduser'";
                                    $query2=mysqli_query($conn, $sql2); 
                                    $row2 = mysqli_fetch_assoc($query2);
                                    while($row=mysqli_fetch_assoc($query)){ 
                                        ?>
                                            <tr class="cart-product">
                                                <td></td>
                                                <td class="cart-product-item">
                                                        <?php echo '#'.$row['iddonhang'];?>
                                                </td>
                                                <td>
                                                    <div class="cart-product-name"> <?php echo $row2['tennguoidung'];?>
                                                    </div>
                                                </td>
                                                <td><?php echo $row['ngaydathang'];?></td>
                                                <td>
                                                    <div>
                                                        <?php echo '$'.$row['tongtien'];?>
                                                    </div>
                                                </td>
                                                <td><?php echo $row['phuongthuc'];?></td>
                                                <td><?php echo $row['tinhtrang'];?></td>
                                                <td></td>
                                            </tr>
                                        <?php 
                                    }
                            }
                            ?>



                            
                        </tbody>
                    </table>
                </div>
                <!-- .cart-table end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #shopcart end -->

<!-- Footer #5
============================================= -->
<?php require 'footer.php'; ?>
</body>

</html>
