
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
<?php
    //bien nay dung de dem so dong trong bang
    $counter = 0;

    $recordsetrow = mysqli_query($conn, "SELECT COUNT(*) FROM sanpham");

    $rows = mysqli_fetch_array($recordsetrow) ;

    $tongsodong = $rows[0];

    //thiet lap so ban ghi tren moi trang la 9
    $kichthuoctrang = 9;

    //khai bao bien de chua tong so trang
    $tongsotrang = 1;

    //doan code nay de tinh ra xem co tat ca bao nhieu trang
    if ($tongsodong%$kichthuoctrang == 0){
        $tongsotrang = $tongsodong/$kichthuoctrang;
    }else{
        $tongsotrang = (int) ($tongsodong/$kichthuoctrang) + 1;
    }
    //bien the hien dong bat dau va trang hien tai
    $dongbatdau = 1;
    $tranghientai = 1;
    
    //neu trang hien tai la trang 1 thi se bat dau select tu dong dau tien
    if((!isset ($_GET['tranghientai'])) || ($_GET['tranghientai'] == '1')){
        $dongbatdau = 0;
        $tranghientai = 1;
    }else{
        //1ua chon dong bat dau hien thi va lay ve trang hien tai
        $dongbatdau = ($_GET['tranghientai'] - 1) * $kichthuoctrang;
        $tranghientai = $_GET['tranghientai'];
    }
    $recordset = mysqli_query($conn, "SELECT * FROM sanpham limit {$dongbatdau}, {$kichthuoctrang}");

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
                            <h1>Sản phẩm</h1>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <ol class="breadcrumb breadcrumb-bottom">
                        <li><a href="index.php">Trang Chủ</a></li>
                        <li><a href="index.php">Cửa Hàng</a></li>
                        <li class="active">Sản phẩm</li>
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

<!-- Shop #4
===
=== === === === === === === === === === === === === === -->
<section id="shop" class="shop shop-3 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3">
                <!-- Search
============================================= -->
<div class="widget widget-search">
    <div class="widget--content">
        <form class="form-search" method="GET">
            <div class="input-group">
                <input type="text" class="form-control" name="keywords" placeholder="Tìm kiếm..">
                <span class="input-group-btn">
					<button class="btn" type="submit" name="search" value="name"><i class="fa fa-search"></i></button>
				</span>
            </div>
            <!-- /input-group -->
        </form>
    </div>
</div>
<!-- .widget-search end -->

<!-- Categories
============================================= -->
<div class="widget widget-categories">
    <div class="widget--title">
        <h5>Danh mục</h5>
    </div>
    <div class="widget--content">
        <ul class="list-unstyled">
            <?php 
                if(isset($_GET['viewBy'])){
                    $tendanhmuc = $_GET['viewBy'];
                    $sql = "SELECT * FROM sanpham WHERE tendanhmuc='$tendanhmuc'";
                    
                }
            ?>
            <?php 
                $sql = "SELECT * FROM danhmuc";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                        <li>
                            <a href="shop-sidebar-left.php?viewBy=<?php echo $row['tendanhmuc']?>"><?php echo $row['tendanhmuc']?></a>
                        </li>
                    <?php
                }
            ?>
        </ul>
    </div>
</div>
<!-- .widget-categories end -->
<!-- Recent Quản lý sản phẩm
============================================= -->
<div class="widget widget-recent-products">
    <div class="widget--title">
        <h5>Hàng mới nhất</h5>
    </div>
    <div class="widget--content">
        <?php 
            $sql = "SELECT * FROM sanpham ORDER BY ngaythemvao DESC LIMIT 3";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)){
                ?>
                    <div class="product clearfix">
                        <a href="shop-single.php?id=<?php echo $row['idsanpham'];?>">
                            <img style="max-width: 100%; max-height: 100%; width: 70px; height: 70px" src="img/<?php echo $row['image'];?>" alt="product"/>
                        </a>
                        <div class="product-desc">
                            <div class="product-title">
                                <a href="shop-single.php?id=<?php echo $row['idsanpham'];?>"><?php echo $row['tensanpham'];?></a>
                            </div>
                            <div class="product-meta">
                                <span><?php echo '$'.$row['dongia'];?></span>
                            </div>
                        </div>
                    </div>
                <?php
            }
        ?>
        <!-- Product #1 -->
        
        <!-- .recent-product end -->
    </div>

