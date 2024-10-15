-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 14 oct. 2024 à 09:56
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bd_gestioncabinet`
--

-- --------------------------------------------------------

--
-- Structure de la table `galerie`
--

CREATE TABLE `galerie` (
  `id` int(11) NOT NULL,
  `titre` varchar(25) NOT NULL,
  `commentaire` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `galerie`
--

INSERT INTO `galerie` (`id`, `titre`, `commentaire`, `image`) VALUES
(25, 'AUDIT COMPTABLE   ', 'Assurer la conformité, Identifier les risques, Optimiser les performances   ', 'ACCUEIL.JPG'),
(26, 'COMPTABILITE          ', 'Une gestion de la comptabilité, une mise en place de manuel de procédures, Des conseils et Accompagnements personnalisés et un Reporting régulier.          ', 'IMG1.JPG'),
(27, 'FISCALITE         ', 'Conseil fiscal, Déclarations  fiscales, Planirfication fiscales, Audit fiscal, Formation et sensibilisation.         ', 'IMG_9072.JPG'),
(28, 'COMMISSARIAT AUX COMPTES ', 'Audit légal,Rapport de certification, Conseil en Gestion Financière et Formation ', 'IMG7.JPG'),
(29, 'MISSION SOCIALE ', 'Assurer la sécurité des vos comptes. ', 'IMG_9081.JPG'),
(30, 'REPRESENTATION', 'Nous représentons  votre entreprise textuellement dans le monde des opportunités.', 'IMG5.JPG'),
(31, 'CONSEIL EN GESTION', 'Analyse Organisationnelle, Gestion du Changement, Planification Stratégique et Expertise Approfondie ', 'IMG_9095.JPG');

-- --------------------------------------------------------

--
-- Structure de la table `t_utilisateur`
--

CREATE TABLE `t_utilisateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `t_utilisateur`
--

INSERT INTO `t_utilisateur` (`id`, `nom`, `password`) VALUES
(2, 'ADM', '1234');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `galerie`
--
ALTER TABLE `galerie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `t_utilisateur`
--
ALTER TABLE `t_utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `galerie`
--
ALTER TABLE `galerie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `t_utilisateur`
--
ALTER TABLE `t_utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
