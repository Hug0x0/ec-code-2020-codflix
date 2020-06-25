-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 25, 2020 at 06:23 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `codflix`
--

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id`, `name`) VALUES
(1, 'Action'),
(2, 'Horreur'),
(3, 'Science-Fiction'),
(4, 'Animation'),
(5, 'Aventure'),
(6, 'Dessin animé');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `media_id` int(11) NOT NULL,
  `start_date` datetime NOT NULL,
  `finish_date` datetime DEFAULT NULL,
  `watch_duration` int(11) NOT NULL DEFAULT '0' COMMENT 'in seconds'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `release_date` date NOT NULL,
  `summary` longtext NOT NULL,
  `trailer_url` varchar(100) NOT NULL,
  `durée` varchar(255) DEFAULT NULL,
  `director` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `genre_id`, `title`, `type`, `status`, `release_date`, `summary`, `trailer_url`, `durée`, `director`) VALUES
(1, 1, 'VALIDÉ', 'série', '', '2020-05-13', 'Un jeune rappeur talentueux, épaulé par ses deux amis d’enfance, se retrouve du jour au lendemain \"validé\" par une des stars du milieu. Seulement, cette alliance se transforme rapidement en une dangereuse rivalité...', 'http://www.youtube.com/embed/ordXN722RDw', '30min', ' Franck Gastambide'),
(2, 2, 'CONJURING 2 : LE CAS ENFIELD', 'film', '', '2019-01-17', 'Interdit aux moins de 12 ans\r\nUne nouvelle histoire vraie issue des dossiers d’Ed et Lorraine Warren : l’une de leurs enquêtes les plus traumatisantes.\r\nLorraine et Ed Warren se rendent dans le nord de Londres pour venir en aide à une mère qui élève seule ses quatre enfants dans une maison hantée par des esprits maléfiques. Il s\'agira d\'une de leurs enquêtes paranormales les plus terrifiantes…', 'http://www.youtube.com/embed/Y3kNhv0Nm_g', '2h 14min', 'James Wan'),
(3, 1, 'Saint Jacques la Mecque', 'film', '', '2005-08-07', 'Au décès de leur mère, deux frères et une soeur apprennent qu\'ils ne toucheront leur héritage que s\'ils font ensemble, à pied, la marche du Puy-en-Velay à Saint-Jacques-de-Compostelle. Mais ils se détestent autant qu\'ils détestent la marche. Ils se mettent pourtant en route, mus par l\'appât du gain. Ils rejoignent leur guide au Puy et découvrent qu\'ils marcheront avec un groupe de six autres personnes, dont un jeune beur qui fait croire à son cousin un peu naïf qu\'il l\'emmène à La Mecque, alors qu\'il poursuit une jeune pèlerine, l\'amour de sa vie...', 'http://www.youtube.com/embed/PwURsx36SQc', '1h 52min', 'Murielle robin'),
(4, 4, 'Les Trois Petits Cochons', 'film', 'BANG BANG', '2008-05-24', 'Les Trois Petits Cochons : La crise porcine (Bande-annonce) :\r\n3 Cochons dans la forêt Québécoise seront confrontés à un méchant loup qui n\'a qu\'un objectif, se remplir le ventre.', 'http://www.youtube.com/embed/-SSm_iGh4ak', '20min', ''),
(5, 5, 'LES INDESTRUCTIBLES 2', 'film', 'a l\'affiche', '2018-07-04', 'Notre famille de super-héros préférée est de retour! Cette fois c’est Hélène qui se retrouve sur le devant de la scène laissant à Bob le soin de mener à bien les mille et une missions de la vie quotidienne et de s’occuper de Violette, Flèche et de bébé Jack-Jack. C’est un changement de rythme difficile pour la famille d’autant que personne ne mesure réellement l’étendue des incroyables pouvoirs du petit dernier… Lorsqu’un nouvel ennemi fait surface, la famille et Frozone vont devoir s’allier comme jamais pour déjouer son plan machiavélique.', 'http://www.youtube.com/embed/sXsr_7Una_A\"', '1h 58min', 'Brad Bird'),
(6, 6, 'LE ROI LION', 'film', '', '2020-06-27', 'Sur les Hautes terres d’Afrique règne un lion tout-puissant, le roi Mufasa, que tous les hôtes de la jungle respectent et admirent pour sa sagesse et sa générosité. Son jeune fils Simba sait qu’un jour il lui succèdera, conformément aux lois universelles du cycle de la vie, mais il est loin de deviner les épreuves et les sacrifices que lui imposera l’exercice du pouvoir. Espiègle, naïf et turbulent, le lionceau passe le plus clair de son temps à jouer avec sa petite copine Nala et à taquiner Zazu, son digne précepteur. Son futur royaume lui apparaît en songe comme un lieu enchanté où il fera bon vivre, s’amuser et donner des ordres. Cependant, l’univers de Simba n’est pas aussi sûr qu’il le croie. Scar, le frère de Mufasa, aspire en effet depuis toujours au trône. Maladivement jaloux de son aîné, il intrigue pour l’éliminer en même temps que son successeur. Misant sur la curiosité enfantine et le tempérament aventureux de Simba, il révèle à celui-ci l’existence d’un mystérieux et dangereux cimetière d’éléphants. Simba, oubliant les avertissements répétés de son père, s’y rend aussitôt en secret avec Nala et se fait attaquer par 3 hyènes féroces. Par chance, Mufasa arrive à temps pour sauver l’imprudent lionceau et sa petite compagne. Mais Scar ne renonce pas à ses sinistres projets. Aidé des 3 hyènes, il attire Simba dans un ravin et lance à sa poursuite un troupeau de gnous. N’écoutant que son courage, Mufasa sauve à nouveau son fils et tente de se mettre à l’abri en gravissant la falaise. Repoussé par son frère félon, il périt sous les sabots des gnous affolés. Scar blâme alors l’innocent Simba pour la mort du Roi et le persuade de quitter pour toujours les Hautes terres. Simba se retrouve pour la première fois seul et démuni face à un monde hostile. C’est alors que le destin place sur sa route un curieux tandem d’amis...', 'http://www.youtube.com/embed/tvvQitXftGk', '1h 29min', ' Roger Allers'),
(7, 1, 'DE GAULLE', 'film', '', '2020-06-21', 'Mai 1940. La guerre s’intensifie, l’armée française s’effondre, les Allemands seront bientôt à Paris. La panique gagne le gouvernement qui envisage d’accepter la défaite. Un homme, Charles de Gaulle, fraîchement promu général, veut infléchir le cours de l’Histoire. Sa femme, Yvonne de Gaulle, est son premier soutien, mais très vite les évènements les séparent. Yvonne et ses enfants se lancent sur les routes de l’exode. Charles rejoint Londres. Il veut faire entendre une autre voix : celle de la Résistance.', 'http://www.youtube.com/embed/Qh7VpkAXPFQ', '1h 49min', 'Gabriel Le Bomin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(254) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(13, 'lala@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92'),
(14, 'lalp@gmail.com', '9c0ada37bf74aeefae949fdfc90db0cf6eaf90192eff67d65887771f0585e055'),
(15, 'popo@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92'),
(16, 'sasa@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92'),
(17, 'coding@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `history_user_id_fk_media_id` (`user_id`),
  ADD KEY `history_media_id_fk_media_id` (`media_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_genre_id_fk_genre_id` (`genre_id`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_media_id_fk_media_id` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `history_user_id_fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_genre_id_b1257088_fk_genre_id` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`id`);