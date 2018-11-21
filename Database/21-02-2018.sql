-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 20, 2018 at 07:25 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id4636098_cricket`
--

-- --------------------------------------------------------

--
-- Table structure for table `2daybatting_statistics`
--

CREATE TABLE `2daybatting_statistics` (
  `Reg_no` varchar(20) NOT NULL,
  `Matches` int(11) DEFAULT NULL,
  `Runs` int(11) DEFAULT NULL,
  `Most` int(11) DEFAULT NULL,
  `Average` float DEFAULT NULL,
  `Hundreds` int(11) DEFAULT NULL,
  `Fifties` int(11) DEFAULT NULL,
  `one` int(11) DEFAULT NULL,
  `two` int(11) DEFAULT NULL,
  `three` int(11) DEFAULT NULL,
  `four` int(11) DEFAULT NULL,
  `five` int(11) DEFAULT NULL,
  `six` int(11) DEFAULT NULL,
  `seven` int(11) DEFAULT NULL,
  `eight` int(11) DEFAULT NULL,
  `nine` int(11) DEFAULT NULL,
  `ten` int(11) DEFAULT NULL,
  `eleven` int(11) DEFAULT NULL,
  `Bowled` int(11) DEFAULT NULL,
  `Caught` int(11) DEFAULT NULL,
  `LBW` int(11) DEFAULT NULL,
  `Runout` int(11) DEFAULT NULL,
  `Stumped` int(11) DEFAULT NULL,
  `Hitwicket` int(11) DEFAULT NULL,
  `Notout` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2daybatting_statistics`
--

