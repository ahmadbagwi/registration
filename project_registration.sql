-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 25, 2019 at 01:37 AM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) UNSIGNED NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `toc` varchar(10) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `address` text,
  `dob` date NOT NULL,
  `type` varchar(20) NOT NULL,
  `ccNumber` varchar(20) NOT NULL,
  `ccType` varchar(10) NOT NULL,
  `ccDate` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `toc`, `password`, `address`, `dob`, `type`, `ccNumber`, `ccType`, `ccDate`, `created_at`, `updated_at`) VALUES
(1, 'Ahmad', 'Rifai', 'ahmad.bagwi@sangkuriang.co.id', 'accept', 'bismillah', 'Pabuaran Kaum No.71 Cibanteng\r\nKecamatan Ciampea', '2019-10-24', 'Gold', '2147483647', 'Visa', '0000-00-00', '2019-10-24 11:44:11', '2019-10-24 11:44:11'),
(2, 'Dinda', 'Yourista', 'dinda.ipb42@gmail.com', 'accept', 'qwerty', 'Pabuaran Kaum No.71 Cibanteng\r\nKecamatan Ciampea', '2019-10-24', 'Platinum', '5361', 'Master Car', '10/21', '2019-10-24 16:35:23', '2019-10-24 16:35:23'),
(3, 'Arumi', 'Nismara', 'nismara@gmail.com', 'accept', 'Bismillah', 'Jl. Cibanteng', '2019-10-24', 'Platinum', '5361-8436-6660-5097', 'Master Car', '10/21', '2019-10-24 16:38:21', '2019-10-24 16:38:21'),
(4, 'Nismara', 'Rifanti', 'rifanti@gmail.com', 'accept', 'bismillah', 'Jl. Cibanteng 123', '2019-10-24', 'Platinum', '5361-8436-6660-5097', 'Visa', '10/21', '2019-10-24 16:52:53', '2019-10-24 16:52:53'),
(5, 'AhmadBagwi ', 'Rifai', 'ahmad.bagwi@sangkuriang.co.id', 'accept', '$2y$10$lSWnTiQE9WqSvpfvD.qRKud56N/UKjwNSGZS72rXmYurypc85ZVqi', 'Pabuaran Kaum No.71 Cibanteng\r\nKecamatan Ciampea', '2019-10-18', 'Platinum', '5361-8436-6660-5097', 'Visa', '10/21', '2019-10-24 16:54:53', '2019-10-24 16:54:53'),
(6, 'Ahmad', 'Rifai', 'ahmad.bagwi@sangkuriang.co.id', 'accept', '$2y$10$q/9zJnNG6EAZkBv4qQDX2uRLSg/DzzLDxr0ueDHbLdGDiOq1PJbwu', 'Pabuaran Kaum No.71 Cibanteng\r\nKecamatan Ciampea', '2019-10-17', 'Black', '5361-8436-6660-5097', 'Master Car', '10/21', '2019-10-24 16:57:51', '2019-10-24 16:57:51'),
(7, 'Ahmad', 'Rifai', 'ahmad.bagwi@sangkuriang', 'accept', '$2y$10$x8XhZCvGdMSV/6wSHpGMBuvGLA2zaa5eZkGECGyo9Khil2yWfF6x6', 'Pabuaran Kaum No.71 Cibanteng\r\nKecamatan Ciampea', '2019-10-08', 'Black', '5361-8436-6660-5097', 'Master Car', '10/21', '2019-10-24 16:59:46', '2019-10-24 16:59:46'),
(8, 'Ahmad Bagwi', 'Rifai', 'ahmadbagwi.id@gmail.com', 'accept', '$2y$10$3fFhjBApY5lOJ9QRywLLdOxaPR2xgGWQ4svszl.oGapNj0d.WjJr.', 'TDP 3', '2019-10-17', 'Platinum', '5361-8436-6660-5097', 'Master Car', '10/21', '2019-10-24 17:51:59', '2019-10-24 17:51:59'),
(9, 'Ahmad', 'Rifai', 'mail@ahmadbagwi.id', 'accept', '$2y$10$sBMomcZN.IjRvNec1fpUmutunK6IK5bzFxU7K5wbveBon5ro1J2AS', 'Pabuaran Kaum No.71 Cibanteng\r\nKecamatan Ciampea', '2019-10-25', 'Platinum', '5361-8436-6660-5097', 'Visa', '10/21', '2019-10-24 18:22:21', '2019-10-24 18:22:21'),
(10, 'Ahmad Bagwi', 'Rifai', 'me@ahmadbagwi.id', 'accept', '$2y$10$oUK0ozMkQmtx8JBfSGh4rOWy4EyRwxgj5hVpL1Yns.NVWDhVWwDzi', 'Taman Darmaga Permai 3', '2019-10-15', 'Black', '5361-8436-6660-5097', 'Visa', '10/21', '2019-10-24 18:35:44', '2019-10-24 18:35:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
