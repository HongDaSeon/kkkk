-- phpMyAdmin SQL Dump
-- version 2.6.1
-- http://www.phpmyadmin.net
-- 
-- Serveur: localhost
-- Généré le : Samedi 03 Mai 2008 à 12:21
-- Version du serveur: 4.1.9
-- Version de PHP: 4.3.10
-- 
-- Base de données: `kaliente`
-- 

-- --------------------------------------------------------

-- 
-- Structure de la table `galerie`
-- 

DROP TABLE IF EXISTS `galerie`;
CREATE TABLE IF NOT EXISTS `galerie` (
  `id` int(11) NOT NULL auto_increment,
  `nom` varchar(255) NOT NULL default '',
  `path` varchar(255) NOT NULL default '',
  `intitule` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

-- 
-- Contenu de la table `galerie`
-- 

INSERT INTO `galerie` VALUES (2, 'paris', 'kaliente_paris/', 'Kaliente à Paris');
INSERT INTO `galerie` VALUES (3, 'back', 'Back/', 'Back To School');
INSERT INTO `galerie` VALUES (4, 'christmas', 'christmas/', 'La Christmas');
INSERT INTO `galerie` VALUES (5, 'ski', 'ski/', 'Kaliente au ski');
INSERT INTO `galerie` VALUES (6, 'patinoire', 'patinoire/', 'Soirée patinoire');
INSERT INTO `galerie` VALUES (7, 'luna', 'luna/', 'Luna Rossa');
INSERT INTO `galerie` VALUES (8, 'cp', 'cergy_pau/', 'Cergy-Pau');
INSERT INTO `galerie` VALUES (11, 'londre', 'london/', 'Voyage à Londres');

-- --------------------------------------------------------

-- 
-- Structure de la table `livreor`
-- 

DROP TABLE IF EXISTS `livreor`;
CREATE TABLE IF NOT EXISTS `livreor` (
  `id` int(11) NOT NULL auto_increment,
  `pseudo` varchar(255) NOT NULL default '',
  `promo` varchar(50) NOT NULL default '',
  `message` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

-- 
-- Contenu de la table `livreor`
-- 

INSERT INTO `livreor` VALUES (5, '', '2k10', '');
INSERT INTO `livreor` VALUES (6, '', 'Anciens', '');
INSERT INTO `livreor` VALUES (7, '\\''', '2k10', '');
INSERT INTO `livreor` VALUES (8, 'Kristoff', '2k10', 'On va bientot ajaxer toussa, plus bueaaauuuuu');
INSERT INTO `livreor` VALUES (9, 'JéJé rulz', '2k10', 'Nanard tu roooox! mais moins que moi (k)');
INSERT INTO `livreor` VALUES (10, 'ninine', '2k10', 'je vote pour nous ...........');
INSERT INTO `livreor` VALUES (11, 'Marty', '2k10', 'Ca claque ou pas sur ce site?');
INSERT INTO `livreor` VALUES (12, 'little', '2k10', 'a refaire plus espacé l\\''intro et tout fin bon on verra tout ça on s\\''enfout pour l\\''instant... C\\''est bien je kiffe ^^. On pourra mettre la vidéo en ligne direct streaming???');
INSERT INTO `livreor` VALUES (13, 'Sheshe', '2k10', 'C de la bombe!');
INSERT INTO `livreor` VALUES (14, 'jaybee', '2k10', 'ca clak sa mère, gg les amis');
INSERT INTO `livreor` VALUES (15, 'Fanouk', '2k10', 'Très joli pour le moment, y a du bon boulot, merci!');
INSERT INTO `livreor` VALUES (16, 'Minipousse', '2k10', 'Bon boulot les gars ! Je vous félicite ! ');
INSERT INTO `livreor` VALUES (17, 'Kristoff', '2k10', 'Arrêtez d\\''écrire des conneries :p ');
INSERT INTO `livreor` VALUES (18, 'jéjé', '2k10', 'héhé le livre d\\''or de kaliente est plus actif que celui de dynamix ^^');
INSERT INTO `livreor` VALUES (19, '', '2k10', '');
INSERT INTO `livreor` VALUES (20, '', '', '');
INSERT INTO `livreor` VALUES (21, 'gyykug', '2k10', 'yugk');
INSERT INTO `livreor` VALUES (22, 'Martin', '2k10', 'bien le nouveau site');
INSERT INTO `livreor` VALUES (23, 'Moumoutte', '2k10', 'C\\''est du zoli, mais j\\''ai pas compris le truc chinois, ah ces chinois ils parlent vmt en chinois');
INSERT INTO `livreor` VALUES (24, 'nanard', '2k10', 'c\\''est pas chinoiiiiis ! :p');
INSERT INTO `livreor` VALUES (25, 'skapyo', '2k10', 'de mieu en mieu ça prend forme :) nice');
INSERT INTO `livreor` VALUES (26, 'marietta', 'Anciens', 'j\\''ai appris que quelqu\\''un ici a claqué mon volant ??? C KI ?? ET ARRETEZ CES BAVARDAGE OHHH !');
INSERT INTO `livreor` VALUES (27, 'little', '2k10', 'vi c\\''est plus jolie que le premier, ;) (y). Pour projet, ya barbec inter-promo de début d\\''année après le wei, tpeux mettre le wei, jéjé a penser a faire un convoir dans une école de commerce a la baule, ca serait excellent et pis vlà tournoi inter-promo en janvier, puis en mai car je trouve que c\\''est très sympa donc autant le faire deux fois ;)');
INSERT INTO `livreor` VALUES (28, 'Marty', '2k10', 'Euuu pour le volant c moi.. :( d\\''ailleurs mieux vos ne pas en parler dans le questionnaire je tiens a rester dans notre belle ecole merci :p');
INSERT INTO `livreor` VALUES (29, 'DarkMoule', '2k10', 'putain DJ mariet\\'' s\\''est introduit sur le site...\r\n\r\nc\\''est youf !');
INSERT INTO `livreor` VALUES (30, 'Fanouk', '2k10', 'Beau blabla sur le nouveau site qui déchire sa race!!');
INSERT INTO `livreor` VALUES (31, 'Twiolé', '2k10', 'Hum ca sent la liste par ici...');
INSERT INTO `livreor` VALUES (32, 'Bl0p', 'Anciens', 'BlopBlobloblopblopblopblop BLOP !');
INSERT INTO `livreor` VALUES (33, 'yoyo', '2k10', 'bravo les gars ! ');
INSERT INTO `livreor` VALUES (34, 'Twiolé', '2k9', 'Quel usurpateur a pris mon nom, dénoncez vous parce que ça sent aussi l\\''argent par ici!');
INSERT INTO `livreor` VALUES (35, 'DarkMoule', '2k10', 'faut ptet remplir les différents points abordés ici non ?');
INSERT INTO `livreor` VALUES (36, 'vannap', '2k10', 'non ils parlent pas tous chinois les chinois!!! \r\nc\\''est vraiment pas mal...\r\n\r\nbiiisous\r\n');
INSERT INTO `livreor` VALUES (37, 'KriKri', '2k10', 'test du changement de BDD');
INSERT INTO `livreor` VALUES (38, 'KriKri', '2k10', 'Voila une nouvelle BDD, vous pouvez la pourrir tant que vous voulez now !!!! ');
INSERT INTO `livreor` VALUES (39, 'KriKri', '2k10', 'Voila une nouvelle BDD, vous pouvez la pourrir tant que vous voulez now !!!! ');
INSERT INTO `livreor` VALUES (40, 'KriKri', '2k10', 'Voila une nouvelle BDD, vous pouvez la pourrir tant que vous voulez now !!!! ');
INSERT INTO `livreor` VALUES (41, 'BEUUUGGG', '2k10', 'Un petit beug mon cher nanard, quand on actualise la page :p, le POST reste :d');
INSERT INTO `livreor` VALUES (42, 'markhor', '2k10', 'jolie les photos de la journée');
INSERT INTO `livreor` VALUES (43, 'tututata', '2k10', 'dkzpefkazpeokaz');
INSERT INTO `livreor` VALUES (44, 'tututata', '2k10', 'dkzpefkazpeokaz');
INSERT INTO `livreor` VALUES (45, 'tututata', '2k10', 'dkzpefkazpeokaz');
INSERT INTO `livreor` VALUES (46, 't', '2k10', 'tf');
INSERT INTO `livreor` VALUES (47, 'r-uytut', '2k10', 'yutuy');
INSERT INTO `livreor` VALUES (48, 'lolboy', '2k10', 'sfdqdf');
INSERT INTO `livreor` VALUES (49, 'fthgf', '2k10', 'hgfgh');
INSERT INTO `livreor` VALUES (50, 'fthgf', '2k10', 'hgfgh');
INSERT INTO `livreor` VALUES (51, 'yjg', '2k10', 'yjgjy');
INSERT INTO `livreor` VALUES (52, 'tyf', '2k10', 'ytfty');
INSERT INTO `livreor` VALUES (53, 'tyf', '2k10', 'ytfty');
INSERT INTO `livreor` VALUES (54, 'ftyfytfytfty', '2k10', 'ftyftyftyftyfhtyfty');
INSERT INTO `livreor` VALUES (55, 'ftyfytfytfty', '2k10', 'ftyftyftyftyfhtyfty');
INSERT INTO `livreor` VALUES (56, 'ukhk', '2k10', 'bon fuck ca m\\''saoule osef du bug oO\r\ncelui qui fais F5 c\\''est un looooooooooooser s\\''tt');
INSERT INTO `livreor` VALUES (57, 'ifer', '2k10', 'test');
INSERT INTO `livreor` VALUES (58, 'ifer', '2k10', 'test\r\n');

-- --------------------------------------------------------

-- 
-- Structure de la table `news`
-- 

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL auto_increment,
  `titre` varchar(255) NOT NULL default '',
  `contenu` text NOT NULL,
  `timestamp` bigint(20) NOT NULL default '0',
  `pseudo` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- 
-- Contenu de la table `news`
-- 

INSERT INTO `news` VALUES (3, 'Journée de campagne', '    Un texte décrivant la campagne, mais de facon non explicite, sauf pour le tournois de poker avec le liens : http://www.bde-kaliente.fr/index.php?poker\r\n', 1208376219, 'Kristoff');
INSERT INTO `news` VALUES (5, 'Journée de pré-campagne', '\r\n    \r\n    \r\n    <h3>La Crêpe SMS !</h3>\r\n             <div class=\\''alinea\\''>  Le TD de Despina t\\''ennuie? Marre des cours de blop? Envoie Crêpe au 06******** avec la garniture de ton choix ainsi que la salle où tu es! Un agent Kaliente viendra te l\\''apporter dans les 5min!\r\n    </div>\r\n    \r\n    \r\n    \r\n    ', 1208445699, 'jéjé');

-- --------------------------------------------------------

-- 
-- Structure de la table `poker`
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

DROP TABLE IF EXISTS `team`;
CREATE TABLE IF NOT EXISTS `team` (
  `id` int(11) NOT NULL default '0',
  `nom` varchar(15) NOT NULL default '',
  `prenom` varchar(15) NOT NULL default '',
  `pseudo` varchar(15) NOT NULL default '',
  `date` varchar(10) NOT NULL default '',
  `lieu` varchar(100) NOT NULL default '',
  `assoc` text NOT NULL,
  `passion` text NOT NULL,
  `presentation` text NOT NULL,
  `devise` text NOT NULL,
  `path` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Contenu de la table `team`
-- 

INSERT INTO `team` VALUES (1, '', '', 'Kekette', '', '', '', '', '', '', 'boquet_kevin.jpg');
INSERT INTO `team` VALUES (2, '', '', 'Fanouk', '', '', '', '', '', '', 'abramatic_fanny.jpg');
INSERT INTO `team` VALUES (3, '', '', 'Chaton', '', '', '', '', '', '', 'trichet_yoann.JPG');
INSERT INTO `team` VALUES (4, '', '', 'Jéjé', '', '', '', '', '', '', 'fontaine_jeremy.jpg');
INSERT INTO `team` VALUES (5, '', '', 'Tiboo', '', '', '', '', '', '', 'muller_thibaut.jpg');
INSERT INTO `team` VALUES (6, '', '', 'Mika', '', '', '', '', '', '', 'faure_mickael.jpg');
INSERT INTO `team` VALUES (7, 'BERNABE', 'Thomas', 'Nanard', '11/11/1986', 'Menucourt', 'BDS : équipe de foot\r\n	', '    Kendo, Guitare, EISTI', '    Le Nanard, une espèce en voie de disparition! Classé dans la catégorie des "Grand singe", il se caractérise par une taille moyenne de 1m75 et d''un poids de 65kg. Sa durée de gestation est encore inconnue bien que certains scientifiques, les meilleurs qui plus est, se soient penchés sur la question, sans aucun résultat encore. Sa longévité  est d''une moyenne de 85ans, bien que sportif, le nanard se blesse facilement. Le noyau dur de l''espèce se situe à l''EISTI où il y prend un bon plaisir, un environnement stable et adapté à son développement.', ' Si tu donnes un poisson à un homme, il se nourrira une fois. Si tu lui apprends à pêcher, il se nourrira toute sa vie.', 'bernabe_thomas.JPG');
INSERT INTO `team` VALUES (8, '', '', 'Lily', '', '', '', '', '', '', 'urbain_aurelie.JPG');
INSERT INTO `team` VALUES (9, '', '', 'Moumoutte', '', '', '', '', '', '', 'victor_anais.JPG');
INSERT INTO `team` VALUES (10, '', '', 'Bastos', '', '', '', '', '', '', '');
INSERT INTO `team` VALUES (11, 'Le Loc', 'Martin', 'Marty', '15/02/1988', 'Chars', 'Jongl''Eisti\r\n	', 'Soirées <br />\r\nVoyages', '', 'Don''t worry, Be Happy!', 'leloc_martin.JPG');
INSERT INTO `team` VALUES (12, '', '', 'Sheshe', '', '', '', '', '', '', 'lafosse-marin_sheryl.JPG');
INSERT INTO `team` VALUES (13, 'Mikowsky', 'Lionel', 'Lio', '06/03/1987', 'JB la semaine, Paris le WE', 'Président Jongl''Eisti <br /> Vice-trésorier Voil''Eisti <br /> Trésorier Eistimate <br /> Pole Entreprise Liste BDE Kaliente\r\n	', 'Jonglerie, magie des cartes, Spi Dauphine 2008, dodo..', '', 'Il parait que l''avenir est dans tes rêves alors va te coucher, Coluche.', 'mikowsky_lionel.JPG');
INSERT INTO `team` VALUES (14, '', '', 'Clo', '', '', '', '', '', '', 'philip_clotilde.JPG');
INSERT INTO `team` VALUES (15, '', '', 'Sysy', '', '', '', '', '', '', 'martins_sylvie.JPG');
INSERT INTO `team` VALUES (16, 'Chaperon', 'Martin', 'Martin', '13/03/1987', 'Paris', 'exemple: assoc je suis ceci <br /> je suis cela    \r\n	', '    ', '    ', '    ', 'chaperon_martin.JPG');
INSERT INTO `team` VALUES (17, '', '', 'Jaybee', '', '', '', '', '', '', 'garcel_jb.JPG');
INSERT INTO `team` VALUES (18, '', '', 'Ninine', '', '', '', '', '', '', 'carriere_amandine.JPG');
INSERT INTO `team` VALUES (19, '', '', 'Little', '', '', '', '', '', '', 'petit_cedric.JPG');
INSERT INTO `team` VALUES (20, '', '', 'Lala', '', '', '', '', '', '', 'nebia_latefa.JPG');
INSERT INTO `team` VALUES (21, '', '', 'Benj', '', '', '', '', '', '', 'jude_benjamin.JPG');
INSERT INTO `team` VALUES (22, '', '', 'Dino', '', '', '', '', '', '', '');
INSERT INTO `team` VALUES (23, 'Yulzari', 'Mathieu', 'Markhor', '16/01/1985', 'Paris', 'Je suis présent à la Zoom pour faire les meilleurs photos de soirée et avoir un Year Book, <BR>   au BDS en tant que responsable du merveilleux Rugby et enfin <BR>  dans la compagnie des Fort-Scènes qui a fait une représentation cette année.', 'Mes passions sont le sport comme le Tennis, le Rugby ou encore le Ski.', 'Je suis une personne curieuse et investi dans le vie de l''école. J''adore apprendre des gens.', 'TeIbqsRDsP', 'yulzari_mathieu.JPG');
INSERT INTO `team` VALUES (24, '', '', 'Ssof', '', '', '', '', '', '', 'belkhadra_sofiane.JPG');
INSERT INTO `team` VALUES (25, '', '', 'Teckto', '', '', '', '', '', '', 'lombardo_romain.JPG');
INSERT INTO `team` VALUES (26, 'test', 'test', 'Krikri', '', '', 'exemple: assoc je suis ceci <br /> je suis cela    \r\n	', '    ', '    ', '    ', 'guerlus_christophe.JPG');
INSERT INTO `team` VALUES (27, '', '', 'Tonio', '', '', '', '', '', '', '');
INSERT INTO `team` VALUES (28, 'Resse', 'Romain', 'Darkmoule', '19/11/1987', 'Meulan', 'BDS rugby, foot <br /> 4L trophy\r\n	', 'EISTI :)', 'Grand, beau, musclé... euh bon ok j''arrete...\r\nA l''eisti depuis maintenant 3ans, j''ai pris goût à cette école. EISTI 4 EVER !!', 'verre vide je te plains, verre plein je te vide', 'resse_romain.JPG');
INSERT INTO `team` VALUES (29, '', '', 'Nigger', '', '', '', '', '', '', 'luit_dimitri.JPG');
        
        