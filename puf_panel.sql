-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2023 at 08:43 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puf_panel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins_1`
--

CREATE TABLE `admins_1` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins_1`
--

INSERT INTO `admins_1` (`id`, `username`, `password`, `email`, `phone`, `date`) VALUES
(1, 'Vaishal', '$2y$10$XyyCNS9rFvewuDvIWbRRquEnrhWbkJ1y4kpbCAbjF7mVxDnHMSJui', 'vaishalshrimali@gmail.com', '9632587412', '2023-04-05 17:10:20'),
(2, 'Ajay', '$2y$10$nasnrC65aaaTkYUWnTlS3OVKyXULHDiFzHO9AZxpa1jDEc2f8qKTG', 'ajay1@gmail.com', '6355449207', '2023-05-10 12:29:02');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `cname` text NOT NULL,
  `cmobile` varchar(100) NOT NULL,
  `caddress` text NOT NULL,
  `cemail` varchar(100) NOT NULL,
  `gst_no` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `cname`, `cmobile`, `caddress`, `cemail`, `gst_no`) VALUES
(5, 'Jay Agrawal', '1234567890', 'VIP road', 'jay@gmail.com', NULL),
(7, 'Vaishal', '7894561237', 'Baroda', 'vaishalshrimali@gmail.com', NULL),
(10, 'Ajay', '7994661237', 'sdsd', 'ajay@gmail.com', NULL),
(11, 'Vaishal ', '7894561237', 'Vadodara', 'vaishal@gmail.com', NULL),
(12, 'Tushar', '7418529634', 'New leripura road', 'tushar@gmail.com', NULL),
(13, 'Jay', '7894561213', 'Vadodara', 'jay@gmail.con', NULL),
(14, 'Ajay', '7894561237', 'New leripura road', 'ajay@gmail.com', 'sddfsda');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `inventory_id` int(11) NOT NULL,
  `raw_matrial` varchar(100) DEFAULT NULL,
  `size` varchar(100) DEFAULT NULL,
  `meters` varchar(100) DEFAULT NULL,
  `quantity` varchar(100) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`inventory_id`, `raw_matrial`, `size`, `meters`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 'Matrial 1', '11', '111', '11', '2023-07-12', NULL),
