-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2018 at 11:31 PM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cr10_mohamad_eibou_biglibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE IF NOT EXISTS `author` (
`AU_id` int(10) NOT NULL,
  `First_name` varchar(55) DEFAULT NULL,
  `Last_name` varchar(55) DEFAULT NULL,
  `Media_name` varchar(55) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`AU_id`, `First_name`, `Last_name`, `Media_name`) VALUES
(2, 'max', 'halverson', 'Java for all'),
(3, 'Graig', 'Grannel', 'Css Mathematic'),
(4, 'Daived', 'smith', 'General english'),
(5, 'Julian', 'kanker', 'b Security Assistant'),
(6, 'Gyan Singh', 'meena', 'English Notes');

-- --------------------------------------------------------

--
-- Table structure for table `mediaa`
--

CREATE TABLE IF NOT EXISTS `mediaa` (
`medai_id` int(11) NOT NULL,
  `Media_name` varchar(55) DEFAULT NULL,
  `Meadia_type` varchar(55) DEFAULT NULL,
  `ISBN_code` int(11) DEFAULT NULL,
  `Author_name` varchar(55) DEFAULT NULL,
  `description` varchar(55) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `publisher_name` varchar(55) DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `Status_S` varchar(55) DEFAULT NULL,
  `User_id` int(11) DEFAULT NULL,
  `Auth_id` int(11) DEFAULT NULL,
  `Active` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `mediaa`
--

INSERT INTO `mediaa` (`medai_id`, `Media_name`, `Meadia_type`, `ISBN_code`, `Author_name`, `description`, `image`, `publisher_name`, `publish_date`, `Status_S`, `User_id`, `Auth_id`, `Active`) VALUES
(1, 'Java for all', 'book', 2147483647, 'max halverson', 'begnnier book about java ', 'https://stackabuse.com/content/images/2018/09/the-best-java-books-all-skill-levels.png', 'Mohamad eibou', '2018-11-06', 'available', 2, NULL, 0),
(8, 'Css Mathematic', 'book ', 5648398, 'Graig Grannel', 'book for lern webdesighn', 'https://www.latestmcqs.com/wp-content/uploads/2018/06/gk-1-1.png', 'Mohammad Eibou', '2018-11-11', 'available', NULL, NULL, 0),
(9, 'General english', 'book ', 3856396, 'Daived smith', 'book for learn english', 'http://www.governmentjobstayari.com/wp-content/uploads/2017/12/INDIAN-POLITY-OBJECTIVE.png', 'Mohammad Eibou', '2018-11-11', 'available', NULL, NULL, 0),
(10, 'Ib Security Assistant', 'book ', 92947783, 'Julian kanker', 'book for learn ib security', 'https://examdays.com/blog/wp-content/uploads/2018/10/IB-Security-Assistant-Previous-year-Question-paper-PDF.png', 'Mohammad Eibou', '2018-11-11', 'available', NULL, NULL, 0),
(11, 'English Notes', 'book ', 345345456, 'Gyan Singh meena', 'English book', 'http://www.governmentjobstayari.com/wp-content/uploads/2017/12/English-Notes-By-Gyan-Singh-Meena.png', 'Mohammad Eibou', '2018-11-11', 'available', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE IF NOT EXISTS `publisher` (
`cus_id` int(10) NOT NULL,
  `first_name` varchar(55) DEFAULT NULL,
  `Last_name` varchar(55) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `Email` varchar(55) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`cus_id`, `first_name`, `Last_name`, `birthday`, `Email`) VALUES
(1, 'FVGDFF', 'DFSAF', NULL, 'FGFSFVFFFEFEJHGJ'),
(2, 'RRRRR', 'SSSSS', NULL, 'FSDFSFSDFSDF'),
(4, 'Mohammad', 'Eibou', '1990-03-07', 'moh55eibou@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
 ADD PRIMARY KEY (`AU_id`);

--
-- Indexes for table `mediaa`
--
ALTER TABLE `mediaa`
 ADD PRIMARY KEY (`medai_id`), ADD KEY `User_id` (`User_id`), ADD KEY `Auth_id` (`Auth_id`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
 ADD PRIMARY KEY (`cus_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
MODIFY `AU_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `mediaa`
--
ALTER TABLE `mediaa`
MODIFY `medai_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
MODIFY `cus_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `mediaa`
--
ALTER TABLE `mediaa`
ADD CONSTRAINT `mediaa_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `publisher` (`cus_id`),
ADD CONSTRAINT `mediaa_ibfk_2` FOREIGN KEY (`Auth_id`) REFERENCES `author` (`AU_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
