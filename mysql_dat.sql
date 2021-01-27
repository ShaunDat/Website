-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 24, 2020 lúc 07:22 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mysql_dat`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `AccountID` int(11) NOT NULL,
  `AccountAdmin` varchar(100) DEFAULT NULL,
  `PasswordAdmin` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`AccountID`, `AccountAdmin`, `PasswordAdmin`) VALUES
(1, 'vidat', '2001'),
(2, 'dat', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categori`
--

CREATE TABLE `categori` (
  `CategoriID` int(11) NOT NULL,
  `CategoriName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categori`
--

INSERT INTO `categori` (`CategoriID`, `CategoriName`) VALUES
(1, 'Ao'),
(2, 'Quan'),
(3, 'Mu'),
(4, 'Tat'),
(5, 'Giay'),
(6, 'Tui'),
(7, 'DongHo'),
(10, 'khong co j');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `ProductID` int(11) NOT NULL,
  `ProductName` varchar(50) DEFAULT NULL,
  `ProductPrice` varchar(50) DEFAULT NULL,
  `ProductDes` varchar(50) DEFAULT NULL,
  `Product_images` varchar(100) DEFAULT NULL,
  `CategoriID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`ProductID`, `ProductName`, `ProductPrice`, `ProductDes`, `Product_images`, `CategoriID`) VALUES
(1, 'Ao Supreme', '500000', 'Color: White, Black', '/Images/AoSupreme.jpg', 1),
(2, 'Quan Dickies', '600000', 'Color: light brown', '/Images/QuanDickies.jpg', 2),
(3, 'Mu Diskies', '200000', 'Color:Black', '/Images/MuDiskies.jpg\r\n', 3),
(4, 'Ao Local brand', '600000', 'Color: light brown', '/Images/AoLocalbrand.png', 1),
(5, 'Tat Nike', '50000', 'Color: White', '/Images/TatNike.jpg', 4),
(6, 'Ao Adidas', '700000', 'Color: White', '/Images/AoAdidas.jpg', 1),
(7, 'Giay Nike', '900000', 'Color: White', '/Images/GiayNike.jpg', 5),
(8, 'Quan Jogger', '400000', 'Color:Black', '/Images/QuanJogger.jpg', 2),
(9, 'Quan Owen', '450000', 'Color: Gray', '/Images/QuanOwen.jpg', 2),
(10, 'Quan Adidas', '500000', 'Color: Black', '/Images/QuanAdidas.jpg', 2),
(11, 'Quan Nike', '800000', 'Color:Black', '/Images/QuanNike.jpg', 2),
(12, 'Mu Nike', '250000', 'Color:Black', '/Images/MuNike.jpg', 3),
(13, 'Mu Coi', '40000', 'Color: Green', '/Images/MuCoi.jpg', 3),
(14, 'Dong Ho Rolex', '5000000', 'Color: yellow', '/Images/DongHoRolex.png', 7),
(15, 'Dong Ho Hublot', '7000000', 'Color: White, black', '/Images/DongHoHublot.jpg', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `UsersID` int(11) NOT NULL,
  `UserName` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `EmailAddress` varchar(100) DEFAULT NULL,
  `UserImages` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`UsersID`, `UserName`, `Password`, `EmailAddress`, `UserImages`) VALUES
(1, 'vidat', '2001', NULL, NULL),
(2, 'admin', 'admin', NULL, NULL),
(5, 'admin', 'adad', 'dât', ''),
(6, 'admin', '1', 'dât', 'png.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`AccountID`);

--
-- Chỉ mục cho bảng `categori`
--
ALTER TABLE `categori`
  ADD PRIMARY KEY (`CategoriID`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductID`),
  ADD KEY `CategoriID` (`CategoriID`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UsersID`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`CategoriID`) REFERENCES `categori` (`CategoriID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
