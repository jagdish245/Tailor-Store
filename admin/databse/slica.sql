-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2018 at 01:02 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `slica`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_area`
--

CREATE TABLE IF NOT EXISTS `tbl_area` (
  `Area_id` int(11) NOT NULL,
  `Area_name` varchar(20) NOT NULL,
  `City_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '1',
  `is_delete` int(11) NOT NULL DEFAULT '0',
  `insert_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_area`
--

INSERT INTO `tbl_area` (`Area_id`, `Area_name`, `City_id`, `is_active`, `is_delete`, `insert_datetime`) VALUES
(1, 'meet', 3001, 1, 0, '2018-02-01 16:12:31'),
(2, 'Naroda', 1, 1, 0, '2018-02-14 05:51:12'),
(3, 'Naranpura', 1, 1, 0, '2018-02-21 08:16:50'),
(5, 'Shyamal', 1, 1, 0, '2018-02-21 08:17:59'),
(6, 'K.k nagar', 1, 1, 0, '2018-02-21 08:18:09'),
(7, 'Vasna', 1, 1, 0, '2018-02-21 08:18:17'),
(8, 'Bhuyangdev', 1, 1, 0, '2018-02-21 08:19:55'),
(9, 'Gatlodia', 1, 1, 0, '2018-02-21 08:20:18'),
(10, 'Vijay cross road', 1, 1, 0, '2018-02-21 08:20:56'),
(11, 'Akota', 2, 1, 0, '2018-02-21 08:59:44'),
(12, 'Kalash Circle', 2, 1, 0, '2018-02-21 09:00:10'),
(13, 'Alkapuri', 2, 1, 0, '2018-02-21 09:00:27'),
(14, 'BPC', 2, 1, 0, '2018-02-21 09:00:41'),
(15, 'Manzalpur', 2, 1, 0, '2018-02-21 09:00:56'),
(16, 'Awadh Road', 3, 1, 0, '2018-02-21 09:01:15'),
(17, 'Bhaktinagar', 3, 1, 0, '2018-02-21 09:01:29'),
(18, 'Canal Road', 3, 1, 0, '2018-02-21 09:01:40'),
(19, 'Central Rajkot', 3, 1, 0, '2018-02-21 09:01:57'),
(20, 'Raiya Chokdi', 3, 1, 0, '2018-02-21 09:02:18'),
(21, 'Kamrej', 7, 1, 0, '2018-02-21 09:46:05'),
(22, 'Ramjinagar', 7, 1, 0, '2018-02-21 09:46:16'),
(23, 'Sosiyo Circle', 7, 1, 0, '2018-02-21 09:46:43'),
(24, 'Katodar', 7, 1, 0, '2018-02-21 09:47:02'),
(25, 'Harinagar', 7, 1, 0, '2018-02-21 09:47:10'),
(26, 'Motipura', 8, 1, 0, '2018-02-21 09:47:27'),
(27, 'Mehtapura', 8, 1, 0, '2018-02-21 09:47:53'),
(28, 'Sarkari Jin Road', 8, 1, 0, '2018-02-21 09:48:38'),
(29, 'Mahavir nagar', 8, 1, 0, '2018-02-21 09:48:52'),
(30, 'Sector 28', 5, 1, 0, '2018-02-21 09:49:20'),
(31, 'Sector 6', 5, 1, 0, '2018-02-21 09:49:29'),
(32, 'Sector 4', 5, 1, 0, '2018-02-21 09:49:37'),
(33, 'Mankava', 11, 1, 0, '2018-02-21 09:50:23'),
(34, 'Naranpur', 11, 1, 0, '2018-02-21 09:50:35'),
(35, 'Naranpur', 11, 1, 0, '2018-02-21 09:50:35'),
(36, 'Kukma', 11, 1, 0, '2018-02-21 09:50:47');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(20) NOT NULL,
  `cat_imgurl` varchar(100) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '1',
  `is_delete` int(11) NOT NULL DEFAULT '0',
  `insert_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`cat_id`, `cat_name`, `cat_imgurl`, `is_active`, `is_delete`, `insert_datetime`) VALUES
(4, 'Formal', 'Arrow-New-York-Navy-Blue-Solid-Regular-Fit-Formal-Trouser-4398-206682003-2-pdp_slider_l.jpg', 1, 0, '2018-02-20 12:28:43'),
(5, 'Casual', 'Mast---Harbour-Blue-Striped-Casual-Shirt-6574-585165003-1-pdp_slider_l.jpg', 1, 0, '2018-02-20 12:29:16'),
(6, 'Traditional', '1.JPG', 1, 0, '2018-02-21 10:45:54');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE IF NOT EXISTS `tbl_city` (
  `City_id` int(11) NOT NULL,
  `City_name` varchar(20) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '1',
  `is_delete` int(11) NOT NULL DEFAULT '0',
  `insert_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`City_id`, `City_name`, `is_active`, `is_delete`, `insert_datetime`) VALUES
