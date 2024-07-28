-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 28, 2024 at 02:47 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz-app`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Ilmu Pengetahuan Alam', NULL, NULL),
(3, 'Matematika', NULL, NULL),
(4, 'Ilmu Pengetahuan Sosial', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2024_07_25_112103_create_categories_table', 2),
(8, '2024_07_26_014736_create_questions_table', 2),
(9, '2024_07_26_070403_create_options_table', 2),
(10, '2024_07_26_082624_create_results_table', 3),
(12, '2024_07_26_082624_create_result_table', 4),
(13, '2024_07_26_091541_create_question_results_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` bigint UNSIGNED NOT NULL,
  `question_id` bigint UNSIGNED NOT NULL,
  `option_text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `points` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `question_id`, `option_text`, `points`, `created_at`, `updated_at`) VALUES
(1, 5, 'Mengembun', 20, '2024-07-26 00:38:30', '2024-07-26 00:51:29'),
(2, 5, 'Menguap', NULL, '2024-07-26 00:39:56', '2024-07-26 00:51:44'),
(3, 4, 'Kloroplas', 20, '2024-07-26 00:41:20', NULL),
(4, 4, 'Mitokondria', NULL, '2024-07-26 00:41:39', NULL),
(5, 3, 'Kupu-kupu', 20, '2024-07-26 00:42:05', NULL),
(6, 3, 'Kucing', NULL, '2024-07-26 00:42:23', NULL),
(7, 2, 'Mengembang', 20, '2024-07-26 00:42:47', NULL),
(8, 2, 'Menyusut', NULL, '2024-07-26 00:43:06', NULL),
(9, 1, 'Karbon dioksida dan air', 20, '2024-07-26 00:43:42', NULL),
(10, 1, 'Oksigen dan air', NULL, '2024-07-26 00:44:13', NULL),
(12, 6, '29', 20, '2024-07-28 07:05:38', '2024-07-28 07:06:28'),
(13, 6, '25', 0, '2024-07-28 07:06:53', NULL),
(14, 7, '3', 20, '2024-07-28 07:07:34', NULL),
(15, 7, '4', 0, '2024-07-28 07:07:53', NULL),
(16, 8, '15', 0, '2024-07-28 07:08:18', NULL),
(17, 8, '14', 20, '2024-07-28 07:08:32', NULL),
(18, 9, '12 cm', 20, '2024-07-28 07:08:57', NULL),
(19, 9, '10 cm', NULL, '2024-07-28 07:09:19', NULL),
(20, 10, '60 cm³', 20, '2024-07-28 07:09:41', NULL),
(21, 10, '50 cm³', NULL, '2024-07-28 07:09:59', NULL),
(22, 11, 'Perpindahan penduduk dari desa ke kota', 20, '2024-07-28 07:37:21', NULL),
(23, 11, 'Peningkatan angka kelahiran di kota', NULL, '2024-07-28 07:37:38', NULL),
(24, 12, 'Soeharto', NULL, '2024-07-28 07:37:57', NULL),
(25, 12, 'Sukarno dan Mohammad Hatta', 20, '2024-07-28 07:38:14', NULL),
(26, 13, 'Menyusun undang-undang', 20, '2024-07-28 07:38:33', NULL),
(27, 13, 'Mengawasi jalannya pemerintahan', NULL, '2024-07-28 07:38:57', NULL),
(28, 14, 'Peningkatan harga barang dan jasa secara umum', 20, '2024-07-28 07:39:12', NULL),
(29, 14, 'Penurunan harga barang dan jasa secara umum', NULL, '2024-07-28 07:39:28', NULL),
(30, 15, 'ASEAN', 20, '2024-07-28 07:39:45', NULL),
(31, 15, 'NATO', NULL, '2024-07-28 07:39:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `category_id`, `question`, `created_at`, `updated_at`) VALUES
(1, 2, 'Proses fotosintesis pada tumbuhan memerlukan...', '2024-07-26 00:11:57', NULL),
(2, 2, 'Benda padat yang mengalami pemanasan akan.....', '2024-07-26 00:12:16', '2024-07-26 00:20:14'),
(3, 2, 'Hewan yang mengalami metamorfosis sempurna adalah...', '2024-07-26 00:17:07', NULL),
(4, 2, 'Bagian dari sel tumbuhan yang tidak dimiliki oleh sel hewan adalah...', '2024-07-26 00:20:54', NULL),
(5, 2, 'Perubahan wujud benda dari gas menjadi cair disebut...', '2024-07-26 00:21:12', NULL),
(6, 3, 'Diketahui x=3x=3 dan y=4y=4. Berapakah nilai x2+y2x2+y2?', '2024-07-28 07:03:21', NULL),
(7, 3, 'Jika 3a+2=113a+2=11, berapakah nilai a?', '2024-07-28 07:03:40', '2024-07-28 07:04:04'),
(8, 3, 'Hasil dari 153+2×4315​+2×4 adalah:', '2024-07-28 07:04:15', NULL),
(9, 3, 'Sebuah segitiga memiliki panjang sisi 3 cm, 4 cm, dan 5 cm. Berapakah keliling segitiga tersebut?', '2024-07-28 07:04:31', NULL),
(10, 3, 'Sebuah kotak memiliki panjang 5 cm, lebar 3 cm, dan tinggi 4 cm. Berapakah volume kotak tersebut?', '2024-07-28 07:04:48', NULL),
(11, 4, 'Apa yang dimaksud dengan urbanisasi?', '2024-07-28 07:36:07', NULL),
(12, 4, 'Siapa yang dikenal sebagai proklamator kemerdekaan Indonesia?', '2024-07-28 07:36:22', NULL),
(13, 4, 'Apa fungsi utama dari lembaga legislatif?', '2024-07-28 07:36:34', NULL),
(14, 4, 'Apa yang dimaksud dengan inflasi?', '2024-07-28 07:36:45', NULL),
(15, 4, 'Apa nama organisasi regional yang terdiri dari negara-negara di Asia Tenggara?', '2024-07-28 07:36:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `question_result`
--

CREATE TABLE `question_result` (
  `id` bigint UNSIGNED NOT NULL,
  `result_id` bigint UNSIGNED NOT NULL,
  `question_id` bigint UNSIGNED NOT NULL,
  `option_id` bigint UNSIGNED DEFAULT NULL,
  `points` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `question_result`
--

INSERT INTO `question_result` (`id`, `result_id`, `question_id`, `option_id`, `points`, `created_at`, `updated_at`) VALUES
(13, 15, 5, 1, 20, NULL, NULL),
(14, 15, 4, 3, 20, NULL, NULL),
(15, 15, 3, 5, 20, NULL, NULL),
(16, 15, 2, 7, 20, NULL, NULL),
(17, 15, 1, 10, 0, NULL, NULL),
(18, 16, 6, 12, 20, NULL, NULL),
(19, 16, 7, 14, 20, NULL, NULL),
(20, 16, 8, 17, 20, NULL, NULL),
(21, 16, 9, 18, 20, NULL, NULL),
(22, 16, 10, 21, 0, NULL, NULL),
(23, 17, 11, 22, 20, NULL, NULL),
(24, 17, 12, 25, 20, NULL, NULL),
(25, 17, 13, 26, 20, NULL, NULL),
(26, 17, 14, 29, 0, NULL, NULL),
(27, 17, 15, 30, 20, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `total_points` int DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `user_id`, `total_points`, `created_at`, `updated_at`) VALUES
(13, 1, 60, '2024-07-27 08:37:31', '2024-07-27 08:37:31'),
(14, 1, 80, '2024-07-27 09:21:05', '2024-07-27 09:21:05'),
(15, 1, 80, '2024-07-27 09:21:27', '2024-07-27 09:21:27'),
(16, 1, 80, '2024-07-28 07:26:36', '2024-07-28 07:26:36'),
(17, 1, 80, '2024-07-28 07:40:41', '2024-07-28 07:40:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$VrevdurG.oMPFkTMLD1kOezA8/5TJrf0YLHTLIE1551yYJpmWNy.2', NULL, '2024-07-03 10:00:46', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `options_question_id_foreign` (`question_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_category_id_foreign` (`category_id`);

--
-- Indexes for table `question_result`
--
ALTER TABLE `question_result`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_result_result_id_foreign` (`result_id`),
  ADD KEY `question_result_question_id_foreign` (`question_id`),
  ADD KEY `question_result_option_id_foreign` (`option_id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `results_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `question_result`
--
ALTER TABLE `question_result`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `options`
--
ALTER TABLE `options`
  ADD CONSTRAINT `options_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `question_result`
--
ALTER TABLE `question_result`
  ADD CONSTRAINT `question_result_option_id_foreign` FOREIGN KEY (`option_id`) REFERENCES `options` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `question_result_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `question_result_result_id_foreign` FOREIGN KEY (`result_id`) REFERENCES `results` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
