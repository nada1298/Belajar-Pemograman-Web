-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 15, 2020 at 06:19 AM
-- Server version: 8.0.19
-- PHP Version: 7.4.4RC1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_toko`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int NOT NULL,
  `cat_name` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `cat_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `cat_created` datetime NOT NULL,
  `cat_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `cat_description`, `cat_created`, `cat_modified`) VALUES
(1, 'Pakaian', 'Katergori pakaian, baju dll', '2018-08-01 01:02:03', '2018-08-01 02:02:03'),
(2, 'Elektronik', 'HP, Tablet, Laptop, dll', '2018-08-01 01:02:03', '2018-08-01 02:02:03'),
(3, 'Buku Komputer', 'Kategori BUku Komputer', '2018-08-01 01:02:03', '2018-08-01 02:02:03'),
(4, 'Film', 'Kategori film, romance, horror dll', '2018-08-01 01:02:03', '2018-08-01 02:02:03'),
(5, 'Buku Sejarah', 'Kategori Buku Sejarah', '2018-08-01 01:02:03', '2018-08-01 02:02:03'),
(6, 'Olahraga', 'Kategori Olahraga', '2018-08-01 01:02:03', '2018-08-01 02:02:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
