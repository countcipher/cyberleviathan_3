-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2019 at 04:41 AM
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
-- Database: `trident`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `name` varchar(225) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(225) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `date`, `name`, `phone`, `email`, `message`) VALUES
(19, '10/15/2019', 'Christopher Harlow', '5409750803', 'chrisharlow366@yahoo.com', 'hello, world!'),
(20, '10/15/2019', 'Mushin', '(555)477-2309', 'jharlow7719@gmail.com', 'Mushin loves dis Pooks!  Didn\'t you know?'),
(23, '09/05/2019', 'Simon Sez', '014.996.2281', 'simon_sez@deathrowrecords.com', 'I be straight up, G!'),
(26, '10/16/2019', 'Battle Whale', '555-0182', 'battlewhale@mtg.com', 'I love being Battle Whale! ... \r\nAnd eating shrimpies!!'),
(27, '10/16/2019', 'Arthur Flek', '540.975.0803', '', 'I am not the Joker... OK, yes I am!!!!'),
(28, '10/16/2019', 'William Wallace', '540-975-0803', 'williamwallace@hotmail.com', 'I am here to stop the English for the sake of Scottland!!!!');

-- --------------------------------------------------------

--
-- Table structure for table `contacts_filter`
--

CREATE TABLE `contacts_filter` (
  `id` int(11) NOT NULL,
  `filter` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts_filter`
--

INSERT INTO `contacts_filter` (`id`, `filter`) VALUES
(1, 'name');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `email`, `role`) VALUES
(61, 'admin', 'admin', 'Admin', 'charlow@cyberleviathan.com', 2),
(62, 'editor', 'editor', 'Editor Van Halen', 'edit@cyberleviathan.com', 1),
(63, 'Baby Shrimp', 'dodo', ' Mushin', 'chrisharlow366@yahoo.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts_filter`
--
ALTER TABLE `contacts_filter`
  ADD PRIMARY KEY (`filter`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
