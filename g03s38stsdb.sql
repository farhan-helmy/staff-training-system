-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 13, 2022 at 10:39 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `g03s38stsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `attend`
--

DROP TABLE IF EXISTS `attend`;
CREATE TABLE IF NOT EXISTS `attend` (
  `attendance` varchar(30) NOT NULL,
  `dateStart` date NOT NULL,
  `dateEnd` date NOT NULL,
  `staffId` varchar(30) NOT NULL,
  `trainingId` varchar(30) NOT NULL,
  PRIMARY KEY (`attendance`),
  KEY `staffId` (`staffId`),
  KEY `trainingId` (`trainingId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `staffId` varchar(30) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `icNumber` text NOT NULL,
  `dateOfBirth` date NOT NULL,
  `contactNumber` text NOT NULL,
  `email` text NOT NULL,
  `dateOfEmployment` date NOT NULL,
  `position` text NOT NULL,
  PRIMARY KEY (`staffId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffId`, `firstName`, `lastName`, `icNumber`, `dateOfBirth`, `contactNumber`, `email`, `dateOfEmployment`, `position`) VALUES
('B19', 'amir', 'nazran', '020112140999', '2022-03-01', '0112432099', 'amirnazran27@gmail.com', '2022-04-07', 'Supervisor'),
('B20', 'khainor', 'khairul', '020912140999', '2022-03-01', '0192847466', 'kamilkhairul@gmail.com', '2022-04-05', 'Trainee'),
('B23', 'Ahmad', 'kamil', '010201140786', '1993-06-16', '0112365234', 'ahmadali@yahoo.com', '2020-06-09', 'Supervisor'),
('c03', 'azri', 'shaqim', '020202140299', '2022-04-11', '0192760502', 'nsdjhsdjs@gmail.com', '2021-05-02', 'Trainee'),
('C21', 'Ahmad', 'Idhambaba', '020202120098', '2022-03-30', '0192760502', 'nabilyahya39@gmail.com', '2016-06-07', 'Trainee'),
('D30', 'ABU', 'SAMAH', '020202140787', '2022-03-31', '0192760005', 'aaaa@gmail.com', '2022-03-30', 'Trainee'),
('I79', 'Izmeer', 'Hilmi', '020202031109', '1998-02-10', '0192870062', 'izmeerhilmi@gmail.com', '2022-03-28', 'Trainee'),
('J21', 'adib', 'danial', '050607140878', '2022-03-28', '0192760502', 'adibDanial@gmail.com', '2022-04-14', 'Trainee'),
('K09', 'Hazman', 'Akid', '101010010111', '2022-11-16', '0111992837', 'ipad2nexus7@gmail.com', '2022-03-29', 'Trainee'),
('K11', 'Aqmar', 'Ilhan', '020103140898', '2022-03-29', '0192275032', 'aqmarilhan@gmail.com', '2022-04-04', 'Trainee'),
('U20', 'Ahmad', 'Nasrul', '9983711277437', '2000-02-22', '0187776452', 'ahmadnazrin@gmail.com', '2022-04-05', 'Trainee'),
('U21', 'AYAM', 'RENDANG', '020202000999', '2022-04-07', '0192760502', 'nabilyahya39@gmail.com', '2022-04-12', 'TRAINEE'),
('Z21', 'nabil', 'yahya', '020202021407', '2022-03-30', '0192760502', 'aaaa@gmail.com', '2022-04-04', 'Trainee');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

