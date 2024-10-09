-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2024 at 06:28 AM
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
-- Database: `1highschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_02_19_094730_create_permission_tables', 1),
(7, '2024_06_05_190753_create_schools_table', 1),
(9, '2024_06_09_013125_create_students_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'create-role', 'web', '2024-06-05 13:24:07', '2024-06-05 13:24:07'),
(2, 'edit-role', 'web', '2024-06-05 13:24:07', '2024-06-05 13:24:07'),
(3, 'delete-role', 'web', '2024-06-05 13:24:07', '2024-06-05 13:24:07'),
(4, 'create-user', 'web', '2024-06-05 13:24:07', '2024-06-05 13:24:07'),
(5, 'edit-user', 'web', '2024-06-05 13:24:07', '2024-06-05 13:24:07'),
(6, 'delete-user', 'web', '2024-06-05 13:24:07', '2024-06-05 13:24:07'),
(7, 'create-permission', 'web', '2024-06-05 13:24:07', '2024-06-05 13:24:07'),
(8, 'edit-permission', 'web', '2024-06-05 13:24:07', '2024-06-05 13:24:07'),
(9, 'delete-permission', 'web', '2024-06-05 13:24:07', '2024-06-05 13:24:07');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'web', '2024-06-05 13:24:07', '2024-06-05 13:24:07'),
(2, 'Admin', 'web', '2024-06-05 13:24:07', '2024-06-05 13:24:07');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(4, 2),
(5, 2),
(6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `short_name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `estd` varchar(255) DEFAULT NULL,
  `logo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `name`, `short_name`, `address`, `email`, `phone`, `code`, `estd`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'Charkumaria High School', 'CHS', 'Charkumaria, Bhedarganj, Shariatpur', 'charkumaria@gmail.com', '1300418575', '113508', '1972', 'public/assets/logos/T8vypSo9Q9woZsqbcwLL3HYgDFX8btBSKiypy8eQ.jpg', '2024-06-08 19:22:15', '2024-10-01 21:37:59'),
(2, 'Sakhipur Islamia High School', 'SIHS', 'Bhedarganj, Shariatpur', 'sihs@gm.com', '01721437011', '113498', '1929', 'public/assets/logos/PHiEYEdxooGEtxyu0GZHSm2bS7Eg3eqeSEwCG6lR.png', NULL, '2024-10-01 21:33:43'),
(3, 'SBD Humayun Kabir High School', 'SBDHKHS', 'Bhedarganj, Shariatpur', 'sbdhkhs113517@gmail.com', '01726765934', '113517', '1997', 'public/assets/logos/hd8bLIvNTewofhQZ58VGJggnvZP36sgDfRpk1saW.jpg', NULL, '2024-10-01 21:34:01'),
(4, 'Abdul Goni High School', 'AGHS', 'Bhedarganj, Shariatpur', 'abdulgoni113518@gmail.com', '01309113518', '113518', '2003', 'public/assets/logos/BMT7SuIlGQ93H3vywtyJteqrRCEPOXuRfjUvb0SC.png', NULL, '2024-10-01 21:34:54'),
(5, 'Char Bhaga High School', 'CBHS', 'Bhedarganj, Shariatpur', 'chbsh@gmai.com', '01709901602', '113502', '1964', 'public/assets/logos/oB44a5ctGKCyl07kj7pKd60ATKdMbsLEDMMnYfgh.png', NULL, '2024-10-01 21:03:12'),
(6, 'Tarabunia High School', 'THS', 'Bhedarganj, Shariatpur', 'tbsh@gmail.com', '01709901602', '113500', '1963', 'public/assets/logos/W3IoC08efaMdBuF5UCn8JKoLYbb3SVSNESLoKr2A.png', NULL, '2024-10-01 20:59:31'),
(7, 'Char Filij Jainab High School And College', 'CFJHSC', 'Bhedarganj, Shariatpur', 'cfjhs@gma.com', '01709901602', '113510', '1974', 'public/assets/logos/eP2b09PeoxMLoMUVbwHlm2hnEo2fFPuISJ3XhZtl.jpg', NULL, '2024-10-01 21:35:22');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admission_id` varchar(250) DEFAULT NULL,
  `school_id` int(20) DEFAULT NULL,
  `student_name_english` varchar(255) NOT NULL,
  `student_name_bangla` varchar(255) DEFAULT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `date_of_birth` date NOT NULL,
  `birth_certificate` varchar(255) DEFAULT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `blood_group` varchar(255) DEFAULT NULL,
  `present_school_name` varchar(255) DEFAULT NULL,
  `father_name_english` varchar(255) NOT NULL,
  `father_name_bangla` varchar(255) DEFAULT NULL,
  `father_date_of_birth` date DEFAULT NULL,
  `father_nid_number` varchar(255) DEFAULT NULL,
  `father_profession` varchar(255) DEFAULT NULL,
  `father_contact_number` varchar(255) DEFAULT NULL,
  `mother_name_english` varchar(255) NOT NULL,
  `mother_name_bangla` varchar(255) DEFAULT NULL,
  `mother_date_of_birth` date DEFAULT NULL,
  `mother_nid_number` varchar(255) DEFAULT NULL,
  `mother_profession` varchar(255) DEFAULT NULL,
  `parents_yearly_income` decimal(10,2) DEFAULT NULL,
  `present_address_village` varchar(255) NOT NULL,
  `present_address_post_block` varchar(255) NOT NULL,
  `present_address_thana` varchar(255) NOT NULL,
  `present_address_district` varchar(255) NOT NULL,
  `permanent_address_village` varchar(255) DEFAULT NULL,
  `permanent_address_post_block` varchar(255) DEFAULT NULL,
  `permanent_address_thana` varchar(255) DEFAULT NULL,
  `permanent_address_district` varchar(255) DEFAULT NULL,
  `class` varchar(255) NOT NULL,
  `group_department` varchar(255) DEFAULT NULL,
  `class_section` varchar(255) DEFAULT NULL,
  `class_shift` varchar(255) DEFAULT NULL,
  `academic_year` varchar(255) NOT NULL,
  `student_quotes` varchar(255) DEFAULT NULL,
  `get_admission_in_any_institution` tinyint(1) NOT NULL DEFAULT 0,
  `student_image` varchar(255) DEFAULT NULL,
  `student_status` varchar(255) DEFAULT 'Pending',
  `admission_status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `admission_id`, `school_id`, `student_name_english`, `student_name_bangla`, `mobile_number`, `email`, `date_of_birth`, `birth_certificate`, `gender`, `religion`, `blood_group`, `present_school_name`, `father_name_english`, `father_name_bangla`, `father_date_of_birth`, `father_nid_number`, `father_profession`, `father_contact_number`, `mother_name_english`, `mother_name_bangla`, `mother_date_of_birth`, `mother_nid_number`, `mother_profession`, `parents_yearly_income`, `present_address_village`, `present_address_post_block`, `present_address_thana`, `present_address_district`, `permanent_address_village`, `permanent_address_post_block`, `permanent_address_thana`, `permanent_address_district`, `class`, `group_department`, `class_section`, `class_shift`, `academic_year`, `student_quotes`, `get_admission_in_any_institution`, `student_image`, `student_status`, `admission_status`, `created_at`, `updated_at`) VALUES
(1, 'CHS-113508-2024-1', 1, 'Idrak', 'ইদরাক', '012', 'idrakacademy2022@gmail.com', '2024-09-24', '123', 'male', 'Islam', 'A+', 'N/A', 'Md Ebrahim Kholil', 'ইব্রাহিম', NULL, '123555', 'Government Service', '01', 'Rabeya', 'রাবেয়া', NULL, '23', 'Housewife', 10000.00, 'South Charkumaria', 'South Charkumaria', 'Sakhipur', 'Shariatpur', 'South Charkumaria', 'South Charkumaria', 'Sakhipur', 'Shariatpur', 'Class-6', 'General', NULL, NULL, '2025', NULL, 0, 'storage/assets/studentImg/4tstiBaf1N2RYo2tppaaPJtjGSzWjN98wGa1E9kI.png', NULL, 'pending', '2024-09-24 03:31:50', '2024-09-24 03:31:50'),
(2, 'SIHS-113508-2024-1', 2, 'Idrak', 'ইদরাক', '012', 'idrakacademy2022@gmail.com', '2024-09-24', '1234', 'male', 'Islam', 'A+', 'N/A', 'Md Ebrahim Kholil', 'ইব্রাহিম', NULL, '123555', 'Government Service', '01', 'Rabeya', 'রাবেয়া', NULL, '23', 'Housewife', 10000.00, 'South Charkumaria', 'South Charkumaria', 'Sakhipur', 'Shariatpur', 'South Charkumaria', 'South Charkumaria', 'Sakhipur', 'Shariatpur', 'Class-6', 'General', NULL, NULL, '2025', NULL, 0, 'storage/assets/studentImg/4tstiBaf1N2RYo2tppaaPJtjGSzWjN98wGa1E9kI.png', NULL, 'Approved', '2024-09-24 03:31:50', '2024-10-08 21:23:53'),
(3, 'CHS-113508-2024-1', 3, 'Idrak', 'ইদরাক', '012', 'idrakacademy2022@gmail.com', '2024-09-24', '12345', 'male', 'Islam', 'A+', 'N/A', 'Md Ebrahim Kholil', 'ইব্রাহিম', NULL, '123555', 'Government Service', '01', 'Rabeya', 'রাবেয়া', NULL, '23', 'Housewife', 10000.00, 'South Charkumaria', 'South Charkumaria', 'Sakhipur', 'Shariatpur', 'South Charkumaria', 'South Charkumaria', 'Sakhipur', 'Shariatpur', 'Class-6', 'General', NULL, NULL, '2025', NULL, 0, 'storage/assets/studentImg/4tstiBaf1N2RYo2tppaaPJtjGSzWjN98wGa1E9kI.png', NULL, 'pending', '2024-09-24 03:31:50', '2024-09-24 03:31:50'),
(4, 'AGHS-113518-2024-1', 4, 'Jabir', 'ইদরাক', '012', 'idrakacademy2022@gmail.com', '2024-10-06', '123456789', 'male', 'Islam', 'A+', NULL, 'Md Ebrahim Kholil', 'ইব্রাহিম', NULL, '123555', 'N/A', '01', 'Rabeya', 'রাবেয়া', NULL, '23', 'Housewife', NULL, 'South Charkumaria', 'South Charkumaria', 'Sakhipur', 'Shariatpur', 'South Charkumaria', 'South Charkumaria', 'Sakhipur', 'Shariatpur', 'Class-6', 'General', NULL, NULL, '2025', NULL, 0, 'storage/assets/studentImg/SvUwEp5kjBGvINfnjVyp8XAszXVBlExvq7s0HMNQ.png', 'Pending', 'pending', '2024-10-06 00:48:09', '2024-10-06 00:48:09'),
(6, 'SIHS-113498-2024-3', 2, 'Ismael', 'ইদরাক', '012', 'idrakacademy2022@gmail.com', '2024-10-04', '1122', 'male', 'Islam', 'A+', NULL, 'Md Ebrahim Kholil', 'ইব্রাহিম', NULL, '123555', 'N/A', '01', 'Rabeya', 'রাবেয়া', NULL, '23', 'Housewife', 10000.00, 'South Charkumaria', 'South Charkumaria', 'Sakhipur', 'Shariatpur', 'South Charkumaria', 'South Charkumaria', 'Sakhipur', 'Shariatpur', 'Class-6', 'General', NULL, NULL, '2025', NULL, 0, 'public/assets/studentImg/jdmrpgTFdZ233sljePMZPhGR5wSkmQHXJLH3FcNh.png', 'Pending', 'pending', '2024-10-06 00:57:24', '2024-10-06 00:57:24'),
(7, 'SIHS-113498-2024-7', 2, 'Tushar', 'তুষার', '0123456', NULL, '2022-06-10', '998877', 'male', 'Islam', 'A+', NULL, 'Abc', 'তুষার', NULL, '123555', 'Teacher', '123', 'Abc', 'তুষার', NULL, '88', 'Housewife', NULL, 'South Charkumaria', 'South Charkumaria', 'Sakhipur', 'Shariatpur', 'South Charkumaria', 'South Charkumaria', 'Sakhipur', 'Shariatpur', 'Class-6', 'General', NULL, NULL, '2025', NULL, 0, 'public/assets/studentImg/avater.jpg', 'Pending', 'Approved', '2024-10-08 22:04:19', '2024-10-08 22:06:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `school_id` int(20) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `school_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'super@admin.com', 2, NULL, '$2y$12$7WLk5NIkFhH2OeAMiJ0o5.g/DhbvYVsEKcWj1N4naHH.F6mCQJyoe', NULL, '2024-06-05 13:24:08', '2024-06-05 13:24:08'),
(2, 'Admin', 'admin@admin.com', 1, NULL, '$2y$12$K51hjVm/yiGBREBBgrsNbOQyqJhvtERqR8A50c2TrCPzdQT3iyvjq', NULL, '2024-06-05 13:24:08', '2024-06-05 13:24:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `birth_certificate` (`birth_certificate`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
