-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 21 Septembre 2016 à 15:13
-- Version du serveur :  10.1.10-MariaDB
-- Version de PHP :  5.6.19

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
  `nom` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `prenom` varchar(15) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `fonction` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `structure` varchar(51) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `code_postal` int(5) DEFAULT NULL,
  `ville` varchar(23) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `email` varchar(43) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `lienThumb` varchar(128) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `fonction`, `structure`, `code_postal`, `ville`, `email`, `lienThumb`) VALUES
(1, 'ROBERT', 'Laurent ', 'ChargÃ© de dÃ©veloppement', 'CAPIC78 - Filia- WebForce3', 78114, 'Magny les Hameau', 'laurent.robert44@gmail.com', 'img/wf3.jpg'),
(2, 'CHAUVEAU', 'Fanny', 'ChargÃ©e de mission IAE DLA ESS', 'DIRECCTE IDF', 93300, 'Aubervilliers', 'fanny.chauveau@direccte.gouv', 'img/IDF.jpg'),
(3, 'JOSSE', 'Nicolas', 'dÃ©veloppeur de projets', 'INITIATIVES 77', 77000, 'Melun', 'n.josse@initiatives77.org', 'img/initiative77.jpg'),
(4, 'GALA', 'Isabelle', 'ChargÃ©e de Relations Entreprises et Partenaires', 'Maison Intercommunale de l''Insertion et de l''Emploi', 77200, 'Torcy', 'isabelle.gala@m2ievm.com', 'img/m2ie.jpg'),
(5, 'BORENS', 'Clara', 'Directrice', 'AGOIE ', 95370, 'Montigny les Cormeilles', 'agoie_chantiers@yahoo.fr', 'img/AGOIE.jpg'),
(6, 'PÃ‰NICAUD ', 'Patrick', 'Chef de projet FILIA', 'CAPIC78 - Filia- WebForce3', 78114, 'Magny les Hameau', 'valis@laposte.net', 'img/wf3.jpg'),
(7, 'PATRAT', 'Julie', 'Adjointe de direction', 'Maison Intercommunale de l''Insertion et de l''Emploi', 77200, 'Torcy', 'julie.patrat@m2ievm.com', ''),
(8, 'WOUAQUET ', 'Thierry', 'Encadrant technique', 'AGOIE ', 95370, 'Montigny les Cormeilles', 'agoie.info@gmail.com', ''),
(9, 'BOULOT', 'Joel', 'Conseiller insertion professionnel ', 'CENTRE SOCIAL DU PAYS FERTOIS', 77260, 'La Ferte Sous Jouarre', 'emploi@cc-paysfertois.fr', ''),
(10, 'SAUNIER', 'Emmanuel', 'Directeur ', 'R2K La Licorne', 75019, 'Paris', 'emmanuel.saunier@r2k.coop', ''),
(11, 'MERCADAL', 'SÃ©verine', 'Directrice adjointe', 'RÃ©gie de quartier du 19Ã¨me', 75019, 'Paris', 'severine.mercadal@rqparis19.org', ''),
(12, 'GIRAULT', 'Sylvie', 'Directrice en charge du PÃ´le emploi - formation', 'CENTRE SOCIAL DU PAYS FERTOIS', 77260, 'La Ferte Sous Jouarre', 'acif-direction@orange.fr', ''),
(13, 'SANFAUTE', 'Claudine', 'Responsable PÃ´le 3E UD 92', 'Direccte UD 92', 92022, 'Nanterre', 'claudine.sanfaute@direccte.gouv.fr', ''),
(14, 'MARONE', 'MÃ©linda', 'Adjointe Emploi', 'DIRECCTE Ile de France', 93016, 'Bobigny', 'melinda.marone@direccte.gouv.fr', ''),
(15, 'LEQUEUX', 'Sylviane', 'ChargÃ©e du suivi des SIAE', 'DIRECCTE Ile de France', 93016, 'Bobigny', 'sylviane.lequeux@direccte.gouv.fr', ''),
(16, 'PASQUEREAU', 'Claudie', 'ChargÃ©e de dÃ©veloppement', 'APTIMA', 78100, 'Mantes la Jolie', 'aptima.communication@wanadoo.fr', ''),
(17, 'ANQUETIL', 'FranÃ§ois', 'ChargÃ© de projet', 'FACE Paris', 75020, 'Paris', 'f.anquetil@fondationface.org', ''),
(18, 'ARNAUNÃ‰', 'Jean-Christophe', 'Directeur de projet', 'ARES', 75020, 'Paris', 'jean-christophe.arnaune@ares-association.fr', ''),
(19, 'DEPRAT', 'Virginie Minh', 'Responsable pÃ©dagogique', 'L''Ã®le aux langues', 75018, 'Paris', 'vmdeprat@lial.fr', ''),
(20, 'CARPENTIER', 'Ludovic', 'ChargÃ© de dÃ©veloppement', 'L''Ã®le aux Langues', 75018, 'Paris', 'lcarpentier@lial.fr', ''),
(21, 'CAGNON', 'VÃ©ronique ', 'ChargÃ©e de mission ', 'RÃ©gion ÃŽle-de-France', 75007, 'Paris', 'veronique.cagnon@iledefrance.fr ', ''),
(22, 'GUEPIN', 'Lucile', 'ChargÃ©e de mission', 'Territoire et Emploi TEREM', 75020, 'Paris', 'lucile.guepin@yahoo.fr', ''),
(23, 'LASSET', 'GÃ©rald', 'ChargÃ© de mission ESS', 'RÃ©gion ÃŽle-de-France', 75007, 'Paris', 'gerald.lasset@iledefrance.fr', ''),
(24, 'ZELVERTE', 'Vinciane', 'Responsable d''exploitation', 'Acces - Ares', 75019, 'Paris', 'vinciane.zelverte@ares-association.fr', ''),
(25, 'PEPIN', 'Jean FranÃ§ois', 'ChargÃ© de projet - Facilitateur des clauses sociales d''insertion et d''emploi, RÃ©fÃ©rent du Val d''O', 'Reflexes-95', 95260, 'Beaumont sur Oise', 'jf.pepin@reflexes-95.fr', ''),
(26, 'WAHNICH', 'Georges', 'ChargÃ© de projet - Facilitateur des clauses sociales d''insertion et d''emploi', 'Reflexes-95', 95260, 'Beaumont sur Oise', 'g.wahnich@reflexes-95.fr', ''),
(27, 'VARAULT', 'Valerie ', 'Responsable service employeurs', 'RÃ©gion Ile de France', 75014, 'Paris', 'valerie.varault@iledefrance.fr', ''),
(28, 'ROUSSELOT ', 'Christine', 'Facilitatrice Clauses sociales', 'Ensemble Paris Emploi CompÃ©tence', 75020, 'Paris', 'christine.rousselot@epec.paris', ''),
(29, 'GONNETAND', 'Martine ', 'ChargÃ©e de projets emploi et relations entreprises', 'Ensemble Paris Emploi CompÃ©tences ', 75010, 'Paris', 'martine.gonnetand@epec.paris', '');

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
