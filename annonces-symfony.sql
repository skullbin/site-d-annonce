-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  mar. 02 avr. 2019 à 16:06
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `annonces-symfony`
--

-- --------------------------------------------------------

--
-- Structure de la table `ad`
--

CREATE TABLE `ad` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `introduction` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rooms` int(11) NOT NULL,
  `author_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `ad`
--

INSERT INTO `ad` (`id`, `title`, `slug`, `price`, `introduction`, `content`, `cover_image`, `rooms`, `author_id`) VALUES
(163, 'Titre de l\'annonce n°11', 'titre-de-l-annonce-n011', 123, 'C\'est une introduction', '<p>Je suis le contenu</p>', 'https://via.placeholder.com/350', 4, 13),
(164, 'Titre de l\'annonce n°21', 'titre-de-l-annonce-n021', 85, 'C\'est une introduction', '<p>Je suis le contenu</p>', 'https://via.placeholder.com/350', 4, 13),
(165, 'Titre de l\'annonce n°31', 'titre-de-l-annonce-n031', 121, 'C\'est une introduction', '<p>Je suis le contenu</p>', 'https://via.placeholder.com/350', 3, 13),
(166, 'Titre de l\'annonce n°41', 'titre-de-l-annonce-n041', 60, 'C\'est une introduction', '<p>Je suis le contenu</p>', 'https://via.placeholder.com/350', 3, 13),
(167, 'Titre de l\'annonce n°12', 'titre-de-l-annonce-n012', 99, 'C\'est une introduction', '<p>Je suis le contenu</p>', 'https://via.placeholder.com/350', 2, 14),
(168, 'Titre de l\'annonce n°22', 'titre-de-l-annonce-n022', 64, 'C\'est une introduction', '<p>Je suis le contenu</p>', 'https://via.placeholder.com/350', 2, 14),
(169, 'Titre de l\'annonce n°32', 'titre-de-l-annonce-n032', 41, 'C\'est une introduction', '<p>Je suis le contenu</p>', 'https://via.placeholder.com/350', 4, 14),
(170, 'Titre de l\'annonce n°42', 'titre-de-l-annonce-n042', 86, 'C\'est une introduction', '<p>Je suis le contenu</p>', 'https://via.placeholder.com/350', 4, 14),
(171, 'Titre de l\'annonce n°13', 'titre-de-l-annonce-n013', 56, 'C\'est une introduction', '<p>Je suis le contenu</p>', 'https://via.placeholder.com/350', 5, 15),
(172, 'Titre de l\'annonce n°23', 'titre-de-l-annonce-n023', 51, 'C\'est une introduction', '<p>Je suis le contenu</p>', 'https://via.placeholder.com/350', 3, 15),
(173, 'Titre de l\'annonce n°33', 'titre-de-l-annonce-n033', 59, 'C\'est une introduction', '<p>Je suis le contenu</p>', 'https://via.placeholder.com/350', 5, 15),
(174, 'Titre de l\'annonce n°43', 'titre-de-l-annonce-n043', 73, 'C\'est une introduction', '<p>Je suis le contenu</p>', 'https://via.placeholder.com/350', 1, 15),
(175, 'Titre de l\'annonce n°14', 'titre-de-l-annonce-n014', 104, 'C\'est une introduction', '<p>Je suis le contenu</p>', 'https://via.placeholder.com/350', 5, 16),
(176, 'Titre de l\'annonce n°24', 'titre-de-l-annonce-n024', 192, 'C\'est une introduction', '<p>Je suis le contenu</p>', 'https://via.placeholder.com/350', 1, 16),
(177, 'Titre de l\'annonce n°34', 'titre-de-l-annonce-n034', 162, 'C\'est une introduction', '<p>Je suis le contenu</p>', 'https://via.placeholder.com/350', 4, 16),
(178, 'Titre de l\'annonce n°44', 'titre-de-l-annonce-n044', 106, 'C\'est une introduction', '<p>Je suis le contenu</p>', 'https://via.placeholder.com/350', 3, 16);

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `ad_id` int(11) NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id`, `ad_id`, `url`, `caption`) VALUES
(162, 163, 'https://via.placeholder.com/350', 'Légende de l\'image 1'),
(163, 163, 'https://via.placeholder.com/350', 'Légende de l\'image 2'),
(164, 163, 'https://via.placeholder.com/350', 'Légende de l\'image 3'),
(165, 164, 'https://via.placeholder.com/350', 'Légende de l\'image 1'),
(166, 164, 'https://via.placeholder.com/350', 'Légende de l\'image 2'),
(167, 165, 'https://via.placeholder.com/350', 'Légende de l\'image 1'),
(168, 165, 'https://via.placeholder.com/350', 'Légende de l\'image 2'),
(169, 166, 'https://via.placeholder.com/350', 'Légende de l\'image 1'),
(170, 167, 'https://via.placeholder.com/350', 'Légende de l\'image 1'),
(171, 167, 'https://via.placeholder.com/350', 'Légende de l\'image 2'),
(172, 168, 'https://via.placeholder.com/350', 'Légende de l\'image 1'),
(173, 169, 'https://via.placeholder.com/350', 'Légende de l\'image 1'),
(174, 169, 'https://via.placeholder.com/350', 'Légende de l\'image 2'),
(175, 169, 'https://via.placeholder.com/350', 'Légende de l\'image 3'),
(176, 170, 'https://via.placeholder.com/350', 'Légende de l\'image 1'),
(177, 170, 'https://via.placeholder.com/350', 'Légende de l\'image 2'),
(178, 170, 'https://via.placeholder.com/350', 'Légende de l\'image 3'),
(179, 170, 'https://via.placeholder.com/350', 'Légende de l\'image 4'),
(180, 170, 'https://via.placeholder.com/350', 'Légende de l\'image 5'),
(181, 171, 'https://via.placeholder.com/350', 'Légende de l\'image 1'),
(182, 172, 'https://via.placeholder.com/350', 'Légende de l\'image 1'),
(183, 172, 'https://via.placeholder.com/350', 'Légende de l\'image 2'),
(184, 173, 'https://via.placeholder.com/350', 'Légende de l\'image 1'),
(185, 173, 'https://via.placeholder.com/350', 'Légende de l\'image 2'),
(186, 174, 'https://via.placeholder.com/350', 'Légende de l\'image 1'),
(187, 175, 'https://via.placeholder.com/350', 'Légende de l\'image 1'),
(188, 175, 'https://via.placeholder.com/350', 'Légende de l\'image 2'),
(189, 176, 'https://via.placeholder.com/350', 'Légende de l\'image 1'),
(190, 176, 'https://via.placeholder.com/350', 'Légende de l\'image 2'),
(191, 177, 'https://via.placeholder.com/350', 'Légende de l\'image 1'),
(192, 177, 'https://via.placeholder.com/350', 'Légende de l\'image 2'),
(193, 177, 'https://via.placeholder.com/350', 'Légende de l\'image 3'),
(194, 177, 'https://via.placeholder.com/350', 'Légende de l\'image 4'),
(195, 177, 'https://via.placeholder.com/350', 'Légende de l\'image 5'),
(196, 178, 'https://via.placeholder.com/350', 'Légende de l\'image 1'),
(197, 178, 'https://via.placeholder.com/350', 'Légende de l\'image 2'),
(198, 178, 'https://via.placeholder.com/350', 'Légende de l\'image 3'),
(199, 178, 'https://via.placeholder.com/350', 'Légende de l\'image 4');

-- --------------------------------------------------------

--
-- Structure de la table `migration_versions`
--

CREATE TABLE `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migration_versions`
--

INSERT INTO `migration_versions` (`version`, `executed_at`) VALUES
('20190312161044', '2019-03-12 16:17:33'),
('20190318102647', '2019-03-18 10:28:08'),
('20190401082125', '2019-04-01 08:23:12'),
('20190401084134', '2019-04-01 08:41:41');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hash` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `introduction` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `picture`, `hash`, `introduction`, `description`, `slug`) VALUES
(13, 'prenom1sdqsdqs', 'nom1', 'test1@test.fr', 'https://via.placeholder.com/64', '$2y$13$4yugC6zvLA1TUUoRSLy/f.an010wnKle.VYLE61S7D662KdzScxV.', 'introduction1', 'Description1', 'prenom1-nom1'),
(14, 'prenom2', 'nom2', 'test2@test.fr', 'https://via.placeholder.com/64', '$2y$13$SzI6/W38kQTG6esbntbQQeUzlDLf/RPcoxhVVqbJPjELK9ouZULrG', 'introduction2', 'Description2', 'prenom2-nom2'),
(15, 'prenom3', 'nom3', 'test3@test.fr', 'https://via.placeholder.com/64', '$2y$13$RJC1v4S8wlTwfihGROiJ4Oo9hebtSEBEeEDfo/csYJmE8MBiBWrWe', 'introduction3', 'Description3', 'prenom3-nom3'),
(16, 'prenom4', 'nom4', 'test4@test.fr', 'https://via.placeholder.com/64', '$2y$13$ymLHsUTzRG2kjPlpq2KAIujcJuoCnNbt9iki7KUTwgKl0/VhGp7UW', 'introduction4', 'Description4', 'prenom4-nom4'),
(18, 'eric', 'devolder', 'xdds@dsfs.fr', 'http://sazzae', '$2y$13$apYWjxk7fuWFsldWnQQbremjNJ21a/7Kap72MUFwn3nBZ6Fi4Jb0i', 'rzeze', 'rzeze', 'eric-devolder');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ad`
--
ALTER TABLE `ad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_77E0ED58F675F31B` (`author_id`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_C53D045F4F34D596` (`ad_id`);

--
-- Index pour la table `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `ad`
--
ALTER TABLE `ad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `ad`
--
ALTER TABLE `ad`
  ADD CONSTRAINT `FK_77E0ED58F675F31B` FOREIGN KEY (`author_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `FK_C53D045F4F34D596` FOREIGN KEY (`ad_id`) REFERENCES `ad` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
