-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2020 at 10:14 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pms`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_name` varchar(50) NOT NULL,
  `customer_phone` bigint(20) NOT NULL,
  `QTY` int(11) NOT NULL,
  `due` bigint(20) NOT NULL,
  `last_prement` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_name`, `customer_phone`, `QTY`, `due`, `last_prement`) VALUES
('shahan', 1703844436, 10, 5, 15);

-- --------------------------------------------------------

--
-- Table structure for table `demo_product`
--

CREATE TABLE `demo_product` (
  `product_name` varchar(50) NOT NULL,
  `generic_name` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `expire_date` varchar(50) NOT NULL,
  `qty` bigint(20) NOT NULL,
  `original_price` varchar(20) NOT NULL,
  `selling_price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `demo_product`
--

INSERT INTO `demo_product` (`product_name`, `generic_name`, `category`, `expire_date`, `qty`, `original_price`, `selling_price`) VALUES
('1', '1', '1', '0001-01-01', 1, '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `demo_sales`
--

CREATE TABLE `demo_sales` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `qty` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user`, `pass`, `phone`) VALUES
('shahan', '123', 1703844436);

-- --------------------------------------------------------

--
-- Table structure for table `per_customer`
--

CREATE TABLE `per_customer` (
  `Cphone` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `qty` bigint(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `per_customer`
--

INSERT INTO `per_customer` (`Cphone`, `product_name`, `qty`, `date`, `time`) VALUES
('01703844436', 'napa', 10, '2020-01-28', '12:50:44am'),
('01703844436', '1', 1, '2020-09-05', '07:20:09pm'),
('01703844436', 'shahan', 12, '2020-09-13', '03:15:17am');

-- --------------------------------------------------------

--
-- Table structure for table `per_supplier`
--

CREATE TABLE `per_supplier` (
  `Sphone` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `qty` bigint(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `generic_name` varchar(50) NOT NULL,
  `expire_date` varchar(50) NOT NULL,
  `original_price` varchar(20) NOT NULL,
  `selling_price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `per_supplier`
--

INSERT INTO `per_supplier` (`Sphone`, `product_name`, `qty`, `category`, `date`, `time`, `generic_name`, `expire_date`, `original_price`, `selling_price`) VALUES
('01766400690', 'napa', 123, 'tablat', '28-01-2020', '12:49:17am', 'napa', '2020-01-31', '1', '2'),
('01703844436', 'napa', 5, 'napa', '05-09-2020', '07:38:20pm', 'asdfasdf', '2020-09-05', '10', '12');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_name` varchar(50) NOT NULL,
  `supplier_phone` bigint(20) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `due` bigint(20) NOT NULL,
  `last_prement` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_name`, `supplier_phone`, `company_name`, `due`, `last_prement`) VALUES
('shahan', 1703844436, 'shahan', 50, 0),
('kahir', 1766400690, 'scure', 23, 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_phone`);

--
-- Indexes for table `demo_product`
--
ALTER TABLE `demo_product`
  ADD PRIMARY KEY (`product_name`);

--
-- Indexes for table `demo_sales`
--
ALTER TABLE `demo_sales`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_name` (`product_name`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `demo_sales`
--
ALTER TABLE `demo_sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
