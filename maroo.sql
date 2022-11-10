-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 10 nov. 2022 à 13:34
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `maroo`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
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
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'brahim', 'ibrahimstihi2015@gmail.com', '2022-11-08 11:36:20', '$2y$10$vA/3zcZkQk5O4L4bugzWjOt5URNUJI/SvAR42S1HaJehtbMYKxF72', 'vR8vyPBgu9ozjyVQbH249nf2PTGwvcVD2XRZdRGRbJNf3bWVzpMzqevZhIK8', '2022-11-08 11:36:20', '2022-11-08 11:36:20');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `icon`, `created_at`, `updated_at`) VALUES
(2, 'Laptopes', 'laptopes', 'images/categories/1668079458_laptope.jpg', '2022-11-10 10:24:18', '2022-11-10 10:24:18'),
(3, 'Phones', 'phones', 'images/categories/1668079471_phone.png', '2022-11-10 10:24:31', '2022-11-10 10:24:31'),
(4, 'Smart Watch', 'smart-watch', 'images/categories/1668079483_smart watch.png', '2022-11-10 10:24:43', '2022-11-10 10:24:43'),
(5, 'Accessoires', 'accessoires', 'images/categories/1668079514_accessoir.png', '2022-11-10 10:25:14', '2022-11-10 10:25:14'),
(6, 'headphone', 'headphone', 'images/categories/1668079529_headphone.png', '2022-11-10 10:25:29', '2022-11-10 10:25:29'),
(7, 'Camera', 'camera', 'images/categories/1668080378_camera.jpg', '2022-11-10 10:39:38', '2022-11-10 10:39:38');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_13_113609_create_categories_table', 1),
(6, '2022_10_13_114637_create_products_table', 1),
(7, '2022_10_13_164053_create_orders_table', 1),
(8, '2022_10_14_142018_create__admin_table', 1),
(9, '2022_10_29_112029_create_product_images_table', 1),
(10, '2022_11_03_163607_create_slides_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `delivered` tinyint(1) NOT NULL DEFAULT 0,
  `paid` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL DEFAULT 0.00,
  `old_price` decimal(8,2) NOT NULL DEFAULT 0.00,
  `inStock` int(11) NOT NULL DEFAULT 0,
  `qty` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `title`, `slug`, `description`, `price`, `old_price`, `inStock`, `qty`, `created_at`, `updated_at`, `category_id`) VALUES
