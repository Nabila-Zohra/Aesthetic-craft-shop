-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2020 at 06:01 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `craft shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `artcraft`
--

CREATE TABLE `artcraft` (
  `id` int(255) NOT NULL,
  `name` varchar(500) NOT NULL,
  `code` varchar(200) NOT NULL,
  `price` int(255) NOT NULL,
  `Category` varchar(500) NOT NULL,
  `image` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artcraft`
--

INSERT INTO `artcraft` (`id`, `name`, `code`, `price`, `Category`, `image`) VALUES
(1, 'Sign Pen', 'signpen01', 25, 'Art Craft', 'image/SignPen.jpg'),
(2, 'Brush', 'brush01', 50, 'Art Craft', 'image/Brush.jpg'),
(3, 'Color Pencil', 'colorpencil01', 20, 'Art Craft', 'image/ColorPencil.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orderconfirm`
--

CREATE TABLE `orderconfirm` (
  `UserName` varchar(500) NOT NULL,
  `ProductName` varchar(500) NOT NULL,
  `Quantity` int(255) NOT NULL,
  `Price` int(255) NOT NULL,
  `Total Price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderconfirm`
--

INSERT INTO `orderconfirm` (`UserName`, `ProductName`, `Quantity`, `Price`, `Total Price`) VALUES
('Jannatul Tuba', 'Sign Pen', 1, 25, 25),
('Jannatul Tuba', 'Brush', 1, 50, 75),
('Jannatul Tuba', 'Color Pencil', 1, 20, 95),
('Jannatul Tuba', 'Sign Pen', 1, 25, 25),
('Jannatul Tuba', 'Brush', 1, 50, 75),
('Jannatul Tuba', 'Color Pencil', 1, 20, 95),
('Jannatul Tuba', 'A4 Color Paper', 1, 10, 105),
('Jannatul Tuba', 'Scrap Book Paper', 1, 50, 155),
('Jannatul Tuba', 'Flower Stamp', 1, 100, 255),
('Jannatul Tuba', 'Leaf Stamp', 1, 100, 355),
('Jannatul Tuba', 'Sign Pen', 1, 25, 25),
('Jannatul Tuba', 'Brush', 1, 50, 75),
('Jannatul Tuba', 'Color Pencil', 1, 20, 95),
('Jannatul Tuba', 'A4 Color Paper', 1, 10, 105),
('Jannatul Tuba', 'Scrap Book Paper', 1, 50, 155),
('Jannatul Tuba', 'Flower Stamp', 1, 100, 255),
('Jannatul Tuba', 'Leaf Stamp', 1, 100, 355),
('Jannatul Tuba', 'Sign Pen', 1, 25, 25),
('Jannatul Tuba', 'Color Pencil', 1, 20, 45),
('Jannatul Tuba', 'A4 Color Paper', 1, 10, 55),
('Jannatul Tuba', 'Scrap Book Paper', 1, 50, 105),
('Jannatul Tuba', 'Flower Stamp', 1, 100, 205),
('Jannatul Tuba', 'Leaf Stamp', 1, 100, 305),
('Jannatul Tuba', 'Color Pencil', 1, 20, 20),
('Jannatul Tuba', 'A4 Color Paper', 1, 10, 30),
('Jannatul Tuba', 'Scrap Book Paper', 1, 50, 80),
('Jannatul Tuba', 'Flower Stamp', 1, 100, 180),
('Jannatul Tuba', 'Leaf Stamp', 1, 100, 280),
('Tuba', 'Flower Stamp', 1, 100, 100),
('Tuba', 'Leaf Stamp', 1, 100, 200),
('Tuba', 'Flower Stamp', 1, 100, 100),
('Jt', 'Scrap Book Paper', 1, 50, 50),
('jt', 'Flower Stamp', 1, 100, 100),
('jt', 'Flower Stamp', 1, 100, 100),
('Nabila', 'A4 Color Paper', 1, 10, 10),
('Nabila', 'Sign Pen', 1, 25, 35),
('Nabila', 'A4 Color Paper', 1, 10, 10),
('Nabila', 'Sign Pen', 1, 25, 35),
('abc', 'A4 Color Paper', 1, 10, 10),
('abc', 'Color Paper Mats', 1, 50, 60),
('abc', 'Color Paper Mats', 1, 50, 50),
('Jt', 'Scrap Book Paper', 1, 50, 50),
('abc', 'Color Paper Mats', 1, 50, 50),
('abc', 'A4 Color Paper', 1, 10, 60),
('abc', 'Color Paper Mats', 1, 50, 50),
('abc', 'A4 Color Paper', 1, 10, 60),
('abc', 'Color Paper Mats', 1, 50, 50),
('abc', 'A4 Color Paper', 1, 10, 60),
('abc', 'Color Paper Mats', 1, 50, 50),
('abc', 'A4 Color Paper', 1, 10, 60),
('abc', 'Color Paper Mats', 1, 50, 50),
('abc', 'A4 Color Paper', 1, 10, 60),
('abc', 'Color Paper Mats', 1, 50, 50),
('abc', 'A4 Color Paper', 1, 10, 60),
('abc', 'Color Paper Mats', 1, 50, 50),
('abc', 'A4 Color Paper', 1, 10, 60),
('abc', 'Color Paper Mats', 1, 50, 50),
('abc', 'A4 Color Paper', 1, 10, 60),
('abc', 'Color Paper Mats', 1, 50, 50),
('abc', 'A4 Color Paper', 1, 10, 60),
('abc', 'Color Paper Mats', 1, 50, 50),
('abc', 'A4 Color Paper', 1, 10, 60),
('abc', 'Color Paper Mats', 1, 50, 50),
('abc', 'A4 Color Paper', 1, 10, 60),
('abc', 'Color Paper Mats', 1, 50, 50),
('abc', 'A4 Color Paper', 1, 10, 60),
('abc', 'Color Paper Mats', 1, 50, 50),
('abc', 'A4 Color Paper', 1, 10, 60),
('abc', 'Color Paper Mats', 1, 50, 50),
('abc', 'A4 Color Paper', 1, 10, 60),
('Jt', 'Scrap Book Paper', 1, 50, 50),
('', 'Sign Pen', 1, 25, 0),
('', 'Sign Pen', 1, 25, 0),
('zzz', 'Sign Pen', 1, 25, 25),
('zzz', 'Sign Pen', 1, 25, 25),
('zzz', 'A4 Color Paper', 1, 10, 35),
('zzz', 'Sign Pen', 1, 25, 25),
('zzz', 'A4 Color Paper', 1, 10, 35),
('Nabila', 'Sign Pen', 1, 25, 25),
('Nabila', 'Sign Pen', 1, 25, 25),
('Nabila', 'Sign Pen', 1, 25, 25),
('Nabila', 'Sign Pen', 1, 25, 25),
('Nabila', 'Sign Pen', 1, 25, 25),
('Nabila', 'Sign Pen', 1, 25, 25),
('Nabila', 'Brush', 1, 50, 75),
('Nabila', 'Color Pencil', 1, 20, 95),
('Nabila', 'Sign Pen', 1, 25, 25),
('Nabila', 'Brush', 1, 50, 75),
('Nabila', 'Color Pencil', 1, 20, 95),
('Nabila', 'Sign Pen', 1, 25, 25),
('Nabila', 'Brush', 1, 50, 75),
('Nabila', 'Color Pencil', 1, 20, 95),
('Nabila', 'Flower Stamp', 1, 100, 195),
('zzz', 'Flower Stamp', 1, 100, 100),
('zzz', 'Leaf Stamp', 1, 100, 200),
('zzz', 'Brush', 1, 50, 250);

-- --------------------------------------------------------

--
-- Table structure for table `papercraft`
--

CREATE TABLE `papercraft` (
  `id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `code` varchar(200) NOT NULL,
  `price` int(255) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `papercraft`
--

INSERT INTO `papercraft` (`id`, `name`, `code`, `price`, `Category`, `image`) VALUES
(1, 'A4 Color Paper', 'a4colorpaper01', 10, 'Paper Craft', 'image/Color Paper.jpg'),
(2, 'Color Paper Mats', 'colorpapermats01', 50, 'Paper Craft', 'image/ColorPaperMats.jpg'),
(3, 'Scrap Book Paper', 'scrapbookpaper01', 50, 'Paper Craft', 'image/ScrapBookPaper.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `stampcraft`
--

CREATE TABLE `stampcraft` (
  `id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `code` varchar(200) NOT NULL,
  `price` int(255) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stampcraft`
--

INSERT INTO `stampcraft` (`id`, `name`, `code`, `price`, `Category`, `image`) VALUES
(1, 'Flower Stamp', 'flowerstamp01', 100, 'Stamp Craft', 'image/FlowerStamp.jpg'),
(2, 'Leaf Stamp', 'leafstamp01', 100, 'Stamp Craft', 'image/Leaf Stamp.jpg'),
(3, 'Word Stamp', 'wordstamp01', 100, 'Stamp Craft', 'image/WordStamp.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artcraft`
--
ALTER TABLE `artcraft`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `papercraft`
--
ALTER TABLE `papercraft`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stampcraft`
--
ALTER TABLE `stampcraft`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artcraft`
--
ALTER TABLE `artcraft`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `papercraft`
--
ALTER TABLE `papercraft`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stampcraft`
--
ALTER TABLE `stampcraft`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
