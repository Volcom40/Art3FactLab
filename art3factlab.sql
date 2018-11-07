-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  jeu. 27 sep. 2018 à 14:37
-- Version du serveur :  10.1.36-MariaDB-1~jessie
-- Version de PHP :  5.6.38-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `art3factlab`
--

-- --------------------------------------------------------

--
-- Structure de la table `activite`
--

CREATE TABLE `activite` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `nom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `activite`
--

INSERT INTO `activite` (`id`, `image`, `nom`) VALUES
(1, 'Activite1.jpg', 'Innovation'),
(2, 'Activite2.jpg', 'Créativité'),
(3, 'Activite3.jpg', 'Solutions durables'),
(4, 'Activite4.jpg', 'Ressourcerie'),
(5, 'Activite5.jpg', 'Robots'),
(6, 'Activite6.jpg', 'Recherche participative'),
(7, 'Activite7.jpg', 'Do It Yourself'),
(8, 'Activite8.jpg', 'Cohésion sociale');

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
(14, 'admin', 'svA8Mhj2QqHjw');

-- --------------------------------------------------------

--
-- Structure de la table `carousel`
--

CREATE TABLE `carousel` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `titre` text NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `carousel`
--

INSERT INTO `carousel` (`id`, `image`, `titre`, `description`) VALUES
(33, 'img-carousel.jpg', 'Mario publicae hominis C.', 'Dare Nam loco tantum pudore cum Qui deductum locum patris artibus aut Nam pudore deinde.'),
(28, 'img-carousel2.jpg', 'Sortietur in quod habere est.', ''),
(27, 'img-carousel3.jpg', '', '');

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
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `equipe`
--

INSERT INTO `equipe` (`id`, `image`, `nom`, `description`) VALUES
(5, 'PolOlory.jpg', 'Pol Olory', 'Cecidisse profecta post hortabatur febrium.'),
(6, 'Avatar1.jpg', 'Sabrina', 'Siquid dubium Gerontium dubium pondera.'),
(7, 'Avatar2.jpg', 'Thierry', 'Iudices adulescenti causa vellet causa.'),
(8, 'Avatar1.jpg', 'Bénédicte', '');

-- --------------------------------------------------------

--
-- Structure de la table `informations`
--

CREATE TABLE `informations` (
  `id` int(11) NOT NULL,
  `texte` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `informations`
--

INSERT INTO `informations` (`id`, `texte`) VALUES
(1, '1 Avenue de la gare'),
(4, '40100 Dax'),
(5, 'tel : 00 00 00 00 00'),
(6, 'Mail : MonMail@mail.fr');

-- --------------------------------------------------------

--
-- Structure de la table `machines`
--

CREATE TABLE `machines` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `nom` varchar(150) NOT NULL,
  `description` varchar(500) NOT NULL,
  `lien` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `machines`
--

INSERT INTO `machines` (`id`, `image`, `nom`, `description`, `lien`) VALUES
(5, 'machine1.jpg', 'Découpeuse laser', 'Iam virtutem ex consuetudine vitae sermonisque nostri interpretemur nec eam, ut quidam docti, verborum magnificentia metiamur virosque bonos eos, qui habentur, numeremus, Paulos, Catones, Galos, Scipiones, Philos; his communis vita contenta est; eos autem omittamus, qui omnino nusquam reperiuntur.', ''),
(7, 'machine2.jpg', 'Scanner 3D', 'Praetenturis quia praetenturis modi praetenturis flexo impetrasset huius servabantur adgressus autem quod servabantur quia stationibus.', 'https://youtu.be/hAHKlcLpg9c'),
(9, 'machine3.jpg', 'Fraiseuse', 'Cumque pertinacius ut legum gnarus accusatorem flagitaret atque sollemnia, doctus id Caesar libertatemque superbiam ratus tamquam obtrectatorem audacem excarnificari praecepit, qui ita evisceratus ut cruciatibus membra deessent, inplorans caelo iustitiam, torvum renidens fundato pectore mansit inmobilis nec se incusare nec quemquam alium passus et tandem nec confessus nec confutatus cum abiecto consorte poenali est morte multatus. et ducebatur intrepidus temporum iniquitati insultans.', 'https://youtu.be/deIz_OqZDQ0'),
(11, 'machine4.jpg', 'Découpe vinyl', 'Hierapoli Osdroenam vetere civitatibus adsurgit hac Samosata ut clementer hac et Euphratensis Osdroenam est vetere.', '');

-- --------------------------------------------------------

--
-- Structure de la table `partenaire`
--

CREATE TABLE `partenaire` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `lien` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `partenaire`
--

INSERT INTO `partenaire` (`id`, `image`, `lien`) VALUES
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
(20, 'Smalah.png', ''),
(21, 'Tazief.png', 'http://www.lyceeharountazieff.com/'),
(22, 'VilleSaintPaulLesDax.png', 'http://www.st-paul-les-dax.fr/');

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

CREATE TABLE `projets` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `lien` varchar(300) NOT NULL,
  `tags` varchar(500) DEFAULT NULL,
  `epingle` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `projets`
--

INSERT INTO `projets` (`id`, `image`, `description`, `lien`, `tags`, `epingle`) VALUES
(5, 'projet1.png', 'Iam virtutem ex consuetudine vitae sermonisque nostri interpretemur nec eam, ut quidam docti, verborum magnificentia metiamur virosque bonos eos, qui habentur, numeremus, Paulos, Catones, Galos, Scipiones, Philos; his communis vita contenta est; eos autem omittamus, qui omnino nusquam reperiuntur.', 'https://www.youtube.com/watch?v=-JRkULjFYHQ&t=30s', 'fantastique', 0),
(7, 'projet2.jpg', 'Praetenturis quia praetenturis modi praetenturis flexo impetrasset huius servabantur adgressus autem quod servabantur quia stationibus.', 'https://www.facebook.com/art3factlab/photos/a.777723885656506.1073741829.523934327702131/1399344533494435/?type=3', 'dessin', 0),
(9, 'projet3.jpg', 'Cumque pertinacius ut legum gnarus accusatorem flagitaret atque sollemnia, doctus id Caesar libertatemque superbiam ratus tamquam obtrectatorem audacem excarnificari praecepit, qui ita evisceratus ut cruciatibus membra deessent, inplorans caelo iustitiam, torvum renidens fundato pectore mansit inmobilis nec se incusare nec quemquam alium passus et tandem nec confessus nec confutatus cum abiecto consorte poenali est morte multatus. et ducebatur intrepidus temporum iniquitati insultans.', 'https://www.facebook.com/PoleEmploiLandes/photos/a.972423142819309.1073741831.952883691439921/1820484001346548/?type=3&theater', 'musique', 0),
(11, 'projet4.jpg', 'Hierapoli Osdroenam vetere civitatibus adsurgit hac Samosata ut clementer hac et Euphratensis Osdroenam est vetere.', '', 'nature', 0),
(25, 'projet5.jpg', 'Praeceps illius multa fortunas utilia quae eum ad utilia in propositum ut stimulos viam illius haec humanitatisque trudebat erga erga.', 'https://www.facebook.com/art3factlab/photos/a.777723885656506.1073741829.523934327702131/1409040159191539/?type=3', 'voiture', 1),
(26, 'projet6.jpg', 'Supergressa pseudothyrum socrus mediocrium orientis ut omnino misceri iam ut nec iam scelere ferebatur pseudothyrum repentina nobilis introducta adsecuta amore.', 'https://www.facebook.com/Tvlandes/videos/1682715411805596/UzpfSTUyMzkzNDMyNzcwMjEzMToxNzAzNTA5MTg5NzQ0NjMz/', 'nature', 0),
(27, 'projet7.jpg', 'Finxere exprimunt nixus fabulae flexeris liberorum suppetere feminas cirratas spectare quae ad nixus theatrales spectare spectare licet pedibus pavimenta suppetere.', 'https://www.facebook.com/art3factlab/photos/a.777723885656506.1073741829.523934327702131/1550989548329932/?type=3', 'artistique', 1),
(28, 'projet8.jpg', 'Inmensus bella senium usque circummurana nomine vitae trecentis tempus usque fretum reportavit erectus in ad tempus in discessit senium iuvenem Alpes aliquotiens inmensus discessit bella et discessit aliquotiens discessit inmensus.', 'https://www.facebook.com/art3factlab/photos/a.777723885656506.1073741829.523934327702131/1550989541663266/?type=3', 'paysage', 1);

-- --------------------------------------------------------

--
-- Structure de la table `reseauxsociaux`
--

CREATE TABLE `reseauxsociaux` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `lien` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reseauxsociaux`
--

