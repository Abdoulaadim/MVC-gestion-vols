-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 21 juin 2021 à 13:05
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `y-c_gestion_res-vols`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(15) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `cin` varchar(20) NOT NULL,
  `passwords` varchar(300) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `nom`, `prenom`, `cin`, `passwords`) VALUES
(1, 'ahmed', 'benmohamed', 'HH23456', '12345'),
(2, 'ayoub', 'benmbaraq', 'HH47653', '12345');

-- --------------------------------------------------------

--
-- Structure de la table `avion`
--

DROP TABLE IF EXISTS `avion`;
CREATE TABLE IF NOT EXISTS `avion` (
  `id_avion` int(15) NOT NULL AUTO_INCREMENT,
  `marque` varchar(20) NOT NULL,
  `typee` varchar(20) NOT NULL,
  `capacite` int(11) NOT NULL,
  PRIMARY KEY (`id_avion`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `avion`
--

INSERT INTO `avion` (`id_avion`, `marque`, `typee`, `capacite`) VALUES
(1, 'Airbus', 'A330', 780),
(2, 'ATR', 'C430', 1080),
(3, 'Bristol', 'C430', 1900),
(4, 'Boeing', 'F430', 800),
(5, 'ATR', 'Q430', 560),
(6, 'Bristol', 'R430', 600),
(7, 'Boeing', 'F230', 800),
(8, 'Airbus', 'F230', 800),
(9, 'Airbus', 'F230', 800),
(10, 'Airbus', 'F230', 800),
(11, 'Airbus', 'F230', 800);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int(15) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `cin` varchar(20) NOT NULL,
  `telephone` int(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `adresse` varchar(30) NOT NULL,
  `passwords` varchar(300) NOT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `nom`, `prenom`, `cin`, `telephone`, `email`, `adresse`, `passwords`) VALUES
(1, 'chafik', 'brahimu', 'HH65342', 678099034, 'a@gamil.com', 'rue 3 n 6 tanjzi2a ahmed safi ', '$2y$12$U8vtaFxD.trEYF42nRK8weQ87FQ1I8iuMIwwWjlmA37FxAAddU.l.'),
(5, 'morad', 'ramadani', 'HH6476543', 121212, 'b@gamil.com', 'rue nasr tanjziaa  casa ', '$2y$12$ALwH4cRZJxQF2f531qUkiOA22vwrYanFscp8H4Wd39WP1dtIdyDdm');

-- --------------------------------------------------------

--
-- Structure de la table `passager`
--

DROP TABLE IF EXISTS `passager`;
CREATE TABLE IF NOT EXISTS `passager` (
  `id_passager` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `date_naissance` date DEFAULT NULL,
  `id_client` int(11) NOT NULL,
  PRIMARY KEY (`id_passager`),
  KEY `id_client` (`id_client`)
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `passager`
--

INSERT INTO `passager` (`id_passager`, `nom`, `prenom`, `date_naissance`, `id_client`) VALUES
(73, 'ahmed', 'mohamadi', '2021-06-16', 1),
(72, 'bb', 'ds', '2021-05-19', 5),
(71, 'aa', 'bb', '2021-05-05', 5),
(70, 'bb', 'bb', '2021-05-18', 1),
(69, 'aa', 'aa', '2021-05-20', 1);

-- --------------------------------------------------------

--
-- Structure de la table `pilote`
--

DROP TABLE IF EXISTS `pilote`;
CREATE TABLE IF NOT EXISTS `pilote` (
  `id_pilote` int(15) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `num_pilote` varchar(20) NOT NULL,
  PRIMARY KEY (`id_pilote`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pilote`
--

INSERT INTO `pilote` (`id_pilote`, `nom`, `prenom`, `num_pilote`) VALUES
(1, 'dano', 'brimax', 'H12E39'),
(2, 'fadil', 'imane', 'F93018'),
(3, 'zahra', 'FATIH', 'L32391'),
(4, 'Ahmed', 'khalok', 'D21919'),
(5, 'Marouane', 'bnzhar', 'A422Z2'),
(6, 'Mohamad', 'zarktouni', 'G21F34'),
(7, 'fatih', 'ibrahimi', 'KL231F3'),
(8, 'Mohamed', 'bnhamo', 'QSDF'),
(9, 'imane', 'khalidi', 'fsq12'),
(10, 'damo', 'xrox', 'w23q12'),
(11, 'jul', 'box', 'Q1AQ2'),
(12, 'michel', 'nasez', 'LK13Q65'),
(13, 'naser', 'faski', 'LC907'),
(14, 'aqs', 'aa', '12ZSQQ'),
(16, 'qsqs', 'sqqss', 'sqqs');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id_reservation` int(11) NOT NULL AUTO_INCREMENT,
  `nbr_passager` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_vols` int(11) NOT NULL,
  PRIMARY KEY (`id_reservation`),
  KEY `id_client` (`id_client`),
  KEY `id_vols` (`id_vols`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id_reservation`, `nbr_passager`, `id_client`, `id_vols`) VALUES
(49, 1, 1, 3),
(48, 2, 5, 2),
(47, 0, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `vols`
--

DROP TABLE IF EXISTS `vols`;
CREATE TABLE IF NOT EXISTS `vols` (
  `id_vols` int(11) NOT NULL AUTO_INCREMENT,
  `date_depart` date NOT NULL,
  `date_arrivee` date NOT NULL,
  `ville_depart` varchar(20) NOT NULL,
  `ville_arrivee` varchar(20) NOT NULL,
  `aeroport_depart` varchar(20) NOT NULL,
  `aeroport_arrivee` varchar(20) NOT NULL,
  `heure_depart` varchar(20) NOT NULL,
  `heure_arrivee` varchar(20) NOT NULL,
  `prix_vol` float NOT NULL,
  `id_pilote` int(11) NOT NULL,
  `id_avion` int(11) NOT NULL,
  PRIMARY KEY (`id_vols`),
  KEY `id_pilote` (`id_pilote`),
  KEY `id_avion` (`id_avion`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vols`
--

INSERT INTO `vols` (`id_vols`, `date_depart`, `date_arrivee`, `ville_depart`, `ville_arrivee`, `aeroport_depart`, `aeroport_arrivee`, `heure_depart`, `heure_arrivee`, `prix_vol`, `id_pilote`, `id_avion`) VALUES
(1, '2021-05-18', '2021-05-20', 'safi', 'casa', 'mohamd 6', 'zahra', '13:00', '14:00', 1000, 1, 1),
(2, '2021-05-12', '2021-05-12', 'tanger', 'casa', 'bnoazhar', 'safio', '12:00', '13:00', 2000, 1, 1),
(3, '2021-05-12', '2021-05-12', 'safi', 'marrackech', 'safi', 'mohamed 6', '13:00', '13:30', 300, 2, 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
