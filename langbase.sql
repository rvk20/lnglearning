-- MySQL dump 10.13  Distrib 8.0.28, for Linux (x86_64)
--
-- Host: localhost    Database: langbase
-- ------------------------------------------------------
-- Server version	8.0.28-0ubuntu0.20.04.3

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `answers`
--

DROP TABLE IF EXISTS `answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `answers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `questionid` int NOT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correct` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answers`
--

LOCK TABLES `answers` WRITE;
/*!40000 ALTER TABLE `answers` DISABLE KEYS */;
INSERT INTO `answers` VALUES (1,1,'Max is unemployed',1),(2,1,'Max works in a corporation',0),(3,1,'Max works for a small company',0),(5,2,'That it is tiring',1),(6,2,'Co-workers',0),(7,2,'Poor earnings',0),(8,3,'Takes care of children',0),(9,3,'He is engaged in his hobbies',1),(10,3,'Working hard',0),(11,4,'He worked for a large corporation',1),(12,4,'He worked in a store',0),(13,4,'He was unemployed',0),(14,5,'Max is not looking for a job because he has worked enough',1),(15,5,'Max is looking for a well-paid job',0),(16,5,'Max likes his current job',0),(17,6,'Max is unemployed',1),(18,6,'Max works in a corporation',0),(19,6,'Max works for a small company',0),(20,7,'That it is tiring',1),(21,7,'Co-workers',0),(22,7,'Poor earnings',0),(23,8,'Takes care of children',0),(24,8,'He is engaged in his hobbies',1),(25,8,'Working hard',0),(26,9,'He worked for a large corporation',1),(27,9,'He worked in a store',0),(28,9,'He was unemployed',0),(29,10,'Max is not looking for a job because he has worked enough',1),(30,10,'Max is looking for a well-paid job',0),(31,10,'Max likes his current job',0),(32,11,'going to',0),(33,11,'will',1),(34,11,'will be',0),(35,12,'is going to',1),(36,12,'going to',0),(37,12,'will',0),(38,13,'going to',1),(39,13,'will',0),(40,13,'going',0),(41,14,'is going to',0),(42,14,'will',1),(43,14,'going to',0),(44,15,'will be',1),(45,15,'will',0),(46,15,'going to',0),(47,19,'dos años',1),(48,19,'medio año',0),(49,19,'tres años',0),(50,20,'Alemania',1),(51,20,'No se ha movido a ninguna parte',0),(52,20,'Reino Unido',0),(53,21,'Inglés',1),(54,21,'Alemán',0),(55,21,'ninguna',0),(56,22,'Reino Unido',1),(57,22,'Alemania',0),(58,22,'España',0),(59,23,'un año y medio',1),(60,23,'dos años',0),(61,23,'medio año',0),(62,29,'dos años',1),(63,29,'medio año',0),(64,29,'tres años',0),(65,30,'Alemania',1),(66,30,'No se ha movido a ninguna parte',0),(67,30,'Reino Unido',0),(68,31,'Inglés',1),(69,31,'Alemán',0),(70,31,'ninguna',0),(71,32,'Reino Unido',1),(72,32,'Alemania',0),(73,32,'España',0),(74,33,'un año y medio',1),(75,33,'dos años',0),(76,33,'medio año',0),(77,34,'dos años',1),(78,34,'medio año',0),(79,34,'tres años',0),(80,35,'Alemania',1),(81,35,'No se ha movido a ninguna parte',0),(82,35,'Reino Unido',0),(83,36,'Inglés',1),(84,36,'Alemán',0),(85,36,'ninguna',0),(86,37,'Reino Unido',1),(87,37,'Alemania',0),(88,37,'España',0),(89,38,'un año y medio',1),(90,38,'dos años',0),(91,38,'medio año',0);
/*!40000 ALTER TABLE `answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_migration_versions`
--

LOCK TABLES `doctrine_migration_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_migration_versions` DISABLE KEYS */;
INSERT INTO `doctrine_migration_versions` VALUES ('DoctrineMigrations\\Version20200805002002','2020-08-05 02:20:26',559),('DoctrineMigrations\\Version20200805235302','2020-08-06 01:53:42',576),('DoctrineMigrations\\Version20200806004904','2020-08-06 02:49:16',430),('DoctrineMigrations\\Version20200909200345','2020-09-09 22:03:55',476),('DoctrineMigrations\\Version20201021110712','2020-10-21 13:07:39',585),('DoctrineMigrations\\Version20201026004423','2020-10-26 01:44:39',483),('DoctrineMigrations\\Version20201027233515','2020-10-28 00:35:27',1758),('DoctrineMigrations\\Version20201101234800','2020-11-02 00:48:10',1148),('DoctrineMigrations\\Version20201101235756','2020-11-02 00:58:09',367),('DoctrineMigrations\\Version20201111184221','2020-11-11 19:42:33',557),('DoctrineMigrations\\Version20201113025329','2020-11-13 03:53:48',539);
/*!40000 ALTER TABLE `doctrine_migration_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `listening`
--

DROP TABLE IF EXISTS `listening`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `listening` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `listening`
--

LOCK TABLES `listening` WRITE;
/*!40000 ALTER TABLE `listening` DISABLE KEYS */;
INSERT INTO `listening` VALUES (2,'Work and unemployement','Max worked for a large corporation most of his life. The job was tiring, so he quit. At the moment, Max is unemployed. Living unemployed, he has a lot of time for his hobbies. He is in no hurry to find employment. Max thinks he has worked enough','Łatwy','Angielski');
/*!40000 ALTER TABLE `listening` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `questions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `textid` int NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (1,2,'What is Maxs job?'),(2,2,'What doesnt Max like at work?'),(3,2,'What is Max doing now?'),(4,2,'Where did Max work most of his life?'),(5,2,'Is Max looking for a new job?'),(6,1,'What is Maxs job?'),(7,1,'What doesnt Max like at work?'),(8,1,'What is Max doing now?'),(9,1,'Where did Max work most of his life?'),(10,1,'Is Max looking for a new job?'),(11,3,'I like history very much. It is possible that I ___ become a historian in the future.'),(12,3,'Look at these dark clouds! It ___ to rain.'),(13,3,'I am ___ open a store in Warsaw.'),(14,3,'I am sure he ___ make progress if he works every day.'),(15,3,'I ___ graduating in May 2019.'),(34,9,'¿Cuánto tiempo lleva Felipe fuera de España?'),(35,9,'¿A dónde se ha mudado Felipe?'),(36,9,'¿Qué idioma es más fácil de aprender?'),(37,9,'¿Dónde vive Felipe en este momento?'),(38,9,'¿Cuánto tiempo lleva Felipe viviendo en Reino Unido?');
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correct` int NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userid` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES (1,'Work and unemployement','Listening comprehension',3,'Łatwy','2020-11-02',0),(2,'Work and unemployement','Listening comprehension',0,'Łatwy','2020-11-02',0),(3,'Work and unemployement','Listening comprehension',0,'Łatwy','2020-11-02',0),(4,'Work and unemployement','Listening comprehension',1,'Łatwy','2020-11-02',0),(5,'Work and unemployement','Listening comprehension',0,'Łatwy','2020-11-02',0),(6,'Work and unemployement','Listening comprehension',0,'Łatwy','2020-11-02',0),(7,'Work and unemployement','Listening comprehension',1,'Łatwy','2020-11-02',0),(8,'Work and unemployement','Listening comprehension',0,'Łatwy','2020-11-02',0),(9,'Work and unemployement','Listening comprehension',1,'Łatwy','2020-11-02',0),(10,'Work and unemployement','Listening comprehension',0,'Łatwy','2020-11-02',0),(11,'Work and unemployement','Listening comprehension',1,'Łatwy','2020-11-02',0),(12,'Work and unemployement','Listening comprehension',2,'Łatwy','2020-11-02',0),(13,'Work and unemployement','Listening comprehension',1,'Łatwy','2020-11-02',0),(14,'Work and unemployement','Listening comprehension',1,'Łatwy','2020-11-02',0),(15,'Work and unemployement','Listening comprehension',1,'Łatwy','2020-11-02',0),(16,'Work and unemployement','Listening comprehension',1,'Łatwy','2020-11-02',0),(17,'Work and unemployement','Listening comprehension',1,'Łatwy','2020-11-02',0),(18,'Work and unemployement','Listening comprehension',5,'Łatwy','2020-11-02',0),(19,'Work and unemployement','Listening comprehension',1,'Łatwy','2020-11-02',0),(20,'Work and unemployement','Listening comprehension',2,'Łatwy','2020-11-02',0),(21,'Work and unemployement','Listening comprehension',2,'Łatwy','2020-11-02',0),(22,'Work and unemployement','Listening comprehension',2,'Łatwy','2020-11-02',0),(23,'Work and unemployement','Listening comprehension',1,'Łatwy','2020-11-02',0),(24,'Work and unemployement','Listening comprehension',3,'Łatwy','2020-11-02',0),(25,'Work and unemployement','Listening comprehension',4,'Łatwy','2020-11-11',0),(26,'Work and unemployement','Czytanie ze zrozumieniem',5,'Bardzo łatwy','2020-11-12',0),(27,'Work and unemployement','Czytanie ze zrozumieniem',1,'Bardzo łatwy','2020-11-12',0),(28,'Work and unemployement','Czytanie ze zrozumieniem',1,'Bardzo łatwy','2020-11-12',0),(29,'Work and unemployement','Czytanie ze zrozumieniem',0,'Bardzo łatwy','2020-11-12',0),(30,'Work and unemployement','Czytanie ze zrozumieniem',0,'Bardzo łatwy','2020-11-12',0),(31,'Work and unemployement','Czytanie ze zrozumieniem',1,'Bardzo łatwy','2020-11-12',0),(32,'Work and unemployement','Czytanie ze zrozumieniem',0,'Bardzo łatwy','2020-11-12',0),(33,'Work and unemployement','Czytanie ze zrozumieniem',1,'Bardzo łatwy','2020-11-12',0),(34,'Work and unemployement','Czytanie ze zrozumieniem',0,'Bardzo łatwy','2020-11-12',0),(35,'Work and unemployement','Czytanie ze zrozumieniem',0,'Bardzo łatwy','2020-11-12',0),(36,'Work and unemployement','Czytanie ze zrozumieniem',0,'Bardzo łatwy','2020-11-12',0),(37,'Work and unemployement','Słuchanie ze zrozumieniem',1,'Łatwy','2020-11-13',0),(38,'Will czy going to','Pisownia',5,'Średni','2020-11-13',0),(39,'Will czy going to','Pisownia',0,'Średni','2020-11-13',1),(40,'Will czy going to','Pisownia',3,'Średni','2020-11-13',1),(41,'Will czy going to','Pisownia',1,'Średni','2020-11-13',1),(42,'Work and unemployement','Czytanie ze zrozumieniem',2,'Bardzo łatwy','2020-11-13',1),(43,'Work and unemployement','Czytanie ze zrozumieniem',2,'Bardzo łatwy','2020-11-20',1),(44,'Work and unemployement','Słuchanie ze zrozumieniem',1,'Łatwy','2020-11-23',1),(45,'Will czy going to','Pisownia',0,'Średni','2020-11-23',1),(46,'Work and unemployement','Słuchanie ze zrozumieniem',1,'Łatwy','2020-11-23',1),(47,'Work and unemployement','Słuchanie ze zrozumieniem',1,'Łatwy','2020-11-23',1),(48,'Lugar de confusión','Słuchanie ze zrozumieniem',4,'Trudny','2020-11-25',8),(49,'Will czy going to','Pisownia',1,'Średni','2020-12-30',1),(50,'Will czy going to','Pisownia',3,'Średni','2020-12-30',1),(51,'Will czy going to','Pisownia',3,'Średni','2020-12-30',1),(52,'Lugar de confusión','Słuchanie ze zrozumieniem',3,'Trudny','2020-12-31',1),(53,'Work and unemployement','Czytanie ze zrozumieniem',4,'Bardzo łatwy','2021-01-02',1),(54,'Will czy going to','Pisownia',1,'Średni','2021-01-10',1),(55,'Work and unemployement','Słuchanie ze zrozumieniem',1,'Łatwy','2021-01-31',1),(56,'Will czy going to','Pisownia',2,'Średni','2021-01-31',1),(57,'Work and unemployement','Czytanie ze zrozumieniem',1,'Bardzo łatwy','2021-01-31',1),(58,'Will czy going to','Pisownia',3,'Średni','2021-03-14',15),(59,'Work and unemployement','Czytanie ze zrozumieniem',5,'Bardzo łatwy','2021-03-14',15),(60,'Lugar de confusión','Słuchanie ze zrozumieniem',1,'Trudny','2021-03-14',15),(61,'Will czy going to','Pisownia',1,'Średni','2021-03-14',1),(62,'Will czy going to','Pisownia',1,'Średni','2021-03-14',1),(63,'Will czy going to','Pisownia',1,'Średni','2021-03-14',1),(64,'Will czy going to','Pisownia',4,'Średni','2021-03-14',1),(65,'Will czy going to','Pisownia',1,'Średni','2021-03-14',1),(66,'Will czy going to','Pisownia',1,'Średni','2021-08-08',16),(67,'Work and unemployement','Czytanie ze zrozumieniem',2,'Bardzo łatwy','2021-08-08',16);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `text`
--

DROP TABLE IF EXISTS `text`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `text` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `text`
--

LOCK TABLES `text` WRITE;
/*!40000 ALTER TABLE `text` DISABLE KEYS */;
INSERT INTO `text` VALUES (1,'Reading','Work and unemployement','Max worked for a large corporation most of his life. The job was tiring, so he quit. At the moment, Max is unemployed. Living unemployed, he has a lot of time for his hobbies. He is in no hurry to find employment. Max thinks he has worked enough.','Bardzo łatwy','Angielski'),(2,'Listening','Work and unemployement','Max worked for a large corporation most of his life. The job was tiring, so he quit. At the moment, Max is unemployed. Living unemployed, he has a lot of time for his hobbies. He is in no hurry to find employment. Max thinks he has worked enough.','Łatwy','Angielski'),(3,'Orthography','Will czy going to','orthography','Średni','Angielski'),(9,'Listening','Lugar de confusión','Felipe se fue de España hace dos años. Actualmente se encuentra en el Reino Unido y le va bien allí. Antes de eso, Felipe había estado en Alemania durante seis meses y no pudo hacer frente allí. Aprender inglés es mucho más fácil que aprender alemán. Felipe no tiene intención de volver a España por el momento.','Trudny','Hiszpański'),(10,'Orthography','Is czy are','ortography','Bardzo łatwy','Angielski'),(11,'Orthography','Got Gotten','ortography','Łatwy','Angielski'),(12,'Orthography','Jaki to czas?','ortography','Trudny','Angielski'),(20,'Orthography','Hiszpański Nieregularne','ortography','Średni','Hiszpański'),(21,'Orthography','Hiszpański Nieregularne cz2','ortography','Średni','Hiszpański'),(22,'Orthography','Hiszpański Nieregularne cz3','ortography','Średni','Hiszpański'),(23,'Orthography','Hiszpański Nieregularne cz4','ortography','Trudny','Hiszpański'),(24,'Orthography','Angielski Nieregularne','ortography','Łatwy','Angielski'),(25,'Orthography','Angielski Nieregularne cz2','ortography','Średni','Angielski'),(26,'Orthography','Angielski Nieregularne cz3','ortography','Średni','Angielski'),(27,'Orthography','Angielski Nieregularne cz4','ortography','Trudny','Angielski'),(28,'Orthography','Angielski Nieregularne cz5','ortography','Trudny','Angielski'),(29,'Orthography','Angielski Nieregularne cz6','ortography','Trudny','Angielski');
/*!40000 ALTER TABLE `text` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'us','[]','$argon2id$v=19$m=65536,t=4,p=1$WZnKGwBixobl9KEB8UBYHQ$0Tsy60E1t3kBpbR2uNQUwnz4aIXdw6lDlZWtmOFe/cY'),(2,'us1','[]','$argon2id$v=19$m=65536,t=4,p=1$L0ntkp84GzdEf9qGk0Evog$+xE5Zj34w6p5Ty/xQHAdqW+DIerrRzDOUr7WNIHn9C0'),(3,'user','[]','$argon2id$v=19$m=65536,t=4,p=1$X3Cbs8rysKRS7ZSnn5YlYA$1nXFyElF6AeULFm1j0ptIh/LsZNQ4gzLZr8kKMbQhCo'),(4,'xx1','[]','$argon2id$v=19$m=65536,t=4,p=1$Pbfw7NlxYP6ils7TctmVrg$70GuA+UIgCLmcF/JtYRFliaw/zo21lY4M9Yr92yxKXI'),(5,'av','[]','$argon2id$v=19$m=65536,t=4,p=1$Uxd3g6Sp6XlLh+Qz9iOO0A$kYfsGOdtxP21EAR1un9iRP1pgAj9lKeJoBRTVVKWe2I'),(6,'uzer','[]','$argon2id$v=19$m=65536,t=4,p=1$Oz+YiJ//qFq26TVv3SVxdQ$eHwYYoNoJrmVJhEgFEqdN8G5UBP0W9dgCc0RmenKkFw'),(7,'user12345','[]','$argon2id$v=19$m=65536,t=4,p=1$ArrXFBlKGcCISVzpueg4PQ$Q07MlVW+sQsCytCztouiGZEK1u5y3Iie0LSZkd3/EDY'),(8,'admin','[]','$argon2id$v=19$m=65536,t=4,p=1$ATdPGMee2eSAfCoxQb+ytQ$4g3xmAC8IBH2YlDFmXeGRcBkHjOf3oIwin9OEQ+lQ0U'),(10,'user15','[]','$argon2id$v=19$m=65536,t=4,p=1$Xw3Pg7lZjIfjOTTL9o0jZA$uGAsyXZRVgaI056zu0hXMNbLgIm/0VGgTFWprC5d0w4'),(11,'zz','[]','$argon2id$v=19$m=65536,t=4,p=1$q/PGQrGDVczr2VKscP7ZKQ$r2jrZBbcz1Rtd5EGw46Uujna+YeHcIbDUUhaZjSuRFI'),(12,'zxc','[]','$argon2id$v=19$m=65536,t=4,p=1$E04Y4VrlbrB9Qfpgp5TImA$3OP7iFxARJUEnQds1FeGs6lEF3j5YYJzRbcTjOdQ8kI'),(13,'Użytkownik','[]','$argon2id$v=19$m=65536,t=4,p=1$FfjP3jC9heapS56tJTY/9Q$Tij/96/xO+wuP2f3cX+ZUwwGaTKnwz4FD2vP7Q6Eskg'),(14,'zzz1','[]','$argon2id$v=19$m=65536,t=4,p=1$WH2rSKklhiO+RXjbtsSOPQ$GUSBSTtBcujqonvKQ8Bb5IdXQN9TX5U/jHx1vtBT6F8'),(15,'us16','[]','$argon2id$v=19$m=65536,t=4,p=1$jGSQtAZaXcgshKxrTH50wA$FIfE7QMKu2lMOFfKbYQhlkf3wiqGEUkdMqXIYOvnBhM'),(16,'uyy1','[]','$argon2id$v=19$m=65536,t=4,p=1$QpN4j54IXfm1o7eRqY/iKQ$O9I51MF7LIEcTtznNogbmuhG3UxbfGpRlDSqPA0Xyso');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `words`
--

DROP TABLE IF EXISTS `words`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `words` (
  `id` int NOT NULL AUTO_INCREMENT,
  `word` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `translation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `words`
--

LOCK TABLES `words` WRITE;
/*!40000 ALTER TABLE `words` DISABLE KEYS */;
INSERT INTO `words` VALUES (1,'courage','odwaga','Angielski'),(2,'elbow','łokieć','Angielski'),(3,'knee','kolano','Angielski'),(4,'fist','pięść','Angielski'),(5,'battle','bitwa','Angielski'),(6,'batalla','bitwa','Hiszpański'),(7,'codo','łokieć','Hiszpański'),(8,'rodilla','kolano','Hiszpański'),(9,'anxiety','niepokój','Angielski'),(10,'stairs','schody','Angielski'),(11,'laces','sznurówki','Angielski'),(12,'windmill','wiatrak','Angielski'),(13,'ear','ucho','Angielski'),(14,'wardrobe','szafa','Angielski'),(15,'cabeza','głowa','Hiszpański'),(16,'finger','palec','Angielski');
/*!40000 ALTER TABLE `words` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `words_learned`
--

DROP TABLE IF EXISTS `words_learned`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `words_learned` (
  `id` int NOT NULL AUTO_INCREMENT,
  `users_id` int NOT NULL,
  `word` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `words_learned`
--

LOCK TABLES `words_learned` WRITE;
/*!40000 ALTER TABLE `words_learned` DISABLE KEYS */;
INSERT INTO `words_learned` VALUES (1,1,'courage','Angielski'),(2,1,'elbow','Angielski'),(3,1,'fist','Angielski'),(4,1,'knee','Angielski'),(5,1,'anxiety','Angielski'),(6,1,'stairs','Angielski'),(7,1,'batalla','Hiszpański'),(8,1,'codo','Hiszpański'),(9,1,'laces','Angielski'),(10,1,'windmill','Angielski'),(11,1,'courage','Angielski'),(12,1,'knee','Angielski'),(13,1,'elbow','Angielski'),(14,1,'courage','Angielski'),(15,1,'elbow','Angielski'),(16,15,'battle','Angielski');
/*!40000 ALTER TABLE `words_learned` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `words_to_learn`
--

DROP TABLE IF EXISTS `words_to_learn`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `words_to_learn` (
  `id` int NOT NULL AUTO_INCREMENT,
  `users_id` int NOT NULL,
  `word` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `translation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `progress` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `words_to_learn`
--

LOCK TABLES `words_to_learn` WRITE;
/*!40000 ALTER TABLE `words_to_learn` DISABLE KEYS */;
INSERT INTO `words_to_learn` VALUES (16,1,'elbow','łokieć','Angielski',0),(17,8,'cabeza','głowa','Hiszpański',2),(18,1,'batalla','bitwa','Hiszpański',NULL),(19,1,'courage','odwaga','Angielski',1),(20,1,'fist','pięść','Angielski',3),(21,1,'battle','bitwa','Angielski',1),(22,1,'batalla','bitwa','Hiszpański',NULL),(23,1,'codo','łokieć','Hiszpański',NULL),(24,1,'rodilla','kolano','Hiszpański',NULL),(25,1,'anxiety','niepokój','Angielski',1),(26,1,'stairs','schody','Angielski',3),(27,1,'courage','odwaga','Angielski',4),(28,14,'courage','odwaga','Angielski',NULL),(29,14,'courage','odwaga','Angielski',NULL),(30,14,'courage','odwaga','Angielski',NULL),(31,14,'courage','odwaga','Angielski',NULL),(32,14,'courage','odwaga','Angielski',0),(33,14,'courage','odwaga','Angielski',0),(34,14,'courage','odwaga','Angielski',0),(35,14,'courage','odwaga','Angielski',NULL),(36,14,'courage','odwaga','Angielski',0),(37,14,'courage','odwaga','Angielski',0),(38,14,'courage','odwaga','Angielski',NULL),(39,14,'courage','odwaga','Angielski',NULL),(40,14,'courage','odwaga','Angielski',0),(41,14,'courage','odwaga','Angielski',NULL),(42,14,'courage','odwaga','Angielski',NULL),(43,14,'courage','odwaga','Angielski',NULL),(44,14,'courage','odwaga','Angielski',NULL),(45,14,'courage','odwaga','Angielski',NULL),(46,14,'courage','odwaga','Angielski',NULL),(47,14,'courage','odwaga','Angielski',NULL),(48,14,'courage','odwaga','Angielski',NULL),(49,14,'elbow','łokieć','Angielski',NULL),(50,14,'elbow','łokieć','Angielski',NULL),(51,14,'elbow','łokieć','Angielski',0),(52,14,'elbow','łokieć','Angielski',0),(53,14,'elbow','łokieć','Angielski',NULL),(54,14,'elbow','łokieć','Angielski',NULL),(55,14,'elbow','łokieć','Angielski',NULL),(56,14,'elbow','łokieć','Angielski',NULL),(57,14,'elbow','łokieć','Angielski',NULL),(58,14,'elbow','łokieć','Angielski',NULL),(59,14,'elbow','łokieć','Angielski',NULL),(60,14,'elbow','łokieć','Angielski',0),(61,14,'elbow','łokieć','Angielski',0),(62,14,'elbow','łokieć','Angielski',NULL),(63,14,'elbow','łokieć','Angielski',NULL),(64,14,'knee','kolano','Angielski',NULL),(65,14,'fist','pięść','Angielski',NULL),(66,14,'battle','bitwa','Angielski',NULL),(67,14,'battle','bitwa','Angielski',NULL),(68,14,'battle','bitwa','Angielski',NULL),(69,14,'battle','bitwa','Angielski',NULL),(70,14,'battle','bitwa','Angielski',0),(71,14,'battle','bitwa','Angielski',NULL),(72,14,'battle','bitwa','Angielski',NULL),(73,14,'battle','bitwa','Angielski',NULL),(74,14,'battle','bitwa','Angielski',0),(75,14,'battle','bitwa','Angielski',NULL),(76,14,'battle','bitwa','Angielski',NULL),(77,15,'courage','odwaga','Angielski',0),(79,15,'batalla','bitwa','Hiszpański',NULL),(80,15,'codo','łokieć','Hiszpański',NULL),(81,15,'rodilla','kolano','Hiszpański',NULL),(82,15,'battle','bitwa','Angielski',4),(83,15,'elbow','łokieć','Angielski',2),(84,16,'courage','odwaga','Angielski',NULL),(85,16,'knee','kolano','Angielski',NULL),(86,16,'battle','bitwa','Angielski',NULL),(87,16,'codo','łokieć','Hiszpański',0),(88,16,'rodilla','kolano','Hiszpański',0);
/*!40000 ALTER TABLE `words_to_learn` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-03-16 23:20:07
