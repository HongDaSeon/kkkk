-- phpMyAdmin SQL Dump
-- version 2.9.2
-- http://www.phpmyadmin.net
-- 
-- Serveur: localhost
-- G�n�r� le : Mercredi 16 Avril 2008 � 19:24
-- Version du serveur: 5.0.27
-- Version de PHP: 5.2.1
-- 
-- Base de donn�es: `kaliente`
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
(1, 'iokhoijhio', 'iojiojio\r\njfsi\r\nf\r\nsdfwg\r\n\r\ndfgdw \\'' \\'' \\'' qfojr\\'' f\\"\\''jr fj\\''j fjs /GE/Rg;erg!e;!:tg\\";\\''zf$�$=t(i��', 1208079051),
(2, 'Les JO � Pekin ', '- La FIDH n\\''est �videmment pas d\\''accord. Nous sommes conscients que la Chine a accompli un certain nombre de progr�s dans le domaine des droits de l\\''homme, en inscrivant notamment dans sa constitution que l\\''Etat doit respecter les droits humains, et en r�formant la peine de mort. Mais le gouvernement chinois reste un r�gime autoritaire, totalitaire, qui r�prime violemment les opposants et les dissidents. Le cas d\\''Hu Jia est embl�matique de beaucoup d\\''autres. Il a �t� auditionn� par le Parlement europ�en en novembre et arr�t� en d�cembre : il n\\''y a donc eu aucun r�sultat pratique. La Chine a compl�tement ignor� les appels de la communaut� internationale.\r\nElle ne respecte pas le minimum des libert�s civiques, ni la libert� d\\''information, ni la libert� d\\''expression. Il s\\''agit de violations graves et massives. Il n\\''y a m�me pas en Chine de respect des lois, notamment concernant les �victions forc�es dans les provinces. Le peuple chinois est contraint de r�clamer le respect des lois par des p�titions.', 1208079352);

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
