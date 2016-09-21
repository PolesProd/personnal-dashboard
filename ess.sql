-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 21 Septembre 2016 à 15:37
-- Version du serveur :  10.1.8-MariaDB
-- Version de PHP :  5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ess`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(2) NOT NULL,
  `nom` varchar(10) DEFAULT NULL,
  `prenom` varchar(15) DEFAULT NULL,
  `fonction` varchar(100) DEFAULT NULL,
  `structure` varchar(51) DEFAULT NULL,
  `code_postal` int(5) DEFAULT NULL,
  `ville` varchar(23) DEFAULT NULL,
  `email` varchar(43) DEFAULT NULL,
  `lienThumb` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `fonction`, `structure`, `code_postal`, `ville`, `email`, `lienThumb`) VALUES
(1, 'ROBERT', 'Laurent ', 'Chargé de développement', 'CAPIC78 - Filia- WebForce3', 78114, 'Magny les Hameau', 'laurent.robert44@gmail.com', 'img/wf3.jpg'),
(2, 'CHAUVEAU', 'Fanny', 'Chargée de mission IAE DLA ESS', 'DIRECCTE IDF', 93300, 'Aubervilliers', 'fanny.chauveau@direccte.gouv', 'img/DIRECCTE.jpg'),
(3, 'JOSSE', 'Nicolas', 'développeur de projets', 'INITIATIVES 77', 77000, 'Melun', 'n.josse@initiatives77.org', 'img/initiative77.jpg'),
(4, 'GALA', 'Isabelle', 'Chargée de Relations Entreprises et Partenaires', 'Maison Intercommunale de l''Insertion et de l''Emploi', 77200, 'Torcy', 'isabelle.gala@m2ievm.com', 'img/m2ie.jpg'),
(5, 'BORENS', 'Clara', 'Directrice', 'AGOIE ', 95370, 'Montigny les Cormeilles', 'agoie_chantiers@yahoo.fr', 'img/AGOIE.jpg'),
(6, 'PÉNICAUD ', 'Patrick', 'Chef de projet FILIA', 'CAPIC78 - Filia- WebForce3', 78114, 'Magny les Hameau', 'valis@laposte.net', 'img/wf3.jpg'),
(7, 'PATRAT', 'Julie', 'Adjointe de direction', 'Maison Intercommunale de l''Insertion et de l''Emploi', 77200, 'Torcy', 'julie.patrat@m2ievm.com', 'img/m2ie.jpg'),
(8, 'WOUAQUET ', 'Thierry', 'Encadrant technique', 'AGOIE ', 95370, 'Montigny les Cormeilles', 'agoie.info@gmail.com', 'img/AGOIE.jpg'),
(9, 'BOULOT', 'Joel', 'Conseiller insertion professionnel ', 'CENTRE SOCIAL DU PAYS FERTOIS', 77260, 'La Ferte Sous Jouarre', 'emploi@cc-paysfertois.fr', 'img/paysFertois.jpg'),
(10, 'SAUNIER', 'Emmanuel', 'Directeur ', 'R2K La Licorne', 75019, 'Paris', 'emmanuel.saunier@r2k.coop', 'img/R2KLicorne.jpg'),
(11, 'MERCADAL', 'Séverine', 'Directrice adjointe', 'Régie de quartier du 19ème', 75019, 'Paris', 'severine.mercadal@rqparis19.org', 'img/rq19.jpg'),
(12, 'GIRAULT', 'Sylvie', 'Directrice en charge du Pôle emploi - formation', 'CENTRE SOCIAL DU PAYS FERTOIS', 77260, 'La Ferte Sous Jouarre', 'acif-direction@orange.fr', 'img/paysFertois.jpg'),
(13, 'SANFAUTE', 'Claudine', 'Responsable Pôle 3E UD 92', 'Direccte UD 92', 92022, 'Nanterre', 'claudine.sanfaute@direccte.gouv.fr', 'img/DIRECCTE.jpg'),
(14, 'MARONE', 'Mélinda', 'Adjointe Emploi', 'DIRECCTE IDF', 93016, 'Bobigny', 'melinda.marone@direccte.gouv.fr', 'img/DIRECCTE.jpg'),
(15, 'LEQUEUX', 'Sylviane', 'Chargée du suivi des SIAE', 'DIRECCTE IDF', 93016, 'Bobigny', 'sylviane.lequeux@direccte.gouv.fr', 'img/DIRECCTE.jpg'),
(16, 'PASQUEREAU', 'Claudie', 'Chargée de développement', 'APTIMA', 78100, 'Mantes la Jolie', 'aptima.communication@wanadoo.fr', 'img/aptima.jpg'),
(17, 'ANQUETIL', 'François', 'Chargé de projet', 'FACE Paris', 75020, 'Paris', 'f.anquetil@fondationface.org', 'img/FACE.jpg'),
(18, 'ARNAUNÉ', 'Jean-Christophe', 'Directeur de projet', 'ARES', 75020, 'Paris', 'jean-christophe.arnaune@ares-association.fr', 'img/ARES.jpg'),
(19, 'DEPRAT', 'Virginie Minh', 'Responsable pédagogique', 'L''île aux langues', 75018, 'Paris', 'vmdeprat@lial.fr', 'img/ileLangues.jpg'),
(20, 'CARPENTIER', 'Ludovic', 'Chargé de développement', 'L''île aux Langues', 75018, 'Paris', 'lcarpentier@lial.fr', 'img/ileLangues.jpg'),
(21, 'CAGNON', 'Véronique ', 'Chargée de mission ', 'Région Île-de-France', 75007, 'Paris', 'veronique.cagnon@iledefrance.fr ', 'img/IDF.jpg'),
(22, 'GUEPIN', 'Lucile', 'Chargée de mission', 'Territoire et Emploi TEREM', 75020, 'Paris', 'lucile.guepin@yahoo.fr', 'img/territoireEmplois.jpg'),
(23, 'LASSET', 'Gérald', 'Chargé de mission ESS', 'Région Île-de-France', 75007, 'Paris', 'gerald.lasset@iledefrance.fr', 'img/IDF.jpg'),
(24, 'ZELVERTE', 'Vinciane', 'Responsable d''exploitation', 'Acces - Ares', 75019, 'Paris', 'vinciane.zelverte@ares-association.fr', 'img/img/ARES.jpg'),
(25, 'PEPIN', 'Jean François', 'Chargé de projet - Facilitateur des clauses sociales d''insertion et d''emploi, Référent du Val d''Oise', 'Reflexes-95', 95260, 'Beaumont sur Oise', 'jf.pepin@reflexes-95.fr', 'img/reflexEmplois.jpg'),
(26, 'WAHNICH', 'Georges', 'Chargé de projet - Facilitateur des clauses sociales d''insertion et d''emploi', 'Reflexes-95', 95260, 'Beaumont sur Oise', 'g.wahnich@reflexes-95.fr', 'img/reflexEmplois.jpg'),
(27, 'VARAULT', 'Valerie ', 'Responsable service employeurs', 'Région Ile de France', 75014, 'Paris', 'valerie.varault@iledefrance.fr', 'img/IDF.jpg'),
(28, 'ROUSSELOT ', 'Christine', 'Facilitatrice Clauses sociales', 'Ensemble Paris Emploi Compétence', 75020, 'Paris', 'christine.rousselot@epec.paris', 'img/coorace.jpg'),
(29, 'GONNETAND', 'Martine ', 'Chargée de projets emploi et relations entreprises', 'Ensemble Paris Emploi Compétences ', 75010, 'Paris', 'martine.gonnetand@epec.paris', 'img/coorace.jpg');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
