-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2020 at 10:29 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_report`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appoint`
--

CREATE TABLE `tbl_appoint` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `doctor` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_appoint`
--

INSERT INTO `tbl_appoint` (`id`, `name`, `email`, `mobile`, `date`, `doctor`, `message`) VALUES
(1, 'Rohim', 'rohim@gmail.com', '01725018566', '2020-12-30', 'Dr Md Faruque Uddin', 'Please let me know about my confirmation ASAP.'),
(2, 'Masuma', 'masuma@gmail.com', '01795319241', '2020-12-31', 'Professor Dr. Md Manjir Ali', ''),
(3, 'Heba', 'heba@gmail.com', '01614928566', '2020-12-29', 'Professor Dr Uttam Kumar Saha', ''),
(4, 'Ayesha', 'ayesha123@gmail.com', '01320918566', '2020-12-31', 'Dr Md Jalal Hossain', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(2, 'Karim', 'karim@gmail.com', 'Question', 'How do you create this website?! It\'s amazing!'),
(3, 'Ayesha', 'ayesha123@gmail.com', 'Forget', 'I forget My password.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_report`
--

CREATE TABLE `tbl_report` (
  `id` int(11) NOT NULL,
  `color` varchar(255) NOT NULL,
  `apprnc` varchar(255) NOT NULL,
  `gravity` varchar(255) NOT NULL,
  `ph` float NOT NULL,
  `bilirbn` varchar(255) NOT NULL,
  `nitrt` varchar(255) NOT NULL,
  `hb` varchar(255) NOT NULL,
  `mcv` varchar(255) NOT NULL,
  `rbc` varchar(255) NOT NULL,
  `wbc` varchar(255) NOT NULL,
  `neutro` varchar(255) NOT NULL,
  `lympho` varchar(255) NOT NULL,
  `mono` varchar(255) NOT NULL,
  `bladder` varchar(255) NOT NULL,
  `uterus` varchar(255) NOT NULL,
  `ar` varchar(255) NOT NULL,
  `esr` varchar(255) NOT NULL,
  `platlat` varchar(255) NOT NULL,
  `prolactin` varchar(255) NOT NULL,
  `tsh` varchar(255) NOT NULL,
  `rbs` varchar(255) NOT NULL,
  `hbsag` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `email`, `mobile`, `password`, `type`) VALUES
(1, 'Jannat', 'jannat@gmail.com', '01625318123', '1234', 'admin'),
(2, 'Ayesha', 'ayesha123@gmail.com', '01320918566', '123123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_appoint`
--
ALTER TABLE `tbl_appoint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_report`
--
ALTER TABLE `tbl_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_appoint`
--
ALTER TABLE `tbl_appoint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_report`
--
ALTER TABLE `tbl_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
