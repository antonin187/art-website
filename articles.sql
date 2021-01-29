-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 11 déc. 2020 à 12:04
-- Version du serveur :  10.4.16-MariaDB
-- Version de PHP : 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `uri` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `published` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `uri`, `title`, `author`, `content`, `image`, `published`, `created_at`) VALUES
(1, 'premier-article', 'Vincent Van Gogh, peintre du désespoir', 'Julia Konrad', 'Vincent Van Gogh était un immense artiste impressionniste. Des rumeurs racontent qu\'il avait une très bonne mémoire, en même temps, ça rentrait par une oreille mais ça ne ressortait pas par l\'autre.\r\n\r\nVincent Willem van Gogh, né le 30 mars 1853 à Groot-Zundert, aux Pays-Bas, et mort le 29 juillet 1890 à Auvers-sur-Oise, en France, est un peintre et dessinateur néerlandais. Son œuvre pleine de naturalisme, inspirée par l\'impressionnisme et le pointillisme, annonce le fauvisme et l\'expressionnisme.', 'article1.jpg', 1, '2020-12-09 23:57:02'),
(2, 'deuxieme-article', 'La grande dame', 'Zack Forshield', 'La Joconde est le tableau le plus célèbre du monde, si nous devions mettre un prix sur l\'œuvre de Vinci, il s\'élèverait à 2 milliards de dollars. Le prix d\'un studio à Paris.\r\n\r\nLa Joconde, ou Portrait de Mona Lisa, est un tableau de l\'artiste Léonard de Vinci, réalisé entre 1503 et 1506 ou entre 1513 et 15161, et peut-être jusqu\'à 1519 (l\'artiste étant mort cette année-là, le 2 mai), qui représente un portrait mi-corps, probablement celui de la Florentine Lisa Gherardini, épouse de Francesco del Giocondo. Acquise par François Ier, cette peinture à l\'huile sur panneau de bois de peuplier de 77 × 53 cm est exposée au musée du Louvre à Paris. La Joconde est l\'un des rares tableaux attribués de façon certaine à Léonard de Vinci.', 'article2.jpg', 1, '2020-12-09 23:57:02'),
(3, 'troisieme-article', 'La peinture eu XXème siècle : le cubisme', 'John Dudley', 'Le cubisme est un courrant artistique grandement porté par le travail de Picasso. Courant artistique que l\'on retrouve aussi en jouant à Tomb Raider 1.\r\n\r\nLe cubisme est un mouvement artistique du début du xxe siècle, qui constitue une révolution dans la peinture et la sculpture, et influence également l\'architecture, la littérature et la musique. Produites essentiellement dans la région parisienne, les œuvres cubistes représentent des objets analysés, décomposés et réassemblés en une composition abstraite, comme si l\'artiste multipliait les différents points de vue. Elles partagent également une récurrence des formes géométriques et du thème de la modernité.', 'article3.jpg', 1, '2020-12-09 23:57:02'),
(4, 'quatrieme-article', 'L\'art baroque', 'Sophie Leclair', '\r\n\r\nLe baroque est un mouvement artistique qui trouve son origine en Italie dans des villes telles que Rome, Mantoue, Venise et Florence dès le milieu du XVIe siècle et qui se termine au milieu du XVIIe siècle. Il y a un âge baroque différent selon les domaines, qu\'ils soient intellectuels, historiques ou artistiques. Certains critiques y voient une constante culturelle qui revient tout au long de l\'histoire comme l\'a écrit Eugenio d\'Ors.', 'article4.jpg', 1, '2020-12-09 23:57:02'),
(5, 'cinquieme-article', 'Pablo Picasso', 'Rose Rothenberg', 'On raconte que Pablo Picasso roulait déjà en C4 à l\'époque d\'où le nom du modèle mais c\'est pas sûr.\r\n\r\n\r\nPablo Ruiz Picasso, né à Malaga (Espagne) le 25 octobre 1881 et mort le 8 avril 1973 à Mougins (Alpes-Maritimes, France), est un peintre, dessinateur, sculpteur et graveur espagnol ayant passé l\'essentiel de sa vie en France.', 'article5.jpg', 1, '2020-12-10 21:12:32'),
(6, 'sixieme-article', 'Le pop art', 'Eric Simonovsky', '\r\n\r\nLe pop art est un ensemble de phénomènes artistiques intimement liés à l\'esprit d\'une époque, l\'essence d\'un large mouvement culturel des années 1960. Il trouve son origine en Grande-Bretagne au milieu des années 1950, mais se répand rapidement à l\'ensemble du monde occidentalisé dans le contexte de la société industrielle capitaliste. Celle-ci s\'appuie sur les nouvelles technologies en plein essor dont les artistes pop vont s\'emparer et qui touchent toute la sphère culturelle : le pop art se manifeste dans les pratiques et les comportements de toute une génération. Son apparition, dans les arts plastiques en Grande-Bretagne, se manifeste sous l\'impulsion de Richard Hamilton et d\'Eduardo Paolozzi. En France, avec des artistes tels que le sculpteur César. À la fin des années 1950, le pop art américain émerge avec des artistes tels qu\'Andy Warhol, Roy Lichtenstein, Claes Oldenburg, Robert Rauschenberg, Jasper Johns, David Hockney et James Rosenquist. Mais ce mouvement ne se limite plus seulement au domaine des arts plastiques : il touche autant la musique, la mode et les arts appliqués et bien d\'autres domaines de la culture.', 'article6.jpg', 1, '2020-12-10 21:12:32');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
