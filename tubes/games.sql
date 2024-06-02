-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 27, 2024 at 01:24 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw2024_tubes_233040049`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int NOT NULL,
  `image` varchar(255) NOT NULL,
  `nama_game` varchar(255) NOT NULL,
  `rilis` varchar(255) NOT NULL,
  `size` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `image`, `nama_game`, `rilis`, `size`) VALUES
(1, 'ML.jpg', 'MOBILE LEGENDS', '14 Juli 2016', '323,4 MB'),
(2, 'PUBG.jpg', 'PUBG MOBILE', '19 Maret 2018', '3,02 GB'),
(3, 'FREEFIRE.jpg', 'FREE FIRE', '4 Desember 2017', '1,46 GB'),
(4, 'CLASHOFCLANS.jpg', 'CLASH OF CLANS', '2 Agustus 2012', '300 MB'),
(5, 'BRAWLSTARS.jpg', 'BRAWL STARS', '15 Juni 2017', '1,07 GB'),
(6, 'GENSHINIMPACT.jpg', 'GENSHIN IMPACT', '28 September 2020', '2,66 GB'),
(7, 'AOV.jpg', 'ARENA OF VALOR', '12 Oktober 2016', '308,9 MB'),
(8, 'LOL.jpg', 'LEAGUE OF LEGENDS', '27 Oktober 2009', '3,05 GB'),
(9, 'VALORANT.jpg', 'VALORANT', '2 Juni 2020', '7,02 GB');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
