-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2024 at 01:33 AM
-- Server version: 11.5.2-MariaDB
-- PHP Version: 8.2.12

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
-- Table structure for table `child`
--

CREATE TABLE `child` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `place_of_birth` varchar(100) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `mother_name` varchar(100) DEFAULT NULL,
  `father_name` varchar(100) DEFAULT NULL,
  `birth_height` decimal(5,2) DEFAULT NULL,
  `birth_weight` decimal(5,2) DEFAULT NULL,
  `sex` enum('Male','Female') DEFAULT NULL,
  `contact_number` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`id`, `name`, `date_of_birth`, `place_of_birth`, `address`, `mother_name`, `father_name`, `birth_height`, `birth_weight`, `sex`, `contact_number`) VALUES
(1, 'Alice Smith', '2020-02-15', 'New York', '123 Maple Street', 'Emma Smith', 'John Smith', 50.20, 3.50, 'Female', '1234567890'),
(2, 'Bob Johnson', '2019-05-21', 'Los Angeles', '456 Oak Street', 'Sarah Johnson', 'Mike Johnson', 49.80, 3.20, 'Male', '0987654321'),
(3, 'Catherine Brown', '2018-07-30', 'Chicago', '789 Pine Street', 'Laura Brown', 'David Brown', 50.50, 3.40, 'Female', '1122334455'),
(4, 'Daniel White', '2021-11-25', 'Houston', '321 Cedar Street', 'Sophia White', 'Chris White', 48.70, 3.10, 'Male', '2233445566'),
(5, 'Eva Green', '2020-10-10', 'Phoenix', '654 Spruce Street', 'Mia Green', 'Tom Green', 51.00, 3.70, 'Female', '3344556677'),
(6, 'Frank Harris', '2019-08-18', 'Philadelphia', '987 Willow Street', 'Olivia Harris', 'James Harris', 49.50, 3.30, 'Male', '4455667788'),
(7, 'Grace Hall', '2018-03-12', 'San Antonio', '741 Birch Street', 'Lily Hall', 'Robert Hall', 50.80, 3.60, 'Female', '5566778899'),
(8, 'Henry Lee', '2021-09-05', 'San Diego', '852 Elm Street', 'Isabella Lee', 'Richard Lee', 48.90, 3.00, 'Male', '6677889900'),
(9, 'Isla Walker', '2020-12-20', 'Dallas', '963 Maple Avenue', 'Amelia Walker', 'George Walker', 50.30, 3.50, 'Female', '7788990011'),
(10, 'Jack Young', '2019-04-17', 'San Jose', '357 Oak Avenue', 'Ella Young', 'Edward Young', 49.70, 3.40, 'Male', '8899001122'),
(11, 'Kylie King', '2018-06-15', 'Austin', '159 Pine Avenue', 'Ava King', 'Charles King', 50.60, 3.50, 'Female', '9900112233');

-- --------------------------------------------------------

--
-- Stand-in structure for view `child_immunization_view`
-- (See below for the actual view)
--
CREATE TABLE `child_immunization_view` (
`child_id` int(11)
,`child_name` varchar(100)
,`child_date_of_birth` date
,`child_place_of_birth` varchar(100)
,`child_address` varchar(255)
,`child_mother_name` varchar(100)
,`child_father_name` varchar(100)
,`child_birth_height` decimal(5,2)
,`child_birth_weight` decimal(5,2)
,`child_sex` enum('Male','Female')
,`child_contact_number` varchar(15)
,`immunization_record_id` int(11)
,`vaccine` enum('BCG Vaccine - At Birth','Hepatitis B Vaccine - At Birth','Pentavalent Vaccine (DPT-Hep B-HIB) - 1 1/2 Months','Pentavalent Vaccine (DPT-Hep B-HIB) - 2 1/2 Months','Pentavalent Vaccine (DPT-Hep B-HIB) - 3 1/2 Months','Oral Polio Vaccine (OPV) - 1 1/2 Months','Oral Polio Vaccine (OPV) - 2 1/2 Months','Oral Polio Vaccine (OPV) - 3 1/2 Months','Inactivated Polio Vaccine (IPV) - 3 1/2 Months','Inactivated Polio Vaccine (IPV) - 9 Months','Pneumococcal Conjugate Vaccine (PCV) - 1 1/2 Months','Pneumococcal Conjugate Vaccine (PCV) - 2 1/2 Months','Pneumococcal Conjugate Vaccine (PCV) - 3 1/2 Months','Measles, Mumps, Rubella Vaccine (MMR) - 9 Months','Measles, Mumps, Rubella Vaccine (MMR) - 1 Year','Measles Containing Vaccine (MCV) MR/MMR - Grade 1','Measles Containing Vaccine (MCV) MR/MMR - Grade 7','Tetanus Diphtheria (TD) - Grade 1 & 7','Human Papillomavirus Vaccine - Grade 4 (FEMALE 9-14 Years Old)','Influenza Vaccine - Senior Citizen','Pneumococcal Vaccine - Senior Citizen','Others')
,`vaccine_date_given` date
,`vaccine_remarks` text
);

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
-- Table structure for table `immunization_record_child`
--

