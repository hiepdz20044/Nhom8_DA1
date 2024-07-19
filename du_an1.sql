-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2023 at 03:32 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `du_an1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `vai_tro` int(11) NOT NULL DEFAULT 1,
  `sđt` char(11) NOT NULL,
  `mat_khau` char(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bao_hanh`
--

CREATE TABLE `bao_hanh` (
  `id_baohanh` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `id_trungtam` int(11) NOT NULL,
  `ho_ten` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(10) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `ngaybinhluan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(0, 'CHỊU RỒI dqqưd', 0, 41, '06:23:46am 01/12/2023'),
(9, 'sản phẩm rất đẹp rất hài lòng lần sau tôi sẽ mua nữa', 0, 48, '07:15:33pm 30/11/2023'),
(11, 'người chơi mới cấp tối đa', 0, 47, '06:23:18am 01/12/2023');

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_dm` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id_dm`, `name`) VALUES
(1, 'sản phẩm mới\r\n'),
(2, 'Đồng hồ hot'),
(3, 'Đồng hồ nữ'),
(4, 'Đồng hồ đôi\r\n'),
(5, 'Đồng hồ treo tường'),
(6, 'Dây đồng hồ\r\n'),
(7, 'Đồng hồ nam'),
(8, 'Thương hiệu'),
(9, 'Bảo hành');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `id_donhang` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `id_giohang` int(11) DEFAULT NULL,
  `ho_ten` varchar(200) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `email_address` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`id_donhang`, `id_khachhang`, `id_giohang`, `ho_ten`, `phone_number`, `email_address`, `address`) VALUES
(3, 2, NULL, 'Nguyễn Công Hiệp', 888425100, 'hiepooo95@gmail.com', 'Hà Nội'),
(4, 5, NULL, 'nguyenhuuduc', 965706764, 'nguyenducnt2372004@gmail.com', 'nam định'),
(5, 5, NULL, 'nguyenhuuduc', 965706764, 'nguyenducnt2372004@gmail.com', 'nam định'),
(6, 5, NULL, 'nguyenhuuduc', 965706764, 'nguyenducnt2372004@gmail.com', 'nam định'),
(7, 5, NULL, 'nguyenhuuduc', 965706764, 'nguyenducnt2372004@gmail.com', 'nam định'),
(8, 5, NULL, 'nguyenhuuduc', 965706764, 'nguyenducnt2372004@gmail.com', 'nam định'),
(9, 6, NULL, 'Công Hiệp', 965706764, 'nguyenducnt2372004@gmail.com', 'Hà nội'),
(10, 6, NULL, 'Công Hiệp', 965706764, 'nguyenducnt2372004@gmail.com', 'Hà nội'),
(11, 6, NULL, 'Công Hiệp', 965706764, 'nguyenducnt2372004@gmail.com', 'Hà nội'),
(12, 6, NULL, 'Công Hiệp', 965706764, 'nguyenducnt2372004@gmail.com', 'Hà nội'),
(13, 6, NULL, 'Công Hiệp', 965706764, 'nguyenducnt2372004@gmail.com', 'Hà nội'),
(15, 2, NULL, 'Nguyễn Công Hiệp', 888425100, 'hiepooo95@gmail.com', 'Hà Nội'),
(16, 5, NULL, 'nguyenhuuduc', 965706764, 'nguyenducnt2372004@gmail.com', 'nam định'),
(17, 5, NULL, 'nguyenhuuduc', 965706565, 'nguyenducnt2372004@gmail.com', 'nam định');

-- --------------------------------------------------------

--
-- Table structure for table `donhang_chitiet`
--

CREATE TABLE `donhang_chitiet` (
  `id_donhangct` int(11) NOT NULL,
  `id_donhang` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `tong_don` int(11) NOT NULL,
  `ngaydathang` varchar(50) NOT NULL,
  `trangthaidonhang` tinyint(1) DEFAULT 0 COMMENT '0. Đơn hàng mới\r\n1. Đang xử lí\r\n2. Đang giao hàng\r\n3. Đã giao hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donhang_chitiet`
--

INSERT INTO `donhang_chitiet` (`id_donhangct`, `id_donhang`, `id_sanpham`, `so_luong`, `tong_don`, `ngaydathang`, `trangthaidonhang`) VALUES
(14, 9, 6, 4, 88, '', 0),
(16, 11, 41, 2, 2000, '', 0),
(18, 12, 48, 1, 98, '', 0),
(19, 13, 47, 2, 224, '', 0),
(20, 13, 46, 1, 100, '', 0),
(21, 13, 51, 1, 12, '', 0),
(23, 15, 51, 1, 12, '', 0),
(24, 16, 33, 1, 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `id_giohang` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `id_khachhang` int(11) NOT NULL,
  `vai_tro` tinyint(1) NOT NULL DEFAULT 0,
  `ho_ten` varchar(255) NOT NULL,
  `sdt` char(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `dia_chi` varchar(200) DEFAULT NULL,
  `mat_khau` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`id_khachhang`, `vai_tro`, `ho_ten`, `sdt`, `email`, `dia_chi`, `mat_khau`) VALUES
(2, 0, 'Nguyễn Công Hiệp', '0888425100', 'hiepooo95@gmail.com', 'Hà Nam', '1234'),
(5, 1, 'nguyenhuuduc', '123456789', 'nguyenducnt2372004@gmail.com', 'nam định', '1234'),
(6, 0, 'Công Hiệp', '0965706764', 'nguyenducnt2372004@gmail.com', 'Hà nội', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `id_dm` int(11) NOT NULL,
  `img` varchar(200) NOT NULL,
  `id_size` int(11) DEFAULT NULL,
  `ten_sp` varchar(200) NOT NULL,
  `mo_ta` varchar(200) NOT NULL,
  `gia` double NOT NULL,
  `loai_may` varchar(200) NOT NULL,
  `id_thuonghieu` int(11) NOT NULL,
  `luotxem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id_sanpham`, `id_dm`, `img`, `id_size`, `ten_sp`, `mo_ta`, `gia`, `loai_may`, `id_thuonghieu`, `luotxem`) VALUES
(1, 7, 'Tissit T-Classic T127.407.11.091.01.webp', 3, 'ĐỒNG HỒ LONGINES MASTER COLLECTION L2.793.5.57.7', 'Đồng hồ nam LONGINES MASTER COLLECTION ', 21, 'Automatic', 1, 0),
(6, 7, 'Đồng hồ nam Tissot Le Locle T006.11.033.02.webp', 1, 'Đồng hồ nam Tissot Le LocleT006.407.11.033.02', 'Đồng hồ nam Tissot Le Locle chính hãng', 21.897, 'Automatic', 2, 0),
(7, 7, 'Đồng hồ nam Tissot Le Locle.webp', 1, 'Đồng hồ nam Tissot Le Locle T006.407.22.036.00', 'Đồng hồ nam Tissot Le Locle chính hãng', 22.995, 'Automatic', 2, 0),
(9, 1, 'Đồng hồ nam Hamilton Jazzmaster H42505510.webp', 2, 'Đồng hồ nam Hamilton Jazzmaster H42505510', 'Đồng hồ nam Hamilton Jazzmaster chính hãng', 27.863, 'Automatic', 4, 32),
(14, 1, 'Mido Multifort M049.526.11.091.00.webp', 1, 'Đồng hồ nam Mido Multifort M049.526.11.091.00', 'Đồng hồ nam Mido Multifort chính hãng', 27.567, 'Automatic', 3, 0),
(15, 1, 'Đồng hồ nam Longines Master L2.893.4.77.6.webp', 1, 'Đồng hồ nam Longines Master L2.893.4.77.6', 'Đồng hồ nam Longines Master chính hãng', 64.687, 'Automatic', 1, 0),
(16, 1, 'Đồng hồ nam Citizent Automatic NH8393-05A.webp', 2, 'Đồng hồ nam Citizen Automatic NH8393-05A', 'Đồng hồ nam Citizen Automatic chính hãng', 6.701, 'Automatic', 9, 3),
(17, 2, 'Longines Hydroconquest L3.781.4.96.6.webp', 1, 'ĐỒNG HỒ LONGINES HYDROCONQUEST L3.781.4.96.6', 'ĐỒNG HỒ LONGINES HYDROCONQUEST chính hãng', 42.693, 'Automatic', 1, 0),
(18, 2, 'Tissit T-Classic T127.407.11.091.01.webp', 2, 'Đồng hồ nam Tissot T-Classic T127.407.11.091.01', 'Đồng hồ nam Tissot T-Classic chính hãng', 22.68, 'Automatic', 2, 0),
(19, 2, 'Seiko Presage SSA405J1.webp', 1, 'Đồng hồ nam Seiko Presage SSA405J1', 'Đồng hồ nam Seiko Presage chính hãng', 12.375, 'Automatic', 8, 9),
(20, 2, 'T137.407.33.021.00.webp', 2, 'Đồng hồ nam Tissot PRX T137.407.33.021.00', 'Đồng hồ nam Tissot PRX chính hãng', 21.906, 'Automatic', 2, 0),
(21, 2, 'T137.407.11.351.00.webp', 2, 'Đồng hồ nam Tissot PRX T137.407.11.351.00', 'Đồng hồ nam Tissot PRX chính hãng', 18.9, 'Automatic ', 2, 34),
(24, 7, 'L3.830.4.02.6.webp', 1, 'Đồng hồ nam Longines Conquest L3.830.4.02.6', 'Đồng hồ nam Longines Conquest chính hãng', 47.868, 'Automatic', 1, 0),
(25, 7, 'L3.835.4.52.6.webp', 2, 'Đồng hồ nam Longines Conquest L3.835.4.52.6', 'Đồng hồ nam Longines Conquest chính hãng', 90.562, 'AUTOMATIC CHRONOG', 1, 0),
(26, 7, 'T141.417.37.057.01.webp', 3, 'Đồng hồ nam Tissot Special Collections T141.417.37.057.01\r\n\r\n', 'Đồng hồ nam Tissot Special Collections chính hãng', 19.456, 'QUARTZ CHRONOG', 2, 0),
(28, 7, 'L2.628.8.77.3.webp', 3, 'Đồng hồ nam Longines Master L2.628.8.77.3', 'Đồng hồ nam Longines Master chính hãng', 182.418, 'Automatic', 1, 0),
(30, 3, 'FC-303V2NH3B.webp', 1, 'ĐỒNG HỒ NỮ FREDERIQUE CONSTANT FC-303V2NH3B', 'ĐỒNG HỒ NỮ FREDERIQUE CONSTANT FC-303V2NH3B chính hãng', 51.705, 'Automatic', 17, 0),
(33, 3, 'OP990-45DDLS-GL-T.webp', 2, 'ĐỒNG HỒ NỮ OLYM PIANUS OP990-45DDLS-GL-T', 'ĐỒNG HỒ NỮ OLYM PIANUS OP990-45DDLS-GL-T chính hãng', 0, 'Quartz', 12, 0),
(34, 3, 'OP990-45DDLS-GL-X.webp', 2, 'ĐỒNG HỒ NỮ OLYM PIANUS OP990-45DDLS-GL-X', 'ĐỒNG HỒ NỮ OLYM PIANUS OP990-45DDLS-GL-X chính hãng', 5.904, 'Quartz', 12, 0),
(37, 3, 'H32215130.webp', 1, 'ĐỒNG HỒ NỮ HAMILTON JAZZMASTER OPEN HEART LADY H32215130', 'ĐỒNG HỒ NỮ HAMILTON JAZZMASTER OPEN HEART LADY H32215130 chính hãng', 21.505, 'Automatic', 4, 0),
(38, 3, 'DW00100516.webp', 1, 'DANIEL WELLINGTON PETITE MELROSE PEARL DW00100516', 'DANIEL WELLINGTON PETITE MELROSE PEARL DW00100516 chính hãng', 9.5, 'Quartz (Máy pin - điện tử)', 1, 0),
(39, 4, 'M037.407.36.031.01 VÀ M037.207.36.031.01.webp', 1, 'MIDO BARONCELLI II GENT SIGNATURE M037.407.36.031.01 VÀ M037.207.36.031.01', 'MIDO BARONCELLI II GENT SIGNATURE M037.407.36.031.01 VÀ M037.207.36.031.01 chính hãng', 4.9, 'Automatic (Máy cơ tự động)', 3, 0),
(40, 4, 'T122.407.22.031.01 VÀ T122.207.22.031.01.webp', 2, 'TISSOT CARSON T122.407.22.031.01 VÀ T122.207.22.031.01', 'TISSOT CARSON T122.407.22.031.01 VÀ T122.207.22.031.01 chính hãng', 599.9, 'Automatic (Máy cơ tự động)', 2, 0),
(41, 4, 'T122.407.33.031.00 VÀ T122.207.33.031.00.webp', 3, 'TISSOT CARSON T122.407.33.031.00 VÀ T122.207.33.031.00', 'TISSOT CARSON T122.407.33.031.00 VÀ T122.207.33.031.00 chính hãng', 999.9, 'Automatic (Máy cơ tự động)', 2, 0),
(42, 4, 'T122.407.36.033.00 VÀ T122.207.36.033.00.webp', 1, 'TISSOT CARSON T122.407.36.033.00 VÀ T122.207.36.033.00\r\n', 'TISSOT CARSON T122.407.36.033.00 VÀ T122.207.36.033.00 chính hãng', 0, 'Automatic (Máy cơ tự động)', 2, 0),
(43, 4, 'T143.410.11.041.00 VÀ T143.210.11.041.00.webp', 1, 'ĐỒNG HỒ ĐÔI TISSOT EVERYTIME T143.410.11.041.00 VÀ T143.210.11.041.00', 'ĐỒNG HỒ ĐÔI TISSOT EVERYTIME T143.410.11.041.00 VÀ T143.210.11.041.00 chính hãng', 873.8, 'Quartz (Máy pin - điện tử)', 2, 0),
(44, 5, 'TREO TƯỜNG SEIKO QXA815WL.webp', 2, 'ĐỒNG HỒ TREO TƯỜNG SEIKO QXA815WL', 'ĐỒNG HỒ TREO TƯỜNG SEIKO QXA815WL dánh cho gđ bạn', 23.8, 'Quartz (Máy pin - điện tử)', 8, 0),
(45, 5, 'TREO TƯỜNG SEIKO QXA815KL.webp', 2, 'ĐỒNG HỒ TREO TƯỜNG SEIKO QXA815KL', 'ĐỒNG HỒ TREO TƯỜNG SEIKO QXA815KL dành cho đg', 321.9, 'Quartz (Máy pin - điện tử)', 8, 0),
(46, 5, 'TREO TƯỜNG SEIKO QXA814SR.webp', 2, 'ĐỒNG HỒ TREO TƯỜNG SEIKO QXA814SR', 'ĐỒNG HỒ TREO TƯỜNG SEIKO QXA814SR dành cho gđ bạn', 99.6, 'Quartz (Máy pin - điện tử)', 8, 0),
(47, 5, 'TREO TƯỜNG SEIKO QXA814GR.webp', 2, 'ĐỒNG HỒ TREO TƯỜNG SEIKO QXA814GR', 'ĐỒNG HỒ TREO TƯỜNG SEIKO QXA814GR dành cho gđ bạn', 112.1, 'Quartz (Máy pin - điện tử)', 8, 0),
(48, 5, 'TREO TƯỜNG SEIKO QXA814AR.webp', 2, 'ĐỒNG HỒ TREO TƯỜNG SEIKO QXA814AR', 'ĐỒNG HỒ TREO TƯỜNG SEIKO QXA814AR dành cho gđ bạn', 98, 'Quartz (Máy pin - điện tử)', 8, 0),
(51, 6, 'DÂY SILICONE ZRC-ROCHET BIRDY 20-18 XANH (GREEN) 8392045ST.webp', 2, 'DÂY SILICONE ZRC-ROCHET BIRDY 20-18 XANH (GREEN) 8392045ST\r\n', 'DÂY SILICONE ZRC-ROCHET BIRDY 20-18 XANH (GREEN) 8392045ST\r\n', 12, 'Dây', 5, 0),
(52, 6, 'DÂY ĐỒNG HỒ DANIEL WELLINGTON PETITE SHEFFIELD DW00200280.webp', 2, 'DÂY ĐỒNG HỒ DANIEL WELLINGTON PETITE SHEFFIELD DW00200280', 'DÂY ĐỒNG HỒ DANIEL WELLINGTON PETITE SHEFFIELD DW00200280', 499.99, 'Dây', 15, 0);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id_slide` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_size`
--

CREATE TABLE `sub_size` (
  `id_size` int(11) NOT NULL,
  `size` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_size`
--

INSERT INTO `sub_size` (`id_size`, `size`) VALUES
(1, '29'),
(2, '30'),
(3, '31');

-- --------------------------------------------------------

--
-- Table structure for table `thuonghieu`
--

CREATE TABLE `thuonghieu` (
  `id_thuonghieu` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img_logo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `thuonghieu`
--

INSERT INTO `thuonghieu` (`id_thuonghieu`, `name`, `img_logo`) VALUES
(1, 'Longines', 'longines.webp'),
(2, 'Tissot', 'tissot.webp'),
(3, 'Mido', 'mido.webp'),
(4, 'Hamilton', 'hamilton.webp'),
(5, 'Certina', 'certina.webp'),
(6, 'Titoni', 'titoni.webp'),
(7, 'Edox', 'edox.webp'),
(8, 'Seiko', 'seiko.webp'),
(9, 'Citizen', 'citizen.webp'),
(10, 'Orient', 'orient.webp'),
(11, 'Casio', 'casio.webp'),
(12, 'Olim Pianus', 'Olim Pianus.webp'),
(13, 'Calvin Klein', 'Calvin Klein.webp'),
(14, 'Fossil', 'fossil.webp'),
(15, 'Michael Kors', 'michael kors.webp'),
(16, 'Candino', 'candino.webp'),
(17, 'FREDERIQUE CONSTANT', 'frederique constant.webp');

-- --------------------------------------------------------

--
-- Table structure for table `trungtam_baohanh`
--

CREATE TABLE `trungtam_baohanh` (
  `id_trungtam` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trungtam_baohanh`
--

INSERT INTO `trungtam_baohanh` (`id_trungtam`, `name`) VALUES
(1, 'Cơ sở Hà Nội'),
(2, 'Cơ sở Hồ Chí Minh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `bao_hanh`
--
ALTER TABLE `bao_hanh`
  ADD PRIMARY KEY (`id_baohanh`),
  ADD KEY `id_trungtam` (`id_trungtam`),
  ADD KEY `id_sanpham` (`id_sanpham`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_dm`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id_donhang`),
  ADD KEY `id_khachhang` (`id_khachhang`);

--
-- Indexes for table `donhang_chitiet`
--
ALTER TABLE `donhang_chitiet`
  ADD PRIMARY KEY (`id_donhangct`),
  ADD KEY `ten_khoa_ngoai1` (`id_donhang`),
  ADD KEY `ten_khoa_ngoai2` (`id_sanpham`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id_giohang`),
  ADD KEY `id_sanpham` (`id_sanpham`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`id_khachhang`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sanpham`),
  ADD KEY `id_dm` (`id_dm`),
  ADD KEY `id_img` (`img`),
  ADD KEY `id_size` (`id_size`),
  ADD KEY `id_thuonghieu` (`id_thuonghieu`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slide`);

--
-- Indexes for table `sub_size`
--
ALTER TABLE `sub_size`
  ADD PRIMARY KEY (`id_size`);

--
-- Indexes for table `thuonghieu`
--
ALTER TABLE `thuonghieu`
  ADD PRIMARY KEY (`id_thuonghieu`);

--
-- Indexes for table `trungtam_baohanh`
--
ALTER TABLE `trungtam_baohanh`
  ADD PRIMARY KEY (`id_trungtam`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bao_hanh`
--
ALTER TABLE `bao_hanh`
  MODIFY `id_baohanh` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_dm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id_donhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `donhang_chitiet`
--
ALTER TABLE `donhang_chitiet`
  MODIFY `id_donhangct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id_giohang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `id_khachhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slide` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_size`
--
ALTER TABLE `sub_size`
  MODIFY `id_size` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `thuonghieu`
--
ALTER TABLE `thuonghieu`
  MODIFY `id_thuonghieu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `trungtam_baohanh`
--
ALTER TABLE `trungtam_baohanh`
  MODIFY `id_trungtam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bao_hanh`
--
ALTER TABLE `bao_hanh`
  ADD CONSTRAINT `bao_hanh_ibfk_1` FOREIGN KEY (`id_trungtam`) REFERENCES `trungtam_baohanh` (`id_trungtam`),
  ADD CONSTRAINT `bao_hanh_ibfk_2` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id_sanpham`);

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`id_khachhang`) REFERENCES `khach_hang` (`id_khachhang`);

--
-- Constraints for table `donhang_chitiet`
--
ALTER TABLE `donhang_chitiet`
  ADD CONSTRAINT `ten_khoa_ngoai1` FOREIGN KEY (`id_donhang`) REFERENCES `donhang` (`id_donhang`),
  ADD CONSTRAINT `ten_khoa_ngoai2` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id_sanpham`);

--
-- Constraints for table `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id_sanpham`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_dm`) REFERENCES `danhmuc` (`id_dm`),
  ADD CONSTRAINT `sanpham_ibfk_3` FOREIGN KEY (`id_size`) REFERENCES `sub_size` (`id_size`),
  ADD CONSTRAINT `sanpham_ibfk_4` FOREIGN KEY (`id_thuonghieu`) REFERENCES `thuonghieu` (`id_thuonghieu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
