-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2022 at 07:40 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sinergi_langkah_nyata`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'ferdian@sinergilangkahnyata.com', 7, '2022-06-10 21:28:57', 1),
(2, '::1', 'ferdian@sinergilangkahnyata.com', 7, '2022-06-10 21:56:34', 1),
(3, '::1', 'ferdian@sinergilangkahnyata.com', 7, '2022-06-10 22:54:14', 1),
(4, '::1', 'ferdian@sinergilangkahnyata.com', 7, '2022-06-11 12:09:08', 1),
(5, '::1', 'ferdian@sinergilangkahnyata.com', 7, '2022-06-12 00:24:41', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `innovation`
--

CREATE TABLE `innovation` (
  `id_innovation` int(11) NOT NULL,
  `name_innovation` varchar(255) NOT NULL,
  `description_innovation` text NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `image_innovation` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `innovation`
--

INSERT INTO `innovation` (`id_innovation`, `name_innovation`, `description_innovation`, `updated_at`, `created_at`, `image_innovation`) VALUES
(13, 'Smart Glucosemeter', 'Early checking and monitoring of blood sugar is the key to preventing the risk of developing diabetes. Reaching 3rd SDGs, therefore, requires a closer look at strategies for educating regions that have poor knowledge of health especially ineducation-related to prevention and management procedures for this diabetes. \r\nSmart Glucosemeter is Blood sugar detector with a non-invasive method by detecting the density of blood sugar in the subcutaneous layer of finger tissue with a wavelength of 850 nm. Blood sugar detection uses infrared waves that are transmitted to a light-catching sensor in the form of a photodiode consisting of Ag and RGO. The accuracy of this Non-Invasive Glucosometer is expected to reach 95.5% for early detection of abnormal blood sugar levels based on the lambert-beer equation.\r\n', '2022-06-11 01:49:12', '2022-06-09 20:29:47', 'python.png'),
(19, 'Voiry', 'Stress on the individual will affect the sound produced when speaking. Even if one tries to cover up one\'s psychological state, the sound will still show actual conditions. Stress affects physiological regulation in the body, it will impact voice changes. when the speaker under stress, the cricothyroid muscle contracts causing tension higher, while the activity of the thyroarytenoid muscle becomes relatively low, leading to a lack of articulation in the resulting speech This is the basis and reference for making machine learning-based Voiry applications to detect stress using voice.\r\nVoiry is a pioneer application to detect stress by using voice quickly, precisely, and efficiently to help make people feel more comfortable and feel safe and confident in detecting mental health conditions. This innovation still in a progres, wait until we ready to hear your voice.', '2022-06-11 02:10:37', '2022-06-10 23:12:03', '1654877523_9ee74340d9fd7fb8933a.png');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1654868745, 1);

-- --------------------------------------------------------

--
-- Table structure for table `project_impact`
--

CREATE TABLE `project_impact` (
  `id_project_impact` int(11) NOT NULL,
  `id_innovation` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `name_project_impact` text NOT NULL,
  `description_project_impact` text DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_impact`
--

INSERT INTO `project_impact` (`id_project_impact`, `id_innovation`, `category`, `name_project_impact`, `description_project_impact`, `updated_at`, `created_at`) VALUES
(59, 13, 'impact', 'A Daily reminder to take care the loved ones', 'We hope that with the use of this non-invasive Glucosemeter, we can always take care of our loved ones around us', '2022-06-11 01:49:12', '2022-06-11 01:49:12'),
(60, 13, 'impact', 'A Glucosemeter that takes the “Ouch!” out of diabetes care', 'So far, non-invasive blood sugar detection needs to hurt the user\'s body. The innovation of a non-invasive glucosemeter is expected to help make it easier for users to make early detection of disease without worrying about feeling sick again.', '2022-06-11 01:49:12', '2022-06-11 01:49:12'),
(63, 19, 'feature', 'Check your condition', 'stress detection feature with Voice in Indonesian.', '2022-06-11 02:10:37', '2022-06-11 02:10:37'),
(64, 19, 'feature', 'Stress therapy', 'feature for stress-reducing therapy with music therapy, deep breath therapy, and also therapy mindfulness', '2022-06-11 02:10:37', '2022-06-11 02:10:37'),
(65, 19, 'feature', 'Capture your Mood', 'is a feature to detect mood with voice and short video recordings accompanied by a mood classification display that can be visualized in a virtual view and can be shared through the user\'s social media.', '2022-06-11 02:10:37', '2022-06-11 02:10:37'),
(66, 19, 'feature', 'Mood tracker', 'is a feature to find out how the user\'s mood in a certain period of time in the form of a graph', '2022-06-11 02:10:37', '2022-06-11 02:10:37'),
(67, 19, 'feature', 'Badge and Mission', 'is a point collection feature if users use the \"Capture your Mood\" feature regularly for a certain period of time. Points earned can be used to use premium features in the application', '2022-06-11 02:10:37', '2022-06-11 02:10:37'),
(68, 19, 'feature', 'Express your Feelings', 'is a feature that will connect users who need the help of the nearest mental health or mental health experts, through messages in the application. \"Voiry\" or by scheduling a visit with the desired expert.', '2022-06-11 02:10:37', '2022-06-11 02:10:37'),
(69, 19, 'feature', 'Help Voiry', 'as one of the features to improve the quality of the application with help from users.', '2022-06-11 02:10:37', '2022-06-11 02:10:37');

