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
<?php 
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM sanpham WHERE idsanpham='$id'";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            $tensanpham = $row['tensanpham'];
            $dongia = $row['dongia'];
            $tinhtrang = $row['tinhtrang'];
            $mota = $row['mota'];
            $image = $row['image'];
            $sobinhluan = $row['sobinhluan'];

        }
    }
    
?>

<?php
    if(isset($_GET['action']) && $_GET['action']=="addToCart"){ 
          
        $id=intval($_GET['id']); 
          
        if(isset($_SESSION['cart'][$id])){ 
              
            $_SESSION['cart'][$id]['quantity']++; 
              
        }else{ 
              
            $sql_cart = "SELECT * FROM sanpham WHERE idsanpham={$id}"; 
            $query_cart = mysqli_query($conn, $sql_cart);
            if(mysqli_num_rows($query_cart) != 0){ 
                $row_cart = mysqli_fetch_array($query_cart); 
                  
                $_SESSION['cart'][$row_cart['idsanpham']]=array( 
                        "quantity" => 1, 
                        "price" => $row_cart['dongia'] 
                    );
                  
            }else{ 
                
                  
            }
        }
    }
    
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
                <div class="title title-2 text-center">
                    <div class="title--content">
                        <div class="title--heading mb-20">
                            <h1><?php echo $tensanpham?></h1>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <ol class="breadcrumb breadcrumb-bottom">
                        <li><a href="index.php">Trang Chủ</a></li>
                        <li><a href="shop-sidebar-left.php">Cửa Hàng</a></li>
                        <li class="active"><?php echo $tensanpham?></li>
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

