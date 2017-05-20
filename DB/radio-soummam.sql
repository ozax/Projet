-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 18 Mai 2017 à 23:31
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `radio-soummam`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `idArticle` int(4) NOT NULL,
  `titre` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) CHARACTER SET latin1 NOT NULL,
  `contenu` longtext CHARACTER SET latin1 NOT NULL,
  `datePublication` datetime NOT NULL,
  `idEditeur` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`idArticle`, `titre`, `image`, `contenu`, `datePublication`, `idEditeur`) VALUES
(1, 'Issad Rebrab en conf?rence ? l?universit? de Tizi-Ouzou ?Reprise des multinationales en faillite?, le bon filon?', '/upload/images/news/Issad-Rebrab.jpg', '<p class=\"text-justify\"><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut venenatis sem. Donec pellentesque mattis quam, ac semper sapien elementum suscipit. Donec et lacinia tellus. Cras sit amet commodo quam. Suspendisse potenti. Pellentesque semper libero ante, ut luctus orci lacinia congue. Pellentesque tincidunt justo nisl, sit amet mattis est tempor id. Praesent eu enim ultrices justo elementum facilisis eu sed ipsum. In vulputate scelerisque tellus, ac tincidunt justo porta egestas. Aenean consequat et massa cursus gravida.</b></p>\n                        <br />\n                        <p class=\"text-justify\">Proin blandit gravida diam. Nam blandit viverra porttitor. Nullam nec ultrices mauris. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam mollis metus et tellus varius dignissim. Morbi sollicitudin pretium enim, non tempus elit ultrices eu. Nullam id augue in sapien gravida rhoncus quis id tellus. Ut at aliquam felis. Pellentesque elementum bibendum lacus, id blandit nisl rutrum a. Vestibulum varius sem vitae massa tristique lacinia. Duis pharetra ante ac lectus vestibulum euismod. Vivamus suscipit, massa sit amet congue pretium, augue nulla hendrerit tortor, a dictum tellus arcu nec tortor.</p>\n                        <br />\n                        <p class=\"text-justify\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eleifend accumsan porta. Fusce volutpat luctus mattis. Nam condimentum, tellus eget malesuada sodales, dui dui tincidunt nulla, sed rutrum est est ut velit. Maecenas dictum lorem lorem, eget pulvinar magna facilisis aliquet. Aenean finibus urna tortor, in convallis turpis pellentesque eget. Morbi nisi enim, varius id vulputate eget, vulputate in massa.</p>\n                        <br />\n                        <p class=\"text-justify\">Integer vitae ex dolor. Aenean quis venenatis urna, ut vehicula mi. Donec ac porta arcu. Fusce ullamcorper ligula a urna egestas, vel finibus lacus interdum. Fusce non velit sit amet ipsum dignissim tincidunt. Maecenas feugiat in sapien sit amet sagittis. Praesent in ex eros. Pellentesque sem magna, eleifend quis molestie ac, ultricies vel mi. Etiam volutpat sed diam quis commodo. Vestibulum nec molestie metus, a dictum augue.</p>\n                        <br />\n                        <p class=\"text-justify\">Suspendisse potenti. Nulla dolor nisl, suscipit ut semper ut, hendrerit vitae erat. Morbi tempus ipsum ac efficitur tristique. Integer tincidunt maximus dui, ut cursus diam tincidunt id. Pellentesque auctor aliquet enim, sed gravida nisi cursus id. Morbi at vehicula massa. Vestibulum nec erat congue est ornare lacinia et vel erat. Nunc molestie a magna id dignissim. Proin molestie dapibus cursus. Vestibulum eget lobortis enim, in tempus enim. Sed interdum urna orci, malesuada dapibus sem porttitor non.</p>', '2017-04-19 07:41:19', 1),
(2, 'Issad Rebrab en conf?rence ? l?universit? de Tizi-Ouzou ?Reprise des multinationales en faillite?, le bon filon?', '/upload/images/news/Issad-Rebrab.jpg', '<p class=\"text-justify\"><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut venenatis sem. Donec pellentesque mattis quam, ac semper sapien elementum suscipit. Donec et lacinia tellus. Cras sit amet commodo quam. Suspendisse potenti. Pellentesque semper libero ante, ut luctus orci lacinia congue. Pellentesque tincidunt justo nisl, sit amet mattis est tempor id. Praesent eu enim ultrices justo elementum facilisis eu sed ipsum. In vulputate scelerisque tellus, ac tincidunt justo porta egestas. Aenean consequat et massa cursus gravida.</b></p>\r\n                        <br />\r\n                        <p class=\"text-justify\">Proin blandit gravida diam. Nam blandit viverra porttitor. Nullam nec ultrices mauris. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam mollis metus et tellus varius dignissim. Morbi sollicitudin pretium enim, non tempus elit ultrices eu. Nullam id augue in sapien gravida rhoncus quis id tellus. Ut at aliquam felis. Pellentesque elementum bibendum lacus, id blandit nisl rutrum a. Vestibulum varius sem vitae massa tristique lacinia. Duis pharetra ante ac lectus vestibulum euismod. Vivamus suscipit, massa sit amet congue pretium, augue nulla hendrerit tortor, a dictum tellus arcu nec tortor.</p>\r\n                        <br />\r\n                        <p class=\"text-justify\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eleifend accumsan porta. Fusce volutpat luctus mattis. Nam condimentum, tellus eget malesuada sodales, dui dui tincidunt nulla, sed rutrum est est ut velit. Maecenas dictum lorem lorem, eget pulvinar magna facilisis aliquet. Aenean finibus urna tortor, in convallis turpis pellentesque eget. Morbi nisi enim, varius id vulputate eget, vulputate in massa.</p>\r\n                        <br />\r\n                        <p class=\"text-justify\">Integer vitae ex dolor. Aenean quis venenatis urna, ut vehicula mi. Donec ac porta arcu. Fusce ullamcorper ligula a urna egestas, vel finibus lacus interdum. Fusce non velit sit amet ipsum dignissim tincidunt. Maecenas feugiat in sapien sit amet sagittis. Praesent in ex eros. Pellentesque sem magna, eleifend quis molestie ac, ultricies vel mi. Etiam volutpat sed diam quis commodo. Vestibulum nec molestie metus, a dictum augue.</p>\r\n                        <br />\r\n                        <p class=\"text-justify\">Suspendisse potenti. Nulla dolor nisl, suscipit ut semper ut, hendrerit vitae erat. Morbi tempus ipsum ac efficitur tristique. Integer tincidunt maximus dui, ut cursus diam tincidunt id. Pellentesque auctor aliquet enim, sed gravida nisi cursus id. Morbi at vehicula massa. Vestibulum nec erat congue est ornare lacinia et vel erat. Nunc molestie a magna id dignissim. Proin molestie dapibus cursus. Vestibulum eget lobortis enim, in tempus enim. Sed interdum urna orci, malesuada dapibus sem porttitor non.</p>', '2017-04-19 07:41:19', 1),
(3, 'Entretien avec Idir : ? Je pense que je vais arr?ter l? ?', '/upload/images/news/idir.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id dictum dui. Phasellus felis dui, eleifend vel leo vel, rhoncus malesuada nullam...', '2017-04-19 04:12:18', 2),
(4, 'Classement Fifa : l?Alg?rie s?enfonce de plus en plus', '/upload/images/news/foot.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id dictum dui. Phasellus felis dui, eleifend vel leo vel, rhoncus malesuada nullam...', '2017-04-13 00:00:00', 3),
(5, 'Alerte m?t?o : Fortes averses de pluies ? l?Est du pays', '/upload/images/news/meteo.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porta congue eros, pharetra elementum nunc. Vivamus eleifend convallis turpis amet...', '2017-04-11 00:00:00', 1),
(6, 'Colonisation : Macron maintient ses propos tenus ? Alger, dit avoir re?u des menaces de mort', '/upload/images/news/Emmanuel-Macron.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porta congue eros, pharetra elementum nunc. Vivamus eleifend convallis turpis amet...', '2017-04-19 07:41:19', 1),
(7, 'Guerre d\'Alg?rie: un seul h?ros, le peuple.', '/upload/images/news/peuple.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id dictum dui. Phasellus felis dui, eleifend vel leo vel, rhoncus malesuada nullam...', '2017-04-05 18:20:17', 2);

