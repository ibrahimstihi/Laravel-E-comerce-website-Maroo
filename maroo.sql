-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 14 nov. 2022 à 11:27
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
(1, 'brahim', 'ibrahimstihi2015@gmail.com', '2022-11-10 16:02:58', '$2y$10$Ri45Lfb9eUQVY5PnMjvKSuZxEP3SBh0YAV88HGo6heImzc77ICWK.', 'VQKuhIYqHu', '2022-11-10 16:02:58', '2022-11-10 16:02:58');

-- --------------------------------------------------------

--
-- Structure de la table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `brands`
--

INSERT INTO `brands` (`id`, `title`, `logo`, `created_at`, `updated_at`) VALUES
(5, 'apple', 'images/brands/1668182218_Brand logo(7).png', '2022-11-11 14:56:58', '2022-11-11 14:56:58'),
(6, 'canon', 'images/brands/1668182227_Brand logo(6).png', '2022-11-11 14:57:07', '2022-11-11 14:57:07'),
(7, 'huawei', 'images/brands/1668182238_Brand logo(4).png', '2022-11-11 14:57:18', '2022-11-11 14:57:18'),
(8, 'cisco', 'images/brands/1668182246_Brand logo(5).png', '2022-11-11 14:57:26', '2022-11-11 14:57:26'),
(9, 'lenovo', 'images/brands/1668182504_Brand logo(3).png', '2022-11-11 15:01:44', '2022-11-11 15:01:44'),
(10, 'sumsung', 'images/brands/1668182514_Brand logo(1).png', '2022-11-11 15:01:54', '2022-11-11 15:01:54'),
(11, 'msi', 'images/brands/1668182520_Brand logo(2).png', '2022-11-11 15:02:00', '2022-11-11 15:02:00'),
(12, 'soney', 'images/brands/1668182529_Brand logo.png', '2022-11-11 15:02:09', '2022-11-11 15:02:09'),
(13, 'accessoir', 'images/brands/1668184328_accessoir.png', '2022-11-11 15:32:08', '2022-11-11 15:32:08');

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
(1, 'accessoir', 'accessoir', 'images/categories/1668185558_accessoir.png', '2022-11-11 15:52:38', '2022-11-11 15:52:38'),
(2, 'camera', 'camera', 'images/categories/1668185585_camera.jpg', '2022-11-11 15:53:05', '2022-11-11 15:53:05'),
(3, 'headphone', 'headphone', 'images/categories/1668185593_headphone.png', '2022-11-11 15:53:13', '2022-11-11 15:53:13'),
(4, 'laptope', 'laptope', 'images/categories/1668185604_laptope.jpg', '2022-11-11 15:53:24', '2022-11-11 15:53:24'),
(5, 'phone', 'phone', 'images/categories/1668185610_phone.png', '2022-11-11 15:53:30', '2022-11-11 15:53:30'),
(6, 'smart watch', 'smart-watch', 'images/categories/1668185620_smart watch.png', '2022-11-11 15:53:40', '2022-11-11 15:53:40');

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
(10, '2022_11_03_163607_create_slides_table', 1),
(11, '2022_11_10_153126_create_brands_table', 1);

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
(1, 'product title', 'product-title', 'product description product description  product description  product description  product description  product description  product description', '144.00', '0.00', 100, 0, '2022-11-11 15:54:45', '2022-11-11 15:54:45', 3),
(3, 'product title 2', 'product-title-2', 'product description product description  product description  product description  product description  product description  product description', '199.00', '299.00', 200, 0, '2022-11-11 15:55:42', '2022-11-11 16:01:34', 3),
(4, 'product title 3', 'product-title-3', 'product description product description  product description  product description  product description  product description  product description', '6599.00', '7695.00', 199, 0, '2022-11-11 15:56:08', '2022-11-11 16:02:40', 2),
(5, 'product title 4', 'product-title-4', 'product description product description  product description  product description  product description  product description  product description', '5000.00', '0.00', 111, 0, '2022-11-11 15:58:11', '2022-11-11 15:58:11', 4),
(6, 'product 5', 'product-5', 'product description product description  product description  product description  product description  product description  product description', '15888.00', '0.00', 20, 0, '2022-11-11 15:58:53', '2022-11-11 15:58:53', 4),
(7, 'product title 6', 'product-title-6', 'product description product description  product description  product description  product description  product description  product description', '549.00', '599.00', 88, 0, '2022-11-11 15:59:27', '2022-11-11 16:01:53', 1),
(8, 'product title 7', 'product-title-7', 'product description product description  product description  product description  product description  product description  product description', '8999.00', '9999.00', 80, 0, '2022-11-11 16:00:12', '2022-11-11 16:02:09', 5),
(9, 'product title 9', 'product-title-9', 'product description product description  product description  product description  product description  product description  product description', '299.00', '0.00', 70, 0, '2022-11-11 16:00:43', '2022-11-11 16:00:43', 1);

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
(1, '2022-11-11 15:54:45', '2022-11-11 15:54:45', 'images/products/1668185685_air3.png', 1),
(2, '2022-11-11 15:54:45', '2022-11-11 15:54:45', 'images/products/1668185685_air2.png', 1),
(3, '2022-11-11 15:55:42', '2022-11-11 15:55:42', 'images/products/1668185742_Brand logo(21).png', 3),
(4, '2022-11-11 15:56:08', '2022-11-11 15:56:08', 'images/products/1668185768_camera1.png', 4),
(5, '2022-11-11 15:56:08', '2022-11-11 15:56:08', 'images/products/1668185768_Brand logo(20).png', 4),
(6, '2022-11-11 15:56:08', '2022-11-11 15:56:08', 'images/products/1668185768_Brand logo(19).png', 4),
(7, '2022-11-11 15:58:11', '2022-11-11 15:58:11', 'images/products/1668185891_Brand logo(12).png', 5),
(8, '2022-11-11 15:58:53', '2022-11-11 15:58:53', 'images/products/1668185933_ms1.png', 6),
(9, '2022-11-11 15:58:53', '2022-11-11 15:58:53', 'images/products/1668185933_ms2.png', 6),
(10, '2022-11-11 15:58:53', '2022-11-11 15:58:53', 'images/products/1668185933_Brand logo(10).png', 6),
(11, '2022-11-11 15:59:27', '2022-11-11 15:59:27', 'images/products/1668185967_Brand logo(13).png', 7),
(12, '2022-11-11 16:00:13', '2022-11-11 16:00:13', 'images/products/1668186013_Brand logo(14).png', 8),
(13, '2022-11-11 16:00:43', '2022-11-11 16:00:43', 'images/products/1668186043_mous1.png', 9),
(14, '2022-11-11 16:00:43', '2022-11-11 16:00:43', 'images/products/1668186043_mous2.png', 9),
(15, '2022-11-11 16:00:43', '2022-11-11 16:00:43', 'images/products/1668186043_Brand logo(11).png', 9);

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
  `is_offer` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `slides`
