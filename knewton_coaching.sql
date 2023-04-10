-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2023 at 03:40 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `knewton_coaching`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(30) NOT NULL,
  `admin_email` varchar(30) NOT NULL,
  `admin_password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`) VALUES
(1, 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `alumnai`
--

CREATE TABLE `alumnai` (
  `alumnai_id` int(11) NOT NULL,
  `alumnai_name` varchar(30) DEFAULT NULL,
  `field_id` int(11) DEFAULT NULL,
  `alumnai_achivement` varchar(50) DEFAULT NULL,
  `alumnai_qualification` varchar(50) DEFAULT NULL,
  `alumnai_image` varchar(50) DEFAULT NULL,
  `alumnai_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alumnai`
--

INSERT INTO `alumnai` (`alumnai_id`, `alumnai_name`, `field_id`, `alumnai_achivement`, `alumnai_qualification`, `alumnai_image`, `alumnai_desc`) VALUES
(7, 'Shahzaib', 2, 'Course Complete', 'Inter', 'LTpOYdqh_THE.png', 'HE Complete his cou by so much sar dardrse'),
(10, 'farhan', 3, 'Course Complete', 'Inter', 'dwspgGNc_LogoMakr-3SlyoR.png', 'This is desc');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `announcement_id` int(11) NOT NULL,
  `announcement_name` varchar(100) NOT NULL,
  `announcement_desc` varchar(500) NOT NULL,
  `announcement_date` date NOT NULL,
  `announcement_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`announcement_id`, `announcement_name`, `announcement_desc`, `announcement_date`, `announcement_image`) VALUES
(5, 'Off', 'This is desc', '2023-04-04', 'No image'),
(6, 'Holiday', 'This is announcement', '2023-03-08', 'No image');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `class_name`) VALUES
(2, 'One'),
(3, 'Two'),
(4, 'Three'),
(5, 'Four'),
(6, 'Five');

-- --------------------------------------------------------

--
-- Table structure for table `coaching`
--

CREATE TABLE `coaching` (
  `coaching_id` int(11) NOT NULL,
  `coaching_name` varchar(100) NOT NULL,
  `coaching_email` varchar(50) NOT NULL,
  `coaching_contact` varchar(20) NOT NULL,
  `coaching_web` varchar(50) NOT NULL,
  `coaching_address` varchar(200) NOT NULL,
  `coaching_logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coaching`
--

INSERT INTO `coaching` (`coaching_id`, `coaching_name`, `coaching_email`, `coaching_contact`, `coaching_web`, `coaching_address`, `coaching_logo`) VALUES
(2, 'TPS Coaching', 'farhn@gmail.com', '03048855814', 'https://www.theproviderssolutions.com/', 'address', 'vgB1PwEw_trashed-1682401068-0.jpg'),
(3, 'farhan coaching', 'farhn@gmail.com', '03048855814', 'https://www.theproviderssolutions.com/', 'address', '5YiTbfCp_Main Logo DarkPNG.png');

-- --------------------------------------------------------

--
-- Table structure for table `faculity`
--

CREATE TABLE `faculity` (
  `faculity_id` int(11) NOT NULL,
  `faculity_name` varchar(30) NOT NULL,
  `faculity_contact` varchar(20) NOT NULL,
  `faculity_address` varchar(200) NOT NULL,
  `faculity_cnic` varchar(20) NOT NULL,
  `faculity_qualification` varchar(50) NOT NULL,
  `faculity_gender` enum('M','F') NOT NULL,
  `faculity_joining` date NOT NULL,
  `faculity_image` varchar(50) NOT NULL,
  `faculity_cv` varchar(50) NOT NULL,
  `faculity_email` varchar(50) NOT NULL,
  `faculity_password` varchar(10) NOT NULL,
  `faculity_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculity`
--

INSERT INTO `faculity` (`faculity_id`, `faculity_name`, `faculity_contact`, `faculity_address`, `faculity_cnic`, `faculity_qualification`, `faculity_gender`, `faculity_joining`, `faculity_image`, `faculity_cv`, `faculity_email`, `faculity_password`, `faculity_status`) VALUES
(7, 'Fabiha', '03302838962', 'Nasir Jump', '12345678909876', 'Matric', 'F', '2023-03-01', 'YV9Luqwo_LogoMakr-3SlyoR.png', 'SUMxKGfR_Muhammad Shahzaib.pdf', 'fabiha@gmail.com', 'fabiha9099', 1);

-- --------------------------------------------------------

--
-- Table structure for table `field`
--

CREATE TABLE `field` (
  `field_id` int(11) NOT NULL,
  `field_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `field`
--

INSERT INTO `field` (`field_id`, `field_name`) VALUES
(2, 'Commerce'),
(3, 'Arts');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `session_id` int(11) NOT NULL,
  `session_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(30) NOT NULL,
  `student_fname` varchar(30) NOT NULL,
  `student_contact` varchar(20) NOT NULL,
  `student_cnic` varchar(14) NOT NULL,
  `class_id` int(11) NOT NULL,
  `field_id` int(11) NOT NULL,
  `student_email` varchar(50) NOT NULL,
  `student_password` varchar(10) NOT NULL,
  `student_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_name`, `student_fname`, `student_contact`, `student_cnic`, `class_id`, `field_id`, `student_email`, `student_password`, `student_status`) VALUES
(2, 'Fabiha', 'Tariq', '0323425534', '422011234450', 4, 2, 'missfabiha04@gmail.com', '123456789', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_test`
--

CREATE TABLE `student_test` (
  `studenttest_id` int(30) NOT NULL,
  `student_id` int(30) NOT NULL,
  `test_id` int(30) NOT NULL,
  `test_marks` bigint(30) NOT NULL,
  `obtain_marks` bigint(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_test`
--

INSERT INTO `student_test` (`studenttest_id`, `student_id`, `test_id`, `test_marks`, `obtain_marks`) VALUES
(2, 2, 4, 4, 78);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `subject_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_name`) VALUES
(2, 'English'),
(3, 'Urdu'),
(4, 'Math'),
(5, 'Computer');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `test_id` int(11) NOT NULL,
  `test_title` varchar(30) NOT NULL,
  `test_marks` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test_id`, `test_title`, `test_marks`) VALUES
(3, 'Eng', '75'),
(4, 'Math', '100'),
(5, 'Urdu', '100'),
(6, 'Science', '100');

-- --------------------------------------------------------

--
-- Table structure for table `user_models`
--

CREATE TABLE `user_models` (
  `userID` bigint(30) NOT NULL,
  `username` varchar(150) NOT NULL,
  `useremail` varchar(100) NOT NULL,
  `userpassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_models`
--

INSERT INTO `user_models` (`userID`, `username`, `useremail`, `userpassword`) VALUES
(1, 'shahzaibikram', 'shahzaibikram563@gmail.com', 'simba'),
(2, 'fabiha44', 'ftariq524@gmail.com', 'fabiha44'),
(3, 'farhan', 'muhammadfarha44500@gmail.com', 'farhan@9090');

-- --------------------------------------------------------

--
-- Table structure for table `user_msg`
--

CREATE TABLE `user_msg` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_contact` varchar(20) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_date` date NOT NULL,
  `user_message` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_msg`
--

INSERT INTO `user_msg` (`user_id`, `user_name`, `user_contact`, `user_email`, `user_date`, `user_message`) VALUES
(1, 'Shahzaib', '03048855814', 'shahzaibikram563@gmail.com', '2023-04-07', 'Hi!'),
(2, 'Fabiha', '03302838962', 'missfabiha04@gmail.com', '2023-04-02', 'My name is Fabiha!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_email` (`admin_email`);

--
-- Indexes for table `alumnai`
--
ALTER TABLE `alumnai`
  ADD PRIMARY KEY (`alumnai_id`),
  ADD KEY `field_id` (`field_id`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`announcement_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `coaching`
--
ALTER TABLE `coaching`
  ADD PRIMARY KEY (`coaching_id`);

--
-- Indexes for table `faculity`
--
ALTER TABLE `faculity`
  ADD PRIMARY KEY (`faculity_id`);

--
-- Indexes for table `field`
--
ALTER TABLE `field`
  ADD PRIMARY KEY (`field_id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `field_id` (`field_id`);

--
-- Indexes for table `student_test`
--
ALTER TABLE `student_test`
  ADD PRIMARY KEY (`studenttest_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `user_models`
--
ALTER TABLE `user_models`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `useremail` (`useremail`);

--
-- Indexes for table `user_msg`
--
ALTER TABLE `user_msg`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `alumnai`
--
ALTER TABLE `alumnai`
  MODIFY `alumnai_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `announcement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `coaching`
--
ALTER TABLE `coaching`
  MODIFY `coaching_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faculity`
--
ALTER TABLE `faculity`
  MODIFY `faculity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `field`
--
ALTER TABLE `field`
  MODIFY `field_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `session_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_test`
--
ALTER TABLE `student_test`
  MODIFY `studenttest_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_models`
--
ALTER TABLE `user_models`
  MODIFY `userID` bigint(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_msg`
--
ALTER TABLE `user_msg`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alumnai`
--
ALTER TABLE `alumnai`
  ADD CONSTRAINT `alumnai_ibfk_1` FOREIGN KEY (`field_id`) REFERENCES `field` (`field_id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`),
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`field_id`) REFERENCES `field` (`field_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
