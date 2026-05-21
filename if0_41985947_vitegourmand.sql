-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : sql203.infinityfree.com
-- Généré le :  jeu. 21 mai 2026 à 15:39
-- Version du serveur :  11.4.10-MariaDB
-- Version de PHP :  7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `if0_41985947_vitegourmand`
--

-- --------------------------------------------------------

--
-- Structure de la table `allergene`
--

CREATE TABLE `allergene` (
  `allergene_id` int(11) NOT NULL,
  `libelle` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE `avis` (
  `avis_id` int(11) NOT NULL,
  `commande_id` int(11) DEFAULT NULL,
  `note` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `statut` varchar(50) DEFAULT NULL,
  `utilisateur_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`avis_id`, `commande_id`, `note`, `description`, `statut`, `utilisateur_id`) VALUES
(1, 0, '5', 'excellent', 'validé', 1),
(4, 5043, '4', 'exceptionnel, tout est au top !!!', 'validé', 3);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `numero_commande` varchar(50) NOT NULL,
  `date_commande` date DEFAULT NULL,
  `date_prestation` date DEFAULT NULL,
  `heure_livraison` varchar(50) DEFAULT NULL,
  `prix_menu` double DEFAULT NULL,
  `nombre_personne` int(11) DEFAULT NULL,
  `prix_livraison` double DEFAULT NULL,
  `statut` varchar(50) DEFAULT NULL,
  `pret_materiel` tinyint(1) DEFAULT NULL,
  `restitution_materiel` tinyint(1) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `utilisateur_id` int(11) DEFAULT NULL,
  `employe_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`numero_commande`, `date_commande`, `date_prestation`, `heure_livraison`, `prix_menu`, `nombre_personne`, `prix_livraison`, `statut`, `pret_materiel`, `restitution_materiel`, `menu_id`, `utilisateur_id`, `employe_id`) VALUES
('1372', '2026-05-17', '2026-06-12', '21:00', NULL, 5, NULL, 'en attente', 1, NULL, 2, 3, NULL),
('1498', '2026-05-17', '2029-03-12', '12:00', NULL, 10, NULL, 'en attente', 1, NULL, 2, 3, NULL),
('2707', '2026-05-20', '2026-06-12', '12:42', NULL, 15, NULL, 'terminée', 1, NULL, 1, 8, 11),
('2762', '2026-05-17', NULL, NULL, NULL, NULL, NULL, 'en attente', NULL, NULL, 1, 1, NULL),
('2781', '2026-05-17', '2026-06-18', '20:30', NULL, 8, NULL, 'en attente', 1, NULL, 2, 1, NULL),
('3325', '2026-05-19', '2027-01-31', '13:00', NULL, 4, NULL, 'terminée', 1, NULL, 1, 1, 11),
('3605', '2026-05-19', '2026-06-12', '12:00', NULL, 5, NULL, 'en attente', 1, NULL, 2, 3, NULL),
('3837', '2026-05-17', '1234-03-12', '21:32', NULL, 3, NULL, 'en attente', 0, NULL, 1, 3, NULL),
('3845', '2026-05-19', '2026-06-12', '12:00', NULL, 5, NULL, 'accepté', 1, NULL, 2, 3, 14),
('3963', '2026-05-17', '2026-06-18', '20:30', NULL, 8, NULL, 'en attente', 1, NULL, 2, 1, NULL),
('4002', '2026-05-17', '2026-06-12', '21:00', NULL, 5, NULL, 'en attente', 1, NULL, 2, 3, NULL),
('4030', '2026-05-19', '2027-01-31', '13:00', NULL, 4, NULL, 'terminée', 1, NULL, 1, 1, 14),
('4947', '2026-05-17', '2029-03-12', '12:00', NULL, 10, NULL, 'en attente', 1, NULL, 2, 3, NULL),
('5043', '2026-05-18', '2026-05-18', '12:00', NULL, 2, NULL, 'terminée', 1, NULL, 1, 3, NULL),
('5510', '2026-05-17', '2026-06-12', '21:00', NULL, 5, NULL, 'en attente', 1, NULL, 2, 3, NULL),
('5733', '2026-05-17', '2029-03-12', '12:00', NULL, 10, NULL, 'en attente', 1, NULL, 2, 3, NULL),
('5989', '2026-05-17', '2026-04-12', '18:12', NULL, 5, NULL, 'en attente', 1, NULL, 2, 3, NULL),
('8000', '2026-05-17', '2029-03-12', '12:00', NULL, 10, NULL, 'en attente', 1, NULL, 2, 3, NULL),
('8941', '2026-05-18', '2029-03-12', '12:00', NULL, 10, NULL, 'en attente', 1, NULL, 2, 3, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `horaires`
--

CREATE TABLE `horaires` (
  `horaires_id` int(11) NOT NULL,
  `contenu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `horaires`
--

INSERT INTO `horaires` (`horaires_id`, `contenu`) VALUES
(1, 'Lundi : 8h-18h\r\nMardi : 8h-18h\r\nMercredi : 8h-18h\r\nJeudi : 8h-18h\r\nVendredi : 8h-18h\r\nSamedi : 9h-17h\r\nDimanche : Fermé');

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `titre` varchar(50) DEFAULT NULL,
  `nombre_personne_minimum` int(11) DEFAULT NULL,
  `prix_par_personne` double DEFAULT NULL,
  `theme` varchar(100) NOT NULL,
  `regime` varchar(50) DEFAULT NULL,
  `allergenes` text NOT NULL,
  `description` text DEFAULT NULL,
  `quantite_restante` int(11) DEFAULT NULL,
  `conditions_menu` text DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `menu`
--

INSERT INTO `menu` (`menu_id`, `titre`, `nombre_personne_minimum`, `prix_par_personne`, `theme`, `regime`, `allergenes`, `description`, `quantite_restante`, `conditions_menu`, `image`, `image1`, `image2`, `image3`) VALUES
(1, 'Menu Test', 2, 20, 'noel', 'standard', 'glucose, lactose', 'menu test', 7, 'Commande minimum 2 jours avant.\r\nConserver au frais après livraison.', 'pizza.jpg', 'pates.jpg', 'citron_givré.jpg', ''),
(2, 'menu luxe', 4, 25, 'paques', 'aucun', 'fruits a coques', 'excellent', 3, '', 'images.jpeg', '', '', ''),
(3, 'simple', 5, 30, 'noel', 'vegan', 'lactose', 'menu simple', 6, '2 jours à l\'avance ', 'simple.jpeg', 'citron_givré.jpg', 'images.jpeg', ''),
(5, 'new', 3, 2, 'noel', 'vegan', 'lactose', 'new', 3, '', 'citron_givré.jpg', '', '', ''),
(6, 'Italien', 4, 32, 'Méditerranée', 'aucun', 'lactose, fruits à coques', 'La tradition italienne repose sur l\'art de vivre, la famille, et une gastronomie mondialement reconnue, classée au patrimoine immatériel de l\'UNESCO. Rythmée par des rituels quotidiens comme l\'apéritif et des fêtes populaires, elle allie passion, simplicité et convivialité. Ce menu sera composé de : Une salade burrata avec tomates, Pâtes fraiches ail et parmesan, et pour finir un citron givré.', 8, 'Ce menu doit être commander au minimum 2 jours à l\'avance.', 'menu_italie.jpg', 'burrata.jpg', 'pates.jpg', 'citron_givré.jpg'),
(7, 'Noël', 6, 40, 'noel', 'aucun', 'lactose, fruits à coques, gluten, oeuf', 'À quoi bon s\'inquiéter du menu ! Si nous sommes réunis, c\'est pour faire la fête, rire et partager de bons moments. Bon appétit à tous !', 12, 'Ce menu doit être commandé au minimum 2 jours à l\'avance.', 'menu_noel.jpg', 'foie_gras.jpg', 'dinde.jpeg', 'buche.jpg'),
(8, 'Fraicheur', 2, 25, 'Méditerranée', 'vegetarien', 'fruit à coques', 'Savoureux, équilibré et plein de fraîcheur \r\nDécouvrez notre repas végétarien préparé avec des ingrédients soigneusement sélectionnés : légumes de saison, saveurs authentiques et gourmandise au rendez-vous. Une assiette colorée qui allie plaisir et légèreté, parfaite pour une pause saine et délicieuse.', 15, 'Commander au minimum 2 jours à l\'avance.', 'menu_vegetarien.jpg', 'mezze.jpeg', 'tian.jpg', 'creme_brulee.jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `menu_plat`
--

CREATE TABLE `menu_plat` (
  `menu_id` int(11) NOT NULL,
  `plat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `menu_plat`
--

INSERT INTO `menu_plat` (`menu_id`, `plat_id`) VALUES
(1, 1),
(2, 3);

-- --------------------------------------------------------

--
-- Structure de la table `menu_regime`
--

CREATE TABLE `menu_regime` (
  `menu_id` int(11) NOT NULL,
  `regime_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `menu_theme`
--

CREATE TABLE `menu_theme` (
  `menu_id` int(11) NOT NULL,
  `theme_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `plat`
--

CREATE TABLE `plat` (
  `plat_id` int(11) NOT NULL,
  `titre_plat` varchar(50) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `plat`
--

INSERT INTO `plat` (`plat_id`, `titre_plat`, `photo`, `menu_id`) VALUES
(1, 'Pizza', 'pizza.jpg', NULL),
(2, 'foie gras', NULL, NULL),
(3, 'caviar', 'images.jpeg', NULL),
(4, 'Pizza', '1779370740_pizza.jpg', 5),
(5, 'Pâtes', '1779372020_pates.jpg', 6),
(6, 'Citrin givré', '1779372042_citron_givré.jpg', 6),
(7, 'Burrata', '1779372058_burrata.jpg', 6),
(8, 'Toast foie gras', '1779372645_foie_gras.jpg', 7),
(9, 'Dinde et légumes', '1779372665_dinde.jpeg', 7),
(10, 'Bûche', '1779372705_buche.jpg', 7),
(11, 'Tian', '1779374223_tian.jpg', 8),
(12, 'Mezze', '1779374248_mezze.jpeg', 8),
(13, 'Crème brulée', '1779374268_creme_brulee.jpeg', 8);

-- --------------------------------------------------------

--
-- Structure de la table `plat_allergene`
--

CREATE TABLE `plat_allergene` (
  `plat_id` int(11) NOT NULL,
  `allergene_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `regime`
--

CREATE TABLE `regime` (
  `regime_id` int(11) NOT NULL,
  `libelle` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `libelle` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`role_id`, `libelle`) VALUES
(1, 'admin'),
(2, 'utilisateur'),
(3, 'employé');

-- --------------------------------------------------------

--
-- Structure de la table `theme`
--

CREATE TABLE `theme` (
  `theme_id` int(11) NOT NULL,
  `libelle` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `utilisateur_id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `telephone` varchar(50) DEFAULT NULL,
  `ville` varchar(50) DEFAULT NULL,
  `pays` varchar(50) DEFAULT NULL,
  `adresse_postale` varchar(50) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`utilisateur_id`, `email`, `nom`, `password`, `prenom`, `telephone`, `ville`, `pays`, `adresse_postale`, `role_id`) VALUES
(1, 'test@mail.com', '', '1234', 'Jean', '0600000000', 'Paris', 'France', '10 rue test', 1),
(3, 'test@mail2.com', 'berehili', '1234', 'Ines', '0600000000', 'Bordeaux', 'France', '11 rue test', 2),
(5, 'test@mail4.com', '', '1234', 'julie', '0600000000', 'Paris', 'France', '13 rue test', 2),
(6, 'test@mail5.com', 'dubois', '1234', 'pierre', '0600000000', 'Bordeaux', 'france', '15 rue test', 2),
(7, 'test@mail5.com', 'duboid', '1234', 'pierre', '0600000000', 'Bordeaux', 'france', '15 rue test', 2),
(8, 'ines.berehili@icloud.com', 'adel', '$2y$10$boE4Ail.qea96XC4CA28E.cLH2V0KK4GDenZlCDtIsq2sacJodEJu', 'brh', '0631045953', 'Trappes', NULL, '26 Rue Jean Jaurès', 2),
(9, 'ines.berehili@icloud.com', 'Berehili', '$2y$10$boE4Ail.qea96XC4CA28E.cLH2V0KK4GDenZlCDtIsq2sacJodEJu', 'Inès', '0631045953', 'Trappes', NULL, NULL, 2),
(11, 'test@mail6.com', 'test', '$2y$10$HfbraTy.MXj3AwjyG16MQuGYOMWg9AoqLxdIGSthY8hCs3m7ICV6u', 'employé', '0600000000', NULL, NULL, NULL, 3),
(12, 'ines.berehili@icloud.com', 'Berehili', '$2y$10$boE4Ail.qea96XC4CA28E.cLH2V0KK4GDenZlCDtIsq2sacJodEJu', 'Inès', '0631045953', 'Trappes', NULL, NULL, 2),
(13, 'admin@gmail.com', 'admin1', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Admin', '0600000000', 'Bordeaux', 'France', '1 rue admin', 1),
(15, 'testfinal@gmail.com', 'Benabbou', '$2y$10$rop6kFJqyoKyV1cSPXoaAuxYhJrMkurdxkRBaHp0PbGSxKxM.xtdi', 'Lamiae', '0601020304', 'Bordeaux', NULL, NULL, 2),
(16, 'ayna@gmail.com', 'bahi', '$2y$10$uRrpvV5RVlXoJY/vOoHq6.xtQThsMT4nYPZXZnuHGq.h3YRxZLibm', 'ayna', '0600000000', NULL, NULL, NULL, 3);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `allergene`
--
ALTER TABLE `allergene`
  ADD PRIMARY KEY (`allergene_id`);

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`avis_id`),
  ADD KEY `utilisateur_id` (`utilisateur_id`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`numero_commande`),
  ADD KEY `menu_id` (`menu_id`),
  ADD KEY `utilisateur_id` (`utilisateur_id`);

--
-- Index pour la table `horaires`
--
ALTER TABLE `horaires`
  ADD PRIMARY KEY (`horaires_id`);

--
-- Index pour la table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Index pour la table `menu_plat`
--
ALTER TABLE `menu_plat`
  ADD PRIMARY KEY (`menu_id`,`plat_id`),
  ADD KEY `plat_id` (`plat_id`);

--
-- Index pour la table `menu_regime`
--
ALTER TABLE `menu_regime`
  ADD PRIMARY KEY (`menu_id`,`regime_id`),
  ADD KEY `regime_id` (`regime_id`);

--
-- Index pour la table `menu_theme`
--
ALTER TABLE `menu_theme`
  ADD PRIMARY KEY (`menu_id`,`theme_id`),
  ADD KEY `theme_id` (`theme_id`);

--
-- Index pour la table `plat`
--
ALTER TABLE `plat`
  ADD PRIMARY KEY (`plat_id`),
  ADD KEY `fk_menu_plat` (`menu_id`);

--
-- Index pour la table `plat_allergene`
--
ALTER TABLE `plat_allergene`
  ADD PRIMARY KEY (`plat_id`,`allergene_id`),
  ADD KEY `allergene_id` (`allergene_id`);

--
-- Index pour la table `regime`
--
ALTER TABLE `regime`
  ADD PRIMARY KEY (`regime_id`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Index pour la table `theme`
--
ALTER TABLE `theme`
  ADD PRIMARY KEY (`theme_id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`utilisateur_id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `allergene`
--
ALTER TABLE `allergene`
  MODIFY `allergene_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `avis`
--
ALTER TABLE `avis`
  MODIFY `avis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `horaires`
--
ALTER TABLE `horaires`
  MODIFY `horaires_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `plat`
--
ALTER TABLE `plat`
  MODIFY `plat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `regime`
--
ALTER TABLE `regime`
  MODIFY `regime_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `theme`
--
ALTER TABLE `theme`
  MODIFY `theme_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `utilisateur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `avis`
--
ALTER TABLE `avis`
  ADD CONSTRAINT `avis_ibfk_1` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`utilisateur_id`);

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`menu_id`),
  ADD CONSTRAINT `commande_ibfk_2` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`utilisateur_id`);

--
-- Contraintes pour la table `menu_plat`
--
ALTER TABLE `menu_plat`
  ADD CONSTRAINT `menu_plat_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`menu_id`),
  ADD CONSTRAINT `menu_plat_ibfk_2` FOREIGN KEY (`plat_id`) REFERENCES `plat` (`plat_id`);

--
-- Contraintes pour la table `menu_regime`
--
ALTER TABLE `menu_regime`
  ADD CONSTRAINT `menu_regime_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`menu_id`),
  ADD CONSTRAINT `menu_regime_ibfk_2` FOREIGN KEY (`regime_id`) REFERENCES `regime` (`regime_id`);

--
-- Contraintes pour la table `menu_theme`
--
ALTER TABLE `menu_theme`
  ADD CONSTRAINT `menu_theme_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`menu_id`),
  ADD CONSTRAINT `menu_theme_ibfk_2` FOREIGN KEY (`theme_id`) REFERENCES `theme` (`theme_id`);

--
-- Contraintes pour la table `plat`
--
ALTER TABLE `plat`
  ADD CONSTRAINT `fk_menu_plat` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`menu_id`);

--
-- Contraintes pour la table `plat_allergene`
--
ALTER TABLE `plat_allergene`
  ADD CONSTRAINT `plat_allergene_ibfk_1` FOREIGN KEY (`plat_id`) REFERENCES `plat` (`plat_id`),
  ADD CONSTRAINT `plat_allergene_ibfk_2` FOREIGN KEY (`allergene_id`) REFERENCES `allergene` (`allergene_id`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `utilisateur_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
