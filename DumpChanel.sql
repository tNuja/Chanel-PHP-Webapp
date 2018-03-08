-- MySQL dump 10.13  Distrib 5.7.21, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: chaneldb
-- ------------------------------------------------------
-- Server version	5.7.21-log

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
-- Table structure for table `about`
--

DROP TABLE IF EXISTS `about`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `about` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `status` mediumtext,
  `pro_pic` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `about`
--

LOCK TABLES `about` WRITE;
/*!40000 ALTER TABLE `about` DISABLE KEYS */;
INSERT INTO `about` VALUES (1,1,'Hi I am Coco Chanel. I love designing clothes. Below are some of my works.Feel free to conatact me for custom designs','images/stephsolo2.jpg'),(2,2,'Hi I am Divya. I create decorative items for home/office/parties. Something you wont find in stores. You can view some of my works below.','images/guiie.jpg'),(3,3,'Hi I am Samridhi. I sew items for daily use,especially crochet. Quality of prducts is 100% satisfactory. You can view some of my works below.','images/gyew.jpg'),(4,4,'Hi I am Vaishali. I am a foodie. I create ready to go cookies/bakery items 100% pure.I also create personalised decorative food baskets to gift to your loved ones.You can view some of my works below.You can also subscribe to my YouTube chanel at www.youtube.com/user/CookVaishali for tutorials of the products I make.','images/yqu.png'),(7,6,'HI, I am Anushka.','images/7.jpg');
/*!40000 ALTER TABLE `about` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `admin_id` int(2) unsigned NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(45) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `category_id` int(2) unsigned NOT NULL AUTO_INCREMENT,
  `category_type` varchar(45) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Clothing'),(2,'Home Decor'),(3,'Food Items'),(4,'Recipe'),(5,'Accessories');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `likes`
--

DROP TABLE IF EXISTS `likes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `likes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `comment_text` mediumtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `likes`
--

LOCK TABLES `likes` WRITE;
/*!40000 ALTER TABLE `likes` DISABLE KEYS */;
INSERT INTO `likes` VALUES (9,28,2,NULL),(10,26,2,NULL),(11,29,1,NULL),(12,24,2,NULL),(13,34,2,NULL),(14,34,6,NULL),(15,33,6,NULL);
/*!40000 ALTER TABLE `likes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `message_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sender_id` int(10) unsigned NOT NULL,
  `reciever_id` int(10) unsigned NOT NULL,
  `text` longtext NOT NULL,
  `timestamp` datetime NOT NULL,
  `read` enum('y','n') NOT NULL DEFAULT 'n',
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (8,2,1,'Hey,is the dress available in blue?','2018-03-08 03:18:15','n'),(9,1,2,'Yes,it is. Please contact on the specified number for further details.','2018-03-08 03:20:54','n'),(10,2,3,'Hey,Is the order available in bulk?','2018-03-08 03:46:35','n'),(11,3,2,'Yes,it is. Please contact on the given number for further details.','2018-03-08 03:47:44','n');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_det`
--

DROP TABLE IF EXISTS `personal_det`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_det` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_Name` varchar(45) NOT NULL,
  `Sex` enum('F','M','O') NOT NULL,
  `emaiLId` varchar(50) NOT NULL,
  `pass` varchar(45) NOT NULL,
  `contactNo` varchar(45) DEFAULT NULL,
  `loc` varchar(50) DEFAULT NULL,
  `registration_date` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_det`
--

LOCK TABLES `personal_det` WRITE;
/*!40000 ALTER TABLE `personal_det` DISABLE KEYS */;
INSERT INTO `personal_det` VALUES (1,'Coco Chanel','F','chanelcoco@coco.com','coco','9897245671','Chicago,USA','2018-02-28 13:19:03'),(2,'Divya Kuriyal','F','dd25@gmail.com','dk123','8126469886','Dehradun,India','2018-02-28 13:20:49'),(3,'Samridhi Bhatt','F','sambh@yahoo.com','sammy','9023498287','New Delhi,India','2018-02-28 13:26:14'),(4,'Vaishali ','F','vish12@rocket.com','yoyo123','9897653423','Meerut,India','2018-02-28 13:27:15'),(5,'Vaishnavi ','F','vaish@gmail.com','vaish123','9411141111','Ohio,USA','2018-02-28 19:17:50'),(6,'Anushka','F','anuhka.gh@yahoo.com','anu',NULL,NULL,'2018-03-07 03:13:47'),(7,'Tanuja Joshi','F','joshitannu25@gmail.com','tj123',NULL,NULL,'2018-03-08 02:27:42');
/*!40000 ALTER TABLE `personal_det` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post` (
  `post_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `type_id` int(1) DEFAULT NULL,
  `post_img` varchar(60) NOT NULL,
  `category_id` int(2) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL,
  `post_des` longtext,
  `post_date` datetime NOT NULL,
  `likes` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post`
--

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` VALUES (20,3,'Designer Mat',1,'images/6.jpg',2,'200',NULL,'2018-03-08 02:49:47',11),(21,2,'Wall Clock',1,'images/3.jpg',2,'500',NULL,'2018-03-08 02:51:14',145),(22,1,'White Crochet Shrug',1,'images/10.jpg',1,'550',NULL,'2018-03-08 02:53:07',134),(23,2,'Designer Button Bowl',1,'images/2.jpg',2,'450',NULL,'2018-03-08 02:55:00',34),(24,4,'Personalised Gift Basket',1,'images/18.jpg',5,'1200','Personalised Food Basket to gift your loved ones.','2018-03-08 02:57:50',325),(25,5,'Homemade Chochlates',1,'images/12.jpg',3,'650',NULL,'2018-03-08 03:00:14',240),(26,1,'Pink Crochet Baby Dress',1,'images/9.jpg',1,'600','Beautiful handwoven dress for your baby girl.Contact for more details.','2018-03-08 03:01:30',437),(27,4,'Delicious Chocholate Chip Cookies',1,'images/cookie.jpg',NULL,'400 per pack',NULL,'2018-03-08 03:05:19',76),(28,3,'Designer Table Pieces',1,'images/8.jpg',NULL,'300',NULL,'2018-03-08 03:06:38',108),(33,2,'Designer Cushions',1,'images/4.jpg',NULL,'300 per piece','Designer cushions to make you indoors more appealing.','2018-03-08 04:16:30',1),(34,2,'Homemade turmeric face mask',2,'images/TurmericArticle.jpg',NULL,'0','1. Mix flour, turmeric, honey and milk to make a paste\r\n\r\n2. Apply a thin layer to your face and let it dry for 20 minutes\r\n\r\n3. Rinse off in the shower, scrubbing gently to remove.\r\n\r\n4. Apply your favorite moisturizer.\r\n\r\nSubscribe to my YouTube channel at www.youtube.com/users/Lavanya for more skin care recipes.','2018-03-08 04:23:29',2);
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `type`
--

DROP TABLE IF EXISTS `type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `type` (
  `type_id` int(1) unsigned NOT NULL AUTO_INCREMENT,
  `typect` varchar(45) NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `type`
--

LOCK TABLES `type` WRITE;
/*!40000 ALTER TABLE `type` DISABLE KEYS */;
INSERT INTO `type` VALUES (1,'For Sale'),(2,'Community');
/*!40000 ALTER TABLE `type` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-09  1:43:07
