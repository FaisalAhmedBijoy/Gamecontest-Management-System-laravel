-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2019 at 06:55 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamecontest`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `allgame` ()  SELECT * FROM game$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `allvol` ()  SELECT * FROM volunteer$$

--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `avgscore` () RETURNS INT(10) RETURN(SELECT AVG(POINT) POINT FROM score)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `CATE_ID` int(10) NOT NULL,
  `CATE_NAME` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`CATE_ID`, `CATE_NAME`) VALUES
(101, 'Action');

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `GAME_ID` int(10) NOT NULL,
  `GAME_NAME` varchar(10) DEFAULT NULL,
  `VERSION` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`GAME_ID`, `GAME_NAME`, `VERSION`) VALUES
(1, 'PUBG', '3'),
(10, 'Metal Box', '4'),
(11, 'Air', '2'),
(22, 'NFS', '4'),
(33, 'call of Du', '2'),
(44, 'COC', '7'),
(55, 'Car Race', '5'),
(63, 'Assasin', '5'),
(69, 'Cards', '5');

--
-- Triggers `game`
--
DELIMITER $$
CREATE TRIGGER `versiontrigger` BEFORE INSERT ON `game` FOR EACH ROW IF NEW.VERSION <2 THEN SET NEW.VERSION=2 ; END IF
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`, `time`) VALUES
('faisal.cse16.kuet@gmail.com', '01623155000', '2019-06-22 16:37:11'),
('cvdscdsc@gmail.com', '123456', '2019-06-22 16:40:37'),
('abir@gmail.com', '01623155000', '2019-06-22 16:41:43'),
('faisal.cse16.kuet@gmail.com', '01623155000', '2019-06-22 16:41:56'),
('faisal.cse16.kuet@gmail.com', '01623155000', '2019-06-22 16:42:10'),
('kuet@gmail.com', '01623155000', '2019-06-22 16:42:56'),
('faisal.cse16.kuet@gmail.com', '01623155000', '2019-06-22 16:43:17'),
('faisal.cse16.kuet@gmail.com', '123', '2019-06-22 16:44:01');

-- --------------------------------------------------------

--
-- Table structure for table `maintain`
--

