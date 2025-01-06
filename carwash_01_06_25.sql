-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2025 at 02:13 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carwash`
--
CREATE DATABASE IF NOT EXISTS `carwash` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `carwash`;

-- --------------------------------------------------------

--
-- Table structure for table `booking_tb`
--

CREATE TABLE `booking_tb` (
  `booking_id` int(11) NOT NULL,
  `booking_services_id` int(11) NOT NULL,
  `booking_fullname` varchar(50) NOT NULL,
  `booking_email` varchar(50) NOT NULL,
  `booking_number` bigint(20) NOT NULL,
  `booking_date` date NOT NULL DEFAULT current_timestamp(),
  `booking_time` time NOT NULL DEFAULT current_timestamp(),
  `booking_status` varchar(50) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='booking_time';

--
-- Dumping data for table `booking_tb`
--

INSERT INTO `booking_tb` (`booking_id`, `booking_services_id`, `booking_fullname`, `booking_email`, `booking_number`, `booking_date`, `booking_time`, `booking_status`) VALUES
(1, 1, 'as', 'as@gmail.com', 132564, '2024-12-17', '05:12:11', 'approved'),
(41, 1, 'dsc', 'tgdft@ghdf.com', 1234, '2024-12-11', '15:15:00', 'approved'),
(42, 1, 'dsc', 'tgdft@ghdf.com', 9654457672, '2024-12-13', '15:15:00', 'approved'),
(43, 1, 'dsc', 'juan@carlos.com', 9654457672, '2024-12-11', '03:20:00', 'approved'),
(44, 1, 'catanoy', 'tgdft@ghdf.com', 9654457672, '2024-12-05', '15:19:00', 'approved'),
(45, 13, 'catanoy', 'james@poto.com', 0, '2024-12-18', '12:33:00', 'approved'),
(46, 14, 'james', 'james@poto.com', 0, '2025-01-01', '12:00:00', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `clients_tb`
--

CREATE TABLE `clients_tb` (
  `client_id` int(11) NOT NULL,
  `client_fb_id` int(11) NOT NULL,
  `client_date` date NOT NULL DEFAULT current_timestamp(),
  `client_name` varchar(50) NOT NULL,
  `client_feedback` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_tb`
--

