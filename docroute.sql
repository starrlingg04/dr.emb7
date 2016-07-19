-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2016 at 10:55 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `docroute`
--

-- --------------------------------------------------------

--
-- Table structure for table `location_details`
--

CREATE TABLE `location_details` (
  `locationID` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `brgy` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location_details`
--

INSERT INTO `location_details` (`locationID`, `city`, `brgy`, `street`) VALUES
(1, 'Mandaue', 'Banilad', 'AC Cortes'),
(1, 'Mandaue', 'Subangdaku', 'Old Street');

-- --------------------------------------------------------

--
-- Table structure for table `location_master`
--

CREATE TABLE `location_master` (
  `location_id` int(11) NOT NULL,
  `province` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location_master`
--

INSERT INTO `location_master` (`location_id`, `province`) VALUES
(1, 'Cebu'),
(2, 'Negros Oriental');

-- --------------------------------------------------------

--
-- Table structure for table `proponent`
--

CREATE TABLE `proponent` (
  `prop_id` int(11) NOT NULL,
  `prop_type_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `contact_num` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `location_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proponent`
--

INSERT INTO `proponent` (`prop_id`, `prop_type_id`, `name`, `contact_num`, `email`, `location_id`) VALUES
(1, 1, 'A.C Steel Industries , Incorporated', '125-6342', 'sample@gmail.com', 1),
(2, 1, 'Aboitizland, INC.', '567-9996', 'sampletwo@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `prop_type`
--

CREATE TABLE `prop_type` (
  `prop_type_id` int(11) NOT NULL,
  `prop_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prop_type`
--

INSERT INTO `prop_type` (`prop_type_id`, `prop_type`) VALUES
(1, 'master'),
(2, 'sub');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sub_id` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_id`, `subject`) VALUES
(1, 'Complaints'),
(2, 'Certificate of Non-Coverage'),
(3, 'Environmental Compliance Certificate'),
(4, 'Landuse Conversion'),
(5, 'Discharge Permit'),
(6, 'Permit to Operate'),
(7, 'Small Quantity Importation'),
(8, 'Chemical Control Order'),
(9, 'Philippine Inventory Control Chemical Substances'),
(10, 'Importation Clearance'),
(11, 'Priority Chemical List'),
(12, 'Pre Manufacture/ Pre Importation Notification'),
(13, 'Permit to Transport'),
(14, 'Transporters Registration Application'),
(15, 'Treatment Storage Disposal Registration'),
(16, 'Approved Test Plan'),
(17, 'Pollution Control Officers'),
(18, 'Others');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `location_master`
--
ALTER TABLE `location_master`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `proponent`
--
ALTER TABLE `proponent`
  ADD PRIMARY KEY (`prop_id`);

--
-- Indexes for table `prop_type`
--
ALTER TABLE `prop_type`
  ADD PRIMARY KEY (`prop_type_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sub_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `location_master`
--
ALTER TABLE `location_master`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `proponent`
--
ALTER TABLE `proponent`
  MODIFY `prop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `prop_type`
--
ALTER TABLE `prop_type`
  MODIFY `prop_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
