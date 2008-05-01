-- phpMyAdmin SQL Dump
-- version 2.6.1
-- http://www.phpmyadmin.net
-- 
-- Serveur: localhost
-- G�n�r� le : Jeudi 01 Mai 2008 � 19:56
-- Version du serveur: 4.1.9
-- Version de PHP: 4.3.10
-- 
-- Base de donn�es: `kaliente`
-- 

-- --------------------------------------------------------

-- 
-- Structure de la table `galerie`
-- 
-- Cr�ation: Jeudi 01 Mai 2008 � 17:12
-- Derni�re modification: Jeudi 01 Mai 2008 � 19:47
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
-- Cr�ation: Vendredi 18 Avril 2008 � 20:52
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
-- Cr�ation: Vendredi 18 Avril 2008 � 20:52
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

INSERT INTO `news` VALUES (1, 'iokhoijhio', 'iojiojio\r\njfsi\r\nf\r\nsdfwg\r\n\r\ndfgdw \\'' \\'' \\'' qfojr\\'' f\\"\\''jr fj\\''j fjs /GE/Rg;erg!e;!:tg\\";\\''zf$�$=t(i��', 1208079051, '');
INSERT INTO `news` VALUES (2, 'Les JO � Pekin', '- La FIDH n\\''est �videmment pas d\\''accord. Nous sommes conscients que la Chine a accompli un certain nombre de progr�s dans le domaine des droits de l\\''homme, en inscrivant notamment dans sa constitution que l\\''Etat doit respecter les droits humains, et en r�formant la peine de mort. Mais le gouvernement chinois reste un r�gime autoritaire, totalitaire, qui r�prime violemment les opposants et les dissidents. Le cas d\\''Hu Jia est embl�matique de beaucoup d\\''autres. Il a �t� auditionn� par le Parlement europ�en en novembre et arr�t� en d�cembre : il n\\''y a donc eu aucun r�sultat pratique. La Chine a compl�tement ignor� les appels de la communaut� internationale.\r\nElle ne respecte pas le minimum des libert�s civiques, ni la libert� d\\''information, ni la libert� d\\''expression. Il s\\''agit de violations graves et massives. Il n\\''y a m�me pas en Chine de respect des lois, notamment concernant les �victions forc�es dans les provinces. Le peuple chinois est contraint de r�clamer le respect des lois par des p�titions.', 1208079352, '');

-- --------------------------------------------------------

-- 
-- Structure de la table `poker`
-- 
-- Cr�ation: Vendredi 18 Avril 2008 � 20:52
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
-- Cr�ation: Jeudi 01 Mai 2008 � 18:18
-- Derni�re modification: Jeudi 01 Mai 2008 � 18:18
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

        