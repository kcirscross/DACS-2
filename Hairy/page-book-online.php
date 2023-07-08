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
        <img src="https://demo.zytheme.com/hairy/assets/images/page-titles/8.jpg" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="title title-1 text-center">
                    <div class="title--heading">
                        <h1>Đặt Lịch Cắt</h1>
                    </div>
                    <div class="clearfix"></div>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Trang Chủ</a></li>
                        <li class="active">Đặt Lịch Cắt</li>
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

<!-- Booking
============================================= -->
<section id="booking" class="booking bg-white">
    <div class="container">
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                <div class="heading heading-2 mb-80 text--center">
                    <h2 class="heading--title">Đặt Lịch Online</h2>
                    <p class="heading--desc">Đặt lịch hẹn ngay, không cần phải chờ đợi khi đi cắt.</p>
                    <div class="divider--line"></div>
                </div>
            </div>
            <!-- .col-md-6 end -->
        </div>
        <!-- .row end -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
                <?php include 'booking-form.php'?>
                <!-- .booking-form end -->
            </div>
            <!-- .col-md-8 end -->
        </div>
        <!-- .row end -->
        <div class="divider--shape-1down"></div>
    </div>
    <!-- .container end -->
</section>
<!-- #booking end -->

<?php include 'footer.php'?>
</body>

</html>
