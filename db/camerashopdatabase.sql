-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2022 at 04:14 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `camerashopdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `adminID` int(11) NOT NULL,
  `adminUserName` varchar(255) NOT NULL,
  `adminPassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`adminID`, `adminUserName`, `adminPassword`) VALUES
(1, 'vincent', 'admin'),
(2, 'adminVincent', '$2y$10$GeeFWitB4vvYY.6bZz9hVunOagsfJVom4D7VmRCe.eXHqGWGlYd7.'),
(9, 'adminJoseph', '$2y$10$YjJ4U3bOyN.K5Ja7bXMZsuIQDr.o4O85IHJwUcQWTyjURj1MdEio2');

-- --------------------------------------------------------

--
-- Table structure for table `camerabodies`
--

CREATE TABLE `camerabodies` (
  `cameraID` int(11) NOT NULL,
  `cameraBody` varchar(255) NOT NULL,
  `cameraPrice` decimal(10,2) NOT NULL,
  `imageDir` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `cameraSpecs` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `camerabodies`
--

INSERT INTO `camerabodies` (`cameraID`, `cameraBody`, `cameraPrice`, `imageDir`, `description`, `cameraSpecs`) VALUES
(2, 'Fujifilm X-T30', '600.00', 'img/cameraBody/X-T30.png', 'Much like the other Fujifilm X-T10 series of cameras share a similar size shape and style. Excelling in photo and video capabilities', '26 Megapixel Sensor.\r\n10FPS continuous shooting with ES(RAW)\r\n15FPS continuous shooting with ES+MS(RAW)\r\n\r\n'),
(9, 'Fujifilm X-T20', '300.00', 'img/cameraBody/X-T20.png', 'Much like the other Fujifilm X-T10 series of cameras share a similar size shape and style. Where this only lacks video capabilities in 4k but holds its own in the photo Department', '24 Megapixel Sensor.\r\n8FPS continuous shooting with ES(RAW)\r\n10FPS continuous shooting with ES+MS(RAW)\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `cameralenses`
--

CREATE TABLE `cameralenses` (
  `cameraLensID` int(11) NOT NULL,
  `cameraLens` varchar(255) NOT NULL,
  `cameraLensPrice` decimal(10,2) NOT NULL,
  `imageDir` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `cameraLensSpecs` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cameralenses`
--

INSERT INTO `cameralenses` (`cameraLensID`, `cameraLens`, `cameraLensPrice`, `imageDir`, `description`, `cameraLensSpecs`) VALUES
(1, 'Fujifilm 23mm F2', '399.00', 'img/cameraLens/fuji23.png', 'Small and compact 23mm <br>\r\nGreat for on the move action<br>\r\n', 'Focal:23mm<br>\r\nF-Stop: F2-16<br>\r\n'),
(3, 'Fujifilm 35mm F2', '399.00', 'img/cameraLens/fuji35.png', 'Small and compact 35mm <br>\r\nGreat for traveling<br>\r\n', 'Focal:35mm<br>\r\nF-Stop: F2-16<br>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `customerequest`
--

CREATE TABLE `customerequest` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(2555) NOT NULL,
  `email` varchar(255) NOT NULL,
  `request` varchar(535) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customerequest`
--

INSERT INTO `customerequest` (`id`, `firstName`, `lastName`, `email`, `request`) VALUES
(1, 'Vincent', 'DeRoma', 'vderoma@gmail.com', 'Hello I would like to request for my images to put up on the website\r\nif you would like to see my projects please reach out to me'),
(2, 'Joseph', 'Chalet', 'jc@gmail.com', 'Hello I would like to request for my images to put up on the website\r\nif you would like to see my projects please reach out to me or see my work on instagram\r\n@jc'),
(3, 'Newmen', 'Form', 'newman@gmail.com', 'Hello I am a photographer that is based in New Jersey I would like some of my work to be put up on your website'),
(4, 'Henry', 'Ford', 'hford@gmail.com', 'Hello I am a photographer and I will bring value to your website if u let me put my images'),
(9, 'Henry', 'DeRoma', 'newman@gmail.com', 'Hey I want to be featured on your website I have images please let me know if you are interested');

-- --------------------------------------------------------

--
-- Table structure for table `customerimage`
--

CREATE TABLE `customerimage` (
  `id` int(11) NOT NULL,
  `customerName` varchar(255) NOT NULL,
  `lensUsed` int(11) NOT NULL,
  `cameraUsed` int(11) NOT NULL,
  `imageDir` varchar(255) NOT NULL,
  `customerOpinion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customerimage`
--

INSERT INTO `customerimage` (`id`, `customerName`, `lensUsed`, `cameraUsed`, `imageDir`, `customerOpinion`) VALUES
(1, 'Brandon', 1, 9, 'img/gallery/gal (1).jpg', 'This setup with the lens is one that is very practical and makes you want to go out and start taking photos.\r\nThis is mainly to do with lenses\' lightweight.'),
(3, 'Vincent', 3, 2, 'img/gallery/gal (2).jpg', 'This setup with the lens is one that is very practical and makes you want to go out and start taking photos.\r\nThis is mainly to do with lenses\' lightweight.'),
(4, 'Joseph', 3, 9, 'img/gallery/gal (3).jpg', 'This setup with the lens is one that is very practical and makes you want to go out and start taking photos.\r\nThis is mainly to do with lenses\' lightweight.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `camerabodies`
--
ALTER TABLE `camerabodies`
  ADD PRIMARY KEY (`cameraID`);

--
-- Indexes for table `cameralenses`
--
ALTER TABLE `cameralenses`
  ADD PRIMARY KEY (`cameraLensID`);

--
-- Indexes for table `customerequest`
--
ALTER TABLE `customerequest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customerimage`
--
ALTER TABLE `customerimage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lensUsed` (`lensUsed`,`cameraUsed`),
  ADD KEY `cameraUsed` (`cameraUsed`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `camerabodies`
--
ALTER TABLE `camerabodies`
  MODIFY `cameraID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `cameralenses`
--
ALTER TABLE `cameralenses`
  MODIFY `cameraLensID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customerequest`
--
ALTER TABLE `customerequest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customerimage`
--
ALTER TABLE `customerimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customerimage`
--
ALTER TABLE `customerimage`
  ADD CONSTRAINT `customerimage_ibfk_1` FOREIGN KEY (`cameraUsed`) REFERENCES `camerabodies` (`cameraID`),
  ADD CONSTRAINT `customerimage_ibfk_2` FOREIGN KEY (`lensUsed`) REFERENCES `cameralenses` (`cameraLensID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