-- --------------------------------------------------------

--
-- Table structure for table `social_media_team`
--

CREATE TABLE `social_media_team` (
  `id_social_media` int(11) NOT NULL,
  `id_team` varchar(5) NOT NULL,
  `name_social_media` varchar(255) DEFAULT NULL,
  `link_social_media` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social_media_team`
--

INSERT INTO `social_media_team` (`id_social_media`, `id_team`, `name_social_media`, `link_social_media`) VALUES
(19, 'SLN1', 'Intagram', ''),
(20, 'SLN1', 'Linkedin', ''),
(21, 'SLN1', 'Twitter', ''),
(22, 'SLN2', 'Intagram', ''),
(23, 'SLN2', 'Linkedin', ''),
(24, 'SLN2', 'Twitter', ''),
(25, 'SLN3', 'Intagram', ''),
(26, 'SLN3', 'Linkedin', ''),
(27, 'SLN3', 'Twitter', ''),
(28, 'SLN4', 'Intagram', ''),
(29, 'SLN4', 'Linkedin', ''),
(30, 'SLN4', 'Twitter', ''),
(31, 'SLN5', 'Intagram', 'https://www.instagram.com/rafli_ferdian25/?hl=id'),
(32, 'SLN5', 'Linkedin', 'https://www.linkedin.com/in/rafli-ferdian/'),
(33, 'SLN5', 'Twitter', '');

-- --------------------------------------------------------

--
-- Table structure for table `tagline`
--

CREATE TABLE `tagline` (
  `id_tagline` int(11) NOT NULL,
  `tagline` varchar(100) NOT NULL,
  `description_tagline` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tagline`
--

INSERT INTO `tagline` (`id_tagline`, `tagline`, `description_tagline`) VALUES
(1, 'Sinergi Langkah Nyata', 'Hidup Sehat Selalu');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id_team` varchar(5) NOT NULL,
  `name_team` varchar(255) NOT NULL,
  `motivational_words` text DEFAULT NULL,
  `position_team` varchar(50) NOT NULL,
  `photo_team` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id_team`, `name_team`, `motivational_words`, `position_team`, `photo_team`) VALUES
('SLN1', 'M. Rafly', 'Sehat selalu untuk kita semua', 'Leader', 'python.png'),
('SLN2', 'Zulfida', '', 'Member', '1654934330_9d505295c30709f6dc39.jpg'),
('SLN3', 'Rafi Anisa', '', 'Member', '1654934350_c5c243fbe5178ec732d8.jpg'),
('SLN4', 'Musa Alfian M', 'No Skip No Rest', 'Web Developer', '1654934749_05c85319999abf6656e8.jpg'),
('SLN5', 'Rafli Ferdian R', 'No Skip No Rest', 'Web Developer', '1654935028_78d5c16afa789726451d.png');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id_testimonial` int(11) NOT NULL,
  `id_inovation` int(11) NOT NULL,
  `name_testimonial` varchar(255) NOT NULL,
  `description_testimonial` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `photo_testimonial` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `uniqueness`
--

CREATE TABLE `uniqueness` (
  `id_uniqueness` int(11) NOT NULL,
  `id_innovation` int(11) NOT NULL,
  `name_uniqueness` text NOT NULL,
  `description_uniqueness` text DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uniqueness`