DROP TABLE IF EXISTS `training`;
CREATE TABLE IF NOT EXISTS `training` (
  `trainingId` varchar(30) NOT NULL,
  `trainingName` varchar(100) NOT NULL,
  `trainingStartDate` date NOT NULL,
  `trainingEndDate` date NOT NULL,
  `trainerName` varchar(100) NOT NULL,
  PRIMARY KEY (`trainingId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`trainingId`, `trainingName`, `trainingStartDate`, `trainingEndDate`, `trainerName`) VALUES
('KPA0003', 'MODUL FORMULASI DAN PEMBENTUKAN PROJEK	', '2022-04-05', '2022-04-06', 'Prof Amin Samdul'),
('KPA0010', 'KURSUS PELUPUSAN', '2022-02-01', '2022-02-02', 'Noor Nabillah Wasil'),
('KPA0011', 'KURSUS CORPORATE GOVERNANCE AND BOARD EFFECTIVENESS (CGBE)', '2022-04-09', '2022-04-01', 'Loganathan Mahathevan a/l Sakadivan '),
('KPA0039', 'KURSUS PEMBINAAN MUNSYI MUDA BAHASA', '2022-03-03', '2022-03-10', 'Muhamad Syid Muslim '),
('KPA0051', 'KURSUS MYPORTFOLIO - PANDUAN KERJA SEKTOR AWAM', '2022-09-27', '2022-09-28', 'Muhamad Syid Muslim '),
('KPA0054', 'KURSUS PEMBANGUNAN PANEL PENILAI HORIZON BAHARU KIK', '2022-03-30', '2022-04-28', 'Muhamad Syid Muslim '),
('KPA0059', 'KURSUS ASAS PENGGUNAAN SISTEM PENGURUSAN ADUAN AWAM (SISPAA)', '2022-02-09', '2022-03-08', 'Mohammad Hj Azim bin Miskan'),
('KPA0083', 'BAHASA MANDARIN UNTUK INTERAKSI HARIAN', '2022-11-19', '2022-11-20', 'Mohammad Hj Azim bin Miskan'),
('KPA0085', 'INOVASI DALAM PEMPROSESAN MAKANAN (KHAS UNTUK BAKAL PESARA)', '2022-03-31', '2022-04-07', 'Mohammad Hj Azim bin Miskan'),
('KPA0099', 'KURSUS ASAS PENGGUNAAN SISTEM PENGURUSAN ADUAN AWAM (SISPAA)', '2022-04-02', '2022-04-09', 'Zeqafazri binti Nik Amni'),
('KPA1101', 'KURSUS GLOBALIZATION AND ECONOMIC INTEGRATION IN DIGITAL ERA', '2022-04-15', '2022-04-23', 'Syahira Zikry binti Nik Zani'),
('KPA1102', 'KURSUS PENGURUSAN PERNIAGAAN (ASAS)', '2022-08-26', '2022-08-28', 'Ting Kok Khay '),
('KPA1103', 'KURSUS PENGURUSAN STOR', '2022-10-15', '2022-10-16', 'King Hao Ziah '),
('KPA1104', 'KURSUS PENSIJILAN PENGURUSAN ASET', '2022-12-17', '2022-12-18', 'Mohamad Hj Syed Rasid Aznai'),
('KPA2000', ' KURSUS PENGURUSAN ASET ALIH KERAJAAN', '2022-04-29', '2022-04-16', 'Nur Dini Hakimie binti Syed Rifin '),
('KPA2002', 'KURSUS PEROLEHAN', '2022-01-01', '2022-01-04', 'Nurul Hjh Nazura Razman '),
('KPA2003', 'KURSUS SIJIL PENTAULIAHAN PEROLEHAN KERAJAAN (PERUNDING)', '2022-01-15', '2022-01-22', 'Nuralya Ridzwan binti Hadzis'),
('KPA3001', 'KURSUS SISTEM PENGURUSAN STOR (SPPS)', '2022-01-22', '2022-01-29', 'Nuralya Ridzwan binti Hadzis'),
('KPA3002', 'KURSUS LEADERSHIP PLUS ', '2022-04-02', '2022-04-04', 'Mohammed Hj Wan Ikmal bin Yajid'),
('KPA3003', 'KURSUS MANAGEMENT TOOLS 2020 ', '2022-06-11', '2022-06-18', 'Mohammed Hj Wan Ikmal bin Yajid'),
('KPA3010', 'PENGURUSAN PROJEK ICT ', '2022-08-13', '2022-08-20', 'Nadiah Jani binti Dolbahrin'),
('KPA3011', 'PERSEMBAHAN SLAID EFEKTIF DAN BERIMPAK TINGGI', '2022-07-23', '2022-07-24', 'Zeqafazri binti Nik Amni'),
('KPA4001', 'BENGKEL LEARNING NEEDS ANALYSIS ', '2022-07-16', '2022-04-23', 'Muhamad Wan Aqeel bin Jafri Hadzis'),
('KPA8088', 'PERSEMBAHAN BERIMPAK TINGGI ', '2022-01-04', '2022-01-07', 'Muhamad Syid Muslim '),
('KPa9000', 'MASTERCLASS ON CIVIL ENGINEERING', '2022-06-08', '2022-06-17', 'Prof ahmad nazrin bin muiz'),
('KPA9002', 'KURSUS CORPORATE GOVERNANCE AND BOARD EFFECTIVENESS', '2022-06-16', '2022-06-23', 'Azmin Ali'),
('KPA9003', ' KURSUS PENGURUSAN ASET ALIH Swasta', '2022-09-21', '2022-10-06', 'Adham Baba');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userId` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `userType` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `password`, `userType`) VALUES
('admin', 'admin', 'ADMIN'),
('A02', 'A02', 'staff'),
('A20', 'A20', 'staff'),
('A20', 'A20', 'staff'),
('B20', 'abu', 'Trainee'),
('D30', 'ABU', 'Trainee'),
('Z21', 'Z21', 'Trainee'),
('J21', 'J21', 'Trainee'),
('K09', 'K09', 'Trainee'),
('U21', 'U21', 'TRAINEE'),
('K11', 'K11', ''),
('C21', 'C21', ''),
('B23', 'B23', 'position'),
('Z01', 'Z01', 'Trainee');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attend`
--
ALTER TABLE `attend`
  ADD CONSTRAINT `attend_ibfk_1` FOREIGN KEY (`staffId`) REFERENCES `staff` (`staffId`),
  ADD CONSTRAINT `attend_ibfk_2` FOREIGN KEY (`trainingId`) REFERENCES `training` (`trainingId`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
