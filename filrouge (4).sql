-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 13 juin 2022 à 11:05
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `filrouge`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(11) NOT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `prenom` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`idAdmin`, `nom`, `prenom`, `email`, `password`) VALUES
(1, 'Balizi', 'Mohamed', 'mrbalizi52@gmail.com', '$2y$12$wxb0wv5EW8nv2p1XjOuogee40mYmOv07vot4v/i5mWqkzWnc2O6mG');

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `idArticle` int(11) NOT NULL,
  `titre` varchar(20) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `prix` float DEFAULT NULL,
  `image` varchar(20) DEFAULT NULL,
  `categorie` varchar(20) DEFAULT NULL,
  `genre` varchar(10) DEFAULT NULL,
  `qte` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`idArticle`, `titre`, `description`, `prix`, `image`, `categorie`, `genre`, `qte`) VALUES
(2, 'Jeans 779 Regular Fi', 'Jeans 779 Regular Fit pour hommes', 249, 'jeans2.jpg', 'Jeans', 'Homme', 1),
(3, 'Jean 760 coupe skinn', 'Jean 760 coupe skinny pour hommes', 249, 'jeans3.jpg', 'Jeans', 'Homme', 1),
(5, 'Jean 760 coupe skinn', 'Jean 760 coupe skinny pour hommes', 249, 'jeans5.jpg', 'Jeans', 'Homme', 1),
(6, 'Jeans 779 Regular Fi', 'brand 60kg bale mozambique clothes wholesale slim tight ladies used jeans in bales mixed used clothing', 199, 'jeans6.jpg', 'Jeans', 'Homme', 1),
(7, 'Jean 750 Slim Fit po', 'Suppliers of famous brands---Custom Made stacked jeans men slim fit pants men jeans trouser', 249, 'jeans7.jpg', 'Jeans', 'Homme', 1),
(8, 'Chemise manches cour', 'Men design shirt Plus size vintage buttons gentleman jack long sleeve shirt men dress luxury Men clothes', 109, 'chemises1.jpg', 'chemises', 'Homme', 1),
(9, 'Chemise', 'OEM high quality custom logo 100% cotton polyester homme work printing uniform camisas mens golf polo shirt with embroidery', 149, 'chemises2.jpg', 'chemises', 'Homme', 1),
(10, 'Chemise manches cour', 'Highest quality summer fashion polo tshirts 100% cotton men\'s polo shirt', 109, 'chemises3.jpg', 'chemises', 'Homme', 1),
(11, 'Chemise manches cour', 'Highest quality summer fashion polo tshirts 100% cotton men\'s polo shirt', 109, 'chemises4.jpg', 'chemises', 'Homme', 1),
(12, 'Chemise manches cour', 'Custom Men\'s Shirts 100% Cotton Double Breasted Solid Color Custom Logo Short Sleeve Shirts For Men', 109, 'chemises5.jpg', 'chemises', 'Homme', 1),
(13, 'Chemise', 'New Designers Men\'s Floral Short Sleeve Top Casual Polyester Button Down Short Sleeve Hawaiian Shirt', 79, 'chemises6.jpg', 'chemises', 'Homme', 1),
(14, 'Pull', 'Chaud, doux et moelleux : le Pull Homme Col roulé est un basique de l’automne et l\'hiver de qualité supérieure.', 89, 'tricot1.jpg', 'tricots', 'Homme', 1),
(15, 'T-shirt', 'Unisex oversize t-shirt Waterproof dirt-resistant polyester printing blank t shirts', 79, 'T-shirt.jpg', 'T-shirt', 'Homme', 1),
(16, 'Chemise', 'Cette chemise business polyvalent Viccini Collezioni pourvue d’une coupe moderne et de boutons ton sur ton est à la fois élégante.', 79, 'chemises7.jpg', 'chemises', 'Homme', 1),
(17, 'CASUAL Slim Fit ', 'pratique et confortable. Les poignets à coins cassés et le col classique  viennent compléter le design de cette chemise intemporelle', 219, 'chemises8.jpg', 'chemises', 'Homme', 1),
(18, 'Chemise', 'cette pièce qui nécessite peu d’entretien est le modèle idéal pour compléter une collection de tenues habillées.', 219, 'chemises9.jpg', 'chemises', 'Homme', 1),
(20, 'VISION Chandail en t', 'Super tendance Homme vous pourrez facilement l’accessoiriser avec une ceinture, chaussure et des bijoux.', 199, 'tricots2.jpg', 'tricots', 'Homme', 1),
(21, 'VISION Chandail en t', 'Chaud, doux et moelleux : le Pull Homme Col roulé est un basique de l’automne et l\'hiver de qualité supérieure,Super tendance Homme vous pourrez facilement l’accessoiriser avec une ceinture, chaussure et des bijoux.', 199, 'tricots3.jpg', 'tricots', 'Homme', 1),
(22, 'VISION Pull à col ro', 'Chaud, doux et moelleux : le Pull Homme Col roulé est un basique de l’automne et l\'hiver de qualité supérieure,Super tendance Homme vous pourrez facilement l’accessoiriser avec une ceinture, chaussure et des bijoux.', 149, 'tricots4.jpg', 'tricots', 'Homme', 1),
(23, 'Pull', 'Chaud, doux et moelleux : le Pull Homme Col roulé est un basique de l’automne et l\'hiver de qualité supérieure.', 79, 'tricots5.jpg', 'tricots', 'Homme', 1),
(24, 'Pull en tricot basiq', 'Chaud, doux et moelleux : le Pull Homme Col roulé est un basique de l’automne et l\'hiver de qualité supérieure, Super tendance Homme vous pourrez facilement l’accessoiriser avec une ceinture, chaussure et des bijoux.', 69, 'tricots6.jpg', 'tricots', 'Homme', 1),
(25, 'Pull', 'Super tendance Homme vous pourrez facilement l’accessoiriser avec une ceinture, chaussure et des bijoux.', 119, 'tricots7.jpg', 'tricots', 'Homme', 1),
(26, 'Pull', 'Chaud, doux et moelleux : le Pull Homme Col roulé est un basique de l’automne et l\'hiver de qualité supérieure.', 299, 'tricots8.jpg', 'tricots', 'Homme', 1),
(27, 'T-shirt', 'bolio est un studio graphique de t-shirts personnalisés. Ce qui nous distingue', 69, 'T-shirt1.jpg', 'T-shirt', 'Homme', 1),
(28, 'CASUAL T-shirt homme', ' c\'est que nous offrons aux clients un moyen interactif de personnaliser les produits', 69, 'T-shirt2.jpg', 'T-shirt', 'Homme', 1),
(29, 'T-shirt', 'Chaque design, visuel, est pensé et dessiné aux Maroc Mode de Tous les t-shirts pour hommes sont 100% biologiques! Il est temps de vous faire dorloter ou de le présenter à votre bien-aimé', 69, 'T-shirt3.jpg', 'T-shirt', 'Homme', 1),
(30, 'T-shirt pour hommes ', 'Que nos T-Shirt soient imprimées toutes ces étapes sont exécutées avec amour dans notre atelier .', 69, 'T-shirt4.jpg', 'T-shirt', 'Homme', 1),
(31, 'T-shirt pour hommes ', 'Monsieur Nous proposons un choix de T-Shirt pour homme , uniques, cool et amusantes, tout en travaillant leurs modèles dans la plus haute qualité. ', 69, 'T-shirt5.jpg', 'T-shirt', 'Homme', 1),
(32, 'T-shirt pour hommes ', 'Monsieur Nous proposons un choix de T-Shirt pour homme , uniques, cool et amusantes, tout en travaillant leurs modèles dans la plus haute qualité.', 69, 'T-shirt6.jpg', 'T-shirt', 'Homme', 1),
(33, 'T-shirt pour hommes ', 'c\'est que nous offrons aux clients un moyen interactif de personnaliser les produits, ainsi qu\'une expérience unique et facile pour choisir un cadeau parfait pour leurs proches', 69, 'T-shirt7.jpg', 'T-shirt', 'Homme', 1),
(34, 'T-shirt pour hommes ', 'bolio est un studio graphique de t-shirts personnalisés. Ce qui nous distingue,', 69, 'T-shirt8.jpg', 'T-shirt', 'Homme', 1),
(35, 'Jeans 779 Regular Fi', 'Men Fashion Drawstring Zip Strips Pockets Ankle Tied Long Pants Sports TrousersSpecifications:Solid color pants features zippers and stripes', 269, 'Jeans8.jpg', 'Jeans', 'Homme', 1),
(36, 'Pantalon en jean 730', 'which add fashion elements to this pants.It is suitable for daily wear', 179, 'Jeans9.jpg', 'Jeans', 'Homme', 1),
(37, 'Jeans 779 Regular Fi', 'Men Fashion Drawstring Zip Strips Pockets Ankle Tied Long Pants Sports TrousersSpecifications:Solid color pants features zippers and stripes', 299, 'Jeans10.jpg', 'Jeans', 'Homme', 1),
(38, 'Pantalon homme textu', 'Toute la sensibilité et la qualité de la mode Homme se retrouvent chez WEEKWIK alliant style et créativité à un savoir-faire reconnu.', 199, 'pantalons1.jpg', 'pantalons', 'Homme', 1),
(39, 'CASUAL Pantalon de J', 'Poche zippée Tissu extensible de mélange de coton Taille élastique avec cordon ajustable', 269, 'pantalons2.jpg', 'pantalons', 'Homme', 1),
(40, 'Pantalon', 'Tissu principal %72-POLYESTER %25-VİSCOSE %3-ÉLASTHANE', 179, 'pantalons3.jpg', 'pantalons', 'Homme', 1),
(41, 'Pantalon', 'Tissu principal %49-COTON %32-POLYESTER %16-VİSCOSE %3-ÉLASTHANE', 249, 'pantalons4.jpg', 'pantalons', 'Homme', 1),
(42, 'Pantalon homme LCW V', 'Nous vous proposons un choix très varié de pantalons Chino chics dans différentes tailles.', 199, 'pantalons5.jpg', 'pantalons', 'Homme', 1),
(43, 'Pantalon Homme LCW V', 'Détail d’attache ajustable à la taille\r\nPoche sur deux côtés', 249, 'pantalons6.jpg', 'pantalons', 'Homme', 1),
(44, 'Pantalon', 'Tissu de mélange de coton\r\n5 poches', 219, 'pantalons7.jpg', 'pantalons', 'Homme', 1),
(45, 'Pantalon', 'Tissu 100% coton', 179, 'pantalons8.jpg', 'pantalons', 'Homme', 1),
(46, 'Pantalon', 'Poche sur deux côtés Fabriqué en tissu de lin', 179, 'pantalons9.jpg', 'pantalons', 'Homme', 1),
(47, 'Shorts', 'Détail d’attache à la taille Poche sur deux côtés', 139, 'Shorts1.jpg', 'Shorts', 'Homme', 1),
(48, 'Shorts', 'Taille élastique avec cordon ajustable Poche sur deux côtés', 129, 'shorts2.jpg', 'Shorts', 'Homme', 1),
(49, 'Pantacourt', 'Tissu de sweatshirt léger Taille élastique avec cordon ajustable Poches à zip des deux cotés', 139, 'shorts3.jpg', 'Shorts', 'Homme', 1),
(50, 'Robe', 'Ceinture Partie avant avec fermeture par boutons Sans doublure Product Length : 135 cm', 269, 'Robes1.jpg', 'robes', 'femme', 1),
(51, 'Robe', 'Product Length: 125 cm 100% viscose Du tissu belmando Partie avant avec fermeture par boutons Chevilles élastiques', 249, 'robes2.jpg', 'robes', 'femme', 1),
(52, 'Robe', 'Product Length: 125 cm 100% viscose Du tissu belmando Partie avant avec fermeture par boutons Chevilles élastiques', 249, 'robes3.jpg', 'robes', 'femme', 1),
(53, 'Robe', 'Sans doublure Partie avant avec fermeture par boutons Tissu en popeline Col volanté Poignets à boutons Longueur du produit : 135 cm', 269, 'robes4.jpg', 'robes', 'femme', 1),
(54, 'Robe', 'Fermeture de taille avec le même tissu Partie avant avec fermeture par boutons Poignets à boutons Partie avant avec double poche de poitrine Product Length: 125 cm', 249, 'robes5.jpg', 'robes', 'femme', 1),
(55, 'Robe en viscose exte', 'Tissu extensible fluide', 139, 'robes6.jpg', 'robes', 'femme', 1),
(56, 'Robe', 'Fermeture de taille avec le même tissu Chevilles élastiques Manches avec détail volants Longueur du produit : 135 cm', 249, 'robes7.jpg', 'robes', 'femme', 1),
(57, 'Robe', 'Ceinture avec le même tissu Chevilles élastiques Partie avant avec fermeture par boutons Tissu mélangé de viscose Partie inférieure avec détail volanté', 329, 'robes8.jpg', 'robes', 'femme', 1),
(58, 'Robe', 'Sans doublure Fermeture par boutons invisibles Tissu mélangé de viscose Partie inférieure avec détail volanté Détail d’attache à la taille Ourlet de manches élastique Longueur du produit : 135 cm', 269, 'robes9.jpg', 'robes', 'femme', 1),
(59, 'Chemise', 'Tissu principal %100-VİSCOSE', 109, 'Chemise1.jpg', 'chemise', 'femme', 1),
(60, 'T-shirt de maternité', 'Tissu en coton peigné de mélange de coton\r\nYou can use it comfortably during and after pregnancy.', 99, 'maternite1.jpg', 'maternite', 'femme', 1),
(61, 'Pull', 'Tissu principal %74-VİSCOSE %26-POLYAMIDE/NYLON Le col:', 89, 'Tricots1.jpg', 'Tricots', 'femme', 1),
(62, 'Tunique femme LCW CL', 'Tissu de sweatshirt léger Striped pattern', 149, 'Tuniques1.jpg', 'tuniques', 'femme', 1),
(63, 'Chemise', 'Tissu principal: 100% viscose\r\nPartie avant avec fermeture par boutons\r\nPoignets à boutons', 109, 'Chemise2.jpg', 'chemise', 'femme', 1),
(64, 'Tunique', 'Tissu popeline extensible en coton\r\nPartie avant avec fermeture par boutons\r\nLongueur du produit : 89 cm', 159, 'Chemise3.jpg', 'chemise', 'femme', 1),
(65, 'T-shirt de Maternité', 'Détail de fente sur les côtés\r\nTissu 100% coton peigné\r\nYou can use it comfortably during and after pregnancy.', 119, 'maternite2.jpg', 'maternite', 'femme', 1),
(66, 'T-shirt de maternité', 'Tissu 100% coton peigné\r\nYou can use it comfortably during and after pregnancy.', 139, 'maternite3.jpg', 'maternite', 'femme', 1),
(67, 'Pull de maternité en', 'Chevilles et bas côtelés\r\nYou can use it comfortably during and after pregnancy.', 129, 'Tricots2.jpg', 'Tricots', 'femme', 1),
(68, 'Chandail tricoté à m', 'Striped pattern', 119, 'Tricots3.jpg', 'Tricots', 'femme', 1),
(69, 'Tunique Femme A Manc', 'Chevilles élastiques\r\nPartie avant avec fermeture par boutons\r\nTissu mélangé de viscose\r\nLongueur du produit : 109 cm', 219, 'Tuniques2.jpg', 'tuniques', 'femme', 1),
(70, 'Tunique', 'Chevilles et bas côtelés', 269, 'Tuniques3.jpg', 'tuniques', 'femme', 1),
(71, 'T-shirt', 'JTissu 100% coton peigné', 89, 'T-shirt1.jpg', 'T-shirt', 'enfant', 1),
(72, 'T-shirt Garçon à Man', 'Tissu en coton peigné de mélange de coton', 54, 'T-shirt2.jpg', 'T-shirt', 'enfant', 1),
(73, 'T-shirt.', 'Tissu en coton peigné de mélange de coton', 79, 'T-shirt3.jpg', 'T-shirt', 'enfant', 1),
(74, 'Chemise', 'Tissu principal %100-COTON', 79, 'Chemise1.jpg', 'Chemise', 'enfant', 1),
(75, 'Chemise', 'Tissu 100% cotonPartie avant avec poche de poitrine unique', 59, 'Chemise2.jpg', 'Chemise', 'enfant', 1),
(76, 'Chemise', 'Tissu 100% cotonPartie avant avec poche de poitrine unique', 59, 'Chemise3.jpg', 'Chemise', 'enfant', 1),
(77, 'Pantalon en Jean Bas', 'Tissu extensible en coton', 179, 'Jeans1.jpg', 'Jeans', 'enfant', 1),
(78, 'Pantalon en jean ski', 'Tissu extensible de mélange de coton', 179, 'Jeans2.jpg', 'Jeans', 'enfant', 1),
(79, 'Couverture douce à m', 'Tissu extensible de mélange de coton', 139, 'Jeans3.jpg', 'Jeans', 'enfant', 1);