<!-- Shop Product Right Sidebar
============================================= -->
<section id="product" class="shop shop-product pb-60">
    <div class="container">
        <div class="row mb-70">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="product-img">
                    <img class="img-responsive" style="max-width: 100%; max-height: 100%; width: 555px; height: 400px" src="img/<?php echo $image?>" alt="product image">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
                <div class="product-title">
                    <h3><?php echo $tensanpham?></h3>
                </div>
                <div class="product-review text-center-xs mb-40">
                    <span class="product-rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    </span>
                    <span>(<?php echo $sobinhluan?> khách hàng review)</span>
                </div>
                <!--- .product-review end -->
                <!-- .product-title end -->
                <div class="product-meta mb-20">
                    <span class="product-price">
                $ <?php echo $dongia?>
            </span>
                    <span class="product-available">
                Tình trạng: <span> <?php echo $tinhtrang?></span>
                    </span>
                    <!-- .product-price end -->
                    <div class="clearfix"></div>
                </div>
                <div class="product-desc">
                    <p><?php echo $mota?></p>
                </div>
                <!-- .product-desc end -->
                <div class="product-action clearfix">
                    <div class="product-quantity pull-left">
                        <span>
					 <span class="qant-plus"><i class="fa fa-caret-up"></i></span>
                        <input type="number" value="1" id="pro-qunt" min="1">
                        <span class="qant-minus"><i class="fa fa-caret-down"></i></span>
                        </span>
                    </div>
                    <div class="product-cta">
                        <a class="btn btn--secondary btn--rounded" href="shop-single.php?action=addToCart&id=<?php echo $id;?>">Thêm vào giỏ hàng</a>
                    </div>
                </div>
                <!-- .product-action end -->
                <!-- .product-action end -->
                <div class="product-share mt-30">
                    <a class="share-facebook" href="https://www.facebook.com/reekoobarbershop"><i class="fa fa-facebook"></i></a>
                    <a class="share-twitter" href="#"><i class="fa fa-twitter"></i></a>
                    <a class="share-google-plus" href="#"><i class="fa fa-google-plus"></i></a>
                    <a class="share-linkedin" href="https://www.instagram.com/reekoobarbershop/"><i class="fa fa-instagram"></i></a>
                </div>
                <!-- .product-share end -->

            </div>
            <!-- .sidebar-full end -->
        </div>
        <!-- .row end -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">

                <!-- .product-action end -->
                <div class="product-tabs">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#information" aria-controls="information" role="tab" data-toggle="tab">Thông tin sản phẩm</a></li>
                        <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">reviews(<?php echo $sobinhluan?>)</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active product-details" id="information">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-3">
                                    <table class="table no-border">
                                        <tbody>
                                            <tr>
                                                <td>Brand:</td>
                                                <td>Feather</td>
                                            </tr>
                                            <tr>
                                                <td>Color:</td>
                                                <td>Black</td>
                                            </tr>
                                            <tr>
                                                <td>Handle length:</td>
                                                <td>120mm</td>
                                            </tr>
                                            <tr>
                                                <td>Blade length:</td>
                                                <td>50mm</td>
                                            </tr>
                                            <tr>
                                                <td>Full length:</td>
                                                <td>150mm</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- #details end -->
                        <div role="tabpanel" class="tab-pane reviews" id="reviews">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <ul class="product-review list-unstyled">
                                        <?php 
                                            $sqlbinhluan = "SELECT * FROM binhluan WHERE idsanpham='$id'";
                                            $resultbinhluan = mysqli_query($conn, $sqlbinhluan);
                                            while($row = mysqli_fetch_assoc($resultbinhluan)){
                                                $tennguoidung = $row['tennguoidung'];
                                                $noidung = $row['noidung'];
                                                $thoigian = $row['thoigian'];
                                                ?>
                                                    <li class="review-comment">
                                                        <div class="user--avatar">R</div>
                                                        <div class="review--content">
                                                            <h6><?php echo $tennguoidung?></h6>
                                                            <p class="review-date"><?php echo $thoigian?></p>
                                                            <div class="product-rating pull-right">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <div class="product-comment">
                                                                <p><?php echo $noidung?></p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!-- .review-comment end -->
                                                <?php
                                            }
                                        ?>
                                    
                                        

                                    

                                    </ul>
                                    <div class="add-review mb-30">
                                        <h3>Đánh giá</h3>
                                        <span>Đánh giá </span>
                                        <div class="product-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                    <div class="form-review">
                                        <form action="" method="POST">
                                            <input type="text" name="id" id="id" style="display: none;" value="<?php echo $id?>">
                                            <textarea class="form-control" id="review" rows="2" name="noidung" placeholder="Nhập đánh giá" required></textarea>
                                            <input type="text" class="form-control" id="name" name="tennguoidung" placeholder="Tên *" required/>
                                            <button type="submit" name="themDanhGia" class="btn btn--secondary btn--rounded">Gửi đánh giá</button>
                                        </form>
                                        <?php 
                                            if(isset($_POST['themDanhGia'])){
                                                $id = $_POST['id'];
                                                $noidung = $_POST['noidung'];
                                                $tennguoidung = $_POST['tennguoidung'];
                                                $today = date("Y/m/d");
                                                $sql = "INSERT INTO binhluan (idsanpham, tennguoidung, noidung, thoigian) VALUES ('$id','$tennguoidung','$noidung','$today')";
                                                mysqli_query($conn, $sql);
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- #reviews end -->
                    </div>
                    <!-- #tab-content end -->
                </div>
                <!-- .product-tabs end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="product-related shop-categories">
                    <div class="product-related-title">
                        <h5>Sản phẩm mới</h5>
                    </div>
                    <div class="row">

                        <!-- Product #1 -->
                        <div class="col-xs-12 col-sm-6 col-md-3 product-item">
                            <div class="product--img">
                                <img src="https://demo.zytheme.com/hairy/assets/images/shop/grid/1.jpg" alt="Product" />
                                <div class="product--hover">
                                    <div class="product--action">
                                        <a href="#">Add To Cart</a>
                                    </div>
                                </div>
                                <!-- .product-overlay end -->
                            </div>
                            <!-- .product-img end -->
                            <div class="product--content">
                                <div class="product--title">
                                    <h3><a href="#">Sharp Shear</a></h3>
                                </div>
                                <!-- .product-title end -->
                                <div class="product--price">
                                    <span>$35.00</span>
                                </div>
                                <!-- .product-price end -->
                            </div>
                            <!-- .product-bio end -->
                        </div>
                        <!-- .product end -->

                        <!-- Product #2 -->
                        <div class="col-xs-12 col-sm-6 col-md-3 product-item">
                            <div class="product--img">
                                <img src="https://demo.zytheme.com/hairy/assets/images/shop/grid/2.jpg" alt="Product" />
                                <div class="product--hover">
                                    <div class="product--action">
                                        <a href="#">Add To Cart</a>
                                    </div>
                                </div>
                                <!-- .product-overlay end -->
                            </div>
                            <!-- .product-img end -->
                            <div class="product--content">
                                <div class="product--title">
                                    <h3><a href="#">Flat Comb</a></h3>
                                </div>
                                <!-- .product-title end -->
                                <div class="product--price">
                                    <span>$5.00</span>
                                </div>
                                <!-- .product-price end -->
                            </div>
                            <!-- .product-bio end -->
                        </div>
                        <!-- .product end -->

                        <!-- Product #3 -->
                        <div class="col-xs-12 col-sm-6 col-md-3 product-item">
                            <div class="product--img">
                                <img src="https://demo.zytheme.com/hairy/assets/images/shop/grid/3.jpg" alt="Product" />
                                <div class="product--hover">
                                    <div class="product--action">
                                        <a href="#">Add To Cart</a>
                                    </div>
                                </div>
                                <!-- .product-overlay end -->
                            </div>
                            <!-- .product-img end -->
                            <div class="product--content">
                                <div class="product--title">
                                    <h3><a href="#">Fade Clipper</a></h3>
                                </div>
                                <!-- .product-title end -->
                                <div class="product--price">
                                    <span>$105.00</span>
                                </div>
                                <!-- .product-price end -->
                            </div>
                            <!-- .product-bio end -->
                        </div>
                        <!-- .product end -->

                        <!-- Product #4 -->
                        <div class="col-xs-12 col-sm-6 col-md-3 product-item">
                            <div class="product--img">
                                <img src="https://demo.zytheme.com/hairy/assets/images/shop/grid/4.jpg" alt="Product" />
                                <div class="product--hover">
                                    <div class="product--action">
                                        <a href="#">Add To Cart</a>
                                    </div>
                                </div>
                                <!-- .product-overlay end -->
                            </div>
                            <!-- .product-img end -->
                            <div class="product--content">
                                <div class="product--title">
                                    <h3><a href="#">Gel Cream</a></h3>
                                </div>
                                <!-- .product-title end -->
                                <div class="product--price">
                                    <span>$7.5</span>
                                </div>
                                <!-- .product-price end -->
                            </div>
                            <!-- .product-bio end -->
                        </div>
                        <!-- .product end -->

                    </div>
                    <!-- .row end -->
                </div>
                <!-- .product-related end  -->

            </div>
            <!-- .row col-md-12 -->
        </div>
        <!-- .row end -->

    </div>
    <!-- .container end -->
</section>
<!-- #product end -->


<?php include 'footer.php'?>
</body>

</html>
