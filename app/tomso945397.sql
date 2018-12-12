-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  ven. 16 nov. 2018 à 08:05
-- Version du serveur :  5.7.20-18-log
-- Version de PHP :  7.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tomso945397`
--

-- --------------------------------------------------------

--
-- Structure de la table `activite`
--

CREATE TABLE `activite` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `activite`
--

INSERT INTO `activite` (`id`, `image`, `title`, `description`) VALUES
(1, 'Activite1.jpg', 'Innovation', 'Description rapide de l\'activité.'),
(2, 'Activite2.jpg', 'Créativité', 'Description rapide de l\'activité.'),
(3, 'Activite3.jpg', 'Solutions durables', 'Description rapide de l\'activité.'),
(4, 'Activite4.jpg', 'Ressourcerie', 'Description rapide de l\'activité.'),
(5, 'Activite5.jpg', 'Robots', 'Description rapide de l\'activité.'),
(6, 'Activite6.jpg', 'Recherche participative', 'Description rapide de l\'activité.'),
(7, 'Activite7.jpg', 'Do It Yourself', 'Description rapide de l\'activité.'),
(8, 'Activite8.jpg', 'Cohésion sociale', 'Description rapide de l\'activité.');

-- --------------------------------------------------------

--
-- Structure de la table `administrateur_site`
--

CREATE TABLE `administrateur_site` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `administrateur_site`
--

INSERT INTO `administrateur_site` (`id`, `login`, `pass`) VALUES
(13, 'admin', 'svA8Mhj2QqHjw');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `url` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `image`, `url`) VALUES
(1, 'Locaux.png', 'https://www.google.fr/maps/place/ART3FACT+Lab/@43.7204249,-1.0523738,19z/data=!4m5!3m4!1s0xd56a61b185601ed:0x57bb5b512ad644b9!8m2!3d43.7203338!4d-1.0518803');

-- --------------------------------------------------------

--
-- Structure de la table `documents`
--

CREATE TABLE `documents` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `document` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `documents`
--

INSERT INTO `documents` (`id`, `nom`, `document`) VALUES
(1, 'F.A.Q.', 'faq.pdf'),
(2, 'Bulletin d\'adhésion', 'bulletin-adhesion.pdf'),
(3, 'Forfait machines', 'forfait-machines.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

CREATE TABLE `equipe` (
  `id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `titre` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `equipe`
--

INSERT INTO `equipe` (`id`, `image`, `nom`, `titre`) VALUES
(5, 'PolOlory.jpg', 'Pol Olory', 'Fab manager'),
(6, 'Avatar1.jpg', 'Sabrina', 'Graphiste'),
(7, 'Avatar2.jpg', 'Thierry', 'Infographiste'),
(8, 'Avatar1.jpg', 'Bénédicte', 'Technicien spécialisé');

-- --------------------------------------------------------

--
-- Structure de la table `etat`
--

