-- phpMyAdmin SQL Dump
-- version 2.9.2
-- http://www.phpmyadmin.net
-- 
-- Serveur: localhost
-- Généré le : Mercredi 16 Avril 2008 à 19:24
-- Version du serveur: 5.0.27
-- Version de PHP: 5.2.1
-- 
-- Base de données: `kaliente`
-- 

-- --------------------------------------------------------

-- 
-- Structure de la table `livreor`
-- 

CREATE TABLE `livreor` (
  `id` int(11) NOT NULL auto_increment,
  `pseudo` varchar(255) NOT NULL,
  `promo` varchar(50) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- 
-- Contenu de la table `livreor`
-- 

INSERT INTO `livreor` (`id`, `pseudo`, `promo`, `message`) VALUES 
(1, 'Nanard', '2k10', 'genre j\\''me la pete'),
(2, 'Nanard', '2k10', 'genre j\\''me la pete'),
(3, 'alicia', 'Anciens', 'genre j\\''suis une ancienne c\\''es youuuuuuuuuuuuuuu');

-- --------------------------------------------------------

-- 
-- Structure de la table `news`
-- 

CREATE TABLE `news` (
  `id` int(11) NOT NULL auto_increment,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `timestamp` bigint(20) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Contenu de la table `news`
-- 

INSERT INTO `news` (`id`, `titre`, `contenu`, `timestamp`) VALUES 
(1, 'iokhoijhio', 'iojiojio\r\njfsi\r\nf\r\nsdfwg\r\n\r\ndfgdw \\'' \\'' \\'' qfojr\\'' f\\"\\''jr fj\\''j fjs /GE/Rg;erg!e;!:tg\\";\\''zf$é$=t(iàç', 1208079051),
(2, 'Les JO à Pekin ', '- La FIDH n\\''est évidemment pas d\\''accord. Nous sommes conscients que la Chine a accompli un certain nombre de progrès dans le domaine des droits de l\\''homme, en inscrivant notamment dans sa constitution que l\\''Etat doit respecter les droits humains, et en réformant la peine de mort. Mais le gouvernement chinois reste un régime autoritaire, totalitaire, qui réprime violemment les opposants et les dissidents. Le cas d\\''Hu Jia est emblématique de beaucoup d\\''autres. Il a été auditionné par le Parlement européen en novembre et arrêté en décembre : il n\\''y a donc eu aucun résultat pratique. La Chine a complètement ignoré les appels de la communauté internationale.\r\nElle ne respecte pas le minimum des libertés civiques, ni la liberté d\\''information, ni la liberté d\\''expression. Il s\\''agit de violations graves et massives. Il n\\''y a même pas en Chine de respect des lois, notamment concernant les évictions forcées dans les provinces. Le peuple chinois est contraint de réclamer le respect des lois par des pétitions.', 1208079352);

-- --------------------------------------------------------

-- 
-- Structure de la table `poker`
-- 

CREATE TABLE `poker` (
  `id` int(11) NOT NULL auto_increment,
  `pseudo` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `promo` varchar(50) NOT NULL,
  `mail` varchar(320) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Contenu de la table `poker`
-- 

INSERT INTO `poker` (`id`, `pseudo`, `nom`, `prenom`, `promo`, `mail`) VALUES 
(1, 'tutu', 'Bernabe', 'tutu', '2k10', '');
