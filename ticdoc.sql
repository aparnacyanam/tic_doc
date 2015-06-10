-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2014 at 05:44 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ticdoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp_details`
--

CREATE TABLE IF NOT EXISTS `emp_details` (
`Emp_id` int(10) NOT NULL,
  `Ename` varchar(25) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phone_no` varchar(11) NOT NULL,
  `email_id` varchar(25) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `job_level` smallint(6) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10004 ;

--
-- Dumping data for table `emp_details`
--

INSERT INTO `emp_details` (`Emp_id`, `Ename`, `address`, `phone_no`, `email_id`, `dept_id`, `job_level`) VALUES
(10001, 'Employee1', 'Charlotte', '123456789', 'emp1@ticdoc.com', 1, 3),
(10002, 'Employee2', 'pineville', '987654321', 'emp2@ticdoc.com', 1, 2),
(10003, 'employee3', 'verginia', '245', 'emp3@ticdoc.com', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `log_in`
--

CREATE TABLE IF NOT EXISTS `log_in` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `Emp_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_in`
--

INSERT INTO `log_in` (`username`, `password`, `Emp_id`) VALUES
('emp1', 'password1', 10002),
('emp2', 'abc123', 10001),
('suthan', 'abc12', 10003);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_information`
--

CREATE TABLE IF NOT EXISTS `ticket_information` (
`ticket_id` int(11) NOT NULL,
  `ticket_description` longtext NOT NULL,
  `assignee_id` int(11) DEFAULT NULL,
  `priority_level` smallint(6) NOT NULL DEFAULT '4',
  `registered_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_updated_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tkt_status` varchar(20) NOT NULL DEFAULT 'open',
  `asigner_id` int(10) NOT NULL,
  `comments` longtext,
  `dept_id` int(11) NOT NULL,
  `ticket_title` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20002 ;

--
-- Dumping data for table `ticket_information`
--

INSERT INTO `ticket_information` (`ticket_id`, `ticket_description`, `assignee_id`, `priority_level`, `registered_time`, `last_updated_time`, `tkt_status`, `asigner_id`, `comments`, `dept_id`, `ticket_title`) VALUES
(20001, 'I need a second monitor at my work station', 10001, 4, '2014-10-08 02:04:53', '0000-00-00 00:00:00', 'open', 10002, NULL, 1, 'Need a monitor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp_details`
--
ALTER TABLE `emp_details`
 ADD PRIMARY KEY (`Emp_id`), ADD UNIQUE KEY `phone_no` (`phone_no`,`email_id`);

--
-- Indexes for table `log_in`
--
ALTER TABLE `log_in`
 ADD UNIQUE KEY `username` (`username`), ADD KEY `Emp_id` (`Emp_id`);

--
-- Indexes for table `ticket_information`
--
ALTER TABLE `ticket_information`
 ADD PRIMARY KEY (`ticket_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp_details`
--
ALTER TABLE `emp_details`
MODIFY `Emp_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10004;
--
-- AUTO_INCREMENT for table `ticket_information`
--
ALTER TABLE `ticket_information`
MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20002;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `log_in`
--
ALTER TABLE `log_in`
ADD CONSTRAINT `log_in_ibfk_1` FOREIGN KEY (`Emp_id`) REFERENCES `emp_details` (`Emp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