(2, 'Airpuds apple', 'airpuds-apple', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', '199.00', '0.00', 200, 0, '2022-11-10 10:27:16', '2022-11-10 10:27:16', 6),
(3, 'headphone hieght quality', 'headphone-hieght-quality', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', '299.00', '0.00', 100, 0, '2022-11-10 10:28:49', '2022-11-10 10:28:49', 6),
(4, 'gaming mouse', 'gaming-mouse', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', '199.00', '0.00', 300, 0, '2022-11-10 10:30:50', '2022-11-10 10:30:50', 5),
(5, 'sumsung S21', 'sumsung-s21', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', '4999.00', '0.00', 20, 0, '2022-11-10 10:31:23', '2022-11-10 10:31:23', 3),
(6, 'huawei p50 pro', 'huawei-p50-pro', 'display: flex;\r\njustify-content: center;\r\nalign-items: center;', '3000.00', '0.00', 20, 0, '2022-11-10 10:35:14', '2022-11-10 10:35:14', 3),
(7, 'Msi 2022', 'msi-2022', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', '7999.00', '0.00', 10, 0, '2022-11-10 10:36:30', '2022-11-10 10:36:30', 2),
(8, 'Macbook pro 2022', 'macbook-pro-2022', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', '15000.00', '0.00', 5, 0, '2022-11-10 10:37:06', '2022-11-10 10:37:06', 2),
(9, 'gaming Keyboard', 'gaming-keyboard', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', '399.00', '0.00', 20, 0, '2022-11-10 10:38:43', '2022-11-10 10:38:43', 5),
(10, 'Lenovo Thinkpad', 'lenovo-thinkpad', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', '5099.00', '0.00', 20, 0, '2022-11-10 10:39:16', '2022-11-10 10:39:16', 2),
(11, 'Canone 2022', 'canone-2022', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', '6999.00', '0.00', 20, 0, '2022-11-10 10:40:03', '2022-11-10 10:40:03', 7);

-- --------------------------------------------------------

--
-- Structure de la table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `product_images`
--

INSERT INTO `product_images` (`id`, `created_at`, `updated_at`, `image`, `product_id`) VALUES
(4, '2022-11-10 10:27:16', '2022-11-10 10:27:16', 'images/products/1668079636_air2.jpg', 2),
(5, '2022-11-10 10:27:16', '2022-11-10 10:27:16', 'images/products/1668079636_air3.png', 2),
(6, '2022-11-10 10:27:16', '2022-11-10 10:27:16', 'images/products/1668079636_air4.jpg', 2),
(7, '2022-11-10 10:28:49', '2022-11-10 10:28:49', 'images/products/1668079729_head1.jpg', 3),
(8, '2022-11-10 10:28:49', '2022-11-10 10:28:49', 'images/products/1668079729_head2.jpg', 3),
(9, '2022-11-10 10:28:49', '2022-11-10 10:28:49', 'images/products/1668079729_head3.jpg', 3),
(10, '2022-11-10 10:30:50', '2022-11-10 10:30:50', 'images/products/1668079850_mous1.jpg', 4),
(11, '2022-11-10 10:30:51', '2022-11-10 10:30:51', 'images/products/1668079851_mous2.jpg', 4),
(12, '2022-11-10 10:30:51', '2022-11-10 10:30:51', 'images/products/1668079851_mouse3.jpg', 4),
(13, '2022-11-10 10:31:23', '2022-11-10 10:31:23', 'images/products/1668079883_su1.jpg', 5),
(14, '2022-11-10 10:31:23', '2022-11-10 10:31:23', 'images/products/1668079883_sum.jpg', 5),
(15, '2022-11-10 10:31:23', '2022-11-10 10:31:23', 'images/products/1668079883_sum2.jpg', 5),
(16, '2022-11-10 10:35:14', '2022-11-10 10:35:14', 'images/products/1668080114_h1.jpg', 6),
(17, '2022-11-10 10:35:14', '2022-11-10 10:35:14', 'images/products/1668080114_h3.jpg', 6),
(18, '2022-11-10 10:35:14', '2022-11-10 10:35:14', 'images/products/1668080114_Huawei-P50-Pro.-02jpg.jpg', 6),
(19, '2022-11-10 10:36:30', '2022-11-10 10:36:30', 'images/products/1668080190_ms1.jpg', 7),
(20, '2022-11-10 10:36:30', '2022-11-10 10:36:30', 'images/products/1668080190_ms2.jpg', 7),
(21, '2022-11-10 10:36:30', '2022-11-10 10:36:30', 'images/products/1668080190_ms3.jpg', 7),
(22, '2022-11-10 10:37:06', '2022-11-10 10:37:06', 'images/products/1668080226_mac1.jpg', 8),
(23, '2022-11-10 10:37:06', '2022-11-10 10:37:06', 'images/products/1668080226_mac2.jpg', 8),
(24, '2022-11-10 10:37:06', '2022-11-10 10:37:06', 'images/products/1668080226_mac3.jpg', 8),
(25, '2022-11-10 10:38:43', '2022-11-10 10:38:43', 'images/products/1668080323_key1.jpg', 9),
(26, '2022-11-10 10:38:43', '2022-11-10 10:38:43', 'images/products/1668080323_key2.jpg', 9),
(27, '2022-11-10 10:38:43', '2022-11-10 10:38:43', 'images/products/1668080323_key3.jpg', 9),
(28, '2022-11-10 10:39:16', '2022-11-10 10:39:16', 'images/products/1668080356_lap2.jpg', 10),
(29, '2022-11-10 10:40:03', '2022-11-10 10:40:03', 'images/products/1668080403_camera1.png', 11),
(30, '2022-11-10 10:40:03', '2022-11-10 10:40:03', 'images/products/1668080403_camera2.jpg', 11),
(31, '2022-11-10 10:40:03', '2022-11-10 10:40:03', 'images/products/1668080403_camera3.jpg', 11);

-- --------------------------------------------------------

--
-- Structure de la table `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `slides`
--

INSERT INTO `slides` (`id`, `title`, `description`, `link`, `image`, `created_at`, `updated_at`) VALUES
(2, 'sllide one', 'lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsumlorem ipsum', '#', 'images/slides/1667917700_vegetables-set-left-black-slate.jpg', '2022-11-08 13:28:20', '2022-11-08 13:28:20');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'img/user.jpg',
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `ville`, `image`, `active`, `code`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user', '123123', 'fes', 'img/user.jpg', 0, 'T7yrokWrHF1H8hoN27J7kK52MVAWUL7qWzobJiFkZg1idYjLd2nNnwTNPRmeUpjkzglFFrncXpIOD4h3Q0cgqJA2ktzZOi84CU7LzyLMr8i6issoe3eQbHVvmwVfWSF5', 'user@gmail.com', NULL, '$2y$10$IDLoy8sQe7S47AROBoYHROwgTh7x6mlS7XFz07OzI3XPS9wFsbMs6', NULL, '2022-11-08 14:15:30', '2022-11-08 14:15:30'),
(2, 'brahim', '123456', 'bensouda fes', 'img/user.jpg', 0, 'wpdQbSYUeYyrGrUDAmRGl5EcaTU9FtNge4kaB1Z9Yy01iaDX8WMILkWplNCBk6sQQszpaurkgj7aH2EOtn87L1Of5aEHnAXBY536GdnT4FZXLq74LqA8o5CZBtEalxUT', 'brahim@gmail.com', NULL, '$2y$10$BV.NtOJd.5XTJQorj8GMxeTu/B0KWVqPKlov15F8Dqa5fstXj7pRS', NULL, '2022-11-09 10:16:44', '2022-11-09 10:16:45');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Index pour la table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Index pour la table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT pour la table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
