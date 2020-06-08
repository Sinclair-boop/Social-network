-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 07 juin 2020 à 22:50
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `rs`
--

-- --------------------------------------------------------

--
-- Structure de la table `amis`
--

CREATE TABLE `amis` (
  `id_invitation` int(11) NOT NULL,
  `pseudo_exp` varchar(150) NOT NULL,
  `pseudo_dest` varchar(150) NOT NULL,
  `date_invitation` datetime NOT NULL,
  `date_confirmation` datetime NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `amis`
--

INSERT INTO `amis` (`id_invitation`, `pseudo_exp`, `pseudo_dest`, `date_invitation`, `date_confirmation`, `active`) VALUES
(33, 'sinclair', 'leonel', '2020-05-16 17:58:31', '2016-05-20 00:00:00', 1),
(34, 'n', 'sinclair', '2020-05-17 14:48:10', '2007-06-20 00:00:00', 1),
(35, 'n', 'leonel', '2020-05-17 14:48:26', '0000-00-00 00:00:00', 0),
(36, 'n', 'm', '2020-05-17 14:48:44', '2017-05-20 00:00:00', 1),
(37, 'duclair', 'sinclair', '2020-06-07 17:57:34', '2007-06-20 00:00:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(10) NOT NULL,
  `pseudo` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sexe` varchar(6) NOT NULL,
  `situation` varchar(15) NOT NULL,
  `apropos` text NOT NULL,
  `avatar` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `pseudo`, `password`, `email`, `sexe`, `situation`, `apropos`, `avatar`) VALUES
(14, 'sinclair', 's', 'ngapoutfotso@gmail.com', 'Homme', 'CÃ©libataire', 'je suis', 'defaut.jpg'),
(15, 'leonel', 'l', 'Komjordan640@gmail.com', 'Homme', 'CÃ©libataire', 'il', 'defaut.jpg'),
(16, 'n', 'n', 'blackst@gmail.com', 'Homme', 'CÃ©libataire', 'jkk', 'defaut.jpg'),
(17, 'm', 'm', 'ngapoutso@gmail.com', 'Homme', 'CÃ©libataire', 'jjji', 'defaut.jpg'),
(18, 'duclair', 'd', 'Komjordanh640@gmail.com', 'Homme', 'CÃ©libataire', 'yugfg', 'defaut.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `amis`
--
ALTER TABLE `amis`
  ADD PRIMARY KEY (`id_invitation`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `amis`
--
ALTER TABLE `amis`
  MODIFY `id_invitation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
