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
        <img src="https://demo.zytheme.com/hairy/assets/images/page-titles/9.jpg" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <div class="title text-center">
                    <div class="title--content">
                        <div class="title--heading">
                            <h1>Gửi Góp Ý</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Trang Chủ</a></li>
                            <li class="active">Gửi Góp Ý</li>
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

<!-- Contact #1
============================================= -->
<section id="contact1" class="contact contact-1 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                <div class="heading heading-1 mb-80 text--center">
                    <h2 class="heading--title">Phương thức liên lạc</h2>
                    <div class="divider--line"></div>
                    <p class="heading--desc">Bạn có thể góp ý, phản hồi, liên lạc với chúng tôi khi cần.</p>
                </div>
            </div>
            <!-- .col-md-6 end -->
        </div>
        <!-- .row end -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                <div class="contact-form">
                    <form class="mb-0">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="contact-name" id="name" placeholder="Name: *" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="contact-email" id="email" placeholder="Email: *" required>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" id="name" placeholder="tiêu đề:" required>
                            </div>
                            <div class="col-md-12">
                                <textarea class="form-control" name="contact-message" id="message" rows="3" placeholder="nội dung: *" required></textarea>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" value="Gửi" name="submit" class="btn btn--secondary btn--rounded btn--block">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- .col-md-6 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #contact1 end -->

<!-- Google Map
============================================= -->
<section id="gMap" class="contact-map pb-0 pt-0">
    <div class="container-fluid pr-0 pl-0">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 pr-0 pl-0">
                <div id="googleMap" style="width:100%;height:380px;">
                </div>
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container-fluid end -->
    <script src="https://demo.zytheme.com/hairy/assets/js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true&amp;key=AIzaSyCiRALrXFl5vovX0hAkccXXBFh7zP8AOW8"></script>
    <script type="text/javascript" src="https://demo.zytheme.com/hairy/assets/js/plugins/jquery.gmap.min.js"></script>
    <script type="text/javascript">
        $('#googleMap').gMap({
            address: "121 King St,Melbourne, Australia",
            zoom: 12,
            maptype: 'ROADMAP',
            markers: [{
                address: "Melbourne, Australia",
                maptype: 'ROADMAP',
                icon: {
                    image: "https://demo.zytheme.com/hairy/assets/images/gmap/maker.png",
                    iconsize: [76, 61],
                    iconanchor: [76, 61]
                }
            }]
        });

    </script>
</section>
<!-- #gMap end -->

<?php include 'footer.php'?>
</body>

</html>
