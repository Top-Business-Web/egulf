-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 05, 2023 at 11:51 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `egulf`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint UNSIGNED NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `title_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_count` bigint NOT NULL,
  `hash_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hash_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_ar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_en` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `image`, `title_ar`, `title_en`, `sub_title_ar`, `sub_title_en`, `client_count`, `hash_ar`, `hash_en`, `desc_ar`, `desc_en`, `created_at`, `updated_at`) VALUES
(1, 'assets/uploads/about_us/95301678882738.jpg', 'اي جولف', 'Egulf', 'اي جولف', 'East Gulf Industry Co.', 800, 'اي جولف', 'Egulf', '<p>اي جولف</p>', '<p>East Gulf Company For Industry Is A Saudi Company Specialized In The Production Of Petroleum Products From Mechanical Oils And Hydraulic And Lubricants For All Types Of Engines, According To The Latest Packaging Technology And Test Methods Standard That Meets All Requirements And Standard Specifications For Tests To Meet All Requirements Our Clients Are Of High Performance Petroleum Derivatives Covering A Wide Range Of Supported Uses The Highest Levels Of Quality Control.</p>', NULL, '2023-03-15 12:43:49');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `image`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$NXinuUXyWKIIOvQ1AAr4fukN2DEvsqC.dHy7QqWEehVLn6oFi/7TG', NULL, '2022-12-11 10:28:06', '2022-12-11 10:28:06'),
(32, 'eldapour', 'eldapour@topbusiness.io', '$2y$10$DVjQCQRiWQbl4hGP/kR.r.pg06cY359hG4DOrFptFVXAwPQx4ERa6', NULL, '2023-01-13 13:01:03', '2023-01-13 13:01:03');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(3, 'Must', 'assets/uploads/brands/87071674644567.png', '2023-01-25 11:02:47', '2023-01-25 11:02:47'),
(5, 'usfull', 'assets/uploads/brands/40181674645037.png', '2023-01-25 11:10:37', '2023-01-25 11:10:37'),
(7, 'suntree', 'assets/uploads/brands/9561674647848.png', '2023-01-25 11:57:28', '2023-01-25 11:57:28'),
(8, 'huawei', 'assets/uploads/brands/32521674653699.jpg', '2023-01-25 12:51:06', '2023-01-25 13:34:59'),
(9, 'newmax', 'assets/uploads/brands/56051674653885.jpg', '2023-01-25 13:38:05', '2023-01-25 13:38:05'),
(10, 'Yaskawa', 'assets/uploads/brands/18131674654089.jpg', '2023-01-25 13:41:29', '2023-01-25 13:41:29'),
(11, 'His', 'assets/uploads/brands/63781674654102.jpg', '2023-01-25 13:41:42', '2023-01-25 13:41:42'),
(12, 'vansan', 'assets/uploads/brands/82591674654125.jpg', '2023-01-25 13:42:05', '2023-01-25 13:42:05'),
(13, 'invt', 'assets/uploads/brands/62671674654235.jpg', '2023-01-25 13:42:46', '2023-01-25 13:43:55');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `title_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title_ar`, `title_en`, `created_at`, `updated_at`) VALUES
(10, 'TexStar', 'TexStar', '2023-03-15 13:07:08', '2023-03-15 13:07:08'),
(11, 'Westar', 'Westar', '2023-03-15 13:07:46', '2023-03-15 13:07:46'),
(12, 'AcTexStar', 'AcTexStar', '2023-03-15 13:08:06', '2023-03-15 13:08:06'),
(13, 'Carstone', 'Carstone', '2023-03-15 13:08:27', '2023-03-15 13:08:27'),
(14, 'Petroline', 'Petroline', '2023-03-15 13:08:56', '2023-03-15 13:08:56'),
(15, 'Mobar', 'Mobar', '2023-03-15 13:09:17', '2023-03-15 13:09:17');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint NOT NULL,
  `services` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `services`, `message`, `created_at`, `updated_at`) VALUES
