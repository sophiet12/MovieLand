-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 25, 2020 at 09:16 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movieLand`
--

-- --------------------------------------------------------

--
-- Table structure for table `actors`
--

CREATE TABLE `actors` (
  `id` int(10) UNSIGNED NOT NULL,
  `act_fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `act_lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `actors`
--

INSERT INTO `actors` (`id`, `act_fname`, `act_lname`) VALUES
(4, 'Deborah Rosa', 'Chemla'),
(9, 'Ben', 'Dahan'),
(10, 'Sarah', 'Zeitoun'),
(11, 'Dylan', 'Uzan'),
(16, 'Hertzel', 'Azran'),
(17, 'Ilana', 'Samak'),
(18, 'Sophie', 'Teboul'),
(19, 'Cordie', 'Bartell'),
(20, 'Steve', 'Strosin'),
(21, 'Sonya', 'Metz'),
(22, 'Makenzie', 'Mante'),
(23, 'Chauncey', 'McGlynn'),
(24, 'Jamal', 'Streich'),
(25, 'Shane', 'Braun'),
(26, 'Cecil', 'Bechtelar'),
(27, 'Rigoberto', 'Kemmer'),
(28, 'Josh', 'Conn'),
(29, 'Kyler', 'Cronin'),
(30, 'Jeramy', 'Farrell'),
(31, 'William', 'Johnston'),
(32, 'Alize', 'Ratke'),
(33, 'Kacey', 'Witting'),
(34, 'Lucinda', 'Schaden'),
(35, 'Leann', 'Jaskolski'),
(36, 'Roberto', 'Bailey'),
(37, 'Krista', 'Simonis'),
(38, 'Lilla', 'Streich'),
(39, 'Jude', 'Flatley'),
(40, 'Alejandrin', 'Yundt'),
(41, 'Dan', 'Bode'),
(42, 'Augustine', 'Herzog'),
(43, 'Braeden', 'Stiedemann'),
(44, 'Adrianna', 'Crooks'),
(45, 'Lisa', 'Grant'),
(46, 'Lamont', 'Hayes'),
(47, 'Alfreda', 'Cummings'),
(48, 'Leon', 'Witting'),
(49, 'Sally', 'Murray'),
(50, 'Dallin', 'Breitenberg'),
(51, 'Faye', 'Bailey'),
(52, 'Madeline', 'Harvey'),
(53, 'Albina', 'Bogisich'),
(54, 'Dejuan', 'Hickle'),
(55, 'Alice', 'Will'),
(56, 'Jorge', 'Hahn'),
(57, 'Paolo', 'Miller'),
(58, 'Cathrine', 'McLaughlin'),
(59, 'Libby', 'Gulgowski'),
(60, 'Lucile', 'Purdy'),
(61, 'Dandre', 'Brekke'),
(62, 'Carter', 'Collins'),
(63, 'Willow', 'Hagenes'),
(64, 'Gardner', 'Nienow'),
(65, 'Akeem', 'Stamm'),
(66, 'Valentina', 'Schuster'),
(67, 'Chance', 'Rosenbaum'),
(68, 'Wilhelmine', 'Deckow'),
(69, 'Kattie', 'Rutherford'),
(70, 'Caesar', 'Rau'),
(71, 'Katelynn', 'Hammes'),
(72, 'Catharine', 'Watsica'),
(73, 'Katelin', 'Rogahn'),
(74, 'Howell', 'Walsh'),
(75, 'Roosevelt', 'Dietrich'),
(76, 'Ruth', 'Corkery'),
(77, 'Abner', 'Cormier'),
(78, 'Jaunita', 'Wyman'),
(79, 'Hailie', 'Vandervort'),
(80, 'Coy', 'Anderson'),
(81, 'Bryon', 'Doyle'),
(82, 'Cole', 'Dibbert'),
(83, 'Bonnie', 'Kirlin'),
(84, 'Janelle', 'Franecki'),
(85, 'Kathlyn', 'Cremin'),
(86, 'Eliseo', 'Treutel'),
(87, 'Mina', 'Hudson'),
(88, 'Duane', 'Auer'),
(89, 'Stanford', 'Flatley'),
(90, 'Laverne', 'Nader'),
(91, 'Lonie', 'Mertz'),
(92, 'Vito', 'Altenwerth'),
(93, 'Keagan', 'Marquardt'),
(94, 'Moshe', 'Gorczany'),
(95, 'Keely', 'Predovic'),
(96, 'Obie', 'Homenick'),
(97, 'Bertram', 'Rodriguez'),
(98, 'Gabrielle', 'Turcotte'),
(99, 'Bret', 'Rippin'),
(100, 'Tomas', 'Zemlak'),
(101, 'Christine', 'Feest'),
(102, 'Telly', 'Homenick'),
(103, 'Jovani', 'Bernhard'),
(104, 'Tamia', 'Effertz'),
(105, 'Carlee', 'McClure'),
(106, 'Marilou', 'Mueller'),
(107, 'Santos', 'Crooks'),
(108, 'Mariam', 'Prosacco'),
(109, 'Alicia', 'Shanahan'),
(110, 'Keaton', 'Botsford'),
(111, 'Judy', 'Prosacco'),
(112, 'Kathleen', 'Veum'),
(113, 'Bradly', 'Predovic'),
(114, 'Coy', 'Ryan'),
(115, 'Kennith', 'Hegmann'),
(116, 'Stephania', 'Murphy');

-- --------------------------------------------------------

--
-- Table structure for table `actor_movie`
--

CREATE TABLE `actor_movie` (
  `id` int(10) UNSIGNED NOT NULL,
  `actor_id` int(10) UNSIGNED NOT NULL,
  `movie_id` int(10) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `actor_movie`
--

INSERT INTO `actor_movie` (`id`, `actor_id`, `movie_id`, `role`) VALUES
(8, 9, 1, '3eme'),
(10, 4, 4, '1er role'),
(11, 10, 4, '2eme role'),
(12, 11, 4, '3eme role'),
(14, 4, 1, '2eme role'),
(16, 4, 8, 'dd'),
(17, 99, 7, 'p'),
(18, 25, 1, '1er role');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Category 1'),
(2, 'Category 2\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_01_09_100743_create_categories_table', 1),
(4, '2020_01_09_100831_create_movies_table', 1),
(5, '2020_01_09_100916_create_actors_table', 1),
(6, '2020_01_09_101020_create_actor_movie_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(10) UNSIGNED NOT NULL,
  `movie_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `movie_title`, `category_id`) VALUES
(1, 'ABCabc', 1),
(4, 'abcd', 1),
(6, 'fesdvsdv', 2),
(7, 'bb', 2),
(8, 'new movie', 1),
(9, 'test new', 2),
(10, 'test1', 1),
(11, 'pppp', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `actor_movie`
--
ALTER TABLE `actor_movie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `actor_movie_actor_id_index` (`actor_id`),
  ADD KEY `actor_movie_movie_id_index` (`movie_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movies_category_id_index` (`category_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actors`
--
ALTER TABLE `actors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `actor_movie`
--
ALTER TABLE `actor_movie`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `actor_movie`
--
ALTER TABLE `actor_movie`
  ADD CONSTRAINT `actor_movie_actor_id_foreign` FOREIGN KEY (`actor_id`) REFERENCES `actors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `actor_movie_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `movies_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
