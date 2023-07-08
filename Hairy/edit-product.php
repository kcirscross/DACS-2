

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Edit Product - Dashboard Admin Template</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
  -->
  <?php 
    $conn = mysqli_connect("localhost", "root", "", "hairycsdl");
    if(isset($_GET['action']) && $_GET['action'] == "editSanPham"){
      $id = $_GET['id'];
      $sql = "SELECT * FROM sanpham WHERE idsanpham='$id'";
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_assoc($result)){
        $nameProduct = $row['tensanpham'];
        $description = $row['mota'];
        $category = $row['tendanhmuc'];
        $expire_date = $row['ngaythemvao'];
        $soluong = $row['soluong'];
        $dongia = $row['dongia'];
        $image = $row['image'];
      }
    }
  ?>
  </head>

  <body>
    <nav class="navbar navbar-expand-xl">
      <div class="container h-100">
        <a class="navbar-brand" href="indexAdmin.php">
          <h1 class="tm-site-title mb-0">Trang Admin</h1>
        </a>
        <button
          class="navbar-toggler ml-auto mr-0"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars tm-nav-icon"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto h-100">
            <li class="nav-item">
              <a class="nav-link" href="indexAdmin.php">
                <i class="fas fa-tachometer-alt"></i> Thống kê
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <i class="far fa-file-alt"></i>
                <span> Báo cáo <i class="fas fa-angle-down"></i> </span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Daily Report</a>
                <a class="dropdown-item" href="#">Weekly Report</a>
                <a class="dropdown-item" href="#">Yearly Report</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="products.php">
                <i class="fas fa-shopping-cart"></i> Quản lý sản phẩm
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="accounts.html">
                <i class="far fa-user"></i> Tài khoản
              </a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <i class="fas fa-cog"></i>
                <span> Cài đặt <i class="fas fa-angle-down"></i> </span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="#">Billing</a>
                <a class="dropdown-item" href="#">Customize</a>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link d-block" href="login.html">
                Admin, <b>Đăng xuất</b>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Chỉnh sửa sản phẩm</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
              <form action="" class="tm-edit-product-form" method="POST" enctype="multipart/form-data">
                  <div class="form-group mb-3">
                    <label
                      for="nameProduct"
                      >Tên sản phẩm
                    </label>
                    <input type="text" name="id" id="id" value="<?php echo $id?>" style="display: none;">
                    <input
                      id="nameProduct"
                      name="nameProduct"
                      value = "<?php echo $nameProduct?>"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="description"
                      >Mô tả</label
                    >
                    <textarea
                      class="form-control validate"
                      name="description"
                      rows="3"
                      required
                    ><?php echo $description?></textarea>
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="category"
                      >Danh mục</label
                    >
                    <select
                      class="custom-select tm-select-accounts"
                      id="category"
                      name="category"
                    >
                      <option selected>Chọn danh mục</option>
                      <?php 
                        $conn = mysqli_connect("localhost", "root", "", "hairycsdl");
                        $sql = "SELECT * FROM danhmuc";
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_array($result)){
                          if($row['tendanhmuc'] == "$category"){
                            ?>
                              <option value="<?php echo $row['tendanhmuc']?>" selected><?php echo $row['tendanhmuc']?></option>
                            <?php
                          }else{
                            ?>
                              <option value="<?php echo $row['tendanhmuc']?>"><?php echo $row['tendanhmuc']?></option>
                            <?php
                          }
                        }
                      ?>
                    </select>
                  </div>
                  <div class="row">
                      <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="expire_date"
                            >Ngày thêm vào
                          </label>
                          <input
                            id="expire_date"
                            name="expire_date"
                            value = "<?php echo $expire_date?>"
                            type="text"
                            class="form-control validate"
                            data-large-mode="true"
                          />
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="soluong"
                            >Số lượng
                          </label>
                          <input
                            id="soluong"
                            name="soluong"
                            value = "<?php echo $soluong?>"
                            type="text"
                            class="form-control validate"
                            required
                          />
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-12">
                          <label
                            for="dongia"
                            >Đơn giá
                          </label>
                          <input
                            id="dongia"
                            name="dongia"
                            value = "<?php echo $dongia?>"
                            type="text"
                            class="form-control validate"
                            required
                          />
                        </div>
                  </div>
                  
              </div>
              <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                <div class="tm-product-img-dummy mx-auto">
                  <?php 
                    if(!empty($image)){
                      ?>
                        <img style="max-width: 100%; max-height: 100%; width: 357.5px; height: 240px" src="img/<?php echo $image?>">
                      <?php
                    }else{
                      ?>
                        <i
                          class="fas fa-cloud-upload-alt tm-upload-icon"
                          onclick="document.getElementById('fileInput').click();"
                        ></i>
                      <?php
                    }
                  ?>
                  
                </div>
                <div class="custom-file mt-3 mb-3">
                  <input id="fileInput" type="file" name="image" style="display:none;" />
                  <input type="hidden" name="size" value="1000000"> 
                  <input
                    type="button"
                    class="btn btn-primary btn-block mx-auto"
                    value="Tải ảnh sản phẩm lên"
                    onclick="document.getElementById('fileInput').click();"
                  />
                </div>
              </div>
              <div class="col-12">
                <button type="submit" name="editUpload" class="btn btn-primary btn-block text-uppercase">Câp nhật</button>
                <?php require "xuly-upload.php"?>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="tm-footer row tm-mt-small">
        <div class="col-12 font-weight-light">
          <p class="text-center text-white mb-0 px-4 small">
            Copyright &copy; <b>2018</b> All rights reserved. 
            
            Design: <a rel="nofollow noopener" href="https://templatemo.com" class="tm-footer-link">Template Mo</a>
        </p>
        </div>
    </footer> 

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
      $(function() {
        $("#expire_date").datepicker({ dateFormat: 'yy-mm-dd' });
      });
    </script>
  </body>
</html>
