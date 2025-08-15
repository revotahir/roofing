-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2025 at 09:03 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roofing`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientsauth`
--

CREATE TABLE `clientsauth` (
  `authID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `authCode` varchar(100) NOT NULL,
  `authStatus` int(11) NOT NULL DEFAULT 0 COMMENT '1=used\r\n0=signup pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clientsauth`
--

INSERT INTO `clientsauth` (`authID`, `userID`, `authCode`, `authStatus`) VALUES
(1, 5, '$2y$10$5S/omHeKyrqBGvbu5RM.KOqbZFpFNlJKewwAEKZwKLYD2cjwdj0t2', 1),
(2, 7, '$2y$10$d.A9A2l1/mwv.yctHXDFOePFO65UQY5A4UkeNHwnNzfX.c3ZJZgWO', 0);

-- --------------------------------------------------------

--
-- Table structure for table `jobfeedback`
--

CREATE TABLE `jobfeedback` (
  `feedbackID` int(11) NOT NULL,
  `jobID` int(11) NOT NULL,
  `feedBack` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobfeedback`
--

INSERT INTO `jobfeedback` (`feedbackID`, `jobID`, `feedBack`) VALUES
(3, 5, 'Good');

-- --------------------------------------------------------

--
-- Table structure for table `jobfinancing`
--

CREATE TABLE `jobfinancing` (
  `financeID` int(11) NOT NULL,
  `jobID` int(11) NOT NULL,
  `fullName` varchar(150) DEFAULT NULL,
  `insuranceProvider` varchar(150) DEFAULT NULL,
  `policyNumber` varchar(200) DEFAULT NULL,
  `insProviderContact` varchar(20) DEFAULT NULL,
  `financeStatus` int(1) NOT NULL COMMENT '1= data\r\n2= I will be Financing'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobfinancing`
--

INSERT INTO `jobfinancing` (`financeID`, `jobID`, `fullName`, `insuranceProvider`, `policyNumber`, `insProviderContact`, `financeStatus`) VALUES
(2, 2, 'finance Name', NULL, 'finance Policy Number', '03001122333', 1),
(6, 5, 'test', 'yyy', '9888', '878787', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jobinstallation`
--

CREATE TABLE `jobinstallation` (
  `installID` int(11) NOT NULL,
  `jobID` int(11) NOT NULL,
  `img1` varchar(300) DEFAULT NULL,
  `img2` varchar(300) DEFAULT NULL,
  `img3` varchar(300) DEFAULT NULL,
  `img4` varchar(300) DEFAULT NULL,
  `img5` varchar(300) DEFAULT NULL,
  `img6` varchar(300) DEFAULT NULL,
  `img7` varchar(300) DEFAULT NULL,
  `img8` varchar(300) DEFAULT NULL,
  `img9` varchar(300) DEFAULT NULL,
  `img10` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobinstallation`
--

INSERT INTO `jobinstallation` (`installID`, `jobID`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`, `img9`, `img10`) VALUES
(8, 2, 'installation_1738284386_GC__M4A5311.jpg', 'installation_1738284386_Screen_Shot_2025-01-22_at_2_20_44_PM.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 5, 'installation_1739903795_sonogramillustration_blue2024_v2__1_-removebg-preview.png', 'installation_1739903795_sonogramillustration_blue2024_v2_(1).jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobmanagerreview`
--

CREATE TABLE `jobmanagerreview` (
  `mReviewID` int(11) NOT NULL,
  `jobID` int(11) NOT NULL,
  `reviewDate` date DEFAULT NULL,
  `clioentAditionalQuestion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobmanagerreview`
--

INSERT INTO `jobmanagerreview` (`mReviewID`, `jobID`, `reviewDate`, `clioentAditionalQuestion`) VALUES
(8, 5, '2025-02-27', 'asdsa');

-- --------------------------------------------------------

--
-- Table structure for table `jobmaterialdelivery`
--

CREATE TABLE `jobmaterialdelivery` (
  `materialDeliveryID` int(11) NOT NULL,
  `jobID` int(11) NOT NULL,
  `jobScheduled` date NOT NULL,
  `materialDeliveryETA` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobmaterialdelivery`
--

INSERT INTO `jobmaterialdelivery` (`materialDeliveryID`, `jobID`, `jobScheduled`, `materialDeliveryETA`) VALUES
(2, 2, '2025-01-29', '2025-02-05'),
(5, 5, '2025-02-20', '2025-02-21');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `jobID` int(11) NOT NULL,
  `mangerID` int(11) NOT NULL,
  `clientID` int(11) NOT NULL,
  `location` varchar(2000) NOT NULL,
  `firstInterectionDate` date NOT NULL,
  `workScope` varchar(2000) NOT NULL,
  `addInformation` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`jobID`, `mangerID`, `clientID`, `location`, `firstInterectionDate`, `workScope`, `addInformation`) VALUES
(2, 3, 5, 'xytz', '2025-01-24', 'asdasd\r\n                                            ', 'asdasda\r\n                                            '),
(5, 3, 5, 'abc', '2025-02-20', 'test', 'test\r\n                                            '),
(6, 2, 5, 'test Location', '2025-08-06', 'xdgsdfg\r\n                                            ', '\r\n                                        sdfgsdgdsf    ');

-- --------------------------------------------------------

--
-- Table structure for table `jobstatus`
--

CREATE TABLE `jobstatus` (
  `statusID` int(11) NOT NULL,
  `jobID` int(11) NOT NULL,
  `initialVisit` smallint(3) NOT NULL DEFAULT 1 COMMENT '0=pending\r\n1=processing\r\n2=Completed',
  `financing` smallint(3) NOT NULL DEFAULT 0,
  `materialDelivery` smallint(3) NOT NULL DEFAULT 0,
  `install` smallint(3) NOT NULL DEFAULT 0,
  `managerReview` smallint(3) NOT NULL DEFAULT 0,
  `jobClose` smallint(3) NOT NULL DEFAULT 0,
  `feedback` tinyint(1) NOT NULL DEFAULT 0,
  `initialVisitDate` date DEFAULT NULL,
  `jobCloseDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobstatus`
--

INSERT INTO `jobstatus` (`statusID`, `jobID`, `initialVisit`, `financing`, `materialDelivery`, `install`, `managerReview`, `jobClose`, `feedback`, `initialVisitDate`, `jobCloseDate`) VALUES
(3, 2, 2, 2, 2, 2, 1, 0, 0, '2025-01-31', NULL),
(6, 5, 2, 2, 2, 2, 2, 2, 2, '2025-02-18', '2025-02-18'),
(7, 6, 1, 0, 0, 0, 0, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `userName` varchar(150) NOT NULL,
  `userEmail` varchar(200) NOT NULL,
  `userPhone` varchar(20) DEFAULT NULL,
  `userPass` varchar(100) DEFAULT NULL,
  `userType` tinyint(1) NOT NULL COMMENT '1=admin\r\n2=Manager\r\n3=Client',
  `userStatus` tinyint(1) NOT NULL COMMENT '1=active \r\n0=Not Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `userName`, `userEmail`, `userPhone`, `userPass`, `userType`, `userStatus`) VALUES
(1, 'Admin', 'admin@admin.com', '03001122333', 'admin', 1, 1),
(2, 'managerr', 'manager@mail.com', '030011223331', 'manager', 2, 1),
(3, 'Manager2', 'manager2@mail.com', '03001122333', 'qwe', 2, 1),
(5, 'Client', 'client1@mail.com', NULL, 'qwer', 3, 1),
(7, 'Client 2', 'client2@gmail.com', '03002211334', 'qwer', 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientsauth`
--
ALTER TABLE `clientsauth`
  ADD PRIMARY KEY (`authID`);

--
-- Indexes for table `jobfeedback`
--
ALTER TABLE `jobfeedback`
  ADD PRIMARY KEY (`feedbackID`);

--
-- Indexes for table `jobfinancing`
--
ALTER TABLE `jobfinancing`
  ADD PRIMARY KEY (`financeID`);

--
-- Indexes for table `jobinstallation`
--
ALTER TABLE `jobinstallation`
  ADD PRIMARY KEY (`installID`);

--
-- Indexes for table `jobmanagerreview`
--
ALTER TABLE `jobmanagerreview`
  ADD PRIMARY KEY (`mReviewID`);

--
-- Indexes for table `jobmaterialdelivery`
--
ALTER TABLE `jobmaterialdelivery`
  ADD PRIMARY KEY (`materialDeliveryID`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`jobID`);

--
-- Indexes for table `jobstatus`
--
ALTER TABLE `jobstatus`
  ADD PRIMARY KEY (`statusID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientsauth`
--
ALTER TABLE `clientsauth`
  MODIFY `authID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobfeedback`
--
ALTER TABLE `jobfeedback`
  MODIFY `feedbackID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobfinancing`
--
ALTER TABLE `jobfinancing`
  MODIFY `financeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jobinstallation`
--
ALTER TABLE `jobinstallation`
  MODIFY `installID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `jobmanagerreview`
--
ALTER TABLE `jobmanagerreview`
  MODIFY `mReviewID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jobmaterialdelivery`
--
ALTER TABLE `jobmaterialdelivery`
  MODIFY `materialDeliveryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `jobID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jobstatus`
--
ALTER TABLE `jobstatus`
  MODIFY `statusID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
