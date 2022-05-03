-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2022 at 04:34 AM
-- Server version: 8.0.21
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab_8_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `year` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `genre` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `name`, `year`, `genre`) VALUES
(1, 'Winter in Wartime', '1969', 'Drama|War'),
(2, 'The Diary of Anne Frank', '2007', 'Drama|War'),
(3, 'Date and Switch', '2008', 'Comedy'),
(4, 'Midnight in the Garden of Good and Evil', '2006', 'Crime|Drama|Mystery'),
(5, 'Jesse Stone: Thin Ice', '1996', 'Crime|Drama|Mystery'),
(6, 'North', '2001', 'Comedy'),
(7, 'Brick Mansions', '2010', 'Action|Crime|Drama'),
(8, 'Blade, The (Dao)', '2010', 'Action|Drama'),
(10, 'Theory of Flight, The', '2004', 'Comedy|Drama|Romance'),
(11, 'White Sound, The (Das weiße Rauschen)', '1996', 'Drama'),
(12, 'Brother of Sleep (Schlafes Bruder)', '1984', 'Drama'),
(13, 'Holly', '1986', 'Drama'),
(14, 'Troll in Central Park, A', '1986', 'Animation|Children'),
(15, 'Better Way to Die, A', '2006', 'Action|Thriller'),
(16, 'Billabong Odyssey', '1992', 'Documentary'),
(17, 'Ragtime', '2008', 'Drama'),
(18, 'Lethal Weapon 3', '1995', 'Action|Comedy|Crime|Drama'),
(19, 'Miss Bala', '1997', 'Action|Adventure|Drama|Thriller'),
(20, 'Kingdom, The (Riget)', '2000', 'Drama|Horror|Mystery'),
(21, 'Vuonna 85', '2011', 'Comedy'),
(22, 'Jekyll & Hyde', '2004', 'Horror'),
(23, 'This Property is Condemned', '1980', 'Drama|Romance'),
(24, 'Open Season', '1993', 'Comedy'),
(25, 'Eye of Vichy, The (Oeil de Vichy, L\')', '2005', 'Documentary'),
(26, 'Wrestling Ernest Hemingway', '2003', 'Drama|Romance'),
(27, 'Bad Country', '2009', 'Action|Crime|Drama|Thriller'),
(28, 'Last Godfather, The', '2003', 'Comedy'),
(29, 'As Cool As I Am', '1998', 'Comedy|Drama'),
(30, 'Noise', '2009', 'Comedy|Drama'),
(31, 'Warsaw Bridge (Pont de Varsòvia)', '1993', '(no genres listed)'),
(32, 'Mark of the Vampire', '1999', 'Horror|Mystery'),
(33, 'Two Moon Junction', '1995', 'Drama|Romance'),
(34, 'Cookout, The', '2011', 'Comedy'),
(35, 'Three Faces East', '2006', 'Drama|Mystery|War'),
(36, 'We Were Here', '2007', 'Documentary'),
(38, '3 dev adam (Three Giant Men) ', '1993', 'Action|Adventure|Sci-Fi'),
(39, 'Tinker Bell and the Lost Treasure', '1990', 'Adventure|Animation|Children|Fantasy'),
(40, '9 1/2 Weeks (Nine 1/2 Weeks)', '1975', 'Drama|Romance'),
(41, 'Hanging Tree, The', '1996', 'Drama|Romance|Western'),
(42, 'Village of the Damned', '2011', 'Horror|Sci-Fi'),
(43, 'Everyone Says I Love You', '1998', 'Comedy|Musical|Romance'),
(44, 'Chasing Beauty', '1987', 'Documentary'),
(45, 'Galician Caress (Of Clay)', '2010', 'Documentary'),
(46, 'Super Duper Alice Cooper', '2004', 'Documentary'),
(47, 'Control', '2000', 'Drama'),
(48, 'Plutonium Circus', '1995', 'Documentary'),
(49, 'Winning of Barbara Worth, The', '2002', 'Drama|Romance|Western'),
(51, 'Suite Française', '2002', 'Drama|Romance|War');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
