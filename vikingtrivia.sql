-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: vikingtrivia
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.21-MariaDB

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
-- Table structure for table `activity_reg`
--

DROP TABLE IF EXISTS `activity_reg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `activity_reg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `score` int(11) DEFAULT NULL,
  `time` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activity_reg`
--

LOCK TABLES `activity_reg` WRITE;
/*!40000 ALTER TABLE `activity_reg` DISABLE KEYS */;
/*!40000 ALTER TABLE `activity_reg` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `answers`
--

DROP TABLE IF EXISTS `answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(100) CHARACTER SET latin1 NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `correct` tinyint(4) NOT NULL DEFAULT '0',
  `question_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=181 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answers`
--

LOCK TABLES `answers` WRITE;
/*!40000 ALTER TABLE `answers` DISABLE KEYS */;
INSERT INTO `answers` VALUES (1,'Espada',NULL,NULL,0,1),(2,'Lanza',NULL,NULL,0,1),(3,'Hacha',NULL,NULL,1,1),(4,'Martillo',NULL,NULL,0,1),(5,'Defender su territorio',NULL,NULL,0,2),(6,'Recursos naturales',NULL,NULL,0,2),(7,'Saquear recursos y riquezas',NULL,NULL,1,2),(8,'Por simple placer',NULL,NULL,0,2),(9,'Los bares',NULL,NULL,0,3),(10,'Su tierra/región',NULL,NULL,0,3),(11,'La funeraria',NULL,NULL,0,3),(12,'El \"paraíso en el cielo\"',NULL,NULL,1,3),(13,'Sólo el torso',NULL,NULL,0,4),(14,'Sólo casco',NULL,NULL,0,4),(15,'Sólo escudo',NULL,NULL,1,4),(16,'No usaban más que su arma',NULL,NULL,0,4),(17,'Sí, sólo aquellos con mayor poder económico',NULL,NULL,0,5),(18,'No',NULL,NULL,1,5),(19,'Sí, lo sacaban de los animales que cazaban',NULL,NULL,0,5),(20,'Lo usaban los más pobres sólo para intimidar',NULL,NULL,0,5),(21,'¡Sí, pelea!',NULL,NULL,0,6),(22,'No, si podían, aceptaban dinero u objetos',NULL,NULL,1,6),(23,'Aceptaban que los inviten a comer',NULL,NULL,0,6),(24,'AU! AU! AU!',NULL,NULL,0,6),(25,'Olaf el Viejo',NULL,NULL,0,7),(26,'Canuto el Grande',NULL,NULL,1,7),(27,'Erik Hacha Sangrienta',NULL,NULL,0,7),(28,'Los vikingos no conquistaron Inglaterra entera',NULL,NULL,0,7),(29,'Valquiria',NULL,NULL,0,8),(30,'Shugoki',NULL,NULL,0,8),(31,'Defensoras de la paz',NULL,NULL,0,8),(32,'Ninguno de los anteriores',NULL,NULL,1,8),(33,'Aquellos quienes no iban a luchar',NULL,NULL,0,9),(34,'Los campesinos',NULL,NULL,0,9),(35,'Guerreros que luchaban semidesnudos',NULL,NULL,1,9),(36,'Quienes se encargaban de fabricar los barcos',NULL,NULL,0,9),(37,'Cotas de malla (pecheras)',NULL,NULL,0,10),(38,'Yelmos de metal',NULL,NULL,1,10),(39,'Espadas',NULL,NULL,0,10),(40,'Escudos',NULL,NULL,0,10),(41,'A una familia de nobles',NULL,NULL,0,11),(42,'A un monasterio/iglesia',NULL,NULL,1,11),(43,'Una granja cercana',NULL,NULL,0,11),(44,'A un barco enemigo',NULL,NULL,0,11),(45,'Sí, se unían todos los pueblos',NULL,NULL,0,12),(46,'Nunca',NULL,NULL,0,12),(47,'Por supuesto, para eso se entrenaban soldados',NULL,NULL,0,12),(48,'Dependiendo de cuánto se les pagaba',NULL,NULL,1,12),(49,'Por los colores de sus velas',NULL,NULL,1,13),(50,'Por ir atrás de los demás',NULL,NULL,0,13),(51,'Por tener los bordes metálicos',NULL,NULL,0,13),(52,'No había distinción, todos los barcos eran iguales',NULL,NULL,0,13),(53,'El enemigo de sus dioses',NULL,NULL,0,14),(54,'La batalla del fin del mundo',NULL,NULL,1,14),(55,'Al paso de los guerreros a la inmortalidad',NULL,NULL,0,14),(56,'A los traidores',NULL,NULL,0,14),(57,'Torrensfjord',NULL,NULL,0,15),(58,'Hafrsfjord',NULL,NULL,1,15),(59,'Leifensfjord',NULL,NULL,0,15),(60,'Vikesfjord',NULL,NULL,0,15),(61,'Bruselas',NULL,NULL,0,16),(62,'Amsterdam',NULL,NULL,0,16),(63,'Northumbria',NULL,NULL,1,16),(64,'Osnabruck',NULL,NULL,0,16),(65,'Un tipo de barco',NULL,NULL,1,17),(66,'Un animal',NULL,NULL,0,17),(67,'El nombre de un vikingo importante',NULL,NULL,0,17),(68,'Ninguno de los anteriores',NULL,NULL,0,17),(69,'Asia',NULL,NULL,0,18),(70,'Oceanía',NULL,NULL,0,18),(71,'África',NULL,NULL,0,18),(72,'América',NULL,NULL,1,18),(73,'Persiguiendo enemigos',NULL,NULL,0,19),(74,'Extraviado después de una tormenta',NULL,NULL,1,19),(75,'Siguiendo una profecía',NULL,NULL,0,19),(76,'Guiado por las visiones de Odín',NULL,NULL,0,19),(77,'Leif Erikssen',NULL,NULL,1,20),(78,'Ragnar Lothbrok',NULL,NULL,0,20),(79,'Harald Bronfjold',NULL,NULL,0,20),(80,'Altom Östri',NULL,NULL,0,20),(81,'Transporte privado',NULL,NULL,1,21),(82,'Transporte de esclavos',NULL,NULL,0,21),(83,'Transporte de pieles',NULL,NULL,0,21),(84,'Transporte de mujeres guerreras',NULL,NULL,0,21),(85,'Con sistemas de poleas',NULL,NULL,0,22),(86,'Levantándolos entre muchos',NULL,NULL,0,22),(87,'Tirando agua en la tierra para que patinen',NULL,NULL,0,22),(88,'Poniéndolos sobre troncos que hacían rodar',NULL,NULL,1,22),(89,'Cada uno en su cuarto',NULL,NULL,0,23),(90,'Sobre la cubierta',NULL,NULL,1,23),(91,'En hamacas colgando de los mástiles',NULL,NULL,0,23),(92,'En la bodega',NULL,NULL,0,23),(93,'Harald I',NULL,NULL,0,24),(94,'Bjorn I',NULL,NULL,0,24),(95,'Olaf I',NULL,NULL,0,24),(96,'Asmund I',NULL,NULL,0,24),(97,'Por su posicionamiento estratégico',NULL,NULL,0,25),(98,'Por los animales de la zona, y el valor de sus pieles',NULL,NULL,0,25),(99,'Por sus tierras verdes',NULL,NULL,1,25),(100,'Por castigo, mandaba allá a los traidores',NULL,NULL,0,25),(101,'Gorm el Viejo',NULL,NULL,1,26),(102,'Dagfinn el Sabio',NULL,NULL,0,26),(103,'Erlend el Extraño',NULL,NULL,0,26),(104,'Torsten el Duro',NULL,NULL,0,26),(105,'El caballo',NULL,NULL,0,27),(106,'El barco',NULL,NULL,1,27),(107,'El oso',NULL,NULL,0,27),(108,'Ninguno, iban a pie',NULL,NULL,0,27),(109,'Torvald',NULL,NULL,0,28),(110,'Uffe',NULL,NULL,0,28),(111,'Hrolf',NULL,NULL,1,28),(112,'Vali',NULL,NULL,0,28),(113,'982 D.C.',NULL,NULL,1,29),(114,'940 D.C.',NULL,NULL,0,29),(115,'840 D.C.',NULL,NULL,0,29),(116,'892 D.C.',NULL,NULL,0,29),(117,'759 D.C.',NULL,NULL,0,30),(118,'795 D.C.',NULL,NULL,1,30),(119,'975 D.C.',NULL,NULL,0,30),(120,'957 D.C.',NULL,NULL,0,30),(121,'Vidrr',NULL,NULL,0,31),(122,'Yggdrasil',NULL,NULL,1,31),(123,'Midgard',NULL,NULL,0,31),(124,'Ninguno de los anteriores',NULL,NULL,0,31),(125,'No, sólo creían en ellos mismos',NULL,NULL,0,32),(126,'Sí, su dios principal era Odin',NULL,NULL,1,32),(127,'Sí, eran Cristianos',NULL,NULL,0,32),(128,'Sí, su dios principal era Kratos',NULL,NULL,0,32),(129,'Loki',NULL,NULL,0,33),(130,'Freyr',NULL,NULL,0,33),(131,'Gwyn',NULL,NULL,1,33),(132,'Skirnir',NULL,NULL,0,33),(133,'\"Proveniente de\"',NULL,NULL,0,34),(134,'\"Hijo de\"',NULL,NULL,0,34),(135,'Ambas respuestas anteriores',NULL,NULL,1,34),(136,'Ninguna de las anteriores',NULL,NULL,0,34),(137,'Cremación',NULL,NULL,0,35),(138,'Entierro',NULL,NULL,0,35),(139,'Ambas respuestas anteriores',NULL,NULL,1,35),(140,'Ninguna de las anteriores',NULL,NULL,0,35),(141,'Un rey vikingo',NULL,NULL,0,36),(142,'El dios del trueno',NULL,NULL,1,36),(143,'Un Avenger',NULL,NULL,0,36),(144,'Ninguna de las anteriores',NULL,NULL,0,36),(145,'El dios del amor',NULL,NULL,0,37),(146,'El padre de Floki, el carpintero',NULL,NULL,0,37),(147,'Un héroe vikingo',NULL,NULL,0,37),(148,'Ninguna de las anteriores',NULL,NULL,1,37),(149,'Su hijo mayor',NULL,NULL,0,38),(150,'Su esposa',NULL,NULL,1,38),(151,'Su esclavo',NULL,NULL,0,38),(152,'Nadie',NULL,NULL,0,38),(153,'Noruega',NULL,NULL,0,39),(154,'Suecia',NULL,NULL,0,39),(155,'Dinamarca',NULL,NULL,0,39),(156,'Todas las anteriores',NULL,NULL,1,39),(157,'Barro',NULL,NULL,0,40),(158,'Madera',NULL,NULL,1,40),(159,'Huesos',NULL,NULL,0,40),(160,'Cemento',NULL,NULL,0,40),(161,'Era un grito de guerra',NULL,NULL,0,41),(162,'La palabra que usaban para brindar',NULL,NULL,0,41),(163,'Como le decían a los poetas',NULL,NULL,1,41),(164,'Un animal cuya piel era muy valiosa',NULL,NULL,0,41),(165,'El vikingo que abandonaba la aldea',NULL,NULL,0,42),(166,'El mayor barco vikingo',NULL,NULL,0,42),(167,'Un dios vikingo',NULL,NULL,0,42),(168,'El abecedario vikingo',NULL,NULL,1,42),(169,'Una comida típica',NULL,NULL,0,43),(170,'Un juego de mesa',NULL,NULL,1,43),(171,'Una oración',NULL,NULL,0,43),(172,'Una runa',NULL,NULL,0,43),(173,'Un martillo dado vuelta',NULL,NULL,1,44),(174,'Una herradura',NULL,NULL,0,44),(175,'Dos hachas cruzados',NULL,NULL,0,44),(176,'Un barco',NULL,NULL,0,44),(177,'El tigre',NULL,NULL,0,45),(178,'El halcón',NULL,NULL,0,45),(179,'El oso',NULL,NULL,1,45),(180,'La víbora',NULL,NULL,0,45);
/*!40000 ALTER TABLE `answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(50) CHARACTER SET latin1 NOT NULL,
  `category_img` varchar(45) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Armas y Guerreros','vikingtrivia\\public\\images\\axe.png'),(2,'Viajes y Conquistas','vikingtrivia\\public\\images\\boat.png'),(3,'Cultura y Costumbres','vikingtrivia\\public\\images\\mug.png');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` longtext CHARACTER SET latin1 NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `freeze_timer` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (1,'Los vikingos, en combate portaban armas según su economía pero... ¿Qué arma tenían en común todos los guerreros?',NULL,NULL,1,NULL,NULL),(2,'¿Por qué solían luchar?',NULL,NULL,1,NULL,NULL),(3,'¿Cuál es el sitio conocido como \"Valhalla\"?',NULL,NULL,1,NULL,NULL),(4,'¿Los guerreros con menor poder económico usaban equipo de defensa?',NULL,NULL,1,NULL,NULL),(5,'¿Es cierto que los guerreros usaban cascos con cuernos?',NULL,NULL,1,NULL,NULL),(6,'¿Siempre buscaban el enfrentamiento?',NULL,NULL,1,NULL,NULL),(7,'¿Quién fue el primer rey vikingo en reinar en toda Inglaterra?',NULL,NULL,1,NULL,NULL),(8,'¿Qué nombre recibían las mujeres guerreras?',NULL,NULL,1,NULL,NULL),(9,'¿Qué eran los berserker?',NULL,NULL,1,NULL,NULL),(10,'¿Qué elemento era el más caro de fabricar?',NULL,NULL,1,NULL,NULL),(11,'¿Dónde fue el primer ataque vikingo?',NULL,NULL,1,NULL,NULL),(12,'¿En las expediciones, eran numerosos los grupos de guerreros?',NULL,NULL,1,NULL,NULL),(13,'¿Cómo se distinguía el barco del rey en una guerra?',NULL,NULL,1,NULL,NULL),(14,'¿A qué se llamaba \"Ragnarok\"?',NULL,NULL,1,NULL,NULL),(15,'¿Cómo se llamó la última batalla que unificó Noruega?',NULL,NULL,1,NULL,NULL),(16,'¿Dónde fue la primera invasión vikinga?',NULL,NULL,2,NULL,NULL),(17,'¿Qué es un Drakkar?',NULL,NULL,2,NULL,NULL),(18,'Bjarni fue el primer vikingo en llegar a:',NULL,NULL,2,NULL,NULL),(19,'¿Cómo llegó Gunnbjorn a Groenlandia?',NULL,NULL,2,NULL,NULL),(20,'¿Quién fundó Vinlandia, el primer establecimiento vikingo en América?',NULL,NULL,2,NULL,NULL),(21,'¿Qué función cumplía el bote \"Karv\"?',NULL,NULL,2,NULL,NULL),(22,'¿Cómo hacían los vikingos para transportar los barcos por tierra?',NULL,NULL,2,NULL,NULL),(23,'¿Dónde dormían los vikingos cuando viajaban en barco?',NULL,NULL,2,NULL,NULL),(24,'¿Qué rey vikingo fue convertido a la cristiandad y mandado a cristianizar el país?',NULL,NULL,2,NULL,NULL),(25,'¿Por qué quería Erik el Rojo que los demás vikingos vayan a Groenlandia?',NULL,NULL,2,NULL,NULL),(26,'¿Quién fue el primer rey en unir toda Dinamarca?',NULL,NULL,2,NULL,NULL),(27,'¿Cuál era el medio de transporte más utilizado por los vikingos?',NULL,NULL,2,NULL,NULL),(28,'¿Cuál era el nombre del vikingo que conquistó distintas partes de Francia?',NULL,NULL,2,NULL,NULL),(29,'¿En qué año se fundaron los primeros asentamientos vikingos en Groenlandia?',NULL,NULL,2,NULL,NULL),(30,'¿En qué año sucedió el primer ataque a Irlanda?',NULL,NULL,2,NULL,NULL),(31,'¿Cómo se llama el árbol de la vida?',NULL,NULL,3,NULL,NULL),(32,'¿Los nórdicos guerreros creían en Dios?',NULL,NULL,3,NULL,NULL),(33,'¿Cuál de los siguientes NO era un dios vikingo?',NULL,NULL,3,NULL,NULL),(34,'¿Qué denota el apellido de un vikingo?',NULL,NULL,3,NULL,NULL),(35,'¿Qué tipo de funeral realizaban los vikingos?',NULL,NULL,3,NULL,NULL),(36,'¿Quién era Thor?',NULL,NULL,3,NULL,NULL),(37,'¿Quién era Loki?',NULL,NULL,3,NULL,NULL),(38,'¿Quién quedaba a cargo de su casa cuando un vikingo se iba a pelear?',NULL,NULL,3,NULL,NULL),(39,'¿De dónde vienen los vikingos?',NULL,NULL,3,NULL,NULL),(40,'¿De qué material eran las casas de los vikingos?',NULL,NULL,3,NULL,NULL),(41,'¿Qué significaba \"Skald\"?',NULL,NULL,3,NULL,NULL),(42,'¿Qué era el \"Futhark\"?',NULL,NULL,3,NULL,NULL),(43,'¿Qué era el \"Hnefatafl\"?',NULL,NULL,3,NULL,NULL),(44,'Los vikingos usaban colgantes con ciertas formas porque creían que les traía suerte. ¿Cuál era el más común?',NULL,NULL,3,NULL,NULL),(45,'¿Qué animal estaba considerado como el más peligroso por los vikingos?',NULL,NULL,3,NULL,NULL);
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_user`
--

DROP TABLE IF EXISTS `user_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_a_id` int(11) NOT NULL,
  `user_b_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_user`
--

LOCK TABLES `user_user` WRITE;
/*!40000 ALTER TABLE `user_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL DEFAULT '',
  `surname` varchar(45) NOT NULL DEFAULT '',
  `username` varchar(45) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `birth_date` date DEFAULT NULL,
  `gender` varchar(10) DEFAULT '',
  `avatar_path` varchar(100) DEFAULT '/images/avatars/defaultAvatar.png',
  `password` varchar(100) NOT NULL DEFAULT '',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `admin_id` tinyint(4) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'FRANCISCO','LOPEZ','flopez','FJLOOPEZ@GMAIL.COM','1990-12-26','male','\'/images/avatars/defaultAvatar.png\'','$2y$10$4b56o8asyRW8tpczavdVCeCp3UrNTKHZU/txmG51CaTG5bsim226u',NULL,NULL,0,NULL),(2,'Ruy','Barriopedro','ruypo','ruypo00@gmail.com','2017-05-11','male','\'/images/avatars/defaultAvatar.png\'','$2y$10$6dnaEcFbNzR77uVGab/N5uO3nobxKT1/oqljKEcjESa8vHUUGrRx.',NULL,NULL,0,NULL),(3,'jorgito','lopez','jorgito','jsadkn@sdlknf.com','2017-05-16','male','\'/images/avatars/defaultAvatar.png\'','$2y$10$O.oUtW9btuitDu7A052HwOSPZy7lOg.j6WYmuVLgli2VOy5gO2ELW',NULL,NULL,0,NULL),(4,'haha','lala','hala','fjloopez@gmail.com','1990-02-04','other','\'/images/avatars/defaultAvatar.png\'','$2y$10$9f9YCfE3/YfFkn/J1omySOjkCuThYoL8XLd8lr5rmiCcOcJaxrpeW',NULL,NULL,0,NULL),(5,'mostri','mostreli','mostri','mostri@mostri.com','2017-05-17','other','\'/images/avatars/defaultAvatar.png\'','$2y$10$9IGVaG8AfNjjIiZ7cqYDPePQZ2RId8cpCkNny0fOMgDdgI9/fKIcW',NULL,NULL,0,NULL),(6,'jorgelin','damostri','elmostri','afafd@sdgs.com','2017-05-17','female','\'/images/avatars/defaultAvatar.png\'','$2y$10$g92TkwLZN5cldUJ0NGfo9uBOM8bUYP7wf9ifr6mQw/ejfjH7ie3M.',NULL,NULL,0,NULL),(7,'Bart','Simpson','elbarto','bart@simpson.com','1980-12-12','male','\'/images/avatars/defaultAvatar.png\'','$2y$10$EzaQiyWVUZVWGGnfpBmONeYW00RRe6htvA4.GFVCtMseOHBRf1wvS',NULL,NULL,0,NULL),(8,'asdf','asdf','asdf','a@a.com','1990-01-01','male','\'/images/avatars/defaultAvatar.png\'','$2y$10$BCKwiCkdr2kyqWM7jeAu0u07FIzy.rKylLhrqBFJ2ZZnNtb8zMirW',NULL,NULL,0,'OoLbp6Mb1SOmVT95sNiZaeiTCwlgQfrQyUUVjQhVwnvWIdPJB3MfIfWX9I5e'),(9,'asdafd','afsfaf','asdfg','a@a.com','1990-12-12','female','\'/images/avatars/defaultAvatar.png\'','$2y$10$Mk9VVdo9k0WSyCRAsWbaQuf7AQQyh7Tow03qhgXMcMBAJKBNvj2iC',NULL,NULL,0,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-08-07 23:44:22
