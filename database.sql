-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2020 at 04:57 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
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
-- Dumping data for table `admin`
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

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `AuthorName` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MoreInfo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `AuthorName`, `MoreInfo`) VALUES
(1, 'Vũ Trọng Phụng', 'Vũ Trọng Phụng (1912-1939) là một nhà văn, nhà báo nổi tiếng của Việt Nam vào đầu thế kỷ 20.'),
(2, 'Nam Cao', 'Nam Cao (1915 hoặc 1917 – 28 tháng 11 năm 1951) là một nhà văn và cũng là một chiến sĩ, liệt sĩ ngườ'),
(3, 'Trần Đăng Khoa', 'Trần Đăng Khoa là một nhà thơ, nhà báo, biên tập viên Tạp chí Văn nghệ Quân đội, Phó chủ tịch Hội Nh'),
(4, 'Ngô Tất Tố', 'Ngô Tất Tố (1894 – 20 tháng 4 năm 1954) là một nhà văn, nhà báo, nhà Nho học, dịch giả và nhà nghiên'),
(5, 'Xuân Diệu', 'Ông nổi tiếng từ phong trào Thơ mới với tập Thơ thơ và Gửi hương cho gió. Những bài được yêu thích n'),
(6, 'Xuân Quỳnh', 'là một nhà thơ nữ của Việt Nam. Bà được xem là nữ thi sĩ nổi tiếng với nhiều bài thơ được nhiều ngườ'),
(7, 'Hàn Mặc Tử', 'là nhà thơ nổi tiếng, khởi đầu cho dòng thơ lãng mạn hiện đại Việt Nam, là người khởi xướng ra Trườn'),
(8, 'Nguyễn Bính', 'Ông được coi như là nhà thơ của làng quê Việt Nam với những bài thơ mang sắc thái dân dã, mộc mạc.'),
(9, 'Huy Cận', 'là một trong những nhà thơ xuất sắc nhất của phong trào Thơ mới.'),
(10, 'Anh Thơ', 'tên thật là Vương Kiều Ân, các bút danh khác: Hồng Anh, Tuyết Anh, Hồng Minh; là một nhà thơ nữ Việt'),
(11, 'Vũ Đình Liên', 'Bài thơ Ông Đồ của ông được một nhà phê bình văn học xem là một trong mười bài thơ tiêu biểu cho pho'),
(12, 'Tú Xương', 'Ông thuộc loại nhà nho \"dài lưng tốn vải\" như trong bài Hỏi ông trời của ông'),
(13, 'Tú Mỡ', 'với gần nửa thế kỷ cầm bút bền bỉ, ông đã có những đóng góp đáng kể đối với sự phát triển của thơ ca'),
(14, 'Tản Đà', 'Bút danh Tản Đà của ông là tên ghép giữa núi Tản Viên và sông Đà, quê hương ông.'),
(15, 'Hồ Xuân Hương', 'là một thi sĩ sống ở giai đoạn cuối thế kỷ XVIII và đầu thế kỷ XIX, mà hiện tại vẫn khiến nhiều học '),
(16, 'Nguyễn Nhật Ánh', 'Ông được biết đến qua nhiều tác phẩm văn học về đề tài tuổi mới lớn, các tác phẩm của ông rất được đ'),
(17, 'Nguyễn Du', 'là một nhà thơ, nhà văn hóa lớn thời Lê mạt, Nguyễn sơ ở Việt Nam. Ông được người Việt kính trọng tô'),
(18, 'Tố Hữu', 'là một nhà thơ tiêu biểu của thơ cách mạng Việt Nam, đồng thời ông còn là một chính khách, một cán b'),
(19, 'Bằng Việt', 'Ông đã từng là Chủ tịch Hội đồng thơ Hội Nhà văn Việt Nam và Chủ tịch Hội Liên hiệp Văn học Nghệ thu'),
(20, 'Chế Lan Viên', 'là một nhà thơ, nhà văn hiện đại Việt Nam với tác phẩm nổi bật: Điêu tàn, Ánh sáng và phù sa.');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID_CUSTOMER` int(10) NOT NULL,
  `NAME_CUSTOMER` varchar(30) NOT NULL,
  `PHONE_CUSTOMER` varchar(11) NOT NULL,
  `EMAIL_CUSTOMER` varchar(30) NOT NULL,
  `ADDRESS_CUSTOMER` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID_CUSTOMER`, `NAME_CUSTOMER`, `PHONE_CUSTOMER`, `EMAIL_CUSTOMER`, `ADDRESS_CUSTOMER`) VALUES
