-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2016 at 10:05 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `techbhet`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Meetups', '2016-04-13 12:30:00', '2016-04-07 12:30:00'),
(2, 'Hackathons', '2016-05-17 12:30:00', '2016-05-19 12:30:00'),
(3, 'Workshops', '2016-05-23 12:30:00', '2016-05-24 12:30:00'),
(4, 'Competitions', '2016-06-15 18:15:00', '2016-06-16 18:15:00'),
(5, 'Talks', '2016-06-13 18:15:00', '2016-06-07 18:15:00'),
(6, 'Others', '2016-06-08 18:15:00', '2016-06-15 18:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
`id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `main_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `owner_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `meetup` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `organizer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `details_organizer` text COLLATE utf8_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `location`, `main_image`, `date`, `time`, `owner_id`, `created_at`, `updated_at`, `meetup`, `fb`, `organizer`, `details_organizer`, `tags`, `category_id`) VALUES
(3, 'Deerthon – First Inter-Collegiate CSIT hackathon by DWIT Software Club ', 'Deerthon http://deerthon.dwit.edu.np/ is the first inter-collegiate hack-a-thon to be conducted by the club. The hack-a-thon is for CSIT students only. Through this competition, the Software Club aims to bring together the brilliant minds of CSIT faculty. It is a quest to find which group of students has the best problem-solving ability.', 'Deerwalk Institute of Technology, Siphal.', 'deerthon-hackathon.png', '2016-07-02', '07:00:07', 2, '2016-06-24 04:39:18', '2016-06-28 08:29:18', 'http://deerthon.dwit.edu.np/', 'https://www.facebook.com/deerthon/', 'Deerwalk DWIT College and DWIT Software Club', 'Software Club http://software.com , one of the many https://www.tech.london/events  clubs formed by students of Deerwalk Institute of Technology (DWIT), aims to increase students’ programming skills by involving them in different projects, conducting workshops, organizing competitions, and more. \r\n\r\nFrom the club’s establishment, the motto has been to make students comfortable with codes and increase their logical thinking capabilities.\r\n\r\nhttp://www.tech.london/events\r\n\r\nhttp://www.bit.ly/28MKaVh', '', 2),
(4, '2nd Inter-College Matlab Simulation Competition', 'LOCUS in collaboration with ELECTRICAL CLUB, Pulchowk, presents 2nd inter-college MATLAB simulation competition. To participate in the competion, submit the report of your simulation before deadline i.e. 16 Ashad, 2073 to srijanashrestha524@gmail.com.\r\n\r\nLOCUS is not too far and so the MATLAB simulation competition.\r\nHere are the few rules to be followed in the competition.\r\n1. Prepare the presentation slide.\r\n2. The result of your simulation should be included in the slide.\r\n3. Simulation must not be from any of the videos of the Mathworks.\r\n4. Simulation report should be submitted beforehand.', 'Pulchowk Engineering Campus, Lalitpur', 'locus matlab.jpg', '2016-07-02', '10:00:00', 1, '2016-06-25 04:01:35', '2016-06-25 04:03:10', '', 'https://www.facebook.com/events/589868224507191/', 'Locus', 'http://locus.ioe.edu.np/', '', 4),
(5, ' Free Front-End Workshop', 'This workshop is focused for both IT students as well as Non IT students who are interested to learn the basics of Front-End Web Development. \r\n\r\nTopics that are covered in this workshop includes:\r\n\r\n1. Introduction of HTML/CSS and Javascript\r\n2. Develop a small section of static web page using HTML/CSS from scratch and show some animations using Jquery.\r\n\r\nPrerequisites to participate:\r\n1. You will require to bring your laptops and chargers.\r\n2. You will require to install a text editor (Sublime Text). (You can visit Leapfrog Academy premise if there''s a problem installing it. Please do so before the main event day.)\r\n3. Also, do install modern browser like Chrome or Firefox.\r\n\r\nIt''s a one day free workshop on June 26, 2016 from 11 am to 1 pm. \r\n\r\nFacilitator Detail:\r\nSweta Shrestha\r\nSenior UX Developer at YoungInnovations\r\n\r\nSeats for only 30 participants. You can book your seat by registering @:https://docs.google.com/forms/d/1DSyOa7IXlW0vGvtMEMYVONedXAex_3nQerbskNL1d1Y/viewform', 'Leapfrog Academy, Dillibazar (Opposite to Siddhi Polyclinic), Kathmandu', 'front end workshop leapfrog.jpg', '2016-06-26', '11:00:00', 1, '2016-06-25 04:08:04', '2016-06-28 05:15:30', '', 'https://www.facebook.com/events/1737762829838176/', 'Leapfrog Academy', 'http://www.leapfrog.academy/          ', '', 3),
(6, 'Codejam, LOCUS 2016', 'Prizes:\r\nfor Advanced: Rs 8000, Rs 4000 and Rs 2000\r\nfor Beginners: Rs 4000, Rs 2000 and Rs 1000\r\n\r\nEntry Fee:\r\nBeginners: Rs 100\r\nAdvanced: Rs 150\r\n\r\nRegister here: https://docs.google.com/forms/d/1S9MeuDaHoQymIsWwir7HGcAOy_HrFMSHZhr0xgWrpnw/viewform\r\n\r\nContact\r\nBibek Pandey(9845407092)\r\nManoj Agrahari(9846467125)\r\nChitraketu Pandey(9843304993)', 'Pulchowk Campus, Pulchowk, Lalitpur', 'locus codejam.jpg', '2016-06-29', '11:00:00', 1, '2016-06-25 04:31:37', '2016-06-28 06:43:29', 'ddddddddd', 'https://www.facebook.com/events/1720109124904949', 'Locus', 'http://locus.ioe.edu.np/', '', 4),
(7, 'Yomari Codecamp 2016', '', 'Pulchowk Engineering Campus, Lalitpur', 'yomari code camp.jpg', '2016-07-02', '08:00:00', 1, '2016-06-25 04:36:24', '2016-06-25 04:36:36', '', 'https://www.facebook.com/events/142445032843455/', 'Yomari', 'http://www.yomari.com.np/', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_03_06_171259_create_events_table', 1),
('2016_03_07_080533_create_categories_table', 1),
('2016_03_07_081754_add_categoryid_to_events_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tech Bhet', 'techlekhnp@gmail.com', '$2y$10$FeSuMTSQrKK3YuL6f.vXgOZq2BNI7dAa9rbtJQEneOh0jrRBEMxla', '88RKPbB8YoegEZKHLJxyQGx3gmCT0i5ZYwWNs91u2DzUnxfQzlbSSEPixlcW', '2016-06-25 08:35:19', '2016-06-25 08:38:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
 ADD PRIMARY KEY (`id`), ADD KEY `events_category_id_foreign` (`category_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--
ALTER TABLE `events`
ADD CONSTRAINT `events_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