</div>
<!-- .widget-recent end -->

<!-- Filter
============================================= -->
<div class="widget widget-filter">
    <div class="widget--title">
        <h5>Giá cả</h5>
    </div>
    <div class="widget--content">
        <div id="slider-range"></div>
        <p>
            <input type="text" id="amount" readonly>
            <a class="btn btn--secondary btn--bordered btn--rounded" href="#">Lọc</a>
        </p>

    </div>
</div>
<!-- .widget-filter end -->

<!-- Tag Clouds
============================================= -->
<div class="widget widget-tags">
    <div class="widget--title">
        <h5>Thẻ tags</h5>
    </div>
    <div class="widget--content">
        <a href="#">Sáp vuốt tóc</a>
        <a href="#">Dao cạo râu</a>
        <a href="#">Dưỡng tóc</a>
    </div>
</div>
<!-- .widget-tags end -->
            </div>
            <!-- .col-md-3 end -->
            <div class="col-xs-12 col-sm-12 col-md-9">
                <div class="row">
                    <!-- Product #1 -->
                    <?php
                        if(isset($_GET['viewBy'])){
                            $tendanhmuc = $_GET['viewBy'];
                            $recordset = mysqli_query($conn, "SELECT * FROM sanpham where tendanhmuc='$xemdanhmuc' limit {$dongbatdau}, {$kichthuoctrang}");
                            while($row = mysqli_fetch_assoc($recordset)){
                                ?>
                                    <div class="col-xs-12 col-sm-6 col-md-4 product-item">
                                        <div class="product--img">
                                            <img style="max-width: 100%; max-height: 100%; width: 262.48px; height: 301.29px" src="img/<?php echo $row['image']?>" alt="Product" />
                                            <div class="product--hover">
                                                <div class="product--action">
                                                    <a href="shop-sidebar-left.php?action=addToCart&id=<?php echo $row['idsanpham'];?>">Thêm Vào Giỏ Hàng</a>
                                                </div>
                                            </div>
                                            <!-- .product-overlay end -->
                                        </div>
                                        <!-- .product-img end -->
                                        <div class="product--content">
                                            <div class="product--title">
                                                <h3><a href="shop-single.php?id=<?php echo $row['idsanpham']?>"><?php echo $row['tensanpham']?></a></h3>
                                            </div>
                                            <!-- .product-title end -->
                                            <div class="product--price">
                                                <span>$<?php echo $row['dongia']?></span>
                                            </div>
                                            <!-- .product-price end -->
                                        </div>
                                        <!-- .product-bio end -->
                                    </div>
                                    <!-- .product end -->
                                <?php
                            }
                        }else{
                            if(isset($_GET['search']) && $_GET['search'] == "name"){
                                $keywords = $_GET['keywords'];
                                $recordset = mysqli_query($conn, "SELECT * FROM sanpham WHERE tensanpham LIKE '%$keywords%' OR dongia LIKE '%$keywords%' limit {$dongbatdau}, {$kichthuoctrang}");
                                while($row = mysqli_fetch_assoc($recordset)){
                                    ?>
                                        <div class="col-xs-12 col-sm-6 col-md-4 product-item">
                                            <div class="product--img">
                                                <img style="max-width: 100%; max-height: 100%; width: 262.48px; height: 301.29px" src="img/<?php echo $row['image']?>" alt="Product" />
                                                <div class="product--hover">
                                                    <div class="product--action">
                                                        <a href="shop-sidebar-left.php?action=addToCart&id=<?php echo $row['idsanpham'];?>">Thêm Vào Giỏ Hàng</a>
                                                    </div>
                                                </div>
                                                <!-- .product-overlay end -->
                                            </div>
                                            <!-- .product-img end -->
                                            <div class="product--content">
                                                <div class="product--title">
                                                    <h3><a href="shop-single.php?id=<?php echo $row['idsanpham']?>"><?php echo $row['tensanpham']?></a></h3>
                                                </div>
                                                <!-- .product-title end -->
                                                <div class="product--price">
                                                    <span>$<?php echo $row['dongia']?></span>
                                                </div>
                                                <!-- .product-price end -->
                                            </div>
                                            <!-- .product-bio end -->
                                        </div>
                                        <!-- .product end -->
                                    <?php
                                }
                            }else{
                                while($row = mysqli_fetch_assoc($recordset)){
                                    ?>
                                        <div class="col-xs-12 col-sm-6 col-md-4 product-item">
                                            <div class="product--img">
                                                <img style="max-width: 100%; max-height: 100%; width: 262.48px; height: 301.29px" src="img/<?php echo $row['image']?>" alt="Product" />
                                                <div class="product--hover">
                                                    <div class="product--action">
                                                        <a href="shop-sidebar-left.php?action=addToCart&id=<?php echo $row['idsanpham'];?>">Thêm Vào Giỏ Hàng</a>
                                                    </div>
                                                </div>
                                                <!-- .product-overlay end -->
                                            </div>
                                            <!-- .product-img end -->
                                            <div class="product--content">
                                                <div class="product--title">
                                                    <h3><a href="shop-single.php?id=<?php echo $row['idsanpham']?>"><?php echo $row['tensanpham']?></a></h3>
                                                </div>
                                                <!-- .product-title end -->
                                                <div class="product--price">
                                                    <span>$<?php echo $row['dongia']?></span>
                                                </div>
                                                <!-- .product-price end -->
                                            </div>
                                            <!-- .product-bio end -->
                                        </div>
                                        <!-- .product end -->
                                    <?php
                                }
                            }
                            
                        }
                        
                    ?>
                    

                    

                </div>
                <!-- .row end -->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 clearfix mt-50 text--center">
                        <ul class="pagination">
                            <?php
                                if($tranghientai > 1){
                                    ?>
                                        <li>
                                            <a class="pagination-next" href="shop-sidebar-left.php?tranghientai=<?php echo $_GET['tranghientai']-1;?>" aria-label="Previous">
                                                <span aria-hidden="true"><i class="fa fa-angle-left"></i> previous</span>
                                            </a>
                                        </li>
                                    <?php
                                }
                                for($i = 1; $i <= $tongsotrang; $i++){
                                    if($tranghientai == $i){
                                        ?>
                                            <li class="active"><a href="#"><?php echo $i;?></a></li>
                                        <?php
                                    }else{
                                        if(isset($_GET['search'])){
                                        ?>
                                            <!--<a href="hanghoa.php?tranghientai=<?php echo $i; ?>&search=<?php echo $_GET['search'] ?>"><?php echo '<button class="btn btn-ligt">'.$i.'</button>';?></a> -->
                                        <?php
                                        }
                                        else{
                                            ?>
                                                <li><a href="shop-sidebar-left.php?tranghientai=<?php echo $i;?>"><?php echo $i;?></a></li>
                                            <?php
                                        }
                                    }
                                }
                                if(isset($_GET['tranghientai'])){
                                    if($_GET['tranghientai'] < $tongsotrang){
                                        ?>
                                            <li>
                                                <a class="pagination-next" href="shop-sidebar-left.php?tranghientai=<?php echo $_GET['tranghientai']+1;?>" aria-label="Next">
                                                    <span aria-hidden="true">next <i class="fa fa-angle-right"></i></span>
                                                </a>
                                            </li>
                                        <?php
                                    }
                                }else{
                                    ?>
                                        <li>
                                            <a class="pagination-next" href="shop-sidebar-left.php?tranghientai=<?php echo '2';?>" aria-label="Next">
                                                <span aria-hidden="true">next <i class="fa fa-angle-right"></i></span>
                                            </a>
                                        </li>
                                    <?php
                                }
                                
                            ?>
                        </ul>
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .col-md-9 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #shop end -->