CREATE TABLE `maintain` (
  `CATE_ID` int(10) DEFAULT NULL,
  `VOL_ID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maintain`
--

INSERT INTO `maintain` (`CATE_ID`, `VOL_ID`) VALUES
(101, 1);

-- --------------------------------------------------------

--
-- Table structure for table `play`
--

CREATE TABLE `play` (
  `PLAYER_ID` int(10) DEFAULT NULL,
  `GAME_ID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `play`
--

INSERT INTO `play` (`PLAYER_ID`, `GAME_ID`) VALUES
(1, 1),
(44, 22),
(11, 44);

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `PLAYER_ID` int(10) NOT NULL,
  `PLAYER_NAME` varchar(20) DEFAULT NULL,
  `EMAIL` varchar(20) DEFAULT NULL,
  `MOBILE` varchar(12) DEFAULT NULL,
  `P_ADDRESS` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`PLAYER_ID`, `PLAYER_NAME`, `EMAIL`, `MOBILE`, `P_ADDRESS`) VALUES
(0, '', 'faisal.cse16.kuet@gm', '+88016231550', 'Khulna'),
(1, 'Faisal', 'faisal@gmail.com', '01623155000', 'KUET'),
(11, 'abir', 'abir@gmail.com', '01687654', 'KU'),
(22, 'nuhash@gmail.com', 'nuhash@gmail.com', '15654564', 'KUET'),
(31, 'Noman', 'noman@gmail.com', '01623155000', 'KUET'),
(32, 'asik', 'asik@gmail.com', '1223', 'KUET'),
(44, 'suman', 'suman@gmail.com', '115', 'KUET'),
(80, 'jagonnath', 'jagonnath@gmail.com', '01986651154', 'Jessore'),
(204, 'dfds', 'faisal.cse16.kuet@gm', '+88016231550', 'Khulna');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `GDATE` date DEFAULT NULL,
  `SEGMENT` int(5) DEFAULT NULL,
  `GAME_ID` int(11) NOT NULL,
  `VOL_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`GDATE`, `SEGMENT`, `GAME_ID`, `VOL_ID`) VALUES
('2019-06-16', 2, 0, 0),
(NULL, NULL, 0, 0),
('2019-06-12', 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `WINNER` varchar(10) DEFAULT NULL,
  `POINT` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`WINNER`, `POINT`) VALUES
('Faisal', 2),
('BIJOY', 48),
('porosh', 47),
('NFS', 33);

-- --------------------------------------------------------

--
-- Table structure for table `timing`
--

CREATE TABLE `timing` (
  `GAME_ID` int(10) DEFAULT NULL,
  `VOL_ID` int(10) DEFAULT NULL,
  `GDATE` date NOT NULL,
  `SEGMENT` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timing`
--

INSERT INTO `timing` (`GAME_ID`, `VOL_ID`, `GDATE`, `SEGMENT`) VALUES
(1, 1, '0000-00-00', 0),
(1, 1, '2019-06-04', 2),
(10, 11, '2019-06-13', 4);

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `VOL_ID` int(10) NOT NULL,
  `VOL_NAME` varchar(10) DEFAULT NULL,
  `EMAIL` varchar(15) DEFAULT NULL,
  `ROLE` varchar(10) DEFAULT NULL,
  `MOBILE` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`VOL_ID`, `VOL_NAME`, `EMAIL`, `ROLE`, `MOBILE`) VALUES
(0, 'Faisal Ahm', 'faisal.cse16.ku', '', NULL),
(1, 'abir', 'abir@gmail.com', 'marking', '01687650858'),
(11, 'Faisal Ahm', 'faisal.cse16.ku', 'as', NULL),
(3223, 'Faisal Ahm', 'faisal.cse16.ku', 'Director', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`CATE_ID`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`GAME_ID`);

--
-- Indexes for table `maintain`
--
ALTER TABLE `maintain`
  ADD KEY `CATE_ID` (`CATE_ID`),
  ADD KEY `VOL_ID` (`VOL_ID`);

--
-- Indexes for table `play`
--
ALTER TABLE `play`
  ADD KEY `PLAYER_ID` (`PLAYER_ID`),
  ADD KEY `GAME_ID` (`GAME_ID`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`PLAYER_ID`);

--
-- Indexes for table `timing`
--
ALTER TABLE `timing`
  ADD KEY `GAME_ID` (`GAME_ID`),
  ADD KEY `VOL_ID` (`VOL_ID`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`VOL_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `maintain`
--
ALTER TABLE `maintain`
  ADD CONSTRAINT `maintain_ibfk_1` FOREIGN KEY (`CATE_ID`) REFERENCES `catagory` (`CATE_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `maintain_ibfk_2` FOREIGN KEY (`VOL_ID`) REFERENCES `volunteer` (`VOL_ID`) ON DELETE CASCADE;

--
-- Constraints for table `play`
--
ALTER TABLE `play`
  ADD CONSTRAINT `play_ibfk_1` FOREIGN KEY (`PLAYER_ID`) REFERENCES `player` (`PLAYER_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `play_ibfk_2` FOREIGN KEY (`GAME_ID`) REFERENCES `game` (`GAME_ID`) ON DELETE CASCADE;

--
-- Constraints for table `timing`
--
ALTER TABLE `timing`
  ADD CONSTRAINT `timing_ibfk_1` FOREIGN KEY (`GAME_ID`) REFERENCES `game` (`GAME_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `timing_ibfk_2` FOREIGN KEY (`VOL_ID`) REFERENCES `volunteer` (`VOL_ID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
