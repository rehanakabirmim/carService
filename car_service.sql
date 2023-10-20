-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2023 at 12:15 PM
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
-- Database: `car_service`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `ban_id` int(11) NOT NULL,
  `ban_title` varchar(200) NOT NULL,
  `ban_subtitle` varchar(250) NOT NULL,
  `ban_button` varchar(50) NOT NULL,
  `ban_url` varchar(50) NOT NULL,
  `ban_image` varchar(50) NOT NULL,
  `ban_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`ban_id`, `ban_title`, `ban_subtitle`, `ban_button`, `ban_url`, `ban_image`, `ban_status`) VALUES
(11, 'Ultimate Car Service Center', 'Your One-Stop Shop for Repairs, Maintenance, and More', 'Read More', 'https://www.youtube.com/watch?v=SbNwS1qXj1Q', 'banner_1697793520_644019.jpg', 0),
(12, 'Drive with Confidence', 'Top-Quality Car Services Tailored to Your Needs', 'Read More', 'https://www.youtube.com/watch?v=oVTnSqRwqg8', 'banner_1697794083_286982.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `book_id` int(11) NOT NULL,
  `book_name` varchar(30) NOT NULL,
  `book_email` varchar(50) NOT NULL,
  `book_ser_name` varchar(20) NOT NULL,
  `book_ser_date` date NOT NULL,
  `book_req` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `con_id` int(11) NOT NULL,
  `con_name` varchar(50) NOT NULL,
  `con_email` varchar(50) NOT NULL,
  `con_subject` varchar(50) NOT NULL,
  `con_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`con_id`, `con_name`, `con_email`, `con_subject`, `con_message`) VALUES
(11, 'Rehana Mim', ' rehanakabirmim@gmail.com', 'CSE', 'sgfhfn');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'superadmin'),
(2, 'admin'),
(3, 'author'),
(4, 'subscriber'),
(5, 'Editor');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `service_title` varchar(100) NOT NULL,
  `service_details` text NOT NULL,
  `service_button` varchar(30) NOT NULL,
  `service_url` varchar(100) NOT NULL,
  `service_photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service_title`, `service_details`, `service_button`, `service_url`, `service_photo`) VALUES
(6, 'Diagnostic Test', 'Comprehensive vehicle diagnostics to pinpoint issues accurately. Thorough inspection of engine, electronics, and more. Get a detailed report on your cars health before any service.', 'Read More', 'https://www.youtube.com/watch?v=oVTnSqRwqg8', 'service_1697794826_292146.jpg'),
(7, 'Engine Servicing', 'Expert engine maintenance, repair, and tuning for peak performance. Thorough inspection and replacement of worn components. Enhance fuel efficiency and extend engine lifespan with our professional service.', 'Read More', 'https://www.youtube.com/watch?v=oVTnSqRwqg8', 'service_1697795019_585165.jpg'),
(8, 'Tires Replacement', 'Swift and safe tire replacement with a wide range of premium tire options. Professional balancing and alignment to ensure optimal handling. Drive away with confidence, knowing your vehicles grip and safety are restored.', 'Read More', 'https://www.youtube.com/watch?v=oVTnSqRwqg8', 'service_1697795085_507430.jpg'),
(9, 'Oil Changing', 'Swift and convenient oil change using high-quality motor oils. Complete oil system inspection and filter replacement for engine longevity. Improve fuel efficiency and protect your engine with our routine oil change service.', 'Read More', 'https://www.youtube.com/watch?v=oVTnSqRwqg8', 'service_1697795182_109402.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `member_id` int(11) NOT NULL,
  `member_name` varchar(50) NOT NULL,
  `member_designation` varchar(50) NOT NULL,
  `member_facebook` varchar(100) NOT NULL,
  `member_twitter` varchar(100) NOT NULL,
  `member_instragram` varchar(100) NOT NULL,
  `member_photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`member_id`, `member_name`, `member_designation`, `member_facebook`, `member_twitter`, `member_instragram`, `member_photo`) VALUES
(10, 'Touhid', ' Service Technician', 'fab fa-facebook-f', ' fab fa-twitter', 'fab fa-instagram', 'team_1697795562_894237.jpg'),
(11, 'Ahmed', 'Service Advisor', 'fab fa-facebook-f', ' fab fa-twitter', 'fab fa-instagram', 'team_1697795700_279340.jpg'),
(12, 'Rashed', ' Parts Specialist', 'fab fa-facebook-f', ' fab fa-twitter', 'fab fa-instagram', 'team_1697795793_882609.jpg'),
(13, 'Shium', 'Automotive Technician', 'fab fa-facebook-f', ' fab fa-twitter', 'fab fa-instagram', 'team_1697795891_260355.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `client_id` int(11) NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `client_prof` varchar(30) NOT NULL,
  `client_details` varchar(100) NOT NULL,
  `client_photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`client_id`, `client_name`, `client_prof`, `client_details`, `client_photo`) VALUES
(4, 'Takir Hasan ', ' IT Manager', 'I have been a loyal customer of XYZ Auto Service for years. Their expert team, led by Mark, always p', 'testimonial_1697796277_359839.jpg'),
(5, 'Samia Kabir', 'Small Business Owner', 'As a small business owner, my vehicles are essential for my daily operations. ABC Car Care has been ', 'testimonial_1697796366_773436.jpg'),
(6, 'Sadia Hossain', 'Teacher', 'I bring my car to DEF Auto Clinic regularly, and I couldnot be happier with their service. Being a t', 'testimonial_1697796449_362130.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `user_phone` varchar(20) DEFAULT NULL,
  `user_email` varchar(30) DEFAULT NULL,
  `user_username` varchar(50) DEFAULT NULL,
  `user_password` varchar(40) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `user_photo` varchar(50) DEFAULT NULL,
  `user_slug` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_phone`, `user_email`, `user_username`, `user_password`, `role_id`, `user_photo`, `user_slug`) VALUES
(7, 'Rehana Kabir Mim', '01680650424', 'rehanakabirmim@gmail.com', 'mim', 'c20ad4d76fe97759aa27a0c99bff6710', 1, '', '  U652bbe92b1555');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`ban_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_username` (`user_username`),
  ADD UNIQUE KEY `user_email` (`user_email`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `ban_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