(19, 'fffff', 'admin@admin.com', 1020300050, 's1', 'fffff', '2023-01-25 06:16:28', '2023-01-25 06:16:28'),
(20, 'Reagan Maddox', 'fave@mailinator.com', 675432, 's1', 'Non non cum est hic', '2023-01-30 07:15:35', '2023-01-30 07:15:35'),
(21, 'Grant Webster', 'kehefi@mailinator.com', 5456456465, NULL, 'Minima dolor ea veni', '2023-03-15 13:01:44', '2023-03-15 13:01:44');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_03_20_123415_create_admins_table', 1),
(3, '2023_01_08_130957_create_settings_table', 1),
(4, '2023_01_08_133119_create_about_us_table', 1),
(5, '2023_01_08_133627_create_brands_table', 1),
(6, '2023_01_08_134015_create_services_table', 1),
(7, '2023_01_08_135121_create_categories_table', 1),
(8, '2023_01_08_135410_create_products_table', 1),
(9, '2023_01_08_141826_create_contacts_table', 1),
(10, '2023_01_08_142347_create_quotes_table', 1),
(11, '2023_01_30_085019_create_projects_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `images` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sku` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `tags` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `desc_ar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `desc_en` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pdf` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `part_number` bigint NOT NULL,
  `weight` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dimensions` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `images`, `title_ar`, `title_en`, `sub_title_ar`, `sub_title_en`, `sku`, `category_id`, `tags`, `desc_ar`, `desc_en`, `pdf`, `part_number`, `weight`, `dimensions`, `model_number`, `created_at`, `updated_at`) VALUES
(50, '[\"assets\\/uploads\\/products\\/12521680682810.jpg\"]', NULL, 'Hydraulic oil', NULL, 'petroline', '001', 10, '[\"SuperGt\",\",\",\"textstar\"]', NULL, 'oil', NULL, 50, '21215', '252*252', '25', '2023-04-05 08:20:10', '2023-04-05 08:20:10'),
(51, '[\"assets\\/uploads\\/products\\/88791680682914.jpg\"]', NULL, 'super', NULL, 'diesel plus', '0051', 12, '[\"Ex\",\"quidem\",\"vero\",\"volup\"]', NULL, 'oil', NULL, 172, '21215', '252*252', '47', '2023-04-05 08:21:54', '2023-04-05 08:21:54'),
(52, '[\"assets\\/uploads\\/products\\/77621680682972.jpg\"]', NULL, 'super1', NULL, 'diesel plus', '0052', 13, '[\"SuperGt\",\",\",\"textstar\"]', NULL, 'oil', NULL, 50, '21215', '252*252', '25', '2023-04-05 08:22:52', '2023-04-05 08:22:52'),
(53, '[\"assets\\/uploads\\/products\\/91691680683027.jpg\"]', NULL, 'Hydraulic Aw', NULL, 'diesel plus', '0053', 15, '[\"SuperGt\",\",\",\"textstar\"]', NULL, 'oil', NULL, 50, '21215', '252*252', '25', '2023-04-05 08:23:47', '2023-04-05 08:23:47'),
(54, '[\"assets\\/uploads\\/products\\/31781680683084.jpg\"]', NULL, 'super formula', NULL, 'SuperGt', '0054', 13, '[\"SuperGt\",\",\",\"textstar\"]', NULL, 'oil', NULL, 50, '21215', '252*252', '25', '2023-04-05 08:24:44', '2023-04-05 08:24:44'),
(55, '[\"assets\\/uploads\\/products\\/50591680683131.jpg\"]', NULL, 'super extra', NULL, 'Laboriosam ea numqu', '0055', 15, '[\"SuperGt\",\",\",\"textstar\"]', NULL, 'oil', NULL, 50, '21215', '252*252', '25', '2023-04-05 08:25:31', '2023-04-05 08:25:31'),
(56, '[\"assets\\/uploads\\/products\\/6531680683186.jpg\"]', NULL, 'super formula1', NULL, 'Aut consectetur quo', '0056', 12, '[\"SuperGt\",\",\",\"textstar\"]', NULL, 'oil', NULL, 50, '21215', '252*252', '25', '2023-04-05 08:26:26', '2023-04-05 08:26:26'),
(57, '[\"assets\\/uploads\\/products\\/71401680683242.jpg\"]', NULL, 'atf-6', NULL, 'dexron vi', '0057', 12, '[\"SuperGt\",\",\",\"textstar\"]', NULL, 'oil', NULL, 50, '21215', '252*252', '25', '2023-04-05 08:27:22', '2023-04-05 08:27:22'),
(58, '[\"assets\\/uploads\\/products\\/97511680683284.jpg\"]', NULL, 'super formula 10000', NULL, 'SuperGt', '0058', 13, '[\"SuperGt\",\",\",\"textstar\"]', NULL, 'oil', NULL, 172, '21215', '252*252', '25', '2023-04-05 08:28:04', '2023-04-05 08:28:04');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint UNSIGNED NOT NULL,
  `title_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `client` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint NOT NULL,
  `title_ar` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `title_en` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `desc_ar` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `desc_en` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `title_ar`, `title_en`, `desc_ar`, `desc_en`, `created_at`, `updated_at`) VALUES
