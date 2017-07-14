-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 14, 2017 at 04:02 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

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

CREATE TABLE `tbl_access_log` (
  `ID` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `ip_address` text COLLATE utf8_unicode_ci NOT NULL,
  `device` text COLLATE utf8_unicode_ci NOT NULL,
  `user_agent` text COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(52, 10000950345, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/602.3.12 (KHTML, like Gecko) Version/10.0.2 Safari/602.3.12', '2017-07-14 13:58:07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bookings`
--

CREATE TABLE `tbl_bookings` (
  `ID` bigint(20) NOT NULL,
  `course` bigint(20) NOT NULL,
  `booking_date` varchar(50) NOT NULL,
  `nurses` text NOT NULL,
  `enroll` text NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cohort`
--

CREATE TABLE `tbl_cohort` (
  `ID` bigint(12) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `type` varchar(150) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `y` int(100) DEFAULT NULL,
  `m` int(100) DEFAULT NULL,
  `d` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cohort`
--

INSERT INTO `tbl_cohort` (`ID`, `name`, `type`, `date`, `y`, `m`, `d`) VALUES
(2147483647, 'Adult Cohort', 'adult', '2011-09-01', 0, 6, 0),
(10000771328, 'Overseas Cohort', 'Overseas Adaptive', '2015-02-02', 0, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cohort_ext`
--

CREATE TABLE `tbl_cohort_ext` (
  `ID` int(11) NOT NULL,
  `Cohort_ID` bigint(12) NOT NULL,
  `Cohort_date` date NOT NULL,
  `over` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cohort_ext`
--

INSERT INTO `tbl_cohort_ext` (`ID`, `Cohort_ID`, `Cohort_date`, `over`) VALUES
(101, 2147483647, '2013-03-02', 1),
(102, 2147483647, '2014-09-03', 1),
(103, 2147483647, '2016-03-04', 1),
(104, 2147483647, '2017-09-05', 0),
(105, 2147483647, '2019-03-06', 0),
(106, 2147483647, '2020-09-07', 0),
(107, 2147483647, '2022-03-08', 0),
(108, 2147483647, '2023-09-09', 0),
(109, 2147483647, '2025-03-10', 0),
(110, 2147483647, '2026-09-11', 0),
(111, 10000771328, '2015-05-02', 1),
(112, 10000771328, '2015-08-02', 1),
(113, 10000771328, '2015-11-02', 1),
(114, 10000771328, '2016-02-02', 1),
(115, 10000771328, '2016-05-02', 1),
(116, 10000771328, '2016-08-02', 1),
(117, 10000771328, '2016-11-02', 1),
(118, 10000771328, '2017-02-02', 1),
(119, 10000771328, '2017-05-02', 1),
(120, 10000771328, '2017-08-02', 0),
(121, 2147483647, '2012-03-01', 1),
(122, 2147483647, '2012-09-01', 1),
(123, 2147483647, '2013-03-01', 1),
(124, 2147483647, '2013-09-01', 1),
(125, 2147483647, '2014-03-01', 1),
(126, 2147483647, '2014-09-01', 1),
(127, 2147483647, '2015-03-01', 1),
(128, 2147483647, '2015-09-01', 1),
(129, 2147483647, '2016-03-01', 1),
(130, 2147483647, '2016-09-01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courses`
--

CREATE TABLE `tbl_courses` (
  `ID` bigint(20) NOT NULL,
  `course_ID` varchar(50) NOT NULL,
  `name` varchar(1024) NOT NULL,
  `description` text,
  `admins` text,
  `duration` int(11) DEFAULT NULL,
  `location` bigint(20) NOT NULL,
  `retrain_date` int(11) DEFAULT NULL,
  `active` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_courses`
--

INSERT INTO `tbl_courses` (`ID`, `course_ID`, `name`, `description`, `admins`, `duration`, `location`, `retrain_date`, `active`, `created_on`) VALUES
(10000999591, 'BasicWard_Feb15', 'Basic Ward Management', '', '', 0, 0, 0, 1, '2026-02-15 00:00:00'),
(10000999592, 'BasicWard_Jun15', 'Basic Ward Management', '', '', 0, 0, 0, 1, '2025-06-14 23:00:00'),
(10000999593, 'BasicWard_Nov14', 'Basic Ward Management', '', '', 0, 0, 0, 1, '2026-11-14 00:00:00'),
(10000999594, 'BasicWard_Nov15', 'Basic Ward Management', '', '', 0, 0, 0, 1, '2020-11-15 00:00:00'),
(10000999595, 'BasicWard_Sep14', 'Basic Ward Management', '', '', 0, 0, 0, 0, '2023-09-13 23:00:00'),
(10000999596, 'BasicWard_Sep15', 'Basic Ward Management', '', '', 0, 0, 0, 1, '2017-09-14 23:00:00'),
(10000999597, 'BEACH_DEC14', 'BEACH Course', '', 'a:1:{i:0;s:11:\"10000950337\";}', 0, 4, 0, 1, '2008-12-14 00:00:00'),
(10000999598, 'BEACH_Sep14', 'BEACH Course', '', 'a:1:{i:0;s:11:\"10000950337\";}', 0, 20, 0, 0, '2011-09-13 23:00:00'),
(10000999599, 'Cath_Nov14', 'Catheterisation', '', '', 0, 0, 0, 1, '2018-11-14 00:00:00'),
(10000999600, 'Cath_Sep14', 'Catheterisation', '', '', 0, 0, 0, 0, '2009-09-13 23:00:00'),
(10000999601, 'ECG_Dec14', '12 Lead ECG', '', '2', 0, 0, 0, 1, '2009-12-14 00:00:00'),
(10000999602, 'ECG_Dec15', '12 Lead ECG', '', '', 0, 0, 0, 1, '2021-12-15 00:00:00'),
(10000999603, 'ECG_Feb15', '12 Lead ECG', '', '', 0, 0, 0, 1, '2010-02-15 00:00:00'),
(10000999604, 'ECG_Jun15', '12 Lead ECG', '', '', 0, 0, 0, 1, '2024-06-14 23:00:00'),
(10000999605, 'ECG_Sep14', '12 Lead ECG', '', '2', 0, 0, 0, 0, '2016-09-13 23:00:00'),
(10000999606, 'ECG_Sep15', '12 Lead ECG', '', '', 0, 0, 0, 1, '2022-09-14 23:00:00'),
(10000999607, 'IV Additives January 2015', 'IV Additives', '', '', 0, 4, 0, 1, '2006-01-15 00:00:00'),
(10000999608, 'IV_ADDS_2_Sep14', 'IV Additives', '', '2', 0, 0, 0, 0, '2030-09-13 23:00:00'),
(10000999609, 'IV_ADDS_Apr15', 'IV Additives', '', '', 0, 0, 0, 1, '2014-04-14 23:00:00'),
(10000999610, 'IV_ADDS_Aug15', 'IV Additives', '', '', 0, 0, 0, 1, '2011-08-14 23:00:00'),
(10000999611, 'IV_ADDS_Dec14', 'IV Additives', '', '2', 0, 0, 0, 1, '2002-12-14 00:00:00'),
(10000999612, 'IV_ADDS_Dec15', 'IV Additives', '', '', 0, 0, 0, 1, '2015-12-15 00:00:00'),
(10000999613, 'IV_ADDS_Feb15', 'IV Additives', '', '', 0, 0, 0, 1, '2003-02-15 00:00:00'),
(10000999614, 'IV_ADDS_Jan15', 'IV Additives', '', '', 0, 0, 0, 1, '2006-01-15 00:00:00'),
(10000999615, 'IV_ADDS_Jul15', 'IV Additives', '', '', 0, 0, 0, 1, '2021-07-14 23:00:00'),
(10000999616, 'IV_ADDS_Jun15', 'IV Additives', '', '', 0, 0, 0, 1, '2009-06-14 23:00:00'),
(10000999617, 'IV_ADDS_Mar15', 'IV Additives', '', '', 0, 0, 0, 1, '2003-03-15 00:00:00'),
(10000999618, 'IV_ADDS_May15', 'IV Additives', '', '', 0, 0, 0, 1, '2005-05-14 23:00:00'),
(10000999619, 'IV_ADDS_Nov14', 'IV Additives', '', '2', 0, 0, 0, 1, '2004-11-14 00:00:00'),
(10000999620, 'IV_ADDS_Nov15', 'IV Additives', '', '', 0, 0, 0, 1, '2010-11-15 00:00:00'),
(10000999621, 'IV_ADDS_Oct15', 'IV Additives', '', '', 0, 0, 0, 1, '2013-10-14 23:00:00'),
(10000999622, 'IV_ADDS_Sep14', 'IV Additives', '', '2', 0, 0, 0, 0, '2016-09-13 23:00:00'),
(10000999623, 'IV_ADDS_Sep15', 'IV Additives', '', '', 0, 0, 0, 1, '2015-09-14 23:00:00'),
(10000999624, 'IV_exam_Apr15', 'IV Exam', '', '', 0, 0, 0, 1, '2020-04-14 23:00:00'),
(10000999625, 'IV_exam_Dec15', 'IV Exam', '', '', 0, 0, 0, 1, '2002-12-15 00:00:00'),
(10000999626, 'IV_exam_Feb15', 'IV Exam', '', '', 0, 0, 0, 1, '2018-02-15 00:00:00'),
(10000999627, 'IV_exam_Jan15', 'IV Exam', '', '', 0, 0, 0, 1, '2020-01-15 00:00:00'),
(10000999628, 'IV_exam_JulA15', 'IV Exam', '', '', 0, 0, 0, 1, '2007-07-14 23:00:00'),
(10000999629, 'IV_exam_JulB15', 'IV Exam', '', '', 0, 0, 0, 1, '2027-07-14 23:00:00'),
(10000999630, 'IV_exam_Mar15', 'IV Exam', '', '', 0, 0, 0, 1, '2031-03-15 00:00:00'),
(10000999631, 'IV_exam_May15', 'IV Exam', '', '', 0, 0, 0, 1, '2027-05-14 23:00:00'),
(10000999632, 'IV_exam_OctA15', 'IV Exam', '', '', 0, 0, 0, 1, '2001-10-14 23:00:00'),
(10000999633, 'IV_exam_OctB15', 'IV Exam', '', '', 0, 0, 0, 1, '2027-10-14 23:00:00'),
(10000999634, 'IV_exam_Sep15', 'IV Exam', '', '', 0, 0, 0, 1, '2003-09-14 23:00:00'),
(10000999635, 'IV_UP__Nov14', 'IV Update', '', '2', 0, 0, 0, 1, '2027-11-14 00:00:00'),
(10000999636, 'IV_UP__Oct_14', 'IV Update', '', '2', 0, 0, 0, 1, '2009-10-13 23:00:00'),
(10000999637, 'IV_UP__Sep_14', 'IV Update', '', '2', 0, 0, 0, 0, '2005-09-13 23:00:00'),
(10000999638, 'IV_UP_DEC14', 'IV Update', '', '2', 0, 0, 0, 1, '2011-12-14 00:00:00'),
(10000999639, 'IV_Update_Apr15', 'IV Update', '', '', 0, 0, 0, 1, '2022-04-14 23:00:00'),
(10000999640, 'IV_Update_Aug15', 'IV Update', '', '', 0, 0, 0, 1, '2026-08-14 23:00:00'),
(10000999641, 'IV_Update_dec15', 'IV Update', '', '', 0, 0, 0, 1, '2018-12-15 00:00:00'),
(10000999642, 'IV_Update_Feb15', 'IV Update', '', '', 0, 0, 0, 1, '2012-02-15 00:00:00'),
(10000999643, 'IV_Update_Jul15', 'IV Update', '', '', 0, 0, 0, 1, '2020-07-14 23:00:00'),
(10000999644, 'IV_Update_Jun15', 'IV Update', '', '', 0, 0, 0, 1, '2018-06-14 23:00:00'),
(10000999645, 'IV_Update_Mar15', 'IV Update', '', '', 0, 0, 0, 1, '2019-03-15 00:00:00'),
(10000999646, 'IV_Update_May15', 'IV Update', '', '', 0, 0, 0, 1, '2012-05-14 23:00:00'),
(10000999647, 'IV_Update_Nov15', 'IV Update', '', '', 0, 0, 0, 1, '2017-11-15 00:00:00'),
(10000999648, 'IV_Update_Oct15', 'IV Update', '', '', 0, 0, 0, 1, '2021-10-14 23:00:00'),
(10000999649, 'IV_Update_Sep15', 'IV Update', '', '', 0, 0, 0, 1, '2010-09-14 23:00:00'),
(10000999650, 'IvExam_Nov14', 'IV Exam', '', '2', 0, 0, 0, 1, '2020-11-14 00:00:00'),
(10000999651, 'IvExam_Oct14', 'IV Exam', '', '2', 0, 0, 0, 1, '2020-10-13 23:00:00'),
(10000999652, 'IvExam_Sep14', 'IV Exam', '', '2', 0, 0, 0, 0, '2024-09-13 23:00:00'),
(10000999653, 'IVUpdate_Jan15', 'IV Update', '', '', 0, 6, 0, 1, '2019-01-15 00:00:00'),
(10000999654, 'Link_Jan15', 'LINKS', '12,13,14', 'a:18:{i:0;s:11:\"10000950343\";i:1;s:11:\"10000950341\";i:2;s:11:\"10000950342\";i:3;s:11:\"10000950338\";i:4;s:11:\"10000950339\";i:5;s:11:\"10000950340\";i:6;s:11:\"10000950337\";i:7;s:11:\"10000950344\";i:8;s:11:\"10000950345\";i:9;s:11:\"10000950346\";i:10;s:11:\"10000950347\";i:11;s:11:\"10000950348\";i:12;s:11:\"10000950349\";i:13;s:11:\"10000950350\";i:14;s:11:\"10000950351\";i:15;s:11:\"10000950352\";i:16;s:11:\"10000950353\";i:17;s:11:\"10000950354\";}', 0, 9, 0, 1, '2012-01-15 00:00:00'),
(10000999655, 'Link_Mar15', 'LINKS', '09,10,11', 'a:18:{i:0;s:11:\"10000950343\";i:1;s:11:\"10000950341\";i:2;s:11:\"10000950342\";i:3;s:11:\"10000950338\";i:4;s:11:\"10000950339\";i:5;s:11:\"10000950340\";i:6;s:11:\"10000950337\";i:7;s:11:\"10000950344\";i:8;s:11:\"10000950345\";i:9;s:11:\"10000950346\";i:10;s:11:\"10000950347\";i:11;s:11:\"10000950348\";i:12;s:11:\"10000950349\";i:13;s:11:\"10000950350\";i:14;s:11:\"10000950351\";i:15;s:11:\"10000950352\";i:16;s:11:\"10000950353\";i:17;s:11:\"10000950354\";}', 0, 9, 0, 1, '2009-03-15 00:00:00'),
(10000999656, 'Link_May15', 'LINKS', '18,19,20', 'a:18:{i:0;s:11:\"10000950343\";i:1;s:11:\"10000950341\";i:2;s:11:\"10000950342\";i:3;s:11:\"10000950338\";i:4;s:11:\"10000950339\";i:5;s:11:\"10000950340\";i:6;s:11:\"10000950337\";i:7;s:11:\"10000950344\";i:8;s:11:\"10000950345\";i:9;s:11:\"10000950346\";i:10;s:11:\"10000950347\";i:11;s:11:\"10000950348\";i:12;s:11:\"10000950349\";i:13;s:11:\"10000950350\";i:14;s:11:\"10000950351\";i:15;s:11:\"10000950352\";i:16;s:11:\"10000950353\";i:17;s:11:\"10000950354\";}', 0, 10, 0, 1, '2018-05-14 23:00:00'),
(10000999657, 'Link_Oct15', 'LINKS', '12,13,16', 'a:18:{i:0;s:11:\"10000950343\";i:1;s:11:\"10000950341\";i:2;s:11:\"10000950342\";i:3;s:11:\"10000950338\";i:4;s:11:\"10000950339\";i:5;s:11:\"10000950340\";i:6;s:11:\"10000950337\";i:7;s:11:\"10000950344\";i:8;s:11:\"10000950345\";i:9;s:11:\"10000950346\";i:10;s:11:\"10000950347\";i:11;s:11:\"10000950348\";i:12;s:11:\"10000950349\";i:13;s:11:\"10000950350\";i:14;s:11:\"10000950351\";i:15;s:11:\"10000950352\";i:16;s:11:\"10000950353\";i:17;s:11:\"10000950354\";}', 0, 9, 0, 1, '2012-10-14 23:00:00'),
(10000999658, 'Link_Sep15', 'LINKS', '2,3,4', 'a:18:{i:0;s:11:\"10000950343\";i:1;s:11:\"10000950341\";i:2;s:11:\"10000950342\";i:3;s:11:\"10000950338\";i:4;s:11:\"10000950339\";i:5;s:11:\"10000950340\";i:6;s:11:\"10000950337\";i:7;s:11:\"10000950344\";i:8;s:11:\"10000950345\";i:9;s:11:\"10000950346\";i:10;s:11:\"10000950347\";i:11;s:11:\"10000950348\";i:12;s:11:\"10000950349\";i:13;s:11:\"10000950350\";i:14;s:11:\"10000950351\";i:15;s:11:\"10000950352\";i:16;s:11:\"10000950353\";i:17;s:11:\"10000950354\";}', 0, 10, 0, 1, '2002-09-14 23:00:00'),
(10000999659, 'Links_Nov14', 'LINKS', '17,18,19', '9', 0, 0, 0, 1, '2017-11-14 00:00:00'),
(10000999660, 'Links_Sep14', 'LINKS', 'OCT 21,22 & Nov 10', '9', 0, 9, 0, 1, '2021-10-13 23:00:00'),
(10000999661, 'MentSign_Dec14', 'Mentor Sign-Off', '09.15-16.30', 'a:1:{i:0;s:11:\"10000950343\";}', 0, 16, 0, 1, '2012-12-14 00:00:00'),
(10000999662, 'MentSign_Mar15', 'Mentor Sign-Off', '09.15-16.30', 'a:1:{i:0;s:11:\"10000950343\";}', 0, 16, 0, 1, '2012-03-15 00:00:00'),
(10000999663, 'MentSign_May15', 'Mentor Sign-Off', '09.15-16.30', 'a:1:{i:0;s:11:\"10000950343\";}', 0, 16, 0, 1, '2018-05-14 23:00:00'),
(10000999664, 'MentSign_Sep14', 'Mentor Sign-Off', '09.15-16.30', 'a:1:{i:0;s:11:\"10000950343\";}', 0, 16, 0, 0, '2016-09-13 23:00:00'),
(10000999665, 'MentUp_Apr15', 'Mentor Update', '', 'a:1:{i:0;s:11:\"10000950338\";}', 0, 4, 0, 1, '2007-04-14 23:00:00'),
(10000999666, 'MentUp_Dec14', 'Mentor Update', '', 'a:1:{i:0;s:11:\"10000950343\";}', 0, 10, 0, 1, '2015-12-14 00:00:00'),
(10000999667, 'MentUp_Feb14', 'Mentor Update', '', 'a:1:{i:0;s:11:\"10000950338\";}', 0, 4, 0, 1, '2009-02-15 00:00:00'),
(10000999668, 'MentUp_Jan14', 'Mentor Update', '', 'a:1:{i:0;s:11:\"10000950349\";}', 0, 4, 0, 1, '2016-01-15 00:00:00'),
(10000999669, 'MentUp_Jul15', 'Mentor Update', '', 'a:1:{i:0;s:11:\"10000950349\";}', 0, 4, 0, 1, '2013-07-14 23:00:00'),
(10000999670, 'MentUp_Jun15', 'Mentor Update', '', 'a:1:{i:0;s:11:\"10000950343\";}', 0, 4, 0, 1, '2017-06-14 23:00:00'),
(10000999671, 'MentUp_Mar15', 'Mentor Update', '', 'a:1:{i:0;s:11:\"10000950338\";}', 0, 4, 0, 1, '2011-03-15 00:00:00'),
(10000999672, 'MentUp_May15', 'Mentor Update', '', 'a:1:{i:0;s:11:\"10000950338\";}', 0, 4, 0, 1, '2014-05-14 23:00:00'),
(10000999673, 'MentUp_Nov14', 'Mentor Update', '', 'a:1:{i:0;s:11:\"10000950343\";}', 0, 4, 0, 1, '2017-11-14 00:00:00'),
(10000999674, 'MentUp_Oct14', 'Mentor Update', '', 'a:1:{i:0;s:11:\"10000950342\";}', 0, 10, 0, 1, '2021-10-13 23:00:00'),
(10000999675, 'MentUp_Sep14', 'Mentor Update', '', 'a:1:{i:0;s:11:\"10000950343\";}', 0, 9, 0, 0, '2017-09-13 23:00:00'),
(10000999676, 'None_01', 'None', '', '', 0, 0, 0, 0, '0000-00-00 00:00:00'),
(10000999677, 'Rec_Keep_Dec14', 'Record Keeping', '', '2', 0, 0, 0, 1, '2001-12-14 00:00:00'),
(10000999678, 'Rec_Keep_Dec15', 'Record Keeping', '', '', 0, 0, 0, 1, '2003-12-15 00:00:00'),
(10000999679, 'Rec_Keep_Jan15', 'Record Keeping', '', '', 0, 0, 0, 1, '2012-01-15 00:00:00'),
(10000999680, 'Rec_Keep_May15', 'Record Keeping', '', '', 0, 0, 0, 1, '2018-05-14 23:00:00'),
(10000999681, 'Rec_Keep_Sep14', 'Record Keeping', '', '2', 0, 0, 0, 0, '2022-09-13 23:00:00'),
(10000999682, 'Rec_Keep_Sep15', 'Record Keeping', '', '', 0, 0, 0, 1, '2003-09-14 23:00:00'),
(10000999683, 'Study1_Sep14', 'Study Day 1', '', '', 0, 4, 0, 1, '2029-10-13 23:00:00'),
(10000999684, 'Study2_Sep14', 'Study Day 2', '', 'a:1:{i:0;s:11:\"10000950348\";}', 0, 10, 0, 0, '2009-09-13 23:00:00'),
(10000999685, 'Study3_Sep14', 'Study Day 3', '', '', 0, 13, 0, 1, '2030-10-13 23:00:00'),
(10000999686, 'Vena_Dec14', 'Venapuncture', '', '', 0, 0, 0, 1, '2015-12-14 00:00:00'),
(10000999687, 'Vena_Nov14', 'Venapuncture', '', '', 0, 0, 0, 1, '2011-11-14 00:00:00'),
(10000999688, 'Vena_Oct14', 'Venapuncture', '', '', 0, 0, 0, 1, '2016-10-13 23:00:00'),
(10000999689, 'Vena_Sep14', 'Venapuncture', '', '', 0, 0, 0, 0, '2011-09-13 23:00:00'),
(10000999690, 'Vene_Apr15', 'Venepuncture', '', '', 0, 0, 0, 1, '2023-04-14 23:00:00'),
(10000999691, 'Vene_Dec15', 'Venepuncture', '', '', 0, 0, 0, 1, '2018-12-15 00:00:00'),
(10000999692, 'Vene_Feb15', 'Venepuncture', '', '', 0, 0, 0, 1, '2009-02-15 00:00:00'),
(10000999693, 'Vene_Jan15', 'Venepuncture', '', '', 0, 0, 0, 1, '2016-01-15 00:00:00'),
(10000999694, 'Vene_Jul15', 'Venepuncture', '', '', 0, 0, 0, 1, '2017-07-14 23:00:00'),
(10000999695, 'Vene_Jun15', 'Venepuncture', '', '', 0, 0, 0, 1, '2016-06-14 23:00:00'),
(10000999696, 'Vene_Mar15', 'Venepuncture', '', '', 0, 0, 0, 1, '2016-03-15 00:00:00'),
(10000999697, 'Vene_May15', 'Venepuncture', '', '', 0, 0, 0, 1, '2013-05-14 23:00:00'),
(10000999698, 'Vene_Nov15', 'Venepuncture', '', '', 0, 0, 0, 1, '2019-11-15 00:00:00'),
(10000999699, 'Vene_Oct15', 'Venepuncture', '', '', 0, 0, 0, 1, '2016-10-14 23:00:00'),
(10000999700, 'Vene_Sep15', 'Venepuncture', '', '', 0, 0, 0, 1, '2017-09-14 23:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_designations`
--

CREATE TABLE `tbl_designations` (
  `ID` bigint(20) NOT NULL,
  `code` varchar(150) NOT NULL,
  `name` varchar(1024) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `tbl_locations` (
  `ID` bigint(20) NOT NULL,
  `location_code` varchar(50) DEFAULT NULL,
  `name` varchar(1024) DEFAULT NULL,
  `phone` varchar(64) DEFAULT NULL,
  `booking_contact` varchar(64) DEFAULT NULL,
  `booking_phone` varchar(64) DEFAULT NULL,
  `notes` text,
  `extras` text,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_locations`
--

INSERT INTO `tbl_locations` (`ID`, `location_code`, `name`, `phone`, `booking_contact`, `booking_phone`, `notes`, `extras`, `created_on`) VALUES
(1, 'A1_ED', 'A1 ED Centre', '', '', '', '', 'a:2:{i:0;s:6:\"chairs\";i:1;s:6:\"tables\";}', '0000-00-00 00:00:00'),
(2, 'A2_ED', 'A2 Ed Centre', '', '', '', '', 'a:2:{i:0;s:6:\"chairs\";i:1;s:6:\"tables\";}', '0000-00-00 00:00:00'),
(3, 'A3_ED', 'A3 Ed Centre', '', '', '', '', 'a:2:{i:0;s:6:\"chairs\";i:1;s:6:\"tables\";}', '0000-00-00 00:00:00'),
(4, 'A4_ED', 'A4 Ed Centre', '', '', '', '', 'a:2:{i:0;s:6:\"chairs\";i:1;s:6:\"tables\";}', '0000-00-00 00:00:00'),
(5, 'A5_ED', 'A5 Ed Centre', '', '', '', '', 'a:2:{i:0;s:6:\"chairs\";i:1;s:6:\"tables\";}', '0000-00-00 00:00:00'),
(6, 'A6_ED', 'A6 Ed Centre', '', '', '', '', 'a:2:{i:0;s:6:\"chairs\";i:1;s:6:\"tables\";}', '0000-00-00 00:00:00'),
(7, 'A7_ED', 'A7 Ed Centre', '', '', '', '', 'a:2:{i:0;s:6:\"chairs\";i:1;s:6:\"tables\";}', '0000-00-00 00:00:00'),
(8, 'A8_ED', 'A8 Ed Centre', '', '', '', '', 'a:2:{i:0;s:6:\"chairs\";i:1;s:6:\"tables\";}', '0000-00-00 00:00:00'),
(9, 'A9_ED', 'B1 Ed Centre', '', '', '', '', 'a:4:{i:0;s:6:\"chairs\";i:1;s:9:\"computers\";i:2;s:14:\"project_screen\";i:3;s:6:\"tables\";}', '0000-00-00 00:00:00'),
(10, 'AnesSeminar_RSCH', 'Anesthetic Seminar Room', '', '', '', '', 'a:4:{i:0;s:6:\"chairs\";i:1;s:9:\"computers\";i:2;s:14:\"project_screen\";i:3;s:6:\"tables\";}', '0000-00-00 00:00:00'),
(11, 'B2_Ed', 'B2 Ed Centre', '', '', '', '', 'a:6:{i:0;s:6:\"chairs\";i:1;s:9:\"computers\";i:2;s:9:\"clipboard\";i:3;s:16:\"laptop_connector\";i:4;s:14:\"project_screen\";i:5;s:6:\"tables\";}', '0000-00-00 00:00:00'),
(12, 'Canteen_RSCH', 'Canteen Level A', '', '', '', '', 'a:2:{i:0;s:6:\"chairs\";i:1;s:6:\"tables\";}', '0000-00-00 00:00:00'),
(13, 'LecTheatre_ED', 'Lecture Theatre', '', '', '', '', 'a:6:{i:0;s:6:\"chairs\";i:1;s:9:\"computers\";i:2;s:9:\"clipboard\";i:3;s:16:\"laptop_connector\";i:4;s:14:\"project_screen\";i:5;s:6:\"tables\";}', '0000-00-00 00:00:00'),
(14, 'Libary_ED', 'Library Ed Centre', '', '', '', '', 'a:2:{i:0;s:6:\"chairs\";i:1;s:6:\"tables\";}', '0000-00-00 00:00:00'),
(15, 'LibraryCourtyard_ED', 'Library Courtyard Ed Centre', '', '', '', '', 'a:2:{i:0;s:6:\"chairs\";i:1;s:6:\"tables\";}', '0000-00-00 00:00:00'),
(16, 'LibrarySeminar_ED', 'Library Seminar Room Ed Centre', '', '', '', '', 'a:4:{i:0;s:6:\"chairs\";i:1;s:9:\"computers\";i:2;s:6:\"tables\";i:3;s:22:\"interactive_whiteboard\";}', '0000-00-00 00:00:00'),
(17, 'LibraryTraining_ED', 'Library Training Room Ed Centre', '', '', '', '', 'a:4:{i:0;s:6:\"chairs\";i:1;s:9:\"computers\";i:2;s:14:\"project_screen\";i:3;s:6:\"tables\";}', '0000-00-00 00:00:00'),
(18, 'LittleMattuTrainingSuite_RSCH', 'Little Mattu', '', '', '', '', 'a:2:{i:0;s:6:\"chairs\";i:1;s:6:\"tables\";}', '0000-00-00 00:00:00'),
(19, 'ParentCraft_RSCH', 'Parent Craft Room OPD 1', '', '', '', '', 'a:0:{}', '0000-00-00 00:00:00'),
(20, 'TrainingSuite_1_RSCH', 'Training Suite 1', '', '', '', '', 'a:4:{i:0;s:6:\"chairs\";i:1;s:9:\"computers\";i:2;s:16:\"laptop_connector\";i:3;s:14:\"project_screen\";}', '0000-00-00 00:00:00'),
(21, 'TrainingSuite_2_RSCH', 'Training Suite 2', '', '', '', '', 'a:5:{i:0;s:6:\"chairs\";i:1;s:16:\"laptop_connector\";i:2;s:14:\"project_screen\";i:3;s:4:\"sink\";i:4;s:13:\"hospital_beds\";}', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notes`
--

CREATE TABLE `tbl_notes` (
  `ID` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `to` bigint(10) NOT NULL,
  `from` bigint(10) NOT NULL,
  `note` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notifications`
--

CREATE TABLE `tbl_notifications` (
  `ID` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `title` text NOT NULL,
  `notification` text NOT NULL,
  `read` int(1) NOT NULL DEFAULT '0',
  `hide` int(1) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_notifications`
--

INSERT INTO `tbl_notifications` (`ID`, `user_id`, `title`, `notification`, `read`, `hide`, `date`) VALUES
(1, 1, 'Users Capabilities updated', 'You have successfully updated users capabilities.', 1, 1, '2017-05-23 19:10:04'),
(2, 1, 'Account Details updated', 'You have successfully update your account details.', 1, 1, '2017-05-23 19:36:57'),
(3, 1, 'Account Details updated', 'You have successfully update your account details.', 1, 1, '2017-05-23 19:37:34'),
(4, 1, 'Password Changed', 'You have successfully changed your account password.', 1, 1, '2017-05-23 19:37:54'),
(5, 1, 'Password Changed', 'You have successfully changed your account password.', 1, 1, '2017-05-23 19:39:34'),
(6, 1, 'New Admin Account Created', 'You have successfully created a new admin account (Mazen Sehgal).', 0, 0, '2017-05-24 11:26:27'),
(7, 1, 'Account Password Reset', 'You have successfully changed (Mazen Sehgal) account password.', 0, 0, '2017-05-24 11:37:45'),
(8, 1, 'Account Details updated', 'You have successfully updated (Mazen Sehgal) account details.', 0, 0, '2017-05-24 11:37:45'),
(9, 1, 'Account Details updated', 'You have successfully updated (Mazen Sehgal) account details.', 0, 0, '2017-05-24 11:38:01'),
(10, 1, 'Account Details updated', 'You have successfully updated (Mazen Sehgal) account details.', 0, 0, '2017-05-24 11:38:05'),
(11, 1, 'Account Details updated', 'You have successfully updated (Mazen Sehgal) account details.', 0, 0, '2017-05-24 11:38:16'),
(12, 1, 'Account deleted', 'You have successfully deleted (Aarav Mehra) account.', 0, 0, '2017-05-24 12:16:04'),
(13, 1, 'Account deleted', 'You have successfully deleted (Mazen Sehgal) account.', 0, 0, '2017-05-24 12:17:26'),
(14, 1, 'Course deleted', 'You have successfully deleted (Hospital A) course.', 0, 0, '2017-05-24 13:20:16'),
(15, 1, 'New Account Created', 'You have successfully created a new account (Course Admin 1).', 0, 0, '2017-05-24 18:46:09'),
(16, 1, 'New course created', 'You have successfully created a new course (Test Course).', 0, 0, '2017-05-24 18:48:14'),
(17, 1, 'Course updated', 'You have successfully updated course (Test Course).', 0, 0, '2017-05-24 18:50:09'),
(18, 1, 'Course deleted', 'You have successfully deleted (Test Course) course.', 0, 0, '2017-05-24 19:02:48'),
(19, 1, 'General Setting updated', 'You have successfully updated website general settings.', 0, 0, '2017-05-24 19:03:32'),
(20, 1, 'New course created', 'You have successfully created a new course (Course One).', 0, 0, '2017-05-24 19:35:21'),
(21, 1, 'New course created', 'You have successfully created a new course (Course Two).', 0, 0, '2017-05-24 19:46:37'),
(22, 1, 'New course created', 'You have successfully created a new course (Course Three).', 0, 0, '2017-05-24 19:47:08'),
(23, 1, 'New course created', 'You have successfully created a new course (Course Four).', 0, 0, '2017-05-24 19:48:45'),
(24, 1, 'New course created', 'You have successfully created a new course (Course Five).', 0, 0, '2017-05-24 19:50:33'),
(25, 1, 'New course created', 'You have successfully created a new course (Course 7).', 0, 0, '2017-05-24 19:56:34'),
(26, 1, 'New course created', 'You have successfully created a new course (Course Eight).', 0, 0, '2017-05-24 19:57:22'),
(27, 1, 'Course updated', 'You have successfully updated course (Course Seven).', 0, 0, '2017-05-24 19:57:39'),
(28, 1, 'Course updated', 'You have successfully updated course (Course Two).', 0, 0, '2017-05-24 19:57:59'),
(29, 1, 'Course updated', 'You have successfully updated course (Course One).', 0, 0, '2017-05-24 19:58:06'),
(30, 1, 'Course updated', 'You have successfully updated course (Course Three).', 0, 0, '2017-05-24 19:58:13'),
(31, 1, 'New booking created', 'You have successfully created a new booking ().', 0, 0, '2017-05-24 20:06:15'),
(32, 1, 'New booking created', 'You have successfully created a new booking ().', 0, 0, '2017-05-24 20:06:37'),
(33, 1, 'New booking created', 'You have successfully created a new booking ().', 0, 0, '2017-05-24 20:08:11'),
(34, 1, 'New booking created', 'You have successfully created a new booking.', 0, 0, '2017-05-24 20:08:47'),
(35, 1, 'New booking created', 'You have successfully created a new booking.', 0, 0, '2017-05-24 20:08:57'),
(36, 1, 'Booking updated', 'You have successfully updated booking.', 0, 0, '2017-05-24 20:10:24'),
(37, 1, 'Booking updated', 'You have successfully updated booking.', 0, 0, '2017-05-24 20:10:32'),
(38, 1, 'New booking created', 'You have successfully created a new booking.', 0, 0, '2017-05-24 20:11:21'),
(39, 1, 'Booking updated', 'You have successfully updated booking.', 0, 0, '2017-05-24 20:11:47'),
(40, 1, 'New Account Created', 'You have successfully created a new account (Nurse One).', 0, 0, '2017-05-24 20:43:49'),
(41, 1, 'New Account Created', 'You have successfully created a new account (Nurse Two).', 0, 0, '2017-05-24 20:45:26'),
(42, 1, 'Booking deleted', 'You have successfully deleted () booking.', 0, 0, '2017-05-24 21:15:39'),
(43, 1, 'Booking deleted', 'You have successfully deleted booking.', 0, 0, '2017-05-24 21:16:29'),
(44, 1, 'Booking deleted', 'You have successfully deleted booking.', 0, 0, '2017-05-24 21:16:32'),
(45, 1, 'Booking deleted', 'You have successfully deleted booking.', 0, 0, '2017-05-24 21:16:34'),
(46, 1, 'Booking deleted', 'You have successfully deleted booking.', 0, 0, '2017-05-24 21:16:36'),
(47, 1, 'Booking deleted', 'You have successfully deleted booking.', 0, 0, '2017-05-24 21:16:38'),
(48, 1, 'Account Details updated', 'You have successfully updated (Nurse Two) account details.', 0, 0, '2017-05-24 21:38:20'),
(49, 1, 'Account Details updated', 'You have successfully updated (Nurse One) account details.', 0, 0, '2017-05-24 21:38:49'),
(50, 1, 'New booking created', 'You have successfully created a new booking.', 0, 0, '2017-05-24 21:39:19'),
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
(245, 1, 'Account Details updated', 'You have successfully updated (Victoria Wilding) account details.', 0, 0, '2017-06-22 10:20:27'),
(246, 1, 'Account Details updated', 'You have successfully updated (Venson Nuevas) account details.', 0, 0, '2017-06-22 10:21:57'),
(247, 1, 'Account Details updated', 'You have successfully updated (Vanessa Pasquier) account details.', 0, 0, '2017-06-22 10:22:51'),
(248, 1, 'Account Details updated', 'You have successfully updated (Susie Regan) account details.', 0, 0, '2017-06-22 10:23:26'),
(249, 1, 'Account Details updated', 'You have successfully updated (Sue Lore) account details.', 0, 0, '2017-06-22 10:24:00'),
(250, 1, 'Account Details updated', 'You have successfully updated (Simon Pawlin) account details.', 0, 0, '2017-06-22 10:24:53'),
(251, 1, 'Account Details updated', 'You have successfully updated (Sally Whitehouse) account details.', 0, 0, '2017-06-22 10:26:42'),
(252, 1, 'Account Details updated', 'You have successfully updated (Mary Raleigh) account details.', 0, 0, '2017-06-22 10:27:22'),
(253, 1, 'Account Details updated', 'You have successfully updated (Lisa Blazhevski) account details.', 0, 0, '2017-06-22 10:27:57'),
(254, 1, 'Account Details updated', 'You have successfully updated (Julie Bowler) account details.', 0, 0, '2017-06-22 10:28:39'),
(255, 1, 'Account Details updated', 'You have successfully updated (Julianne Rigby) account details.', 0, 0, '2017-06-22 10:29:19'),
(256, 1, 'Account Details updated', 'You have successfully updated (Judith Williamson) account details.', 0, 0, '2017-06-22 10:30:18'),
(257, 1, 'Account Details updated', 'You have successfully updated (Jean Ashfield) account details.', 0, 0, '2017-06-22 10:31:24'),
(258, 1, 'Account Details updated', 'You have successfully updated (Gill Haddock) account details.', 0, 0, '2017-06-22 10:32:06'),
(259, 1, 'Account Details updated', 'You have successfully updated (Deanna Hodge) account details.', 0, 0, '2017-06-22 10:32:54'),
(260, 1, 'Account Details updated', 'You have successfully updated (Caroline Eynon) account details.', 0, 0, '2017-06-22 10:34:24'),
(261, 1, 'Account Details updated', 'You have successfully updated (Caroline Covey) account details.', 0, 0, '2017-06-22 10:35:13'),
(262, 1, 'Account Details updated', 'You have successfully updated (Alison Oram) account details.', 0, 0, '2017-06-22 10:37:22'),
(263, 1, 'Account Details updated', 'You have successfully updated (Jean Ashfield) account details.', 0, 0, '2017-06-22 10:39:20'),
(264, 1, 'Course updated', 'You have successfully updated course (Link_Jan15).', 0, 0, '2017-06-22 10:55:49'),
(265, 1, 'Course updated', 'You have successfully updated course (BEACH_DEC14).', 0, 0, '2017-06-22 11:26:16'),
(266, 1, 'Course updated', 'You have successfully updated course (BEACH Course).', 0, 0, '2017-06-22 11:26:30'),
(267, 1, 'Course updated', 'You have successfully updated course (Mentor Sign-Off_1).', 0, 0, '2017-06-22 11:28:13'),
(268, 1, 'Course updated', 'You have successfully updated course (Study Day 2).', 0, 0, '2017-06-22 11:37:05'),
(269, 1, 'Users Capabilities updated', 'You have successfully updated users capabilities.', 0, 0, '2017-06-22 12:27:26'),
(270, 1, 'Account Details updated', 'You have successfully update your account details.', 0, 0, '2017-06-22 12:49:28'),
(271, 1, 'New Account Created', 'You have successfully created a new account (Te St).', 0, 0, '2017-06-22 13:03:26'),
(272, 1, 'Account deleted', 'You have successfully deleted (Te St) account.', 0, 0, '2017-06-22 13:06:18'),
(273, 1, 'Account Details updated', 'You have successfully updated (Victoria Wilding) account details.', 0, 0, '2017-06-22 13:32:31'),
(274, 1, 'Account Details updated', 'You have successfully updated (Victoria Wilding) account details.', 0, 0, '2017-06-22 13:32:47'),
(275, 1, 'New course created', 'You have successfully created a new course (test).', 0, 0, '2017-06-22 13:35:33'),
(276, 1, 'Course updated', 'You have successfully updated course (Study Day 2).', 0, 0, '2017-06-22 13:38:42'),
(277, 1, 'Course updated', 'You have successfully updated course (Study Day 2).', 0, 0, '2017-06-22 13:38:46'),
(278, 1, 'New location created', 'You have successfully created a new location (test).', 0, 0, '2017-06-22 13:41:41'),
(279, 1, 'Location updated', 'You have successfully updated location (test).', 0, 0, '2017-06-22 13:41:51'),
(280, 1, 'Location updated', 'You have successfully updated location (test).', 0, 0, '2017-06-22 13:41:54'),
(281, 1, 'Location deleted', 'You have successfully deleted (test) location.', 0, 0, '2017-06-22 13:42:03'),
(282, 1, 'Centre (None) is approved now', 'You have successfully approved (None) centre.', 0, 0, '2017-06-22 13:59:59'),
(283, 1, 'Centre (None) is disables now', 'You have successfully disabled (None) centre.', 0, 0, '2017-06-22 14:00:06'),
(284, 1, 'Course updated', 'You have successfully updated course (Adult Cohort).', 0, 0, '2017-06-26 09:18:20'),
(285, 1, 'Course_admin Account Disabled', 'You have successfully disbled (Victoria Wilding) account.', 0, 0, '2017-07-07 11:06:21'),
(286, 1, 'Course_admin Account Enabled', 'You have successfully enabled (Victoria Wilding) account.', 0, 0, '2017-07-07 11:06:22'),
(287, 1, 'New Account Created', 'You have successfully created a new account (James Leighs).', 0, 0, '2017-07-14 13:52:41'),
(288, 1, 'Users Capabilities updated', 'You have successfully updated users capabilities.', 0, 0, '2017-07-14 13:57:58');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_options`
--

CREATE TABLE `tbl_options` (
  `ID` bigint(20) NOT NULL,
  `option_name` text NOT NULL,
  `option_value` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
(12, 'users_capabilities', 's:1352:\"a:3:{s:5:\"admin\";a:18:{s:9:\"view_user\";i:0;s:8:\"add_user\";i:0;s:9:\"edit_user\";i:0;s:11:\"view_course\";i:0;s:10:\"add_course\";i:0;s:11:\"edit_course\";i:0;s:13:\"delete_course\";i:0;s:13:\"view_location\";i:0;s:12:\"add_location\";i:0;s:13:\"edit_location\";i:0;s:14:\"view_work_area\";i:0;s:13:\"add_work_area\";i:0;s:14:\"edit_work_area\";i:0;s:15:\"delete_location\";i:0;s:12:\"view_booking\";i:0;s:11:\"add_booking\";i:0;s:12:\"edit_booking\";i:0;s:14:\"delete_booking\";i:0;}s:12:\"course_admin\";a:18:{s:9:\"view_user\";i:1;s:8:\"add_user\";i:0;s:9:\"edit_user\";i:0;s:11:\"view_course\";i:1;s:10:\"add_course\";i:0;s:11:\"edit_course\";i:0;s:13:\"delete_course\";i:0;s:13:\"view_location\";i:1;s:12:\"add_location\";i:1;s:13:\"edit_location\";i:0;s:14:\"view_work_area\";i:1;s:13:\"add_work_area\";i:1;s:14:\"edit_work_area\";i:0;s:15:\"delete_location\";i:0;s:12:\"view_booking\";i:1;s:11:\"add_booking\";i:1;s:12:\"edit_booking\";i:1;s:14:\"delete_booking\";i:0;}s:5:\"nurse\";a:18:{s:9:\"view_user\";i:0;s:8:\"add_user\";i:0;s:9:\"edit_user\";i:0;s:11:\"view_course\";i:0;s:10:\"add_course\";i:0;s:11:\"edit_course\";i:0;s:13:\"delete_course\";i:0;s:13:\"view_location\";i:0;s:12:\"add_location\";i:0;s:13:\"edit_location\";i:0;s:14:\"view_work_area\";i:0;s:13:\"add_work_area\";i:0;s:14:\"edit_work_area\";i:0;s:15:\"delete_location\";i:0;s:12:\"view_booking\";i:0;s:11:\"add_booking\";i:0;s:12:\"edit_booking\";i:0;s:14:\"delete_booking\";i:0;}}\";');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usermeta`
--

CREATE TABLE `tbl_usermeta` (
  `ID` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `meta_key` text NOT NULL,
  `meta_value` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
(337, 10000340101, 'profile_img', ''),
(336, 10000340101, 'user_phone', '0123456789'),
(335, 10000340101, 'dob', '2017-07-01 12:00:00'),
(334, 10000340101, 'gender', 'Male'),
(340, 10000340101, 'beep', '999'),
(341, 10000340101, 'band', '6 ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
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
  `courses` text,
  `work_area_ID` bigint(15) DEFAULT NULL,
  `user_salt` varchar(250) DEFAULT NULL,
  `registered_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `currently_employed` int(11) DEFAULT NULL,
  `external_candidate` int(11) DEFAULT NULL,
  `rag_status` int(11) DEFAULT NULL,
  `extended_support` int(11) DEFAULT NULL,
  `support_since` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`ID`, `trainer_ID`, `user_email`, `user_pass`, `first_name`, `last_name`, `user_role`, `username`, `user_status`, `created_by`, `courses`, `work_area_ID`, `user_salt`, `registered_at`, `currently_employed`, `external_candidate`, `rag_status`, `extended_support`, `support_since`) VALUES
(10000950343, NULL, 'dhodge@nhs.net', 'fab2b43cce5966b03432607b71fde4b298ec2f79a4f5a76eb6eed0c339cb0ce6', 'Deanna', 'Hodge', 'course_admin', 'dhodge', 1, 1, '', NULL, '78cHgqMhLRJHz575WXy9uw==', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL),
(1, NULL, 'mazen.sehgal@nhs.net', 'fab2b43cce5966b03432607b71fde4b298ec2f79a4f5a76eb6eed0c339cb0ce6', 'Mazen', 'Sehgal', 'admin', 'admin', 1, 1, '', NULL, '78cHgqMhLRJHz575WXy9uw==', '2017-06-06 11:06:55', NULL, NULL, NULL, NULL, NULL),
(10000950341, NULL, 'caroline.eynon@nhs.net', 'fab2b43cce5966b03432607b71fde4b298ec2f79a4f5a76eb6eed0c339cb0ce6', 'Caroline', 'Eynon', 'course_admin', 'caroline.eynon', 1, 1, '', NULL, '78cHgqMhLRJHz575WXy9uw==', '0000-00-00 00:00:00', 0, 0, 0, 0, 0),
(10000950342, NULL, 'g.haddock@surrey.ac.uk', 'fab2b43cce5966b03432607b71fde4b298ec2f79a4f5a76eb6eed0c339cb0ce6', 'Gill', 'Haddock', 'course_admin', 'g.haddock', 1, 1, '', NULL, '78cHgqMhLRJHz575WXy9uw==', '0000-00-00 00:00:00', 0, 0, 0, 0, 0),
(10000950338, NULL, 'l.blazhevski@surrey.ac.uk', 'fab2b43cce5966b03432607b71fde4b298ec2f79a4f5a76eb6eed0c339cb0ce6', 'Lisa', 'Blazhevski', 'course_admin', 'l.blazhevski', 1, 1, '', NULL, '78cHgqMhLRJHz575WXy9uw==', '0000-00-00 00:00:00', 0, 0, 0, 0, 0),
(10000950339, NULL, 'jbowler1@nhs.net', 'fab2b43cce5966b03432607b71fde4b298ec2f79a4f5a76eb6eed0c339cb0ce6', 'Julie', 'Bowler', 'course_admin', 'jbowler1', 1, 1, '', NULL, '78cHgqMhLRJHz575WXy9uw==', '0000-00-00 00:00:00', 0, 0, 0, 0, 0),
(10000950340, NULL, 'carolinecovey@nhs.net', 'fab2b43cce5966b03432607b71fde4b298ec2f79a4f5a76eb6eed0c339cb0ce6', 'Caroline', 'Covey', 'course_admin', 'carolinecovey', 1, 1, '', NULL, '78cHgqMhLRJHz575WXy9uw==', '0000-00-00 00:00:00', 0, 0, 0, 0, 0),
(10000950337, NULL, 'jashfield@nhs.net', 'fab2b43cce5966b03432607b71fde4b298ec2f79a4f5a76eb6eed0c339cb0ce6', 'Jean', 'Ashfield', 'course_admin', 'jashfield', 1, 1, '', NULL, '78cHgqMhLRJHz575WXy9uw==', '2017-06-22 10:16:42', NULL, NULL, NULL, NULL, NULL),
(10000950344, NULL, 'susan.lore@nhs.net', 'fab2b43cce5966b03432607b71fde4b298ec2f79a4f5a76eb6eed0c339cb0ce6', 'Sue', 'Lore', 'course_admin', 'susan.lore', 1, 1, '', NULL, '78cHgqMhLRJHz575WXy9uw==', '0000-00-00 00:00:00', 0, 0, 0, 0, 0),
(10000950345, NULL, 'vnuevas@nhs.net', 'fab2b43cce5966b03432607b71fde4b298ec2f79a4f5a76eb6eed0c339cb0ce6', 'Venson', 'Nuevas', 'course_admin', 'vnuevas', 1, 1, '', NULL, '78cHgqMhLRJHz575WXy9uw==', '0000-00-00 00:00:00', 0, 0, 0, 0, 0),
(10000950346, NULL, 'a.oram@nhs.net', 'fab2b43cce5966b03432607b71fde4b298ec2f79a4f5a76eb6eed0c339cb0ce6', 'Alison', 'Oram', 'course_admin', 'a.oram', 1, 1, '', NULL, '78cHgqMhLRJHz575WXy9uw==', '0000-00-00 00:00:00', 0, 0, 0, 0, 0),
(10000950347, NULL, 'vanessa.pasquier@nhs.net', 'fab2b43cce5966b03432607b71fde4b298ec2f79a4f5a76eb6eed0c339cb0ce6', 'Vanessa', 'Pasquier', 'course_admin', 'vanessa.pasquier', 1, 1, '', NULL, '78cHgqMhLRJHz575WXy9uw==', '0000-00-00 00:00:00', 0, 0, 0, 0, 0),
(10000950348, NULL, 'simonpawlin@outlook.com', 'fab2b43cce5966b03432607b71fde4b298ec2f79a4f5a76eb6eed0c339cb0ce6', 'Simon', 'Pawlin', 'course_admin', 'simonpawlin', 1, 1, '', NULL, '78cHgqMhLRJHz575WXy9uw==', '0000-00-00 00:00:00', 0, 0, 0, 0, 0),
(10000950349, NULL, 'r.raleigh@surrey.ac.uk', 'fab2b43cce5966b03432607b71fde4b298ec2f79a4f5a76eb6eed0c339cb0ce6', 'Mary', 'Raleigh', 'course_admin', 'r.raleigh', 1, 1, '', NULL, '78cHgqMhLRJHz575WXy9uw==', '0000-00-00 00:00:00', 0, 0, 0, 0, 0),
(10000950350, NULL, 'susieregan@nhs.net', 'fab2b43cce5966b03432607b71fde4b298ec2f79a4f5a76eb6eed0c339cb0ce6', 'Susie', 'Regan', 'course_admin', 'susieregan', 1, 1, '', NULL, '78cHgqMhLRJHz575WXy9uw==', '0000-00-00 00:00:00', 0, 0, 0, 0, 0),
(10000950351, NULL, 'juliannerigby@nhs.nes', 'fab2b43cce5966b03432607b71fde4b298ec2f79a4f5a76eb6eed0c339cb0ce6', 'Julianne', 'Rigby', 'course_admin', 'juliannerigby', 1, 1, '', NULL, '78cHgqMhLRJHz575WXy9uw==', '0000-00-00 00:00:00', 0, 0, 0, 0, 0),
(10000950352, NULL, 'sallywhitehouse@nhs.net', 'fab2b43cce5966b03432607b71fde4b298ec2f79a4f5a76eb6eed0c339cb0ce6', 'Sally', 'Whitehouse', 'course_admin', 'sallywhitehouse', 1, 1, '', NULL, '78cHgqMhLRJHz575WXy9uw==', '0000-00-00 00:00:00', 0, 0, 0, 0, 0),
(10000950353, NULL, 'v.wilding@nhs.net', 'fab2b43cce5966b03432607b71fde4b298ec2f79a4f5a76eb6eed0c339cb0ce6', 'Victoria', 'Wilding', 'course_admin', 'v.wilding', 1, 1, '', 0, '78cHgqMhLRJHz575WXy9uw==', '0000-00-00 00:00:00', 0, 0, 0, 0, 0),
(10000950354, NULL, 'judithwilliamson@nhs.net', 'fab2b43cce5966b03432607b71fde4b298ec2f79a4f5a76eb6eed0c339cb0ce6', 'Judith', 'Williamson', 'course_admin', 'judithwilliamson', 1, 1, '', NULL, '78cHgqMhLRJHz575WXy9uw==', '0000-00-00 00:00:00', 0, 0, 0, 0, 0),
(10000340101, '', 'j@leeno.com', 'b3bcbfdad52d9dca7de6f232a9e8275dfb63ce72d462e5b742a61ab5f2dae871', 'James', 'Leighs', 'nurse', 'jleighs', 1, 1, 'a:1:{i:0;s:11:\"10000999600\";}', NULL, 'SDKFEzYt62K+TdnJKZkOQg==', '2017-07-14 13:52:41', 1, 123456, 1, 1, 2010);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_info`
--

CREATE TABLE `tbl_user_info` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_work_area`
--

CREATE TABLE `tbl_work_area` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `tbl_bookings`
--
ALTER TABLE `tbl_bookings`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_cohort_ext`
--
ALTER TABLE `tbl_cohort_ext`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;
--
-- AUTO_INCREMENT for table `tbl_courses`
--
ALTER TABLE `tbl_courses`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000999701;
--
-- AUTO_INCREMENT for table `tbl_designations`
--
ALTER TABLE `tbl_designations`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000641647;
--
-- AUTO_INCREMENT for table `tbl_locations`
--
ALTER TABLE `tbl_locations`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tbl_notes`
--
ALTER TABLE `tbl_notes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_notifications`
--
ALTER TABLE `tbl_notifications`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=289;
--
-- AUTO_INCREMENT for table `tbl_options`
--
ALTER TABLE `tbl_options`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_usermeta`
--
ALTER TABLE `tbl_usermeta`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=342;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000950355;
--
-- AUTO_INCREMENT for table `tbl_user_info`
--
ALTER TABLE `tbl_user_info`
  MODIFY `ID` bigint(110) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_work_area`
--
ALTER TABLE `tbl_work_area`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
