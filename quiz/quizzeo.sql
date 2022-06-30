-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : jeu. 30 juin 2022 à 16:09
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `quiz`
--

-- --------------------------------------------------------

--
-- Structure de la table `choix`
--

DROP TABLE IF EXISTS `choix`;
CREATE TABLE IF NOT EXISTS `choix` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT 0,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `choix`
--

INSERT INTO `choix` (`id`, `question_number`, `is_correct`, `text`) VALUES
(1, 1, 1, 'PHP: Hypertext preprocessor\r\n'),
(2, 1, 0, 'Private Home Page'),
(3, 1, 0, 'Personal Home Page'),
(4, 1, 0, 'Personal Hypertext preprocessor'),
(5, 2, 0, '\"hello world\";\r\n'),
(6, 2, 1, 'echo \"hello world\";'),
(7, 2, 0, 'document.white(\"hello world\");'),
(13, 3, 0, 'ASP'),
(14, 3, 0, 'RUBY'),
(15, 3, 1, 'PHP'),
(16, 3, 0, 'JAVA'),
(17, 3, 0, 'HTML'),
(18, 4, 1, 'ASP'),
(19, 4, 0, 'RUBY'),
(20, 4, 0, 'PHP'),
(21, 5, 1, 'k'),
(22, 5, 0, 'kl'),
(23, 5, 0, 'l'),
(24, 5, 0, 'k'),
(25, 5, 0, 'k');

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `question_number` int(11) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`question_number`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`question_number`, `text`) VALUES
(1, 'PHP stands for whats?'),
(2, 'How do you write \"Hello World\" in PHP'),
(3, 'what is the best server side language?'),
(4, 'what is the best server side language?'),
(5, 'lklk');

-- --------------------------------------------------------

--
-- Structure de la table `quizz`
--

DROP TABLE IF EXISTS `quizz`;
CREATE TABLE IF NOT EXISTS `quizz` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` text NOT NULL,
  `difficulte` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `quizz`
--

INSERT INTO `quizz` (`id`, `titre`, `difficulte`) VALUES
(1, 'lklklklklklklklklklk', 5),
(4, 'heeoe', 5),
(3, 'je reprocghea n cfahqie personne de me pas mavoir donner de cadeus epoutr moun annoiver siqire zcar kjabaosn bien comote sur certrsine e paer sone comme bme  mas elle ma sbaudsocour de cu e t  ne ope se4 aue n travailkle rs a chaeue dfois ', 5);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `pseudo`, `email`, `password`) VALUES
(1, 'franck', 'kamgafranckcabrel@gmail.com', '123456'),
(10, 'franck', 'kamdemfranck18@gmail.com', 'Marie2001'),
(11, 'franck', 'kamga@gmail.com', '123456'),
(12, 'franck', 'kamg@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Structure de la table `user_quiz`
--

DROP TABLE IF EXISTS `user_quiz`;
CREATE TABLE IF NOT EXISTS `user_quiz` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `id_quiz` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
