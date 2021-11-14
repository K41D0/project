-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2021 at 12:45 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_mgmt`
--

-- --------------------------------------------------------

--
-- Table structure for table `project_list`
--

CREATE TABLE `project_list` (
  `proj_id` int(30) NOT NULL,
  `proj_name` varchar(250) NOT NULL,
  `proj_description` varchar(250) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `manager_id` int(30) NOT NULL,
  `users_id` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_list`
--

INSERT INTO `project_list` (`proj_id`, `proj_name`, `proj_description`, `start_date`, `end_date`, `manager_id`, `users_id`, `date_created`) VALUES
(27, 'Capstone 7', '', '2021-07-03', '2021-07-11', 0, '', '2021-07-03 14:37:45'),
(28, 'Capstone 8', '', '2021-07-03', '2021-07-10', 0, '', '2021-07-03 18:28:26'),
(29, 'Proj', '', '2021-07-03', '2021-07-11', 0, '', '2021-07-03 19:37:00'),
(30, 'Capstone 1', 'Capstone 1 Project description.', '2021-07-07', '2021-07-23', 0, '', '2021-07-07 15:19:17'),
(31, 'Capstone 6', 'Something', '2021-07-08', '2021-07-15', 0, '', '2021-07-07 15:25:02'),
(32, 'Start over', 'Paking shet walang katulong', '2021-11-14', '2021-11-21', 0, '', '2021-11-14 03:03:53');

-- --------------------------------------------------------

--
-- Table structure for table `task_list`
--

CREATE TABLE `task_list` (
  `task_id` int(30) NOT NULL,
  `task` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `login_type` tinyint(1) NOT NULL DEFAULT 1 COMMENT 'admin=1, staff=2,reg=3'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `login_type`) VALUES
(1, 'John', 'Doe', 'Johndoe@admin.com', 'e064f069e98e361e1dcb904ed1bd8763', 1),
(11, 'Kai', 'Domingo', 'Kai@gmail.com', 'd0aabe9a362cb2712ee90e04810902f3', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project_list`
--
ALTER TABLE `project_list`
  ADD PRIMARY KEY (`proj_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project_list`
--
ALTER TABLE `project_list`
  MODIFY `proj_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
