-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 19 Septembre 2016 à 17:21
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
  `id` int(2) DEFAULT NULL,
  `nom` varchar(10) DEFAULT NULL,
  `prenom` varchar(15) DEFAULT NULL,
  `fonction` varchar(100) DEFAULT NULL,
  `structure` varchar(51) DEFAULT NULL,
  `code_postal` int(5) DEFAULT NULL,
  `ville` varchar(23) DEFAULT NULL,
  `email` varchar(43) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `fonction`, `structure`, `code_postal`, `ville`, `email`) VALUES
(1, 'ROBERT', 'Laurent ', 'Chargé de développement', 'CAPIC78 - Filia- WebForce3', 78114, 'Magny les Hameau', 'laurent.robert44@gmail.com'),
(2, 'CHAUVEAU', 'Fanny', 'Chargée de mission IAE DLA ESS', 'DIRECCTE IDF', 93300, 'Aubervilliers', 'fanny.chauveau@direccte.gouv'),
(3, 'JOSSE', 'Nicolas', 'développeur de projets', 'INITIATIVES 77', 77000, 'Melun', 'n.josse@initiatives77.org'),
(4, 'GALA', 'Isabelle', 'Chargée de Relations Entreprises et Partenaires', 'Maison Intercommunale de l''Insertion et de l''Emploi', 77200, 'Torcy', 'isabelle.gala@m2ievm.com'),
(5, 'BORENS', 'Clara', 'Directrice', 'AGOIE ', 95370, 'Montigny les Cormeilles', 'agoie_chantiers@yahoo.fr'),
(6, 'PÉNICAUD ', 'Patrick', 'Chef de projet FILIA', 'CAPIC78 - Filia- WebForce3', 78114, 'Magny les Hameau', 'valis@laposte.net'),
(7, 'PATRAT', 'Julie', 'Adjointe de direction', 'Maison Intercommunale de l''Insertion et de l''Emploi', 77200, 'Torcy', 'julie.patrat@m2ievm.com'),
(8, 'WOUAQUET ', 'Thierry', 'Encadrant technique', 'AGOIE ', 95370, 'Montigny les Cormeilles', 'agoie.info@gmail.com'),
(9, 'BOULOT', 'Joel', 'Conseiller insertion professionnel ', 'CENTRE SOCIAL DU PAYS FERTOIS', 77260, 'La Ferte Sous Jouarre', 'emploi@cc-paysfertois.fr'),
(10, 'SAUNIER', 'Emmanuel', 'Directeur ', 'R2K La Licorne', 75019, 'Paris', 'emmanuel.saunier@r2k.coop'),
(11, 'MERCADAL', 'Séverine', 'Directrice adjointe', 'Régie de quartier du 19ème', 75019, 'Paris', 'severine.mercadal@rqparis19.org'),
(12, 'GIRAULT', 'Sylvie', 'Directrice en charge du Pôle emploi - formation', 'CENTRE SOCIAL DU PAYS FERTOIS', 77260, 'La Ferte Sous Jouarre', 'acif-direction@orange.fr'),
(13, 'SANFAUTE', 'Claudine', 'Responsable Pôle 3E UD 92', 'Direccte UD 92', 92022, 'Nanterre', 'claudine.sanfaute@direccte.gouv.fr'),
(14, 'MARONE', 'Mélinda', 'Adjointe Emploi', 'DIRECCTE Ile de France', 93016, 'Bobigny', 'melinda.marone@direccte.gouv.fr'),
(15, 'LEQUEUX', 'Sylviane', 'Chargée du suivi des SIAE', 'DIRECCTE Ile de France', 93016, 'Bobigny', 'sylviane.lequeux@direccte.gouv.fr'),
(16, 'PASQUEREAU', 'Claudie', 'Chargée de développement', 'APTIMA', 78100, 'Mantes la Jolie', 'aptima.communication@wanadoo.fr'),
(17, 'ANQUETIL', 'François', 'Chargé de projet', 'FACE Paris', 75020, 'Paris', 'f.anquetil@fondationface.org'),
(18, 'ARNAUNÉ', 'Jean-Christophe', 'Directeur de projet', 'ARES', 75020, 'Paris', 'jean-christophe.arnaune@ares-association.fr'),
(19, 'DEPRAT', 'Virginie Minh', 'Responsable pédagogique', 'L''île aux langues', 75018, 'Paris', 'vmdeprat@lial.fr'),
(20, 'CARPENTIER', 'Ludovic', 'Chargé de développement', 'L''île aux Langues', 75018, 'Paris', 'lcarpentier@lial.fr'),
(21, 'CAGNON', 'Véronique ', 'Chargée de mission ', 'Région Île-de-France', 75007, 'Paris', 'veronique.cagnon@iledefrance.fr '),
(22, 'GUEPIN', 'Lucile', 'Chargée de mission', 'Territoire et Emploi TEREM', 75020, 'Paris', 'lucile.guepin@yahoo.fr'),
(23, 'LASSET', 'Gérald', 'Chargé de mission ESS', 'Région Île-de-France', 75007, 'Paris', 'gerald.lasset@iledefrance.fr'),
(24, 'ZELVERTE', 'Vinciane', 'Responsable d''exploitation', 'Acces - Ares', 75019, 'Paris', 'vinciane.zelverte@ares-association.fr'),
(25, 'PEPIN', 'Jean François', 'Chargé de projet - Facilitateur des clauses sociales d''insertion et d''emploi, Référent du Val d''Oise', 'Reflexes-95', 95260, 'Beaumont sur Oise', 'jf.pepin@reflexes-95.fr'),
(26, 'WAHNICH', 'Georges', 'Chargé de projet - Facilitateur des clauses sociales d''insertion et d''emploi', 'Reflexes-95', 95260, 'Beaumont sur Oise', 'g.wahnich@reflexes-95.fr'),
(27, 'VARAULT', 'Valerie ', 'Responsable service employeurs', 'Région Ile de France', 75014, 'Paris', 'valerie.varault@iledefrance.fr'),
(28, 'ROUSSELOT ', 'Christine', 'Facilitatrice Clauses sociales', 'Ensemble Paris Emploi Compétence', 75020, 'Paris', 'christine.rousselot@epec.paris'),
(29, 'GONNETAND', 'Martine ', 'Chargée de projets emploi et relations entreprises', 'Ensemble Paris Emploi Compétences ', 75010, 'Paris', 'martine.gonnetand@epec.paris');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
