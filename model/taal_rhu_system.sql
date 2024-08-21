-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2024 at 05:23 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taal_rhu_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--

CREATE TABLE `dashboard` (
  `dashboard_id` int(11) NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `barangay` varchar(100) DEFAULT NULL,
  `checked_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dashboard`
--

INSERT INTO `dashboard` (`dashboard_id`, `patient_id`, `barangay`, `checked_date`) VALUES
(1, 1, 'Barangay A', '2024-07-10'),
(2, 2, 'Barangay B', '2024-07-15'),
(3, 3, 'Barangay C', '2024-07-20'),
(4, 4, 'Barangay D', '2024-07-25'),
(5, 5, 'Barangay E', '2024-07-30');

-- --------------------------------------------------------

--
-- Table structure for table `medical_records`
--

CREATE TABLE `medical_records` (
  `record_id` int(11) NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `checkup_date` date DEFAULT NULL,
  `diagnosis` text DEFAULT NULL,
  `treatment` text DEFAULT NULL,
  `bp` varchar(10) DEFAULT NULL,
  `temperature` decimal(4,2) DEFAULT NULL,
  `rr` int(11) DEFAULT NULL,
  `hr` int(11) DEFAULT NULL,
  `pr` int(11) DEFAULT NULL,
  `weight` decimal(5,2) DEFAULT NULL,
  `height` decimal(5,2) DEFAULT NULL,
  `doctor_notes` text DEFAULT NULL,
  `nurse_notes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medical_records`
--

INSERT INTO `medical_records` (`record_id`, `patient_id`, `checkup_date`, `diagnosis`, `treatment`, `bp`, `temperature`, `rr`, `hr`, `pr`, `weight`, `height`, `doctor_notes`, `nurse_notes`) VALUES
(2, 2, '2024-07-15', 'Diabetes', 'Medication B', '110/70', 36.70, 16, 70, 72, 65.30, 160.40, 'Monitor blood sugar levels', 'Diet adjustment'),
(3, 3, '2024-07-20', 'Asthma', 'Inhaler', '130/85', 36.80, 20, 75, 78, 80.20, 165.00, 'Regular use of inhaler', 'Avoid allergens'),
(4, 4, '2024-07-25', 'Arthritis', 'Painkillers', '140/90', 36.90, 18, 68, 70, 85.70, 175.30, 'Physiotherapy recommended', 'Daily exercise'),
(5, 5, '2024-07-30', 'Migraine', 'Painkillers', '125/82', 36.50, 16, 74, 76, 75.00, 172.50, 'Monitor for triggers', 'Keep headache diary');

-- --------------------------------------------------------

--
-- Stand-in structure for view `monthly_medical_records`
-- (See below for the actual view)
--
CREATE TABLE `monthly_medical_records` (
`month` int(2)
,`record_count` bigint(21)
);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `patient_id` int(11) NOT NULL,
  `qr_code` varchar(255) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `sex` enum('male','female','other') NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `civil_status` varchar(50) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `philhealth_id` varchar(50) DEFAULT NULL,
  `bp` varchar(10) DEFAULT NULL,
  `temperature` decimal(4,2) DEFAULT NULL,
  `rr` int(11) DEFAULT NULL,
  `hr` int(11) DEFAULT NULL,
  `pr` int(11) DEFAULT NULL,
  `weight` decimal(5,2) DEFAULT NULL,
  `height` decimal(5,2) DEFAULT NULL,
  `diagnosis` text DEFAULT NULL,
  `treatment` text DEFAULT NULL,
  `last_checkup_date` date DEFAULT NULL,
  `next_followup_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`patient_id`, `qr_code`, `full_name`, `sex`, `age`, `address`, `phone_number`, `civil_status`, `birthday`, `philhealth_id`, `bp`, `temperature`, `rr`, `hr`, `pr`, `weight`, `height`, `diagnosis`, `treatment`, `last_checkup_date`, `next_followup_date`) VALUES
(1, 'QRCODE12345', 'Patient One', 'male', 30, '123 Main St', '09171234567', 'single', '1994-05-12', 'PH12345', '120/80', 36.60, 18, 72, 75, 70.50, 170.20, 'Hypertension', 'Medication A', '2024-07-10', '2024-08-23'),
(2, 'QRCODE67890', 'Patient Two', 'female', 28, '456 Side St', '09181234567', 'married', '1996-08-22', 'PH67890', '110/70', 36.70, 16, 70, 72, 65.30, 160.40, 'Diabetes', 'Medication B', '2024-07-15', '2024-08-15'),
(3, 'QRCODE54321', 'Patient Three', 'female', 45, '789 High St', '09191234567', 'widowed', '1979-11-05', 'PH54321', '130/85', 36.80, 20, 75, 78, 80.20, 165.00, 'Asthma', 'Inhaler', '2024-07-20', '2024-08-20'),
(4, 'QRCODE98765', 'Patient Four', 'male', 60, '321 Low St', '09201234567', 'married', '1964-12-30', 'PH98765', '140/90', 36.90, 18, 68, 70, 85.70, 175.30, 'Arthritis', 'Painkillers', '2024-07-25', '2024-08-25'),
(5, 'QRCODE24680', 'Patient Five', 'male', 35, '654 Hill St', '09211234567', 'single', '1989-03-18', 'PH24680', '125/82', 36.50, 16, 74, 76, 75.00, 172.50, 'Migraine', 'Painkillers', '2024-07-30', '2024-08-30');

-- --------------------------------------------------------

--
-- Stand-in structure for view `patient_qr_status`
-- (See below for the actual view)
--
CREATE TABLE `patient_qr_status` (
`patient_id` int(11)
,`qr_code_exists` varchar(3)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `pm`
-- (See below for the actual view)
--
CREATE TABLE `pm` (
`patient_checkup_count_difference` bigint(22)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `qrm`
-- (See below for the actual view)
--
CREATE TABLE `qrm` (
`count` bigint(22)
);

-- --------------------------------------------------------

--
-- Table structure for table `qr_codes`
--

CREATE TABLE `qr_codes` (
  `qr_id` int(11) NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `qr_code` varchar(255) NOT NULL,
  `file_location` varchar(250) NOT NULL,
  `generated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `qr_codes`
--

INSERT INTO `qr_codes` (`qr_id`, `patient_id`, `qr_code`, `file_location`, `generated_at`) VALUES
(15, 1, 'qr_1.png', '../qrcodes/qr_1.png', '2024-08-13 08:05:58'),
(17, 2, 'qr_2.png', '../qrcodes/qr_2.png', '2024-08-14 04:48:31');

-- --------------------------------------------------------

--
-- Stand-in structure for view `rm`
-- (See below for the actual view)
--
CREATE TABLE `rm` (
`checkup_count_difference` bigint(22)
);

-- --------------------------------------------------------

--
-- Table structure for table `sms_notifications`
--

CREATE TABLE `sms_notifications` (
  `sms_id` int(11) NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `sent_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sms_notifications`
--

INSERT INTO `sms_notifications` (`sms_id`, `patient_id`, `message`, `sent_at`) VALUES
(1, 1, 'Your next checkup is on 2024-08-10.', '2024-08-06 14:47:29'),
(2, 2, 'Your next checkup is on 2024-08-15.', '2024-08-06 14:47:29'),
(3, 3, 'Your next checkup is on 2024-08-20.', '2024-08-06 14:47:29');

-- --------------------------------------------------------

--
-- Stand-in structure for view `upcoming_followups`
-- (See below for the actual view)
--
CREATE TABLE `upcoming_followups` (
`patient_id` int(11)
,`full_name` varchar(100)
,`next_followup_date` date
);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `role` enum('admin','health_worker') NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password_hash`, `email`, `full_name`, `role`, `last_login`, `date_created`) VALUES
(1, 'admin1', '$2y$10$yRDq0XEnbE/fu/h6GGSPc.VGMOUTJzNoH5fM/PfbOFxEb04w.o0VW', 'admin1@example.com', 'Admin One', 'admin', '2024-08-13 04:02:00', '2024-08-21 14:23:49'),
(2, 'admin2', 'hashedpassword2', 'admin2@example.com', 'Admin Two', 'admin', '2024-08-06 14:47:03', '2024-08-21 14:23:49'),
(3, 'healthworker1', '$2y$10$yRDq0XEnbE/fu/h6GGSPc.VGMOUTJzNoH5fM/PfbOFxEb04w.o0VW', 'hw1@example.com', 'Health Worker One', 'health_worker', '2024-08-14 03:29:54', '2024-08-21 14:23:49'),
(4, 'healthworker2', 'hashedpassword4', 'hw2@example.com', 'Health Worker Two', 'health_worker', '2024-08-06 14:47:03', '2024-08-21 14:23:49'),
(5, 'healthworker3', 'hashedpassword5', 'hw3@example.com', 'Health Worker Three', 'health_worker', '2024-08-06 14:47:03', '2024-08-21 14:23:49'),
(11, 'dsdgsfs', 'xvsdfsdfds', 'fdsfsssd@gmail.com', 'asdasdasd', 'health_worker', '2024-08-07 06:02:30', '2024-08-21 14:23:49');

-- --------------------------------------------------------

--
-- Stand-in structure for view `wm`
-- (See below for the actual view)
--
CREATE TABLE `wm` (
`health_worker_created_difference` bigint(22)
);

-- --------------------------------------------------------

--
-- Structure for view `monthly_medical_records`
--
DROP TABLE IF EXISTS `monthly_medical_records`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `monthly_medical_records`  AS SELECT `m`.`month_number` AS `month`, ifnull(count(`mr`.`record_id`),0) AS `record_count` FROM ((select 1 AS `month_number` union select 2 AS `2` union select 3 AS `3` union select 4 AS `4` union select 5 AS `5` union select 6 AS `6` union select 7 AS `7` union select 8 AS `8` union select 9 AS `9` union select 10 AS `10` union select 11 AS `11` union select 12 AS `12`) `m` left join `medical_records` `mr` on(`m`.`month_number` = month(`mr`.`checkup_date`))) GROUP BY `m`.`month_number` ORDER BY `m`.`month_number` ASC ;

-- --------------------------------------------------------

--
-- Structure for view `patient_qr_status`
--
DROP TABLE IF EXISTS `patient_qr_status`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `patient_qr_status`  AS SELECT `mr`.`patient_id` AS `patient_id`, CASE WHEN exists(select 1 from `qr_codes` `qc` where `qc`.`patient_id` = `mr`.`patient_id` limit 1) THEN 'Yes' ELSE 'No' END AS `qr_code_exists` FROM `patients` AS `mr` ;

-- --------------------------------------------------------

--
-- Structure for view `pm`
--
DROP TABLE IF EXISTS `pm`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pm`  AS SELECT (select count(0) from `patients` where month(`patients`.`last_checkup_date`) = month(curdate()) and year(`patients`.`last_checkup_date`) = year(curdate())) - (select count(0) from `patients` where month(`patients`.`last_checkup_date`) = month(curdate() - interval 1 month) and year(`patients`.`last_checkup_date`) = year(curdate() - interval 1 month)) AS `patient_checkup_count_difference` ;

-- --------------------------------------------------------

--
-- Structure for view `qrm`
--
DROP TABLE IF EXISTS `qrm`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `qrm`  AS SELECT (select count(0) from `qr_codes` where month(`qr_codes`.`generated_at`) = month(curdate()) and year(`qr_codes`.`generated_at`) = year(curdate())) - (select count(0) from `qr_codes` where month(`qr_codes`.`generated_at`) = month(curdate() - interval 1 month) and year(`qr_codes`.`generated_at`) = year(curdate() - interval 1 month)) AS `count` ;

-- --------------------------------------------------------

--
-- Structure for view `rm`
--
DROP TABLE IF EXISTS `rm`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `rm`  AS SELECT (select count(0) from `medical_records` where month(`medical_records`.`checkup_date`) = month(curdate()) and year(`medical_records`.`checkup_date`) = year(curdate())) - (select count(0) from `medical_records` where month(`medical_records`.`checkup_date`) = month(curdate() - interval 1 month) and year(`medical_records`.`checkup_date`) = year(curdate() - interval 1 month)) AS `checkup_count_difference` ;

-- --------------------------------------------------------

--
-- Structure for view `upcoming_followups`
--
DROP TABLE IF EXISTS `upcoming_followups`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `upcoming_followups`  AS SELECT `patients`.`patient_id` AS `patient_id`, `patients`.`full_name` AS `full_name`, `patients`.`next_followup_date` AS `next_followup_date` FROM `patients` WHERE `patients`.`next_followup_date` between curdate() and curdate() + interval 7 day ORDER BY `patients`.`next_followup_date` ASC ;

-- --------------------------------------------------------

--
-- Structure for view `wm`
--
DROP TABLE IF EXISTS `wm`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `wm`  AS SELECT (select count(0) from `users` where `users`.`role` = 'health_worker' and month(`users`.`date_created`) = month(curdate()) and year(`users`.`date_created`) = year(curdate())) - (select count(0) from `users` where `users`.`role` = 'health_worker' and month(`users`.`date_created`) = month(curdate() - interval 1 month) and year(`users`.`date_created`) = year(curdate() - interval 1 month)) AS `health_worker_created_difference` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dashboard`
--
ALTER TABLE `dashboard`
  ADD PRIMARY KEY (`dashboard_id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `medical_records`
--
ALTER TABLE `medical_records`
  ADD PRIMARY KEY (`record_id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`patient_id`),
  ADD UNIQUE KEY `qr_code` (`qr_code`);

--
-- Indexes for table `qr_codes`
--
ALTER TABLE `qr_codes`
  ADD PRIMARY KEY (`qr_id`),
  ADD UNIQUE KEY `qr_code` (`qr_code`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `sms_notifications`
--
ALTER TABLE `sms_notifications`
  ADD PRIMARY KEY (`sms_id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dashboard`
--
ALTER TABLE `dashboard`
  MODIFY `dashboard_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `medical_records`
--
ALTER TABLE `medical_records`
  MODIFY `record_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `qr_codes`
--
ALTER TABLE `qr_codes`
  MODIFY `qr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sms_notifications`
--
ALTER TABLE `sms_notifications`
  MODIFY `sms_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dashboard`
--
ALTER TABLE `dashboard`
  ADD CONSTRAINT `dashboard_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`patient_id`) ON DELETE CASCADE;

--
-- Constraints for table `medical_records`
--
ALTER TABLE `medical_records`
  ADD CONSTRAINT `medical_records_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`patient_id`) ON DELETE CASCADE;

--
-- Constraints for table `qr_codes`
--
ALTER TABLE `qr_codes`
  ADD CONSTRAINT `qr_codes_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`patient_id`) ON DELETE CASCADE;

--
-- Constraints for table `sms_notifications`
--
ALTER TABLE `sms_notifications`
  ADD CONSTRAINT `sms_notifications_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`patient_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
