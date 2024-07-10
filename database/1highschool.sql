-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2024 at 08:27 PM
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
(1, 'Charkumaria High School', 'CHS', 'South Charkumaria, Bhedarganj, Shariatpur', 'charkumaria@gmail.com', '1300418575', '113508', '1972', 'storage/assets/images/7c2ec3xtrijlvKdZUHbasTGmV7sa9NqLmMyvhjC8.jpg', '2024-06-08 19:22:15', '2024-06-08 19:29:45');

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
  `student_status` varchar(255) DEFAULT NULL,
  `admission_status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `admission_id`, `school_id`, `student_name_english`, `student_name_bangla`, `mobile_number`, `email`, `date_of_birth`, `birth_certificate`, `gender`, `religion`, `blood_group`, `present_school_name`, `father_name_english`, `father_name_bangla`, `father_date_of_birth`, `father_nid_number`, `father_profession`, `father_contact_number`, `mother_name_english`, `mother_name_bangla`, `mother_date_of_birth`, `mother_nid_number`, `mother_profession`, `parents_yearly_income`, `present_address_village`, `present_address_post_block`, `present_address_thana`, `present_address_district`, `permanent_address_village`, `permanent_address_post_block`, `permanent_address_thana`, `permanent_address_district`, `class`, `group_department`, `class_section`, `class_shift`, `academic_year`, `student_quotes`, `get_admission_in_any_institution`, `student_image`, `student_status`, `admission_status`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'A', 'ইব্রাহিম', '01300418575', 'idrakacademy2022@gmail.com', '2024-06-29', '12', 'male', 'ew', 'A+', 'N/A', 'f', 'ইব্রাহিম', '2024-06-29', 'fg', 'fg', NULL, 'g', 'g', '2024-06-29', '23', 's', 122.00, 'a', 'aa', 'b', 'c', 'a', 'aa', 'b', 'c', 'Class 1', 'Science', 'b', 'day', '2023', NULL, 1, 'storage/assets/studentImg/RWhjY3BO1Bekhf6vqCDsQnaVgiuyN0PoHjImkgbC.jpg', NULL, NULL, '2024-06-28 13:09:24', '2024-06-28 13:09:24'),
(2, NULL, 1, 'B', 'ইব্রাহিম', '01300418575', 'idrakacademy20212@gmail.com', '2024-06-29', '12', 'male', 'ew', 'A+', 'N/A', 'f', 'ইব্রাহিম', '2024-06-29', 'fg', 'fg', NULL, 'g', 'g', '2024-06-29', '23', 's', 122.00, 'a', 'aa', 'b', 'c', 'a', 'aa', 'b', 'c', 'Class 1', 'Science', 'b', 'day', '2023', NULL, 1, 'storage/assets/studentImg/lRW85y7Wpq4IJGTufteMYBhdc31EscLWL4MONBV1.jpg', NULL, NULL, '2024-06-28 13:15:13', '2024-06-28 13:15:13'),
(3, 'CHS-113508-2024-3', 1, 'Idrak', 'ইদরাক', '01300418575', 'idrakacademy2022@gmail.com', '2024-07-09', '12345', 'male', 'Islam', 'A+', 'N/A', 'Md Ebrahim Kholil', 'ইব্রাহিম', '2024-07-10', '123555', 'fg', '01', 'Rabeya', 'রাবেয়া', '2024-07-10', '23', 'hw', 122.00, 'a', 'aa', 'b', 'a', 'a', 'aa', 'b', 'a', 'Class 1', 'Science', 'b', 'day', '2023', 'no', 1, 'storage/assets/studentImg/6B4duSNEFq1EEm9pomnGbuwYjoCOTfR7qUDjWh00.jpg', NULL, 'pending', '2024-07-10 10:18:25', '2024-07-10 10:18:25'),
(4, 'CHS-113508-2024-4', 1, 'Idrak', 'ইদরাক', '01300418575', 'idrakacademy2022@gmail.com', '2024-07-09', '12345', 'male', 'Islam', 'A+', 'N/A', 'Md Ebrahim Kholil', 'ইব্রাহিম', '2024-07-10', '123555', 'fg', '01', 'Rabeya', 'রাবেয়া', '2024-07-10', '23', 'hw', 122.00, 'a', 'aa', 'b', 'a', 'a', 'aa', 'b', 'a', 'Class 1', 'Science', 'b', 'day', '2023', 'no', 1, 'storage/assets/studentImg/GX2qFvXhncse18HpmSR7IHvjKx9BUDxAkRqP5tfy.jpg', NULL, 'pending', '2024-07-10 10:20:28', '2024-07-10 10:20:28'),
(5, 'CHS-113508-2024-5', 1, 'Idrak', 'ইদরাক', '01300418575', 'idrakacademy2022@gmail.com', '2024-07-09', '12345', 'male', 'Islam', 'A+', 'N/A', 'Md Ebrahim Kholil', 'ইব্রাহিম', '2024-07-10', '123555', 'fg', '01', 'Rabeya', 'রাবেয়া', '2024-07-10', '23', 'hw', 122.00, 'a', 'aa', 'b', 'a', 'a', 'aa', 'b', 'a', 'Class 1', 'Science', 'b', 'day', '2023', 'no', 1, 'storage/assets/studentImg/LPLutbJLSB1FQDXhELuyYqgsNHDB1svcfpilZmB7.jpg', NULL, 'pending', '2024-07-10 10:51:42', '2024-07-10 10:51:42'),
(6, 'CHS-113508-2024-6', 1, 'Idrak', 'ইদরাক', '01300418575', 'idrakacademy2022@gmail.com', '2024-07-09', '12345', 'male', 'Islam', 'A+', 'N/A', 'Md Ebrahim Kholil', 'ইব্রাহিম', '2024-07-10', '123555', 'fg', '01', 'Rabeya', 'রাবেয়া', '2024-07-10', '23', 'hw', 122.00, 'a', 'aa', 'b', 'a', 'a', 'aa', 'b', 'a', 'Class 1', 'Science', 'b', 'day', '2023', 'no', 1, 'storage/assets/studentImg/EA7S9MyrYUK13ngz6f5fU92uMTAA1dcUHIkmzxbE.jpg', NULL, 'pending', '2024-07-10 10:52:55', '2024-07-10 10:52:55'),
(7, 'CHS-113508-2024-7', 1, 'Idrak', 'ইদরাক', '01300418575', 'idrakacademy2022@gmail.com', '2024-07-09', '12345', 'male', 'Islam', 'A+', 'N/A', 'Md Ebrahim Kholil', 'ইব্রাহিম', '2024-07-10', '123555', 'fg', '01', 'Rabeya', 'রাবেয়া', '2024-07-10', '23', 'hw', 122.00, 'a', 'aa', 'b', 'a', 'a', 'aa', 'b', 'a', 'Class 1', 'Science', 'b', 'day', '2023', 'no', 1, 'storage/assets/studentImg/tgeXVy7mT3Ob1jwgqNhZ9GgwcH0c611lSEgraeRY.jpg', NULL, 'pending', '2024-07-10 10:56:00', '2024-07-10 10:56:00'),
(8, 'CHS-113508-2024-8', 1, 'Idrak', 'ইদরাক', '01300418575', 'idrakacademy2022@gmail.com', '2024-07-09', '12345', 'male', 'Islam', 'A+', 'N/A', 'Md Ebrahim Kholil', 'ইব্রাহিম', '2024-07-10', '123555', 'fg', '01', 'Rabeya', 'রাবেয়া', '2024-07-10', '23', 'hw', 122.00, 'a', 'aa', 'b', 'a', 'a', 'aa', 'b', 'a', 'Class 1', 'Science', 'b', 'day', '2023', 'no', 1, 'storage/assets/studentImg/VEOSg7HdVlVjdoJhuoZlQDEFlbulUKgGhuAJUdv4.jpg', NULL, 'pending', '2024-07-10 11:07:33', '2024-07-10 11:07:33'),
(9, 'CHS-113508-2024-9', 1, 'Idrak', 'ইদরাক', '01300418575', 'idrakacademy2022@gmail.com', '2024-07-09', '12345', 'male', 'Islam', 'A+', 'N/A', 'Md Ebrahim Kholil', 'ইব্রাহিম', '2024-07-10', '123555', 'fg', '01', 'Rabeya', 'রাবেয়া', '2024-07-10', '23', 'hw', 122.00, 'a', 'aa', 'b', 'a', 'a', 'aa', 'b', 'a', 'Class 1', 'Science', 'b', 'day', '2023', 'no', 1, 'storage/assets/studentImg/mXU8A0XEo1qAOb1WggwjzfRHBr8fIqu8kOV4HktE.jpg', NULL, 'pending', '2024-07-10 11:17:31', '2024-07-10 11:17:31'),
(10, 'CHS-113508-2024-10', 1, 'Idrak', 'ইদরাক', '01300418575', 'idrakacademy2022@gmail.com', '2024-07-09', '12345', 'male', 'Islam', 'A+', 'N/A', 'Md Ebrahim Kholil', 'ইব্রাহিম', '2024-07-10', '123555', 'fg', '01', 'Rabeya', 'রাবেয়া', '2024-07-10', '23', 'hw', 122.00, 'a', 'aa', 'b', 'a', 'a', 'aa', 'b', 'a', 'Class 1', 'Science', 'b', 'day', '2023', 'no', 1, 'storage/assets/studentImg/Hnn1jkuZDblglzishZTsj07ovVplsw39LtUE3S7p.jpg', NULL, 'pending', '2024-07-10 11:22:18', '2024-07-10 11:22:18'),
(11, 'CHS-113508-2024-11', 1, 'Idrak', 'ইদরাক', '01300418575', 'idrakacademy2022@gmail.com', '2024-07-09', '12345', 'male', 'Islam', 'A+', 'N/A', 'Md Ebrahim Kholil', 'ইব্রাহিম', '2024-07-10', '123555', 'fg', '01', 'Rabeya', 'রাবেয়া', '2024-07-10', '23', 'hw', 122.00, 'a', 'aa', 'b', 'a', 'a', 'aa', 'b', 'a', 'Class 1', 'Science', 'b', 'day', '2023', 'no', 1, 'storage/assets/studentImg/qojW8aZtVm6kQzrrl6SP27I6ZSxEnmEGAPnXWTn0.jpg', NULL, 'pending', '2024-07-10 11:23:27', '2024-07-10 11:23:27'),
(12, 'CHS-113508-2024-12', 1, 'Idrak', 'ইদরাক', '01300418575', 'idrakacademy2022@gmail.com', '2024-07-09', '12345', 'male', 'Islam', 'A+', 'N/A', 'Md Ebrahim Kholil', 'ইব্রাহিম', '2024-07-10', '123555', 'fg', '01', 'Rabeya', 'রাবেয়া', '2024-07-10', '23', 'hw', 122.00, 'a', 'aa', 'b', 'a', 'a', 'aa', 'b', 'a', 'Class 1', 'Science', 'b', 'day', '2023', 'no', 1, 'storage/assets/studentImg/GsX5pu4Gi9faV1q3JcVKPJ6g7J9RyyIuLWXITxiL.jpg', NULL, 'pending', '2024-07-10 11:23:39', '2024-07-10 11:23:39'),
(13, 'CHS-113508-2024-13', 1, 'Idrak', 'ইদরাক', '01300418575', 'idrakacademy2022@gmail.com', '2024-07-09', '12345', 'male', 'Islam', 'A+', 'N/A', 'Md Ebrahim Kholil', 'ইব্রাহিম', '2024-07-10', '123555', 'fg', '01', 'Rabeya', 'রাবেয়া', '2024-07-10', '23', 'hw', 122.00, 'a', 'aa', 'b', 'a', 'a', 'aa', 'b', 'a', 'Class 1', 'Science', 'b', 'day', '2023', 'no', 1, 'storage/assets/studentImg/pMAXU8PcgAGgl8DvnC7as4yj8GMGWtqSbcM9jWwW.jpg', NULL, 'pending', '2024-07-10 11:39:26', '2024-07-10 11:39:26'),
(14, 'CHS-113508-2024-14', 1, 'Idrak', 'ইদরাক', '01300418575', 'idrakacademy2022@gmail.com', '2024-07-09', '12345', 'male', 'Islam', 'A+', 'N/A', 'Md Ebrahim Kholil', 'ইব্রাহিম', '2024-07-10', '123555', 'fg', '01', 'Rabeya', 'রাবেয়া', '2024-07-10', '23', 'hw', 122.00, 'a', 'aa', 'b', 'a', 'a', 'aa', 'b', 'a', 'Class 1', 'Science', 'b', 'day', '2023', 'no', 1, 'storage/assets/studentImg/6mgGVpZ8MEKyXMVnkOFMLDbRSiJcNXCRGwFPoTPY.jpg', NULL, 'pending', '2024-07-10 11:40:10', '2024-07-10 11:40:10'),
(15, 'CHS-113508-2024-15', 1, 'Idrak', 'ইদরাক', '01300418575', 'idrakacademy2022@gmail.com', '2024-07-09', '12345', 'male', 'Islam', 'A+', 'N/A', 'Md Ebrahim Kholil', 'ইব্রাহিম', '2024-07-10', '123555', 'fg', '01', 'Rabeya', 'রাবেয়া', '2024-07-10', '23', 'hw', 122.00, 'a', 'aa', 'b', 'a', 'a', 'aa', 'b', 'a', 'Class 1', 'Science', 'b', 'day', '2023', 'no', 1, 'storage/assets/studentImg/4Rb2gxfoCHI9fCHVccQ67YE3L5LxzRF4tvM5X6bL.jpg', NULL, 'pending', '2024-07-10 11:43:26', '2024-07-10 11:43:26'),
(16, 'CHS-113508-2024-16', 1, 'Idrak', 'ইদরাক', '01300418575', 'idrakacademy2022@gmail.com', '2024-07-09', '12345', 'male', 'Islam', 'A+', 'N/A', 'Md Ebrahim Kholil', 'ইব্রাহিম', '2024-07-10', '123555', 'fg', '01', 'Rabeya', 'রাবেয়া', '2024-07-10', '23', 'hw', 122.00, 'a', 'aa', 'b', 'a', 'a', 'aa', 'b', 'a', 'Class 1', 'Science', 'b', 'day', '2023', 'no', 1, 'storage/assets/studentImg/r1mwTQPBGEEVfeglfbzd0FW50C9eVgUqFOqm0hKJ.jpg', NULL, 'pending', '2024-07-10 11:44:16', '2024-07-10 11:44:16'),
(17, 'CHS-113508-2024-17', 1, 'Idrak', 'ইদরাক', '01300418575', 'idrakacademy2022@gmail.com', '2024-07-09', '12345', 'male', 'Islam', 'A+', 'N/A', 'Md Ebrahim Kholil', 'ইব্রাহিম', '2024-07-10', '123555', 'fg', '01', 'Rabeya', 'রাবেয়া', '2024-07-10', '23', 'hw', 122.00, 'a', 'aa', 'b', 'a', 'a', 'aa', 'b', 'a', 'Class 1', 'Science', 'b', 'day', '2023', 'no', 1, 'storage/assets/studentImg/NDPyIL9xhg8ySEHj0mnQLMNERohg7KHirkQ4iH7v.jpg', NULL, 'pending', '2024-07-10 11:46:06', '2024-07-10 11:46:06'),
(18, 'CHS-113508-2024-18', 1, 'Idrak', 'ইদরাক', '01300418575', 'idrakacademy2022@gmail.com', '2024-07-09', '12345', 'male', 'Islam', 'A+', 'N/A', 'Md Ebrahim Kholil', 'ইব্রাহিম', '2024-07-10', '123555', 'fg', '01', 'Rabeya', 'রাবেয়া', '2024-07-10', '23', 'hw', 122.00, 'a', 'aa', 'b', 'a', 'a', 'aa', 'b', 'a', 'Class 1', 'Science', 'b', 'day', '2023', 'no', 1, 'storage/assets/studentImg/ue5nnsCtaAZWTB8j78cDgaig2GOqo17jSJShEbuC.jpg', NULL, 'pending', '2024-07-10 11:46:48', '2024-07-10 11:46:48'),
(19, 'CHS-113508-2024-19', 1, 'Idrak', 'ইদরাক', '01300418575', 'idrakacademy2022@gmail.com', '2024-07-09', '12345', 'male', 'Islam', 'A+', 'N/A', 'Md Ebrahim Kholil', 'ইব্রাহিম', '2024-07-10', '123555', 'fg', '01', 'Rabeya', 'রাবেয়া', '2024-07-10', '23', 'hw', 122.00, 'a', 'aa', 'b', 'a', 'a', 'aa', 'b', 'a', 'Class 1', 'Science', 'b', 'day', '2023', 'no', 1, 'storage/assets/studentImg/wme29FBimoU40a2uXBsi29mtnoPStSBZIHFT6sKG.jpg', NULL, 'pending', '2024-07-10 11:49:15', '2024-07-10 11:49:15'),
(20, 'CHS-113508-2024-20', 1, 'Idrak', 'ইদরাক', '01300418575', 'idrakacademy2022@gmail.com', '2024-07-09', '12345', 'male', 'Islam', 'A+', 'N/A', 'Md Ebrahim Kholil', 'ইব্রাহিম', '2024-07-10', '123555', 'fg', '01', 'Rabeya', 'রাবেয়া', '2024-07-10', '23', 'hw', 122.00, 'a', 'aa', 'b', 'a', 'a', 'aa', 'b', 'a', 'Class 1', 'Science', 'b', 'day', '2023', 'no', 1, 'storage/assets/studentImg/5zwLjurl69ZxYEKVMHTlkdIADLTCBijohrSWRFYN.jpg', NULL, 'pending', '2024-07-10 11:50:39', '2024-07-10 11:50:39'),
(21, 'CHS-113508-2024-21', 1, 'Idrak', 'ইদরাক', '01300418575', 'idrakacademy2022@gmail.com', '2024-07-09', '12345', 'male', 'Islam', 'A+', 'N/A', 'Md Ebrahim Kholil', 'ইব্রাহিম', '2024-07-10', '123555', 'fg', '01', 'Rabeya', 'রাবেয়া', '2024-07-10', '23', 'hw', 122.00, 'a', 'aa', 'b', 'a', 'a', 'aa', 'b', 'a', 'Class 1', 'Science', 'b', 'day', '2023', 'no', 1, 'storage/assets/studentImg/Zv2mzXwKxHPFyMp2DWM4aRUfwsGc44dWGNjgKXaO.jpg', NULL, 'pending', '2024-07-10 11:51:26', '2024-07-10 11:51:26'),
(22, 'CHS-113508-2024-22', 1, 'Idrak', 'ইদরাক', '01300418575', 'idrakacademy2022@gmail.com', '2024-07-09', '12345', 'male', 'Islam', 'A+', 'N/A', 'Md Ebrahim Kholil', 'ইব্রাহিম', '2024-07-10', '123555', 'fg', '01', 'Rabeya', 'রাবেয়া', '2024-07-10', '23', 'hw', 122.00, 'a', 'aa', 'b', 'a', 'a', 'aa', 'b', 'a', 'Class 1', 'Science', 'b', 'day', '2023', 'no', 1, 'storage/assets/studentImg/Y2kPnF1npPNDF5Lu0pwQZ3DimsUKWGfUHdDeaMY3.jpg', NULL, 'pending', '2024-07-10 11:52:22', '2024-07-10 11:52:22'),
(23, 'CHS-113508-2024-23', 1, 'Idrak', 'ইদরাক', '01300418575', 'idrakacademy2022@gmail.com', '2024-07-09', '12345', 'male', 'Islam', 'A+', 'N/A', 'Md Ebrahim Kholil', 'ইব্রাহিম', '2024-07-10', '123555', 'fg', '01', 'Rabeya', 'রাবেয়া', '2024-07-10', '23', 'hw', 122.00, 'a', 'aa', 'b', 'a', 'a', 'aa', 'b', 'a', 'Class 1', 'Science', 'b', 'day', '2023', 'no', 1, 'storage/assets/studentImg/tjiLFvdSKQnE5bPXyeqRxKWXs3g3kq04QcNrmnO0.jpg', NULL, 'pending', '2024-07-10 11:57:27', '2024-07-10 11:57:27'),
(24, 'CHS-113508-2024-24', 1, 'Idrak', 'ইদরাক', '01300418575', 'idrakacademy2022@gmail.com', '2024-07-09', '12345', 'male', 'Islam', 'A+', 'N/A', 'Md Ebrahim Kholil', 'ইব্রাহিম', '2024-07-10', '123555', 'fg', '01', 'Rabeya', 'রাবেয়া', '2024-07-10', '23', 'hw', 122.00, 'a', 'aa', 'b', 'a', 'a', 'aa', 'b', 'a', 'Class 1', 'Science', 'b', 'day', '2023', 'no', 1, 'storage/assets/studentImg/pA9Df2h1TuurI0iXztBfhNZWJCGleCScKACyxigK.jpg', NULL, 'pending', '2024-07-10 12:00:18', '2024-07-10 12:00:18'),
(25, 'CHS-113508-2024-25', 1, 'Idrak', 'ইদরাক', '01300418575', 'idrakacademy2022@gmail.com', '2024-07-09', '12345', 'male', 'Islam', 'A+', 'N/A', 'Md Ebrahim Kholil', 'ইব্রাহিম', '2024-07-10', '123555', 'fg', '01', 'Rabeya', 'রাবেয়া', '2024-07-10', '23', 'hw', 122.00, 'a', 'aa', 'b', 'a', 'a', 'aa', 'b', 'a', 'Class 1', 'Science', 'b', 'day', '2023', 'no', 1, 'storage/assets/studentImg/rQYFpevLjR2gnruLamAXgLl05Hp9zUvmGQ4cv2AE.jpg', NULL, 'pending', '2024-07-10 12:01:54', '2024-07-10 12:01:54'),
(26, 'CHS-113508-2024-26', 1, 'Idrak', 'ইদরাক', '01300418575', 'idrakacademy2022@gmail.com', '2024-07-09', '12345', 'male', 'Islam', 'A+', 'N/A', 'Md Ebrahim Kholil', 'ইব্রাহিম', '2024-07-10', '123555', 'fg', '01', 'Rabeya', 'রাবেয়া', '2024-07-10', '23', 'hw', 122.00, 'a', 'aa', 'b', 'a', 'a', 'aa', 'b', 'a', 'Class 1', 'Science', 'b', 'day', '2023', 'no', 1, 'storage/assets/studentImg/r5hFroxxy1hIF1nVsOspK0NtegPfe86GX9xeWA1B.jpg', NULL, 'pending', '2024-07-10 12:07:14', '2024-07-10 12:07:14'),
(27, 'CHS-113508-2024-27', 1, 'Idrak', 'ইদরাক', '01300418575', 'idrakacademy2022@gmail.com', '2024-07-09', '12345', 'male', 'Islam', 'A+', 'N/A', 'Md Ebrahim Kholil', 'ইব্রাহিম', '2024-07-10', '123555', 'fg', '01', 'Rabeya', 'রাবেয়া', '2024-07-10', '23', 'hw', 122.00, 'a', 'aa', 'b', 'a', 'a', 'aa', 'b', 'a', 'Class 1', 'Science', 'b', 'day', '2023', 'no', 1, 'storage/assets/studentImg/eD2MHjoDieO19g6u2EZj5GPkoWOHKiqZdk1WKP7x.jpg', NULL, 'pending', '2024-07-10 12:08:11', '2024-07-10 12:08:11'),
(28, 'CHS-113508-2024-28', 1, 'Idrak', 'ইদরাক', '01300418575', 'idrakacademy2022@gmail.com', '2024-07-09', '12345', 'male', 'Islam', 'A+', 'N/A', 'Md Ebrahim Kholil', 'ইব্রাহিম', '2024-07-10', '123555', 'fg', '01', 'Rabeya', 'রাবেয়া', '2024-07-10', '23', 'hw', 122.00, 'a', 'aa', 'b', 'a', 'a', 'aa', 'b', 'a', 'Class 1', 'Science', 'b', 'day', '2023', 'no', 1, 'storage/assets/studentImg/C0lKK1Vintmo6qpc9ZLQOuLZQqloe7YPnR1kyzjL.jpg', NULL, 'pending', '2024-07-10 12:08:40', '2024-07-10 12:08:40'),
(29, 'CHS-113508-2024-29', 1, 'Idrak', 'ইদরাক', '01300418575', 'idrakacademy2022@gmail.com', '2024-07-09', '12345', 'male', 'Islam', 'A+', 'N/A', 'Md Ebrahim Kholil', 'ইব্রাহিম', '2024-07-10', '123555', 'fg', '01', 'Rabeya', 'রাবেয়া', '2024-07-10', '23', 'hw', 122.00, 'a', 'aa', 'b', 'a', 'a', 'aa', 'b', 'a', 'Class 1', 'Science', 'b', 'day', '2023', 'no', 1, 'storage/assets/studentImg/tPkkJ7MxRku4uo3IZ0TyNXRqiV8krQn8hikAPVVB.jpg', NULL, 'pending', '2024-07-10 12:09:08', '2024-07-10 12:09:08'),
(30, 'CHS-113508-2024-30', 1, 'Idrak', 'ইদরাক', '01300418575', 'idrakacademy2022@gmail.com', '2024-07-09', '12345', 'male', 'Islam', 'A+', 'N/A', 'Md Ebrahim Kholil', 'ইব্রাহিম', '2024-07-10', '123555', 'fg', '01', 'Rabeya', 'রাবেয়া', '2024-07-10', '23', 'hw', 122.00, 'a', 'aa', 'b', 'a', 'a', 'aa', 'b', 'a', 'Class 1', 'Science', 'b', 'day', '2023', 'no', 1, 'storage/assets/studentImg/ZlrgvLRKvfM5GDGkxmKzNuOEPZvQG8VshFzc4ujY.jpg', NULL, 'pending', '2024-07-10 12:09:33', '2024-07-10 12:09:33'),
(31, 'CHS-113508-2024-31', 1, 'Idrak', 'ইদরাক', '01300418575', 'idrakacademy2022@gmail.com', '2024-07-09', '12345', 'male', 'Islam', 'A+', 'N/A', 'Md Ebrahim Kholil', 'ইব্রাহিম', '2024-07-10', '123555', 'fg', '01', 'Rabeya', 'রাবেয়া', '2024-07-10', '23', 'hw', 122.00, 'a', 'aa', 'b', 'a', 'a', 'aa', 'b', 'a', 'Class 1', 'Science', 'b', 'day', '2023', 'no', 1, 'storage/assets/studentImg/26HXr3qn0Zn07pe9kEmjFTv0Ty80nr6Ouqhws8eQ.jpg', NULL, 'pending', '2024-07-10 12:10:17', '2024-07-10 12:10:17'),
(32, 'CHS-113508-2024-32', 1, 'Idrak', 'ইদরাক', '01300418575', 'idrakacademy2022@gmail.com', '2024-07-09', '12345', 'male', 'Islam', 'A+', 'N/A', 'Md Ebrahim Kholil', 'ইব্রাহিম', '2024-07-10', '123555', 'fg', '01', 'Rabeya', 'রাবেয়া', '2024-07-10', '23', 'hw', 122.00, 'a', 'aa', 'b', 'a', 'a', 'aa', 'b', 'a', 'Class 1', 'Science', 'b', 'day', '2023', 'no', 1, 'storage/assets/studentImg/t3U5rLgfO2Gvh463C5mQ4Y3RU5d7xksrO8kgFbxh.jpg', NULL, 'pending', '2024-07-10 12:10:46', '2024-07-10 12:10:46'),
(33, 'CHS-113508-2024-33', 1, 'Idrak', 'ইদরাক', '01300418575', 'idrakacademy2022@gmail.com', '2024-07-09', '12345', 'male', 'Islam', 'A+', 'N/A', 'Md Ebrahim Kholil', 'ইব্রাহিম', '2024-07-10', '123555', 'fg', '01', 'Rabeya', 'রাবেয়া', '2024-07-10', '23', 'hw', 122.00, 'a', 'aa', 'b', 'a', 'a', 'aa', 'b', 'a', 'Class 1', 'Science', 'b', 'day', '2023', 'no', 1, 'storage/assets/studentImg/6YDfRXtB6Nv7BZhqbhrWGBJPgtpx7b4n9mKhauWY.jpg', NULL, 'pending', '2024-07-10 12:11:18', '2024-07-10 12:11:18'),
(34, 'CHS-113508-2024-34', 1, 'Idrak', 'ইদরাক', '01300418575', 'idrakacademy2022@gmail.com', '2024-07-09', '12345', 'male', 'Islam', 'A+', 'N/A', 'Md Ebrahim Kholil', 'ইব্রাহিম', '2024-07-10', '123555', 'fg', '01', 'Rabeya', 'রাবেয়া', '2024-07-10', '23', 'hw', 122.00, 'a', 'aa', 'b', 'a', 'a', 'aa', 'b', 'a', 'Class 1', 'Science', 'b', 'day', '2023', 'no', 1, 'storage/assets/studentImg/r09DZOPtIXD5YZI2W6Oi9siH50MHwspDU2HSMRV8.jpg', NULL, 'pending', '2024-07-10 12:15:55', '2024-07-10 12:15:55'),
(35, 'CHS-113508-2024-35', 1, 'Idrak', 'ইদরাক', '01300418575', 'idrakacademy2022@gmail.com', '2024-07-09', '12345', 'male', 'Islam', 'A+', 'N/A', 'Md Ebrahim Kholil', 'ইব্রাহিম', '2024-07-10', '123555', 'fg', '01', 'Rabeya', 'রাবেয়া', '2024-07-10', '23', 'hw', 122.00, 'a', 'aa', 'b', 'a', 'a', 'aa', 'b', 'a', 'Class 1', 'Science', 'b', 'day', '2023', 'no', 1, 'storage/assets/studentImg/tLMK088xXgJA4HPct47J74msQoPJrO3Du0r4QhOP.jpg', NULL, 'pending', '2024-07-10 12:18:00', '2024-07-10 12:18:00'),
(36, 'CHS-113508-2024-36', 1, 'Idrak', 'ইদরাক', '01300418575', 'idrakacademy2022@gmail.com', '2024-07-09', '12345', 'male', 'Islam', 'A+', 'N/A', 'Md Ebrahim Kholil', 'ইব্রাহিম', '2024-07-10', '123555', 'fg', '01', 'Rabeya', 'রাবেয়া', '2024-07-10', '23', 'hw', 122.00, 'a', 'aa', 'b', 'a', 'a', 'aa', 'b', 'a', 'Class 1', 'Science', 'b', 'day', '2023', 'no', 1, 'storage/assets/studentImg/dmqHlC6jZ3nk5qCiOBbxUbFtvlDeRxMIGXnUCl1J.jpg', NULL, 'pending', '2024-07-10 12:18:26', '2024-07-10 12:18:26'),
(37, 'CHS-113508-2024-37', 1, 'Idrak', 'ইদরাক', '01300418575', 'idrakacademy2022@gmail.com', '2024-07-09', '12345', 'male', 'Islam', 'A+', 'N/A', 'Md Ebrahim Kholil', 'ইব্রাহিম', '2024-07-10', '123555', 'fg', '01', 'Rabeya', 'রাবেয়া', '2024-07-10', '23', 'hw', 122.00, 'a', 'aa', 'b', 'a', 'a', 'aa', 'b', 'a', 'Class 1', 'Science', 'b', 'day', '2023', 'no', 1, 'storage/assets/studentImg/QKpfLO90QdNVTiHts9banYsPLevIFARIQsaKfGKG.jpg', NULL, 'pending', '2024-07-10 12:18:40', '2024-07-10 12:18:40'),
(38, 'CHS-113508-2024-38', 1, 'Idrak', 'ইদরাক', '01300418575', 'idrakacademy2022@gmail.com', '2024-07-09', '12345', 'male', 'Islam', 'A+', 'N/A', 'Md Ebrahim Kholil', 'ইব্রাহিম', '2024-07-10', '123555', 'fg', '01', 'Rabeya', 'রাবেয়া', '2024-07-10', '23', 'hw', 122.00, 'a', 'aa', 'b', 'a', 'a', 'aa', 'b', 'a', 'Class 1', 'Science', 'b', 'day', '2023', 'no', 1, 'storage/assets/studentImg/ULyzyjzsBgzUHkSwy3egyTJ554cAMgf43CZF3TyI.jpg', NULL, 'pending', '2024-07-10 12:18:57', '2024-07-10 12:18:57'),
(39, 'CHS-113508-2024-39', 1, 'Idrak', 'ইদরাক', '01300418575', 'idrakacademy2022@gmail.com', '2024-07-09', '12345', 'male', 'Islam', 'A+', 'N/A', 'Md Ebrahim Kholil', 'ইব্রাহিম', '2024-07-10', '123555', 'fg', '01', 'Rabeya', 'রাবেয়া', '2024-07-10', '23', 'hw', 122.00, 'a', 'aa', 'b', 'a', 'a', 'aa', 'b', 'a', 'Class 1', 'Science', 'b', 'day', '2023', 'no', 1, 'storage/assets/studentImg/9qKWVseoZIzBRwAX1fnztTbJxg7g4AdapQJ2M5ro.jpg', NULL, 'pending', '2024-07-10 12:19:42', '2024-07-10 12:19:42'),
(40, 'CHS-113508-2024-40', 1, 'Idrak', 'ইদরাক', '01300418575', 'idrakacademy2022@gmail.com', '2024-07-09', '12345', 'male', 'Islam', 'A+', 'N/A', 'Md Ebrahim Kholil', 'ইব্রাহিম', '2024-07-10', '123555', 'fg', '01', 'Rabeya', 'রাবেয়া', '2024-07-10', '23', 'hw', 122.00, 'a', 'aa', 'b', 'a', 'a', 'aa', 'b', 'a', 'Class 1', 'Science', 'b', 'day', '2023', 'no', 1, 'storage/assets/studentImg/Mq3116xmkWgHe6N2ddrJs7vbbEHkGo4B6uYVWNVx.jpg', NULL, 'pending', '2024-07-10 12:23:07', '2024-07-10 12:23:07'),
(41, 'CHS-113508-2024-41', 1, 'Idrak', 'ইদরাক', '01300418575', 'idrakacademy2022@gmail.com', '2024-07-09', '12345', 'male', 'Islam', 'A+', 'N/A', 'Md Ebrahim Kholil', 'ইব্রাহিম', '2024-07-10', '123555', 'fg', '01', 'Rabeya', 'রাবেয়া', '2024-07-10', '23', 'hw', 122.00, 'a', 'aa', 'b', 'a', 'a', 'aa', 'b', 'a', 'Class 1', 'Science', 'b', 'day', '2023', 'no', 1, 'storage/assets/studentImg/kMbhhB5bXCATJOG8RSKpwLCi9POW3PBAIw7ADqLT.jpg', NULL, 'pending', '2024-07-10 12:23:59', '2024-07-10 12:23:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'super@admin.com', NULL, '$2y$12$7WLk5NIkFhH2OeAMiJ0o5.g/DhbvYVsEKcWj1N4naHH.F6mCQJyoe', NULL, '2024-06-05 13:24:08', '2024-06-05 13:24:08'),
(2, 'Admin', 'admin@admin.com', NULL, '$2y$12$K51hjVm/yiGBREBBgrsNbOQyqJhvtERqR8A50c2TrCPzdQT3iyvjq', NULL, '2024-06-05 13:24:08', '2024-06-05 13:24:08');

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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

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
