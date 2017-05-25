-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2017 at 01:12 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `course-management`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_access_log`
--

CREATE TABLE IF NOT EXISTS `tbl_access_log` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `ip_address` text COLLATE utf8_unicode_ci NOT NULL,
  `device` text COLLATE utf8_unicode_ci NOT NULL,
  `user_agent` text COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

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
(11, 10000242679, '::1', 'Desktop/Laptop', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36', '2017-05-25 11:12:28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bookings`
--

CREATE TABLE IF NOT EXISTS `tbl_bookings` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `course` bigint(20) NOT NULL,
  `booking_date` varchar(50) NOT NULL,
  `nurses` text NOT NULL,
  `enroll` text NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10000755184 ;

--
-- Dumping data for table `tbl_bookings`
--

INSERT INTO `tbl_bookings` (`ID`, `course`, `booking_date`, `nurses`, `enroll`, `created_by`, `created_on`) VALUES
(10000075067, 10000548890, '2017-05-24', 'a:1:{i:0;s:11:"10000242676";}', 'a:1:{s:11:"10000242676";i:1;}', 0, '2017-05-24 21:39:19'),
(10000076469, 10000548890, '2017-05-31', 'a:1:{i:0;s:11:"10000950333";}', 'a:1:{s:11:"10000950333";i:0;}', 10000924747, '2017-05-25 11:08:29'),
(10000655262, 10000999589, '2017-05-25', 'a:2:{i:0;s:11:"10000242676";i:1;s:11:"10000950333";}', 'a:2:{s:11:"10000242676";i:1;s:11:"10000950333";i:0;}', 0, '2017-05-25 10:24:41'),
(10000755183, 10000999589, '2017-05-24', 'a:2:{i:0;s:11:"10000242676";i:1;s:11:"10000950333";}', 'a:2:{s:11:"10000242676";i:1;s:11:"10000950333";i:1;}', 0, '2017-05-25 10:24:49');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courses`
--

CREATE TABLE IF NOT EXISTS `tbl_courses` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(1024) NOT NULL,
  `description` text NOT NULL,
  `admins` text NOT NULL,
  `duration` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10000999590 ;

--
-- Dumping data for table `tbl_courses`
--

INSERT INTO `tbl_courses` (`ID`, `name`, `description`, `admins`, `duration`, `created_on`) VALUES
(10000548890, 'Course One', 'This is 1st Test Course', 'a:1:{i:0;s:11:"10000924747";}', 10, '2017-05-24 19:35:21'),
(10000999589, 'Course Two', 'This is 2nd test course', 'a:1:{i:0;s:11:"10000924747";}', 5, '2017-05-24 19:46:37'),
(10000688693, 'Course Three', 'This is 3rd test Course', 'a:1:{i:0;s:11:"10000924747";}', 8, '2017-05-24 19:47:08'),
(10000350748, 'Course Four', 'This is 4th test Course', 'a:1:{i:0;s:11:"10000924747";}', 8, '2017-05-24 19:48:45'),
(10000995304, 'Course Five', 'This is 5th Test Course', 'a:1:{i:0;s:11:"10000924747";}', 7, '2017-05-24 19:50:33'),
(10000501787, 'Course Seven', 'This is 7th Test Course', 'a:1:{i:0;s:11:"10000924747";}', 5, '2017-05-24 19:56:34'),
(10000936032, 'Course Eight', 'This is 8th Test Course', 'a:1:{i:0;s:11:"10000924747";}', 6, '2017-05-24 19:57:22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notifications`
--

CREATE TABLE IF NOT EXISTS `tbl_notifications` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `title` text NOT NULL,
  `notification` text NOT NULL,
  `read` int(1) NOT NULL DEFAULT '0',
  `hide` int(1) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- Dumping data for table `tbl_notifications`
--

