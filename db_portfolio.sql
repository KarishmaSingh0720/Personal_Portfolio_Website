-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2023 at 07:17 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_about`
--

CREATE TABLE `tb_about` (
  `id` int(11) NOT NULL,
  `skill` text NOT NULL,
  `summary` text NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_about`
--

INSERT INTO `tb_about` (`id`, `skill`, `summary`, `admin_id`) VALUES
(1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum enim pariatur eligendi fuga perferendis adipisci consectetur vitae cumque suscipit temporibus.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum enim pariatur eligendi fuga perferendis adipisci consectetur vitae cumque suscipit temporibus.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contact` text NOT NULL,
  `tag` text NOT NULL,
  `profile` text NOT NULL,
  `address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `name`, `email`, `password`, `contact`, `tag`, `profile`, `address`) VALUES
(1, 'Maya Singh', 'maya@gmail.com', 'admin', '+91 8764345678', 'Web Developer', 'Developer, Designer, Creator', 'New Street,India .');

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact`
--

CREATE TABLE `tb_contact` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(250) NOT NULL,
  `suject` varchar(250) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_contact`
--

INSERT INTO `tb_contact` (`id`, `name`, `email`, `suject`, `message`) VALUES
(1, 'Rudra', 'rudra@gmail.com', 'Price Quote Inquiry', 'Send Me Project Price '),
(2, 'mit', 'mit@gmail.com', 'Greet', 'Good Morning');

-- --------------------------------------------------------

--
-- Table structure for table `tb_social`
--

CREATE TABLE `tb_social` (
  `id` int(11) NOT NULL,
  `github` varchar(200) NOT NULL,
  `linkedin` varchar(200) NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `gmail` varchar(200) NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_social`
--

INSERT INTO `tb_social` (`id`, `github`, `linkedin`, `facebook`, `gmail`, `admin_id`) VALUES
(1, 'yourgithublink', 'yourlinkedinlink', '', 'mailto: youremail@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_technology`
--

CREATE TABLE `tb_technology` (
  `id` int(11) NOT NULL,
  `tech_image` varchar(250) NOT NULL,
  `tech_name` text NOT NULL,
  `tech_des` text NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_technology`
--

INSERT INTO `tb_technology` (`id`, `tech_image`, `tech_name`, `tech_des`, `admin_id`) VALUES
(1, 'img/html.png', 'TECHNAME', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum enim pariatur eligendi fuga perferendis adipisci consectetur vitae cumque suscipit temporibus.', 1),
(3, 'img/html.png', 'TECHNAME', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum enim pariatur eligendi fuga perferendis adipisci consectetur vitae cumque suscipit temporibus.', 1),
(4, 'img/html.png', 'TECHNAME', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum enim pariatur eligendi fuga perferendis adipisci consectetur vitae cumque suscipit temporibus.', 1),
(5, 'img/html.png', 'TECHNAME', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum enim pariatur eligendi fuga perferendis adipisci consectetur vitae cumque suscipit temporibus.', 1),
(6, 'img/html.png', 'TECHNAME', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum enim pariatur eligendi fuga perferendis adipisci consectetur vitae cumque suscipit temporibus.', 1),
(7, 'img/html.png', 'TECHNAME', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum enim pariatur eligendi fuga perferendis adipisci consectetur vitae cumque suscipit temporibus.', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_about`
--
ALTER TABLE `tb_about`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_contact`
--
ALTER TABLE `tb_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_social`
--
ALTER TABLE `tb_social`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `tb_technology`
--
ALTER TABLE `tb_technology`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_technology_ibfk_1` (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_about`
--
ALTER TABLE `tb_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_contact`
--
ALTER TABLE `tb_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `tb_social`
--
ALTER TABLE `tb_social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_technology`
--
ALTER TABLE `tb_technology`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_about`
--
ALTER TABLE `tb_about`
  ADD CONSTRAINT `tb_about_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `tb_admin` (`id`);

--
-- Constraints for table `tb_social`
--
ALTER TABLE `tb_social`
  ADD CONSTRAINT `tb_social_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `tb_admin` (`id`);

--
-- Constraints for table `tb_technology`
--
ALTER TABLE `tb_technology`
  ADD CONSTRAINT `tb_technology_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `tb_admin` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
