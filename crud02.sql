-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2019 at 04:22 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud02`
--

-- --------------------------------------------------------

--
-- Table structure for table `data02`
--

CREATE TABLE `data02` (
  `id` int(10) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `age` int(10) NOT NULL,
  `location` varchar(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data02`
--

INSERT INTO `data02` (`id`, `fname`, `lname`, `email`, `age`, `location`, `date`) VALUES
(29, 'Zeshan', 'Ahmed', 'zeshan@gmail.com', 25, 'Sialkot', '2019-07-16 16:24:14'),
(31, 'Usman', 'Ghani', 'usmanghani.uol@gmail.com', 26, 'Lahore', '2019-07-16 16:25:23'),
(32, 'Umar', 'Farooq', 'umar@gmail.com', 26, 'Multan', '2019-07-16 16:27:44'),
(41, 'Khawar', 'Ali', 'khawar@gmail.com', 28, 'Lahore', '2019-07-21 19:09:03');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `name` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `password`) VALUES
('Awais', '123456'),
('Hashim', '123456'),
('Khawar', '123456'),
('Saad', '123456'),
('Salman', '123456'),
('Umer', '123456'),
('Usman', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data02`
--
ALTER TABLE `data02`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data02`
--
ALTER TABLE `data02`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
