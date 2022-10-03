-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2022 at 09:26 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `synopsis` varchar(500) NOT NULL,
  `image` varchar(45) NOT NULL,
  `genre_type_id` int(11) NOT NULL,
  `year` varchar(4) NOT NULL,
  `director` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `synopsis`, `image`, `genre_type_id`, `year`, `director`) VALUES
(1, 'One day', 'sinopsis de one day (2011)', 'imagen_one_day.jpg', 2, '2011', 'Lone Scherfig'),
(2, 'Star Wars Episode IV', 'sinopsis de star wars', 'imagen_star_wars.jpg', 4, '1977', 'George Lucas'),
(3, 'Eternal Sunshine of the Spotless Mind', 'sinopsis de esotsm', 'imagen_esotsm.jpg', 2, '2004', 'Michel Gondry'),
(4, 'Me before you', 'sinopsis de me before you', 'imagen_me_before_you.jpg', 2, '2016', 'Thea Sharrock'),
(5, 'The Notebook', 'sinopsis de the notebook', 'imagen_the_notebook.jpg', 2, '2004', 'Nick Cassavetes'),
(6, 'Terminator II', 'sinopsis terminator 2', 'imagen_terminator2.jpg', 5, '1991', 'James Cameron'),
(7, 'White chicks', 'sinopsis donde estan las rubias', 'imagen_white_chicks.jpg', 3, '2004', 'Keenen Ivory Wayans'),
(8, 'The Shining', 'sinopsis shining', 'image_shining.jpg', 6, '1980', 'Stanley Kubrick'),
(9, 'The Godfather', 'sinopsis el padrino', 'imagen_padrino.jpg', 7, '1972', 'Francis Ford Coppola');

-- --------------------------------------------------------

--
-- Table structure for table `movie_type`
--

CREATE TABLE `movie_type` (
  `id` int(11) NOT NULL,
  `genre` varchar(45) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie_type`
--

INSERT INTO `movie_type` (`id`, `genre`, `description`) VALUES
(2, 'Romance', 'romance description'),
(3, 'Comedy', 'comedy description'),
(4, 'Science Fiction', 'Science Fiction description'),
(5, 'Action', 'action description'),
(6, 'Horror', 'horror description'),
(7, 'Drama', 'descripcion genero drama');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_movies_movie_type_id` (`genre_type_id`);

--
-- Indexes for table `movie_type`
--
ALTER TABLE `movie_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `movie_type`
--
ALTER TABLE `movie_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `fk_movies_movie_type_id` FOREIGN KEY (`genre_type_id`) REFERENCES `movie_type` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
