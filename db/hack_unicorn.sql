-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 11, 2013 at 06:51 AM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hack_unicorn`
--

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE IF NOT EXISTS `places` (
  `idplaces` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idplaces`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `places`
--


-- --------------------------------------------------------

--
-- Table structure for table `reserve_ticket`
--

CREATE TABLE IF NOT EXISTS `reserve_ticket` (
  `idreserve_ticket` int(11) NOT NULL AUTO_INCREMENT,
  `date_of_ticket` datetime DEFAULT NULL,
  `vehicle_id` int(11) NOT NULL,
  `reserve_by` int(11) DEFAULT NULL,
  `reservation_date` datetime DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `from` int(11) DEFAULT NULL,
  `destination` int(11) DEFAULT NULL,
  PRIMARY KEY (`idreserve_ticket`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `reserve_ticket`
--


-- --------------------------------------------------------

--
-- Table structure for table `unicorn_assoc`
--

CREATE TABLE IF NOT EXISTS `unicorn_assoc` (
  `assoc_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`assoc_id`),
  KEY `user_id` (`user_id`,`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `unicorn_assoc`
--

INSERT INTO `unicorn_assoc` (`assoc_id`, `user_id`, `group_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `unicorn_groups`
--

CREATE TABLE IF NOT EXISTS `unicorn_groups` (
  `group_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(48) NOT NULL,
  `description` text NOT NULL,
  `roles` text NOT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `unicorn_groups`
--

INSERT INTO `unicorn_groups` (`group_id`, `name`, `description`, `roles`) VALUES
(1, 'Administrators', 'Administrators (Full Access)', '1'),
(2, 'Vendor', 'Vendor User', '10'),
(3, 'Consumer', 'Consumer User', '100');

-- --------------------------------------------------------

--
-- Table structure for table `unicorn_logins`
--

CREATE TABLE IF NOT EXISTS `unicorn_logins` (
  `login_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `time` datetime NOT NULL,
  `success` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`login_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `unicorn_logins`
--


-- --------------------------------------------------------

--
-- Table structure for table `unicorn_userdata`
--

CREATE TABLE IF NOT EXISTS `unicorn_userdata` (
  `userdata_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `fullname` varchar(40) NOT NULL,
  `contact_number` varchar(254) NOT NULL,
  `permanent_address` varchar(254) NOT NULL,
  `temporary_address` varchar(254) NOT NULL,
  PRIMARY KEY (`userdata_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `unicorn_userdata`
--


-- --------------------------------------------------------

--
-- Table structure for table `unicorn_users`
--

CREATE TABLE IF NOT EXISTS `unicorn_users` (
  `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(60) NOT NULL,
  `password_last_set` datetime NOT NULL,
  `password_never_expires` tinyint(1) NOT NULL DEFAULT '0',
  `remember_me` varchar(40) NOT NULL,
  `activation_code` varchar(40) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `forgot_code` varchar(40) NOT NULL,
  `forgot_generated` datetime NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `last_login` datetime NOT NULL,
  `last_login_ip` int(10) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `unicorn_users`
--

INSERT INTO `unicorn_users` (`user_id`, `username`, `password`, `password_last_set`, `password_never_expires`, `remember_me`, `activation_code`, `active`, `forgot_code`, `forgot_generated`, `enabled`, `last_login`, `last_login_ip`) VALUES
(1, 'admin', '$2a$08$560JEYl2Np/7/6RLc/mq/ecnumuBXig3e.pHh1lnH1pgpk94sTZhu', '2013-05-11 09:43:31', 0, '', '', 1, '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_has_tickets`
--

CREATE TABLE IF NOT EXISTS `user_has_tickets` (
  `reservation_id` int(11) NOT NULL,
  `reserve_by` int(11) NOT NULL,
  `seat_number` varchar(100) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  PRIMARY KEY (`reservation_id`,`reserve_by`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_has_tickets`
--


-- --------------------------------------------------------

--
-- Table structure for table `vechicle_info`
--

CREATE TABLE IF NOT EXISTS `vechicle_info` (
  `idvechicle_info` int(11) NOT NULL AUTO_INCREMENT,
  `vechicle_type_id` int(11) DEFAULT NULL,
  `vechicle_number` varchar(100) DEFAULT NULL,
  `vendor_info_id` int(11) NOT NULL,
  `ac` int(11) DEFAULT NULL,
  `from` int(11) DEFAULT NULL,
  `to` int(11) DEFAULT NULL,
  PRIMARY KEY (`idvechicle_info`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `vechicle_info`
--


-- --------------------------------------------------------

--
-- Table structure for table `vechicle_type`
--

CREATE TABLE IF NOT EXISTS `vechicle_type` (
  `idvechicle_type` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) DEFAULT NULL,
  `availabe_seat` int(11) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  PRIMARY KEY (`idvechicle_type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `vechicle_type`
--


-- --------------------------------------------------------

--
-- Table structure for table `vendor_info`
--

CREATE TABLE IF NOT EXISTS `vendor_info` (
  `idvendor_info` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(200) DEFAULT NULL,
  `services` text,
  `user_id` int(11) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `modified_at` date DEFAULT NULL,
  PRIMARY KEY (`idvendor_info`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `vendor_info`
--

