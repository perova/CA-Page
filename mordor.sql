-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2017 at 02:23 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mordor`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `name`, `link`) VALUES
(1, 'Biker LT', 'http://www.biker.lt/'),
(2, 'Biker KISS', 'https://www.bikerkiss.com/'),
(3, 'Biker LT', 'http://www.biker.lt/'),
(4, 'Biker KISS', 'https://www.bikerkiss.com/'),
(5, 'Motorcycles', 'https://motorcycles.autotrader.com/'),
(6, 'Motorcycles', 'https://motorcycles.autotrader.com/');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `text`, `date`) VALUES
(1, 'Christopher Doe', 'Numquam eius modi tempora incidunt ut labore et dolore mag nam aliquam quaerat voluptatem. Lorem ipsum\r\n                                                        dolor sit amet consectet adipisicing elit sed do eiusmod tempor incididunt.', '2017-11-15 12:43:54'),
(2, 'Angela Hill', 'Numquam eius modi tempora incidunt ut labore et dolore mag nam aliquam quaerat voluptatem. Lorem ipsum\r\n                                                        dolor sit amet consectet adipisicing elit sed do eiusmod tempor incididunt.', '2017-11-15 12:43:54'),
(3, 'Christopher Doe', 'Numquam eius modi tempora incidunt ut labore et dolore mag nam aliquam quaerat voluptatem. Lorem ipsum\r\n                                                        dolor sit amet consectet adipisicing elit sed do eiusmod tempor incididunt.', '2017-11-15 12:43:56'),
(4, 'Angela Hill', 'Numquam eius modi tempora incidunt ut labore et dolore mag nam aliquam quaerat voluptatem. Lorem ipsum\r\n                                                        dolor sit amet consectet adipisicing elit sed do eiusmod tempor incididunt.', '2017-11-15 12:43:56');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `slug` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `body`, `slug`) VALUES
(5, 'Home', 'welcome to our website!', 'Home'),
(6, 'Contacts', 'Nullam ac velit. Fusce consequat ipsum non ipsum. Nam ullamcorper ipsum quis erat. Aliquam non elit. In vitae dui sagittis cursus. Duis convallis rutrum mauris. Maecenas eu neque lacinia.', 'Contacts'),
(9, 'Service', 'none', 'service');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `date`) VALUES
(1, 'First blog', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled ', '2017-11-14 14:46:02'),
(2, 'Second Blog', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled ', '2017-11-14 14:46:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