(3, 'Matrial2', '11', '11', '111', '2023-07-12', NULL),
(4, 'Matrial 3', '12', '12', '1212', '2023-07-12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `maincode`
--

CREATE TABLE `maincode` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `maincode`
--

INSERT INTO `maincode` (`id`, `user_id`, `code`, `status`, `date`) VALUES
(1, 1, '873800', '', '0000-00-00'),
(2, 2, '330276', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `measure`
--

CREATE TABLE `measure` (
  `measure_id` int(11) NOT NULL,
  `panel_id` int(11) DEFAULT NULL,
  `measure` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `measure`
--

INSERT INTO `measure` (`measure_id`, `panel_id`, `measure`) VALUES
(1, 1, '0.3mm PPGI SHEET'),
(2, 1, '0.35mm PPGI SHEET'),
(3, 1, '0.40mm PPGI SHEET'),
(4, 1, '0.45mm PPGI SHEET'),
(5, 1, '0.50mm PPGI SHEET'),
(6, 1, '0.60mm PPGI SHEET'),
(7, 4, 'ALUMINIUM FOIL'),
(8, 4, 'LDPE PLASTIC'),
(9, 2, '0.3mm PPGI SHEET'),
(10, 2, '0.40mm PPGI SHEET'),
(11, 2, '0.50mm PPGI SHEET'),
(12, 2, '0.60mm PPGI SHEET'),
(13, 4, '0.3mm PGI SHEET'),
(14, 4, '0.35mm PGI SHEET'),
(15, 4, '0.40mm PGI SHEET'),
(16, 4, '0.50mm PGI SHEET'),
(17, 4, '0.60mm PGI SHEET'),
(18, 5, '0.3mm PGI SHEET\r\n'),
(19, 5, '0.35mm PGI SHEET'),
(20, 5, '0.40mm PGI SHEET'),
(21, 5, '0.50mm PGI SHEET'),
(22, 5, '0.60mm PGI SHEET'),
(23, 5, 'ALUMINUM FOIL'),
(24, 5, 'LPDE PLASTIC');

-- --------------------------------------------------------

--
-- Table structure for table `panel_category`
--

CREATE TABLE `panel_category` (
  `panel_id` int(11) NOT NULL,
  `panel_name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `panel_category`
--

INSERT INTO `panel_category` (`panel_id`, `panel_name`) VALUES
(1, 'R PUF PANEL WALL\r\n'),
(2, 'R PIR PANEL WALL'),
(3, 'SIGNATURE COAL ROOF'),
(4, 'R PUF PANEL ROOF \r\n'),
(5, 'R PIR PANEL ROOF');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product` int(11) DEFAULT NULL,
  `raw_matrial` int(11) DEFAULT NULL,
  `required_qty` varchar(100) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product`, `raw_matrial`, `required_qty`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '12', '2023-07-12', NULL),
(2, 1, 1, '13', '2023-07-12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `puf_manage`
--

CREATE TABLE `puf_manage` (
  `id` int(10) NOT NULL,
  `total_panel` varchar(255) DEFAULT NULL,
  `transporter_name` varchar(255) DEFAULT NULL,
  `vehicle_no` varchar(255) DEFAULT NULL,
  `mobile_no` varchar(255) DEFAULT NULL,
  `dispath_by` varchar(255) DEFAULT NULL,
  `dispath_time` varchar(60) DEFAULT NULL,
  `dispath_date` varchar(60) DEFAULT NULL,
  `boq_date` varchar(60) DEFAULT NULL,
  `coio` text DEFAULT NULL,
  `cname` varchar(255) DEFAULT NULL,
  `ctp` varchar(100) DEFAULT NULL,
  `gfilm` varchar(100) DEFAULT NULL,
  `surface` varchar(100) DEFAULT NULL,
  `lwst` text DEFAULT NULL,
  `total_sqm` varchar(255) DEFAULT NULL,
  `quotation_status` enum('Approved','Rejected','Pending') NOT NULL DEFAULT 'Pending'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `puf_manage`
--

INSERT INTO `puf_manage` (`id`, `total_panel`, `transporter_name`, `vehicle_no`, `mobile_no`, `dispath_by`, `dispath_time`, `dispath_date`, `boq_date`, `coio`, `cname`, `ctp`, `gfilm`, `surface`, `lwst`, `total_sqm`, `quotation_status`) VALUES
(1, '123', 'df', '6fd6', '7878787778', 'g', '02:00', '2023-07-10', '2023/07/10', '[{\"channel\":\"1000\",\"outer\":\"1000\",\"inner\":\"1000\",\"other\":\"1000\"}]', '5', 'SIGN', 'YES', 'RIBBED', '[{\"length\":\"4000\",\"width\":\"1000\",\"sqm\":\"123\",\"nospanel\":\"10\",\"puf_panel\":\"1\",\"puf_thickness\":\"1\",\"puf_skin\":\"0.3mm PPGI SHEET\",\"puf_measure\":\"0.3mm PPGI SHEET\"},{\"length\":\"1000\",\"width\":\"1000\",\"sqm\":\"123\",\"nospanel\":\"100\",\"puf_panel\":\"2\",\"puf_thickness\":\"2\",\"puf_skin\":\"0.3mm PPGI SHEET\",\"puf_measure\":\"0.3mm PPGI SHEET\"}]', '255', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role`, `created_at`, `updated_at`) VALUES
(2, 'Stock Manager', '2023-07-11', NULL),
(3, 'Delivery boy', '2023-07-13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `skin`
--

CREATE TABLE `skin` (
  `Skin_id` int(10) NOT NULL,
  `Skin` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skin`
--

INSERT INTO `skin` (`Skin_id`, `Skin`) VALUES
(1, 'Top Skin'),
(2, 'Bottom Skin');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `gender` enum('Male','Female') DEFAULT NULL,
  `address` text DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `name`, `password`, `email`, `role_id`, `phone`, `gender`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Ajay', '$2y$10$7.wcQgE9wFQWrtpjvkJVbubWBxo/Nu76/Qj.tOGmvp6gWw7dgM.rC', 'ajay@gmail.com', 1, '9879879879', 'Male', 'Vadodara', '2023-07-11', '2023-07-11'),
(2, 'Tushar', '$2y$10$lNI1w2TSwcRrJowUimeeIeHsj37ZhZiV8KuzG2SfYajgKSsE1or4q', 'vaishalshrimali.dww@gmail.com', 2, '7894561237', 'Male', 'Vadodara', '2023-07-11', NULL),
(3, 'Jay', '$2y$10$BX/C8YLpM3PzePJELDZ5m.vi4Ui8R80M6oAzf0mL2hEUgVCGN1Y2e', 'jay@gmail.com', 2, '7894561237', 'Male', 'Vadodara', '2023-07-11', NULL),
(4, 'Taha Bharmal ', '$2y$10$5H25WNOZP5LC45Jzo9zlfOMcF0jEFZ1Nr8HDDeyJWdP8NiF9pF0Ca', 'tmb@gmail.com', 3, '1122334455', 'Male', 'fatehgunj', '2023-07-13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `thickness`
--

CREATE TABLE `thickness` (
  `Thickness_id` int(11) NOT NULL,
  `panel_id` int(11) DEFAULT NULL,
  `Thickness` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thickness`
--

INSERT INTO `thickness` (`Thickness_id`, `panel_id`, `Thickness`) VALUES
(1, 1, '30mm'),
(2, 1, '40mm'),
(3, 1, '50mm'),
(4, 1, '60mm'),
(5, 1, '80mm'),
(6, 1, '100mm'),
(7, 1, '120mm'),
(8, 1, '150mm'),
(9, 3, '10mm'),
(10, 2, '30mm'),
(11, 2, '40mm\n'),
(12, 2, '50mm'),
(13, 2, '60mm'),
(14, 2, '80mm'),
(15, 2, '100mm'),
(16, 2, '120mm'),
(17, 2, '150mm'),
(18, 4, '30mm'),
(19, 4, '40mm'),
(20, 4, '50mm'),
(21, 4, '60mm'),
(22, 4, '80mm'),
(23, 4, '100mm'),
(24, 4, '120mm'),
(25, 5, '30mm'),
(26, 5, '40mm'),
(27, 5, '50mm'),
(28, 5, '60mm'),
(29, 5, '80mm'),
(30, 5, '100mm'),
(31, 5, '120mm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins_1`
--
ALTER TABLE `admins_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`inventory_id`);

--
-- Indexes for table `maincode`
--
ALTER TABLE `maincode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `measure`
--
ALTER TABLE `measure`
  ADD PRIMARY KEY (`measure_id`);

--
-- Indexes for table `panel_category`
--
ALTER TABLE `panel_category`
  ADD PRIMARY KEY (`panel_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `puf_manage`
--
ALTER TABLE `puf_manage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `skin`
--
ALTER TABLE `skin`
  ADD PRIMARY KEY (`Skin_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `thickness`
--
ALTER TABLE `thickness`
  ADD PRIMARY KEY (`Thickness_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins_1`
--
ALTER TABLE `admins_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `inventory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `maincode`
--
ALTER TABLE `maincode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `measure`
--
ALTER TABLE `measure`
  MODIFY `measure_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `panel_category`
--
ALTER TABLE `panel_category`
  MODIFY `panel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `puf_manage`
--
ALTER TABLE `puf_manage`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `skin`
--
ALTER TABLE `skin`
  MODIFY `Skin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `thickness`
--
ALTER TABLE `thickness`
  MODIFY `Thickness_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
