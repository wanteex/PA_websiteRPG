-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 18 jan. 2019 à 17:43
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `club_jdr`
--

-- --------------------------------------------------------

--
-- Structure de la table `groupe`
--

DROP TABLE IF EXISTS `groupe`;
CREATE TABLE IF NOT EXISTS `groupe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `groupe`
--

INSERT INTO `groupe` (`id`, `group`) VALUES
(1, 'Joueur'),
(2, 'Maître du jeu'),
(3, 'Modérateur'),
(4, 'Admin');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `creation_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `image`, `creation_date`) VALUES
(1, 'test', 'test', NULL, '2019-01-17'),
(2, 'News test 2', 'Newfaafafa', NULL, '2019-01-17'),
(3, 'News test 3', 'afafagagagagaga', NULL, '2019-01-17'),
(4, 'news test 5', 'fqfqfqfq', NULL, '2019-01-17');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `id_group` int(255) NOT NULL DEFAULT '1',
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL DEFAULT '1',
  `signup_date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_id_group_id` (`id_group`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `login`, `id_group`, `password`, `email`, `avatar`, `signup_date`) VALUES
(17, 'joueur_2', 1, '$2y$10$nqR/Vw0p1Ij51vCa8u.do.Sj7C9dY/wf5EuTrnlfCbyxJ5qydBVnW', 'j2@gmail.com', '1', '2019-01-16'),
(18, 'admin', 4, '$2y$10$jXsItnfhRyfBELSrjseRROirFcQM8XICZ9sS9ccDYjkdfbIGqSPXG', 'admin@gmail.com', '1', '2019-01-16'),
(19, 'noob', 1, '$2y$10$ahqeJVg2yMKmzWF6WUZ9Q.3wXJsGdMwi0yTnPVku2s2WzhALAOQZG', 'noob@gmail.com', '1', '2019-01-16'),
(20, 'joueur_3', 1, '$2y$10$DiJfdo/MufY0Wk7Yb8Lzeug.IM52OXZYM0W2b2paI6phUZCM3Phy2', 'j1@gmail.com', '1', '2019-01-17'),
(21, 'noob_2', 1, '$2y$10$WDsTOgke5us2xiQ6/ARDcuaz8C.4BgXxVwMe1AyIgskZ7Khc7fhzm', 'noob2@gmail.com', '1', '2019-01-17');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_id_group_id` FOREIGN KEY (`id_group`) REFERENCES `groupe` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
