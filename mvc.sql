-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 28 juin 2022 à 14:52
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `titre`, `description`, `img1`, `img2`, `img3`, `img4`, `prix`, `sous_categories_id`, `date`) VALUES
(1, 'Couleur Rose', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article1.png', 'Article1S.png', 'Article1B.png', 'Article1BS.png', 64.99, 1, NULL),
(2, 'Motif vague', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article2.png', 'Article2S.png', 'Article2B.png', 'ArticleBS.png', 89.99, 1, NULL),
(3, 'Couleur Jaune', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article3.png', 'Article3S.png', 'Article3B.png', 'Article3BS.png', 64.99, 1, NULL),
(4, 'Couleur Rouge', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article 103.png', 'Frame 53.png', 'Article 181.png', 'Frame 113.png', 64.99, 1, NULL),
(5, 'Motif squelette', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article 104.png', 'Frame 54.png', 'Article 185.png', 'Frame 125.png', 89.99, 1, NULL),
(6, 'Couleur Violet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article 105.png', 'Frame 55.png', 'Article 189.png', 'Frame 147.png', 64.99, 1, NULL),
(7, 'Couleur Or', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article 106.png', 'Frame 56.png', 'Article 193.png', 'Frame 117.png', 69.99, 1, NULL),
(8, 'Motif bois', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article 107.png', 'Frame 57.png', 'Article 197.png', 'Frame 129.png', 75.99, 1, NULL),
(9, 'Carbone', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article 109.png', 'Frame 58.png', 'Article 205.png', 'Frame 151.png', 109.99, 1, NULL),
(10, 'Motif armÃ©e', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article 108.png', 'Frame 59.png', 'Article 201.png', 'Frame 155.png', 89.99, 1, NULL),
(11, 'Couleur Rose', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article 110.png', 'Frame 60.png', 'Article 160.png', 'Frame 110.png', 64.99, 2, NULL),
(12, 'Motif vague', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article 111.png', 'Frame 63.png', 'Article 174.png', 'Frame 122.png', 89.99, 2, NULL),
(13, 'Couleur Jaune', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article 112.png', 'Frame 66.png', 'Article 178.png', 'Frame 134.png', 64.99, 2, NULL),
(14, 'Couleur Rouge', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article 113.png', 'Frame 61.png', 'Article 182.png', 'Frame 114.png', 64.99, 2, NULL),
(15, 'Motif squelette', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article 114.png', 'Frame 64.png', 'Article 186.png', 'Frame 126.png', 89.99, 2, NULL),
(16, 'Motif Galaxie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article 115.png', 'Frame 67.png', 'Article 190.png', 'Frame 148.png', 64.99, 2, NULL),
(17, 'Storm', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article 116.png', 'Frame 62.png', 'Article 194.png', 'Frame 118.png', 65.95, 2, NULL),
(18, 'Couleur Or', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article 117.png', 'Frame 65.png', 'Article 198.png', 'Frame 130.png', 69.99, 2, NULL),
(19, 'Motif poisson', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article 118.png', 'Frame 69.png', 'Article 202.png', 'Frame 156.png', 64.99, 2, NULL),
(20, 'Carbone', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article 119.png', 'Frame 68.png', 'Article 206.png', 'Frame 152.png', 109.99, 2, NULL),
(21, 'Couleur Rose', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article 120.png', 'Frame 70.png', 'Article 161.png', 'Frame 111.png', 64.99, 4, NULL),
(22, 'Motif vague', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article 121.png', 'Frame 73.png', 'Article 175.png', 'Frame 123.png', 89.99, 4, NULL),
(23, 'Couleur Jaune', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article 122.png', 'Frame 76.png', 'Article 179.png', 'Frame 135.png', 64.99, 4, NULL),
(24, 'Couleur Rouge', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article 123.png', 'Frame 71.png', 'Article 183.png', 'Frame 115.png', 64.99, 4, NULL),
(25, 'Motif squelette', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article 124.png', 'Frame 74.png', 'Article 187.png', 'Frame 127.png', 89.99, 4, NULL),
(26, 'Motif Galaxie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article 125.png', 'Frame 77.png', 'Article 191.png', 'Frame 149.png', 64.99, 4, NULL),
(27, 'Couleur Or', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article 126.png', 'Frame 72.png', 'Article 195.png', 'Frame 119.png', 69.99, 4, NULL),
(28, 'Motif bois', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article 127.png', 'Frame 75.png', 'Article 199.png', 'Frame 131.png', 75.99, 4, NULL),
(29, 'Motif loup', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article 128.png', 'Frame 79.png', 'Article 203.png', 'Frame 157.png', 105.99, 4, NULL),
(30, 'Carbone', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article 129.png', 'Frame 78.png', 'Article 207.png', 'Frame 153.png', 109.99, 4, NULL),
(31, 'Couleur Orange', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article 130.png', 'Frame 107.png', 'Article 162.png', 'Frame 137.png', 64.99, 3, NULL),
(32, 'Couleur rose', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article 150.png', 'Frame 108.png', 'Article 163.png', 'Frame 140.png', 64.99, 3, NULL),
(33, 'Motif circuit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article 151.png', 'Frame 86.png', 'Article 164.png', 'Frame 136.png', 64.99, 3, NULL),
(34, 'Couleur Or', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article 152.png', 'Frame 100.png', 'Article 165.png', 'Frame 139.png', 69.99, 3, NULL),
(35, 'Motif squelette', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article 153.png', 'Frame 101.png', 'Article 166.png', 'Frame 143.png', 89.99, 3, NULL),
(36, 'Motif Galaxie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article 154.png', 'Frame 102.png', 'Article 167.png', 'Frame 138.png', 64.99, 3, NULL),
(37, 'Storm', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article 155.png', 'Frame 103.png', 'Article 168.png', 'Frame 138.png', 65.95, 3, NULL),
(38, 'Motif bois', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article 156.png', 'Frame 104.png', 'Article 169.png', 'Frame 144.png', 75.99, 3, NULL),
(39, 'Motif armÃ©e', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article 157.png', 'Frame 105.png', 'Article 170.png', 'Frame 142.png', 89.99, 3, NULL),
(40, 'Carbone', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article 158.png', 'Frame 106.png', 'Article 171.png', 'Frame 145.png', 109.99, 3, NULL),
(41, 'Couleur Rose', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article 140.png', 'Frame 90.png', 'Article 172.png', 'Frame 112.png', 64.99, 5, NULL),
(42, 'Motif vague', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article 141.png', 'Frame 93.png', 'Article 176.png', 'Frame 124.png', 89.99, 5, NULL),
(43, 'Japon', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article 142.png', 'Frame 96.png', 'Article 180.png', 'Frame 146.png', 69.99, 5, NULL),
(44, 'Couleur Rouge', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article 143.png', 'Frame 91.png', 'Article 184.png', 'Frame 116.png', 64.99, 5, NULL),
(45, 'Motif squelette', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article 144.png', 'Frame 94.png', 'Article 188.png', 'Frame 128.png', 89.99, 5, NULL),
(46, 'Motif Galaxie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article 145.png', 'Frame 97.png', 'Article 192.png', 'Frame 150.png', 64.99, 5, NULL),
(47, 'Couleur Or', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article 146.png', 'Frame 92.png', 'Article 196.png', 'Frame 120.png', 69.99, 5, NULL),
(48, 'Motif bois', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article 147.png', 'Frame 95.png', 'Article 200.png', 'Frame 132.png', 75.99, 5, NULL),
(49, 'Motif loup', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article 148.png', 'Frame 99.png', 'Article 204.png', 'Frame 158.png', 105.99, 5, NULL),
(50, 'Carbone', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.', 'Article 149.png', 'Frame 98.png', 'Article 208.png', 'Frame 154.png', 109.99, 5, NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `firstname`, `lastname`, `tel`, `adresse`, `role`) VALUES
(10, 'EmilieMontpre@outlook.com', '$2y$10$4zyKppAQh8D.c.43daXZke9IWwtV53twjtSFh7v9OxbD/OOKC8YqG', 'Emilie', 'Montpre', '0000000000', 'nullrr', 'ROLE_ADMIN'),
(11, 'SakoSuta@gmail.com', '$2y$10$KuV6ZeUQBDvz6om/h6OXsOLMXT9LkPZW8vZ6DQsZc2jN.a6x/ejGe', 'Sako', 'Suta', '0673220137', '13 allÃ©e des passifloresrer', 'ROLE_USER');

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