INSERT INTO `2daybatting_statistics` (`Reg_no`, `Matches`, `Runs`, `Most`, `Average`, `Hundreds`, `Fifties`, `one`, `two`, `three`, `four`, `five`, `six`, `seven`, `eight`, `nine`, `ten`, `eleven`, `Bowled`, `Caught`, `LBW`, `Runout`, `Stumped`, `Hitwicket`, `Notout`) VALUES
('e14243', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('e14039', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('e14380', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('e14234', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('e15083', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('e15399', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('e14048', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('e14283', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('s13903', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('s15532', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('s13809', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('s14588', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('mng13000', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('e13096', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('e13282', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('m14148', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('s15918', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('ag14212', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('a14ai976', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('a14ai980', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('s16000', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('e15408', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('a14000', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('s16001', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('s16002', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('e15066', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('ag13000', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('e15000', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('s16003', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('s16004', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('s14000', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('mng15000', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('e15001', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('e14254', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `2daybowling_statistics`
--

CREATE TABLE `2daybowling_statistics` (
  `Reg_no` varchar(20) NOT NULL,
  `Matches` int(11) DEFAULT NULL,
  `Overs` float DEFAULT NULL,
  `Wickets` int(11) DEFAULT NULL,
  `Runs` int(11) DEFAULT NULL,
  `Econ` float DEFAULT NULL,
  `Average` float DEFAULT NULL,
  `Five_wickets` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2daybowling_statistics`
--

INSERT INTO `2daybowling_statistics` (`Reg_no`, `Matches`, `Overs`, `Wickets`, `Runs`, `Econ`, `Average`, `Five_wickets`) VALUES
('e14380', 0, 0, 0, 0, 0, 0, 0),
('e14039', 0, 0, 0, 0, 0, 0, 0),
('e14243', 0, 0, 0, 0, 0, 0, 0),
('e14234', 0, 0, 0, 0, 0, 0, 0),
('e15083', 0, 0, 0, 0, 0, 0, 0),
('e15399', 0, 0, 0, 0, 0, 0, 0),
('e14048', 0, 0, 0, 0, 0, 0, 0),
('e14283', 0, 0, 0, 0, 0, 0, 0),
('s13903', 0, 0, 0, 0, 0, 0, 0),
('s15532', 0, 0, 0, 0, 0, 0, 0),
('s13809', 0, 0, 0, 0, 0, 0, 0),
('s14588', 0, 0, 0, 0, 0, 0, 0),
('mng13000', 0, 0, 0, 0, 0, 0, 0),
('e13096', 0, 0, 0, 0, 0, 0, 0),
('e13282', 0, 0, 0, 0, 0, 0, 0),
('m14148', 0, 0, 0, 0, 0, 0, 0),
('s15918', 0, 0, 0, 0, 0, 0, 0),
('ag14212', 0, 0, 0, 0, 0, 0, 0),
('a14ai976', 0, 0, 0, 0, 0, 0, 0),
('a14ai980', 0, 0, 0, 0, 0, 0, 0),
('s16000', 0, 0, 0, 0, 0, 0, 0),
('e15408', 0, 0, 0, 0, 0, 0, 0),
('a14000', 0, 0, 0, 0, 0, 0, 0),
('s16001', 0, 0, 0, 0, 0, 0, 0),
('s16002', 0, 0, 0, 0, 0, 0, 0),
('e15066', 0, 0, 0, 0, 0, 0, 0),
('ag13000', 0, 0, 0, 0, 0, 0, 0),
('e15000', 0, 0, 0, 0, 0, 0, 0),
('s16003', 0, 0, 0, 0, 0, 0, 0),
('s16004', 0, 0, 0, 0, 0, 0, 0),
('s14000', 0, 0, 0, 0, 0, 0, 0),
('mng15000', 0, 0, 0, 0, 0, 0, 0),
('e15001', 0, 0, 0, 0, 0, 0, 0),
('e14254', 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `batting_statistics`
--

CREATE TABLE `batting_statistics` (
  `Reg_no` varchar(20) NOT NULL,
  `Matches` int(11) DEFAULT NULL,
  `Runs` int(11) DEFAULT NULL,
  `Most` int(11) DEFAULT NULL,
  `Average` float DEFAULT NULL,
  `Hundreds` int(11) DEFAULT NULL,
  `Fifties` int(11) DEFAULT NULL,
  `one` int(11) DEFAULT NULL,
  `two` int(11) DEFAULT NULL,
  `three` int(11) DEFAULT NULL,
  `four` int(11) DEFAULT NULL,
  `five` int(11) DEFAULT NULL,
  `six` int(11) DEFAULT NULL,
  `seven` int(11) DEFAULT NULL,
  `eight` int(11) DEFAULT NULL,
  `nine` int(11) DEFAULT NULL,
  `ten` int(11) DEFAULT NULL,
  `eleven` int(11) DEFAULT NULL,
  `Bowled` int(11) DEFAULT NULL,
  `Caught` int(11) DEFAULT NULL,
  `LBW` int(11) DEFAULT NULL,
  `Runout` int(11) DEFAULT NULL,
  `Stumped` int(11) DEFAULT NULL,
  `Hitwicket` int(11) DEFAULT NULL,
  `Notout` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batting_statistics`
--

INSERT INTO `batting_statistics` (`Reg_no`, `Matches`, `Runs`, `Most`, `Average`, `Hundreds`, `Fifties`, `one`, `two`, `three`, `four`, `five`, `six`, `seven`, `eight`, `nine`, `ten`, `eleven`, `Bowled`, `Caught`, `LBW`, `Runout`, `Stumped`, `Hitwicket`, `Notout`) VALUES
('e14243', 3, 40, 17, 20, 0, 0, 0, 0, 0, 0, 0, 17, 8, 0, 0, 0, 15, 0, 2, 0, 0, 0, 0, 1),
('e14039', 2, 33, 23, 33, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10, 23, 0, 0, 0, 1, 0, 0, 0, 0, 1),
('e14380', 1, 10, 10, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10, 0, 1, 0, 0, 0, 0, 0, 0),
('e14234', 4, 162, 74, 40.5, 0, 2, 0, 74, 88, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 1, 0, 0, 0),
('e15083', 3, 17, 13, 5.6667, 0, 0, 17, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2, 0, 0, 0, 0, 0),
('e15399', 2, 29, 29, 29, 0, 0, 0, 0, 0, 29, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1),
('e14048', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('e14283', 2, 6, 6, 3, 0, 0, 0, 0, 0, 6, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0),
('s13903', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0),
('s15532', 4, 249, 200, 83, 1, 0, 201, 48, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 1, 0, 0, 0, 0, 1),
('s13809', 2, 3, 3, 1.5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0),
('s14588', 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0),
('mng13000', 2, 54, 38, 27, 0, 0, 0, 0, 0, 0, 0, 0, 38, 16, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0),
('e13096', 2, 33, 30, 16.5, 0, 0, 0, 0, 0, 3, 30, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0),
('e13282', 1, 42, 42, 42, 0, 0, 0, 0, 0, 0, 0, 0, 42, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0),
('m14148', 2, 161, 94, 80.5, 0, 2, 0, 0, 0, 161, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0),
('s15918', 3, 92, 42, 30.6667, 0, 0, 0, 0, 0, 32, 60, 0, 0, 0, 0, 0, 0, 0, 2, 1, 0, 0, 0, 0),
('ag14212', 3, 177, 113, 86.5, 1, 1, 0, 0, 0, 0, 0, 165, 12, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 1),
('a14ai976', 4, 106, 56, 53, 0, 1, 0, 0, 40, 56, 0, 10, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 2),
('a14ai980', 4, 94, 50, 94, 0, 1, 0, 0, 50, 0, 38, 5, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 3),
('s16000', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('e15066', 3, 28, 20, 9.33333, 0, 0, 0, 8, 0, 0, 20, 0, 0, 0, 0, 0, 0, 0, 2, 1, 0, 0, 0, 0),
('e15408', 1, 2, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 1, 0, 0, 0, 0, 0, 0),
('ag13000', 1, 6, 6, 6, 0, 0, 0, 0, 0, 0, 6, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0),
('s16001', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('s16002', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('a14000', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('e15000', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('s16003', 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0),
('s16004', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('s14000', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
('mng15000', 2, 29, 16, 14.5, 0, 0, 29, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0),
('e15001', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0),
('e14254', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bowling_statistics`
--

CREATE TABLE `bowling_statistics` (
  `Reg_no` varchar(20) NOT NULL,
  `Matches` int(11) DEFAULT NULL,
  `Overs` float DEFAULT NULL,
  `Wickets` int(11) DEFAULT NULL,
  `Runs` int(11) DEFAULT NULL,
  `Econ` float DEFAULT NULL,
  `Average` float DEFAULT NULL,
  `Five_wickets` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bowling_statistics`
--

INSERT INTO `bowling_statistics` (`Reg_no`, `Matches`, `Overs`, `Wickets`, `Runs`, `Econ`, `Average`, `Five_wickets`) VALUES
('e14380', 1, 3, 1, 12, 4, 12, 0),
('e14039', 2, 10, 1, 60, 6, 60, 0),
('e14243', 2, 5, 0, 52, 10.4, 0, 0),
('e14234', 0, 0, 0, 0, 0, 0, 0),
('e15083', 3, 14, 2, 55, 3.92857, 27.5, 0),
('e15399', 1, 1, 0, 7, 7, 0, 0),
('e14048', 3, 13, 2, 60, 4.61538, 30, 0),
('e14283', 4, 23, 3, 126, 5.47826, 42, 0),
('s13903', 5, 27, 6, 149, 5.5185, 24.8333, 0),
('s15532', 0, 0, 0, 0, 0, 0, 0),
('s13809', 2, 2, 0, 9, 4.5, 0, 0),
('s14588', 2, 10, 2, 14, 1.4, 7, 0),
('mng13000', 3, 20, 5, 64, 3.2, 12.8, 0),
('e13096', 2, 8, 0, 55, 6.875, 0, 0),
('e13282', 3, 8, 2, 61, 7.625, 30.5, 0),
('m14148', 2, 17, 3, 73, 4.29412, 24.3333, 0),
('s15918', 4, 18, 3, 178, 7.73913, 59.3333, 0),
('ag14212', 3, 24, 9, 56, 2.3333, 6.2222, 0),
('a14ai976', 0, 0, 0, 0, 0, 0, 0),
('a14ai980', 5, 32, 11, 194, 6.0625, 17.6363, 0),
('s16000', 1, 4, 0, 32, 8, 0, 0),
('a14000', 1, 4, 1, 13, 3.25, 13, 0),
('e15408', 2, 10, 2, 83, 8.3, 41.5, 0),
('s16002', 1, 2, 0, 5, 2.5, 0, 0),
('s16001', 1, 1, 0, 24, 24, 0, 0),
('e15066', 0, 0, 0, 0, 0, 0, 0),
('ag13000', 1, 1, 1, 3, 3, 3, 0),
('e15000', 1, 1, 1, 15, 15, 15, 0),
('s16003', 1, 5, 0, 39, 7.8, 0, 0),
('s16004', 1, 1, 0, 6, 6, 0, 0),
('s14000', 2, 4, 1, 32, 8, 32, 0),
('mng15000', 0, 0, 0, 0, 0, 0, 0),
('e15001', 0, 0, 0, 0, 0, 0, 0),
('e14254', 1, 3, 0, 12, 4, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `fielding_statistics`
--

CREATE TABLE `fielding_statistics` (
  `Reg_no` varchar(20) NOT NULL,
  `Catches` int(11) DEFAULT NULL,
  `Runouts` int(11) DEFAULT NULL,
  `Stumpings` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fielding_statistics`
--

INSERT INTO `fielding_statistics` (`Reg_no`, `Catches`, `Runouts`, `Stumpings`) VALUES
('e14380', 0, 0, 0),
('e14039', 0, 0, 0),
('e14243', 0, 0, 0),
('e14234', 0, 0, 0),
('e15083', 0, 0, 0),
('e15399', 0, 0, 0),
('e14283', 0, 0, 0),
('s13903', 0, 0, 0),
('s15532', 0, 0, 0),
('s13809', 0, 0, 0),
('s14588', 0, 0, 0),
('mng13000', 0, 0, 0),
('e13096', 0, 0, 0),
('e13282', 0, 0, 0),
('m14148', 0, 0, 0),
('s15918', 0, 0, 0),
('e14048', 0, 0, 0),
('ag14212', 0, 0, 0),
('a14ai976', 0, 0, 0),
('a14ai980', 0, 0, 0),
('s16000', 0, 0, 0),
('e15408', 0, 0, 0),
('a14000', 0, 0, 0),
('s16001', 0, 0, 0),
('s16002', 0, 0, 0),
('e15066', 0, 0, 0),
('ag13000', 0, 0, 0),
('e15000', 0, 0, 0),
('s16003', 0, 0, 0),
('s16004', 0, 0, 0),
('s14000', 0, 0, 0),
('mng15000', 0, 0, 0),
('e15001', 0, 0, 0),
('e14254', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `formats`
--

CREATE TABLE `formats` (
  `Format` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `formats`
--

INSERT INTO `formats` (`Format`) VALUES
('2_Day'),
('50-50'),
('Inter_University'),
('Mora_Vs_Pera_Trophy'),
('T20');

-- --------------------------------------------------------

--
-- Table structure for table `home_matches_scorecarda`
--

CREATE TABLE `home_matches_scorecarda` (
  `match_no` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `venue` varchar(50) DEFAULT NULL,
  `decision` varchar(10) DEFAULT NULL,
  `totalA` int(11) DEFAULT NULL,
  `extrasA` varchar(5) DEFAULT NULL,
  `wicketsA` int(11) DEFAULT NULL,
  `opoversA` varchar(5) DEFAULT NULL,
  `batsmenA` int(11) DEFAULT NULL,
  `bowlersA` int(11) DEFAULT NULL,
  `name1a` varchar(20) DEFAULT NULL,
  `howout1a` varchar(10) DEFAULT NULL,
  `marks1a` varchar(5) DEFAULT NULL,
  `name2a` varchar(20) DEFAULT NULL,
  `howout2a` varchar(10) DEFAULT NULL,
  `marks2a` varchar(5) DEFAULT NULL,
  `name3a` varchar(20) DEFAULT NULL,
  `howout3a` varchar(10) DEFAULT NULL,
  `marks3a` varchar(5) DEFAULT NULL,
  `name4a` varchar(20) DEFAULT NULL,
  `howout4a` varchar(10) DEFAULT NULL,
  `marks4a` varchar(5) DEFAULT NULL,
  `name5a` varchar(20) DEFAULT NULL,
  `howout5a` varchar(10) DEFAULT NULL,
  `marks5a` varchar(5) DEFAULT NULL,
  `name6a` varchar(20) DEFAULT NULL,
  `howout6a` varchar(10) DEFAULT NULL,
  `marks6a` varchar(5) DEFAULT NULL,
  `name7a` varchar(20) DEFAULT NULL,
  `howout7a` varchar(10) DEFAULT NULL,
  `marks7a` varchar(5) DEFAULT NULL,
  `name8a` varchar(20) DEFAULT NULL,
  `howout8a` varchar(10) DEFAULT NULL,
  `marks8a` varchar(5) DEFAULT NULL,
  `name9a` varchar(20) DEFAULT NULL,
  `howout9a` varchar(10) DEFAULT NULL,
  `marks9a` varchar(5) DEFAULT NULL,
  `name10a` varchar(20) DEFAULT NULL,
  `howout10a` varchar(10) DEFAULT NULL,
  `marks10a` varchar(5) DEFAULT NULL,
  `name11a` varchar(20) DEFAULT NULL,
  `howout11a` varchar(10) DEFAULT NULL,
  `marks11a` varchar(5) DEFAULT NULL,
  `b1a` varchar(20) DEFAULT NULL,
  `bovers1a` varchar(5) DEFAULT NULL,
  `bruns1a` varchar(5) DEFAULT NULL,
  `bextras1a` varchar(5) DEFAULT NULL,
  `bwickets1a` varchar(5) DEFAULT NULL,
  `b2a` varchar(20) DEFAULT NULL,
  `bovers2a` varchar(5) DEFAULT NULL,
  `bruns2a` varchar(5) DEFAULT NULL,
  `bextras2a` varchar(5) DEFAULT NULL,
  `bwickets2a` varchar(5) DEFAULT NULL,
  `b3a` varchar(20) DEFAULT NULL,
  `bovers3a` varchar(5) DEFAULT NULL,
  `bruns3a` varchar(5) DEFAULT NULL,
  `bextras3a` varchar(5) DEFAULT NULL,
  `bwickets3a` varchar(5) DEFAULT NULL,
  `b4a` varchar(20) DEFAULT NULL,
  `bovers4a` varchar(5) DEFAULT NULL,
  `bruns4a` varchar(5) DEFAULT NULL,
  `bextras4a` varchar(5) DEFAULT NULL,
  `bwickets4a` varchar(5) DEFAULT NULL,
  `b5a` varchar(20) DEFAULT NULL,
  `bovers5a` varchar(5) DEFAULT NULL,
  `bruns5a` varchar(5) DEFAULT NULL,
  `bextras5a` varchar(5) DEFAULT NULL,
  `bwickets5a` varchar(5) DEFAULT NULL,
  `b6a` varchar(20) DEFAULT NULL,
  `bovers6a` varchar(5) DEFAULT NULL,
  `bruns6a` varchar(5) DEFAULT NULL,
  `bextras6a` varchar(5) DEFAULT NULL,
  `bwickets6a` varchar(5) DEFAULT NULL,
  `b7a` varchar(20) DEFAULT NULL,
  `bovers7a` varchar(5) DEFAULT NULL,
  `bruns7a` varchar(5) DEFAULT NULL,
  `bextras7a` varchar(5) DEFAULT NULL,
  `bwickets7a` varchar(5) DEFAULT NULL,
  `b8a` varchar(20) DEFAULT NULL,
  `bovers8a` varchar(5) DEFAULT NULL,
  `bruns8a` varchar(5) DEFAULT NULL,
  `bextras8a` varchar(5) DEFAULT NULL,
  `bwickets8a` varchar(5) DEFAULT NULL,
  `b9a` varchar(20) DEFAULT NULL,
  `bovers9a` varchar(5) DEFAULT NULL,
  `bruns9a` varchar(5) DEFAULT NULL,
  `bextras9a` varchar(5) DEFAULT NULL,
  `bwickets9a` varchar(5) DEFAULT NULL,
  `b10a` varchar(20) DEFAULT NULL,
  `bovers10a` varchar(5) DEFAULT NULL,
  `bruns10a` varchar(5) DEFAULT NULL,
  `bextras10a` varchar(5) DEFAULT NULL,
  `bwickets10a` varchar(5) DEFAULT NULL,
  `b11a` varchar(20) DEFAULT NULL,
  `bovers11a` varchar(5) DEFAULT NULL,
  `bruns11a` varchar(5) DEFAULT NULL,
  `bextras11a` varchar(5) DEFAULT NULL,
  `bwickets11a` varchar(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_matches_scorecarda`
--

INSERT INTO `home_matches_scorecarda` (`match_no`, `date`, `venue`, `decision`, `totalA`, `extrasA`, `wicketsA`, `opoversA`, `batsmenA`, `bowlersA`, `name1a`, `howout1a`, `marks1a`, `name2a`, `howout2a`, `marks2a`, `name3a`, `howout3a`, `marks3a`, `name4a`, `howout4a`, `marks4a`, `name5a`, `howout5a`, `marks5a`, `name6a`, `howout6a`, `marks6a`, `name7a`, `howout7a`, `marks7a`, `name8a`, `howout8a`, `marks8a`, `name9a`, `howout9a`, `marks9a`, `name10a`, `howout10a`, `marks10a`, `name11a`, `howout11a`, `marks11a`, `b1a`, `bovers1a`, `bruns1a`, `bextras1a`, `bwickets1a`, `b2a`, `bovers2a`, `bruns2a`, `bextras2a`, `bwickets2a`, `b3a`, `bovers3a`, `bruns3a`, `bextras3a`, `bwickets3a`, `b4a`, `bovers4a`, `bruns4a`, `bextras4a`, `bwickets4a`, `b5a`, `bovers5a`, `bruns5a`, `bextras5a`, `bwickets5a`, `b6a`, `bovers6a`, `bruns6a`, `bextras6a`, `bwickets6a`, `b7a`, `bovers7a`, `bruns7a`, `bextras7a`, `bwickets7a`, `b8a`, `bovers8a`, `bruns8a`, `bextras8a`, `bwickets8a`, `b9a`, `bovers9a`, `bruns9a`, `bextras9a`, `bwickets9a`, `b10a`, `bovers10a`, `bruns10a`, `bextras10a`, `bwickets10a`, `b11a`, `bovers11a`, `bruns11a`, `bextras11a`, `bwickets11a`) VALUES
(1, '2018-02-04', 'UOP Ground Matting', 'Drawn', 272, '50', 9, '31', 12, 9, 'Kaveen', 'Caught', '01', 'Akila', 'Caught', '00', 'Hashan', 'Bowled', '00', 'Mohammed', 'LBW', '3', 'Uvindu', 'Caught', '18', 'Aravinda', 'Caught', '113', 'Sewmal', 'LBW', '38', 'Malith', 'Bowled', '1', 'Yasiru', 'Not Out', '23', 'Erantha', 'Bowled', '10', 'Shehan', 'Not Out', '15', 'Uvindu', '7', '45', '9', '2', 'Yasiru', '4', '42', '10', '0', 'Sewmal', '6', '11', '2', '0', 'Mohammed', '4', '33', '3', '0', 'Hashan', '1', '4', '1', '0', 'Lahiru', '4', '13', '0', '1', 'Erantha', '3', '12', '1', '1', 'Renuja', '2', '5', '1', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, '2018-02-13', 'UOP Ground Matting', 'AWon', 294, '18', 8, '35', 9, 10, 'Kavishka', 'Caught', '4', 'Kaveen', 'Bowled', '48', 'Sapumal', 'Caught', '17', 'Nilupul', 'Caught', '67', 'Mohammed', 'Bowled', '30', 'Aravinda', 'Caught', '52', 'Niranda', 'Run Out', '42', 'Sewmal', 'Run Out', '16', '', '', '', '', '', '', '', '', '', 'Sewmal', '4', '15', '2', '1', 'Mohan', '2', '15', '1', '0', 'Aravinda', '7', '20', '3', '4', 'Kavishka', '6', '24', '6', '0', 'Nilupul', '7', '30', '1', '2', 'Mohammed', '4', '22', '1', '0', 'Malith', '3', '1', '0', '0', 'Niranda', '1', '8', '2', '0', 'Hasitha', '1', '3', '1', '1', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `home_matches_scorecardb`
--

CREATE TABLE `home_matches_scorecardb` (
  `match_no` int(11) NOT NULL,
  `totalB` int(11) DEFAULT NULL,
  `extrasB` varchar(5) DEFAULT NULL,
  `wicketsB` int(11) DEFAULT NULL,
  `opoversB` varchar(5) DEFAULT NULL,
  `batsmenB` int(11) DEFAULT NULL,
  `bowlersB` int(11) DEFAULT NULL,
  `name1b` varchar(20) DEFAULT NULL,
  `howout1b` varchar(10) DEFAULT NULL,
  `marks1b` varchar(5) DEFAULT NULL,
  `name2b` varchar(20) DEFAULT NULL,
  `howout2b` varchar(10) DEFAULT NULL,
  `marks2b` varchar(5) DEFAULT NULL,
  `name3b` varchar(20) DEFAULT NULL,
  `howout3b` varchar(10) DEFAULT NULL,
  `marks3b` varchar(5) DEFAULT NULL,
  `name4b` varchar(20) DEFAULT NULL,
  `howout4b` varchar(10) DEFAULT NULL,
  `marks4b` varchar(5) DEFAULT NULL,
  `name5b` varchar(20) DEFAULT NULL,
  `howout5b` varchar(10) DEFAULT NULL,
  `marks5b` varchar(5) DEFAULT NULL,
  `name6b` varchar(20) DEFAULT NULL,
  `howout6b` varchar(10) DEFAULT NULL,
  `marks6b` varchar(5) DEFAULT NULL,
  `name7b` varchar(20) DEFAULT NULL,
  `howout7b` varchar(10) DEFAULT NULL,
  `marks7b` varchar(5) DEFAULT NULL,
  `name8b` varchar(20) DEFAULT NULL,
  `howout8b` varchar(10) DEFAULT NULL,
  `marks8b` varchar(5) DEFAULT NULL,
  `name9b` varchar(20) DEFAULT NULL,
  `howout9b` varchar(10) DEFAULT NULL,
  `marks9b` varchar(5) DEFAULT NULL,
  `name10b` varchar(20) DEFAULT NULL,
  `howout10b` varchar(10) DEFAULT NULL,
  `marks10b` varchar(5) DEFAULT NULL,
  `name11b` varchar(20) DEFAULT NULL,
  `howout11b` varchar(10) DEFAULT NULL,
  `marks11b` varchar(5) DEFAULT NULL,
  `b1b` varchar(20) DEFAULT NULL,
  `bovers1b` varchar(10) DEFAULT NULL,
  `bruns1b` varchar(5) DEFAULT NULL,
  `bextras1b` varchar(5) DEFAULT NULL,
  `bwickets1b` varchar(5) DEFAULT NULL,
  `b2b` varchar(20) DEFAULT NULL,
  `bovers2b` varchar(5) DEFAULT NULL,
  `bruns2b` varchar(5) DEFAULT NULL,
  `bextras2b` varchar(5) DEFAULT NULL,
  `bwickets2b` varchar(5) DEFAULT NULL,
  `b3b` varchar(20) DEFAULT NULL,
  `bovers3b` varchar(5) DEFAULT NULL,
  `bruns3b` varchar(5) DEFAULT NULL,
  `bextras3b` varchar(5) DEFAULT NULL,
  `bwickets3b` varchar(5) DEFAULT NULL,
  `b4b` varchar(20) DEFAULT NULL,
  `bovers4b` varchar(5) DEFAULT NULL,
  `bruns4b` varchar(5) DEFAULT NULL,
  `bextras4b` varchar(5) DEFAULT NULL,
  `bwickets4b` varchar(5) DEFAULT NULL,
  `b5b` varchar(20) DEFAULT NULL,
  `bovers5b` varchar(5) DEFAULT NULL,
  `bruns5b` varchar(5) DEFAULT NULL,
  `bextras5b` varchar(5) DEFAULT NULL,
  `bwickets5b` varchar(5) DEFAULT NULL,
  `b6b` varchar(20) DEFAULT NULL,
  `bovers6b` varchar(5) DEFAULT NULL,
  `bruns6b` varchar(5) DEFAULT NULL,
  `bextras6b` varchar(5) DEFAULT NULL,
  `bwickets6b` varchar(5) DEFAULT NULL,
  `b7b` varchar(20) DEFAULT NULL,
  `bovers7b` varchar(5) DEFAULT NULL,
  `bruns7b` varchar(5) DEFAULT NULL,
  `bextras7b` varchar(5) DEFAULT NULL,
  `bwickets7b` varchar(5) DEFAULT NULL,
  `b8b` varchar(20) DEFAULT NULL,
  `bovers8b` varchar(5) DEFAULT NULL,
  `bruns8b` varchar(5) DEFAULT NULL,
  `bextras8b` varchar(5) DEFAULT NULL,
  `bwickets8b` varchar(5) DEFAULT NULL,
  `b9b` varchar(20) DEFAULT NULL,
  `bovers9b` varchar(5) DEFAULT NULL,
  `bruns9b` varchar(5) DEFAULT NULL,
  `bextras9b` varchar(5) DEFAULT NULL,
  `bwickets9b` varchar(5) DEFAULT NULL,
  `b10b` varchar(20) DEFAULT NULL,
  `bovers10b` varchar(5) DEFAULT NULL,
  `bruns10b` varchar(5) DEFAULT NULL,
  `bextras10b` varchar(5) DEFAULT NULL,
  `bwickets10b` varchar(5) DEFAULT NULL,
  `b11b` varchar(20) DEFAULT NULL,
  `bovers11b` varchar(5) DEFAULT NULL,
  `bruns11b` varchar(5) DEFAULT NULL,
  `bextras11b` varchar(5) DEFAULT NULL,
  `bwickets11b` varchar(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_matches_scorecardb`
--

INSERT INTO `home_matches_scorecardb` (`match_no`, `totalB`, `extrasB`, `wicketsB`, `opoversB`, `batsmenB`, `bowlersB`, `name1b`, `howout1b`, `marks1b`, `name2b`, `howout2b`, `marks2b`, `name3b`, `howout3b`, `marks3b`, `name4b`, `howout4b`, `marks4b`, `name5b`, `howout5b`, `marks5b`, `name6b`, `howout6b`, `marks6b`, `name7b`, `howout7b`, `marks7b`, `name8b`, `howout8b`, `marks8b`, `name9b`, `howout9b`, `marks9b`, `name10b`, `howout10b`, `marks10b`, `name11b`, `howout11b`, `marks11b`, `b1b`, `bovers1b`, `bruns1b`, `bextras1b`, `bwickets1b`, `b2b`, `bovers2b`, `bruns2b`, `bextras2b`, `bwickets2b`, `b3b`, `bovers3b`, `bruns3b`, `bextras3b`, `bwickets3b`, `b4b`, `bovers4b`, `bruns4b`, `bextras4b`, `bwickets4b`, `b5b`, `bovers5b`, `bruns5b`, `bextras5b`, `bwickets5b`, `b6b`, `bovers6b`, `bruns6b`, `bextras6b`, `bwickets6b`, `b7b`, `bovers7b`, `bruns7b`, `bextras7b`, `bwickets7b`, `b8b`, `bovers8b`, `bruns8b`, `bextras8b`, `bwickets8b`, `b9b`, `bovers9b`, `bruns9b`, `bextras9b`, `bwickets9b`, `b10b`, `bovers10b`, `bruns10b`, `bextras10b`, `bwickets10b`, `b11b`, `bovers11b`, `bruns11b`, `bextras11b`, `bwickets11b`) VALUES
(1, 165, '35', 4, '40', 7, 9, 'Kavishka', 'Bowled', '00', 'Thilina', 'LBW', '00', 'Sapumal', 'Caught', '63', 'Tishan', 'Not Out', '56', 'Hasitha', 'Bowled', '6', 'Ruwan', 'Not Out', '5', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Kavishka', '6', '23', '3', '2', 'Mohan', '9', '52', '6', '4', 'Nipuna', '4', '32', '3', '0', 'Ruwan', '8', '48', '5', '1', 'Narada', '3', '21', '1', '0', 'Niranda', '5', '38', '2', '2', 'Ruwan', '4', '24', '0', '0', 'Charindu', '1', '24', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 142, '27', 8, '35', 10, 11, 'Sachith', 'Caught', '16', 'Disnaka', 'Bowled', '0', 'Ruwan', 'Not Out', '50', 'Narada', 'Caught', '6', 'Thilina', 'Caught', '20', 'Shehan', 'Caught', '17', 'Devan', 'Bowled', '1', 'Hashan', 'Caught', '3', 'Nimesh', 'Bowled', '2', '', '', '', '', '', '', 'Nimesh', '6', '52', '1', '1', 'Devan', '5', '39', '0', '0', 'Ruwan', '7', '53', '3', '2', 'Shehan', '4', '38', '0', '0', 'Chathuranga', '3', '27', '1', '1', 'Narada', '6', '49', '1', '1', 'Akila', '1', '7', '0', '0', 'Hashan', '1', '5', '0', '0', 'Ashan', '1', '6', '0', '0', 'Jazlan', '1', '15', '1', '1', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `interunibatting_statistics`
--

CREATE TABLE `interunibatting_statistics` (
  `Reg_no` varchar(20) NOT NULL,
  `Matches` int(11) DEFAULT NULL,
  `Runs` int(11) DEFAULT NULL,
  `Most` int(11) DEFAULT NULL,
  `Average` float DEFAULT NULL,
  `Hundreds` int(11) DEFAULT NULL,
  `Fifties` int(11) DEFAULT NULL,
  `one` int(11) DEFAULT NULL,
  `two` int(11) DEFAULT NULL,
  `three` int(11) DEFAULT NULL,
  `four` int(11) DEFAULT NULL,
  `five` int(11) DEFAULT NULL,
  `six` int(11) DEFAULT NULL,
  `seven` int(11) DEFAULT NULL,
  `eight` int(11) DEFAULT NULL,
  `nine` int(11) DEFAULT NULL,
  `ten` int(11) DEFAULT NULL,
  `eleven` int(11) DEFAULT NULL,
  `Bowled` int(11) DEFAULT NULL,
  `Caught` int(11) DEFAULT NULL,
  `LBW` int(11) DEFAULT NULL,
  `Runout` int(11) DEFAULT NULL,
  `Stumped` int(11) DEFAULT NULL,
  `Hitwicket` int(11) DEFAULT NULL,
  `Notout` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interunibatting_statistics`
--

INSERT INTO `interunibatting_statistics` (`Reg_no`, `Matches`, `Runs`, `Most`, `Average`, `Hundreds`, `Fifties`, `one`, `two`, `three`, `four`, `five`, `six`, `seven`, `eight`, `nine`, `ten`, `eleven`, `Bowled`, `Caught`, `LBW`, `Runout`, `Stumped`, `Hitwicket`, `Notout`) VALUES
('e14243', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('e14039', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('e14380', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('e14234', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('e15083', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('e15399', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('e14048', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('e14283', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('s13903', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('s15532', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('s13809', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('s14588', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('mng13000', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('e13096', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('e13282', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('m14148', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('s15918', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('ag14212', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('a14ai976', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('a14ai980', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('s16000', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('e15408', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('a14000', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('s16001', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('s16002', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('e15066', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('ag13000', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('e15000', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('s16003', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('s16004', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('s14000', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('mng15000', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('e15001', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('e14254', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `interunibowling_statistics`
--

CREATE TABLE `interunibowling_statistics` (
  `Reg_no` varchar(20) NOT NULL,
  `Matches` int(11) DEFAULT NULL,
  `Overs` float DEFAULT NULL,
  `Wickets` int(11) DEFAULT NULL,
  `Runs` int(11) DEFAULT NULL,
  `Econ` float DEFAULT NULL,
  `Average` float DEFAULT NULL,
  `Five_wickets` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interunibowling_statistics`
--

INSERT INTO `interunibowling_statistics` (`Reg_no`, `Matches`, `Overs`, `Wickets`, `Runs`, `Econ`, `Average`, `Five_wickets`) VALUES
('e14380', 0, 0, 0, 0, 0, 0, 0),
('e14039', 0, 0, 0, 0, 0, 0, 0),
('e14243', 0, 0, 0, 0, 0, 0, 0),
('e14234', 0, 0, 0, 0, 0, 0, 0),
('e15083', 0, 0, 0, 0, 0, 0, 0),
('e15399', 0, 0, 0, 0, 0, 0, 0),
('e14048', 0, 0, 0, 0, 0, 0, 0),
('e14283', 0, 0, 0, 0, 0, 0, 0),
('s13903', 0, 0, 0, 0, 0, 0, 0),
('s15532', 0, 0, 0, 0, 0, 0, 0),
('s13809', 0, 0, 0, 0, 0, 0, 0),
('s14588', 0, 0, 0, 0, 0, 0, 0),
('mng13000', 0, 0, 0, 0, 0, 0, 0),
('e13096', 0, 0, 0, 0, 0, 0, 0),
('e13282', 0, 0, 0, 0, 0, 0, 0),
('m14148', 0, 0, 0, 0, 0, 0, 0),
('s15918', 0, 0, 0, 0, 0, 0, 0),
('ag14212', 0, 0, 0, 0, 0, 0, 0),
('a14ai976', 0, 0, 0, 0, 0, 0, 0),
('a14ai980', 0, 0, 0, 0, 0, 0, 0),
('s16000', 0, 0, 0, 0, 0, 0, 0),
('e15408', 0, 0, 0, 0, 0, 0, 0),
('a14000', 0, 0, 0, 0, 0, 0, 0),
('s16001', 0, 0, 0, 0, 0, 0, 0),
('s16002', 0, 0, 0, 0, 0, 0, 0),
('e15066', 0, 0, 0, 0, 0, 0, 0),
('ag13000', 0, 0, 0, 0, 0, 0, 0),
('e15000', 0, 0, 0, 0, 0, 0, 0),
('s16003', 0, 0, 0, 0, 0, 0, 0),
('s16004', 0, 0, 0, 0, 0, 0, 0),
('s14000', 0, 0, 0, 0, 0, 0, 0),
('mng15000', 0, 0, 0, 0, 0, 0, 0),
('e15001', 0, 0, 0, 0, 0, 0, 0),
('e14254', 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `matches_directory`
--

CREATE TABLE `matches_directory` (
  `match_no` int(11) NOT NULL,
  `format` varchar(10) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Opponent` varchar(100) DEFAULT NULL,
  `Venue` varchar(100) DEFAULT NULL,
  `UOP_scores` int(11) DEFAULT NULL,
  `UOP_wickets` int(11) DEFAULT NULL,
  `UOP_overs` float DEFAULT NULL,
  `Opp_scores` int(11) DEFAULT NULL,
  `Opp_wickets` int(11) DEFAULT NULL,
  `Opp_overs` float DEFAULT NULL,
  `Decision` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matches_directory`
--

INSERT INTO `matches_directory` (`match_no`, `format`, `Date`, `Opponent`, `Venue`, `UOP_scores`, `UOP_wickets`, `UOP_overs`, `Opp_scores`, `Opp_wickets`, `Opp_overs`, `Decision`) VALUES
(3, '50-50', '2018-02-08', 'Sheffield University Staff', 'UOP Ground Matting', 355, 2, 35, 100, 8, 35, 'Won'),
(2, 'T20', '2018-01-28', 'MARS  Prym', 'UOP Ground Matting', 136, 6, 20, 136, 5, 20, 'Tie'),
(1, 'T20', '2018-01-28', 'MARS  Prym', 'UOP Ground Matting', 180, 8, 20, 103, 8, 20, 'Won'),
(4, '50-50', '2018-02-16', 'Kingswood College 1st XI', 'UOP Ground Matting', 135, 10, 46, 238, 10, 47, 'Lost'),
(5, '50-50', '2018-02-18', 'Malaysia National Team', 'St. Anthony\'s Ground Turf', 207, 5, 34, 203, 10, 44, 'Won');

-- --------------------------------------------------------

--
-- Table structure for table `matches_scorecard`
--

CREATE TABLE `matches_scorecard` (
  `match_no` int(11) NOT NULL,
  `total` int(11) DEFAULT NULL,
  `overs` varchar(20) DEFAULT NULL,
  `extras` varchar(20) DEFAULT NULL,
  `wickets` int(11) DEFAULT NULL,
  `optotal` int(11) DEFAULT NULL,
  `opovers` varchar(20) DEFAULT NULL,
  `opextras` varchar(20) DEFAULT NULL,
  `opwickets` int(11) DEFAULT NULL,
  `batsmen` int(11) DEFAULT NULL,
  `bowlers` int(11) DEFAULT NULL,
  `name1` varchar(20) DEFAULT NULL,
  `howout1` varchar(20) DEFAULT NULL,
  `marks1` varchar(20) DEFAULT NULL,
  `name2` varchar(20) DEFAULT NULL,
  `howout2` varchar(20) DEFAULT NULL,
  `marks2` varchar(20) DEFAULT NULL,
  `name3` varchar(20) DEFAULT NULL,
  `howout3` varchar(20) DEFAULT NULL,
  `marks3` varchar(20) DEFAULT NULL,
  `name4` varchar(20) DEFAULT NULL,
  `howout4` varchar(20) DEFAULT NULL,
  `marks4` varchar(20) DEFAULT NULL,
  `name5` varchar(20) DEFAULT NULL,
  `howout5` varchar(20) DEFAULT NULL,
  `marks5` varchar(20) DEFAULT NULL,
  `name6` varchar(20) DEFAULT NULL,
  `howout6` varchar(20) DEFAULT NULL,
  `marks6` varchar(20) DEFAULT NULL,
  `name7` varchar(20) DEFAULT NULL,
  `howout7` varchar(20) DEFAULT NULL,
  `marks7` varchar(20) DEFAULT NULL,
  `name8` varchar(20) DEFAULT NULL,
  `howout8` varchar(20) DEFAULT NULL,
  `marks8` varchar(20) DEFAULT NULL,
  `name9` varchar(20) DEFAULT NULL,
  `howout9` varchar(20) DEFAULT NULL,
  `marks9` varchar(20) DEFAULT NULL,
  `name10` varchar(20) DEFAULT NULL,
  `howout10` varchar(20) DEFAULT NULL,
  `marks10` varchar(20) DEFAULT NULL,
  `name11` varchar(20) DEFAULT NULL,
  `howout11` varchar(20) DEFAULT NULL,
  `marks11` varchar(20) DEFAULT NULL,
  `b1` varchar(20) DEFAULT NULL,
  `bovers1` varchar(20) DEFAULT NULL,
  `bruns1` varchar(20) DEFAULT NULL,
  `bextras1` varchar(20) DEFAULT NULL,
  `bwickets1` varchar(20) DEFAULT NULL,
  `b2` varchar(20) DEFAULT NULL,
  `bovers2` varchar(20) DEFAULT NULL,
  `bruns2` varchar(20) DEFAULT NULL,
  `bextras2` varchar(20) DEFAULT NULL,
  `bwickets2` varchar(20) DEFAULT NULL,
  `b3` varchar(20) DEFAULT NULL,
  `bovers3` varchar(20) DEFAULT NULL,
  `bruns3` varchar(20) DEFAULT NULL,
  `bextras3` varchar(20) DEFAULT NULL,
  `bwickets3` varchar(20) DEFAULT NULL,
  `b4` varchar(20) DEFAULT NULL,
  `bovers4` varchar(20) DEFAULT NULL,
  `bruns4` varchar(20) DEFAULT NULL,
  `bextras4` varchar(20) DEFAULT NULL,
  `bwickets4` varchar(20) DEFAULT NULL,
  `b5` varchar(20) DEFAULT NULL,
  `bovers5` varchar(20) DEFAULT NULL,
  `bruns5` varchar(20) DEFAULT NULL,
  `bextras5` varchar(20) DEFAULT NULL,
  `bwickets5` varchar(20) DEFAULT NULL,
  `b6` varchar(20) DEFAULT NULL,
  `bovers6` varchar(20) DEFAULT NULL,
  `bruns6` varchar(20) DEFAULT NULL,
  `bextras6` varchar(20) DEFAULT NULL,
  `bwickets6` varchar(20) DEFAULT NULL,
  `b7` varchar(20) DEFAULT NULL,
  `bovers7` varchar(20) DEFAULT NULL,
  `bruns7` varchar(20) DEFAULT NULL,
  `bextras7` varchar(20) DEFAULT NULL,
  `bwickets7` varchar(20) DEFAULT NULL,
  `b8` varchar(20) DEFAULT NULL,
  `bovers8` varchar(20) DEFAULT NULL,
  `bruns8` varchar(20) DEFAULT NULL,
  `bextras8` varchar(20) DEFAULT NULL,
  `bwickets8` varchar(20) DEFAULT NULL,
  `b9` varchar(20) DEFAULT NULL,
  `bovers9` varchar(20) DEFAULT NULL,
  `bruns9` varchar(20) DEFAULT NULL,
  `bextras9` varchar(20) DEFAULT NULL,
  `bwickets9` varchar(20) DEFAULT NULL,
  `b10` varchar(20) DEFAULT NULL,
  `bovers10` varchar(20) DEFAULT NULL,
  `bruns10` varchar(20) DEFAULT NULL,
  `bextras10` varchar(20) DEFAULT NULL,
  `bwickets10` varchar(20) DEFAULT NULL,
  `b11` varchar(20) DEFAULT NULL,
  `bovers11` varchar(20) DEFAULT NULL,
  `bruns11` varchar(20) DEFAULT NULL,
  `bextras11` varchar(20) DEFAULT NULL,
  `bwickets11` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matches_scorecard`
--

INSERT INTO `matches_scorecard` (`match_no`, `total`, `overs`, `extras`, `wickets`, `optotal`, `opovers`, `opextras`, `opwickets`, `batsmen`, `bowlers`, `name1`, `howout1`, `marks1`, `name2`, `howout2`, `marks2`, `name3`, `howout3`, `marks3`, `name4`, `howout4`, `marks4`, `name5`, `howout5`, `marks5`, `name6`, `howout6`, `marks6`, `name7`, `howout7`, `marks7`, `name8`, `howout8`, `marks8`, `name9`, `howout9`, `marks9`, `name10`, `howout10`, `marks10`, `name11`, `howout11`, `marks11`, `b1`, `bovers1`, `bruns1`, `bextras1`, `bwickets1`, `b2`, `bovers2`, `bruns2`, `bextras2`, `bwickets2`, `b3`, `bovers3`, `bruns3`, `bextras3`, `bwickets3`, `b4`, `bovers4`, `bruns4`, `bextras4`, `bwickets4`, `b5`, `bovers5`, `bruns5`, `bextras5`, `bwickets5`, `b6`, `bovers6`, `bruns6`, `bextras6`, `bwickets6`, `b7`, `bovers7`, `bruns7`, `bextras7`, `bwickets7`, `b8`, `bovers8`, `bruns8`, `bextras8`, `bwickets8`, `b9`, `bovers9`, `bruns9`, `bextras9`, `bwickets9`, `b10`, `bovers10`, `bruns10`, `bextras10`, `bwickets10`, `b11`, `bovers11`, `bruns11`, `bextras11`, `bwickets11`) VALUES
(3, 355, '35', '24', 2, 100, '35', '9', 8, 5, 8, 'Kaveen', 'Not Out', '200', 'Sapumal', 'Run Out', '74', 'Tishan', 'Caught', '28', 'Akila', 'Not Out', '29', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Mohan', '4', '5', '1', '1', 'Aravinda', '7', '13', '0', '1', 'Uvindu', '4', '17', '1', '1', 'Narada', '6', '25', '0', '1', 'Ruwan', '4', '18', '2', '2', 'Malith', '7', '13', '0', '2', 'Ruwan', '3', '6', '2', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 136, '20', '19', 6, 136, '20', '15', 5, 9, 8, 'Kavishka', 'Caught', '7', 'Akila', 'Caught', '3', 'Tishan', 'Caught', '22', 'Sewmal', 'Caught', '3', 'Ruwan', 'Bowled', '59', 'Niranda', 'Caught', '11', 'Narada', 'Not Out', '11', 'Nimesh', 'Not Out', '1', '', '', '', '', '', '', '', '', '', 'Nimesh', '4', '31', '1', '1', 'Yasiru', '4', '22', '3', '0', 'Nipuna', '2', '11', '0', '0', 'Erantha', '2', '14', '3', '0', 'Uvindu', '3', '32', '5', '0', 'Niranda', '3', '13', '3', '1', 'Kavishka', '2', '13', '0', '3', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(1, 180, '20', '30', 8, 103, '20', '11', 8, 10, 8, 'Sapumal', 'Caught', '41', 'Kaveen', 'Caught', '20', 'Tishan', 'Caught', '00', 'Uvindu', 'Caught', '60', 'Akila', 'Caught', '13', 'Niranda', 'Bowled', '1', 'Hashan', 'Not Out', '7', 'Ruwan', 'Caught', '8', 'Narada', 'Run Out', '00', '', '', '', '', '', '', 'Sewmal', '3', '15', '2', '2', 'Mohan', '3', '13', '0', '1', 'Niranda', '3', '21', '3', '1', 'Uvindu', '2', '7', '3', '0', 'Narada', '3', '18', '2', '2', 'Ruwan', '4', '21', '1', '0', 'Akila', '2', '8', '0', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 135, '46', '14', 10, 238, '47', '9', 10, 12, 10, 'Sachith', 'LBW', '13', 'Thilina', 'Caught', '8', 'Tishan', 'Caught', '12', 'Uvindu', 'LBW', '32', 'Ruwan', 'Stumped', '38', 'Narada', 'Caught', '0', 'Shehan', 'Caught', '8', 'Yasiru', 'Caught', '10', 'Lahiru', 'Run Out', '0', 'Chathuranga', 'Not Out', '0', 'Mohan', 'Caught', '0', 'Mohan', '7', '46', '3', '1', 'Yasiru', '6', '18', '0', '1', 'Lahiru', '3', '12', '0', '0', 'Ruwan', '9', '44', '2', '5', 'Uvindu', '6', '38', '4', '0', 'Ruwan', '6', '30', '0', '2', 'Shehan', '1', '14', '0', '0', 'Narada', '8', '31', '0', '1', 'Chathuranga', '1', '5', '0', '0', '', '', '', '', '', '', '', '', '', ''),
(5, 207, '34', '27', 5, 203, '44', '32', 10, 9, 9, 'Kavishka', 'Caught', '13', 'Kaveen', 'Bowled', '0', 'Sapumal', 'Caught', '8', 'Nilupul', 'Caught', '94', 'Uvindu', 'Caught', '42', 'Tishan', 'Not Out', '10', 'Aravinda', 'Not Out', '12', 'Ruwan', 'Not Out', '1', '', '', '', '', '', '', '', '', '', 'Sewmal', '10', '38', '11', '4', 'Mohan', '5', '31', '3', '0', 'Niranda', '2', '15', '7', '0', 'Ruwan', '4', '31', '8', '1', 'Aravinda', '10', '23', '0', '4', 'Nilupul', '10', '43', '2', '1', 'Kavishka', '2', '8', '0', '0', 'Uvindu', '1', '13', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `opponents`
--

CREATE TABLE `opponents` (
  `Team_name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opponents`
--

INSERT INTO `opponents` (`Team_name`) VALUES
('Colombo University Ground'),
('Kingswood College 1st XI'),
('Malaysia National Team'),
('MARS  Prym'),
('medical_fac_uop'),
('Moratuwa University'),
('Rajarata University'),
('Royal College'),
('Sabaragamu University'),
('Sheffield University Staff');

-- --------------------------------------------------------

--
-- Table structure for table `player_informations`
--

CREATE TABLE `player_informations` (
  `Firstname` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `Reg_no` varchar(20) NOT NULL,
  `Pics` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player_informations`
--

INSERT INTO `player_informations` (`Firstname`, `Lastname`, `Reg_no`, `Pics`) VALUES
('Yasiru', 'Dineth', 'e14039', 'pics/e14039.jpg'),
('Erantha', 'Welikala', 'e14380', 'pics/e14380.jpg'),
('Shehan', 'Dinuka', 'e14243', 'pics/e14243.jpg'),
('Sapumal', 'Narampanawa', 'e14234', 'pics/e14234.jpg'),
('Kavishka', 'Dissanayake ', 'e15083', 'pics/e15083.jpg'),
('Akila', 'Wijesinghe', 'e15399', 'pics/e15399.jpg'),
('Narada', 'Ranganath', 'e14283', 'pics/e14283.jpg'),
('Mohan', 'Bandara', 's13903', 'pics/s13903.jpg'),
('Kaveen', 'Hinuduma', 's15532', 'pics/s15532.jpg'),
('Hashan', 'Dhananjaya', 's13809', 'pics/s13809.jpg'),
('Malith', 'Tennakon', 's14588', 'pics/s14588.jpg'),
('Mohammed', 'Fatheen', 'e13096', 'pics/e13096.jpg'),
('Niranda', 'Ranasinghe', 'e13282', 'pics/e13282.jpg'),
('Nilupul', 'Bimsara', 'm14148', 'pics/m14148.jpg'),
('Uvindu', 'Kahagalla', 's15918', 'pics/s15918'),
('Ruwan', 'Chamara', 'e14048', 'pics/e14048.jpg'),
('Aravinda', 'Deshabakthi', 'ag14212', 'pics/ag14212.jpg'),
('Tishan', 'Maduwantha', 'a14ai976', 'pics/a14ai976.jpg'),
('Ruwan', 'Sandakelum', 'a14ai980', 'pics/a14ai980.jpeg'),
('Sewmal', 'Mihiranga', 'mng13000', 'pics/mng13000'),
('Nipuna', 'XXX', 's16000', 'pics/s16000'),
('Nimesh', 'XXX', 'e15408', 'pics/e15408'),
('Lahiru', 'R.K.', 'a14000', 'pics/a14000'),
('Charindu', 'XXX', 's16001', 'pics/s16001'),
('Renuja', 'XXX', 's16002', 'pics/s16002'),
('Thilina', 'Upendra', 'e15066', 'pics/e15066'),
('Hasitha', 'Dasun', 'ag13000', 'pics/ag13000'),
('Jazlan', 'XXX', 'e15000', 'pics/e15000'),
('Devan', 'XXX', 's16003', 'pics/s16003.'),
('Ashan', 'XXX', 's16004', 'pics/s16004.'),
('Chathuranga', 'XXX', 's14000', 'pics/s14000.'),
('Sachith', 'XXX', 'mng15000', 'pics/mng15000.'),
('Disnaka', 'Ranasinghe', 'e15001', 'pics/e15001.'),
('Lahiru', 'Hiran', 'e14254', 'pics/e14254.');

-- --------------------------------------------------------

--
-- Table structure for table `t20batting_statistics`
--

CREATE TABLE `t20batting_statistics` (
  `Reg_no` varchar(20) NOT NULL,
  `Matches` int(11) DEFAULT NULL,
  `Runs` int(11) DEFAULT NULL,
  `Most` int(11) DEFAULT NULL,
  `Average` float DEFAULT NULL,
  `Hundreds` int(11) DEFAULT NULL,
  `Fifties` int(11) DEFAULT NULL,
  `one` int(11) DEFAULT NULL,
  `two` int(11) DEFAULT NULL,
  `three` int(11) DEFAULT NULL,
  `four` int(11) DEFAULT NULL,
  `five` int(11) DEFAULT NULL,
  `six` int(11) DEFAULT NULL,
  `seven` int(11) DEFAULT NULL,
  `eight` int(11) DEFAULT NULL,
  `nine` int(11) DEFAULT NULL,
  `ten` int(11) DEFAULT NULL,
  `eleven` int(11) DEFAULT NULL,
  `Bowled` int(11) DEFAULT NULL,
  `Caught` int(11) DEFAULT NULL,
  `LBW` int(11) DEFAULT NULL,
  `Runout` int(11) DEFAULT NULL,
  `Stumped` int(11) DEFAULT NULL,
  `Hitwicket` int(11) DEFAULT NULL,
  `Notout` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t20batting_statistics`
--

INSERT INTO `t20batting_statistics` (`Reg_no`, `Matches`, `Runs`, `Most`, `Average`, `Hundreds`, `Fifties`, `one`, `two`, `three`, `four`, `five`, `six`, `seven`, `eight`, `nine`, `ten`, `eleven`, `Bowled`, `Caught`, `LBW`, `Runout`, `Stumped`, `Hitwicket`, `Notout`) VALUES
('e14243', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('e14039', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('e14380', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('e14234', 1, 41, 41, 41, 0, 0, 41, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0),
('e15083', 1, 7, 7, 7, 0, 0, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0),
('e15399', 2, 16, 13, 8, 0, 0, 0, 3, 0, 0, 13, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0),
('e14048', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('e14283', 2, 11, 11, 11, 0, 0, 0, 0, 0, 0, 0, 0, 11, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1),
('s13903', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('s15532', 1, 20, 20, 20, 0, 0, 0, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0),
('s13809', 1, 7, 7, 7, 0, 0, 0, 0, 0, 0, 0, 0, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
('s14588', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('mng13000', 1, 3, 3, 3, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0),
('e13096', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('e13282', 2, 12, 11, 6, 0, 0, 0, 0, 0, 0, 0, 12, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0),
('m14148', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('s15918', 1, 60, 60, 60, 0, 1, 0, 0, 0, 60, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0),
('ag14212', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('a14ai976', 2, 22, 22, 11, 0, 0, 0, 0, 22, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0),
('a14ai980', 2, 67, 59, 33.5, 0, 1, 0, 0, 0, 0, 59, 0, 0, 8, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0),
('s16000', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('e15408', 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
('a14000', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('s16001', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('s16002', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('e15066', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('ag13000', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('e15000', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('s16003', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('s16004', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('s14000', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('mng15000', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('e15001', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('e14254', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `t20bowling_statistics`
--

CREATE TABLE `t20bowling_statistics` (
  `Reg_no` varchar(20) NOT NULL,
  `Matches` int(11) DEFAULT NULL,
  `Overs` float DEFAULT NULL,
  `Wickets` int(11) DEFAULT NULL,
  `Runs` int(11) DEFAULT NULL,
  `Econ` float DEFAULT NULL,
  `Average` float DEFAULT NULL,
  `Five_wickets` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t20bowling_statistics`
--

INSERT INTO `t20bowling_statistics` (`Reg_no`, `Matches`, `Overs`, `Wickets`, `Runs`, `Econ`, `Average`, `Five_wickets`) VALUES
('e14380', 1, 2, 0, 14, 7, 0, 0),
('e14039', 1, 4, 0, 22, 5.5, 0, 0),
('e14243', 0, 0, 0, 0, 0, 0, 0),
('e14234', 0, 0, 0, 0, 0, 0, 0),
('e15083', 1, 2, 3, 13, 6.5, 4.33333, 0),
('e15399', 1, 2, 2, 8, 4, 4, 0),
('e14048', 0, 0, 0, 0, 0, 0, 0),
('e14283', 1, 3, 2, 18, 6, 9, 0),
('s13903', 1, 3, 1, 13, 4.33333, 13, 0),
('s15532', 0, 0, 0, 0, 0, 0, 0),
('s13809', 0, 0, 0, 0, 0, 0, 0),
('s14588', 0, 0, 0, 0, 0, 0, 0),
('mng13000', 1, 3, 2, 15, 5, 7.5, 0),
('e13096', 0, 0, 0, 0, 0, 0, 0),
('e13282', 2, 6, 2, 34, 5.66667, 17, 0),
('m14148', 0, 0, 0, 0, 0, 0, 0),
('s15918', 2, 5, 0, 39, 7.8, 0, 0),
('ag14212', 0, 0, 0, 0, 0, 0, 0),
('a14ai976', 0, 0, 0, 0, 0, 0, 0),
('a14ai980', 1, 4, 0, 21, 5.25, 0, 0),
('s16000', 1, 2, 0, 11, 5.5, 0, 0),
('e15408', 1, 4, 1, 31, 7.75, 31, 0),
('a14000', 0, 0, 0, 0, 0, 0, 0),
('s16001', 0, 0, 0, 0, 0, 0, 0),
('s16002', 0, 0, 0, 0, 0, 0, 0),
('e15066', 0, 0, 0, 0, 0, 0, 0),
('ag13000', 0, 0, 0, 0, 0, 0, 0),
('e15000', 0, 0, 0, 0, 0, 0, 0),
('s16003', 0, 0, 0, 0, 0, 0, 0),
('s16004', 0, 0, 0, 0, 0, 0, 0),
('s14000', 0, 0, 0, 0, 0, 0, 0),
('mng15000', 0, 0, 0, 0, 0, 0, 0),
('e15001', 0, 0, 0, 0, 0, 0, 0),
('e14254', 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `venues`
--

CREATE TABLE `venues` (
  `Ground_name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venues`
--

INSERT INTO `venues` (`Ground_name`) VALUES
('Colombo University Ground'),
('St. Anthony\'s Ground Turf'),
('Thurstan Ground'),
('UOP Ground Matting'),
('UOP Ground Turf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `2daybatting_statistics`
--
ALTER TABLE `2daybatting_statistics`
  ADD PRIMARY KEY (`Reg_no`);

--
-- Indexes for table `2daybowling_statistics`
--
ALTER TABLE `2daybowling_statistics`
  ADD PRIMARY KEY (`Reg_no`);

--
-- Indexes for table `batting_statistics`
--
ALTER TABLE `batting_statistics`
  ADD PRIMARY KEY (`Reg_no`);

--
-- Indexes for table `bowling_statistics`
--
ALTER TABLE `bowling_statistics`
  ADD PRIMARY KEY (`Reg_no`);

--
-- Indexes for table `fielding_statistics`
--
ALTER TABLE `fielding_statistics`
  ADD PRIMARY KEY (`Reg_no`);

--
-- Indexes for table `formats`
--
ALTER TABLE `formats`
  ADD PRIMARY KEY (`Format`);

--
-- Indexes for table `home_matches_scorecarda`
--
ALTER TABLE `home_matches_scorecarda`
  ADD PRIMARY KEY (`match_no`);

--
-- Indexes for table `home_matches_scorecardb`
--
ALTER TABLE `home_matches_scorecardb`
  ADD PRIMARY KEY (`match_no`);

--
-- Indexes for table `interunibatting_statistics`
--
ALTER TABLE `interunibatting_statistics`
  ADD PRIMARY KEY (`Reg_no`);

--
-- Indexes for table `interunibowling_statistics`
--
ALTER TABLE `interunibowling_statistics`
  ADD PRIMARY KEY (`Reg_no`);

--
-- Indexes for table `matches_directory`
--
ALTER TABLE `matches_directory`
  ADD PRIMARY KEY (`match_no`);

--
-- Indexes for table `matches_scorecard`
--
ALTER TABLE `matches_scorecard`
  ADD PRIMARY KEY (`match_no`);

--
-- Indexes for table `opponents`
--
ALTER TABLE `opponents`
  ADD PRIMARY KEY (`Team_name`);

--
-- Indexes for table `player_informations`
--
ALTER TABLE `player_informations`
  ADD PRIMARY KEY (`Reg_no`);

--
-- Indexes for table `t20batting_statistics`
--
ALTER TABLE `t20batting_statistics`
  ADD PRIMARY KEY (`Reg_no`);

--
-- Indexes for table `t20bowling_statistics`
--
ALTER TABLE `t20bowling_statistics`
  ADD PRIMARY KEY (`Reg_no`);

--
-- Indexes for table `venues`
--
ALTER TABLE `venues`
  ADD PRIMARY KEY (`Ground_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
