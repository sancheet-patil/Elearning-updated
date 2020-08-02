-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2020 at 03:35 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$eD.BUjeFZaPIj6QFFt9ax..hVSpp2t9HvbBP4wtuHHQFKFQlV2OwG', NULL, '2020-07-16 06:09:33', '2020-07-16 06:09:33');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `created_at`, `updated_at`) VALUES
(2, 'MPSC', '2020-07-21 04:52:30', '2020-07-21 04:52:30'),
(3, 'UPSC', '2020-07-21 05:45:39', '2020-07-21 05:45:39');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `free_videos`
--

CREATE TABLE `free_videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` bigint(20) UNSIGNED NOT NULL,
  `video_file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `free_videos`
--

INSERT INTO `free_videos` (`id`, `teacher_id`, `video_file`, `created_at`, `updated_at`) VALUES
(3, 3, 'assets/free_video/31596114404.seekable-recordrtc (13).webm', '2020-07-30 07:36:44', '2020-07-30 07:36:44'),
(5, 3, 'assets/free_video/31596115157.seekable-recordrtc (14).webm', '2020-07-30 07:49:17', '2020-07-30 07:49:17');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_16_113538_create_admins_table', 1),
(5, '2020_07_16_113553_create_teachers_table', 1),
(6, '2020_07_20_055626_create_courses_table', 2),
(7, '2020_07_21_105532_create_subcourses', 3),
(18, '2020_07_22_112832_create_syllabus', 5),
(20, '2020_07_24_102142_create_sub_chapter', 6),
(21, '2020_07_21_122621_create__teacher_sub_course', 7),
(22, '2020_07_30_034535_create_free_videos', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subcourses`
--

CREATE TABLE `subcourses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subCourses_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcourses`
--

INSERT INTO `subcourses` (`id`, `subCourses_name`, `course_id`, `created_at`, `updated_at`) VALUES
(2, 'Math', 3, '2020-07-21 06:44:16', '2020-07-21 06:52:03'),
(3, 'Physics', 3, '2020-07-21 07:16:32', '2020-07-21 07:16:32'),
(4, 'Chemistry', 2, '2020-07-21 07:16:45', '2020-07-21 07:16:45');

-- --------------------------------------------------------

--
-- Table structure for table `sub_chapter`
--

CREATE TABLE `sub_chapter` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `syllabus_id` bigint(20) UNSIGNED NOT NULL,
  `SubchapterName` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_chapter`
--

INSERT INTO `sub_chapter` (`id`, `syllabus_id`, `SubchapterName`, `created_at`, `updated_at`) VALUES
(2, 2, 'Basics of Algebra', '2020-07-24 07:50:16', '2020-07-24 07:50:16'),
(3, 2, 'Fundamentals of trigonometry', '2020-07-24 07:50:36', '2020-07-24 07:50:36'),
(6, 2, 'Theta and radian', '2020-07-24 08:33:54', '2020-07-24 08:33:54'),
(7, 2, 'Basics of maths', '2020-07-24 08:45:58', '2020-07-24 08:45:58');

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

CREATE TABLE `syllabus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `subCourse_id` bigint(20) UNSIGNED NOT NULL,
  `chapterName` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `syllabus`
--

