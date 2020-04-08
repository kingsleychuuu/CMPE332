-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 08, 2020 at 12:17 PM
-- Server version: 10.4.11-MariaDB
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
-- Database: `animalrescue`
--

-- --------------------------------------------------------

--
-- Table structure for table `animal`
--

CREATE TABLE `animal` (
  `id` int(11) NOT NULL,
  `type` enum('dog','cat','rabbit','rodent') DEFAULT NULL,
  `arrivalDate` date NOT NULL,
  `departureDate` date DEFAULT NULL,
  `spcaBranchName` varchar(40) NOT NULL,
  `shelterName` varchar(40) DEFAULT NULL,
  `driverName` varchar(40) DEFAULT NULL,
  `familyName` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `animal`
--

INSERT INTO `animal` (`id`, `type`, `arrivalDate`, `departureDate`, `spcaBranchName`, `shelterName`, `driverName`, `familyName`) VALUES
(1, 'dog', '2020-04-08', NULL, 'kingston spca', 'kingston shelter 1', 'mr acura', NULL),
(2, 'dog', '2019-05-08', NULL, 'kingston spca', 'kingston shelter 2', 'mr audi', NULL),
(3, 'dog', '2019-11-13', NULL, 'kingston spca', 'kingston shelter 3', 'mr bmw', NULL),
(4, 'dog', '2019-11-28', NULL, 'kingston spca', 'kingston shelter 1', 'mr daihatsu', NULL),
(5, 'dog', '2019-12-18', NULL, 'kingston spca', 'kingston shelter 2', 'mr honda', NULL),
(6, 'dog', '2020-01-22', NULL, 'kingston spca', 'kingston shelter 3', 'mr hyundai', NULL),
(7, 'dog', '2020-01-23', NULL, 'kingston spca', 'kingston shelter 1', 'mr kia', NULL),
(8, 'dog', '2020-02-05', NULL, 'kingston spca', 'kingston shelter 2', 'mr lexus', NULL),
(9, 'dog', '2020-02-13', NULL, 'kingston spca', 'kingston shelter 3', 'mr mercedes', NULL),
(10, 'dog', '2020-01-24', '2020-04-01', 'kingston spca', 'kingston shelter 3', 'mr toyota', NULL),
(11, 'cat', '2020-01-05', NULL, 'kingston spca', 'kingston shelter 1', 'mr volvo', NULL),
(12, 'cat', '2020-02-03', NULL, 'kingston spca', 'kingston shelter 1', NULL, NULL),
(13, 'cat', '2020-02-11', '2020-04-14', 'kingston spca', 'kingston shelter 3', NULL, NULL),
(20, 'rabbit', '2020-02-11', '2020-04-14', 'toronto spca', 'kingston shelter 1', NULL, NULL),
(21, 'cat', '2020-03-09', NULL, 'ottawa spca', NULL, NULL, NULL),
(30, 'rodent', '2020-04-02', NULL, 'waterloo spca', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `donor` varchar(40) NOT NULL,
  `amount` int(11) NOT NULL,
  `donationDate` date NOT NULL,
  `organizationName` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`donor`, `amount`, `donationDate`, `organizationName`) VALUES
('barack obama', 1000, '2020-01-01', 'kingston spca'),
('dwayne johnson', 3000, '2018-01-01', 'ottawa spca'),
('jack dorsey', 1500, '2018-03-03', 'kingston spca'),
('jeff bezos', 2000, '2020-02-02', 'toronto spca'),
('mark zuckerberg', 1000, '2018-02-02', 'toronto spca'),
('robin williams', 3000, '2020-03-03', 'ottawa spca');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `name` varchar(40) NOT NULL,
  `phoneNumber` char(10) NOT NULL,
  `plateNumber` varchar(7) DEFAULT NULL,
  `driverLicense` varchar(20) DEFAULT NULL,
  `rescuerName` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`name`, `phoneNumber`, `plateNumber`, `driverLicense`, `rescuerName`) VALUES
