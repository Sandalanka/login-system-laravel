-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2019 at 07:09 PM
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
-- Database: `registation`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'isuru', 'sandalanka', 'kasuni@gmail.com', '12345', NULL, '2019-03-13 11:00:00', '2019-03-13 11:00:00'),
(2, 'isuru', 'sandalanka', 'kasuni@gmail.com', '$2y$10$QOfy4e3tImg9S9rLl2XrD.bG9JCxDDgJ1bmyhBlO4ySDaBAUcOTkm', NULL, '2019-03-13 11:01:43', '2019-03-13 11:01:43'),
(3, 'isuru', 'sandalanka', 'kasuni@gmail.com', '$2y$10$iHENP51tHeY75j2kxuV2peQa/n2ai3SOfSQMa31kRje0NbTZBQIlO', NULL, '2019-03-13 11:01:56', '2019-03-13 11:01:56'),
(4, 'kasuni', 'chanchala', 'admin@gmail.com', '$2y$10$0mFTetbQw.8Q8WthtdbIru.K0cuqhOh58MLerc/NoeSAegeEJoEie', NULL, '2019-03-13 11:07:51', '2019-03-13 11:07:51'),
(5, 'kamal', 'amara', '1415sandalanka@gmail.com', '$2y$10$5YGQi681z48EQeX6UGQgIe2YvOFxEWQxevF5yVnJeWIq.ffXJFOqq', NULL, '2019-03-13 11:42:28', '2019-03-13 11:42:28'),
(6, 'hashan', 'sandalanka', 'hashan@gmail.com', '$2y$10$pwYxt3PVKo4Xm5ZP30MEyuZHm/okJE2JH7/p3MH/8Vw.YRIZhLy9y', NULL, '2019-03-13 12:17:30', '2019-03-13 12:17:30');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