<!-- Footer #5
============================================= -->
<footer id="footer" class="footer">
    <!-- Widget Section
	============================================= -->
    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 footer--widget-about">
                    <div class="footer--widget-content">
                        <img class="mb-20" src="https://demo.zytheme.com/hairy/assets/images/logo/logo-light.png" alt="logo">
                        <p>Proin gravida nibh vel velit auctor aliquet anean lorem quis. bindum auctor, nisi elite conset ipsums sagtis id duis sed odio sit.</p>
                        <div class="work--schedule clearfix">
                            <ul class="list-unstyled">
                                <li>Monday - Friday <span>9.00 : 17.00</span></li>
                                <li>Saturday <span>9.00 : 15.00</span></li>
                                <li>Sunday <span>9.00 : 13.00</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- .col-md-4 end -->
                <div class="col-xs-12 col-sm-6 col-md-4 footer--widget-recent">
                    <div class="footer--widget-title">
                        <h5>Latest Posts</h5>
                    </div>
                    <div class="footer--widget-content">
                        <div class="entry">
                            <div class="entry--img">
                                <a href="#">
									<img src="https://demo.zytheme.com/hairy/assets/images/blog/thumb/5.jpg" alt="entry">
								</a>
                            </div>
                            <div class="entry--content">
                                <div class="entry--title">
                                    <a href="#">Essential barbering tips you need to know before you start</a>
                                </div>
                                <div class="entry--meta">
                                    <span>Nov 09, 2017</span>
                                </div>
                            </div>
                        </div>
                        <!-- .entry end -->

                        <div class="entry">
                            <div class="entry--img">
                                <a href="#">
									<img src="https://demo.zytheme.com/hairy/assets/images/blog/thumb/4.jpg" alt="entry">
								</a>
                            </div>
                            <div class="entry--content">
                                <div class="entry--title">
                                    <a href="#">What are the 360 waves? and how you can get them</a>
                                </div>
                                <div class="entry--meta">
                                    <span>Oct 30, 2017</span>
                                </div>
                            </div>
                        </div>
                        <!-- .entry end -->

                        <div class="entry">
                            <div class="entry--img">
                                <a href="#">
									<img src="https://demo.zytheme.com/hairy/assets/images/blog/thumb/3.jpg" alt="entry">
								</a>
                            </div>
                            <div class="entry--content">
                                <div class="entry--title">
                                    <a href="#">Discover what is the best haircut for your face shape?</a>
                                </div>
                                <div class="entry--meta">
                                    <span>Oct 19, 2017</span>
                                </div>
                            </div>
                        </div>
                        <!-- .entry end -->
                    </div>
                </div>
                <!-- .col-md-4 end -->
                <div class="col-xs-12 col-sm-6 col-md-4 footer--widget-contact">
                    <div class="footer--widget-title">
                        <h5>Get In Touch</h5>
                    </div>
                    <div class="footer--widget-content">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fa fa-map-marker"></i> 1220 Petersham town, Wardll St New South Wales Australia PA 6550.</li>
                            <li><i class="fa fa-phone"></i> 077 9406 497</li>
                            <li><i class="fa fa-envelope-o"></i> contact@zytheme.com</li>
                        </ul>
                        <form class="form--newsletter">
                            <input type="email" name="email" class="form-control" placeholder="Email address">
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
                <!-- .col-md-4 end -->
            </div>
        </div>
        <!-- .container end -->
    </div>
    <!-- .footer-widget end -->
    <!-- Copyrights
	============================================= -->
    <div class="footer--copyright">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <span>&copy; 2017, All rights reserved.</span>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 text-right">
                    <div class="social">
                        <a class="share-twitter" href="#"><i class="fa fa-twitter"></i></a>
                        <a class="share-facebook" href="#"><i class="fa fa-facebook"></i></a>
                        <a class="share-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                        <a class="share-pinterest" href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- .container end -->
    </div>
</footer>
</div>
<!-- #wrapper end -->

<!-- Footer Scripts
============================================= -->
<script src="https://demo.zytheme.com/hairy/assets/js/jquery-2.2.4.min.js"></script>
<script src="https://demo.zytheme.com/hairy/assets/js/plugins.js"></script>
<script src="https://demo.zytheme.com/hairy/assets/js/functions.js"></script>
</body>

</html>