INSERT INTO `tbl_notifications` (`ID`, `user_id`, `title`, `notification`, `read`, `hide`, `date`) VALUES
(1, 1, 'Users Capabilities updated', 'You have successfully updated users capabilities.', 1, 1, '2017-05-23 19:10:04'),
(2, 1, 'Account Details updated', 'You have successfully update your account details.', 1, 1, '2017-05-23 19:36:57'),
(3, 1, 'Account Details updated', 'You have successfully update your account details.', 1, 1, '2017-05-23 19:37:34'),
(4, 1, 'Password Changed', 'You have successfully changed your account password.', 1, 1, '2017-05-23 19:37:54'),
(5, 1, 'Password Changed', 'You have successfully changed your account password.', 1, 1, '2017-05-23 19:39:34'),
(6, 1, 'New Admin Account Created', 'You have successfully created a new admin account (Vijay Hardaha).', 0, 0, '2017-05-24 11:26:27'),
(7, 1, 'Account Password Reset', 'You have successfully changed (Vijayx Hardahax) account password.', 0, 0, '2017-05-24 11:37:45'),
(8, 1, 'Account Details updated', 'You have successfully updated (Vijayx Hardahax) account details.', 0, 0, '2017-05-24 11:37:45'),
(9, 1, 'Account Details updated', 'You have successfully updated (Vijayx Hardahax) account details.', 0, 0, '2017-05-24 11:38:01'),
(10, 1, 'Account Details updated', 'You have successfully updated (Vijayx Hardahax) account details.', 0, 0, '2017-05-24 11:38:05'),
(11, 1, 'Account Details updated', 'You have successfully updated (Vijay Hardaha) account details.', 0, 0, '2017-05-24 11:38:16'),
(12, 1, 'Account deleted', 'You have successfully deleted (Aarav Mehra) account.', 0, 0, '2017-05-24 12:16:04'),
(13, 1, 'Account deleted', 'You have successfully deleted (Vijay Hardaha) account.', 0, 0, '2017-05-24 12:17:26'),
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
(54, 10000242679, 'Account Details updated', 'You have successfully updated (Vijayx Hardaha) account details.', 0, 0, '2017-05-24 23:06:25'),
(55, 10000242679, 'Account Details updated', 'You have successfully updated (Vijay Hardaha) account details.', 0, 0, '2017-05-24 23:06:28'),
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
(66, 10000924747, 'New booking created', 'You have successfully created a new booking.', 0, 0, '2017-05-25 11:08:29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_options`
--

CREATE TABLE IF NOT EXISTS `tbl_options` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `option_name` text NOT NULL,
  `option_value` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

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
(12, 'users_capabilities', 's:818:"a:3:{s:5:"admin";a:11:{s:9:"view_user";i:0;s:8:"add_user";i:0;s:9:"edit_user";i:0;s:11:"view_course";i:0;s:10:"add_course";i:0;s:11:"edit_course";i:0;s:13:"delete_course";i:0;s:12:"view_booking";i:0;s:11:"add_booking";i:0;s:12:"edit_booking";i:0;s:14:"delete_booking";i:0;}s:12:"course_admin";a:11:{s:9:"view_user";i:0;s:8:"add_user";i:0;s:9:"edit_user";i:0;s:11:"view_course";i:0;s:10:"add_course";i:0;s:11:"edit_course";i:0;s:13:"delete_course";i:0;s:12:"view_booking";i:1;s:11:"add_booking";i:1;s:12:"edit_booking";i:1;s:14:"delete_booking";i:1;}s:5:"nurse";a:11:{s:9:"view_user";i:0;s:8:"add_user";i:0;s:9:"edit_user";i:0;s:11:"view_course";i:0;s:10:"add_course";i:0;s:11:"edit_course";i:0;s:13:"delete_course";i:0;s:12:"view_booking";i:0;s:11:"add_booking";i:0;s:12:"edit_booking";i:0;s:14:"delete_booking";i:0;}}";');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usermeta`
--

CREATE TABLE IF NOT EXISTS `tbl_usermeta` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `meta_key` text NOT NULL,
  `meta_value` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

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
(37, 10000274119, 'profile_img', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(512) NOT NULL,
  `user_pass` varchar(512) NOT NULL,
  `first_name` varchar(256) NOT NULL,
  `last_name` varchar(256) NOT NULL,
  `user_role` varchar(256) NOT NULL,
  `user_status` int(11) NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `courses` text NOT NULL,
  `registered_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10000950334 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`ID`, `user_email`, `user_pass`, `first_name`, `last_name`, `user_role`, `user_status`, `created_by`, `courses`, `registered_at`) VALUES
(10000242679, 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 'Vijay', 'Hardaha', 'admin', 1, 1, '', '2016-06-14 09:35:48'),
(10000242676, 'nurse1@test.com', 'af7f628e2450d8cfc193878ae105851d', 'Nurse', 'One', 'nurse', 1, 1, 'a:7:{i:0;s:11:"10000548890";i:1;s:11:"10000999589";i:2;s:11:"10000688693";i:3;s:11:"10000350748";i:4;s:11:"10000995304";i:5;s:11:"10000501787";i:6;s:11:"10000936032";}', '2017-05-24 20:43:49'),
(10000924747, 'courseadmin1@test.com', 'cc03e747a6afbbcbf8be7668acfebee5', 'Course', 'Admin 1', 'course_admin', 1, 1, '', '2017-05-24 18:46:09'),
(10000950333, 'nurse2@test.com', 'cc03e747a6afbbcbf8be7668acfebee5', 'Nurse', 'Two', 'nurse', 1, 1, 'a:4:{i:0;s:11:"10000548890";i:1;s:11:"10000999589";i:2;s:11:"10000688693";i:3;s:11:"10000350748";}', '2017-05-24 20:45:26'),
(10000274119, 'nurse3@test.com', 'fbd7fe9ba2d08a27d88862de4056f415', 'Nurse', 'Three', 'nurse', 1, 10000242679, '', '2017-05-24 23:06:54');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
