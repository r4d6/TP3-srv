-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 23 oct. 2024 à 14:02
-- Version du serveur : 8.0.31
-- Version de PHP : 8.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `jv24`
--

-- --------------------------------------------------------

--
-- Structure de la table `developpeurs`
--

DROP TABLE IF EXISTS `developpeurs`;
CREATE TABLE IF NOT EXISTS `developpeurs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `matricule` varchar(7) NOT NULL,
  `motDePasse` varchar(10) NOT NULL,
  `idProjet` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `developpeurs`
--

INSERT INTO `developpeurs` (`id`, `nom`, `prenom`, `matricule`, `motDePasse`, `idProjet`) VALUES
(1, 'Abdelkarim', 'Abdellah', '1111111', '11', 1),
(2, 'Beaudoin', 'Béatrice', '2222222', '11', 2),
(3, 'Charette', 'Claude', '3333333', '11', 1);

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

DROP TABLE IF EXISTS `projets`;
CREATE TABLE IF NOT EXISTS `projets` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `debut` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `projets`
--

INSERT INTO `projets` (`id`, `nom`, `debut`) VALUES
(1, 'Enigmatik', '2024-10-07 20:23:44'),
(2, 'KGB', '2024-10-07 20:23:44');

-- --------------------------------------------------------

--
-- Structure de la table `sessionstravail`
--

DROP TABLE IF EXISTS `sessionstravail`;
CREATE TABLE IF NOT EXISTS `sessionstravail` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idDev` int NOT NULL,
  `idTache` int NOT NULL,
  `debut` datetime NOT NULL,
  `fin` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `taches`
--

DROP TABLE IF EXISTS `taches`;
CREATE TABLE IF NOT EXISTS `taches` (
  `id` int NOT NULL AUTO_INCREMENT,
  `numero` varchar(10) NOT NULL,
  `titre` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `objectif` varchar(50) NOT NULL,
  `idProjet` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `taches`
--

INSERT INTO `taches` (`id`, `numero`, `titre`, `objectif`, `idProjet`) VALUES
(1, 'T1x', 'Tables BD', 'Définir les tables nécessairesau projet', 1),
(2, 'T1.1x', 'ORM', 'D.finir les classes métiers du projet', 1),
(3, 'T2-Pre', 'Connexion', 'Développer le module de connexion', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
