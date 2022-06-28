-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 28 juin 2022 à 06:05
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mvc`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `titre`) VALUES
(1, 'PlayStation'),
(2, 'Xbox'),
(3, 'Nintendo');

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

DROP TABLE IF EXISTS `commandes`;
CREATE TABLE IF NOT EXISTS `commandes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `donnees` varchar(255) NOT NULL,
  `prix_total` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commandes`
--

INSERT INTO `commandes` (`id`, `user_id`, `donnees`, `prix_total`) VALUES
(1, 11, 'a:8:{s:7:\"user_id\";s:2:\"11\";s:12:\"produit-id-1\";s:1:\"1\";s:15:\"produit-1-total\";s:6:\"259.96\";s:12:\"produit-id-3\";s:1:\"3\";s:15:\"produit-3-total\";s:5:\"64.99\";s:13:\"produit-1-nbr\";s:1:\"4\";s:13:\"produit-3-nbr\";s:1:\"1\";s:14:\"commande-total\";s:6:\"324.95\";}', 325),
(2, 11, 'a:8:{s:7:\"user_id\";s:2:\"11\";s:12:\"produit-id-1\";s:1:\"1\";s:15:\"produit-1-total\";s:6:\"259.96\";s:12:\"produit-id-3\";s:1:\"3\";s:15:\"produit-3-total\";s:5:\"64.99\";s:13:\"produit-1-nbr\";s:1:\"4\";s:13:\"produit-3-nbr\";s:1:\"1\";s:14:\"commande-total\";s:6:\"324.95\";}', 325),
(3, 11, 'a:5:{s:7:\"user_id\";s:2:\"11\";s:12:\"produit-id-2\";s:1:\"2\";s:15:\"produit-2-total\";s:6:\"129.98\";s:13:\"produit-2-nbr\";s:1:\"2\";s:14:\"commande-total\";s:6:\"129.98\";}', 130),
(4, 11, 'a:5:{s:7:\"user_id\";s:2:\"11\";s:12:\"produit-id-2\";s:1:\"2\";s:15:\"produit-2-total\";s:6:\"129.98\";s:13:\"produit-2-nbr\";s:1:\"2\";s:14:\"commande-total\";s:6:\"129.98\";}', 130),
(5, 11, 'a:5:{s:7:\"user_id\";s:2:\"11\";s:12:\"produit-id-2\";s:1:\"2\";s:15:\"produit-2-total\";s:6:\"129.98\";s:13:\"produit-2-nbr\";s:1:\"2\";s:14:\"commande-total\";s:6:\"129.98\";}', 130),
(6, 11, 'a:5:{s:7:\"user_id\";s:2:\"11\";s:12:\"produit-id-2\";s:1:\"2\";s:15:\"produit-2-total\";s:6:\"129.98\";s:13:\"produit-2-nbr\";s:1:\"2\";s:14:\"commande-total\";s:6:\"129.98\";}', 130),
(7, 11, 'a:5:{s:7:\"user_id\";s:2:\"11\";s:12:\"produit-id-2\";s:1:\"2\";s:15:\"produit-2-total\";s:5:\"64.99\";s:13:\"produit-2-nbr\";s:1:\"1\";s:14:\"commande-total\";s:5:\"64.99\";}', 65),
(8, 11, 'a:5:{s:7:\"user_id\";s:2:\"11\";s:12:\"produit-id-2\";s:1:\"2\";s:15:\"produit-2-total\";s:5:\"64.99\";s:13:\"produit-2-nbr\";s:1:\"1\";s:14:\"commande-total\";s:5:\"64.99\";}', 65),
(9, 11, 'a:5:{s:7:\"user_id\";s:2:\"11\";s:12:\"produit-id-2\";s:1:\"2\";s:15:\"produit-2-total\";s:5:\"64.99\";s:13:\"produit-2-nbr\";s:1:\"1\";s:14:\"commande-total\";s:5:\"64.99\";}', 65),
(10, 11, 'a:5:{s:7:\"user_id\";s:2:\"11\";s:12:\"produit-id-2\";s:1:\"2\";s:15:\"produit-2-total\";s:5:\"64.99\";s:13:\"produit-2-nbr\";s:1:\"1\";s:14:\"commande-total\";s:5:\"64.99\";}', 65),
(11, 11, 'a:5:{s:7:\"user_id\";s:2:\"11\";s:12:\"produit-id-2\";s:1:\"2\";s:15:\"produit-2-total\";s:5:\"64.99\";s:13:\"produit-2-nbr\";s:1:\"1\";s:14:\"commande-total\";s:5:\"64.99\";}', 65),
(12, 11, 'a:8:{s:7:\"user_id\";s:2:\"11\";s:12:\"produit-id-2\";s:1:\"2\";s:15:\"produit-2-total\";s:5:\"64.99\";s:12:\"produit-id-1\";s:1:\"1\";s:15:\"produit-1-total\";s:6:\"194.97\";s:13:\"produit-2-nbr\";s:1:\"1\";s:13:\"produit-1-nbr\";s:1:\"3\";s:14:\"commande-total\";s:6:\"259.96\";}', 260);

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`, `password`) VALUES
(1, 'manudevel@yahoo.fr', '123'),
(2, 'mimidevel@gmail.com', 'aZQESRDHK'),
(3, 'J4ENAIPAS@gMAIL.com', '123'),
(4, 'J4ENAIPAS@gMAIL.com', '123'),
(5, 'teste', '123'),
(6, 'SREDTGYH', '123'),
(7, 'addtest', 'add'),
(8, 'ewsrxvyb,;', '79846521.0'),
(9, 'QZESRDTGY123', 'ZSERDTFG123');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) DEFAULT NULL,
  `description` longtext,
  `img1` text,
  `img2` text,
  `img3` text,
  `img4` text,
  `prix` double DEFAULT NULL,
  `sous_categories_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`sous_categories_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `titre`, `description`, `img1`, `img2`, `img3`, `img4`, `prix`, `sous_categories_id`, `date`) VALUES
