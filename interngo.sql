-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2016 at 01:26 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `interngo`
--

-- --------------------------------------------------------

--
-- Table structure for table `appliedstudent`
--

CREATE TABLE `appliedstudent` (
  `studentId` varchar(255) NOT NULL,
  `min_month` varchar(255) NOT NULL,
  `stipend` varchar(255) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `applyby` date NOT NULL,
  `reason` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appliedstudent`
--

INSERT INTO `appliedstudent` (`studentId`, `min_month`, `stipend`, `resume`, `applyby`, `reason`) VALUES
('6', '1%20month', '2-5k', 'Calendar_AY_2016-17_Aug-Dec_2016_Final.pdf', '2016-08-02', 'Hello there, The reason to hire you'),
('6', '3%20month', '16-20k', 'Internship Report IIT Mandi (1).doc', '2016-08-11', 'Why'),
('6', '2%20month', '10-15k', 'f3bc48edf40d5e3e09a166c7fadc7efb-driver_arch.png', '2016-08-04', 'ssxsd');

-- --------------------------------------------------------

--
-- Table structure for table `cregister`
--

CREATE TABLE `cregister` (
  `uname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `logo` longblob NOT NULL,
  `website` varchar(255) NOT NULL,
  `AboutCompany` varchar(255) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cregister`
--

INSERT INTO `cregister` (`uname`, `email`, `password`, `cpassword`, `contact`, `logo`, `website`, `AboutCompany`, `id`) VALUES
('Microsoft pvt LTD', 'microsoft@gmail.com', '1fd96777aedeadb325c66f3780054765', '1fd96777aedeadb325c66f3780054765', '88888888888', 0x433a78616d7070096d70706870374143462e746d70, 'www.microsoft.com', 'One of the Biggest Software and mobile development company', 8),
('Facebook pvt limited', 'fb@facebook.com', '1fd96777aedeadb325c66f3780054765', '1fd96777aedeadb325c66f3780054765', '1234567898', 0x433a78616d7070096d70706870373441342e746d70, 'www.facebook.com', 'One of the most Popular Social Networking Site in world.', 9),
('Amazon pvt ltd.', 'amazon123@live.com', '1fd96777aedeadb325c66f3780054765', '1fd96777aedeadb325c66f3780054765', '', 0x433a78616d7070096d70706870353630432e746d70, '', '', 10),
('Ebay pvt ltd.', 'ebay1234@gmail.com', '1fd96777aedeadb325c66f3780054765', '1fd96777aedeadb325c66f3780054765', '', 0x433a78616d7070096d70706870324233302e746d70, '', '', 11),
('Google pvt ltd', 'google111@gmail.com', '1fd96777aedeadb325c66f3780054765', '1fd96777aedeadb325c66f3780054765', '999999999', 0x433a78616d7070096d70706870363630392e746d70, '', '', 12),
('hj', 'bnj@vbn.com', 'a709909b1ea5c2bee24248203b1728a5', 'a709909b1ea5c2bee24248203b1728a5', '8520', 0x433a78616d7070096d707068703641332e746d70, '', '', 13);

-- --------------------------------------------------------

--
-- Table structure for table `internship`
--

CREATE TABLE `internship` (
  `CompanyID` int(10) NOT NULL,
  `InternshipID` int(10) NOT NULL,
  `about` varchar(255) NOT NULL,
  `requireInt` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `category` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `stipend` varchar(255) NOT NULL,
  `applyby` date NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internship`
--

INSERT INTO `internship` (`CompanyID`, `InternshipID`, `about`, `requireInt`, `start_date`, `category`, `duration`, `location`, `stipend`, `applyby`, `email`) VALUES
(9, 1, 'Software development for the website', '(1) C/C++\r\n(2) Data structure and Algorithm', '2016-08-10', 'software development', '3 month', 'jaipur', '15000/Month', '2016-08-04', 'fb@facebook.com'),
(9, 2, 'Backend development for website', 'PHP, MYSQL and other backend technologies.', '2016-09-08', 'php', '2 month', 'kota', '20000/Month', '2016-09-01', 'fb@facebook.com'),
(8, 3, 'This internship will include the Software testing part of the software development.', '(1) C/C++ (2) Data structure', '2016-08-11', 'software%20testing', '2%20month', 'chandigarh', '5000/Month', '2016-08-04', 'microsoft@gmail.com'),
(8, 4, 'A shopping site', 'Developer to build a bootstrap website', '2016-08-12', 'php', '1 month', 'jaipur', '10000/Month', '2016-08-10', 'microsoft@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `studentId` int(10) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`studentId`, `uname`, `email`, `password`, `cpassword`, `img`) VALUES
(6, 'priyanka_mahawar', 'priyankamahawar5@live.com', '1fd96777aedeadb325c66f3780054765', '1fd96777aedeadb325c66f3780054765', ''),
(7, 'priya5', 'pssdsd@live.com', '1fd96777aedeadb325c66f3780054765', '1fd96777aedeadb325c66f3780054765', ''),
(8, 'anita_mahawar', 'anita124@gmail.com', '1fd96777aedeadb325c66f3780054765', '1fd96777aedeadb325c66f3780054765', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cregister`
--
ALTER TABLE `cregister`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internship`
--
ALTER TABLE `internship`
  ADD PRIMARY KEY (`InternshipID`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`studentId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cregister`
--
ALTER TABLE `cregister`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `internship`
--
ALTER TABLE `internship`
  MODIFY `InternshipID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `studentId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
