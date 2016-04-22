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
  `datePublication` date default NULL,
  `domaine` varchar(30) NOT NULL,
  `idCandidat` int(10) default NULL,
  `idRecruteur` int(10) default NULL,
  PRIMARY KEY  (`idAnnonces`),
  KEY `fk_annonces_candidat` (`idCandidat`),
  KEY `fk_annonces_recruteur` (`idRecruteur`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `annonces`
--

LOCK TABLES `annonces` WRITE;
/*!40000 ALTER TABLE `annonces` DISABLE KEYS */;
INSERT INTO `annonces` VALUES (1,'annonce 9','le contenu de lannonce 9','0000-00-00','Sciences et technologies',NULL,7),(2,'annonce 9','le contenu de l\'annonce 9','0000-00-00','Sciences et technologies',NULL,7),(3,'annonce 1','le contenu de lannonce 1','0000-00-00','Sciences et technologies',NULL,8),(4,'annonce2','le contenu de lannonce 2','0000-00-00','Sciences et technologies',NULL,8),(5,'annonce n 1','contenu de annonce n 1 de ainDrahem2','0000-00-00','Sciences et technologies',NULL,10),(6,'mon annonce','contenu de mon annonce ','0000-00-00','Sciences et technologies',NULL,5),(7,'annonce 11','content','0000-00-00','Sciences et technologies',NULL,5),(8,'mon annonce1','contenu de mon annonce 1','0000-00-00','Sciences et technologies',NULL,5),(13,'annonce 17','contenu 17','0000-00-00','Sciences et technologies',NULL,8),(14,'annonce 26','contenu de annonce 26','0000-00-00','Sciences et technologies',8,NULL),(16,'annonce 19','contenu 19','0000-00-00','Arts',NULL,11),(17,'annonce 20','contenu 20','0000-00-00','Arts',NULL,11),(18,'nouveau annonce du sport','nouveau contenu de annonce du sport','0000-00-00','Sport',NULL,12),(20,'nouveaunom de annonce de sport','nouveau contenu de annonce de sport','0000-00-00','Sport',9,NULL),(24,'mon annonce de test','contenu de mon annonce de test','0000-00-00','Sciences et technologies',NULL,18);
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
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `candidat`
--

LOCK TABLES `candidat` WRITE;
/*!40000 ALTER TABLE `candidat` DISABLE KEYS */;
INSERT INTO `candidat` VALUES (1,'jbil','maher','09071993','maherjbil@yahoo.fr','000','Developpeur','Sciences et technologies','Bac','condidat','tunisie','jendouba','fernena','95126102'),(2,'jbil','maher','09071993','maherjbil@yahoo.fr','11111','Developpeur','Sciences et technologies','Bac','candidat','tunisie','jendouba','fernena','95126102'),(3,'jbil','maher','09/07/1993','maherjbil@yahoo.fr','condidat','Developpeur','Sciences et technologies','Bac','candidat','tunisie','jendouba','fernena','95126102'),(4,'jbil','maher','09/07/1993','maherjbil@yahoo.fr','000','Developpeur','Sciences et technologies','Bac','candidat','tunisie','jendouba','fernena','95126102'),(5,'jbil','maher','09/07/1993','maherjbil@yahoo.fr','00010','Developpeur','Sciences et technologies','Bac','candidat','tunisie','jendouba','fernena','95126102'),(6,'jbil','maher','09071993','maherjbil@yahoo.fr','000','Developpeur','Sciences et technologies','Bac','candidat','tunisie','jendouba','fernena','95126102'),(7,'jbil','maher','09/07/1993','maherjbil@yahoo.fr','00012','Developpeur','Sciences et technologies','Bac','candidat','tunisie','jendouba','fernena','95126102'),(10,'jbil','maher','09/07/1993','maherjbil17@yahoo.fr','candidat','Developpeur','Sciences et technologies','Bac','candidat','tunisie','jendouba','fernena','95126102'),(8,'jbil','maher','09/07/1993','maherjbil17@yahoo.fr','candidat','Developpeur','Sciences et technologies','Bac','candidat','tunisie','jendouba','fernena','95126102'),(9,'jbil','maher','09/07/1993','maherjbil17@yahoo.fr','candidat1','Developpeur','Sciences et technologies','Bac','candidat','tunisie','jendouba','fernena','95126102'),(11,'jbil','maher','09/07/1993','maherjbil17@yahoo.fr','000','Developpeur','Sciences et technologies','Bac','candidat','tunisie','jendouba','fernena','95126102'),(12,'jbil','maher','09/07/1993','maherjbil17@yahoo.fr','444','Developpeur','Sciences et technologies','Bac','candidat','tunisie','jendouba','fernena','95126102'),(13,'jbil','maher','','','111','Developpeur','Sciences et technologies','Bac','candidat','tunisie','jendouba','fernena','95126102'),(14,'jbil','maher','09/07/1993','maherjbil17yahoo.fr','000','Developpeur','Sciences et technologies','Bac','candidat','tunisie','jendouba','fernena','95126102'),(15,'jbil','maher','09/07/1993','maherjbil@yahoo.fr','000','Developpeur','Sciences et technologies','Bac','candidat','tunisie','jendouba','fernena','95126102'),(16,'jbil','maher','09/07/1993','maherjbil@y ahoo.fr','000','Developpeur','Sciences et technologies','Bac','candidat','tunisie','jendouba','fernena','95126102'),(17,'jbil','maher','09/07/1993','maherjbil@ yahoo.fr','000','Developpeur','Sciences et technologies','Bac','candidat','tunisie','jendouba','fernena','95126102'),(18,'jbil','maher','09/07/1993','maherjbil@   yahoo.f','000','Developpeur','Sciences et technologies','Bac','candidat','tunisie','jendouba','fernena','95126102'),(19,'jbil','maher','09/07/1993','maherjbil@yahoo.fr','000','Developpeur','Sciences et technologies','Bac','candidat','tunisie','jendouba','fernena','95126102'),(20,'jbil','maher','09/07/1993','maherjbil@yahoo.fr','123456789','Developpeur','Sciences et technologies','Bac','candidat','tunisie','jendouba','fernena','95126102'),(21,'jbil','maher','09/07/1993','maherjbil@yahoo.fr','0000000000','Developpeur','Sciences et technologies','Bac','candidat','tunisie','jendouba','fernena','95126102'),(22,'jbil','maher','09/07/1993','maherjbil@yahoo.fr','0000000000','Developpeur','Sciences et technologies','Bac','candidat','tunisie','jendouba','fernena','95126102'),(23,'jbil','maher','09/07/1993','maherjbil@yahoo.fr','4444444444','Developpeur','Sciences et technologies','Bac','candidat','tunisie','jendouba','fernena','95126102'),(24,'jbil','maher','09/07/1993','maherjbil@yahoo.fr','1111111111','Developpeur','Sciences et technologies','Bac','candidat','tunisie','jendouba','fernena','95126102'),(25,'jbil','maher','09/07/1993','maherjbil@yahoo.fr','00000000','Developpeur','Sciences et technologies','Bac','candidat','tunisie','jendouba','fernena','95126102'),(26,'jbil','maher','09/07/1993','maherjbil@yahoo.fr','0000000000','Developpeur','Sciences et technologies','Bac','candidat','tunisie','jendouba','fernena','95126102'),(27,'jbil','maher','09/07/1993','maherjbil@yahoo.fr','0000000000','Developpeur','Sciences et technologies','Bac','candidat','tunisie','jendouba','fernena','95126102');
/*!40000 ALTER TABLE `candidat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `candidature`
--

DROP TABLE IF EXISTS `candidature`;
CREATE TABLE `candidature` (
  `idCandidature` int(10) NOT NULL auto_increment,
  `nom` varchar(30) NOT NULL,
  `contenu` varchar(255) NOT NULL,
  `datePublication` date default NULL,
  `idCandidat` int(10) default NULL,
  `domaine` varchar(30) NOT NULL,
  PRIMARY KEY  (`idCandidature`),
  KEY `fk_candidature` (`idCandidat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `candidature`
--

LOCK TABLES `candidature` WRITE;
/*!40000 ALTER TABLE `candidature` DISABLE KEYS */;
/*!40000 ALTER TABLE `candidature` ENABLE KEYS */;
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
  `datePostulation` datetime default NULL,
  PRIMARY KEY  (`idPostulation`),
  KEY `fk_post_annonce` (`idAnnonces`),
  KEY `fk_post_recruteur` (`idRecruteur`),
  KEY `fk_post_candidat` (`idCandidat`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `postulation`
--

LOCK TABLES `postulation` WRITE;
/*!40000 ALTER TABLE `postulation` DISABLE KEYS */;
INSERT INTO `postulation` VALUES (1,'knjbhsdkmnjh hv    z;lkjhsd vxcnz',NULL,0,7,0,NULL),(2,'knjbhsdkmnjh hv    z;lkjhsd vxcnz',NULL,0,7,0,NULL),(3,'ma lettre de motivation',NULL,0,8,0,NULL),(4,'ma lettre de motivation',NULL,0,11,0,NULL),(5,'ma lettre de motivation',NULL,0,8,0,NULL),(6,'njbhgf',NULL,0,8,0,NULL),(7,'jhgyuftr',NULL,0,11,0,NULL),(8,'jhgf',NULL,0,7,0,NULL),(9,'nlycvhb;oiougiyftdrhug',NULL,0,7,21,NULL),(10,'nlycvhb;oiougiyftdrhug',NULL,0,7,21,NULL),(11,'je veut postuler cette annonce de test',NULL,24,18,10,NULL);
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
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recruteur`
--

LOCK TABLES `recruteur` WRITE;
/*!40000 ALTER TABLE `recruteur` DISABLE KEYS */;
INSERT INTO `recruteur` VALUES (1,'jbil','maher','09071993','maherjbil@yahoo.fr','000','Sciences et technologies','recruteur','tunisie','jendouba','fernena','95126102'),(2,'jbil','maher','09071993','maherjbil@yahoo.fr','000','Sciences et technologies','recruteur','tunisie','jendouba','fernena','95126102'),(3,'jbil','maher','09071993','maherjbil@yahoo.fr','0000','Sciences et technologies','recruteur','tunisie','jendouba','fernena','95126102'),(4,'jbil','maher','09071993','maherjbil@yahoo.fr','recruteur','Sciences et technologies','recruteur','tunisie','jendouba','fernena','95126102'),(5,'jbil','maher','09/07/1993','maherjbil@yahoo.fr','recruteur','Sciences et technologies','recruteur','tunisie','jendouba','fernena','95126102'),(6,'jbil','maher','09/07/1993','maherjbil@yahoo.fr','11111','Sciences et technologies','recruteur','tunisie','jendouba','fernena','95126102'),(7,'jbil','maher','09/07/1993','maherjbil@yahoo.fr','111','Sciences et technologies','recruteur','tunisie','jendouba','fernena','95126102'),(8,'jbil','maher','09/07/1993','maherjbil@yahoo.fr','1110','Sciences et technologies','recruteur','tunisie','jendouba','fernena','95126102'),(9,'jbil','maher','09/07/1993','maherjbil@yahoo.fr','0001','Sciences et technologies','recruteur','tunisie','jendouba','fernena','95126102'),(12,'jbil','maher','09/07/1993','maherjbil17@yahoo.fr','recruteur3','Sciences et technologies','recruteur','tunisie','jendouba','fernena','95126102'),(10,'jbil','maher','09/07/1993','maherjbil@yahoo.fr','recruteur1','Sciences et technologies','recruteur','tunisie','jendouba','fernena','95126102'),(11,'jbil','maher','09/07/1993','maherjbil17@yahoo.fr','recruteur2','Sciences et technologies','recruteur','tunisie','jendouba','fernena','95126102'),(13,'jbil','maher','09/07/1993','maherjbil17@yahoo.fr','recruteur','Sciences et technologies','recruteur','tunisie','jendouba','fernena','95126102'),(14,'jbil','maher','09/07/1993','maherjbil17@yahoo.fr','111','Sciences et technologies','recruteur','tunisie','jendouba','fernena','95126102'),(15,'jbil','maher','09/07/1993','maherjbil17@yahoo.fr','333','Sciences et technologies','recruteur','tunisie','jendouba','fernena','95126102'),(16,'jbil','maher','09/07/1993','maherjbil@yahoo.fr','000','Sciences et technologies','recruteur','tunisie','jendouba','fernena','95126102'),(17,'jbil','maher','09/07/1993','maherjbil@yahoo.fr','0000000000','Sciences et technologies','recruteur','tunisie','jendouba','fernena','95126102'),(18,'jbil','maher','09/07/1993','maherjbil17@yahoo.fr','unrecruteur','Sciences et technologies','recruteur','tunisie','jendouba','fernena','95126102');
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

-- Dump completed on 2016-04-12 15:05:49
