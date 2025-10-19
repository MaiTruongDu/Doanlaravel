-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 13, 2025 lúc 04:40 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `lamp-store`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `MaKH` int(10) NOT NULL,
  `TenKH` varchar(50) NOT NULL,
  `NoiDung` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`MaKH`, `TenKH`, `NoiDung`) VALUES
(1, 'Nguyễn Văn A', ''),
(2, 'Trần Văn B', ''),
(3, 'Trần Văn C', ''),
(4, 'Lê Văn D', ''),
(5, 'Trần Quang G', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `IDSP` int(10) NOT NULL,
  `IDDH` int(10) NOT NULL,
  `DonGia` decimal(10,0) NOT NULL,
  `SoLuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`IDSP`, `IDDH`, `DonGia`, `SoLuong`) VALUES
(101, 201, 2000000, 1),
(102, 202, 3000000, 2),
(103, 203, 4000000, 3),
(104, 204, 5000000, 4),
(105, 205, 6000000, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `Name` varchar(50) NOT NULL,
  `Email` longtext NOT NULL,
  `SDT` int(11) NOT NULL,
  `Content` varchar(100) NOT NULL,
  `TrangThai` varchar(20) NOT NULL,
  `UserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`Name`, `Email`, `SDT`, `Content`, `TrangThai`, `UserID`) VALUES
('Nguyễn Văn A', 'tt@caothang.edu.vn', 123456789, '', '', 123),
('Trần Văn B', 'bb@caothang.edu.vn', 123456788, '', '', 234);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `ID` int(10) NOT NULL,
  `TenDM` varchar(50) NOT NULL,
  `TrangThai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`ID`, `TenDM`, `TrangThai`) VALUES
(201, 'Đèn trang trí', 'Hoạt động'),
(202, 'Đèn học sinh', 'Hoạt động'),
(203, 'Đèn phòng ngủ', 'Hoạt động');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `IDDonHang` int(10) NOT NULL,
  `UserID` int(10) NOT NULL,
  `TGMua` datetime NOT NULL,
  `UserID_Sale` int(10) NOT NULL,
  `TrangThai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`IDDonHang`, `UserID`, `TGMua`, `UserID_Sale`, `TrangThai`) VALUES
(1001, 123, '2025-10-12 00:00:00', 1, 'Đang Giao'),
(1002, 234, '2025-06-02 00:00:00', 2, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` int(10) NOT NULL,
  `TenSP` varchar(50) NOT NULL,
  `Gia` decimal(10,0) NOT NULL,
  `GiaKhuyenMai` decimal(10,0) NOT NULL,
  `Hinh` longtext NOT NULL,
  `MoTa` varchar(50) NOT NULL,
  `MaDM` int(10) NOT NULL,
  `Tags` varchar(20) NOT NULL,
  `TrangThai` varchar(30) NOT NULL,
  `UserID` int(10) NOT NULL,
  `Loai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `TenSP`, `Gia`, `GiaKhuyenMai`, `Hinh`, `MoTa`, `MaDM`, `Tags`, `TrangThai`, `UserID`, `Loai`) VALUES
