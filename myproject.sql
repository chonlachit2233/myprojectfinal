-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2025 at 02:48 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `user_type` tinyint(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `user_type`) VALUES
(7, 'ชูชิแชลม่อน', 1),
(8, 'ชูชิปลา', 1),
(9, 'ชูชิทูน่า', 1),
(10, 'ชูชิไข่ปลาเเซลม่อน', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int(11) NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `pro_price` decimal(10,2) NOT NULL,
  `pro_cost` decimal(10,2) NOT NULL,
  `pro_img` text DEFAULT NULL,
  `user_type` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `pro_name`, `cat_id`, `pro_price`, `pro_cost`, `pro_img`, `user_type`) VALUES
(15, 'ชูชิปลาเเซลม่อน', 1200, 600.00, 1200.00, 'https://image.bangkokbiznews.com/uploads/images/md/2022/06/jkLxP5Bq6FFYkSsYc1CL.webp', 1),
(20, 'ชูชิไข่หวาน', 22, 236.00, 20.00, 'https://www.dailynews.co.th/wp-content/uploads/2022/08/LINE_ALBUM_%E0%B9%84%E0%B8%82%E0%B9%88%E0%B8%AB%E0%B8%A7%E0%B8%B2%E0%B8%99%E0%B8%9A%E0%B9%89%E0%B8%B2%E0%B8%99%E0%B8%8B%E0%B8%B9%E0%B8%8A%E0%B8%B4_%E0%B9%92%E0%B9%92%E0%B9%90%E0%B9%98%E0%B9%90%E0%B9%95_18.jpg', 1),
(21, 'ชูชิหน้าไข่กุ้ง', 1111, 1111.00, 1233.00, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTTGQdN-9tBnwJIrh65Ag5qSP7pwINbExAd_w&s', 1),
(22, 'ชูชิไข่ปลาเเซลม่อน', 110, 100.00, 120.00, 'https://fit-d.com/uploads/food/c5d41dd3e0600f393f8ead0798f8f665.jpg', 1),
(23, 'ชูชิปลาเเซลม่อน', 1200, 600.00, 1200.00, 'https://image.bangkokbiznews.com/uploads/images/md/2022/06/jkLxP5Bq6FFYkSsYc1CL.webp', 1),
(24, 'ชูชิไข่หวาน', 22, 236.00, 20.00, 'https://www.dailynews.co.th/wp-content/uploads/2022/08/LINE_ALBUM_%E0%B9%84%E0%B8%82%E0%B9%88%E0%B8%AB%E0%B8%A7%E0%B8%B2%E0%B8%99%E0%B8%9A%E0%B9%89%E0%B8%B2%E0%B8%99%E0%B8%8B%E0%B8%B9%E0%B8%8A%E0%B8%B4_%E0%B9%92%E0%B9%92%E0%B9%90%E0%B9%98%E0%B9%90%E0%B9%95_18.jpg', 1),
(25, 'ชูชิหน้าไข่กุ้ง', 1111, 1111.00, 1233.00, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTTGQdN-9tBnwJIrh65Ag5qSP7pwINbExAd_w&s', 1),
(26, 'ชูชิไข่ปลาเเซลม่อน', 110, 100.00, 120.00, 'https://fit-d.com/uploads/food/c5d41dd3e0600f393f8ead0798f8f665.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `username` varchar(20) NOT NULL,
  `useremail` varchar(100) NOT NULL,
  `usermobile` varchar(10) NOT NULL,
  `loginpassword` varchar(255) NOT NULL,
  `regdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_type` tinyint(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `fullname`, `username`, `useremail`, `usermobile`, `loginpassword`, `regdate`, `user_type`) VALUES
(5, 'ttt', 'chonlachchit1', 'caca@gmail.com', '1111111111', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', '2025-01-22 13:15:17', 1),
(6, 'admin', 'admin', 'cacac@gmail.com', '1111111111', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', '2025-01-24 16:03:48', 0),
(7, 'faaf', 'dddd', 'user33@gmail.com', '2222222222', 'qqqqqqqqqq', '2025-02-01 09:11:24', 1),
(16, 'fafafa', 'fafafafa', 'afafafaf@gmail.com', '4444444444', '123333333333', '2025-02-01 09:19:34', 1),
(17, 'นาย สุพนัน', 'สุพนัน', 'supanib@gmail.com', '1111111111', '111111111111111111111', '2025-02-01 09:20:27', 1),
(18, 'lala', 'admin1', 'chja@gmail.com', '1222222222', '15e2b0d3c33891ebb0f1ef609ec419420c20e320ce94c65fbc8c3312448eb225', '2025-03-12 11:20:12', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `useremail` (`useremail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