CREATE TABLE `contact_tb` (
  `cont_id` int(11) NOT NULL,
  `cont_wlcm_heading` varchar(500) NOT NULL,
  `cont_message` varchar(500) NOT NULL,
  `cont_sec_heading` varchar(500) NOT NULL,
  `cont_address` varchar(100) NOT NULL,
  `cont_email` varchar(50) NOT NULL,
  `cont_number` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_tb`
--

INSERT INTO `contact_tb` (`cont_id`, `cont_wlcm_heading`, `cont_message`, `cont_sec_heading`, `cont_address`, `cont_email`, `cont_number`) VALUES
(1, 'hello\r\n', 'hello', 'Brgy. Pawing, Near @ Andoks', 'Palo, Leyte', 'Quickwashing@gmail.com', 639458869321);

-- --------------------------------------------------------

--
-- Table structure for table `feedback_tb`
--

CREATE TABLE `feedback_tb` (
  `fb_id` int(11) NOT NULL,
  `fb_name` varchar(50) NOT NULL,
  `fb_email` varchar(50) NOT NULL,
  `fb_description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `location_tb`
--

CREATE TABLE `location_tb` (
  `loc_id` int(11) NOT NULL,
  `loc_fb_id` int(11) NOT NULL,
  `loc_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_tb`
--

CREATE TABLE `product_tb` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(50) NOT NULL,
  `prod_description` varchar(500) NOT NULL,
  `prod_category` varchar(50) NOT NULL,
  `prod_item` varchar(100) NOT NULL,
  `prod_price` int(11) NOT NULL,
  `prod_quatity` int(11) NOT NULL,
  `prod_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservation_tb`
--

CREATE TABLE `reservation_tb` (
  `res_id` int(11) NOT NULL,
  `res_fb_id` int(11) NOT NULL,
  `res_description` varchar(500) NOT NULL,
  `res_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sales_tb`
--

CREATE TABLE `sales_tb` (
  `sales_id` int(11) NOT NULL,
  `sales_prod_id` int(11) NOT NULL,
  `sales_date` date NOT NULL DEFAULT current_timestamp(),
  `sales_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services_tb`
--

CREATE TABLE `services_tb` (
  `services_id` int(11) NOT NULL,
  `services_name` varchar(50) NOT NULL,
  `services_image` varchar(100) NOT NULL,
  `services_description` varchar(500) NOT NULL,
  `services_price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services_tb`
--

INSERT INTO `services_tb` (`services_id`, `services_name`, `services_image`, `services_description`, `services_price`) VALUES
(13, 'VIP Car Wash', 'car.jpg', 'Our VIP car wash is the ultimate solution for keeping your vehicle spotless and shining like new. Using the latest technology and premium cleaning products, we offer a superior cleaning experience that goes beyond the basics.', 1000),
(14, 'Car Wrapping', '3.jpg', 'Our car wrapping service is the perfect way to give your vehicle a fresh, bold look while protecting its original paint. Using high-quality, durable vinyl materials, we offer a wide range of colors, finishes, and custom designs to suit your style.', 2000),
(15, 'Ceramic Coating', 'coating.jpg', 'Our ceramic coating service is the ultimate way to protect your vehicle’s paint and keep it looking flawless for years to come. This advanced technology creates a hydrophobic, protective layer that shields your car from dirt.', 2000),
(16, 'Tire Shine', 'wheel.jpg', 'Our tire shine service is the perfect way to give your tires a deep, glossy finish that enhances your vehicle’s overall appearance. Specially formulated to restore and maintain the rich, black look of your tires.', 1000),
(17, 'Wheels & Rims Cleaning', 'tires.jpg', 'Our wheels and rims cleaning service is designed to restore the shine and brilliance of your vehicle’s wheels, giving them a brand-new look. Using specialized cleaners and tools.', 1000),
(18, 'UnderBody Car Wash', 'under.jpg', 'Our underbody car wash service is designed to thoroughly clean and protect the underside of your vehicle, an area often overlooked during regular washes Using high-pressure water.', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `user_tb`
--

CREATE TABLE `user_tb` (
  `user_id` int(11) NOT NULL,
  `user_fullname` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_type` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_tb`
--

INSERT INTO `user_tb` (`user_id`, `user_fullname`, `user_email`, `user_password`, `user_type`) VALUES
(13, 'iluikhuhj', 'james@poto.com', '123', 'user'),
(14, '123', '123@gmail.com', '123', '0'),
(15, 'admin', 'admin', '123', 'admin'),
(16, 'asdasd', 'asd@gmail.com', 'asd', '0'),
(17, 'iluikhuhj', 'james@poto.com', '1', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_tb`
--
ALTER TABLE `booking_tb`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `carwash` (`booking_services_id`);

--
-- Indexes for table `clients_tb`
--
ALTER TABLE `clients_tb`
  ADD PRIMARY KEY (`client_id`),
  ADD KEY `carwash` (`client_fb_id`);

--
-- Indexes for table `contact_tb`
--
ALTER TABLE `contact_tb`
  ADD PRIMARY KEY (`cont_id`);

--
-- Indexes for table `feedback_tb`
--
ALTER TABLE `feedback_tb`
  ADD PRIMARY KEY (`fb_id`);

--
-- Indexes for table `location_tb`
--
ALTER TABLE `location_tb`
  ADD PRIMARY KEY (`loc_id`),
  ADD KEY `carwash` (`loc_fb_id`);

--
-- Indexes for table `product_tb`
--
ALTER TABLE `product_tb`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `reservation_tb`
--
ALTER TABLE `reservation_tb`
  ADD PRIMARY KEY (`res_id`),
  ADD KEY `carwash` (`res_fb_id`);

--
-- Indexes for table `sales_tb`
--
ALTER TABLE `sales_tb`
  ADD PRIMARY KEY (`sales_id`),
  ADD KEY `carwash` (`sales_prod_id`);

--
-- Indexes for table `services_tb`
--
ALTER TABLE `services_tb`
  ADD PRIMARY KEY (`services_id`);

--
-- Indexes for table `user_tb`
--
ALTER TABLE `user_tb`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_tb`
--
ALTER TABLE `booking_tb`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `clients_tb`
--
ALTER TABLE `clients_tb`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_tb`
--
ALTER TABLE `contact_tb`
  MODIFY `cont_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback_tb`
--
ALTER TABLE `feedback_tb`
  MODIFY `fb_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `location_tb`
--
ALTER TABLE `location_tb`
  MODIFY `loc_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_tb`
--
ALTER TABLE `product_tb`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservation_tb`
--
ALTER TABLE `reservation_tb`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales_tb`
--
ALTER TABLE `sales_tb`
  MODIFY `sales_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services_tb`
--
ALTER TABLE `services_tb`
  MODIFY `services_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user_tb`
--
ALTER TABLE `user_tb`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clients_tb`
--
ALTER TABLE `clients_tb`
  ADD CONSTRAINT `clients_tb_ibfk_1` FOREIGN KEY (`client_fb_id`) REFERENCES `feedback_tb` (`fb_id`);

--
-- Constraints for table `location_tb`
--
ALTER TABLE `location_tb`
  ADD CONSTRAINT `location_tb_ibfk_1` FOREIGN KEY (`loc_fb_id`) REFERENCES `feedback_tb` (`fb_id`);

--
-- Constraints for table `reservation_tb`
--
ALTER TABLE `reservation_tb`
  ADD CONSTRAINT `reservation_tb_ibfk_1` FOREIGN KEY (`res_fb_id`) REFERENCES `feedback_tb` (`fb_id`);

--
-- Constraints for table `sales_tb`
--
ALTER TABLE `sales_tb`
  ADD CONSTRAINT `sales_tb_ibfk_1` FOREIGN KEY (`sales_prod_id`) REFERENCES `product_tb` (`prod_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
