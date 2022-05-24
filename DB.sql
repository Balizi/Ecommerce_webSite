-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 24 mai 2022 à 12:44
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
(1, 'Balizi', 'Mohamed', 'mrbalizi52@gmail.com', '$2y$12$wxb0wv5EW8nv2p1XjOuogee40mYmOv07vot4v/i5mWqkzWnc2O6mG'),
(3, 'Balizi', 'Mohamed', 'med@gmail.com', '$2y$12$98gwEdMHp4jS2');

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
  `genre` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`idArticle`, `titre`, `description`, `prix`, `image`, `categorie`, `genre`) VALUES
(1, 'Jean 760 coupe skinn', 'Jean 760 coupe skinny pour hommes', 249, 'jeans1.jpg', 'Jeans', 'Homme'),
(2, 'Jeans 779 Regular Fi', 'Jeans 779 Regular Fit pour hommes', 249, 'jeans2.jpg', 'Jeans', 'Homme'),
(3, 'Jean 760 coupe skinn', 'Jean 760 coupe skinny pour hommes', 249, 'jeans3.jpg', 'Jeans', 'Homme'),
(5, 'Jean 760 coupe skinn', 'Jean 760 coupe skinny pour hommes', 249, 'jeans5.jpg', 'Jeans', 'Homme'),
(6, 'Jeans 779 Regular Fi', 'brand 60kg bale mozambique clothes wholesale slim tight ladies used jeans in bales mixed used clothing', 199, 'jeans6.jpg', 'Jeans', 'Homme'),
(7, 'Jean 750 Slim Fit po', 'Suppliers of famous brands---Custom Made stacked jeans men slim fit pants men jeans trouser', 249, 'jeans7.jpg', 'Jeans', 'Homme'),
(8, 'Chemise manches cour', 'Men design shirt Plus size vintage buttons gentleman jack long sleeve shirt men dress luxury Men clothes', 109, 'chemises1.jpg', 'chemises', 'Homme'),
(9, 'Chemise', 'OEM high quality custom logo 100% cotton polyester homme work printing uniform camisas mens golf polo shirt with embroidery', 149, 'chemises2.jpg', 'chemises', 'Homme'),
(10, 'Chemise manches cour', 'Highest quality summer fashion polo tshirts 100% cotton men\'s polo shirt', 109, 'chemises3.jpg', 'chemises', 'Homme'),
(11, 'Chemise manches cour', 'Highest quality summer fashion polo tshirts 100% cotton men\'s polo shirt', 109, 'chemises4.jpg', 'chemises', 'Homme'),
(12, 'Chemise manches cour', 'Custom Men\'s Shirts 100% Cotton Double Breasted Solid Color Custom Logo Short Sleeve Shirts For Men', 109, 'chemises5.jpg', 'chemises', 'Homme'),
(13, 'Chemise', 'New Designers Men\'s Floral Short Sleeve Top Casual Polyester Button Down Short Sleeve Hawaiian Shirt', 79, 'chemises6.jpg', 'chemises', 'Homme'),
(14, 'Pull', 'aaaa', 89, 'tricot1.jpg', 'tricots', 'Homme'),
(15, 'T-shirt', 'Unisex oversize t-shirt Waterproof dirt-resistant polyester printing blank t shirts', 79, 'T-shirt.jpg', 'T-shirt', 'Homme'),
(16, 'Chemise', 'Cette chemise business polyvalent Viccini Collezioni pourvue d’une coupe moderne et de boutons ton sur ton est à la fois élégante.', 79, 'chemises7.jpg', 'chemises', 'Homme'),
(17, 'CASUAL Slim Fit ', 'pratique et confortable. Les poignets à coins cassés et le col classique  viennent compléter le design de cette chemise intemporelle', 219, 'chemises8.jpg', 'chemises', 'Homme'),
(18, 'Chemise', 'cette pièce qui nécessite peu d’entretien est le modèle idéal pour compléter une collection de tenues habillées.', 219, 'chemises9.jpg', 'chemises', 'Homme'),
(19, 'VISION Chandail ', 'Chaud, doux et moelleux : le Pull Homme Col roulé est un basique de l’automne et l\'hiver de qualité supérieure', 199, 'tricots1.jpg', 'tricots', 'Homme'),
(20, 'VISION Chandail en t', 'Super tendance Homme vous pourrez facilement l’accessoiriser avec une ceinture, chaussure et des bijoux.', 199, 'tricots2.jpg', 'tricots', 'Homme'),
(21, 'VISION Chandail en t', 'Chaud, doux et moelleux : le Pull Homme Col roulé est un basique de l’automne et l\'hiver de qualité supérieure,Super tendance Homme vous pourrez facilement l’accessoiriser avec une ceinture, chaussure et des bijoux.', 199, 'tricots3.jpg', 'tricots', 'Homme'),
(22, 'VISION Pull à col ro', 'Chaud, doux et moelleux : le Pull Homme Col roulé est un basique de l’automne et l\'hiver de qualité supérieure,Super tendance Homme vous pourrez facilement l’accessoiriser avec une ceinture, chaussure et des bijoux.', 149, 'tricots4.jpg', 'tricots', 'Homme'),
(23, 'Pull', 'Chaud, doux et moelleux : le Pull Homme Col roulé est un basique de l’automne et l\'hiver de qualité supérieure.', 79, 'tricots5.jpg', 'tricots', 'Homme'),
(24, 'Pull en tricot basiq', 'Chaud, doux et moelleux : le Pull Homme Col roulé est un basique de l’automne et l\'hiver de qualité supérieure, Super tendance Homme vous pourrez facilement l’accessoiriser avec une ceinture, chaussure et des bijoux.', 69, 'tricots6.jpg', 'tricots', 'Homme'),
(25, 'Pull', 'Super tendance Homme vous pourrez facilement l’accessoiriser avec une ceinture, chaussure et des bijoux.', 119, 'tricots7.jpg', 'tricots', 'Homme'),
(26, 'Pull', 'Chaud, doux et moelleux : le Pull Homme Col roulé est un basique de l’automne et l\'hiver de qualité supérieure.', 299, 'tricots8.jpg', 'tricots', 'Homme'),
(27, 'T-shirt', 'bolio est un studio graphique de t-shirts personnalisés. Ce qui nous distingue', 69, 'T-shirt1.jpg', 'T-shirt', 'Homme'),
(28, 'CASUAL T-shirt homme', ' c\'est que nous offrons aux clients un moyen interactif de personnaliser les produits', 69, 'T-shirt2.jpg', 'T-shirt', 'Homme'),
(29, 'T-shirt', 'Chaque design, visuel, est pensé et dessiné aux Maroc Mode de Tous les t-shirts pour hommes sont 100% biologiques! Il est temps de vous faire dorloter ou de le présenter à votre bien-aimé', 69, 'T-shirt3.jpg', 'T-shirt', 'Homme'),
(30, 'T-shirt pour hommes ', 'Que nos T-Shirt soient imprimées toutes ces étapes sont exécutées avec amour dans notre atelier .', 69, 'T-shirt4.jpg', 'T-shirt', 'Homme'),
(31, 'T-shirt pour hommes ', 'Monsieur Nous proposons un choix de T-Shirt pour homme , uniques, cool et amusantes, tout en travaillant leurs modèles dans la plus haute qualité. ', 69, 'T-shirt5.jpg', 'T-shirt', 'Homme'),
(32, 'T-shirt pour hommes ', 'Monsieur Nous proposons un choix de T-Shirt pour homme , uniques, cool et amusantes, tout en travaillant leurs modèles dans la plus haute qualité.', 69, 'T-shirt6.jpg', 'T-shirt', 'Homme'),
(33, 'T-shirt pour hommes ', 'c\'est que nous offrons aux clients un moyen interactif de personnaliser les produits, ainsi qu\'une expérience unique et facile pour choisir un cadeau parfait pour leurs proches', 69, 'T-shirt7.jpg', 'T-shirt', 'Homme'),
(34, 'T-shirt pour hommes ', 'bolio est un studio graphique de t-shirts personnalisés. Ce qui nous distingue,', 69, 'T-shirt8.jpg', 'T-shirt', 'Homme'),
(35, 'Jeans 779 Regular Fi', 'Men Fashion Drawstring Zip Strips Pockets Ankle Tied Long Pants Sports TrousersSpecifications:Solid color pants features zippers and stripes', 269, 'Jeans8.jpg', 'Jeans', 'Homme'),
(36, 'Pantalon en jean 730', 'which add fashion elements to this pants.It is suitable for daily wear', 179, 'Jeans9.jpg', 'Jeans', 'Homme'),
(37, 'Jeans 779 Regular Fi', 'Men Fashion Drawstring Zip Strips Pockets Ankle Tied Long Pants Sports TrousersSpecifications:Solid color pants features zippers and stripes', 299, 'Jeans10.jpg', 'Jeans', 'Homme'),
(38, 'Pantalon homme textu', 'Toute la sensibilité et la qualité de la mode Homme se retrouvent chez WEEKWIK alliant style et créativité à un savoir-faire reconnu.', 199, 'pantalons1.jpg', 'pantalons', 'Homme'),
(39, 'CASUAL Pantalon de J', 'Poche zippée Tissu extensible de mélange de coton Taille élastique avec cordon ajustable', 269, 'pantalons2.jpg', 'pantalons', 'Homme'),
(40, 'Pantalon', 'Tissu principal %72-POLYESTER %25-VİSCOSE %3-ÉLASTHANE', 179, 'pantalons3.jpg', 'pantalons', 'Homme'),
(41, 'Pantalon', 'Tissu principal %49-COTON %32-POLYESTER %16-VİSCOSE %3-ÉLASTHANE', 249, 'pantalons4.jpg', 'pantalons', 'Homme'),
(42, 'Pantalon homme LCW V', 'Nous vous proposons un choix très varié de pantalons Chino chics dans différentes tailles.', 199, 'pantalons5.jpg', 'pantalons', 'Homme'),
(43, 'Pantalon Homme LCW V', 'Détail d’attache ajustable à la taille\r\nPoche sur deux côtés', 249, 'pantalons6.jpg', 'pantalons', 'Homme'),
(44, 'Pantalon', 'Tissu de mélange de coton\r\n5 poches', 219, 'pantalons7.jpg', 'pantalons', 'Homme'),
(45, 'Pantalon', 'Tissu 100% coton', 179, 'pantalons8.jpg', 'pantalons', 'Homme'),
(46, 'Pantalon', 'Poche sur deux côtés Fabriqué en tissu de lin', 179, 'pantalons9.jpg', 'pantalons', 'Homme'),
(47, 'Shorts', 'Détail d’attache à la taille Poche sur deux côtés', 139, 'Shorts1.jpg', 'Shorts', 'Homme'),
(48, 'Shorts', 'Taille élastique avec cordon ajustable Poche sur deux côtés', 129, 'shorts2.jpg', 'Shorts', 'Homme'),
(49, 'Pantacourt', 'Tissu de sweatshirt léger Taille élastique avec cordon ajustable Poches à zip des deux cotés', 139, 'shorts3.jpg', 'Shorts', 'Homme'),
(50, 'Robe', 'Ceinture Partie avant avec fermeture par boutons Sans doublure Product Length : 135 cm', 269, 'Robes1.jpg', 'robes', 'femme'),
(51, 'Robe', 'Product Length: 125 cm 100% viscose Du tissu belmando Partie avant avec fermeture par boutons Chevilles élastiques', 249, 'robes2.jpg', 'robes', 'femme'),
(52, 'Robe', 'Product Length: 125 cm 100% viscose Du tissu belmando Partie avant avec fermeture par boutons Chevilles élastiques', 249, 'robes3.jpg', 'robes', 'femme'),
(53, 'Robe', 'Sans doublure Partie avant avec fermeture par boutons Tissu en popeline Col volanté Poignets à boutons Longueur du produit : 135 cm', 269, 'robes4.jpg', 'robes', 'femme'),
(54, 'Robe', 'Fermeture de taille avec le même tissu Partie avant avec fermeture par boutons Poignets à boutons Partie avant avec double poche de poitrine Product Length: 125 cm', 249, 'robes5.jpg', 'robes', 'femme'),
(55, 'Robe en viscose exte', 'Tissu extensible fluide', 139, 'robes6.jpg', 'robes', 'femme'),
(56, 'Robe', 'Fermeture de taille avec le même tissu Chevilles élastiques Manches avec détail volants Longueur du produit : 135 cm', 249, 'robes7.jpg', 'robes', 'femme'),
(57, 'Robe', 'Ceinture avec le même tissu Chevilles élastiques Partie avant avec fermeture par boutons Tissu mélangé de viscose Partie inférieure avec détail volanté', 329, 'robes8.jpg', 'robes', 'femme'),
(58, 'Robe', 'Sans doublure Fermeture par boutons invisibles Tissu mélangé de viscose Partie inférieure avec détail volanté Détail d’attache à la taille Ourlet de manches élastique Longueur du produit : 135 cm', 269, 'robes9.jpg', 'robes', 'femme'),
(59, 'Chemise', 'Tissu principal %100-VİSCOSE', 109, 'Chemise1.jpg', 'chemise', 'femme'),
(60, 'T-shirt de maternité', 'Tissu en coton peigné de mélange de coton\r\nYou can use it comfortably during and after pregnancy.', 99, 'maternite1.jpg', 'maternite', 'femme'),
(61, 'Pull', 'Tissu principal %74-VİSCOSE %26-POLYAMIDE/NYLON Le col:', 89, 'Tricots1.jpg', 'Tricots', 'femme'),
(62, 'Tunique femme LCW CL', 'Tissu de sweatshirt léger Striped pattern', 149, 'Tuniques1.jpg', 'tuniques', 'femme');

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
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idClent`);

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
  MODIFY `idArticle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `idClent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