CREATE TABLE `etat` (
  `id` int(11) NOT NULL,
  `Enom` varchar(50) NOT NULL,
  `color` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etat`
--

INSERT INTO `etat` (`id`, `Enom`, `color`) VALUES
(1, 'Disponible', 'green'),
(2, 'Utilisée', 'orange'),
(3, 'Réservée', 'orange'),
(4, 'En réparation', 'red'),
(5, 'Indisponible', 'red');

-- --------------------------------------------------------

--
-- Structure de la table `famille_machine`
--

CREATE TABLE `famille_machine` (
  `id` int(11) NOT NULL,
  `Fnom` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `famille_machine`
--

INSERT INTO `famille_machine` (`id`, `Fnom`, `image`) VALUES
(1, 'Imprimante 3D', 'imprimante-3D.jpg'),
(2, 'Scanner 3D', 'scanner-3D.jpg'),
(3, 'Découpe laser', 'decoupeuse-laser.jpg'),
(4, 'Fraiseuse 4 axes', 'fraiseuse-4-axes.jpg'),
(5, 'Tracer / Plotter Vinyle', 'gp5.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `famille_membre`
--

CREATE TABLE `famille_membre` (
  `id` int(11) NOT NULL,
  `Fnom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `famille_membre`
--

INSERT INTO `famille_membre` (`id`, `Fnom`) VALUES
(1, 'Administrateur'),
(2, 'Gérant'),
(3, 'Utilisateur'),
(4, 'Stagiaire'),
(5, 'Exterieur');

-- --------------------------------------------------------

--
-- Structure de la table `image_slide`
--

CREATE TABLE `image_slide` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `titre` text NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `image_slide`
--

INSERT INTO `image_slide` (`id`, `image`, `titre`, `description`) VALUES
(33, 'IMG_3365.jpg', '', ''),
(28, 'FabLab.DAX.26.06.15-®ANAKA-63.jpg', '', ''),
(27, 'FabLab.DAX.26.06.15-®ANAKA-76.jpg', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `informations`
--

CREATE TABLE `informations` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `url` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `informations`
--

INSERT INTO `informations` (`id`, `nom`, `url`) VALUES
(3, 'MonBlog', 'https://fr.jimdo.com/cr%C3%A9er-un-blog-gratuit/');

-- --------------------------------------------------------

--
-- Structure de la table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `logo`
--

INSERT INTO `logo` (`id`, `image`) VALUES
(1, 'LogoArt3Fact.png');

-- --------------------------------------------------------

--
-- Structure de la table `machine`
--

CREATE TABLE `machine` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `tarif_horaire_normal` int(11) NOT NULL,
  `tarif_horaire_reduit` int(11) DEFAULT NULL,
  `id_famille_machine` int(11) NOT NULL,
  `id_etat` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `description` varchar(700) NOT NULL,
  `url` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `machine`
--

INSERT INTO `machine` (`id`, `nom`, `tarif_horaire_normal`, `tarif_horaire_reduit`, `id_famille_machine`, `id_etat`, `image`, `description`, `url`) VALUES
(1, 'MakerBot', 10, 8, 1, 1, 'f-machine1.png', 'description', 'youtube.com'),
(2, 'RoVa3D', 10, 8, 1, 4, '719296.jpg', 'ythtyyht', 'facebook.com'),
(3, 'Epilog', 30, 20, 3, 1, 'fusion32m2-model.jpg', 'hytht', 'twitter.com'),
(4, 'David sls-2', 20, 15, 2, 1, 'David4.jpg', 'htyhtyh', 'youtube.com'),
(5, 'Roland mdx', 20, 15, 4, 1, 'Roland_MDX-40_large.jpg', 'hythyt', 'facebook.com'),
(6, 'Roland SP540V Versacamm', 10, 8, 5, 1, '$_86.JPG', '(y(y(yrty', 'youtube.com');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `age` int(11) DEFAULT NULL,
  `sexe` varchar(20) DEFAULT NULL,
  `profession` varchar(50) DEFAULT NULL,
  `societe` varchar(50) DEFAULT NULL,
  `adresse` varchar(50) DEFAULT NULL,
  `code_postal` int(11) DEFAULT NULL,
  `ville` varchar(50) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `mdp` varchar(4) NOT NULL DEFAULT '0000',
  `change_mdp` tinyint(1) NOT NULL DEFAULT '1',
  `id_famille_membre` int(11) NOT NULL,
  `tarif_reduit` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id`, `nom`, `prenom`, `age`, `sexe`, `profession`, `societe`, `adresse`, `code_postal`, `ville`, `mail`, `tel`, `mdp`, `change_mdp`, `id_famille_membre`, `tarif_reduit`) VALUES
(1, 'Olory', 'Pol', NULL, 'Homme', 'FabManager', 'Art3factLab', NULL, NULL, NULL, NULL, NULL, '0000', 0, 1, 0),
(2, 'Rossignol', 'Julien', 19, 'Homme', 'Etudiant', 'In\'tech Dax', '69 Impasse du Pinçan', 40990, 'St Paul lès Dax', 'juju.rossignol@sfr.fr', '0621011948', '0000', 0, 2, 1),
(3, 'Picard', 'Tom', 22, 'Homme', 'Etudiant', 'In\'tech Dax', NULL, NULL, 'Tethieu', NULL, NULL, '0000', 0, 3, 1),
(4, 'Touya', 'Nicolas', 0, 'Homme', 'Etudiant', 'In\'tech', NULL, NULL, NULL, NULL, NULL, '0000', 1, 4, 0),
(5, 'Rossignol', 'Fanny', 0, 'Femme', 'Responsable', 'Mondial Tissus', NULL, NULL, 'St Paul lès Dax', NULL, NULL, '0000', 1, 5, 0);

-- --------------------------------------------------------

--
-- Structure de la table `partenaire`
--

CREATE TABLE `partenaire` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `partenaire`
--

INSERT INTO `partenaire` (`id`, `image`, `link`) VALUES
(1, 'APIUP.png', 'http://dudechetaudesign.com/'),
(2, 'BGELandes.png', 'http://www.bge.asso.fr/'),
(3, 'Borda.png', 'http://lyceedeborda.org/'),
(4, 'CaisseDesDepots.png', 'http://www.caissedesdepots.fr'),
(5, 'CAPscience.png', 'http://www.cap-sciences.net/'),
(6, 'COHABIT.png', 'https://www.iut.u-bordeaux.fr/cohabit/'),
(7, 'DepartementLandes.png', 'https://www.landes.fr/'),
(8, 'Etabli.png', 'http://letabli.net/'),
(9, 'Fabrique.png', 'http://lafabbrique.org/'),
(10, 'GastonCrampe.png', 'http://www.citescolaire-aireadour.fr/'),
(11, 'INSUP.png', 'http://www.insup.org/'),
(12, 'InTech.png', 'https://www.intechinfo.fr/'),
(13, 'LogoGrandDax.png', 'http://www.grand-dax.fr/'),
(14, 'LogoPulseo.png', 'http://www.pulseo.fr/'),
(15, 'MissionLocale.png', 'http://www.missionlocaledeslandes.fr/'),
(16, 'NouvelleAquitaine.png', 'https://www.nouvelle-aquitaine.fr/'),
(17, 'Orthe.png', 'https://www.pays-orthe-arrigans.fr/'),
(19, 'PolEmploi.png', 'https://www.pole-emploi.fr/accueil/'),
(20, 'Smalah.png', 'http://www.la-smalah.com/fr/'),
(21, 'Tazief.png', 'http://www.lyceeharountazieff.com/'),
(22, 'VilleSaintPaulLesDax.png', 'http://www.st-paul-les-dax.fr/');

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE `projet` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `link` varchar(300) NOT NULL,
  `tags` varchar(500) DEFAULT NULL,
  `epingle` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`id`, `image`, `title`, `description`, `link`, `tags`, `epingle`) VALUES
(5, 'projet5.jpg', 'Projet numéro 5', 'Description projet numéro 5', 'https://www.facebook.com/art3factlab/photos/a.777723885656506.1073741829.523934327702131/1409040159191539/?type=3', 'bois', 1),
(7, 'projet7.jpg', 'Projet numéro 7', 'Description projet numéro 7', 'https://www.facebook.com/art3factlab/photos/a.777723885656506.1073741829.523934327702131/1550989548329932/?type=3', 'graffiti', 1),
(9, 'projet9.jpg', 'Projet numéro 9', 'Description projet numéro 9', 'https://www.facebook.com/art3factlab/photos/a.777723885656506.1073741829.523934327702131/1550989541663266/?type=3', 'bois', 0),
(11, 'projet2.jpg', 'Projet numéro 2', 'Description projet numéro 2', 'https://www.facebook.com/art3factlab/photos/a.777723885656506.1073741829.523934327702131/1399344533494435/?type=3', 'electronique', 0),
(16, '35070766_1820484004679881_2066764960351911936_n.jpg', 'activaction', 'boostez votre temps', 'https://www.facebook.com/PoleEmploiLandes/photos/a.972423142819309.1073741831.952883691439921/1820484001346548/?type=3&theater', 'emploi', 1),
(17, 'Capture d’écran 2018-06-13 à 16.33.32.png', 'tuto inkscape', 'apprendre inkscape', 'https://www.youtube.com/watch?v=-JRkULjFYHQ&t=30s', 'logiciel', 0),
(18, '34137603_1712663025495916_5583696087413161984_n.jpg', 'Présentoir à crayons en découpe laser', 'Présentoir réalisé par l\'Atelier du crayon', 'https://www.facebook.com/art3factlab/photos/pb.523934327702131.-2207520000.1528910837./1712663018829250/?type=3&theater', 'decoration, bois', 0),
(19, '32525876_378250672671443_6128814311579058176_n.jpg', 'NEST', 'Installation d\'art numérique comportemental', 'https://www.facebook.com/Tvlandes/videos/1682715411805596/UzpfSTUyMzkzNDMyNzcwMjEzMToxNzAzNTA5MTg5NzQ0NjMz/', 'art', 0);

-- --------------------------------------------------------

--
-- Structure de la table `reseaux_sociaux`
--

CREATE TABLE `reseaux_sociaux` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `url` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reseaux_sociaux`
--

INSERT INTO `reseaux_sociaux` (`id`, `nom`, `url`) VALUES
(3, 'Facebook', 'https://fr-fr.facebook.com/art3factlab/'),
(5, 'Youtube', 'https://www.youtube.com/channel/UCUk4gYNpxXoJwetSLWCSBTw'),
(6, 'Twitter', 'htpp://www.twitter.fr');

-- --------------------------------------------------------

--
-- Structure de la table `site_machine`
--

CREATE TABLE `site_machine` (
  `id` int(11) NOT NULL,
  `nom` varchar(500) NOT NULL,
  `description` varchar(1500) NOT NULL,
  `url` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `site_machine`
--

INSERT INTO `site_machine` (`id`, `nom`, `description`, `url`, `image`) VALUES
(1, 'MakerBot', 'La MakerBot Replicator+ s’impose clairement comme l’une des imprimante 3D les plus High Tech du marché. Elle dispose en effet d’un écran LCD permettant un contrôle de la machine simple et intuitif, d’un compartiment ingénieux pour placer la bobine, d’un plateau d’impression en verre pour une meilleure accroche des pièces et vous permet de lancer vos impressions en WIFI via une application dédiée!', 'https://www.makerbot.com/', 'f-machine1.png'),
(8, 'Epilog Fusion 32M2', 'Epilog s\'efforce d\'offrir le meilleur de ce qui est le plus important pour ses clients : qualité de l\'image, vitesse, fiabilité et facilité d\'utilisation. En employant uniquement des composants de la meilleure qualité, les systèmes Epilog sont mondialement réputés pour leur fiabilité et performances qui se traduisent par un gain de temps et de plus grands bénéfices pour nos clients. ', 'https://www.epiloglaser.fr/laser-machines/fusion-laser-series.htm', 'fusion32m2-model.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `titres`
--

CREATE TABLE `titres` (
  `id` int(11) NOT NULL,
  `section` varchar(100) NOT NULL,
  `titre` varchar(300) NOT NULL,
  `sousTitre` varchar(300) NOT NULL,
  `background` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `titres`
--

INSERT INTO `titres` (`id`, `section`, `titre`, `sousTitre`, `background`) VALUES
(1, 'activites', 'Les différentes activités de notre atelier !\r\n', 'Art3fact lab : Une communauté très riche de compétences', 'Background4.jpg'),
(2, 'projets', 'Ceci est le nouveau titre de cette section.', 'Ceci est le nouveau sous-titre de cette section.', 'Background2.jpg'),
(3, 'videos', 'L\'espace vidéo de notre atelier', 'Notre fablab en mouvement', 'Background3.jpg'),
(4, 'equipe', 'L\'équipe du FabLab', 'Un ensemble de personnes gèrent l\'atelier pour permettre aux adhérents d\'avoir une expérience fiable et coordonnée dans la création de leur projet, qu\'il soit commun ou personnel.', 'Background1.jpg'),
(5, 'partenaires', 'Les partenaires du Lab.', 'Depuis sa création, l\'atelier Art3Fact Lab fut amené à travailler avec un bon nombre personnes sur un large panel de projets individuels ou collectifs. Vous trouverez ci-dessous tous nos partenaires avec qui nous avons collaboré.', 'Background2.jpg'),
(6, 'contact', 'Comment nous contacter ?', 'Si vous souhaitez nous contacter pour obtenir des informations sur l\'atelier, sur l\'encradement de vos projets\r\net/ou comment devenir adhérent au FabLab ou d\'autres choses, remplissez ce formulaire ci-dessous. Nous garantissons\r\nune réponse dans les plus bref délais.', 'Background3.jpg'),
(7, 'machines', '', '', 'Background3.jpg'),
(8, 'footer1', 'Informations', '', ''),
(9, 'footer2', 'Documents', '', ''),
(10, 'footer3', 'Nous suivre', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `utilisation`
--

CREATE TABLE `utilisation` (
  `id` int(11) NOT NULL,
  `id_machine` int(11) NOT NULL,
  `id_membre` int(11) NOT NULL,
  `date_deb` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisation`
--

INSERT INTO `utilisation` (`id`, `id_machine`, `id_membre`, `date_deb`) VALUES
(8, 3, 3, '2018-06-13 07:11:37');

-- --------------------------------------------------------

--
-- Structure de la table `utiliser`
--

CREATE TABLE `utiliser` (
  `id_machine` int(11) NOT NULL,
  `id_membre` int(11) NOT NULL,
  `temps_utilisation` int(11) NOT NULL,
  `date_utilisation` datetime NOT NULL,
  `paye` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utiliser`
--

INSERT INTO `utiliser` (`id_machine`, `id_membre`, `temps_utilisation`, `date_utilisation`, `paye`) VALUES
(1, 1, 0, '2018-06-13 14:43:29', 1),
(1, 1, 0, '2018-06-29 08:37:14', 1),
(1, 1, 0, '2018-06-29 08:39:15', 1),
(1, 1, 0, '2018-06-29 08:40:25', 1),
(1, 1, 0, '2018-06-29 08:48:59', 1),
(1, 1, 2, '2018-07-01 15:19:09', 0),
(1, 1, 0, '2018-07-04 07:25:18', 0),
(1, 2, 192, '2018-06-12 08:22:20', 1),
(1, 2, 34, '2018-07-10 12:39:32', 0),
(1, 3, 13, '2018-06-11 14:21:35', 1),
(1, 3, 265, '2018-06-13 07:05:45', 1),
(1, 3, 0, '2018-06-19 13:38:55', 1),
(2, 3, 60, '2018-06-11 13:51:18', 1),
(3, 2, 122, '2018-06-11 16:56:27', 1),
(3, 2, 0, '2018-06-13 07:18:14', 1),
(3, 3, 0, '2018-06-12 20:04:41', 1),
(3, 4, 31, '2018-06-11 14:12:39', 1),
(4, 3, 0, '2018-06-13 07:11:15', 1),
(5, 1, 182, '2018-06-11 11:53:12', 1),
(5, 3, 0, '2018-06-12 20:02:46', 1),
(5, 3, 144, '2018-06-13 11:33:15', 1),
(6, 3, 26, '2018-06-12 10:43:00', 1),
(6, 3, 927, '2018-06-12 20:03:26', 1);

-- --------------------------------------------------------

--
-- Structure de la table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `url` varchar(500) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(300) NOT NULL,
  `tags` varchar(100) NOT NULL,
  `epingle` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `video`
--

INSERT INTO `video` (`id`, `url`, `title`, `description`, `tags`, `epingle`) VALUES
(1, 'https://www.youtube.com/embed/drU4XSHjcM0', 'ART3FACT Lab Grand Dax', 'Description de cette première vidéo', 'Présentation, Art3Fact Lab, Travail collaboratif', 0),
(9, 'https://www.youtube.com/embed/pIz0jK3LoI0', 'Presentation CFQNC', 'Début de formation Conseiller médiateur numérique dans votre Fablab...', 'Formation', 0),
(10, 'https://www.youtube.com/embed/zPYV2gGpyaM', 'Tutoriel laser', 'Comment utiliser la découpeuse laser !', 'Tutoriel', 1),
(11, 'https://www.youtube.com/embed/GIYfzYZs1k8', 'Information IA', 'Chantier Formation Qualification Nouvelle Chance.', 'Information', 0),
(14, 'https://www.youtube.com/embed/-JRkULjFYHQ', 'Tutoriel  Inkscape', 'Apprendre à utiliser Inkscape pour créer des fichiers vectoriels pour la découpeuse laser ou le Plotteur /Traceur Vinyle', 'formation', 1),
(15, 'https://www.youtube.com/embed/VQV83OnyO4A', 'une journée au fablab', 'Une foisonnante journée de médiation dans votre fablab : Emilie réalise une vidéo sur la journée de transmission des savoirs mise en place par nos stagiaires conseillers médiateurs numériques !!', 'formation', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `activite`
--
ALTER TABLE `activite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `administrateur_site`
--
ALTER TABLE `administrateur_site`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `equipe`
--
ALTER TABLE `equipe`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `etat`
--
ALTER TABLE `etat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `famille_machine`
--
ALTER TABLE `famille_machine`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `famille_membre`
--
ALTER TABLE `famille_membre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `image_slide`
--
ALTER TABLE `image_slide`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `informations`
--
ALTER TABLE `informations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `machine`
--
ALTER TABLE `machine`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_machine_famille_machine` (`id_famille_machine`),
  ADD KEY `FK_machine_etat` (`id_etat`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_membre_famille_membre` (`id_famille_membre`);

--
-- Index pour la table `partenaire`
--
ALTER TABLE `partenaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reseaux_sociaux`
--
ALTER TABLE `reseaux_sociaux`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `site_machine`
--
ALTER TABLE `site_machine`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `titres`
--
ALTER TABLE `titres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisation`
--
ALTER TABLE `utilisation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_machine` (`id_machine`),
  ADD KEY `id_membre` (`id_membre`);

--
-- Index pour la table `utiliser`
--
ALTER TABLE `utiliser`
  ADD PRIMARY KEY (`id_machine`,`id_membre`,`date_utilisation`) USING BTREE,
  ADD KEY `FK_utiliser_membre` (`id_membre`);

--
-- Index pour la table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `activite`
--
ALTER TABLE `activite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `administrateur_site`
--
ALTER TABLE `administrateur_site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `equipe`
--
ALTER TABLE `equipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `etat`
--
ALTER TABLE `etat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `famille_machine`
--
ALTER TABLE `famille_machine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `famille_membre`
--
ALTER TABLE `famille_membre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `image_slide`
--
ALTER TABLE `image_slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT pour la table `informations`
--
ALTER TABLE `informations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `machine`
--
ALTER TABLE `machine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `partenaire`
--
ALTER TABLE `partenaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `projet`
--
ALTER TABLE `projet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `reseaux_sociaux`
--
ALTER TABLE `reseaux_sociaux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `site_machine`
--
ALTER TABLE `site_machine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `titres`
--
ALTER TABLE `titres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `utilisation`
--
ALTER TABLE `utilisation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `machine`
--
ALTER TABLE `machine`
  ADD CONSTRAINT `FK_machine_etat` FOREIGN KEY (`id_etat`) REFERENCES `etat` (`id`),
  ADD CONSTRAINT `FK_machine_famille_machine` FOREIGN KEY (`id_famille_machine`) REFERENCES `famille_machine` (`id`);

--
-- Contraintes pour la table `membre`
--
ALTER TABLE `membre`
  ADD CONSTRAINT `FK_membre_famille_membre` FOREIGN KEY (`id_famille_membre`) REFERENCES `famille_membre` (`id`);

--
-- Contraintes pour la table `utilisation`
--
ALTER TABLE `utilisation`
  ADD CONSTRAINT `utilisation_ibfk_1` FOREIGN KEY (`id_machine`) REFERENCES `machine` (`id`),
  ADD CONSTRAINT `utilisation_ibfk_2` FOREIGN KEY (`id_membre`) REFERENCES `membre` (`id`);

--
-- Contraintes pour la table `utiliser`
--
ALTER TABLE `utiliser`
  ADD CONSTRAINT `FK_utiliser_machine` FOREIGN KEY (`id_machine`) REFERENCES `machine` (`id`),
  ADD CONSTRAINT `FK_utiliser_membre` FOREIGN KEY (`id_membre`) REFERENCES `membre` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
