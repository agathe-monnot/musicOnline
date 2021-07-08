-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 07, 2021 at 10:30 AM
-- Server version: 8.0.18
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `music_library`
--

DROP TABLE IF EXISTS `music_library`;
CREATE TABLE `music_library` (
  `id` int(3) NOT NULL,
  `artist` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `album` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `genre` varchar(30) DEFAULT NULL,
  `albumCover` varchar(50) DEFAULT NULL,
  `play` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `music_library`
--

INSERT INTO `music_library` (`id`, `artist`, `album`, `year`, `genre`, `albumCover`, `play`) VALUES
(1, 'Chelsea Wolfe', 'Birth Of Violence', 2019, 'gothic rock', 'media/chelsea-wolfe.jpg', 'music/chelsea-wolfe.mp3'),
(2, 'Yasmine Hamdan', 'Ya Nass', 2013, 'alternative music', 'media/yasmine-hamdan.jpg', 'music/yasmine-hamdan.mp3'),
(3, 'A Perfect Circle', 'Eat The Elephant', 2018, 'rock', 'media/a-perfect-circle.jpg', 'music/a-perfect-circle.mp3'),
(4, 'Cigarettes After Sex', 'Cigarettes After Sex', 2017, 'alternative music', 'media/cigarettes-after-sex.jpg', 'music/cigarettes-after-sex.mp3'),
(5, 'Mark Lanegan', 'Blues Funeral', 2012, 'alternative music', 'media/mark-lanegan.jpg', 'music/mark-lanegan.mp3'),
(6, 'Nick Cave & The Bad Seeds', 'The Boatman\'s Call', 1997, 'rock', 'media/nick-cave.jpg', 'music/nick-cave.mp3'),
(7, 'Pearl Jam', 'Ten', 1991, 'grunge / rock', 'media/pearl-jam.jpg', 'music/pearl-jam.mp3'),
(8, 'PJ Harvey', 'Dry', 1992, 'rock', 'media/pj-harvey.jpg', 'music/pj-harvey.mp3'),
(9, 'Temple Of The Dog', 'Temple Of The Dog', 1990, 'rock', 'media/temple-of-the-dog.jpg', 'music/temple-of-the-dog.mp3'),
(10, 'Sisters Of Mercy', 'First and Last and Always', 1985, 'gothic rock', 'media/sisters-of-mercy.jpg', 'music/sisters-of-mercy.mp3'),
(11, 'Linkin Park', 'One More Light', 2017, 'pop rock', 'media/linkin-park.jpg', 'music/linkin-park.mp3'),
(12, 'Elliott Smith', 'Either/Or', 1997, 'folk rock', 'media/elliott-smith.jpg', 'music/elliott-smith.mp3'),
(13, 'Cat Power', 'You Are Free', 2003, 'folk rock', 'media/cat-power.jpeg', 'music/cat-power.mp3'),
(14, 'Eagle-Eye Cherry', 'Desireless', 1998, 'folk', 'media/eagle-eye-cherry.jpg', 'music/eagle-eye-cherry.mp3'),
(15, 'Moby', 'Everything Was Beautiful, And Nothing Hurt', 2018, 'electronic music', 'media/moby.jpg', 'music/moby.mp3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `music_library`
--
ALTER TABLE `music_library`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
