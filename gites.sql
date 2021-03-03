-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 03 mars 2021 à 09:08
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
-- Base de données : `gites`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories_gites`
--

DROP TABLE IF EXISTS `categories_gites`;
CREATE TABLE IF NOT EXISTS `categories_gites` (
  `id_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(250) NOT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `gitesinfo`
--

DROP TABLE IF EXISTS `gitesinfo`;
CREATE TABLE IF NOT EXISTS `gitesinfo` (
  `id_gite` int(11) NOT NULL AUTO_INCREMENT,
  `name_gite` varchar(250) NOT NULL,
  `description_gite` varchar(250) NOT NULL,
  `price_gite` float NOT NULL,
  `img_gite` varchar(250) NOT NULL,
  `nbr_chambre` int(11) NOT NULL,
  `nbr_sdb` int(11) NOT NULL,
  `dispo_gite` tinyint(1) NOT NULL,
  `zone_geo` varchar(250) NOT NULL,
  `date_arrivee` datetime NOT NULL,
  `date_depart` datetime NOT NULL,
  `categories_gite` varchar(250) NOT NULL,
  PRIMARY KEY (`id_gite`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `gitesinfo`
--

INSERT INTO `gitesinfo` (`id_gite`, `name_gite`, `description_gite`, `price_gite`, `img_gite`, `nbr_chambre`, `nbr_sdb`, `dispo_gite`, `zone_geo`, `date_arrivee`, `date_depart`, `categories_gite`) VALUES
(1, 'nom', 'fqeriothpiugnb h nnf nfndtf bncdgfty ', 20.03, 'https://picsum.photos/200', 5, 2, 1, '', '2021-03-01 14:27:37', '2021-03-19 14:27:37', ''),
(2, 'uiltguy', 'è_tè_tèo_tgè_oto_ètghuu', 202.03, 'https://picsum.photos/200', 5, 2, 1, '', '2021-03-17 15:05:52', '2021-03-02 15:05:52', ''),
(3, 'uiekgbkduybfv', 'eruiqglbvhl_irshlg', 500, 'https://picsum.photos/200', 5, 86, 1, '', '2021-03-10 15:35:47', '2021-03-31 15:35:47', '');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `name_user` varchar(250) NOT NULL,
  `password_user` varchar(250) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `name_user`, `password_user`) VALUES
(1, 'user', '1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
