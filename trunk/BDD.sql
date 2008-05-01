-- phpMyAdmin SQL Dump
-- version 2.6.1
-- http://www.phpmyadmin.net
-- 
-- Serveur: localhost
-- Généré le : Jeudi 01 Mai 2008 à 19:56
-- Version du serveur: 4.1.9
-- Version de PHP: 4.3.10
-- 
-- Base de données: `kaliente`
-- 

-- --------------------------------------------------------

-- 
-- Structure de la table `galerie`
-- 
-- Création: Jeudi 01 Mai 2008 à 17:12
-- Dernière modification: Jeudi 01 Mai 2008 à 19:47
-- 

DROP TABLE IF EXISTS `galerie`;
CREATE TABLE IF NOT EXISTS `galerie` (
  `id` int(11) NOT NULL auto_increment,
  `nom` varchar(255) NOT NULL default '',
  `path` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Contenu de la table `galerie`
-- 

INSERT INTO `galerie` VALUES (1, 'test', 'test/');
INSERT INTO `galerie` VALUES (2, 'paris', 'kaliente_paris/');

-- --------------------------------------------------------

-- 
-- Structure de la table `livreor`
-- 
-- Création: Vendredi 18 Avril 2008 à 20:52
-- 

DROP TABLE IF EXISTS `livreor`;
CREATE TABLE IF NOT EXISTS `livreor` (
  `id` int(11) NOT NULL auto_increment,
  `pseudo` varchar(255) NOT NULL default '',
  `promo` varchar(50) NOT NULL default '',
  `message` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- 
-- Contenu de la table `livreor`
-- 

INSERT INTO `livreor` VALUES (1, 'Nanard', '2k10', 'genre j\\''me la pete');
INSERT INTO `livreor` VALUES (2, 'Nanard', '2k10', 'genre j\\''me la pete');
INSERT INTO `livreor` VALUES (3, 'alicia', 'Anciens', 'genre j\\''suis une ancienne c\\''es youuuuuuuuuuuuuuu');

-- --------------------------------------------------------

-- 
-- Structure de la table `news`
-- 
-- Création: Vendredi 18 Avril 2008 à 20:52
-- 

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL auto_increment,
  `titre` varchar(255) NOT NULL default '',
  `contenu` text NOT NULL,
  `timestamp` bigint(20) NOT NULL default '0',
  `pseudo` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Contenu de la table `news`
-- 

INSERT INTO `news` VALUES (1, 'iokhoijhio', 'iojiojio\r\njfsi\r\nf\r\nsdfwg\r\n\r\ndfgdw \\'' \\'' \\'' qfojr\\'' f\\"\\''jr fj\\''j fjs /GE/Rg;erg!e;!:tg\\";\\''zf$é$=t(iàç', 1208079051, '');
INSERT INTO `news` VALUES (2, 'Les JO à Pekin', '- La FIDH n\\''est évidemment pas d\\''accord. Nous sommes conscients que la Chine a accompli un certain nombre de progrès dans le domaine des droits de l\\''homme, en inscrivant notamment dans sa constitution que l\\''Etat doit respecter les droits humains, et en réformant la peine de mort. Mais le gouvernement chinois reste un régime autoritaire, totalitaire, qui réprime violemment les opposants et les dissidents. Le cas d\\''Hu Jia est emblématique de beaucoup d\\''autres. Il a été auditionné par le Parlement européen en novembre et arrêté en décembre : il n\\''y a donc eu aucun résultat pratique. La Chine a complètement ignoré les appels de la communauté internationale.\r\nElle ne respecte pas le minimum des libertés civiques, ni la liberté d\\''information, ni la liberté d\\''expression. Il s\\''agit de violations graves et massives. Il n\\''y a même pas en Chine de respect des lois, notamment concernant les évictions forcées dans les provinces. Le peuple chinois est contraint de réclamer le respect des lois par des pétitions.', 1208079352, '');

-- --------------------------------------------------------

-- 
-- Structure de la table `poker`
-- 
-- Création: Vendredi 18 Avril 2008 à 20:52
-- 

DROP TABLE IF EXISTS `poker`;
CREATE TABLE IF NOT EXISTS `poker` (
  `id` int(11) NOT NULL auto_increment,
  `pseudo` varchar(255) NOT NULL default '',
  `nom` varchar(255) NOT NULL default '',
  `prenom` varchar(255) NOT NULL default '',
  `promo` varchar(50) NOT NULL default '',
  `mail` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Contenu de la table `poker`
-- 

INSERT INTO `poker` VALUES (1, 'tutu', 'Bernabe', 'tutu', '2k10', '');

-- --------------------------------------------------------

-- 
-- Structure de la table `team`
-- 
-- Création: Jeudi 01 Mai 2008 à 18:18
-- Dernière modification: Jeudi 01 Mai 2008 à 18:18
-- 

DROP TABLE IF EXISTS `team`;
CREATE TABLE IF NOT EXISTS `team` (
  `id` int(11) NOT NULL auto_increment,
  `nom` varchar(255) NOT NULL default '',
  `prenom` varchar(255) NOT NULL default '',
  `descr` varchar(255) NOT NULL default '',
  `devise` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Contenu de la table `team`
-- 

        