(1, 'Ahmedabad', 1, 0, '2018-02-01 10:44:24'),
(2, 'Vadodara', 1, 0, '2018-02-14 04:51:30'),
(3, 'Rajkot', 1, 0, '2018-02-14 02:57:18'),
(5, 'Gandhinagar', 1, 0, '2018-02-21 03:13:56'),
(7, 'Surat', 1, 0, '2018-02-21 03:28:31'),
(8, 'Himmatnagar', 1, 0, '2018-02-21 03:28:41'),
(11, 'Bhuj', 1, 0, '2018-02-21 03:29:12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_color`
--

CREATE TABLE IF NOT EXISTS `tbl_color` (
  `Color_id` int(11) NOT NULL,
  `Color_name` varchar(20) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '1',
  `is_delete` int(11) NOT NULL DEFAULT '0',
  `insert_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_color`
--

INSERT INTO `tbl_color` (`Color_id`, `Color_name`, `is_active`, `is_delete`, `insert_datetime`) VALUES
(1, 'Red', 1, 0, '2018-02-01 10:45:05'),
(2, 'Blue', 1, 0, '2018-02-14 05:08:06'),
(3, 'Yellow', 1, 0, '2018-02-14 05:08:06'),
(5, 'Green', 1, 0, '2018-02-21 00:07:00'),
(6, 'Orange', 1, 0, '2018-02-21 00:07:20'),
(7, 'Purple', 1, 0, '2018-02-21 00:07:35'),
(8, 'Pink', 1, 0, '2018-02-21 00:07:52'),
(9, 'Brown', 1, 0, '2018-02-21 00:08:07'),
(10, 'Gold', 1, 0, '2018-02-21 00:08:26'),
(11, 'Rose', 1, 0, '2018-02-21 00:09:34'),
(12, 'Silver', 1, 0, '2018-02-21 00:09:46'),
(13, 'Yellow', 1, 0, '2018-02-21 00:09:57'),
(14, 'White', 1, 0, '2018-02-21 00:10:12'),
(15, 'Gray', 1, 0, '2018-02-21 00:10:56'),
(16, 'White', 1, 0, '2018-02-21 00:11:10'),
(17, 'Black', 1, 0, '2018-02-21 00:12:21'),
(18, 'Chocolate', 1, 0, '2018-02-21 00:13:09'),
(19, 'Grape', 1, 0, '2018-02-21 00:17:05'),
(21, 'Lemon', 1, 0, '2018-02-21 00:19:34'),
(22, 'Peach', 1, 0, '2018-02-21 00:19:54'),
(24, 'Denim', 1, 0, '2018-02-21 00:20:33'),
(25, 'Maroon', 1, 0, '2018-02-22 03:38:12'),
(26, 'Off white', 1, 0, '2018-02-22 06:44:25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company`
--

CREATE TABLE IF NOT EXISTS `tbl_company` (
  `company_id` int(11) NOT NULL,
  `company_code` varchar(200) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Address` varchar(240) NOT NULL,
  `Area_id` int(11) NOT NULL,
  `Ph_no` int(11) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '1',
  `is_delete` int(11) NOT NULL DEFAULT '0',
  `insert_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_company`
--

INSERT INTO `tbl_company` (`company_id`, `company_code`, `Name`, `Address`, `Area_id`, `Ph_no`, `Email`, `is_active`, `is_delete`, `insert_datetime`) VALUES
(4, '1', 'A-one fashion', 'f/8, Souram tower,nr vasna bus stop,Ahmedabad-380007', 7, 2147483647, 'aonefashion411@gmail', 1, 0, '2018-02-21 00:03:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE IF NOT EXISTS `tbl_feedback` (
  `Feedback_id` int(11) NOT NULL,
  `Product_id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '1',
  `is_delete` int(11) NOT NULL DEFAULT '0',
  `insert_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orderdetails`
--

CREATE TABLE IF NOT EXISTS `tbl_orderdetails` (
  `Order_id` int(11) NOT NULL,
  `Pro_id` int(11) NOT NULL,
  `Qty` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '1',
  `is_delete` int(11) NOT NULL DEFAULT '0',
  `insert_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_orderdetails`
--

INSERT INTO `tbl_orderdetails` (`Order_id`, `Pro_id`, `Qty`, `Price`, `is_active`, `is_delete`, `insert_datetime`) VALUES
(1, 1, 5, 500, 1, 0, '2018-02-01 06:49:14'),
(2, 1, 5, 502, 1, 0, '2018-02-01 06:49:21'),
(3, 2, 5, 200, 1, 0, '2018-02-01 06:49:48');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ordermaster`
--

CREATE TABLE IF NOT EXISTS `tbl_ordermaster` (
  `Order_Id` int(11) NOT NULL,
  `Order_date` date NOT NULL,
  `User_id` int(11) NOT NULL,
  `Shipping_id` int(11) NOT NULL,
  `Status_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '1',
  `is_delete` int(11) NOT NULL DEFAULT '0',
  `insert_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ordermaster`
--

INSERT INTO `tbl_ordermaster` (`Order_Id`, `Order_date`, `User_id`, `Shipping_id`, `Status_id`, `is_active`, `is_delete`, `insert_datetime`) VALUES
(1, '2018-02-01', 1, 1, 2, 1, 0, '2018-02-01 13:25:42');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orderstatus`
--

CREATE TABLE IF NOT EXISTS `tbl_orderstatus` (
  `Status_id` int(11) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '1',
  `is_delete` int(11) NOT NULL DEFAULT '0',
  `insert_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_orderstatus`
--

INSERT INTO `tbl_orderstatus` (`Status_id`, `Status`, `is_active`, `is_delete`, `insert_datetime`) VALUES
(1, 'Stock out', 1, 0, '2018-02-14 03:08:58'),
(2, 'onway', 1, 0, '2018-02-01 07:01:34');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE IF NOT EXISTS `tbl_payment` (
  `Payment_id` int(11) NOT NULL,
  `Payment_date` date NOT NULL,
  `Method` int(11) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Order_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '1',
  `is_delete` int(11) NOT NULL DEFAULT '0',
  `insert_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`Payment_id`, `Payment_date`, `Method`, `Amount`, `Order_id`, `is_active`, `is_delete`, `insert_datetime`) VALUES
(1, '2018-02-28', 0, 500, 0, 1, 0, '2018-02-01 07:10:45');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE IF NOT EXISTS `tbl_product` (
  `Product_id` int(11) NOT NULL,
  `Product_name` varchar(20) NOT NULL,
  `Details` varchar(40) NOT NULL,
  `Price` int(11) NOT NULL,
  `Qty` int(11) NOT NULL,
  `Sub_cat_id` int(11) NOT NULL,
  `Size_id` int(11) NOT NULL,
  `Color_id` int(11) NOT NULL,
  `Mat_code_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '1',
  `is_delete` int(11) NOT NULL DEFAULT '0',
  `insert_datatime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`Product_id`, `Product_name`, `Details`, `Price`, `Qty`, `Sub_cat_id`, `Size_id`, `Color_id`, `Mat_code_id`, `is_active`, `is_delete`, `insert_datatime`) VALUES
(1, 'Arrow-Blue', 'Slim-Fit-Formal-Shirt', 999, 11, 7, 3, 2, 5, 1, 0, '2018-02-22 07:12:48'),
(2, 'Arrow-Purple', 'Regular-Fit-Formal-Shirt', 899, 10, 7, 12, 7, 6, 1, 0, '2018-02-22 07:40:49'),
(3, 'Blackberry-Black', 'Solid-Slim-Fit-Formal-Shirt', 899, 12, 7, 3, 17, 6, 1, 0, '2018-02-22 07:45:00'),
(4, 'Blackberry-Pink', 'Slim-Fit-Formal-Shirt', 799, 15, 7, 1, 8, 6, 1, 0, '2018-02-22 08:00:22'),
(5, 'Blackberry-Blue', 'Solid-Slim-Fit-Formal-Shirt', 699, 9, 7, 12, 2, 6, 1, 0, '2018-02-22 08:03:12'),
(6, 'Blackberry-Maroon', 'Slim-Fit-Formal-Shirt', 699, 15, 7, 12, 25, 6, 1, 0, '2018-02-22 08:09:50'),
(7, 'Peter-England', 'Slim-Fit-Formal-Shirt', 999, 15, 7, 12, 17, 6, 1, 0, '2018-02-22 08:11:50'),
(8, 'Raymond-Light-Blue', 'Slim-Fit-Formal-Shirt', 1000, 15, 7, 12, 2, 6, 1, 0, '2018-02-22 08:15:59'),
(9, 'Blackberry-Blue', 'Slim-Fit-Formal-Shirt', 999, 15, 7, 12, 2, 6, 1, 0, '2018-02-22 08:20:22'),
(10, 'Raymond-White', 'Slim-Fit-Formal-Shirt', 500, 15, 13, 12, 14, 6, 1, 0, '2018-02-22 08:27:05'),
(12, 'John-Players', 'Slim-Fit-Formal-Shirt', 600, 15, 13, 2, 8, 6, 1, 0, '2018-02-22 08:32:11'),
(13, 'U.S-Polo-black.', 'Slim-Fit-Formal-Shirt', 1000, 15, 13, 12, 17, 6, 1, 0, '2018-02-22 08:35:09'),
(14, 'Van-Heuse-Coffee', 'Slim-Fit-Formal-Shirt', 500, 10, 13, 12, 18, 6, 1, 0, '2018-02-22 08:38:16'),
(15, 'Arrow-Grey', 'Slim-Fit-Formal-pants', 1000, 15, 14, 12, 15, 6, 1, 0, '2018-02-22 08:42:02'),
(16, 'Arrow-Grey', 'Fit-Formal', 999, 10, 14, 12, 15, 6, 1, 0, '2018-02-22 08:44:37'),
(17, 'Arrow-New', 'Regular-Fit-Pent', 999, 15, 14, 12, 2, 6, 1, 0, '2018-02-22 08:47:56'),
(18, 'Blackberry-Black', 'Slim-Fit-Formal-pants', 799, 12, 14, 1, 17, 6, 1, 0, '2018-02-22 08:49:53'),
(19, 'Blackberry-Dark', 'Slim-Fit-Formal-pents', 899, 5, 14, 10, 15, 6, 1, 0, '2018-02-22 08:52:05'),
(20, 'Blackberry-Grey', 'Skinny-Fit-Pents', 899, 12, 14, 12, 15, 6, 1, 0, '2018-02-22 08:55:04'),
(21, 'Invictus-INVICTUS', 'Blue Slim-Fit', 1299, 10, 14, 12, 2, 6, 1, 0, '2018-02-22 08:57:27'),
(22, 'John-Players', 'Slim-Fit-Formal-pents', 899, 10, 14, 12, 2, 6, 1, 0, '2018-02-22 08:59:34'),
(23, 'John-Players', 'Fit-Formal', 789, 10, 14, 12, 15, 6, 1, 0, '2018-02-22 09:02:48'),
(24, 'Van-Heusen', 'Light-Grey', 1299, 10, 14, 12, 15, 6, 1, 0, '2018-02-22 09:07:02'),
(25, 'Arrow-Dark-Grey', 'Slim-Fit-Formal-pents', 899, 10, 14, 12, 15, 6, 1, 0, '2018-02-22 09:14:06'),
(26, 'Blackberry-Beige', 'Slim-Fit-Formal-pents', 899, 12, 14, 12, 14, 6, 1, 0, '2018-02-22 09:17:11'),
(27, 'Blackberry-Black', 'Skinny-Fit-Pents', 999, 15, 14, 12, 17, 6, 1, 0, '2018-02-22 09:20:15'),
(28, 'Van-Heusen', 'Slim-Fit-Formal-pents', 1299, 10, 14, 12, 2, 6, 1, 0, '2018-02-22 09:26:00'),
(29, 'Roadster-Blue', 'Casual-Shirt', 699, 10, 7, 12, 2, 6, 1, 0, '2018-02-22 09:33:03'),
(30, 'Roadster-Navy-Blue', 'Casual-Shirt', 15, 20, 7, 12, 17, 6, 1, 0, '2018-02-22 09:35:06'),
(31, 'Van-Heusen', 'Slim-Fit-Casual-Shirt', 499, 20, 7, 12, 2, 6, 1, 0, '2018-02-22 09:38:39'),
(32, 'Roadster-Black', 'Casual-Shirt', 199, 50, 7, 3, 17, 6, 1, 0, '2018-02-22 09:42:29'),
(33, 'U.S-Polo', 'Solid-Slim-Fit-Casual-Shirt', 699, 14, 7, 12, 2, 6, 1, 0, '2018-02-22 09:44:51'),
(34, 'Roadster', 'Slim-Fit-Casual-Shirt', 599, 16, 7, 1, 1, 6, 1, 0, '2018-02-22 09:46:20'),
(35, 'Blackberry-Beige-Pri', '100% cotton Imported Machine Wash Lightw', 1199, 10, 14, 1, 16, 6, 1, 0, '2018-02-22 10:09:01'),
(36, 'Blackberrys-Black-So', '100% Polyester Imported Machine Wash Lig', 999, 10, 8, 12, 17, 6, 1, 0, '2018-02-22 10:11:49'),
(37, 'Tommy-Hilfiger-Khaki', '100% Cotton Imported Machine Wash Lightw', 999, 10, 8, 12, 9, 6, 1, 0, '2018-02-22 10:14:55'),
(38, 'Blackberry-Black-Sol', '100% cotton Imported Machine Wash Lightw', 999, 15, 8, 12, 17, 6, 1, 0, '2018-02-22 10:18:34'),
(39, 'Blackberrys-Black-So', 'Black, Khaki, Spandex, Charcoal, Navy: 7', 1299, 10, 8, 12, 17, 6, 1, 0, '2018-02-22 10:24:16'),
(40, 'Blackberrys-Brown-So', 'Black, Khaki, Spandex, Charcoal, Navy: 7', 1299, 10, 8, 12, 9, 6, 1, 0, '2018-02-22 10:26:15'),
(41, 'Tommy-Hilfiger-Blue-', 'Black, Khaki, Spandex, Charcoal, Navy: 7', 999, 10, 8, 12, 2, 6, 1, 0, '2018-02-22 10:29:24'),
(42, 'John-Players-Khaki-S', 'Black, Khaki, Spandex, Charcoal, Navy: 7', 999, 20, 8, 12, 15, 6, 1, 0, '2018-02-22 10:39:12'),
(43, 'Blackberry-Brown-Sol', 'Black, Khaki, Spandex, Charcoal, Navy: 7', 999, 16, 8, 12, 9, 6, 1, 0, '2018-02-22 10:42:20'),
(44, 'RG-DESIGNERS-Purple-', 'A mandarin collar, long sleeves, curved ', 6000, 4, 11, 12, 2, 6, 1, 0, '2018-02-22 10:58:17'),
(45, 'Emuze-Orange--Gold-T', 'Cotton and silk blend Dry-clean', 9000, 5, 11, 12, 6, 6, 1, 0, '2018-02-22 11:03:15'),
(46, 'Raymond-Ethnix-Beige', 'sherwani with woven design throughout, h', 7999, 10, 11, 12, 26, 6, 1, 0, '2018-02-22 11:15:19'),
(47, 'Raymond-Ethnix-Navy-', 'sherwani with woven design throughout, h', 9999, 10, 11, 12, 17, 6, 1, 0, '2018-02-22 11:17:18'),
(48, 'Raymond-Ethnix-Beige', 'sherwani with woven design throughout, h', 6999, 10, 11, 3, 26, 6, 1, 0, '2018-02-22 11:21:13'),
(49, 'Peter-England-Casual', 'sherwani with woven design throughout, h', 9999, 10, 11, 12, 1, 6, 1, 0, '2018-02-22 11:24:34'),
(50, 'Men-Kurta-Black', 'Black solid straight kurta, has a mandar', 4000, 9, 9, 12, 17, 6, 1, 0, '2018-02-22 11:34:28'),
(51, 'Men-Kurta-Yellow', 'Yellow straight kurta, has a mandarin co', 5999, 77, 9, 12, 1, 6, 1, 0, '2018-02-22 11:38:57'),
(52, 'Men-Kurta-Blue', 'Blue straight kurta, has a mandarin coll', 7999, 5, 9, 12, 2, 6, 1, 0, '2018-02-22 11:43:42'),
(53, 'Deyann-Dupion-Silk-R', 'Orange-straight kurta, has a mandarin co', 7999, 5, 9, 12, 6, 6, 1, 0, '2018-02-22 11:48:28'),
(54, 'Hangup-Men-Blue-Soli', 'Blue solid straight kurta, has a mandari', 8999, 7, 9, 12, 1, 6, 1, 0, '2018-02-22 11:52:49'),
(55, 'Deyann-Dupion-Silk-B', 'Black solid straight kurta, has a mandar', 8999, 5, 9, 12, 17, 6, 1, 0, '2018-02-22 11:56:19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_productcompany`
--

CREATE TABLE IF NOT EXISTS `tbl_productcompany` (
  `product_company_id` int(11) NOT NULL,
  `company_code` varchar(200) NOT NULL,
  `Company_name` varchar(20) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '1',
  `is_delete` int(11) NOT NULL DEFAULT '0',
  `insert_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_productcompany`
--

INSERT INTO `tbl_productcompany` (`product_company_id`, `company_code`, `Company_name`, `is_active`, `is_delete`, `insert_datetime`) VALUES
(1, '1', 'Arrow', 1, 0, '2018-02-22 07:23:05'),
(2, '2', 'Blackberry', 1, 0, '2018-02-22 07:24:06'),
(3, '3', 'John-players', 1, 0, '2018-02-22 07:24:41'),
(4, '4', 'Louis', 1, 0, '2018-02-22 07:25:13'),
(5, '5', 'Marks', 1, 0, '2018-02-22 07:26:00'),
(6, '6', 'Park-Avenue', 1, 0, '2018-02-22 07:26:34'),
(7, '7', 'Peter-England', 1, 0, '2018-02-22 07:27:02'),
(8, '8', 'Raymond', 1, 0, '2018-02-22 07:27:25'),
(9, '9', 'U.S Polo', 1, 0, '2018-02-22 07:27:49'),
(10, '10', 'Van-Heusen', 1, 0, '2018-02-22 07:28:34'),
(11, '11', 'Tommy-hill', 1, 0, '2018-02-22 07:29:52'),
(12, '1', 'Roadster', 1, 0, '2018-02-22 09:31:45');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_images`
--

CREATE TABLE IF NOT EXISTS `tbl_product_images` (
  `Pro_imageid` int(11) NOT NULL,
  `Pro_id` int(11) NOT NULL,
  `Image_url` varchar(100) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '1',
  `is_delete` int(11) NOT NULL DEFAULT '0',
  `insert_datatime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product_images`
--

INSERT INTO `tbl_product_images` (`Pro_imageid`, `Pro_id`, `Image_url`, `is_active`, `is_delete`, `insert_datatime`) VALUES
(2, 2, 'Arrow-Purple-Textured-Regular-Fit-Formal-Shirt-4191-632062003-1-pdp_slider_l.jpg', 1, 0, '2018-02-22 07:41:24'),
(3, 3, 'Blackberrys-Black-Solid-Slim-Fit-Formal-Shirt-3652-314032003-1-pdp_slider_l.jpg', 1, 0, '2018-02-22 07:52:26'),
(4, 3, 'Blackberrys-Black-Solid-Slim-Fit-Formal-Shirt-3652-314032003-2-pdp_slider_l.jpg', 1, 0, '2018-02-22 07:52:40'),
(5, 3, 'Blackberrys-Black-Solid-Slim-Fit-Formal-Shirt-3652-314032003-3-pdp_slider_l.jpg', 1, 0, '2018-02-22 07:52:58'),
(6, 1, 'Blackberrys-Black-Solid-Slim-Fit-Formal-Shirt-3652-314032003-4-pdp_slider_l.jpg', 1, 0, '2018-02-22 07:53:07'),
(8, 4, 'Blackberrys-Pink-Textured-Slim-Fit-Formal-Shirt-0904-967702003-4-pdp_slider_l.jpg', 1, 0, '2018-02-22 08:01:26'),
(9, 5, 'Blackberrys-Blue-Solid-Slim-Fit-Formal-Shirt-7826-252095003-1-pdp_slider_l.jpg', 1, 0, '2018-02-22 08:03:46'),
(10, 5, 'Blackberrys-Blue-Solid-Slim-Fit-Formal-Shirt-7826-252095003-2-pdp_slider_l.jpg', 1, 0, '2018-02-22 08:04:01'),
(11, 5, 'Blackberrys-Blue-Solid-Slim-Fit-Formal-Shirt-7826-252095003-3-pdp_slider_l.jpg', 1, 0, '2018-02-22 08:04:18'),
(12, 6, 'Blackberrys-Maroon-Solid-Slim-Fit-Formal-Shirt-2227-192095003-3-pdp_slider_l.jpg', 1, 0, '2018-02-22 08:10:21'),
(13, 6, 'Blackberrys-Maroon-Solid-Slim-Fit-Formal-Shirt-2227-192095003-4-pdp_slider_l.jpg', 1, 0, '2018-02-22 08:10:34'),
(14, 6, 'Blackberrys-Maroon-Solid-Slim-Fit-Formal-Shirt-2227-192095003-2-pdp_slider_l.jpg', 1, 0, '2018-02-22 08:10:45'),
(15, 7, 'Peter-England-Navy-Blue-Printed-Slim-Fit-Formal-Shirt-1343-018034003-1-pdp_slider_l.jpg', 1, 0, '2018-02-22 08:12:28'),
(16, 7, 'Peter-England-Navy-Blue-Printed-Slim-Fit-Formal-Shirt-1343-018034003-3-pdp_slider_l.jpg', 1, 0, '2018-02-22 08:12:51'),
(17, 7, 'Peter-England-Navy-Blue-Printed-Slim-Fit-Formal-Shirt-1343-018034003-4-pdp_slider_l.jpg', 1, 0, '2018-02-22 08:13:07'),
(18, 8, 'Raymond-Light-Blue-Checked-Slim-Fit-Formal-Shirt-6114-596952003-1-pdp_slider_l.jpg', 1, 0, '2018-02-22 08:16:32'),
(19, 8, 'Raymond-Light-Blue-Checked-Slim-Fit-Formal-Shirt-6114-596952003-3-pdp_slider_l.jpg', 1, 0, '2018-02-22 08:16:47'),
(20, 8, 'Raymond-Light-Blue-Checked-Slim-Fit-Formal-Shirt-6114-596952003-4-pdp_slider_l.jpg', 1, 0, '2018-02-22 08:17:06'),
(21, 12, 'John-Players-Red-Checked-Regular-Fit-Formal-Shirt-4801-387931003-1-pdp_slider_l.jpg', 1, 0, '2018-02-22 08:32:49'),
(22, 13, 'U-S--Polo-Assn--Black-Solid-Regular-Fit-Formal-Shirt-3114-923415003-1-pdp_slider_l.jpg', 1, 0, '2018-02-22 08:35:43'),
(23, 13, 'Van-Heusen-Coffee-Printed-Slim-Fit-Formal-Shirt-1805-475535003-1-pdp_slider_l.jpg', 1, 0, '2018-02-22 08:39:18'),
(24, 15, 'Arrow-Grey-Solid-Slim-Fit-Formal-Trouser-5401-983882003-1-pdp_slider_l.jpg', 1, 0, '2018-02-22 08:42:56'),
(25, 16, 'Arrow-Grey-Textured-Regular-Fit-Formal-Trouser-9440-638782003-1-pdp_slider_l.jpg', 1, 0, '2018-02-22 08:45:08'),
(26, 1, 'Arrow-New-York-Navy-Blue-Solid-Regular-Fit-Formal-Trouser-4398-206682003-1-pdp_slider_l.jpg', 1, 0, '2018-02-22 08:48:30'),
(27, 3, 'Blackberrys-Black-Solid-Slim-Fit-Formal-Trouser-7608-1818572-1-pdp_slider_l.jpg', 1, 0, '2018-02-22 08:50:22'),
(28, 19, 'Blackberrys-Dark-Grey-Textured-Slim-Fit-Formal-Trouser-8903-152274003-1-pdp_slider_l.jpg', 1, 0, '2018-02-22 08:53:06'),
(29, 20, 'Blackberrys-Grey-Checked-Skinny-Fit-Formal-Trouser-2648-912075003-1-pdp_slider_l.jpg', 1, 0, '2018-02-22 08:55:34'),
(30, 1, 'Arrow-New-York-Navy-Blue-Solid-Regular-Fit-Formal-Trouser-4398-206682003-1-pdp_slider_l.jpg', 1, 0, '2018-02-22 08:58:12'),
(31, 12, 'John-Players-Blue-Solid-Slim-Fit-Formal-Trousers-7162-0624812-1-pdp_slider_l.jpg', 1, 0, '2018-02-22 09:00:14'),
(32, 12, 'John-Players-Grey-Textured-Slim-Fit-Formal-Trouser-4829-568831003-1-pdp_slider_l.jpg', 1, 0, '2018-02-22 09:01:04'),
(33, 12, 'John-Players-Khaki-Regular-Fit-Formal-Trouser-0121-629220003-1-pdp_slider_l.jpg', 1, 0, '2018-02-22 09:03:34'),
(34, 24, 'Van-Heusen-Beige-Solid-Regular-Fit-Formal-Trouser-2256-498272003-1-pdp_slider_l.jpg', 1, 0, '2018-02-22 09:08:12'),
(35, 15, 'Arrow-Dark-Grey-Solid-Slim-Fit-Formal-Trouser-0531-361682003-1-pdp_slider_l.jpg', 1, 0, '2018-02-22 09:15:19'),
(36, 15, 'Arrow-Dark-Grey-Solid-Slim-Fit-Formal-Trouser-0531-361682003-2-pdp_slider_l.jpg', 1, 0, '2018-02-22 09:15:56'),
(38, 26, 'Blackberrys-Beige-Slim-Fit-Formal-Trouser-1167-2578161-3-pdp_slider_l.jpg', 1, 0, '2018-02-22 09:18:40'),
(39, 26, 'Blackberrys-Beige-Slim-Fit-Formal-Trouser-1168-2578161-4-pdp_slider_l.jpg', 1, 0, '2018-02-22 09:19:00'),
(40, 3, 'Blackberrys-Black-Solid-Slim-Fit-Formal-Trouser-7608-1818572-1-pdp_slider_l.jpg', 1, 0, '2018-02-22 09:21:00'),
(41, 3, 'Blackberrys-Black-Solid-Slim-Fit-Formal-Trouser-7608-1818572-3-pdp_slider_l.jpg', 1, 0, '2018-02-22 09:21:25'),
(42, 24, 'Van-Heusen-Navy-Blue-Solid-Slim-Fit-Formal-Trouser-2035-195051003-1-pdp_slider_l.jpg', 1, 0, '2018-02-22 09:27:07'),
(43, 24, 'Van-Heusen-Navy-Blue-Solid-Slim-Fit-Formal-Trouser-2035-195051003-2-pdp_slider_l.jpg', 1, 0, '2018-02-22 09:27:33'),
(44, 29, 'Roadster-Blue-Checked-Casual-Shirt-0174-734165003-1-pdp_slider_l.jpg', 1, 0, '2018-02-22 09:33:45'),
(45, 29, 'Roadster-Blue-Checked-Casual-Shirt-0174-734165003-2-pdp_slider_l.jpg', 1, 0, '2018-02-22 09:34:01'),
(46, 30, 'Roadster-Navy-Blue-Checked-Casual-Shirt-6026-867665003-1-pdp_slider_l.jpg', 1, 0, '2018-02-22 09:35:43'),
(47, 30, 'Roadster-Navy-Blue-Checked-Casual-Shirt-6026-867665003-2-pdp_slider_l.jpg', 1, 0, '2018-02-22 09:35:59'),
(48, 30, 'Roadster-Navy-Blue-Checked-Casual-Shirt-6026-867665003-3-pdp_slider_l.jpg', 1, 0, '2018-02-22 09:36:15'),
(49, 28, 'Van-Heusen-Sport-Light-Blue-Textured-Slim-Fit-Casual-Shirt-9220-470255003-1-pdp_slider_l.jpg', 1, 0, '2018-02-22 09:39:24'),
(50, 24, 'Van-Heusen-Sport-Light-Blue-Textured-Slim-Fit-Casual-Shirt-9220-470255003-1-pdp_slider_l.jpg', 1, 0, '2018-02-22 09:41:19'),
(51, 24, 'Van-Heusen-Sport-Light-Blue-Textured-Slim-Fit-Casual-Shirt-9220-470255003-2-pdp_slider_l.jpg', 1, 0, '2018-02-22 09:41:34'),
(52, 32, 'Roadster-Black-Solid-Casual-Shirt-0507-917465003-1-pdp_slider_l.jpg', 1, 0, '2018-02-22 09:42:57'),
(53, 32, 'Roadster-Black-Solid-Casual-Shirt-0507-917465003-2-pdp_slider_l.jpg', 1, 0, '2018-02-22 09:43:12'),
(54, 30, 'U-S--Polo-Assn--Navy-Blue-Solid-Slim-Fit-Casual-Shirt-7209-838752003-1-pdp_slider_l.jpg', 1, 0, '2018-02-22 09:45:15'),
(55, 34, 'Levi-s-Red-Checked-Regular-Fit-Casual-Shirt-0110-801255003-1-pdp_slider_l.jpg', 1, 0, '2018-02-22 09:47:13'),
(56, 26, 'Blackberrys-Beige-Printed-Slim-Fit-Chinos-3850-282585003-1-pdp_slider_l.jpg', 1, 0, '2018-02-22 10:09:47'),
(57, 3, 'Blackberrys-Black-Solid-Skinny-Fit-Chinos-1425-442095003-1-pdp_slider_l.jpg', 1, 0, '2018-02-22 10:12:15'),
(58, 37, 'Tommy-Hilfiger-Khaki-Solid-Slim-Fit-Chinos-1586-138350003-1-pdp_slider_l.jpg', 1, 0, '2018-02-22 10:15:44'),
(59, 3, 'Blackberrys-Black-Solid-Skinny-Fit-Chinos-1425-442095003-1-pdp_slider_l.jpg', 1, 0, '2018-02-22 10:19:18'),
(60, 3, 'Blackberrys-Black-Solid-Skinny-Fit-Chinos-1425-442095003-3-pdp_slider_l.jpg', 1, 0, '2018-02-22 10:24:44'),
(61, 3, 'Blackberrys-Black-Solid-Skinny-Fit-Chinos-1425-442095003-2-pdp_slider_l.jpg', 1, 0, '2018-02-22 10:27:24'),
(62, 20, 'Blackberrys-Black-Solid-Skinny-Fit-Chinos-1425-442095003-3-pdp_slider_l.jpg', 1, 0, '2018-02-22 10:27:49'),
(63, 20, 'Blackberrys-Black-Solid-Skinny-Fit-Chinos-1425-442095003-4-pdp_slider_l.jpg', 1, 0, '2018-02-22 10:28:12'),
(64, 37, 'Blackberrys-Brown-Solid-Slim-Fit-Chinos-3589-771295003-1-pdp_slider_l.jpg', 1, 0, '2018-02-22 10:30:08'),
(65, 3, 'Blackberrys-Black-Solid-Skinny-Fit-Chinos-1425-442095003-4-pdp_slider_l.jpg', 1, 0, '2018-02-22 10:30:41'),
(66, 42, 'John-Players-Khaki-Solid-Regular-Fit-Chinos-9622-652074003-1-pdp_slider_l.jpg', 1, 0, '2018-02-22 10:39:52'),
(67, 42, 'John-Players-Khaki-Solid-Regular-Fit-Chinos-9622-652074003-2-pdp_slider_l.jpg', 1, 0, '2018-02-22 10:40:06'),
(68, 42, 'John-Players-Khaki-Solid-Regular-Fit-Chinos-9622-652074003-3-pdp_slider_l.jpg', 1, 0, '2018-02-22 10:40:21'),
(69, 43, 'Blackberrys-Brown-Solid-Slim-Fit-Chinos-3589-771295003-1-pdp_slider_l.jpg', 1, 0, '2018-02-22 10:44:36'),
(70, 44, '11487324326561-RG-DESIGNERS-Purple--Gold-Toned-Sherwani-7111487324326273-3.jpg', 1, 0, '2018-02-22 10:59:16'),
(71, 44, '11487324326579-RG-DESIGNERS-Purple--Gold-Toned-Sherwani-7111487324326273-2.jpg', 1, 0, '2018-02-22 10:59:32'),
(72, 44, '11487324326593-RG-DESIGNERS-Purple--Gold-Toned-Sherwani-7111487324326273-1.jpg', 1, 0, '2018-02-22 10:59:47'),
(73, 45, '11510318185698-Emuze-Orange--Gold-Toned-Woven-Design-Sherwani-4531510318185519-2.jpg', 1, 0, '2018-02-22 11:04:23'),
(74, 45, '11510318185716-Emuze-Orange--Gold-Toned-Woven-Design-Sherwani-4531510318185519-1.jpg', 1, 0, '2018-02-22 11:04:41'),
(75, 45, '11510318185679-Emuze-Orange--Gold-Toned-Woven-Design-Sherwani-4531510318185519-3.jpg', 1, 0, '2018-02-22 11:05:19'),
(76, 10, '11513421814376-Raymond-Ethnix-Beige--Maroon-Woven-Design-Sherwani-891513421814276-1.jpg', 1, 0, '2018-02-22 11:15:53'),
(77, 10, '11513421814331-Raymond-Ethnix-Beige--Maroon-Woven-Design-Sherwani-891513421814276-4.jpg', 1, 0, '2018-02-22 11:16:12'),
(78, 46, '11513421835116-Raymond-Ethnix-Navy--White-Sherwani-6701513421835024-1.jpg', 1, 0, '2018-02-22 11:18:14'),
(79, 46, '11513421835039-Raymond-Ethnix-Navy--White-Sherwani-6701513421835024-5.jpg', 1, 0, '2018-02-22 11:18:32'),
(80, 46, '11513421835064-Raymond-Ethnix-Navy--White-Sherwani-6701513421835024-4.jpg', 1, 0, '2018-02-22 11:18:58'),
(81, 46, '11512632327996-Manish-Creations-Cream-Coloured-Patterned-Sherwani-5821512632327856-1.jpg', 1, 0, '2018-02-22 11:21:48'),
(82, 46, '11513065373211-Manish-Creations-Men-Sherwani-1451513065373157-5.jpg', 1, 0, '2018-02-22 11:22:04'),
(83, 46, '11513065373233-Manish-Creations-Men-Sherwani-1451513065373157-4.jpg', 1, 0, '2018-02-22 11:22:18'),
(84, 7, '11519024154125-Peter-England-Casuals-Maroon--Black-Woven-Design-Sherwani-7421519024153917-1.jpg', 1, 0, '2018-02-22 11:25:09'),
(85, 50, '11483959145998-SOJANYA-Men-Kurta-Sets-2931483959145882-2.jpg', 1, 0, '2018-02-22 11:35:20'),
(86, 50, '11483959145981-SOJANYA-Men-Kurta-Sets-2931483959145882-3.jpg', 1, 0, '2018-02-22 11:35:41'),
(87, 50, '11483959146017-SOJANYA-Men-Kurta-Sets-2931483959145882-1.jpg', 1, 0, '2018-02-22 11:36:47'),
(88, 51, '11503047434103-Manyavar-Men-Kurta-Sets-4251503047433824-2.jpg', 1, 0, '2018-02-22 11:39:27'),
(89, 51, '11503047434079-Manyavar-Men-Kurta-Sets-4251503047433824-3.jpg', 1, 0, '2018-02-22 11:39:54'),
(90, 52, '11508742203638-na-1541508742203502-2.jpg', 1, 0, '2018-02-22 11:44:13'),
(91, 52, '11508742203617-na-1541508742203502-3.jpg', 1, 0, '2018-02-22 11:44:49'),
(92, 52, '11508742203659-na-1541508742203502-1.jpg', 1, 0, '2018-02-22 11:45:09'),
(93, 54, '11517899045114-Hangup-Men-Blue-Solid-Pathani-Kurta-9511517899044900-1_mini.jpg', 1, 0, '2018-02-22 11:54:10'),
(94, 53, '11505273631681-Deyann-Dupion-Silk-Rust-Kurta-and-Cream-Dhoti-Set-3701505273631486-1_mini.jpg', 1, 0, '2018-02-22 11:54:29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_material`
--

CREATE TABLE IF NOT EXISTS `tbl_product_material` (
  `Mat_codeid` int(11) NOT NULL,
  `Company_code` int(11) NOT NULL,
  `Pro_mat_name` varchar(20) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '1',
  `is_delete` int(11) NOT NULL DEFAULT '0',
  `insert_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product_material`
--

INSERT INTO `tbl_product_material` (`Mat_codeid`, `Company_code`, `Pro_mat_name`, `is_active`, `is_delete`, `insert_datetime`) VALUES
(6, 1, 'Cotton', 1, 0, '2018-02-22 07:35:13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shippingcompany`
--

CREATE TABLE IF NOT EXISTS `tbl_shippingcompany` (
  `Shipping_id` int(11) NOT NULL,
  `Shipping_name` varchar(20) NOT NULL,
  `Address` varchar(240) NOT NULL,
  `Contact` varchar(11) NOT NULL,
  `Area_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '1',
  `is_delete` int(11) NOT NULL DEFAULT '0',
  `insert_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_shippingcompany`
--

INSERT INTO `tbl_shippingcompany` (`Shipping_id`, `Shipping_name`, `Address`, `Contact`, `Area_id`, `is_active`, `is_delete`, `insert_datetime`) VALUES
(2, 'cARGO', 'AHMEDABAD', '9898123456', 1, 1, 0, '2018-02-14 05:13:16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_size`
--

CREATE TABLE IF NOT EXISTS `tbl_size` (
  `Size_id` int(11) NOT NULL,
  `Size` varchar(20) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '1',
  `is_delete` int(11) NOT NULL DEFAULT '0',
  `insert_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_size`
--

INSERT INTO `tbl_size` (`Size_id`, `Size`, `is_active`, `is_delete`, `insert_datetime`) VALUES
(1, 'M', 1, 0, '2018-02-14 05:55:23'),
(2, 'L', 1, 0, '2018-02-14 05:55:23'),
(3, 'XL', 1, 0, '2018-02-14 05:55:33'),
(4, 'S', 1, 0, '2018-02-14 05:13:44'),
(6, '28', 1, 0, '2018-02-20 23:48:41'),
(7, '30', 1, 0, '2018-02-20 23:48:49'),
(8, '32', 1, 0, '2018-02-20 23:49:03'),
(9, '34', 1, 0, '2018-02-20 23:49:11'),
(10, '36', 1, 0, '2018-02-20 23:49:26'),
(11, '38', 1, 0, '2018-02-20 23:49:36'),
(12, 'All', 1, 0, '2018-02-22 02:45:36');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcategory`
--

CREATE TABLE IF NOT EXISTS `tbl_subcategory` (
  `Sub_cat_id` int(11) NOT NULL,
  `Sub_cat_name` varchar(20) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `Sub_cat_imgurl` varchar(250) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '1',
  `is_delete` int(11) NOT NULL DEFAULT '0',
  `insert_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_subcategory`
--

INSERT INTO `tbl_subcategory` (`Sub_cat_id`, `Sub_cat_name`, `cat_id`, `Sub_cat_imgurl`, `is_active`, `is_delete`, `insert_datetime`) VALUES
(7, 'Casual-Shirts', 5, '', 1, 0, '2018-02-22 03:54:43'),
(8, 'Casual-Trousers', 5, '', 1, 0, '2018-02-22 03:55:33'),
(9, 'Kurta', 6, '', 1, 0, '2018-02-20 07:02:48'),
(11, 'Sherwani', 6, '', 1, 0, '2018-02-20 07:05:26'),
(13, 'Shirts', 4, 'Arrow-Blue-Textured-Slim-Fit-Formal-Shirt-6213-139782003-1-pdp_slider_l.jpg', 1, 0, '2018-02-21 06:17:15'),
(14, 'Pents', 4, 'Arrow-Grey-Solid-Slim-Fit-Formal-Trouser-5401-983882003-1-pdp_slider_l.jpg', 1, 0, '2018-02-21 06:18:35');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `User_id` int(11) NOT NULL,
  `User_name` varchar(20) NOT NULL,
  `Dob` date NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `phn_no` int(11) NOT NULL,
  `User_type_id` int(11) NOT NULL,
  `Address` varchar(240) NOT NULL,
  `Area_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '1',
  `is_delete` int(11) NOT NULL DEFAULT '0',
  `insert_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`User_id`, `User_name`, `Dob`, `Gender`, `Email`, `Password`, `phn_no`, `User_type_id`, `Address`, `Area_id`, `is_active`, `is_delete`, `insert_datetime`) VALUES
(1, 'Shivani Mishra', '2018-02-01', 'dff', 'shivani@gmail.com', '1234', 5555545, 0, 'gfgf', 2, 1, 0, '2018-01-31 20:09:02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usertype`
--

CREATE TABLE IF NOT EXISTS `tbl_usertype` (
  `User_type_id` int(11) NOT NULL,
  `User_type` varchar(20) NOT NULL,
  `Company_code` int(11) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '1',
  `is_delete` int(11) NOT NULL DEFAULT '0',
  `insert_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_usertype`
--

INSERT INTO `tbl_usertype` (`User_type_id`, `User_type`, `Company_code`, `is_active`, `is_delete`, `insert_datetime`) VALUES
(1, '-Admin', 12, 1, 0, '2018-02-14 05:28:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_area`
--
ALTER TABLE `tbl_area`
  ADD PRIMARY KEY (`Area_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tbl_city`
--
ALTER TABLE `tbl_city`
  ADD PRIMARY KEY (`City_id`);

--
-- Indexes for table `tbl_color`
--
ALTER TABLE `tbl_color`
  ADD PRIMARY KEY (`Color_id`);

--
-- Indexes for table `tbl_company`
--
ALTER TABLE `tbl_company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`Feedback_id`);

--
-- Indexes for table `tbl_orderdetails`
--
ALTER TABLE `tbl_orderdetails`
  ADD PRIMARY KEY (`Order_id`);

--
-- Indexes for table `tbl_ordermaster`
--
ALTER TABLE `tbl_ordermaster`
  ADD PRIMARY KEY (`Order_Id`);

--
-- Indexes for table `tbl_orderstatus`
--
ALTER TABLE `tbl_orderstatus`
  ADD PRIMARY KEY (`Status_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`Payment_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`Product_id`);

--
-- Indexes for table `tbl_productcompany`
--
ALTER TABLE `tbl_productcompany`
  ADD PRIMARY KEY (`product_company_id`);

--
-- Indexes for table `tbl_product_images`
--
ALTER TABLE `tbl_product_images`
  ADD PRIMARY KEY (`Pro_imageid`);

--
-- Indexes for table `tbl_product_material`
--
ALTER TABLE `tbl_product_material`
  ADD PRIMARY KEY (`Mat_codeid`);

--
-- Indexes for table `tbl_shippingcompany`
--
ALTER TABLE `tbl_shippingcompany`
  ADD PRIMARY KEY (`Shipping_id`);

--
-- Indexes for table `tbl_size`
--
ALTER TABLE `tbl_size`
  ADD PRIMARY KEY (`Size_id`);

--
-- Indexes for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  ADD PRIMARY KEY (`Sub_cat_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`User_id`);

--
-- Indexes for table `tbl_usertype`
--
ALTER TABLE `tbl_usertype`
  ADD PRIMARY KEY (`User_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_area`
--
ALTER TABLE `tbl_area`
  MODIFY `Area_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_city`
--
ALTER TABLE `tbl_city`
  MODIFY `City_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_color`
--
ALTER TABLE `tbl_color`
  MODIFY `Color_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tbl_company`
--
ALTER TABLE `tbl_company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `Feedback_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_orderdetails`
--
ALTER TABLE `tbl_orderdetails`
  MODIFY `Order_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_ordermaster`
--
ALTER TABLE `tbl_ordermaster`
  MODIFY `Order_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_orderstatus`
--
ALTER TABLE `tbl_orderstatus`
  MODIFY `Status_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `Payment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `Product_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `tbl_productcompany`
--
ALTER TABLE `tbl_productcompany`
  MODIFY `product_company_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_product_images`
--
ALTER TABLE `tbl_product_images`
  MODIFY `Pro_imageid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=95;
--
-- AUTO_INCREMENT for table `tbl_product_material`
--
ALTER TABLE `tbl_product_material`
  MODIFY `Mat_codeid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_shippingcompany`
--
ALTER TABLE `tbl_shippingcompany`
  MODIFY `Shipping_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_size`
--
ALTER TABLE `tbl_size`
  MODIFY `Size_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  MODIFY `Sub_cat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_usertype`
--
ALTER TABLE `tbl_usertype`
  MODIFY `User_type_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
