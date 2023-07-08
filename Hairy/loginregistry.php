
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
    $errEmail = $errPass = '';
    if(isset($_POST['submit'])){
        if($_POST['submit'] == "Đăng ký"){
            $name = $_POST['name'];
            $email = $_POST['contact-email'];
            $password = $_POST['password'];
            $re_password = $_POST['re_password'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $sqltaikhoan = "SELECT * FROM taikhoan";
            $resulttaikhoan = mysqli_query($conn, $sqltaikhoan);
            
            while($row = mysqli_fetch_assoc($resulttaikhoan)){
                if($row['email'] == $email){
                    $errEmail = 'Email đã tồn tại, mời nhập email khác';
                }
            }
            if($password != $re_password){
                $errPass = "Mật khẩu không giống nhau";
            }else{
                if(empty($errEmail) && empty($errPass)){
                    $sql = "INSERT INTO taikhoan (email, matkhau, tennguoidung, sdt, diachi) VALUES ('$email', '$password','$name', '$phone','$address')";
                    mysqli_query($conn, $sql);
                    $_SESSION['name'] = $name;
                }
            }
        }

        if($_POST['submit'] == "Đăng nhập"){
            $email = $_POST['contact-email'];
            $password = $_POST['password'];
            $sqltaikhoan = "SELECT * FROM taikhoan";
            $resulttaikhoan = mysqli_query($conn, $sqltaikhoan);
            while($row = mysqli_fetch_assoc($resulttaikhoan)){
                if($row['email'] == $email && $row['matkhau'] == $password){
                    $_SESSION['name'] = $row['tennguoidung'];
                    $_SESSION['iduser'] = $row['iduser'];
                    ?>
                    <meta http-equiv="refresh" content="0;url=index.php">
                    <?php
                }else{
                    $errPass = "Mật khẩu hoặc email không đúng, xin nhập lại.";
                }
            }
        }
    }else{
        
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
                <div class="title text-center">
                    <div class="title--content">
                        <div class="title--heading">
                            <h1>Đăng nhập/ Đăng ký</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Login</li>
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
                    <h3>Đăng ký tài khoản</h3>
                    <form class="mb-0" method="POST">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <label for="name" class="">Tên của bạn *</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Ví dụ: Trần Ngọc Anh Dũng" required>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <label for="contact-email" class="">Email *</label> <?php echo $errEmail;?>
                                <input type="email" class="form-control" name="contact-email" id="email" placeholder="Ví dụ: NguyenVanA@gmail.com" required>
                                
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <label for="password" class="">Mật khẩu *</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="" required>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <label for="re_password" class="">Nhập lại mật khẩu *</label>
                                <input type="password" class="form-control" name="re_password" id="password" placeholder="" required>
                                <?php echo $errPass;?>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <label for="phone" class="">Số điện thoại *</label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Ví dụ: 0935436376" required>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <label for="address" class="">Địa chỉ nhà</label>
                                <input type="text" class="form-control" name="address" id="address" placeholder="176B Hải Phòng, quận Hải Châu, TP.Đà Nẵng">
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <input type="submit" value="Đăng ký" name="submit" class="btn btn--secondary btn--rounded mt-30">
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
            <!-- .col-md-7 end -->
            <div class="col-xs-12 col-sm-12 col-md-5">
                <div class="checkout-form">
                    <h3>Đăng nhập</h3>
                    <form class="mb-0" method="POST">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <input type="email" class="form-control" name="contact-email" id="email" placeholder="Email *" required>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <input type="password" class="form-control" name="password" id="Password" placeholder="Mật khẩu *" required>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="pull-left">
                                    <div class="input-checkbox">
                                        <label class="label-checkbox">
										  <input type="checkbox" name="rememberMe">
										  <div class="check-indicator"></div>
										</label>
                                        <span>Nhớ tài khoản</span>
                                    </div>
                                </div>
                                <div class="pull-right">
                                    <div class="forget--pass">
                                        <a href="#">Quên tài khoản?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <input type="submit" value="Đăng nhập" name="submit" class="btn btn--secondary btn--rounded mt-30">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- .col-md-5 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #checkoutAcount end -->
<section></section>

<?php include 'footer.php'?>
</body>

</html>