-- --------------------------------------------------------

--
-- Structure de la table `editeur`
--

CREATE TABLE `editeur` (
  `idEditeur` int(2) NOT NULL,
  `nom` varchar(50) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `motDePasse` varchar(32) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `editeur`
--

INSERT INTO `editeur` (`idEditeur`, `nom`, `prenom`, `email`, `motDePasse`) VALUES
(1, 'Yamine', 'Salem', 'projetradiosoummam@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(2, 'Tarik', 'Khelil', 'test@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(3, 'Tarik', 'Khelil', 'test@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99');

-- --------------------------------------------------------

--
-- Structure de la table `emission`
--

CREATE TABLE `emission` (
  `idProgramme` int(10) NOT NULL,
  `sujet` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `animateur` varchar(50) NOT NULL,
  `dateDiffusion` date NOT NULL,
  `heurDebut` time NOT NULL,
  `heurFin` time NOT NULL,
  `datePublication` date NOT NULL,
  `Fichier` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `idEditeur` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `emission`
--

INSERT INTO `emission` (`idProgramme`, `sujet`, `description`, `animateur`, `dateDiffusion`, `heurDebut`, `heurFin`, `datePublication`, `Fichier`, `type`, `idEditeur`) VALUES
(1, 'Shape of You', '', 'Ed sheeran', '0000-00-00', '15:45:00', '20:30:00', '0000-00-00', 'upload/mp3/soy.mp3', 'sqdqsdq', 0);

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `idMessage` int(10) NOT NULL,
  `nomExpditeur` varchar(50) NOT NULL,
  `emailExpditeur` varchar(50) NOT NULL,
  `objet` varchar(50) NOT NULL,
  `contenu` text NOT NULL,
  `dateEnvoie` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `page`
--

CREATE TABLE `page` (
  `idPage` int(2) NOT NULL,
  `titre` varchar(100) CHARACTER SET latin1 NOT NULL,
  `contenu` longtext CHARACTER SET latin1 NOT NULL,
  `datePublication` date NOT NULL,
  `idEditeur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `page`
--

INSERT INTO `page` (`idPage`, `titre`, `contenu`, `datePublication`, `idEditeur`) VALUES
(1, 'Présentation de la radio', '<p class=\"text-justify\"><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut venenatis sem. Donec pellentesque mattis quam, ac semper sapien elementum suscipit. Donec et lacinia tellus. Cras sit amet commodo quam. Suspendisse potenti. Pellentesque semper libero ante, ut luctus orci lacinia congue. Pellentesque tincidunt justo nisl, sit amet mattis est tempor id. Praesent eu enim ultrices justo elementum facilisis eu sed ipsum. In vulputate scelerisque tellus, ac tincidunt justo porta egestas. Aenean consequat et massa cursus gravida.</b></p>\r\n                <br />\r\n                <center>\r\n                    <img src=\"/radio-soummam/upload/images/news/b50cf52aec2b8daf942ffda3a5f8f05f.jpg\" />\r\n                </center>\r\n                <br />\r\n                <br />\r\n                <p class=\"text-justify\">Proin blandit gravida diam. Nam blandit viverra porttitor. Nullam nec ultrices mauris. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam mollis metus et tellus varius dignissim. Morbi sollicitudin pretium enim, non tempus elit ultrices eu. Nullam id augue in sapien gravida rhoncus quis id tellus. Ut at aliquam felis. Pellentesque elementum bibendum lacus, id blandit nisl rutrum a. Vestibulum varius sem vitae massa tristique lacinia. Duis pharetra ante ac lectus vestibulum euismod. Vivamus suscipit, massa sit amet congue pretium, augue nulla hendrerit tortor, a dictum tellus arcu nec tortor.</p>\r\n                <br />\r\n                <p class=\"text-justify\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eleifend accumsan porta. Fusce volutpat luctus mattis. Nam condimentum, tellus eget malesuada sodales, dui dui tincidunt nulla, sed rutrum est est ut velit. Maecenas dictum lorem lorem, eget pulvinar magna facilisis aliquet. Aenean finibus urna tortor, in convallis turpis pellentesque eget. Morbi nisi enim, varius id vulputate eget, vulputate in massa.</p>\r\n                <br />\r\n                <p class=\"text-justify\">Integer vitae ex dolor. Aenean quis venenatis urna, ut vehicula mi. Donec ac porta arcu. Fusce ullamcorper ligula a urna egestas, vel finibus lacus interdum. Fusce non velit sit amet ipsum dignissim tincidunt. Maecenas feugiat in sapien sit amet sagittis. Praesent in ex eros. Pellentesque sem magna, eleifend quis molestie ac, ultricies vel mi. Etiam volutpat sed diam quis commodo. Vestibulum nec molestie metus, a dictum augue.</p>\r\n                <br />\r\n                <p class=\"text-justify\">Suspendisse potenti. Nulla dolor nisl, suscipit ut semper ut, hendrerit vitae erat. Morbi tempus ipsum ac efficitur tristique. Integer tincidunt maximus dui, ut cursus diam tincidunt id. Pellentesque auctor aliquet enim, sed gravida nisi cursus id. Morbi at vehicula massa. Vestibulum nec erat congue est ornare lacinia et vel erat. Nunc molestie a magna id dignissim. Proin molestie dapibus cursus. Vestibulum eget lobortis enim, in tempus enim. Sed interdum urna orci, malesuada dapibus sem porttitor non.</p>\r\n', '2017-04-13', NULL),
(2, 'Services', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. <b>Lorem ipsum dolor sit amet, consectetur adipiscing elit</b>. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. </p>\r\n\r\n<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. <b>Praesent mauris</b>. Curabitur tortor. Pellentesque nibh. <i>Lorem ipsum dolor sit amet, consectetur adipiscing elit</i>. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. </p>\r\n\r\n<p>Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante. Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis. Nulla facilisi. Ut fringilla. Suspendisse potenti. Nunc feugiat mi a tellus consequat imperdiet. Vestibulum sapien. Proin quam. </p>\r\n\r\n<p><b>Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis</b>. Etiam ultrices. Suspendisse in justo eu magna luctus suscipit. Sed lectus. Integer euismod lacus luctus magna. <i>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos</i>. Quisque cursus, metus vitae pharetra auctor, sem massa mattis sem, at interdum magna augue eget diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi lacinia molestie dui. Praesent blandit dolor. Sed non quam. In vel mi sit amet augue congue elementum. Morbi in ipsum sit amet pede facilisis laoreet. Donec lacus nunc, viverra nec, blandit vel, egestas et, augue. Vestibulum tincidunt malesuada tellus. Ut ultrices ultrices enim. </p>\r\n\r\n<p>Curabitur sit amet mauris. Morbi in dui quis est pulvinar ullamcorper. <b>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi lacinia molestie dui</b>. Nulla facilisi. Integer lacinia sollicitudin massa. Cras metus. Sed aliquet risus a tortor. Integer id quam. Morbi mi. Quisque nisl felis, venenatis tristique, dignissim in, ultrices sit amet, augue. Proin sodales libero eget ante. Nulla quam. Aenean laoreet. </p>\r\n\r\n', '2017-04-18', NULL),
(3, 'Condition générale d\'utilisation', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. <b>Lorem ipsum dolor sit amet, consectetur adipiscing elit</b>. Vestibulum lacinia arcu eget nulla. </p>\r\n\r\n<p><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit</b>. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. <i>Lorem ipsum dolor sit amet, consectetur adipiscing elit</i>. Curabitur tortor. Pellentesque nibh. <i>Lorem ipsum dolor sit amet, consectetur adipiscing elit</i>. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. </p>\r\n\r\n<p>Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante. Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis. Nulla facilisi. Ut fringilla. Suspendisse potenti. <b>Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh</b>. Nunc feugiat mi a tellus consequat imperdiet. <b>Fusce ac turpis quis ligula lacinia aliquet</b>. Vestibulum sapien. </p>\r\n\r\n<p>Proin quam. Etiam ultrices. <b>Nam nec ante</b>. Suspendisse in justo eu magna luctus suscipit. Sed lectus. Integer euismod lacus luctus magna. <b>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos</b>. Quisque cursus, metus vitae pharetra auctor, sem massa mattis sem, at interdum magna augue eget diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi lacinia molestie dui. Praesent blandit dolor. Sed non quam. In vel mi sit amet augue congue elementum. Morbi in ipsum sit amet pede facilisis laoreet. Donec lacus nunc, viverra nec, blandit vel, egestas et, augue. Vestibulum tincidunt malesuada tellus. Ut ultrices ultrices enim. </p>\r\n\r\n<p>Curabitur sit amet mauris. Morbi in dui quis est pulvinar ullamcorper. Nulla facilisi. <i>Proin quam</i>. Integer lacinia sollicitudin massa. Cras metus. Sed aliquet risus a tortor. Integer id quam. Morbi mi. Quisque nisl felis, venenatis tristique, dignissim in, ultrices sit amet, augue. Proin sodales libero eget ante. Nulla quam. Aenean laoreet. <b>Nulla facilisi</b>. Vestibulum nisi lectus, commodo ac, facilisis ac, ultricies eu, pede. Ut orci risus, accumsan porttitor, cursus quis, aliquet eget, justo. </p>\r\n\r\n', '2017-04-11', NULL),
(4, 'A propos du site', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. <b>Lorem ipsum dolor sit amet, consectetur adipiscing elit</b>. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. </p>\r\n\r\n<p>Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. </p>\r\n\r\n<p><i>Lorem ipsum dolor sit amet, consectetur adipiscing elit</i>. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum velit. <i>Lorem ipsum dolor sit amet, consectetur adipiscing elit</i>. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante. Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis. Nulla facilisi. <i>Pellentesque nibh</i>. Ut fringilla. Suspendisse potenti. Nunc feugiat mi a tellus consequat imperdiet. Vestibulum sapien. Proin quam. </p>\r\n\r\n<p>Etiam ultrices. Suspendisse in justo eu magna luctus suscipit. Sed lectus. Integer euismod lacus luctus magna. Quisque cursus, metus vitae pharetra auctor, sem massa mattis sem, at interdum magna augue eget diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi lacinia molestie dui. Praesent blandit dolor. Sed non quam. In vel mi sit amet augue congue elementum. Morbi in ipsum sit amet pede facilisis laoreet. <b>Suspendisse in justo eu magna luctus suscipit</b>. Donec lacus nunc, viverra nec, blandit vel, egestas et, augue. </p>\r\n\r\n<p>Vestibulum tincidunt malesuada tellus. Ut ultrices ultrices enim. <b>Suspendisse in justo eu magna luctus suscipit</b>. Curabitur sit amet mauris. Morbi in dui quis est pulvinar ullamcorper. <i>Quisque volutpat condimentum velit</i>. Nulla facilisi. Integer lacinia sollicitudin massa. Cras metus. Sed aliquet risus a tortor. Integer id quam. Morbi mi. Quisque nisl felis, venenatis tristique, dignissim in, ultrices sit amet, augue. Proin sodales libero eget ante. Nulla quam. Aenean laoreet. </p>\r\n\r\n', '2017-04-28', NULL),
(5, 'Publicité', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. \r\n\r\nCurabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. \r\n\r\nNulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante. Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis. Nulla facilisi. Ut fringilla. Suspendisse potenti. Nunc feugiat mi a tellus consequat imperdiet. Vestibulum sapien. Proin quam. Etiam ultrices. Suspendisse in justo eu magna luctus suscipit. \r\n\r\nSed lectus. Integer euismod lacus luctus magna. Quisque cursus, metus vitae pharetra auctor, sem massa mattis sem, at interdum magna augue eget diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi lacinia molestie dui. Praesent blandit dolor. Sed non quam. In vel mi sit amet augue congue elementum. Morbi in ipsum sit amet pede facilisis laoreet. Donec lacus nunc, viverra nec, blandit vel, egestas et, augue. Vestibulum tincidunt malesuada tellus. Ut ultrices ultrices enim. \r\n\r\nCurabitur sit amet mauris. Morbi in dui quis est pulvinar ullamcorper. Nulla facilisi. Integer lacinia sollicitudin massa. Cras metus. Sed aliquet risus a tortor. Integer id quam. Morbi mi. Quisque nisl felis, venenatis tristique, dignissim in, ultrices sit amet, augue. Proin sodales libero eget ante. Nulla quam. \r\n\r\n', '2017-04-13', NULL),
(6, 'Les animateurs', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. <b>Lorem ipsum dolor sit amet, consectetur adipiscing elit</b>. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>\r\n\r\n<p>Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. <i>Lorem ipsum dolor sit amet, consectetur adipiscing elit</i>. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. </p>\r\n\r\n<p>Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum velit. <i>Sed dignissim lacinia nunc</i>. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante. Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis. Nulla facilisi. Ut fringilla. Suspendisse potenti. Nunc feugiat mi a tellus consequat imperdiet. <b>Fusce ac turpis quis ligula lacinia aliquet</b>. Vestibulum sapien. Proin quam. Etiam ultrices. </p>\r\n\r\n<p>Suspendisse in justo eu magna luctus suscipit. Sed lectus. Integer euismod lacus luctus magna. Quisque cursus, metus vitae pharetra auctor, sem massa mattis sem, at interdum magna augue eget diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi lacinia molestie dui. Praesent blandit dolor. Sed non quam. In vel mi sit amet augue congue elementum. <b>Vestibulum sapien</b>. Morbi in ipsum sit amet pede facilisis laoreet. Donec lacus nunc, viverra nec, blandit vel, egestas et, augue. Vestibulum tincidunt malesuada tellus. Ut ultrices ultrices enim. <b>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi lacinia molestie dui</b>. Curabitur sit amet mauris. </p>\r\n\r\n<p>Morbi in dui quis est pulvinar ullamcorper. Nulla facilisi. Integer lacinia sollicitudin massa. Cras metus. Sed aliquet risus a tortor. <i>Suspendisse in justo eu magna luctus suscipit</i>. Integer id quam. Morbi mi. Quisque nisl felis, venenatis tristique, dignissim in, ultrices sit amet, augue. Proin sodales libero eget ante. Nulla quam. Aenean laoreet. </p>\r\n\r\n<p><b>Curabitur sit amet mauris</b>. Vestibulum nisi lectus, commodo ac, facilisis ac, ultricies eu, pede. Ut orci risus, accumsan porttitor, cursus quis, aliquet eget, justo. Sed pretium blandit orci. Ut eu diam at pede suscipit sodales. Aenean lectus elit, fermentum non, convallis id, sagittis at, neque. Nullam mauris orci, aliquet et, iaculis et, viverra vitae, ligula. Nulla ut felis in purus aliquam imperdiet. Maecenas aliquet mollis lectus. Vivamus consectetuer risus et tortor. <i>Vestibulum tincidunt malesuada tellus</i>. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. <i>Integer id quam</i>. Sed cursus ante dapibus diam. Sed nisi. </p>\r\n\r\n<p>Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. <b>Integer nec odio</b>. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. <i>Integer nec odio</i>. Pellentesque nibh. </p>\r\n\r\n<p>Aenean quam. In scelerisque sem at dolor. Maecenas mattis. <b>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos</b>. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. <b>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos</b>. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. <b>Mauris massa</b>. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. <b>Sed convallis tristique sem</b>. Nam nec ante. </p>\r\n\r\n<p>Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis. Nulla facilisi. Ut fringilla. <i>Duis sagittis ipsum</i>. Suspendisse potenti. Nunc feugiat mi a tellus consequat imperdiet. Vestibulum sapien. Proin quam. Etiam ultrices. Suspendisse in justo eu magna luctus suscipit. Sed lectus. Integer euismod lacus luctus magna. </p>\r\n\r\n<p><b>Nam nec ante</b>. Quisque cursus, metus vitae pharetra auctor, sem massa mattis sem, at interdum magna augue eget diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi lacinia molestie dui. Praesent blandit dolor. Sed non quam. In vel mi sit amet augue congue elementum. Morbi in ipsum sit amet pede facilisis laoreet. Donec lacus nunc, viverra nec, blandit vel, egestas et, augue. Vestibulum tincidunt malesuada tellus. Ut ultrices ultrices enim. <b>Etiam ultrices</b>. Curabitur sit amet mauris. Morbi in dui quis est pulvinar ullamcorper. Nulla facilisi. Integer lacinia sollicitudin massa. </p>\r\n\r\n', '2017-04-20', NULL),
(7, 'Plan du site', '<ul class=\"generic-list\">\r\n    <li class=\"item\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam vero.</li>\r\n    <li class=\"item\">Laboriosam quaerat sapiente minima nam minus similique illum architecto et!</li>\r\n    <li class=\"item\">Incidunt vitae quae facere ducimus nostrum aliquid dolorum veritatis dicta!</li>\r\n    <li class=\"item\">Tenetur laborum quod cum excepturi recusandae porro sint quas soluta!</li>\r\n</ul>', '2017-04-27', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `programme`
--

CREATE TABLE `programme` (
  `idProgramme` int(4) NOT NULL,
  `sujet` varchar(200) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `animateur` varchar(100) NOT NULL,
  `dateDiffusion` date NOT NULL,
  `heurDebut` time(1) NOT NULL,
  `heurFin` time(1) NOT NULL,
  `datePublication` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `programme`
--

INSERT INTO `programme` (`idProgramme`, `sujet`, `description`, `animateur`, `dateDiffusion`, `heurDebut`, `heurFin`, `datePublication`) VALUES
(1, 'Sabah Elkhir (REDIFFUSION)', 'sabah elkhir est une emission matinal présenté par ....', 'kahina', '2017-04-04', '17:45:00.0', '19:00:00.0', '2017-04-12'),
(2, 'Foot Algerie', 'Rendez vous avec benchikh pour ecouter toute nouveauté du football algerien', 'benchikh', '2017-04-06', '19:00:00.0', '20:00:00.0', '2017-04-18'),
(3, 'salah ladjouz', 'mon amis salah ', 'reda', '2017-04-11', '13:39:00.0', '14:00:00.0', '2017-04-19');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`idArticle`);

--
-- Index pour la table `editeur`
--
ALTER TABLE `editeur`
  ADD PRIMARY KEY (`idEditeur`);

--
-- Index pour la table `emission`
--
ALTER TABLE `emission`
  ADD PRIMARY KEY (`idProgramme`),
  ADD KEY `idEditeur` (`idEditeur`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`idMessage`);

--
-- Index pour la table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`idPage`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `idArticle` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `editeur`
--
ALTER TABLE `editeur`
  MODIFY `idEditeur` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `emission`
--
ALTER TABLE `emission`
  MODIFY `idProgramme` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `idMessage` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `page`
--
ALTER TABLE `page`
  MODIFY `idPage` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
