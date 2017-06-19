-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 19, 2017 at 05:48 PM
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
(34, 10000242679, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/602.3.12 (KHTML, like Gecko) Version/10.0.2 Safari/602.3.12', '2017-06-19 09:17:09');

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

--
-- Dumping data for table `tbl_bookings`
--

INSERT INTO `tbl_bookings` (`ID`, `course`, `booking_date`, `nurses`, `enroll`, `created_by`, `created_on`) VALUES
(10000261578, 10000434969, '2017-06-08', 'a:1:{i:0;s:11:\"10000850547\";}', 'a:1:{i:10000850547;i:0;}', 10000242679, '2017-06-08 12:01:08');

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
(2147483647, 'Adult Cohort', 'adult', '2011-09-01', 1, 6, 1),
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
(120, 10000771328, '2017-08-02', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courses`
--

CREATE TABLE `tbl_courses` (
  `ID` bigint(20) NOT NULL,
  `name` varchar(1024) NOT NULL,
  `description` text NOT NULL,
  `admins` text NOT NULL,
  `duration` int(11) NOT NULL,
  `location` bigint(20) NOT NULL,
  `retrain_date` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_courses`
--

INSERT INTO `tbl_courses` (`ID`, `name`, `description`, `admins`, `duration`, `location`, `retrain_date`, `created_on`) VALUES
(10000434969, 'STP Course', 'A course', 'a:1:{i:0;s:11:\"10000318028\";}', 1, 10000243359, 6, '2017-06-08 08:49:13');

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
  `name` varchar(1024) NOT NULL,
  `phone` varchar(64) NOT NULL,
  `booking_contact` varchar(64) NOT NULL,
  `booking_phone` varchar(64) NOT NULL,
  `notes` text NOT NULL,
  `extras` text NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_locations`
--

INSERT INTO `tbl_locations` (`ID`, `name`, `phone`, `booking_contact`, `booking_phone`, `notes`, `extras`, `created_on`) VALUES
(10000243359, 'Imaging Lab', '02081231234', '02081231234', '02081231234', 'Just a room', 'a:0:{}', '2017-06-08 08:48:50');

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

--
-- Dumping data for table `tbl_notes`
--

INSERT INTO `tbl_notes` (`ID`, `date`, `to`, `from`, `note`) VALUES
(1, '2017-06-13 13:47:42', 10000850547, 10000242679, 'test'),
(2, '2017-06-13 13:47:52', 10000850547, 10000242679, 'comment 2');

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
(216, 10000242679, 'Account Information', 'You have successfully updated preceptor progress', 0, 0, '2017-06-19 15:31:17');

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
(2, 'site_name', 'Course Management'),
(3, 'site_url', 'http://localhost/mexa'),
(4, 'admin_email', 'info@coursemanagement.com'),
(5, 'website_contact_email', ''),
(6, 'website_contact_phone', ''),
(7, 'website_domain', ''),
(8, 'site_description', 'Course management Description Goes here...'),
(9, 'site_contact_email', 'info@coursemanagement.com'),
(10, 'site_contact_phone', '07784256012'),
(11, 'site_domain', 'coursemanagement.com'),
(12, 'users_capabilities', 's:1352:\"a:3:{s:5:\"admin\";a:18:{s:9:\"view_user\";i:0;s:8:\"add_user\";i:0;s:9:\"edit_user\";i:0;s:11:\"view_course\";i:0;s:10:\"add_course\";i:0;s:11:\"edit_course\";i:0;s:13:\"delete_course\";i:0;s:13:\"view_location\";i:0;s:12:\"add_location\";i:0;s:13:\"edit_location\";i:0;s:14:\"view_work_area\";i:0;s:13:\"add_work_area\";i:0;s:14:\"edit_work_area\";i:0;s:15:\"delete_location\";i:0;s:12:\"view_booking\";i:0;s:11:\"add_booking\";i:0;s:12:\"edit_booking\";i:0;s:14:\"delete_booking\";i:0;}s:12:\"course_admin\";a:18:{s:9:\"view_user\";i:0;s:8:\"add_user\";i:0;s:9:\"edit_user\";i:0;s:11:\"view_course\";i:0;s:10:\"add_course\";i:0;s:11:\"edit_course\";i:0;s:13:\"delete_course\";i:0;s:13:\"view_location\";i:0;s:12:\"add_location\";i:0;s:13:\"edit_location\";i:0;s:14:\"view_work_area\";i:0;s:13:\"add_work_area\";i:0;s:14:\"edit_work_area\";i:0;s:15:\"delete_location\";i:0;s:12:\"view_booking\";i:0;s:11:\"add_booking\";i:0;s:12:\"edit_booking\";i:0;s:14:\"delete_booking\";i:0;}s:5:\"nurse\";a:18:{s:9:\"view_user\";i:0;s:8:\"add_user\";i:0;s:9:\"edit_user\";i:0;s:11:\"view_course\";i:0;s:10:\"add_course\";i:0;s:11:\"edit_course\";i:0;s:13:\"delete_course\";i:0;s:13:\"view_location\";i:0;s:12:\"add_location\";i:0;s:13:\"edit_location\";i:0;s:14:\"view_work_area\";i:0;s:13:\"add_work_area\";i:0;s:14:\"edit_work_area\";i:0;s:15:\"delete_location\";i:0;s:12:\"view_booking\";i:0;s:11:\"add_booking\";i:0;s:12:\"edit_booking\";i:0;s:14:\"delete_booking\";i:0;}}\";');

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
(12, 1, 'profile_img', '/content//uploads/profile_images/2017/05/profile-img-1495568252.png'),
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
(181, 10000632840, 'band', '5');

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

INSERT INTO `tbl_users` (`ID`, `trainer_ID`, `user_email`, `user_pass`, `first_name`, `last_name`, `user_role`, `username`, `user_status`, `created_by`, `courses`, `user_salt`, `registered_at`, `currently_employed`, `external_candidate`, `rag_status`, `extended_support`, `support_since`) VALUES
(10000242679, '', 'admin@admin.com', 'fab2b43cce5966b03432607b71fde4b298ec2f79a4f5a76eb6eed0c339cb0ce6', 'Mazen', 'Sehgal', 'admin', 'admin', 1, 1, '', '78cHgqMhLRJHz575WXy9uw==', '2016-06-14 09:35:48', NULL, NULL, NULL, NULL, NULL),
(10000318028, 'Sehgal_M_001', 'mazen.sehgal@nhs.net', 'fab2b43cce5966b03432607b71fde4b298ec2f79a4f5a76eb6eed0c339cb0ce6', 'Mazen', 'Sehgal', 'trainer', 'bob', 1, 10000242679, '', '78cHgqMhLRJHz575WXy9uw==', '2017-06-06 11:06:55', NULL, NULL, NULL, NULL, NULL),
(10000850547, NULL, 'bbb@b.com', 'fab2b43cce5966b03432607b71fde4b298ec2f79a4f5a76eb6eed0c339cb0ce6', 'bbb', 'bbb', 'nurse', 'bbb', 1, 10000242679, 'a:1:{i:0;s:11:\"10000434969\";}', '78cHgqMhLRJHz575WXy9uw==', '2017-06-06 16:09:08', 0, 1234521, 1, 0, 2014),
(10000815792, 'er_q_001', 'qw@qw.com', '8367f51608302dbac9ed4b01e04447891a9918e98497cd1769b29984529c026e', 'qw', 'er', 'course_admin', 'qwerty', 1, 10000242679, '', '7wSfrZC5jWUGmTfsQC8zZg==', '2017-06-19 09:43:15', NULL, NULL, NULL, NULL, NULL),
(10000632840, '', 'te@st.com', '04596e5c382ef619212ae64fd6d9bcdd02a748ae41e9a12d1d38eb8861adfbcc', 'te', 'st', 'nurse', 'test', 1, 10000242679, 'a:1:{i:0;s:11:\"10000434969\";}', 'g+rvL8GmmYgONY3O8rAr3w==', '2017-06-19 09:49:50', 0, 432134, 2, 0, 2014);

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

--
-- Dumping data for table `tbl_user_info`
--

INSERT INTO `tbl_user_info` (`ID`, `user_ID`, `prec_intro`, `current_prec`, `pin`, `delay`, `prec_name`, `int_nurse`, `WTE`, `p_email`, `p_country`, `sign_off`, `awards`, `link`, `prec_trainer`, `prec_notes`, `hca_start`, `hca_manager`, `hca_email`, `hca_new_care`, `hca_current_client`, `hca_fundamental_care`, `hca_care`, `hca_trainer`, `hca_notes`, `fd_start`, `fd_graduate`, `fd_inturrupt`, `fd_sd1`, `fd_sd2`, `fd_sd3`, `fd_other`, `fd_current`, `fd_trainer`, `fd_notes`, `mentor_current`, `mentor_renew`, `mentor_sign_off`, `mentor_notes`, `stud_cohort`, `stud_cohort_date`, `stud_d1`, `stud_d2`, `stud_d3`, `stud_notes`) VALUES
(10000250561, 10000850547, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-12', '2017-06-23', 1, 1, 1, 0, 'test', 0, 10000318028, 'test', NULL, NULL, NULL, NULL, 2147483647, 106, NULL, NULL, NULL, 'test'),
(10000270432, 10000632840, '2017-06-01', 1, 0, 1, 'Bob', 1, '2161', 'bob@bob.com', 'China', 12, 'BSc Computer Science', 'none', 10000318028, 'qwerty', '2017-06-05', 'Mark', 'm@h.com', 1, 0, 1, 1, 10000318028, 'test', '2017-06-05', '2017-06-06', 1, 1, 1, 0, 'University exam', 0, 10000318028, 'test', 1, '2017-06-20', 0, 'test', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_work_area`
--

CREATE TABLE `tbl_work_area` (
  `ID` bigint(20) NOT NULL,
  `code` varchar(150) NOT NULL,
  `name` varchar(150) NOT NULL,
  `phone1` int(15) NOT NULL,
  `phone2` int(15) NOT NULL,
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
(10000896909, 'bobby_001', 'bobby', 123, 456, 789, 'Mazen', 'Sehgal', 'm@s.com', '2017-06-06 13:08:26');

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
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `tbl_bookings`
--
ALTER TABLE `tbl_bookings`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000261579;
--
-- AUTO_INCREMENT for table `tbl_cohort_ext`
--
ALTER TABLE `tbl_cohort_ext`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
--
-- AUTO_INCREMENT for table `tbl_courses`
--
ALTER TABLE `tbl_courses`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000999590;
--
-- AUTO_INCREMENT for table `tbl_designations`
--
ALTER TABLE `tbl_designations`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000641647;
--
-- AUTO_INCREMENT for table `tbl_locations`
--
ALTER TABLE `tbl_locations`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000243360;
--
-- AUTO_INCREMENT for table `tbl_notes`
--
ALTER TABLE `tbl_notes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_notifications`
--
ALTER TABLE `tbl_notifications`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;
--
-- AUTO_INCREMENT for table `tbl_options`
--
ALTER TABLE `tbl_options`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_usermeta`
--
ALTER TABLE `tbl_usermeta`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000950337;
--
-- AUTO_INCREMENT for table `tbl_user_info`
--
ALTER TABLE `tbl_user_info`
  MODIFY `ID` bigint(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000431947;
--
-- AUTO_INCREMENT for table `tbl_work_area`
--
ALTER TABLE `tbl_work_area`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000896910;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
