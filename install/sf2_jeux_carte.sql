-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 09 mars 2018 à 06:27
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sf2_jeux_carte`
--

-- --------------------------------------------------------

--
-- Structure de la table `carte`
--

DROP TABLE IF EXISTS `carte`;
CREATE TABLE IF NOT EXISTS `carte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `categorie_id` int(11) DEFAULT NULL,
  `sort` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_BAD4FFFDBCF5E72D` (`categorie_id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `carte`
--

INSERT INTO `carte` (`id`, `value`, `categorie_id`, `sort`) VALUES
(1, 'ACE', 1, 0),
(2, 'TWO', 1, 1),
(3, 'THREE', 1, 2),
(4, 'FOUR', 1, 3),
(5, 'FIVE', 1, 4),
(6, 'SIX', 1, 5),
(7, 'SEVEN', 1, 6),
(8, 'EIGHT', 1, 7),
(9, 'NINE', 1, 8),
(10, 'TEN', 1, 9),
(11, 'JACK', 1, 10),
(12, 'QUEEN', 1, 11),
(13, 'KING', 1, 12),
(14, 'ACE', 2, 0),
(15, 'TWO', 2, 1),
(16, 'THREE', 2, 2),
(17, 'FOUR', 2, 3),
(18, 'FIVE', 2, 4),
(19, 'SIX', 2, 5),
(20, 'SEVEN', 2, 6),
(21, 'EIGHT', 2, 7),
(22, 'NINE', 2, 8),
(23, 'TEN', 2, 9),
(24, 'JACK', 2, 10),
(25, 'QUEEN', 2, 11),
(26, 'KING', 2, 12),
(27, 'ACE', 3, 0),
(28, 'TWO', 3, 1),
(29, 'THREE', 3, 2),
(30, 'FOUR', 3, 3),
(31, 'FIVE', 3, 4),
(32, 'SIX', 3, 5),
(33, 'SEVEN', 3, 6),
(34, 'EIGHT', 3, 7),
(35, 'NINE', 3, 8),
(36, 'TEN', 3, 9),
(37, 'JACK', 3, 10),
(38, 'QUEEN', 3, 11),
(39, 'KING', 3, 12),
(40, 'ACE', 4, 0),
(41, 'TWO', 4, 1),
(42, 'THREE', 4, 2),
(43, 'FOUR', 4, 3),
(44, 'FIVE', 4, 4),
(45, 'SIX', 4, 5),
(46, 'SEVEN', 4, 6),
(47, 'EIGHT', 4, 7),
(48, 'NINE', 4, 8),
(49, 'TEN', 4, 9),
(50, 'JACK', 4, 10),
(51, 'QUEEN', 4, 11),
(52, 'KING', 4, 12);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `category`) VALUES
(1, 'DIAMOND'),
(2, 'HEART'),
(3, 'SPADE'),
(4, 'CLUB');

-- --------------------------------------------------------

--
-- Structure de la table `joueur`
--

DROP TABLE IF EXISTS `joueur`;
CREATE TABLE IF NOT EXISTS `joueur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_FD71A9C5E7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `joueur`
--

INSERT INTO `joueur` (`id`, `nom`, `email`, `password`) VALUES
(1, 'abbes Rharrab', 'aaa@aaa.aa', 'aaa'),
(2, 'joueur1', 'bbb@bbbb.bb', 'bbb'),
(4, 'joueur2', 'ccc@ccccc.cc', 'ccc');

-- --------------------------------------------------------

--
-- Structure de la table `party`
--

DROP TABLE IF EXISTS `party`;
CREATE TABLE IF NOT EXISTS `party` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `joueur_id` int(11) DEFAULT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_89954EE0A9E2D76C` (`joueur_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `carte`
--
ALTER TABLE `carte`
  ADD CONSTRAINT `FK_BAD4FFFDBCF5E72D` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`);

--
-- Contraintes pour la table `party`
--
ALTER TABLE `party`
  ADD CONSTRAINT `FK_89954EE0A9E2D76C` FOREIGN KEY (`joueur_id`) REFERENCES `joueur` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
