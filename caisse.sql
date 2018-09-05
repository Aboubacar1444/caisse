-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mer. 05 sep. 2018 à 09:46
-- Version du serveur :  5.5.57-log
-- Version de PHP :  7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `caisse`
--

-- --------------------------------------------------------

--
-- Structure de la table `depense`
--

CREATE TABLE `depense` (
  `id` int(11) NOT NULL,
  `ref` varchar(11) NOT NULL,
  `datee` date NOT NULL,
  `mtchiffre` double NOT NULL,
  `libelleop` varchar(75) NOT NULL,
  `mtlettre` varchar(75) NOT NULL,
  `signdirection` varchar(20) NOT NULL,
  `caissier` varchar(20) NOT NULL,
  `benef` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `depense`
--

INSERT INTO `depense` (`id`, `ref`, `datee`, `mtchiffre`, `libelleop`, `mtlettre`, `signdirection`, `caissier`, `benef`) VALUES
(3, '201', '2018-04-19', 520, 'FRAIS DEPLACEMENT MR HICHAM', ' Cinq Cents Vingt Dirhams', 'OK', 'OK', 'OK'),
(4, '202', '2018-04-19', 39, 'FRAIS DE RÉCEPTION CLIENTS', ' Trente-Neuf Dirhams', 'OK', 'OK', 'OK'),
(5, '203', '2018-04-19', 530, 'LOCATION ECHELLE', ' Cinq Cents Trente Dirhams', 'OK', 'OK', 'OK'),
(6, '204', '2018-04-19', 220, 'FRAIS DÉPLACEMENT MR HICHAM', ' Deux Cents Vingt Dirhams', 'OK', 'OK', 'OK'),
(7, '205', '2018-04-20', 498, 'FRAIS DE RÉCEPTION CLIENTS', ' Quatre Cents Quatre-vingt-Dix-huit Dirhams', 'OK', 'OK', 'OK'),
(8, '206', '2018-04-20', 150, 'ENTRETIEN MAT ROULANT', ' Cent Cinquante Dirhams', 'OK', 'OK', 'OK'),
(9, '207', '2018-04-20', 300, 'ENTRETIEN MAT ROULANT', ' Trois Cents Dirhams', 'OK', 'OK', 'OK'),
(10, '208', '2018-04-20', 68, 'FRAIS DE RÉCEPTION CLIENTS', ' Soixante-Huit Dirhams', 'OK', 'OK', 'OK'),
(11, '209', '2018-04-20', 2000, 'FRAIS DÉPLACEMENT ÉLECTRICIEN', ' Deux Mille Dirhams', 'OK', 'OK', 'OK'),
(12, '210', '2018-04-20', 430, 'ENTRETIEN VELOMOTEUR', ' Quatre Cents Trente Dirhams', 'OK', 'OK', 'OK'),
(13, '211', '2018-04-20', 500, 'ANNONCE', ' Cinq Cents Dirhams', 'OK', 'OK', 'OK'),
(14, '212', '2018-04-20', 149, 'FRAIS DEPLACEMENT OHY', ' Cent Quarante-Neuf Dirhams', 'OK', 'OK', 'OK'),
(15, '213', '2018-05-02', 156, 'FRAIS DE RÉCEPTION CLIENTS', ' Cent Cinquante-Six Dirhams', 'OK', 'OK', 'OK'),
(17, '214', '2018-05-02', 2500, 'ENTRETIEN MATÉRIEL USINE', ' Deux Mille Cinq Cents Dirhams', 'OK', 'OK', 'OK'),
(18, '215', '2018-05-09', 18.5, 'FRAIS DE RÉCEPTION CLIENTS', ' Dix-huit Dirhams et Cinquante centimes', 'OK', 'OK', 'OK'),
(19, '216', '2018-05-14', 2300, 'ENTRETIEN MAT ROULANT', ' Deux Mille Trois Cents Dirhams', 'OK', 'OK', 'OK'),
(20, '217', '2018-05-17', 1250, 'ENTRETIEN MATÉRIEL USINE', ' Mille Deux Cents Cinquante Dirhams', 'OK', 'OK', 'OK'),
(21, '218', '2018-05-17', 480, 'FRAIS DÉPLACEMENT MR QUANNEBI', ' Quatre Cents Quatre-vingts Dirhams', 'OK', 'OK', 'OK'),
(22, '219', '2018-05-18', 80, 'ACHAT CABLE /APPAREIL TELEPHONIQUE', ' Quatre-vingts Dirhams', 'OK', 'OK', 'OK'),
(23, '220', '2018-05-18', 150, 'ACHAT CHARGEUR /PC', ' Cent Cinquante Dirhams', 'OK', 'OK', 'OK'),
(24, '221', '2018-05-18', 84, 'ENTRETIEN MATÉRIEL USINE', ' Quatre-vingt-Quatre Dirhams', 'OK', 'OK', 'OK'),
(25, '222', '2018-05-22', 75, 'ENTRETIEN  MATÉRIEL ELECTRIQUE', ' Soixante-Quinze Dirhams', 'OK', 'OK', 'OK'),
(26, '223', '2018-06-01', 400, 'CARTE DE RECHARGE KOUAIT', ' Quatre Cents Dirhams', 'OK', 'OK', 'OK'),
(27, '224', '2018-06-01', 46, 'FRAIS DE AUTO ROUTE', ' Quarante-Six Dirhams', 'OK', 'OK', 'OK'),
(28, '225', '2018-06-01', 10, 'ACHAT DE DEUX LAMPES VOITURE HASSANI', ' Dix Dirhams', 'OK', 'OK', 'OK'),
(29, '226', '2018-06-01', 330, 'FRAIS DÉPLACEMENT MR QUANNEBI ET MR BHAIH/MEKNÈS', ' Trois Cents Trente Dirhams', 'OK', 'OK', 'OK'),
(30, '227', '2018-06-01', 138, 'FRAIS DE AUTO ROUTE', ' Cent Trente-Huit Dirhams', 'OK', 'OK', 'OK'),
(31, '228', '2018-06-01', 50, 'ANCFCC QUITTANCE N° 721192', ' Cinquante Dirhams', 'OK', 'OK', 'OK'),
(32, '229', '2018-06-01', 15, 'FRAIS DE PHOTOCOPIES', ' Quinze Dirhams', 'OK', 'OK', 'OK'),
(33, '230', '2018-06-01', 30, 'ACHAT DE DEUX LAMPES VOITURES HASSANI', ' Trente Dirhams', 'OK', 'OK', 'OK'),
(34, '231', '2018-06-01', 68, 'FRAIS DE SPIRALES', ' Soixante-Huit Dirhams', 'OK', 'OK', 'OK'),
(35, '232', '2018-06-01', 24, 'FRAIS DE SPIRALES', ' Vingt-Quatre Dirhams', 'OK', 'OK', 'OK'),
(36, '233', '2018-06-01', 11, 'ACHAT DE DEUX PILES', ' Onze Dirhams', 'OK', 'OK', 'OK'),
(37, '234', '2018-06-01', 165, 'ANCFCC QUITTANCE N° 721332', ' Cent Soixante-Cinq Dirhams', 'OK', 'OK', 'OK'),
(38, '235', '2018-06-01', 108.27, 'ACHAT D\'UN FLOTEUR', ' Cent Huit Dirhams et Vingt-Sept centimes', 'OK', 'OK', 'OK'),
(39, '236', '2018-06-01', 174.43, 'ACHAT PLAQUE CHAUFFANTE', ' Cent Soixante-Quatorze Dirhams et Quarante-Trois centimes', 'OK', 'OK', 'OK'),
(40, '237', '2018-06-04', 952.37, 'VACCINATION MENINGITE MR BHAIH\r\n', ' Neuf Cents Cinquante-Deux Dirhams et Trente-Sept centimes', 'OK', 'OK', 'OK'),
(41, '238', '2018-06-05', 833.5, 'ACHAT TIMBRE VISA CAMEROUN MR BHAIH\r\n', ' Huit Cents Trente-Trois Dirhams et Cinquante centimes', 'OK', 'OK', 'OK'),
(42, '239', '2018-06-05', 40, 'ACHAT TOMPO/DEUX COPIES PLAN\r\n', ' Quarante Dirhams', 'OK', 'OK', 'OK'),
(43, '240', '2018-06-13', 72.78, 'PRODUITS D\'ENTRETIEN BUREAU', ' Soixante-Douze Dirhams et Soixante-Dix-huit centimes', 'OK', 'OK', 'OK'),
(44, '241', '2018-06-13', 46, 'AUTO ROUTE FRAIS DÉPÔT NEGERIA', ' Quarante-Six Dirhams', 'OK', 'OK', 'OK'),
(45, '242', '2018-06-13', 24, 'ACHAT DE TROIS SEPLIERE', ' Vingt-Quatre Dirhams', 'OK', 'OK', 'OK'),
(46, '243', '2018-06-18', 40, 'ACHAT PEAU DE CHAMEAU', ' Quarante Dirhams', 'OK', 'OK', 'OK'),
(47, '244', '2018-06-20', 909, 'DOSSIER NEGERIA 10908392', ' Neuf Cents Neuf Dirhams', 'OK', 'OK', 'OK'),
(48, '245', '2018-06-21', 20, 'CREVAISON/99864A7', ' Vingt Dirhams', 'OK', 'OK', 'OK'),
(49, '246', '2018-06-22', 36, 'FRAIS DE RÉCEPTION CLIENT ', ' Trente-Six Dirhams', 'OK', 'OK', 'OK'),
(50, '247', '2018-06-22', 10, 'ENTRETIEN  MAT ELECTRIQUE', ' Dix Dirhams', 'OK', 'OK', 'OK'),
(51, '248', '2018-06-22', 1100, '4 NETTOYAGE ET LUSTRAGE ( ENTRETIEN MAT ROULANT)', ' Mille Cent Dirhams', 'OK', 'OK', 'OK'),
(52, '249', '2018-06-25', 500, 'FRAIS DE GAZOIL (36525 B 6) MARRAKECH', ' Cinq Cents Dirhams', 'OK', 'OK', 'OK'),
(53, '250', '2018-06-25', 140, 'FRAIS DE PHOTOCOPIES', ' Cent Quarante Dirhams', 'OK', 'OK', 'OK'),
(54, '251', '2018-06-28', 200, 'ANCFCC QUITTANCE N° 4247838\r\n', ' Deux Cents Dirhams', 'OK', 'OK', 'OK'),
(55, '252', '2018-06-28', 165, 'ANCFCC QUITTANCE N° 673993\r\n', ' Cent Soixante-Cinq Dirhams', 'OK', 'OK', 'OK'),
(56, '253', '2018-06-29', 450, 'NOTE DE RENSEINNEMENT RLATIVE AU T 14002 33', ' Quatre Cents Cinquante Dirhams', 'OK', 'OK', 'OK'),
(57, '254', '2018-06-30', 6, 'FRAIS DE AUTO ROUTE', ' Six Dirhams', 'OK', 'OK', 'OK');

-- --------------------------------------------------------

--
-- Structure de la table `recette`
--

CREATE TABLE `recette` (
  `id` int(11) NOT NULL,
  `ref_r` varchar(11) NOT NULL,
  `datee_r` date NOT NULL,
  `mtchiffre_r` double NOT NULL,
  `libelleop_r` varchar(180) NOT NULL,
  `mtlettre_r` varchar(150) NOT NULL,
  `signdirection_r` varchar(25) NOT NULL,
  `caissier_r` varchar(25) NOT NULL,
  `benef_r` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `recette`
--

INSERT INTO `recette` (`id`, `ref_r`, `datee_r`, `mtchiffre_r`, `libelleop_r`, `mtlettre_r`, `signdirection_r`, `caissier_r`, `benef_r`) VALUES
(2, '41', '2018-04-19', 30000, 'ALIMENTATION CAISSE N° 02/04/CASA/18', ' Trente Mille Dirhams', 'OK', 'OK', 'OK'),
(3, '032018', '2018-04-01', 42891.61, 'SOLDE AU 31/03/2018', ' Quarante-Deux Mille Huit Cents Quatre-vingt-Onze Dirhams et Soixante et Un centimes', 'OK', 'OK', 'OK'),
(4, '042018', '2018-05-01', 67487.61, 'SOLDE AU 29/04/2018', ' Soixante-Sept Mille Quatre Cents Quatre-vingt-Sept Dirhams et Soixante et Un centimes', 'OK', 'OK', 'OK'),
(5, '05/2018', '2018-06-01', 60394.11, 'SOLDE AU 22/05/2018', ' Soixante Mille Trois Cents Quatre-vingt-Quatorze Dirhams et Onze centimes', 'OK', 'OK', 'OK');

-- --------------------------------------------------------

--
-- Structure de la table `relation`
--

CREATE TABLE `relation` (
  `id` int(11) NOT NULL,
  `refdepense` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `relation`
--

INSERT INTO `relation` (`id`, `refdepense`) VALUES
(3, '201'),
(4, '202'),
(5, '203'),
(6, '204'),
(7, '205'),
(8, '206'),
(9, '207'),
(10, '208'),
(11, '209'),
(12, '210'),
(13, '211'),
(14, '212'),
(15, '213'),
(16, '213'),
(17, '214'),
(18, '215'),
(19, '216'),
(20, '217'),
(21, '218'),
(22, '219'),
(23, '220'),
(24, '221'),
(25, '222'),
(26, '223'),
(27, '224'),
(28, '225'),
(29, '226'),
(30, '227'),
(31, '228'),
(32, '229'),
(33, '230'),
(34, '231'),
(35, '232'),
(36, '233'),
(37, '234'),
(58, '235'),
(39, '236'),
(40, '237'),
(41, '238'),
(42, '239'),
(43, '240'),
(44, '241'),
(45, '242'),
(46, '243'),
(47, '244'),
(48, '245'),
(49, '246'),
(50, '247'),
(51, '248'),
(52, '249'),
(53, '250'),
(54, '251'),
(55, '252'),
(56, '253'),
(57, '254');

-- --------------------------------------------------------

--
-- Structure de la table `relationr`
--

CREATE TABLE `relationr` (
  `id` int(11) NOT NULL,
  `refrecette` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `relationr`
--

INSERT INTO `relationr` (`id`, `refrecette`) VALUES
(3, '032018'),
(4, '042018'),
(5, '05/2018'),
(2, '41');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `depense`
--
ALTER TABLE `depense`
  ADD PRIMARY KEY (`id`,`ref`),
  ADD UNIQUE KEY `ref` (`ref`);

--
-- Index pour la table `recette`
--
ALTER TABLE `recette`
  ADD PRIMARY KEY (`id`,`ref_r`),
  ADD UNIQUE KEY `ref` (`ref_r`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `relation`
--
ALTER TABLE `relation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `refdepense` (`refdepense`);

--
-- Index pour la table `relationr`
--
ALTER TABLE `relationr`
  ADD PRIMARY KEY (`id`),
  ADD KEY `refrecette` (`refrecette`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `depense`
--
ALTER TABLE `depense`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT pour la table `recette`
--
ALTER TABLE `recette`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `relation`
--
ALTER TABLE `relation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT pour la table `relationr`
--
ALTER TABLE `relationr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `relation`
--
ALTER TABLE `relation`
  ADD CONSTRAINT `ref_dep_fk` FOREIGN KEY (`refdepense`) REFERENCES `depense` (`ref`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Contraintes pour la table `relationr`
--
ALTER TABLE `relationr`
  ADD CONSTRAINT `ref_rec_fk` FOREIGN KEY (`refrecette`) REFERENCES `recette` (`ref_r`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
