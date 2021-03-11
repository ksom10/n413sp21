-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 16, 2021 at 01:01 PM
-- Server version: 10.3.25-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasome_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `n413_list`
--

CREATE TABLE `n413_list` (
  `id` int(11) NOT NULL,
  `item` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `n413_list`
--

INSERT INTO `n413_list` (`id`, `item`, `description`, `image`) VALUES
(1, 'Indiana Pacers', 'The Indiana Pacers are an American professional basketball team based in Indianapolis. The Pacers compete in the National Basketball Association as a member of the league\'s Eastern Conference Central Division', 'pacers.jpg'),
(2, 'Los Angeles Lakers', 'The Los Angeles Lakers are an American professional basketball team based in Los Angeles. The Lakers compete in the National Basketball Association as a member of the league\'s Western Conference Pacific Division.', 'lakers.jpg'),
(3, 'Miami Heat', 'The Miami Heat are an American professional basketball team based in Miami. The Heat compete in the National Basketball Association as a member of the league\'s Eastern Conference Southeast Division. The club plays its home games at American Airlines Arena, and has won three NBA championships', 'heat.jpg'),
(4, 'Utah Jazz', 'The Utah Jazz are an American professional basketball team based in Salt Lake City. The Jazz compete in the National Basketball Association as a member of the league\'s Western Conference, Northwest Division. Since 1991, the team has played its home games at Vivint Smart Home Arena.', 'jazz.jpg'),
(5, 'Denver Nuggets', 'The Denver Nuggets are an American professional basketball team based in Denver. The Nuggets compete in the National Basketball Association as a member of the league\'s Western Conference Northwest Division.', 'nuggets.jpg'),
(6, 'Boston Celtics', 'The Boston Celtics are an American professional basketball team based in Boston. The Celtics compete in the National Basketball Association as a member of the league\'s Eastern Conference Atlantic Division.', 'celtics.jpg'),
(7, 'Golden State Warriors', 'The Golden State Warriors are an American professional basketball team based in San Francisco. The Warriors compete in the National Basketball Association, as a member of the league\'s Western Conference Pacific Division.', 'warriors.jpg'),
(8, 'Brooklyn Nets', 'The Brooklyn Nets are an American professional basketball team based in the New York City borough of Brooklyn. The Nets compete in the National Basketball Association as a member of the Atlantic Division of the Eastern Conference. The team plays its home games at Barclays Center. ', 'nets.jpg'),
(9, 'New York Knicks', 'The New York Knickerbockers, more commonly referred to as the New York Knicks, are an American professional basketball team based in the New York City borough of Manhattan. The Knicks compete in the National Basketball Association as a member of the Atlantic Division of the Eastern Conference.', 'knicks.jpg'),
(10, 'Houston Rockets', 'The Houston Rockets are an American professional basketball team based in Houston. The Rockets compete in the National Basketball Association as a member team of the league\'s Western Conference Southwest Division. The team plays its home games at the Toyota Center, located in Downtown Houston. ', 'rockets.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `n413_list`
--
ALTER TABLE `n413_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `n413_list`
--
ALTER TABLE `n413_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