--

INSERT INTO `uniqueness` (`id_uniqueness`, `id_innovation`, `name_uniqueness`, `description_uniqueness`, `updated_at`, `created_at`) VALUES
(118, 13, 'Better tracking of lifestyle', '', '2022-06-11 01:49:12', '2022-06-11 01:49:12'),
(119, 13, 'non invasive technology', '', '2022-06-11 01:49:12', '2022-06-11 01:49:12'),
(120, 13, 'instantly blood glucose detection', '', '2022-06-11 01:49:12', '2022-06-11 01:49:12'),
(121, 13, 'an early detection', '', '2022-06-11 01:49:12', '2022-06-11 01:49:12'),
(122, 13, 'constantly adjust to lifestyle', '', '2022-06-11 01:49:12', '2022-06-11 01:49:12'),
(133, 19, 'Unique app to detect your stress level', 'You can detect your stress level just by using your voice, no need to go anywhere and meet no one with just your gadget.', '2022-06-11 02:10:37', '2022-06-11 02:10:37'),
(134, 19, 'Many features for your mental health', 'Voiry offers many interesting innovative features that are expected to help you maintain or improve your mental health.', '2022-06-11 02:10:37', '2022-06-11 02:10:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 'ferdianrafli25@gmail.com', 'admin1', '$2y$10$kz06ibJ5hyIU0Je9u385UO3aXfmJmLZbhCXdsQkZDSs7XkQ9h0p0m', NULL, NULL, NULL, '69d691eee55b9e151be563030bc1569c', NULL, NULL, 0, 0, '2022-06-10 21:23:25', '2022-06-10 21:23:25', NULL),
(7, 'ferdian@sinergilangkahnyata.com', 'adminSLN1', '$2y$10$ovgn14wYksM1t7oG5au4CORJX9XCABjEuKQkQCp8LvSzIfUV1oNvi', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-06-10 21:28:47', '2022-06-10 21:28:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_email`
--

CREATE TABLE `users_email` (
  `id_users_email` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `innovation`
--
ALTER TABLE `innovation`
  ADD PRIMARY KEY (`id_innovation`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_impact`
--
ALTER TABLE `project_impact`
  ADD PRIMARY KEY (`id_project_impact`),
  ADD KEY `id_inovation` (`id_innovation`);

--
-- Indexes for table `social_media_team`
--
ALTER TABLE `social_media_team`
  ADD PRIMARY KEY (`id_social_media`),
  ADD KEY `id_team` (`id_team`);

--
-- Indexes for table `tagline`
--
ALTER TABLE `tagline`
  ADD PRIMARY KEY (`id_tagline`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id_team`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id_testimonial`),
  ADD KEY `id_inovation` (`id_inovation`);

--
-- Indexes for table `uniqueness`
--
ALTER TABLE `uniqueness`
  ADD PRIMARY KEY (`id_uniqueness`),
  ADD KEY `id_inovation` (`id_innovation`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `users_email`
--
ALTER TABLE `users_email`
  ADD PRIMARY KEY (`id_users_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `innovation`
--
ALTER TABLE `innovation`
  MODIFY `id_innovation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project_impact`
--
ALTER TABLE `project_impact`
  MODIFY `id_project_impact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `social_media_team`
--
ALTER TABLE `social_media_team`
  MODIFY `id_social_media` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id_testimonial` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uniqueness`
--
ALTER TABLE `uniqueness`
  MODIFY `id_uniqueness` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users_email`
--
ALTER TABLE `users_email`
  MODIFY `id_users_email` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `project_impact`
--
ALTER TABLE `project_impact`
  ADD CONSTRAINT `project_impact_ibfk_1` FOREIGN KEY (`id_innovation`) REFERENCES `innovation` (`id_innovation`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `social_media_team`
--
ALTER TABLE `social_media_team`
  ADD CONSTRAINT `social_media_team_ibfk_1` FOREIGN KEY (`id_team`) REFERENCES `team` (`id_team`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD CONSTRAINT `testimonial_ibfk_1` FOREIGN KEY (`id_inovation`) REFERENCES `innovation` (`id_innovation`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `uniqueness`
--
ALTER TABLE `uniqueness`
  ADD CONSTRAINT `uniqueness_ibfk_1` FOREIGN KEY (`id_innovation`) REFERENCES `innovation` (`id_innovation`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
