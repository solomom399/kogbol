-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2018 at 08:31 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kogbol`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(255) NOT NULL,
  `news_body` varchar(255) NOT NULL,
  `date_created` varchar(255) NOT NULL,
  `time_created` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_body`, `date_created`, `time_created`) VALUES
(62, 'Perfect Shipping In Nigeria', 'News UploadedNews UploadedNews UploadedNews UploadedNews UploadedNews UploadedNews UploadedNews UploadedNews KOGBOL Consults shall be a Universal and preferred name in her sustainable supportive service for Small, Medium and Large scale businesses in Nige', '2018-02-26 13:54:52', '2018-02-26 13:54:52'),
(63, 'News Uploaded', 'News UploadedNews UploadedNews UploadedNews UploadedNews UploadedNews UploadedNews UploadedNews UploadedNews UploadedNews UploadedNews UploadedNews UploadedNews UploadedNews UploadedNews UploadedNews UploadedNews UploadedNews UploadedNews UploadedNews Upl', '2018-02-26 14:00:33', '2018-02-26 14:00:33'),
(64, 'KOGBOL CONSULTS', 'KOGBOL Consults shall be a Universal and preferred name in her sustainable supportive service for Small, Medium and Large scale businesses in Nigeria, African and beyond.\r\nMISSION STATEMENT\r\nKOGBOL Consults is providing innovative solutions to her chosen ', '2018-02-26 15:41:08', '2018-02-26 15:41:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