(1, 'Couleur Rouge', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article1.png', 'CouleurRouge.png', 'Article1B.png', 'CouleurRougeB.png', 64.99, 1, NULL),
(2, 'Couleur Magenta', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', NULL, 'CouleurRouge.png', 'Article2B.png', NULL, 64.99, 1, NULL),
(3, 'Couleur Rouge', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', NULL, NULL, 'Article3B.png', NULL, 64.99, 1, NULL),
(4, 'Couleur Margenta', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', NULL, NULL, 'Article2B.png', NULL, 64.99, 1, NULL),
(5, 'Couleur Cyan', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', NULL, 'CouleurRouge.png', 'Article2B.png', NULL, 64.99, 1, NULL),
(6, 'Couleur Jaune', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', NULL, NULL, 'Article3.png', NULL, 64.99, 1, NULL),
(7, 'rose', 'ceci est un teste', 'Article1.png', NULL, 'Article3B.png', NULL, 100, 1, NULL),
(8, 'zefdcqc', 'qdqd', 'CouleurRougeB.png', NULL, NULL, 'CouleurRouge.png', 456, 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `sous_categories`
--

DROP TABLE IF EXISTS `sous_categories`;
CREATE TABLE IF NOT EXISTS `sous_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) DEFAULT NULL,
  `categories_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categories_id` (`categories_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sous_categories`
--

INSERT INTO `sous_categories` (`id`, `titre`, `categories_id`) VALUES
(1, 'PlayStation 4', 1),
(2, 'PlayStation 5', 1),
(3, 'Xbox One', 2),
(4, 'Xbox série X/S', 2),
(5, 'Switch Pro', 3);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `password` char(60) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `tel` varchar(10) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT 'ROLE_USER',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `firstname`, `lastname`, `tel`, `adresse`, `role`) VALUES
(10, 'EmilieMontpre@outlook.com', '$2y$10$4zyKppAQh8D.c.43daXZke9IWwtV53twjtSFh7v9OxbD/OOKC8YqG', 'Emilie', 'Montpre', '0000000000', 'null', 'ROLE_ADMIN'),
(11, 'SakoSuta@gmail.com', '$2y$10$KuV6ZeUQBDvz6om/h6OXsOLMXT9LkPZW8vZ6DQsZc2jN.a6x/ejGe', 'Sako', 'Suta', '0673220137', '13 allÃ©e des passiflores', 'ROLE_USER'),
(12, 'admin@gmail.com', '$2y$10$Adm8WjU5A0kXHjTurc8.3ePyCmwn8lYBE.B.TsR2irUrnPVny6s9i', 'autre', 'teste', '1000000000', '123', 'ROLE_USER');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `produits_ibfk_1` FOREIGN KEY (`sous_categories_id`) REFERENCES `sous_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `sous_categories`
--
ALTER TABLE `sous_categories`
  ADD CONSTRAINT `sous_categories_ibfk_1` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