-- --------------------------------------------------------

--
-- Structure de la table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `qte` int(11) DEFAULT NULL,
  `idClient` int(11) DEFAULT NULL,
  `idArticle` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `idClent` int(11) NOT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `prenom` varchar(20) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `tele` varchar(20) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `genre` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idClent`, `nom`, `prenom`, `email`, `tele`, `password`, `genre`) VALUES
(1, 'blz', 'med', 'med@gmail.com', '123456', '$2y$12$x7VMFoAGAC3EEGA7yGj62uW3aPc9V5rkaKfPfXZgqLyx.o6m2lNNG', 'M');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `idCmd` int(11) NOT NULL,
  `idArticle` int(11) DEFAULT NULL,
  `idClient` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`idCmd`, `idArticle`, `idClient`) VALUES
(1, 22, 1),
(2, 40, 1),
(3, 64, 1);

-- --------------------------------------------------------

--
-- Structure de la table `imgdetails`
--

CREATE TABLE `imgdetails` (
  `idImg` int(11) NOT NULL,
  `idArt` int(11) DEFAULT NULL,
  `image` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `imgdetails`
--

INSERT INTO `imgdetails` (`idImg`, `idArt`, `image`) VALUES
(1, 8, 'chemises11.jpg'),
(2, 8, 'chemises12.jpg'),
(3, 8, 'chemises13.jpg'),
(4, 11, 'chemises42.jpg'),
(5, 11, 'chemises43.jpg'),
(6, 11, 'chemises44.jpg'),
(7, 11, 'chemises45.jpg'),
(8, 17, 'chemises881.jpg'),
(9, 17, 'chemises882.jpg'),
(10, 17, 'chemises883.jpg'),
(11, 17, 'chemises884.jpg'),
(12, 18, 'chemises991.jpg'),
(13, 18, 'chemises992.jpg'),
(14, 18, 'chemises993.jpg'),
(15, 18, 'chemises994.jpg'),
(16, 9, 'chemises21.jpg'),
(17, 9, 'chemises22.jpg'),
(18, 9, 'chemises23.jpg'),
(19, 9, 'chemises24.jpg'),
(20, 20, 'tricots222.jpg'),
(21, 20, 'tricots224.jpg'),
(22, 20, 'tricots225.jpg'),
(23, 20, 'tricots221.jpg'),
(24, 21, 'tricots331.jpg'),
(25, 21, 'tricots332.jpg'),
(26, 21, 'tricots334.jpg'),
(27, 21, 'tricots335.jpg'),
(28, 22, 'tricots441.jpg'),
(29, 22, 'tricots442.jpg'),
(30, 22, 'tricots443.jpg'),
(31, 22, 'tricots44.jpg'),
(32, 25, 'tricots772.jpg'),
(33, 25, 'tricots771.jpg'),
(34, 25, 'tricots77.jpg'),
(35, 24, 'tricots661.jpg'),
(36, 24, 'tricots662.jpg'),
(37, 24, 'tricots66.jpg'),
(38, 27, 'T-shirt113.jpg'),
(39, 27, 'T-shirt11.jpg'),
(40, 27, 'T-shirt112.jpg'),
(41, 28, 'T-shirt22.jpg'),
(42, 28, 'T-shirt221.jpg'),
(43, 28, 'T-shirt222.jpg'),
(44, 28, 'T-shirt223.jpg'),
(45, 29, 'T-shirt334.jpg'),
(46, 29, 'T-shirt33.jpg'),
(47, 29, 'T-shirt331.jpg'),
(48, 30, 'T-shirt445.jpg'),
(49, 30, 'T-shirt442.jpg'),
(50, 30, 'T-shirt441.jpg'),
(51, 30, 'T-shirt44.jpg'),
(52, 31, 'T-shirt552.jpg'),
(53, 31, 'T-shirt551.jpg'),
(54, 31, 'T-shirt55.jpg'),
(55, 34, 'T-shirt883.jpg'),
(56, 34, 'T-shirt882.jpg'),
(57, 34, 'T-shirt881.jpg'),
(58, 34, 'T-shirt88.jpg'),
(59, 33, 'T-shirt773.jpg'),
(60, 33, 'T-shirt772.jpg'),
(61, 33, 'T-shirt771.jpg'),
(62, 33, 'T-shirt77.jpg'),
(63, 32, 'T-shirt661.jpg'),
(64, 32, 'T-shirt662.jpg'),
(65, 32, 'T-shirt663.jpg'),
(66, 32, 'T-shirt66.jpg'),
(87, 2, 'Jeans223.jpg'),
(88, 2, 'Jeans22.jpg'),
(89, 2, 'Jeans221.jpg'),
(90, 2, 'Jeans222.jpg'),
(91, 3, 'Jeans334.jpg'),
(92, 3, 'Jeans333.jpg'),
(93, 3, 'Jeans332.jpg'),
(94, 3, 'Jeans331.jpg'),
(95, 5, 'Jeans551.jpg'),
(96, 5, 'Jeans552.jpg'),
(97, 5, 'Jeans553.jpg'),
(98, 5, 'Jeans554.jpg'),
(99, 6, 'Jeans66.jpg'),
(100, 6, 'Jeans661.jpg'),
(101, 6, 'Jeans662.jpg'),
(102, 6, 'Jeans663.jpg'),
(103, 7, 'Jeans773.jpg'),
(104, 7, 'Jeans772.jpg'),
(105, 7, 'Jeans771.jpg'),
(106, 7, 'Jeans77.jpg'),
(107, 35, 'Jeans88.jpg'),
(108, 35, 'Jeans881.jpg'),
(109, 35, 'Jeans882.jpg'),
(110, 35, 'Jeans883.jpg'),
(111, 36, 'Jeans99.jpg'),
(112, 36, 'Jeans991.jpg'),
(113, 36, 'Jeans992.jpg'),
(114, 36, 'Jeans993.jpg'),
(115, 37, 'Jeans101.jpg'),
(116, 37, 'Jeans102.jpg'),
(117, 37, 'Jeans103.jpg'),
(118, 37, 'Jeans104.jpg'),
(119, 38, 'pantalons11.jpg'),
(120, 38, 'pantalons12.jpg'),
(121, 38, 'pantalons13.jpg'),
(122, 38, 'pantalons14.jpg'),
(123, 39, 'pantalons21.jpg'),
(124, 39, 'pantalons22.jpg'),
(125, 39, 'pantalons23.jpg'),
(126, 39, 'pantalons24.jpg'),
(127, 40, 'pantalons3.jpg'),
(128, 40, 'pantalons31.jpg'),
(129, 40, 'pantalons32.jpg'),
(130, 40, 'pantalons33.jpg'),
(131, 41, 'pantalons4.jpg'),
(132, 41, 'pantalons41.jpg'),
(133, 41, 'pantalons42.jpg'),
(134, 41, 'pantalons43.jpg'),
(135, 42, 'pantalons51.jpg'),
(136, 42, 'pantalons52.jpg'),
(137, 42, 'pantalons53.jpg'),
(138, 42, 'pantalons54.jpg'),
(139, 43, 'pantalons6.jpg'),
(140, 43, 'pantalons61.jpg'),
(141, 43, 'pantalons62.jpg'),
(142, 43, 'pantalons63.jpg'),
(143, 45, 'pantalons84.jpg'),
(144, 45, 'pantalons81.jpg'),
(145, 45, 'pantalons82.jpg'),
(146, 45, 'pantalons83.jpg'),
(147, 46, 'pantalons9.jpg'),
(148, 46, 'pantalons91.jpg'),
(149, 46, 'pantalons92.jpg'),
(150, 46, 'pantalons93.jpg'),
(151, 44, 'pantalons71.jpg'),
(152, 44, 'pantalons72.jpg'),
(153, 44, 'pantalons73.jpg'),
(154, 44, 'pantalons74.jpg'),
(155, 47, 'shorts1.jpg'),
(156, 47, 'shorts12.jpg'),
(157, 47, 'shorts13.jpg'),
(158, 47, 'shorts14.jpg'),
(159, 48, 'shorts2.jpg'),
(160, 48, 'shorts21.jpg'),
(161, 48, 'Shorts22.jpg'),
(162, 49, 'Shorts3.jpg'),
(163, 49, 'Shorts34.jpg'),
(164, 49, 'Shorts35.jpg'),
(165, 49, 'Shorts36.jpg'),
(166, 59, 'Chemise11.jpg'),
(167, 59, 'Chemise12.jpg'),
(168, 59, 'Chemise13.jpg'),
(169, 59, 'Chemise14.jpg'),
(170, 63, 'Chemise22.jpg'),
(171, 63, 'Chemise23.jpg'),
(172, 63, 'Chemise24.jpg'),
(173, 63, 'Chemise25.jpg'),
(174, 64, 'Chemise31.jpg'),
(175, 64, 'Chemise32.jpg'),
(176, 64, 'Chemise33.jpg'),
(177, 64, 'Chemise34.jpg'),
(178, 60, 'maternite11.jpg'),
(179, 60, 'maternite12.jpg'),
(180, 60, 'maternite13.jpg'),
(181, 60, 'maternite14.jpg'),
(182, 65, 'maternite21.jpg'),
(183, 65, 'maternite22.jpg'),
(184, 65, 'maternite23.jpg'),
(185, 65, 'maternite24.jpg'),
(186, 66, 'maternite31.jpg'),
(187, 66, 'maternite32.jpg'),
(188, 66, 'maternite33.jpg'),
(189, 66, 'maternite34.jpg'),
(190, 61, 'Tricots1.jpg'),
(191, 61, 'Tricots11.jpg'),
(192, 61, 'Tricots12.jpg'),
(193, 67, 'Tricots2.jpg'),
(194, 67, 'Tricots21.jpg'),
(195, 67, 'Tricots22.jpg'),
(196, 67, 'Tricots23.jpg'),
(197, 68, 'Tricots31.jpg'),
(198, 68, 'Tricots32.jpg'),
(199, 68, 'Tricots33.jpg'),
(200, 68, 'Tricots34.jpg'),
(201, 62, 'Tuniques11.jpg'),
(202, 62, 'Tuniques12.jpg'),
(203, 62, 'Tuniques13.jpg'),
(204, 62, 'Tuniques14.jpg'),
(205, 69, 'Tuniques21.jpg'),
(206, 69, 'Tuniques22.jpg'),
(207, 69, 'Tuniques23.jpg'),
(208, 69, 'Tuniques24.jpg'),
(209, 70, 'Tuniques31.jpg'),
(210, 70, 'Tuniques32.jpg'),
(211, 70, 'Tuniques33.jpg'),
(212, 70, 'Tuniques34.jpg'),
(213, 50, 'Robes1.jpg'),
(214, 50, 'Robes12.jpg'),
(215, 50, 'Robes13.jpg'),
(216, 50, 'Robes14.jpg'),
(217, 51, 'robes21.jpg'),
(218, 51, 'robes22.jpg'),
(219, 51, 'robes23.jpg'),
(220, 51, 'robes24.jpg'),
(221, 52, 'robes31.jpg'),
(222, 52, 'robes32.jpg'),
(223, 52, 'robes33.jpg'),
(224, 52, 'robes34.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`idArticle`);

--
-- Index pour la table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idClient` (`idClient`),
  ADD KEY `idArticle` (`idArticle`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idClent`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`idCmd`),
  ADD KEY `idArticle` (`idArticle`),
  ADD KEY `idClient` (`idClient`);

--
-- Index pour la table `imgdetails`
--
ALTER TABLE `imgdetails`
  ADD PRIMARY KEY (`idImg`),
  ADD KEY `fk` (`idArt`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `idArticle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT pour la table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `idClent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `idCmd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `imgdetails`
--
ALTER TABLE `imgdetails`
  MODIFY `idImg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=225;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`idClient`) REFERENCES `client` (`idClent`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`idArticle`) REFERENCES `article` (`idArticle`);

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`idArticle`) REFERENCES `article` (`idArticle`),
  ADD CONSTRAINT `commande_ibfk_2` FOREIGN KEY (`idClient`) REFERENCES `client` (`idClent`);

--
-- Contraintes pour la table `imgdetails`
--
ALTER TABLE `imgdetails`
  ADD CONSTRAINT `fk` FOREIGN KEY (`idArt`) REFERENCES `article` (`idArticle`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