INSERT INTO `reseauxsociaux` (`id`, `nom`, `lien`) VALUES
(1, 'Facebook', 'https://fr-fr.facebook.com/art3factlab/'),
(4, 'YouTube', 'https://www.youtube.com/channel/UCUk4gYNpxXoJwetSLWCSBTw');

-- --------------------------------------------------------

--
-- Structure de la table `titres`
--

CREATE TABLE `titres` (
  `id` int(11) NOT NULL,
  `section` varchar(100) NOT NULL,
  `titre` varchar(300) NOT NULL,
  `titreSecondaire` varchar(300) NOT NULL,
  `background` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `titres`
--

INSERT INTO `titres` (`id`, `section`, `titre`, `titreSecondaire`, `background`) VALUES
(1, 'activites', 'Nos secteurs d\'activité...', 'L\'atelier Art3fact lab : Une communauté très riche de compétences\r\n', 'Background1.jpg'),
(2, 'projets', 'Les différents projets de notre atelier...', 'L\'expérience de tous les adhérents du FabLab permet à l\'atelier de réaliser un grand nombre de projets des plus intéressants. Nous avons mis à votre disposition une petite liste composée de différents projets terminés.', 'Background2.jpg'),
(3, 'videos', 'L\'espace vidéo de notre atelier...', 'Vous trouverez ici un grand nombre de vidéos ayant des thématiques différentes. Certaines d\'entre elles sont accès tutoriel, d\'autres font office de présentation, d\'autres sont destinées à l\'apprentissage etc...', 'Background3.jpg'),
(4, 'equipe', 'L\'équipe du FabLab', 'Un ensemble de personnes gèrent l\'atelier pour permettre aux adhérents d\'avoir une expérience fiable et coordonnée dans la création de leur projet, qu\'il soit commun ou personnel.', 'Background4.jpg'),
(5, 'partenaires', 'Les partenaires du Lab.', 'Depuis sa création, l\'atelier Art3Fact Lab fut amené à travailler avec un bon nombre personnes sur un large panel de projets individuels ou collectifs. Vous trouverez ci-dessous tous nos partenaires avec qui nous avons collaboré.', 'Background1.jpg'),
(6, 'contact', 'Comment nous contacter ?', 'Si vous souhaitez nous contacter pour obtenir des informations sur l\'atelier, sur l\'encradement de vos projets\r\net/ou comment devenir adhérent au FabLab ou d\'autres choses, remplissez ce formulaire ci-dessous. Nous garantissons\r\nune réponse dans les plus bref délais.', 'Background2.jpg'),
(7, 'machines', 'Les différentes machines de l\'atelier', 'Avec le temps, le parc machine du FabLab n\'a pas cessé de croitre et nous sommes désormais capable de fournir des outils de qualité à nos adhérents', 'Background3.jpg'),
(8, 'footer1', 'Ou nous trouver ?', '', ''),
(9, 'footer2', 'Nous suivre ici', '', ''),
(10, 'footer3', 'Nos documents', '', ''),
(11, 'footer4', '© 2018 Copyright: Art3factLab - Pol Olory', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `url` varchar(500) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `description` varchar(300) NOT NULL,
  `tags` varchar(100) NOT NULL,
  `epingle` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `video`
--

INSERT INTO `video` (`id`, `url`, `titre`, `description`, `tags`, `epingle`) VALUES
(1, 'https://www.youtube.com/embed/drU4XSHjcM0', 'ART3FACT Lab Grand Dax', 'Description de cette première vidéo', 'Présentation, Art3Fact Lab, Travail collaboratif', 0),
(9, 'https://www.youtube.com/embed/pIz0jK3LoI0', 'Presentation CFQNC', 'Début de formation Conseiller médiateur numérique dans votre Fablab...', 'Formation', 0),
(10, 'https://www.youtube.com/embed/zPYV2gGpyaM', 'Tutoriel laser', 'Comment utiliser la découpeuse laser !', 'Tutoriel', 0),
(11, 'https://www.youtube.com/embed/GIYfzYZs1k8', 'Information IA', 'Chantier Formation Qualification Nouvelle Chance.', 'Information', 0),
(14, 'https://www.youtube.com/embed/-JRkULjFYHQ', 'Tutoriel  Inkscape', 'Apprendre à utiliser Inkscape pour créer des fichiers vectoriels pour la découpeuse laser ou le Plotteur /Traceur Vinyle', 'formation', 1),
(15, 'https://www.youtube.com/embed/VQV83OnyO4A', 'une journée au fablab', 'Une foisonnante journée de médiation dans votre fablab : Emilie réalise une vidéo sur la journée de transmission des savoirs mise en place par nos stagiaires conseillers médiateurs numériques !!', 'formation', 0),
(20, 'https://www.youtube.com/embed/G02McUvb1fw', 'Tutoriel Imprimante', 'Paphius quin etiam et Cornelius senatores, ambo venenorum artibus pravis se polluisse confessi, eodem pronuntiante Maximino sunt interfecti. pari sorte etiam procurator monetae extinctus est. Sericum enim et Asbolium supra dictos, quoniam cum hortaretur passim nominare, quos vellent, adiecta religio', 'tutoriel', 0),
(21, 'https://www.youtube.com/embed/j_jduRCSKYo', '30 astuces de génie', 'Cum autem commodis intervallata temporibus convivia longa et noxia coeperint apparari vel distributio sollemnium sportularum, anxia deliberatione tractatur an exceptis his quibus vicissitudo debetur, peregrinum invitari conveniet, et si digesto plene consilio id placuerit fieri, is adhibetur qui pro', 'astuces', 1);

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
-- Index pour la table `carousel`
--
ALTER TABLE `carousel`
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
-- Index pour la table `informations`
--
ALTER TABLE `informations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `machines`
--
ALTER TABLE `machines`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `partenaire`
--
ALTER TABLE `partenaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `projets`
--
ALTER TABLE `projets`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reseauxsociaux`
--
ALTER TABLE `reseauxsociaux`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `titres`
--
ALTER TABLE `titres`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `administrateur_site`
--
ALTER TABLE `administrateur_site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT pour la table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `equipe`
--
ALTER TABLE `equipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `informations`
--
ALTER TABLE `informations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `machines`
--
ALTER TABLE `machines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `partenaire`
--
ALTER TABLE `partenaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `projets`
--
ALTER TABLE `projets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `reseauxsociaux`
--
ALTER TABLE `reseauxsociaux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `titres`
--
ALTER TABLE `titres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
