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
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `suggestion`
--

CREATE TABLE `suggestion` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suggestion`
--

INSERT INTO `suggestion` (`name`, `email`, `phone`, `msg`) VALUES
('Maha Prince', 'alammahabub257@yahoo.com', 8801521326952, 'abc'),
('Maha Prince', 'alammahabub257@yahoo.com', 8801521326952, 'abc'),
('Maha Prince', 'alammahabub257@yahoo.com', 8801521326952, 'abc'),
('Maha Prince', 'alammahabub257@yahoo.com', 8801521326952, 'abc'),
('Maha Prince', 'alammahabub257@yahoo.com', 8801521326952, 'abc'),
('Maha Prince', 'alammahabub257@yahoo.com', 8801521326952, 'abc'),
('Maha Prince', 'alammahabub257@yahoo.com', 8801521326952, 'abc'),
('Maha Prince', 'alammahabub257@yahoo.com', 8801521326952, 'abc'),
('Maha Prince', 'alammahabub257@yahoo.com', 8801521326952, 'abc'),
('Maha Prince', 'alammahabub257@yahoo.com', 8801521326952, 'abc'),
('Maha Prince', 'alammahabub257@yahoo.com', 8801521326952, 'abc'),
('Alam', 'mahabub.alam01@northsouth.edu', 8801521326952, 'nice'),
('Maha Prince', 'mahabubalam532@gmail.com', 8801521326952, 'GOOD'),
('Jannatul Tuba', 'jannatul.tuba@gmail.com', 1234, 'good work'),
('Jannatul ', 'jannatul.tuba@gmail.com', 1234, 'great');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `phone`, `address`) VALUES
(1, 'alammahabub257', 'alammahabub257@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 0, ''),
(2, 'alammahabub257', 'mahabubalam532@gmail.com', '735b90b4568125ed6c3f678819b6e058', 0, ''),
(3, 'ABC', 'mahabub.alam01@northsouth.edu', '202cb962ac59075b964b07152d234b70', 0, ''),
(4, 'mm', 'm@gmail.com', '123', 152132, ''),
(5, 'new', 'new@gmail.com', '202cb962ac59075b964b07152d234b70', 1521326952, ''),
(6, 'alammahabub257', 'samratshovon@gmail.com', '202cb962ac59075b964b07152d234b70', 1521326952, ''),
(7, 'Mahabub32', 'alammahabub257@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 8801521326952, ''),
(8, 'AAAAA', 'mahabubalam532@gmail.com', '202cb962ac59075b964b07152d234b70', 1521326952, ''),
(9, 'Mahabub Alam', 'mahabubalam532@gmail.com', 'd13d187e2fb588f8f1b66addee18e25b', 8801521326952, ''),
(10, 'abc', 'mahabubalam532@gmail.com', '202cb962ac59075b964b07152d234b70', 8801521326952, 'ccccccccccccccccccccc'),
(11, 'tuba', 'jannatul.tuba19@gmail.com', '202cb962ac59075b964b07152d234b70', 1234, 'abc'),
(12, 'Tuba', 'jannatul@gmail.com', '202cb962ac59075b964b07152d234b70', 123, 'Mirpur'),
(13, 'Jannatul Tuba', 'jannatul@gmail.com', '202cb962ac59075b964b07152d234b70', 123456789, 'Mirpur'),
(14, 'Tuba', 'jannatul.tuba@gmail.com', '202cb962ac59075b964b07152d234b70', 1234, 'Mirpur'),
(15, 'Jt', 'jannatul@gmail.com', '202cb962ac59075b964b07152d234b70', 1234, 'Mirpur'),
(16, 'Nabila', 'nabila@gmail.com', '202cb962ac59075b964b07152d234b70', 1234, 'Mirpur'),
(17, 'abc', 'jannatul.tuba19@gmail.com', '202cb962ac59075b964b07152d234b70', 123, 'Mirpur'),
(18, 'zzz', 'jannatul.tuba17122@gmail.com', '202cb962ac59075b964b07152d234b70', 123, 'Mirpur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
