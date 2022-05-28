-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 04 mai 2021 à 11:18
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projetpoo`
--

-- --------------------------------------------------------

--
-- Structure de la table `tusers`
--

CREATE TABLE `tusers` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `motDePasse` varchar(30) NOT NULL,
  `DateNaissance` date NOT NULL,
  `region` varchar(20) NOT NULL,
  `pays` varchar(20) NOT NULL,
  `Bac` varchar(20) NOT NULL,
  `Commentaire` varchar(100) NOT NULL,
  `image` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tusers`
--

INSERT INTO `tusers` (`id`, `pseudo`, `nom`, `prenom`, `motDePasse`, `DateNaissance`, `region`, `pays`, `Bac`, `Commentaire`, `image`) VALUES
(1, 'thomas@outlook.fr', 'roulland', 'thomas', 'tintin1998', '2001-02-22', 'normandie', 'france', 'stmg', 'C\'est dommage que je puisse pas te toucher, le musée m\'interdit de m\'approcher des œuvres d\'arts', '../images/mars.png'),
(2, 'mathieu@outlook.fr', 'dumont', 'mathieu', 'upsdumth455', '2002-03-01', 'normandie', 'france', 'sti2d sin', 'ponpelop, je tue penelope ', '../images/mars.png'),
(3, 'thomass.roulland@outlook.fr', 'totolas', 'thomaslas', 'tintin1998', '2001-02-22', 'normandie', 'France', 'STMG', 'Je veux etre en vacance', '../images/mars.png'),
(4, 'félix@outlook.fr', 'caille', 'félix', 'félix14', '2001-08-18', 'Normandie', 'France', 'STMG', 'a l\'époque j\'étais charo', '../images/mars.png'),
(5, 'hugo@outlook.fr', 'monnier', 'hugo', 'gogo', '2001-05-26', 'calvados', 'France', 'STMG', 'lol', '../images/mars.png'),
(6, 'bene', 'roull', 'bele', 'tintin1998', '1996-02-22', 'calv', 'fr', 'rien', 'lol', '../images/mars.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tusers`
--
ALTER TABLE `tusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tusers`
--
ALTER TABLE `tusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