(1, 'التكلفة / الجودة', 'Cost/Quality', '<p>تكلفة مُحسَّنة بأعلى جودة ، مما يضمن تجربة خدمة قوية للمستخدم النهائي.</p>', '<p>Optimized cost with highest quality, ensuring solid end-user service experience.</p>', '2023-01-31 09:30:34', '2023-02-05 09:54:35'),
(2, 'وقت التسليم الأمثل', 'Optimum Delivery Time', '<p>تعتمد الحياة بشكل أساسي على الطاقة ، لذلك من الجدير تسهيل جميع مرافقنا وإمكانياتنا لضمان أن يتم التسليم بالطريقة المثلى وأقصر وقت ممكن.</p>', '<p>Life is mainly based on energy, so it is worthy to facilitate all our facilities and capabilities to ensure that the delivery is done in the optimal way and the shortest possible time.</p>', '2023-01-31 09:30:34', '2023-02-05 09:54:29'),
(3, 'شريك طويل الأمد', 'Long Term Partner', '<p>مع شريك موثوق به وملتزم لتحقيق هدف طويل الأجل ، يسعدنا بناء علاقة موثوقة طويلة الأمد ومربحة للجانبين مع عملائنا.</p>', '<p>With a trusted and committed partner for long-term objective, we are pleased to build a win-win long term trusted relationship with our customers.</p>', '2023-01-31 09:30:34', '2023-02-05 09:54:24'),
(4, 'القطاعات المستهدفة', 'Target Sectors', '<p>&bull; أنظمة الطاقة الكهروضوئية المرتبطة بالشبكة (على الشبكة)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&bull; أنظمة ضخ المياه بالطاقة الشمسية</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&bull; قطاع النفط والغاز</p>', '<p>&bull; Grid tied PV systems (on-grid)</p>\r\n\r\n<p>&bull; Solar water-pumping systems</p>\r\n\r\n<p>&bull;&nbsp; Oil &amp; Gas Sector</p>\r\n\r\n<p>&nbsp;</p>', '2023-01-31 09:30:34', '2023-02-05 09:54:18');

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `system_complete` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usage` bigint DEFAULT NULL,
  `system_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `panels_place` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `your_roof` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `prefer_contact` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`id`, `product_id`, `system_complete`, `usage`, `system_type`, `panels_place`, `your_roof`, `message`, `first_name`, `last_name`, `phone`, `email`, `prefer_contact`, `address`, `city`, `zip`, `country`, `created_at`, `updated_at`) VALUES
(4, 54, NULL, NULL, NULL, NULL, NULL, NULL, 'Grady', 'Matthews', 1025270450, 'pehygytaki@mailinator.com', NULL, 'Ea id sunt dolore et', NULL, NULL, NULL, '2023-04-05 08:31:38', '2023-04-05 08:31:38');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint UNSIGNED NOT NULL,
  `title_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint UNSIGNED NOT NULL,
  `logo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `sliders` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `title_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_ar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `desc_en` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `year_of_experince` bigint DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `facebook` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `twitter` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `linked_in` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terms_conditions` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `shipping_policy` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `returns` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `work_date` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `sliders`, `title_ar`, `title_en`, `desc_ar`, `desc_en`, `year_of_experince`, `phone`, `email`, `address_ar`, `address_en`, `location`, `youtube`, `facebook`, `twitter`, `linked_in`, `terms_conditions`, `shipping_policy`, `returns`, `work_date`, `created_at`, `updated_at`) VALUES
(1, 'assets/uploads/admins/images/42131678881153.png', '[\"assets\\/uploads\\/admins\\/sliders\\/16291678881956.jpg\",\"assets\\/uploads\\/admins\\/sliders\\/39911678881956.jpg\",\"assets\\/uploads\\/admins\\/sliders\\/42181678881956.jpg\"]', 'اي جولف', 'Egulf', 'نتميز بالجودة العالية التي ترضي احتياجات العملاء', 'We are distinguished by the high quality that satisfies the needs of customers', 12, '+966114399994', 'Info@Egulf.Com.Sa', 'رياض, السعودية', 'Riyadh - Saudi Arabia', 'here', 'sa', 'sa', 'sa', 'https://www.linkedin.com/company/solarvalley/', 'Egulf', 'Egulf', 'Egulf', 'Hours: Mon-Fri: 8am – 7pm', NULL, '2023-04-04 09:10:18');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint NOT NULL,
  `image_about` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `image_services` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `image_project` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `image_product` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `image_faqs` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image_about`, `image_services`, `image_project`, `image_product`, `image_faqs`) VALUES
(1, 'assets/uploads/sliders/49961678885077.jpg', 'assets/uploads/sliders/70441678885077.jpg', 'assets/uploads/sliders/98061678885077.jpg', 'assets/uploads/sliders/92351678885077.jpg', 'assets/uploads/sliders/16401678885077.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_service_id_foreign` (`service_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `quotes`
--
ALTER TABLE `quotes`
  ADD CONSTRAINT `product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
