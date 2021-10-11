-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 11, 2018 at 09:39 PM
-- Server version: 5.5.60-MariaDB
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sql1605460`
--

-- --------------------------------------------------------
--
-- Table structure for table `tb_articles`
--

CREATE TABLE IF NOT EXISTS `tb_articles` (
  `article_id` int(11) NOT NULL,
  `user_id` int(2) NOT NULL,
  `headline` text NOT NULL,
  `description` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `author` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_articles`
--

INSERT INTO `tb_articles` (`article_id`, `user_id`, `headline`, `description`, `image`, `date`, `author`) VALUES
(1, 3, 'Fifa 19', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'img/fifa-19-ronaldo_1535359973591.jpg', '2018-12-10 12:29:50', 'Mark Warren'),
(2, 3, 'Fortnite', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'img/8704d4d5ffd1c315ac8e2c805a585764.jpg', '2018-12-10 05:20:58', 'Mark Warren'),
(3, 3, 'Call of Duty: BO4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'img/call-of-duty-black-ops-iiii-1089363.jpeg', '2018-12-10 05:21:55', 'Mark Warren'),
(4, 3, 'Become Human', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'img/maxresdefault.jpg', '2018-12-10 05:23:03', 'Mark Warren'),
(5, 3, 'Spiderman', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'img/spiderman.jpg', '2018-12-10 05:23:29', 'Mark Warren');

-- --------------------------------------------------------

--
-- Table structure for table `tb_comments`
--

CREATE TABLE IF NOT EXISTS `tb_comments` (
  `comment_id` int(200) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `article_id` int(3) NOT NULL,
  `user_id` int(3) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_comments`
--

INSERT INTO `tb_comments` (`comment_id`, `comment`, `article_id`, `user_id`, `time`) VALUES
(1, 'Hi this is a comment', 1, 3, '2018-12-10 12:55:23'),
(2, 'fdjkfhjkfgdjfgfgkhj', 2, 3, '2018-12-10 15:27:32'),
(3, 'dskhkdjffjkghkfgdjkhggdfjgjfhgdldsjkgfisdfgkjsdlgfjhk', 5, 3, '2018-12-10 16:51:57'),
(4, 'gjkhhdjkfkglhfhjghjfd', 1, 3, '2018-12-10 16:52:18'),
(5, 'kdjfgfdjkahgfdjhkhgksfdjgfh', 1, 3, '2018-12-10 16:53:44');

-- --------------------------------------------------------

--
-- Table structure for table `tb_readings`
--

CREATE TABLE IF NOT EXISTS `tb_readings` (
  `readings_id` int(2) NOT NULL,
  `cel` text NOT NULL,
  `fahr` text NOT NULL,
  `volt` text NOT NULL,
  `light` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_readings`
--

INSERT INTO `tb_readings` (`readings_id`, `cel`, `fahr`, `volt`, `light`, `time`) VALUES
(1, '347.44', '657.39', '3.30', '44730.00', '2018-12-09 16:47:59'),
(2, '-273.15', '-459.67', '3.30', '26118.00', '2018-12-09 16:48:59'),
(3, '286.79', '548.22', '3.29', '27478.00', '2018-12-09 16:49:15'),
(4, '-273.15', '-459.67', '3.30', '27590.00', '2018-12-09 16:49:16'),
(5, '-273.15', '-459.67', '3.30', '27190.00', '2018-12-09 16:49:17'),
(6, '376.63', '709.93', '3.29', '27318.00', '2018-12-09 16:49:18'),
(7, '-273.15', '-459.67', '3.29', '27254.00', '2018-12-09 16:49:19'),
(8, '422.77', '792.99', '3.29', '27654.00', '2018-12-09 16:49:20'),
(9, '-273.15', '-459.67', '3.30', '58766.00', '2018-12-09 16:49:21'),
(10, '422.77', '792.99', '3.30', '54541.00', '2018-12-09 16:49:22'),
(11, '-273.15', '-459.67', '3.29', '63999.00', '2018-12-09 16:49:23'),
(12, '-273.15', '-459.67', '3.29', '64223.00', '2018-12-09 16:49:24'),
(13, '310.47', '590.84', '3.29', '62607.00', '2018-12-09 16:49:25'),
(14, '376.61', '709.90', '3.29', '57758.00', '2018-12-09 16:49:26'),
(15, '-273.15', '-459.67', '3.29', '61070.00', '2018-12-09 16:49:27'),
(16, '-273.15', '-459.67', '3.29', '46283.00', '2018-12-09 16:49:28'),
(17, '-273.15', '-459.67', '3.30', '16916.00', '2018-12-09 16:49:29'),
(18, '-273.15', '-459.67', '3.29', '16468.00', '2018-12-09 16:49:30'),
(19, '376.63', '709.93', '3.29', '16003.00', '2018-12-09 16:49:31'),
(20, '-273.15', '-459.67', '3.29', '16420.00', '2018-12-09 16:49:32'),
(21, '-273.15', '-459.67', '3.29', '15475.00', '2018-12-09 16:49:33'),
(22, '-273.15', '-459.67', '3.30', '13011.00', '2018-12-09 16:49:34'),
(23, '-273.15', '-459.67', '3.29', '15475.00', '2018-12-09 16:49:35'),
(24, '422.77', '792.99', '3.29', '12467.00', '2018-12-09 16:49:36'),
(25, '347.44', '657.39', '3.30', '11922.00', '2018-12-09 16:49:37'),
(26, '-273.15', '-459.67', '3.30', '10754.00', '2018-12-09 16:49:38'),
(27, '-273.15', '-459.67', '3.30', '13475.00', '2018-12-09 16:49:39'),
(28, '347.43', '657.37', '3.30', '13459.00', '2018-12-09 16:49:41'),
(29, '-273.15', '-459.67', '3.29', '13299.00', '2018-12-09 16:49:41'),
(30, '422.75', '792.95', '3.30', '11458.00', '2018-12-09 16:49:42'),
(31, '376.64', '709.95', '3.29', '10994.00', '2018-12-09 16:49:43'),
(32, '-273.15', '-459.67', '3.30', '10370.00', '2018-12-09 16:49:44'),
(33, '-273.15', '-459.67', '3.29', '9090.00', '2018-12-09 16:49:45'),
(34, '422.75', '792.95', '3.30', '16468.00', '2018-12-09 16:49:46'),
(35, '422.77', '792.99', '3.29', '19236.00', '2018-12-09 16:49:47'),
(36, '422.75', '792.95', '3.29', '16099.00', '2018-12-09 16:49:48'),
(37, '-273.15', '-459.67', '3.30', '15427.00', '2018-12-09 16:49:49'),
(38, '-273.15', '-459.67', '3.29', '12835.00', '2018-12-09 16:49:50'),
(39, '422.77', '792.99', '3.29', '15683.00', '2018-12-09 16:49:51'),
(40, '422.77', '792.99', '3.30', '12547.00', '2018-12-09 16:49:52'),
(41, '277.64', '531.74', '3.30', '6705.00', '2018-12-09 16:49:53'),
(42, '204.65', '400.36', '3.28', '13795.00', '2018-12-09 16:50:53'),
(43, '-273.15', '-459.67', '3.30', '15571.00', '2018-12-09 16:51:53'),
(44, '225.83', '438.49', '3.28', '16868.00', '2018-12-09 16:52:53'),
(45, '-273.15', '-459.67', '3.30', '48155.00', '2018-12-09 16:53:53'),
(46, '347.44', '657.39', '3.29', '46875.00', '2018-12-09 16:54:02'),
(47, '310.46', '590.83', '3.29', '47931.00', '2018-12-09 17:02:57'),
(48, '310.47', '590.84', '3.30', '47483.00', '2018-12-09 17:03:05'),
(49, '518.90', '966.02', '3.30', '47915.00', '2018-12-09 17:03:25'),
(50, '422.75', '792.95', '3.30', '48027.00', '2018-12-09 17:03:45'),
(51, '326.54', '619.77', '3.29', '47771.00', '2018-12-09 17:04:05'),
(52, '422.77', '792.99', '3.29', '47387.00', '2018-12-09 17:04:25'),
(53, '422.77', '792.99', '3.29', '47371.00', '2018-12-09 17:04:45'),
(54, '422.77', '792.99', '3.29', '48123.00', '2018-12-09 17:05:05'),
(55, '347.44', '657.39', '3.29', '47051.00', '2018-12-09 17:05:25'),
(56, '-273.15', '-459.67', '3.29', '47851.00', '2018-12-09 17:05:45'),
(57, '-273.15', '-459.67', '3.29', '47611.00', '2018-12-09 17:06:05'),
(58, '-273.15', '-459.67', '3.30', '47579.00', '2018-12-09 17:06:25'),
(59, '-273.15', '-459.67', '3.30', '47643.00', '2018-12-09 17:06:45'),
(60, '422.77', '792.99', '3.30', '46891.00', '2018-12-09 17:07:05'),
(61, '-273.15', '-459.67', '3.30', '47579.00', '2018-12-09 17:07:25'),
(62, '422.77', '792.99', '3.30', '47979.00', '2018-12-09 17:07:45'),
(63, '422.77', '792.99', '3.29', '47787.00', '2018-12-09 17:08:05'),
(64, '-273.15', '-459.67', '3.30', '47003.00', '2018-12-09 17:08:25'),
(65, '-273.15', '-459.67', '3.30', '47755.00', '2018-12-09 17:08:45'),
(66, '376.63', '709.93', '3.29', '47947.00', '2018-12-09 17:09:05'),
(67, '376.63', '709.93', '3.29', '48027.00', '2018-12-09 17:09:25'),
(68, '422.77', '792.99', '3.29', '47675.00', '2018-12-09 17:09:45'),
(69, '518.90', '966.02', '3.30', '46955.00', '2018-12-09 17:10:05'),
(70, '310.46', '590.83', '3.29', '47755.00', '2018-12-09 17:10:25'),
(71, '-273.15', '-459.67', '3.29', '46923.00', '2018-12-09 17:10:45'),
(72, '518.90', '966.02', '3.29', '47979.00', '2018-12-09 17:11:05'),
(73, '-273.15', '-459.67', '3.30', '47963.00', '2018-12-09 17:11:25'),
(74, '422.77', '792.99', '3.29', '48027.00', '2018-12-09 17:11:45'),
(75, '422.77', '792.99', '3.29', '48011.00', '2018-12-09 17:12:06'),
(76, '376.64', '709.95', '3.30', '47035.00', '2018-12-09 17:12:25'),
(77, '-273.15', '-459.67', '3.29', '47227.00', '2018-12-09 17:12:45'),
(78, '-273.15', '-459.67', '3.29', '47275.00', '2018-12-09 17:13:05'),
(79, '-273.15', '-459.67', '3.30', '47259.00', '2018-12-09 17:13:25'),
(80, '422.77', '792.99', '3.30', '47851.00', '2018-12-09 17:13:46'),
(81, '-273.15', '-459.67', '3.29', '47179.00', '2018-12-09 17:14:06'),
(82, '310.47', '590.84', '3.30', '47707.00', '2018-12-09 17:14:26'),
(83, '-273.15', '-459.67', '3.29', '46571.00', '2018-12-09 17:14:46'),
(84, '422.77', '792.99', '3.29', '47899.00', '2018-12-09 17:15:06'),
(85, '422.75', '792.95', '3.30', '47851.00', '2018-12-09 17:15:26'),
(86, '422.75', '792.95', '3.30', '47643.00', '2018-12-09 17:15:46'),
(87, '-273.15', '-459.67', '3.30', '47467.00', '2018-12-09 17:16:06'),
(88, '422.75', '792.95', '3.30', '47803.00', '2018-12-09 17:16:26'),
(89, '-273.15', '-459.67', '3.29', '47323.00', '2018-12-09 17:16:46'),
(90, '422.77', '792.99', '3.30', '47467.00', '2018-12-09 17:17:06'),
(91, '376.64', '709.95', '3.29', '47499.00', '2018-12-09 17:17:26'),
(92, '-273.15', '-459.67', '3.30', '46971.00', '2018-12-09 17:17:46'),
(93, '-273.15', '-459.67', '3.29', '48075.00', '2018-12-09 17:18:06'),
(94, '-273.15', '-459.67', '3.30', '47819.00', '2018-12-09 17:18:26'),
(95, '-273.15', '-459.67', '3.29', '47003.00', '2018-12-09 17:18:46'),
(96, '-273.15', '-459.67', '3.29', '47611.00', '2018-12-09 17:19:06'),
(97, '-273.15', '-459.67', '3.30', '47707.00', '2018-12-09 17:19:26'),
(98, '-273.15', '-459.67', '3.29', '47387.00', '2018-12-09 17:19:46'),
(99, '518.84', '965.90', '3.29', '47195.00', '2018-12-09 17:20:06'),
(100, '422.75', '792.95', '3.30', '47563.00', '2018-12-09 17:20:26'),
(101, '-273.15', '-459.67', '3.29', '47243.00', '2018-12-09 17:20:46'),
(102, '518.90', '966.02', '3.30', '46971.00', '2018-12-09 17:21:06'),
(103, '-273.15', '-459.67', '3.30', '46939.00', '2018-12-09 17:21:26'),
(104, '422.75', '792.95', '3.29', '46875.00', '2018-12-09 17:21:46'),
(105, '-273.15', '-459.67', '3.29', '47579.00', '2018-12-09 17:22:06'),
(106, '422.75', '792.95', '3.29', '47259.00', '2018-12-09 17:22:26'),
(107, '-273.15', '-459.67', '3.30', '47707.00', '2018-12-09 17:22:46'),
(108, '376.64', '709.95', '3.30', '47643.00', '2018-12-09 17:23:06'),
(109, '310.47', '590.84', '3.29', '47067.00', '2018-12-09 17:23:23');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE IF NOT EXISTS `tb_users` (
  `user_id` int(200) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL,
  `user_type` varchar(10) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`user_id`, `first_name`, `last_name`, `email`, `mobile_no`, `username`, `password`, `user_type`) VALUES
(3, 'Mark', 'Warren', 'mw93@c.com', '07754201148', 'mw93', '$2y$10$kpKBYxwme4kIp623/U9xQOCgTbO7wJByjD1pewyHNC9jHCJno2uPG', 'admin');

--
-- Indexes for dumped tables
--


--
-- Indexes for table `tb_article`
--
ALTER TABLE `tb_article`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `tb_articles`
--
ALTER TABLE `tb_articles`
  ADD PRIMARY KEY (`article_id`),
  ADD UNIQUE KEY `article_id` (`article_id`);

--
-- Indexes for table `tb_comments`
--
ALTER TABLE `tb_comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `tb_readings`
--
ALTER TABLE `tb_readings`
  ADD PRIMARY KEY (`readings_id`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_articles`
--
ALTER TABLE `tb_articles`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_comments`
--
ALTER TABLE `tb_comments`
  MODIFY `comment_id` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_readings`
--
ALTER TABLE `tb_readings`
  MODIFY `readings_id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=110;
--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `user_id` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--
--
-- Constraints for table `tb_comments`
--
ALTER TABLE `tb_comments`
  ADD CONSTRAINT `tb_comments_ibfk_1` FOREIGN KEY (`comment_id`) REFERENCES `tb_articles` (`article_id`);

--
-- Constraints for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD CONSTRAINT `tb_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tb_articles` (`article_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