INSERT INTO `syllabus` (`id`, `course_id`, `subCourse_id`, `chapterName`, `created_at`, `updated_at`) VALUES
(2, 3, 2, 'Algebra and trigonometry', '2020-07-24 04:44:17', '2020-07-24 05:46:52'),
(3, 2, 4, 'Organic Chemistry', '2020-07-24 22:14:31', '2020-07-24 22:14:31'),
(4, 2, 4, 'Periodic Table', '2020-07-24 22:15:48', '2020-07-24 22:15:48'),
(6, 3, 3, 'Fluids', '2020-07-24 23:51:55', '2020-07-24 23:51:55');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `private_coaching` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gov_teaching` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telegram_admin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `book_publish` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stat_new_teaching` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `certification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doc_file` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_file` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `email`, `phone`, `dob`, `email_verified_at`, `password`, `remember_token`, `status`, `private_coaching`, `gov_teaching`, `youtube`, `telegram_admin`, `book_publish`, `stat_new_teaching`, `certification`, `doc_file`, `video_file`, `profile_image`, `created_at`, `updated_at`) VALUES
(1, 'ami', 'ami@ami.com', '12345678', NULL, NULL, '$2y$10$Im87lbvOvz1sudnMIu/HLeH0DM0nUUPp.Ic7nIcPD9uWuUOv6HwCa', NULL, 2, 'sdf', 'sdfs', 'dfsdf', 'sdf', 'sdf', 'sdfsdf', 'sdfdsf', 'assets/admin/teacher/docfile/11594907367.Student_Wireframe.pdf', 'assets/admin/teacher/docfile/11594907367.SystemAdmin_Wireframe.pdf', NULL, '2020-07-16 06:37:04', '2020-07-17 09:28:24'),
(2, 'demo', 'demo@demo.com', '12345678', NULL, NULL, '$2y$10$rM26iVAcg4/avYlo54eBpu.rkv1/pshlugzvAUOM1JTrFkIBVl6Si', NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-16 13:57:07', '2020-07-21 05:16:45'),
(3, 'Sancheet Patil', 'sancheetpatil1234@gmail.com', '9601754565', '1997-03-16', NULL, '$2y$10$kuP1fR8qnp6c0uyF7.wWfOfso7He9wJNH86Nbiy4vIJ3fY4oo7zc2', NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-22 06:03:43', '2020-07-30 07:24:13'),
(4, 'Sancheet Patil', 'ssp1630@gmail.com', '9601754565', '1997-03-16', NULL, '$2y$10$GOPERqooU.Fi/md1LEUL2.7xNCUMlz18sjWVfZeKWgSxvCboVl1QG', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-22 06:05:29', '2020-07-24 23:55:55'),
(5, 'Dakshata Patil', 'drdakshatapatil1977@gmail.com', '9601754565', '1977-03-16', NULL, '$2y$10$eyZChUHf2jcLm6UUGjsJkeqs2GPfz.wulOkktgumGYFYE7Jpt1x9m', NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/admin/teacher/docfile/51596085761.WBS(elearning).xlsx', 'assets/admin/teacher/videofile/51596085761.seekable-recordrtc (12).webm', NULL, '2020-07-29 23:37:49', '2020-07-30 07:23:22');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_sub_course`
--

CREATE TABLE `teacher_sub_course` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subCourse_id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher_sub_course`
--

INSERT INTO `teacher_sub_course` (`id`, `subCourse_id`, `teacher_id`, `status`, `created_at`, `updated_at`) VALUES
(11, 4, 3, 2, '2020-07-29 06:57:02', '2020-07-29 06:58:27'),
(12, 2, 3, 1, '2020-07-29 07:03:59', '2020-07-29 07:32:06'),
(14, 3, 3, 2, '2020-07-29 07:35:05', '2020-07-29 07:35:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `free_videos`
--
ALTER TABLE `free_videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `free_videos_teacher_id_foreign` (`teacher_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `subcourses`
--
ALTER TABLE `subcourses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcourses_course_id_foreign` (`course_id`);

--
-- Indexes for table `sub_chapter`
--
ALTER TABLE `sub_chapter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_chapter_syllabus_id_foreign` (`syllabus_id`);

--
-- Indexes for table `syllabus`
--
ALTER TABLE `syllabus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `syllabus_subcourse_id_foreign` (`subCourse_id`),
  ADD KEY `syllabus_course_id_foreign` (`course_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teachers_email_unique` (`email`);

--
-- Indexes for table `teacher_sub_course`
--
ALTER TABLE `teacher_sub_course`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacher_sub_course_subcourse_id_foreign` (`subCourse_id`),
  ADD KEY `teacher_sub_course_teacher_id_foreign` (`teacher_id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `free_videos`
--
ALTER TABLE `free_videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `subcourses`
--
ALTER TABLE `subcourses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_chapter`
--
ALTER TABLE `sub_chapter`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `syllabus`
--
ALTER TABLE `syllabus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teacher_sub_course`
--
ALTER TABLE `teacher_sub_course`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `free_videos`
--
ALTER TABLE `free_videos`
  ADD CONSTRAINT `free_videos_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subcourses`
--
ALTER TABLE `subcourses`
  ADD CONSTRAINT `subcourses_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_chapter`
--
ALTER TABLE `sub_chapter`
  ADD CONSTRAINT `sub_chapter_syllabus_id_foreign` FOREIGN KEY (`syllabus_id`) REFERENCES `syllabus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `syllabus`
--
ALTER TABLE `syllabus`
  ADD CONSTRAINT `syllabus_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `syllabus_subcourse_id_foreign` FOREIGN KEY (`subCourse_id`) REFERENCES `subcourses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `teacher_sub_course`
--
ALTER TABLE `teacher_sub_course`
  ADD CONSTRAINT `teacher_sub_course_subcourse_id_foreign` FOREIGN KEY (`subCourse_id`) REFERENCES `subcourses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `teacher_sub_course_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
