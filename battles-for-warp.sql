-- phpMyAdmin SQL Dump
-- version 4.1.9
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Ven 11 Avril 2014 à 04:04
-- Version du serveur :  5.5.36
-- Version de PHP :  5.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `tbweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `races`
--

CREATE TABLE IF NOT EXISTS `races` (
  `id_race` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  PRIMARY KEY (`id_race`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `races`
--

INSERT INTO `races` (`id_race`, `nom`) VALUES
(1, 'Tau'),
(2, 'Eldars Noirs');

-- --------------------------------------------------------

--
-- Structure de la table `ships`
--

CREATE TABLE IF NOT EXISTS `ships` (
  `id_vaisseau` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `taille` varchar(20) NOT NULL,
  `pc` int(11) NOT NULL,
  `pm` int(11) NOT NULL,
  `vitesse` int(11) NOT NULL,
  `manoeuvre` int(11) NOT NULL,
  `bouclier` int(11) NOT NULL,
  `bonus` varchar(50) NOT NULL,
  `race` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_vaisseau`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `ships`
--

INSERT INTO `ships` (`id_vaisseau`, `nom`, `taille`, `pc`, `pm`, `vitesse`, `manoeuvre`, `bouclier`, `bonus`, `race`) VALUES
(1, 'Tigershark', '4x2', 10, 11, 15, 3, 0, '', 1),
(2, 'Tigershark AX-1-0', '4x2', 10, 11, 15, 3, 0, '', 1);

-- --------------------------------------------------------

--
-- Structure de la table `weapons`
--

CREATE TABLE IF NOT EXISTS `weapons` (
  `id_arme` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `PP` int(11) NOT NULL,
  PRIMARY KEY (`id_arme`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `weapship`
--

CREATE TABLE IF NOT EXISTS `weapship` (
  `id_weapship` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idvaisseau` int(10) unsigned NOT NULL,
  `idweapon` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_weapship`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
