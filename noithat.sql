-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2015 at 11:41 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `noithat`
--

-- --------------------------------------------------------

--
-- Table structure for table `ctdonhang`
--

CREATE TABLE `ctdonhang` (
  `id` int(11) NOT NULL,
  `id_dh` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `soLuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ctdonhang`
--

INSERT INTO `ctdonhang` (`id`, `id_dh`, `id_sp`, `soLuong`) VALUES
(37, 32, 1, 1),
(38, 32, 3, 1),
(39, 33, 3, 3),
(40, 33, 1, 1),
(41, 34, 6, 1),
(42, 34, 7, 3),
(43, 34, 5, 1),
(44, 34, 1, 1),
(45, 35, 6, 1),
(46, 36, 6, 1),
(47, 37, 5, 1),
(48, 38, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cthoadon`
--

CREATE TABLE `cthoadon` (
  `id` int(11) NOT NULL,
  `id_hd` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `soLuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cthoadon`
--

INSERT INTO `cthoadon` (`id`, `id_hd`, `id_sp`, `soLuong`) VALUES
(12, 7, 1, 1),
(13, 7, 3, 1),
(14, 8, 3, 3),
(15, 8, 1, 1),
(16, 9, 6, 1),
(17, 9, 7, 3),
(18, 9, 5, 1),
(19, 9, 1, 1),
(20, 10, 6, 1),
(21, 11, 6, 1),
(22, 12, 5, 1),
(23, 13, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `id_kh` int(11) NOT NULL,
  `ngayDat` datetime NOT NULL,
  `hoTen` varchar(100) NOT NULL,
  `diaChi` varchar(200) NOT NULL,
  `dienThoai` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ghiChu` text NOT NULL,
  `tinhTrang` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`id`, `id_kh`, `ngayDat`, `hoTen`, `diaChi`, `dienThoai`, `email`, `ghiChu`, `tinhTrang`) VALUES
(32, 1, '2015-12-08 07:40:26', 'Nguyễn Minh Định ', 'Xóm Đình, Thôn Nguyên Xá 1, Minh Khai, Bắc Từ Liêm, Hà Nội ', '01682485646 ', 'midi9x@gmail.com ', 'thanh toán khi nhận hàng', 1),
(33, 1, '2015-12-09 15:53:42', 'Nguyễn Minh Định ', 'Xóm Đình, Thôn Nguyên Xá 1, Minh Khai, Bắc Từ Liêm, Hà Nội ', '01682485646 ', 'midi9x@gmail.com ', 'Ghi chú ', 1),
(34, 1, '2015-12-11 04:49:24', 'Nguyễn Minh Định ', 'Xóm Đình, Thôn Nguyên Xá 1, Minh Khai, Bắc Từ Liêm, Hà Nội ', '01682485646 ', 'midi9x@gmail.com ', 'ghi chu', 0),
(35, 11, '2015-12-14 05:09:15', '', '', '', '', '', 0),
(36, 11, '2015-12-14 05:10:48', '', ' ', ' ', ' ', '', 0),
(37, 12, '2015-12-14 06:23:07', 'nguyen thi thao', 'thaothaothaothaothaothaothaothao', '099999999', 'thaothao@thaothao.thaothao', '', 0),
(38, 13, '2015-12-14 06:25:49', 'adadaqd', 'adadaqd', '111111111', 'adadaqd@adadaqd.adadaqd', 'adadaqd', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gopy`
--

CREATE TABLE `gopy` (
  `id` int(11) NOT NULL,
  `id_kh` int(11) NOT NULL,
  `ngayGopY` datetime NOT NULL,
  `noiDung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gopy`
--

INSERT INTO `gopy` (`id`, `id_kh`, `ngayGopY`, `noiDung`) VALUES
(3, 1, '2015-12-03 00:00:00', 'noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung '),
(4, 1, '2015-12-03 00:00:00', 'noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung '),
(5, 1, '2015-12-03 00:00:00', 'noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung '),
(6, 1, '2015-12-03 00:00:00', 'noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung '),
(7, 1, '2015-12-03 00:00:00', 'noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung '),
(9, 1, '2015-12-03 00:00:00', 'noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung '),
(10, 1, '2015-12-03 00:00:00', 'noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung '),
(11, 1, '2015-12-03 00:00:00', 'noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung '),
(12, 1, '2015-12-03 00:00:00', 'noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung noi dung ');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `id` int(11) NOT NULL,
  `id_nv` int(11) NOT NULL,
  `id_dh` int(11) NOT NULL,
  `ngayLap` datetime NOT NULL,
  `tinhTrang` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`id`, `id_nv`, `id_dh`, `ngayLap`, `tinhTrang`) VALUES
(7, 0, 32, '2015-12-08 07:40:26', 1),
(8, 0, 33, '2015-12-09 15:53:42', 0),
(9, 0, 34, '2015-12-11 04:49:24', 0),
(10, 0, 35, '2015-12-14 05:09:15', 0),
(11, 0, 36, '2015-12-14 05:10:48', 0),
(12, 0, 37, '2015-12-14 06:23:07', 0),
(13, 0, 38, '2015-12-14 06:25:49', 0);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(11) NOT NULL,
  `tenDN` varchar(50) NOT NULL,
  `matKhau` varchar(32) NOT NULL,
  `tenKH` varchar(100) NOT NULL,
  `diaChi` varchar(200) NOT NULL,
  `dienThoai` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ngaySinh` datetime NOT NULL,
  `gioiTinh` int(11) NOT NULL,
  `phanLoai` int(11) NOT NULL DEFAULT '0',
  `tinhTrang` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`id`, `tenDN`, `matKhau`, `tenKH`, `diaChi`, `dienThoai`, `email`, `ngaySinh`, `gioiTinh`, `phanLoai`, `tinhTrang`) VALUES
(1, 'midi9x', '21232f297a57a5a743894a0e4a801fc3', 'Nguyễn Minh Định', 'Xóm Đình, Thôn Nguyên Xá 1, Minh Khai, Bắc Từ Liêm, Hà Nội', '01682485646', 'midi9x@gmail.com', '1994-04-17 00:00:00', 1, 0, 1),
(2, 'thaont', '21232f297a57a5a743894a0e4a801fc3', 'Nguyễn Thị Thảo', 'Hà Nội', '0999999999', 'thaont@gmail.com', '1994-04-04 00:00:00', 0, 0, 1),
(3, '1111111', '7fa8282ad93047a4d6fe6111c93b308a', '1111111', '1111111', '1111111', '1111111', '1994-04-04 00:00:00', 1, 0, 1),
(4, 'test', '098f6bcd4621d373cade4e832627b4f6', 'test', 'test', '22', 'test', '1994-04-04 00:00:00', 1, 0, 1),
(5, 'aaaaaa', '0b4e7a0e5fe84ad35fb5f95b9ceeac79', 'aaaaaa', '11111111111', '11111111111', 'midi', '1994-04-04 00:00:00', 1, 0, 1),
(10, 'huongntt', '21232f297a57a5a743894a0e4a801fc3', 'Nguyễn Thị Thu Hường', 'Nguyên Xá Minh Khai Tu liem Ha Noi', '099999999', 'huonbgntt@gmail.com', '1994-04-04 00:00:00', 1, 0, 1),
(12, 'thaothao', '17f9dd3b1bcc120b7052d5ba4a2a41b9', 'nguyen thi thao', 'thaothaothaothaothaothaothaothao', '099999999', 'thaothao@thaothao.thaothao', '1993-11-11 00:00:00', 1, 0, 1),
(13, 'adadaqd', '6f0e83baa3be0885d3b0a4b347d1786f', 'adadaqd', 'adadaqd', '111111111', 'adadaqd@adadaqd.adadaqd', '1992-11-11 00:00:00', 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `loaisp`
--

CREATE TABLE `loaisp` (
  `id` int(11) NOT NULL,
  `tenLoai` text NOT NULL,
  `moTa` text NOT NULL,
  `tuKhoa` text NOT NULL,
  `loaiCha` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loaisp`
--

INSERT INTO `loaisp` (`id`, `tenLoai`, `moTa`, `tuKhoa`, `loaiCha`) VALUES
(1, 'Nội thất phòng khách', 'Thiết kế, thi công và trang trí nội thất phòng khách mang phong cách hiện đại sang trọng cho từng không gian phòng khách khác nhau', 'noi that, do go, phong khach,thiet ke, thi cong, noi that phong khach,noi that phong khach dep', 0),
(4, 'Nội Thất Phòng Bếp', 'Nội thất phòng bếp đẹp tiện nghi sang trọng giá rẻ mà hiện đại.Liên hệ ngay để được tư vấn thiết kế nội thất phòng bếp ưng ý nhất', 'nội thất phòng bếp đẹp, nội thất phòng bếp giá rẻ', 0),
(15, 'Nội thất phòng ngủ', 'Thiết kế nội thất phòng ngủ đẹp, hiện đại mà lại phù hợp với tính cách và sở thích của từng cá nhân là vấn đề được rất nhiều gia chủ quan tâm', 'noi that, do go, phong ngu,thiet ke, thi cong, noi that phong ngu,noi that phong ngu dep', 0),
(17, 'Cầu thang', 'Cầu thang là một bộ phận trong các công trình kiến trúc có tác dụng chia một khoảng cách lớn nằm xiên thành nhiều khoảng cách nhỏ nằm xiên (bậc thang)', 'cầu thang kính, cầu thang gỗ, cầu thang, noi that cau thang', 0),
(18, 'Bàn tiếp khách', 'Bàn ghế nội thất phòng khách, mẫu đa dạng, giá ưu đãi lớn nhất', 'Bàn Tiếp Khách, bàn phòng khách, bản đẹp', 1),
(19, 'Kệ Tivi', 'Kệ tivi gỗ cho nội thất phòng khách, Các mẫu kệ tivi gỗ đẹp làm nổi bật không gian phòng khách của bạn vừa mang lại sự tiện nghi với giá thành hợp lí.', 'kệ tivi phòng khách,Kệ tivi treo tường, kệ tivi đẹp', 1),
(20, 'Giường ngủ', 'Giường Ngủ Hiện Đại đem lại sự tiện nghi và không gian hiện đại cho nội thất phòng ngủ. Sự tiện lợi khi sử dụng và cảm giác an toàn, thoải mái khi nằm trên nó.', 'Giường Ngủ , Giường Ngủ Hiện Đại, Giuong Ngu Dep', 15),
(21, 'Bàn Trang Điểm', 'Khi lựa chọn một mẫu bàn trang điểm đẹp và phù hợp với mình, các bạn nên xem xét thực tế chức năng sử dụng của nó', 'Bàn Trang Điểm, Bàn Trang Điểm Đẹp, Mẫu Bàn Trang Điểm', 15);

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `id` int(11) NOT NULL,
  `tenDN` varchar(50) NOT NULL,
  `matKhau` varchar(32) NOT NULL,
  `tenNV` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `diaChi` text NOT NULL,
  `dienThoai` varchar(20) NOT NULL,
  `ngaySinh` datetime NOT NULL,
  `gioiTinh` int(11) NOT NULL,
  `quyen` int(11) NOT NULL DEFAULT '0',
  `tinhTrang` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`id`, `tenDN`, `matKhau`, `tenNV`, `email`, `diaChi`, `dienThoai`, `ngaySinh`, `gioiTinh`, `quyen`, `tinhTrang`) VALUES
(6, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'admin@gmail.com', 'Ha Noi', '01682485646', '2015-11-24 00:00:00', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `id_loai` int(11) NOT NULL,
  `tenSP` text NOT NULL,
  `hinhAnh` varchar(200) NOT NULL,
  `donGia` decimal(10,0) NOT NULL,
  `soLuong` int(11) NOT NULL,
  `chatLieu` varchar(100) NOT NULL,
  `kichThuoc` varchar(100) NOT NULL,
  `xuatXu` varchar(100) NOT NULL,
  `mauSon` varchar(100) NOT NULL,
  `moTa` text NOT NULL,
  `tuKhoa` text NOT NULL,
  `ngayTao` datetime NOT NULL,
  `phanLoai` int(11) NOT NULL DEFAULT '1',
  `trangThai` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `id_loai`, `tenSP`, `hinhAnh`, `donGia`, `soLuong`, `chatLieu`, `kichThuoc`, `xuatXu`, `mauSon`, `moTa`, `tuKhoa`, `ngayTao`, `phanLoai`, `trangThai`) VALUES
(1, 18, 'Bàn Ghế Gỗ Phòng Khách', '../upload/ban-ghe-go-phong-khach.jpg', '11000000', 100, 'Gỗ nguyên chất', 'Dài 1m5 x cao 0.5m rộng 0.6m', 'Việt Nam', 'Nâu, .. các loại', '<p><strong>B&agrave;n ghế gỗ ph&ograve;ng kh&aacute;ch</strong>&nbsp;l&agrave; sản phẩm được sản xuất nhiều nhất tại cơ sở ch&uacute;ng t&ocirc;i v&agrave; l&agrave; mặt h&agrave;ng xuất khẩu ch&iacute;nh ra c&aacute;c cửa h&agrave;ng đồ gỗ nội thất tr&ecirc;n địa b&agrave;n H&agrave; Nội, v&agrave; xuất khẩu đi 1 số tỉnh th&agrave;nh kh&aacute;c trong cả nước. Với gi&acirc;y chuyền sản xuất li&ecirc;n ho&agrave;n giữa c&aacute;c kh&acirc;u ch&uacute;ng t&ocirc;i c&oacute; thể cung cấp số lượng lớn&nbsp;<strong>b&agrave;n ghế gỗ</strong>&nbsp;gi&aacute; rẻ cho qu&yacute; kh&aacute;ch c&oacute; nhu cầu nhập số lượng nhiều.</p>\r\n\r\n<p>Với kh&aacute;ch h&agrave;ng đặt sản xuất từng bộ gi&aacute; cả sẽ vẫn được đảm bảo thấp hơn tất cả c&aacute;c showroom tr&ecirc;n địa b&agrave;n th&agrave;nh phố H&agrave; Nội.</p>\r\n\r\n<p>&ndash; &nbsp;100%&nbsp;<strong>b&agrave;n ghế ph&ograve;ng kh&aacute;ch</strong>&nbsp;của ch&uacute;ng t&ocirc;i được l&agrave;m bằng gỗ tự nhi&ecirc;n đ&atilde; qua c&aacute;c c&ocirc;ng đoạn chế biến như tẩm sấy v&agrave; gia c&ocirc;ng sản xuất th&agrave;nh sản phẩm. C&aacute;c sản phẩm đều được sơn bằng sơn PU loại tốt nhất. Đảm bảo chống mối mọt v&agrave; cong v&ecirc;nh.</p>\r\n\r\n<p>&ndash; Thời gian bảo h&agrave;nh cho sản phẩm l&agrave; 2 năm.</p>\r\n\r\n<p>&ndash; Miễn ph&iacute; vận chuyển trong b&aacute;n k&iacute;nh 30km t&iacute;nh từ địa chỉ cơ sở sản xuất &ldquo;L&agrave;ng nghề x&atilde; canh nậu &ndash; thạch thất &ndash; h&agrave; nội&rdquo;. c&aacute;c vị ch&iacute; xa hơn sẽ được hỗ trợ 1/2 tiền vận chuyển.</p>\r\n\r\n<p><strong>Lưu &yacute;:</strong>&nbsp;Ngo&agrave;i c&aacute;c mẫu m&atilde; tr&ecirc;n website qu&yacute; kh&aacute;ch c&oacute; thể li&ecirc;n hệ ch&uacute;ng t&ocirc;i để c&oacute; th&ecirc;m nhiều mẫu sản phẩm b&agrave;n ghế gỗ kh&aacute;c. Ngo&agrave;i ra qu&yacute; kh&aacute;ch c&oacute; thể tham khảo mẫu tr&ecirc;n mạng hoặc tự thiết kế cho ri&ecirc;ng m&igrave;nh một bộ b&agrave;n ghế theo phong c&aacute;ch ri&ecirc;ng.</p>\r\n\r\n<p>Dưới đ&acirc;y l&agrave; h&igrave;nh ảnh sản phẩm b&agrave;n ghế gỗ ph&ograve;ng kh&aacute;ch mới chuyển cho đối t&aacute;c b&aacute;n h&agrave;ng tại H&agrave; Nội.</p>\r\n\r\n<p style="text-align:center"><img alt="bàn ghế gỗ" src="http://dogonoithatcaocap.vn/wp-content/uploads/2014/08/ban-ghe-go.jpg" style="height:488px; width:650px" /></p>\r\n\r\n<p><em>th&ocirc;ng thường mẫu b&agrave;n ghế ph&ograve;ng kh&aacute;ch được thiết kế 1 ghế bằng d&agrave;i v&agrave; 2 hoặc 3 ghế đơn.</em></p>\r\n\r\n<p style="text-align:center"><img alt="bàn ghế gỗ giá rẻ" src="http://dogonoithatcaocap.vn/wp-content/uploads/2014/08/ban-ghe-go-gia-re.jpg" style="height:488px; width:650px" /></p>\r\n\r\n<p><em>2 chiếc ghế đơn được thiết kế chắc chắn</em></p>\r\n\r\n<p style="text-align:center"><img alt="bàn ghế nan gỗ" src="http://dogonoithatcaocap.vn/wp-content/uploads/2014/08/ban-ghe-nan-go.jpg" style="height:488px; width:650px" /></p>\r\n\r\n<p><em>Mẫu b&agrave;n ghế gỗ ph&ograve;ng kh&aacute;ch n&agrave;y được thiết kế 2 b&agrave;n rời c&oacute; thể sắp xếp t&ugrave;y biến theo &yacute; của gia chủ.</em></p>\r\n\r\n<p style="text-align:center"><img alt="bàn ghế phòng khách" src="http://dogonoithatcaocap.vn/wp-content/uploads/2014/08/ban-ghe-phong-khach.jpg" /></p>\r\n\r\n<h2>&nbsp;</h2>\r\n', 'Bàn Ghế , Bàn Ghế Gỗ, Nội thất phòng khách, Bàn Ghế Gỗ Phòng Khách', '2015-11-10 00:00:00', 1, 1),
(3, 18, 'Bàn tiếp khách', '../upload/ban-ghe-nan-go.jpg', '10000000', 10, 'Gỗ nguyên chất', '', '', '', '<p>B&agrave;n ghế gỗ ph&ograve;ng kh&aacute;ch&nbsp;l&agrave; sản phẩm được sản xuất nhiều nhất tại cơ sở ch&uacute;ng t&ocirc;i v&agrave; l&agrave; mặt h&agrave;ng xuất khẩu ch&iacute;nh ra c&aacute;c cửa h&agrave;ng đồ gỗ nội thất tr&ecirc;n địa b&agrave;n H&agrave; Nội, v&agrave; xuất khẩu đi 1 số tỉnh th&agrave;nh kh&aacute;c trong cả nước. Với gi&acirc;y chuyền sản xuất li&ecirc;n ho&agrave;n giữa c&aacute;c kh&acirc;u ch&uacute;ng t&ocirc;i c&oacute; thể cung cấp số lượng lớn&nbsp;b&agrave;n ghế gỗ&nbsp;gi&aacute; rẻ cho qu&yacute; kh&aacute;ch c&oacute; nhu cầu nhập số lượng nhiều.</p>\r\n\r\n<p style="text-align:center"><img alt="bàn ghế nan gỗ" src="http://dogonoithatcaocap.vn/wp-content/uploads/2014/08/ban-ghe-nan-go.jpg" /></p>\r\n\r\n<p>Mẫu b&agrave;n ghế gỗ ph&ograve;ng kh&aacute;ch n&agrave;y được thiết kế 2 b&agrave;n rời c&oacute; thể sắp xếp t&ugrave;y biến theo &yacute; của gia chủ.</p>\r\n\r\n<p style="text-align:center"><img alt="bàn ghế phòng khách" src="http://dogonoithatcaocap.vn/wp-content/uploads/2014/08/ban-ghe-phong-khach.jpg" /></p>\r\n\r\n<p>Với kh&aacute;ch h&agrave;ng đặt sản xuất từng bộ gi&aacute; cả sẽ vẫn được đảm bảo thấp hơn tất cả c&aacute;c showroom tr&ecirc;n địa b&agrave;n th&agrave;nh phố H&agrave; Nội.</p>\r\n\r\n<p>&ndash; &nbsp;100%&nbsp;b&agrave;n ghế ph&ograve;ng kh&aacute;ch&nbsp;của ch&uacute;ng t&ocirc;i được l&agrave;m bằng gỗ tự nhi&ecirc;n đ&atilde; qua c&aacute;c c&ocirc;ng đoạn chế biến như tẩm sấy v&agrave; gia c&ocirc;ng sản xuất th&agrave;nh sản phẩm. C&aacute;c sản phẩm đều được sơn bằng sơn PU loại tốt nhất. Đảm bảo chống mối mọt v&agrave; cong v&ecirc;nh.</p>\r\n\r\n<p>&ndash; Thời gian bảo h&agrave;nh cho sản phẩm l&agrave; 2 năm.</p>\r\n\r\n<p>&ndash; Miễn ph&iacute; vận chuyển trong b&aacute;n k&iacute;nh 30km t&iacute;nh từ địa chỉ cơ sở sản xuất &ldquo;L&agrave;ng nghề x&atilde; canh nậu &ndash; thạch thất &ndash; h&agrave; nội&rdquo;. c&aacute;c vị ch&iacute; xa hơn sẽ được hỗ trợ 1/2 tiền vận chuyển.</p>\r\n\r\n<p>Lưu &yacute;:&nbsp;Ngo&agrave;i c&aacute;c mẫu m&atilde; tr&ecirc;n website qu&yacute; kh&aacute;ch c&oacute; thể li&ecirc;n hệ ch&uacute;ng t&ocirc;i để c&oacute; th&ecirc;m nhiều mẫu sản phẩm b&agrave;n ghế gỗ kh&aacute;c. Ngo&agrave;i ra qu&yacute; kh&aacute;ch c&oacute; thể tham khảo mẫu tr&ecirc;n mạng hoặc tự thiết kế cho ri&ecirc;ng m&igrave;nh một bộ b&agrave;n ghế theo phong c&aacute;ch ri&ecirc;ng.</p>\r\n', '', '2015-11-10 17:21:30', 1, 1),
(4, 18, 'Sofa cao cấp SCC04', '../upload/sofa-cao-cap-scc04-1.jpg', '31200000', 100, 'Da cao cấp nhập khẩu', '1.4m x 3.1m  x 2.1m', 'Viet Nam', 'Nâu, đen, các loại', '<p>Sofa cao cấp -&nbsp;Thiết kế ph&ograve;ng kh&aacute;ch đương đại với m&agrave;u sắc sang trọng sự kết hợp giữa m&agrave;u đen v&agrave; m&agrave;u trắng tạo n&ecirc;n một kh&ocirc;ng gian ph&ograve;ng kh&aacute;ch&nbsp;thật sang trọng nhờ&nbsp;bộ&nbsp;sofa ph&ograve;ng&nbsp;kh&aacute;ch, trang tr&iacute; tr&ecirc;n tường bằng những h&igrave;nh ảnh ch&acirc;n dung mang t&iacute;nh nghệ thuật thế hiện sự thẩm mỹ của gia chủ, mặc d&ugrave; thiết kế c&aacute;c đồ nội thất kh&ocirc;ng qu&aacute; cầu kỳ.</p>\r\n\r\n<p style="text-align:center"><img alt="Sofa cao cấp SCC04 do soloha cung cấp" src="http://solohaplaza.com/sites/default/files/sanphammanager06/sofa/sofa-cao-cap-scc04-1.jpg" style="width:600px" /></p>\r\n\r\n<p><em>Sofa cao cấp SCC04&nbsp;độc&nbsp;đ&aacute;o với thiết kế sofa</em></p>\r\n\r\n<p style="text-align:center"><img alt="Sofa cao cấp SCC04" src="http://solohaplaza.com/sites/default/files/sanphammanager06/sofa/sofa-cao-cap-scc04-2.jpg" style="width:600px" /></p>\r\n\r\n<p><em>Ghế sofa cao cấp SCC04 m&agrave;u trắng đẹp</em></p>\r\n\r\n<h3><strong>Th&ocirc;ng tin sản phẩm sofa cao cấp&nbsp;SCC04:</strong></h3>\r\n\r\n<h3>- K&iacute;ch thước: d&agrave;i&nbsp;1.4m&nbsp;x 3.1m &nbsp;x 2.1m, cao phủ b&igrave; 0,95m, s&acirc;u phủ b&igrave; 0,9m.<br />\r\n- Chất liệu:</h3>\r\n\r\n<ul>\r\n	<li>Vật liệu bọc: da cao cấp nhập khẩu</li>\r\n	<li>Khung gỗ tự nhi&ecirc;n đ&atilde; qua xử l&yacute; chống cong v&ecirc;nh, mối mọt.</li>\r\n	<li>Đệm m&uacute;t rời, sử dụng đệm m&uacute;t Vạn Th&agrave;nh loại c&oacute; độ đ&agrave;n hổi tốt, đem lại cảm gi&aacute;c thoải m&aacute;i cho người sử dụng. Đệm m&uacute;t c&oacute; thể cứng, mềm hoặc bằng b&ocirc;ng &eacute;p (t&ugrave;y chọn của kh&aacute;ch h&agrave;ng).</li>\r\n	<li>L&ograve; xo được l&agrave;m bằng th&eacute;p S60C</li>\r\n	<li>Ch&acirc;n Gỗ hoặc Inox</li>\r\n</ul>\r\n\r\n<h3><strong>Sofa cao cấp SCC04&nbsp;độc&nbsp;đ&aacute;o:</strong></h3>\r\n\r\n<p>Thiết kế&nbsp;độc&nbsp;đ&aacute;o với kiểu d&aacute;ng chữ U nhỏ c&oacute; chiếc b&agrave;n phụ tiện lợi hơn cho người sử dụng.&nbsp;<a href="http://solohaplaza.com/ban-ghe-sofa">Thiết kế sofa</a>&nbsp;n&agrave;y kh&ocirc;ng chỉ&nbsp;đem lại sự thoải m&aacute;i cho người sử dụng khi ngồi m&agrave; c&ograve;n&nbsp;đem lại cảm gi&aacute;c thoải m&aacute;i khi sử dụng nằm thư gi&atilde;n. Nhiều kh&aacute;ch h&agrave;ng rất th&iacute;ch mẫu sofa cao cấp SCC04 của Soloha cung cấp n&agrave;y.</p>\r\n\r\n<p><strong>*</strong>&nbsp;K&iacute;ch thước v&agrave; m&agrave;u sắc, kiểu d&aacute;ng, hoa văn của&nbsp;bộ ghế sofa&nbsp;c&oacute; thể thay đổi theo &yacute; th&iacute;ch v&agrave; kh&ocirc;ng gian nội th&acirc;t của Qu&yacute; kh&aacute;ch.</p>\r\n\r\n<h3><strong>Phụ kiện đi k&egrave;m sofa:</strong></h3>\r\n\r\n<ol>\r\n	<li>B&agrave;n tr&agrave; với bề mặt k&iacute;nh cường lực c&oacute; gi&aacute;&nbsp;6.500.000đ</li>\r\n	<li>Tấm thảm l&ocirc;ng x&ugrave;&nbsp;trang tr&iacute; c&oacute; gi&aacute;&nbsp;4.950.000đ</li>\r\n</ol>\r\n\r\n<p><strong>* Lưu &yacute;:</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>-&nbsp;K&iacute;ch thước v&agrave; m&agrave;u sắc&nbsp;bộ ghế sofa cao cấp&nbsp;c&oacute; thể thay đổi theo &yacute; th&iacute;ch v&agrave; kh&ocirc;ng gian nội thất của qu&yacute; kh&aacute;ch.</p>\r\n\r\n<p>- Đơn gi&aacute; tr&ecirc;n chưa bao gồm ghế đ&ocirc;n, b&agrave;n tr&agrave; v&agrave; thảm sofa.</p>\r\n', 'Sofa ,Sofa cao cấp, noi that', '2015-11-10 22:02:20', 1, 1),
(5, 18, 'Bàn ghế tiếp khách nan gỗ', '../upload/ban-ghe-tiep-khach-nan-go.jpg', '5000000', 10, 'Gỗ nguyên chất', ' 2040 x 750 x 720mm', 'Thạch Thất – Hà Nội', 'Nâu, Đen', '<p>B&agrave;n Ghế Tiếp Kh&aacute;ch Nan Gỗ&nbsp;thường được gia chủ đặt sản xuất theo y&ecirc;u cầu với nhiều mẫu m&atilde; v&agrave; k&iacute;ch thước kh&aacute;c nhau để l&agrave;m sao cho ph&ugrave; hợp với diện t&iacute;ch của từng hộ gia đ&igrave;nh. Nhưng c&oacute; một số mẫu chung v&agrave; được nhiều gia đ&igrave;nh c&oacute; thu nhập trung b&igrave;nh kh&aacute; v&agrave; c&oacute; diện t&iacute;ch căn nh&agrave; nhỏ ưa chuộng l&agrave; mẫu b&agrave;n&nbsp;ghế tiếp kh&aacute;ch nan gỗ. Với đặc điểm d&ugrave;ng nhiều thanh nan được pha sẻ th&agrave;nh nhiều k&iacute;ch thước, k&iacute;ch cỡ kh&aacute;c nhau rồi gh&eacute;p lại th&agrave;nh ghế, thoạt nh&igrave;n c&oacute; vẻ rất đơn giản v&agrave; đơn điệu nhưng ch&iacute;nh v&igrave; sự đơn giản m&agrave; n&oacute; được nhiều người th&iacute;ch th&uacute; v&agrave; ưa chuộng.</p>\r\n\r\n<p>Một số đặc điểm nổi bật của&nbsp;b&agrave;n ghế tiếp kh&aacute;ch nan gỗ&nbsp;l&agrave;m mọi người tin d&ugrave;ng như mẫu m&atilde; đa dạng nhờ sự c&aacute;ch điệu hiệu quả tới tối đa qua những thanh nan g&oacute;c cạnh. V&agrave; với c&ocirc;ng việc tất bật tại nơi l&agrave;m việc hằng ng&agrave;y sẽ l&agrave;m bạn ch&aacute;n nản khi nh&igrave;n thấy phải lau ch&ugrave;i hay h&uacute;t bụi một bộ b&agrave;n ghế kh&oacute; chịu, với bộ ghế tiếp kh&aacute;ch nan gỗ bạn chỉ cần 1 c&aacute;i rẻ l&agrave; c&oacute; thể lau ch&ugrave;i rất dễ d&agrave;ng v&agrave; kh&ocirc;ng mất nhiều thời gian.</p>\r\n\r\n<p>Điểm đặc biệt hơn nữa l&agrave; v&igrave; thiết kế nan n&ecirc;n trọng lượng bộ b&agrave;n ghế nhẹ đi rất nhiều rất thuận tiện trong việc di chuyển khi muốn chuyển hướng ng&ocirc;i nh&agrave;</p>\r\n\r\n<p style="text-align:center"><img src="http://solohaplaza.com/sites/default/files/sanpham14/ban-ghe-go-phong-khach-dg26.jpg" style="width:600px" /></p>\r\n\r\n<p style="text-align:center"><img src="http://dogonoithatcaocap.vn/wp-content/uploads/2014/08/ban-ghe-go.jpg" style="width:600px" /></p>\r\n\r\n<p>Sản phẩm B&agrave;n Ghế Tiếp Kh&aacute;ch Nan Gỗ gồm c&oacute; :</p>\r\n\r\n<p>&ndash; Một ghế băng 3 chỗ với k&iacute;ch thước 2040 x 750 x 720mm, tay v&agrave; ch&acirc;n ghế 120x38mm, nan 60x27mm.</p>\r\n\r\n<p>&ndash; Hai ghế đơn một chỗ ngồi với k&iacute;ch thước 840 x 750 x 720mm,&nbsp;tay v&agrave; ch&acirc;n ghế 120x38mm, nan 60x27mm.</p>\r\n\r\n<p>&ndash; Một b&agrave;n uống nước 1200 x 650 x 460mm, ch&acirc;n 100 x 100mm, 1 k&iacute;ch cường lực 10mm được m&agrave;i xiết cạnh.</p>\r\n\r\n<p>k&iacute;ch thước v&agrave; mẫu m&atilde; được thay đổi theo từng &yacute; tưởng của kh&aacute;ch h&agrave;ng.</p>\r\n\r\n<p>Chất liệu gỗ : gỗ Sồi Nga, gỗ Sồi Mỹ, gỗ Xoan Đ&agrave;o.</p>\r\n\r\n<p>&ndash; Ngo&agrave;i ra c&oacute; thể đặt th&ecirc;m đệm, tựa cho b&agrave;n ghế. v&agrave; c&oacute; thể bọc nỉ cho ghế nếu kh&aacute;ch c&oacute; y&ecirc;u cầu.</p>', 'ban an ban tiep khach ,ban ghe nan, bàn đơn tiếp khách, nan ghe go', '2015-12-11 09:42:41', 1, 1),
(6, 19, 'Mẫu Kệ Tivi Hiện Đại', '../upload/mau-ke-dep.jpg', '6000000', 10, '', '', 'Laminate', '', '<p>Trong b&agrave;i viết n&agrave;y ch&uacute;ng t&ocirc;i xin giới thiệu một số&nbsp;Mẫu Kệ Tivi&nbsp;hiện đại mang phong c&aacute;ch ch&acirc;u &acirc;u. Với phong c&aacute;ch&nbsp;kệ tivi hiện đại&nbsp;n&agrave;y rất ph&ugrave; hợp với c&aacute;c chung cư tại việt nam. Đặc biệt tại c&aacute;c th&agrave;nh phố lớn như H&agrave; Nội v&agrave; HCM.</p>\r\n\r\n<p>C&aacute;c&nbsp;mẫu kệ tivi đẹp&nbsp;nhưng rất đơn giản, được thiết kế 100% bằng gỗ c&ocirc;ng nghiệp&nbsp;Laminate&nbsp;cao cấp. C&aacute;c mẫu kệ đa dạng v&agrave; đa phong c&aacute;ch, những c&aacute;ch phối m&agrave;u rất ấn tượng tạo n&ecirc;n điểm nhấn quan trọng cho những bộ kệ.</p>\r\n\r\n<p>Với c&aacute;c mẫu ch&uacute;ng t&ocirc;i đưa ra dưới đ&acirc;y, qu&yacute; kh&aacute;ch c&oacute; th&ecirc;m nhiều lựa chọn hơn cho gia đ&igrave;nh m&igrave;nh. C&aacute;c mẫu kệ ph&ugrave; hợp với cả nội thất ph&ograve;ng kh&aacute;ch v&agrave; nội thất ph&ograve;ng ngủ. Để c&oacute; một&nbsp;kệ tivi đẹp&nbsp;cho gia đ&igrave;nh c&aacute;c bạn cần lưu &yacute; một số yếu tố sau:</p>\r\n\r\n<ul>\r\n	<li>Thiết kế</li>\r\n	<li>Chất liệu</li>\r\n	<li>Gi&aacute; cả</li>\r\n	<li>Dịch vụ</li>\r\n</ul>\r\n\r\n<p>Nếu qu&yacute; kh&aacute;ch kh&ocirc;ng ưng &yacute; với những sản phẩm kệ tivi sẵn c&oacute;, qu&yacute; kh&aacute;ch sẽ cần đến một thiết kế ri&ecirc;ng ph&ugrave; hợp nhất với nhu cầu v&agrave; h&ograve;a hợp với kh&ocirc;ng gian đặt tivi. C&aacute;c nh&agrave; thiết kế sẽ đưa ra một mẫu kệ tivi ho&agrave;n hảo nhất cho bạn. V&agrave; nếu c&aacute;c bạn kh&ocirc;ng muốn phiền h&agrave; khi phải nhờ c&aacute;c nh&agrave; thiết kế th&igrave; c&oacute; thể li&ecirc;n hệ với ch&uacute;ng t&ocirc;i. Ch&uacute;ng t&ocirc;i sẽ tư vấn v&agrave; thiết kế những mẫu kệ ưng &yacute; nhất gửi tới qu&yacute; kh&aacute;ch.</p>\r\n\r\n<p>C&ograve;n c&aacute;c bạn đang quan t&acirc;m về chất lượng sản phẩm, c&aacute;c bạn sẽ y&ecirc;n t&acirc;m hơn với thời gian bảo h&agrave;nh 2 năm cho mọi sản phẩm kệ tivi của cơ sở sản xuất Đồ Gỗ T&agrave;i Ch&iacute;.</p>\r\n\r\n<p>Nếu bạn đang muốn lựa chọn một chiếc kệ tivi ph&ugrave; hợp nhất cho m&igrave;nh xin h&atilde;y li&ecirc;n hệ ngay với ch&uacute;ng t&ocirc;i để được tư vấn thiết kế v&agrave; được cung cấp những mẫu&nbsp;thiết kế kệ tivi&nbsp;đang được ưa chuộng nhất hiện nay.</p>\r\n\r\n<h2>Xem mẫu kệ tivi hiện đại ph&ugrave; hợp với chung cư v&agrave; nh&agrave; d&acirc;n sinh phong c&aacute;ch hiện đại.</h2>\r\n\r\n<p style="text-align:center"><img alt="tv shelf living room" src="http://dogonoithatcaocap.vn/wp-content/uploads/2014/08/tv-shelf-Living-Room.jpg" style="text-align:center" /><img alt="tivi shelf" src="http://dogonoithatcaocap.vn/wp-content/uploads/2014/08/TV-shelf-71.jpg" style="text-align:center" /><img alt="mẫu kệ tivi hiện đại" src="http://dogonoithatcaocap.vn/wp-content/uploads/2014/08/mau-ke-tivi-hien-dai.jpg" style="text-align:center" /><img alt="mẫu kệ tivi chung cư" src="http://dogonoithatcaocap.vn/wp-content/uploads/2014/08/mau-ke-tivi-chung-cu.jpg" style="text-align:center" /><img alt="mẫu kệ tivi" src="http://dogonoithatcaocap.vn/wp-content/uploads/2014/08/mau-ke-ti-vi.jpg" style="text-align:center" /><img alt="kệ tivi 2014" src="http://dogonoithatcaocap.vn/wp-content/uploads/2014/08/ke-tivi-2014.jpg" style="text-align:center" /><img alt="kệ tivi chung cư" src="http://dogonoithatcaocap.vn/wp-content/uploads/2014/08/ke-tivi-chung-cu.jpg" style="text-align:center" /><img alt="kệ tivi đẹp" src="http://dogonoithatcaocap.vn/wp-content/uploads/2014/08/ke-tivi-dep.jpg" style="text-align:center" /><img alt="kệ tivi hiện đại" src="http://dogonoithatcaocap.vn/wp-content/uploads/2014/08/ke-tivi-hien-dai.jpg" style="text-align:center" /><img alt="mẫu kệ đẹp" src="http://dogonoithatcaocap.vn/wp-content/uploads/2014/08/mau-ke-dep.jpg" style="text-align:center" /><img alt="kệ tivi" src="http://dogonoithatcaocap.vn/wp-content/uploads/2014/08/ke-tivi.jpg" style="text-align:center" /></p>\r\n', 'kệ tivi đẹp ,kệ tivi hiện đại, mau ke tivi, mẫu kệ tivi cho chung cư ,mẫu kệ tivi đẹp', '2015-12-11 09:45:44', 1, 1),
(7, 1, 'Mẫu Giường Ngủ Hiện Đại Đẹp', '../upload/mua-giuong-ngu-dep-7.jpg', '6000000', 1000, 'Gỗ nguyên chất', '12x10m', 'Thạch Thất - Hà Nội', '', '<p>Qu&yacute; kh&aacute;ch h&agrave;ng đang c&oacute; nhu cầu t&igrave;m những&nbsp;mẫu giường ngủ đẹp&nbsp;trong năm 2015 n&agrave;y c&oacute; thể tham khảo c&aacute;c&nbsp;mẫu giường ngủ&nbsp;dưới đ&acirc;y của ch&uacute;ng t&ocirc;i. Tất cả đều hướng về những thiết kế đơn giản, gọn nhẹ.</p>\r\n\r\n<p>C&aacute;c&nbsp;mẫu giường ngủ&nbsp;dưới đ&acirc;y đều được thiết kế linh hoạt, dễ th&aacute;o lắp, c&oacute; thể sử dụng được cho nhiều hoạt động kh&aacute;c nhau của gia chủ khi cần tới diện t&iacute;ch s&agrave;n nh&agrave;.</p>\r\n\r\n<p>Mỗi ảnh l&agrave; một mẫu kh&aacute;c nhau v&agrave; qu&yacute; kh&aacute;ch c&oacute; thể t&ugrave;y biến c&aacute;c mẫu đ&oacute; khi đặt thiết kế tại cơ sở của ch&uacute;ng t&ocirc;i sao cho ph&ugrave; hợp nhất với diện t&iacute;ch cũng như nội thất kh&aacute;c trong ng&ocirc;i nh&agrave;.</p>\r\n\r\n<p>Giường ngủ&nbsp;c&oacute; thể thiết kế từ nhiều chất liệu gỗ kh&aacute;c nhau như gỗ tự nhi&ecirc;n v&agrave; gỗ c&ocirc;ng nghiệp.</p>\r\n\r\n<p>c&aacute;c loại gỗ tự nhi&ecirc;n th&ocirc;ng dụng trong thiết kế giường ngủ như : &nbsp;gỗ sồi, gỗ lim, gỗ gụ, gỗ xoan, gỗ dổi ..</p>\r\n\r\n<p>Lưu &yacute;:</p>\r\n\r\n<p>&ndash; Qu&yacute; kh&aacute;ch c&oacute; thể đặt thiết kế bọc nỉ cho những chiếc giường ngủ th&acirc;n y&ecirc;u hoặc đục, chạm khắc gỗ.</p>\r\n\r\n<p>&ndash; Ch&uacute;ng t&ocirc;i miễn ph&iacute; vận chuyển trong b&aacute;n k&iacute;nh 30km kể từ xưởng sản xuất. (ưu &aacute;i cho 1 số địa chỉ trong nội th&agrave;nh).</p>\r\n\r\n<p>&ndash; Thời gian bảo h&agrave;nh l&agrave; 5 năm cho c&aacute;c mẫu giường gỗ tự nhi&ecirc;n, 2 năm cho c&aacute;c sản phẩm giường ngủ gỗ c&ocirc;ng nghiệp.&nbsp;</p>\r\n\r\n<p style="text-align:center;"><img alt="mẫu giường ngủ đẹp" src="http://dogonoithatcaocap.vn/wp-content/uploads/2014/08/mua-giuong-ngu-dep-9.jpg" /><img alt="mẫu giường ngủ hiện đại" src="http://dogonoithatcaocap.vn/wp-content/uploads/2014/08/mua-giuong-ngu-dep-8.jpg" /><img alt="mau giuong ngu" src="http://dogonoithatcaocap.vn/wp-content/uploads/2014/08/mua-giuong-ngu-dep-7.jpg" /><img alt="mua giuong" src="http://dogonoithatcaocap.vn/wp-content/uploads/2014/08/mua-giuong-ngu-dep-6.jpg" /></p>\r\n', 'mau giuong dep ,mẫu giường gỗ đẹp, mau giuong ngu dep ,mẫu giừơng đẹp ,các mẫu giường gỗ đẹp', '2015-12-11 10:05:50', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ctdonhang`
--
ALTER TABLE `ctdonhang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gopy`
--
ALTER TABLE `gopy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tenDN` (`tenDN`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ctdonhang`
--
ALTER TABLE `ctdonhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `cthoadon`
--
ALTER TABLE `cthoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `gopy`
--
ALTER TABLE `gopy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
