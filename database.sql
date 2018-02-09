-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2018 at 05:31 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `course-management`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_access_log`
--

CREATE TABLE IF NOT EXISTS `tbl_access_log` (
  `ID` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `ip_address` text COLLATE utf8_unicode_ci NOT NULL,
  `device` text COLLATE utf8_unicode_ci NOT NULL,
  `user_agent` text COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=94 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_access_log`
--

INSERT INTO `tbl_access_log` (`ID`, `user_id`, `ip_address`, `device`, `user_agent`, `date`) VALUES
(1, 1, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36', '2017-05-23 17:28:11'),
(2, 1, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36', '2017-05-23 18:11:24'),
(3, 1, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36', '2017-05-24 10:46:05'),
(4, 10000242679, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36', '2017-05-24 21:40:09'),
(5, 10000242679, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36', '2017-05-24 22:25:39'),
(6, 10000242679, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36', '2017-05-24 23:12:14'),
(7, 10000242679, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36', '2017-05-25 09:48:31'),
(8, 10000950333, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36', '2017-05-25 10:49:13'),
(9, 10000242679, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36', '2017-05-25 11:01:43'),
(10, 10000924747, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36', '2017-05-25 11:02:09'),
(11, 10000242679, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36', '2017-05-25 11:12:28'),
(12, 10000242679, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36', '2017-06-06 02:32:47'),
(13, 10000242679, '127.0.0.1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/10.1 Safari/603.1.30', '2017-06-06 03:25:36'),
(14, 10000242679, '127.0.0.1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/10.1 Safari/603.1.30', '2017-06-06 03:27:44'),
(15, 10000242679, '127.0.0.1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/10.1 Safari/603.1.30', '2017-06-06 03:28:03'),
(16, 10000242679, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/602.3.12 (KHTML, like Gecko) Version/10.0.2 Safari/602.3.12', '2017-06-06 09:52:56'),
(17, 10000240463, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/602.3.12 (KHTML, like Gecko) Version/10.0.2 Safari/602.3.12', '2017-06-06 11:01:40'),
(18, 10000242679, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/602.3.12 (KHTML, like Gecko) Version/10.0.2 Safari/602.3.12', '2017-06-06 11:06:10'),
(19, 10000242679, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/602.3.12 (KHTML, like Gecko) Version/10.0.2 Safari/602.3.12', '2017-06-06 11:34:29'),
(20, 10000242679, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/602.3.12 (KHTML, like Gecko) Version/10.0.2 Safari/602.3.12', '2017-06-08 08:45:16'),
(21, 10000850547, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/602.3.12 (KHTML, like Gecko) Version/10.0.2 Safari/602.3.12', '2017-06-08 08:50:51'),
(22, 10000242679, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/602.3.12 (KHTML, like Gecko) Version/10.0.2 Safari/602.3.12', '2017-06-08 09:02:04'),
(23, 10000850547, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/602.3.12 (KHTML, like Gecko) Version/10.0.2 Safari/602.3.12', '2017-06-08 09:04:36'),
(24, 10000242679, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/602.3.12 (KHTML, like Gecko) Version/10.0.2 Safari/602.3.12', '2017-06-08 09:11:05'),
(25, 10000850547, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/602.3.12 (KHTML, like Gecko) Version/10.0.2 Safari/602.3.12', '2017-06-08 12:01:19'),
(26, 10000242679, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/602.3.12 (KHTML, like Gecko) Version/10.0.2 Safari/602.3.12', '2017-06-08 14:32:44'),
(27, 10000242679, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/602.3.12 (KHTML, like Gecko) Version/10.0.2 Safari/602.3.12', '2017-06-12 09:18:31'),
(28, 10000242679, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/602.3.12 (KHTML, like Gecko) Version/10.0.2 Safari/602.3.12', '2017-06-12 09:28:45'),
(29, 10000242679, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/602.3.12 (KHTML, like Gecko) Version/10.0.2 Safari/602.3.12', '2017-06-19 09:02:59'),
(30, 10000850547, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/602.3.12 (KHTML, like Gecko) Version/10.0.2 Safari/602.3.12', '2017-06-19 09:05:12'),
(31, 10000850547, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/602.3.12 (KHTML, like Gecko) Version/10.0.2 Safari/602.3.12', '2017-06-19 09:07:55'),
(32, 10000242679, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/602.3.12 (KHTML, like Gecko) Version/10.0.2 Safari/602.3.12', '2017-06-19 09:09:03'),
(33, 10000318028, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/602.3.12 (KHTML, like Gecko) Version/10.0.2 Safari/602.3.12', '2017-06-19 09:14:08'),
(34, 10000242679, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/602.3.12 (KHTML, like Gecko) Version/10.0.2 Safari/602.3.12', '2017-06-19 09:17:09'),
(35, 10000242679, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/602.3.12 (KHTML, like Gecko) Version/10.0.2 Safari/602.3.12', '2017-06-22 07:16:26'),
(36, 10000318028, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/602.3.12 (KHTML, like Gecko) Version/10.0.2 Safari/602.3.12', '2017-06-22 07:31:15'),
(37, 10000318028, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/602.3.12 (KHTML, like Gecko) Version/10.0.2 Safari/602.3.12', '2017-06-22 07:48:15'),
(38, 10000318028, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/602.3.12 (KHTML, like Gecko) Version/10.0.2 Safari/602.3.12', '2017-06-22 09:58:22'),
(39, 1, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/602.3.12 (KHTML, like Gecko) Version/10.0.2 Safari/602.3.12', '2017-06-22 10:17:35'),
(40, 10000950345, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/602.3.12 (KHTML, like Gecko) Version/10.0.2 Safari/602.3.12', '2017-06-22 12:26:42'),
(41, 1, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/602.3.12 (KHTML, like Gecko) Version/10.0.2 Safari/602.3.12', '2017-06-22 12:26:56'),
(42, 10000950345, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/602.3.12 (KHTML, like Gecko) Version/10.0.2 Safari/602.3.12', '2017-06-22 12:27:46'),
(43, 1, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/602.3.12 (KHTML, like Gecko) Version/10.0.2 Safari/602.3.12', '2017-06-22 12:46:46'),
(44, 1, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/602.3.12 (KHTML, like Gecko) Version/10.0.2 Safari/602.3.12', '2017-06-22 12:47:14'),
(45, 10000950341, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/602.3.12 (KHTML, like Gecko) Version/10.0.2 Safari/602.3.12', '2017-06-22 12:48:04'),
(46, 10000950350, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/602.3.12 (KHTML, like Gecko) Version/10.0.2 Safari/602.3.12', '2017-06-22 12:48:24'),
(47, 1, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/602.3.12 (KHTML, like Gecko) Version/10.0.2 Safari/602.3.12', '2017-06-22 12:48:38'),
(48, 1, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/602.3.12 (KHTML, like Gecko) Version/10.0.2 Safari/602.3.12', '2017-06-26 09:07:59'),
(49, 1, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/602.3.12 (KHTML, like Gecko) Version/10.0.2 Safari/602.3.12', '2017-07-04 09:47:35'),
(50, 10000950345, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/602.3.12 (KHTML, like Gecko) Version/10.0.2 Safari/602.3.12', '2017-07-14 13:57:25'),
(51, 1, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/602.3.12 (KHTML, like Gecko) Version/10.0.2 Safari/602.3.12', '2017-07-14 13:57:41'),
(52, 10000950345, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/602.3.12 (KHTML, like Gecko) Version/10.0.2 Safari/602.3.12', '2017-07-14 13:58:07'),
(53, 1, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/602.3.12 (KHTML, like Gecko) Version/10.0.2 Safari/602.3.12', '2017-07-17 09:45:35'),
(54, 1, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36', '2017-07-20 18:32:36'),
(55, 1, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36', '2017-07-25 05:09:49'),
(56, 10000603933, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36', '2017-07-25 06:37:32'),
(57, 1, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36', '2017-07-25 06:37:49'),
(58, 10000603933, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36', '2017-07-25 06:38:18'),
(59, 1, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36', '2017-07-25 06:38:31'),
(60, 10000603933, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36', '2017-07-25 06:38:56'),
(61, 1, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36', '2017-07-25 06:39:14'),
(62, 10000603933, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36', '2017-07-25 06:39:32'),
(63, 1, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36', '2017-07-25 06:40:45'),
(64, 1, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.36', '2017-08-15 07:33:01'),
(65, 1, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.36', '2017-08-18 08:03:19'),
(66, 1, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.36', '2017-08-18 09:24:28'),
(67, 1, '127.0.0.1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/10.1 Safari/603.1.30', '2017-08-18 18:18:51'),
(68, 1, '127.0.0.1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/603.3.8 (KHTML, like Gecko) Version/10.1.2 Safari/603.3.8', '2017-08-20 13:41:21'),
(69, 1, '127.0.0.1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.11; rv:54.0) Gecko/20100101 Firefox/54.0', '2017-08-20 20:49:03'),
(70, 1, '127.0.0.1', 'Desktop/Laptop', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:54.0) Gecko/20100101 Firefox/54.0', '2017-08-22 17:43:39'),
(71, 1, '127.0.0.1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/603.3.8 (KHTML, like Gecko) Version/10.1.2 Safari/603.3.8', '2017-08-26 23:01:04'),
(72, 1, '127.0.0.1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.11; rv:55.0) Gecko/20100101 Firefox/55.0', '2017-08-27 01:04:17'),
(73, 1, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/603.3.8 (KHTML, like Gecko) Version/10.1.2 Safari/603.3.8', '2017-08-31 13:13:03'),
(74, 1, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.11; rv:55.0) Gecko/20100101 Firefox/55.0', '2017-08-31 13:26:10'),
(75, 1, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/603.3.8 (KHTML, like Gecko) Version/10.1.2 Safari/603.3.8', '2017-09-14 14:02:03'),
(76, 1, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36', '2017-11-13 20:18:30'),
(77, 1, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36', '2017-11-13 20:22:51'),
(78, 1, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36', '2017-11-13 21:19:55'),
(79, 1, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36', '2017-11-13 22:00:40'),
(80, 1, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36', '2017-11-13 23:17:48'),
(81, 1, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0', '2017-11-14 01:29:10'),
(82, 1, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36', '2017-11-14 17:27:54'),
(83, 1, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36', '2017-11-14 18:27:12'),
(84, 1, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36', '2017-11-14 18:54:56'),
(85, 1, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36', '2017-11-14 18:56:28'),
(86, 1, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:57.0) Gecko/20100101 Firefox/57.0', '2017-11-22 12:13:11'),
(87, 1, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:57.0) Gecko/20100101 Firefox/57.0', '2017-11-22 12:19:02'),
(88, 1, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:57.0) Gecko/20100101 Firefox/57.0', '2017-11-22 12:25:41'),
(89, 1, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:57.0) Gecko/20100101 Firefox/57.0', '2017-11-22 12:49:31'),
(90, 1, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', '2018-01-06 06:37:13'),
(91, 1, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', '2018-01-09 09:25:59'),
(92, 1, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', '2018-01-11 12:57:55'),
(93, 1, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', '2018-01-12 07:07:51');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alert`
--

CREATE TABLE IF NOT EXISTS `tbl_alert` (
  `ID` int(11) NOT NULL,
  `attend` varchar(100) NOT NULL,
  `collect` varchar(100) NOT NULL,
  `return` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_alert`
--

INSERT INTO `tbl_alert` (`ID`, `attend`, `collect`, `return`) VALUES
(1, '1-0-0', '0-0-1', '0-1-0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bookings`
--

CREATE TABLE IF NOT EXISTS `tbl_bookings` (
  `ID` bigint(20) NOT NULL,
  `course_ID` bigint(20) NOT NULL,
  `name` varchar(120) DEFAULT NULL,
  `colour_ID` text,
  `admins` text,
  `description` text,
  `location` bigint(20) DEFAULT NULL,
  `date_from` date DEFAULT NULL,
  `date_to` date DEFAULT NULL,
  `max_num` int(11) DEFAULT '30',
  `nurses` text NOT NULL,
  `date_book_received` text NOT NULL,
  `collected` text NOT NULL,
  `date_book_returned` text NOT NULL,
  `attendance` text NOT NULL,
  `enroll` text,
  `created_by` bigint(20) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=10000507807 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bookings`
--

INSERT INTO `tbl_bookings` (`ID`, `course_ID`, `name`, `colour_ID`, `admins`, `description`, `location`, `date_from`, `date_to`, `max_num`, `nurses`, `date_book_received`, `collected`, `date_book_returned`, `attendance`, `enroll`, `created_by`, `created_on`) VALUES
(10000507806, 10000194478, 'Study1 | Study Day 1 | 22_Nov', 'F3C348', 'a:2:{i:0;s:11:"10000950343";i:1;s:11:"10000950339";}', 'Study day 1 for new trainees', 5, '2017-11-23', '2017-11-23', 5, 'a:2:{i:1;s:11:"10000603933";i:2;s:11:"10000340101";}', 'a:2:{s:11:"10000603933";s:10:"2018-01-11";s:11:"10000340101";s:0:"";}', 'a:2:{s:11:"10000603933";s:1:"0";s:11:"10000340101";i:0;}', 'a:2:{s:11:"10000603933";s:10:"2018-02-01";s:11:"10000340101";s:0:"";}', 'a:2:{s:11:"10000603933";s:1:"1";s:11:"10000340101";s:1:"1";}', 'a:2:{s:11:"10000603933";s:1:"1";s:11:"10000340101";i:0;}', 1, '2017-11-22 12:39:12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cohort`
--

CREATE TABLE IF NOT EXISTS `tbl_cohort` (
  `ID` bigint(12) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `type` varchar(150) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `y` int(100) DEFAULT NULL,
  `m` int(100) DEFAULT NULL,
  `d` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cohort_ext`
--

CREATE TABLE IF NOT EXISTS `tbl_cohort_ext` (
  `ID` int(11) NOT NULL,
  `Cohort_ID` bigint(12) NOT NULL,
  `Cohort_date` date NOT NULL,
  `over` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cohort_ext`
--

INSERT INTO `tbl_cohort_ext` (`ID`, `Cohort_ID`, `Cohort_date`, `over`) VALUES
(61, 2147483647, '2018-01-20', 0),
(62, 2147483647, '2018-07-20', 0),
(63, 2147483647, '2019-01-20', 0),
(64, 2147483647, '2019-07-20', 0),
(65, 2147483647, '2020-01-20', 0),
(66, 2147483647, '2020-07-20', 0),
(67, 2147483647, '2021-01-20', 0),
(68, 2147483647, '2021-07-20', 0),
(69, 2147483647, '2022-01-20', 0),
(70, 2147483647, '2022-07-20', 0),
(71, 10000771328, '2017-10-20', 0),
(72, 10000771328, '2018-01-20', 0),
(73, 10000771328, '2018-04-20', 0),
(74, 10000771328, '2018-07-20', 0),
(75, 10000771328, '2018-10-20', 0),
(76, 10000771328, '2019-01-20', 0),
(77, 10000771328, '2019-04-20', 0),
(78, 10000771328, '2019-07-20', 0),
(79, 10000771328, '2019-10-20', 0),
(80, 10000771328, '2020-01-20', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courses`
--

CREATE TABLE IF NOT EXISTS `tbl_courses` (
  `ID` bigint(20) NOT NULL,
  `course_ID` varchar(50) NOT NULL,
  `name` varchar(1024) NOT NULL,
  `description` text,
  `admins` text,
  `location` bigint(20) NOT NULL,
  `active` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=2147483647 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course_settings`
--

CREATE TABLE IF NOT EXISTS `tbl_course_settings` (
  `ID` bigint(20) NOT NULL,
  `course_type` text
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_course_settings`
--

INSERT INTO `tbl_course_settings` (`ID`, `course_type`) VALUES
(1, 'a:2:{s:11:"10000012610";i:0;s:11:"10000690603";i:0;}');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course_types`
--

CREATE TABLE IF NOT EXISTS `tbl_course_types` (
  `ID` bigint(20) NOT NULL,
  `course_ID` varchar(100) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10000987420 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_course_types`
--

INSERT INTO `tbl_course_types` (`ID`, `course_ID`, `name`) VALUES
(10000071409, 'BasicWard', 'Basic Ward Management'),
(10000102735, 'MentUp', 'Mentor Update'),
(10000110315, 'NONE', 'none'),
(10000144633, 'IV_Exam', 'IV Exam'),
(10000194478, 'Study1', 'Study Day 1'),
(10000346261, 'ECG', '12 Lead ECG'),
(10000370046, 'IV_Update', 'IV Update'),
(10000448560, 'BEACH', 'BEACH Course'),
(10000452503, 'Study3', 'Study Day 3'),
(10000471378, 'IV_Additives', 'IV Additives'),
(10000529208, 'Vena', 'Venapuncture'),
(10000566776, 'MentSign', 'Mentor Sign-off'),
(10000682200, 'Rec_Keep', 'Record Keeping'),
(10000775447, 'IvExam', 'IV Exam'),
(10000794778, 'IV_UP', 'IV Update'),
(10000888659, 'Study2', 'Study Day 2'),
(10000935566, 'IV_ADDS', 'IV Additives'),
(10000961152, 'Links', 'LINKS'),
(10000987419, 'Cath', 'Cathererisation');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course_user`
--

CREATE TABLE IF NOT EXISTS `tbl_course_user` (
  `ID` bigint(20) NOT NULL,
  `user_ID` bigint(20) NOT NULL,
  `course_ID` bigint(20) NOT NULL,
  `booked` int(1) NOT NULL,
  `attended` int(1) NOT NULL,
  `uploaded` int(1) NOT NULL,
  `passed` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10000942987 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_course_user`
--

INSERT INTO `tbl_course_user` (`ID`, `user_ID`, `course_ID`, `booked`, `attended`, `uploaded`, `passed`) VALUES
(10000942984, 10000340101, 10000936950, 1, 0, 0, 0),
(10000942985, 10000340101, 10000240234, 1, 0, 0, 0),
(10000942986, 10000603933, 10000936950, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_designations`
--

CREATE TABLE IF NOT EXISTS `tbl_designations` (
  `ID` bigint(20) NOT NULL,
  `code` varchar(150) NOT NULL,
  `name` varchar(1024) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=10000641647 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_designations`
--

INSERT INTO `tbl_designations` (`ID`, `code`, `name`, `created_on`) VALUES
(10000641612, '24Snr_Midwife', 'Senior Midwife', '0000-00-00 00:00:00'),
(10000641613, 'AP-01', 'AP', '0000-00-00 00:00:00'),
(10000641614, 'Charge_Nurse_01', 'Charge Nurse', '0000-00-00 00:00:00'),
(10000641615, 'DepDon_01', 'DDoN', '0000-00-00 00:00:00'),
(10000641616, 'Don_01', 'DoN', '0000-00-00 00:00:00'),
(10000641617, 'HCA_01', 'HCA', '0000-00-00 00:00:00'),
(10000641618, 'Hd_Matron_01', 'Head matron', '0000-00-00 00:00:00'),
(10000641619, 'Hd_Midwife_01', 'Head Midwifery', '0000-00-00 00:00:00'),
(10000641620, 'Jr_Sister_01', 'Junior Sister', '0000-00-00 00:00:00'),
(10000641621, 'Lead_Nurse', 'Lead Nurse', '0000-00-00 00:00:00'),
(10000641622, 'Lecture_01', 'Lecturer', '0000-00-00 00:00:00'),
(10000641623, 'Matron_01', 'Matron', '0000-00-00 00:00:00'),
(10000641624, 'Midwife_01', 'Midwife', '0000-00-00 00:00:00'),
(10000641625, 'MSW_01', 'MSW', '0000-00-00 00:00:00'),
(10000641626, 'ODP_01', 'ODP', '0000-00-00 00:00:00'),
(10000641627, 'ONP_Nurse', 'ONP Nurse', '0000-00-00 00:00:00'),
(10000641628, 'Paramedic_01', 'Paramedic', '0000-00-00 00:00:00'),
(10000641629, 'SAP_01', 'SAP', '0000-00-00 00:00:00'),
(10000641630, 'Snr ODP_01', 'Senior ODP', '0000-00-00 00:00:00'),
(10000641631, 'Snr_Charge_Nurse_01', 'Senior Charge Nurse', '0000-00-00 00:00:00'),
(10000641632, 'Snr_Sister_01', 'Senior Sister', '0000-00-00 00:00:00'),
(10000641633, 'Spec_Nurse_01', 'Specialist Nurse', '0000-00-00 00:00:00'),
(10000641634, 'Spec_Paramedic_01', 'Specialist Paramedic', '0000-00-00 00:00:00'),
(10000641635, 'Sr_Paramedic_01', 'Senior Paramedic', '0000-00-00 00:00:00'),
(10000641636, 'Sr_Staff_Nurse_01', 'Senior Staff Nurse', '0000-00-00 00:00:00'),
(10000641637, 'Staff_Nurse_01', 'Staff Nurse', '0000-00-00 00:00:00'),
(10000641638, 'Stn_Nurse_Adult_01', 'Student Nurse (Adult)', '0000-00-00 00:00:00'),
(10000641639, 'Stn_Nurse_Child_01', 'Student Nurse (child)', '0000-00-00 00:00:00'),
(10000641640, 'Stn_Nurse_Midwife_01', 'Student Nurse (Midwife)', '0000-00-00 00:00:00'),
(10000641641, 'Stn_Paramedic_01', 'Student Paramedic', '0000-00-00 00:00:00'),
(10000641642, 'Student_ERAS_01', 'Student (erasmus)', '0000-00-00 00:00:00'),
(10000641643, 'Student_ODP_01', 'Student ODP', '0000-00-00 00:00:00'),
(10000641644, 'Student_R2p_01', 'Student (RTP)', '0000-00-00 00:00:00'),
(10000641645, 'TCSW_01', 'TCSW', '0000-00-00 00:00:00'),
(10000641646, 'Ward_Manager', 'Ward/Unit Manager', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_locations`
--

CREATE TABLE IF NOT EXISTS `tbl_locations` (
  `ID` bigint(20) NOT NULL,
  `location_code` varchar(50) DEFAULT NULL,
  `name` varchar(1024) DEFAULT NULL,
  `phone` varchar(64) DEFAULT NULL,
  `booking_contact` varchar(64) DEFAULT NULL,
  `booking_phone` varchar(64) DEFAULT NULL,
  `notes` text,
  `extras` text,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_locations`
--

INSERT INTO `tbl_locations` (`ID`, `location_code`, `name`, `phone`, `booking_contact`, `booking_phone`, `notes`, `extras`, `created_on`) VALUES
(1, 'A1_ED', 'A1 ED Centre', '', '', '', '', 'a:2:{i:0;s:6:"chairs";i:1;s:6:"tables";}', '0000-00-00 00:00:00'),
(2, 'A2_ED', 'A2 Ed Centre', '', '', '', '', 'a:2:{i:0;s:6:"chairs";i:1;s:6:"tables";}', '0000-00-00 00:00:00'),
(3, 'A3_ED', 'A3 Ed Centre', '', '', '', '', 'a:2:{i:0;s:6:"chairs";i:1;s:6:"tables";}', '0000-00-00 00:00:00'),
(4, 'A4_ED', 'A4 Ed Centre', '', '', '', '', 'a:2:{i:0;s:6:"chairs";i:1;s:6:"tables";}', '0000-00-00 00:00:00'),
(5, 'A5_ED', 'A5 Ed Centre', '', '', '', '', 'a:2:{i:0;s:6:"chairs";i:1;s:6:"tables";}', '0000-00-00 00:00:00'),
(6, 'A6_ED', 'A6 Ed Centre', '', '', '', '', 'a:2:{i:0;s:6:"chairs";i:1;s:6:"tables";}', '0000-00-00 00:00:00'),
(7, 'A7_ED', 'A7 Ed Centre', '', '', '', '', 'a:2:{i:0;s:6:"chairs";i:1;s:6:"tables";}', '0000-00-00 00:00:00'),
(8, 'A8_ED', 'A8 Ed Centre', '', '', '', '', 'a:2:{i:0;s:6:"chairs";i:1;s:6:"tables";}', '0000-00-00 00:00:00'),
(9, 'A9_ED', 'B1 Ed Centre', '', '', '', '', 'a:4:{i:0;s:6:"chairs";i:1;s:9:"computers";i:2;s:14:"project_screen";i:3;s:6:"tables";}', '0000-00-00 00:00:00'),
(10, 'AnesSeminar_RSCH', 'Anesthetic Seminar Room', '', '', '', '', 'a:4:{i:0;s:6:"chairs";i:1;s:9:"computers";i:2;s:14:"project_screen";i:3;s:6:"tables";}', '0000-00-00 00:00:00'),
(11, 'B2_Ed', 'B2 Ed Centre', '', '', '', '', 'a:6:{i:0;s:6:"chairs";i:1;s:9:"computers";i:2;s:9:"clipboard";i:3;s:16:"laptop_connector";i:4;s:14:"project_screen";i:5;s:6:"tables";}', '0000-00-00 00:00:00'),
(12, 'Canteen_RSCH', 'Canteen Level A', '', '', '', '', 'a:2:{i:0;s:6:"chairs";i:1;s:6:"tables";}', '0000-00-00 00:00:00'),
(13, 'LecTheatre_ED', 'Lecture Theatre', '', '', '', '', 'a:6:{i:0;s:6:"chairs";i:1;s:9:"computers";i:2;s:9:"clipboard";i:3;s:16:"laptop_connector";i:4;s:14:"project_screen";i:5;s:6:"tables";}', '0000-00-00 00:00:00'),
(14, 'Libary_ED', 'Library Ed Centre', '', '', '', '', 'a:2:{i:0;s:6:"chairs";i:1;s:6:"tables";}', '0000-00-00 00:00:00'),
(15, 'LibraryCourtyard_ED', 'Library Courtyard Ed Centre', '', '', '', '', 'a:2:{i:0;s:6:"chairs";i:1;s:6:"tables";}', '0000-00-00 00:00:00'),
(16, 'LibrarySeminar_ED', 'Library Seminar Room Ed Centre', '', '', '', '', 'a:4:{i:0;s:6:"chairs";i:1;s:9:"computers";i:2;s:6:"tables";i:3;s:22:"interactive_whiteboard";}', '0000-00-00 00:00:00'),
(17, 'LibraryTraining_ED', 'Library Training Room Ed Centre', '', '', '', '', 'a:4:{i:0;s:6:"chairs";i:1;s:9:"computers";i:2;s:14:"project_screen";i:3;s:6:"tables";}', '0000-00-00 00:00:00'),
(18, 'LittleMattuTrainingSuite_RSCH', 'Little Mattu', '', '', '', '', 'a:2:{i:0;s:6:"chairs";i:1;s:6:"tables";}', '0000-00-00 00:00:00'),
(19, 'ParentCraft_RSCH', 'Parent Craft Room OPD 1', '', '', '', '', 'a:0:{}', '0000-00-00 00:00:00'),
(20, 'TrainingSuite_1_RSCH', 'Training Suite 1', '', '', '', '', 'a:4:{i:0;s:6:"chairs";i:1;s:9:"computers";i:2;s:16:"laptop_connector";i:3;s:14:"project_screen";}', '0000-00-00 00:00:00'),
(21, 'TrainingSuite_2_RSCH', 'Training Suite 2', '', '', '', '', 'a:5:{i:0;s:6:"chairs";i:1;s:16:"laptop_connector";i:2;s:14:"project_screen";i:3;s:4:"sink";i:4;s:13:"hospital_beds";}', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mentor_teach`
--

CREATE TABLE IF NOT EXISTS `tbl_mentor_teach` (
  `ID` bigint(20) NOT NULL,
  `user_ID` bigint(20) NOT NULL,
  `course_type_ID` text NOT NULL,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=10000149503 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mentor_teach`
--

INSERT INTO `tbl_mentor_teach` (`ID`, `user_ID`, `course_type_ID`, `date_modified`) VALUES
(10000149502, 10000950341, 'a:2:{i:0;s:11:"10000144633";i:1;s:11:"10000346261";}', '2018-01-12 07:15:16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notes`
--

CREATE TABLE IF NOT EXISTS `tbl_notes` (
  `ID` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `to` bigint(10) NOT NULL,
  `from` bigint(10) NOT NULL,
  `note` text,
  `filepath` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_notes`
--

INSERT INTO `tbl_notes` (`ID`, `date`, `to`, `from`, `note`, `filepath`) VALUES
(16, '2017-07-17 15:08:07', 10000340101, 1, 'bobby', '/Applications/XAMPP/xamppfiles/htdocs/course-management/content/uploads/user_info/Screen Shot 2017-05-31 at 14.33.28.png'),
(17, '2017-07-17 15:11:05', 10000340101, 1, 'trial', '/Applications/XAMPP/xamppfiles/htdocs/course-management/content/uploads/user_info/python.py'),
(18, '2017-07-17 15:26:25', 10000340101, 1, '546', '/Applications/XAMPP/xamppfiles/htdocs/course-management/content/uploads/user_info/xmlgraphics-commons-1.5.jar'),
(19, '2017-07-20 09:55:29', 10000340101, 1, 'This is a really long note, hopefully the table should scale correctly for it. ', '/Applications/XAMPP/xamppfiles/htdocs/course-management/content/uploads/user_info/'),
(20, '2017-07-20 09:55:51', 10000340101, 1, 'This is a really long note, hopefully the table should scale correctly for it. This is a really long note, hopefully the table should scale correctly for it.This is a really long note, hopefully the table should scale correctly for it.', '/Applications/XAMPP/xamppfiles/htdocs/course-management/content/uploads/user_info/');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notifications`
--

CREATE TABLE IF NOT EXISTS `tbl_notifications` (
  `ID` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `title` text NOT NULL,
  `notification` text NOT NULL,
  `read` int(1) NOT NULL DEFAULT '0',
  `hide` int(1) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=734 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_notifications`
--

INSERT INTO `tbl_notifications` (`ID`, `user_id`, `title`, `notification`, `read`, `hide`, `date`) VALUES
(1, 1, 'Users Capabilities updated', 'You have successfully updated users capabilities.', 1, 1, '2017-05-23 19:10:04'),
(2, 1, 'Account Details updated', 'You have successfully update your account details.', 1, 1, '2017-05-23 19:36:57'),
(3, 1, 'Account Details updated', 'You have successfully update your account details.', 1, 1, '2017-05-23 19:37:34'),
(4, 1, 'Password Changed', 'You have successfully changed your account password.', 1, 1, '2017-05-23 19:37:54'),
(5, 1, 'Password Changed', 'You have successfully changed your account password.', 1, 1, '2017-05-23 19:39:34'),
(6, 1, 'New Admin Account Created', 'You have successfully created a new admin account (Mazen Sehgal).', 1, 1, '2017-05-24 11:26:27'),
(7, 1, 'Account Password Reset', 'You have successfully changed (Mazen Sehgal) account password.', 1, 1, '2017-05-24 11:37:45'),
(8, 1, 'Account Details updated', 'You have successfully updated (Mazen Sehgal) account details.', 1, 1, '2017-05-24 11:37:45'),
(9, 1, 'Account Details updated', 'You have successfully updated (Mazen Sehgal) account details.', 1, 1, '2017-05-24 11:38:01'),
(10, 1, 'Account Details updated', 'You have successfully updated (Mazen Sehgal) account details.', 1, 1, '2017-05-24 11:38:05'),
(11, 1, 'Account Details updated', 'You have successfully updated (Mazen Sehgal) account details.', 1, 1, '2017-05-24 11:38:16'),
(12, 1, 'Account deleted', 'You have successfully deleted (Aarav Mehra) account.', 1, 1, '2017-05-24 12:16:04'),
(13, 1, 'Account deleted', 'You have successfully deleted (Mazen Sehgal) account.', 1, 1, '2017-05-24 12:17:26'),
(14, 1, 'Course deleted', 'You have successfully deleted (Hospital A) course.', 1, 1, '2017-05-24 13:20:16'),
(15, 1, 'New Account Created', 'You have successfully created a new account (Course Admin 1).', 1, 1, '2017-05-24 18:46:09'),
(16, 1, 'New course created', 'You have successfully created a new course (Test Course).', 1, 1, '2017-05-24 18:48:14'),
(17, 1, 'Course updated', 'You have successfully updated course (Test Course).', 1, 1, '2017-05-24 18:50:09'),
(18, 1, 'Course deleted', 'You have successfully deleted (Test Course) course.', 1, 1, '2017-05-24 19:02:48'),
(19, 1, 'General Setting updated', 'You have successfully updated website general settings.', 1, 1, '2017-05-24 19:03:32'),
(20, 1, 'New course created', 'You have successfully created a new course (Course One).', 1, 1, '2017-05-24 19:35:21'),
(21, 1, 'New course created', 'You have successfully created a new course (Course Two).', 1, 1, '2017-05-24 19:46:37'),
(22, 1, 'New course created', 'You have successfully created a new course (Course Three).', 1, 1, '2017-05-24 19:47:08'),
(23, 1, 'New course created', 'You have successfully created a new course (Course Four).', 1, 1, '2017-05-24 19:48:45'),
(24, 1, 'New course created', 'You have successfully created a new course (Course Five).', 1, 1, '2017-05-24 19:50:33'),
(25, 1, 'New course created', 'You have successfully created a new course (Course 7).', 1, 1, '2017-05-24 19:56:34'),
(26, 1, 'New course created', 'You have successfully created a new course (Course Eight).', 1, 1, '2017-05-24 19:57:22'),
(27, 1, 'Course updated', 'You have successfully updated course (Course Seven).', 1, 1, '2017-05-24 19:57:39'),
(28, 1, 'Course updated', 'You have successfully updated course (Course Two).', 1, 1, '2017-05-24 19:57:59'),
(29, 1, 'Course updated', 'You have successfully updated course (Course One).', 1, 1, '2017-05-24 19:58:06'),
(30, 1, 'Course updated', 'You have successfully updated course (Course Three).', 1, 1, '2017-05-24 19:58:13'),
(31, 1, 'New booking created', 'You have successfully created a new booking ().', 1, 1, '2017-05-24 20:06:15'),
(32, 1, 'New booking created', 'You have successfully created a new booking ().', 1, 1, '2017-05-24 20:06:37'),
(33, 1, 'New booking created', 'You have successfully created a new booking ().', 1, 1, '2017-05-24 20:08:11'),
(34, 1, 'New booking created', 'You have successfully created a new booking.', 1, 1, '2017-05-24 20:08:47'),
(35, 1, 'New booking created', 'You have successfully created a new booking.', 1, 1, '2017-05-24 20:08:57'),
(36, 1, 'Booking updated', 'You have successfully updated booking.', 1, 1, '2017-05-24 20:10:24'),
(37, 1, 'Booking updated', 'You have successfully updated booking.', 1, 1, '2017-05-24 20:10:32'),
(38, 1, 'New booking created', 'You have successfully created a new booking.', 1, 1, '2017-05-24 20:11:21'),
(39, 1, 'Booking updated', 'You have successfully updated booking.', 1, 1, '2017-05-24 20:11:47'),
(40, 1, 'New Account Created', 'You have successfully created a new account (Nurse One).', 1, 1, '2017-05-24 20:43:49'),
(41, 1, 'New Account Created', 'You have successfully created a new account (Nurse Two).', 1, 1, '2017-05-24 20:45:26'),
(42, 1, 'Booking deleted', 'You have successfully deleted () booking.', 1, 1, '2017-05-24 21:15:39'),
(43, 1, 'Booking deleted', 'You have successfully deleted booking.', 1, 1, '2017-05-24 21:16:29'),
(44, 1, 'Booking deleted', 'You have successfully deleted booking.', 1, 1, '2017-05-24 21:16:32'),
(45, 1, 'Booking deleted', 'You have successfully deleted booking.', 1, 1, '2017-05-24 21:16:34'),
(46, 1, 'Booking deleted', 'You have successfully deleted booking.', 1, 1, '2017-05-24 21:16:36'),
(47, 1, 'Booking deleted', 'You have successfully deleted booking.', 1, 1, '2017-05-24 21:16:38'),
(48, 1, 'Account Details updated', 'You have successfully updated (Nurse Two) account details.', 1, 1, '2017-05-24 21:38:20'),
(49, 1, 'Account Details updated', 'You have successfully updated (Nurse One) account details.', 1, 1, '2017-05-24 21:38:49'),
(50, 1, 'New booking created', 'You have successfully created a new booking.', 1, 1, '2017-05-24 21:39:19'),
(51, 10000242679, 'Booking updated', 'You have successfully updated booking.', 0, 0, '2017-05-24 21:44:35'),
(52, 10000242679, 'Booking updated', 'You have successfully updated booking.', 0, 0, '2017-05-24 21:44:54'),
(53, 10000242679, 'Booking updated', 'You have successfully updated booking.', 0, 0, '2017-05-24 22:49:10'),
(54, 10000242679, 'Account Details updated', 'You have successfully updated (Mazen Sehgal) account details.', 0, 0, '2017-05-24 23:06:25'),
(55, 10000242679, 'Account Details updated', 'You have successfully updated (Mazen Sehgal) account details.', 0, 0, '2017-05-24 23:06:28'),
(56, 10000242679, 'New Account Created', 'You have successfully created a new account (Nurse Three).', 0, 0, '2017-05-24 23:06:54'),
(57, 10000242679, 'New booking created', 'You have successfully created a new booking.', 0, 0, '2017-05-25 10:24:41'),
(58, 10000242679, 'New booking created', 'You have successfully created a new booking.', 0, 0, '2017-05-25 10:24:49'),
(59, 10000242679, 'Users Capabilities updated', 'You have successfully updated users capabilities.', 0, 0, '2017-05-25 10:27:18'),
(60, 10000242679, 'Users Capabilities updated', 'You have successfully updated users capabilities.', 0, 0, '2017-05-25 10:27:28'),
(61, 10000242679, 'Account Password Reset', 'You have successfully changed (Nurse Two) account password.', 0, 0, '2017-05-25 10:49:06'),
(62, 10000242679, 'Account Details updated', 'You have successfully updated (Nurse Two) account details.', 0, 0, '2017-05-25 10:49:06'),
(63, 10000242679, 'Account Details updated', 'You have successfully updated (Course Admin 1) account details.', 0, 0, '2017-05-25 11:01:53'),
(64, 10000242679, 'Account Password Reset', 'You have successfully changed (Course Admin 1) account password.', 0, 0, '2017-05-25 11:02:02'),
(65, 10000242679, 'Account Details updated', 'You have successfully updated (Course Admin 1) account details.', 0, 0, '2017-05-25 11:02:02'),
(66, 10000924747, 'New booking created', 'You have successfully created a new booking.', 0, 0, '2017-05-25 11:08:29'),
(67, 10000242679, 'New designation created', 'You have successfully created a new designation (Test).', 0, 0, '2017-06-06 02:33:32'),
(68, 10000242679, 'Designation updated', 'You have successfully updated designation (Testsdd).', 0, 0, '2017-06-06 02:33:37'),
(69, 10000242679, 'Designation deleted', 'You have successfully deleted (Testsdd) designation.', 0, 0, '2017-06-06 02:33:41'),
(70, 10000242679, 'New designation created', 'You have successfully created a new designation (Test).', 0, 0, '2017-06-06 02:41:24'),
(71, 10000242679, 'New Account Created', 'You have successfully created a new account (Test User).', 0, 0, '2017-06-06 02:41:56'),
(72, 10000242679, 'New location created', 'You have successfully created a new location (Test).', 0, 0, '2017-06-06 03:06:14'),
(73, 10000242679, 'Location updated', 'You have successfully updated location (Test).', 0, 0, '2017-06-06 03:06:55'),
(74, 10000242679, 'New course created', 'You have successfully created a new course (Test).', 0, 0, '2017-06-06 03:11:43'),
(75, 10000242679, 'Account Details updated', 'You have successfully updated (Test User) account details.', 0, 0, '2017-06-06 03:44:59'),
(76, 10000242679, 'New Account Created', 'You have successfully created a new account (Bob Bbb).', 0, 0, '2017-06-06 03:47:44'),
(77, 10000242679, 'New designation created', 'You have successfully created a new designation (Designation 1).', 0, 0, '2017-06-06 10:12:56'),
(78, 10000242679, 'New Account Created', 'You have successfully created a new account (Mazen Sehgal).', 0, 0, '2017-06-06 10:13:52'),
(79, 10000242679, 'Account deleted', 'You have successfully deleted (Mazen Sehgal) account.', 0, 0, '2017-06-06 10:51:11'),
(80, 10000242679, 'New Account Created', 'You have successfully created a new account (Bob Bob).', 0, 0, '2017-06-06 10:51:34'),
(81, 10000242679, 'Account deleted', 'You have successfully deleted (Bob Bob) account.', 0, 0, '2017-06-06 10:52:01'),
(82, 10000242679, 'Account Details updated', 'You have successfully updated (Bob Bbo) account details.', 0, 0, '2017-06-06 10:56:03'),
(83, 10000242679, 'Account deleted', 'You have successfully deleted (Bob Bbo) account.', 0, 0, '2017-06-06 10:57:03'),
(84, 10000242679, 'New Account Created', 'You have successfully created a new account (Other Account).', 0, 0, '2017-06-06 10:59:00'),
(85, 10000242679, 'Account Details updated', 'You have successfully updated (Other Account) account details.', 0, 0, '2017-06-06 10:59:20'),
(86, 10000242679, 'New Account Created', 'You have successfully created a new account (Mazen Sehgal).', 0, 0, '2017-06-06 11:06:55'),
(87, 10000242679, 'Account Password Reset', 'You have successfully changed (Mazen Sehgal) account password.', 0, 0, '2017-06-06 11:07:29'),
(88, 10000242679, 'Account Details updated', 'You have successfully updated (Mazen Sehgal) account details.', 0, 0, '2017-06-06 11:07:29'),
(89, 10000242679, 'Account Details updated', 'You have successfully updated (Mazen Sehgal) account details.', 0, 0, '2017-06-06 11:37:36'),
(90, 10000242679, 'New designation created', 'You have successfully created a new designation (werwer).', 0, 0, '2017-06-06 11:46:35'),
(91, 10000242679, 'Designation deleted', 'You have successfully deleted (werwer) designation.', 0, 0, '2017-06-06 11:46:43'),
(92, 10000242679, 'Designation deleted', 'You have successfully deleted (Designation 1) designation.', 0, 0, '2017-06-06 11:46:46'),
(93, 10000242679, 'Account Details updated', 'You have successfully updated (Mazen Sehgal) account details.', 0, 0, '2017-06-06 11:57:53'),
(94, 10000242679, 'Account Details updated', 'You have successfully updated (Mazen Sehgal) account details.', 0, 0, '2017-06-06 12:03:38'),
(95, 10000242679, 'Account Details updated', 'You have successfully updated (Mazen Sehgal) account details.', 0, 0, '2017-06-06 12:03:50'),
(96, 10000242679, 'Account Details updated', 'You have successfully updated (Mazen Sehgal) account details.', 0, 0, '2017-06-06 12:08:41'),
(97, 10000242679, 'Account Details updated', 'You have successfully updated (Mazen Sehgal) account details.', 0, 0, '2017-06-06 12:08:44'),
(98, 10000242679, 'New location created', 'You have successfully created a new location (Bob).', 0, 0, '2017-06-06 13:01:56'),
(99, 10000242679, 'Location deleted', 'You have successfully deleted (Bob) Work Area.', 0, 0, '2017-06-06 13:08:09'),
(100, 10000242679, 'New location created', 'You have successfully created a new location (bob).', 0, 0, '2017-06-06 13:08:26'),
(101, 10000242679, 'Location updated', 'You have successfully updated Work Area (bobby).', 0, 0, '2017-06-06 13:38:15'),
(102, 10000242679, 'New Account Created', 'You have successfully created a new account (Bbb Bbb).', 0, 0, '2017-06-06 16:09:08'),
(103, 10000242679, 'Account Details updated', 'You have successfully updated (Bbb Bbb) account details.', 0, 0, '2017-06-06 16:30:21'),
(104, 10000242679, 'Account Password Reset', 'You have successfully changed (Bbb Bbb) account password.', 0, 0, '2017-06-08 08:45:41'),
(105, 10000242679, 'Account Details updated', 'You have successfully updated (Bbb Bbb) account details.', 0, 0, '2017-06-08 08:45:41'),
(106, 10000242679, 'New location created', 'You have successfully created a new location (Imaging Lab).', 0, 0, '2017-06-08 08:48:50'),
(107, 10000242679, 'New course created', 'You have successfully created a new course (STP Course).', 0, 0, '2017-06-08 08:49:13'),
(108, 10000242679, 'Account Details updated', 'You have successfully updated (Bbb Bbb) account details.', 0, 0, '2017-06-08 08:49:24'),
(109, 10000242679, 'Users Capabilities updated', 'You have successfully updated users capabilities.', 0, 0, '2017-06-08 09:02:15'),
(110, 10000242679, 'Users Capabilities updated', 'You have successfully updated users capabilities.', 0, 0, '2017-06-08 09:02:18'),
(111, 10000242679, 'Users Capabilities updated', 'You have successfully updated users capabilities.', 0, 0, '2017-06-08 09:04:22'),
(112, 10000242679, 'Users Capabilities updated', 'You have successfully updated users capabilities.', 0, 0, '2017-06-08 09:04:24'),
(113, 10000242679, 'New booking created', 'You have successfully created a new booking.', 0, 0, '2017-06-08 12:01:08'),
(114, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-12 12:39:51'),
(115, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-12 12:40:29'),
(116, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-12 12:41:40'),
(117, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-12 12:43:37'),
(118, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-12 12:47:49'),
(119, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-12 12:57:57'),
(120, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-12 13:01:42'),
(121, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-12 13:08:26'),
(122, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-12 13:09:57'),
(123, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-12 13:17:30'),
(124, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-12 13:21:31'),
(125, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-12 13:25:17'),
(126, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-12 13:36:47'),
(127, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-12 13:42:57'),
(128, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-12 13:44:10'),
(129, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-12 13:45:57'),
(130, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-12 13:51:19'),
(131, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-12 13:52:07'),
(132, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-12 13:54:42'),
(133, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-12 15:15:55'),
(134, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-12 15:17:21'),
(135, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-12 15:19:03'),
(136, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-12 15:25:50'),
(137, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-12 15:28:13'),
(138, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-12 15:36:41'),
(139, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-12 15:39:45'),
(140, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-13 08:30:35'),
(141, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-13 08:39:18'),
(142, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-13 08:41:45'),
(143, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-13 09:16:36'),
(144, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-13 09:43:24'),
(145, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-13 09:44:39'),
(146, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-13 10:44:07'),
(147, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-13 10:54:54'),
(148, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-13 11:05:46'),
(149, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-13 11:05:59'),
(150, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-13 11:23:53'),
(151, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-13 11:26:15'),
(152, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-13 11:29:46'),
(153, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-13 11:31:57'),
(154, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-13 11:38:25'),
(155, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-13 12:26:41'),
(156, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-13 12:28:34'),
(157, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-13 12:35:22'),
(158, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-13 12:55:54'),
(159, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-13 12:57:38'),
(160, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-13 13:11:05'),
(161, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-13 13:12:04'),
(162, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-13 13:13:48'),
(163, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-13 13:14:41'),
(164, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-13 13:33:14'),
(165, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-13 13:47:42'),
(166, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-13 13:47:52'),
(167, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-13 14:22:08'),
(168, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-19 09:09:22'),
(169, 10000242679, 'New Account Created', 'You have successfully created a new account (Dsf Sdf).', 0, 0, '2017-06-19 09:30:00'),
(170, 10000242679, 'New Account Created', 'You have successfully created a new account (Sdf Qwe).', 0, 0, '2017-06-19 09:39:55'),
(171, 10000242679, 'New Account Created', 'You have successfully created a new account (Te St).', 0, 0, '2017-06-19 09:41:15'),
(172, 10000242679, 'New Account Created', 'You have successfully created a new account (Te St).', 0, 0, '2017-06-19 09:41:59'),
(173, 10000242679, 'New Account Created', 'You have successfully created a new account (Qw Er).', 0, 0, '2017-06-19 09:43:15'),
(174, 10000242679, 'New Account Created', 'You have successfully created a new account (Te St).', 0, 0, '2017-06-19 09:43:56'),
(175, 10000242679, 'New Account Created', 'You have successfully created a new account (Te St).', 0, 0, '2017-06-19 09:43:58'),
(176, 10000242679, 'New Account Created', 'You have successfully created a new account (Te St).', 0, 0, '2017-06-19 09:43:59'),
(177, 10000242679, 'New Account Created', 'You have successfully created a new account (Te St).', 0, 0, '2017-06-19 09:43:59'),
(178, 10000242679, 'New Account Created', 'You have successfully created a new account (Te St).', 0, 0, '2017-06-19 09:45:09'),
(179, 10000242679, 'New Account Created', 'You have successfully created a new account (Te St).', 0, 0, '2017-06-19 09:48:06'),
(180, 10000242679, 'New Account Created', 'You have successfully created a new account (Te St).', 0, 0, '2017-06-19 09:49:50'),
(181, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-19 09:54:47'),
(182, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-19 09:56:15'),
(183, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-19 09:59:04'),
(184, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-19 10:00:24'),
(185, 10000242679, 'New Cohort created', 'You have successfully created a new Cohort (test).', 0, 0, '2017-06-19 11:03:57'),
(186, 10000242679, 'New Cohort created', 'You have successfully created a new Cohort (test).', 0, 0, '2017-06-19 11:14:30'),
(187, 10000242679, 'Course deleted', 'You have successfully deleted (test) Cohort.', 0, 0, '2017-06-19 11:36:56'),
(188, 10000242679, 'New Cohort created', 'You have successfully created a new Cohort (test).', 0, 0, '2017-06-19 11:41:44'),
(189, 10000242679, 'Course deleted', 'You have successfully deleted (test) Cohort.', 0, 0, '2017-06-19 11:44:15'),
(190, 10000242679, 'New Cohort created', 'You have successfully created a new Cohort (test).', 0, 0, '2017-06-19 11:45:01'),
(191, 10000242679, 'Course deleted', 'You have successfully deleted (test) Cohort.', 0, 0, '2017-06-19 11:45:11'),
(192, 10000242679, 'New Cohort created', 'You have successfully created a new Cohort (test).', 0, 0, '2017-06-19 11:45:20'),
(193, 10000242679, 'Course updated', 'You have successfully updated course (test).', 0, 0, '2017-06-19 12:02:26'),
(194, 10000242679, 'Course deleted', 'You have successfully deleted (test) Cohort.', 0, 0, '2017-06-19 12:19:13'),
(195, 10000242679, 'New Cohort created', 'You have successfully created a new Cohort (Adult Cohort).', 0, 0, '2017-06-19 12:20:51'),
(196, 10000242679, 'New Cohort created', 'You have successfully created a new Cohort (Overseas Cohort).', 0, 0, '2017-06-19 12:26:00'),
(197, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-19 14:20:38'),
(198, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-19 14:28:07'),
(199, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-19 14:30:33'),
(200, 10000242679, 'Account Information', 'You have successfully updated the Student record progress', 0, 0, '2017-06-19 14:31:58'),
(201, 10000242679, 'Account Information', 'You have successfully updated the Student record progress', 0, 0, '2017-06-19 14:34:15'),
(202, 10000242679, 'Account Information', 'You have successfully updated the Student record progress', 0, 0, '2017-06-19 14:40:28'),
(203, 10000242679, 'Account Information', 'You have successfully updated the Student record progress', 0, 0, '2017-06-19 14:41:10'),
(204, 10000242679, 'Account Information', 'You have successfully updated the Student record progress', 0, 0, '2017-06-19 14:46:40'),
(205, 10000242679, 'Account Information', 'You have successfully updated the Student record progress', 0, 0, '2017-06-19 14:47:53'),
(206, 10000242679, 'Account Information', 'You have successfully updated the Student record progress', 0, 0, '2017-06-19 14:50:13'),
(207, 10000242679, 'Account Information', 'You have successfully updated the Student record progress', 0, 0, '2017-06-19 14:52:22'),
(208, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-19 14:53:58'),
(209, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-19 14:57:10'),
(210, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-19 14:59:59'),
(211, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-19 15:19:35'),
(212, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-19 15:21:47'),
(213, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-19 15:24:50'),
(214, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-19 15:27:38'),
(215, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-19 15:29:16'),
(216, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-19 15:31:17'),
(217, 10000242679, 'General Setting updated', 'You have successfully updated website general settings.', 0, 0, '2017-06-22 07:15:19'),
(218, 10000242679, 'General Setting updated', 'You have successfully updated website general settings.', 0, 0, '2017-06-22 07:15:40'),
(219, 10000242679, 'General Setting updated', 'You have successfully updated website general settings.', 0, 0, '2017-06-22 07:15:48'),
(220, 10000242679, 'General Setting updated', 'You have successfully updated website general settings.', 0, 0, '2017-06-22 07:15:59'),
(221, 10000318028, 'Location updated', 'You have successfully updated location (Training Suite 2).', 0, 0, '2017-06-22 08:10:51'),
(222, 10000318028, 'Location updated', 'You have successfully updated location (Training Suite 2).', 0, 0, '2017-06-22 08:11:16'),
(223, 10000318028, 'Location updated', 'You have successfully updated location (Training Suite 1).', 0, 0, '2017-06-22 08:11:38'),
(224, 10000318028, 'Location updated', 'You have successfully updated location (Parent Craft Room OPD 1).', 0, 0, '2017-06-22 08:11:50'),
(225, 10000318028, 'Location updated', 'You have successfully updated location (Parent Craft Room OPD 1).', 0, 0, '2017-06-22 08:11:52'),
(226, 10000318028, 'Location updated', 'You have successfully updated location (Little Mattu).', 0, 0, '2017-06-22 08:12:07'),
(227, 10000318028, 'Location updated', 'You have successfully updated location (Library Training Room Ed Centre).', 0, 0, '2017-06-22 08:12:26'),
(228, 10000318028, 'Location updated', 'You have successfully updated location (Library Seminar Room Ed Centre).', 0, 0, '2017-06-22 08:12:45'),
(229, 10000318028, 'Location updated', 'You have successfully updated location (Library Courtyard Ed Centre).', 0, 0, '2017-06-22 08:12:56'),
(230, 10000318028, 'Location updated', 'You have successfully updated location (Library Ed Centre).', 0, 0, '2017-06-22 08:13:05'),
(231, 10000318028, 'Location updated', 'You have successfully updated location (A8 Ed Centre).', 0, 0, '2017-06-22 08:13:16'),
(232, 10000318028, 'Location updated', 'You have successfully updated location (A7 Ed Centre).', 0, 0, '2017-06-22 08:13:24'),
(233, 10000318028, 'Location updated', 'You have successfully updated location (A6 Ed Centre).', 0, 0, '2017-06-22 08:13:32'),
(234, 10000318028, 'Location updated', 'You have successfully updated location (A5 Ed Centre).', 0, 0, '2017-06-22 08:13:39'),
(235, 10000318028, 'Location updated', 'You have successfully updated location (A4 Ed Centre).', 0, 0, '2017-06-22 08:13:46'),
(236, 10000318028, 'Location updated', 'You have successfully updated location (A3 Ed Centre).', 0, 0, '2017-06-22 08:13:53'),
(237, 10000318028, 'Location updated', 'You have successfully updated location (A2 Ed Centre).', 0, 0, '2017-06-22 08:14:00'),
(238, 10000318028, 'Location updated', 'You have successfully updated location (A1 ED Centre).', 0, 0, '2017-06-22 08:14:10'),
(239, 10000318028, 'Location updated', 'You have successfully updated location (Anesthetic Seminar Room).', 0, 0, '2017-06-22 08:14:31'),
(240, 10000318028, 'Location updated', 'You have successfully updated location (B1 Ed Centre).', 0, 0, '2017-06-22 08:15:06'),
(241, 10000318028, 'Location updated', 'You have successfully updated location (B2 Ed Centre).', 0, 0, '2017-06-22 08:15:37'),
(242, 10000318028, 'Location updated', 'You have successfully updated location (Canteen Level A).', 0, 0, '2017-06-22 08:16:09'),
(243, 10000318028, 'Location updated', 'You have successfully updated location (Lecture Theatre).', 0, 0, '2017-06-22 08:16:35'),
(244, 10000318028, 'Course deleted', 'You have successfully deleted (CourseName) course.', 0, 0, '2017-06-22 09:58:57'),
(245, 1, 'Account Details updated', 'You have successfully updated (Victoria Wilding) account details.', 1, 1, '2017-06-22 10:20:27'),
(246, 1, 'Account Details updated', 'You have successfully updated (Venson Nuevas) account details.', 1, 1, '2017-06-22 10:21:57'),
(247, 1, 'Account Details updated', 'You have successfully updated (Vanessa Pasquier) account details.', 1, 1, '2017-06-22 10:22:51'),
(248, 1, 'Account Details updated', 'You have successfully updated (Susie Regan) account details.', 1, 1, '2017-06-22 10:23:26'),
(249, 1, 'Account Details updated', 'You have successfully updated (Sue Lore) account details.', 1, 1, '2017-06-22 10:24:00'),
(250, 1, 'Account Details updated', 'You have successfully updated (Simon Pawlin) account details.', 1, 1, '2017-06-22 10:24:53'),
(251, 1, 'Account Details updated', 'You have successfully updated (Sally Whitehouse) account details.', 1, 1, '2017-06-22 10:26:42'),
(252, 1, 'Account Details updated', 'You have successfully updated (Mary Raleigh) account details.', 1, 1, '2017-06-22 10:27:22'),
(253, 1, 'Account Details updated', 'You have successfully updated (Lisa Blazhevski) account details.', 1, 1, '2017-06-22 10:27:57'),
(254, 1, 'Account Details updated', 'You have successfully updated (Julie Bowler) account details.', 1, 1, '2017-06-22 10:28:39'),
(255, 1, 'Account Details updated', 'You have successfully updated (Julianne Rigby) account details.', 1, 1, '2017-06-22 10:29:19'),
(256, 1, 'Account Details updated', 'You have successfully updated (Judith Williamson) account details.', 1, 1, '2017-06-22 10:30:18'),
(257, 1, 'Account Details updated', 'You have successfully updated (Jean Ashfield) account details.', 1, 1, '2017-06-22 10:31:24'),
(258, 1, 'Account Details updated', 'You have successfully updated (Gill Haddock) account details.', 1, 1, '2017-06-22 10:32:06'),
(259, 1, 'Account Details updated', 'You have successfully updated (Deanna Hodge) account details.', 1, 1, '2017-06-22 10:32:54'),
(260, 1, 'Account Details updated', 'You have successfully updated (Caroline Eynon) account details.', 1, 1, '2017-06-22 10:34:24'),
(261, 1, 'Account Details updated', 'You have successfully updated (Caroline Covey) account details.', 1, 1, '2017-06-22 10:35:13'),
(262, 1, 'Account Details updated', 'You have successfully updated (Alison Oram) account details.', 1, 1, '2017-06-22 10:37:22'),
(263, 1, 'Account Details updated', 'You have successfully updated (Jean Ashfield) account details.', 1, 1, '2017-06-22 10:39:20'),
(264, 1, 'Course updated', 'You have successfully updated course (Link_Jan15).', 1, 1, '2017-06-22 10:55:49'),
(265, 1, 'Course updated', 'You have successfully updated course (BEACH_DEC14).', 1, 1, '2017-06-22 11:26:16'),
(266, 1, 'Course updated', 'You have successfully updated course (BEACH Course).', 1, 1, '2017-06-22 11:26:30'),
(267, 1, 'Course updated', 'You have successfully updated course (Mentor Sign-Off_1).', 1, 1, '2017-06-22 11:28:13'),
(268, 1, 'Course updated', 'You have successfully updated course (Study Day 2).', 1, 1, '2017-06-22 11:37:05'),
(269, 1, 'Users Capabilities updated', 'You have successfully updated users capabilities.', 1, 1, '2017-06-22 12:27:26'),
(270, 1, 'Account Details updated', 'You have successfully update your account details.', 1, 1, '2017-06-22 12:49:28'),
(271, 1, 'New Account Created', 'You have successfully created a new account (Te St).', 1, 1, '2017-06-22 13:03:26'),
(272, 1, 'Account deleted', 'You have successfully deleted (Te St) account.', 1, 1, '2017-06-22 13:06:18'),
(273, 1, 'Account Details updated', 'You have successfully updated (Victoria Wilding) account details.', 1, 1, '2017-06-22 13:32:31'),
(274, 1, 'Account Details updated', 'You have successfully updated (Victoria Wilding) account details.', 1, 1, '2017-06-22 13:32:47'),
(275, 1, 'New course created', 'You have successfully created a new course (test).', 1, 1, '2017-06-22 13:35:33'),
(276, 1, 'Course updated', 'You have successfully updated course (Study Day 2).', 1, 1, '2017-06-22 13:38:42'),
(277, 1, 'Course updated', 'You have successfully updated course (Study Day 2).', 1, 1, '2017-06-22 13:38:46'),
(278, 1, 'New location created', 'You have successfully created a new location (test).', 1, 1, '2017-06-22 13:41:41'),
(279, 1, 'Location updated', 'You have successfully updated location (test).', 1, 1, '2017-06-22 13:41:51'),
(280, 1, 'Location updated', 'You have successfully updated location (test).', 1, 1, '2017-06-22 13:41:54'),
(281, 1, 'Location deleted', 'You have successfully deleted (test) location.', 1, 1, '2017-06-22 13:42:03'),
(282, 1, 'Centre (None) is approved now', 'You have successfully approved (None) centre.', 1, 1, '2017-06-22 13:59:59'),
(283, 1, 'Centre (None) is disables now', 'You have successfully disabled (None) centre.', 1, 1, '2017-06-22 14:00:06'),
(284, 1, 'Course updated', 'You have successfully updated course (Adult Cohort).', 1, 1, '2017-06-26 09:18:20'),
(285, 1, 'Course_admin Account Disabled', 'You have successfully disbled (Victoria Wilding) account.', 1, 1, '2017-07-07 11:06:21'),
(286, 1, 'Course_admin Account Enabled', 'You have successfully enabled (Victoria Wilding) account.', 1, 1, '2017-07-07 11:06:22'),
(287, 1, 'New Account Created', 'You have successfully created a new account (James Leighs).', 1, 1, '2017-07-14 13:52:41'),
(288, 1, 'Users Capabilities updated', 'You have successfully updated users capabilities.', 1, 1, '2017-07-14 13:57:58'),
(289, 1, 'Account Details updated', 'You have successfully updated (James Leighs) account details.', 1, 1, '2017-07-17 09:57:32'),
(290, 1, 'Account Details updated', 'You have successfully updated (James Leighs) account details.', 1, 1, '2017-07-17 09:58:04'),
(291, 1, 'Account Details updated', 'You have successfully updated (James Leighs) account details.', 1, 1, '2017-07-17 10:01:08'),
(292, 1, 'Account Details updated', 'You have successfully updated (James Leighs) account details.', 1, 1, '2017-07-17 10:05:06'),
(293, 1, 'Account Details updated', 'You have successfully updated (James Leighs) account details.', 1, 1, '2017-07-17 10:12:33'),
(294, 1, 'Account Details updated', 'You have successfully updated (James Leighs) account details.', 1, 1, '2017-07-17 10:13:31'),
(295, 1, 'Account Details updated', 'You have successfully updated (James Leighs) account details.', 1, 1, '2017-07-17 10:14:00'),
(296, 1, 'Account Details updated', 'You have successfully updated (James Leighs) account details.', 1, 1, '2017-07-17 10:14:39'),
(297, 1, 'Account Details updated', 'You have successfully updated (James Leighs) account details.', 1, 1, '2017-07-17 10:14:47'),
(298, 1, 'Account Details updated', 'You have successfully updated (James Leighs) account details.', 1, 1, '2017-07-17 10:26:15'),
(299, 1, 'Account Details updated', 'You have successfully updated (James Leighs) account details.', 1, 1, '2017-07-17 10:26:57'),
(300, 1, 'New Account Created', 'You have successfully created a new account (Bob Bob).', 1, 1, '2017-07-17 10:29:02'),
(301, 1, 'New Account Created', 'You have successfully created a new account (Bob Bob).', 1, 1, '2017-07-17 10:29:05'),
(302, 1, 'New Account Created', 'You have successfully created a new account (Bob Bob).', 1, 1, '2017-07-17 10:30:25'),
(303, 1, 'New Account Created', 'You have successfully created a new account (Bob Bob).', 1, 1, '2017-07-17 10:30:25'),
(304, 1, 'New Account Created', 'You have successfully created a new account (Bob Bob).', 1, 1, '2017-07-17 10:30:25'),
(305, 1, 'New Account Created', 'You have successfully created a new account (Bob Bob).', 1, 1, '2017-07-17 10:30:25'),
(306, 1, 'New Account Created', 'You have successfully created a new account (Bob Bob).', 1, 1, '2017-07-17 10:30:25'),
(307, 1, 'New Account Created', 'You have successfully created a new account (Bob Bob).', 1, 1, '2017-07-17 10:30:26'),
(308, 1, 'New Account Created', 'You have successfully created a new account (Bob Bob).', 1, 1, '2017-07-17 10:30:26'),
(309, 1, 'New Account Created', 'You have successfully created a new account (Bob Bob).', 1, 1, '2017-07-17 10:30:27'),
(310, 1, 'New Account Created', 'You have successfully created a new account (Bob Bob).', 1, 1, '2017-07-17 10:30:27'),
(311, 1, 'New Account Created', 'You have successfully created a new account (Bob Bob).', 1, 1, '2017-07-17 10:30:27'),
(312, 1, 'New Account Created', 'You have successfully created a new account (Bob Bob).', 1, 1, '2017-07-17 10:30:28'),
(313, 1, 'New Account Created', 'You have successfully created a new account (Bob Bob).', 1, 1, '2017-07-17 10:30:28'),
(314, 1, 'New Account Created', 'You have successfully created a new account (Bob Bob).', 1, 1, '2017-07-17 10:31:25'),
(315, 1, 'Account Details updated', 'You have successfully updated (James Leighs) account details.', 1, 1, '2017-07-17 12:42:28'),
(316, 1, 'Account Information', 'You have successfully updated preceptor progress', 1, 1, '2017-07-17 13:23:59'),
(317, 1, 'Account Information', 'You have successfully updated preceptor progress', 1, 1, '2017-07-17 13:26:05'),
(318, 1, 'Account Information', 'You have successfully updated preceptor progress', 1, 1, '2017-07-17 13:41:54'),
(319, 1, 'Account Information', 'You have successfully updated preceptor progress', 1, 1, '2017-07-17 13:50:01'),
(320, 1, 'Account Information', 'You have successfully updated preceptor progress', 1, 1, '2017-07-17 13:55:02'),
(321, 1, 'Account Information', 'You have successfully updated preceptor progress', 1, 1, '2017-07-17 13:55:29'),
(322, 1, 'Account Information', 'You have successfully updated preceptor progress', 1, 1, '2017-07-17 13:57:22'),
(323, 1, 'Account Information', 'You have successfully updated preceptor progress', 1, 1, '2017-07-17 14:01:16'),
(324, 1, 'Account Information', 'You have successfully updated preceptor progress', 1, 1, '2017-07-17 14:33:04'),
(325, 1, 'Account Information', 'You have successfully updated preceptor progress', 1, 1, '2017-07-17 14:35:41'),
(326, 1, 'Account Information', 'You have successfully updated preceptor progress', 1, 1, '2017-07-17 14:35:58'),
(327, 1, 'Account Information', 'You have successfully updated preceptor progress', 1, 1, '2017-07-17 14:40:41'),
(328, 1, 'Account Information', 'You have successfully updated preceptor progress', 1, 1, '2017-07-17 14:42:00'),
(329, 1, 'Account Information', 'You have successfully updated preceptor progress', 1, 1, '2017-07-17 15:03:37'),
(330, 1, 'Account Information', 'You have successfully updated preceptor progress', 1, 1, '2017-07-17 15:05:33'),
(331, 1, 'Account Information', 'You have successfully updated preceptor progress', 1, 1, '2017-07-17 15:08:07'),
(332, 1, 'Account Information', 'You have successfully updated preceptor progress', 1, 1, '2017-07-17 15:11:05'),
(333, 1, 'Account Information', 'You have successfully updated preceptor progress', 1, 1, '2017-07-17 15:26:25'),
(334, 1, 'New course created', 'You have successfully created a new course (ayyy).', 1, 1, '2017-07-19 13:54:02'),
(335, 1, 'New course created', 'You have successfully created a new course (maz).', 1, 1, '2017-07-19 13:57:37'),
(336, 1, 'New course created', 'You have successfully created a new course (Test).', 1, 1, '2017-07-19 14:14:16'),
(337, 1, 'New course created', 'You have successfully created a new course (ttt).', 1, 1, '2017-07-19 14:17:48'),
(338, 1, 'New course created', 'You have successfully created a new course (test).', 1, 1, '2017-07-19 14:21:09'),
(339, 1, 'New course created', 'You have successfully created a new course (another test).', 1, 1, '2017-07-19 14:22:27'),
(340, 1, 'Course updated', 'You have successfully updated course (another test).', 1, 1, '2017-07-19 14:23:16'),
(341, 1, 'Account Details updated', 'You have successfully updated (James Leighs) account details.', 1, 1, '2017-07-19 14:38:59'),
(342, 1, 'New booking created', 'You have successfully created a new booking.', 1, 1, '2017-07-19 14:39:25'),
(343, 1, 'Account Information', 'You have successfully updated preceptor progress', 1, 1, '2017-07-20 09:53:05'),
(344, 1, 'Account Information', 'You have successfully updated preceptor progress', 1, 1, '2017-07-20 09:54:23'),
(345, 1, 'Account Information', 'You have successfully updated preceptor progress', 1, 1, '2017-07-20 09:55:29'),
(346, 1, 'Account Information', 'You have successfully updated preceptor progress', 1, 1, '2017-07-20 09:55:51'),
(347, 1, 'Booking deleted', 'You have successfully deleted booking.', 1, 1, '2017-07-20 09:56:24'),
(348, 1, 'New booking created', 'You have successfully created a new booking.', 1, 1, '2017-07-20 10:19:17'),
(349, 1, 'New booking created', 'You have successfully created a new booking.', 1, 1, '2017-07-20 10:25:31'),
(350, 1, 'New Account Created', 'You have successfully created a new account (Sandra Gomes).', 1, 1, '2017-07-20 12:14:46'),
(351, 1, 'Booking deleted', 'You have successfully deleted booking.', 1, 1, '2017-07-20 12:35:24'),
(352, 1, 'Booking deleted', 'You have successfully deleted booking.', 1, 1, '2017-07-20 12:35:27'),
(353, 1, 'New booking created', 'You have successfully created a new booking.', 1, 1, '2017-07-20 12:35:40'),
(354, 1, 'New booking created', 'You have successfully created a new booking.', 1, 1, '2017-07-20 12:38:12'),
(355, 1, 'Booking deleted', 'You have successfully deleted booking.', 1, 1, '2017-07-20 12:40:15'),
(356, 1, 'New booking created', 'You have successfully created a new booking.', 1, 1, '2017-07-20 12:40:25'),
(357, 1, 'New booking created', 'You have successfully created a new booking.', 1, 1, '2017-07-20 12:41:39'),
(358, 1, 'New booking created', 'You have successfully created a new booking.', 1, 1, '2017-07-20 12:46:47'),
(359, 1, 'New booking created', 'You have successfully created a new booking.', 1, 1, '2017-07-20 12:50:47'),
(360, 1, 'Booking updated', 'You have successfully updated booking.', 1, 1, '2017-07-20 14:19:29'),
(361, 1, 'Booking updated', 'You have successfully updated booking.', 1, 1, '2017-07-25 05:14:50'),
(362, 1, 'Booking updated', 'You have successfully updated booking.', 1, 1, '2017-07-25 05:18:47'),
(363, 1, 'Booking updated', 'You have successfully updated booking.', 1, 1, '2017-07-25 05:19:02'),
(364, 1, 'Booking updated', 'You have successfully updated booking.', 1, 1, '2017-07-25 05:19:22'),
(365, 1, 'Booking deleted', 'You have successfully deleted booking.', 1, 1, '2017-07-25 05:58:25'),
(366, 1, 'Booking deleted', 'You have successfully deleted booking.', 1, 1, '2017-07-25 05:58:27'),
(367, 1, 'New booking created', 'You have successfully created a new booking.', 1, 1, '2017-07-25 06:00:24'),
(368, 1, 'New booking created', 'You have successfully created a new booking.', 1, 1, '2017-07-25 06:02:37'),
(369, 1, 'Booking deleted', 'You have successfully deleted booking.', 1, 1, '2017-07-25 06:12:38'),
(370, 1, 'Booking deleted', 'You have successfully deleted booking.', 1, 1, '2017-07-25 06:12:40'),
(371, 1, 'New booking created', 'You have successfully created a new booking.', 1, 1, '2017-07-25 06:14:49'),
(372, 1, 'New booking created', 'You have successfully created a new booking.', 1, 1, '2017-07-25 06:22:29'),
(373, 1, 'Booking deleted', 'You have successfully deleted booking.', 1, 1, '2017-07-25 06:24:21'),
(374, 1, 'Booking deleted', 'You have successfully deleted booking.', 1, 1, '2017-07-25 06:24:23'),
(375, 1, 'New booking created', 'You have successfully created a new booking.', 1, 1, '2017-07-25 06:24:29'),
(376, 1, 'New booking created', 'You have successfully created a new booking.', 1, 1, '2017-07-25 06:25:49'),
(377, 1, 'Booking deleted', 'You have successfully deleted booking.', 1, 1, '2017-07-25 06:26:19'),
(378, 1, 'Booking deleted', 'You have successfully deleted booking.', 1, 1, '2017-07-25 06:26:21'),
(379, 1, 'New booking created', 'You have successfully created a new booking.', 1, 1, '2017-07-25 06:26:33'),
(380, 1, 'New booking created', 'You have successfully created a new booking.', 1, 1, '2017-07-25 06:28:43'),
(381, 1, 'Booking deleted', 'You have successfully deleted booking.', 1, 1, '2017-07-25 06:29:31'),
(382, 1, 'Booking deleted', 'You have successfully deleted booking.', 1, 1, '2017-07-25 06:29:33'),
(383, 1, 'New booking created', 'You have successfully created a new booking.', 1, 1, '2017-07-25 06:29:41'),
(384, 1, 'New booking created', 'You have successfully created a new booking.', 1, 1, '2017-07-25 06:30:16'),
(385, 1, 'Booking updated', 'You have successfully updated booking.', 1, 1, '2017-07-25 06:38:06'),
(386, 1, 'Booking updated', 'You have successfully updated booking.', 1, 1, '2017-07-25 06:38:46'),
(387, 1, 'Nurse Account Disabled', 'You have successfully disbled (Sandra Gomes) account.', 1, 1, '2017-08-18 08:06:21'),
(388, 1, 'Nurse Account Enabled', 'You have successfully enabled (Sandra Gomes) account.', 1, 1, '2017-08-18 08:06:22'),
(389, 1, 'User Course Details updated', 'You have successfully updated (Sandra Gomes) course details.', 1, 1, '2017-08-18 09:39:38'),
(390, 1, 'User Course Details updated', 'You have successfully updated (James Leighs) course details.', 1, 1, '2017-08-18 09:39:54'),
(391, 1, 'Account Details updated', 'You have successfully updated (Sandra Gomes) account details.', 1, 1, '2017-08-18 10:19:35'),
(392, 1, 'Account Details updated', 'You have successfully updated (James Leighs) account details.', 1, 1, '2017-08-18 10:19:59'),
(393, 1, 'Nurse Account Disabled', 'You have successfully disbled (Sandra Gomes) account.', 1, 1, '2017-08-18 11:20:38'),
(394, 1, 'Nurse Account Enabled', 'You have successfully enabled (Sandra Gomes) account.', 1, 1, '2017-08-18 11:20:46'),
(395, 1, 'User Course Details updated', 'You have successfully updated (Sandra Gomes) course details.', 1, 1, '2017-08-18 18:20:52'),
(396, 1, 'Account Details updated', 'You have successfully updated (Sandra Gomes) account details.', 1, 1, '2017-08-20 20:34:13'),
(397, 1, 'Account Details updated', 'You have successfully updated (James Leighs) account details.', 1, 1, '2017-08-20 20:34:20'),
(398, 1, 'New course created', 'You have successfully created a new course type: (Test).', 1, 1, '2017-08-20 20:51:56'),
(399, 1, 'Course deleted', 'You have successfully deleted (Test) course Type.', 1, 1, '2017-08-20 20:57:24'),
(400, 1, 'New course created', 'You have successfully created a new course type: (test).', 1, 1, '2017-08-20 20:57:31'),
(401, 1, 'New course created', 'You have successfully created a new course type: (trial).', 1, 1, '2017-08-20 20:57:41'),
(402, 1, 'Course updated', 'You have successfully updated course type (ayyy).', 1, 1, '2017-08-20 20:57:50'),
(403, 1, 'Booking deleted', 'You have successfully deleted booking.', 1, 1, '2017-08-20 21:15:49'),
(404, 1, 'Booking deleted', 'You have successfully deleted booking.', 1, 1, '2017-08-20 21:15:51'),
(405, 1, 'New booking created', 'You have successfully created a new booking.', 1, 1, '2017-08-20 21:27:59'),
(406, 1, 'New booking created', 'You have successfully created a new booking.', 1, 1, '2017-08-20 21:29:40'),
(407, 1, 'Booking updated', 'You have successfully updated booking.', 1, 1, '2017-08-20 22:06:11'),
(408, 1, 'Booking updated', 'You have successfully updated booking.', 1, 1, '2017-08-20 22:06:29'),
(409, 1, 'New booking created', 'You have successfully created a new booking.', 1, 1, '2017-08-20 22:18:34'),
(410, 1, 'Booking deleted', 'You have successfully deleted booking.', 1, 1, '2017-08-20 23:17:14'),
(411, 1, 'Booking deleted', 'You have successfully deleted booking.', 1, 1, '2017-08-20 23:17:16'),
(412, 1, 'New booking created', 'You have successfully created a new booking.', 1, 1, '2017-08-20 23:17:55'),
(413, 1, 'Course deleted', 'You have successfully deleted (test) course.', 1, 1, '2017-08-20 23:27:12'),
(414, 1, 'Course deleted', 'You have successfully deleted (another test) course.', 1, 1, '2017-08-20 23:27:14'),
(415, 1, 'Booking updated', 'You have successfully updated booking.', 1, 1, '2017-08-21 00:32:21'),
(416, 1, 'Booking updated', 'You have successfully updated booking.', 1, 1, '2017-08-21 00:38:03'),
(417, 1, 'Booking updated', 'You have successfully updated booking.', 1, 1, '2017-08-21 00:38:51');
INSERT INTO `tbl_notifications` (`ID`, `user_id`, `title`, `notification`, `read`, `hide`, `date`) VALUES
(418, 1, 'Booking updated', 'You have successfully updated booking.', 1, 1, '2017-08-21 00:39:45'),
(419, 1, 'Booking updated', 'You have successfully updated booking.', 1, 1, '2017-08-21 00:40:18'),
(420, 1, 'Booking updated', 'You have successfully updated booking.', 1, 1, '2017-08-21 00:41:57'),
(421, 1, 'Booking updated', 'You have successfully updated booking.', 1, 1, '2017-08-21 00:42:06'),
(422, 1, 'Booking updated', 'You have successfully updated booking.', 1, 1, '2017-08-21 00:44:21'),
(423, 1, 'Booking updated', 'You have successfully updated booking.', 1, 1, '2017-08-21 00:44:49'),
(424, 1, 'Booking updated', 'You have successfully updated booking.', 1, 1, '2017-08-21 00:45:48'),
(425, 1, 'Booking updated', 'You have successfully updated booking.', 1, 1, '2017-08-21 00:47:16'),
(426, 1, 'Booking updated', 'You have successfully updated booking.', 1, 1, '2017-08-21 00:48:03'),
(427, 1, 'Booking deleted', 'You have successfully deleted booking.', 1, 1, '2017-08-21 01:06:53'),
(428, 1, 'New booking created', 'You have successfully created a new booking.', 1, 1, '2017-08-21 01:07:12'),
(429, 1, 'New booking created', 'You have successfully created a new booking.', 1, 1, '2017-08-21 01:08:48'),
(430, 1, 'Booking deleted', 'You have successfully deleted booking.', 1, 1, '2017-08-21 01:10:13'),
(431, 1, 'Booking deleted', 'You have successfully deleted booking.', 1, 1, '2017-08-21 01:10:15'),
(432, 1, 'New booking created', 'You have successfully created a new booking.', 1, 1, '2017-08-21 01:10:37'),
(433, 1, 'New booking created', 'You have successfully created a new booking.', 1, 1, '2017-08-21 01:11:03'),
(434, 1, 'New booking created', 'You have successfully created a new booking.', 1, 1, '2017-08-21 01:11:42'),
(435, 1, 'Booking deleted', 'You have successfully deleted booking.', 1, 1, '2017-08-21 01:12:29'),
(436, 1, 'Booking deleted', 'You have successfully deleted booking.', 1, 1, '2017-08-21 01:12:31'),
(437, 1, 'Booking deleted', 'You have successfully deleted booking.', 1, 1, '2017-08-21 01:12:33'),
(438, 1, 'New booking created', 'You have successfully created a new booking.', 1, 1, '2017-08-21 01:13:16'),
(439, 1, 'New booking created', 'You have successfully created a new booking.', 1, 1, '2017-08-21 01:14:01'),
(440, 1, 'Account Details updated', 'You have successfully updated (James Leighs) account details.', 1, 1, '2017-08-21 01:23:27'),
(441, 1, 'User Course Details updated', 'You have successfully updated (James Leighs) course details.', 1, 1, '2017-08-21 01:30:50'),
(442, 1, 'Booking updated', 'You have successfully updated booking.', 1, 1, '2017-08-21 01:32:21'),
(443, 1, 'Booking updated', 'You have successfully updated booking.', 1, 1, '2017-08-21 01:32:36'),
(444, 1, 'User Course Details updated', 'You have successfully updated (James Leighs) course details.', 1, 1, '2017-08-21 01:33:43'),
(445, 1, 'User Course Details updated', 'You have successfully updated (Sandra Gomes) course details.', 1, 1, '2017-08-21 01:40:56'),
(446, 1, 'User Course Details updated', 'You have successfully updated (Sandra Gomes) course details.', 1, 1, '2017-08-21 01:42:34'),
(447, 1, 'User Course Details updated', 'You have successfully updated (Sandra Gomes) course details.', 1, 1, '2017-08-21 01:44:23'),
(448, 1, 'User Course Details updated', 'You have successfully updated (Sandra Gomes) course details.', 1, 1, '2017-08-21 01:45:24'),
(449, 1, 'User Course Details updated', 'You have successfully updated (Sandra Gomes) course details.', 1, 1, '2017-08-21 01:45:52'),
(450, 1, 'User Course Details updated', 'You have successfully updated (Sandra Gomes) course details.', 1, 1, '2017-08-21 01:46:39'),
(451, 1, 'User Course Details updated', 'You have successfully updated (Sandra Gomes) course details.', 1, 1, '2017-08-21 01:47:53'),
(452, 1, 'User Course Details updated', 'You have successfully updated (Sandra Gomes) course details.', 1, 1, '2017-08-21 01:56:03'),
(453, 1, 'Booking updated', 'You have successfully updated booking.', 1, 1, '2017-08-21 01:56:24'),
(454, 1, 'Booking updated', 'You have successfully updated booking.', 1, 1, '2017-08-21 01:56:32'),
(455, 1, 'User Course Details updated', 'You have successfully updated (James Leighs) course details.', 1, 1, '2017-08-21 01:56:50'),
(456, 1, 'User Course Details updated', 'You have successfully updated (James Leighs) course details.', 1, 1, '2017-08-21 02:09:21'),
(457, 1, 'User Course Details updated', 'You have successfully updated (Sandra Gomes) course details.', 1, 1, '2017-08-21 02:30:49'),
(458, 1, 'User Course Details updated', 'You have successfully updated (James Leighs) course details.', 1, 1, '2017-08-21 02:30:56'),
(459, 1, 'User Course Details updated', 'You have successfully updated (Sandra Gomes) course details.', 1, 1, '2017-08-21 02:34:06'),
(460, 1, 'User Course Details updated', 'You have successfully updated (Sandra Gomes) course details.', 1, 1, '2017-08-21 02:37:47'),
(461, 1, 'Booking updated', 'You have successfully updated booking.', 1, 1, '2017-08-21 02:39:04'),
(462, 1, 'Booking updated', 'You have successfully updated booking.', 1, 1, '2017-08-21 02:39:10'),
(463, 1, 'User Course Details updated', 'You have successfully updated (James Leighs) course details.', 1, 1, '2017-08-21 02:40:52'),
(464, 1, 'User Course Details updated', 'You have successfully updated (James Leighs) course details.', 1, 1, '2017-08-21 02:41:45'),
(465, 1, 'User Course Details updated', 'You have successfully updated (James Leighs) course details.', 1, 1, '2017-08-21 02:42:08'),
(466, 1, 'User Course Details updated', 'You have successfully updated (James Leighs) course details.', 1, 1, '2017-08-21 02:46:02'),
(467, 1, 'User Course Details updated', 'You have successfully updated (James Leighs) course details.', 1, 1, '2017-08-21 02:46:44'),
(468, 1, 'User Course Details updated', 'You have successfully updated (James Leighs) course details.', 1, 1, '2017-08-21 02:47:09'),
(469, 1, 'User Course Details updated', 'You have successfully updated (Sandra Gomes) course details.', 1, 1, '2017-08-21 02:49:09'),
(470, 1, 'User Course Details updated', 'You have successfully updated (Sandra Gomes) course details.', 1, 1, '2017-08-21 02:50:07'),
(471, 1, 'Booking updated', 'You have successfully updated booking.', 1, 1, '2017-08-21 02:52:23'),
(472, 1, 'User Course Details updated', 'You have successfully updated (Sandra Gomes) course details.', 1, 1, '2017-08-21 02:53:23'),
(473, 1, 'User Course Details updated', 'You have successfully updated (Sandra Gomes) course details.', 1, 1, '2017-08-21 02:54:37'),
(474, 1, 'User Course Details updated', 'You have successfully updated (James Leighs) course details.', 1, 1, '2017-08-21 02:56:16'),
(475, 1, 'User Course Details updated', 'You have successfully updated (James Leighs) course details.', 1, 1, '2017-08-21 02:58:09'),
(476, 1, 'Account Details updated', 'You have successfully updated (Sandra Gomes) account details.', 1, 1, '2017-08-21 03:07:31'),
(477, 1, 'Account Details updated', 'You have successfully updated (James Leighs) account details.', 1, 1, '2017-08-21 03:18:55'),
(478, 1, 'Account Details updated', 'You have successfully updated (James Leighs) account details.', 1, 1, '2017-08-21 03:19:15'),
(479, 1, 'New Account Created', 'You have successfully created a new account (Bbb Bbb).', 1, 1, '2017-08-21 03:22:39'),
(480, 1, 'Nurse Account Enabled', 'You have successfully enabled (James Leighs) account.', 1, 1, '2017-08-21 03:22:48'),
(481, 1, 'New booking created', 'You have successfully created a new booking.', 1, 1, '2017-08-26 23:08:08'),
(482, 1, 'User Course Details updated', 'You have successfully updated (Sandra Gomes) course details.', 1, 1, '2017-08-26 23:16:47'),
(483, 1, 'User Course Details updated', 'You have successfully updated (Sandra Gomes) course details.', 1, 1, '2017-08-27 00:58:02'),
(484, 1, 'Booking deleted', 'You have successfully deleted booking.', 1, 1, '2017-08-27 01:06:05'),
(485, 1, 'New booking created', 'You have successfully created a new booking.', 1, 1, '2017-08-27 01:06:24'),
(486, 1, 'Account Details updated', 'You have successfully updated (Sandra Gomes) account details.', 1, 1, '2017-08-27 01:36:41'),
(487, 1, 'New booking created', 'You have successfully created a new booking.', 1, 1, '2017-08-27 02:01:27'),
(488, 1, 'User Course Details updated', 'You have successfully updated (Sandra Gomes) course details.', 1, 1, '2017-08-27 02:06:56'),
(489, 1, 'User Booking Details updated', 'You have successfully updated (Sandra Gomes) booking details.', 1, 1, '2017-08-27 13:22:17'),
(490, 1, 'User Course Details updated', 'You have successfully updated (James Leighs) course details.', 1, 1, '2017-08-27 13:26:43'),
(491, 1, 'New booking created', 'You have successfully created a new booking.', 1, 1, '2017-08-27 13:27:16'),
(492, 1, 'New booking created', 'You have successfully created a new booking.', 1, 1, '2017-08-30 19:52:30'),
(493, 1, 'Booking deleted', 'You have successfully deleted booking.', 1, 1, '2017-08-31 13:13:37'),
(494, 1, 'Booking deleted', 'You have successfully deleted booking.', 1, 1, '2017-08-31 13:13:43'),
(495, 1, 'Booking deleted', 'You have successfully deleted booking.', 1, 1, '2017-08-31 13:13:45'),
(496, 1, 'New booking created', 'You have successfully created a new booking.', 1, 1, '2017-08-31 13:14:22'),
(497, 1, 'Nurse Account Disabled', 'You have successfully disbled (Bbb Bbb) account.', 1, 1, '2017-08-31 13:21:54'),
(498, 1, 'Nurse Account Enabled', 'You have successfully enabled (Bbb Bbb) account.', 1, 1, '2017-08-31 13:21:57'),
(499, 1, 'Nurse Account Disabled', 'You have successfully disbled (James Leighs) account.', 1, 1, '2017-08-31 13:21:58'),
(500, 1, 'Nurse Account Enabled', 'You have successfully enabled (James Leighs) account.', 1, 1, '2017-08-31 13:21:59'),
(501, 1, 'Nurse Account Disabled', 'You have successfully disbled (Sandra Gomes) account.', 1, 1, '2017-08-31 13:22:01'),
(502, 1, 'Nurse Account Enabled', 'You have successfully enabled (Sandra Gomes) account.', 1, 1, '2017-08-31 13:22:03'),
(503, 1, 'User Booking Details updated', 'You have successfully updated (Bbb Bbb) booking details.', 1, 1, '2017-08-31 14:00:07'),
(504, 1, 'New booking created', 'You have successfully created a new booking.', 1, 1, '2017-09-15 18:09:51'),
(505, 1, 'Booking updated', 'You have successfully updated booking.', 1, 1, '2017-09-15 18:17:43'),
(506, 1, 'Booking updated', 'You have successfully updated booking.', 1, 1, '2017-09-15 18:18:03'),
(507, 1, 'Booking deleted', 'You have successfully deleted booking.', 1, 1, '2017-09-15 18:20:37'),
(508, 1, 'New booking created', 'You have successfully created a new booking.', 1, 1, '2017-09-15 18:20:56'),
(509, 1, 'Booking updated', 'You have successfully updated booking.', 1, 1, '2017-09-15 18:36:03'),
(510, 1, 'General Setting updated', 'You have successfully updated website general settings.', 1, 1, '2017-09-18 15:08:39'),
(511, 1, 'User Course Details updated', 'You have successfully updated Alert settings', 1, 1, '2017-09-18 15:18:08'),
(512, 1, 'Alert Setting updated', 'You have successfully updated the Alert settings.', 1, 1, '2017-09-18 15:21:09'),
(513, 1, 'Alert Setting updated', 'You have successfully updated the Alert settings.', 1, 1, '2017-09-18 15:22:19'),
(514, 1, 'Alert Setting updated', 'You have successfully updated the Alert settings.', 1, 1, '2017-09-18 15:23:47'),
(515, 1, 'Booking updated', 'You have successfully updated Course settings.', 1, 1, '2017-10-05 13:52:07'),
(516, 1, 'Booking updated', 'You have successfully updated Course settings.', 1, 1, '2017-10-05 13:52:28'),
(517, 1, 'Booking updated', 'You have successfully updated Course settings.', 1, 1, '2017-10-05 16:56:08'),
(518, 1, 'Booking updated', 'You have successfully updated Course settings.', 1, 1, '2017-10-05 17:01:02'),
(519, 1, 'Booking updated', 'You have successfully updated Course settings.', 1, 1, '2017-10-05 17:10:59'),
(520, 1, 'Booking updated', 'You have successfully updated Course settings.', 1, 1, '2017-10-05 18:25:25'),
(521, 1, 'Booking updated', 'You have successfully updated Course settings.', 1, 1, '2017-10-05 18:25:31'),
(522, 1, 'Account Information', 'You have successfully updated preceptor progress', 1, 1, '2017-10-06 15:58:41'),
(523, 1, 'Account Details updated', 'You have successfully updated (James Leighs) account details.', 1, 1, '2017-10-06 16:35:50'),
(524, 1, 'Account Details updated', 'You have successfully updated (James Leighs) account details.', 1, 1, '2017-10-06 16:37:34'),
(525, 1, 'Account Details updated', 'You have successfully updated (Bbb Bbb) account details.', 1, 1, '2017-10-06 16:38:55'),
(526, 1, 'New Account Created', 'You have successfully created a new account (Test Account).', 1, 1, '2017-10-06 16:40:53'),
(527, 1, 'Account Details updated', 'You have successfully updated (Test Account) account details.', 1, 1, '2017-10-06 16:41:11'),
(528, 1, 'Account Information', 'You have successfully updated preceptor progress', 1, 1, '2017-10-06 18:04:06'),
(529, 1, 'Booking updated', 'You have successfully updated booking.', 1, 1, '2017-10-06 18:13:25'),
(530, 1, 'User Booking Details updated', 'You have successfully updated (Sandra Gomes) booking details.', 1, 1, '2017-10-08 22:10:21'),
(531, 1, 'User Booking Details updated', 'You have successfully updated (James Leighs) booking details.', 1, 1, '2017-10-08 22:10:31'),
(532, 1, 'User Booking Details updated', 'You have successfully updated (Bbb Bbb) booking details.', 1, 1, '2017-10-08 22:10:47'),
(533, 1, 'User Booking Details updated', 'You have successfully updated (Sandra Gomes) booking details.', 1, 1, '2017-10-08 22:15:36'),
(534, 1, 'Account Information', 'You have successfully updated preceptor progress', 1, 1, '2017-10-08 23:46:38'),
(535, 1, 'Account Information', 'You have successfully updated preceptor progress', 1, 1, '2017-10-08 23:48:19'),
(536, 1, 'Account Information', 'You have successfully updated preceptor progress', 1, 1, '2017-10-08 23:49:39'),
(537, 1, 'Account Information', 'You have successfully updated preceptor progress', 1, 1, '2017-10-08 23:50:51'),
(538, 1, 'Account Information', 'You have successfully updated HCA progress', 1, 1, '2017-10-09 00:14:00'),
(539, 1, 'Account Information', 'You have successfully updated preceptor progress', 1, 1, '2017-10-09 00:14:49'),
(540, 1, 'Account Information', 'You have successfully updated preceptor progress', 1, 1, '2017-10-09 00:19:08'),
(541, 1, 'Account Information', 'You have successfully updated preceptor progress', 1, 1, '2017-10-09 00:22:40'),
(542, 1, 'Account Information', 'You have successfully updated preceptor progress', 1, 1, '2017-10-09 00:24:42'),
(543, 1, 'Account Information', 'You have successfully updated preceptor progress', 1, 1, '2017-10-09 00:25:02'),
(544, 1, 'User Booking Details updated', 'You have successfully updated (James Leighs) booking details.', 1, 1, '2017-10-23 13:58:30'),
(545, 1, 'User Booking Details updated', 'You have successfully updated (Bbb Bbb) booking details.', 1, 1, '2017-10-23 13:58:39'),
(546, 1, 'New booking enrolled', 'You have successfully created a new booking.', 1, 1, '2017-11-13 23:08:08'),
(547, 1, 'New booking enrolled', 'You have successfully created a new booking.', 1, 1, '2017-11-13 23:09:02'),
(548, 1, 'New booking enrolled', 'You have successfully created a new booking.', 1, 1, '2017-11-13 23:09:51'),
(549, 1, 'Booking updated', 'You have successfully updated booking.', 1, 1, '2017-11-13 23:11:49'),
(550, 1, 'Booking updated', 'You have successfully updated booking.', 1, 1, '2017-11-13 23:14:08'),
(551, 1, 'Booking deleted', 'You have successfully deleted booking.', 1, 1, '2017-11-13 23:17:03'),
(552, 1, 'Booking deleted', 'You have successfully deleted booking.', 1, 1, '2017-11-13 23:17:08'),
(553, 1, 'Booking rejected', 'You have successfully rejected booking.', 1, 1, '2017-11-14 17:54:17'),
(554, 1, 'New Account Created', 'You have successfully created a new account (Demo Demo).', 1, 1, '2017-11-14 18:56:36'),
(555, 1, 'New Account Created', 'You have successfully created a new account (Demo Demo).', 1, 1, '2017-11-14 18:57:48'),
(556, 1, 'Booking accepted', 'You have successfully accepted booking.', 1, 1, '2017-11-14 18:57:48'),
(557, 1, 'Account deleted', 'You have successfully deleted (Demo Demo) account.', 1, 1, '2017-11-14 18:59:32'),
(558, 1, 'New Account Created', 'You have successfully created a new account (Demo Demo).', 1, 1, '2017-11-14 19:00:05'),
(559, 1, 'Booking accepted', 'You have successfully accepted booking.', 1, 1, '2017-11-14 19:00:05'),
(560, 1, 'New Account Created', 'You have successfully created a new account (Demo Demo).', 1, 1, '2017-11-14 19:05:30'),
(561, 1, 'Booking accepted', 'You have successfully accepted booking.', 1, 1, '2017-11-14 19:05:30'),
(562, 1, 'New Account Created', 'You have successfully created a new account (Demo Demo).', 1, 1, '2017-11-14 19:06:33'),
(563, 1, 'Booking accepted', 'You have successfully accepted booking.', 1, 1, '2017-11-14 19:06:33'),
(564, 1, 'Account deleted', 'You have successfully deleted (Demo Demo) account.', 1, 1, '2017-11-14 19:07:32'),
(565, 1, 'Account deleted', 'You have successfully deleted (Demo Demo) account.', 1, 1, '2017-11-14 19:07:42'),
(566, 1, 'Account deleted', 'You have successfully deleted (Demo Demo) account.', 1, 1, '2017-11-14 19:07:45'),
(567, 1, 'Account deleted', 'You have successfully deleted (Demo Demo) account.', 1, 1, '2017-11-14 19:07:57'),
(568, 1, 'New Account Created', 'You have successfully created a new account (Demo Demo).', 1, 1, '2017-11-14 19:12:09'),
(569, 1, 'Booking accepted', 'You have successfully accepted booking.', 1, 1, '2017-11-14 19:12:09'),
(570, 1, 'Booking updated', 'You have successfully updated booking.', 1, 1, '2017-11-14 21:22:53'),
(571, 1, 'Booking updated', 'You have successfully updated booking.', 1, 1, '2017-11-14 21:23:17'),
(572, 1, 'New Account Created', 'You have successfully created a new account (Amy Winehouse).', 1, 1, '2017-11-14 21:23:22'),
(573, 1, 'Booking accepted', 'You have successfully accepted booking.', 1, 1, '2017-11-14 21:23:22'),
(574, 1, 'Account deleted', 'You have successfully deleted (Demo Demo) account.', 1, 1, '2017-11-14 21:33:47'),
(575, 1, 'Account deleted', 'You have successfully deleted (Amy Winehouse) account.', 1, 1, '2017-11-14 21:33:50'),
(576, 1, 'Account deleted', 'You have successfully deleted (Test Account) account.', 1, 1, '2017-11-14 21:33:53'),
(577, 1, 'Account deleted', 'You have successfully deleted (Bbb Bbb) account.', 1, 1, '2017-11-14 21:33:56'),
(578, 1, 'Booking deleted', 'You have successfully deleted booking.', 1, 1, '2017-11-14 21:37:08'),
(579, 1, 'Booking deleted', 'You have successfully deleted booking.', 1, 1, '2017-11-14 21:37:11'),
(580, 1, 'Booking deleted', 'You have successfully deleted booking.', 1, 1, '2017-11-14 21:37:22'),
(581, 1, 'Booking deleted', 'You have successfully deleted booking.', 1, 1, '2017-11-14 21:37:25'),
(582, 1, 'Course deleted', 'You have successfully deleted (test) course Type.', 1, 1, '2017-11-14 21:37:33'),
(583, 1, 'Course deleted', 'You have successfully deleted (ayyy) course Type.', 1, 1, '2017-11-14 21:37:35'),
(584, 1, 'New Account Created', 'You have successfully created a new account (Bob Bob).', 1, 1, '2017-11-22 12:14:24'),
(585, 1, 'Course deleted', 'You have successfully deleted (Overseas Cohort) Cohort.', 1, 1, '2017-11-22 12:25:52'),
(586, 1, 'Course deleted', 'You have successfully deleted (Adult Cohort) Cohort.', 1, 1, '2017-11-22 12:25:55'),
(587, 1, 'New course created', 'You have successfully created a new course type: (test).', 1, 1, '2017-11-22 12:29:19'),
(588, 1, 'Course deleted', 'You have successfully deleted (test) course Type.', 1, 1, '2017-11-22 12:29:26'),
(589, 1, 'New course created', 'You have successfully created a new course type: (Basic Ward Management).', 1, 1, '2017-11-22 12:33:03'),
(590, 1, 'New course created', 'You have successfully created a new course type: (BEACH Course).', 1, 1, '2017-11-22 12:33:14'),
(591, 1, 'New course created', 'You have successfully created a new course type: (Cathererisation).', 1, 1, '2017-11-22 12:33:26'),
(592, 1, 'New course created', 'You have successfully created a new course type: (12 Lead ECG).', 1, 1, '2017-11-22 12:33:37'),
(593, 1, 'New course created', 'You have successfully created a new course type: (IV Additives).', 1, 1, '2017-11-22 12:33:52'),
(594, 1, 'New course created', 'You have successfully created a new course type: (IV Additives).', 1, 1, '2017-11-22 12:34:05'),
(595, 1, 'New course created', 'You have successfully created a new course type: (IV Exam).', 1, 1, '2017-11-22 12:34:14'),
(596, 1, 'New course created', 'You have successfully created a new course type: (IV Update).', 1, 1, '2017-11-22 12:34:22'),
(597, 1, 'New course created', 'You have successfully created a new course type: (IV Update).', 1, 1, '2017-11-22 12:34:32'),
(598, 1, 'New course created', 'You have successfully created a new course type: (IV Exam).', 1, 1, '2017-11-22 12:34:41'),
(599, 1, 'New course created', 'You have successfully created a new course type: (LINKS).', 1, 1, '2017-11-22 12:35:00'),
(600, 1, 'New course created', 'You have successfully created a new course type: (Mentor Sign-off).', 1, 1, '2017-11-22 12:35:11'),
(601, 1, 'New course created', 'You have successfully created a new course type: (Mentor Update).', 1, 1, '2017-11-22 12:35:20'),
(602, 1, 'New course created', 'You have successfully created a new course type: (none).', 1, 1, '2017-11-22 12:35:30'),
(603, 1, 'New course created', 'You have successfully created a new course type: (Record Keeping).', 1, 1, '2017-11-22 12:35:38'),
(604, 1, 'New course created', 'You have successfully created a new course type: (Study Day 1).', 1, 1, '2017-11-22 12:35:52'),
(605, 1, 'New course created', 'You have successfully created a new course type: (Study Day 2).', 1, 1, '2017-11-22 12:35:59'),
(606, 1, 'New course created', 'You have successfully created a new course type: (Study Day 3).', 1, 1, '2017-11-22 12:36:07'),
(607, 1, 'New course created', 'You have successfully created a new course type: (Venapuncture).', 1, 1, '2017-11-22 12:36:16'),
(608, 1, 'New course created', 'You have successfully created a new course type: (IV Update).', 1, 1, '2017-11-22 12:37:06'),
(609, 1, 'Course deleted', 'You have successfully deleted (IV Update) course Type.', 1, 1, '2017-11-22 12:37:51'),
(610, 1, 'New booking created', 'You have successfully created a new booking.', 1, 1, '2017-11-22 12:39:12'),
(611, 1, 'Booking rejected', 'You have successfully rejected booking.', 1, 1, '2017-11-22 13:21:53'),
(612, 1, 'Course_admin Account Disabled', 'You have successfully disbled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:21:46'),
(613, 1, 'Course_admin Account Enabled', 'You have successfully enabled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:21:48'),
(614, 1, 'Course_admin Account Disabled', 'You have successfully disbled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:21:50'),
(615, 1, 'Course_admin Account Enabled', 'You have successfully enabled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:21:52'),
(616, 1, 'Course_admin Account Disabled', 'You have successfully disbled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:21:53'),
(617, 1, 'Course_admin Account Enabled', 'You have successfully enabled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:21:57'),
(618, 1, 'Course_admin Account Disabled', 'You have successfully disbled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:21:58'),
(619, 1, 'Course_admin Account Enabled', 'You have successfully enabled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:22:02'),
(620, 1, 'Course_admin Account Disabled', 'You have successfully disbled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:22:05'),
(621, 1, 'Course_admin Account Enabled', 'You have successfully enabled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:22:12'),
(622, 1, 'Course_admin Account Disabled', 'You have successfully disbled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:22:25'),
(623, 1, 'Course_admin Account Enabled', 'You have successfully enabled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:24:09'),
(624, 1, 'Course_admin Account Disabled', 'You have successfully disbled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:24:10'),
(625, 1, 'Course_admin Account Enabled', 'You have successfully enabled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:24:32'),
(626, 1, 'Course_admin Account Disabled', 'You have successfully disbled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:24:33'),
(627, 1, 'Course_admin Account Enabled', 'You have successfully enabled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:24:34'),
(628, 1, 'Course_admin Account Disabled', 'You have successfully disbled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:24:35'),
(629, 1, 'Course_admin Account Enabled', 'You have successfully enabled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:24:36'),
(630, 1, 'Course_admin Account Disabled', 'You have successfully disbled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:24:37'),
(631, 1, 'Course_admin Account Enabled', 'You have successfully enabled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:24:37'),
(632, 1, 'Course_admin Account Disabled', 'You have successfully disbled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:24:55'),
(633, 1, 'Course_admin Account Enabled', 'You have successfully enabled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:24:56'),
(634, 1, 'Course_admin Account Disabled', 'You have successfully disbled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:24:57'),
(635, 1, 'Course_admin Account Enabled', 'You have successfully enabled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:24:58'),
(636, 1, 'Course_admin Account Disabled', 'You have successfully disbled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:25:44'),
(637, 1, 'Course_admin Account Enabled', 'You have successfully enabled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:25:45'),
(638, 1, 'Course_admin Account Disabled', 'You have successfully disbled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:26:11'),
(639, 1, 'Course_admin Account Enabled', 'You have successfully enabled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:26:12'),
(640, 1, 'Course_admin Account Disabled', 'You have successfully disbled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:26:13'),
(641, 1, 'Course_admin Account Enabled', 'You have successfully enabled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:26:14'),
(642, 1, 'Course_admin Account Disabled', 'You have successfully disbled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:27:24'),
(643, 1, 'Course_admin Account Enabled', 'You have successfully enabled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:28:15'),
(644, 1, 'Course_admin Account Disabled', 'You have successfully disbled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:28:17'),
(645, 1, 'Course_admin Account Enabled', 'You have successfully enabled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:28:19'),
(646, 1, 'Course_admin Account Disabled', 'You have successfully disbled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:28:20'),
(647, 1, 'Course_admin Account Enabled', 'You have successfully enabled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:28:22'),
(648, 1, 'Course_admin Account Disabled', 'You have successfully disbled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:28:23'),
(649, 1, 'Course_admin Account Enabled', 'You have successfully enabled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:28:25'),
(650, 1, 'Course_admin Account Disabled', 'You have successfully disbled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:28:32'),
(651, 1, 'Course_admin Account Enabled', 'You have successfully enabled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:28:37'),
(652, 1, 'Course_admin Account Disabled', 'You have successfully disbled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:28:39'),
(653, 1, 'Course_admin Account Enabled', 'You have successfully enabled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:29:33'),
(654, 1, 'Course_admin Account Disabled', 'You have successfully disbled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:29:34'),
(655, 1, 'Course_admin Account Enabled', 'You have successfully enabled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:29:35'),
(656, 1, 'Course_admin Account Disabled', 'You have successfully disbled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:29:36'),
(657, 1, 'Course_admin Account Enabled', 'You have successfully enabled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:29:37'),
(658, 1, 'Course_admin Account Disabled', 'You have successfully disbled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:29:39'),
(659, 1, 'Course_admin Account Enabled', 'You have successfully enabled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:29:40'),
(660, 1, 'Course_admin Account Disabled', 'You have successfully disbled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:29:41'),
(661, 1, 'Course_admin Account Enabled', 'You have successfully enabled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:29:42'),
(662, 1, 'Course_admin Account Disabled', 'You have successfully disbled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:32:37'),
(663, 1, 'Course_admin Account Enabled', 'You have successfully enabled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:32:41'),
(664, 1, 'Course_admin Account Disabled', 'You have successfully disbled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:32:53'),
(665, 1, 'Course_admin Account Enabled', 'You have successfully enabled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:33:04'),
(666, 1, 'Course_admin Account Disabled', 'You have successfully disbled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:33:05'),
(667, 1, 'Course_admin Account Enabled', 'You have successfully enabled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:33:09'),
(668, 1, 'Course_admin Account Disabled', 'You have successfully disbled (Victoria Wilding) account.', 1, 1, '2018-01-09 12:33:11'),
(669, 1, 'WorkArea Changed', '(Victoria Wilding) workarea has been change from A&E to ADU.', 1, 1, '2018-01-11 14:09:29'),
(670, 1, 'Account Details updated', 'You have successfully updated (Victoria Wilding) account details.', 1, 1, '2018-01-11 14:09:29'),
(671, 1, 'Mentor record deleted', 'You have successfully deleted ( mentor record.', 0, 0, '2018-01-12 07:11:19'),
(672, 1, 'Mentor Teach Record Created', 'You have successfully created a mentor teach record for user CarolineEynon', 0, 0, '2018-01-12 07:12:33'),
(673, 1, 'Mentor record deleted', 'You have successfully deleted ( mentor record.', 0, 0, '2018-01-12 07:12:36'),
(674, 1, 'Mentor Teach Record Created', 'You have successfully created a mentor teach record for user CarolineEynon', 0, 0, '2018-01-12 07:15:09'),
(675, 1, 'Mentor Teach Record Updated', 'You have successfully updated a mentor teach record for user CarolineEynon', 0, 0, '2018-01-12 07:15:16'),
(676, 1, 'New template created', 'You have successfully created a new template (Demo).', 0, 0, '2018-01-12 08:03:09'),
(677, 1, 'New template created', 'You have successfully created a new template (Demo).', 0, 0, '2018-01-12 08:09:35'),
(678, 1, 'Template deleted', 'You have successfully deleted (Demo) template.', 0, 0, '2018-01-12 08:09:40'),
(679, 1, 'Email templates updated', 'You have successfully updated website general settings.', 0, 0, '2018-01-12 14:04:51'),
(680, 1, 'Email templates updated', 'You have successfully updated website general settings.', 0, 0, '2018-01-12 14:05:02'),
(681, 1, 'Email templates updated', 'You have successfully updated website general settings.', 0, 0, '2018-01-12 14:06:08'),
(682, 1, 'Email templates updated', 'You have successfully updated website general settings.', 0, 0, '2018-01-12 14:06:28'),
(683, 1, 'Email templates updated', 'You have successfully updated website general settings.', 0, 0, '2018-01-12 14:07:06'),
(684, 1, 'Email templates updated', 'You have successfully updated website general settings.', 0, 0, '2018-01-12 14:07:13'),
(685, 1, 'Email templates updated', 'You have successfully updated website general settings.', 0, 0, '2018-01-12 15:01:53'),
(686, 1, 'Booking rejected', 'You have successfully rejected booking.', 0, 0, '2018-01-12 16:09:04'),
(687, 1, 'Booking rejected', 'You have successfully rejected booking.', 0, 0, '2018-01-12 16:09:49'),
(688, 1, 'Booking rejected', 'You have successfully rejected booking.', 0, 0, '2018-01-12 16:10:12'),
(689, 1, 'User Booking Details updated', 'You have successfully updated (Sandra Gomes) booking details.', 0, 0, '2018-01-12 16:11:28'),
(690, 1, 'User Booking Details updated', 'You have successfully updated (Sandra Gomes) booking details.', 0, 0, '2018-01-12 16:11:33'),
(691, 1, 'User Booking Details updated', 'You have successfully updated (Sandra Gomes) booking details.', 0, 0, '2018-01-12 16:11:39'),
(692, 1, 'User Booking Details updated', 'You have successfully updated (Sandra Gomes) booking details.', 0, 0, '2018-01-12 16:11:43'),
(693, 1, 'User Booking Details updated', 'You have successfully updated (Sandra Gomes) booking details.', 0, 0, '2018-01-12 16:11:48'),
(694, 1, 'User Booking Details updated', 'You have successfully updated (Sandra Gomes) booking details.', 0, 0, '2018-01-12 16:11:53'),
(695, 1, 'User Booking Details updated', 'You have successfully updated (James Leighs) booking details.', 0, 0, '2018-01-12 16:12:56'),
(696, 1, 'User Booking Details updated', 'You have successfully updated (James Leighs) booking details.', 0, 0, '2018-01-12 16:13:01'),
(697, 1, 'User Booking Details updated', 'You have successfully updated (James Leighs) booking details.', 0, 0, '2018-01-12 16:13:06'),
(698, 1, 'User Booking Details updated', 'You have successfully updated (James Leighs) booking details.', 0, 0, '2018-01-12 16:13:58'),
(699, 1, 'User Booking Details updated', 'You have successfully updated (James Leighs) booking details.', 0, 0, '2018-01-12 16:14:03'),
(700, 1, 'User Booking Details updated', 'You have successfully updated (James Leighs) booking details.', 0, 0, '2018-01-12 16:14:08'),
(701, 1, 'Email templates updated', 'You have successfully updated website general settings.', 0, 0, '2018-01-12 16:15:06'),
(702, 1, 'User Booking Details updated', 'You have successfully updated (James Leighs) booking details.', 0, 0, '2018-01-12 16:17:14'),
(703, 1, 'User Booking Details updated', 'You have successfully updated (James Leighs) booking details.', 0, 0, '2018-01-12 16:17:20'),
(704, 1, 'User Booking Details updated', 'You have successfully updated (James Leighs) booking details.', 0, 0, '2018-01-12 16:17:25'),
(705, 1, 'User Booking Details updated', 'You have successfully updated (James Leighs) booking details.', 0, 0, '2018-01-12 16:17:30'),
(706, 1, 'User Booking Details updated', 'You have successfully updated (James Leighs) booking details.', 0, 0, '2018-01-12 16:17:35'),
(707, 1, 'User Booking Details updated', 'You have successfully updated (James Leighs) booking details.', 0, 0, '2018-01-12 16:17:40'),
(708, 1, 'User Booking Details updated', 'You have successfully updated (James Leighs) booking details.', 0, 0, '2018-01-12 16:17:44'),
(709, 1, 'User Booking Details updated', 'You have successfully updated (James Leighs) booking details.', 0, 0, '2018-01-12 16:17:49'),
(710, 1, 'User Booking Details updated', 'You have successfully updated (James Leighs) booking details.', 0, 0, '2018-01-12 16:17:55'),
(711, 1, 'User Booking Details updated', 'You have successfully updated (James Leighs) booking details.', 0, 0, '2018-01-12 16:18:00'),
(712, 1, 'User Booking Details updated', 'You have successfully updated (James Leighs) booking details.', 0, 0, '2018-01-12 16:18:05'),
(713, 1, 'User Booking Details updated', 'You have successfully updated (James Leighs) booking details.', 0, 0, '2018-01-12 16:18:10'),
(714, 1, 'User Booking Details updated', 'You have successfully updated (James Leighs) booking details.', 0, 0, '2018-01-12 16:18:15'),
(715, 1, 'User Booking Details updated', 'You have successfully updated (James Leighs) booking details.', 0, 0, '2018-01-12 16:18:20'),
(716, 1, 'User Booking Details updated', 'You have successfully updated (James Leighs) booking details.', 0, 0, '2018-01-12 16:18:25'),
(717, 1, 'User Booking Details updated', 'You have successfully updated (James Leighs) booking details.', 0, 0, '2018-01-12 16:18:30'),
(718, 1, 'User Booking Details updated', 'You have successfully updated (James Leighs) booking details.', 0, 0, '2018-01-12 16:18:35'),
(719, 1, 'User Booking Details updated', 'You have successfully updated (James Leighs) booking details.', 0, 0, '2018-01-12 16:30:10'),
(720, 1, 'User Booking Details updated', 'You have successfully updated (James Leighs) booking details.', 0, 0, '2018-01-12 16:31:43'),
(721, 1, 'User Booking Details updated', 'You have successfully updated (James Leighs) booking details.', 0, 0, '2018-01-12 16:32:03'),
(722, 1, 'User Booking Details updated', 'You have successfully updated (James Leighs) booking details.', 0, 0, '2018-01-12 16:32:44'),
(723, 1, 'User Booking Details updated', 'You have successfully updated (James Leighs) booking details.', 0, 0, '2018-01-12 16:33:07'),
(724, 1, 'User Booking Details updated', 'You have successfully updated (James Leighs) booking details.', 0, 0, '2018-01-12 16:33:34'),
(725, 1, 'User Booking Details updated', 'You have successfully updated (James Leighs) booking details.', 0, 0, '2018-01-12 16:33:43'),
(726, 1, 'User Booking Details updated', 'You have successfully updated (James Leighs) booking details.', 0, 0, '2018-01-12 16:33:55'),
(727, 1, 'User Booking Details updated', 'You have successfully updated (James Leighs) booking details.', 0, 0, '2018-01-12 16:34:14'),
(728, 1, 'Course_admin Account Enabled', 'You have successfully enabled (Victoria Wilding) account.', 0, 0, '2018-01-12 16:37:20'),
(729, 1, 'Course_admin Account Disabled', 'You have successfully disbled (Victoria Wilding) account.', 0, 0, '2018-01-12 16:37:21'),
(730, 1, 'Booking rejected', 'You have successfully rejected booking.', 0, 0, '2018-01-12 16:37:56'),
(731, 1, 'Email templates updated', 'You have successfully updated website general settings.', 0, 0, '2018-01-12 16:38:09'),
(732, 1, 'New template created', 'You have successfully created a new template (Test).', 0, 0, '2018-01-12 17:11:49'),
(733, 1, 'New Account Created', 'You have successfully created a new account (Test Test).', 0, 0, '2018-02-03 15:22:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_options`
--

CREATE TABLE IF NOT EXISTS `tbl_options` (
  `ID` bigint(20) NOT NULL,
  `option_name` text NOT NULL,
  `option_value` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_options`
--

INSERT INTO `tbl_options` (`ID`, `option_name`, `option_value`) VALUES
(1, 'maintenance_mode', '0'),
(2, 'site_name', 'PDT'),
(3, 'site_url', 'http://localhost/mexa'),
(4, 'admin_email', 'info@coursemanagement.com'),
(5, 'website_contact_email', ''),
(6, 'website_contact_phone', ''),
(7, 'website_domain', ''),
(8, 'site_description', 'Professional Development Tracker'),
(9, 'site_contact_email', 'info@coursemanagement.com'),
(10, 'site_contact_phone', '07784256012'),
(11, 'site_domain', 'coursemanagement.com'),
(12, 'users_capabilities', 's:1352:"a:3:{s:5:"admin";a:18:{s:9:"view_user";i:0;s:8:"add_user";i:0;s:9:"edit_user";i:0;s:11:"view_course";i:0;s:10:"add_course";i:0;s:11:"edit_course";i:0;s:13:"delete_course";i:0;s:13:"view_location";i:0;s:12:"add_location";i:0;s:13:"edit_location";i:0;s:14:"view_work_area";i:0;s:13:"add_work_area";i:0;s:14:"edit_work_area";i:0;s:15:"delete_location";i:0;s:12:"view_booking";i:0;s:11:"add_booking";i:0;s:12:"edit_booking";i:0;s:14:"delete_booking";i:0;}s:12:"course_admin";a:18:{s:9:"view_user";i:1;s:8:"add_user";i:0;s:9:"edit_user";i:0;s:11:"view_course";i:1;s:10:"add_course";i:0;s:11:"edit_course";i:0;s:13:"delete_course";i:0;s:13:"view_location";i:1;s:12:"add_location";i:1;s:13:"edit_location";i:0;s:14:"view_work_area";i:1;s:13:"add_work_area";i:1;s:14:"edit_work_area";i:0;s:15:"delete_location";i:0;s:12:"view_booking";i:1;s:11:"add_booking";i:1;s:12:"edit_booking";i:1;s:14:"delete_booking";i:0;}s:5:"nurse";a:18:{s:9:"view_user";i:0;s:8:"add_user";i:0;s:9:"edit_user";i:0;s:11:"view_course";i:0;s:10:"add_course";i:0;s:11:"edit_course";i:0;s:13:"delete_course";i:0;s:13:"view_location";i:0;s:12:"add_location";i:0;s:13:"edit_location";i:0;s:14:"view_work_area";i:0;s:13:"add_work_area";i:0;s:14:"edit_work_area";i:0;s:15:"delete_location";i:0;s:12:"view_booking";i:0;s:11:"add_booking";i:0;s:12:"edit_booking";i:0;s:14:"delete_booking";i:0;}}";'),
(13, 'after_account_created', '10000883686'),
(14, 'after_user_added_to_course_booking', '10000883686'),
(15, 'booking_reminder', '10000883686'),
(16, 'course_complete', '10000883686'),
(17, 'after_join_coursse_request', '10000883686'),
(18, 'after_course_request_accepted', '10000883686'),
(19, 'after_course_request_rejected', '10000883686');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pending_bookings`
--

CREATE TABLE IF NOT EXISTS `tbl_pending_bookings` (
  `ID` bigint(20) NOT NULL,
  `course_id` bigint(20) NOT NULL,
  `booking_id` bigint(20) NOT NULL,
  `title` varchar(64) NOT NULL,
  `first_name` varchar(256) NOT NULL,
  `last_name` varchar(256) NOT NULL,
  `preferred_name` varchar(256) NOT NULL,
  `professional_registeration_no` varchar(256) NOT NULL,
  `email` varchar(1024) NOT NULL,
  `telephone_no` varchar(128) NOT NULL,
  `address` text NOT NULL,
  `postcode` varchar(128) NOT NULL,
  `employer` varchar(128) NOT NULL,
  `current_role` varchar(128) NOT NULL,
  `specialty` text NOT NULL,
  `employer_address` text NOT NULL,
  `employer_postcode` varchar(128) NOT NULL,
  `paid` int(1) NOT NULL,
  `full_name` varchar(128) NOT NULL,
  `current_date` text NOT NULL,
  `response_status` int(1) NOT NULL DEFAULT '2',
  `reason_of_rejection` text NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=10000829159 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pending_bookings`
--

INSERT INTO `tbl_pending_bookings` (`ID`, `course_id`, `booking_id`, `title`, `first_name`, `last_name`, `preferred_name`, `professional_registeration_no`, `email`, `telephone_no`, `address`, `postcode`, `employer`, `current_role`, `specialty`, `employer_address`, `employer_postcode`, `paid`, `full_name`, `current_date`, `response_status`, `reason_of_rejection`, `created_on`) VALUES
(10000519407, 10000194478, 10000507806, 'Mr', 'Maz', 'Sehgal', 'Maz', '12346', 'ms00587@surrey.ac.uk', '012345678', 'sw192ez', 'sw192ez', 'sw192ez', 'sw192ez', 'sw192ez', 'sw192ez', 'sw192ez', 1, 'sw192ez', '2017-11-22', 0, 'hhh', '2017-11-22 13:20:25'),
(10000829158, 10000194478, 10000507806, 'Mr', 'Mazen', 'Sehgal', 'Maz', '12345', 'ms00587@surrey.ac.uk', '01231234', '5 Savery Drive', 'KT6 5RD', 'Royal Surrey County Hospital', 'Developer', 'Web Application', 'mhalling-brown@nhs.net', 'SW19 2EZ', 1, 'Mazen Hessan Sehgal', '2017-11-22', 0, 'vhchc', '2017-11-22 13:16:53');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_removed_users`
--

CREATE TABLE IF NOT EXISTS `tbl_removed_users` (
  `ID` bigint(20) NOT NULL,
  `course_ID` bigint(20) NOT NULL,
  `user_ID` bigint(20) NOT NULL,
  `booking_ID` bigint(20) NOT NULL,
  `reason` text NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_removed_users`
--

INSERT INTO `tbl_removed_users` (`ID`, `course_ID`, `user_ID`, `booking_ID`, `reason`, `created_on`) VALUES
(1, 10000690603, 10000134207, 10000736873, 'Blah', '2017-10-23 13:59:16'),
(2, 10000690603, 10000166352, 10000389261, 'none', '2017-11-14 21:33:27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rules`
--

CREATE TABLE IF NOT EXISTS `tbl_rules` (
  `ID` bigint(20) NOT NULL,
  `user_ID` bigint(20) NOT NULL,
  `preceptorship` int(11) NOT NULL DEFAULT '0',
  `hca` int(11) NOT NULL DEFAULT '0',
  `flap` int(11) NOT NULL DEFAULT '0',
  `record` int(11) NOT NULL DEFAULT '0',
  `mentorship` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=10000302712 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_rules`
--

INSERT INTO `tbl_rules` (`ID`, `user_ID`, `preceptorship`, `hca`, `flap`, `record`, `mentorship`) VALUES
(10000100917, 10000840543, 0, 1, 0, 1, 1),
(10000155175, 10000340101, 1, 1, 1, 1, 1),
(10000155176, 10000603933, 1, 1, 1, 1, 1),
(10000155177, 10000134207, 1, 0, 1, 0, 0),
(10000171380, 10000499305, 0, 1, 0, 1, 1),
(10000302710, 10000978730, 1, 0, 1, 0, 0),
(10000302711, 10000950353, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_templates`
--

CREATE TABLE IF NOT EXISTS `tbl_templates` (
  `ID` bigint(20) NOT NULL,
  `title` varchar(1024) NOT NULL,
  `subject` varchar(1024) NOT NULL,
  `body` text NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=10000883687 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_templates`
--

INSERT INTO `tbl_templates` (`ID`, `title`, `subject`, `body`, `created_on`) VALUES
(10000222164, 'Test', 'Testing', 'tEST EMAIL', '2018-01-12 17:11:49'),
(10000883686, 'Demo', 'Demo', 'tESTING', '2018-01-12 08:03:09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usermeta`
--

CREATE TABLE IF NOT EXISTS `tbl_usermeta` (
  `ID` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `meta_key` text NOT NULL,
  `meta_value` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=509 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_usermeta`
--

INSERT INTO `tbl_usermeta` (`ID`, `user_id`, `meta_key`, `meta_value`) VALUES
(1, 2147483647, 'gender', 'Male'),
(2, 2147483647, 'dob', '2016-11-01 12:00:00'),
(3, 2147483647, 'user_phone', ''),
(4, 2147483647, 'profile_img', ''),
(26, 10000950333, 'gender', 'Female'),
(25, 10000242676, 'profile_img', '/content/assets/img/user.png'),
(24, 10000242676, 'user_phone', ''),
(23, 10000242676, 'dob', '2017-05-24 12:00:00'),
(9, 1, 'gender', 'Male'),
(10, 1, 'dob', '1992-07-01 12:00:00'),
(11, 1, 'user_phone', '7415557198'),
(12, 1, 'profile_img', ''),
(339, 10000340101, 'work_extension', '4422'),
(13, 1, 'reset_password', '0'),
(22, 10000242676, 'gender', 'Female'),
(21, 10000924747, 'profile_img', '/content/assets/img/user.png'),
(20, 10000924747, 'user_phone', ''),
(18, 10000924747, 'gender', 'Female'),
(19, 10000924747, 'dob', '2017-05-18 12:00:00'),
(27, 10000950333, 'dob', '2017-05-24 12:00:00'),
(28, 10000950333, 'user_phone', ''),
(29, 10000950333, 'profile_img', '/content/assets/img/user.png'),
(30, 10000242679, 'gender', 'Male'),
(31, 10000242679, 'dob', '1992-07-01 12:00:00'),
(32, 10000242679, 'user_phone', ''),
(33, 10000242679, 'profile_img', '/content//uploads/profile_images/2017/05/profile-img-1495667158.jpg'),
(34, 10000274119, 'gender', 'Female'),
(35, 10000274119, 'dob', '2017-05-16 12:00:00'),
(36, 10000274119, 'user_phone', ''),
(37, 10000274119, 'profile_img', ''),
(38, 10000619023, 'gender', 'Male'),
(39, 10000619023, 'dob', '2017-06-05 12:00:00'),
(40, 10000619023, 'user_phone', ''),
(41, 10000619023, 'profile_img', '/content/assets/img/user.png'),
(42, 10000619023, 'user_designation', '10000094230'),
(43, 10000619023, 'work_extension', 'Test1'),
(44, 10000619023, 'beep', 'Test2'),
(45, 10000619023, 'band', '8e'),
(46, 10000572451, 'gender', 'Female'),
(47, 10000572451, 'dob', '2017-06-01 12:00:00'),
(48, 10000572451, 'user_phone', '12345678'),
(49, 10000572451, 'profile_img', ''),
(50, 10000572451, 'user_designation', '10000094230'),
(51, 10000572451, 'work_extension', '123213'),
(52, 10000572451, 'beep', '234324'),
(53, 10000572451, 'band', '5'),
(85, 10000240463, 'band', '1'),
(83, 10000240463, 'work_extension', '2161'),
(84, 10000240463, 'beep', '2222'),
(82, 10000240463, 'user_designation', '10000160391'),
(81, 10000240463, 'profile_img', '/content/assets/img/user.png'),
(80, 10000240463, 'user_phone', '123456789'),
(79, 10000240463, 'dob', '1996-01-12 12:00:00'),
(78, 10000240463, 'gender', 'Male'),
(86, 10000318028, 'gender', 'Male'),
(87, 10000318028, 'dob', '1996-01-12 12:00:00'),
(88, 10000318028, 'user_phone', '123456789'),
(89, 10000318028, 'profile_img', '/content/assets/img/user.png'),
(90, 10000318028, 'user_designation', '10000641616'),
(91, 10000318028, 'work_extension', '555'),
(92, 10000318028, 'beep', '0160'),
(93, 10000318028, 'band', '3'),
(94, 10000850547, 'gender', 'Female'),
(95, 10000850547, 'dob', '2017-06-01 12:00:00'),
(96, 10000850547, 'user_phone', '122345'),
(97, 10000850547, 'profile_img', '/content/assets/img/user.png'),
(98, 10000850547, 'user_designation', '10000641614'),
(99, 10000850547, 'work_extension', '1232'),
(100, 10000850547, 'beep', '231'),
(101, 10000850547, 'band', '2'),
(102, 10000070070, 'gender', 'Male'),
(103, 10000070070, 'dob', '2017-05-31 12:00:00'),
(104, 10000070070, 'user_phone', '12345'),
(105, 10000070070, 'profile_img', ''),
(106, 10000070070, 'user_designation', '10000641613'),
(107, 10000070070, 'work_extension', '432'),
(108, 10000070070, 'beep', '234'),
(109, 10000070070, 'band', '1'),
(110, 10000443358, 'gender', 'Male'),
(111, 10000443358, 'dob', '2017-06-01 12:00:00'),
(112, 10000443358, 'user_phone', '1234'),
(113, 10000443358, 'profile_img', ''),
(114, 10000443358, 'user_designation', '10000641615'),
(115, 10000443358, 'work_extension', '432'),
(116, 10000443358, 'beep', '234234'),
(117, 10000443358, 'band', '6 '),
(118, 10000815792, 'gender', 'Male'),
(119, 10000815792, 'dob', '2017-06-01 12:00:00'),
(120, 10000815792, 'user_phone', '123456'),
(121, 10000815792, 'profile_img', ''),
(122, 10000815792, 'user_designation', '10000641616'),
(123, 10000815792, 'work_extension', '4321'),
(124, 10000815792, 'beep', '21345'),
(125, 10000815792, 'band', '4'),
(126, 10000364703, 'gender', 'Female'),
(127, 10000364703, 'dob', '2017-05-28 12:00:00'),
(128, 10000364703, 'user_phone', '12345678'),
(129, 10000364703, 'profile_img', ''),
(130, 10000364703, 'user_designation', '10000641616'),
(131, 10000364703, 'work_extension', '4321'),
(132, 10000364703, 'beep', '1234'),
(133, 10000364703, 'band', '5'),
(134, 10000243270, 'gender', 'Female'),
(135, 10000243270, 'dob', '2017-05-28 12:00:00'),
(136, 10000243270, 'user_phone', '12345678'),
(137, 10000243270, 'profile_img', ''),
(138, 10000243270, 'user_designation', '10000641616'),
(139, 10000243270, 'work_extension', '4321'),
(140, 10000243270, 'beep', '1234'),
(141, 10000243270, 'band', '5'),
(142, 10000391793, 'gender', 'Female'),
(143, 10000391793, 'dob', '2017-05-28 12:00:00'),
(144, 10000391793, 'user_phone', '12345678'),
(145, 10000391793, 'profile_img', ''),
(146, 10000391793, 'user_designation', '10000641616'),
(147, 10000391793, 'work_extension', '4321'),
(148, 10000391793, 'beep', '1234'),
(149, 10000391793, 'band', '5'),
(150, 10000920309, 'gender', 'Female'),
(151, 10000920309, 'dob', '2017-05-28 12:00:00'),
(152, 10000920309, 'user_phone', '12345678'),
(153, 10000920309, 'profile_img', ''),
(154, 10000920309, 'user_designation', '10000641616'),
(155, 10000920309, 'work_extension', '4321'),
(156, 10000920309, 'beep', '1234'),
(157, 10000920309, 'band', '5'),
(158, 10000599967, 'gender', 'Male'),
(159, 10000599967, 'dob', '2017-05-28 12:00:00'),
(160, 10000599967, 'user_phone', '1234567'),
(161, 10000599967, 'profile_img', ''),
(162, 10000599967, 'user_designation', '10000641615'),
(163, 10000599967, 'work_extension', '1234'),
(164, 10000599967, 'beep', '4321'),
(165, 10000599967, 'band', '5'),
(166, 10000098665, 'gender', 'Female'),
(167, 10000098665, 'dob', '2017-05-28 12:00:00'),
(168, 10000098665, 'user_phone', '123456'),
(169, 10000098665, 'profile_img', ''),
(170, 10000098665, 'user_designation', '10000641616'),
(171, 10000098665, 'work_extension', '4321'),
(172, 10000098665, 'beep', '12345'),
(173, 10000098665, 'band', '6 '),
(174, 10000632840, 'gender', 'Female'),
(175, 10000632840, 'dob', '2017-05-28 12:00:00'),
(176, 10000632840, 'user_phone', '123456789'),
(177, 10000632840, 'profile_img', ''),
(178, 10000632840, 'user_designation', '10000641617'),
(179, 10000632840, 'work_extension', '3214'),
(180, 10000632840, 'beep', '5421'),
(181, 10000632840, 'band', '5'),
(182, 10000950353, 'gender', 'Female'),
(183, 10000950353, 'dob', '1970-01-01 12:00:00'),
(184, 10000950353, 'user_phone', '07961871618'),
(185, 10000950353, 'profile_img', '/content/assets/img/user.png'),
(186, 10000950353, 'user_designation', '10000641620'),
(187, 10000950353, 'work_extension', '2041'),
(188, 10000950353, 'beep', '2793'),
(189, 10000950353, 'band', '6 '),
(190, 10000950345, 'gender', 'Female'),
(191, 10000950345, 'dob', '1970-01-01 01:00:00'),
(192, 10000950345, 'user_phone', ''),
(193, 10000950345, 'profile_img', '/content/assets/img/user.png'),
(194, 10000950345, 'user_designation', '10000641614'),
(195, 10000950345, 'work_extension', ''),
(196, 10000950345, 'beep', ''),
(197, 10000950345, 'band', '6 '),
(198, 10000950347, 'gender', 'Female'),
(199, 10000950347, 'dob', '1970-01-01 01:00:00'),
(200, 10000950347, 'user_phone', '07790926150'),
(201, 10000950347, 'profile_img', '/content/assets/img/user.png'),
(202, 10000950347, 'user_designation', '10000641632'),
(203, 10000950347, 'work_extension', '2188'),
(204, 10000950347, 'beep', ''),
(205, 10000950347, 'band', '7'),
(206, 10000950350, 'gender', 'Female'),
(207, 10000950350, 'dob', '1970-01-01 01:00:00'),
(208, 10000950350, 'user_phone', ''),
(209, 10000950350, 'profile_img', '/content/assets/img/user.png'),
(210, 10000950350, 'user_designation', '10000641620'),
(211, 10000950350, 'work_extension', ''),
(212, 10000950350, 'beep', ''),
(213, 10000950350, 'band', '6 '),
(214, 10000950344, 'gender', 'Female'),
(215, 10000950344, 'dob', '1970-01-01 01:00:00'),
(216, 10000950344, 'user_phone', '07981755477'),
(217, 10000950344, 'profile_img', '/content/assets/img/user.png'),
(218, 10000950344, 'user_designation', '10000641620'),
(219, 10000950344, 'work_extension', '2188'),
(220, 10000950344, 'beep', ''),
(221, 10000950344, 'band', ''),
(222, 10000950348, 'gender', 'Female'),
(223, 10000950348, 'dob', '1970-01-01 01:00:00'),
(224, 10000950348, 'user_phone', '07415431572'),
(225, 10000950348, 'profile_img', '/content/assets/img/user.png'),
(226, 10000950348, 'user_designation', '10000641631'),
(227, 10000950348, 'work_extension', '2793'),
(228, 10000950348, 'beep', ''),
(229, 10000950348, 'band', '7'),
(230, 10000950352, 'gender', 'Female'),
(231, 10000950352, 'dob', '1970-01-01 01:00:00'),
(232, 10000950352, 'user_phone', '07824446131'),
(233, 10000950352, 'profile_img', '/content/assets/img/user.png'),
(234, 10000950352, 'user_designation', '10000641632'),
(235, 10000950352, 'work_extension', '2188'),
(236, 10000950352, 'beep', ''),
(237, 10000950352, 'band', '7'),
(238, 10000950349, 'gender', 'Female'),
(239, 10000950349, 'dob', '1970-01-01 01:00:00'),
(240, 10000950349, 'user_phone', ''),
(241, 10000950349, 'profile_img', '/content/assets/img/user.png'),
(242, 10000950349, 'user_designation', '10000641622'),
(243, 10000950349, 'work_extension', ''),
(244, 10000950349, 'beep', ''),
(245, 10000950349, 'band', ''),
(246, 10000950338, 'gender', 'Female'),
(247, 10000950338, 'dob', '1970-01-01 01:00:00'),
(248, 10000950338, 'user_phone', ''),
(249, 10000950338, 'profile_img', '/content/assets/img/user.png'),
(250, 10000950338, 'user_designation', '10000641622'),
(251, 10000950338, 'work_extension', ''),
(252, 10000950338, 'beep', ''),
(253, 10000950338, 'band', ''),
(254, 10000950339, 'gender', 'Female'),
(255, 10000950339, 'dob', '1970-01-01 01:00:00'),
(256, 10000950339, 'user_phone', '07972172887'),
(257, 10000950339, 'profile_img', '/content/assets/img/user.png'),
(258, 10000950339, 'user_designation', '10000641620'),
(259, 10000950339, 'work_extension', ''),
(260, 10000950339, 'beep', ''),
(261, 10000950339, 'band', '6 '),
(262, 10000950351, 'gender', 'Female'),
(263, 10000950351, 'dob', '1970-01-01 01:00:00'),
(264, 10000950351, 'user_phone', '07943849245'),
(265, 10000950351, 'profile_img', '/content/assets/img/user.png'),
(266, 10000950351, 'user_designation', '10000641620'),
(267, 10000950351, 'work_extension', '2188'),
(268, 10000950351, 'beep', ''),
(269, 10000950351, 'band', '6 '),
(270, 10000950354, 'gender', 'Female'),
(271, 10000950354, 'dob', '1970-01-01 01:00:00'),
(272, 10000950354, 'user_phone', '07753825252'),
(273, 10000950354, 'profile_img', '/content/assets/img/user.png'),
(274, 10000950354, 'user_designation', '10000641632'),
(275, 10000950354, 'work_extension', ''),
(276, 10000950354, 'beep', '2187'),
(277, 10000950354, 'band', '7'),
(278, 10000950337, 'gender', 'Female'),
(279, 10000950337, 'dob', '1970-01-01 12:00:00'),
(280, 10000950337, 'user_phone', '07791027323'),
(281, 10000950337, 'profile_img', '/content/assets/img/user.png'),
(282, 10000950337, 'user_designation', '10000641620'),
(283, 10000950337, 'work_extension', '2041'),
(284, 10000950337, 'beep', ''),
(285, 10000950337, 'band', '6 '),
(286, 10000950342, 'gender', 'Female'),
(287, 10000950342, 'dob', '1970-01-01 01:00:00'),
(288, 10000950342, 'user_phone', ''),
(289, 10000950342, 'profile_img', '/content/assets/img/user.png'),
(290, 10000950342, 'user_designation', '10000641622'),
(291, 10000950342, 'work_extension', ''),
(292, 10000950342, 'beep', ''),
(293, 10000950342, 'band', ''),
(294, 10000950343, 'gender', 'Female'),
(295, 10000950343, 'dob', '1970-01-01 01:00:00'),
(296, 10000950343, 'user_phone', '07926498769'),
(297, 10000950343, 'profile_img', '/content/assets/img/user.png'),
(298, 10000950343, 'user_designation', '10000641632'),
(299, 10000950343, 'work_extension', '4835'),
(300, 10000950343, 'beep', '71 4724'),
(301, 10000950343, 'band', '7'),
(302, 10000950341, 'gender', 'Female'),
(303, 10000950341, 'dob', '1970-01-01 01:00:00'),
(304, 10000950341, 'user_phone', ''),
(305, 10000950341, 'profile_img', '/content/assets/img/user.png'),
(306, 10000950341, 'user_designation', '10000641612'),
(307, 10000950341, 'work_extension', '2395/4711'),
(308, 10000950341, 'beep', '76-6446'),
(309, 10000950341, 'band', '7'),
(310, 10000950340, 'gender', 'Female'),
(311, 10000950340, 'dob', '1970-01-01 01:00:00'),
(312, 10000950340, 'user_phone', '07867368783'),
(313, 10000950340, 'profile_img', '/content/assets/img/user.png'),
(314, 10000950340, 'user_designation', '10000641620'),
(315, 10000950340, 'work_extension', '2188'),
(316, 10000950340, 'beep', ''),
(317, 10000950340, 'band', '6 '),
(318, 10000950346, 'gender', 'Female'),
(319, 10000950346, 'dob', '1970-01-01 01:00:00'),
(320, 10000950346, 'user_phone', '07876406674'),
(321, 10000950346, 'profile_img', '/content/assets/img/user.png'),
(322, 10000950346, 'user_designation', '10000641620'),
(323, 10000950346, 'work_extension', '2188'),
(324, 10000950346, 'beep', ''),
(325, 10000950346, 'band', '6 '),
(338, 10000340101, 'user_designation', '10000641641'),
(337, 10000340101, 'profile_img', '/content/assets/img/user.png'),
(336, 10000340101, 'user_phone', '0123456789'),
(335, 10000340101, 'dob', '2017-07-01 12:00:00'),
(334, 10000340101, 'gender', 'Male'),
(340, 10000340101, 'beep', '999'),
(341, 10000340101, 'band', '6 '),
(342, 10000547297, 'gender', 'Male'),
(343, 10000547297, 'dob', '2017-07-01 12:00:00'),
(344, 10000547297, 'user_phone', '1231324564'),
(345, 10000547297, 'profile_img', ''),
(346, 10000547297, 'user_designation', '10000641615'),
(347, 10000547297, 'work_extension', ''),
(348, 10000547297, 'beep', '5555'),
(349, 10000547297, 'band', '4'),
(350, 10000472833, 'gender', 'Male'),
(351, 10000472833, 'dob', '2017-07-01 12:00:00'),
(352, 10000472833, 'user_phone', '1231324564'),
(353, 10000472833, 'profile_img', ''),
(354, 10000472833, 'user_designation', '10000641615'),
(355, 10000472833, 'work_extension', ''),
(356, 10000472833, 'beep', '5555'),
(357, 10000472833, 'band', '4'),
(358, 10000653161, 'gender', 'Male'),
(359, 10000653161, 'dob', '2017-07-01 12:00:00'),
(360, 10000653161, 'user_phone', '1231324564'),
(361, 10000653161, 'profile_img', ''),
(362, 10000653161, 'user_designation', '10000641615'),
(363, 10000653161, 'work_extension', ''),
(364, 10000653161, 'beep', '5555'),
(365, 10000653161, 'band', '4'),
(366, 10000115961, 'gender', 'Male'),
(367, 10000115961, 'dob', '2017-07-01 12:00:00'),
(368, 10000115961, 'user_phone', '1231324564'),
(369, 10000115961, 'profile_img', ''),
(370, 10000115961, 'user_designation', '10000641615'),
(371, 10000115961, 'work_extension', ''),
(372, 10000115961, 'beep', '5555'),
(373, 10000115961, 'band', '4'),
(374, 10000953001, 'gender', 'Male'),
(375, 10000953001, 'dob', '2017-07-01 12:00:00'),
(376, 10000953001, 'user_phone', '1231324564'),
(377, 10000953001, 'profile_img', ''),
(378, 10000953001, 'user_designation', '10000641615'),
(379, 10000953001, 'work_extension', ''),
(380, 10000953001, 'beep', '5555'),
(381, 10000953001, 'band', '4'),
(382, 10000940469, 'gender', 'Male'),
(383, 10000940469, 'dob', '2017-07-01 12:00:00'),
(384, 10000940469, 'user_phone', '1231324564'),
(385, 10000940469, 'profile_img', ''),
(386, 10000940469, 'user_designation', '10000641615'),
(387, 10000940469, 'work_extension', ''),
(388, 10000940469, 'beep', '5555'),
(389, 10000940469, 'band', '4'),
(390, 10000946230, 'gender', 'Male'),
(391, 10000946230, 'dob', '2017-07-01 12:00:00'),
(392, 10000946230, 'user_phone', '1231324564'),
(393, 10000946230, 'profile_img', ''),
(394, 10000946230, 'user_designation', '10000641615'),
(395, 10000946230, 'work_extension', ''),
(396, 10000946230, 'beep', '5555'),
(397, 10000946230, 'band', '4'),
(398, 10000421783, 'gender', 'Male'),
(399, 10000421783, 'dob', '2017-07-01 12:00:00'),
(400, 10000421783, 'user_phone', '1231324564'),
(401, 10000421783, 'profile_img', ''),
(402, 10000421783, 'user_designation', '10000641615'),
(403, 10000421783, 'work_extension', ''),
(404, 10000421783, 'beep', '5555'),
(405, 10000421783, 'band', '4'),
(406, 10000499696, 'gender', 'Male'),
(407, 10000499696, 'dob', '2017-07-01 12:00:00'),
(408, 10000499696, 'user_phone', '1231324564'),
(409, 10000499696, 'profile_img', ''),
(410, 10000499696, 'user_designation', '10000641615'),
(411, 10000499696, 'work_extension', ''),
(412, 10000499696, 'beep', '5555'),
(413, 10000499696, 'band', '4'),
(414, 10000586461, 'gender', 'Male'),
(415, 10000586461, 'dob', '2017-07-01 12:00:00'),
(416, 10000586461, 'user_phone', '1231324564'),
(417, 10000586461, 'profile_img', ''),
(418, 10000586461, 'user_designation', '10000641615'),
(419, 10000586461, 'work_extension', ''),
(420, 10000586461, 'beep', '5555'),
(421, 10000586461, 'band', '4'),
(422, 10000777420, 'gender', 'Male'),
(423, 10000777420, 'dob', '2017-07-01 12:00:00'),
(424, 10000777420, 'user_phone', '1231324564'),
(425, 10000777420, 'profile_img', ''),
(426, 10000777420, 'user_designation', '10000641615'),
(427, 10000777420, 'work_extension', ''),
(428, 10000777420, 'beep', '5555'),
(429, 10000777420, 'band', '4'),
(430, 10000639292, 'gender', 'Male'),
(431, 10000639292, 'dob', '2017-07-01 12:00:00'),
(432, 10000639292, 'user_phone', '1231324564'),
(433, 10000639292, 'profile_img', ''),
(434, 10000639292, 'user_designation', '10000641615'),
(435, 10000639292, 'work_extension', ''),
(436, 10000639292, 'beep', '5555'),
(437, 10000639292, 'band', '4'),
(438, 10000048229, 'gender', 'Male'),
(439, 10000048229, 'dob', '2017-07-01 12:00:00'),
(440, 10000048229, 'user_phone', '1231324564'),
(441, 10000048229, 'profile_img', ''),
(442, 10000048229, 'user_designation', '10000641615'),
(443, 10000048229, 'work_extension', ''),
(444, 10000048229, 'beep', '5555'),
(445, 10000048229, 'band', '4'),
(446, 10000443815, 'gender', 'Male'),
(447, 10000443815, 'dob', '2017-07-01 12:00:00'),
(448, 10000443815, 'user_phone', '1231324564'),
(449, 10000443815, 'profile_img', ''),
(450, 10000443815, 'user_designation', '10000641615'),
(451, 10000443815, 'work_extension', ''),
(452, 10000443815, 'beep', '5555'),
(453, 10000443815, 'band', '4'),
(454, 10000125388, 'gender', 'Male'),
(455, 10000125388, 'dob', '2017-07-01 12:00:00'),
(456, 10000125388, 'user_phone', '123456789'),
(457, 10000125388, 'profile_img', ''),
(458, 10000125388, 'user_designation', '10000641616'),
(459, 10000125388, 'work_extension', '9876546321'),
(460, 10000125388, 'beep', '2161'),
(461, 10000125388, 'band', '4'),
(462, 10000603933, 'gender', 'Female'),
(463, 10000603933, 'dob', '2017-07-01 12:00:00'),
(464, 10000603933, 'user_phone', '123456798'),
(465, 10000603933, 'profile_img', '/content/assets/img/user.png'),
(466, 10000603933, 'user_designation', '10000641614'),
(467, 10000603933, 'work_extension', '123485687'),
(468, 10000603933, 'beep', '555'),
(469, 10000603933, 'band', '5'),
(498, 10000499305, 'work_extension', '5412'),
(497, 10000499305, 'user_designation', '10000641614'),
(496, 10000499305, 'profile_img', ''),
(495, 10000499305, 'user_phone', '01231234'),
(494, 10000499305, 'dob', '2017-11-07 12:00:00'),
(493, 10000499305, 'gender', 'Male'),
(499, 10000499305, 'beep', '32'),
(500, 10000499305, 'band', '3'),
(501, 10000840543, 'gender', 'Male'),
(502, 10000840543, 'dob', '2018-02-01 12:00:00'),
(503, 10000840543, 'user_phone', '123456789'),
(504, 10000840543, 'profile_img', ''),
(505, 10000840543, 'user_designation', '10000641616'),
(506, 10000840543, 'work_extension', '123'),
(507, 10000840543, 'beep', '543'),
(508, 10000840543, 'band', '5');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `ID` bigint(20) NOT NULL,
  `trainer_ID` varchar(150) DEFAULT NULL,
  `user_email` varchar(512) DEFAULT NULL,
  `user_pass` varchar(512) DEFAULT NULL,
  `first_name` varchar(256) DEFAULT NULL,
  `last_name` varchar(256) DEFAULT NULL,
  `user_role` varchar(256) DEFAULT NULL,
  `username` varchar(150) DEFAULT NULL,
  `user_status` int(11) DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `courses` varchar(500) DEFAULT NULL,
  `work_area_ID` bigint(15) DEFAULT NULL,
  `user_designation` bigint(20) NOT NULL,
  `user_salt` varchar(250) DEFAULT NULL,
  `registered_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `currently_employed` int(11) DEFAULT NULL,
  `external_candidate` int(11) DEFAULT NULL,
  `rag_status` int(11) DEFAULT NULL,
  `extended_support` int(11) DEFAULT NULL,
  `support_since` int(11) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=10000950355 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`ID`, `trainer_ID`, `user_email`, `user_pass`, `first_name`, `last_name`, `user_role`, `username`, `user_status`, `created_by`, `courses`, `work_area_ID`, `user_designation`, `user_salt`, `registered_at`, `currently_employed`, `external_candidate`, `rag_status`, `extended_support`, `support_since`) VALUES
(10000950343, NULL, 'dhodge@nhs.net', 'fab2b43cce5966b03432607b71fde4b298ec2f79a4f5a76eb6eed0c339cb0ce6', 'Deanna', 'Hodge', 'course_admin', 'dhodge', 1, 1, '', NULL, 0, '78cHgqMhLRJHz575WXy9uw==', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL),
(1, NULL, 'mazen_sehgal@hotmail.com', 'fab2b43cce5966b03432607b71fde4b298ec2f79a4f5a76eb6eed0c339cb0ce6', 'Mazen', 'Sehgal', 'admin', 'admin', 1, 1, '', NULL, 0, '78cHgqMhLRJHz575WXy9uw==', '2017-06-06 11:06:55', NULL, NULL, NULL, NULL, NULL),
(10000950341, NULL, 'caroline.eynon@nhs.net', 'fab2b43cce5966b03432607b71fde4b298ec2f79a4f5a76eb6eed0c339cb0ce6', 'Caroline', 'Eynon', 'course_admin', 'caroline.eynon', 1, 1, '', NULL, 0, '78cHgqMhLRJHz575WXy9uw==', '0000-00-00 00:00:00', 0, 0, 0, 0, 0),
(10000950342, NULL, 'g.haddock@surrey.ac.uk', 'fab2b43cce5966b03432607b71fde4b298ec2f79a4f5a76eb6eed0c339cb0ce6', 'Gill', 'Haddock', 'course_admin', 'g.haddock', 1, 1, '', NULL, 0, '78cHgqMhLRJHz575WXy9uw==', '0000-00-00 00:00:00', 0, 0, 0, 0, 0),
(10000950338, NULL, 'l.blazhevski@surrey.ac.uk', 'fab2b43cce5966b03432607b71fde4b298ec2f79a4f5a76eb6eed0c339cb0ce6', 'Lisa', 'Blazhevski', 'course_admin', 'l.blazhevski', 1, 1, '', NULL, 0, '78cHgqMhLRJHz575WXy9uw==', '0000-00-00 00:00:00', 0, 0, 0, 0, 0),
(10000950339, NULL, 'jbowler1@nhs.net', 'fab2b43cce5966b03432607b71fde4b298ec2f79a4f5a76eb6eed0c339cb0ce6', 'Julie', 'Bowler', 'course_admin', 'jbowler1', 1, 1, '', NULL, 0, '78cHgqMhLRJHz575WXy9uw==', '0000-00-00 00:00:00', 0, 0, 0, 0, 0),
(10000950340, NULL, 'carolinecovey@nhs.net', 'fab2b43cce5966b03432607b71fde4b298ec2f79a4f5a76eb6eed0c339cb0ce6', 'Caroline', 'Covey', 'course_admin', 'carolinecovey', 1, 1, '', NULL, 0, '78cHgqMhLRJHz575WXy9uw==', '0000-00-00 00:00:00', 0, 0, 0, 0, 0),
(10000950337, NULL, 'jashfield@nhs.net', 'fab2b43cce5966b03432607b71fde4b298ec2f79a4f5a76eb6eed0c339cb0ce6', 'Jean', 'Ashfield', 'course_admin', 'jashfield', 1, 1, '', NULL, 0, '78cHgqMhLRJHz575WXy9uw==', '2017-06-22 10:16:42', NULL, NULL, NULL, NULL, NULL),
(10000950344, NULL, 'susan.lore@nhs.net', 'fab2b43cce5966b03432607b71fde4b298ec2f79a4f5a76eb6eed0c339cb0ce6', 'Sue', 'Lore', 'course_admin', 'susan.lore', 1, 1, '', NULL, 0, '78cHgqMhLRJHz575WXy9uw==', '0000-00-00 00:00:00', 0, 0, 0, 0, 0),
(10000950345, NULL, 'vnuevas@nhs.net', 'fab2b43cce5966b03432607b71fde4b298ec2f79a4f5a76eb6eed0c339cb0ce6', 'Venson', 'Nuevas', 'course_admin', 'vnuevas', 1, 1, '', NULL, 0, '78cHgqMhLRJHz575WXy9uw==', '0000-00-00 00:00:00', 0, 0, 0, 0, 0),
(10000950346, NULL, 'a.oram@nhs.net', 'fab2b43cce5966b03432607b71fde4b298ec2f79a4f5a76eb6eed0c339cb0ce6', 'Alison', 'Oram', 'course_admin', 'a.oram', 1, 1, '', NULL, 0, '78cHgqMhLRJHz575WXy9uw==', '0000-00-00 00:00:00', 0, 0, 0, 0, 0),
(10000950347, NULL, 'vanessa.pasquier@nhs.net', 'fab2b43cce5966b03432607b71fde4b298ec2f79a4f5a76eb6eed0c339cb0ce6', 'Vanessa', 'Pasquier', 'course_admin', 'vanessa.pasquier', 1, 1, '', NULL, 0, '78cHgqMhLRJHz575WXy9uw==', '0000-00-00 00:00:00', 0, 0, 0, 0, 0),
(10000950348, NULL, 'simonpawlin@outlook.com', 'fab2b43cce5966b03432607b71fde4b298ec2f79a4f5a76eb6eed0c339cb0ce6', 'Simon', 'Pawlin', 'course_admin', 'simonpawlin', 1, 1, '', NULL, 0, '78cHgqMhLRJHz575WXy9uw==', '0000-00-00 00:00:00', 0, 0, 0, 0, 0),
(10000950349, NULL, 'r.raleigh@surrey.ac.uk', 'fab2b43cce5966b03432607b71fde4b298ec2f79a4f5a76eb6eed0c339cb0ce6', 'Mary', 'Raleigh', 'course_admin', 'r.raleigh', 1, 1, '', NULL, 0, '78cHgqMhLRJHz575WXy9uw==', '0000-00-00 00:00:00', 0, 0, 0, 0, 0),
(10000950350, NULL, 'susieregan@nhs.net', 'fab2b43cce5966b03432607b71fde4b298ec2f79a4f5a76eb6eed0c339cb0ce6', 'Susie', 'Regan', 'course_admin', 'susieregan', 1, 1, '', NULL, 0, '78cHgqMhLRJHz575WXy9uw==', '0000-00-00 00:00:00', 0, 0, 0, 0, 0),
(10000950351, NULL, 'juliannerigby@nhs.nes', 'fab2b43cce5966b03432607b71fde4b298ec2f79a4f5a76eb6eed0c339cb0ce6', 'Julianne', 'Rigby', 'course_admin', 'juliannerigby', 1, 1, '', NULL, 0, '78cHgqMhLRJHz575WXy9uw==', '0000-00-00 00:00:00', 0, 0, 0, 0, 0),
(10000950352, NULL, 'sallywhitehouse@nhs.net', 'fab2b43cce5966b03432607b71fde4b298ec2f79a4f5a76eb6eed0c339cb0ce6', 'Sally', 'Whitehouse', 'course_admin', 'sallywhitehouse', 1, 1, '', NULL, 0, '78cHgqMhLRJHz575WXy9uw==', '0000-00-00 00:00:00', 0, 0, 0, 0, 0),
(10000950353, 'Wilding_V_001', 'v.wilding@nhs.net', 'fab2b43cce5966b03432607b71fde4b298ec2f79a4f5a76eb6eed0c339cb0ce6', 'Victoria', 'Wilding', 'course_admin', 'v.wilding', 0, 1, '', 2, 0, '78cHgqMhLRJHz575WXy9uw==', '0000-00-00 00:00:00', 0, 0, 0, 0, 0),
(10000950354, NULL, 'judithwilliamson@nhs.net', 'fab2b43cce5966b03432607b71fde4b298ec2f79a4f5a76eb6eed0c339cb0ce6', 'Judith', 'Williamson', 'course_admin', 'judithwilliamson', 1, 1, '', NULL, 0, '78cHgqMhLRJHz575WXy9uw==', '0000-00-00 00:00:00', 0, 0, 0, 0, 0),
(10000340101, NULL, 'j@leeno.com', 'b3bcbfdad52d9dca7de6f232a9e8275dfb63ce72d462e5b742a61ab5f2dae871', 'James', 'Leighs', 'nurse', 'jleighs', 1, 1, 'a:1:{i:0;s:11:"10000763106";}', 6, 10000641641, 'SDKFEzYt62K+TdnJKZkOQg==', '2017-07-14 13:52:41', 1, 123456, 1, 1, 2010),
(10000603933, NULL, 's@g.com', 'fab2b43cce5966b03432607b71fde4b298ec2f79a4f5a76eb6eed0c339cb0ce6', 'Sandra', 'Gomes', 'nurse', 'sGomes', 1, 1, 'a:1:{i:0;s:11:"10000763106";}', 5, 10000641614, '78cHgqMhLRJHz575WXy9uw==', '2017-07-20 12:14:46', 0, 555, 2, 1, 2015),
(10000840543, '', 'mazen_sehgal@hotmail.com', '5f8c5a9fb6654e99fe37207d3ecb56e586950b3b3538efcdab96cf59a30f774f', 'Test', 'Test', 'nurse', 'test1', 1, 1, NULL, 5, 0, 'ea843gDgmgNoiqLymjL49Q==', '2018-02-03 15:22:00', 1, 1234, 1, 1, 2013);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_info`
--

CREATE TABLE IF NOT EXISTS `tbl_user_info` (
  `ID` bigint(110) NOT NULL,
  `user_ID` bigint(100) DEFAULT NULL,
  `prec_intro` date DEFAULT NULL,
  `current_prec` int(11) DEFAULT NULL,
  `pin` int(11) DEFAULT NULL,
  `delay` int(11) DEFAULT NULL,
  `prec_name` varchar(150) DEFAULT NULL,
  `int_nurse` int(11) DEFAULT NULL,
  `WTE` varchar(150) DEFAULT NULL,
  `p_email` varchar(150) DEFAULT NULL,
  `p_country` varchar(150) DEFAULT NULL,
  `sign_off` int(11) DEFAULT NULL,
  `awards` varchar(150) DEFAULT NULL,
  `link` varchar(150) DEFAULT NULL,
  `prec_trainer` bigint(110) DEFAULT NULL,
  `prec_notes` text,
  `hca_start` date DEFAULT NULL,
  `hca_manager` varchar(150) DEFAULT NULL,
  `hca_email` varchar(150) DEFAULT NULL,
  `hca_new_care` int(11) DEFAULT NULL,
  `hca_current_client` int(11) DEFAULT NULL,
  `hca_fundamental_care` int(11) DEFAULT NULL,
  `hca_care` int(11) DEFAULT NULL,
  `hca_trainer` bigint(10) DEFAULT NULL,
  `hca_notes` text,
  `fd_start` date DEFAULT NULL,
  `fd_graduate` date DEFAULT NULL,
  `fd_inturrupt` int(11) DEFAULT NULL,
  `fd_sd1` int(11) DEFAULT NULL,
  `fd_sd2` int(11) DEFAULT NULL,
  `fd_sd3` int(11) DEFAULT NULL,
  `fd_other` text,
  `fd_current` int(11) DEFAULT NULL,
  `fd_trainer` bigint(10) DEFAULT NULL,
  `fd_notes` text,
  `mentor_current` int(11) DEFAULT NULL,
  `mentor_renew` date DEFAULT NULL,
  `mentor_sign_off` int(11) DEFAULT NULL,
  `mentor_notes` text,
  `stud_cohort` int(150) DEFAULT NULL,
  `stud_cohort_date` int(150) DEFAULT NULL,
  `stud_d1` date DEFAULT NULL,
  `stud_d2` date DEFAULT NULL,
  `stud_d3` date DEFAULT NULL,
  `stud_notes` text
) ENGINE=InnoDB AUTO_INCREMENT=10000162990 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_info`
--

INSERT INTO `tbl_user_info` (`ID`, `user_ID`, `prec_intro`, `current_prec`, `pin`, `delay`, `prec_name`, `int_nurse`, `WTE`, `p_email`, `p_country`, `sign_off`, `awards`, `link`, `prec_trainer`, `prec_notes`, `hca_start`, `hca_manager`, `hca_email`, `hca_new_care`, `hca_current_client`, `hca_fundamental_care`, `hca_care`, `hca_trainer`, `hca_notes`, `fd_start`, `fd_graduate`, `fd_inturrupt`, `fd_sd1`, `fd_sd2`, `fd_sd3`, `fd_other`, `fd_current`, `fd_trainer`, `fd_notes`, `mentor_current`, `mentor_renew`, `mentor_sign_off`, `mentor_notes`, `stud_cohort`, `stud_cohort_date`, `stud_d1`, `stud_d2`, `stud_d3`, `stud_notes`) VALUES
(10000020817, 10000603933, '2017-10-07', 1, 0, 1, 'Name', 0, '23', 'm@s.com', 'test', 6, 'sdfdsf', 'www.google.co.uk', 10000950339, 'test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10000162989, 10000978730, '2017-10-12', 1, 1, 0, 'Test', 0, '1245', 'm@s.com', 'Uk', 6, 'None', 'Test', 10000950340, 'test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_progress`
--

CREATE TABLE IF NOT EXISTS `tbl_user_progress` (
  `ID` bigint(20) NOT NULL,
  `user_ID` bigint(20) NOT NULL,
  `prec` text NOT NULL,
  `hca` text NOT NULL,
  `fdap` text NOT NULL,
  `stud` text NOT NULL,
  `ment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_work_area`
--

CREATE TABLE IF NOT EXISTS `tbl_work_area` (
  `ID` bigint(20) NOT NULL,
  `code` varchar(150) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `phone1` int(15) DEFAULT NULL,
  `phone2` int(15) DEFAULT NULL,
  `bleep` int(150) DEFAULT NULL,
  `first_name` varchar(150) DEFAULT NULL,
  `last_name` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_work_area`
--

INSERT INTO `tbl_work_area` (`ID`, `code`, `name`, `phone1`, `phone2`, `bleep`, `first_name`, `last_name`, `email`, `created_on`) VALUES
(1, 'A&E_01', 'A&E', 4156, 4293, 0, 'Ben', 'Hill', 'ben.hill@nhs.net', '0000-00-00 00:00:00'),
(2, 'ADU_01', 'ADU', 6520, 6349, 0, '', '', '', '0000-00-00 00:00:00'),
(3, 'Albury_01', 'Albury', 4814, 4456, 0, 'Laura', 'Dean', 'lauradean@nhs.net', '0000-00-00 00:00:00'),
(4, 'Bank_001', 'Bank Substantive', 0, 0, 0, '', '', '', '0000-00-00 00:00:00'),
(5, 'Bank_002', 'Bank Temporary', 0, 0, 0, '', '', '', '0000-00-00 00:00:00'),
(6, 'Bramshott_01', 'Bramshott', 4065, 4064, 0, 'Andi', 'Blake', 'andria.blake@nhs.net', '0000-00-00 00:00:00'),
(7, 'Cardiac_Day_01', 'Cardiac Day Ward', 6326, 0, 0, 'Annette', 'Coote', 'acoote@nhs.net', '0000-00-00 00:00:00'),
(8, 'CCU_01', 'CCU', 4016, 0, 0, 'Annette', 'Coote', 'acoote@nhs.net', '0000-00-00 00:00:00'),
(9, 'Chilworth_01', 'Chilworth', 6842, 6843, 0, 'Alison', 'Holden', 'alisonholden1@nhs.net', '0000-00-00 00:00:00'),
(10, 'Clandon_01', 'Clandon', 4359, 4357, 0, 'Anna', 'Caffery', 'annacaffarey@nhs.net', '0000-00-00 00:00:00'),
(11, 'ClincalSiteTeam_01', 'Clinical Site Management', 2158, 0, 0, 'Sue', 'Wilson', 'susanwilson7@nhs.net', '0000-00-00 00:00:00'),
(12, 'Compton_01', 'Compton', 4941, 6372, 0, 'Sarah', 'Hicks', 'shicks1@nhs.net', '0000-00-00 00:00:00'),
(13, 'Del_Suite_01', 'Delivery Suite', 4699, 0, 0, 'Jacqui', 'Tingle', 'jtingle@nhs.net', '0000-00-00 00:00:00'),
(14, 'DSU_01', 'DSU', 6977, 6970, 0, 'Claire', 'Phillips', 'clairephillips1@nhs.net', '0000-00-00 00:00:00'),
(15, 'Eashing01', 'Eashing', 4081, 4082, 0, 'Alene', 'Galbo', 'agalbo@nhs.net', '0000-00-00 00:00:00'),
(16, 'EAU_01', 'EAU', 6721, 2168, 0, 'Liz', 'Raderecht', 'eraderecht@nhs.net', '0000-00-00 00:00:00'),
(17, 'Elstead_01', 'Elstead', 4083, 4084, 0, 'Natalie', 'Grigg', 'ngrigg@nhs.net', '0000-00-00 00:00:00'),
(18, 'Endoscoy_01', 'Endoscopy', 4921, 4171, 0, 'Vanessa', 'Ballons', 'vanessa.bollons@nhs.net', '0000-00-00 00:00:00'),
(19, 'Ewhurst_01', 'Ewhurst', 4073, 4075, 0, 'Karen', 'Oliver', 'koliver3@nhs.net', '0000-00-00 00:00:00'),
(20, 'External_01', 'External Location', 0, 0, 0, '', '', '', '0000-00-00 00:00:00'),
(21, 'EyeClinic_01', 'Eye Clinic', 4648, 4442, 0, 'Anthea', 'Cross', 'anthea.cross@nhs.net', '0000-00-00 00:00:00'),
(22, 'FractureClinic_01', 'Fracture Clinic', 4159, 0, 0, 'Caroline', 'Sephton-Brown', 'csephton-brown@nhs.net', '0000-00-00 00:00:00'),
(23, 'Frensham_01', 'Frensham', 4090, 4092, 0, 'Kathy', 'Corking', 'k.corking@nhs.net', '0000-00-00 00:00:00'),
(24, 'Hascombe_01', 'Hascombe', 4070, 4071, 0, 'Sarah', 'Maidment', 'sarahmaidment@nhs.net', '0000-00-00 00:00:00'),
(25, 'Hindhead_01', 'Hindhead', 6369, 4487, 0, 'Judith', 'Williamson', 'judithwilliamson@nhs.net', '0000-00-00 00:00:00'),
(26, 'Host_01', 'HOST', 2797, 4448, 71, 'Jenny', 'Cowell', 'jcowell1@nhs.net', '0000-00-00 00:00:00'),
(27, 'ICU_01', 'ICU', 4222, 4026, 0, 'Steve', 'Green', 's.green@nhs.net', '0000-00-00 00:00:00'),
(28, 'Maxfax_01', 'Maxfax OPD', 4602, 4726, 0, 'Sarah', 'Barkway', 'sarah.barkway@nhs.net', '0000-00-00 00:00:00'),
(29, 'MDU_01', 'MDU', 2424, 0, 0, 'Beth', 'Skipp', 'e.skipp@nhs.net', '0000-00-00 00:00:00'),
(30, 'Merrow_01', 'Merrow', 4098, 4099, 0, 'Julia', 'Titchen', 'jtitchen@nhs.net', '0000-00-00 00:00:00'),
(31, 'Millbridge_01', 'Millbridge', 4192, 4192, 0, 'Jane', 'Colebourne', 'jcolbourne@nhs.net', '0000-00-00 00:00:00'),
(32, 'Onslow_01', 'Onslow', 6858, 6859, 0, 'Sarah', 'Etherington', 'sarah.etherington@nhs.net', '0000-00-00 00:00:00'),
(33, 'OPD_Oncology_001', 'Oncology Outpatients Department', 6761, 0, 0, '', '', '', '0000-00-00 00:00:00'),
(34, 'Other_01', 'Other', 0, 0, 0, '', '', '', '0000-00-00 00:00:00'),
(35, 'Outpatients_01', 'Outpatients', 4627, 2094, 0, 'Maggie', 'Critchlow', 'maggie.critchlow@nhs.net', '0000-00-00 00:00:00'),
(36, 'PACU_01', 'PACU', 4112, 0, 0, 'David', 'Young', 'davidyoung4@nhs.net', '0000-00-00 00:00:00'),
(37, 'PatientLounge_01', 'Patient Lounge', 2139, 0, 0, 'Clair', 'Flinn', 'cflinn@nhs.net', '0000-00-00 00:00:00'),
(38, 'Practice_Dev_01', 'Practice Development', 2811, 0, 0, 'Jo', 'Embleton', 'jo.embleton@nhs.net', '0000-00-00 00:00:00'),
(39, 'Pre-OpAssess_01', 'Pre Op Assessment', 4628, 0, 0, 'Rebecca', 'Tucker', 'rebecca.tucker1@nhs.net', '0000-00-00 00:00:00'),
(40, 'Radiology_01', 'Radiology', 4596, 0, 0, 'Jane', 'Asuncion', 'jane.asuncion@nhs.net', '0000-00-00 00:00:00'),
(41, 'Shere_01', 'Shere', 4702, 4134, 0, 'Gail', 'White', 'gwhite1@nhs.net', '0000-00-00 00:00:00'),
(42, 'SSSU_01', 'SSSU', 6828, 0, 0, 'Jenny', 'Jeffery', 'j.jeffery@nhs.net', '0000-00-00 00:00:00'),
(43, 'St.Lukes_001', 'St. Lukes (general)', 0, 0, 0, '', '', '', '0000-00-00 00:00:00'),
(44, 'St.LukesOPD_001', 'ST. Luke Outpatients', 0, 0, 0, '', '', '', '0000-00-00 00:00:00'),
(45, 'St_Caths_01', 'St. Catherines', 4709, 0, 0, 'Lucy', 'Rowley', 'lucyrowley@nhs.net', '0000-00-00 00:00:00'),
(46, 'Theatres_01', 'Theatres', 4106, 0, 0, 'richard', 'gerold', 'richardgerold@nhs.net', '0000-00-00 00:00:00'),
(47, 'Tilford_01', 'Tilford', 4198, 0, 0, 'Mandy', 'Rattue', 'Rattue Mandy (ROYAL SURREY COUNTY HOSPITAL NHS FOUNDATION TRUST) <mandyrattue@nhs.net>', '0000-00-00 00:00:00'),
(48, 'Uni_S_01', 'University Of Surrey', 1483, 2793, 0, 'Simon', 'Pawlin', 's.pawlin@nhs.net', '0000-00-00 00:00:00'),
(49, 'Wisley_01', 'Wisley', 4693, 0, 0, 'Sreeja', 'Sukumaran', 'ssukumaran@nhs.net', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_access_log`
--
ALTER TABLE `tbl_access_log`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_alert`
--
ALTER TABLE `tbl_alert`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_bookings`
--
ALTER TABLE `tbl_bookings`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_cohort`
--
ALTER TABLE `tbl_cohort`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_cohort_ext`
--
ALTER TABLE `tbl_cohort_ext`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_courses`
--
ALTER TABLE `tbl_courses`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_course_settings`
--
ALTER TABLE `tbl_course_settings`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_course_types`
--
ALTER TABLE `tbl_course_types`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_course_user`
--
ALTER TABLE `tbl_course_user`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_designations`
--
ALTER TABLE `tbl_designations`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_locations`
--
ALTER TABLE `tbl_locations`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_mentor_teach`
--
ALTER TABLE `tbl_mentor_teach`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_notes`
--
ALTER TABLE `tbl_notes`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`),
  ADD KEY `ID_2` (`ID`);

--
-- Indexes for table `tbl_notifications`
--
ALTER TABLE `tbl_notifications`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_options`
--
ALTER TABLE `tbl_options`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_pending_bookings`
--
ALTER TABLE `tbl_pending_bookings`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_removed_users`
--
ALTER TABLE `tbl_removed_users`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_rules`
--
ALTER TABLE `tbl_rules`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_templates`
--
ALTER TABLE `tbl_templates`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_usermeta`
--
ALTER TABLE `tbl_usermeta`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_user_info`
--
ALTER TABLE `tbl_user_info`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_user_progress`
--
ALTER TABLE `tbl_user_progress`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_work_area`
--
ALTER TABLE `tbl_work_area`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_access_log`
--
ALTER TABLE `tbl_access_log`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=94;
--
-- AUTO_INCREMENT for table `tbl_alert`
--
ALTER TABLE `tbl_alert`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_bookings`
--
ALTER TABLE `tbl_bookings`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10000507807;
--
-- AUTO_INCREMENT for table `tbl_cohort_ext`
--
ALTER TABLE `tbl_cohort_ext`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `tbl_courses`
--
ALTER TABLE `tbl_courses`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2147483647;
--
-- AUTO_INCREMENT for table `tbl_course_settings`
--
ALTER TABLE `tbl_course_settings`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_course_types`
--
ALTER TABLE `tbl_course_types`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10000987420;
--
-- AUTO_INCREMENT for table `tbl_course_user`
--
ALTER TABLE `tbl_course_user`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10000942987;
--
-- AUTO_INCREMENT for table `tbl_designations`
--
ALTER TABLE `tbl_designations`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10000641647;
--
-- AUTO_INCREMENT for table `tbl_locations`
--
ALTER TABLE `tbl_locations`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tbl_mentor_teach`
--
ALTER TABLE `tbl_mentor_teach`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10000149503;
--
-- AUTO_INCREMENT for table `tbl_notes`
--
ALTER TABLE `tbl_notes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tbl_notifications`
--
ALTER TABLE `tbl_notifications`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=734;
--
-- AUTO_INCREMENT for table `tbl_options`
--
ALTER TABLE `tbl_options`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tbl_pending_bookings`
--
ALTER TABLE `tbl_pending_bookings`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10000829159;
--
-- AUTO_INCREMENT for table `tbl_removed_users`
--
ALTER TABLE `tbl_removed_users`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_rules`
--
ALTER TABLE `tbl_rules`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10000302712;
--
-- AUTO_INCREMENT for table `tbl_templates`
--
ALTER TABLE `tbl_templates`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10000883687;
--
-- AUTO_INCREMENT for table `tbl_usermeta`
--
ALTER TABLE `tbl_usermeta`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=509;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10000950355;
--
-- AUTO_INCREMENT for table `tbl_user_info`
--
ALTER TABLE `tbl_user_info`
  MODIFY `ID` bigint(110) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10000162990;
--
-- AUTO_INCREMENT for table `tbl_user_progress`
--
ALTER TABLE `tbl_user_progress`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_work_area`
--
ALTER TABLE `tbl_work_area`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
