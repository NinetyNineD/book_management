-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 26, 2020 lúc 03:15 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `admin`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(16) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `PhoneNumber` varchar(20) NOT NULL,
  `Gender` varchar(4) NOT NULL,
  `Address` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`Id`, `UserName`, `Password`, `Name`, `Email`, `PhoneNumber`, `Gender`, `Address`) VALUES
(1, 'tatrung99', 'tat200299', 'Tran Anh Trung', 'trungpro99@gmail.com', '0989999999', 'Nam', 'Ha Noi'),
(2, 'ndduc99', 'ndd140399', 'Nguyen Dinh Duc', 'ducpro99@gmail.com', '0989999998', 'Nam', 'Hai Phong'),
(3, 'ntdungc99', 'ntd040399', 'Nguyen Tan Dung', 'dungpro99@gmail.com', '0989999997', 'BeDe', 'Nghe An'),
(4, 'lvanh97', 'lva231197', 'Luu Viet Anh', 'anhpro97@gmail.com', '0989999996', 'Nam', 'Ha Noi'),
(5, 'ntduc99', 'ntd300599', 'Nguyen Trung Duc', 'tducpro99@gmail.com', '0989999995', 'Nam', 'Thanh Hoa'),
(6, 'bvduy99', 'bvd180499', 'Bui Van Duy', 'duypro99@gmail.com', '0989999994', 'Nam', 'Hai Phong'),
(7, 'nttu99', 'ntt111299', 'Nguyen The Tu', 'tupro99@gmail.com', '0989999993', 'Nam', 'Nam Dinh'),
(8, 'nvthanh99', 'nvt011099', 'Nguyen Van Thanh', 'thanhpro99@gmail.com', '0989999992', 'Nam', 'Ninh Binh'),
(9, 'lvtung98', 'lvt260299', 'Le Van Tung', 'tungpro99@gmail.com', '0989999991', 'Nam', 'Lao Cai'),
(10, 'pvcuong99', 'pvc060799', 'Phung Van Cuong', 'cuongpro99@gmail.com', '0989999990', 'Nam', 'Ca Mau'),
(11, 'dktrung99', 'dkt290399', 'Do Khanh Trung', 'trungvip99@gmail.com', '0989999989', 'Nam', 'Bac Lieu'),
(12, 'dqtrung99', 'dqt151099', 'Dao QuangTrung', 'quangtrungvip99@gmail.com', '0989999988', 'Nam', 'Hai Phong'),
(13, 'nmdung99', 'nmd230799', 'Nguyen Manh Dung', 'dungvip99@gmail.com', '0989999987', 'Nam', 'Ho Chi Minh'),
(14, 'nbngoc99', 'nbn241099', 'Nguyen Bao Ngoc', 'ngocvip99@gmail.com', '0989999986', 'Nam', 'Hung Yen'),
(15, 'httrang97', 'htt171197', 'Hoang Thuy Trang', 'trangvip97@gmail.com', '0989999985', 'Nu', 'Ha Noi'),
(16, 'Ltbinh99', 'ltb100899', 'Luu Thanh Binh', 'binhvip99@gmail.com', '0989999984', 'BeDe', 'Bac Giang'),
(17, 'ptduc99', 'ptd120499', 'Phan Tien Duc', 'tienducvip99@gmail.com', '0989999983', 'Nam', 'Bac Ninh'),
(18, 'dhhoang99', 'dhh271099', 'Dang Huy Hoang', 'hoangvip99@gmail.com', '0989999982', 'Nam', 'Hoa Binh'),
(19, 'ldtrinh98', 'ldt100598', 'Le Dinh Trinh', 'trinhvip98@gmail.com', '0989999981', 'Nam', 'Ha Noi'),
(20, 'dqviet99', 'dqv260899', 'Do Quoc Viet', 'vietvip99@gmail.com', '0989999980', 'Nam', 'Phu Quoc');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
