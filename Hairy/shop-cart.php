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
                                <th class="cart-product-item">Tên</th>
                                <th class="cart-product-price">Đơn giá</th>
                                <th class="cart-product-quantity">Số lượng</th>
                                <th class="cart-product-total">Tổng cộng</th>
                                <th class="cart-product-remove"></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if(isset($_SESSION['cart'])){
                                foreach($_SESSION['cart'] as $key=>$value){
                                    $item[]=$key;
                                }
                                    $str=implode(",",$item);
                                    $sql="SELECT * FROM sanpham WHERE idsanpham in ($str)";
                                    $query=mysqli_query($conn, $sql); 
                                    $totalprice=0;
                                    while($row=mysqli_fetch_assoc($query)){ 
                                        $subtotal=$_SESSION['cart'][$row['idsanpham']]['quantity']*$row['dongia']; 
                                        $totalprice+=$subtotal;
                                        ?>
                                            <tr class="cart-product">
                                                <td></td>
                                                <td class="cart-product-item">

                                                    <div class="cart-product-img">
                                                        <a href="#">
                                                            <img 
                                                            style="max-width: 100%; max-height: 100%; width: 80px; height: 80px" 
                                                            src="img/<?php echo $row['image'];?>" 
                                                            alt="product"/>
                                                        </a>
                                                    </div>
                                                    <div class="cart-product-name">
                                                        <h6><a href="shop-single.php?id=<?php echo $row['idsanpham'];?>"><?php echo $row['tensanpham'];?></a></h6>
                                                    </div>
                                                </td>
                                                <td class="cart-product-price">$ <?php echo $row['dongia'];?></td>
                                                <td class="cart-product-quantity">
                                                    <div class="product-quantity">
                                                        <span class="qant-plus"><i class="fa fa-caret-up"></i></span>
                                                        <input type="text" name="quantity[<?php echo $row['idsanpham'] ?>]" value="<?php echo $_SESSION['cart'][$row['idsanpham']]['quantity'] ?>" id="pro1-qunt" readonly>
                                                        <span class="qant-minus"><i class="fa fa-caret-down"></i></span>
                                                    </div>
                                                </td>
                                                <td class="cart-product-total">$ <?php echo $_SESSION['cart'][$row['idsanpham']]['quantity']*$row['dongia'] ?></td>
                                                <td>
                                                    <div class="cart-product-remove">
                                                        <a href="shop-cart.php?action=deleteCart&id=<?php echo $row['idsanpham'];?>"><i class="lnr lnr-cross"></i></a>
                                                    </div>
                                                </td>
                                                <td></td>
                                            </tr>
                                        <?php 
                                    }
                                    if(isset($_GET['action']) && $_GET['action'] == "deleteCart"){
                                        unset($_SESSION['cart'][$_GET['id']]);
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
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="cart-product-action">
                    <form class="form-inline pull-left">
                        <input type="text" class="form-control mb-0" id="coupon" placeholder="Mã Giảm Giá" />
                        <button type="submit" class="btn btn--secondary">Xác Nhận</button>
                    </form>
                    <div class="cart-total-amount text-right">
                        Tổng Cộng :<span class=""><?php if(isset($totalprice)){echo '$'.$totalprice;}?></span>
                    </div>
                    <!-- .cart-total-amount end -->
                </div>
            </div>
            <!-- .col-md-6 end -->
        </div>
        <!-- .row end -->
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <a class="btn btn--secondary btn--rounded pull-right" href="shop-checkout.php">Thanh Toán</a>
            </div>
        </div>
    </div>
    <!-- .container end -->
</section>
<!-- #shopcart end -->

<!-- Footer #5
============================================= -->
<?php require 'footer.php'; ?>
</body>

</html>
