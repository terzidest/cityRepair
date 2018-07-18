-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2016 at 01:28 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_ID` int(11) NOT NULL,
  `post_category` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `post_title` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `post_content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `post_image` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `post_date` text COLLATE utf8_unicode_ci NOT NULL,
  `post_lat` double NOT NULL,
  `post_lng` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_ID`, `post_category`, `post_title`, `post_content`, `post_image`, `post_date`, `post_lat`, `post_lng`) VALUES
(64, 'Οδικα', 'Λακούβα στο δρόμο', 'Ο Δρόμος στην Αλκαίου 15 Αθήνα έχει λακούβες', '15.jpg', '2016-11-07', 37.977818, 23.756906),
(65, 'Πλημμυρες', 'Πλυμμυρισμένο Φρεάτυο', 'Εχει σπάσει το φρεάτυο στην Νυμφαίου 20, Αθήνα', '16.jpg', '2016-11-08', 37.977644, 23.758314),
(66, 'Οδικα', 'Σπασμένος κάδος', 'Ο κάδος είναι σπασμένος στην Σταδίου 20, Αθήνα', '2.jpg', '2016-11-04', 37.97841, 23.733503),
(67, 'Πλημμυρες', 'Πλημμυρισμένος δρόμος', 'έχει πλημμυρίσει ο δρόμος στην Μιχαλακοπούλου 130, Αθήνα', '5.jpg', '2016-11-08', 37.981973, 23.760851),
(68, 'Φωτισμου', 'Καμμένη λάμπα', 'Η λάμπα είναι καμμένη στην Πανεπιστημίου 70, Αθήνα', '7.jpg', '2016-11-17', 37.983956, 23.729129),
(69, 'Οδικα', 'Χαλασμένος δρόμος', 'Ο δρόμος στην οδό Ιλισίων 15, Αθήνα έχει χαλάσει', '1.jpg', '2016-11-12', 37.979158, 23.758274),
(70, 'Προσβασης', 'Πεζοδρόμια με σπασμένα πλακάκια', 'Τα πλακάκια στο πεζοδρόμιο στην Ευελπίδων 45, Αθήνα έχουν ξεκολλήσει', '10.jpg', '2016-11-20', 37.995869, 23.739269);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
