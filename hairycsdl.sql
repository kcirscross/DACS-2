-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 30, 2020 lúc 05:42 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hairycsdl`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `idbinhluan` int(11) NOT NULL,
  `idsanpham` int(11) NOT NULL,
  `tennguoidung` varchar(50) NOT NULL,
  `noidung` varchar(10000) NOT NULL,
  `thoigian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`idbinhluan`, `idsanpham`, `tennguoidung`, `noidung`, `thoigian`) VALUES
(1, 18, 'Dũng', 'Okê con gà đen', '2020-12-22'),
(2, 18, 'Trần Dũng', 'Rất tốt, rất okê', '2020-12-22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiet_donhang`
--

CREATE TABLE `chitiet_donhang` (
  `id` int(11) NOT NULL,
  `iddonhang` int(11) NOT NULL,
  `idsanpham` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chitiet_donhang`
--

INSERT INTO `chitiet_donhang` (`id`, `iddonhang`, `idsanpham`, `soluong`, `dongia`) VALUES
(16, 17, 19, 3, 500000),
(17, 17, 27, 1, 500000),
(18, 18, 20, 1, 500000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `iddanhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`iddanhmuc`, `tendanhmuc`) VALUES
(3, 'Chăm sóc tóc'),
(4, 'Chăm sóc... không biết!');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `iddonhang` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `ngaydathang` date NOT NULL,
  `tongtien` int(11) NOT NULL,
  `phuongthuc` varchar(50) NOT NULL,
  `tinhtrang` varchar(50) NOT NULL DEFAULT 'Chờ xác nhận'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`iddonhang`, `iduser`, `ngaydathang`, `tongtien`, `phuongthuc`, `tinhtrang`) VALUES
(17, 1, '2020-12-23', 2000000, 'Chuyển khoản', 'Hủy đơn hàng'),
(18, 1, '2020-12-30', 500000, 'Chuyển khoản', 'Đang giao hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `idsanpham` int(11) NOT NULL,
  `tensanpham` varchar(100) NOT NULL,
  `tendanhmuc` varchar(25) NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` int(11) NOT NULL,
  `tinhtrang` varchar(20) NOT NULL DEFAULT 'Còn hàng',
  `mota` text NOT NULL,
  `ngaythemvao` date NOT NULL,
  `image` varchar(200) NOT NULL,
  `sobinhluan` smallint(6) NOT NULL DEFAULT 0,
  `soluotmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`idsanpham`, `tensanpham`, `tendanhmuc`, `soluong`, `dongia`, `tinhtrang`, `mota`, `ngaythemvao`, `image`, `sobinhluan`, `soluotmua`) VALUES
(19, '1 con mèo', 'Chăm sóc... không biết!', 555, 500000, 'Còn hàng', '2 còn mèo', '2020-12-18', '82506055_1512655645548957_7398290714519404544_n.jpg', 0, 0),
(20, '1 con mèo', 'Chăm sóc... không biết!', 555, 500000, 'Còn hàng', '2 còn mèo', '2020-12-18', '82506055_1512655645548957_7398290714519404544_n.jpg', 0, 0),
(21, '1 con mèo', 'Chăm sóc... không biết!', 555, 500000, 'Còn hàng', '2 còn mèo', '2020-12-18', '82506055_1512655645548957_7398290714519404544_n.jpg', 0, 0),
(22, '1 con mèo', 'Chăm sóc... không biết!', 555, 500000, 'Còn hàng', '2 còn mèo', '2020-12-18', '82506055_1512655645548957_7398290714519404544_n.jpg', 0, 0),
(23, '1 con mèo', 'Chăm sóc... không biết!', 555, 500000, 'Còn hàng', '2 còn mèo', '2020-12-18', '82506055_1512655645548957_7398290714519404544_n.jpg', 0, 0),
(24, '1 con mèo', 'Chăm sóc... không biết!', 555, 500000, 'Còn hàng', '2 còn mèo', '2020-12-18', '82506055_1512655645548957_7398290714519404544_n.jpg', 0, 0),
(25, '1 con mèo', 'Chăm sóc... không biết!', 555, 500000, 'Còn hàng', '2 còn mèo', '2020-12-18', '82506055_1512655645548957_7398290714519404544_n.jpg', 0, 0),
(26, '1 con mèo', 'Chăm sóc... không biết!', 555, 500000, 'Còn hàng', '2 còn mèo', '2020-12-18', '82506055_1512655645548957_7398290714519404544_n.jpg', 0, 0),
(27, '1 con mèo', 'Chăm sóc... không biết!', 555, 500000, 'Còn hàng', '2 còn mèo', '2020-12-18', '82506055_1512655645548957_7398290714519404544_n.jpg', 0, 0),
(28, 'Sáp vuốt tóc', 'Chăm sóc... không biết!', 55555, 5000000, 'Còn hàng', 'Nước hoa cho phái nãm', '2020-12-30', 'notification-03.jpg', 0, 0),
(29, '1 con mèo', 'Chăm sóc tóc', 5, 200000, 'Còn hàng', '2 con mèo', '2020-12-04', 'avatar.png', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `iduser` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `matkhau` varchar(25) NOT NULL,
  `tennguoidung` varchar(50) NOT NULL,
  `sdt` varchar(12) NOT NULL,
  `diachi` varchar(100) NOT NULL,
  `phanquyen` varchar(30) NOT NULL DEFAULT 'Người dùng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`iduser`, `email`, `matkhau`, `tennguoidung`, `sdt`, `diachi`, `phanquyen`) VALUES
(1, 'kcirscross@gmail.com', '123', 'Trần Dũng', '0779406497', 'aaa quận con heo', 'Người dùng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thocat`
--

CREATE TABLE `thocat` (
  `idthocat` int(11) NOT NULL,
  `tenthocat` varchar(100) NOT NULL,
  `vaitro` varchar(100) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`idbinhluan`);

--
-- Chỉ mục cho bảng `chitiet_donhang`
--
ALTER TABLE `chitiet_donhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`iddanhmuc`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`iddonhang`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idsanpham`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`iduser`);

--
-- Chỉ mục cho bảng `thocat`
--
ALTER TABLE `thocat`
  ADD PRIMARY KEY (`idthocat`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `idbinhluan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `chitiet_donhang`
--
ALTER TABLE `chitiet_donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `iddanhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `iddonhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idsanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `thocat`
--
ALTER TABLE `thocat`
  MODIFY `idthocat` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
