-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2022 at 07:15 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `goapps`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `username` varchar(191) NOT NULL,
  `attendance` varchar(100) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `username`, `attendance`, `time`) VALUES
(0, 'faiz', '', '2022-07-17 19:01:09.760589'),
(0, 'ainin', '', '2022-07-17 19:02:31.154513'),
(0, 'hadi', 'Hadir', '2022-07-17 19:04:08.601444'),
(0, 'vie chris', 'Tak Hadir', '2022-07-17 19:04:45.542798'),
(0, 'hadi', 'Hadir', '2022-08-01 18:37:43.620453'),
(0, 'irfan', 'Hadir', '2022-08-02 17:06:08.431419'),
(0, 'aziz', 'Hadir', '2022-08-06 10:41:01.318629'),
(0, 'hadi', 'Hadir', '2022-08-10 10:56:14.796748'),
(0, 'nashie', 'Hadir', '2022-08-10 10:58:25.931195'),
(0, 'hadi', 'Tak Hadir', '2022-08-10 11:01:24.934239'),
(0, 'bukanpaait', 'Hadir', '2022-08-10 11:04:00.440286'),
(0, 'panzz', 'Hadir', '2022-08-10 12:23:11.757753'),
(0, 'panzz', 'Hadir', '2022-08-10 14:47:48.486738'),
(0, 'panzz', 'Hadir', '2022-08-10 15:09:56.258514'),
(0, 'hadi', 'Hadir', '2022-08-10 15:25:50.040784'),
(0, 'hadi', 'Hadir', '2022-08-10 15:29:46.696624'),
(0, 'hadi', 'Tak Hadir', '2022-08-10 15:44:53.819033');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `telephone` int(100) NOT NULL,
  `workID` int(100) NOT NULL,
  `agency` varchar(150) NOT NULL,
  `department` varchar(150) NOT NULL,
  `typeofproblem` varchar(150) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`id`, `name`, `telephone`, `workID`, `agency`, `department`, `typeofproblem`, `comment`, `status`) VALUES
(7, 'Go-LA', 44455667, 1321434, 'LTAT', 'Asset', 'Cannot Download PDF nor Excel', 'hehehe', 'Done'),
(10, 'Irfan', 2147483647, 2147483647, 'MARDI', 'Asset', 'Cannot Download PDF nor Excel', '', 'On-Going'),
(11, 'irfan', 9999999, 123456, 'PTPK', 'Asset', 'Cannot Download PDF nor Excel', 'test1', 'on-going');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `filename`) VALUES
(8, 'IMG_5430.JPG'),
(7, 'IMG_5430.JPG'),
(6, ''),
(5, 'IMG_5412.JPG'),
(9, 'IMG_5430.JPG'),
(10, 'IMG_5418.JPG'),
(11, 'IMG_5418.JPG'),
(12, 'IMG_5418.JPG'),
(13, 'IMG_5439.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `position` varchar(100) NOT NULL,
  `rate` varchar(150) NOT NULL,
  `comment` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`id`, `name`, `email`, `position`, `rate`, `comment`) VALUES
(1, 'Go-LA', 'test@gmail.com', '', '', 'test'),
(2, 'cang', 'test@gmail.com', '', '', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `tblfiles`
--

CREATE TABLE `tblfiles` (
  `ID` int(11) NOT NULL,
  `FileName` varchar(30) NOT NULL,
  `Location` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblfiles`
--

INSERT INTO `tblfiles` (`ID`, `FileName`, `Location`) VALUES
(1, 'razak', 'Uploaded_Files/01072022041625Li report Muhd Faiz.docx'),
(2, 'yu', 'Uploaded_Files/01072022041721capstone faiz.docx'),
(3, 'hadi', 'Uploaded_Files/10082022025730ctu.odt'),
(4, 'hadi', 'Uploaded_Files/10082022030232ctu.odt'),
(5, '', 'Uploaded_Files/10082022032222Industrial Evaluation Rubric for Industrial Supervisor.xlsx');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `password`, `created_at`) VALUES
(1, 'root', '$2y$10$PKEcbZFL/.f7UHNMhb20i.QYV41pGrFBdHPMjfUgCMr9VLAIrZwv2', '2022-06-30 12:18:15'),
(2, 'bukanpaait', '$2y$10$aYMspkF4WR83lRofwhCUN.rJFGgJpfAKpSi3W6UqCpPdQV3qQqIGe', '2022-06-30 12:21:04'),
(3, 'hadi', '$2y$10$.wQkO8xBevirPSmxDGPYxOfDqnkqKMYO/hoIZMITnKKfgmUGY6ucW', '2022-06-30 12:22:04'),
(4, 'nashie', '$2y$10$QjlNIGRskNtNUuOx/AdYCuf49zkns5zaso.CpjPaVIUarweTSGRau', '2022-08-02 02:36:34'),
(6, '', '$2y$10$pJ.NCmcJf8YDVosBaURnc.TwXBvnMieE7ZtwYOf2Q8HuW.KZLyaa2', '2022-08-09 02:56:36'),
(7, 'panz', '$2y$10$N.rUdggcucnSMCG7/43oVepw8kNexMXnwpgp53.uyecTdkoqsOf1a', '2022-08-09 02:57:13'),
(9, 'panzz', '$2y$10$KEG92gj86Yqlhkgp3T4p7uHqnmNVN6wffUGK2YHmVaeNumDhMrQSi', '2022-08-09 02:58:20'),
(10, 'dahi', '$2y$10$v1PyGaU2DSeglIohxP.GRuUxDis/tb/qxyKMIaBA90gPX.SCnmdza', '2022-08-09 22:18:39'),
(11, 'dahi2', '$2y$10$4XXNaIviL0c4XheotjyNCOWLvaVY15b5zVI/VC1sB39UNxRuYEGfC', '2022-08-09 22:18:53'),
(14, 'dahi3', '$2y$10$QNhEAxCKfFk0op5XlYEG3e26EGxMmBzJU.dAbPQevZBQz7jEp4uIa', '2022-08-09 22:30:30'),
(16, 'dahi4', '$2y$10$zJM/1ssqZ9IQypxcM5uY0efvpPI/EQ5At7c.vMKVnXMnlcNVF/P7K', '2022-08-09 22:31:22'),
(19, 'dahi5', '$2y$10$4qNMSJXHKObj8QiKcrMO/.wBBZTrF23FhCdoAmK5JL/fS5fqz8uPS', '2022-08-10 17:55:14'),
(23, 'nashie1', '$2y$10$0u7i8NVZ2jt5JuASAKtmGe70UO9tNZW9wo5.wLXpLo7gtZNVn/LmG', '2022-08-10 17:57:42'),
(24, 'irfaan', '$2y$10$Q2CJrctv7uA5RGQ8.GCgfe91re8ps4VBQ505AsbdOBy2FGxOpongW', '2022-08-10 20:22:57'),
(51, 'htd', '$2y$10$q2PI1HlSUqHiVe0wrV9LnumGXgDBu5Sp/pajqu.HWLuUXylG8tn2e', '2022-08-11 00:07:22'),
(61, 'jkkkk', '$2y$10$k8.kc1pUrCBGAZc0ARM8Feu40/8p88Rhpc0.vEBgdr7eHpsH2z5cu', '2022-08-11 00:37:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblfiles`
--
ALTER TABLE `tblfiles`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblfiles`
--
ALTER TABLE `tblfiles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
