-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 06 mai 2018 à 14:02
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blogp3`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `date_creation` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `contenu`, `date_creation`) VALUES
(15, 'Lorem ipsum', '<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dolor nulla, varius vel diam pulvinar, finibus rutrum urna. Donec lacinia laoreet dictum. Fusce placerat feugiat leo non varius. Morbi tortor diam, maximus sit amet massa at, posuere sagittis enim. Donec non feugiat ipsum. Aliquam volutpat massa nec nulla vestibulum vulputate. Morbi scelerisque nunc id turpis semper ullamcorper.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;\">Integer ac arcu massa. Nullam lectus dui, congue eget elit sed, finibus luctus nibh. Fusce non viverra risus. Donec mattis sapien velit, quis hendrerit lorem molestie non. Vestibulum euismod sapien ac rhoncus facilisis. Maecenas mi sem, elementum tincidunt finibus eget, viverra a turpis. Curabitur tincidunt, nibh feugiat mattis imperdiet, massa lacus dapibus dolor, a eleifend felis magna quis tellus. Donec a sem lobortis, condimentum purus eu, ultricies ante. Morbi turpis lectus, porttitor sit amet elit eu, tempor bibendum nunc. Vivamus viverra finibus ex, vitae scelerisque diam semper in. Nam posuere nibh lacus, quis feugiat ipsum bibendum eu. Donec libero enim, porttitor in dolor et, scelerisque ornare mauris. Donec efficitur tellus ipsum, in faucibus nibh sagittis a. In ultrices ante id libero sodales, sed ultrices urna imperdiet.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;\">Nunc ultricies purus lacus, non egestas mi ultrices nec. Sed luctus mauris vel arcu pulvinar, ut tincidunt lectus sagittis. Vestibulum malesuada urna ac augue aliquet sodales. Nam non sem elementum, accumsan turpis vel, commodo velit. Nunc sapien lacus, mattis eget pulvinar at, tempus a dui. In lacinia tellus sit amet maximus ullamcorper. Suspendisse hendrerit turpis ipsum, sed molestie arcu sagittis quis. Curabitur eget tortor tempor, vestibulum urna eget, rutrum ante. Fusce sapien felis, pellentesque sit amet lacus sit amet, tempus efficitur nibh. Cras et sem vel eros mollis cursus iaculis vitae sapien.</p>', '2018-05-06 13:29:40'),
(18, 'blabalb', '<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel purus at nibh auctor venenatis. Maecenas viverra nisi felis, in pharetra libero euismod sed. Mauris urna dui, semper rutrum augue et, tristique fringilla justo. Vivamus non maximus nulla. Proin ultrices maximus ante, vel condimentum justo malesuada non. Nullam tempor efficitur metus et rutrum. Duis nibh mauris, semper id sodales non, fringilla eget mi. Aenean pulvinar ligula ut posuere blandit. Sed diam purus, condimentum at pretium vel, fringilla vel tellus. Pellentesque ultrices ultrices arcu. Suspendisse rhoncus eros non sem gravida pellentesque. In volutpat dolor ultricies vestibulum vehicula. Quisque et tellus sed est finibus tincidunt. Fusce blandit velit a libero fermentum ultricies.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;\">Nullam neque lorem, mollis ut dictum id, rutrum at ante. Vivamus odio risus, molestie efficitur sodales sit amet, porttitor quis sapien. Aenean ut dictum nisl. Morbi ac maximus nisi, vitae malesuada ex. Morbi dictum magna ante, non eleifend mi aliquam mattis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin viverra tempus eros, vitae mattis ex tristique vitae. Donec vehicula tempor tellus. Vivamus ante lectus, euismod sed massa et, elementum vestibulum nisi. Phasellus finibus euismod eleifend.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;\">Proin consequat condimentum felis tempus venenatis. Pellentesque non nunc quis enim pharetra finibus. Nulla eleifend sem arcu, eget varius nisl ultricies at. Proin eget aliquam lectus, eget fermentum dolor. Suspendisse potenti. Nam a rhoncus magna. Suspendisse ullamcorper auctor nulla, non finibus nibh consequat ac. Suspendisse in dolor in ante sollicitudin varius eu a nibh. Proin posuere lectus erat, at consectetur eros interdum eget. Vestibulum luctus egestas libero, ut sollicitudin enim pellentesque sed. Nam vel mauris id tellus dapibus tempus vel sollicitudin justo. Integer iaculis eget justo eu mollis. Vivamus varius risus nec sodales varius. Ut lacinia enim quis condimentum blandit. Aenean placerat sed sem vel varius.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;\">Donec molestie dolor vitae leo sodales, sed rutrum lacus accumsan. Nullam blandit, metus ac elementum dignissim, felis sapien ultricies justo, ac lobortis risus augue sit amet turpis. Phasellus rutrum eget orci eget cursus. Nunc lorem lacus, finibus id turpis sed, eleifend hendrerit tortor. Morbi sit amet consequat eros. Vivamus et metus ac velit rutrum sodales. Ut congue ante a lectus fermentum, molestie imperdiet odio cursus. Aliquam molestie consectetur neque, nec lacinia arcu porttitor ut. Maecenas ut orci a erat viverra finibus sed et magna. Ut eu purus et ante elementum semper a et orci. Proin vitae venenatis eros. Fusce malesuada tincidunt mi, ac pharetra dui egestas sed. Phasellus tincidunt vehicula nisi id sollicitudin. In varius ante non enim varius, tristique tincidunt ante gravida. In ante dolor, scelerisque eu elit in, eleifend facilisis velit. Mauris tempus enim tellus, eu tincidunt mauris gravida eget.</p>', '2018-05-06 15:35:58'),
(17, 'afbci', '<p>zkvbzklvbzdvbzvbzjvbzkvjbqsv&nbsp;</p>', '2018-05-06 15:32:12');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_article` int(11) NOT NULL,
  `signaler` int(11) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `commentaire` text NOT NULL,
  `date_commentaire` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `id_article`, `signaler`, `auteur`, `commentaire`, `date_commentaire`) VALUES
(1, 1, 0, 'karkar', 'j\'me suis perdu', '2018-04-18 00:00:00'),
(2, 2, 0, 'blou', 'bloubloubloubloubloubloubloubloublou', '2018-04-26 00:00:00'),
(3, 1, 0, 'rakrak', 'udrep sius em\'j', '2018-04-19 00:11:00'),
(7, 13, 0, 'avaz', 'vaavavava', '2018-04-29 15:08:04'),
(6, 13, 0, 'avaz', 'vaavavava', '2018-04-29 15:06:58'),
(8, 14, 0, 'coucou', 'c\'est moi', '2018-05-06 13:03:16'),
(9, 14, 9, 'aga', 'vaqeaq', '2018-05-06 13:04:58'),
(10, 15, 0, 'Seb', 'Super article !', '2018-05-06 14:02:52'),
(11, 16, 0, 'Pipo', 'Très bon, hâte de voir la suite.', '2018-05-06 14:05:57');

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

DROP TABLE IF EXISTS `membres`;
CREATE TABLE IF NOT EXISTS `membres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id`, `pseudo`, `pass`, `email`) VALUES
(1, '1234', '81dc9bdb52d04dc20036dbd8313ed055', '1234@1234.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
