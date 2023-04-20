-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: localhost    Database: figure
-- ------------------------------------------------------
-- Server version	8.0.26

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `account`
--

DROP DATABASE IF EXISTS `figure`;

create database figure;
use figure;


DROP TABLE IF EXISTS `account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `account` (
  `id_ac` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(1000) DEFAULT NULL,
  `authToken` varchar(100) DEFAULT NULL,
  `provider` varchar(255) DEFAULT NULL,
  `provider_id` varchar(255) DEFAULT NULL,
  `quyen` int DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_ac`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `account`
--

LOCK TABLES `account` WRITE;
/*!40000 ALTER TABLE `account` DISABLE KEYS */;
INSERT INTO `account` VALUES (14,NULL,'admin','a66abb5684c45962d887564f08346e8d','164532458521232f297a57a5a743894a0e4a801fc3',NULL,NULL,0,'2021-09-14 00:15:26','2022-02-19 19:36:25'),(15,NULL,'buithanh','123123','1645324585e4c78c5dee7d3b5f6807525c83a26c62',NULL,NULL,1,'2021-09-14 00:25:26','2022-02-19 19:36:25'),(18,NULL,'bthanh2001@gmail.com',NULL,'1645324585596e58fc03cb9d73e6a13e113dd29f29','google','117554197278663046277',0,'2021-09-14 01:52:21','2022-02-19 19:36:25'),(19,'Thành Bùi','bthanh2701@gmail.com',NULL,'1645324585f7d09f583c968020c12a73d0390c2446','google','102077273619747562717',1,'2021-09-14 07:25:45','2022-02-19 19:36:25'),(21,'Thành Bùi','test01','$2y$10$B4cihpLJNrQHOWbXNBouGu.rYra9dpQRkshJy2rFWgj1n7ijqOQ4i','16453245850e698a8ffc1a0af622c7b4db3cb750cc',NULL,NULL,0,'2021-09-20 09:38:09','2022-02-19 19:36:25'),(22,NULL,'test02','$2y$10$PgaVmVJ2\\/9e7EcuaBV5EXOW5Lw4O6lNQ6071iMDxTr0PI6biEY1lm','16453245854d5e2a885578299e5a5902ad295447c6',NULL,NULL,1,'2021-09-30 11:56:17','2022-02-19 19:36:25'),(25,NULL,'super123','$2y$10$UZWka4u0IV1xIaDEVFDWw.WHiBi0rvO48Chp36302qoXgtCpE8olu','1645324585f35364bc808b079853de5a1e343e7159',NULL,NULL,1,'2021-11-11 09:17:34','2022-02-19 19:36:25'),(26,NULL,'gaodo','$2y$10$haU22zXt1c3dGgV1AaXVaO9hJnVQwDUwlwURd3HqV\\/8VIZP\\/Vdv1W','1645324585053dc9a65d99eb696cc8641eaf66aeb4',NULL,NULL,1,'2021-11-11 09:48:06','2022-02-19 19:36:25'),(27,NULL,'meomeo','4297f44b13955235245b2497399d7a93','16453245851a36cff0c8da8fb25e15a585dc6c3014',NULL,NULL,1,'2021-11-12 06:36:14','2022-02-19 19:36:25'),(29,NULL,'hello','4297f44b13955235245b2497399d7a93','16453245855d41402abc4b2a76b9719d911017c592',NULL,NULL,1,'2021-12-03 21:31:40','2022-02-19 19:36:25'),(32,'thành bùi','buithanh27012002@gmail.com',NULL,'1645324585f6a4734eb44e33fe7dda4e504a02a922','google','112512431160974409349',0,'2021-12-05 23:44:52','2022-02-19 19:36:25'),(33,NULL,'superidol','4297f44b13955235245b2497399d7a93','16453245856b2e1065c2a6d84ee72d3a996d747451',NULL,NULL,1,'2022-01-14 07:31:08','2022-02-19 19:36:25'),(34,NULL,'khanh123','e10adc3949ba59abbe56e057f20f883e','1645324585629e8d70e993322601ea565b7cfb4d0c',NULL,NULL,1,'2022-01-14 18:44:52','2022-02-19 19:36:25'),(35,NULL,'thayhiebn','e10adc3949ba59abbe56e057f20f883e','1645324585a7df380b01c3c48d88125ef96bb1da7f',NULL,NULL,1,'2022-01-14 19:02:29','2022-02-19 19:36:25'),(36,NULL,'thayhien','e10adc3949ba59abbe56e057f20f883e','1645324585a33840dcd650306631c8500a62ecb789',NULL,NULL,1,'2022-01-14 19:02:56','2022-02-19 19:36:25'),(37,NULL,'test04','4297f44b13955235245b2497399d7a93','1645324585dff092fd096eb595ad5f4c4fbf8b8f2f',NULL,NULL,1,'2022-02-19 03:11:29','2022-02-19 19:36:25'),(46,NULL,'test08','$2y$10$Nwn8jwmlWQwnM6ih12hz7uHHI7eTu3I2aFd5/jkL.qIlkb8ekIc/e',NULL,NULL,NULL,1,'2022-02-20 00:41:23','2022-02-20 00:41:23'),(47,NULL,'test10','$2y$10$W477Ky/ez3zREQjigOFD7OpfNXxgX9tYYW4scq5occvlM.NXMHIrO',NULL,NULL,NULL,1,'2022-02-20 09:12:42','2022-02-20 09:12:42'),(49,NULL,'test11','$2y$10$22R0WP9qtOLyja0BBKOanOA3iJJKp0DRC4xhgyrE7YBfRSylPpgTS',NULL,NULL,NULL,1,'2022-03-02 03:38:38','2022-03-02 03:38:38'),(56,NULL,'test99','$2y$10$RtXTR6WpYCFKsJUGbu2YdusaOT92JJKF1duzcHRCXMDb6Dv4pu5BC',NULL,NULL,NULL,1,'2022-03-02 05:03:09','2022-03-02 05:03:09'),(58,NULL,'test90','$2y$10$DLVH1ap8gl2tQc4wx7sRLOgwA9Bu7.9vR72wGvnpPEXLLYGJfOL1i',NULL,NULL,NULL,1,'2022-03-02 05:05:52','2022-03-02 05:05:52'),(59,NULL,'test78','$2y$10$mfxgCa2MrrnD9Sxnh/G52uEySnpA1Ru.dCez27FOSl3CsMXp7W9m2',NULL,NULL,NULL,1,'2022-03-05 09:40:44','2022-03-05 09:40:44'),(60,NULL,'test92','$2y$10$FdQ5mFdJ34iUbrnZFgWgLehEyQrjmC3DuDuMM9v7632ynCUEk/V4G',NULL,NULL,NULL,1,'2022-04-04 16:54:24','2022-04-04 16:54:24'),(61,NULL,'test15','$2y$10$P7F67ApT30SzqfWnTOvSX.CeqX3sDqSXj7A/6iN8wjNRAo./Qlm9S',NULL,NULL,NULL,1,'2022-04-17 17:42:41','2022-04-17 17:42:41'),(63,'Bùi Ngọc Thành','bnthanh.20it5@vku.udn.vn',NULL,NULL,'google','102634371319160363713',1,'2022-05-08 12:11:27','2022-05-08 12:11:27'),(65,'Snow','buiduc1604@gmail.com',NULL,NULL,'google','113948050685913685760',1,'2022-05-09 08:55:14','2022-05-09 08:55:14'),(66,NULL,'buithanh2701','$2y$10$MkUsG28XyxZrRp0/SitGqeP5zOX.9gxdtm1UvNYlqx..XL5wJxMWe',NULL,NULL,NULL,1,'2022-05-18 09:22:00','2022-05-18 09:22:00');
/*!40000 ALTER TABLE `account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `banner`
--

DROP TABLE IF EXISTS `banner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `banner` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `link` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banner`
--

LOCK TABLES `banner` WRITE;
/*!40000 ALTER TABLE `banner` DISABLE KEYS */;
INSERT INTO `banner` VALUES (1,'Trang chủ','/home'),(2,'Sản Phẩm','/product'),(3,'Liên Hệ','/contact'),(4,'Blog','/blog'),(17,'Vòng Quay','/spinningWheel');
/*!40000 ALTER TABLE `banner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blog` (
  `id_blog` int NOT NULL AUTO_INCREMENT,
  `id_cus` int DEFAULT NULL,
  `title` varchar(300) DEFAULT NULL,
  `img_bg` text,
  `dates` date DEFAULT NULL,
  `content` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_blog`),
  KEY `id_cus` (`id_cus`),
  CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`id_cus`) REFERENCES `person` (`id_per`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog`
--

LOCK TABLES `blog` WRITE;
/*!40000 ALTER TABLE `blog` DISABLE KEYS */;
INSERT INTO `blog` VALUES (2,18,'Blog anime  cộng đồng những người yêu thích anime','1632647868.jpg','2021-09-26','<h2>&nbsp;</h2>\r\n\r\n<p><em>Điều g&igrave; đ&atilde; tạo n&ecirc;n Blog Anime Việt Nam n&agrave;y? T&igrave;nh y&ecirc;u? Đam m&ecirc;? Hay chỉ l&agrave; những sở th&iacute;ch nhất thời?</em><br />\r\n<em><em>Ch&uacute;ng t&ocirc;i cũng kh&ocirc;ng r&otilde;...</em></em><br />\r\n&nbsp;</p>\r\n\r\n<p><img alt=\"Picture\" src=\"https://animevnblog.weebly.com/uploads/5/8/5/9/58599819/1439886488.png\" /></p>\r\n\r\n<p>Cộng đồng của Blog Anime tr&ecirc;n Facebook</p>\r\n\r\n<p><strong>Phong tr&agrave;o Anime, Manga</strong>&nbsp;v&agrave; những&nbsp;<strong>n&eacute;t văn h&oacute;a&nbsp;</strong>kh&aacute;c của&nbsp;<strong>Nhật Bản</strong>đ&atilde; len lỏi v&agrave;o đất nước ch&uacute;ng ta từ rất l&acirc;u. Từ l&uacute;c ch&uacute;ng ta c&ograve;n rất b&eacute;, rất b&eacute;... Ai m&agrave; kh&ocirc;ng m&ecirc; mẩn bởi những quyển truyện tranh cũ truyền tay nhau, ai lại c&oacute; thể bỏ qua những tập Doraemon, Bảy vi&ecirc;n ngọc rồng, hay Pokemon được ph&aacute;t tr&ecirc;n tivi, d&ugrave; đ&ocirc;i khi chỉ l&agrave; v&agrave;i ph&uacute;t.&nbsp;<br />\r\n&nbsp;</p>\r\n\r\n<p><img alt=\"Picture\" src=\"https://animevnblog.weebly.com/uploads/5/8/5/9/58599819/896362102.jpg?644\" /></p>\r\n\r\n<p>Doraemon - một trong những bộ phim hoạt h&igrave;nh gắn liền với tuổi thơ</p>\r\n\r\n<p><br />\r\n<strong>Khi ch&uacute;ng ta lớn l&ecirc;n, thế giới dần nhỏ lại</strong>, c&oacute; những người đ&atilde; qu&ecirc;n mất cảm gi&aacute;c cầm tr&ecirc;n tay cuốn truyện tranh, hay đ&oacute;n xem từng tập phim hiếm hoi như thế, c&oacute; những người kh&ocirc;ng c&ograve;n y&ecirc;u th&iacute;ch m&agrave; trở n&ecirc;n gh&eacute;t bỏ... Nhưng đ&acirc;u đ&acirc;y vẫn c&ograve;n ch&uacute;ng t&ocirc;i trong cuộc sống, những người đ&atilde; v&agrave; đang&nbsp;<strong>y&ecirc;u anime</strong>&nbsp;hết m&igrave;nh, vẫn tự h&agrave;o rằng m&igrave;nh kh&ocirc;ng đơn độc.</p>\r\n\r\n<p><img alt=\"Picture\" src=\"https://animevnblog.weebly.com/uploads/5/8/5/9/58599819/294210934.jpg\" /></p>\r\n\r\n<p><strong>Anime&nbsp;</strong>mang đến cho bạn những niềm vui nho nhỏ trong cuộc sống be b&eacute;, mang đến cho t&ocirc;i những nh&acirc;n vật t&ocirc;i y&ecirc;u thương d&ugrave; họ kh&ocirc;ng tồn tại, mang đến cho ch&uacute;ng ta những ch&acirc;n l&yacute; m&agrave; kh&oacute; c&oacute; thể nhận thấy được trong cuộc sống thường ng&agrave;y.&nbsp;<strong>Anime</strong>&nbsp;l&agrave; ảo, l&agrave; kh&ocirc;ng tồn tại, nhưng những cảm x&uacute;c bạn ấy mang đến cho t&ocirc;i, những b&agrave;i học mang đến cho bạn, v&agrave;&nbsp;<strong>t&igrave;nh y&ecirc;u, sự kết nối</strong>&nbsp;giữa ch&uacute;ng ta l&agrave; c&oacute; thật c&aacute;c bạn ạ.</p>\r\n\r\n<p><img alt=\"Picture\" src=\"https://animevnblog.weebly.com/uploads/5/8/5/9/58599819/982969021.jpg?455\" /></p>\r\n\r\n<p>T&ocirc;i từng bơ vơ lạc l&otilde;ng trong đ&aacute;m bạn c&ugrave;ng tuổi, từng c&ocirc; đơn kh&ocirc;ng c&oacute; người chia sẽ&nbsp;<strong>t&igrave;nh y&ecirc;u cho anime</strong>. Chắc bạn cũng thế, khi nghe một người b&agrave;n đến&nbsp;<strong>anime</strong>&nbsp;trong l&ograve;ng chắc thấy một sự vui vẻ tr&agrave;o d&acirc;ng. Như thế đấy, ch&uacute;ng ta t&igrave;m được nhau giữa cuộc sống kh&oacute; lắm.<br />\r\nV&igrave; vậy m&agrave; ch&uacute;ng t&ocirc;i đ&atilde; tạo n&ecirc;n website n&agrave;y (http://animevnblog.weebly.com/) để mang đến cho c&aacute;c bạn,&nbsp;<strong>những người y&ecirc;u anime&nbsp;</strong>như ch&uacute;ng t&ocirc;i những&nbsp;<strong>th&ocirc;ng tin</strong>&nbsp;hữu &iacute;ch,&nbsp;<strong>giới thiệu</strong>&nbsp;đến c&aacute;c bạn&nbsp;<strong>những bộ anime hay</strong>, những thứ ch&uacute;ng t&ocirc;i lượm lặt được v&agrave; khao kh&aacute;t sẽ chia. Để cho&nbsp;<strong>những người y&ecirc;u th&iacute;ch anime</strong>&nbsp;c&oacute; một&nbsp;<strong>cộng đồng&nbsp;</strong>giao lưu, kết bạn.<br />\r\nNhững&nbsp;<strong>th&ocirc;ng tin</strong>&nbsp;tr&ecirc;n web &nbsp;n&agrave;y do nh&oacute;m th&agrave;nh lập ch&uacute;ng t&ocirc;i v&agrave; ch&iacute;nh những<strong>&nbsp;chia sẽ&nbsp;</strong>của bạn tạo ra. Bạn c&oacute; thể c&ugrave;ng tham gia với ch&uacute;ng t&ocirc;i, c&ugrave;ng&nbsp;<strong>đ&oacute;ng g&oacute;p</strong>&nbsp;những&nbsp;<strong>chia sẽ</strong>, hay&nbsp;<strong>giới thiệu những bộ anime hay&nbsp;</strong>m&agrave; bạn mong muốn mọi người c&ugrave;ng xem, c&ugrave;ng b&agrave;n luận. Những b&agrave;i viết của c&aacute;c bạn d&agrave;nh cho blog sẽ được đăng tải trực tiếp l&ecirc;n trang&nbsp;<strong>Blog Anime Việt Nam</strong>. Những th&ocirc;ng tin bạn cung cấp l&agrave; cả một m&agrave;u sắc mới cho<strong>thế giới Anime&nbsp;</strong>ch&uacute;ng ta. H&atilde;y tham gia&nbsp;<strong>nh&oacute;m&nbsp;</strong>&nbsp;<a href=\"https://www.facebook.com/groups/1019095568114787/\" target=\"_blank\">Cộng đồng Blog Anime tr&ecirc;n Facebook</a>&nbsp;ngay b&acirc;y giờ để cập nhật v&agrave; nhận th&ocirc;ng tin nhanh hơn. H&atilde;y để ch&uacute;ng ta t&igrave;m thấy nhau,&nbsp;<strong>những người y&ecirc;u th&iacute;ch Anime</strong>. :)<br />\r\nH&atilde;y t&igrave;m ch&uacute;ng t&ocirc;i tr&ecirc;n k&ecirc;nh&nbsp;<a href=\"https://www.youtube.com/channel/UCgGxXG48-PIRylmiCCmS3_A\" target=\"_blank\">Anime Blog on Youtube</a>&nbsp;để xem những&nbsp;<strong>AMV mới</strong>, những<strong>&nbsp;list nhạc Anime hay&nbsp;</strong>c&aacute;c bạn nh&eacute;.<br />\r\nTh&acirc;n ch&agrave;o!<br />\r\n~<strong>​A</strong><strong>zuki</strong>~</p>','2021-09-26 09:17:48','2021-09-26 09:17:48'),(4,21,'SHAMAN KING CHO RA MẮT CA KHÚC MỚI Ở THỜI ĐIỂM CHUYỂN MÙA','1632651655.jpg','2021-09-26','<p><strong>Mới đ&acirc;y, trang web ch&iacute;nh thức cho bộ anime truyền h&igrave;nh Shaman King được dựa tr&ecirc;n manga c&ugrave;ng t&ecirc;n của t&aacute;c giả Hiroyuki Takei đ&atilde; c&ocirc;ng bố video quảng b&aacute; thứ 3 cho dự &aacute;n. Video cũng đ&atilde; giới thiệu cho ca kh&uacute;c mở đầu thứ hai &quot;Get up! Shout!&quot; do Nana Mizuki tr&igrave;nh b&agrave;y, sẽ được l&ecirc;n s&oacute;ng từ th&aacute;ng 10 sắp tới.</strong></p>\r\n\r\n<p>Đội ngũ sản xuất ch&iacute;nh bao gồm:</p>\r\n\r\n<ul>\r\n	<li>Đạo diễn:<strong>&nbsp;Joji Furuta</strong>&nbsp;</li>\r\n	<li>Studio:&nbsp;<strong>Bridge</strong></li>\r\n	<li>Bi&ecirc;n kịch:<strong>&nbsp;Shoji Yonemura</strong></li>\r\n	<li>Thiết kế nh&acirc;n vật:<strong>&nbsp;Satohiko Sano&nbsp;</strong></li>\r\n	<li>Nhạc sĩ:&nbsp;<strong>Yuki Hayashi</strong>&nbsp;(My Hero Academia)&nbsp;</li>\r\n	<li>NSX &acirc;m nhạc:&nbsp;<strong>King Record</strong></li>\r\n	<li>Gi&aacute;m đốc &acirc;m thanh:&nbsp;<strong>Masafumi Mima&nbsp;</strong></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"https://s199.imacdn.com/ta/2021/09/23/e1f126deca6ed8c4_99625d2faed08897_17510016324144089185710.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Anime đ&atilde; được c&ocirc;ng chiếu v&agrave;o ng&agrave;y 1 th&aacute;ng 4, bao gồm 52 tập.</p>\r\n\r\n<p><em>Shaman King kể về cuộc đời của vị ph&aacute;p sư trẻ tuổi Asakura Yoh, l&agrave; người nối d&otilde;i của gia tộc ph&aacute;p sư Asakura c&oacute; bề d&agrave;y truyền thống l&ecirc;n tới cả ng&agrave;n năm lịch sử. Sống trong thế giới kh&aacute;c biệt với người b&igrave;nh thường, cậu kh&ocirc;ng c&oacute; bạn b&egrave; v&agrave; chỉ c&oacute; thể l&agrave;m bạn với ma quỷ, hay n&oacute;i c&aacute;ch kh&aacute;c l&agrave; những linh hồn. Chỉ khi cậu gặp Manta, cậu bạn l&ugrave;n tịt học c&ugrave;ng lớp th&igrave; mới c&oacute; thể gọi l&agrave; bắt đầu bước ch&acirc;n ra thế giới b&ecirc;n ngo&agrave;i.</em></p>\r\n\r\n<p>&nbsp;</p>','2021-09-26 10:20:55','2021-09-26 10:20:55'),(5,21,'SHIROI SUNA NO AQUATOPE - CÁT TRẮNG AQUATOPE CÔNG BỐ PV CHO NỬA SAU','1632652007.jpg','2021-09-26','<p><strong>Mới đ&acirc;y, trang web ch&iacute;nh thức cho bộ anime gốc Shiroi Suna no Aquatope (Aquatope of White Sand) của P.A. Works đ&atilde; c&ocirc;ng bố video quảng b&aacute;, visual c&ugrave;ng d&agrave;n diễn vi&ecirc;n sẽ tham gia v&agrave;o nửa thứ hai của dự &aacute;n. Video đ&atilde; giới thiệu ca kh&uacute;c mở đầu thứ hai sắp sửa được sử dụng trong phim.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Một số diễn vi&ecirc;n sẽ tham gia v&agrave;o dự &aacute;n bao gồm:</p>\r\n\r\n<p><img src=\"https://s199.imacdn.com/ta/2021/09/24/bff41b7029f1911f_9a86477700b1a0f7_3591716324807201185710.jpg\" /></p>\r\n\r\n<p><em>Mikako Komatsu v&agrave;o vai Kaoru Shimabukuro</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"https://s199.imacdn.com/ta/2021/09/24/6f06c788c32025d5_0be6ce8546717b7f_3530716324807285185710.jpg\" /><em>Kiyono Yasuno v&agrave;o vai Akari Maeda</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"https://s199.imacdn.com/ta/2021/09/24/fa993e999883c574_04d9810f610d8bee_4450316324807398185710.jpg\" /><em>Nao Tōyama v&agrave;o vai Marina Yonekura</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"https://s199.imacdn.com/ta/2021/09/24/809e1fcefad0ebe9_4835af6a5146d868_2996316324807472185710.jpg\" /><em>Yusuke Nagano v&agrave;o vai Eiji Higa</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"https://s199.imacdn.com/ta/2021/09/24/a09b77c77b966648_d04ae8fef1f7d747_3821816324807532185710.jpg\" /><em>Masaki Terasoma v&agrave;o vai Akira Hoshino</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"https://s199.imacdn.com/ta/2021/09/24/9e512cb4707c9719_391842abf1f4d738_3479816324807591185710.jpg\" /><em>Satoshi Hino v&agrave;o vai Tetsuji Suwa</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"https://s199.imacdn.com/ta/2021/09/24/46ccb0109efe41f7_b965fbd27f455527_3650016324807692185710.jpg\" /><em>Shuuhei Sakaguchi v&agrave;o vai Bondo Garandо̄</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>D&agrave;n nh&acirc;n lực tham gia v&agrave;o dự &aacute;n bao gồm:&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Đạo diễn:&nbsp;<strong>Toshiya Shinohara</strong></li>\r\n	<li>Studio:<strong>&nbsp;P.A. Works</strong></li>\r\n	<li>Chuyển t&aacute;c:&nbsp;<strong>Yuuko Kakihara</strong></li>\r\n	<li>Thiết kế nh&acirc;n vật gốc:<strong>&nbsp;U35</strong></li>\r\n	<li>Thiết kế nh&acirc;n vật:&nbsp;<strong>Yuki Akiyama</strong></li>\r\n	<li>Đạo diễn diễn họa:<strong>&nbsp;Akiyama</strong></li>\r\n	<li>S&aacute;ng t&aacute;c nhạc:&nbsp;<strong>Yoshiaki Dewa</strong></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ca kh&uacute;c mở đầu &quot;Tomedonai Shiosai ni Bokutachi wa Nani wo Utau Darо̄ ka&quot; sẽ do ARCANA PROJECT tr&igrave;nh b&agrave;y. Ri&ecirc;ng, Risa Aizawa sẽ tr&igrave;nh b&agrave;y ca kh&uacute;c kết th&uacute;c thứ hai &quot;Shingetsu no Da Capo&quot;.</p>\r\n\r\n<p><em>Kukuru Misakino, một nữ sinh trung học 18 tuổi l&agrave;m việc trong một thủy cung, gặp Fuuka Miyazawa, một cựu thần tượng đ&atilde; mất chỗ ở Tokyo v&agrave; trốn tho&aacute;t. Fuuka sẽ d&agrave;nh những ng&agrave;y của m&igrave;nh trong thủy cung với những suy nghĩ của ri&ecirc;ng m&igrave;nh. Tuy nhi&ecirc;n, cuộc khủng hoảng đ&oacute;ng cửa đang đến gần đối với thủy cung, khi c&aacute;c c&ocirc; g&aacute;i kh&aacute;m ph&aacute; giấc mơ v&agrave; thực tế của họ, sự c&ocirc; đơn v&agrave; bạn b&egrave;, r&agrave;ng buộc v&agrave; xung đột.</em></p>','2021-09-26 10:26:47','2021-09-26 10:26:47'),(6,21,'SAU 5 NGÀY, TRAILER CỦA SWORD ART ONLINE ĐÃ ĐẠT HƠN 1 TRIỆU LƯỢT XEM - KHẲNG ĐỊNH ĐỘ HOT CỦA MÌNH','1632671929.jpg','2021-09-26','<p><strong>C&aacute;ch đ&acirc;y khoảng 5 ng&agrave;y, trailer ch&iacute;nh thức cho dự &aacute;n anime điện ảnh Sword Art Online the Movie -Progressive- Aria of a Starless Night đ&atilde; được ph&aacute;t h&agrave;nh v&agrave; c&aacute;n mốc hơn 1 triệu lượt xem tr&ecirc;n YouTube. Bộ phim cũng đ&atilde; được x&aacute;c nhận sẽ khởi chiếu từ ng&agrave;y 30 th&aacute;ng 10 năm 2021 tại Nhật Bản.&nbsp;</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"https://s199.imacdn.com/ta/2021/09/23/ed33ac4ff2e6cae0_775659909c6dac90_5291116324130411185710.jpg\" /></p>\r\n\r\n<ul>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Chỉ với một đoạn trailer k&eacute;o d&agrave;i hơn 2 ph&uacute;t cũng đ&atilde; minh chứng cho độ hot của những si&ecirc;u phẩm isekai như Sword Art Online vẫn c&ograve;n đến hiện tại.&nbsp;</p>\r\n\r\n<p>Trailer chủ yếu ch&iacute;nh l&agrave; &quot;highlight&quot; cho nh&acirc;n vật Mito - được thủ vai bởi Inori Minase. C&aacute;c nh&acirc;n vật mới trong trailer như bạn của Asuna ngo&agrave;i đời thực - Misumi Tozawa, c&ocirc; bạn đ&atilde; mời Asuna v&agrave;o game Sword Art Online. Sau đ&oacute;, Mito an ủi v&agrave; bảo vệ Asuna khi họ vượt qua những nguy hiểm trong game, hiện đ&atilde; trở n&ecirc;n chết người.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"https://s199.imacdn.com/ta/2021/09/23/14714d630800ea1f_f1cbd22706720fbf_24420416324131136185710.jpg\" /></p>\r\n\r\n<p>Bộ phim Sword Art Online: Progressive sẽ chuyển thể một số phần của tập đầu ti&ecirc;n trong light novel. Phim sẽ tập trung v&agrave;o g&oacute;c nh&igrave;n của Asuna, trong đ&oacute; c&oacute; Mito, một nh&acirc;n vật mới c&oacute; vai tr&ograve; quan trọng trong cuộc đời Asuna. Ayako Kono (Gate) sẽ đạo diễn bộ phim. A-1 Pictures (series Sword Art Online, 86-Eighty Six-) sẽ lo kh&acirc;u sản xuất bộ phim.</p>','2021-09-26 15:58:49','2021-09-26 15:58:49'),(7,14,'STUDIO UFOTABLE MỞ TRANG WEB BÁN HÀNG ĐẦU TIÊN TRÊN TOÀN CẦU','1633012632.jpg','2021-09-30','<p><strong>Ufotable, studio đứng sau nhiều tựa phim nổi tiếng, hiện đ&atilde; mở một web b&aacute;n h&agrave;ng to&agrave;n cầu. Trang web b&aacute;n c&aacute;c mặt h&agrave;ng theo chủ đề từ c&aacute;c t&aacute;c phẩm của Ufotable v&agrave; vận chuyển ch&uacute;ng ra nước ngo&agrave;i. Hiện tại, c&aacute;c mặt h&agrave;ng chỉ mới được vận chuyển đến Hoa Kỳ, Canada v&agrave; &Uacute;c, nhưng trong tương lai sẽ mở rộng phạm vi mua h&agrave;ng cho nhiều quốc gia, l&atilde;nh thổ kh&aacute;c.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"https://s199.imacdn.com/ta/2021/09/27/d76a9619b8be0044_78dc2f20fc55edd6_8386416327385248769722.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Trang web bằng tiếng Anh liệt k&ecirc; c&aacute;c mặt h&agrave;ng c&oacute; sẵn c&ugrave;ng với gi&aacute; của ch&uacute;ng. Gi&aacute; dao động từ &yen; 605 (~ $ 6) cho nh&atilde;n d&aacute;n, đến &yen; 9.075 (~ $ 85) cho bộ sưu tập t&agrave;i liệu thiết kế hoạt h&igrave;nh. Hiện tại, trang web chỉ c&oacute; h&agrave;ng h&oacute;a của anime Kimetsu no Yaiba, nhưng nhiều mặt h&agrave;ng kh&aacute;c sẽ sớm ra mắt theo th&ocirc;ng b&aacute;o tr&ecirc;n trang Giới thiệu.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"https://s199.imacdn.com/ta/2021/09/27/7f57db173fcde970_0f6fdc9039c5bfc7_15415716327388807769722.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Bản giới thiệu về ufotableWEBSHOP:</p>\r\n\r\n<p>Lời ch&agrave;o kh&ocirc;ng thể tuyệt vời hơn từ Nhật Bản tới tất cả những người h&acirc;m mộ tr&ecirc;n thế giới:</p>\r\n\r\n<p>Xin ch&agrave;o!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ufotable l&agrave; một xưởng sản xuất phim hoạt h&igrave;nh Nhật Bản được th&agrave;nh lập tại Nhật Bản v&agrave;o năm 2000.</p>\r\n\r\n<p>Ch&uacute;ng t&ocirc;i tu&acirc;n theo quan điểm cung cấp c&aacute;c t&aacute;c phẩm hoạt h&igrave;nh chất lượng cao cho nhiều người tr&ecirc;n thế giới.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ch&uacute;ng t&ocirc;i rất biết ơn tất cả những người h&acirc;m mộ, cảm ơn sự ủng hộ của c&aacute;c bạn.</p>\r\n\r\n<p>Khi c&ocirc;ng nghệ tiến bộ, ch&uacute;ng t&ocirc;i hiện c&oacute; thể cung cấp c&aacute;c t&aacute;c phẩm của m&igrave;nh đến khắp nơi tr&ecirc;n thế giới.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Tuy nhi&ecirc;n, ch&uacute;ng t&ocirc;i kh&ocirc;ng thể giao t&aacute;c phẩm của m&igrave;nh cho tất cả những người tr&ecirc;n thế giới y&ecirc;u th&iacute;ch t&aacute;c phẩm của ch&uacute;ng t&ocirc;i.</p>\r\n\r\n<p>Do đ&oacute;, ch&uacute;ng t&ocirc;i vui mừng th&ocirc;ng b&aacute;o rằng t&aacute;c phẩm hiện đ&atilde; c&oacute; sẵn để mua từ b&ecirc;n ngo&agrave;i Nhật Bản.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>T&aacute;c phẩm của ch&uacute;ng t&ocirc;i được tạo ra từ &yacute; tưởng của c&aacute;c nh&acirc;n vi&ecirc;n ch&iacute;nh, những người đ&atilde; thực sự tham gia v&agrave;o qu&aacute; tr&igrave;nh sản xuất phim hoạt h&igrave;nh tại ufotable.</p>\r\n\r\n<p>C&aacute;c sản phẩm bao gồm h&igrave;nh ảnh minh họa đặc biệt được viết bởi họ.</p>\r\n\r\n<p>Giống như hoạt h&igrave;nh, ch&uacute;ng t&ocirc;i đ&atilde; l&agrave;m sản phẩm một c&aacute;ch cẩn thận.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Hiện tại, vận chuyển ra nước ngo&agrave;i chỉ giới hạn ở Hoa Kỳ, Canada v&agrave; &Uacute;c.</p>\r\n\r\n<p>Tuy nhi&ecirc;n, ch&uacute;ng t&ocirc;i muốn mở rộng khu vực vận chuyển dần dần trong tương lai v&agrave; giao h&agrave;ng cho nhiều người nhất c&oacute; thể.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>T&aacute;c phẩm đầu ti&ecirc;n của ch&uacute;ng t&ocirc;i được rao b&aacute;n l&agrave; &quot;Kimetsu no Yaiba&quot;.</p>\r\n\r\n<p>Chỉ l&agrave; một bước nhỏ nhưng ch&uacute;ng t&ocirc;i muốn tiếp tục bổ sung c&aacute;c t&aacute;c phẩm kh&aacute;c trong tương lai.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ch&uacute;ng t&ocirc;i hy vọng bạn sẽ th&iacute;ch t&aacute;c phẩm của ch&uacute;ng t&ocirc;i.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Tr&acirc;n trọng,</p>\r\n\r\n<p>Ufotable</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"https://s199.imacdn.com/ta/2021/09/27/97f59915a9558535_650052252076f535_15709516327389055769722.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Một số c&aacute;c t&aacute;c phẩm ti&ecirc;u biểu từ Ufotable m&agrave; người h&acirc;m mộ mong ng&oacute;ng c&aacute;c mặt h&agrave;ng đ&oacute; được c&oacute; mặt tr&ecirc;n web: Fate/Zero, Fate/stay night: Unlimited Blade Works v&agrave; Tales of Symphonia,... Ngo&agrave;i thương hiệu Kimetsu no Yaiba đ&igrave;nh đ&aacute;m c&ograve;n c&oacute; Kara no kyoukai rất được mong chờ.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"https://s199.imacdn.com/ta/2021/09/27/245634048007cdf8_8fc52738e41fb464_6268016327391055769722.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"https://s199.imacdn.com/ta/2021/09/27/e66e7669ad70ddc2_448846a776e43dee_7298516327391219769722.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Năm 2020, Ufotable v&agrave; người s&aacute;ng lập bị buộc tội trốn thuế. H&atilde;ng phim đ&atilde; đưa ra một văn bản xin lỗi. Người s&aacute;ng lập, Hikaru Kondo, thừa nhận đ&atilde; trốn 138 triệu y&ecirc;n (~ 1,2 triệu USD) tiền thuế trong phi&ecirc;n điều tra sơ bộ hồi đầu th&aacute;ng n&agrave;y.</p>\r\n\r\n<p>&nbsp;</p>','2021-09-30 14:37:12','2021-09-30 14:37:12'),(8,14,'6 Anime tương tự Sakamoto Desu Ga? Khuyên bạn nên xem – CoTvn','1638592187.jpg','2021-12-04','<p>Cool! Cooler !! Coolest !!! bạn chưa nghe? Anh ấy l&agrave; Sakamoto v&agrave; anh ở đ&acirc;y. Sakamoto l&agrave; ng&ocirc;i sao s&aacute;ng b&oacute;ng lớn của anime h&agrave;i m&ugrave;a xu&acirc;n 2016 n&agrave;y. Ch&uacute;ng t&ocirc;i thường xuy&ecirc;n cảm nhận được sự sảng kho&aacute;i v&agrave; h&agrave;i hước từ nh&acirc;n vật ch&iacute;nh trong tr&aacute;i tim của ch&uacute;ng t&ocirc;i, nhưng kh&ocirc;ng ai l&agrave; ngầu v&agrave; đ&aacute;ng ngưỡng mộ như Sakamoto. C&aacute;c ch&agrave;ng trai đ&atilde; c&oacute; rất nhiều phong c&aacute;ch thật nực cười!</p>\r\n\r\n<p><img alt=\"zwzspnt\" src=\"https://bloganimeweb.files.wordpress.com/2016/06/zwzspnt.jpg?w=723\" /></p>\r\n\r\n<p>Nghi&ecirc;m t&uacute;c, chương tr&igrave;nh n&agrave;y l&agrave; ho&agrave;n to&agrave;n v&ocirc; l&yacute; v&agrave; h&agrave;i hước như l&agrave; địa ngục. Chỉ sau một v&agrave;i tập, Sakamoto Desu Ga đ&atilde; trở th&agrave;nh một trong những người đứng đầu (nếu kh&ocirc;ng phải l&agrave; nhất) phổ biến phim h&agrave;i anime của m&ugrave;a giải n&agrave;y v&agrave; một trong những chương tr&igrave;nh h&agrave;ng đầu của m&ugrave;a xu&acirc;n 2016 n&oacute;i chung. Hiện chỉ c&oacute; thể l&agrave; Sakamoto.</p>\r\n\r\n<p>V&igrave; n&oacute; thường xảy ra với c&aacute;c anime mới, người h&acirc;m mộ Sakamoto chỉ kh&ocirc;ng thể c&oacute; đủ của anh ta, m&agrave; khiến cho c&aacute;c fan phải ngồi cắn m&oacute;ng tay của m&igrave;nh cho cả một tuần trước khi tập tiếp theo được ph&aacute;t s&oacute;ng. May mắn cho c&aacute;c fan, ch&uacute;ng t&ocirc;i đ&atilde; tổng hợp v&agrave; đưa ra một số lựa chọn tốt của anime sẽ gi&uacute;p thư gi&atilde;n trong khoảng c&aacute;ch giữa c&aacute;c tập Sakamoto. Tất nhi&ecirc;n, t&ocirc;i kh&ocirc;ng mong đợi nh&acirc;n vật ch&iacute;nh của m&igrave;nh được ngầu như Sakamoto. Mặc d&ugrave; vậy, bạn c&oacute; thể hưởng thụ sự h&agrave;i hước trong c&aacute;c anime n&agrave;y!</p>\r\n\r\n<p><strong>1. Danshi Koukousei no Nichijou / Daily Lives of High School Boys</strong></p>\r\n\r\n<p>Số tập: 12</p>\r\n\r\n<p>Ph&aacute;t s&oacute;ng: th&aacute;ng 1 năm 2012 &ndash; th&aacute;ng 3 năm 2012</p>\r\n\r\n<p><strong>2. Sakigake! Cromartie Koukou / Cromartie High School</strong></p>\r\n\r\n<p>Số tập: 26</p>\r\n\r\n<p>Ph&aacute;t s&oacute;ng: th&aacute;ng 10 năm 2003 &ndash; th&aacute;ng 3 năm 2004</p>\r\n\r\n<p><strong>3. Sayonara Zetsubou Sensei</strong></p>\r\n\r\n<p>Số tập: 12</p>\r\n\r\n<p>Ph&aacute;t s&oacute;ng: th&aacute;ng 7 năm 2007 &ndash; th&aacute;ng 9 năm 2007</p>\r\n\r\n<p><strong>4. Kangoku Gakuen / Prison School</strong></p>\r\n\r\n<p>Số tập: 12</p>\r\n\r\n<p>Ph&aacute;t s&oacute;ng: Jul 2015 &ndash; Th&aacute;ng 9 năm 2015</p>\r\n\r\n<p><strong>5. Hoozuki no Reitetsu</strong></p>\r\n\r\n<p>Số tập: 13</p>\r\n\r\n<p>Ph&aacute;t s&oacute;ng: th&aacute;ng 1 năm 2014 &ndash; th&aacute;ng 4 năm 2014</p>\r\n\r\n<p><strong>6. Arakawa Under the Bridge</strong></p>\r\n\r\n<p>Số tập: 13</p>\r\n\r\n<p>Ph&aacute;t s&oacute;ng: th&aacute;ng 4 năm 2010 &ndash; Th&aacute;ng 6 năm 2010</p>\r\n\r\n<p>Đ&acirc;y l&agrave; danh s&aacute;ch c&aacute;c anime tương tự như Sakamoto Desu Ga? T&ocirc;i hy vọng bạn c&oacute; thể t&igrave;m thấy anime cần thiết để giữ cho m&igrave;nh bận rộn trong khi chờ đợi c&aacute;c tập tiếp theo của Sakamoto với kh&ocirc;ng kh&iacute; h&agrave;i hước. T&ocirc;i cũng muốn giới thiệu Himouto! Umaru-chan, đ&oacute; sẽ l&agrave; một số loại phi&ecirc;n bản nữ v&agrave; kawaii của Sakamoto với một sự h&agrave;i hước rất trẻ con v&agrave; ngớ ngẩn; Tanaka-kun wa Itsumo Kedaruge, trong đ&oacute; tr&igrave;nh b&agrave;y một nh&acirc;n vật ch&iacute;nh duy nhất nhưng c&oacute; nhiều yếu tố của slice of life v&agrave; Katte ni Kaizou, trong đ&oacute; c&oacute; một nh&acirc;n vật ch&iacute;nh kỳ lạ v&agrave; v&ocirc; l&yacute;, mặc d&ugrave; những c&acirc;u n&oacute;i đ&ugrave;a kh&aacute; d&acirc;m dục.</p>\r\n\r\n<p>H&atilde;y b&igrave;nh luận về những suy nghĩ của bạn về Sakamoto hoặc bất kỳ điều g&igrave; li&ecirc;n quan đến anime n&agrave;y, v&agrave; nếu bạn nghĩ rằng c&oacute; một anime c&ugrave;ng d&ograve;ng giống như Sakamoto Desu Ga xứng đ&aacute;ng đề cập, bạn c&oacute; thể b&igrave;nh luận v&agrave; chia sẻ n&oacute; với ch&uacute;ng t&ocirc;i! : 3</p>','2021-12-03 21:29:47','2021-12-03 21:29:47'),(9,32,'Blog anime cộng đồng những người yêu thích anime','1638773853.jpg','2021-12-06','<p>Sau đ&acirc;y,&nbsp; is one of the gallery Anime Blog our.</p>\r\n\r\n<p><a href=\"https://bloganimeweb.wordpress.com/2016/06/20/gallery-anime-of-blog/attachment/2/\"><img alt=\"2\" src=\"https://bloganimeweb.files.wordpress.com/2016/06/2.jpg?w=357&amp;h=357&amp;crop=1\" style=\"height:357px; width:357px\" /></a></p>\r\n\r\n<p><a href=\"https://bloganimeweb.wordpress.com/2016/06/20/gallery-anime-of-blog/attachment/3/\"><img alt=\"3\" src=\"https://bloganimeweb.files.wordpress.com/2016/06/3.jpg?w=357&amp;h=357&amp;crop=1\" style=\"height:357px; width:357px\" /></a></p>\r\n\r\n<p><a href=\"https://bloganimeweb.wordpress.com/2016/06/20/gallery-anime-of-blog/attachment/4/\"><img alt=\"4\" src=\"https://bloganimeweb.files.wordpress.com/2016/06/4.jpg?w=116&amp;h=116&amp;crop=1\" style=\"height:116px; width:116px\" /></a></p>\r\n\r\n<p><a href=\"https://bloganimeweb.wordpress.com/2016/06/20/gallery-anime-of-blog/attachment/5/\"><img alt=\"5\" src=\"https://bloganimeweb.files.wordpress.com/2016/06/5.jpg?w=116&amp;h=116&amp;crop=1\" style=\"height:116px; width:116px\" /></a></p>\r\n\r\n<p><a href=\"https://bloganimeweb.wordpress.com/2016/06/20/gallery-anime-of-blog/attachment/6/\"><img alt=\"6\" src=\"https://bloganimeweb.files.wordpress.com/2016/06/6.jpg?w=116&amp;h=116&amp;crop=1\" style=\"height:116px; width:116px\" /></a></p>\r\n\r\n<p><a href=\"https://bloganimeweb.wordpress.com/2016/06/20/gallery-anime-of-blog/attachment/7/\"><img alt=\"7\" src=\"https://bloganimeweb.files.wordpress.com/2016/06/7.jpg?w=116&amp;h=116&amp;crop=1\" style=\"height:116px; width:116px\" /></a></p>\r\n\r\n<p><a href=\"https://bloganimeweb.wordpress.com/2016/06/20/gallery-anime-of-blog/attachment/8/\"><img alt=\"8\" src=\"https://bloganimeweb.files.wordpress.com/2016/06/8.jpg?w=116&amp;h=116&amp;crop=1\" style=\"height:116px; width:116px\" /></a></p>\r\n\r\n<p><a href=\"https://bloganimeweb.wordpress.com/2016/06/20/gallery-anime-of-blog/attachment/9/\"><img alt=\"9\" src=\"https://bloganimeweb.files.wordpress.com/2016/06/9.jpg?w=116&amp;h=116&amp;crop=1\" style=\"height:116px; width:116px\" /></a></p>\r\n\r\n<p><a href=\"https://bloganimeweb.wordpress.com/2016/06/20/gallery-anime-of-blog/attachment/10/\"><img alt=\"10\" src=\"https://bloganimeweb.files.wordpress.com/2016/06/10.jpg?w=116&amp;h=116&amp;crop=1\" style=\"height:116px; width:116px\" /></a></p>\r\n\r\n<p><a href=\"https://bloganimeweb.wordpress.com/2016/06/20/gallery-anime-of-blog/attachment/11/\"><img alt=\"11\" src=\"https://bloganimeweb.files.wordpress.com/2016/06/11.jpg?w=116&amp;h=116&amp;crop=1\" style=\"height:116px; width:116px\" /></a></p>\r\n\r\n<p><a href=\"https://bloganimeweb.wordpress.com/2016/06/20/gallery-anime-of-blog/attachment/12/\"><img alt=\"12\" src=\"https://bloganimeweb.files.wordpress.com/2016/06/12.jpg?w=116&amp;h=116&amp;crop=1\" style=\"height:116px; width:116px\" /></a></p>\r\n\r\n<p><a href=\"https://bloganimeweb.wordpress.com/2016/06/20/gallery-anime-of-blog/attachment/13/\"><img alt=\"13\" src=\"https://bloganimeweb.files.wordpress.com/2016/06/13.jpg?w=116&amp;h=116&amp;crop=1\" style=\"height:116px; width:116px\" /></a></p>\r\n\r\n<p><a href=\"https://bloganimeweb.wordpress.com/2016/06/20/gallery-anime-of-blog/attachment/14/\"><img alt=\"14\" src=\"https://bloganimeweb.files.wordpress.com/2016/06/14.jpg?w=116&amp;h=116&amp;crop=1\" style=\"height:116px; width:116px\" /></a></p>\r\n\r\n<p><a href=\"https://bloganimeweb.wordpress.com/2016/06/20/gallery-anime-of-blog/attachment/15/\"><img alt=\"15\" src=\"https://bloganimeweb.files.wordpress.com/2016/06/15.jpg?w=116&amp;h=116&amp;crop=1\" style=\"height:116px; width:116px\" /></a></p>\r\n\r\n<p><a href=\"https://bloganimeweb.wordpress.com/2016/06/20/gallery-anime-of-blog/attachment/16/\"><img alt=\"16\" src=\"https://bloganimeweb.files.wordpress.com/2016/06/16.jpg?w=116&amp;h=116&amp;crop=1\" style=\"height:116px; width:116px\" /></a></p>\r\n\r\n<p><a href=\"https://bloganimeweb.wordpress.com/2016/06/20/gallery-anime-of-blog/attachment/17/\"><img alt=\"17\" src=\"https://bloganimeweb.files.wordpress.com/2016/06/17.jpg?w=116&amp;h=116&amp;crop=1\" style=\"height:116px; width:116px\" /></a></p>\r\n\r\n<p><a href=\"https://bloganimeweb.wordpress.com/2016/06/20/gallery-anime-of-blog/attachment/18/\"><img alt=\"18\" src=\"https://bloganimeweb.files.wordpress.com/2016/06/18.jpg?w=116&amp;h=116&amp;crop=1\" style=\"height:116px; width:116px\" /></a></p>\r\n\r\n<p><a href=\"https://bloganimeweb.wordpress.com/2016/06/20/gallery-anime-of-blog/attachment/19/\"><img alt=\"19\" src=\"https://bloganimeweb.files.wordpress.com/2016/06/19.png?w=116&amp;h=116&amp;crop=1\" style=\"height:116px; width:116px\" /></a></p>\r\n\r\n<p><a href=\"https://bloganimeweb.wordpress.com/2016/06/20/gallery-anime-of-blog/attachment/20/\"><img alt=\"20\" src=\"https://bloganimeweb.files.wordpress.com/2016/06/20.jpg?w=116&amp;h=116&amp;crop=1\" style=\"height:116px; width:116px\" /></a></p>\r\n\r\n<p><a href=\"https://bloganimeweb.wordpress.com/2016/06/20/gallery-anime-of-blog/attachment/1/\"><img alt=\"1\" src=\"https://bloganimeweb.files.wordpress.com/2016/06/1.jpg?w=116&amp;h=116&amp;crop=1\" style=\"height:116px; width:116px\" /></a></p>\r\n\r\n<p>H&atilde;y tracker viết blog for more nhiều bộ sưu tập nữa nh&eacute;!</p>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<p>Ch&agrave;o mừng c&aacute;c g&aacute;i c&aacute;c trai đ&atilde; đến Blog Anime của &quot;mị&quot; :&quot;&gt; Run Run Run Go Go Go</p>','2021-12-05 23:57:33','2021-12-05 23:57:33'),(10,34,'88888','1642211413.jpg','2022-01-15','<p>&aacute;dfasdfasdfsdfgqerwtqerwsdfsdfdsf</p>','2022-01-14 18:50:13','2022-01-14 18:50:13');
/*!40000 ALTER TABLE `blog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_likg`
--

DROP TABLE IF EXISTS `blog_likg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blog_likg` (
  `id_Like` int NOT NULL AUTO_INCREMENT,
  `id_blog` int NOT NULL,
  `id_cus` int DEFAULT NULL,
  `likes` int DEFAULT '0',
  `dislike` int DEFAULT '0',
  `haslike` int DEFAULT '0',
  `hasdislike` int DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_Like`),
  KEY `id_cus` (`id_cus`),
  KEY `id_blog` (`id_blog`),
  CONSTRAINT `blog_likg_ibfk_1` FOREIGN KEY (`id_cus`) REFERENCES `person` (`id_per`),
  CONSTRAINT `blog_likg_ibfk_2` FOREIGN KEY (`id_blog`) REFERENCES `blog` (`id_blog`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_likg`
--

LOCK TABLES `blog_likg` WRITE;
/*!40000 ALTER TABLE `blog_likg` DISABLE KEYS */;
INSERT INTO `blog_likg` VALUES (47,2,21,1,0,0,0,'2021-09-26 18:27:18','2021-09-27 08:48:23'),(48,4,21,0,1,0,0,'2021-09-26 18:37:46','2021-09-27 05:56:29'),(49,6,21,0,1,0,0,'2021-09-26 18:39:00','2021-09-27 08:48:13'),(50,2,18,1,0,0,0,'2021-09-26 18:45:57','2021-12-10 01:01:42'),(51,4,18,1,0,0,0,'2021-09-26 18:46:12','2021-09-26 18:46:13'),(52,5,18,0,1,0,0,'2021-09-26 18:50:13','2021-09-26 19:04:04'),(56,2,14,1,0,0,0,'2021-09-27 06:00:40','2021-12-03 21:28:30'),(57,6,14,0,1,0,0,'2021-09-27 06:01:23','2021-09-27 06:01:42'),(60,2,22,1,0,0,0,'2021-09-30 11:56:45','2021-09-30 11:56:50'),(63,4,14,1,0,0,0,'2021-11-07 23:54:17','2021-11-24 08:59:27'),(64,8,14,1,0,0,0,'2021-12-03 21:29:54','2021-12-05 07:35:37'),(65,8,29,1,0,0,0,'2021-12-03 21:31:58','2021-12-03 21:32:04'),(67,2,32,1,0,0,0,'2021-12-05 23:55:59','2021-12-05 23:56:03'),(68,9,32,1,0,0,0,'2021-12-05 23:57:45','2021-12-05 23:57:48'),(69,7,32,1,0,0,0,'2021-12-06 00:10:24','2021-12-06 00:10:24'),(70,2,34,0,1,0,0,'2022-01-14 18:49:42','2022-01-14 18:49:45');
/*!40000 ALTER TABLE `blog_likg` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category` (
  `id_cate` int NOT NULL AUTO_INCREMENT,
  `name_cate` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_cate`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Action Figure','2021-09-13 02:07:02','2021-09-13 02:07:02'),(2,'Chibi Figure','2021-09-13 02:07:02','2021-09-13 02:07:02'),(3,'Scale Figure','2021-09-13 02:07:02','2021-09-13 02:07:02'),(5,'Figure Loli ','2021-09-13 02:07:02','2021-09-13 02:07:02');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comment_blog`
--

DROP TABLE IF EXISTS `comment_blog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comment_blog` (
  `id_com` int NOT NULL AUTO_INCREMENT,
  `id_blog` int DEFAULT NULL,
  `id_cus` int DEFAULT NULL,
  `dates` datetime DEFAULT NULL,
  `content` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_com`),
  KEY `id_blog` (`id_blog`),
  KEY `id_cus` (`id_cus`),
  CONSTRAINT `comment_blog_ibfk_1` FOREIGN KEY (`id_blog`) REFERENCES `blog` (`id_blog`),
  CONSTRAINT `comment_blog_ibfk_2` FOREIGN KEY (`id_cus`) REFERENCES `person` (`id_per`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comment_blog`
--

LOCK TABLES `comment_blog` WRITE;
/*!40000 ALTER TABLE `comment_blog` DISABLE KEYS */;
INSERT INTO `comment_blog` VALUES (1,2,21,'2021-09-26 22:28:09','<p>b&agrave;i viết hay qu&aacute;</p>','2021-09-26 15:28:09','2021-09-26 15:28:09'),(2,5,21,'2021-09-26 22:35:43','<p><img alt=\"\" src=\"layout/ckeditor/uploads/af5ba43fe98e16c0ff83817c261fb714.jpg\" style=\"height:271px; width:200px\" /></p>\n\n<p>nh&igrave;n waifu của m&igrave;nh n&egrave; hihi</p>','2021-09-26 15:35:43','2021-09-26 15:35:43'),(3,6,21,'2021-09-26 23:15:49','<p>hihi hay quas</p>','2021-09-26 16:15:49','2021-09-26 16:15:49'),(4,2,14,'2021-09-27 13:00:50','<p>ai dislike bai nay vay :((</p>','2021-09-27 06:00:51','2021-09-27 06:00:51'),(5,6,14,'2021-09-27 13:01:56','<p>ảnh mờ qu&aacute; chủ post ơi&nbsp;</p>','2021-09-27 06:01:56','2021-09-27 06:01:56'),(6,2,21,'2021-09-27 15:48:37','<p>tao :)))</p>','2021-09-27 08:48:37','2021-09-27 08:48:37'),(7,2,22,'2021-09-30 18:57:17','<p>cảm động qu&aacute;</p>','2021-09-30 11:57:17','2021-09-30 11:57:17'),(10,NULL,14,'2021-11-06 16:13:18',NULL,'2021-11-06 02:13:18','2021-11-06 02:13:18'),(11,NULL,14,'2021-11-06 16:13:22',NULL,'2021-11-06 02:13:22','2021-11-06 02:13:22'),(12,NULL,14,'2021-11-06 16:13:26',NULL,'2021-11-06 02:13:26','2021-11-06 02:13:26'),(13,2,14,'2021-11-25 01:09:50','<p>đep ghe</p>','2021-11-24 11:09:50','2021-11-24 11:09:50'),(14,8,14,'2021-12-04 11:30:05','<p>hay quas&nbsp;</p>','2021-12-03 21:30:05','2021-12-03 21:30:05'),(16,2,32,'2021-12-06 13:56:11','<p>hay qu&aacute;</p>','2021-12-05 23:56:11','2021-12-05 23:56:11'),(17,2,18,'2021-12-10 15:02:02','<p>hay qu&aacute;<img alt=\"\" src=\"layout/ckeditor/uploads/cafe nàng hầu5.jpg\" style=\"height:67px; width:100px\" /></p>','2021-12-10 01:02:02','2021-12-10 01:02:02');
/*!40000 ALTER TABLE `comment_blog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comment_product`
--

DROP TABLE IF EXISTS `comment_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comment_product` (
  `id_com` int NOT NULL AUTO_INCREMENT,
  `id_pro` int NOT NULL,
  `id_cus` int NOT NULL,
  `date` datetime DEFAULT NULL,
  `content` text CHARACTER SET utf8,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_com`),
  KEY `id_pro` (`id_pro`),
  KEY `id_cus` (`id_cus`),
  CONSTRAINT `comment_product_ibfk_1` FOREIGN KEY (`id_pro`) REFERENCES `product` (`id_pro`),
  CONSTRAINT `comment_product_ibfk_2` FOREIGN KEY (`id_cus`) REFERENCES `person` (`id_per`)
) ENGINE=InnoDB AUTO_INCREMENT=111 DEFAULT CHARSET=utf32;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comment_product`
--

LOCK TABLES `comment_product` WRITE;
/*!40000 ALTER TABLE `comment_product` DISABLE KEYS */;
INSERT INTO `comment_product` VALUES (73,6,18,'2021-09-18 07:02:53','<p>hello</p>','2021-09-18 00:02:53','2021-09-18 00:02:53'),(74,6,18,'2021-09-18 07:04:10','<p>wao sản phẩm thật chất lượng<img alt=\"\" src=\"layout/ckeditor/uploads/windows-11-logo-4-razerbook.jpg\" style=\"height:150px; width:200px\" />&nbsp;c&aacute;c bạn hay mua nh&eacute;</p>','2021-09-18 00:04:10','2021-09-18 00:04:10'),(75,1,18,'2021-09-18 07:04:45','<p>c&oacute; ai mua sản phẩm n&agrave;y chưa</p>','2021-09-18 00:04:45','2021-09-18 00:04:45'),(76,1,18,'2021-09-18 07:05:47','<p>cho xin &yacute; kiến với ạ</p>','2021-09-18 00:05:47','2021-09-18 00:05:47'),(77,3,18,'2021-09-18 07:07:44','<p>sản phẩm đẹp qu&aacute; đi mất ... đ&atilde; mua v&agrave; rất ưng &yacute;&nbsp;<img alt=\"\" src=\"layout/ckeditor/uploads/61ALbaqWNTL.jpg\" style=\"height:100px; width:100px\" />&nbsp; hiih</p>','2021-09-18 00:07:44','2021-09-18 00:07:44'),(78,3,14,'2021-09-18 15:24:03','<p>hi hi san pham dep qua</p>','2021-09-18 08:24:03','2021-09-18 08:24:03'),(79,3,14,'2021-09-18 15:24:37','<p>hi hi san pham dep qua</p>','2021-09-18 08:24:37','2021-09-18 08:24:37'),(80,5,14,'2021-09-18 15:25:29','<p>xịn x&ograve; qu&aacute;</p>','2021-09-18 08:25:29','2021-09-18 08:25:29'),(81,1,14,'2021-09-18 15:26:53','<p>sản phẩm đẹp lắm ạ</p>','2021-09-18 08:26:53','2021-09-18 08:26:53'),(82,1,14,'2021-09-18 15:28:30','<p>mn ủng hộ</p>','2021-09-18 08:28:30','2021-09-18 08:28:30'),(83,1,14,'2021-09-18 15:29:22','<p>:))</p>','2021-09-18 08:29:22','2021-09-18 08:29:22'),(84,4,14,'2021-09-18 15:30:03','<p>goku dẹp qu&aacute;</p>','2021-09-18 08:30:03','2021-09-18 08:30:03'),(86,6,21,'2021-09-26 17:28:27','<p>trời ơi đẹp qu&aacute;</p>','2021-09-26 10:28:27','2021-09-26 10:28:27'),(87,2,21,'2021-09-27 15:49:10','<p>sản phẩm lỗi khớp nh&eacute; shop</p>','2021-09-27 08:49:10','2021-09-27 08:49:10'),(91,2,21,'2021-10-04 16:20:12','<p><img alt=\"\" src=\"layout/ckeditor/uploads/fubuki3.jpg\" style=\"height:500px; width:333px\" /></p>\n\n<p>&nbsp;</p>\n\n<p>&aacute;d</p>\n\n<p>&aacute;d</p>','2021-10-04 02:20:12','2021-10-04 02:20:12'),(92,4,14,'2021-10-11 16:12:04','<p><img alt=\"\" src=\"layout/ckeditor/uploads/228757487_553455756002565_8255578666971604125_n.jpg\" style=\"height:125px; width:100px\" /></p>\n\n<p>&nbsp;</p>','2021-10-11 02:12:04','2021-10-11 02:12:04'),(96,3,32,'2021-12-06 13:55:32','<p>sản phẩm tuyệt qu&aacute; nha<img alt=\"\" src=\"layout/ckeditor/uploads/61ALbaqWNTL.jpg\" style=\"height:100px; width:100px\" /></p>','2021-12-05 23:55:32','2021-12-05 23:55:32'),(99,17,34,'2022-01-15 08:45:49','<p>sản phẩm đpẹ</p>','2022-01-14 18:45:49','2022-01-14 18:45:49'),(100,17,34,'2022-01-15 08:46:08','<p><img alt=\"\" src=\"layout/ckeditor/uploads/ic_bg_2_1.jpg\" style=\"height:178px; width:100px\" />sản phẩm đpẹ</p>','2022-01-14 18:46:08','2022-01-14 18:46:08'),(101,17,21,'2022-03-05 22:08:08','<p>:))</p>','2022-03-05 08:08:08','2022-03-05 08:08:08'),(102,3,60,'2022-04-05 09:27:47','qua tuyet voi','2022-04-04 19:27:47','2022-04-04 19:27:47'),(103,3,60,'2022-04-05 09:28:37','dep qua','2022-04-04 19:28:37','2022-04-04 19:28:37'),(104,1,60,'2022-04-05 09:32:23','dep qua','2022-04-04 19:32:23','2022-04-04 19:32:23'),(105,15,60,'2022-04-05 09:32:51','xin xo qua','2022-04-04 19:32:51','2022-04-04 19:32:51'),(106,3,60,'2022-04-05 09:43:52','qua xin xo','2022-04-04 19:43:52','2022-04-04 19:43:52'),(107,3,60,'2022-04-05 09:43:59','qua xin xo','2022-04-04 19:43:59','2022-04-04 19:43:59'),(108,4,21,'2022-04-06 10:23:52','dep qua','2022-04-05 20:23:52','2022-04-05 20:23:52'),(109,4,66,'2022-05-18 23:24:56',':V','2022-05-18 09:24:56','2022-05-18 09:24:56'),(110,4,66,'2022-05-18 23:26:45','dep qua','2022-05-18 09:26:45','2022-05-18 09:26:45');
/*!40000 ALTER TABLE `comment_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `lefts` text,
  `rights` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (1,'<ul>\n	<li>Địa chỉ : 198 Nguyễn Duy Trinh - Ngũ H&agrave;nh Sơn - Th&agrave;nh phố Đ&agrave; Nẵng</li>\n	<li>SDT : 0393256471</li>\n	<li>Hot line : 1900 2701</li>\n	<li>Mail : bnthanh.20it5@vku.udn.vn</li>\n	<li>Mail : bthanh2001@gmail.com<br />\n	&nbsp;</li>\n	<li>SDT : 0393256471</li>\n	<li>Hot line : 1900 2701</li>\n	<li>Mail : bnthanh.20it5@vku.udn.vn</li>\n	<li>Mail : bthanh2001@gmail.com</li>\n</ul>','<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3835.3786896032316!2d108.26301271528811!3d15.993790445702368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314210c1c7fc3c4d%3A0x638cc2053f41166a!2zMTk4IE5ndXnhu4VuIER1eSBUcmluaCwgSG_DoCBI4bqjaSwgTmfFqSBIw6BuaCBTxqFuLCBRdeG6o25nIE5hbSA1NTAwMDAsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1630944148360!5m2!1svi!2s\" width=\"100%\" height=\"100%\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"> </iframe>');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dataspin`
--

DROP TABLE IF EXISTS `dataspin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dataspin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nameGift` text,
  `img` text,
  `details` text,
  `codes` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dataspin`
--

LOCK TABLES `dataspin` WRITE;
/*!40000 ALTER TABLE `dataspin` DISABLE KEYS */;
INSERT INTO `dataspin` VALUES (1,'Chúc bạn may mắn lần sau','violet1.jpg','',''),(2,'voucher 20k','violet2.jpg','Chúc mừng bạn đã trúng voucher giảm giá 20k cho tất cả sản phẩm','123ABC'),(3,'Chúc bạn may mắn lần sau','violet3.jpg','',''),(4,'Chúc bạn may mắn lần sau','violet4.jpg','',''),(7,'voucher giảm giá 50k','1638774392.jpg','<p>voucher giảm gi&aacute; 50k cho mọi sản phẩm</p>',NULL),(8,'giám giá 100k cho tất cả sản phẩm','1639123485.png','<p>giảm gi&aacute; 100k cho tất cả sản phẩm</p>',NULL);
/*!40000 ALTER TABLE `dataspin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `favproduct`
--

DROP TABLE IF EXISTS `favproduct`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `favproduct` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_pro` int DEFAULT NULL,
  `id_user` int DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `favproduct`
--

LOCK TABLES `favproduct` WRITE;
/*!40000 ALTER TABLE `favproduct` DISABLE KEYS */;
INSERT INTO `favproduct` VALUES (1,5,63,'2022-05-17 01:40:33','2022-05-17 01:40:33'),(2,3,63,'2022-05-17 01:51:35','2022-05-17 01:51:35'),(3,4,63,'2022-05-17 02:23:38','2022-05-17 02:23:38'),(4,4,66,'2022-05-18 16:24:35','2022-05-18 16:24:35');
/*!40000 ALTER TABLE `favproduct` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `footer`
--

DROP TABLE IF EXISTS `footer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `footer` (
  `id` int NOT NULL AUTO_INCREMENT,
  `lefts` text,
  `betweens` text,
  `rights` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `footer`
--

LOCK TABLES `footer` WRITE;
/*!40000 ALTER TABLE `footer` DISABLE KEYS */;
INSERT INTO `footer` VALUES (1,'<h3><strong>Figure Shop</strong></h3>\n\n<p><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</strong>Trang web b&aacute;n figure uy t&iacute;n chất lượng h&agrave;ng đầu Việt Nam, với gi&aacute; th&agrave;nh cũng ph&ugrave; hợp với mọi t&uacute;i tiền. Quan trọng nhất l&agrave; chất lượng sản phẩm của Figure shop l&agrave; chất lượng tốt nhất đ&oacute; nha.</p>\n\n<p>--&gt; <a href=\"product\">Ấn v&agrave;o đ&acirc;y để trải nghiệm</a>&nbsp; &nbsp;&nbsp;<img alt=\"\" src=\"../adminI/layout/ckeditor/uploads/1632646319.jpg\" style=\"height:68px; width:50px\" /></p>',' <h3>Liên hệ</h3>\n                                <ul>\n                                    <li>\n                                        Địa chỉ: 189 Nguyên Duy Trinh, Quận Ngũ Hành Sơn,Tp.Đà Nẵng\n                                    </li>\n                                    <li>Điện thoại: 0393256471</li>\n                                    <li>Fax: 0868866471</li>\n                                    <li>Mail: bthanh2001@gmail.com</li>\n                                </ul>',' <div class=\"fanpage\">\n                                    <h3>Fanpage</h3>\n                                </div>\n                                <iframe src=\"https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fbuithanhtekk%2Fposts%2F571764940647109&show_text=true&width=500\" width=\"250\" height=\"248\" style=\"border: none; overflow: hidden\" scrolling=\"no\" frameborder=\"0\" allowfullscreen=\"true\" allow=\"autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share\"></iframe>');
/*!40000 ALTER TABLE `footer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gift`
--

DROP TABLE IF EXISTS `gift`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gift` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_user` int DEFAULT NULL,
  `nameGift` varchar(100) DEFAULT NULL,
  `details` text,
  `dateGet` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `gift_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `person` (`id_per`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gift`
--

LOCK TABLES `gift` WRITE;
/*!40000 ALTER TABLE `gift` DISABLE KEYS */;
INSERT INTO `gift` VALUES (25,14,'Chúc bạn may mắn lần sau',NULL,'2021-11-24'),(26,14,'Chúc bạn may mắn lần sau',NULL,'2021-11-26'),(27,14,'voucher 20k','123ABC','2021-11-26'),(28,14,'Chúc bạn may mắn lần sau',NULL,'2021-11-26'),(29,29,'Chúc bạn may mắn lần sau',NULL,'2021-12-04'),(30,32,'Chúc bạn may mắn lần sau',NULL,'2021-12-06'),(31,32,'Chúc bạn may mắn lần sau',NULL,'2021-12-06'),(32,32,'voucher 20k','123ABC','2021-12-06'),(33,32,'voucher giảm giá 50k',NULL,'2021-12-06'),(34,32,'Chúc bạn may mắn lần sau',NULL,'2021-12-06'),(35,18,'voucher giảm giá 50k',NULL,'2021-12-10'),(36,18,'Chúc bạn may mắn lần sau',NULL,'2021-12-10'),(37,18,'voucher 20k','123ABC','2021-12-10'),(38,18,'voucher 20k','123ABC','2022-01-14'),(39,18,'Chúc bạn may mắn lần sau',NULL,'2022-01-14'),(40,34,'Chúc bạn may mắn lần sau',NULL,'2022-01-15'),(41,34,'voucher giảm giá 50k',NULL,'2022-01-15'),(42,34,'voucher giảm giá 50k',NULL,'2022-01-15'),(43,21,'Chúc bạn may mắn lần sau',NULL,'2022-02-20'),(44,21,'voucher 20k','123ABC','2022-03-05'),(45,21,'voucher 20k','123ABC','2022-04-04');
/*!40000 ALTER TABLE `gift` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `image_pro`
--

DROP TABLE IF EXISTS `image_pro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `image_pro` (
  `id_img` int NOT NULL,
  `img1` text,
  `img2` text,
  `img3` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_img`),
  CONSTRAINT `image_pro_ibfk_1` FOREIGN KEY (`id_img`) REFERENCES `product` (`id_pro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `image_pro`
--

LOCK TABLES `image_pro` WRITE;
/*!40000 ALTER TABLE `image_pro` DISABLE KEYS */;
INSERT INTO `image_pro` VALUES (1,'1633238921.jpg','1633238922.jpg','1633238923.jpg','2021-09-17 15:36:06','2021-10-02 22:28:40'),(2,'Haab9d8d3d2e44499a94a5e46e071d20bQ.jpg','614nw7tMML._SL1000_.jpg','62ec51b2eb5d4d9d9dcc84c4c63553dd.jpg','2021-09-17 15:36:06','2021-09-17 15:36:06'),(3,'61ALbaqWNTL.jpg','ECzD5p6UYAI6ANt.jpg','1cf207eec4d5ea533ac1848ba788357a.jpg','2021-09-17 15:36:06','2021-09-17 15:36:06'),(4,'FIG682-Super-Saiyan-Son-Goku-Grandista-Mau-DB-1.jpg','e82bfce5501dd06f9a0e0342867607c5.jpg','5a4072fc028ed52a660079f2521d91dc.jpg','2021-09-17 15:36:06','2021-09-17 15:36:06'),(5,'figure-055519_07_bf7de3449ec1431abd6423cb2b741c3d_1024x1024.jpg','overlord_albedo__20_1__1024x1024.jpg','figura-albedo-bikini-version-overlord-01.jpg','2021-09-17 15:36:06','2021-09-17 15:36:06'),(6,'42c5bbf5688495dacc95_4a034d8ff59d4293879f26c76c1022ee_master.jpg','e7a42f95aa2e00d10c97298ed23b2c20.jpg','demon-slayer-kimetsu-no-yaiba-tanjiro-kamado-figure-1.jpg','2021-09-17 15:36:06','2021-09-17 15:36:06'),(7,'kimetsu-no-yaiba-kamado-nezuko-spm-figure-sega-550x550.jpg','5f093a1b1cdfd81ca0af1ea6-large.jpg','figure-053294_01_5a7dc0405c0b448c86c69a768d7c6ab3_1024x1024.jpg','2021-09-17 15:36:06','2021-09-17 15:36:06'),(8,'figure-030249_01_1024x1024.jpg','freeing_altria_pendragon__1_.jpg','hie1458897583_1024x1024.jpeg','2021-09-17 15:36:06','2021-09-17 15:36:06'),(9,'attack_on_titan_eren_1.7_complete_figure__1__2101ebc9b07340d9a82e6af4019c41c0_1024x1024.jpg','eren_yeager_good_smile_company_20_6_.jpg','attack_on_titan_eren_1.7_complete_figure__4__9af924762f1e41d7a452683da2ac94b9.jpg','2021-09-17 15:36:06','2021-09-17 15:36:06'),(10,'figma_-_attack_on_titan_levi__2__3cd0a4975eba491fad8c1f42818a66be_grande.jpg','attack_on_titan_levi_1.7_complete_figure__2__09a13098bb3a42df8d5ef9726ddbc532.jpg','619tXcstryL.jpg','2021-09-17 15:36:06','2021-09-17 15:36:06'),(11,'kadokawa_kurumi_tokisaki__1__1024x1024.jpg','date_a_live_kurumi_tokisaki_complete_figure__1__02a7f73474904d8d9f0cc71b32e528c9_1024x1024.jpg','date_a_live_ii_alphamax_1_7_scale_figure_kurumi_tokisaki_hypetokyo_1_1024x1024_4bd05df7896040a983000eaf67ef6103_master.jpg','2021-09-17 15:36:06','2021-09-17 15:36:06'),(12,'himouto_umaru_chan_trading_figure_8pack_box___1__1024x1024.jpg','nendoroid_umaru__20_3_.jpg','nendoroid_umaru__20_5_.jpg','2021-09-17 15:36:06','2021-09-17 15:36:06'),(13,'ing_on_this_wonderful_world__kurenai_densetsu_aqua_complete_figure__6__113fb2860f1c42a5b4d67070edce9745.jpg','92f038cced07b70825b3ded78d057e2f.jpg','unnamed.png','2021-09-17 15:36:06','2021-09-17 15:36:06'),(16,'1633239014.jpg','1633239049.jpg','1633239014.jpg','2021-10-02 22:30:14','2021-10-02 22:30:47');
/*!40000 ALTER TABLE `image_pro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imgbannerb`
--

DROP TABLE IF EXISTS `imgbannerb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `imgbannerb` (
  `id` int NOT NULL AUTO_INCREMENT,
  `imgSlideB` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imgbannerb`
--

LOCK TABLES `imgbannerb` WRITE;
/*!40000 ALTER TABLE `imgbannerb` DISABLE KEYS */;
INSERT INTO `imgbannerb` VALUES (1,'1636204441.png');
/*!40000 ALTER TABLE `imgbannerb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imgbannerh`
--

DROP TABLE IF EXISTS `imgbannerh`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `imgbannerh` (
  `id` int NOT NULL AUTO_INCREMENT,
  `imgSlideH` text,
  `text` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imgbannerh`
--

LOCK TABLES `imgbannerh` WRITE;
/*!40000 ALTER TABLE `imgbannerh` DISABLE KEYS */;
INSERT INTO `imgbannerh` VALUES (1,'1635674045.png','<p>Trang web b&aacute;n figure uy t&iacute;n chất lượng h&agrave;ng đầu Việt Nam, với gi&aacute; th&agrave;nh cũng ph&ugrave; hợp với mọi t&uacute;i tiền. Quan trọng nhất l&agrave; chất lượng sản phẩm của Figure shop l&agrave; chất lượng tốt nhất .</p>'),(2,'1639123412.jpg',NULL),(3,'1642211514.png',NULL),(4,'violet.jpg',NULL);
/*!40000 ALTER TABLE `imgbannerh` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imgbannerp`
--

DROP TABLE IF EXISTS `imgbannerp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `imgbannerp` (
  `id` int NOT NULL AUTO_INCREMENT,
  `imgSlideP` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imgbannerp`
--

LOCK TABLES `imgbannerp` WRITE;
/*!40000 ALTER TABLE `imgbannerp` DISABLE KEYS */;
INSERT INTO `imgbannerp` VALUES (1,'1635690372.png');
/*!40000 ALTER TABLE `imgbannerp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id_ord` int NOT NULL AUTO_INCREMENT,
  `id_user` int DEFAULT NULL,
  `id_pro` int DEFAULT NULL,
  `id_voucher` int DEFAULT NULL,
  `listId_pr` varchar(100) DEFAULT NULL,
  `quantity` varchar(100) DEFAULT NULL,
  `maGD` varchar(100) DEFAULT NULL,
  `tien` varchar(100) DEFAULT NULL,
  `payBy` varchar(45) DEFAULT NULL,
  `statuss` int DEFAULT '0',
  `dates` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_ord`),
  KEY `id_user` (`id_user`),
  KEY `id_pro` (`id_pro`),
  CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `person` (`id_per`),
  CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`id_pro`) REFERENCES `product` (`id_pro`)
) ENGINE=InnoDB AUTO_INCREMENT=151 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (56,21,NULL,NULL,'2,3','1,1','20210924003321','1430000','VNPAY',1,'2021-09-24 00:33:45','2021-09-23 17:33:45','2021-09-23 17:33:45'),(57,21,NULL,NULL,'3,1','3,2','20210924003533','1265000','VNPAY',1,'2021-09-24 00:36:00','2021-09-23 17:36:00','2021-09-23 17:36:00'),(58,21,NULL,NULL,'1,3','5,3','20210924003654','2420000','VNPAY',1,'2021-09-24 00:37:18','2021-09-23 17:37:18','2021-09-23 17:37:18'),(59,21,NULL,NULL,'3,1','4,4','20210924004108','2200000','VNPAY',1,'2021-09-24 00:41:28','2021-09-23 17:41:28','2021-09-23 17:41:28'),(60,21,NULL,NULL,'3,6,5','1,2,2','20210924004324','1925000','VNPAY',1,'2021-09-24 00:43:44','2021-09-23 17:43:44','2021-09-23 17:43:44'),(61,21,4,NULL,'4,8,7','2,1,2','20210924004503','2475000','PayNormal',1,'2021-09-24 00:45:03','2021-09-23 17:45:03','2021-11-25 07:39:49'),(62,21,4,NULL,'4,2','2,3','20210924151632','1100','PayNormal',1,'2021-09-24 15:16:32','2021-09-24 08:16:32','2021-10-03 01:57:01'),(63,21,NULL,NULL,'2,4,3','4,2,1','20210924165007','166320','VNPAY',1,'2021-09-24 16:50:30','2021-09-24 09:50:30','2021-09-24 09:50:30'),(64,21,NULL,NULL,'2,6,5','2,1,1','20210924165719','880440','VNPAY',1,'2021-09-24 16:57:38','2021-09-24 09:57:38','2021-09-24 09:57:38'),(65,21,NULL,NULL,'2','5','16927421530','1100','MoMo',1,'2021-09-24 16:58:44','2021-09-24 09:58:44','2021-09-24 09:58:44'),(66,21,NULL,NULL,'3','1','20210925224850','165000','VNPAY',1,'2021-09-25 22:49:09','2021-09-25 15:49:09','2021-09-25 15:49:09'),(67,21,NULL,NULL,'3','1','20210925224850','165000','VNPAY',1,'2021-09-25 22:50:21','2021-09-25 15:50:21','2021-09-25 15:50:21'),(68,21,NULL,NULL,'3','1','20210925224850','165000','VNPAY',1,'2021-09-25 22:51:15','2021-09-25 15:51:16','2021-09-25 15:51:16'),(69,21,NULL,NULL,'3','1','20210925224850','165000','VNPAY',1,'2021-09-25 22:51:38','2021-09-25 15:51:38','2021-09-25 15:51:38'),(70,21,NULL,NULL,'3','2','20210925225717','330000','VNPAY',1,'2021-09-25 22:57:40','2021-09-25 15:57:40','2021-09-25 15:57:40'),(71,21,NULL,NULL,'3','2','20210925225837','330000','VNPAY',1,'2021-09-25 22:58:55','2021-09-25 15:58:55','2021-09-25 15:58:55'),(72,21,NULL,NULL,'3','2','20210925230043','330000','VNPAY',1,'2021-09-25 23:01:07','2021-09-25 16:01:07','2021-09-25 16:01:07'),(73,21,NULL,NULL,'3','2','20210925230043','330000','VNPAY',1,'2021-09-25 23:01:42','2021-09-25 16:01:42','2021-09-25 16:01:42'),(74,21,NULL,NULL,'3','2','20210925230240','330000','VNPAY',1,'2021-09-25 23:02:59','2021-09-25 16:02:59','2021-09-25 16:02:59'),(75,21,NULL,NULL,'3','2','20210925230747','330000','VNPAY',1,'2021-09-25 23:08:19','2021-09-25 16:08:23','2021-09-25 16:08:23'),(76,14,NULL,NULL,'3,1','6,10','20210927130735','4840000','VNPAY',1,'2021-09-27 13:08:08','2021-09-27 06:08:13','2021-09-27 06:08:13'),(77,21,NULL,NULL,'2,3','10,1','20210927161152','167200','VNPAY',1,'2021-09-27 16:12:33','2021-09-27 09:12:38','2021-09-27 09:12:38'),(78,21,NULL,NULL,'3','99','20210927162254','16335000','VNPAY',1,'2021-09-27 16:23:12','2021-09-27 09:23:15','2021-09-27 09:23:15'),(79,21,7,NULL,'7','200','20210927163017','165000000','PayNormal',0,'2021-09-27 16:30:17','2021-09-27 09:30:17','2021-09-27 09:30:17'),(80,21,7,NULL,'7','200','20210927163100','165000000','PayNormal',1,'2021-09-27 16:31:00','2021-09-27 09:31:00','2021-10-03 01:55:20'),(81,21,NULL,NULL,'7','200','20210927163516','165000000','VNPAY',1,'2021-09-27 16:35:37','2021-09-27 09:35:41','2021-09-27 09:35:41'),(82,21,NULL,NULL,'7','99','20210927164605','83325000','VNPAY',1,'2021-09-27 16:46:28','2021-09-27 09:46:32','2021-09-27 09:46:32'),(83,21,NULL,NULL,'13,9,7','1,1,1','20210927165323','1584000','VNPAY',1,'2021-09-27 16:53:40','2021-09-27 09:53:44','2021-09-27 09:53:44'),(84,14,NULL,NULL,'7,8','1,1','20211002030546','1210000','VNPAY',1,'2021-10-02 10:07:15','2021-10-01 20:07:19','2021-10-01 20:07:19'),(85,14,NULL,NULL,'8,7','1,1','20211002030958','1210000','VNPAY',1,'2021-10-02 10:10:14','2021-10-01 20:10:18','2021-10-01 20:10:18'),(86,14,NULL,NULL,'4,5','3,2','20211002093557','770660','VNPAY',1,'2021-10-02 16:36:33','2021-10-02 02:36:37','2021-10-02 02:36:37'),(87,14,NULL,NULL,'4,3,2','3,5,5','20211004074031','826760','VNPAY',1,'2021-10-04 14:40:50','2021-10-04 00:40:54','2021-10-04 00:40:54'),(88,21,NULL,NULL,'2,3','2,2','20211004092100','330440','VNPAY',1,'2021-10-04 16:22:21','2021-10-04 02:22:25','2021-10-04 02:22:25'),(89,14,NULL,NULL,'4','5','17420754716','1100','MoMo',1,'2021-10-11 07:39:28','2021-10-10 17:39:28','2021-10-10 17:39:28'),(90,14,4,NULL,'4','2','20211012181239','440','PayNormal',0,'2021-10-13 01:12:39','2021-10-12 11:12:39','2021-10-12 11:12:39'),(91,18,NULL,NULL,'3,4','1,1','20211026144440','165220','VNPAY',1,'2021-10-26 21:48:21','2021-10-26 07:48:27','2021-10-26 07:48:27'),(92,14,NULL,NULL,'1,2','1,1','20211109142604','332220','VNPAY',1,'2021-11-09 21:27:41','2021-11-09 07:27:46','2021-11-09 07:27:46'),(93,14,2,NULL,'2,4','9,21','20211109151054','0','VNPAY',1,'2021-11-09 22:10:49','2021-11-09 08:10:54','2021-11-09 08:10:54'),(98,14,4,NULL,'4','1','20211109163332','0','VNPAY',1,'2021-11-09 23:33:27','2021-11-09 09:33:32','2021-11-09 09:33:32'),(99,14,4,NULL,'4','1','20211109164620','0','VNPAY',1,'2021-11-09 23:46:15','2021-11-09 09:46:20','2021-11-09 09:46:20'),(100,14,4,NULL,'4','2','20211109165058','0','VNPAY',1,'2021-11-09 23:50:54','2021-11-09 09:50:58','2021-11-09 09:50:58'),(101,14,4,NULL,'4','2','20211109170950','440','PayNormal',1,'2021-11-10 00:09:50','2021-11-09 10:09:50','2021-11-09 10:11:06'),(102,14,NULL,NULL,'1','2','20211111150507','704000','VNPAY',1,'2021-11-11 22:05:24','2021-11-11 08:05:31','2021-11-11 08:05:31'),(103,14,NULL,NULL,'1','2','20211111161434','704000','VNPAY',1,'2021-11-11 23:14:52','2021-11-11 09:14:57','2021-11-11 09:14:57'),(104,25,NULL,NULL,'1','2','20211111163948','704000','VNPAY',1,'2021-11-11 23:40:03','2021-11-11 09:40:07','2021-11-11 09:40:07'),(105,26,NULL,NULL,'1','2','20211111164858','704000','VNPAY',1,'2021-11-11 23:49:15','2021-11-11 09:49:18','2021-11-11 09:49:18'),(106,27,NULL,NULL,'3','5','20211112133741','825000','VNPAY',1,'2021-11-12 20:37:59','2021-11-12 06:38:06','2021-11-12 06:38:06'),(107,29,NULL,NULL,'8','1','20211204043729','385000','VNPAY',1,'2021-12-04 11:37:49','2021-12-03 21:37:55','2021-12-03 21:37:55'),(108,32,NULL,NULL,'3','3','20211206065352','445000','VNPAY',1,'2021-12-06 13:54:15','2021-12-05 23:54:19','2021-12-05 23:54:19'),(109,32,NULL,NULL,'17','5','20211206065843','1925000','VNPAY',1,'2021-12-06 13:58:59','2021-12-05 23:59:03','2021-12-05 23:59:03'),(110,32,NULL,NULL,'18','1','20211206070137','68000','VNPAY',1,'2021-12-06 14:02:05','2021-12-06 00:02:09','2021-12-06 00:02:09'),(111,14,NULL,NULL,'30','1','20211208182745','550000','VNPAY',1,'2021-12-09 01:31:19','2021-12-08 11:31:22','2021-12-08 11:31:22'),(112,14,18,NULL,'18','1','20211210071704','68000','PayNormal',1,'2021-12-10 14:17:04','2021-12-10 00:17:04','2021-12-10 01:05:33'),(113,14,18,NULL,'18','1','20211210071724','68000','PayNormal',1,'2021-12-10 14:17:24','2021-12-10 00:17:24','2021-12-10 01:05:33'),(114,14,17,NULL,'17','1','20211210072138','365000','PayNormal',1,'2021-12-10 14:21:38','2021-12-10 00:21:38','2021-12-10 01:05:21'),(115,18,NULL,NULL,'15','1','20211210072819','265000','VNPAY',1,'2021-12-10 14:28:33','2021-12-10 00:28:39','2021-12-10 00:28:39'),(116,18,NULL,NULL,'18,3','7,3','20211210075825','1101000','VNPAY',1,'2021-12-10 14:59:04','2021-12-10 00:59:08','2021-12-10 00:59:08'),(117,18,NULL,NULL,'13','1','20211210080047','354000','VNPAY',1,'2021-12-10 15:01:01','2021-12-10 01:01:07','2021-12-10 01:01:07'),(118,18,NULL,NULL,'18,15','2,1','20220114102110','451000','VNPAY',1,'2022-01-14 17:27:33','2022-01-14 03:27:37','2022-01-14 03:27:37'),(119,18,NULL,NULL,'15,18','2,1','20220114102752','638000','VNPAY',1,'2022-01-14 17:28:06','2022-01-14 03:28:10','2022-01-14 03:28:10'),(120,33,NULL,NULL,'18,15','1,1','20220114143318','313000','VNPAY',1,'2022-01-14 21:33:35','2022-01-14 07:33:41','2022-01-14 07:33:41'),(121,18,NULL,NULL,'18','3','20220115014349','264000','VNPAY',1,'2022-01-15 08:44:03','2022-01-14 18:44:08','2022-01-14 18:44:08'),(122,34,NULL,NULL,'18,17','2,3','20220115014718','1281000','VNPAY',1,'2022-01-15 08:47:44','2022-01-14 18:47:49','2022-01-14 18:47:49'),(123,18,NULL,NULL,'2,16','1,1','20220115015617','365220','VNPAY',1,'2022-01-15 08:56:35','2022-01-14 18:56:39','2022-01-14 18:56:39'),(124,21,6,NULL,'6,7','1,1','20220220073856','1320000','PayNormal',0,'2022-02-20 14:38:56','2022-02-20 00:38:56','2022-02-20 00:38:56'),(125,21,12,NULL,'12','1','20220224153530','363000','PayNormal',0,'2022-02-24 22:35:30','2022-02-24 08:35:30','2022-02-24 08:35:30'),(126,21,17,NULL,'17','1','20220305150824','385000','PayNormal',0,'2022-03-05 22:08:24','2022-03-05 08:08:24','2022-03-05 08:08:24'),(127,21,18,NULL,'18','1','20220305150902','88000','PayNormal',0,'2022-03-05 22:09:02','2022-03-05 08:09:02','2022-03-05 08:09:02'),(128,21,2,NULL,'2','1','20220313155011','495000','PayNormal',0,'2022-03-13 22:50:11','2022-03-13 08:50:11','2022-03-13 08:50:11'),(129,21,NULL,NULL,'12,17','1,1','20220328140908','748000','VNPAY',1,'2022-03-28 21:11:09','2022-03-28 07:11:13','2022-03-28 07:11:13'),(130,21,12,NULL,'4','1','20220329180949','275000.0','PayNormal',0,'2022-03-30 01:09:49','2022-03-29 11:09:49','2022-03-29 11:09:49'),(131,21,12,NULL,'4,5','2,1','20220329181437','990000.0','PayNormal',0,'2022-03-30 01:14:37','2022-03-29 11:14:37','2022-03-29 11:14:37'),(132,21,12,NULL,'4,5','1,1','20220331163853','715000.0','PayNormal',0,'2022-03-31 23:38:53','2022-03-31 09:38:53','2022-03-31 09:38:53'),(133,21,12,NULL,'4,5','1,1','20220331164238','715000.0','PayNormal',0,'2022-03-31 23:42:38','2022-03-31 09:42:38','2022-03-31 09:42:38'),(134,21,NULL,NULL,'12','1','20220401160132','363000','VNPAY',1,'2022-04-01 23:02:49','2022-04-01 09:02:54','2022-04-01 09:02:54'),(135,21,1,NULL,'4','1','20220401200821','275000','VNPAY',1,'2022-04-02 03:08:50','2022-04-01 13:08:53','2022-04-01 13:08:53'),(136,21,1,NULL,'4,3','1,1','20220401202802','495000','VNPAY',1,'2022-04-02 03:28:24','2022-04-01 13:28:27','2022-04-01 13:28:27'),(137,21,1,NULL,'4,3','1,1','20220401210523','495000','VNPAY',1,'2022-04-02 04:05:53','2022-04-01 14:05:55','2022-04-01 14:05:55'),(138,21,12,NULL,'5','1','20220401210627','440000.0','PayNormal',0,'2022-04-02 04:06:27','2022-04-01 14:06:27','2022-04-01 14:06:27'),(139,21,1,NULL,'5,7','1,2','20220401211022','2420000','VNPAY',1,'2022-04-02 04:11:03','2022-04-01 14:11:06','2022-04-01 14:11:06'),(140,21,12,NULL,'4','2','20220402031507','550000.0','PayNormal',0,'2022-04-02 10:15:07','2022-04-01 20:15:07','2022-04-01 20:15:07'),(141,21,1,NULL,'5','2','20220402031523','880000','VNPAY',1,'2022-04-02 10:16:00','2022-04-01 20:16:04','2022-04-01 20:16:04'),(142,21,12,NULL,'1,2','1,1','20220406031426','935000.0','PayNormal',0,'2022-04-06 10:14:26','2022-04-05 20:14:26','2022-04-05 20:14:26'),(143,21,1,NULL,'4','1','20220406032028','275000','VNPAY',1,'2022-04-06 10:21:12','2022-04-05 20:21:15','2022-04-05 20:21:15'),(144,63,12,NULL,'5','1','20220508201020','440000.0','PayNormal',0,'2022-05-09 03:10:20','2022-05-08 13:10:20','2022-05-08 13:10:20'),(145,21,1,NULL,'5','1','20220508210001','440000','VNPAY',1,'2022-05-09 04:00:20','2022-05-08 14:00:22','2022-05-08 14:00:22'),(146,63,1,NULL,'3','2','20220514215926','440000','VNPAY',1,'2022-05-15 05:00:03','2022-05-14 15:00:07','2022-05-14 15:00:07'),(147,63,12,NULL,'1','1','20220515005141','440000.0','PayNormal',1,'2022-05-15 07:51:41','2022-05-14 17:51:41','2022-05-14 17:52:07'),(148,63,1,NULL,'5,6','1,1','20220515005453','990000','VNPAY',1,'2022-05-15 07:55:38','2022-05-14 17:55:42','2022-05-14 17:55:42'),(149,66,12,NULL,'5','1','20220518171118','440000.0','PayNormal',0,'2022-05-19 00:11:18','2022-05-18 10:11:18','2022-05-18 10:11:18'),(150,66,1,NULL,'5','1','20220518175220','440000','VNPAY',1,'2022-05-19 00:53:06','2022-05-18 10:53:10','2022-05-18 10:53:10');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `person`
--

DROP TABLE IF EXISTS `person`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `person` (
  `id_per` int NOT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `dates` date DEFAULT NULL,
  `cmnd` varchar(50) DEFAULT NULL,
  `adress` varchar(100) DEFAULT NULL,
  `sdt` int DEFAULT NULL,
  `img` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_per`),
  CONSTRAINT `person_ibfk_1` FOREIGN KEY (`id_per`) REFERENCES `account` (`id_ac`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `person`
--

LOCK TABLES `person` WRITE;
/*!40000 ALTER TABLE `person` DISABLE KEYS */;
INSERT INTO `person` VALUES (14,'Bùi Ngọc Thành (Admin)','bthanh2001@gmail.com','2001-01-27','044202004606','Hoa thủy - Lệ thủy - Quảng Bình',393256471,NULL,'2021-09-17 21:32:59','2021-12-09 23:46:22'),(18,'bùi ngọc thành','bthanh2001@gmail.com','2021-09-20','044202004606','Hoa thủy - Lệ thủy - Quảng Bình',393256471,NULL,'2021-09-18 00:02:41','2021-09-20 07:46:04'),(19,'bùi ngọc thành','bthanh2001@gmail.com','2022-01-07','044202004606','Hoa thủy - Lệ thủy - Quảng Bình',393256471,NULL,'2022-01-14 03:16:53','2022-01-14 03:17:09'),(21,'nguyễn văn A','bthanh2701@gmail.com','2002-04-04','0442020046063211','Hoa thủy - Lệ thủy - Quảng Bình .',393256471,'1649090505.png','2021-09-20 09:38:20','2022-04-04 09:41:42'),(22,'Nguyễn Văn B','noproblem@gmail.com','2021-09-04','04420200460632121','Hoa thủy - Lệ thủy - Quảng Bình',393256471,NULL,'2021-09-30 11:56:27','2021-09-30 11:58:05'),(25,'Nguyễn Văn B','kiyoshiyuki2701@gmail.com','2008-02-11','04420200460632121','Hoa thủy - Lệ thủy - Quảng Bình',393256471,NULL,'2021-11-11 09:17:44','2021-11-11 09:38:48'),(26,'gao van A','gaodo@gmail.com','2021-11-03','044202004606321','Hoa thủy - Lệ thủy - Quảng Bình',1693256471,NULL,'2021-11-11 09:48:11','2021-11-11 09:48:37'),(27,'meo meo meo','meo@gmail.com','2021-11-10','04420200460632121','Đà Nẵng',98978454,NULL,'2021-11-12 06:36:22','2021-11-12 06:37:29'),(29,'bùi ngọc thành','bthanh2001@gmail.com','2021-12-02','044202004606','Hoa thủy - Lệ thủy - Quảng Bình',1693256471,NULL,'2021-12-03 21:31:46','2021-12-03 21:37:00'),(32,'Bùi Thành(test)','buithanh27012002@gmail.com','2021-12-26','04420200460632121','Hoa thủy - Lệ thủy - Quảng Bình',1693256471,NULL,'2021-12-05 23:44:52','2021-12-05 23:50:34'),(33,'Nguyễn Văn B','bnthanh.20it5@vku.udn.vn','2022-01-03','044202004606','Hoa thủy - Lệ thủy - Quảng Bình',393256471,NULL,'2022-01-14 07:31:18','2022-01-14 07:31:52'),(34,'Nguyễn Văn Khánh','nvkhanh@gmail.com','2015-06-13','04420200460632121','Đà Nẵng',1693256471,NULL,'2022-01-14 18:45:01','2022-01-14 18:46:47'),(36,'thay hien','thayhien@gmail.com','2022-01-06','044202004606','Hoa thủy - Lệ thủy - Quảng Bình',393256471,NULL,'2022-01-14 19:03:01','2022-01-14 19:03:20'),(37,'test04',NULL,NULL,NULL,NULL,NULL,NULL,'2022-02-19 03:12:53','2022-02-19 03:12:53'),(46,'test08',NULL,NULL,NULL,NULL,NULL,NULL,'2022-02-20 00:41:28','2022-02-20 00:41:28'),(47,'test10',NULL,NULL,NULL,NULL,NULL,NULL,'2022-02-20 09:14:31','2022-02-20 09:14:31'),(58,'test90',NULL,NULL,NULL,NULL,NULL,NULL,'2022-03-02 05:06:03','2022-03-02 05:06:03'),(59,'Nguyễn Văn B','bthanh2001@gmail.com','2022-03-02','044202004606','Hoa thủy - Lệ thủy - Quảng Bình',393256471,NULL,'2022-03-05 09:40:53','2022-03-05 09:44:42'),(60,'nguyen a','bthanh2001@gmail.com','2022-04-08','123124235423534','super man  me',92345345,'1649127019.jpg','2022-04-04 16:54:31','2022-04-04 19:50:16'),(61,'test15',NULL,NULL,NULL,NULL,NULL,'1650242589.jpg','2022-04-17 17:42:57','2022-04-17 17:43:06'),(63,'bui thanh','bnthanh.20it5@vku.udn.vn','2022-05-05','044202004606','Hoa thủy - Lệ thủy - Quảng Bình',393256471,'1652754200.jpg','2022-05-08 12:11:27','2022-05-16 19:23:17'),(65,'buiduc1604@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,'2022-05-09 08:55:14','2022-05-09 08:55:14'),(66,'buithanh2701','bthanh2001@gmail.com','2022-05-19','12318742354512','hoa thuy',393256471,'1652891059.jpg','2022-05-18 09:22:09','2022-05-18 09:24:16');
/*!40000 ALTER TABLE `person` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB AUTO_INCREMENT=297 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
INSERT INTO `personal_access_tokens` VALUES (284,'App\\Models\\accountModel',64,'myapptoken','cbd17e54c9c1e5915449d6dfa5aad701e678fe82d01912bfe0dfa5fa7a25f414','[\"*\"]',NULL,'2022-05-09 08:46:34','2022-05-09 08:46:34');
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product` (
  `id_pro` int NOT NULL AUTO_INCREMENT,
  `id_Cate` int NOT NULL,
  `name_pro` varchar(255) DEFAULT NULL,
  `price_old` varchar(100) DEFAULT NULL,
  `price_new` varchar(100) DEFAULT NULL,
  `soluong` int DEFAULT '0',
  `danhgia` float DEFAULT '0',
  `mieuta` text,
  `chieucao` varchar(45) DEFAULT NULL,
  `image` text,
  `xuatsu` varchar(100) DEFAULT NULL,
  `noibat` int DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_pro`),
  KEY `id_Cate` (`id_Cate`),
  CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_Cate`) REFERENCES `category` (`id_cate`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,2,'Mô hình Figure Saitama Chibi - One Punch Man','400000','320000',9,3,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged','20','onpuch.png','Sản xuất tại Nhật Bản',1,'2021-09-13 02:34:14','2022-05-14 17:52:07'),(2,2,'Mô Hình Figure Deadpool 1','450000','200',9,5,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged','20','deadport.png','Sản xuất tại Nhật Bản',0,'2021-09-13 03:13:33','2022-01-14 18:56:35'),(3,2,'Mô Hình Standee acrylic anime hình Violet Evergarden','200000','150000',90,5,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged','20','violet.png','Sản xuất tại Nhật Bản',1,'2021-09-13 03:13:33','2022-05-14 15:00:03'),(4,1,'Mô hình DragonBall - Goku body','250000','200',16,4.66667,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged','20','goku.png','Sản xuất tại Nhật Bản',0,'2021-09-13 03:13:33','2022-04-05 20:21:12'),(5,1,'Mô hình Figure Albedo Flying – Overlord','400000','350000',80,5,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged','20','albedo.png','Sản xuất tại Nhật Bản',1,'2021-09-13 03:13:33','2022-05-18 10:53:06'),(6,1,'Mô hình nendoroid 1193 - Kamado Tanjirou','500000','450000',99,5,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged','30','tan.png','Sản xuất tại Nhật Bản',1,'2021-09-13 03:13:33','2022-05-17 20:24:29'),(7,1,'Mô hình nendoroid 1194- Kimetsu no Yaiba - Kamado Nezuko','900000','750000',96,5,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged','10','nezuko.png','Sản xuất tại Nhật Bản',1,'2021-09-13 03:13:33','2022-04-01 14:11:03'),(8,3,'MÔ HÌNH NENDOROID 121 SABER','400000','350000',95,5,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged','20','sabel.png','Sản xuất tại Nhật Bản',0,'2021-09-13 03:13:33','2021-12-03 21:37:49'),(9,3,'MÔ HÌNH NENDOROID 375 EREN','400000','350000',99,0,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged','30','eren.png','Sản xuất tại Nhật Bản',0,'2021-09-13 03:13:33','2021-09-27 09:53:40'),(10,3,'MÔ HÌNH NENDOROID 466 KURUMI TOKISAKI','400000','350000',100,0,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged','20','kurumi.png','Sản xuất tại Nhật Bản',0,'2021-09-13 03:13:33','2021-10-01 14:01:15'),(11,1,'MÔ HÌNH NENDOROID 417 LEVI CLEANING VER','360000','350000',100,0,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged','20','levi.png','Sản xuất tại Nhật Bản',0,'2021-09-13 03:13:33','2021-09-13 03:13:33'),(12,2,'Mô Hình Nendoroid 524 Umaru - Himouto! Umaru-chan','400000','330000',97,5,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged','20','um.png','Sản xuất tại Nhật Bản',1,'2021-09-13 03:13:33','2022-05-17 19:00:42'),(13,3,'Mô Hình Nendoroid 630 Aqua','350000','340000',98,0,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged','20','equamam.png','Sản xuất tại Nhật Bản',0,'2021-09-13 03:13:33','2021-12-10 01:01:01'),(14,1,'Mô hình Figure One Punch Man Saitama Genos Tatsumaki','400000','350000',100,0,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged','20','senmi.png','Sản xuất tại Nhật Bản',0,'2021-09-13 03:13:33','2021-09-13 03:13:33'),(15,2,'Banpresto DXF One-Punch Man Genos Premium Figure','400000','250000',94,5,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged','20','geros.png','Sản xuất tại Nhật Bản',1,'2021-09-13 03:13:33','2022-01-14 07:34:24'),(16,3,'One Punch Man: Fubuki 1/7 Scale PVC Figure','400000','350000',99,0,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged','20','fubuki.png','Sản xuất tại Nhật Bản',0,'2021-09-13 03:13:33','2022-01-14 18:56:35'),(17,2,'Mô hình Figurekimetsu no yaiba Chibi','400000','350000',89,4.66667,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged','20','Imgonpuch.png','Sản xuất tại Nhật Bản',0,'2021-09-13 03:13:33','2022-05-17 20:16:14'),(18,2,'Mô hình Athur - Fate','100000','80000',79,3.66667,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged','20','vua.png','Sản xuất tại Nhật Bản',0,'2021-09-16 13:55:20','2022-03-05 08:09:26');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rate`
--

DROP TABLE IF EXISTS `rate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rate` (
  `id_rate` int NOT NULL AUTO_INCREMENT,
  `id_use` int DEFAULT NULL,
  `id_pro` int DEFAULT NULL,
  `rate` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_rate`),
  KEY `id_use` (`id_use`),
  KEY `id_pro` (`id_pro`),
  CONSTRAINT `rate_ibfk_1` FOREIGN KEY (`id_use`) REFERENCES `person` (`id_per`),
  CONSTRAINT `rate_ibfk_2` FOREIGN KEY (`id_pro`) REFERENCES `product` (`id_pro`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rate`
--

LOCK TABLES `rate` WRITE;
/*!40000 ALTER TABLE `rate` DISABLE KEYS */;
INSERT INTO `rate` VALUES (7,14,3,5,'2021-10-01 07:59:19','2021-10-01 08:06:31'),(8,21,3,5,'2021-10-01 08:06:47','2021-11-21 11:27:53'),(9,21,1,5,'2021-10-01 08:12:46','2021-11-22 11:44:22'),(10,21,2,5,'2021-10-01 08:12:59','2021-11-22 11:45:57'),(11,18,3,5,'2021-10-01 08:32:03','2021-10-01 09:02:44'),(12,18,4,5,'2021-10-01 09:04:38','2021-12-10 01:02:34'),(13,18,8,5,'2021-10-01 09:04:48','2021-10-01 09:04:48'),(14,21,4,4,'2021-10-01 09:23:44','2021-10-01 09:23:44'),(15,21,8,5,'2021-10-01 09:28:35','2021-11-22 23:35:05'),(16,21,7,5,'2021-10-01 09:34:00','2021-11-21 11:27:33'),(21,14,6,5,'2021-10-02 06:39:27','2021-10-02 06:39:27'),(22,14,4,5,'2021-10-02 06:39:39','2021-10-02 06:39:39'),(23,14,1,1,'2021-10-02 06:39:45','2021-12-05 04:54:17'),(26,21,5,5,'2021-11-22 11:44:29','2021-11-22 11:44:29'),(27,14,2,5,'2021-11-22 11:45:30','2021-11-22 11:45:33'),(29,14,8,5,'2021-11-22 12:11:42','2021-11-22 12:11:42'),(30,14,7,5,'2021-11-22 12:17:38','2021-11-22 12:17:38'),(31,32,3,5,'2021-12-05 23:54:59','2021-12-05 23:55:04'),(32,32,17,5,'2021-12-06 00:08:42','2021-12-06 00:08:42'),(33,33,18,5,'2022-01-14 07:34:16','2022-01-14 07:34:16'),(34,33,15,5,'2022-01-14 07:34:24','2022-01-14 07:34:24'),(35,34,18,1,'2022-01-14 18:48:00','2022-01-14 18:48:00'),(36,34,17,4,'2022-01-14 18:48:14','2022-01-14 18:48:14'),(37,21,12,5,'2022-02-24 08:35:51','2022-05-17 19:00:42'),(38,21,6,5,'2022-03-05 08:08:34','2022-03-05 08:08:35'),(39,21,18,5,'2022-03-05 08:09:26','2022-03-05 08:09:26'),(46,21,17,5,'2022-05-17 20:12:33','2022-05-17 20:16:08'),(47,63,6,5,'2022-05-17 20:13:57','2022-05-17 20:24:38'),(48,63,5,5,'2022-05-17 20:26:50','2022-05-17 20:26:50'),(49,66,5,5,'2022-05-18 10:11:39','2022-05-18 10:52:04');
/*!40000 ALTER TABLE `rate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sortheight`
--

DROP TABLE IF EXISTS `sortheight`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sortheight` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `heightStart` int DEFAULT NULL,
  `heightEnd` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sortheight`
--

LOCK TABLES `sortheight` WRITE;
/*!40000 ALTER TABLE `sortheight` DISABLE KEYS */;
INSERT INTO `sortheight` VALUES (1,'Dưới 10',0,10,'2021-10-12 13:15:45','2021-10-26 07:24:39'),(2,'10 - 20',10,20,'2021-10-12 13:15:45','2021-10-12 13:15:45'),(3,'20 - 30',20,30,'2021-10-12 13:15:45','2021-10-12 13:15:45'),(4,'Trên 30',30,0,'2021-10-12 13:15:45','2021-10-12 13:15:45');
/*!40000 ALTER TABLE `sortheight` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sortprice`
--

DROP TABLE IF EXISTS `sortprice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sortprice` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `pricetStart` int DEFAULT NULL,
  `pricetEnd` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sortprice`
--

LOCK TABLES `sortprice` WRITE;
/*!40000 ALTER TABLE `sortprice` DISABLE KEYS */;
INSERT INTO `sortprice` VALUES (1,'Dưới 100000',0,100000,'2021-10-12 13:17:20','2021-10-12 13:17:20'),(2,'100000 - 500000',100000,500000,'2021-10-12 13:17:20','2021-10-12 13:17:20'),(3,'500000 - 1000000',500000,1000000,'2021-10-12 13:17:20','2021-10-12 13:17:20'),(4,'Trên 1000000',1000000,0,'2021-10-12 13:17:20','2021-10-26 07:28:47');
/*!40000 ALTER TABLE `sortprice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `spinning`
--

DROP TABLE IF EXISTS `spinning`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `spinning` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_user` int DEFAULT NULL,
  `money` int DEFAULT '0',
  `total` int DEFAULT '0',
  `remaining` int DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `spinning_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `person` (`id_per`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `spinning`
--

LOCK TABLES `spinning` WRITE;
/*!40000 ALTER TABLE `spinning` DISABLE KEYS */;
INSERT INTO `spinning` VALUES (1,14,10599620,21,0),(2,18,2974220,6,0),(3,21,625807600,1252,1249),(4,22,0,0,0),(5,25,704000,1,1),(6,26,704000,1,0),(8,27,825000,2,0),(9,29,385000,1,0),(11,32,2438000,5,0),(12,33,0,0,0),(13,34,1281000,3,0);
/*!40000 ALTER TABLE `spinning` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uservoucher`
--

DROP TABLE IF EXISTS `uservoucher`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `uservoucher` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_use` int DEFAULT NULL,
  `id_voucher` int DEFAULT NULL,
  `use` int DEFAULT '0',
  `dates` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `uservoucher`
--

LOCK TABLES `uservoucher` WRITE;
/*!40000 ALTER TABLE `uservoucher` DISABLE KEYS */;
INSERT INTO `uservoucher` VALUES (1,14,1,1,'2021-11-09'),(3,14,2,1,'2021-11-09'),(4,18,1,1,'2021-12-10'),(5,18,2,1,'2021-12-10'),(6,18,5,1,'2021-12-10'),(7,14,16,1,'2022-01-14'),(8,19,16,1,'2022-01-14'),(9,14,18,1,'2022-01-14'),(10,33,16,1,'2022-01-14'),(11,34,16,1,'2022-01-15'),(12,18,19,1,'2022-01-15'),(13,21,19,1,'2022-03-28');
/*!40000 ALTER TABLE `uservoucher` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `voucher`
--

DROP TABLE IF EXISTS `voucher`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `voucher` (
  `id` int NOT NULL AUTO_INCREMENT,
  `codes` varchar(10) DEFAULT NULL,
  `names` varchar(1000) DEFAULT NULL,
  `timeStart` date DEFAULT NULL,
  `timeEnd` date DEFAULT NULL,
  `kindVoucher` varchar(10) DEFAULT NULL,
  `limits` int DEFAULT NULL,
  `detail` text,
  `sale` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `codes` (`codes`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `voucher`
--

LOCK TABLES `voucher` WRITE;
/*!40000 ALTER TABLE `voucher` DISABLE KEYS */;
INSERT INTO `voucher` VALUES (1,'WTAG7E3E','giám giá 20k cho tất cả sản phẩm','2021-11-11','2021-12-12','discount',NULL,'<p>gi&aacute;m gi&aacute; 20k cho tất cả sản phẩm</p>','10000'),(2,'D1YBGIZN','giảm giá 10k','2021-11-09','2021-12-12','discount',NULL,'<p>giảm gi&aacute; 10k cho tất cả c&aacute;c sản phẩm</p>','10000'),(3,'RNX2YC0N','voucher 10k tất cả sản phẩm','2021-11-11','2021-12-12','discount',NULL,'<p>voucher giảm gi&aacute; 10k cho tất cả sản phẩm</p>','10000'),(4,'9BRZ4DOJ','voucher test','2021-11-01','2021-11-03','discount',NULL,'<p>kh&ocirc;ng c&oacute; g&igrave; đ&acirc;u hehe</p>','10000'),(5,'123ABC','giám giá 20k cho tất cả sản phẩm','2021-11-02','2021-12-12','discount',NULL,'<p>giảm gi&aacute; 20000 cho&nbsp; tất cả c&aacute;c sản phẩm trong cửa h&agrave;ng</p>','20000'),(6,'RX26NGRE','giám giá 10k cho tất cả sản phẩm','2021-11-26','2021-11-30','discount',NULL,'<p>giảm gi&aacute; 10k cho tất cả sản phẩm</p>','10000'),(11,'PVLPDCCR','giám giá 10k cho tất cả sản phẩm','2021-11-02','2021-11-30','discount',NULL,'<p>giảm gi&aacute; 10k cho tất cả sản phẩm</p>','10000'),(12,'2SFXXL3Z','giám giá 10k cho tất cả sản phẩm','2021-11-26','2021-11-30','discount',NULL,'<p>giảm gi&aacute; 10k cho tất cả s&aacute;n phẩm</p>','10000'),(13,'6GKHGPT9','Voucher giảm giá 50k','2021-12-01','2021-12-31','discount',10,'<p>voucher giảm gi&aacute; 50k cho tất cả c&aacute;c sản phấm trong shop</p>','50000'),(14,'99K1VLF6','voucher giảm giá 50k','2021-12-01','2021-12-09','discount',10,'<p>voucher giảm gi&aacute; 50k cho tất cả sản phẩm</p>','50000'),(15,'KE93TDRE','voucher giảm giá 50k','2021-12-01','2022-01-08','discount',NULL,'<p>giảm gi&aacute; 50k cho tất cả c&aacute;c sản phẩm</p>','50000'),(16,'YVP3RFL4','voucher giảm giá 50k','2021-12-01','2022-01-27','discount',NULL,'<p>Voucher gi&aacute;m gi&aacute; 50k cho tất cả sản phẩm trong shop</p>','50000'),(17,'1RITVYJ4','voucher giảm giá 50k','2021-12-08','2021-12-30','discount',NULL,'<p>voucher giảm gi&aacute; 50k cho mọi sản phẩm</p>','50000'),(18,'IHWNF5SS','giám giá 100k cho tất cả sản phẩm','2021-12-10','2022-01-22','discount',NULL,'<p>giảm gi&aacute; 100k cho tất cả sản phẩm</p>','100000'),(19,'551VP3A6','giám giá 20k cho tất cả sản phẩm','2022-01-01','2022-06-24','discount',NULL,'<p>&aacute;d</p>','20000');
/*!40000 ALTER TABLE `voucher` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-19  1:11:11
