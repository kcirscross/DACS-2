<?php 
    session_start();
?>
<?php 
    $conn = mysqli_connect("localhost", "root", "", "hairycsdl");
?>

<header id="navbar-spy" class="header header-topbar header-transparent header-fixed">
	<div id="top-bar" class="top-bar">
	<div class="container">
		<div class="bottom-bar-border">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 top--contact hidden-xs">
					<ul class="list-inline mb-0 ">
						<li>
							<i class="lnr lnr-clock"></i><span>Thứ 3 - Chủ nhật  9.30 : 19.00</span>
						</li>
						<li>
							<i class="lnr lnr-phone-handset"></i> <span>093 543 63 76</span>
						</li>
					</ul>
				</div><!-- .col-md-6 end -->
				<div class="col-xs-12 col-sm-6 col-md-6 top--info text-right text-center-xs">
                    <?php 
                        if(isset($_SESSION['name'])){
                            ?>
                            <span class="top--login"><a href="deleteSession.php"><i class="lnr lnr-exit"></i></a>Xin chào, <a href="#"><?php echo $_SESSION['name']?></a></span>
                            <?php
                        }else{
                            ?>
                            <span class="top--login"><i class="lnr lnr-exit"></i><a href="loginregistry.php">Đăng nhập</a> / <a href="loginregistry.php">Đăng ký</a></span>
                            <?php
                        }
                    ?>
					<span class="top--social">
						<a class="facebook" href="https://www.facebook.com/reekoobarbershop" target="_blank"><i class="fa fa-facebook"></i></a>
						<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
						<a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
					    <a class="instagram" href="https://www.instagram.com/reekoobarbershop/" target="_blank"><i class="fa fa-instagram"></i></a>
					</span>
				</div><!-- .col-md-6 end -->
			</div>
		</div>
	</div>
</div>
	<nav id="primary-menu" class="navbar navbar-fixed-top">
		<div class="container">
			<div class="">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="logo" href="index.php">
					<img class="logo-light" src="https://demo.zytheme.com/hairy/assets/images/logo/logo-light.png" alt="Hairy Logo">
					<img class="logo-dark" src="https://demo.zytheme.com/hairy/assets/images/logo/logo-light.png" alt="Hairy Logo">
				</a>
			</div>
			
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse pull-right" id="navbar-collapse-1">
				<ul class="nav navbar-nav nav-pos-right nav-bordered-right snavbar-left">
				<!-- Home Menu -->
<li>
    <a href="index.php">Trang chủ</a>
</li>
<!-- li end -->
<!-- Pages Menu -->
<li class="has-dropdown">
    <a href="#" data-toggle="dropdown" class="dropdown-toggle link-hover" data-hover="pages">danh mục</a>
    <ul class="dropdown-menu">
        <li><a href="page-book-online.php">đặt lịch cắt</a></li>
        <li><a href="page-our-staff.php">xem thợ cắt</a></li>
        <li><a href="page-services.php">dịch vụ</a></li>
        <li><a href="page-contact.php">gửi góp ý</a></li>
    </ul>
</li>
<!-- li end -->


<!-- shop Menu -->
<li class="has-dropdown">
    <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">cửa hàng</a>
    <ul class="dropdown-menu">
        <li>
            <a href="shop-sidebar-left.php">sản phẩm</a>
        </li>
        <li>
            <a href="shop-cart.php">giỏ hàng</a>
        </li>
        <li>
            <a href="shop-checkout.php">thanh toán</a>
        </li>
    </ul>
</li>
<!-- li end -->
				</ul>
				<!-- Module Cart -->
<div class="module module-cart pull-left">
    <div class="module-icon cart-icon">
        <i class="lnr lnr-store"></i>
        <span class="title">Giở hàng</span>
        <label class="module-label">2</label>
    </div>
    <div class="module-content module-box cart-box">
        <div class="cart-overview">
            <ul class="list-unstyled">
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
                                        <a href="#">
                                            <img class="img-responsive" style="max-width: 100%; max-height: 100%; width: 50px; height: 50px" src="img/<?php echo $row['image'];?>" alt="product"/>
                                        </a>
                                        <div class="product-meta">
                                            <h5 class="product-title"><a href="#"><?php echo $row['tensanpham'];?></a></h5>
                                            <p class="product-price"><?php echo $_SESSION['cart'][$key]['quantity'] .' x $'. $row['dongia'];?></p>
                                        </div>
                                        <a class="cart-cancel" href="#">cancel</a>
                                    </li>
                                <?php
                            }
                        }
                    ?>

            </ul>
        </div>
        <div class="cart-total">
            <div class="total-desc">
                Tổng cộng:
            </div>
            <div class="total-price">
                <?php if(isset($subtotal)){echo '$'.$subtotal;};?>
            </div>
        </div>
        <div class="clearfix">
        </div>
        <div class="cart--control">
            <a class="btn btn--primary btn--bordered btn--rounded btn--block" href="shop-cart.php">Xem giỏ hàng và thanh toán</a>
        </div>
    </div>
</div>
<!-- .module-cart end -->
				<!-- Module Search -->
<div class="module module-search pull-left">
    <div class="module-icon search-icon">
        <i class="lnr lnr-magnifier"></i>
        <span class="title">search</span>
    </div>
    <div class="module-content module-fullscreen module--search-box">
        <div class="pos-vertical-center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                        <form class="form-search">
                            <input type="text" class="form-control" placeholder="Tìm kiếm..">
                            <button class="btn" type="button"><i class="lnr lnr-magnifier"></i></button>
                        </form>
                        <!-- .form-search end -->
                    </div>
                    <!-- .col-md-8 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </div>
        <a class="module-cancel" href="#"><i class="lnr lnr-cross"></i></a>
    </div>
</div>
<!-- .module-search end -->
				<!-- Module Cart -->
				<div class="module module-cart pull-left">
					<div class="module-icon">
						<a class="btn btn--white btn--bordered btn--rounded" href="#">Đặt Lịch Cắt</a>
					</div>
				</div>
				<!-- .module-cart end -->
			</div>
			<!-- /.navbar-collapse -->
			</div>
		</div>
		<!-- /.container-fluid -->
	</nav>

</header>