('mr acura', '6131234322', 'abcd124', '12345678987654322', 'kingston rescuer 1'),
('mr audi', '6131230000', 'asdf123', '11111111111111111', 'kingston rescuer 3'),
('mr bmw', '6139990000', 'qwer123', '00000000000000000', 'kingston rescuer 4'),
('mr daihatsu', '6131230003', 'zxcv125', '98765432123456782', 'kingston rescuer 2'),
('mr honda', '6131234321', 'abcd123', '12345678987654321', 'kingston rescuer 1'),
('mr hyundai', '6131234300', 'abcd100', '12345678987654300', 'kingston rescuer 1'),
('mr kia', '6131230011', 'zxcv133', '98765432123456710', 'kingston rescuer 2'),
('mr lexus', '6131230001', 'zxcv124', '98765432123456780', 'kingston rescuer 2'),
('mr mercedes', '6139990001', 'qwer124', '00000000000000001', 'kingston rescuer 4'),
('mr toyota', '6131230000', 'zxcv123', '98765432123456789', 'kingston rescuer 2'),
('mr volvo', '613123888', 'abcd666', '12345670987654321', 'kingston rescuer 1'),
('mr vw', '6131230001', 'asdf124', '11111111111111112', 'kingston rescuer 3');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `name` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `postalCode` char(6) NOT NULL,
  `phoneNumber` char(10) DEFAULT NULL,
  `isOwner` tinyint(1) NOT NULL DEFAULT 0,
  `organizationName` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`name`, `address`, `postalCode`, `phoneNumber`, `isOwner`, `organizationName`) VALUES
('andy bernard', '003 yonge st', 'n0bk10', '5190003333', 1, 'waterloo spca'),
('bob vance', '002 princess st', 'k7k1a2', '6131110001', 1, 'kingston shelter 2'),
('david wallace', '004 division st', 'k7k1a7', '6131110007', 1, 'kingston rescuer 4'),
('dwight schrute', '003 princess st', 'k7k1a3', '6131110003', 1, 'kingston shelter 3'),
('jane doe', '668 princess st', 'k7k1b6', '6130002222', 0, 'kingston spca'),
('jim halpert', '001 division st', 'k7k1a4', '6131110004', 1, 'kingston rescuer 1'),
('john doe', '667 princess st', 'k7k1b5', '6130001212', 0, 'kingston spca'),
('kingsley chu', '666 princess st', 'k7k1b4', '6473939050', 1, 'kingston spca'),
('michael scott', '003 division st', 'k7k1a6', '6131110006', 1, 'kingston rescuer 3'),
('pam beesly', '002 division st', 'k7k1a5', '6131110005', 1, 'kingston rescuer 2'),
('phyllis vance', '002 yonge st', 'k0a1a2', '6130003333', 1, 'ottawa spca'),
('stanley hudson', '001 yonge st', 'm1m1b1', '4160001111', 1, 'toronto spca'),
('罗子立', '001 princess st', 'k7k1a1', '6131110000', 1, 'kingston shelter 1');

-- --------------------------------------------------------

--
-- Table structure for table `family`
--

