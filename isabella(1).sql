-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 05-08-2019 a las 01:53:59
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `isabella`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `allusers`
--

CREATE TABLE `allusers` (
  `id` int(10) UNSIGNED NOT NULL,
  `user` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `avatar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `allusers`
--

INSERT INTO `allusers` (`id`, `user`, `name`, `country`, `email`, `password`, `avatar`) VALUES
(12, 'mati', 'mati gonzalez', 'ur', 'mati@gmail.com', '$2y$10$s6fl7roicaD5dYWeb1Sx9.lNvw7vmzC.B8NdZW578CsflQy8gRCyO', 'img_5d196ca4d1357.JPG'),
(13, 'luci', 'lucia la bella', 'pr', 'lucia@gmail.com', '$2y$10$vs0JZRh60HiI/p1aZB0iMu3ZwgPBV2407QLdk9RtGxh77U7qy.NQW', 'img_5d1970c93a7f9.JPG'),
(14, 'berta', 'bertita', 'br', 'berta@gmail.com', '$2y$10$9bbf0peLYbgktPtgYXYz1eimwRC1.VlsAtf3tll3HVxuI3OUmTv4K', 'img_5d1977f8c357e.JPG'),
(15, 'Atilio', 'atilio bebe', 'ar', 'atilio@hotmail.com', '$2y$10$n2hCW8yBDn7srjmowWZ7Z.GHFYs6DnL3ClMmhlYJY7FnNsEaBd6Rq', 'img_5d197a5b0bf66.JPG'),
(16, 'ale', 'ale gonza', 'ar', 'ale@gmail.com', '$2y$10$YjTh19s2lLTJ40DgW.8SluxSJTFAqH1rVDreEmFvlWYf.horaTXmu', 'img_5d197ab1aaeab.JPG'),
(20, 'mia', 'mia la bella', 'br', 'mia@gmail.com', '$2y$10$yWksuvwRHa2rcqHWdW3f3en.Z2vWF53UM48eGQW6dcpcMSMYheh5G', 'img_5d19800dc90b2.JPG'),
(21, 'tito', 'tito', 'ar', 'tito@gmail.com', '$2y$10$.84BFjeBYm2T.GR9HFK2wu00C79P442DNh8HhzWcmzo5K9IsI7t7W', 'img_5d1981b4d1536.JPG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Remeras', NULL, NULL),
(2, 'Pantalones', NULL, NULL),
(3, 'Camperas', NULL, NULL),
(4, 'New arrivals', NULL, NULL),
(5, 'Buzos', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `colors`
--

INSERT INTO `colors` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'ROJO', NULL, NULL),
(2, 'AZUL', NULL, NULL),
(3, 'AMARILLO', NULL, NULL),
(4, 'VERDE', NULL, NULL),
(5, 'BLANCO', NULL, NULL),
(6, 'NEGRO', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `color_product`
--

CREATE TABLE `color_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `color_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `color_product`
--

INSERT INTO `color_product` (`id`, `color_id`, `product_id`, `created_at`, `updated_at`) VALUES
(8, 3, 4, '2019-07-28 22:08:29', '2019-07-28 22:08:29'),
(9, 5, 4, '2019-07-28 22:08:29', '2019-07-28 22:08:29'),
(10, 6, 4, '2019-07-28 22:08:29', '2019-07-28 22:08:29'),
(11, 3, 5, '2019-07-28 22:10:53', '2019-07-28 22:10:53'),
(12, 5, 5, '2019-07-28 22:10:53', '2019-07-28 22:10:53'),
(13, 5, 6, '2019-07-28 22:11:50', '2019-07-28 22:11:50'),
(14, 6, 6, '2019-07-28 22:11:50', '2019-07-28 22:11:50'),
(15, 2, 7, '2019-07-28 22:12:41', '2019-07-28 22:12:41'),
(19, 5, 9, '2019-07-28 22:40:09', '2019-07-28 22:40:09'),
(20, 1, 9, '2019-07-28 22:40:09', '2019-07-28 22:40:09'),
(21, 5, 10, '2019-07-28 22:49:47', '2019-07-28 22:49:47'),
(22, 2, 11, '2019-07-28 22:50:34', '2019-07-28 22:50:34'),
(23, 6, 11, '2019-07-28 22:50:34', '2019-07-28 22:50:34'),
(24, 2, 12, '2019-07-28 22:51:06', '2019-07-28 22:51:06'),
(25, 4, 12, '2019-07-28 22:51:06', '2019-07-28 22:51:06'),
(26, 3, 4, '2019-07-29 21:49:36', '2019-07-29 21:49:36'),
(27, 5, 4, '2019-07-29 21:49:36', '2019-07-29 21:49:36'),
(28, 6, 4, '2019-07-29 21:49:36', '2019-07-29 21:49:36'),
(29, 1, 13, '2019-07-30 00:34:26', '2019-07-30 00:34:26'),
(30, 5, 9, '2019-07-30 00:40:40', '2019-07-30 00:40:40'),
(31, 1, 9, '2019-07-30 00:40:40', '2019-07-30 00:40:40'),
(32, 3, 4, '2019-07-30 00:41:35', '2019-07-30 00:41:35'),
(33, 5, 4, '2019-07-30 00:41:35', '2019-07-30 00:41:35'),
(34, 6, 4, '2019-07-30 00:41:35', '2019-07-30 00:41:35'),
(35, 3, 4, '2019-07-30 00:42:08', '2019-07-30 00:42:08'),
(36, 5, 4, '2019-07-30 00:42:08', '2019-07-30 00:42:08'),
(37, 6, 4, '2019-07-30 00:42:08', '2019-07-30 00:42:08'),
(38, 3, 5, '2019-07-30 00:43:41', '2019-07-30 00:43:41'),
(39, 5, 5, '2019-07-30 00:43:41', '2019-07-30 00:43:41'),
(40, 5, 6, '2019-07-30 00:44:04', '2019-07-30 00:44:04'),
(41, 6, 6, '2019-07-30 00:44:04', '2019-07-30 00:44:04'),
(42, 2, 7, '2019-07-30 00:44:19', '2019-07-30 00:44:19'),
(46, NULL, 10, '2019-07-30 00:45:00', '2019-07-30 00:45:00'),
(47, 5, 10, '2019-07-30 00:45:00', '2019-07-30 00:45:00'),
(48, 2, 11, '2019-07-30 00:45:25', '2019-07-30 00:45:25'),
(49, 6, 11, '2019-07-30 00:45:25', '2019-07-30 00:45:25'),
(50, 2, 12, '2019-07-30 00:45:42', '2019-07-30 00:45:42'),
(51, 4, 12, '2019-07-30 00:45:42', '2019-07-30 00:45:42'),
(52, 4, 14, '2019-07-30 00:49:21', '2019-07-30 00:49:21'),
(53, 5, 15, '2019-07-30 02:00:19', '2019-07-30 02:00:19'),
(54, 6, 16, '2019-07-31 19:11:18', '2019-07-31 19:11:18'),
(55, 4, 17, '2019-08-01 00:17:39', '2019-08-01 00:17:39'),
(56, 5, 18, '2019-08-01 00:19:30', '2019-08-01 00:19:30'),
(57, 6, 18, '2019-08-01 00:19:30', '2019-08-01 00:19:30'),
(58, 4, 18, '2019-08-01 00:19:30', '2019-08-01 00:19:30'),
(59, 5, 18, '2019-08-01 00:19:56', '2019-08-01 00:19:56'),
(60, 6, 18, '2019-08-01 00:19:56', '2019-08-01 00:19:56'),
(61, 4, 18, '2019-08-01 00:19:56', '2019-08-01 00:19:56'),
(62, 2, 19, '2019-08-01 00:23:47', '2019-08-01 00:23:47'),
(63, 5, 20, '2019-08-01 00:54:22', '2019-08-01 00:54:22'),
(65, NULL, 6, '2019-08-01 02:33:47', '2019-08-01 02:33:47'),
(66, 5, 6, '2019-08-01 02:33:47', '2019-08-01 02:33:47'),
(67, 6, 6, '2019-08-01 02:33:47', '2019-08-01 02:33:47'),
(68, NULL, 6, '2019-08-01 02:33:47', '2019-08-01 02:33:47'),
(69, 6, 22, '2019-08-01 02:34:50', '2019-08-01 02:34:50'),
(70, 3, 23, '2019-08-01 02:35:16', '2019-08-01 02:35:16'),
(71, 2, 23, '2019-08-01 02:35:16', '2019-08-01 02:35:16'),
(72, 6, 24, '2019-08-01 02:36:49', '2019-08-01 02:36:49'),
(73, 5, 6, '2019-08-04 19:13:37', '2019-08-04 19:13:37'),
(74, 6, 6, '2019-08-04 19:13:37', '2019-08-04 19:13:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_07_17_040916_create_products_table', 1),
(4, '2019_07_17_041827_create_colors_table', 1),
(5, '2019_07_17_214147_create_sizes_table', 1),
(6, '2019_07_17_214514_create_categories_table', 1),
(7, '2019_07_17_231941_create_color_product_table', 1),
(8, '2019_07_17_232107_create_product_size_table', 1),
(9, '2019_07_17_232240_add_category_id_in_products_table', 1),
(10, '2019_07_23_001428_add_column_admin_to_users_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `description` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poster` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `poster`, `created_at`, `updated_at`, `category_id`) VALUES
(4, 'Animago', '100.00', 'Remeras de algodón', 'img_5d3f6830a4505.jpeg', '2019-07-28 22:08:29', '2019-07-30 00:42:08', 1),
(5, 'Cara', '250.00', 'Buzo de algodón', 'img_5d3f688d4f1cc.jpeg', '2019-07-28 22:10:53', '2019-07-30 00:43:41', 1),
(6, 'Molusco', '300.00', 'New arrival', 'img_5d42255b4f2fc.jpeg', '2019-07-28 22:11:50', '2019-08-04 19:13:37', 5),
(7, 'Corderito', '400.00', 'Campera de Jean con corderito', 'img_5d3f68b32b4d2.jpeg', '2019-07-28 22:12:41', '2019-07-30 00:44:19', 3),
(9, 'Florida', '178.00', 'Pantalon de Fibra', 'img_5d3f67d89b4ca.jpeg', '2019-07-28 22:40:09', '2019-07-30 00:40:40', 5),
(10, 'Jackson', '300.00', 'Jean', 'img_5d3f68dc3f814.jpeg', '2019-07-28 22:49:47', '2019-07-30 00:45:00', 2),
(11, 'Kansas', '310.00', 'Gabardina', 'img_5d3f68f53af70.jpeg', '2019-07-28 22:50:34', '2019-07-30 00:45:25', 2),
(12, 'Laguna', '450.00', 'Gabardina', 'img_5d3f6906e5bc9.jpeg', '2019-07-28 22:51:06', '2019-07-30 00:45:42', 3),
(13, 'Lipa', '200.00', 'Campera de algodon', 'img_5d3f6662860d6.jpeg', '2019-07-30 00:34:26', '2019-07-30 00:34:26', 3),
(14, 'Baner', '190.00', 'Buzo de algodón', 'img_5d3f69e15ce5b.jpeg', '2019-07-30 00:49:21', '2019-07-30 00:49:21', 5),
(15, 'Malina', '340.00', 'Rompeviento', 'img_5d3f7a8300b27.jpeg', '2019-07-30 02:00:19', '2019-07-30 02:00:19', 3),
(16, 'Ginete', '250.00', 'Pantalon de jean', 'img_5d41bda6da6b2.jpeg', '2019-07-31 19:11:18', '2019-07-31 19:11:18', 2),
(17, 'Animal', '400.00', 'Jean', 'img_5d420573d52aa.jpeg', '2019-08-01 00:17:39', '2019-08-01 00:17:39', 2),
(18, 'Basica', '200.00', 'Remera de algodon', 'img_5d4205e2376e6.jpeg', '2019-08-01 00:19:30', '2019-08-01 00:19:56', 1),
(19, 'Tucson', '379.00', 'Campera de algodon', 'img_5d4206e3bb5b5.jpeg', '2019-08-01 00:23:47', '2019-08-01 00:23:47', 5),
(20, 'York', '200.00', 'Buzo de algodón', 'img_5d420e0e65eb9.jpeg', '2019-08-01 00:54:22', '2019-08-01 00:54:22', 4),
(22, 'Michigan', '200.00', 'Pantalon de jean', 'img_5d42259a2745e.jpeg', '2019-08-01 02:34:50', '2019-08-01 02:34:50', 4),
(23, 'Leona', '250.00', 'Pollera cuerina', 'img_5d4225b4c4346.jpeg', '2019-08-01 02:35:16', '2019-08-01 02:35:16', 4),
(24, 'Buzito lindo', '300.00', 'Buzo de algodón', 'img_5d4226119c5bd.jpeg', '2019-08-01 02:36:49', '2019-08-01 02:36:49', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_size`
--

CREATE TABLE `product_size` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `size_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `product_size`
--

INSERT INTO `product_size` (`id`, `product_id`, `size_id`, `created_at`, `updated_at`) VALUES
(10, 4, 4, '2019-07-28 22:08:29', '2019-07-28 22:08:29'),
(11, 4, 3, '2019-07-28 22:08:29', '2019-07-28 22:08:29'),
(12, 4, 2, '2019-07-28 22:08:29', '2019-07-28 22:08:29'),
(13, 4, 5, '2019-07-28 22:08:29', '2019-07-28 22:08:29'),
(14, 4, 1, '2019-07-28 22:08:29', '2019-07-28 22:08:29'),
(15, 5, 4, '2019-07-28 22:10:53', '2019-07-28 22:10:53'),
(16, 5, 3, '2019-07-28 22:10:53', '2019-07-28 22:10:53'),
(17, 5, 2, '2019-07-28 22:10:53', '2019-07-28 22:10:53'),
(18, 5, 5, '2019-07-28 22:10:53', '2019-07-28 22:10:53'),
(19, 5, 1, '2019-07-28 22:10:53', '2019-07-28 22:10:53'),
(20, 6, 2, '2019-07-28 22:11:50', '2019-07-28 22:11:50'),
(21, 6, 5, '2019-07-28 22:11:50', '2019-07-28 22:11:50'),
(22, 6, 1, '2019-07-28 22:11:50', '2019-07-28 22:11:50'),
(23, 7, 4, '2019-07-28 22:12:41', '2019-07-28 22:12:41'),
(24, 7, 3, '2019-07-28 22:12:41', '2019-07-28 22:12:41'),
(25, 7, 2, '2019-07-28 22:12:41', '2019-07-28 22:12:41'),
(29, 9, 4, '2019-07-28 22:40:09', '2019-07-28 22:40:09'),
(30, 9, 3, '2019-07-28 22:40:09', '2019-07-28 22:40:09'),
(31, 9, 2, '2019-07-28 22:40:09', '2019-07-28 22:40:09'),
(32, 10, 4, '2019-07-28 22:49:47', '2019-07-28 22:49:47'),
(33, 10, 3, '2019-07-28 22:49:47', '2019-07-28 22:49:47'),
(34, 10, 2, '2019-07-28 22:49:47', '2019-07-28 22:49:47'),
(35, 10, 5, '2019-07-28 22:49:47', '2019-07-28 22:49:47'),
(36, 10, 1, '2019-07-28 22:49:47', '2019-07-28 22:49:47'),
(37, 11, 4, '2019-07-28 22:50:34', '2019-07-28 22:50:34'),
(38, 11, 3, '2019-07-28 22:50:34', '2019-07-28 22:50:34'),
(39, 11, 2, '2019-07-28 22:50:34', '2019-07-28 22:50:34'),
(40, 11, 5, '2019-07-28 22:50:34', '2019-07-28 22:50:34'),
(41, 11, 1, '2019-07-28 22:50:34', '2019-07-28 22:50:34'),
(42, 12, 4, '2019-07-28 22:51:06', '2019-07-28 22:51:06'),
(43, 12, 3, '2019-07-28 22:51:06', '2019-07-28 22:51:06'),
(44, 12, 2, '2019-07-28 22:51:06', '2019-07-28 22:51:06'),
(45, 12, 5, '2019-07-28 22:51:06', '2019-07-28 22:51:06'),
(46, 12, 1, '2019-07-28 22:51:06', '2019-07-28 22:51:06'),
(47, 4, 4, '2019-07-29 21:49:36', '2019-07-29 21:49:36'),
(48, 4, 3, '2019-07-29 21:49:36', '2019-07-29 21:49:36'),
(49, 4, 2, '2019-07-29 21:49:36', '2019-07-29 21:49:36'),
(50, 4, 5, '2019-07-29 21:49:36', '2019-07-29 21:49:36'),
(51, 4, 1, '2019-07-29 21:49:36', '2019-07-29 21:49:36'),
(52, 13, 4, '2019-07-30 00:34:26', '2019-07-30 00:34:26'),
(53, 13, 3, '2019-07-30 00:34:26', '2019-07-30 00:34:26'),
(54, 13, 2, '2019-07-30 00:34:26', '2019-07-30 00:34:26'),
(55, 13, 5, '2019-07-30 00:34:26', '2019-07-30 00:34:26'),
(56, 13, 1, '2019-07-30 00:34:26', '2019-07-30 00:34:26'),
(57, 9, 4, '2019-07-30 00:40:40', '2019-07-30 00:40:40'),
(58, 9, 3, '2019-07-30 00:40:40', '2019-07-30 00:40:40'),
(59, 9, 2, '2019-07-30 00:40:40', '2019-07-30 00:40:40'),
(60, 4, 4, '2019-07-30 00:41:35', '2019-07-30 00:41:35'),
(61, 4, 3, '2019-07-30 00:41:35', '2019-07-30 00:41:35'),
(62, 4, 2, '2019-07-30 00:41:35', '2019-07-30 00:41:35'),
(63, 4, 5, '2019-07-30 00:41:35', '2019-07-30 00:41:35'),
(64, 4, 1, '2019-07-30 00:41:35', '2019-07-30 00:41:35'),
(65, 4, 4, '2019-07-30 00:42:08', '2019-07-30 00:42:08'),
(66, 4, 3, '2019-07-30 00:42:08', '2019-07-30 00:42:08'),
(67, 4, 2, '2019-07-30 00:42:08', '2019-07-30 00:42:08'),
(68, 4, 5, '2019-07-30 00:42:08', '2019-07-30 00:42:08'),
(69, 4, 1, '2019-07-30 00:42:08', '2019-07-30 00:42:08'),
(70, 5, 4, '2019-07-30 00:43:41', '2019-07-30 00:43:41'),
(71, 5, 3, '2019-07-30 00:43:41', '2019-07-30 00:43:41'),
(72, 5, 2, '2019-07-30 00:43:41', '2019-07-30 00:43:41'),
(73, 5, 5, '2019-07-30 00:43:41', '2019-07-30 00:43:41'),
(74, 5, 1, '2019-07-30 00:43:41', '2019-07-30 00:43:41'),
(75, 6, 2, '2019-07-30 00:44:04', '2019-07-30 00:44:04'),
(76, 6, 5, '2019-07-30 00:44:04', '2019-07-30 00:44:04'),
(77, 6, 1, '2019-07-30 00:44:04', '2019-07-30 00:44:04'),
(78, 7, 4, '2019-07-30 00:44:19', '2019-07-30 00:44:19'),
(79, 7, 3, '2019-07-30 00:44:19', '2019-07-30 00:44:19'),
(80, 7, 2, '2019-07-30 00:44:19', '2019-07-30 00:44:19'),
(84, 10, 4, '2019-07-30 00:45:00', '2019-07-30 00:45:00'),
(85, 10, 3, '2019-07-30 00:45:00', '2019-07-30 00:45:00'),
(86, 10, 2, '2019-07-30 00:45:00', '2019-07-30 00:45:00'),
(87, 10, 5, '2019-07-30 00:45:00', '2019-07-30 00:45:00'),
(88, 10, 1, '2019-07-30 00:45:00', '2019-07-30 00:45:00'),
(89, 11, 4, '2019-07-30 00:45:25', '2019-07-30 00:45:25'),
(90, 11, 3, '2019-07-30 00:45:25', '2019-07-30 00:45:25'),
(91, 11, 2, '2019-07-30 00:45:25', '2019-07-30 00:45:25'),
(92, 11, 5, '2019-07-30 00:45:25', '2019-07-30 00:45:25'),
(93, 11, 1, '2019-07-30 00:45:25', '2019-07-30 00:45:25'),
(94, 12, 4, '2019-07-30 00:45:42', '2019-07-30 00:45:42'),
(95, 12, 3, '2019-07-30 00:45:42', '2019-07-30 00:45:42'),
(96, 12, 2, '2019-07-30 00:45:42', '2019-07-30 00:45:42'),
(97, 12, 5, '2019-07-30 00:45:42', '2019-07-30 00:45:42'),
(98, 12, 1, '2019-07-30 00:45:42', '2019-07-30 00:45:42'),
(99, 14, 3, '2019-07-30 00:49:21', '2019-07-30 00:49:21'),
(100, 14, 2, '2019-07-30 00:49:21', '2019-07-30 00:49:21'),
(101, 15, 4, '2019-07-30 02:00:19', '2019-07-30 02:00:19'),
(102, 15, 3, '2019-07-30 02:00:19', '2019-07-30 02:00:19'),
(103, 15, 2, '2019-07-30 02:00:19', '2019-07-30 02:00:19'),
(104, 16, 2, '2019-07-31 19:11:18', '2019-07-31 19:11:18'),
(105, 16, 5, '2019-07-31 19:11:18', '2019-07-31 19:11:18'),
(106, 16, 1, '2019-07-31 19:11:18', '2019-07-31 19:11:18'),
(107, 17, 4, '2019-08-01 00:17:39', '2019-08-01 00:17:39'),
(108, 17, 3, '2019-08-01 00:17:39', '2019-08-01 00:17:39'),
(109, 17, 2, '2019-08-01 00:17:39', '2019-08-01 00:17:39'),
(110, 17, 5, '2019-08-01 00:17:39', '2019-08-01 00:17:39'),
(111, 17, 1, '2019-08-01 00:17:39', '2019-08-01 00:17:39'),
(112, 18, 4, '2019-08-01 00:19:30', '2019-08-01 00:19:30'),
(113, 18, 3, '2019-08-01 00:19:30', '2019-08-01 00:19:30'),
(114, 18, 2, '2019-08-01 00:19:30', '2019-08-01 00:19:30'),
(115, 18, 5, '2019-08-01 00:19:30', '2019-08-01 00:19:30'),
(116, 18, 1, '2019-08-01 00:19:30', '2019-08-01 00:19:30'),
(117, 18, 4, '2019-08-01 00:19:56', '2019-08-01 00:19:56'),
(118, 18, 3, '2019-08-01 00:19:56', '2019-08-01 00:19:56'),
(119, 18, 2, '2019-08-01 00:19:56', '2019-08-01 00:19:56'),
(120, 18, 5, '2019-08-01 00:19:56', '2019-08-01 00:19:56'),
(121, 18, 1, '2019-08-01 00:19:56', '2019-08-01 00:19:56'),
(122, 19, 4, '2019-08-01 00:23:47', '2019-08-01 00:23:47'),
(123, 19, 3, '2019-08-01 00:23:47', '2019-08-01 00:23:47'),
(124, 19, 2, '2019-08-01 00:23:47', '2019-08-01 00:23:47'),
(125, 20, 4, '2019-08-01 00:54:22', '2019-08-01 00:54:22'),
(126, 20, 3, '2019-08-01 00:54:22', '2019-08-01 00:54:22'),
(127, 20, 2, '2019-08-01 00:54:22', '2019-08-01 00:54:22'),
(131, 6, 2, '2019-08-01 02:33:47', '2019-08-01 02:33:47'),
(132, 6, 5, '2019-08-01 02:33:47', '2019-08-01 02:33:47'),
(133, 6, 1, '2019-08-01 02:33:47', '2019-08-01 02:33:47'),
(134, 22, 4, '2019-08-01 02:34:50', '2019-08-01 02:34:50'),
(135, 22, 3, '2019-08-01 02:34:50', '2019-08-01 02:34:50'),
(136, 22, 2, '2019-08-01 02:34:50', '2019-08-01 02:34:50'),
(137, 23, 4, '2019-08-01 02:35:16', '2019-08-01 02:35:16'),
(138, 23, 3, '2019-08-01 02:35:16', '2019-08-01 02:35:16'),
(139, 23, 2, '2019-08-01 02:35:16', '2019-08-01 02:35:16'),
(140, 24, 4, '2019-08-01 02:36:49', '2019-08-01 02:36:49'),
(141, 24, 3, '2019-08-01 02:36:49', '2019-08-01 02:36:49'),
(142, 24, 2, '2019-08-01 02:36:49', '2019-08-01 02:36:49'),
(143, 6, 2, '2019-08-04 19:13:37', '2019-08-04 19:13:37'),
(144, 6, 5, '2019-08-04 19:13:37', '2019-08-04 19:13:37'),
(145, 6, 1, '2019-08-04 19:13:37', '2019-08-04 19:13:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sizes`
--

INSERT INTO `sizes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'XS', NULL, NULL),
(2, 'S', NULL, NULL),
(3, 'M', NULL, NULL),
(4, 'L', NULL, NULL),
(5, 'XL', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `avatar`, `country`, `city`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `admin`) VALUES
(5, 'Gabi', 'img-5d3e178523a0a.jpeg', NULL, NULL, 'gabi@gmail.com', NULL, '$2y$10$cGbI.TGkJO56SrMZTqYv3OiQS06dWx1rih4fAJ6Ox4yYlHOAOv.OW', NULL, '2019-07-29 00:45:41', '2019-07-29 00:45:41', 0),
(11, 'matias', 'img-5d3fb24fee23f.jpeg', NULL, NULL, 'mati@gmail.com', NULL, '$2y$10$vOF88WlBwe7hGmUYiygF8eR.1NaltvRDqtygRqPDTOA8Wnj.XRGAK', NULL, '2019-07-30 05:58:24', '2019-07-30 05:58:24', 0),
(12, 'hola', 'img-5d406551df468.jpeg', NULL, NULL, 'hola@email.com', NULL, '$2y$10$eV/j.cHPhYzqSfo8Y63Shu2D6NuJBREoDxRRkAC7yP/cLd4q0feBu', NULL, '2019-07-30 18:42:10', '2019-07-30 18:42:10', 0),
(13, 'berta linda', 'img_5d47026db37fe.jpeg', NULL, NULL, 'berta@email.com', NULL, '$2y$10$J3bpERkYzAX4yReUMIfuOebuOYpXDFNvAxcAQGuWEQHnwsW.zSSWG', NULL, '2019-07-31 18:56:46', '2019-08-04 19:06:05', 0),
(14, 'Mati Gonzalez', 'img_5d45c8e11dda7.jpeg', NULL, NULL, 'mati@email.com', NULL, '$2y$10$16nw5nSNZ1lSSVStnnS2jeJPmTWTPPyKP39Z5VwztZ/ARtQeKNnHa', NULL, '2019-08-03 20:29:47', '2019-08-03 20:48:17', 1),
(15, 'mara', 'img_5d474a82b254b.jpeg', 'Argentina', 'Santiago del Estero', 'mara@gmail.com', NULL, '$2y$10$u.x9.lp.2ZEKIRSoWuNvu.ris6u//GUwmK/w6aQ5ZDNUOX53mQgC6', NULL, '2019-08-04 23:43:41', '2019-08-05 00:13:38', 0),
(16, '', NULL, NULL, NULL, '', NULL, '', NULL, NULL, NULL, 1),
(17, 'agus', 'img-5d474abf3385e.jpeg', 'Argentina', 'Santa Fe', 'agus@gmail.com', NULL, '$2y$10$obF2erqRJkxIgo9YsqFDc.um8Tzv9kKdxamHg/9ONCazbziDGR/AS', NULL, '2019-08-05 00:14:39', '2019-08-05 00:16:35', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `color_product`
--
ALTER TABLE `color_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `color_product_color_id_foreign` (`color_id`),
  ADD KEY `color_product_product_id_foreign` (`product_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indices de la tabla `product_size`
--
ALTER TABLE `product_size`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_size_product_id_foreign` (`product_id`),
  ADD KEY `product_size_size_id_foreign` (`size_id`);

--
-- Indices de la tabla `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `color_product`
--
ALTER TABLE `color_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `product_size`
--
ALTER TABLE `product_size`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT de la tabla `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `color_product`
--
ALTER TABLE `color_product`
  ADD CONSTRAINT `color_product_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `color_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Filtros para la tabla `product_size`
--
ALTER TABLE `product_size`
  ADD CONSTRAINT `product_size_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_size_size_id_foreign` FOREIGN KEY (`size_id`) REFERENCES `sizes` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