--

INSERT INTO `slides` (`id`, `title`, `description`, `link`, `image`, `is_offer`, `created_at`, `updated_at`) VALUES
(2, 'Msi 2022', 'black friday', '#', 'images/slides/1668099945_slide5.jpg', 1, '2022-11-10 16:05:45', '2022-11-10 16:05:45'),
(3, 'slide one', 'description', '#', 'images/slides/1668177797_slide3.jpg', 0, '2022-11-11 13:43:17', '2022-11-11 13:43:17'),
(4, 'slide tow', 'description tow', '#', 'images/slides/1668179450_slide1.jpg', 0, '2022-11-11 14:10:50', '2022-11-11 14:10:50'),
(6, 'save 20%', 'black friday', 'http://localhost:8000/products/categorymm/lenovo-thinkpad', 'images/slides/1668179641_slide2.jpg', 1, '2022-11-11 14:14:01', '2022-11-11 14:14:01'),
(14, 'slide three', 'lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsumlorem ipsum', '#', 'images/slides/1668181158_slide4.jpg', 0, '2022-11-11 14:39:18', '2022-11-11 14:39:18');

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
(1, 'brahim', '06060606', 'fes bensouda lots alhouda etg 1 n 13', 'img/user.jpg', 0, 'S55BRi0g7rQ6gtAASSxQxGZ3tFjtvVfhQDb4LXBKqZPXZGphDaiJj5rgHIQ5OJgJuqRwJWw7sy6jfyKBYeskbdfE93cU3icL1sFaWptErUX9xtTrvfwpgyFcysCQD9RF', 'brahim@gmail.com', NULL, '$2y$10$Lu3Hr9kJeMC3.bQFVc4yae6/0AOiwPsM8IUZ/VobJWdtySk1Ttr2u', NULL, '2022-11-14 09:21:35', '2022-11-14 09:21:36');

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
-- Index pour la table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT pour la table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
