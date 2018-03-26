-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 01 fév. 2018 à 08:48
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `datagouv`
--

-- --------------------------------------------------------

--
-- Structure de la table `accords`
--

DROP TABLE IF EXISTS `accords`;
CREATE TABLE IF NOT EXISTS `accords` (
  `id` int(11) NOT NULL,
  `id_food` int(11) NOT NULL,
  PRIMARY KEY (`id`,`id_food`),
  KEY `FK_accords_id_food` (`id_food`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `accords`
--

INSERT INTO `accords` (`id`, `id_food`) VALUES
(1, 1),
(2, 2),
(3, 2),
(4, 2),
(5, 2),
(6, 2),
(7, 2),
(8, 3),
(9, 3),
(10, 3),
(11, 3),
(12, 3),
(13, 4),
(14, 4),
(15, 4),
(16, 4),
(17, 4),
(18, 5),
(19, 5),
(20, 5),
(21, 5),
(22, 5),
(23, 5),
(24, 5),
(25, 6),
(26, 6),
(27, 6),
(28, 6),
(29, 6),
(30, 6),
(31, 6),
(32, 7),
(33, 7),
(34, 7),
(35, 7),
(36, 7),
(37, 8),
(38, 8),
(39, 8),
(40, 8),
(41, 8),
(42, 9),
(43, 9),
(44, 9),
(45, 9),
(46, 9),
(47, 9),
(48, 10),
(49, 10),
(50, 10),
(51, 10),
(52, 11),
(53, 11),
(54, 11),
(55, 11),
(56, 11),
(57, 12),
(58, 12),
(59, 12),
(60, 12),
(61, 13),
(62, 13),
(63, 14),
(64, 15),
(65, 15),
(66, 15),
(67, 15),
(68, 15),
(69, 16),
(70, 16),
(71, 16),
(72, 17),
(73, 17),
(74, 17),
(75, 17),
(76, 18),
(77, 18),
(78, 19),
(79, 19),
(80, 19),
(81, 20),
(82, 20),
(83, 20),
(84, 21),
(85, 21),
(86, 22),
(87, 22),
(88, 22),
(89, 23),
(90, 23),
(91, 23),
(92, 24),
(93, 24),
(94, 25),
(95, 26),
(96, 26),
(97, 26),
(98, 27),
(99, 27),
(100, 27),
(101, 28),
(102, 28),
(103, 29),
(104, 29),
(105, 29),
(106, 29),
(107, 30),
(108, 30);

-- --------------------------------------------------------

--
-- Structure de la table `food`
--

DROP TABLE IF EXISTS `food`;
CREATE TABLE IF NOT EXISTS `food` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `food_name` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `food_type` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `food_class` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `ingredient` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `food`
--

INSERT INTO `food` (`id`, `food_name`, `food_type`, `food_class`, `ingredient`) VALUES
(1, 'Ris de veau à la maréchale', 'Plat principal', 'Viande', 'Veau'),
(2, 'Coq au vin', 'Plat principal', 'Viande', 'Volaille'),
(3, 'Pizza', 'Plat principal', 'Plat unique', 'Tomates'),
(4, 'Pissaladière', 'Entrée', 'Plat unique', 'Oignon'),
(5, 'Rôti de Veau', 'Plat principal', 'Viande', 'Veau'),
(6, 'Rôti de Boeuf', 'Plat principal', 'Viande', 'Boeuf'),
(7, 'Baeckeoffe', 'Plat principal', 'Plat unique', 'Veau'),
(8, 'Oeuf sur le plat', 'Plat principal', 'Plat unique', 'Oeuf'),
(9, '  Fondue savoyarde', 'Plat principal', 'Plat unique', 'Fromage'),
(10, 'Tarte aux Poires', 'Dessert', 'Fruits', 'Poires'),
(11, 'Saint-Jacques et Foie gras poêlés', 'Entrée', 'Fruits de mer et crustacés', 'Saint-Jacques'),
(12, 'Sole meunière', 'Plat principal', 'Poisson', 'Sole'),
(13, 'Gigot d\'Agneau', 'Plat principal', 'Viande', 'Agneau'),
(14, 'Homard grillé au Beurre blanc', 'Plat principal', 'Fruits de mer et crustacés', 'Homard'),
(15, 'Maquereaux au Vin blanc', 'Entrée', 'Poisson', 'Maquereaux'),
(16, 'Lapin au cidre', 'Plat principal', 'Viande', 'Lapin'),
(17, 'Civet de Lapin', 'Plat principal', 'Viande', 'Lapin'),
(18, 'Foie gras aux Raisins', 'Entrée', 'Viande', 'Foie'),
(19, 'Tarte aux Abricots et Amandes', 'Dessert', 'Fruits', 'Abricots'),
(20, 'Cuisses de Poulet au Coca-Cola', 'Plat principal', 'Viande', 'Volaille'),
(21, 'Cailles au Raisins et Girolles', 'Plat principal', 'Viande', 'Volaille'),
(22, 'Bouquets (Crevettes roses)', 'Entrée', 'Fruits de mer et crustacés', 'Crevettes'),
(23, 'Magret de Canard poêlé à l\'Ananas', 'Plat principal', 'Viande', 'Canard'),
(24, 'Choucroute alsacienne', 'Plat principal', 'Plat unique', 'Chou'),
(25, 'Huitres claires', 'Entrée', 'Fruits de mer et crustacés', 'Huîtres'),
(26, 'Avocat au Crabe', 'Entrée', 'Légumes', 'Avocats'),
(27, 'Tarte Ratatouille aux Lardons', 'Plat principal', 'Plat unique', 'Légumes'),
(28, 'Poire au Chocolat et Amandes', 'Dessert', 'Fruits', 'Poire'),
(29, 'Turbot grillé aux Asperges', 'Plat principal', 'Poisson', 'Turbot'),
(30, 'Plateau de Fromages', 'Fromage', 'Fromage', 'Fromage');

-- --------------------------------------------------------

--
-- Structure de la table `wines`
--

DROP TABLE IF EXISTS `wines`;
CREATE TABLE IF NOT EXISTS `wines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wine_name` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `wine_type` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `region` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `wines`
--

INSERT INTO `wines` (`id`, `wine_name`, `wine_type`, `region`) VALUES
(1, 'Chablis', 'Blanc', 'Bourgogne'),
(2, 'Côte de Nuits', 'Rouge', 'Bourgogne'),
(3, 'Mâcon', 'Rouge', 'Bourgogne'),
(4, 'Bourgogne rouge', 'Rouge', 'Bourgogne'),
(5, 'Côte de Beaune', 'Rouge', 'Bourgogne'),
(6, 'Gevrey Chambertin', 'Rouge', 'Bourgogne'),
(7, 'Chambertin', 'Rouge', 'Bourgogne'),
(8, 'Coteaux Varois', 'Rosé', 'Provence'),
(9, 'Bardolino', 'Rouge', 'Italie'),
(10, ' Chiaretto', 'Rosé', 'Italie'),
(11, 'Chianti', 'Rouge', 'Italie'),
(12, 'Lambrusco', 'Rouge', 'Italie'),
(13, 'Listel', 'Pétillant', 'Languedoc-Roussillon'),
(14, 'Blancs', 'Blanc', 'Toutes régions'),
(15, ' Rosés', 'Rosé', 'Toutes régions'),
(16, ' Côtes de Provence', 'Rosé', 'Provence'),
(17, ' Beaumes de Venise', 'Rouge', 'Côte du Rhône'),
(18, 'Côtes de Castillon', 'Rouge', 'Bordeaux'),
(19, ' Côtes de Bourg', 'Rouge', 'Bordeaux'),
(20, 'Beaujolais', 'Rouge', 'Beaujolais'),
(21, 'Savigny les Beaune', 'Rouge', 'Bourgogne'),
(22, 'Vosne Romanée', 'Rouge', 'Bourgogne'),
(23, 'Morgon', 'Rouge', 'Beaujolais'),
(24, 'Côte du Rhône', 'Rouge', 'Vallée du Rhône'),
(25, ' Aloxe Corton', 'Rouge', 'Bourgogne'),
(26, 'Pauillac', 'Rouge', 'Bordeaux'),
(27, 'Châteauneuf du Pape', 'Rouge', 'Vallée du Rhône'),
(28, 'Santenay', 'Rouge', 'Bourgogne'),
(29, 'Pommard', 'Rouge', 'Bourgogne'),
(30, 'Saint-Emilion', 'Rouge', 'Bordeaux'),
(31, ' Mercurey', 'Rouge', 'Bourgogne'),
(32, 'Riesling', 'Blanc', 'Alsace'),
(33, 'Pinot gris', 'Blanc', 'Alsace'),
(34, 'Pinot Noir d\'Alsace', 'Rouge', 'Alsace'),
(35, 'Gewurztraminer', 'Blanc', 'Alsace'),
(36, 'Saint-Amour', 'Rouge', 'Beaujolais'),
(37, 'Côtes du Rhône', 'Rouge', 'Vallée du Rhône'),
(38, 'Côtes du Roussillon Village', 'Rouge', 'Languedoc-Roussillon'),
(39, 'Collioure', 'Rouge', 'Languedoc-Roussillon'),
(40, 'Coteaux du Languedoc', 'Rouge', 'Languedoc-Roussillon'),
(41, ' Vins rosés', 'Rosé', 'Toutes régions'),
(42, ' Roussette', 'Blanc', 'Savoie'),
(43, 'Chignin', 'Blanc', 'Savoie'),
(44, 'Mondeuse', 'Rouge', 'Savoie'),
(45, 'Abymes', 'Blanc', 'Savoie'),
(46, 'Apremont', 'Blanc', 'Savoie'),
(47, ' Vins d Alsace', 'Blanc', 'Alsace'),
(48, 'Champagne', 'Pétillant', 'Champagne'),
(49, 'Loupiac', 'Blanc', 'Bordeaux'),
(50, 'Vouvray', 'Blanc', 'Vallée de la Loire'),
(51, 'Asti', 'Pétillant', 'Italie'),
(52, ' Muscat', 'Blanc', 'Languedoc-Roussillon'),
(53, 'Pessac Léognan blanc', 'Blanc', 'Bordeaux'),
(54, 'Châteauneuf du Pape blanc', 'Blanc', 'Vallée du Rhône'),
(55, 'Sauternes', 'Blanc', 'Bordeaux'),
(56, ' Liebfraumilch', 'Blanc', 'Allemagne'),
(57, 'Pouilly Fuissé', 'Blanc', 'Bourgogne'),
(58, 'Cheverny', 'Blanc', 'Loire'),
(59, 'Ménetou Salon', 'Blanc', 'Loire'),
(60, 'Meursault', 'Blanc', 'Bourgogne'),
(61, ' Pessac Léognan', 'Rouge', 'Bordeaux'),
(62, 'Gigondas', 'Rouge', 'Vallée du Rhône'),
(63, 'Muscat sec', 'Blanc', 'Languedoc-Roussillon'),
(64, ' Touraine', 'Rosé', 'Loire'),
(65, 'Saumur', 'Rouge', 'Loire'),
(66, 'Muscadet sur lie', 'Blanc', 'Loire'),
(67, 'Sauvignon', 'Blanc', 'Loire'),
(68, ' Gros Plant', 'Pétillant', 'Loire'),
(69, 'Saumur-Champigny', 'Rouge', 'Loire'),
(70, ' Touraine rouge', 'Rouge', 'Loire'),
(71, 'Cidre brut', 'Pétillant', 'Bretagne'),
(72, 'Côtes du Roussillon', NULL, 'Languedoc-Roussillon'),
(73, 'Juliénas', 'Rouge', 'Beaujolais'),
(74, 'Chinon', 'Rouge', 'Loire'),
(75, 'Côtes de Beaune', 'Rouge', 'Bourgogne'),
(76, 'Gewurztraminer Vendanges tardives', 'Blanc', 'Alsace'),
(77, 'Fronton', 'Rouge', 'Sud-Ouest'),
(78, 'Muscat d\'Alsace', 'Blanc', 'Alsace'),
(79, 'Champagne rosé', 'Pétillant', 'Champagne'),
(80, 'Asti spumante', 'Blanc', 'Italie'),
(81, 'Bergerac', 'Rouge', 'Sud-Ouest'),
(82, 'Madiran', 'Rouge', 'Sud-Ouest'),
(83, 'Cahors', 'Rouge', 'Sud-Ouest'),
(84, 'Crozes Hermitage', 'Rouge', 'Vallée du Rhône'),
(85, 'Moulin à vent', 'Rouge', 'Beaujolais'),
(86, 'Saumur blanc', 'Blanc', 'Loire'),
(87, 'Entre-deux-mers', 'Blanc', 'Bordeaux'),
(88, 'Touraine Sauvignon', 'Blanc', 'Loire'),
(89, 'Picpoul de pinet', 'Blanc', 'Languedoc-Roussillon'),
(90, ' Côtes de Nuit', 'Rouge', 'Bourgogne'),
(91, 'Rosé de Provence', 'Rosé', 'Provence'),
(92, ' Sylvaner', 'Blanc', 'Alsace'),
(93, ' Pinot', 'Blanc', 'Alsace'),
(94, 'Edelzwicker', 'Blanc', 'Alsace'),
(95, '', NULL, NULL),
(96, ' Pinot blanc d\'Alsace', 'Blanc', 'Alsace'),
(97, 'Viognier', 'Blanc', 'Languedoc-Roussillon'),
(98, ' Rosés de Provence', 'Rosé', '¨Provence'),
(99, 'Coteaux d\'Aix', 'Rouge', 'Provence'),
(100, 'Chinon rosé', 'Rosé', 'Loire'),
(101, ' Montbazillac', 'Blanc', 'Sud-Ouest'),
(102, ' Poiré', 'Pétillant', 'Normandie'),
(103, 'cheverny', 'Rouge', 'Loire'),
(104, 'saumur-champigny', 'Rouge', 'Loire'),
(105, 'condrieu', 'Blanc', 'Vallée du Rhône'),
(106, 'meursault', 'Rouge', 'Bourgogne'),
(107, 'Bourgogne', 'Rouge', 'Toutes régions'),
(108, 'Beaune', 'Rouge', 'Bourgogne');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `accords`
--
ALTER TABLE `accords`
  ADD CONSTRAINT `FK_accords_id` FOREIGN KEY (`id`) REFERENCES `wines` (`id`),
  ADD CONSTRAINT `FK_accords_id_food` FOREIGN KEY (`id_food`) REFERENCES `food` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