CREATE TABLE `family` (
  `name` varchar(40) NOT NULL,
  `phoneNumber` char(10) NOT NULL,
  `address` char(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `name` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `postalCode` char(6) NOT NULL,
  `phoneNumber` char(10) DEFAULT NULL,
  `type` enum('spcaBranch','rescuer','shelter') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`name`, `address`, `postalCode`, `phoneNumber`, `type`) VALUES
('kingston rescuer 1', '111 princess street', 'k7k17a', '6132223333', 'rescuer'),
('kingston rescuer 2', '222 princess street', 'k7k17a', '6133334444', 'rescuer'),
('kingston rescuer 3', '333 princess street', 'k7k17a', '6134445555', 'rescuer'),
('kingston rescuer 4', '444 princess street', 'k7k17a', '6135556666', 'rescuer'),
('kingston shelter 1', '111 division street', 'k7k17a', '6130009999', 'shelter'),
('kingston shelter 2', '222 division street', 'k7k17a', '6139990000', 'shelter'),
('kingston shelter 3', '333 division street', 'k7k17a', '6138889999', 'shelter'),
('kingston spca', '123 princess street', 'k7k17a', '6131231234', 'spcaBranch'),
('ottawa spca', '123 somerset street', 'k1a1a1', '6131112222', 'spcaBranch'),
('toronto spca', '123 yonge street', 'm4b1b4', '6473939059', 'spcaBranch'),
('waterloo spca', '123 university avenue', 'n2l3c5', '5198841970', 'spcaBranch');

-- --------------------------------------------------------

--
-- Table structure for table `rescuer`
--

CREATE TABLE `rescuer` (
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rescuer`
--

INSERT INTO `rescuer` (`name`) VALUES
('kingston rescuer 1'),
('kingston rescuer 2'),
('kingston rescuer 3'),
('kingston rescuer 4');

-- --------------------------------------------------------

--
-- Table structure for table `shelter`
--

CREATE TABLE `shelter` (
  `name` varchar(40) NOT NULL,
  `fee` int(11) DEFAULT NULL,
  `url` varchar(40) DEFAULT NULL,
  `maxDogs` decimal(4,0) NOT NULL DEFAULT 0,
  `maxCats` decimal(4,0) NOT NULL DEFAULT 0,
  `maxRabbits` decimal(4,0) NOT NULL DEFAULT 0,
  `maxRodents` decimal(4,0) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shelter`
--

INSERT INTO `shelter` (`name`, `fee`, `url`, `maxDogs`, `maxCats`, `maxRabbits`, `maxRodents`) VALUES
('kingston shelter 1', 110, 'kingstonshelterone.com', '6', '7', '8', '9'),
('kingston shelter 2', 120, 'kingstonsheltertwo.com', '10', '10', '10', '10'),
('kingston shelter 3', 130, 'kingstonshelterthree.com', '5', '5', '5', '5');

-- --------------------------------------------------------

--
-- Table structure for table `spcabranch`
--

CREATE TABLE `spcabranch` (
  `name` varchar(40) NOT NULL,
  `fee` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spcabranch`
--

INSERT INTO `spcabranch` (`name`, `fee`) VALUES
('kingston spca', 100),
('toronto spca', 100),
('ottawa spca', 100),
('waterloo spca', 100);

-- --------------------------------------------------------

--
-- Table structure for table `vetVisit`
--

CREATE TABLE `vetVisit` (
  `name` varchar(40) NOT NULL,
  `reason` varchar(300) NOT NULL,
  `weight` int(11) NOT NULL,
  `visitDate` date NOT NULL,
  `animalID` int(11) NOT NULL,
  `visitID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `spcaBranchName` (`spcaBranchName`),
  ADD KEY `shelterName` (`shelterName`),
  ADD KEY `driverName` (`driverName`),
  ADD KEY `familyName` (`familyName`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`donor`),
  ADD KEY `organizationName` (`organizationName`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rescuerName` (`rescuerName`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`name`),
  ADD KEY `organizationName` (`organizationName`);

--
-- Indexes for table `family`
--
ALTER TABLE `family`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `rescuer`
--
ALTER TABLE `rescuer`
  ADD KEY `name` (`name`);

--
-- Indexes for table `shelter`
--
ALTER TABLE `shelter`
  ADD KEY `name` (`name`);

--
-- Indexes for table `spcabranch`
--
ALTER TABLE `spcabranch`
  ADD KEY `name` (`name`);

--
-- Indexes for table `vetVisit`
--
ALTER TABLE `vetVisit`
  ADD PRIMARY KEY (`visitID`),
  ADD KEY `animalID` (`animalID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `animal`
--
ALTER TABLE `animal`
  ADD CONSTRAINT `animal_ibfk_1` FOREIGN KEY (`spcaBranchName`) REFERENCES `spcabranch` (`name`),
  ADD CONSTRAINT `animal_ibfk_2` FOREIGN KEY (`shelterName`) REFERENCES `shelter` (`name`),
  ADD CONSTRAINT `animal_ibfk_3` FOREIGN KEY (`driverName`) REFERENCES `driver` (`name`),
  ADD CONSTRAINT `animal_ibfk_4` FOREIGN KEY (`familyName`) REFERENCES `family` (`name`);

--
-- Constraints for table `donations`
--
ALTER TABLE `donations`
  ADD CONSTRAINT `donations_ibfk_1` FOREIGN KEY (`organizationName`) REFERENCES `organization` (`name`);

--
-- Constraints for table `driver`
--
ALTER TABLE `driver`
  ADD CONSTRAINT `driver_ibfk_1` FOREIGN KEY (`rescuerName`) REFERENCES `rescuer` (`name`) ON DELETE CASCADE;

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`organizationName`) REFERENCES `organization` (`name`) ON DELETE CASCADE;

--
-- Constraints for table `rescuer`
--
ALTER TABLE `rescuer`
  ADD CONSTRAINT `rescuer_ibfk_1` FOREIGN KEY (`name`) REFERENCES `organization` (`name`);

--
-- Constraints for table `shelter`
--
ALTER TABLE `shelter`
  ADD CONSTRAINT `shelter_ibfk_1` FOREIGN KEY (`name`) REFERENCES `organization` (`name`);

--
-- Constraints for table `spcabranch`
--
ALTER TABLE `spcabranch`
  ADD CONSTRAINT `spcabranch_ibfk_1` FOREIGN KEY (`name`) REFERENCES `organization` (`name`);

--
-- Constraints for table `vetVisit`
--
ALTER TABLE `vetVisit`
  ADD CONSTRAINT `vetVisit_ibfk_1` FOREIGN KEY (`animalID`) REFERENCES `animal` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
