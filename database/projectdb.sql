-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2018 at 04:04 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `askus`
--

CREATE TABLE `askus` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `askus`
--

INSERT INTO `askus` (`name`, `email`, `subject`, `message`) VALUES
('Devanshu', 'devanshu219@gmail.com', 'Hello', 'Trial 123'),
('', '', '', 'hello my name ij kamlesss i am a ggood boy SOLUCHAN');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`email`) VALUES
(''),
('8aayush@gmail.com'),
('devanshu219@gmail.com'),
('devanshugadani@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` bigint(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uname`, `pass`, `fname`, `lname`, `email`, `contact`) VALUES
('devanshu219', 'Dgadani3', 'Devanshu', 'Gadani', 'devanshugadani@gmail.com', 9727711221),
('abc', '1234', 'a', 'b', 'dev@123.com', 9721234561),
('ok', '123', 'ak', 'ch', 'bh@ok.com', 123456789),
('hell', '1234', 'ke', 'na', 'ap@bp.com', 7894561230),
('dev', '123', 'Deva', 'Gad', 'dev@gmail.com', 9727711221),
('parth', '123456', 'gvghgv', 'jkhkj', 'hhjhbj@gyg.com', 1234567890);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `askus`
--
ALTER TABLE `askus`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uname`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
