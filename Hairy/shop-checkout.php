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
    <link type="text/css" href="https://demo.zytheme.com/hairy/assets/css/external.css" rel="stylesheet">
    <link type="text/css" href="https://demo.zytheme.com/hairy/assets/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css"  href="https://demo.zytheme.com/hairy/assets/css/style.css" rel="stylesheet"/>

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
<?php 
    include 'header.php';
?>

<!-- Page Title #1
============================================= -->
<section id="page-title" class="page-title bg-overlay bg-overlay-dark bg-parallax">
    <div class="bg-section">
        <img src="https://demo.zytheme.com/hairy/assets/images/page-titles/3.jpg" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <div class="title text-center">
                    <div class="title--content">
                        <div class="title--heading">
                            <h1>Thanh toán</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Trang Chủ</a></li>
                            <li class="active">Thanh toán</li>
                        </ol>
                    </div>
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

<!-- Checkout Account
============================================= -->
<section id="checkoutAcount" class="checkout pb-0">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-7">
                <div class="checkout-form">
                    <h3>Chi tiết thanh toán</h3>
                    <form class="mb-0" method="POST">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Họ và tên *" required>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <input type="email" class="form-control" name="contact-email" id="email" placeholder="Địa chỉ Email *" required>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Số điện thoại *" required>
                            </div>
                            <div class="col-xs-12 col-md-12">
                                <div class="form-select">
                                    <i class="fa fa-angle-down"></i>
                                    <select class="form-control">
                                    <option value="">Đất Nước *</option>
                                    <option value="VNM">Viet Nam</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <input type="text" class="form-control" name="Billing-address" id="address" placeholder="Địa chỉ nhận hàng *" required>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="checkout-payment-box">
                                    <div class="checkout-summary-heading">
                                        <h3>Phương thúc thanh toán</h3>
                                    </div>
                                        <fieldset class="radiogroup mb-0">
                                            <div class="input-radio">
                                                <span class="input-option">Chuyển khoản</span>
                                                <label class="label-radio">
                                                    <input type="radio" name="phuongthuc" value="Chuyển khoản" checked>
                                                    <div class="radio-indicator"></div>
                                                </label>
                                            </div>
                                            <div class="input-radio">
                                                <span class="input-option">Thanh toán khi nhận hàng</span>
                                                <label class="label-radio">
                                                    <input type="radio" name="phuongthuc" value="Thanh toán khi nhận hàng">
                                                    <div class="radio-indicator"></div>
                                                </label>
                                            </div>
                                            <div class="input-radio">
                                                <span class="input-option">Nhận tại cửa hàng</span>
                                                <label class="label-radio">
                                                    <input type="radio" name="phuongthuc" value="Nhận tại cửa hàng">
                                                    <div class="radio-indicator"></div>
                                                </label>
                                            </div>
                                        </fieldset>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <input type="submit" value="Xác nhận đặt hàng" name="submit" class="btn btn--secondary btn--rounded mt-30">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- .col-md-7 end -->

            <!-- .col-md-5 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #checkoutAcount end -->

<!-- Checkout Summary 
============================================= -->
<section id="checkoutSummary" class="checkout-summary pt-30 pb-30">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="checkout-summary-box">
                    <div class="checkout-summary-heading">
                        <h3>Các mặt hàng</h3>
                    </div>
                    <ul class="list-unstyled mb-0">
                    <?php 
                        if(isset($_SESSION['cart'])){
                            $subtotal = 0;
                            foreach($_SESSION['cart'] as $key => $values){
                                $sql = "SELECT * FROM sanpham WHERE idsanpham = '$key'";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                $subtotal = $subtotal + $_SESSION['cart'][$key]['quantity']*$row['dongia'];
                                ?>
                                    <li>
                                        <?php echo $_SESSION['cart'][$key]['quantity'].' x '.$row['tensanpham'];?> <span>$ <?php echo $row['dongia'];?></span>
                                    </li>
                                <?php
                            }
                        }
                    ?>

                        

                    </ul>
                    <div class="checkout-cart-total">
                        Tổng cộng<span class="cart-product-total"><?php if(isset($subtotal)){echo '$'.$subtotal;} ?></span>
                    </div>
                    
<?php 
    if(isset($_POST['submit']) && $_POST['submit'] == "Xác nhận đặt hàng"){
        if(!isset($_SESSION['iduser'])){
            echo '<script language="javascript">alert("Bạn phải đăng nhập mới có thể đặt hàng!");</script>';
        }else{
            $iduser = $_SESSION['iduser'];
            $today = date("Y/m/d");
            $phuongthuc = $_POST['phuongthuc'];
            if(!isset($subtotal)){
                echo '<script language="javascript">alert("Bạn không có món đồ nào trong giỏ hàng!!!");</script>';
            }else{
                $sql = "INSERT INTO donhang (iduser, ngaydathang, tongtien, phuongthuc) VALUES ('$iduser','$today','$subtotal','$phuongthuc')";
                mysqli_query($conn, $sql);
                $sql2 = "SELECT iddonhang FROM donhang WHERE iduser='$iduser' ORDER BY iddonhang DESC";
                $result = mysqli_query($conn, $sql2);
                $row = mysqli_fetch_assoc($result);
                $iddonhang = $row['iddonhang'];
                foreach($_SESSION['cart'] as $key => $values){
                    $soluong = $_SESSION['cart'][$key]['quantity'];
                    $dongia = $_SESSION['cart'][$key]['price'];
                    
                    $sql3 = "INSERT INTO chitiet_donhang (iddonhang, idsanpham, soluong, dongia) VALUES ('$iddonhang', '$key', '$soluong', '$dongia')";
                    mysqli_query($conn, $sql3);
                }
                unset($_SESSION['cart']);
                
            }
        }
        
        

    }
?>
                </div>
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #checkoutSummary end -->

<!-- checkout Payment
============================================= -->

<!-- #checkoutPayment end -->

<?php include 'footer.php'?>
</body>

</html>
