-- MySQL dump 10.13  Distrib 5.5.50, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: erinal
-- ------------------------------------------------------
-- Server version	5.5.50-0+deb8u1

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
-- Table structure for table `eri_admin`
--

DROP TABLE IF EXISTS `eri_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eri_admin` (
  `adminid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `adminuser` varchar(60) NOT NULL DEFAULT '',
  `adminpass` char(32) NOT NULL DEFAULT '',
  `adminemail` varchar(50) NOT NULL DEFAULT '',
  `logintime` int(10) unsigned NOT NULL DEFAULT '0',
  `createtime` int(10) unsigned NOT NULL DEFAULT '0',
  `loginip` bigint(20) NOT NULL DEFAULT '0',
  `islock` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`adminid`),
  UNIQUE KEY `eri_admin_adminuser_adminpass` (`adminuser`,`adminpass`),
  UNIQUE KEY `eri_admin_adminuser_adminemail` (`adminuser`,`adminemail`)
) ENGINE=InnoDB AUTO_INCREMENT=1001 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eri_admin`
--

LOCK TABLES `eri_admin` WRITE;
/*!40000 ALTER TABLE `eri_admin` DISABLE KEYS */;
INSERT INTO `eri_admin` VALUES (1000,'admin','3993b643fab872379256104cf5ff1867','admin@163.com',1471579030,1471494762,2130706433,0);
/*!40000 ALTER TABLE `eri_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eri_article_category`
--

DROP TABLE IF EXISTS `eri_article_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eri_article_category` (
  `articleid` bigint(20) unsigned NOT NULL,
  `cateid` int(10) unsigned NOT NULL,
  PRIMARY KEY (`articleid`,`cateid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eri_article_category`
--

LOCK TABLES `eri_article_category` WRITE;
/*!40000 ALTER TABLE `eri_article_category` DISABLE KEYS */;
INSERT INTO `eri_article_category` VALUES (1,1),(1,3);
/*!40000 ALTER TABLE `eri_article_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eri_articles`
--

DROP TABLE IF EXISTS `eri_articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eri_articles` (
  `articleid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL DEFAULT '',
  `summary` varchar(255) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `createtime` int(10) unsigned NOT NULL DEFAULT '0',
  `click` int(10) unsigned NOT NULL DEFAULT '0',
  `ishot` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否热门',
  `isrecommond` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否推荐',
  `userid` bigint(20) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`articleid`),
  KEY `eri_articles_articleid_userid` (`articleid`,`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eri_articles`
--

LOCK TABLES `eri_articles` WRITE;
/*!40000 ALTER TABLE `eri_articles` DISABLE KEYS */;
INSERT INTO `eri_articles` VALUES (1,'zz','zzzzzz','zzz',1471582345,0,0,1,0);
/*!40000 ALTER TABLE `eri_articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eri_category`
--

DROP TABLE IF EXISTS `eri_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eri_category` (
  `cateid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `catename` varchar(40) NOT NULL DEFAULT '',
  `parentid` int(10) unsigned NOT NULL DEFAULT '0',
  `createtime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`cateid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eri_category`
--

LOCK TABLES `eri_category` WRITE;
/*!40000 ALTER TABLE `eri_category` DISABLE KEYS */;
INSERT INTO `eri_category` VALUES (1,'工口',0,1471498453),(3,'123',0,1471573120);
/*!40000 ALTER TABLE `eri_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eri_comments`
--

DROP TABLE IF EXISTS `eri_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eri_comments` (
  `commentid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `articleid` bigint(20) unsigned NOT NULL,
  `userid` bigint(20) unsigned NOT NULL,
  `content` varchar(255) NOT NULL DEFAULT '',
  `createtime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`commentid`),
  KEY `eri_comments_commentid_articleid_userid` (`commentid`,`articleid`,`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eri_comments`
--

LOCK TABLES `eri_comments` WRITE;
/*!40000 ALTER TABLE `eri_comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `eri_comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eri_profile`
--

DROP TABLE IF EXISTS `eri_profile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eri_profile` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `truename` varchar(32) NOT NULL DEFAULT '' COMMENT '真实姓名',
  `age` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '年龄',
  `sex` enum('0','1','2') NOT NULL DEFAULT '0' COMMENT '性别',
  `address` varchar(60) NOT NULL DEFAULT '' COMMENT '地址',
  `birthday` date NOT NULL DEFAULT '2016-01-01' COMMENT '生日',
  `nickname` varchar(32) NOT NULL DEFAULT '' COMMENT '昵称',
  `company` varchar(100) NOT NULL DEFAULT '' COMMENT '公司',
  `userid` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '用户的ID',
  `createtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `shop_profile_userid` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eri_profile`
--

LOCK TABLES `eri_profile` WRITE;
/*!40000 ALTER TABLE `eri_profile` DISABLE KEYS */;
/*!40000 ALTER TABLE `eri_profile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eri_user`
--

DROP TABLE IF EXISTS `eri_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eri_user` (
  `userid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL DEFAULT '',
  `userpass` char(32) NOT NULL DEFAULT '',
  `useremail` varchar(50) NOT NULL DEFAULT '',
  `level` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`userid`),
  UNIQUE KEY `eri_user_username_userpass` (`username`,`userpass`),
  UNIQUE KEY `eri_user_useremail_userpass` (`useremail`,`userpass`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eri_user`
--

LOCK TABLES `eri_user` WRITE;
/*!40000 ALTER TABLE `eri_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `eri_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-08-19 13:20:33