(1, 'Đèn Nội Thất 1', 2000000, 1800000, '', 'Dùng để trang trí ', 10, '', 'Còn hàng', 123, 'Vật dụng gia đình'),
(2, 'Đèn Nội Thất 2', 3000000, 1900000, '', 'Dùng để trang trí ', 20, '', 'Còn hàng', 234, 'Vật dụng gia đình'),
(3, 'Đèn Nội Thất 3', 4000000, 1700000, '', 'Dùng để trang trí ', 30, '', 'Hết hàng', 345, 'Vật dụng gia đình'),
(4, 'Đèn Nội Thất 4', 5000000, 1500000, '', 'Dùng để trang trí ', 40, '', 'Còn hàng', 456, 'Vật dụng gia đình'),
(5, 'Đèn Nội Thất 5', 6000000, 1600000, '', 'Dùng để trang trí ', 50, '', 'Hết hàng', 567, 'Vật dụng gia đình'),
(6, 'Đèn Nội Thất 6', 1800000, 1700000, '', 'Dùng để trang trí', 60, '', 'Còn hàng', 678, 'Vật dụng gia đình'),
(7, 'Đèn Nội Thất 7', 1900000, 1800000, '', 'Dùng để trang trí', 70, '', 'Còn hàng', 789, 'Vật dụng gia đình'),
(8, 'Đèn Nội Thất 8', 1800000, 1700000, '', 'Dùng để trang trí', 80, '', 'Còn hàng', 798, 'Vật dụng gia đình'),
(9, 'Đèn Nội Thất 9', 1700000, 1600000, '', 'Dùng để trang trí', 90, '', 'Còn hàng', 238, 'Vật dụng gia đình'),
(10, 'Đèn Nội Thất 10', 1800000, 1700000, '', 'Dùng để trang trí', 100, '', 'Hết hàng', 355, 'Vật dụng gia đình'),
(11, 'Đèn Nội Thất 11', 1800000, 1700000, '', 'Dùng để trang trí', 110, '', 'Hết hàng', 355, 'Vật dụng gia đình'),
(12, 'Đèn Nội Thất 12', 1900000, 1600000, '', 'Dùng để trang trí', 120, '', 'Còn hàng', 335, 'Vật dụng gia đình'),
(13, 'Đèn Nội Thất 13', 2800000, 2700000, '', 'Dùng để trang trí', 130, '', 'Còn hàng', 325, 'Vật dụng gia đình'),
(14, 'Đèn Nội Thất 14', 1600000, 1500000, '', 'Dùng để trang trí', 140, '', 'Còn hàng', 357, 'Vật dụng gia đình'),
(15, 'Đèn Nội Thất 15', 2800000, 2300000, '', 'Dùng để trang trí', 150, '', 'Còn hàng', 395, 'Vật dụng gia đình'),
(16, 'Đèn Nội Thất 16', 1900000, 1800000, '', 'Dùng để trang trí', 160, '', 'Còn hàng', 365, 'Vật dụng gia đình'),
(17, 'Đèn Nội Thất 17', 3000000, 2700000, '', 'Dùng để trang trí', 170, '', 'Còn hàng', 389, 'Vật dụng gia đình'),
(18, 'Đèn Nội Thất 18', 1800000, 1570000, '', 'Dùng để trang trí', 180, '', 'Còn hàng', 265, 'Vật dụng gia đình'),
(19, 'Đèn Nội Thất 19', 1600000, 1500000, '', 'Dùng để trang trí', 190, '', 'Hết hàng', 986, 'Vật dụng gia đình'),
(20, 'Đèn Nội Thất 20', 1900000, 1700000, '', 'Dùng để trang trí', 200, '', 'Hết hàng', 952, 'Vật dụng gia đình'),
(21, 'Đèn Nội Thất 21', 1900000, 1700000, '', 'Dùng để trang trí', 210, '', 'Còn hàng', 934, 'Vật dụng gia đình'),
(22, 'Đèn Nội Thất 22', 1100000, 1000000, '', 'Dùng để trang trí', 220, '', 'Còn hàng', 231, 'Vật dụng gia đình'),
(23, 'Đèn Nội Thất 23', 2900000, 2700000, '', 'Dùng để trang trí', 230, '', 'Còn hàng', 786, 'Vật dụng gia đình'),
(24, 'Đèn Nội Thất 24', 1950000, 1800000, '', 'Dùng để trang trí', 240, '', 'Còn hàng', 432, 'Vật dụng gia đình'),
(25, 'Đèn Nội Thất 25', 1850000, 1600000, '', 'Dùng để trang trí', 250, '', 'Còn hàng', 899, 'Vật dụng gia đình'),
(26, 'Đèn Nội Thất 26', 2900000, 2750000, '', 'Dùng để trang trí', 260, '', 'Còn hàng', 952, 'Vật dụng gia đình'),
(27, 'Đèn Nội Thất 27', 1960000, 1800000, '', 'Dùng để trang trí', 270, '', 'Còn hàng', 666, 'Vật dụng gia đình'),
(28, 'Đèn Nội Thất 28', 2900000, 2850000, '', 'Dùng để trang trí', 280, '', 'Còn hàng', 777, 'Vật dụng gia đình'),
(29, 'Đèn Nội Thất 29', 1900000, 1800000, '', 'Dùng để trang trí', 290, '', 'Còn hàng', 888, 'Vật dụng gia đình'),
(30, 'Đèn Nội Thất 30', 1700000, 1600000, '', 'Dùng để trang trí', 300, '', 'Hết hàng', 925, 'Vật dụng gia đình'),
(31, 'Đèn Nội Thất 31', 2200000, 2100000, '', 'Dùng để trang trí', 310, '', 'Còn hàng', 956, 'Vật dụng gia đình'),
(32, 'Đèn Nội Thất 32', 2300000, 2200000, '', 'Dùng để trang trí', 320, '', 'Còn hàng', 932, 'Vật dụng gia đình'),
(33, 'Đèn Nội Thất 33', 2400000, 2300000, '', 'Dùng để trang trí', 330, '', 'Còn hàng', 912, 'Vật dụng gia đình'),
(34, 'Đèn Nội Thất 34', 2500000, 2400000, '', 'Dùng để trang trí', 340, '', 'Còn hàng', 916, 'Vật dụng gia đình'),
(35, 'Đèn Nội Thất 35', 2600000, 2500000, '', 'Dùng để trang trí', 350, '', 'Còn hàng', 899, 'Vật dụng gia đình'),
(36, 'Đèn Nội Thất 36', 2700000, 2600000, '', 'Dùng để trang trí', 360, '', 'Còn hàng', 353, 'Vật dụng gia đình'),
(37, 'Đèn Nội Thất 37', 2800000, 2700000, '', 'Dùng để trang trí', 370, '', 'Còn hàng', 112, 'Vật dụng gia đình'),
(38, 'Đèn Nội Thất 38', 2900000, 2800000, '', 'Dùng để trang trí', 380, '', 'Còn hàng', 113, 'Vật dụng gia đình'),
(39, 'Đèn Nội Thất 39', 3000000, 2900000, '', 'Dùng để trang trí', 390, '', 'Còn hàng', 117, 'Vật dụng gia đình'),
(40, 'Đèn Nội Thất 40', 3100000, 3000000, '', 'Dùng để trang trí', 400, '', 'Còn hàng', 911, 'Vật dụng gia đình'),
(41, 'Đèn Nội Thất 41', 4100000, 3000000, '', 'Dùng để trang trí', 410, '', 'Còn hàng', 922, 'Vật dụng gia đình'),
(42, 'Đèn Nội Thất 42', 4200000, 3800000, '', 'Dùng để trang trí', 420, '', 'Hết hàng', 922, 'Vật dụng gia đình'),
(43, 'Đèn Nội Thất 43', 4300000, 4200000, '', 'Dùng để trang trí', 430, '', 'Hết hàng', 933, 'Vật dụng gia đình'),
(44, 'Đèn Nội Thất 44', 4400000, 4300000, '', 'Dùng để trang trí', 440, '', 'Hết hàng', 944, 'Vật dụng gia đình'),
(45, 'Đèn Nội Thất 45', 4500000, 4400000, '', 'Dùng để trang trí', 450, '', 'Hết hàng', 955, 'Vật dụng gia đình'),
(46, 'Đèn Nội Thất 46', 4600000, 4500000, '', 'Dùng để trang trí', 460, '', 'Hết hàng', 966, 'Vật dụng gia đình'),
(47, 'Đèn Nội Thất 47', 4700000, 4600000, '', 'Dùng để trang trí', 470, '', 'Còn hàng', 977, 'Vật dụng gia đình'),
(48, 'Đèn Nội Thất 48', 4800000, 4700000, '', 'Dùng để trang trí', 480, '', 'Còn hàng', 988, 'Vật dụng gia đình'),
(49, 'Đèn Nội Thất 49', 4900000, 4800000, '', 'Dùng để trang trí', 490, '', 'Còn hàng', 999, 'Vật dụng gia đình'),
(50, 'Đèn Nội Thất 50', 5000000, 4900000, '', 'Dùng để trang trí', 500, '', 'Còn hàng', 919, 'Vật dụng gia đình');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `UserName` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `SDT` int(11) NOT NULL,
  `Email` longtext NOT NULL,
  `Pass` varchar(20) NOT NULL,
  `Role` int(11) NOT NULL,
  `TrangThai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`UserName`, `Name`, `SDT`, `Email`, `Pass`, `Role`, `TrangThai`) VALUES
('Lê Thị Hạnh', 'Hạnh', 123456785, 'ee@gmail.com', '123456a@', 0, 'Đang hoạt động'),
('Nguyễn Thị Bình', 'Bình', 123456789, 'aa@gmail.com', '123456a@', 0, 'Đang hoạt động'),
('Nguyễn Thị Trinh', 'Trinh', 123456786, 'dd@gmail.com', '123456a@', 0, 'Không hoạt động'),
('Nguyễn Trần Bảo', 'Bảo', 123456787, 'cc@gmail.com', '123456a@', 0, 'Đang hoạt động'),
('Trần Văn Biển', 'Biển', 123456788, 'bb@gmail.com', '123456a@', 0, 'Không hoạt động');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `websitesetting`
--

CREATE TABLE `websitesetting` (
  `LogoWeb` longtext NOT NULL,
  `TenWeb` varchar(30) NOT NULL,
  `MoTa` varchar(100) NOT NULL,
  `FB` varchar(20) NOT NULL,
  `YT` varchar(20) NOT NULL,
  `Linkedin` varchar(50) NOT NULL,
  `DiaChi` varchar(50) NOT NULL,
  `TrangThai` varchar(50) NOT NULL,
  `UserID_Create` int(10) NOT NULL,
  `UserID_Update` int(10) NOT NULL,
  `Map` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `websitesetting`
--

INSERT INTO `websitesetting` (`LogoWeb`, `TenWeb`, `MoTa`, `FB`, `YT`, `Linkedin`, `DiaChi`, `TrangThai`, `UserID_Create`, `UserID_Update`, `Map`) VALUES
('', 'Banhanggiadung', 'Chuyên cung cấp các loại đèn', 'Đồ Gia Dụng', 'Đồ Gia Dụng', '', '123 Cầu Giấy Hà Nội', 'Đang mở cửa', 111, 101, '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`MaKH`);

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`IDSP`,`IDDH`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Name`,`UserID`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`IDDonHang`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserName`,`Name`);

--
-- Chỉ mục cho bảng `websitesetting`
--
ALTER TABLE `websitesetting`
  ADD PRIMARY KEY (`TenWeb`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
