-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2019 at 02:10 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ricemilldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('SuperAdmin', '1', 1520930389),
('SuperAdmin', '22', 1514891994),
('SuperAdmin', '23', 1514892709),
('SuperAdmin', '24', 1514892829),
('SuperAdmin', '25', 1514893297),
('SuperAdmin', '26', 1514911276),
('SuperAdmin', '27', 1514912157),
('SuperAdmin', '28', 1514912400);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('/*', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/*', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/assignment/*', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/assignment/assign', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/assignment/index', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/assignment/revoke', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/assignment/view', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/default/*', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/default/index', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/menu/*', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/menu/create', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/menu/delete', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/menu/index', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/menu/update', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/menu/view', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/permission/*', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/permission/assign', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/permission/create', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/permission/delete', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/permission/index', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/permission/remove', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/permission/update', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/permission/view', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/role/*', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/role/assign', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/role/create', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/role/delete', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/role/index', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/role/remove', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/role/update', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/role/view', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/route/*', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/route/assign', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/route/create', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/route/index', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/route/refresh', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/route/remove', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/rule/*', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/rule/create', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/rule/delete', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/rule/index', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/rule/update', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/rule/view', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/user/*', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/user/activate', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/user/change-password', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/user/delete', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/user/index', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/user/login', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/user/logout', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/user/request-password-reset', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/user/reset-password', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/user/signup', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/admin/user/view', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/datecontrol/*', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/datecontrol/parse/*', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/datecontrol/parse/convert', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/debug/*', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/debug/default/*', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/debug/default/db-explain', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/debug/default/download-mail', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/debug/default/index', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/debug/default/toolbar', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/debug/default/view', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/gii/*', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/gii/default/*', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/gii/default/action', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/gii/default/diff', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/gii/default/index', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/gii/default/preview', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/gii/default/view', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/gridview/*', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/gridview/export/*', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/gridview/export/download', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/purchase-data/*', 2, NULL, NULL, NULL, 1560160591, 1560160591),
('/purchase-data/create', 2, NULL, NULL, NULL, 1560160591, 1560160591),
('/purchase-data/delete', 2, NULL, NULL, NULL, 1560160591, 1560160591),
('/purchase-data/index', 2, NULL, NULL, NULL, 1560160553, 1560160553),
('/purchase-data/update', 2, NULL, NULL, NULL, 1560160591, 1560160591),
('/purchase-data/view', 2, NULL, NULL, NULL, 1560160591, 1560160591),
('/site/*', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/site/about', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/site/captcha', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/site/contact', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/site/error', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/site/index', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/site/login', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/site/logout', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/user-data/*', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/user-data/create', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/user-data/delete', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/user-data/index', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/user-data/update', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('/user-data/view', 2, NULL, NULL, NULL, 1520930430, 1520930430),
('All Access', 2, NULL, NULL, NULL, 1514863167, 1514863167),
('Common', 2, NULL, NULL, NULL, 1514937301, 1514937301),
('Guest', 1, NULL, NULL, NULL, 1521008044, 1521008044),
('Guest Access', 2, NULL, NULL, NULL, 1521008077, 1521008077),
('SuperAdmin', 1, NULL, NULL, NULL, 1514886430, 1520940660);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('All Access', '/*'),
('Guest', 'Guest Access'),
('Guest Access', '/site/about'),
('Guest Access', '/site/captcha'),
('Guest Access', '/site/contact'),
('Guest Access', '/site/error'),
('Guest Access', '/site/index'),
('Guest Access', '/site/login'),
('SuperAdmin', 'All Access');

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `broker_data`
--

CREATE TABLE `broker_data` (
  `id` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `other` varchar(100) NOT NULL,
  `createdOn` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `lastUpdatedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `broker_data`
--

INSERT INTO `broker_data` (`id`, `firstName`, `lastName`, `email`, `mobile`, `address`, `other`, `createdOn`, `lastUpdatedOn`) VALUES
(1, 'naveen', 'patnayak', 'naveen@gmail.com', '7777774848', 'madurai', 'melur', '2019-06-13 09:09:04', '0000-00-00 00:00:00'),
(2, 'natarajan', 'sanmugam', 'nataraj@gmail.com', '8600120321', 'chennai', 'north chennai', '2019-06-13 09:19:29', '0000-00-00 00:00:00'),
(3, 'siva', 'balan', 'siva@gmail.com', '8600120322', 'vadapalani', 'mmda', '2019-06-13 09:20:31', '0000-00-00 00:00:00'),
(4, 'boobalan', 'salan', 'bsalan@gmail.com', '7373482784', 'redhills', 'ma nagar', '2019-06-13 09:21:49', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `email_history`
--

CREATE TABLE `email_history` (
  `id` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `route` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `data` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `parent`, `route`, `order`, `data`) VALUES
(1, 'Home', NULL, '/site/index', 1, NULL),
(6, 'About Us', NULL, '/site/about', 2, NULL),
(7, 'Contact Us', NULL, '/site/contact', 3, NULL),
(8, 'Login', NULL, '/site/login', 4, NULL),
(9, 'Logout', NULL, '/site/logout', 5, NULL),
(10, 'Records', NULL, '/purchase-data/index', 6, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1511317403),
('m140506_102106_rbac_init', 1511317409),
('m140602_111327_create_menu_table', 1520936678),
('m160312_050000_create_user', 1520936679);

-- --------------------------------------------------------

--
-- Table structure for table `party_data`
--

CREATE TABLE `party_data` (
  `id` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `other` varchar(100) NOT NULL,
  `createdOn` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `lastUpdatedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `party_data`
--

INSERT INTO `party_data` (`id`, `firstName`, `lastName`, `email`, `mobile`, `address`, `other`, `createdOn`, `lastUpdatedOn`) VALUES
(1, 'jeba', 'raj', 'jebaraj1040@gmail.com', '8608259038', 'chennai', 'no others', '2019-06-13 07:18:19', '0000-00-00 00:00:00'),
(2, 'arwin', 'kumar', 'jebaraj1040@gmail.com', '8608259039', 'chennai', 'no others', '2019-06-13 08:16:23', '2019-06-13 00:00:00'),
(3, 'anna', 'malai', 'malai123@gmail.com', '8842348571', 'thanjavur', 'pattukotai', '2019-06-13 08:50:19', '2019-06-13 00:00:00'),
(4, 'sivaraju', 'sivaraju', 'raju@gmail.com', '9524585467', 'theni', 'kambam', '2019-06-13 08:51:55', '2019-06-13 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_data`
--

CREATE TABLE `purchase_data` (
  `id` int(11) NOT NULL,
  `partyId` int(11) NOT NULL,
  `brokerId` int(11) NOT NULL,
  `vehicleType` varchar(100) NOT NULL,
  `vehicleNo` varchar(30) NOT NULL,
  `noOfBags` int(5) NOT NULL,
  `totalWeight` float NOT NULL,
  `paddyAvailable` char(1) NOT NULL,
  `motaAvailable` char(1) NOT NULL,
  `motaBags` int(5) NOT NULL,
  `motaMoisture` float NOT NULL,
  `motaJunk` float NOT NULL,
  `motaImpurities` float NOT NULL,
  `mansuriAvailable` char(1) NOT NULL,
  `mansuriBags` int(5) NOT NULL,
  `mansuriMoisture` float NOT NULL,
  `mansuriJunk` float NOT NULL,
  `mansuriImpurities` float NOT NULL,
  `sambaAvailable` char(1) NOT NULL,
  `sambaBags` int(5) NOT NULL,
  `sambaMoisture` float NOT NULL,
  `sambaJunk` float NOT NULL,
  `sambaImpurities` float NOT NULL,
  `wheatAvailable` char(1) NOT NULL,
  `wheatType1Available` char(1) NOT NULL,
  `wheatType1Bags` int(5) NOT NULL,
  `wheatType1Moisture` float NOT NULL,
  `wheatType1Impurities` float NOT NULL,
  `wheatType2Available` char(1) NOT NULL,
  `wheatType2Bags` int(5) NOT NULL,
  `wheatType2Moisture` float NOT NULL,
  `wheatType2Impurities` float NOT NULL,
  `riceAvailable` char(1) NOT NULL,
  `riceBags` int(5) NOT NULL,
  `riceImpurities` float NOT NULL,
  `ricemillBags` int(5) NOT NULL,
  `advancePay` float NOT NULL,
  `brokerCharge` float NOT NULL,
  `frett` float NOT NULL,
  `createdOn` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `lastUpdatedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_data`
--

INSERT INTO `purchase_data` (`id`, `partyId`, `brokerId`, `vehicleType`, `vehicleNo`, `noOfBags`, `totalWeight`, `paddyAvailable`, `motaAvailable`, `motaBags`, `motaMoisture`, `motaJunk`, `motaImpurities`, `mansuriAvailable`, `mansuriBags`, `mansuriMoisture`, `mansuriJunk`, `mansuriImpurities`, `sambaAvailable`, `sambaBags`, `sambaMoisture`, `sambaJunk`, `sambaImpurities`, `wheatAvailable`, `wheatType1Available`, `wheatType1Bags`, `wheatType1Moisture`, `wheatType1Impurities`, `wheatType2Available`, `wheatType2Bags`, `wheatType2Moisture`, `wheatType2Impurities`, `riceAvailable`, `riceBags`, `riceImpurities`, `ricemillBags`, `advancePay`, `brokerCharge`, `frett`, `createdOn`, `lastUpdatedOn`) VALUES
(1, 1, 1, 'tractor', '1234', 100, 1000, 'y', 'n', 0, 0, 0, 0, 'n', 0, 0, 0, 0, 'n', 0, 0, 0, 0, 'n', 'n', 0, 0, 0, 'y', 0, 0, 0, 'y', 0, 0, 0, 0, 0, 0, '2019-06-13 12:58:30', '2019-06-13 00:00:00'),
(2, 3, 3, 'container', '88494', 4949, 999393, 'y', 'n', 0, 0, 0, 0, 'n', 0, 0, 0, 0, 'n', 0, 0, 0, 0, 'n', 'n', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, 0, 0, 0, '2019-06-10 13:12:24', '0000-00-00 00:00:00'),
(3, 2, 3, 'lorry', '877677', 883838, 76655400, 'n', 'n', 0, 0, 0, 0, 'n', 0, 0, 0, 0, 'n', 0, 0, 0, 0, 'y', 'y', 0, 0, 0, 'y', 0, 0, 0, 'y', 0, 0, 0, 7886, 0, 0, '2019-06-09 18:30:00', '0000-00-00 00:00:00'),
(4, 2, 3, 'container', '6464648', 10000, 1000000, 'y', 'y', 120, 0.5, 10, 15.5, 'y', 150, 1.5, 3.1, 5.2, 'y', 200, 6.7, 6.2, 3.2, 'y', 'y', 250, 0.7, 0.2, 'y', 12, 3.8, 1.5, 'y', 250, 7.1, 200, 20000, 2000, 27, '2019-06-13 05:58:30', '0000-00-00 00:00:00'),
(5, 2, 3, 'container', '6464648', 10000, 1000000, 'y', 'y', 120, 0.5, 10, 15.5, 'y', 150, 1.5, 3.1, 5.2, 'y', 200, 6.7, 6.2, 3.2, 'y', 'y', 250, 0.7, 0.2, 'y', 12, 3.8, 1.5, 'y', 250, 7.1, 200, 20000, 2000, 27, '2019-06-13 06:05:36', '2019-06-13 00:00:00'),
(6, 4, 1, 'lorry', '88884949', 8000, 1000000, 'y', 'y', 120, 0.5, 10, 15.5, 'y', 150, 1.5, 3.1, 5.2, 'y', 200, 6.7, 6.2, 3.2, 'y', 'y', 250, 0.7, 0.2, 'y', 12, 3.8, 1.5, 'y', 250, 7.1, 200, 20000, 2000, 27, '2019-06-13 11:04:33', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `authKey` varchar(50) NOT NULL,
  `accessToken` varchar(50) DEFAULT NULL,
  `activationLink` char(1) NOT NULL,
  `active` char(1) NOT NULL,
  `companyId` int(11) DEFAULT NULL,
  `branchId` int(11) DEFAULT NULL,
  `divisionId` int(11) DEFAULT NULL,
  `branchHeadId` int(11) DEFAULT NULL,
  `cityId` int(11) DEFAULT NULL,
  `createdOn` datetime NOT NULL,
  `lastUpdatedOn` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `designation`, `email`, `password`, `mobile`, `authKey`, `accessToken`, `activationLink`, `active`, `companyId`, `branchId`, `divisionId`, `branchHeadId`, `cityId`, `createdOn`, `lastUpdatedOn`) VALUES
(1, 'Administrator', '', NULL, 'admin@123.com', '$2y$13$xROEYUxCRkKqdKVZ/o.sm.3qLySVfmh2xeekQzpaq3GmMoay9yuX2', '1234567890', 'F0I083Wm0za7gdvi9ckoclalT1d63WQp', NULL, 'N', 'Y', 0, 0, 0, NULL, NULL, '2017-04-04 16:19:29', '2017-10-29 18:11:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `broker_data`
--
ALTER TABLE `broker_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_history`
--
ALTER TABLE `email_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent` (`parent`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `party_data`
--
ALTER TABLE `party_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_data`
--
ALTER TABLE `purchase_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `broker_data`
--
ALTER TABLE `broker_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `email_history`
--
ALTER TABLE `email_history`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `party_data`
--
ALTER TABLE `party_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `purchase_data`
--
ALTER TABLE `purchase_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `menu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
