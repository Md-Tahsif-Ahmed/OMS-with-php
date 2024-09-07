-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2023 at 05:55 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oms_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `agreement_details`
--

CREATE TABLE `agreement_details` (
  `id` int(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `type_of_ownership` varchar(255) NOT NULL,
  `owner_description` varchar(255) NOT NULL,
  `monthly_rent` varchar(255) NOT NULL,
  `rent_increase_percentage` varchar(255) NOT NULL,
  `aggre_file` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agreement_details`
--

INSERT INTO `agreement_details` (`id`, `start_date`, `end_date`, `type_of_ownership`, `owner_description`, `monthly_rent`, `rent_increase_percentage`, `aggre_file`, `created_at`, `updated_at`) VALUES
(1, '2023-03-08', '2023-03-08', 'owner', 'name: Mahin Khan\r\nphone: 01954585636\r\nemail: mahin@gmail.com\r\nnid: 234235543566', '', '', '', '2023-01-31 05:56:33', '2023-03-08 05:03:14'),
(2, '2023-03-08', '2023-03-08', 'Rental', 'name: Tahsif khan\r\nphone: 01954585636\r\nemail: tahsif@gmail.com\r\nnid: 234235543566', '40000', '10%', '', '2020-03-04 05:03:14', '2020-03-03 05:03:14'),
(3, '2022-03-01', '2027-03-11', 'rental', 'name: Imran khan\r\nphone: 01954585636\r\nemail: tahsif@gmail.com\r\nnid: 234235543566', '70000', '10%', '', '2023-03-08 05:19:55', '2023-03-08 05:19:55'),
(4, '2023-03-01', '2029-03-01', 'rentral', 'name: Tahsif khan\r\nphone: 01954585636\r\nemail: tahsif@gmail.com\r\nnid: 234235543566', '50000', '7%', '', '2023-03-08 05:28:24', '2023-03-08 05:28:24'),
(5, '2023-03-01', '2030-03-13', 'owner', 'name: Kaosar khan\r\nphone: 01954585636\r\nemail: Kaosar@gmail.com\r\nnid: 234235543566', '', '', '', '2023-03-08 05:37:59', '2023-03-08 05:37:59'),
(6, '2023-03-01', '2023-03-11', 'rental', 'name: mehedi hasan\r\nphone: 0178438484\r\nemail: mehidi@gmail.com\r\nnid: 456651616165', '80000', '4%', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, '2023-03-15', '2031-03-07', 'owner', 'name: nizamuddin Khan\r\nphone: 0154815452\r\nemail: nizam@gmail.com\r\nnid: 78948465456', '84000', '15%', '', '2023-03-08 05:39:51', '2023-03-08 05:39:51'),
(8, '2023-03-02', '0000-00-00', 'rental', 'name: samer Kausar\r\nphone: 014659665454\r\nemail: tahsif@gmail.com\r\nnid: 46545496514', '40000', '8%', '', '2023-03-08 05:40:44', '2023-03-08 05:40:44'),
(9, '2023-03-02', '2028-03-01', 'owner', 'name: AK Azad\r\nphone: 01256444645\r\nemail: azad@gmail.com\r\nnid: 56489464645', '45000', '8%', '', '2023-03-14 09:07:54', '2023-03-20 09:07:54'),
(10, '2023-03-02', '2029-03-09', 'owner', 'name: Sahabuddin\r\nphone: 015544646464\r\nemail: shahabuddin@gmail.com\r\nnid: 546646546545', '', '', '', '2023-03-01 09:09:07', '2023-03-01 09:09:07');

-- --------------------------------------------------------

--
-- Table structure for table `asset_table`
--

CREATE TABLE `asset_table` (
  `id` int(100) NOT NULL,
  `tag_number` varchar(100) NOT NULL,
  `asset_description` varchar(255) NOT NULL,
  `asset_category` varchar(255) NOT NULL,
  `asset_img` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `serial_no` varchar(100) NOT NULL,
  `barcode` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `condition` varchar(255) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  `purchased_date` date NOT NULL,
  `purchased_cost` varchar(100) NOT NULL,
  `payment_type_purchased` varchar(100) NOT NULL,
  `warranty` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `branch_id` int(1) DEFAULT NULL,
  `status_request` varchar(100) NOT NULL COMMENT '1=pending,2=approved'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asset_table`
--

INSERT INTO `asset_table` (`id`, `tag_number`, `asset_description`, `asset_category`, `asset_img`, `model`, `serial_no`, `barcode`, `color`, `condition`, `vendor`, `purchased_date`, `purchased_cost`, `payment_type_purchased`, `warranty`, `created_at`, `updated_at`, `branch_id`, `status_request`) VALUES
(1, 'AC-2', 'Gree GS-18CZ/CT split type air conditioner ', 'Electronics', 'ac-4.png', 'GS-18CZ/CT', '12455205002323', 'ABC-abc-1234', 'White', 'AC Not Turning On', 'Rangs', '2023-03-08', '50000', 'Cash', '2 years', '2023-01-31 05:56:33', '2023-03-08 05:03:14', 5, '1'),
(2, 'AC-4', 'Gree GS-18CZ/CT split type air conditioner ', 'Electronics', 'ac-1.png', 'GS-18CZ/CT', '16565616156', 'ABC-abc-1235', 'White', 'not working', 'Rangs', '2018-03-15', '40000', 'Cash', '2 years', '2020-03-04 05:03:14', '2020-03-03 05:03:14', 6, '1'),
(3, 'AC-10', 'Gree GS-18CZ/CT split type air conditioner ', 'Electronics', 'ac-2.jpg', 'GS-18CZ/CT', '41855416151851', 'ABC-abc-1234', 'black', 'Good', 'Rangs', '2022-03-16', '60000', 'Card', '4 years', '2023-03-08 06:12:38', '2023-03-08 06:12:38', 7, '1'),
(4, 'AC-2', 'General 2.0 Ton AC ASGA-24SEFT', 'Electronics', 'ac-3.jpg', 'ASGA-24SEFT', '486549844161565', 'ABC-abc-1234', 'Red', 'Good', 'Esquire Electronics', '2021-03-18', '96,900', 'cash', '2 years', '2020-03-04 05:03:14', '2020-03-03 05:03:14', 8, '1'),
(5, 'pc-3', 'Intel 10th Gen Core i5-10400 Desktop PC', 'Electronic ', 'pc-1.jpg', 'Intel 10th Gen', '65494825266', 'ABC-abc-1268', 'black', 'Keyboard is not working', 'Star Tech', '2021-03-10', '35,419 taka', 'cash', '4 years', '2023-01-31 05:56:33', '2023-03-08 05:03:14', 2, '1'),
(6, 'PC-2', 'AMD Ryzen 5 5600G Desktop PC', 'Electronics', 'pc-2.jpg', 'AMD Ryzen 5 5600G', '47844694616541', 'ABC-abc-1267', 'black', 'Good', 'Ryans computers', '2023-03-08', '55,220 taka', 'cash', '4 years', '2020-03-04 05:03:14', '2020-03-03 05:03:14', 7, '1'),
(7, 'Sofa-2', 'HATIL Sofa Moseley-281', 'Furniture', 'sofa-1.jpg', 'Moseley-281', '7120101012', 'ABC-abc-1278', 'blue', 'Good', 'Hatil', '2023-03-08', '51,400 taka', 'cash', '5 years', '2023-01-31 05:56:33', '2023-03-08 05:03:14', 2, '1'),
(8, 'Sofa-3', 'HATIL Sofa Durian-266', 'Furniture', 'sofa-2.jpg', 'Durian-266', '4616546165416', 'ABC-abc-2145', 'Brown', 'Good', 'Hatil', '2023-03-08', '44,750 Taka', 'cash', '4 years', '2020-03-04 05:03:14', '2020-03-03 05:03:14', 8, '1'),
(9, 'Rack-3', 'Premium Quality Double pole telescopic folding clothes rack with shelves', 'Furniture', 'rack-1.png', 'Double pole telescopic folding', '45666656', 'ABC-abc-45461', 'Black', 'Broken', 'Daraz', '2023-03-08', '1350 taka', 'cash', '1 year', '2023-01-31 05:56:33', '2023-03-08 05:03:14', 2, '1'),
(10, 'light-5', 'WLED-EL-FC-12WE27', 'Ambient', 'l-1.png', 'WLED-EL-FC-12WE27', '4568541522', 'ABC-abc-7584', 'white', 'Not working', 'Walton', '2022-03-16', '885 taka', 'cash', '2 years', '2023-03-08 05:16:59', '2023-03-08 05:16:59', 7, '1'),
(15, 'ac-8', 'details', 'Air Condition', 'ac-5.png', 'air1234', '123123', '45645698', 'Asus', 'Main', 'Red', '0000-00-00', 'Test', '2023-03-09', '21435', '0000-00-00 00:00:00', '2023-03-31 18:00:00', 9, '1'),
(18, 'Glass-4', 'Details12', 'Glass', 'g-1.jpg', 'g1212', 'gs1212', 'b1212', 'Red', 'new', 'Test', '2023-03-10', '21435', 'Cheque', '2023-03-09', NULL, NULL, 12, '1'),
(26, 'leptop2', 'Leptop', 'Computer', 'laptop-1.jpg', 'core i7', '12', '432', 'blue', 'new', 'HP', '2023-03-13', '600000', 'Cash', '2025-02-12', NULL, NULL, 12, '1'),
(27, 'pc', 'Leptop', 'Computer', 'pc-3.jpg', 'core i5', '13', '32', 'black', 'old', 'hossain', '2023-03-12', '30000', 'Cash', '2023-08-11', NULL, NULL, 2, '1'),
(28, 'glass-3', 'glass', 'Glass', 'g-2.png', 'test12', '1213213', '21312', 'red', 'bd', 'dde', '2023-03-12', '123', 'Cash', '2023-04-01', NULL, NULL, 12, '1'),
(29, 'laptop-1', 'Leptop', 'Computer', 'laptop-2.jpg', 'core i5', '11', '1234', 'grey', 'old', 'rayans', '2023-03-12', '50000', 'Cheque', '2023-03-13', NULL, NULL, 3, '1');

-- --------------------------------------------------------

--
-- Table structure for table `asset_transfer`
--

CREATE TABLE `asset_transfer` (
  `id` int(11) NOT NULL,
  `tag_number` varchar(100) NOT NULL,
  `branch_from` varchar(255) NOT NULL,
  `branch_to` varchar(255) NOT NULL,
  `transfer_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asset_transfer`
--

INSERT INTO `asset_transfer` (`id`, `tag_number`, `branch_from`, `branch_to`, `transfer_date`) VALUES
(1, '1', '5', '9', '2023-03-16 18:00:00'),
(2, '1', '5', '7', '2023-03-17 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_table`
--

CREATE TABLE `attendance_table` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `attendance_date` date NOT NULL,
  `entry_time` time NOT NULL,
  `exit_time` time NOT NULL,
  `status` varchar(255) NOT NULL COMMENT 'Present=1,Late=2,Absent=3'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance_table`
--

INSERT INTO `attendance_table` (`id`, `user_id`, `branch`, `attendance_date`, `entry_time`, `exit_time`, `status`) VALUES
(1, 1, 'Lubnan Baily Road', '2023-03-13', '00:00:00', '00:00:00', '1'),
(2, 2, 'Infinity New Market', '2023-03-13', '19:21:31', '23:21:31', '1'),
(3, 3, 'Lubnan Khilgaon', '2023-03-13', '09:29:59', '00:00:00', '2'),
(4, 4, 'Lubnan Baily Road', '2023-03-13', '20:18:58', '25:18:58', '2'),
(5, 5, 'Infinity Basundhara City', '2023-03-13', '22:22:31', '24:22:31', '1\n'),
(6, 1, 'Lubnan Baily Road', '2023-03-12', '17:26:34', '23:26:34', '2'),
(7, 2, 'Infinity New Market', '2023-03-12', '18:28:28', '17:28:28', '2'),
(8, 3, 'Lubnan Khilgaon', '2023-03-12', '21:28:28', '23:28:28', '1'),
(9, 4, 'Lubnan Baily Road', '2023-03-12', '11:28:28', '23:28:28', '2'),
(10, 5, 'Infinity Basundhara City', '2023-03-12', '00:00:00', '00:00:00', '2');

-- --------------------------------------------------------

--
-- Table structure for table `branches_table`
--

CREATE TABLE `branches_table` (
  `id` int(100) NOT NULL,
  `user_id` int(10) NOT NULL,
  `br_name` varchar(100) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `Brand id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branches_table`
--

INSERT INTO `branches_table` (`id`, `user_id`, `br_name`, `status`, `created_at`, `updated_at`, `images`, `Brand id`) VALUES
(1, 1, 'Head Office', '1', '2023-03-06 18:00:00', '2023-03-06 18:00:00', NULL, 1),
(2, 2, 'Jamalpur Branch', '1', '2023-03-06 18:00:00', '2023-03-06 18:00:00', NULL, 1),
(3, 3, 'Mirpur branch', '1', '2023-03-08 05:16:59', '2023-03-08 05:16:59', NULL, 1),
(4, 4, 'Baily Road ', '1', '2023-03-08 05:16:59', '2023-03-08 05:16:59', NULL, 1),
(5, 6, 'Bashundhara City', '1', '2023-03-08 05:19:55', '2023-03-08 05:19:55', NULL, 1),
(6, 5, 'fazie Rabbi ', '1', '2023-03-08 05:24:55', '2023-03-08 05:24:55', NULL, 1),
(7, 8, 'Shimanto Square Shop', '1', '2020-03-04 05:03:14', '2020-03-03 05:03:14', NULL, 1),
(8, 7, 'Probal housing ring road', '1', '2023-03-08 05:19:55', '2023-03-08 05:19:55', NULL, 1),
(9, 10, 'POLWEL CARNATION Shop', '1', '2023-03-08 05:28:24', '2023-03-08 05:28:24', NULL, 1),
(10, 9, 'Rupayan Golden Age', '1', '2023-01-31 05:56:33', '2023-03-08 05:03:14', NULL, 2),
(11, 12, 'Mirpur Road', '1', '2020-03-04 05:03:14', '2020-03-03 05:03:14', NULL, 2),
(12, 11, 'Begum Rokeya Avenue', '1', '2023-03-08 05:19:55', '2023-03-08 05:19:55', NULL, 2),
(13, 15, 'Modhumoti Concord plaza, Banani', '1', '2023-03-08 05:28:24', '2023-03-08 05:28:24', NULL, 2),
(14, 13, 'Gulshan pink city', '1', '2023-01-31 05:56:33', '2023-03-08 05:03:14', NULL, 3),
(15, 14, 'Jamuna Future park', '1', '2020-03-04 05:03:14', '2020-03-03 05:03:14', NULL, 3),
(16, 20, 'Bashundhara city', '1', '2023-03-08 05:19:55', '2023-03-08 05:19:55', NULL, 3),
(17, 16, 'Baily road', '1', '2023-03-08 05:28:24', '2023-03-08 05:28:24', NULL, 3),
(18, 18, 'Bazar road, Joydebpur', '1', '2023-03-08 05:37:59', '2023-03-08 05:37:59', NULL, 3),
(19, 19, 'Kazi Tower, inner circular road', '1', '2023-03-08 05:39:02', '2023-03-08 05:39:02', NULL, 3),
(20, 21, 'Bashundhara Road', '1', '2023-03-08 05:39:51', '2023-03-08 05:39:51', NULL, 3),
(21, 17, 'Wari, Ranking Street', '1', '2023-03-08 05:40:44', '2023-03-08 05:40:44', NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `branding_marketing_table`
--

CREATE TABLE `branding_marketing_table` (
  `id` int(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branding_marketing_table`
--

INSERT INTO `branding_marketing_table` (`id`, `title`, `categories`, `location`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Eid Offer', 'banner', 'Gulshan', 0, '2023-01-31 05:56:33', '2023-03-08 05:03:14'),
(2, 'Summer sale', 'Led Display', 'Banani', 0, '2020-03-04 05:03:14', '2020-03-03 05:03:14'),
(3, 'Winter sale 50% off', 'Sign board', 'Motijheel', 0, '2023-03-08 05:19:55', '2023-03-08 05:19:55'),
(4, 'test', 'tet', 'test', 0, '2023-03-11 06:18:50', NULL),
(5, 'Ramadan Offer ', 'Banner', 'Rampura', 0, '2023-03-11 06:19:04', NULL),
(6, 'summer', 'banner', 'Uttara', 0, '2023-03-12 01:46:59', NULL),
(7, '', 'banner', '', 0, '2023-03-13 07:21:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brand_table`
--

CREATE TABLE `brand_table` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand_table`
--

INSERT INTO `brand_table` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Lubnan', '1', '2023-03-08 05:03:14', '2023-03-08 05:03:14'),
(2, 'Richman', '1', '2020-03-04 05:03:14', '2020-03-03 05:03:14'),
(3, 'iNFINITY Mega Mall', '1', '2016-03-09 05:06:20', '2016-03-09 05:06:20');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Electronics', '1', '2023-01-31 05:56:33', '2023-03-08 05:03:14'),
(2, 'Furnitures', '1', '2020-03-04 05:03:14', '2020-03-03 05:03:14'),
(3, 'Ambient', '1', '2023-03-08 05:19:55', '2023-03-08 05:19:55'),
(4, 'Computer', '1', NULL, NULL),
(5, 'Air Condition', '1', NULL, NULL),
(6, 'Glass', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee_table`
--

CREATE TABLE `employee_table` (
  `id` int(100) NOT NULL,
  `employee_name` varchar(255) NOT NULL,
  `employee_mail` varchar(255) NOT NULL,
  `employee_phone` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `joining_date` date NOT NULL,
  `positon` varchar(255) NOT NULL,
  `manager_name` varchar(255) NOT NULL,
  `manager_mail` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_table`
--

INSERT INTO `employee_table` (`id`, `employee_name`, `employee_mail`, `employee_phone`, `gender`, `joining_date`, `positon`, `manager_name`, `manager_mail`, `created_at`, `updated_at`) VALUES
(1, 'Tonmoy', 'tonmoy@gmail.com', '0195486532', 'male', '2023-03-02', 'sale\'s man', 'Mazharul', 'mazharul@gmail.com', '2023-01-31 05:56:33', '2023-03-08 05:03:14'),
(2, 'Udoy', 'udoy@gmail.com', '01574894954', 'male', '2023-03-09', 'sale\'s man', 'Mazharul', 'mazharul@gmail.com', '2020-03-04 05:03:14', '2020-03-03 05:03:14'),
(3, 'Joy', 'joy@gmail.com', '014654464', 'male', '2023-03-09', 'sale\'s man', 'Joynul Abedin', 'joynul@gmail.com', '2023-03-08 05:19:55', '2023-03-08 05:19:55'),
(4, 'sumi', 'sumi@gmail.com', '0156554456', 'female', '2022-03-03', 'sale\'s man', 'Ibnul', 'ibnul@gmail.com', '2023-03-08 05:28:24', '2023-03-08 05:28:24'),
(5, 'Imran', 'imran@gmail.com', '0154655455', 'female', '2023-03-16', 'sale\'s man', 'Tonmoy', 'tonmoy@gmail.com', '2023-03-08 05:37:59', '2023-03-08 05:37:59');

-- --------------------------------------------------------

--
-- Table structure for table `hr_table`
--

CREATE TABLE `hr_table` (
  `id` int(100) NOT NULL,
  `hr_name` varchar(255) NOT NULL,
  `hr_outlet` varchar(255) NOT NULL,
  `hr_info` varchar(255) NOT NULL,
  `hr_phone` varchar(255) NOT NULL,
  `hr_mail` varchar(255) NOT NULL,
  `hr_img` varchar(255) NOT NULL,
  `hr_joining_date` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hr_table`
--

INSERT INTO `hr_table` (`id`, `hr_name`, `hr_outlet`, `hr_info`, `hr_phone`, `hr_mail`, `hr_img`, `hr_joining_date`, `gender`, `created_at`, `updated_at`) VALUES
(1, 'Tonmoy', 'Bashundhara City', 'Address: 45/8 GulshanNid:455645456465465', '0159845546', 'rahim@gmail.com', '', '2023-03-09', 'male', '2023-03-08 05:16:59', '2023-03-08 06:12:38'),
(2, 'Kajal', 'Mirpur branch', 'Address: 45/8 GulshanNid:455645456465465', '0145586644415', 'uzzal@gmail.com', '', '2018-03-21', 'male', '2023-03-08 05:16:59', '2023-03-08 05:16:59'),
(3, 'Kamal', 'Mirpur Road', 'Address: 45/8 banani\r\nNid:4355666546464', '015487897994', 'kamal@gmail.com', '', '2023-03-21', 'male', '2023-03-08 05:19:55', '2023-03-08 05:19:55'),
(4, 'Sultana', 'Gulshan pink city', 'Address: 45/9 BananiNid:4355666546464', '0157896646', 'farzana@gmail.com', '', '2023-03-10', 'female', '2023-03-08 05:28:24', '2023-03-08 05:28:24'),
(5, 'Mahin', 'Wari', 'e4edfewfef', '0123546987', 'mahin@gmail.com', '', '0000-00-00', 'male', NULL, NULL),
(6, '', '', '', '', '', '', '0000-00-00', '', NULL, NULL),
(7, 'Mahin', 'Wari', 'tiktyu', '0123546987', 'mahin@gmail.com', '', '0000-00-00', 'male', NULL, NULL),
(8, 'Tabassum', 'Wari', 'sfewgeshrt', '0123546987', 'mahin@gmail.com', '', '0000-00-00', 'female', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `maintenance_log`
--

CREATE TABLE `maintenance_log` (
  `id` int(100) NOT NULL,
  `asset_id` varchar(100) NOT NULL,
  `process_date` date NOT NULL,
  `solve_date` date NOT NULL,
  `disposal_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `maintenance_log`
--

INSERT INTO `maintenance_log` (`id`, `asset_id`, `process_date`, `solve_date`, `disposal_date`, `created_at`, `updated_at`) VALUES
(1, '4', '2023-03-02', '2023-03-09', '2023-03-10', '2023-03-29 09:38:06', '2023-03-17 09:38:06'),
(2, '9', '2023-03-09', '2023-03-09', '2023-03-09', '2023-03-09 09:38:06', '2023-03-09 09:38:06'),
(3, '10', '2023-03-10', '2023-03-12', '2023-03-13', '2023-03-14 09:39:49', '2023-03-14 09:39:49'),
(4, '6', '2023-03-01', '2023-03-02', '0000-00-00', '2023-03-17 09:40:29', '2023-03-17 09:40:29');

-- --------------------------------------------------------

--
-- Table structure for table `maintenance_table`
--

CREATE TABLE `maintenance_table` (
  `id` int(100) NOT NULL,
  `brand_id` int(10) NOT NULL,
  `branch_id` int(100) NOT NULL,
  `category_id` int(10) NOT NULL,
  `asset_id` int(100) NOT NULL,
  `request_date` date NOT NULL,
  `status_date` date NOT NULL,
  `vendor` varchar(255) NOT NULL,
  `services_charge` varchar(255) NOT NULL,
  `isuee_date` date NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `status_request` varchar(100) NOT NULL COMMENT '1=request,2=process,3=solve,4=disposal',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `maintenance_table`
--

INSERT INTO `maintenance_table` (`id`, `brand_id`, `branch_id`, `category_id`, `asset_id`, `request_date`, `status_date`, `vendor`, `services_charge`, `isuee_date`, `remarks`, `status_request`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 1, 4, '2023-03-01', '2023-03-10', 'Rangs', '2000', '2023-03-14', 'solved', '3', '2023-03-14 09:44:19', '2023-03-24 09:44:19'),
(2, 2, 8, 2, 4, '2023-03-02', '2023-03-09', 'Esquire Electronics', '20', '2023-03-14', 'solved', '3', '2023-03-08 09:44:19', '2023-03-08 09:44:19'),
(3, 2, 8, 3, 4, '2023-03-09', '2023-03-09', 'Esquire Electronics', '3000', '2023-03-14', 'solved', '3', '2023-03-08 05:19:55', '2023-03-08 05:19:55'),
(6, 1, 1, 2, 1, '2023-03-08', '0000-00-00', 'Test', '30001', '2023-03-10', 'Test data', '3', '2023-03-08 18:00:00', NULL),
(7, 2, 17, 1, 7, '2023-03-09', '0000-00-00', 'vsl', '7000', '2023-03-09', 'Maintenance is completed', '1', '2023-03-08 18:00:00', NULL),
(8, 2, 1, 2, 7, '2023-03-09', '0000-00-00', 'Test', '3000', '2023-03-09', 'Log data', '4', '2023-03-08 18:00:00', NULL),
(9, 3, 2, 1, 2, '2023-03-10', '0000-00-00', 'Test', '3000', '2023-03-09', 'log data', '3', '2023-03-08 18:00:00', NULL),
(10, 1, 2, 1, 5, '2023-03-22', '0000-00-00', 'fdsfd', '123547', '2023-03-13', 'sadasd', '1', NULL, NULL),
(11, 2, 4, 2, 0, '2023-03-12', '0000-00-00', 'fdsfd', '123547', '2023-03-12', 'xsada', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `outlet_table`
--

CREATE TABLE `outlet_table` (
  `id` int(100) NOT NULL,
  `outlet_name` varchar(255) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `outlet_location` varchar(255) NOT NULL,
  `outlet_size` varchar(100) NOT NULL,
  `renewal_date` date NOT NULL,
  `agreement_period` int(11) NOT NULL,
  `monthly_rent` decimal(10,0) NOT NULL,
  `close_day` varchar(100) NOT NULL,
  `outlet_img` varchar(255) NOT NULL,
  `outlet_manager` varchar(100) NOT NULL,
  `manager_phone` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `outlet_table`
--

INSERT INTO `outlet_table` (`id`, `outlet_name`, `brand_name`, `outlet_location`, `outlet_size`, `renewal_date`, `agreement_period`, `monthly_rent`, `close_day`, `outlet_img`, `outlet_manager`, `manager_phone`, `created_at`, `updated_at`) VALUES
(1, 'Mirpur branch', 'Lubnan', 'Mirpur', '1200 sq feet', '2024-12-31', 1, '32000', 'Tuesday', '2.jpeg', 'Mazahar', '01854525632', '2023-01-31 05:56:33', '2023-03-08 05:03:14'),
(2, 'Baily Road ', 'Lubnan', 'Baily road', '1300 s1 feet', '2025-10-01', 2, '45000', 'Thursday', '2.jpeg', 'Karim', '01547896332', '2020-03-04 05:03:14', '2020-03-03 05:03:14'),
(3, 'Bashundhara city', 'iNFINITY', 'Pantha path', '700 sq feet', '2024-02-13', 1, '50000', 'Tuesday', '1.jpg', 'Udoy', '016454846454', '2023-03-08 05:19:55', '2023-03-08 05:19:55'),
(4, 'Jamuna Future park', 'iNFINITY', 'Baridhara', '2000 sq feet', '2028-12-31', 5, '49000', 'Wednesday', '1.jpg', 'Karim', '018455665465', '2023-03-08 05:28:24', '2023-03-17 09:40:29'),
(5, 'Mirpur Road', 'Richman', 'Mirpur', '1200 sq feet', '2023-12-01', 0, '35000', 'Friday', '3.jpg', 'Kamrul', '01555665456', '2023-03-08 05:37:59', '2023-03-08 05:37:59');

-- --------------------------------------------------------

--
-- Table structure for table `product_table`
--

CREATE TABLE `product_table` (
  `id` int(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_quantity` varchar(100) NOT NULL,
  `item_count` varchar(100) NOT NULL,
  `item_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_table`
--

INSERT INTO `product_table` (`id`, `product_name`, `item_name`, `item_quantity`, `item_count`, `item_date`, `created_at`, `updated_at`, `price`) VALUES
(1, 'Panjabi', '', '500', '', '2023-03-08', '2023-03-03 10:29:26', '2023-03-03 10:29:26', '1500.00'),
(2, 'shirt', '', '500', '', '2023-03-08', '2020-03-04 05:03:14', '2020-03-03 05:03:14', '2000.00'),
(3, 'Waistcoats', '', '72', '', '2023-03-08', '2023-03-08 05:19:55', '2023-03-08 05:19:55', '3500.00'),
(4, 'Sherwani', '', '40', '', '2023-03-08', '2023-03-08 05:28:24', '2023-03-08 05:28:24', '5000.00'),
(5, 'T-shirt', '', '56', '', '2023-03-01', '2023-03-08 05:37:59', '2023-03-08 05:37:59', '2000.00'),
(6, 'Panjabis', '', '500', '', '2023-03-08', '2023-03-08 05:39:02', '2023-03-08 05:39:02', '1000.00');

-- --------------------------------------------------------

--
-- Table structure for table `sales_report`
--

CREATE TABLE `sales_report` (
  `id` int(100) NOT NULL,
  `brand_id` varchar(100) NOT NULL,
  `branch_id` varchar(100) NOT NULL,
  `outlet_id` varchar(100) NOT NULL,
  `file_upload_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `quantity` int(10) NOT NULL,
  `product_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales_report`
--

INSERT INTO `sales_report` (`id`, `brand_id`, `branch_id`, `outlet_id`, `file_upload_date`, `created_at`, `updated_at`, `quantity`, `product_id`) VALUES
(1, '1', '1', '1', '2023-03-12 16:08:20', '2023-03-01 15:29:25', '2023-03-01 15:29:25', 6, 1),
(2, '2', '2', '2', '2023-03-12 16:08:43', '2023-03-01 15:29:25', '2023-03-01 15:29:25', 6, 2),
(3, '3', '3', '3', '2023-03-12 16:08:55', '2023-03-01 15:31:07', '2023-03-01 15:31:07', 3, 3),
(4, '1', '1', '1', '2023-03-12 16:09:13', '2023-03-01 15:31:40', '2023-03-01 15:31:40', 4, 4),
(5, '2', '2', '2', '2023-03-12 16:09:25', '2023-03-01 15:32:12', '2023-03-01 15:32:12', 5, 5),
(6, '3', '3', '3', '2023-03-12 16:09:33', '2023-03-01 15:32:36', '2023-03-01 15:32:36', 6, 6),
(7, '3', '3', '3', '2023-03-12 16:10:57', '2023-03-02 15:33:03', '2023-03-02 15:33:03', 7, 4),
(8, '2', '2', '2', '2023-03-12 16:10:54', '2023-03-03 15:33:29', '2023-03-03 15:33:29', 7, 3),
(9, '2', '2', '2', '2023-03-12 16:10:51', '2023-03-01 15:33:55', '2023-03-12 15:33:55', 7, 2),
(10, '1', '1', '1', '2023-03-12 16:10:47', '2023-03-04 15:34:19', '2023-03-04 15:34:19', 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tag_list`
--

CREATE TABLE `tag_list` (
  `id` int(11) NOT NULL,
  `tag_name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tag_list`
--

INSERT INTO `tag_list` (`id`, `tag_name`) VALUES
(1, 'AC'),
(2, 'PC'),
(3, 'Sofa'),
(4, 'Rack'),
(5, 'Light'),
(6, 'Glass');

-- --------------------------------------------------------

--
-- Table structure for table `tag_log`
--

CREATE TABLE `tag_log` (
  `id` int(100) NOT NULL,
  `tag_number` varchar(100) NOT NULL,
  `status_type` varchar(100) NOT NULL,
  `status_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tag_log`
--

INSERT INTO `tag_log` (`id`, `tag_number`, `status_type`, `status_date`, `created_at`, `updated_at`) VALUES
(1, '2', 'Maintance Request', '0000-00-00 00:00:00', NULL, NULL),
(2, '', 'Request', '0000-00-00 00:00:00', NULL, NULL),
(3, '', 'Process', '0000-00-00 00:00:00', NULL, NULL),
(4, '7', 'Process', '2023-03-08 19:06:07', NULL, NULL),
(5, '7', 'Request', '2023-03-08 19:06:52', NULL, NULL),
(6, '7', 'Process', '2023-03-08 19:07:08', NULL, NULL),
(7, '7', 'Process', '2023-03-08 19:08:12', NULL, NULL),
(8, '4', 'Process', '2023-03-12 04:10:22', NULL, NULL),
(9, '4', 'Process', '2023-03-12 04:10:43', NULL, NULL),
(10, '4', 'Complete', '2023-03-12 04:11:09', NULL, NULL),
(11, '5', 'Request', '2023-03-12 07:49:34', NULL, NULL),
(12, 'Sofa-3', 'Request', '2023-03-12 07:51:25', NULL, NULL),
(13, '', 'Approved', '2023-03-16 06:42:38', NULL, NULL),
(14, '', 'Approved', '2023-03-16 06:45:51', NULL, NULL),
(15, '1', 'Complete', '2023-03-16 02:33:36', NULL, NULL),
(16, '7', 'Request', '2023-03-16 03:13:43', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `id` int(100) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `ph_number` varchar(30) NOT NULL,
  `role` varchar(60) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`id`, `branch_id`, `name`, `email`, `password`, `address`, `ph_number`, `role`, `created_at`, `updated_at`, `user_image`) VALUES
(1, 1, 'admin', 'admin@gmail.com', '123456', 'Dhaka', '01875510694', '1', '2023-03-06 18:00:00', '2023-03-06 18:00:00', 'user2-160x160.jpg'),
(2, 2, 'kawsar khan', 'kawsar@gmail.com', '123456', 'Navana Baily Star, Baily Road, Dhaka', '01966773062', '2', '2023-03-06 18:00:00', '2023-03-06 18:00:00', 'user1-128x128.jpg'),
(3, 0, 'Shahabuddin', 'shahabuddin@gmail.com', '123456', '78/2, Shiddheshori, Dhaka', '01544498498', '3', '2023-01-31 05:56:33', '2023-03-08 05:03:14', 'user8-128x128.jpg'),
(4, 0, 'Tarek', 'tarek@gmail.com', '123456', '98/3, Mirpur, Dhaka', '0185546564', 'HR', '2020-03-04 05:03:14', '2020-03-03 05:03:14', 'user4-128x128.jpg'),
(5, 0, 'Joynul', 'joynul@gmail.com', '123456', '48/7, Banani', '015654648546', 'Manager', '2023-03-08 05:19:55', '2023-03-08 05:19:55', 'user3-128x128.jpg'),
(6, 0, 'Siam Ahmed', 'siam@gmail.com', '123456', '87/7, Gandaria, Dhaka', '015479844646', 'HR', '2023-03-08 05:28:24', '2023-03-08 05:28:24', 'user6-128x128.jpg'),
(7, 0, 'Samer', 'samer@gmail.com', '123456', '125/6, Banasree, Dhaka', '0154855543', 'Head office', '2023-03-08 05:37:59', '2023-03-08 05:37:59', 'user7-128x128.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agreement_details`
--
ALTER TABLE `agreement_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asset_table`
--
ALTER TABLE `asset_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asset_transfer`
--
ALTER TABLE `asset_transfer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance_table`
--
ALTER TABLE `attendance_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches_table`
--
ALTER TABLE `branches_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branding_marketing_table`
--
ALTER TABLE `branding_marketing_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand_table`
--
ALTER TABLE `brand_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_table`
--
ALTER TABLE `employee_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hr_table`
--
ALTER TABLE `hr_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maintenance_log`
--
ALTER TABLE `maintenance_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maintenance_table`
--
ALTER TABLE `maintenance_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outlet_table`
--
ALTER TABLE `outlet_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_table`
--
ALTER TABLE `product_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_report`
--
ALTER TABLE `sales_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag_list`
--
ALTER TABLE `tag_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag_log`
--
ALTER TABLE `tag_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agreement_details`
--
ALTER TABLE `agreement_details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `asset_table`
--
ALTER TABLE `asset_table`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `asset_transfer`
--
ALTER TABLE `asset_transfer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `attendance_table`
--
ALTER TABLE `attendance_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `branches_table`
--
ALTER TABLE `branches_table`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `branding_marketing_table`
--
ALTER TABLE `branding_marketing_table`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `brand_table`
--
ALTER TABLE `brand_table`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee_table`
--
ALTER TABLE `employee_table`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hr_table`
--
ALTER TABLE `hr_table`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `maintenance_log`
--
ALTER TABLE `maintenance_log`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `maintenance_table`
--
ALTER TABLE `maintenance_table`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `outlet_table`
--
ALTER TABLE `outlet_table`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_table`
--
ALTER TABLE `product_table`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sales_report`
--
ALTER TABLE `sales_report`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tag_list`
--
ALTER TABLE `tag_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tag_log`
--
ALTER TABLE `tag_log`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
