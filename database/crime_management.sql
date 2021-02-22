-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 05, 2019 at 06:55 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crime_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `accused_info`
--

CREATE TABLE IF NOT EXISTS `accused_info` (
  `fid` varchar(100) NOT NULL,
  `a_id` varchar(100) NOT NULL,
  `a_name` varchar(200) NOT NULL,
  `a_address` varchar(400) NOT NULL,
  `cs_id` varchar(100) NOT NULL,
  `ipc` varchar(200) NOT NULL,
  UNIQUE KEY `fid` (`fid`,`a_id`,`cs_id`),
  UNIQUE KEY `ipc` (`ipc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accused_info`
--

INSERT INTO `accused_info` (`fid`, `a_id`, `a_name`, `a_address`, `cs_id`, `ipc`) VALUES
('a131', '64313', 'Nabin Bora', 'Nabin Nagar , Near Barua Strore', '7477', '231/03');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `uname` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  UNIQUE KEY `uname` (`uname`,`pass`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`uname`, `pass`) VALUES
('admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `case_admin_confirm`
--

CREATE TABLE IF NOT EXISTS `case_admin_confirm` (
  `fid` varchar(40) NOT NULL,
  `vid` varchar(40) NOT NULL,
  `ioid` varchar(80) NOT NULL,
  `a_id` varchar(80) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `i_date` date NOT NULL,
  `f_date` date NOT NULL,
  `f_time` time NOT NULL,
  `c_details` varchar(500) NOT NULL,
  UNIQUE KEY `fid` (`fid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `case_admin_confirm`
--

INSERT INTO `case_admin_confirm` (`fid`, `vid`, `ioid`, `a_id`, `subject`, `i_date`, `f_date`, `f_time`, `c_details`) VALUES
('a131', 'v5313', 'j2314', '7653', 'FIR for Hit and run ', '2019-04-03', '2019-04-03', '23:00:00', ' \n		        		When i was coming from adabari to maligaon at above mentioned time a car hit me , who was coming in wrong direction also. The car registration number i noted as -  AS-07-h3113.		        	'),
('ar23', 'z7653', 'j2314', 'k888', 'FIR for stolen Motorbike', '2019-05-07', '2019-05-08', '10:00:00', ' \n		        		My bike has been stolen from latasil bazajr from yesterday.		        	'),
('as431', 'n752', 'r4612', 'trilok', 'FIR for attempt to murder', '2019-04-07', '2019-04-07', '04:56:00', ' \n		        		i man trying to kill me but he failed as i ran from the spot.		        	');

-- --------------------------------------------------------

--
-- Table structure for table `case_diary`
--

CREATE TABLE IF NOT EXISTS `case_diary` (
  `ps_name` varchar(200) NOT NULL,
  `fid` varchar(100) NOT NULL,
  `ioid` varchar(100) NOT NULL,
  `io_name` text NOT NULL,
  `cd_submit_date` date NOT NULL,
  `v_location` varchar(200) NOT NULL,
  `ipc` varchar(200) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `i_date` date NOT NULL,
  `i_time` time NOT NULL,
  `f_date` date NOT NULL,
  `f_time` time NOT NULL,
  `c_details` varchar(500) NOT NULL,
  `vid` varchar(100) NOT NULL,
  `v_name` text NOT NULL,
  `v_statement` varchar(500) NOT NULL,
  `w_name` text NOT NULL,
  `w_address` varchar(200) NOT NULL,
  `w_statement` varchar(500) NOT NULL,
  `a_id` varchar(100) NOT NULL,
  `a_name` text NOT NULL,
  `a_statement` varchar(500) NOT NULL,
  `io_statement` varchar(500) NOT NULL,
  `case_status` varchar(500) NOT NULL,
  UNIQUE KEY `fid` (`fid`,`ioid`),
  UNIQUE KEY `vid` (`vid`),
  UNIQUE KEY `a_id` (`a_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `case_diary`
--

INSERT INTO `case_diary` (`ps_name`, `fid`, `ioid`, `io_name`, `cd_submit_date`, `v_location`, `ipc`, `subject`, `i_date`, `i_time`, `f_date`, `f_time`, `c_details`, `vid`, `v_name`, `v_statement`, `w_name`, `w_address`, `w_statement`, `a_id`, `a_name`, `a_statement`, `io_statement`, `case_status`) VALUES
('Maligaon', 'a131', 'j2314', 'hiru nath', '0000-00-00', 'maligaon', '231/03', 'FIR for Hit and run ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'When i was coming from adabari to maligaon at above mentioned time a car hit me , who was coming in wrong direction also. The car registration number i noted as -  AS-07-h3113.', 'v5313', 'Prabin Nath', '', 'Hari Nath', 'PO & PS Bharalumukh', '', '', 'Nabin Bora', '', '', ''),
('Latasil', 'ar23', 'j2314', '', '2019-05-16', 'Latasil Bazar', '122/421', 'FIR for stolen Motorbike', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'My bike has been stolen from latasil bazajr from yesterday.', 'z7653', 'Raju Saikia', 'Victim says about the case. ', '', '', 'No Witness.', '7883', 'Kamran Akmal', 'Suspected person says.', '', 'After 4 days of investigation the stolen motobike was found in Ambari .Information was given by Suspect Kamran Akmal .');

-- --------------------------------------------------------

--
-- Table structure for table `create_subadmin`
--

CREATE TABLE IF NOT EXISTS `create_subadmin` (
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `ioid` varchar(30) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `cpass` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `age` int(20) NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `zcode` bigint(40) NOT NULL,
  `phoneno` bigint(40) NOT NULL,
  `gender` char(1) NOT NULL,
  PRIMARY KEY (`uname`),
  UNIQUE KEY `uname` (`uname`,`pass`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_subadmin`
--

INSERT INTO `create_subadmin` (`first_name`, `last_name`, `ioid`, `uname`, `pass`, `cpass`, `email`, `age`, `city`, `state`, `zcode`, `phoneno`, `gender`) VALUES
('Julia', 'Sen', 'j2314', 'julia2', '1234', '1234', 'julia2@gmail.com', 28, 'Guwahati', 'Assam', 781011, 7964321678, 'f'),
('Hari', 'Sankar', 'r4612', 'ravisankar4', '321', '321', 'ravi4@gmail.com', 35, 'Guwahati', 'Assam', 782061, 9614326894, 'm');

-- --------------------------------------------------------

--
-- Table structure for table `fir`
--

CREATE TABLE IF NOT EXISTS `fir` (
  `ward_no` int(40) NOT NULL,
  `ps_name` text NOT NULL,
  `fid` varchar(40) NOT NULL,
  `vid` varchar(40) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `i_date` date NOT NULL,
  `i_time` time NOT NULL,
  `i_place` varchar(50) NOT NULL,
  `a_name` text NOT NULL,
  `w_name` text NOT NULL,
  `w_address` varchar(500) NOT NULL,
  `f_date` date NOT NULL,
  `f_time` time NOT NULL,
  `c_details` varchar(500) NOT NULL,
  `f_name` text NOT NULL,
  `l_name` text NOT NULL,
  `relation` char(10) NOT NULL,
  `r_name` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `p_code` bigint(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `phone` bigint(50) NOT NULL,
  `e_id` varchar(70) NOT NULL,
  `identity` char(100) NOT NULL,
  `identity_no` varchar(200) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fir`
--

INSERT INTO `fir` (`ward_no`, `ps_name`, `fid`, `vid`, `subject`, `i_date`, `i_time`, `i_place`, `a_name`, `w_name`, `w_address`, `f_date`, `f_time`, `c_details`, `f_name`, `l_name`, `relation`, `r_name`, `city`, `state`, `p_code`, `address`, `phone`, `e_id`, `identity`, `identity_no`) VALUES
(11, 'Maligaon', 'a131', 'v5313', 'FIR for Hit and run ', '2019-04-03', '22:10:00', 'Maligaon', 'Nabin Bora', 'Hari Nath', 'PO & PS Bharalumukh', '2019-04-03', '23:00:00', 'When i was coming from adabari to maligaon at above mentioned time a car hit me , who was coming in wrong direction also. The car registration number i noted as -  AS-07-h3113.', 'Prabin', 'Nath', 'Son of', 'NIrav Nath', 'Guwahati', 'Assam', 781011, 'shuttle Gate, Maligaon', 7813464158, 'prabin7@gmail.com', 'Voter Card', 'FCM6581454'),
(2, 'Latasil', 'ar23', 'z7653', 'FIR for stolen Motorbike', '2019-05-07', '21:03:00', 'Latasil', '', '', '', '2019-05-08', '10:00:00', 'My bike has been stolen from latasil bazajr from yesterday.', 'Raju', 'Saikia', 'Son of', 'Anand Saikia', 'Guwahati', 'Assam', 781002, 'Latasil, Central Gate', 8765971314, 'raju8@gmail.com', '', ''),
(8, 'Geetanagar', 'as431', 'n752', 'FIR for attempt to murder', '2019-04-07', '11:01:00', 'Gotanagar', 'Kulpradip Deka', 'Soniya Puri', 'new guwahati', '2019-04-07', '04:56:00', 'i man trying to kill me but he failed as i ran from the spot.', 'Amitabh', 'Gogoi', 'Son of', 'Cironjit Goroi', 'Guwahati', 'Assam', 781008, 'gotanagar', 9706185462, 'ami3@gmail.com', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `fir_rejected`
--

CREATE TABLE IF NOT EXISTS `fir_rejected` (
  `fir id` varchar(100) NOT NULL,
  `cause` varchar(200) NOT NULL,
  UNIQUE KEY `fir id` (`fir id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fir_rejected`
--

INSERT INTO `fir_rejected` (`fir id`, `cause`) VALUES
('a131', 'Cancelled Due to Lack of proper supportive Evidence.'),
('as431', '');

-- --------------------------------------------------------

--
-- Table structure for table `fir_status`
--

CREATE TABLE IF NOT EXISTS `fir_status` (
  `status` text NOT NULL,
  `fid` varchar(100) NOT NULL,
  `vid` varchar(100) NOT NULL,
  UNIQUE KEY `fid` (`fid`),
  UNIQUE KEY `vid` (`vid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fir_status`
--

INSERT INTO `fir_status` (`status`, `fid`, `vid`) VALUES
('rejected', 'a131', 'v5313'),
('accepted', 'ar23', 'z7653'),
('rejected', 'as431', 'n752');

-- --------------------------------------------------------

--
-- Table structure for table `police_station`
--

CREATE TABLE IF NOT EXISTS `police_station` (
  `ps_id` varchar(30) NOT NULL,
  `ps_name` text NOT NULL,
  `oc_name` text NOT NULL,
  `ps_ph` bigint(100) NOT NULL,
  `ps_city` text NOT NULL,
  `state` text NOT NULL,
  PRIMARY KEY (`ps_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `police_station`
--

INSERT INTO `police_station` (`ps_id`, `ps_name`, `oc_name`, `ps_ph`, `ps_city`, `state`) VALUES
('1', 'Sonapur', 'S.I. Bhaskar Nath', 3612786326, 'Guwahati', 'Assam'),
('2', 'Khetri', 'Insp. P. K. Nath', 3612787220, 'Guwahati', 'Assam'),
('3', 'Basistha', 'Insp. Nabajit Das Baghri', 3612302158, 'Guwahati', 'Assam'),
('4', 'Hatigaon', 'Insp. Loknath Deka', 3612231060, 'Guwahati', 'Assam'),
('5', 'Dispur', 'Insp. Biren Baruah', 3612261510, 'Guwahati', 'Assam'),
('6', 'Bhangagarh', 'Insp. Bipin Medhi', 3612461756, 'Guwahati', 'Assam'),
('7', 'Panbazar', 'Insp. Pranjal Baruah', 3612540106, 'Guwahati', 'Assam'),
('8', 'Paltanbazar', 'Insp. Dharani Barman', 3612540126, 'Guwahati', 'Assam');

-- --------------------------------------------------------

--
-- Table structure for table `sub_admin_login`
--

CREATE TABLE IF NOT EXISTS `sub_admin_login` (
  `uname` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  UNIQUE KEY `uname` (`uname`,`pass`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE IF NOT EXISTS `user_login` (
  `uname` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  UNIQUE KEY `uname` (`uname`,`pass`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_signup`
--

CREATE TABLE IF NOT EXISTS `user_signup` (
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `vid` varchar(20) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `cpass` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `age` int(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `zcode` bigint(40) NOT NULL,
  `phoneno` bigint(40) NOT NULL,
  `gender` char(1) NOT NULL,
  PRIMARY KEY (`vid`),
  UNIQUE KEY `uname` (`uname`,`pass`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_signup`
--

INSERT INTO `user_signup` (`first_name`, `last_name`, `vid`, `uname`, `pass`, `cpass`, `email`, `age`, `city`, `state`, `zcode`, `phoneno`, `gender`) VALUES
('Manash', 'Jyoti Baruah', '1234', 'mjb', '12345', '12345', 'mjbaruah9@gmail.com', 21, 'guwahati', 'assam', 781009, 8638043872, 'm'),
('Dev', 'Roy', 'a2312', 'devroy', '123456', '123456', 'devroy@gmail.com', 25, 'Dibrugarh', 'Assam', 784123, 9706185318, 'm'),
('Gargi', 'Dutta', 'b3034', 'gargi7', '123123', '432', 'gargi@gmail.com', 18, 'Guwahati', 'Assam', 781011, 7865432345, 'f'),
('Kanika', 'Kapoor', 'v5313', 'kanika1', '123456', '123456', 'kanikakapoor@gmailcom', 20, 'Delhi', 'Assam', 432146, 9857416842, 'f'),
('Zoya', 'Akhtar', 'z7653', 'zoya7', '1234', '1234', 'zoya7@gmail.com', 18, 'Sivsagar', 'Assam1', 784321, 9871463157, 'f');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
