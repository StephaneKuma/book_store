-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 14 juin 2019 à 13:44
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `book_store`
--

-- --------------------------------------------------------

--
-- Structure de la table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `sub_category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_level_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `books_user_id_foreign` (`user_id`),
  KEY `books_sub_category_id_foreign` (`sub_category_id`),
  KEY `books_sub_level_id_foreign` (`sub_level_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tronquer la table avant d'insérer `books`
--

TRUNCATE TABLE `books`;
--
-- Déchargement des données de la table `books`
--

INSERT INTO `books` (`id`, `user_id`, `sub_category_id`, `title`, `sub_level_id`, `image`, `price`, `description`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'Flamboyant', 2, 'books/default.png', 7000.00, 'Livre de lecture', NULL, NULL),
(2, 2, 1, 'Flamboyant', 3, 'books/default.png', 7000.00, 'Livre de lecture', NULL, NULL),
(3, 2, 1, 'Flamboyant', 4, 'books/default.png', 7000.00, 'Livre de lecture', NULL, NULL),
(4, 2, 7, 'GRIA', 11, 'books/default.png', 15000.00, 'Livre de science physique', NULL, NULL),
(5, 2, 6, 'CIAM SM', 14, 'books/default.png', 20000.00, 'Livre de mathématiques pour terminales scientifiques', NULL, NULL),
(6, 2, 3, 'Texte Activité', 9, 'books/default.png', 8000.00, 'Livre de lecture', NULL, NULL),
(7, 2, 7, 'Durando', 14, 'books/default.png', 20000.00, 'Livre de sciences physique pour terminales scientifiques', NULL, NULL),
(8, 2, 3, 'Pagne noir', 8, 'books/default.png', 1000.00, 'Roman', NULL, NULL),
(9, 2, 3, 'Le mandat', 11, 'books/default.png', 2500.00, 'Roman', NULL, NULL),
(10, 3, 7, 'GADO', 14, 'books/default.png', 15000.00, 'GAGO', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `book_categories`
--

DROP TABLE IF EXISTS `book_categories`;
CREATE TABLE IF NOT EXISTS `book_categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tronquer la table avant d'insérer `book_categories`
--

TRUNCATE TABLE `book_categories`;
--
-- Déchargement des données de la table `book_categories`
--

INSERT INTO `book_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Lectures', NULL, NULL),
(2, 'Calculs', NULL, NULL),
(3, 'Littérature', NULL, NULL),
(4, 'Sciences', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `book_sub_categories`
--

DROP TABLE IF EXISTS `book_sub_categories`;
CREATE TABLE IF NOT EXISTS `book_sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `book_sub_categories_category_id_foreign` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tronquer la table avant d'insérer `book_sub_categories`
--

TRUNCATE TABLE `book_sub_categories`;
--
-- Déchargement des données de la table `book_sub_categories`
--

INSERT INTO `book_sub_categories` (`id`, `category_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Lectures', NULL, NULL),
(2, 2, 'Calculs', NULL, NULL),
(3, 3, 'Français', NULL, NULL),
(4, 3, 'Anglais', NULL, NULL),
(5, 3, 'Espagnol', NULL, NULL),
(6, 4, 'Mathématiques', NULL, NULL),
(7, 4, 'Physique - Chimie', NULL, NULL),
(8, 4, 'Physique', NULL, NULL),
(9, 4, 'Chimie', NULL, NULL),
(10, 4, 'SVT', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `messages_user_id_foreign` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tronquer la table avant d'insérer `messages`
--

TRUNCATE TABLE `messages`;
-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `confirmation_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tronquer la table avant d'insérer `users`
--

TRUNCATE TABLE `users`;
--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `confirmation_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@admin.com', 'users/default.png', NULL, '$2y$10$vlid5vE0SMiWsiaA1foAuOSEm1cum6JwhlhaoAe1LS4FGcmLZ2y5m', 'QONjJLoPmoZGkOwKHxORnQuAPQUjp5zxz2M5luxBhW0EdE8BDaEqDsjQ68Gk', NULL, NULL, '2019-06-11 12:34:39', '2019-06-11 12:34:39'),
(2, 1, 'Stéphane', 'kumastephane@gmail.com', 'users/default.png', NULL, '$2y$10$pXGsbF/k9t7kPAvmcb6H/e83OHmk45.LIrtvKSOcXs6Cv77ISVUHy', NULL, NULL, NULL, '2019-06-12 17:37:57', '2019-06-12 17:37:57'),
(3, 2, 'Stéphane', 'kumastephane@protonmail.com', 'users/default.png', NULL, '$2y$10$s5SSG0ozJHrnIw8IHwCt.Oe0ZFXo6VQOnTrGqjkj0E/Yr2bSMtojy', NULL, NULL, NULL, '2019-06-13 21:14:42', '2019-06-13 21:14:43'),
(7, 2, 'Stekos', 'kumastephane@ptotonmail.com', 'users/default.png', NULL, '$2y$10$/vYHvncgaC7H.K0FVveNJuZj8qAaFT0ufqI0o26fYUlHkddStoqkS', NULL, NULL, NULL, '2019-06-13 23:54:05', '2019-06-13 23:55:20');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `book_sub_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `books_sub_level_id_foreign` FOREIGN KEY (`sub_level_id`) REFERENCES `sub_levels` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `books_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `book_sub_categories`
--
ALTER TABLE `book_sub_categories`
  ADD CONSTRAINT `book_sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `book_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
