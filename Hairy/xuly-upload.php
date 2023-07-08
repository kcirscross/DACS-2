<?php
    $conn = mysqli_connect("localhost", "root", "", "hairycsdl");
    if (isset($_POST['upload'])) {
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        $tmp = explode('.', $file_name);
        $file_ext=strtolower(end($tmp));
        
        $expensions= array("jpeg","jpg","png");
        
        $image = $_FILES['image']['name'];
        $target = "img/".basename($image);

        $nameProduct = $_POST['nameProduct'];
        $description = $_POST['description'];
        $category = $_POST['category'];
        $expire_date = $_POST['expire_date'];
        $soluong = $_POST['soluong'];
        $dongia = $_POST['dongia'];

        if(in_array($file_ext,$expensions)=== false){
            echo '<script language="javascript">alert("Chỉ hỗ trợ file ảnh JPEG hoặc PNG!");</script>';
        }else{
            if($file_size > 10485760) {
                echo '<script language="javascript">alert("Kích thước file ảnh không dược lớn hơn 10MB!");</script>';
            }else{
                if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                    $sql = "INSERT INTO sanpham (tensanpham, tendanhmuc, soluong, dongia, mota, ngaythemvao, image) VALUES ('$nameProduct', '$category','$soluong', '$dongia','$description', '$expire_date', '$image')";
                    mysqli_query($conn, $sql);
                    echo '<script language="javascript">alert("Thêm sản phẩm thành công!");</script>';
                }else{
                    echo '<script language="javascript">alert("Thêm sản phẩm thất bại!");</script>';
                }
            }
        }
    }
    
    if (isset($_POST['editUpload'])) {
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        $tmp = explode('.', $file_name);
        $file_ext=strtolower(end($tmp));
        
        $expensions= array("jpeg","jpg","png");
        
        $image = $_FILES['image']['name'];
        $target = "img/".basename($image);

        $id = $_POST['id'];
        $nameProduct = $_POST['nameProduct'];
        $description = $_POST['description'];
        $category = $_POST['category'];
        $expire_date = $_POST['expire_date'];
        $soluong = $_POST['soluong'];
        $dongia = $_POST['dongia'];

        if(in_array($file_ext,$expensions)=== false){
            echo '<script language="javascript">alert("Chỉ hỗ trợ file ảnh JPEG hoặc PNG!");</script>';
        }else{
            if($file_size > 10485760) {
                echo '<script language="javascript">alert("Kích thước file ảnh không dược lớn hơn 10MB!");</script>';
            }else{
                if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                    if(!empty($image)){
                        $sql = "UPDATE sanpham SET tensanpham='$nameProduct', tendanhmuc='$category', soluong='$soluong', dongia='$dongia', mota='$description', ngaythemvao='$expire_date', image='$image' WHERE idsanpham='$id'";
                    }else{
                        $sql = "UPDATE sanpham SET tensanpham='$nameProduct', tendanhmuc='$category', soluong='$soluong', dongia='$dongia', mota='$description', ngaythemvao='$expire_date' WHERE idsanpham='$id'";
                    }
                    mysqli_query($conn, $sql);
                    echo '<script language="javascript">alert("Cập nhật sản phẩm thành công!");</script>';
                }else{
                    echo '<script language="javascript">alert("Cập nhật sản phẩm thất bại!");</script>';
                }
            }
        }
    }
?>