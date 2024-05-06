-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2024 at 03:01 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `aid` int(11) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `ans_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`aid`, `answer`, `ans_id`) VALUES
(1, 'Sudden headache', 1),
(2, 'Arm numb', 1),
(3, 'Loss of vision', 1),
(4, 'Difficulty speaking or understanding speech', 1),
(5, 'FAST (Face, Arms, Speech, Time)', 2),
(6, 'CPR (Cardiopulmonary resuscitation)', 2),
(7, 'ABC (Airway, Breathing, Circulation)', 2),
(8, 'SDR (Stop, Drop and Roll)', 2),
(9, 'Give them aspirin', 3),
(10, 'Call emergency services immediately and note the time when symptoms began', 3),
(11, 'Make them lie down and rest', 3),
(12, 'Wait and see if the symptoms improve on their own', 3),
(13, 'Check for breathing', 4),
(14, 'Open the airway', 4),
(15, 'Call for emergency assistance', 4),
(16, 'Check for responsiveness', 4),
(17, 'Check for breathing', 5),
(18, 'Check for responsiveness', 5),
(19, 'Perform CPR immediately', 5),
(20, 'Elevate the legs', 5),
(21, 'Shout for help', 6),
(22, 'Tap the person gently and ask if they are okay', 6),
(23, 'Check the person\'s pulse', 6),
(24, 'Give them a glass of water', 6),
(25, 'Offer them a drink to wash down the obstruction', 7),
(26, 'Slap them on the back', 7),
(27, 'Perform abdominal thrusts (Heimlich maneuver)', 7),
(28, 'Encourage them to cough', 7),
(29, 'Apply ice directly to the burn', 8),
(30, 'Cover the burn with butter or oil', 8),
(31, 'Rinse the burn with cool water and cover it with a clean, dry cloth', 8),
(32, 'Remove any clothing sticking to the burn immediately', 8);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `message` text NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `first_name`, `last_name`, `email`, `phone`, `message`, `datetime`, `status`) VALUES
(1, 'mahira', 'nafisa', 'test@email.com', '98585458', 'test', '2018-02-04 15:37:07', 1),
(2, 'sgbsz', 'shnx', 'xhbxf@gmail.com', '23456734', 'sfdghyfgdxads cv', '2024-04-09 02:50:01', 1),
(3, 'htegvb', 'egfvb', 'dfcdv@gmail.com', '2345678', 'azseerxdt rxzrdx bvfvb', '2024-04-09 03:31:56', 1),
(4, 'htegvb', '', 'dfcdv@gmail.com', '', 'azseerxdt rxzrdx bvfvb', '2024-04-09 03:35:09', 1),
(5, 'mahira1', '', 'mahira1@gmail.com', '', 'hi', '2024-04-09 03:36:21', 1),
(6, 'mahira2', 'nafisa2', 'nafisa2@gmail.com', '34567890', 'hey', '2024-04-09 03:49:11', 1),
(7, 'mahira2', 'nafisa2', 'nafisa2@gmail.com', '34567890', 'hey', '2024-04-09 04:46:40', 1),
(8, 'mahira', 'hjhm', 'mahira2@gmail.com', '123456789', 'zsxdlfvgbh', '2024-04-21 06:17:16', 1),
(9, 'dscfvf', 'sdcv', 'dfv@gmail.com', 'sdc', 'sadfvgb', '2024-05-05 16:45:34', 1);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qid` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `ans_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `question`, `ans_id`) VALUES
(1, 'What is the main symptom of a stroke?', 2),
(2, 'What is the acronym used to remember the signs of a stroke?', 7),
(3, 'What should you do if you suspect someone is having a stroke?', 10),
(4, 'What is the first step in performing CPR on an unconscious adult?', 16),
(5, 'What is the first step in assessing an unconscious person?', 17),
(6, 'How should you check for responsiveness in an unconscious person?', 22),
(7, 'What should you do if someone is choking?', 27),
(8, 'How can you treat a minor burn?', 31);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(2, 'bloop', 'bloop@gmail.com', '4aca29c7c0a76c1cbaad40b2693e6bef'),
(3, 'fdgbh', 'dfgvb@gmail.com', '443adf7f63390460552d867d32ef6ba3'),
(4, 'abcdefg', 'abcdefg@gmail.com', '7ac66c0f148de9519b8bd264312c4d64'),
(5, 'sdfghj', 'dfghj@gmail.com', '2ba76fc357c80852441116d50eb9bc31'),
(6, 'aaaa', 'aaaa@gmail.com', '74b87337454200d4d33f80c4663dc5e5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
