-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2020 at 09:22 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mygene`
--

-- --------------------------------------------------------

--
-- Table structure for table `allowed_id`
--

CREATE TABLE `allowed_id` (
  `ID` int(11) NOT NULL,
  `allowed_id` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allowed_id`
--

INSERT INTO `allowed_id` (`ID`, `allowed_id`) VALUES
(1, '123452'),
(2, '123453'),
(3, '123454'),
(4, '123455'),
(5, '123451'),
(6, '123450'),
(7, '123456'),
(8, '1234567'),
(9, '123458'),
(10, '123459'),
(11, '123300'),
(12, '123301'),
(13, '123302'),
(14, '123303'),
(15, '123304'),
(16, '123305'),
(17, '123306'),
(18, '123307'),
(19, '123308'),
(20, '123309'),
(21, '112233'),
(22, '111113'),
(23, '1112223');

-- --------------------------------------------------------

--
-- Table structure for table `favorates`
--

CREATE TABLE `favorates` (
  `ID` int(11) NOT NULL,
  `aa_id` varchar(500) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favorates`
--

INSERT INTO `favorates` (`ID`, `aa_id`, `user_id`) VALUES
(17, 'p.G8V', 1),
(19, 'p.G332V', 1),
(21, 'p.Q20+ACo-', 1),
(23, 'p.G8V', 1),
(25, 'p.G8V', 1),
(31, 'p.Q20+ACo-', 1),
(33, 'p.G8V', 2),
(34, 'p.K896J', 2),
(35, 'p.G315A', 2),
(36, 'p.E173K', 2),
(37, 'p.G8V', 2),
(38, 'p.G315A', 2),
(39, 'p.G315A', 1),
(40, 'p.K896J', 1),
(42, 'p.Q20+ACo-', 1),
(45, 'p.E173K', 22),
(49, 'p.E173K', 23);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset`
--

CREATE TABLE `password_reset` (
  `ID` int(11) NOT NULL,
  `hospital_id` varchar(500) NOT NULL,
  `random` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password_reset`
--

INSERT INTO `password_reset` (`ID`, `hospital_id`, `random`) VALUES
(1, '123440', 8572),
(2, '1112223', 2823),
(3, '1112223', 9498),
(4, '1112223', 8182),
(5, '1112223', 7469),
(6, '123445', 8143),
(7, '1112223', 3091),
(8, '1112223', 3088),
(9, '1112223', 4283),
(10, '1112223', 5558),
(11, '9663258741', 2783),
(12, '963258741', 6840),
(13, '963258741', 2201),
(14, '1112223', 6095),
(15, '1112223', 3509),
(16, '111113', 6365);

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `FDA_for_same` varchar(500) NOT NULL,
  `FDA_for_other` varchar(500) NOT NULL,
  `aa` varchar(250) NOT NULL,
  `cDNA` varchar(250) NOT NULL,
  `ct_title` varchar(250) NOT NULL,
  `e_source` varchar(500) NOT NULL,
  `ens` varchar(250) NOT NULL,
  `gene` varchar(250) NOT NULL,
  `investigational_for_same` varchar(250) NOT NULL,
  `preclinical_for_same` varchar(250) NOT NULL,
  `preclinical_generic` varchar(250) NOT NULL,
  `submited_type` varchar(250) NOT NULL,
  `dr_id` varchar(500) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `FDA_for_same`, `FDA_for_other`, `aa`, `cDNA`, `ct_title`, `e_source`, `ens`, `gene`, `investigational_for_same`, `preclinical_for_same`, `preclinical_generic`, `submited_type`, `dr_id`, `user_id`) VALUES
(2, 'Healthy food', 'Vegetarian food', 'p.G315A', 'c.29G+AD8-L', 'Breast cancer type 1', 'Egenetics expression data', 'ENST00000987456', 'BRCA1', 'hope', 'sleep', 'stay safe', 'melanoma', '123443', 2),
(3, 'Drink a lot of water + Healthy food', 'Vegetarian food ', 'p.K896J', 'c.27G+AD5-K', 'Hereditary nonpolyposis colorectal cancer', 'Egenetics expression data', 'ENST00000654123', 'HNPCC', 'hope', 'stay safe', 'sleep', 'melanoma', '123443', 2),
(7, 'test', 'test123', 'asdasda', 'asdasd', 'test', 'dasdasd', 'asdasdasd', 'testasdasd', 'test', 'tes', 'test', 'tes', '1112223', 0),
(8, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'tes', 'test', 'ets', 'test', '123440', 0),
(9, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '123440', 0),
(10, 'test', 'test', 'test', 'test', 'test', 'test', 'etst', 'test', 'test', 'test', 'test', 'test', '123440', 0);

-- --------------------------------------------------------

--
-- Table structure for table `upload_mutation`
--

CREATE TABLE `upload_mutation` (
  `id` int(11) NOT NULL,
  `gene` varchar(500) NOT NULL,
  `ens` varchar(500) NOT NULL,
  `cDNA` varchar(500) NOT NULL,
  `aa` varchar(500) NOT NULL,
  `tier` varchar(500) NOT NULL,
  `level` varchar(500) NOT NULL,
  `e_source` varchar(500) NOT NULL,
  `bio_type` varchar(500) NOT NULL,
  `submited_type` varchar(500) NOT NULL,
  `NCCN_drug` varchar(500) NOT NULL,
  `NCCN_response` varchar(500) NOT NULL,
  `NCCN_condition` varchar(500) NOT NULL,
  `NCCN_panel` varchar(500) NOT NULL,
  `FDA_for_same` varchar(500) NOT NULL,
  `FDA_for_other` varchar(500) NOT NULL,
  `investigational_for_same` varchar(500) NOT NULL,
  `ct_title` varchar(500) NOT NULL,
  `status` varchar(500) NOT NULL,
  `location` varchar(500) NOT NULL,
  `preclinical_for_same` varchar(500) NOT NULL,
  `preclinical_generic` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload_mutation`
--

INSERT INTO `upload_mutation` (`id`, `gene`, `ens`, `cDNA`, `aa`, `tier`, `level`, `e_source`, `bio_type`, `submited_type`, `NCCN_drug`, `NCCN_response`, `NCCN_condition`, `NCCN_panel`, `FDA_for_same`, `FDA_for_other`, `investigational_for_same`, `ct_title`, `status`, `location`, `preclinical_for_same`, `preclinical_generic`) VALUES
(1, 'PACRGL', 'ENST00000471979', 'c.517G+AD4-A', 'p.E173K', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(2, 'PACRGL', 'ENST00000471979', 'c.23G+AD4-T', 'p.G8V', 'I', 'B', 'cBioPortal', 'diagnostic/prognostic', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(3, 'KEAP1', 'ENST00000393623', 'c.58C+AD4-T', 'p.Q20+ACo-', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(4, 'KEAP1', 'ENST00000393623', 'c.995G+AD4-T', 'p.G332V', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(5, 'KEAP1', 'ENST00000393623', 'c.410T+AD4-C', 'p.I137T', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(6, 'KEAP1', 'ENST00000171111', 'c.1607+AF8-1608insTG', 'p.Y537Afs+ACo-12', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(7, 'KEAP1', 'ENST00000393623', 'c.31G+AD4-A', 'p.G11R', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(8, 'KEAP1', 'ENST00000171111', 'c.305C+AD4-T', 'p.S102L', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(9, 'KEAP1', 'ENST00000393623', 'c.1709G+AD4-T', 'p.G570V', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(10, 'KEAP1', 'ENST00000393623', 'c.691C+AD4-G', 'p.L231V', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(11, 'KEAP1', 'ENST00000171111', 'c.1632G+AD4-T', 'p.W544C', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(12, 'KEAP1', 'ENST00000393623', 'c.1687C+AD4-G', 'p.Q563E', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(13, 'KEAP1', 'ENST00000393623', 'c.499delG', 'p.V167fs+ACo-63', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(14, 'KEAP1', 'ENST00000393623', 'c.1255G+AD4-T', 'p.G419W', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(15, 'KEAP1', 'ENST00000393623', 'c.10G+AD4-C', 'p.D4H', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(16, 'KEAP1', 'ENST00000393623', 'c.1122G+AD4-A', 'p.L374L', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(17, 'KEAP1', 'ENST00000393623', 'c.149G+AD4-A', 'p.R50H', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(18, 'KEAP1', 'ENST00000393623', 'c.635G+AD4-A', 'p.G212E', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(19, 'KEAP1', 'ENST00000393623', 'c.1448G+AD4-A', 'p.R483H', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(20, 'KEAP1', 'ENST00000171111', 'c.1475C+AD4-G', 'p.P492R', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(21, 'KEAP1', 'ENST00000171111', 'c.1348T+AD4-C', 'p.W450R', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(22, 'KEAP1', 'ENST00000171111', 'c.68G+AD4-A', 'p.C23Y', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(23, 'KEAP1', 'ENST00000171111', 'c.1774+AF8-1780del', 'p.S592+ACo-', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(24, 'KEAP1', 'ENST00000171111', 'c.571G+AD4-A', 'p.A191T', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(25, 'KEAP1', 'ENST00000393623', 'c.706G+AD4-T', 'p.D236Y', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(26, 'ADRA1B', 'ENST00000306675', 'c.535G+AD4-T', 'p.G179W', 'I', 'B', 'cBioPortal', 'diagnostic/prognostic', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(27, 'ADRA1B', 'ENST00000306675', 'c.325G+AD4-A', 'p.G109S', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(28, 'ADRA1B', 'ENST00000306675', 'c.+AC0-10G+AD4-T', '+ACo-4+ACo-', 'I', 'B', 'cBioPortal', 'diagnostic/prognostic', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(29, 'ADRA1B', 'ENST00000306675', 'c.937G+AD4-A', 'p.A313T', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(30, 'MLEC', 'ENST00000228506', 'c.712G+AD4-A', 'p.E238K', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(31, 'MLEC', 'ENST00000228506', 'c.267G+AD4-A', 'p.L89+AD0-', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(32, 'MLEC', 'ENST00000228506', 'c.690+AF8-691insAGA', 'p.K230+AF8-E231insR', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(33, 'MLEC', 'ENST00000228506', 'c.314A+AD4-G', 'p.N105S', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(34, 'MLEC', 'ENST00000228506', 'c.432G+AD4-C', 'p.L144F', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(35, 'MLEC', 'ENST00000228506', 'c.442G+AD4-A', 'p.V148I', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(36, 'MEGT1', 'ENST00000375825', 'c.283G+AD4-C', 'p.D95H', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(37, 'MEGT1', 'ENST00000375825', 'c.196C+AD4-T', 'p.H66Y', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(38, 'MEGT1', 'ENST00000375825', 'c.144G+AD4-A', 'p.Q48+AD0-', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(39, 'HIST1H2BC', 'ENST00000314332', 'c.363G+AD4-A', 'p.K121+AD0-', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(40, 'HIST1H2BC', 'ENST00000314332', 'c.156C+AD4-T', 'p.D52+AD0-', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(41, 'HIST1H2BC', 'ENST00000314332', 'c.292G+AD4-A', 'p.A98T', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(42, 'CUBN', 'ENST00000377833', 'c.10429C+AD4-A', 'p.P3477T', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(43, 'CUBN', 'ENST00000377833', 'c.85G+AD4-C', 'p.E29Q', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(44, 'CUBN', 'ENST00000377833', 'c.2057C+AD4-A', 'p.S686+ACo-', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(45, 'CUBN', 'ENST00000377833', 'c.8671G+AD4-A', 'p.V2891I', 'II', 'D', 'cBioPortal', 'diagnostic/prognostic', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(46, 'CUBN', 'ENST00000377833', 'c.7348G+AD4-A', 'p.E2450K', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(47, 'CUBN', 'ENST00000377833', 'c.5685G+AD4-A', 'p.L1895+AD0-', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(48, 'CUBN', 'ENST00000377833', 'c.2601C+AD4-A', 'p.A867+AD0-', 'I', 'B', 'cBioPortal', 'diagnostic/prognostic', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(49, 'CUBN', 'ENST00000377833', 'c.4072C+AD4-A', 'p.P1358T', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(50, 'CUBN', 'ENST00000377833', 'c.149A+AD4-C', 'p.N50T', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(51, 'CUBN', 'ENST00000377833', 'c.4621C+AD4-T', 'p.R1541W', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(52, 'CUBN', 'ENST00000377833', 'c.7738G+AD4-A', 'p.G2580R', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(53, 'CUBN', 'ENST00000377833', 'c.3670G+AD4-T', 'p.A1224S', 'I', 'B', 'cBioPortal', 'diagnostic/prognostic', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(54, 'CUBN', 'ENST00000377833', 'c.2923G+AD4-C', 'p.E975Q', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(55, 'CUBN', 'ENST00000377833', 'c.1775G+AD4-A', 'p.G592D', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(56, 'CUBN', 'ENST00000377833', 'c.4749G+AD4-A', 'p.R1583+AD0-', 'II', 'D', 'cBioPortal', 'diagnostic/prognostic', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(57, 'CUBN', 'ENST00000377833', 'c.7224C+AD4-A', 'p.G2408+AD0-', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(58, 'CUBN', 'ENST00000377833', 'c.8056T+AD4-G', 'p.F2686V', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(59, 'CUBN', 'ENST00000377833', 'c.5285T+AD4-G', 'p.V1762G', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(60, 'CUBN', 'ENST00000377833', 'c.6214C+AD4-T', 'p.R2072C', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(61, 'CUBN', 'ENST00000377833', 'c.6373C+AD4-T', 'p.Q2125+ACo-', 'I', 'B', 'cBioPortal', 'diagnostic/prognostic', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(62, 'CUBN', 'ENST00000377833', 'c.2647G+AD4-C', 'p.G883R', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(63, 'CUBN', 'ENST00000377833', 'c.5402G+AD4-A', 'p.G1801E', 'I', 'B', 'cBioPortal', 'diagnostic/prognostic', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(64, 'CUBN', 'ENST00000377833', 'c.593+157//QA+-G', '+ACo-198+ACo-', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(65, 'CUBN', 'ENST00000377833', 'c.4066C+AD4-A', 'p.P1356T', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(66, 'CUBN', 'ENST00000377833', 'c.402G+AD4-T', 'p.K134N', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(67, 'CUBN', 'ENST00000377833', 'c.5691G+AD4-A', 'p.M1897I', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(68, 'CUBN', 'ENST00000377833', 'c.9115G+AD4-T', 'p.G3039C', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(69, 'CUBN', 'ENST00000377833', 'c.4771G+AD4-A', 'p.V1591I', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(70, 'CUBN', 'ENST00000377833', 'c.2593A+AD4-C', 'p.S865R', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(71, 'CUBN', 'ENST00000377833', 'c.1418+AC0-7T+AD4-A', 'p.X473+AF8-splice', 'II', 'D', 'cBioPortal', 'diagnostic/prognostic', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(72, 'CUBN', 'ENST00000377833', 'c.6764C+AD4-A', 'p.P2255Q', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(73, 'CUBN', 'ENST00000377833', 'c.4331G+AD4-T', 'p.C1444F', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(74, 'CUBN', 'ENST00000377833', 'c.2795G+AD4-A', 'p.C932Y', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(75, 'CUBN', 'ENST00000377833', 'c.7643delT', 'p.F2548Sfs+ACo-50', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(76, 'CUBN', 'ENST00000377833', 'c.4959G+AD4-T', 'p.A1653+AD0-', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(77, 'CUBN', 'ENST00000377833', 'c.5823G+AD4-A', 'p.L1941+AD0-', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(78, 'CUBN', 'ENST00000377833', 'c.291G+AD4-T', 'p.G97+AD0-', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(79, 'CUBN', 'ENST00000377833', 'c.6134A+AD4-C', 'p.N2045T', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(80, 'CUBN', 'ENST00000377833', 'c.7669G+AD4-A', 'p.G2557S', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(81, 'CUBN', 'ENST00000377833', 'c.4969+26f//Q-', '+ACo-1657+ACo-', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(82, 'CUBN', 'ENST00000377833', 'c.6758C+AD4-A', 'p.A2253D', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(83, 'CUBN', 'ENST00000377833', 'c.3201T+AD4-C', 'p.N1067+AD0-', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(84, 'CUBN', 'ENST00000377833', 'c.2757T+AD4-G', 'p.H919Q', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(85, 'CUBN', 'ENST00000377833', 'c.6301G+AD4-T', 'p.G2101W', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(86, 'CUBN', 'ENST00000377833', 'c.7088G+AD4-T', 'p.C2363F', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(87, 'CUBN', 'ENST00000377833', 'c.8218A+AD4-T', 'p.T2740S', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(88, 'PITPNM3', 'ENST00000262483', 'c.1646G+AD4-T', 'p.S549I', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(89, 'PITPNM3', 'ENST00000262483', 'c.1906C+AD4-G', 'p.H636D', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(90, 'PITPNM3', 'ENST00000262483', 'c.2163C+AD4-A', 'p.D721E', 'I', 'B', 'cBioPortal', 'diagnostic/prognostic', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(91, 'PITPNM3', 'ENST00000262483', 'c.838G+AD4-A', 'p.A280T', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(92, 'PITPNM3', 'ENST00000262483', 'c.1835G+AD4-A', 'p.S612N', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(93, 'PITPNM3', 'ENST00000262483', 'c.1837C+AD4-T', 'p.P613S', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(94, 'ELN', 'ENST00000252034', 'c.1577+AC0-10C+AD4-T', 'p.?', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(95, 'ELN', 'ENST00000358929', 'c.2367G+AD4-A', 'p.R789+AD0-', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(96, 'ELN', 'ENST00000358929', 'c.989G+AD4-A', 'p.G330D', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(97, 'ELN', 'ENST00000252034', 'c.567C+AD4-T', 'p.I189I', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(98, 'ELN', 'ENST00000358929', 'c.1072G+AD4-T', 'p.G358W', 'I', 'B', 'cBioPortal', 'diagnostic/prognostic', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n'),
(99, 'ELN', 'ENST00000252034', 'c.1598A+AD4-G', 'p.K533R', 'III', '', '', '', 'melanoma', '', '', '', '', '', '', '', '', '', '', '', '\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `hospital_id` varchar(11) NOT NULL,
  `FullName` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `Email` varchar(500) NOT NULL,
  `Department` varchar(500) NOT NULL,
  `active` int(11) NOT NULL,
  `registerd` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `hospital_id`, `FullName`, `password`, `Email`, `Department`, `active`, `registerd`) VALUES
(1, '123440', 'Nahla Al-Kurab', '5212338', 'MyGeneCompany@gmail.com', 'Doctor Oncologist', 1, 1),
(2, '123443', 'Ahad Al-Qahtani', '123123', 'ahad@gmail.com', 'Doctor Oncologist', 1, 1),
(3, '123441', 'Jamal Allabad', '123123 ', 'Jamal@gmail.com', 'Doctor Clinical Genetics - Physiatrist', 1, 1),
(4, '123442', 'Sara Alshahror', '123123 ', 'sara@gmail.com', 'Doctor Clinical Genetics - Physiatrist', 1, 1),
(5, '123444', 'Ziad Al-Ali', '123456', 'ziad-ali@gmail.com', 'Doctor Oncologist', 1, 0),
(6, '123445', 'Riad Al-sayat', 'yazo123', 'riad.sy@gmail.com', 'Doctor Oncologist', 0, 0),
(7, '123445', 'Yazeed Alrajhi', 'yazo123', 'yazeed@gmail.com', 'Bioinformatic', 0, 0),
(8, '123446', 'Zeen Karazon', 'zozo456', 'zeen@gmail.com', 'Doctor Clinical Genetics - Physiatrist', 0, 0),
(9, '123200', 'Alaa Al-Ahmar', 'alaa456', 'alaa-ah@gmail.com', 'Bioinformatic', 0, 0),
(10, '123201', 'Sali Saraqbi', 'soso12??', 'sali-sa@hotmail.cpm', 'Doctor Clinical Genetics', 0, 0),
(11, '123202', 'Saosan Kabbas', 'soso147', 'saosan@yahoo.com', 'Bioinformatic', 0, 0),
(12, '123203', 'Mohannad Al-Asmar', 'moh?456', 'mohannad@yahoo.com', 'Doctor Clinical Genetics', 0, 0),
(13, '123204', 'Thamer Altawel', '1993562!?', 'thamer@hotmail.com', 'Doctor Clinical Genetics', 0, 0),
(14, '123205', 'Michael Bogdan', 'mic098??', 'michael@yaho.com', 'Doctor Clinical Genetics', 0, 0),
(15, '123206', 'Sara Ahmed', 'sarona99!', 'sara.ahmed@gmail.com', 'Doctor Oncologist', 0, 0),
(16, '123207', 'Fade Andraoes', 'fado???8', 'fadi80@hotmail.com', 'Bioinformatic', 0, 0),
(17, '123208', 'Mohammed Eskender', 'medo83?', 'mohammed83@yahoo.com', 'Doctor Oncologist', 0, 0),
(18, '123209', 'Amal Alghamdi', 'amola96?', 'amal.gh@gmail.com', 'Bioinformatic', 0, 0),
(19, '123211', 'Meaad Ali', 'www987?', 'meaad-ali@gmail.com', 'Doctor Oncologist', 0, 0),
(20, '123212', 'Noha Basha', 'nona12!?', 'nohabash@gmail.com', 'Doctor Oncologist', 0, 0),
(23, '1112223', 'Mohamed Alghoush', '5212338', 'mohamed.alghoush58@gmail.com', 'Physiatrists', 0, 0),
(24, '111113', 'Sami', '123123', 'example@gmail.com', 'Physiatrists', 1, 1),
(26, '112233', 'Drx', '123', 'example@gmail.com', 'Physiatrists', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allowed_id`
--
ALTER TABLE `allowed_id`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `favorates`
--
ALTER TABLE `favorates`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `password_reset`
--
ALTER TABLE `password_reset`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dr_id` (`dr_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allowed_id`
--
ALTER TABLE `allowed_id`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `favorates`
--
ALTER TABLE `favorates`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `password_reset`
--
ALTER TABLE `password_reset`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