(1, 'Nguyễn Tiến Long', '0123456789', 'tienlong@gmail.com', 'Hà Nội'),
(2, 'Trần Quang Khải', '0123333333', 'quangkhai@gmail.com', 'Hà Nam'),
(3, 'Bùi Văn Chiến', '0123456789', 'bvchien@gmail.com', 'Quảng Ninh'),
(4, 'Trần Nho Quang', '0123474639', 'nhoquang@gmail.com', 'Nam Định'),
(5, 'Đỗ Quang Ninh', '0123964389', 'quangninh@gmail.com', 'Phú Thọ'),
(6, 'Lương Mạnh Tuấn', '0128574789', 'manhtuan@gmail.com', 'Sơn La'),
(7, 'Đỗ Mạnh Cường', '0123862489', 'manhcuong@gmail.com', 'Lào Cai'),
(8, 'Nguyễn Thanh Tùng', '0128536789', 'thanhtung@gmail.com', 'Điện Biên'),
(9, 'Bùi Anh Dũng', '0123759189', 'anhdung@gmail.com', 'Thái Bình'),
(10, 'Nguyễn Văn Hưng', '0123475389', 'vanhung@gmail.com', 'Thái Nguyên'),
(11, 'Trần Văn Trung', '0129685789', 'vantrung@gmail.com', 'Cao Bằng'),
(12, 'Ngô Sĩ Liên', '012486789', 'silien@gmail.com', 'Lạng Sơn'),
(13, 'Nguyễn Tiến Đức', '0123789389', 'tienduc@gmail.com', 'Vĩnh Phúc'),
(14, 'Đoàn Văn Hậu', '0185274789', 'vanhau@gmail.com', 'Tuyên Quang'),
(15, 'Nguyễn Xuân Mạnh', '0129636789', 'xuanmanh@gmail.com', 'Bắc Giang'),
(16, 'Hoàng Hoa Thám', '0123426789', 'hoatham@gmail.com', 'Bắc Ninh'),
(17, 'Lê Công Vinh', '0127896789', 'congvinh@gmail.com', 'Hải Dương'),
(18, 'Lê Tuấn Tú', '017896789', 'tuantu@gmail.com', 'Hải Phòng'),
(19, 'Hoàng Văn Thành', '0123789894', 'vanthanh@gmail.com', 'Nghệ An'),
(20, 'Hoàng Văn Mạnh', '0123451235', 'vanmanh@gmail.com', 'Hà Tĩnh'),
(21, 'Lê Đại Hoàng', '012396385', 'daihoang@gmail.com', 'Quảng Ngãi'),
(22, 'Nguyễn Nhật Ánh', '0123434567', 'nhatanh@gmail.com', 'Quảng Trị'),
(23, 'Tô Hoài', '012341234', 'tohoai@gmail.com', 'Đà Nẵng'),
(24, 'Nguyễn Nguyên Ngọc', '0123453333', 'nguyenngoc@gmail.com', 'Huế'),
(25, 'Trần Trung Đức', '0123456000', 'trungduc@gmail.com', 'Kon Tum'),
(26, 'Ngô Văn Long', '0123456111', 'vanlong@gmail.com', 'Gia Lai'),
(27, 'Nguyễn Đức Cường', '0123456222', 'duccuong@gmail.com', 'Plei-Ku'),
(28, 'Vàng A Sử', '0123456333', 'asu@gmail.com', 'Buôn Ma Thuột'),
(29, 'Nguyễn Quang Sáng', '0123456333', 'quangsang@gmail.com', 'Bình Phước'),
(30, 'Nguyễn Anh Đức', '0123456444', 'anhduc@gmail.com', 'Tp Hồ Chí Minh'),
(31, 'Trần Thị Hoài Thương', '0123456555', 'nguyenhoaithuong@gmail.com', 'Cà Mau'),
(32, 'Nguyễn Hoài Thương', '0123456666', 'hoaithuong@gmail.com', 'Khánh Hòa'),
(33, 'Nguyễn Huyền Nhung', '0123456999', 'huyenhung@gmail.com', 'Phú Quốc'),
(34, 'Nguyễn Minh Nguyệt', '0123456888', 'minhnguyet@gmail.com', 'Đồng Tháp'),
(35, 'Nguyễn Xuân Hùng', '0123456777', 'xuanhung@gmail.com', 'An Giang');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Code` int(11) NOT NULL,
  `Name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Gender` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Position` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PhoneNumber` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Code`, `Name`, `DateOfBirth`, `Gender`, `Position`, `PhoneNumber`, `Email`, `Address`) VALUES
