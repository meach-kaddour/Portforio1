-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 09 sep. 2020 à 17:19
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `phpcms`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adminName` varchar(255) NOT NULL,
  `passcode` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `adminName`, `passcode`, `action`) VALUES
(1, 'admin', 'admin', 'super admin');

-- --------------------------------------------------------

--
-- Structure de la table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id_projet` int(11) NOT NULL AUTO_INCREMENT,
  `name_projet` varchar(255) NOT NULL,
  `image_projet` varchar(255) NOT NULL,
  `description_projet` varchar(1000) NOT NULL,
  `slug` varchar(555) NOT NULL,
  PRIMARY KEY (`id_projet`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `projects`
--

INSERT INTO `projects` (`id_projet`, `name_projet`, `image_projet`, `description_projet`, `slug`) VALUES
(5, 'Covid-19 Test', 'covitestscreen.png', 'Lâ€™application est fournie Ã  titre gratuit, en lâ€™Ã©tat, uniquement Ã  des fins dâ€™information pour contribuer Ã  fluidifier la prise en charge des personnes par les services dâ€™urgences pendant lâ€™Ã©pidÃ©mie de Coronavirus COVID-19. Lâ€™exhaustivitÃ©, lâ€™exactitude, le caractÃ¨re Ã  jour des informations et contenus mis Ã  disposition dans cette application, ou leur adÃ©quation Ã  des finalitÃ©s particuliÃ¨res, ne sont pas garantis.', ' https://meach-kaddour.github.io/Covitest-kaddour/');

-- --------------------------------------------------------

--
-- Structure de la table `technologies`
--

DROP TABLE IF EXISTS `technologies`;
CREATE TABLE IF NOT EXISTS `technologies` (
  `id_technologies` int(11) NOT NULL AUTO_INCREMENT,
  `name_technologies` varchar(100) NOT NULL,
  `image_technologies` varchar(255) NOT NULL,
  `niveau_technologies` varchar(255) NOT NULL,
  PRIMARY KEY (`id_technologies`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `technologies`
--

INSERT INTO `technologies` (`id_technologies`, `name_technologies`, `image_technologies`, `niveau_technologies`) VALUES
(2, 'HMTL', 'footer-github.png', '60%');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
