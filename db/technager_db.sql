-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2021 at 05:01 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `technager_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `project_revision`
--

CREATE TABLE `project_revision` (
  `project_revision_id` int(11) NOT NULL,
  `revision_round` varchar(45) DEFAULT NULL,
  `project_id` int(11) NOT NULL,
  `attached_r_project_document` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project`
--

CREATE TABLE `tbl_project` (
  `project_id` int(11) NOT NULL,
  `project_title` varchar(45) NOT NULL,
  `project_deadline` date NOT NULL,
  `project_cost` varchar(45) NOT NULL,
  `project_status` varchar(45) NOT NULL,
  `project_decision_status` varchar(45) NOT NULL,
  `project_received_datetime` int(11) NOT NULL,
  `project_type_id` int(11) NOT NULL,
  `project_technology` varchar(45) NOT NULL,
  `project_soure` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `attached_project_document` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project_type`
--

CREATE TABLE `tbl_project_type` (
  `project_type_id` int(11) NOT NULL,
  `project_type` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `role_id` int(11) NOT NULL,
  `role_type` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`role_id`, `role_type`) VALUES
(1, 'admin'),
(2, 'sales');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_first_name` varchar(45) NOT NULL,
  `user_last_name` varchar(45) NOT NULL,
  `user_email` varchar(45) NOT NULL,
  `user_phone` int(11) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_login_time` time DEFAULT NULL,
  `user_logout_time` time DEFAULT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_first_name`, `user_last_name`, `user_email`, `user_phone`, `user_password`, `user_login_time`, `user_logout_time`, `role_id`) VALUES
(1, 'Ahsan', 'Ahmad', 'ahsan@gmail.com', 2147483647, '$2y$10$jIwg7Mf6Ne8qjDhrN2qHT./RtDZNgKZFns8oVhOJwQ3DvaXLNon3W', '20:57:25', NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_project_assign`
--

CREATE TABLE `tbl_user_project_assign` (
  `user_project_assign_id` int(11) NOT NULL,
  `assign_datetime` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `assign_status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_experties`
--

CREATE TABLE `user_experties` (
  `user_experties_id` int(11) NOT NULL,
  `experties_name` varchar(45) DEFAULT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project_revision`
--
ALTER TABLE `project_revision`
  ADD PRIMARY KEY (`project_revision_id`),
  ADD KEY `fk_project_revision_tbl_Project1_idx` (`project_id`);

--
-- Indexes for table `tbl_project`
--
ALTER TABLE `tbl_project`
  ADD PRIMARY KEY (`project_id`),
  ADD KEY `fk_tbl_Project_tbl_project_type1_idx` (`project_type_id`);

--
-- Indexes for table `tbl_project_type`
--
ALTER TABLE `tbl_project_type`
  ADD PRIMARY KEY (`project_type_id`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `fk_tbl_user_tbl_role_idx` (`role_id`);

--
-- Indexes for table `tbl_user_project_assign`
--
ALTER TABLE `tbl_user_project_assign`
  ADD PRIMARY KEY (`user_project_assign_id`),
  ADD KEY `fk_tbl_user_project_assign_tbl_user1_idx` (`user_id`),
  ADD KEY `fk_tbl_user_project_assign_tbl_Project1_idx` (`project_id`);

--
-- Indexes for table `user_experties`
--
ALTER TABLE `user_experties`
  ADD PRIMARY KEY (`user_experties_id`),
  ADD KEY `fk_user_experties_tbl_role1_idx` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project_revision`
--
ALTER TABLE `project_revision`
  MODIFY `project_revision_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_project`
--
ALTER TABLE `tbl_project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_project_type`
--
ALTER TABLE `tbl_project_type`
  MODIFY `project_type_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_experties`
--
ALTER TABLE `user_experties`
  MODIFY `user_experties_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `project_revision`
--
ALTER TABLE `project_revision`
  ADD CONSTRAINT `fk_project_revision_tbl_Project1` FOREIGN KEY (`project_id`) REFERENCES `tbl_project` (`project_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_project`
--
ALTER TABLE `tbl_project`
  ADD CONSTRAINT `fk_tbl_Project_tbl_project_type1` FOREIGN KEY (`project_type_id`) REFERENCES `tbl_project_type` (`project_type_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `fk_tbl_user_tbl_role` FOREIGN KEY (`role_id`) REFERENCES `tbl_role` (`role_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_user_project_assign`
--
ALTER TABLE `tbl_user_project_assign`
  ADD CONSTRAINT `fk_tbl_user_project_assign_tbl_Project1` FOREIGN KEY (`project_id`) REFERENCES `tbl_project` (`project_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_user_project_assign_tbl_user1` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user_experties`
--
ALTER TABLE `user_experties`
  ADD CONSTRAINT `fk_user_experties_tbl_role1` FOREIGN KEY (`role_id`) REFERENCES `tbl_role` (`role_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
