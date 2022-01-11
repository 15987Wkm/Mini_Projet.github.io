-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 11 jan. 2022 à 00:26
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `crud`
--

-- --------------------------------------------------------

--
-- Structure de la table `contribution`
--

CREATE TABLE `contribution` (
  `sport` text NOT NULL,
  `contribution` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contribution`
--

INSERT INTO `contribution` (`sport`, `contribution`) VALUES
('football', 10),
('karaté', 15),
('Natation', 25),
('Basketball', 13);

-- --------------------------------------------------------

--
-- Structure de la table `student`
--

CREATE TABLE `student` (
  `sid` int(10) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `saddress` varchar(100) NOT NULL,
  `sclass` int(10) NOT NULL,
  `nationalite` int(10) NOT NULL,
  `sport` int(10) NOT NULL,
  `sphone` varchar(10) NOT NULL,
  `ssexe` varchar(10) NOT NULL,
  `sstatut` varchar(20) NOT NULL,
  `typ_permis1` varchar(10) NOT NULL,
  `typ_permis2` varchar(10) NOT NULL,
  `typ_permis3` varchar(10) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `student`
--

INSERT INTO `student` (`sid`, `sname`, `saddress`, `sclass`, `nationalite`, `sport`, `sphone`, `ssexe`, `sstatut`, `typ_permis1`, `typ_permis2`, `typ_permis3`, `photo`) VALUES
(5, '', '', 0, 0, 0, '', '', '', '', '', '', ''),
(15, 'Radia', 'tlemcen', 5, 0, 0, '2', 'feminin', '', 'on', '', '', ''),
(16, 'Karim', 'Sba', 6, 0, 0, '2', 'masculin', '', '', '', '', ''),
(20, 'Omar', 'Oran', 5, 0, 0, '9', 'masculin', '', '', 'on', 'on', ''),
(21, 'bensalem', 'mostaganem', 5, 0, 0, '19', 'masculin', '', '', '', '', ''),
(22, 'Daoud', 'tlemcen', 1, 0, 0, '100', 'masculin', 'divorce', '', '', 'on', ''),
(23, 'nouri', 'sba', 1, 0, 0, '89', 'masculin', 'masculin', '', '', '', ''),
(24, 'nabila', 'alger', 1, 0, 0, '88', 'feminin', 'feminin', '', '', '', ''),
(25, 'zaki', 'hm', 1, 0, 0, '56', 'masculin', 'masculin', '', '', '', ''),
(26, 'yamina', 'a', 6, 0, 0, '78', 'feminin', 'feminin', '', '', '', ''),
(28, 'haji', 'alger', 1, 0, 0, '88', 'masculin', 'marie', '', 'on', 'on', ''),
(29, 'tounsi', 'alger', 4, 0, 0, '78', 'feminin', 'divorce', '', '', '', ''),
(30, 'naim', 'oran', 6, 0, 0, '1', 'masculin', 'celibatiare', '', '', 'on', ''),
(31, 'ouici', 'sba', 5, 0, 0, '123456', 'feminin', 'celibataire', '', '', '', ''),
(32, 'talbi ', 'sba', 5, 0, 0, '123', 'feminin', 'celibataire', '', '', '', ''),
(33, 'talbi fatima', 'sidi bel-abbes', 5, 0, 0, '123', 'feminin', 'celibataire', '', '', '', ''),
(34, 'talbi fatima', 'gjkl', 5, 0, 0, '23', 'feminin', 'celibataire', '', '', '', ''),
(35, 'sdsfhcji', 'hfjv', 4, 0, 0, '123', 'masculin', 'marie', '', '', '', ''),
(36, 'amine', 'bn badis', 5, 0, 0, '123', 'masculin', 'celibataire', '', '', '', ''),
(37, 'amine', 'bn badis', 5, 0, 0, '123', 'masculin', 'celibataire', '', '', '', ''),
(38, 'mohamed', 'tlemcen', 5, 0, 0, '456789', 'masculin', 'celibataire', '', '', '', ''),
(39, '', '', 0, 0, 0, '', '', '', '', '', '', ''),
(40, '', '', 0, 0, 0, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `studentclass`
--

CREATE TABLE `studentclass` (
  `cid` int(11) NOT NULL,
  `cname` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `studentclass`
--

INSERT INTO `studentclass` (`cid`, `cname`) VALUES
(1, 'BCA'),
(2, 'Btech'),
(3, 'Bsc'),
(4, 'Bcom'),
(5, 'toto'),
(6, 'vovo');

-- --------------------------------------------------------

--
-- Structure de la table `studentnationalite`
--

CREATE TABLE `studentnationalite` (
  `id` int(10) NOT NULL,
  `nom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `studentnationalite`
--

INSERT INTO `studentnationalite` (`id`, `nom`) VALUES
(1, 'alger'),
(3, 'yayaya'),
(4, 'fatima');

-- --------------------------------------------------------

--
-- Structure de la table `studentsport`
--

CREATE TABLE `studentsport` (
  `num` int(10) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `studentsport`
--

INSERT INTO `studentsport` (`num`, `name`) VALUES
(1, 'foot'),
(2, 'handball'),
(4, 'nataion'),
(5, 'nouv');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `username`, `password`, `type`) VALUES
(1, 'fatima', 'fatima22', ''),
(2, 'karim', 'karim13', ''),
(3, 'hichem', '123', 'admin'),
(5, 'azert', 'azerty', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`);

--
-- Index pour la table `studentclass`
--
ALTER TABLE `studentclass`
  ADD PRIMARY KEY (`cid`);

--
-- Index pour la table `studentnationalite`
--
ALTER TABLE `studentnationalite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `studentsport`
--
ALTER TABLE `studentsport`
  ADD PRIMARY KEY (`num`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT pour la table `studentclass`
--
ALTER TABLE `studentclass`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `studentnationalite`
--
ALTER TABLE `studentnationalite`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `studentsport`
--
ALTER TABLE `studentsport`
  MODIFY `num` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