(1, 'Nguyễn Công Minh', '1992-02-16', 'Nam', 'Quản Lý', '0324568525', 'congminh@gmail.com', 'Hà Nội'),
(2, 'Nguyễn Thị Thu Hà', '1996-12-03', 'Nữ', 'Nhân Viên', '0452123652', 'thuha@gmail.com', 'Hà Nội'),
(3, 'Trần Trung Tâm', '2000-03-04', 'Nam', 'Nhân Viên', '0546356213', 'trungtam@gmail.com', 'Hà Tây'),
(4, 'Trần Quang Thắng', '1993-03-26', 'Nam', 'Nhân Viên', '0535456213', 'quangthang@gmail.com', 'Hà Nam'),
(5, 'Dương Kiều Thu', '1993-03-27', 'Nữ', 'Nhân Viên', '0535456583', 'kieuthu@gmail.com', 'Hải Phòng'),
(6, 'Trần Thanh Phong', '1996-04-26', 'Nam', 'Nhân Viên', '0535456211', 'thanhphong@gmail.com', 'Huế'),
(7, 'Dương Minh Quân', '1991-01-20', 'Nam', 'Quản Lý', '0123456896', 'minhquan@gmail.com', 'Phúc Thọ'),
(8, 'Đào Hồng Nhung', '1996-01-20', 'Nữ', 'Nhân Viên', '0223456896', 'hongnhung@gmail.com', 'Phúc Thọ'),
(9, 'Trần Thị Nhung', '1996-05-20', 'Nữ', 'Nhân Viên', '0223456132', 'thinhung@gmail.com', 'Phú Quốc'),
(10, 'Nguyễn Văn Công', '1997-12-20', 'Nam', 'Nhân Viên', '0353456896', 'vancong@gmail.com', 'Hải Phòng'),
(11, 'Nguyễn Thị Loan', '1995-09-22', 'Nữ', 'Nhân Viên', '0358456896', 'thiloan@gmail.com', 'Hà Tây'),
(12, 'Trần Nhân Tông', '1999-03-15', 'Nam', 'Nhân Viên', '0923456896', 'nhantong@gmail.com', 'Ninh Bình'),
(13, 'Lê Đức Cảnh', '1995-05-01', 'Nam', 'Nhân Viên', '0953456896', 'duccanh@gmail.com', 'Phúc Thọ'),
(14, 'Trần Thái Tông', '1992-12-19', 'Nam', 'Nhân Viên', '0993456893', 'thaitong@gmail.com', 'Thái Bình'),
(15, 'Dương Ái Nhi', '1993-12-19', 'Nữ', 'Quản Lý', '0553456896', 'ainhi@gmail.com', 'Hà Nội'),
(16, 'Lê Văn Thắng', '1985-05-10', 'Nam', 'Nhân Viên', '0993426896', 'vanthang@gmail.com', 'TP. HCM'),
(17, 'Nguyễn Như Lai', '2000-03-25', 'Nam', 'Nhân Viên', '0923456896', 'nhulai@gmail.com', 'Hà Nội'),
(18, 'Trần Thị Lý', '1996-09-29', 'Nữ', 'Nhân Viên', '0223456999', 'thily@gmail.com', 'Thái Bình'),
(19, 'Nguyễn Hữu Phước', '1998-01-22', 'Nam', 'Nhân Viên', '0223455892', 'huuphuoc@gmail.com', 'Phúc Thọ'),
(20, 'Lê Quang Tùng', '1994-05-23', 'Nam', 'Nhân Viên', '0233456896', 'quangtung@gmail.com', 'Lạng Sơn');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `publisher` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `yearofpublish` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title`, `category`, `publisher`, `yearofpublish`) VALUES
(1, 'Thức tỉnh mục đích sống', ' Sách hay về cuộc sống', ' NXB Tổng hợp TP.HCM', 2011),
(2, 'Khi Ta Thay Đổi Thế Giới Sẽ Đổ', 'Nghệ thuật sống đẹp', ' NXB Trẻ', 2012),
(3, 'Ai lấy miếng pho mát của tôi', ' Sách hay về cuộc sống', ' NXB Tổng hợp TP.HCM', 2011),
(4, 'Nghĩ Đơn Giản,  Sống Đơn Thuần', 'Nghệ thuật sống đẹp', ' NXB Trẻ', 2012),
(5, '7 Thói quen để thành đạt', 'Nghệ thuật sống đẹp', ' NXB Tổng hợp TP.HCM', 2016),
(6, 'Hiểu Về Trái Tim', ' Sách kỹ năng sống', ' NXB Trẻ', 2011),
(7, 'Hai Vạn Dặm Dưới Đáy Biển', ' Sách hay về cuộc sống', ' NXB Tổng hợp TP.HCM', 2012),
(8, 'Những Bài Học Cuộc Sống', ' Sách kỹ năng sống', ' NXB Trẻ', 2011),
(9, 'Phớt lờ tất cả và bơ đi mà sốn', ' Sách kỹ năng sống', 'Nhà Xuất Bản Dân Trí', 2012),
(10, 'Mỗi Ngày Tiết Kiệm Một Giờ', ' Sách hay về cuộc sống', 'Nhà Xuất Bản Dân Trí', 2012),
(11, 'Trí tuệ do thái', ' Sách kỹ năng sống', 'Nhà Xuất Bản Dân Trí', 2016),
(12, 'Tôi Tự Học', ' Sách kỹ năng sống', 'Nhà Xuất Bản Dân Trí', 2011),
(13, 'Cách Sống', 'Nghệ thuật sống đẹp', 'Nghệ thuật sống đẹp', 2012),
(14, 'Ba người thầy vĩ đại', ' Sách hay về cuộc sống', 'Nhà Xuất Bản Dân Trí', 2013),
(15, 'Món Quà Của Sự Không Hoàn Hảo', ' Sách kỹ năng sống', 'Nhà Xuất Bản Dân Trí', 2014),
(16, 'Dám Tha Thứ', 'Sách hay về cuộc sống', 'NXB Tổng hợp TP.HCM', 2012),
(17, 'Sức Mạnh Của Tĩnh Lặng', 'Nghệ thuật sống đẹp', 'NXB Tổng hợp TP.HCM', 2016),
(18, 'Điểm Tựa Của Niềm Tin', 'Nghệ thuật sống đẹp', ' NXB Tổng hợp TP.HCM', 2016),
(19, 'Tôi Tự Học', ' Sách Kỹ Năng Sống', 'NXB Tổng hợp TP.HCM', 2012),
(20, 'Những Giá Trị Sống Cho Tuổi Tr', 'Sách kỹ năng sống', 'NXB Tổng hợp TP.HCM', 2012);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID_CUSTOMER`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Code`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID_CUSTOMER` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `Code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