CREATE TABLE `immunization_record_child` (
  `id` int(11) NOT NULL,
  `person_id` int(11) DEFAULT NULL,
  `vaccine` enum('BCG Vaccine - At Birth','Hepatitis B Vaccine - At Birth','Pentavalent Vaccine (DPT-Hep B-HIB) - 1 1/2 Months','Pentavalent Vaccine (DPT-Hep B-HIB) - 2 1/2 Months','Pentavalent Vaccine (DPT-Hep B-HIB) - 3 1/2 Months','Oral Polio Vaccine (OPV) - 1 1/2 Months','Oral Polio Vaccine (OPV) - 2 1/2 Months','Oral Polio Vaccine (OPV) - 3 1/2 Months','Inactivated Polio Vaccine (IPV) - 3 1/2 Months','Inactivated Polio Vaccine (IPV) - 9 Months','Pneumococcal Conjugate Vaccine (PCV) - 1 1/2 Months','Pneumococcal Conjugate Vaccine (PCV) - 2 1/2 Months','Pneumococcal Conjugate Vaccine (PCV) - 3 1/2 Months','Measles, Mumps, Rubella Vaccine (MMR) - 9 Months','Measles, Mumps, Rubella Vaccine (MMR) - 1 Year','Measles Containing Vaccine (MCV) MR/MMR - Grade 1','Measles Containing Vaccine (MCV) MR/MMR - Grade 7','Tetanus Diphtheria (TD) - Grade 1 & 7','Human Papillomavirus Vaccine - Grade 4 (FEMALE 9-14 Years Old)','Influenza Vaccine - Senior Citizen','Pneumococcal Vaccine - Senior Citizen','Others') DEFAULT NULL,
  `date_given` date DEFAULT NULL,
  `remarks` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `immunization_record_child`
--

INSERT INTO `immunization_record_child` (`id`, `person_id`, `vaccine`, `date_given`, `remarks`) VALUES
(1, 1, 'Others', '2020-02-15', 'No adverse reactions'),
(2, 1, 'Pentavalent Vaccine (DPT-Hep B-HIB) - 1 1/2 Months', '2020-02-16', 'Mild fever'),
(3, 1, 'Pentavalent Vaccine (DPT-Hep B-HIB) - 3 1/2 Months', '2020-04-01', 'No side effects'),
(4, 2, 'BCG Vaccine - At Birth', '2019-05-21', 'No adverse reactions'),
(5, 2, 'Hepatitis B Vaccine - At Birth', '2019-05-22', 'Mild swelling'),
(6, 2, 'Pentavalent Vaccine (DPT-Hep B-HIB) - 1 1/2 Months', '2019-07-05', 'No side effects'),
(7, 3, 'BCG Vaccine - At Birth', '2018-07-30', 'No adverse reactions'),
(8, 3, 'Hepatitis B Vaccine - At Birth', '2018-07-31', 'Slight redness at injection site'),
(9, 3, 'Pentavalent Vaccine (DPT-Hep B-HIB) - 1 1/2 Months', '2018-09-14', 'Mild fever'),
(10, 4, 'BCG Vaccine - At Birth', '2021-11-25', 'No adverse reactions'),
(11, 4, 'Hepatitis B Vaccine - At Birth', '2021-11-26', 'No side effects'),
(12, 4, 'Pentavalent Vaccine (DPT-Hep B-HIB) - 1 1/2 Months', '2022-01-09', 'Slight fever'),
(13, 5, 'BCG Vaccine - At Birth', '2020-10-10', 'No adverse reactions'),
(14, 5, 'Hepatitis B Vaccine - At Birth', '2020-10-11', 'Minor swelling'),
(15, 5, 'Pentavalent Vaccine (DPT-Hep B-HIB) - 1 1/2 Months', '2020-11-24', 'No side effects'),
(16, 6, 'BCG Vaccine - At Birth', '2019-08-18', 'No adverse reactions'),
(17, 6, 'Hepatitis B Vaccine - At Birth', '2019-08-19', 'Mild redness at site'),
(18, 6, 'Pentavalent Vaccine (DPT-Hep B-HIB) - 1 1/2 Months', '2019-10-02', 'No side effects'),
(19, 7, 'BCG Vaccine - At Birth', '2018-03-12', 'No adverse reactions'),
(20, 7, 'Hepatitis B Vaccine - At Birth', '2018-03-13', 'Slight fever'),
(21, 7, 'Pentavalent Vaccine (DPT-Hep B-HIB) - 1 1/2 Months', '2018-04-27', 'No side effects'),
(22, 8, 'BCG Vaccine - At Birth', '2021-09-05', 'No adverse reactions'),
(23, 8, 'Hepatitis B Vaccine - At Birth', '2021-09-06', 'Mild swelling'),
(24, 8, 'Pentavalent Vaccine (DPT-Hep B-HIB) - 1 1/2 Months', '2021-10-20', 'No side effects'),
(25, 9, 'BCG Vaccine - At Birth', '2020-12-20', 'No adverse reactions'),
(26, 9, 'Hepatitis B Vaccine - At Birth', '2020-12-21', 'Slight redness'),
(27, 9, 'Pentavalent Vaccine (DPT-Hep B-HIB) - 1 1/2 Months', '2021-02-04', 'No side effects'),
(28, 10, 'BCG Vaccine - At Birth', '2019-04-17', 'No adverse reactions'),
(29, 10, 'Hepatitis B Vaccine - At Birth', '2019-04-18', 'Mild fever'),
(30, 10, 'Pentavalent Vaccine (DPT-Hep B-HIB) - 1 1/2 Months', '2019-06-01', 'No side effects'),
(31, 11, 'BCG Vaccine - At Birth', '2018-06-15', 'No adverse reactions'),
(32, 11, 'Hepatitis B Vaccine - At Birth', '2018-06-16', 'Mild redness at site'),
(33, 11, 'Pentavalent Vaccine (DPT-Hep B-HIB) - 1 1/2 Months', '2018-07-30', 'Slight fever'),
(34, 3, 'Oral Polio Vaccine (OPV) - 2 1/2 Months', '2024-11-21', 'dsfdsfds');

-- --------------------------------------------------------

--
-- Table structure for table `immunization_record_pregnant`
--

CREATE TABLE `immunization_record_pregnant` (
  `id` int(11) NOT NULL,
  `family_id` int(11) DEFAULT NULL,
  `dose` enum('1st dose - as early as possible during pregnancy','2nd dose - at least 4 weeks after dose 1','3rd dose - at least 6 months after dose 2','4th dose - at least 1 year after dose 3','5th dose - at least 1 year after dose 4','Fully Immunized - received all 5 doses') NOT NULL,
  `date_given` date DEFAULT NULL,
  `return_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `immunization_record_pregnant`
--

INSERT INTO `immunization_record_pregnant` (`id`, `family_id`, `dose`, `date_given`, `return_date`) VALUES
(1, 1, '5th dose - at least 1 year after dose 4', '2024-01-01', '2024-01-15'),
(2, 1, '2nd dose - at least 4 weeks after dose 1', '2024-02-01', '2024-02-15'),
(3, 1, '3rd dose - at least 6 months after dose 2', '2024-07-01', '2024-07-15'),
(4, 2, '1st dose - as early as possible during pregnancy', '2024-01-02', '2024-01-16'),
(5, 2, '2nd dose - at least 4 weeks after dose 1', '2024-02-02', '2024-02-16'),
(6, 2, '3rd dose - at least 6 months after dose 2', '2024-07-02', '2024-07-16'),
(7, 3, '1st dose - as early as possible during pregnancy', '2024-01-03', '2024-01-17'),
(8, 3, '2nd dose - at least 4 weeks after dose 1', '2024-02-03', '2024-02-17'),
(9, 3, '3rd dose - at least 6 months after dose 2', '2024-07-03', '2024-07-17'),
(10, 4, '1st dose - as early as possible during pregnancy', '2024-01-04', '2024-01-18'),
(11, 4, '2nd dose - at least 4 weeks after dose 1', '2024-02-04', '2024-02-18'),
(12, 4, '3rd dose - at least 6 months after dose 2', '2024-07-04', '2024-07-18'),
(13, 5, '1st dose - as early as possible during pregnancy', '2024-01-05', '2024-01-19'),
(14, 5, '2nd dose - at least 4 weeks after dose 1', '2024-02-05', '2024-02-19'),
(15, 5, '3rd dose - at least 6 months after dose 2', '2024-07-05', '2024-07-19'),
(16, 6, '1st dose - as early as possible during pregnancy', '2024-01-06', '2024-01-20'),
(17, 6, '2nd dose - at least 4 weeks after dose 1', '2024-02-06', '2024-02-20'),
(18, 6, '3rd dose - at least 6 months after dose 2', '2024-07-06', '2024-07-20'),
(19, 7, '1st dose - as early as possible during pregnancy', '2024-01-07', '2024-01-21'),
(20, 7, '2nd dose - at least 4 weeks after dose 1', '2024-02-07', '2024-02-21'),
(21, 7, '3rd dose - at least 6 months after dose 2', '2024-07-07', '2024-07-21'),
(22, 8, '1st dose - as early as possible during pregnancy', '2024-01-08', '2024-01-22'),
(23, 8, '2nd dose - at least 4 weeks after dose 1', '2024-02-08', '2024-02-22'),
(24, 8, '3rd dose - at least 6 months after dose 2', '2024-07-08', '2024-07-22'),
(25, 9, '1st dose - as early as possible during pregnancy', '2024-01-09', '2024-01-23'),
(26, 9, '2nd dose - at least 4 weeks after dose 1', '2024-02-09', '2024-02-23'),
(27, 9, '3rd dose - at least 6 months after dose 2', '2024-07-09', '2024-07-23'),
(28, 10, '1st dose - as early as possible during pregnancy', '2024-01-10', '2024-01-24'),
(29, 10, '2nd dose - at least 4 weeks after dose 1', '2024-02-10', '2024-02-24'),
(30, 10, '3rd dose - at least 6 months after dose 2', '2024-07-10', '2024-07-24'),
(31, 3, '1st dose - as early as possible during pregnancy', '2024-10-31', '2024-11-14');

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
(5, 5, '2024-07-30', 'Migraine', 'Painkillers', '125/82', 36.50, 16, 74, 76, 75.00, 172.50, 'Monitor for triggers', 'Keep headache diary'),
(7, 4, '2024-11-23', 'ertre', 'ert', 'ertert', 34.00, 52, 32, 32, 12.00, 12.00, '12', '12');

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
(1, 'QRCODE12345', 'Patient One', 'male', 30, '123 Main St', '09171234567', 'single', '1994-05-12', 'PH12345', '120/80', 36.60, 18, 72, 75, 70.50, 170.20, 'Animal bite', 'Medication A', '2024-07-10', '2024-08-23'),
(2, 'QRCODE67890', 'Patient Two', 'female', 28, '456 Side St', '09181234567', 'married', '1996-08-22', 'PH67890', '110/70', 36.70, 16, 70, 72, 65.30, 160.40, 'Dental care', 'Medication B', '2024-07-15', '2024-08-15'),
(3, 'QRCODE54321', 'Patient Three', 'female', 45, '789 High St', '09191234567', 'widowed', '1979-11-05', 'PH54321', '130/85', 36.80, 20, 75, 78, 80.20, 165.00, 'Family planning', 'Inhaler', '2024-07-20', '2024-08-20'),
(4, 'QRCODE98765', 'Patient Four', 'male', 60, '321 Low St', '09201234567', 'married', '1964-12-30', 'PH98765', '140/90', 36.90, 18, 68, 70, 85.70, 175.30, 'National tuberculosis program', 'Painkillers', '2024-07-25', '2024-08-25'),
(5, 'QRCODE24680', 'Patient Five', 'male', 35, '654 Hill St', '09211234567', 'single', '1989-03-18', 'PH24680', '125/82', 36.50, 16, 74, 76, 75.00, 172.50, 'Non-communicable disease', 'Painkillers', '2024-07-30', '2024-08-30'),
(7, 'QR001', 'Juan Dela Cruz', 'male', 30, '123 Main St', '09171234567', 'single', '1993-05-14', 'PH001', '120/80', 36.50, 16, 80, 70, 68.50, 170.20, 'Nutrition', 'Medication A', '2024-10-15', '2025-01-15'),
(8, 'QR002', 'Maria Santos', 'female', 28, '456 Oak St', '09281234567', 'married', '1995-07-22', 'PH002', '110/70', 37.00, 18, 85, 75, 55.00, 160.50, 'Animal bite', 'Anti-rabies Vaccine', '2024-10-12', '2025-01-12'),
(9, 'QR003', 'Carlos Reyes', 'male', 40, '789 Pine St', '09331234567', 'single', '1983-11-30', 'PH003', '130/85', 36.70, 20, 90, 80, 80.50, 175.30, 'Dental care', 'Tooth extraction', '2024-10-10', '2025-01-10'),
(10, 'QR004', 'Andrea Cruz', 'female', 25, '135 Maple St', '09192234567', 'single', '1998-06-19', 'PH004', '115/75', 36.80, 18, 88, 72, 50.00, 158.40, 'Family planning', 'Contraceptive Pills', '2024-10-05', '2025-01-05'),
(11, 'QR005', 'Nico Gomez', 'male', 33, '246 Elm St', '09222345678', 'married', '1990-04-01', 'PH005', '125/80', 36.60, 15, 78, 70, 70.00, 172.10, 'National tuberculosis program', 'Anti-TB medication', '2024-10-01', '2025-01-01'),
(12, 'QR006', 'Sophia Mercado', 'female', 50, '357 Birch St', '09181122334', 'widowed', '1973-08-14', 'PH006', '140/90', 37.20, 22, 92, 85, 75.00, 160.00, 'Non-communicable disease', 'Blood pressure medication', '2024-09-30', '2025-01-30'),
(13, 'QR007', 'Eliseo Garcia', 'male', 60, '468 Cedar St', '09342234567', 'single', '1963-02-10', 'PH007', '135/85', 36.40, 16, 76, 72, 78.00, 165.50, 'Maternal and child', 'Prenatal care', '2024-09-25', '2025-02-25'),
(14, 'QR008', 'Isabel Torres', 'female', 35, '579 Birch St', '09174455678', 'married', '1988-03-28', 'PH008', '120/80', 36.70, 18, 80, 75, 60.00, 167.00, 'National immunization program', 'Vaccination schedule', '2024-09-20', '2025-02-20'),
(15, 'QR009', 'Markus Reyes', 'male', 26, '680 Pine St', '09265556789', 'single', '1997-12-09', 'PH009', '125/80', 36.50, 14, 78, 72, 82.00, 171.20, 'ESU epidemiology surveillance', 'Health monitoring', '2024-09-10', '2025-01-10'),
(16, 'QR010', 'Ana Perez', 'female', 42, '791 Oak St', '09184456789', 'married', '1981-05-25', 'PH010', '130/85', 36.90, 20, 85, 80, 74.50, 162.80, 'Nutrition', 'Dietary supplements', '2024-09-05', '2025-01-05'),
(17, 'QR011', 'Felipe Villanueva', 'male', 22, '902 Maple St', '09353345678', 'single', '2001-01-15', 'PH011', '120/75', 36.60, 17, 88, 73, 68.00, 169.00, 'Laboratory services', 'Blood test', '2024-08-30', '2025-02-28'),
(18, 'QR012', 'Jacqueline Diaz', 'female', 37, '123 Oak St', '09274467890', 'single', '1986-09-10', 'PH012', '118/76', 36.80, 19, 84, 78, 65.50, 160.20, 'Laboratory services', 'Routine check-up', '2024-08-28', '2025-01-28'),
(19, 'QR013', 'Michael Lopez', 'male', 55, '234 Pine St', '09195567890', 'married', '1968-02-18', 'PH013', '140/95', 37.30, 21, 90, 82, 85.00, 174.30, 'Animal bite', 'Anti-rabies Vaccine', '2024-08-22', '2025-02-22'),
(20, 'QR014', 'Victoria Cruz', 'female', 29, '345 Cedar St', '09213344567', 'single', '1994-03-12', 'PH014', '125/80', 36.50, 20, 82, 75, 70.00, 168.90, 'Dental care', 'Filling', '2024-08-18', '2025-02-18'),
(21, 'QR015', 'Diego Reyes', 'male', 47, '456 Birch St', '09184456780', 'married', '1976-06-05', 'PH015', '130/85', 36.60, 18, 86, 78, 77.00, 173.50, 'Family planning', 'Sterilization', '2024-08-14', '2025-02-14'),
(22, 'QR016', 'Lydia Santos', 'female', 38, '567 Maple St', '09224435678', 'widowed', '1985-07-02', 'PH016', '120/78', 36.70, 16, 80, 70, 66.50, 165.00, 'National tuberculosis program', 'Anti-TB medication', '2024-08-10', '2025-02-10'),
(23, 'QR017', 'Carla Gomez', 'female', 39, '678 Pine St', '09193344567', 'single', '1984-09-22', 'PH017', '130/80', 36.40, 18, 84, 74, 71.00, 162.20, 'Non-communicable disease', 'Cholesterol medication', '2024-08-06', '2025-02-06'),
(24, 'QR018', 'Antonio Hernandez', 'male', 60, '789 Cedar St', '09334456789', 'single', '1963-12-15', 'PH018', '140/90', 37.10, 19, 87, 82, 80.00, 170.40, 'Maternal and child', 'Health screening', '2024-08-03', '2025-02-03'),
(25, 'QR019', 'Pilar Torres', 'female', 41, '890 Oak St', '09281122334', 'married', '1982-02-12', 'PH019', '125/85', 36.90, 16, 85, 77, 73.00, 160.50, 'National immunization program', 'Vaccination', '2024-08-01', '2025-02-01'),
(26, 'QR020', 'Rafael Mendoza', 'male', 35, '901 Birch St', '09351122334', 'single', '1988-01-07', 'PH020', '120/80', 36.70, 17, 79, 74, 75.00, 175.00, 'ESU epidemiology surveillance', 'Disease monitoring', '2024-07-30', '2025-01-30'),
(27, 'QR021', 'Martina Reyes', 'female', 48, '112 Cedar St', '09172234567', 'widowed', '1975-11-03', 'PH021', '130/85', 37.00, 20, 84, 78, 66.50, 163.00, 'Nutrition', 'Nutritional counseling', '2024-07-25', '2025-01-25'),
(28, 'QR022', 'Oscar Valdez', 'male', 29, '223 Pine St', '09223344567', 'single', '1994-03-15', 'PH022', '125/80', 36.50, 19, 85, 76, 72.00, 167.20, 'Laboratory services', 'X-ray', '2024-07-18', '2025-01-18'),
(29, 'QR023', 'Diana Ramos', 'female', 33, '334 Birch St', '09183344567', 'married', '1990-05-20', 'PH023', '120/75', 36.60, 18, 80, 74, 80.00, 162.80, 'Maternal and child', 'General check-up', '2024-07-10', '2025-01-10'),
(30, 'QR024', 'Eduardo Navarro', 'male', 27, '445 Maple St', '09353344567', 'single', '1996-06-14', 'PH024', '115/70', 36.40, 16, 76, 68, 67.00, 175.60, 'Animal bite', 'Rabies vaccination', '2024-07-05', '2025-01-05'),
(31, 'QR025', 'Feliciana Villarreal', 'female', 40, '556 Pine St', '09282234567', 'married', '1983-09-12', 'PH025', '130/80', 37.20, 17, 82, 75, 70.50, 168.00, 'Dental care', 'Teeth cleaning', '2024-07-01', '2025-01-01'),
(32, 'QR026', 'Giovanni Flores', 'male', 34, '667 Birch St', '09191122334', 'single', '1989-04-25', 'PH026', '120/80', 36.80, 18, 83, 77, 75.00, 170.00, 'Family planning', 'Vasectomy', '2024-06-28', '2025-12-28'),
(33, 'QR027', 'Veronica Medina', 'female', 29, '778 Oak St', '09292234567', 'married', '1994-11-20', 'PH027', '125/85', 36.70, 17, 81, 75, 78.00, 164.70, 'National tuberculosis program', 'TB prevention', '2024-06-25', '2025-12-25'),
(34, 'QR028', 'Harold Alvarez', 'male', 56, '889 Cedar St', '09173344567', 'single', '1967-03-01', 'PH028', '140/90', 37.00, 20, 88, 80, 82.50, 172.10, 'Non-communicable disease', 'Cholesterol medication', '2024-06-20', '2025-12-20'),
(35, 'QR029', 'Luisa Paredes', 'female', 50, '990 Pine St', '09274455678', 'married', '1973-09-12', 'PH029', '130/85', 36.80, 16, 82, 75, 65.00, 163.00, 'Maternal and child', 'Prenatal care', '2024-06-15', '2025-12-15'),
(36, 'QR030', 'Oscar Valencia', 'male', 65, '1011 Oak St', '09342223334', 'single', '1958-08-25', 'PH030', '135/90', 37.30, 22, 92, 85, 80.00, 175.50, 'National immunization program', 'Vaccination', '2024-06-10', '2025-12-10'),
(37, '', 'fddffddf', 'female', 34, 'gdfgdf', '09563453453 ', 'divorced', '2024-11-14', '453453434', 'dgdfgdf', 34.00, 43, 34, 34, 34.00, 34.00, 'Family planning', '34', '2024-11-12', '2024-11-29');

-- --------------------------------------------------------

--
-- Stand-in structure for view `patient_category_counts`
-- (See below for the actual view)
--
CREATE TABLE `patient_category_counts` (
`diagnosis` text
,`category_count` bigint(21)
);

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
-- Table structure for table `pregnants`
--

CREATE TABLE `pregnants` (
  `id` int(11) NOT NULL,
  `mother_name` varchar(100) DEFAULT NULL,
  `mother_birthday` date DEFAULT NULL,
  `mother_cell_phone` varchar(20) DEFAULT NULL,
  `mother_landline` varchar(20) DEFAULT NULL,
  `mother_blood_type` varchar(5) DEFAULT NULL,
  `mother_job` varchar(100) DEFAULT NULL,
  `father_name` varchar(100) DEFAULT NULL,
  `father_birthday` date DEFAULT NULL,
  `father_cell_phone` varchar(20) DEFAULT NULL,
  `father_landline` varchar(20) DEFAULT NULL,
  `father_blood_type` varchar(5) DEFAULT NULL,
  `father_job` varchar(100) DEFAULT NULL,
  `child1_name` varchar(100) DEFAULT NULL,
  `child1_birthday` date DEFAULT NULL,
  `child2_name` varchar(100) DEFAULT NULL,
  `child2_birthday` date DEFAULT NULL,
  `child3_name` varchar(100) DEFAULT NULL,
  `child3_birthday` date DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `emergency_contact_name` varchar(100) DEFAULT NULL,
  `emergency_contact_relationship` varchar(50) DEFAULT NULL,
  `emergency_contact_birthday` date DEFAULT NULL,
  `emergency_contact_cell_phone` varchar(20) DEFAULT NULL,
  `emergency_contact_landline` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pregnants`
--

INSERT INTO `pregnants` (`id`, `mother_name`, `mother_birthday`, `mother_cell_phone`, `mother_landline`, `mother_blood_type`, `mother_job`, `father_name`, `father_birthday`, `father_cell_phone`, `father_landline`, `father_blood_type`, `father_job`, `child1_name`, `child1_birthday`, `child2_name`, `child2_birthday`, `child3_name`, `child3_birthday`, `address`, `emergency_contact_name`, `emergency_contact_relationship`, `emergency_contact_birthday`, `emergency_contact_cell_phone`, `emergency_contact_landline`) VALUES
(1, 'Jane Doe', '1990-01-01', '09171234567', '021234567', 'O+', 'Teacher', 'John Doe', '1988-02-02', '09181234567', '021234568', 'A+', 'Engineer', 'Jake Doe', '2010-01-01', 'Anna Doe', '2012-02-02', 'Tom Doe', '2014-03-03', '123 Main St, Cityville', 'Alice Smith', 'Sister', '1985-03-04', '09161234567', '021234569'),
(2, 'Maria Cruz', '1989-05-05', '09172345678', '021234570', 'A-', 'Nurse', 'Pedro Cruz', '1986-06-06', '09182345678', '021234571', 'B+', 'Doctor', 'Juan Cruz', '2011-05-05', NULL, NULL, NULL, NULL, '456 Oak St, Citytown', 'Carla Ramos', 'Mother', '1960-01-01', '09172345678', '021234572'),
(3, 'Linda Park', '1988-07-07', '09173456789', '021234573', 'B+', 'Accountant', 'James Park', '1985-08-08', '09183456789', '021234574', 'O-', 'Lawyer', 'Sophie Park', '2013-07-07', 'Tom Park', '2015-08-08', NULL, NULL, '789 Maple St, Metropolis', 'Sarah Lee', 'Friend', '1982-09-09', '09173456789', '021234575'),
(4, 'Amy Wong', '1991-03-03', '09174567890', '021234576', 'AB-', 'Designer', 'Michael Wong', '1989-04-04', '09184567890', '021234577', 'A+', 'Architect', 'Charlie Wong', '2012-10-10', NULL, NULL, NULL, NULL, '123 Pine St, Cityside', 'Paul Wong', 'Brother', '1983-05-05', '09174567890', '021234578'),
(5, 'Samantha Lee', '1992-12-12', '09175678901', '021234579', 'O+', 'Engineer', 'David Lee', '1990-11-11', '09185678901', '021234580', 'AB+', 'Analyst', 'Grace Lee', '2014-09-09', 'Alex Lee', '2016-08-08', NULL, NULL, '456 Cedar St, Rivertown', 'Helen Lee', 'Mother', '1965-06-06', '09175678901', '021234581'),
(6, 'Jennifer Kim', '1993-10-10', '09176789012', '021234582', 'B-', 'Pharmacist', 'Chris Kim', '1991-09-09', '09186789012', '021234583', 'O+', 'Physician', 'Olivia Kim', '2017-03-03', NULL, NULL, NULL, NULL, '789 Birch St, Cityview', 'Danny Kim', 'Brother', '1988-07-07', '09176789012', '021234584'),
(7, 'Laura Garcia', '1987-11-11', '09177890123', '021234585', 'A+', 'Scientist', 'Carlos Garcia', '1984-12-12', '09187890123', '021234586', 'B-', 'Researcher', 'Sophia Garcia', '2018-02-02', 'Ben Garcia', '2020-01-01', NULL, NULL, '123 Walnut St, Uptown', 'Miguel Garcia', 'Father', '1961-10-10', '09177890123', '021234587'),
(8, 'Emily Brown', '1994-06-06', '09178901234', '021234588', 'AB+', 'Writer', 'Jason Brown', '1992-05-05', '09188901234', '021234589', 'O+', 'Editor', 'Lily Brown', '2015-12-12', NULL, NULL, NULL, NULL, '456 Spruce St, Midtown', 'Rachel Brown', 'Sister', '1989-03-03', '09178901234', '021234590'),
(9, 'Sophia Taylor', '1986-02-02', '09179012345', '021234591', 'O-', 'Chef', 'Tom Taylor', '1983-01-01', '09189012345', '021234592', 'A-', 'Manager', 'Harry Taylor', '2013-07-07', 'Ella Taylor', '2015-06-06', 'Sam Taylor', '2017-05-05', '789 Elm St, Downtown', 'Chris Taylor', 'Friend', '1980-08-08', '09179012345', '021234593'),
(10, 'Anna Lee', '1992-09-09', '09180123456', '021234594', 'A+', 'Consultant', 'Mark Lee', '1991-10-10', '09190123456', '021234595', 'B+', 'Architect', 'Jack Lee', '2013-08-08', NULL, NULL, NULL, NULL, '123 Fir St, Riverside', 'John Smith', 'Uncle', '1970-07-07', '09180123456', '021234596');

-- --------------------------------------------------------

--
-- Stand-in structure for view `pregnant_patient_checkups`
-- (See below for the actual view)
--
CREATE TABLE `pregnant_patient_checkups` (
`patient_id` int(11)
,`mother_name` varchar(100)
,`mother_birthday` date
,`mother_cell_phone` varchar(20)
,`mother_landline` varchar(20)
,`mother_blood_type` varchar(5)
,`mother_job` varchar(100)
,`father_name` varchar(100)
,`father_birthday` date
,`father_cell_phone` varchar(20)
,`father_landline` varchar(20)
,`father_blood_type` varchar(5)
,`father_job` varchar(100)
,`child1_name` varchar(100)
,`child1_birthday` date
,`child2_name` varchar(100)
,`child2_birthday` date
,`child3_name` varchar(100)
,`child3_birthday` date
,`address` varchar(255)
,`emergency_contact_name` varchar(100)
,`emergency_contact_relationship` varchar(50)
,`emergency_contact_birthday` date
,`emergency_contact_cell_phone` varchar(20)
,`emergency_contact_landline` varchar(20)
,`checkup_date` date
,`age` int(11)
,`weight` decimal(5,2)
,`height` decimal(5,2)
,`bmi_status` enum('Normal','Underweight','Overweight')
,`last_menstrual_period` date
,`expected_delivery_date` date
,`first_checkup_date` date
,`first_checkup_weight` decimal(5,2)
,`first_checkup_height` decimal(5,2)
,`first_checkup_age_of_gestation` int(11)
,`first_checkup_blood_pressure` varchar(10)
,`first_checkup_nutritional_status` enum('Normal','Underweight','Overweight')
,`first_checkup_birth_plan` tinyint(1)
,`first_checkup_dental_check` tinyint(1)
,`second_checkup_date` date
,`second_checkup_weight` decimal(5,2)
,`second_checkup_height` decimal(5,2)
,`second_checkup_age_of_gestation` int(11)
,`second_checkup_blood_pressure` varchar(10)
,`second_checkup_nutritional_status` enum('Normal','Underweight','Overweight')
,`second_checkup_birth_plan` tinyint(1)
,`second_checkup_dental_check` tinyint(1)
,`third_checkup_date` date
,`third_checkup_weight` decimal(5,2)
,`third_checkup_height` decimal(5,2)
,`third_checkup_age_of_gestation` int(11)
,`third_checkup_blood_pressure` varchar(10)
,`third_checkup_nutritional_status` enum('Normal','Underweight','Overweight')
,`third_checkup_birth_plan` tinyint(1)
,`third_checkup_dental_check` tinyint(1)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `pregnant_records_view`
-- (See below for the actual view)
--
CREATE TABLE `pregnant_records_view` (
`pregnant_id` int(11)
,`mother_name` varchar(100)
,`mother_birthday` date
,`mother_cell_phone` varchar(20)
,`mother_landline` varchar(20)
,`mother_blood_type` varchar(5)
,`mother_job` varchar(100)
,`father_name` varchar(100)
,`father_birthday` date
,`father_cell_phone` varchar(20)
,`father_landline` varchar(20)
,`father_blood_type` varchar(5)
,`father_job` varchar(100)
,`child1_name` varchar(100)
,`child1_birthday` date
,`child2_name` varchar(100)
,`child2_birthday` date
,`child3_name` varchar(100)
,`child3_birthday` date
,`address` varchar(255)
,`emergency_contact_name` varchar(100)
,`emergency_contact_relationship` varchar(50)
,`emergency_contact_birthday` date
,`emergency_contact_cell_phone` varchar(20)
,`emergency_contact_landline` varchar(20)
,`immunization_record_id` int(11)
,`dose` enum('1st dose - as early as possible during pregnancy','2nd dose - at least 4 weeks after dose 1','3rd dose - at least 6 months after dose 2','4th dose - at least 1 year after dose 3','5th dose - at least 1 year after dose 4','Fully Immunized - received all 5 doses')
,`date_given` date
,`return_date` date
);

-- --------------------------------------------------------

--
-- Table structure for table `prenatal_checkup`
--

CREATE TABLE `prenatal_checkup` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `checkup_date` date DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `weight` decimal(5,2) DEFAULT NULL,
  `height` decimal(5,2) DEFAULT NULL,
  `bmi_status` enum('Normal','Underweight','Overweight') DEFAULT NULL,
  `last_menstrual_period` date DEFAULT NULL,
  `expected_delivery_date` date DEFAULT NULL,
  `first_checkup_date` date DEFAULT NULL,
  `first_checkup_weight` decimal(5,2) DEFAULT NULL,
  `first_checkup_height` decimal(5,2) DEFAULT NULL,
  `first_checkup_age_of_gestation` int(11) DEFAULT NULL,
  `first_checkup_blood_pressure` varchar(10) DEFAULT NULL,
  `first_checkup_nutritional_status` enum('Normal','Underweight','Overweight') DEFAULT NULL,
  `first_checkup_birth_plan` tinyint(1) DEFAULT NULL,
  `first_checkup_dental_check` tinyint(1) DEFAULT NULL,
  `second_checkup_date` date DEFAULT NULL,
  `second_checkup_weight` decimal(5,2) DEFAULT NULL,
  `second_checkup_height` decimal(5,2) DEFAULT NULL,
  `second_checkup_age_of_gestation` int(11) DEFAULT NULL,
  `second_checkup_blood_pressure` varchar(10) DEFAULT NULL,
  `second_checkup_nutritional_status` enum('Normal','Underweight','Overweight') DEFAULT NULL,
  `second_checkup_birth_plan` tinyint(1) DEFAULT NULL,
  `second_checkup_dental_check` tinyint(1) DEFAULT NULL,
  `third_checkup_date` date DEFAULT NULL,
  `third_checkup_weight` decimal(5,2) DEFAULT NULL,
  `third_checkup_height` decimal(5,2) DEFAULT NULL,
  `third_checkup_age_of_gestation` int(11) DEFAULT NULL,
  `third_checkup_blood_pressure` varchar(10) DEFAULT NULL,
  `third_checkup_nutritional_status` enum('Normal','Underweight','Overweight') DEFAULT NULL,
  `third_checkup_birth_plan` tinyint(1) DEFAULT NULL,
  `third_checkup_dental_check` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prenatal_checkup`
--

INSERT INTO `prenatal_checkup` (`id`, `patient_id`, `checkup_date`, `age`, `weight`, `height`, `bmi_status`, `last_menstrual_period`, `expected_delivery_date`, `first_checkup_date`, `first_checkup_weight`, `first_checkup_height`, `first_checkup_age_of_gestation`, `first_checkup_blood_pressure`, `first_checkup_nutritional_status`, `first_checkup_birth_plan`, `first_checkup_dental_check`, `second_checkup_date`, `second_checkup_weight`, `second_checkup_height`, `second_checkup_age_of_gestation`, `second_checkup_blood_pressure`, `second_checkup_nutritional_status`, `second_checkup_birth_plan`, `second_checkup_dental_check`, `third_checkup_date`, `third_checkup_weight`, `third_checkup_height`, `third_checkup_age_of_gestation`, `third_checkup_blood_pressure`, `third_checkup_nutritional_status`, `third_checkup_birth_plan`, `third_checkup_dental_check`, `created_at`, `updated_at`) VALUES
(1, 1, '2024-01-01', 34, 65.00, 160.00, 'Normal', '2023-05-01', '2024-08-01', '2024-01-01', 65.00, 160.00, 0, '120/80', 'Normal', 1, 1, '2024-02-01', 67.00, 161.00, 12, '122/80', 'Normal', 1, 1, '2024-03-01', 68.00, 162.00, 24, '125/85', 'Normal', 1, 1, '2024-11-06 09:36:53', '2024-11-06 09:36:53'),
(2, 2, '2024-02-01', 35, 70.00, 162.00, 'Underweight', '2023-06-01', '2024-09-01', '2024-02-01', 70.00, 162.00, 0, '110/70', 'Underweight', 1, 0, '2024-03-01', 72.00, 163.00, 12, '115/75', 'Normal', 1, 0, '2024-04-01', 73.00, 164.00, 24, '120/80', 'Normal', 1, 0, '2024-11-06 09:36:53', '2024-11-06 09:36:53'),
(3, 3, '2024-03-01', 32, 60.00, 158.00, 'Overweight', '2023-07-01', '2024-10-01', '2024-03-01', 60.00, 158.00, 0, '130/90', 'Overweight', 0, 1, '2024-04-01', 62.00, 159.00, 12, '135/95', 'Overweight', 0, 1, '2024-05-01', 64.00, 160.00, 24, '140/100', 'Overweight', 0, 1, '2024-11-06 09:36:53', '2024-11-06 09:36:53'),
(4, 4, '2024-04-01', 33, 75.00, 165.00, 'Normal', '2023-08-01', '2024-11-01', '2024-04-01', 75.00, 165.00, 0, '118/78', 'Normal', 1, 1, '2024-05-01', 77.00, 166.00, 12, '120/80', 'Normal', 1, 1, '2024-06-01', 78.00, 167.00, 24, '125/85', 'Normal', 1, 1, '2024-11-06 09:36:53', '2024-11-06 09:36:53'),
(5, 5, '2024-05-01', 31, 68.00, 162.00, 'Normal', '2023-09-01', '2024-12-01', '2024-05-01', 68.00, 162.00, 0, '125/85', 'Normal', 1, 1, '2024-06-01', 70.00, 163.00, 12, '128/88', 'Normal', 1, 1, '2024-07-01', 72.00, 164.00, 24, '130/90', 'Normal', 1, 1, '2024-11-06 09:36:53', '2024-11-06 09:36:53'),
(6, 6, '2024-06-01', 36, 72.00, 163.00, 'Underweight', '2023-10-01', '2025-01-01', '2024-06-01', 72.00, 163.00, 0, '110/70', 'Underweight', 1, 0, '2024-07-01', 74.00, 164.00, 12, '115/75', 'Normal', 1, 0, '2024-08-01', 75.00, 165.00, 24, '120/80', 'Normal', 1, 0, '2024-11-06 09:36:53', '2024-11-06 09:36:53'),
(7, 7, '2024-07-01', 34, 80.00, 167.00, 'Overweight', '2023-11-01', '2025-02-01', '2024-07-01', 80.00, 167.00, 0, '130/90', 'Overweight', 0, 1, '2024-08-01', 82.00, 168.00, 12, '135/95', 'Overweight', 0, 1, '2024-09-01', 84.00, 169.00, 24, '140/100', 'Overweight', 0, 1, '2024-11-06 09:36:53', '2024-11-06 09:36:53'),
(8, 8, '2024-08-01', 30, 63.00, 160.00, 'Normal', '2023-12-01', '2025-03-01', '2024-08-01', 63.00, 160.00, 0, '120/80', 'Normal', 1, 1, '2024-09-01', 65.00, 161.00, 12, '122/80', 'Normal', 1, 1, '2024-10-01', 66.00, 162.00, 24, '125/85', 'Normal', 1, 1, '2024-11-06 09:36:53', '2024-11-06 09:36:53'),
(9, 9, '2024-09-01', 29, 59.00, 158.00, 'Underweight', '2024-01-01', '2025-04-01', '2024-09-01', 59.00, 158.00, 0, '110/70', 'Underweight', 1, 0, '2024-10-01', 60.00, 159.00, 12, '115/75', 'Normal', 1, 0, '2024-11-01', 62.00, 160.00, 24, '120/80', 'Normal', 1, 0, '2024-11-06 09:36:53', '2024-11-06 09:36:53'),
(10, 10, '2024-10-01', 38, 78.00, 166.00, 'Normal', '2024-02-01', '2025-05-01', '2024-10-01', 78.00, 166.00, 0, '118/78', 'Normal', 1, 1, '2024-11-01', 80.00, 167.00, 12, '120/80', 'Normal', 1, 1, '2024-12-01', 82.00, 168.00, 24, '125/85', 'Normal', 1, 1, '2024-11-06 09:36:53', '2024-11-06 09:36:53');

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
(17, 2, 'qr_2.png', '../qrcodes/qr_2.png', '2024-08-14 04:48:31'),
(18, 7, 'qr_7.png', '../qrcodes/qr_7.png', '2024-11-07 00:32:13');

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
  `p_type` enum('patient','pregnant') NOT NULL,
  `message` text DEFAULT NULL,
  `sent_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sms_notifications`
--

INSERT INTO `sms_notifications` (`sms_id`, `patient_id`, `p_type`, `message`, `sent_at`) VALUES
(1, 1, 'patient', 'Your next checkup is on 2024-08-10.', '2024-08-06 14:47:29'),
(2, 2, 'pregnant', 'Your next checkup is on 2024-08-15.', '2024-08-06 14:47:29'),
(3, 3, 'patient', 'Your next checkup is on 2024-08-20.', '2024-08-06 14:47:29'),
(22, 2, 'pregnant', '\n              Name: Maria Cruz <br>\n              Gender: Female <br>\n              Birthdate: 1989-05-05 <br> <br>\n\n              Message: reterterte\n\n              ', '2024-11-06 16:07:21'),
(23, 3, 'pregnant', '\n              Name: Linda Park <br>\n              Gender: Female <br>\n              Birthdate: 1988-07-07 <br> <br>\n\n              Message: reterterte\n\n              ', '2024-11-06 16:07:21'),
(24, 21, 'patient', '\n              Name: Diego Reyes <br>\n              Gender: male <br>\n              Age: 47 <br>\n              Address: 456 Birch St <br>\n              Followup Checkup: 2025-02-14 <br> <br>\n\n              Message: dsfgdsfdsf\n\n              ', '2024-11-06 16:07:34'),
(25, 22, 'patient', '\n              Name: Lydia Santos <br>\n              Gender: female <br>\n              Age: 38 <br>\n              Address: 567 Maple St <br>\n              Followup Checkup: 2025-02-10 <br> <br>\n\n              Message: dsfgdsfdsf\n\n              ', '2024-11-06 16:07:34');

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
(1, 'JuanDelaCruz', '$2y$10$yRDq0XEnbE/fu/h6GGSPc.VGMOUTJzNoH5fM/PfbOFxEb04w.o0VW', 'admin1@example.com', 'Admin One', 'admin', '2024-08-23 12:38:28', '2024-08-21 14:23:49'),
(2, 'admin2', '$2y$10$spiMfFrZMZjTO10EsiqrAef9.3uh0GGx98wAzr59HYyS1d3m3zgci', 'admin2@example.com', 'Admin Two', 'admin', '2024-08-23 12:39:45', '2024-08-21 14:23:49'),
(3, 'healthworker1', '$2y$10$yRDq0XEnbE/fu/h6GGSPc.VGMOUTJzNoH5fM/PfbOFxEb04w.o0VW', 'hw1@example.com', 'Health Worker One', 'health_worker', '2024-08-14 03:29:54', '2024-08-21 14:23:49'),
(4, 'healthworker2', 'hashedpassword4', 'hw2@example.com', 'Health Worker Two', 'health_worker', '2024-08-06 14:47:03', '2024-08-21 14:23:49'),
(5, 'healthworker3', 'hashedpassword5', 'hw3@example.com', 'Health Worker Three', 'health_worker', '2024-08-06 14:47:03', '2024-08-21 14:23:49'),
(17, 'ertert', '$2y$10$E7u/hkL1LVXpHmQOF5xXF.GzIkeo8loF24H8750aB1NuNgEmqeL.q', 'pagsalupitng47@gmail.com', 'ertert', 'admin', '2024-09-04 12:59:44', '2024-09-04 12:59:44');

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
-- Structure for view `child_immunization_view`
--
DROP TABLE IF EXISTS `child_immunization_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `child_immunization_view`  AS SELECT `c`.`id` AS `child_id`, `c`.`name` AS `child_name`, `c`.`date_of_birth` AS `child_date_of_birth`, `c`.`place_of_birth` AS `child_place_of_birth`, `c`.`address` AS `child_address`, `c`.`mother_name` AS `child_mother_name`, `c`.`father_name` AS `child_father_name`, `c`.`birth_height` AS `child_birth_height`, `c`.`birth_weight` AS `child_birth_weight`, `c`.`sex` AS `child_sex`, `c`.`contact_number` AS `child_contact_number`, `i`.`id` AS `immunization_record_id`, `i`.`vaccine` AS `vaccine`, `i`.`date_given` AS `vaccine_date_given`, `i`.`remarks` AS `vaccine_remarks` FROM (`child` `c` left join `immunization_record_child` `i` on(`c`.`id` = `i`.`person_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `monthly_medical_records`
--
DROP TABLE IF EXISTS `monthly_medical_records`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `monthly_medical_records`  AS SELECT `m`.`month_number` AS `month`, ifnull(count(`mr`.`record_id`),0) AS `record_count` FROM ((select 1 AS `month_number` union select 2 AS `2` union select 3 AS `3` union select 4 AS `4` union select 5 AS `5` union select 6 AS `6` union select 7 AS `7` union select 8 AS `8` union select 9 AS `9` union select 10 AS `10` union select 11 AS `11` union select 12 AS `12`) `m` left join `medical_records` `mr` on(`m`.`month_number` = month(`mr`.`checkup_date`))) GROUP BY `m`.`month_number` ORDER BY `m`.`month_number` ASC ;

-- --------------------------------------------------------

--
-- Structure for view `patient_category_counts`
--
DROP TABLE IF EXISTS `patient_category_counts`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `patient_category_counts`  AS SELECT `patients`.`diagnosis` AS `diagnosis`, count(0) AS `category_count` FROM `patients` WHERE `patients`.`diagnosis` in ('Animal bite','Dental care','Family planning','National tuberculosis program','Non-communicable disease','Maternal and child','National immunization program','ESU epidemiology surveillance','Nutrition','Laboratory services') GROUP BY `patients`.`diagnosis` ;

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
-- Structure for view `pregnant_patient_checkups`
--
DROP TABLE IF EXISTS `pregnant_patient_checkups`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pregnant_patient_checkups`  AS SELECT `p`.`id` AS `patient_id`, `p`.`mother_name` AS `mother_name`, `p`.`mother_birthday` AS `mother_birthday`, `p`.`mother_cell_phone` AS `mother_cell_phone`, `p`.`mother_landline` AS `mother_landline`, `p`.`mother_blood_type` AS `mother_blood_type`, `p`.`mother_job` AS `mother_job`, `p`.`father_name` AS `father_name`, `p`.`father_birthday` AS `father_birthday`, `p`.`father_cell_phone` AS `father_cell_phone`, `p`.`father_landline` AS `father_landline`, `p`.`father_blood_type` AS `father_blood_type`, `p`.`father_job` AS `father_job`, `p`.`child1_name` AS `child1_name`, `p`.`child1_birthday` AS `child1_birthday`, `p`.`child2_name` AS `child2_name`, `p`.`child2_birthday` AS `child2_birthday`, `p`.`child3_name` AS `child3_name`, `p`.`child3_birthday` AS `child3_birthday`, `p`.`address` AS `address`, `p`.`emergency_contact_name` AS `emergency_contact_name`, `p`.`emergency_contact_relationship` AS `emergency_contact_relationship`, `p`.`emergency_contact_birthday` AS `emergency_contact_birthday`, `p`.`emergency_contact_cell_phone` AS `emergency_contact_cell_phone`, `p`.`emergency_contact_landline` AS `emergency_contact_landline`, `c`.`checkup_date` AS `checkup_date`, `c`.`age` AS `age`, `c`.`weight` AS `weight`, `c`.`height` AS `height`, `c`.`bmi_status` AS `bmi_status`, `c`.`last_menstrual_period` AS `last_menstrual_period`, `c`.`expected_delivery_date` AS `expected_delivery_date`, `c`.`first_checkup_date` AS `first_checkup_date`, `c`.`first_checkup_weight` AS `first_checkup_weight`, `c`.`first_checkup_height` AS `first_checkup_height`, `c`.`first_checkup_age_of_gestation` AS `first_checkup_age_of_gestation`, `c`.`first_checkup_blood_pressure` AS `first_checkup_blood_pressure`, `c`.`first_checkup_nutritional_status` AS `first_checkup_nutritional_status`, `c`.`first_checkup_birth_plan` AS `first_checkup_birth_plan`, `c`.`first_checkup_dental_check` AS `first_checkup_dental_check`, `c`.`second_checkup_date` AS `second_checkup_date`, `c`.`second_checkup_weight` AS `second_checkup_weight`, `c`.`second_checkup_height` AS `second_checkup_height`, `c`.`second_checkup_age_of_gestation` AS `second_checkup_age_of_gestation`, `c`.`second_checkup_blood_pressure` AS `second_checkup_blood_pressure`, `c`.`second_checkup_nutritional_status` AS `second_checkup_nutritional_status`, `c`.`second_checkup_birth_plan` AS `second_checkup_birth_plan`, `c`.`second_checkup_dental_check` AS `second_checkup_dental_check`, `c`.`third_checkup_date` AS `third_checkup_date`, `c`.`third_checkup_weight` AS `third_checkup_weight`, `c`.`third_checkup_height` AS `third_checkup_height`, `c`.`third_checkup_age_of_gestation` AS `third_checkup_age_of_gestation`, `c`.`third_checkup_blood_pressure` AS `third_checkup_blood_pressure`, `c`.`third_checkup_nutritional_status` AS `third_checkup_nutritional_status`, `c`.`third_checkup_birth_plan` AS `third_checkup_birth_plan`, `c`.`third_checkup_dental_check` AS `third_checkup_dental_check` FROM (`pregnants` `p` join `prenatal_checkup` `c` on(`p`.`id` = `c`.`patient_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `pregnant_records_view`
--
DROP TABLE IF EXISTS `pregnant_records_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pregnant_records_view`  AS SELECT `p`.`id` AS `pregnant_id`, `p`.`mother_name` AS `mother_name`, `p`.`mother_birthday` AS `mother_birthday`, `p`.`mother_cell_phone` AS `mother_cell_phone`, `p`.`mother_landline` AS `mother_landline`, `p`.`mother_blood_type` AS `mother_blood_type`, `p`.`mother_job` AS `mother_job`, `p`.`father_name` AS `father_name`, `p`.`father_birthday` AS `father_birthday`, `p`.`father_cell_phone` AS `father_cell_phone`, `p`.`father_landline` AS `father_landline`, `p`.`father_blood_type` AS `father_blood_type`, `p`.`father_job` AS `father_job`, `p`.`child1_name` AS `child1_name`, `p`.`child1_birthday` AS `child1_birthday`, `p`.`child2_name` AS `child2_name`, `p`.`child2_birthday` AS `child2_birthday`, `p`.`child3_name` AS `child3_name`, `p`.`child3_birthday` AS `child3_birthday`, `p`.`address` AS `address`, `p`.`emergency_contact_name` AS `emergency_contact_name`, `p`.`emergency_contact_relationship` AS `emergency_contact_relationship`, `p`.`emergency_contact_birthday` AS `emergency_contact_birthday`, `p`.`emergency_contact_cell_phone` AS `emergency_contact_cell_phone`, `p`.`emergency_contact_landline` AS `emergency_contact_landline`, `ir`.`id` AS `immunization_record_id`, `ir`.`dose` AS `dose`, `ir`.`date_given` AS `date_given`, `ir`.`return_date` AS `return_date` FROM (`pregnants` `p` left join `immunization_record_pregnant` `ir` on(`p`.`id` = `ir`.`family_id`)) ORDER BY `p`.`id` ASC, `ir`.`date_given` ASC ;

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
-- Indexes for table `child`
--
ALTER TABLE `child`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dashboard`
--
ALTER TABLE `dashboard`
  ADD PRIMARY KEY (`dashboard_id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `immunization_record_child`
--
ALTER TABLE `immunization_record_child`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `immunization_record_pregnant`
--
ALTER TABLE `immunization_record_pregnant`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `pregnants`
--
ALTER TABLE `pregnants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prenatal_checkup`
--
ALTER TABLE `prenatal_checkup`
  ADD PRIMARY KEY (`id`);

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
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `child`
--
ALTER TABLE `child`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `dashboard`
--
ALTER TABLE `dashboard`
  MODIFY `dashboard_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `immunization_record_child`
--
ALTER TABLE `immunization_record_child`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `immunization_record_pregnant`
--
ALTER TABLE `immunization_record_pregnant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `medical_records`
--
ALTER TABLE `medical_records`
  MODIFY `record_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `pregnants`
--
ALTER TABLE `pregnants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `prenatal_checkup`
--
ALTER TABLE `prenatal_checkup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `qr_codes`
--
ALTER TABLE `qr_codes`
  MODIFY `qr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `sms_notifications`
--
ALTER TABLE `sms_notifications`
  MODIFY `sms_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
