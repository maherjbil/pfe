-- MySQL dump 10.10
--
-- Host: localhost    Database: offreEmploi
-- ------------------------------------------------------
-- Server version	5.0.27-community-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `annonces`
--

DROP TABLE IF EXISTS `annonces`;
CREATE TABLE `annonces` (
  `idAnnonces` int(10) NOT NULL auto_increment,
  `titre` varchar(50) default NULL,
  `contenu` varchar(255) default NULL,
  `datePublication` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `idCandidat` int(10) default NULL,
  `idRecruteur` int(10) default NULL,
  PRIMARY KEY  (`idAnnonces`),
  KEY `fk_annonces_candidat` (`idCandidat`),
  KEY `fk_annonces_recruteur` (`idRecruteur`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `annonces`
--

LOCK TABLES `annonces` WRITE;
/*!40000 ALTER TABLE `annonces` DISABLE KEYS */;
/*!40000 ALTER TABLE `annonces` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `candidat`
--

DROP TABLE IF EXISTS `candidat`;
CREATE TABLE `candidat` (
  `idCandidat` int(10) NOT NULL auto_increment,
  `nom` varchar(20) default NULL,
  `prenom` varchar(20) default NULL,
  `dateNaiss` varchar(20) default NULL,
  `login` varchar(20) default NULL,
  `password` varchar(20) default NULL,
  `specialite` varchar(30) default NULL,
  `domaine` varchar(30) default NULL,
  `niveau` varchar(20) default NULL,
  `nature` varchar(20) default NULL,
  `pays` varchar(30) default NULL,
  `region` varchar(30) default NULL,
  `ville` varchar(30) default NULL,
  `numeroTelephone` varchar(15) default NULL,
  PRIMARY KEY  (`idCandidat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `candidat`
--

LOCK TABLES `candidat` WRITE;
/*!40000 ALTER TABLE `candidat` DISABLE KEYS */;
/*!40000 ALTER TABLE `candidat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `postulation`
--

DROP TABLE IF EXISTS `postulation`;
CREATE TABLE `postulation` (
  `idPostulation` int(10) NOT NULL auto_increment,
  `lettreDeMotivation` longtext NOT NULL,
  `reponseDuRecruteur` longtext,
  `idAnnonces` int(10) default NULL,
  `idRecruteur` int(10) default NULL,
  `idCandidat` int(10) default NULL,
  `datePostulation` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`idPostulation`),
  KEY `fk_post_annonce` (`idAnnonces`),
  KEY `fk_post_recruteur` (`idRecruteur`),
  KEY `fk_post_candidat` (`idCandidat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `postulation`
--

LOCK TABLES `postulation` WRITE;
/*!40000 ALTER TABLE `postulation` DISABLE KEYS */;
/*!40000 ALTER TABLE `postulation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recruteur`
--

DROP TABLE IF EXISTS `recruteur`;
CREATE TABLE `recruteur` (
  `idRecruteur` int(10) NOT NULL auto_increment,
  `nom` varchar(20) default NULL,
  `prenom` varchar(20) default NULL,
  `dateNaiss` varchar(20) default NULL,
  `login` varchar(20) default NULL,
  `password` varchar(20) default NULL,
  `domaine` varchar(30) default NULL,
  `nature` varchar(20) default NULL,
  `pays` varchar(30) default NULL,
  `region` varchar(30) default NULL,
  `ville` varchar(30) default NULL,
  `numeroTelephone` varchar(15) default NULL,
  PRIMARY KEY  (`idRecruteur`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recruteur`
--

LOCK TABLES `recruteur` WRITE;
/*!40000 ALTER TABLE `recruteur` DISABLE KEYS */;
/*!40000 ALTER TABLE `recruteur` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-04-13 21:50:10
