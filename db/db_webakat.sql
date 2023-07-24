/*
SQLyog Enterprise - MySQL GUI v6.5
MySQL - 5.7.17-log : Database - db_bodar
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

create database if not exists `db_bodar`;

USE `db_bodar`;

/*Table structure for table `tb_about` */

DROP TABLE IF EXISTS `tb_about`;

CREATE TABLE `tb_about` (
  `aboutID` int(11) NOT NULL AUTO_INCREMENT,
  `aboutTitle` varchar(355) COLLATE utf8_unicode_ci DEFAULT NULL,
  `aboutDesctip` text COLLATE utf8_unicode_ci,
  `topNo` int(11) DEFAULT NULL,
  `aboutImg` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `langID` int(1) DEFAULT NULL,
  `status_id` int(1) DEFAULT NULL,
  `user_add` int(11) DEFAULT NULL,
  `date_add` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`aboutID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tb_about` */

insert  into `tb_about`(`aboutID`,`aboutTitle`,`aboutDesctip`,`topNo`,`aboutImg`,`langID`,`status_id`,`user_add`,`date_add`) values (1,'Our platform takes away the hard process of creating your website','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit eum illum tempora? Ducimus eum culpa voluptates dolorem dolorum et sit nisi, mollitia animi porro fuga sequi, molestias repellat excepturi nobis eum culpa voluptates dolorem dolorum et.',1,'img/about/teamLead.jpeg',1,1,1,'2021-02-26 16:44:00'),(2,'Eng','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit eum illum tempora? Ducimus eum culpa voluptates dolorem dolorum et sit nisi, mollitia animi porro fuga sequi, molestias repellat excepturi nobis eum culpa voluptates dolorem dolorum et.',1,'img/about/teamLead.jpeg',2,1,1,'2021-02-26 16:44:00'),(3,'asdasd ສ ','asdasdsdsdsd',5,'img/about/20210226220206Untitled.png',1,1,2,'2021-02-26 22:25:42'),(4,'້້ຶ້ຶກຫດຫກດ','ກຫດຫກດຫກດຫກ',3,'',1,1,2,'2023-07-21 12:11:50');

/*Table structure for table `tb_client` */

DROP TABLE IF EXISTS `tb_client`;

CREATE TABLE `tb_client` (
  `clientID` int(11) NOT NULL AUTO_INCREMENT,
  `clientNo` int(11) DEFAULT NULL,
  `clientTitle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `clientDescript` varchar(355) COLLATE utf8_unicode_ci DEFAULT NULL,
  `clientName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `clientPosition` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `clientImg` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `titleType` int(1) DEFAULT NULL,
  `langID` int(1) DEFAULT NULL,
  `status_id` int(1) DEFAULT NULL,
  `user_add` int(1) DEFAULT NULL,
  `date_add` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`clientID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tb_client` */

insert  into `tb_client`(`clientID`,`clientNo`,`clientTitle`,`clientDescript`,`clientName`,`clientPosition`,`clientImg`,`titleType`,`langID`,`status_id`,`user_add`,`date_add`) values (1,NULL,'Loved By Our Clients','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.',NULL,NULL,NULL,1,1,1,1,'2021-02-17 16:54:42'),(2,1,NULL,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis magni, quisquam, accusantium dolores atque, doloribus odit minus maiores sunt mollitia consequatur, soluta quasi.','Sunny Khan','Head of Design, Company CEO','img/test-img/2.jpg',0,1,1,1,'2021-02-17 16:55:50'),(3,2,NULL,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis magni, quisquam, accusantium dolores atque, doloribus odit minus maiores sunt mollitia consequatur, soluta quasi.','Ajoy Das','Head of Idea, Company CEO','img/test-img/2.jpg',0,1,1,1,'2021-02-17 16:55:52'),(4,3,NULL,'dfsdfsdfsdf','sfdsf','fgfsdgfdg',NULL,0,1,1,1,'2021-02-17 17:04:48'),(5,4,NULL,'654645645','erfgfddf','56yghfsdgf',NULL,0,1,1,1,'2021-02-17 17:04:49'),(6,5,NULL,'hbghfg','hdgg','gfhgfh',NULL,0,1,1,1,'2021-02-17 17:05:18');

/*Table structure for table `tb_contact` */

DROP TABLE IF EXISTS `tb_contact`;

CREATE TABLE `tb_contact` (
  `contactID` int(11) NOT NULL AUTO_INCREMENT,
  `contactTitle` varchar(255) DEFAULT NULL,
  `contactDescript` varchar(355) DEFAULT NULL,
  `contactName` varchar(255) DEFAULT NULL,
  `contactEmail` varchar(255) DEFAULT NULL,
  `contactSubject` varchar(255) DEFAULT NULL,
  `contactMessage` varchar(355) DEFAULT NULL,
  `contactTel` varchar(200) DEFAULT NULL,
  `btnSend` varchar(100) DEFAULT NULL,
  `titleType` int(1) DEFAULT NULL,
  `ipaddress` varchar(20) DEFAULT NULL,
  `macaddress` varchar(20) DEFAULT NULL,
  `langID` int(11) DEFAULT NULL,
  `status_id` int(1) DEFAULT NULL,
  `user_add` int(11) DEFAULT NULL,
  `date_add` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`contactID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_contact` */

insert  into `tb_contact`(`contactID`,`contactTitle`,`contactDescript`,`contactName`,`contactEmail`,`contactSubject`,`contactMessage`,`contactTel`,`btnSend`,`titleType`,`ipaddress`,`macaddress`,`langID`,`status_id`,`user_add`,`date_add`) values (1,'Contact With Us','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.','Full name','Email','Subject','Message','Tel','Send Message',1,NULL,NULL,2,1,1,'2021-02-18 09:48:21'),(2,'ຕິດຕໍ່ພວກເຮົາ','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.','ຊື່ ແລະ ນາມສະກຸນ','ອີເມວ','ຫົວຂໍ້','ຂໍ້ຄວາມ','ເບີໂທ','ສົ່ງຂໍ້ຄວາມ',1,NULL,NULL,1,1,1,'2021-02-18 09:49:35');

/*Table structure for table `tb_contact_modules` */

DROP TABLE IF EXISTS `tb_contact_modules`;

CREATE TABLE `tb_contact_modules` (
  `contactID` int(11) NOT NULL AUTO_INCREMENT,
  `contactTitle1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contactTitle2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `discript` varchar(355) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emailText` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `buttonEmail` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `langID` int(1) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `user_add` int(11) DEFAULT NULL,
  `date_add` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`contactID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tb_contact_modules` */

insert  into `tb_contact_modules`(`contactID`,`contactTitle1`,`contactTitle2`,`discript`,`emailText`,`buttonEmail`,`langID`,`status_id`,`user_add`,`date_add`) values (1,'ຫາກມີຄວາມສົນໃຈ ກະລຸນາຕິດຕໍ່ພວກເຮົາ','ຕິດຕໍ່ຫາພວກເຮົາໄດ້ງ່າຍໆ.','ຕິດຕໍ່ຫາພວກເຮົາໄດ້ງ່າຍໆ.','ປ້ອນອີເມວຂອງທ່ານ','SUBSCRIBE',1,1,1,'2021-02-17 11:55:55'),(2,'CONTACT US NOW IF YOU HAVE ANY QUESTION','Get in Touch with us so Easy.','Lorem ipsum dolor sit amet, adipisicing elit. Ratione provident omnis iusto, veniam libero accusamus esse ab, enim temporibus.','Enter your Email','SUBSCRIBE',2,1,1,'2021-02-17 11:54:25');

/*Table structure for table `tb_faq` */

DROP TABLE IF EXISTS `tb_faq`;

CREATE TABLE `tb_faq` (
  `faqID` int(11) NOT NULL AUTO_INCREMENT,
  `faqTitle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `faqDescript` varchar(355) COLLATE utf8_unicode_ci DEFAULT NULL,
  `topNo` int(11) DEFAULT NULL,
  `faqImg` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `titleType` int(11) DEFAULT NULL,
  `langID` int(11) DEFAULT NULL,
  `user_add` int(11) DEFAULT NULL,
  `date_add` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`faqID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tb_faq` */

insert  into `tb_faq`(`faqID`,`faqTitle`,`faqDescript`,`topNo`,`faqImg`,`status_id`,`titleType`,`langID`,`user_add`,`date_add`) values (1,'Frequently Questions hhhh','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.',0,NULL,1,1,1,2,'2021-02-26 22:44:09'),(2,'What are the business advisory company?','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore omnis quaerat nostrum, pariatur ipsam sunt accusamus enim necessitatibus est fugiat, assumenda dolorem, deleniti corrupti cupiditate ipsum, dolorum voluptatum esse error?',1,NULL,1,0,1,1,'2021-02-17 15:43:41'),(3,'Research is What Makes an Effective Business Plan?','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore omnis quaerat nostrum, pariatur ipsam sunt accusamus enim necessitatibus est fugiat, assumenda dolorem, deleniti corrupti cupiditate ipsum, dolorum voluptatum esse error?',2,NULL,1,0,1,2,'2023-07-20 22:21:34'),(4,'AAAAA','AAAAAAAAA',4,'',1,0,1,2,'2023-07-21 12:12:35');

/*Table structure for table `tb_features` */

DROP TABLE IF EXISTS `tb_features`;

CREATE TABLE `tb_features` (
  `featuresID` int(11) NOT NULL AUTO_INCREMENT,
  `featureTitle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `featureDescript` varchar(355) COLLATE utf8_unicode_ci DEFAULT NULL,
  `topNo` int(11) DEFAULT NULL,
  `featureImg` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `titleType` int(11) DEFAULT NULL,
  `langID` int(11) DEFAULT NULL,
  `user_add` int(11) DEFAULT NULL,
  `date_add` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`featuresID`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tb_features` */

insert  into `tb_features`(`featuresID`,`featureTitle`,`featureDescript`,`topNo`,`featureImg`,`status_id`,`titleType`,`langID`,`user_add`,`date_add`) values (1,'ດກດກດກ','ບໍລິສັດແມ່ນທຳໜ້າທີ່ເປັນທີ່ປຶກສາ ແລະ ພັດທະນາ ແລະ ອອກແບບລະບົບໂປຣແກຣມ ແລະ ສາມາດສະໜອງອຸປະກອນໄອທີໄດ້',0,'',1,0,1,2,'2023-07-21 12:09:08'),(2,'Go Live in Minutes','Lorem ipsum dolor sit amet, adipiscing elit. Nulla neque quam, maxi ut ac cu msan ut, posuere sit Lorem ipsum qu.',1,'img/icons/corporate/1.svg',1,0,1,1,'2021-02-17 00:00:00'),(3,'Manage like A Pro','Lorem ipsum dolor sit amet, adipiscing elit. Nulla neque quam, maxi ut ac cu msan ut, posuere sit Lorem ipsum qu.',2,'img/icons/corporate/2.svg',1,0,1,1,'2021-02-17 11:24:39'),(4,'Scale to Success','Lorem ipsum dolor sit amet, consectetur elit. Nulla neque quam, maxi ut ac cu msan ut, posuere sit Lorem ipsum qu.',3,'img/icons/corporate/3.svg',1,0,1,1,'2021-02-17 11:24:40'),(5,'teststst','Lorem ipsum dolor sit amet, adipiscing elit. Nulla neque quam, maxi ut ac cu msan ut, posuere sit Lorem ipsum qu.',0,'img/features/20210226130256Untitled.png',1,0,2,2,'2023-07-21 12:08:35'),(6,'Go Live in Minutes eng','Lorem ipsum dolor sit amet, adipiscing elit. Nulla neque quam, maxi ut ac cu msan ut, posuere sit Lorem ipsum qu.',1,'img/icons/corporate/1.svg',1,0,2,1,'2021-02-17 11:47:31'),(7,'Manage like A Pro eng','Lorem ipsum dolor sit amet, adipiscing elit. Nulla neque quam, maxi ut ac cu msan ut, posuere sit Lorem ipsum qu.',2,'img/icons/corporate/2.svg',1,0,2,1,'2021-02-17 11:47:31'),(8,'Scale to Success eng ddddd','Lorem ipsum dolor sit amet, adipiscing elit. Nulla neque quam, maxi ut ac cu msan ut, posuere sit Lorem ipsum qu.',3,'img/icons/corporate/3.svg',1,1,2,2,'2021-02-26 13:42:45'),(9,'ທົດສອບ','ທົດສອບທົດສອບທົດສອບທົດສອບ',5,'20210225Untitled.png',1,1,1,2,'2021-02-26 13:42:34'),(10,'ກຫດກຫ','ຫກດຫກດ',6,'img/features/20210225Untitled.png',1,0,2,2,'2021-02-25 16:14:31'),(11,'ຫັກັຫກ','ຫັກຫັກ',9,'img/features/20210225Untitled.png',1,0,1,2,'2021-02-25 16:16:21'),(12,'sadsasad','sadasdsad',10,'img/features/20210225Untitled.png',1,0,1,2,'2021-02-25 16:18:25'),(13,'sdfsdf','sdfsdf',11,'img/features/20210225Untitled.png',1,0,1,2,'2021-02-25 16:19:14'),(14,'asfasf','asfasf',55,'img/features/20210225Untitled.png',1,0,1,2,'2021-02-25 16:28:40'),(15,'dsfsdf','sdfsdfsd',99,'img/features/20210225Untitled.png',1,0,2,2,'2021-02-25 16:30:04'),(16,'asdasdsaasdas','asdasdsad',99,'',1,0,1,2,'2021-02-25 16:30:38'),(17,'asdas','asdasd',999,'img/features/20210225160247Untitled.png',1,0,1,2,'2021-02-25 16:31:47'),(18,'fdsfsadfsad','sdafsdafs',55,'img/features/20210225160212Untitled.png',1,0,1,2,'2021-02-25 16:38:12');

/*Table structure for table `tb_info` */

DROP TABLE IF EXISTS `tb_info`;

CREATE TABLE `tb_info` (
  `infoNo` int(11) NOT NULL AUTO_INCREMENT,
  `info_id` int(1) NOT NULL,
  `info_name` varchar(255) NOT NULL,
  `info_addr` varchar(255) NOT NULL,
  `info_tel` varchar(255) NOT NULL,
  `info_owner` varchar(255) NOT NULL,
  `info_logo` varchar(255) NOT NULL DEFAULT '',
  `bill_no` varchar(255) DEFAULT NULL,
  `bill_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `regNo` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `exp_num` int(11) DEFAULT NULL,
  `regkey` varchar(100) DEFAULT NULL,
  `reglicense` varchar(255) DEFAULT NULL,
  `printReceive` int(1) DEFAULT NULL,
  `saveInfoCus` int(1) DEFAULT NULL,
  `shopType` int(11) DEFAULT '1',
  `status_id` int(11) DEFAULT '1',
  `sb` varchar(50) DEFAULT NULL,
  `expire_day` int(11) DEFAULT NULL,
  `leave_day` int(11) DEFAULT NULL,
  `interfaceUI` int(1) DEFAULT '1',
  `touchscreen` int(1) DEFAULT '1',
  `dbch` int(1) DEFAULT '1',
  PRIMARY KEY (`infoNo`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

/*Data for the table `tb_info` */

insert  into `tb_info`(`infoNo`,`info_id`,`info_name`,`info_addr`,`info_tel`,`info_owner`,`info_logo`,`bill_no`,`bill_date`,`regNo`,`exp_num`,`regkey`,`reglicense`,`printReceive`,`saveInfoCus`,`shopType`,`status_id`,`sb`,`expire_day`,`leave_day`,`interfaceUI`,`touchscreen`,`dbch`) values (1,1,'AKAT SOLUTION SOLE CO.,LTD','c2hXUVROWHhxNTNBYWN2cE5FRlY4dz09','UnkvTnhya2xqU0hKZE1GRVpBS3RvZz09','eEpZRW83TVN5cC9VWU5QS1ZBaGZza0tYbldQemxFTVdIWmtyekxqR1RTMD0=','20190216chamichi.jpeg','111','2014-03-22 14:04:02','bbf05c5354005e1e339c0e7f1c5c0953',1,'ZS9Ba3A4dWExYmRWZkdOVUpGVjNHbFdvZHFxZXY2VlhvUDZ5NGx6RVE4R1RDajBPbzNlWm14ZnlOMkdxYzZ3Zw==','Y0xqWDl2TXU0b1UxMWlVY1Yvb1JmNWNsZ2V4OCtFUlV5UzBIQmRBRkdiTT0=',1,1,1,1,'NUVIbmMrZFJxSDhibFRNR2NYQVpkZz09',90,15,1,1,1);

/*Table structure for table `tb_lang` */

DROP TABLE IF EXISTS `tb_lang`;

CREATE TABLE `tb_lang` (
  `langID` int(11) NOT NULL AUTO_INCREMENT,
  `langName` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `langShort` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`langID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tb_lang` */

insert  into `tb_lang`(`langID`,`langName`,`langShort`) values (1,'Lao','LA'),(2,'English','EN');

/*Table structure for table `tb_member` */

DROP TABLE IF EXISTS `tb_member`;

CREATE TABLE `tb_member` (
  `memberID` int(11) NOT NULL AUTO_INCREMENT,
  `teamID` int(11) DEFAULT NULL,
  `showNo` int(11) DEFAULT NULL,
  `fullName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `memDescript` varchar(355) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mbImg` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `langID` int(1) DEFAULT NULL,
  `status_id` int(1) DEFAULT NULL,
  `user_add` int(11) DEFAULT NULL,
  `date_add` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`memberID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tb_member` */

insert  into `tb_member`(`memberID`,`teamID`,`showNo`,`fullName`,`memDescript`,`mbImg`,`position`,`facebook`,`whatsapp`,`tel`,`langID`,`status_id`,`user_add`,`date_add`) values (1,1,1,'Randy Crishen','ຜູ້ສ້າງຕັ້ງບໍລິສັດ AKAT SOLUTION SOLE','img/members/pp.jfif','Company CEO','http://facebook.com/aaa','+8562022222','+8562022222',1,1,1,'2021-02-27 14:12:37'),(2,1,2,'Monica Ashker','ທທທທທທທທທທທທທທທທທທທ',NULL,'Web Designer','http://facebook.com/aaa','+8562022222','+8562022222',1,1,2,'2021-02-27 14:23:25'),(3,1,3,'Tollay Ramzomi',NULL,NULL,'Web Designer','http://facebook.com/aaa','+8562022222','+8562022222',1,1,1,'2021-02-27 14:12:34'),(4,1,4,'Jacke Wilson',NULL,NULL,'Marketing Specialist','http://facebook.com/aaa','+8562022222','+8562022222',1,1,1,'2021-02-27 14:11:33'),(5,1,5,'Randy Crishen',NULL,NULL,'Marketing Specialist','http://facebook.com/aaa','+8562022222','+8562022222',1,1,1,'2021-02-27 14:08:07'),(6,1,6,'Monica Ashker','dasdsadasd',NULL,'Marketing Specialist','http://facebook.com/aaa','+8562022222','+8562022222',1,1,2,'2021-02-27 14:22:51'),(7,1,7,'xzczxc','dsfsdfsd','img/members/20210227140201Untitled.png','sadsa','dfsdfsdf','sdfdsfdsf','sdfdsfs',1,3,2,'2021-02-27 14:23:35');

/*Table structure for table `tb_member_detail` */

DROP TABLE IF EXISTS `tb_member_detail`;

CREATE TABLE `tb_member_detail` (
  `mdID` int(11) NOT NULL AUTO_INCREMENT,
  `memberID` int(11) DEFAULT NULL,
  `memTitle` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `langID` int(1) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `user_add` int(11) DEFAULT NULL,
  `date_add` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`mdID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tb_member_detail` */

insert  into `tb_member_detail`(`mdID`,`memberID`,`memTitle`,`langID`,`status_id`,`user_add`,`date_add`) values (1,1,'Mobile developer',1,1,1,'2021-02-17 15:09:03'),(2,1,'Web programming',1,1,1,'2021-02-17 15:09:06'),(3,0,'ແຫັກັຫກັຫ',1,1,2,'2021-02-27 14:41:47'),(4,0,'ກດຫກດຫກດ',1,1,2,'2021-02-27 14:41:55'),(5,0,'ັຫກັຫກັ',1,1,2,'2021-02-27 14:42:32'),(6,0,'ກຫກຫກດຫ',1,1,2,'2021-02-27 14:43:58'),(7,0,'asdasdasdasd',1,1,2,'2021-02-27 14:44:34'),(8,1,'asdasdasda',1,1,2,'2021-02-27 14:45:16'),(9,1,'sadasdasdasd',2,1,2,'2021-02-27 14:45:34'),(10,6,'xasfdfds llll',1,2,2,'2021-02-27 14:52:31');

/*Table structure for table `tb_menu` */

DROP TABLE IF EXISTS `tb_menu`;

CREATE TABLE `tb_menu` (
  `menuID` int(11) NOT NULL AUTO_INCREMENT,
  `menuNo` int(11) DEFAULT NULL,
  `langID` int(11) DEFAULT NULL,
  `menuTitle` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `menuLink` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status_id` int(1) DEFAULT NULL,
  `user_add` int(11) DEFAULT NULL,
  `date_add` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`menuID`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tb_menu` */

insert  into `tb_menu`(`menuID`,`menuNo`,`langID`,`menuTitle`,`menuLink`,`status_id`,`user_add`,`date_add`) values (1,1001,2,'Home','index',1,1,'2021-01-23 14:15:43'),(2,1001,1,'ໜ້າຫຼັກ','index',1,1,'2021-01-23 14:15:42'),(3,1002,2,'About us','about/us',1,1,'2021-02-11 15:52:48'),(4,1003,2,'service','service/service',1,1,'2021-02-11 15:56:39'),(5,1004,2,'FAQ','faq/faq',1,1,'2021-02-11 16:40:43'),(6,1005,2,'Pricing','price/pricing',1,1,'2021-02-11 16:08:55'),(7,1006,2,'Contract','contact/contact',1,1,'2021-02-14 20:43:12'),(8,1007,2,'Language','language',1,1,'2021-01-23 14:15:47'),(9,1008,2,'Lao','lao',1,1,'2021-01-23 14:17:32'),(10,1009,2,'English','eng',1,1,'2021-01-23 14:17:32'),(11,1010,2,'chat','chat',1,1,'2021-01-23 14:17:33'),(12,1002,1,'ກ່ຽວກັບພວກເຮົາ','about/us',1,1,'2021-02-11 15:53:35'),(13,1003,1,'ບໍລິການ','service/service',1,1,'2021-02-11 15:56:36'),(14,1004,1,'ຖາມ-ຕອບ','faq/faq',1,1,'2021-02-11 16:40:42'),(15,1005,1,'ລາຄາສິນຄ້າ','price/pricing',1,1,'2021-02-11 16:08:57'),(16,1006,1,'ຕິດຕໍ່ພວກເຮົາ','contact/contact',1,1,'2021-02-14 20:43:14'),(17,1007,1,'ພາສາ','language',1,1,'2021-01-23 14:20:22'),(18,1008,1,'ລາວ','lao',1,1,'2021-01-23 14:20:24'),(19,1009,1,'ອັງກິດ','eng',1,1,'2021-01-23 14:20:26'),(20,1010,1,'ແຊັດ','chat',1,1,'2021-01-23 14:20:28'),(21,1011,2,'Donwload','download/download',1,1,'2021-02-18 10:24:11'),(22,1011,1,'ດາວໂຫຼດ','download/download',1,1,'2021-02-15 17:53:01');

/*Table structure for table `tb_partner` */

DROP TABLE IF EXISTS `tb_partner`;

CREATE TABLE `tb_partner` (
  `partnerID` int(11) NOT NULL AUTO_INCREMENT,
  `showNo` int(11) DEFAULT NULL,
  `partnerTitle` varchar(255) DEFAULT NULL,
  `partnerDescript` varchar(355) DEFAULT NULL,
  `partnerName` varchar(255) DEFAULT NULL,
  `partnerLogo` varchar(255) DEFAULT NULL,
  `partnerURL` varchar(255) DEFAULT NULL,
  `langID` int(1) DEFAULT NULL,
  `titleType` int(1) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `user_add` int(11) DEFAULT NULL,
  `date_add` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`partnerID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `tb_partner` */

insert  into `tb_partner`(`partnerID`,`showNo`,`partnerTitle`,`partnerDescript`,`partnerName`,`partnerLogo`,`partnerURL`,`langID`,`titleType`,`status_id`,`user_add`,`date_add`) values (1,0,'Our Powerful Partners','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.',NULL,NULL,NULL,1,1,1,1,'2021-02-28 12:05:23'),(2,0,'Our Powerful Partners','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.',NULL,NULL,NULL,2,1,1,1,'2021-02-28 12:05:17'),(3,1,NULL,NULL,'Lao Lottery Development','img/partners/laolotto.png','http://www.laoloto.org/',1,0,1,1,'2021-02-28 12:05:22'),(4,1,NULL,NULL,'Lao Lottery Development','img/partners/laolotto.png','http://www.laoloto.org/',2,0,1,1,'2021-02-18 10:45:59'),(5,2,NULL,NULL,'Ministry of Finance','img/partners/1.png',NULL,1,0,1,1,'2021-02-18 16:12:18'),(6,2,NULL,NULL,'Ministry of Finance','img/partners/1.png',NULL,2,0,1,1,'2021-02-18 16:12:20');

/*Table structure for table `tb_price` */

DROP TABLE IF EXISTS `tb_price`;

CREATE TABLE `tb_price` (
  `priceID` int(11) NOT NULL AUTO_INCREMENT,
  `priceTitle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `priceDescript` varchar(355) COLLATE utf8_unicode_ci DEFAULT NULL,
  `topNo` int(11) DEFAULT NULL,
  `priceImg` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `duration` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `titleType` int(11) DEFAULT NULL,
  `langID` int(11) DEFAULT NULL,
  `user_add` int(11) DEFAULT NULL,
  `date_add` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`priceID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tb_price` */

insert  into `tb_price`(`priceID`,`priceTitle`,`priceDescript`,`topNo`,`priceImg`,`price`,`duration`,`status_id`,`titleType`,`langID`,`user_add`,`date_add`) values (1,'Our Pricing Plans','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.',NULL,NULL,NULL,NULL,1,1,1,1,'2021-02-17 16:07:08'),(2,'BEGGINER',NULL,1,NULL,'Free','Always',1,0,1,1,'2021-02-17 16:08:37'),(3,'BUSINESS',NULL,2,NULL,'$24.99','Per Month',1,0,1,1,'2021-02-17 16:09:14'),(4,'PROFESSIONAL',NULL,3,NULL,'$84.99','Per Month',1,0,1,1,'2021-02-17 16:09:14'),(5,'PROFESSIONAL _sss',NULL,4,NULL,'$24.99','Per Month',1,0,1,1,'2021-02-17 16:42:21');

/*Table structure for table `tb_price_detail` */

DROP TABLE IF EXISTS `tb_price_detail`;

CREATE TABLE `tb_price_detail` (
  `pdID` int(11) NOT NULL AUTO_INCREMENT,
  `priceID` int(11) DEFAULT NULL,
  `pdTitle` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `langID` int(1) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `user_add` int(11) DEFAULT NULL,
  `date_add` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`pdID`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tb_price_detail` */

insert  into `tb_price_detail`(`pdID`,`priceID`,`pdTitle`,`langID`,`status_id`,`user_add`,`date_add`) values (1,2,'250GB Bandwidth',1,1,1,'2021-02-17 16:10:20'),(2,2,'08 Email Account',1,1,1,'2021-02-17 16:10:20'),(3,2,'Unlimited Database',1,1,1,'2021-02-17 16:10:20'),(4,2,'10GB Free Disk',1,1,1,'2021-02-17 16:10:20'),(5,2,'24/7 Support',1,1,1,'2021-02-17 16:10:20'),(6,3,'250GB Bandwidth',1,1,1,'2021-02-17 16:10:21'),(7,3,'08 Email Account',1,1,1,'2021-02-17 16:10:21'),(8,3,'Unlimited Database',1,1,1,'2021-02-17 16:10:21'),(9,3,'10GB Free Disk',1,1,1,'2021-02-17 16:10:21'),(10,3,'24/7 Support',1,1,1,'2021-02-17 16:10:21'),(11,4,'250GB Bandwidth',1,1,1,'2021-02-17 16:10:21'),(12,4,'08 Email Account',1,1,1,'2021-02-17 16:10:22'),(13,4,'Unlimited Database',1,1,1,'2021-02-17 16:10:22'),(14,4,'10GB Free Disk',1,1,1,'2021-02-17 16:10:22'),(15,4,'24/7 Support',1,1,1,'2021-02-17 16:10:22');

/*Table structure for table `tb_register` */

DROP TABLE IF EXISTS `tb_register`;

CREATE TABLE `tb_register` (
  `regId` int(11) NOT NULL AUTO_INCREMENT,
  `fullName` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pass` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ipaddress` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `macaddress` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`regId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tb_register` */

/*Table structure for table `tb_service_detail` */

DROP TABLE IF EXISTS `tb_service_detail`;

CREATE TABLE `tb_service_detail` (
  `sdID` int(11) NOT NULL AUTO_INCREMENT,
  `serviceID` int(11) DEFAULT NULL,
  `serviceTitle` varchar(255) DEFAULT NULL,
  `langID` int(11) DEFAULT NULL,
  `topNo` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `user_add` int(11) DEFAULT NULL,
  `date_add` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`sdID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/*Data for the table `tb_service_detail` */

insert  into `tb_service_detail`(`sdID`,`serviceID`,`serviceTitle`,`langID`,`topNo`,`status_id`,`user_add`,`date_add`) values (1,3,'Managed Sucre Backups',1,2,1,1,'2021-02-26 16:00:40'),(2,3,'Advanced Caching',1,1,1,1,'2021-02-26 16:00:52'),(3,3,'Unlimited Applications',1,3,1,1,'2021-02-26 16:00:52'),(4,3,'24/7 Expert Support',1,4,1,1,'2021-02-26 15:16:36'),(5,3,'Optimized Stack',1,5,1,1,'2021-02-26 15:16:36'),(6,3,'sadasdsadsa',1,6,1,2,'2021-02-26 16:20:29'),(7,3,'asdasdsa',1,6,1,2,'2021-02-26 16:20:29'),(8,3,'asdasdasdasdasd',1,6,1,2,'2021-02-26 16:20:30'),(9,3,'asdasdasdasd',1,5,1,2,'2021-02-26 16:20:30'),(10,3,'sadasdasd dfdfdfdf  ກດຫກດ',2,1,3,2,'2021-02-26 16:22:42');

/*Table structure for table `tb_services` */

DROP TABLE IF EXISTS `tb_services`;

CREATE TABLE `tb_services` (
  `serviceID` int(11) NOT NULL AUTO_INCREMENT,
  `serviceTitle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `serviceDescript` text COLLATE utf8_unicode_ci,
  `topNo` int(11) DEFAULT NULL,
  `serviceImg` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `titleType` int(11) DEFAULT NULL,
  `langID` int(11) DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_add` int(11) DEFAULT NULL,
  `date_add` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`serviceID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tb_services` */

insert  into `tb_services`(`serviceID`,`serviceTitle`,`serviceDescript`,`topNo`,`serviceImg`,`status_id`,`titleType`,`langID`,`url`,`user_add`,`date_add`) values (1,'ຜະລິດຕະພັນ ແລະ ການບໍລິການຂອງພວກເຮົາ','',0,NULL,1,1,1,NULL,1,'2021-02-17 12:09:12'),(2,'ໂປຼແກຼມຂາຍໜ້າຮ້ານ (POS)','ເປັນໂປຼແກຣມເປັນໂປຼແກຣມຂາຍໜ້າຮ້ານ ສ່ວນປະກອບຫຼັກໆຂອງລະບົບມີ ເຊັ່ນ: ລະບົບການຂາຍໜ້າຮ້ານ (POS) ລະບົບການຈັດຊື້ ລະບົບການຮັບເຂົ້າ ລະບົບການຂາຍອອກ ລະບົບສິນຄ້າຄົງເຫຼືອໃນສາງ ອອກບິນຂາຍ ທີ່ຮອງຮັບເຄື່ອງອ່ານບາໂຄດໂດຍ ລະບົບລາຍງານ ແລະ ເຄື່ອງພີມ Slip ໄດ້.',1,'img/product/pos-restaurants.jpg',1,0,1,NULL,1,'2021-02-17 13:15:32'),(3,'Akat Restaurant ດດດດ','ປຣແກມຮ້ານອາຫານແມ່ນເໝາະສຳລັບ ຜູ້ປະກອບການທີ່ກຳລັງເປີດຮ້ານອາຫານ ຫຼື ມີຮ້ານອາ ຫານແລ້ວແຕ່ມີຄວາມຕ້ອງການລະບົບເຂົ້າໃນການບໍລິຫານຈັດການຮ້ານອາຫານຈະເປັນໄປໄດ້ດວ້ຍຂະ ບວນການທີ່ສະດວກສະບາຍ ແລະ ວອ່ງໄວ ຖືກຕ້ອງ ຈະແຈ້ງ ແລະ ຊັດເຈນ\r\n- 1 dsasad\r\n- 2 sdasdsad\r\n',1,'img/product/pos-restaurants.jpg',1,0,1,NULL,2,'2021-02-26 15:03:42'),(4,'ະຳະຳະຳະ','ກເກຫເດກເດກເກດ',3,'',1,0,1,NULL,2,'2023-07-21 12:10:15');

/*Table structure for table `tb_status` */

DROP TABLE IF EXISTS `tb_status`;

CREATE TABLE `tb_status` (
  `status_id` int(11) NOT NULL,
  `statusText` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tb_status` */

insert  into `tb_status`(`status_id`,`statusText`) values (1,'Active'),(2,'Disble'),(3,'Del');

/*Table structure for table `tb_team` */

DROP TABLE IF EXISTS `tb_team`;

CREATE TABLE `tb_team` (
  `teamID` int(11) NOT NULL AUTO_INCREMENT,
  `teamTitle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `teamDescript` text COLLATE utf8_unicode_ci,
  `langID` int(1) DEFAULT NULL,
  `status_id` int(1) DEFAULT NULL,
  `user_add` int(11) DEFAULT NULL,
  `date_add` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`teamID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tb_team` */

insert  into `tb_team`(`teamID`,`teamTitle`,`teamDescript`,`langID`,`status_id`,`user_add`,`date_add`) values (1,'Our Awesome Team','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.',1,2,1,'2021-02-27 13:30:02'),(2,'eng','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.',2,2,2,'2021-02-27 08:20:54'),(3,'dadsda','asdadasdasdfsdfsdfsdfsdfsdfsdfsdfsdf',1,2,2,'2021-02-27 13:30:07'),(4,'sfsdf','fafsadf  fgdfgfdg',2,1,2,'2021-02-27 08:20:55'),(5,'kl;ldsf','dsgsdsdf',1,2,2,'2021-02-27 13:30:08'),(6,'adfsdf','afsdfs dfsdfsdfsd',1,1,2,'2021-02-27 13:30:08');

/*Table structure for table `tb_user` */

DROP TABLE IF EXISTS `tb_user`;

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `info_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `user_add` int(11) DEFAULT NULL,
  `date_add` timestamp NULL DEFAULT NULL,
  `pic` varchar(255) DEFAULT 'user_256.png',
  `pricesaleID` int(11) DEFAULT '1',
  `dbch` int(1) DEFAULT '1',
  PRIMARY KEY (`user_id`,`info_id`),
  KEY `role_id` (`role_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

/*Data for the table `tb_user` */

insert  into `tb_user`(`user_id`,`info_id`,`status_id`,`username`,`password`,`role_id`,`first_name`,`last_name`,`user_add`,`date_add`,`pic`,`pricesaleID`,`dbch`) values (1,1,3,'ta','c71de91b82983a4abb0e07a082f7c4a4',1,'super user','super user',NULL,'2018-01-01 00:00:00','user_256.png',0,1),(2,1,3,'admin','4fff982bfa610e71281dd375748c1087',2,'admin','amdin',NULL,'2018-01-01 00:00:00','user_256.png',0,1);

/*Table structure for table `tb_user_role` */

DROP TABLE IF EXISTS `tb_user_role`;

CREATE TABLE `tb_user_role` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `tb_user_role` */

insert  into `tb_user_role`(`role_id`,`role_name`) values (2,'Administrator'),(3,'Manage'),(1,'super user'),(4,'Sale'),(5,'Stock');

/*!50106 set global event_scheduler = 1*/;

/* Event structure for event `Test2` */

/*!50106 DROP EVENT IF EXISTS `Test2`*/;

DELIMITER $$

/*!50106 CREATE DEFINER=`root`@`localhost` EVENT `Test2` ON SCHEDULE EVERY 1 MINUTE STARTS '2021-01-04 11:51:00' ON COMPLETION NOT PRESERVE ENABLE DO BEGIN
	   INSERT INTO tb_test (testText) VALUES('Test001');
	END */$$
DELIMITER ;

/*Table structure for table `v_about` */

DROP TABLE IF EXISTS `v_about`;

/*!50001 DROP VIEW IF EXISTS `v_about` */;
/*!50001 DROP TABLE IF EXISTS `v_about` */;

/*!50001 CREATE TABLE `v_about` (
  `aboutID` int(11) NOT NULL DEFAULT '0',
  `aboutTitle` varchar(355) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `aboutDesctip` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `topNo` int(11) DEFAULT NULL,
  `aboutImg` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `langID` int(1) DEFAULT NULL,
  `status_id` int(1) DEFAULT NULL,
  `user_add` int(11) DEFAULT NULL,
  `date_add` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `statusText` varchar(255) DEFAULT NULL,
  `langName` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `langShort` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 */;

/*Table structure for table `v_faq` */

DROP TABLE IF EXISTS `v_faq`;

/*!50001 DROP VIEW IF EXISTS `v_faq` */;
/*!50001 DROP TABLE IF EXISTS `v_faq` */;

/*!50001 CREATE TABLE `v_faq` (
  `faqID` int(11) NOT NULL DEFAULT '0',
  `faqTitle` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `faqDescript` varchar(355) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `topNo` int(11) DEFAULT NULL,
  `faqImg` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `titleType` int(11) DEFAULT NULL,
  `langID` int(11) DEFAULT NULL,
  `user_add` int(11) DEFAULT NULL,
  `date_add` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `statusText` varchar(255) DEFAULT NULL,
  `langName` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `langShort` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 */;

/*Table structure for table `v_features` */

DROP TABLE IF EXISTS `v_features`;

/*!50001 DROP VIEW IF EXISTS `v_features` */;
/*!50001 DROP TABLE IF EXISTS `v_features` */;

/*!50001 CREATE TABLE `v_features` (
  `featuresID` int(11) NOT NULL DEFAULT '0',
  `featureTitle` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `featureDescript` varchar(355) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `topNo` int(11) DEFAULT NULL,
  `featureImg` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `statusText` varchar(255) DEFAULT NULL,
  `titleType` int(11) DEFAULT NULL,
  `langID` int(11) DEFAULT NULL,
  `langName` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `langShort` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_add` int(11) DEFAULT NULL,
  `date_add` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 */;

/*Table structure for table `v_member` */

DROP TABLE IF EXISTS `v_member`;

/*!50001 DROP VIEW IF EXISTS `v_member` */;
/*!50001 DROP TABLE IF EXISTS `v_member` */;

/*!50001 CREATE TABLE `v_member` (
  `memberID` int(11) NOT NULL DEFAULT '0',
  `teamID` int(11) DEFAULT NULL,
  `showNo` int(11) DEFAULT NULL,
  `fullName` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `memDescript` varchar(355) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `mbImg` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `langID` int(1) DEFAULT NULL,
  `status_id` int(1) DEFAULT NULL,
  `user_add` int(11) DEFAULT NULL,
  `date_add` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `statusText` varchar(255) DEFAULT NULL,
  `langName` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `langShort` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 */;

/*Table structure for table `v_member_detail` */

DROP TABLE IF EXISTS `v_member_detail`;

/*!50001 DROP VIEW IF EXISTS `v_member_detail` */;
/*!50001 DROP TABLE IF EXISTS `v_member_detail` */;

/*!50001 CREATE TABLE `v_member_detail` (
  `mdID` int(11) NOT NULL DEFAULT '0',
  `memberID` int(11) DEFAULT NULL,
  `memTitle` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `langID` int(1) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `user_add` int(11) DEFAULT NULL,
  `date_add` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `statusText` varchar(255) DEFAULT NULL,
  `langName` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `langShort` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 */;

/*Table structure for table `v_partner` */

DROP TABLE IF EXISTS `v_partner`;

/*!50001 DROP VIEW IF EXISTS `v_partner` */;
/*!50001 DROP TABLE IF EXISTS `v_partner` */;

/*!50001 CREATE TABLE `v_partner` (
  `partnerID` int(11) NOT NULL DEFAULT '0',
  `showNo` int(11) DEFAULT NULL,
  `partnerTitle` varchar(255) DEFAULT NULL,
  `partnerDescript` varchar(355) DEFAULT NULL,
  `partnerName` varchar(255) DEFAULT NULL,
  `partnerLogo` varchar(255) DEFAULT NULL,
  `partnerURL` varchar(255) DEFAULT NULL,
  `langID` int(1) DEFAULT NULL,
  `titleType` int(1) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `user_add` int(11) DEFAULT NULL,
  `date_add` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `statusText` varchar(255) DEFAULT NULL,
  `langName` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `langShort` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 */;

/*Table structure for table `v_services` */

DROP TABLE IF EXISTS `v_services`;

/*!50001 DROP VIEW IF EXISTS `v_services` */;
/*!50001 DROP TABLE IF EXISTS `v_services` */;

/*!50001 CREATE TABLE `v_services` (
  `serviceID` int(11) NOT NULL DEFAULT '0',
  `serviceTitle` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `serviceDescript` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `topNo` int(11) DEFAULT NULL,
  `serviceImg` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `titleType` int(11) DEFAULT NULL,
  `langID` int(11) DEFAULT NULL,
  `url` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_add` int(11) DEFAULT NULL,
  `date_add` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `langName` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `langShort` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `statusText` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 */;

/*Table structure for table `v_services_detail` */

DROP TABLE IF EXISTS `v_services_detail`;

/*!50001 DROP VIEW IF EXISTS `v_services_detail` */;
/*!50001 DROP TABLE IF EXISTS `v_services_detail` */;

/*!50001 CREATE TABLE `v_services_detail` (
  `sdID` int(11) NOT NULL DEFAULT '0',
  `serviceID` int(11) DEFAULT NULL,
  `serviceTitle` varchar(255) DEFAULT NULL,
  `langID` int(11) DEFAULT NULL,
  `topNo` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `user_add` int(11) DEFAULT NULL,
  `date_add` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `statusText` varchar(255) DEFAULT NULL,
  `langName` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `langShort` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 */;

/*Table structure for table `v_team` */

DROP TABLE IF EXISTS `v_team`;

/*!50001 DROP VIEW IF EXISTS `v_team` */;
/*!50001 DROP TABLE IF EXISTS `v_team` */;

/*!50001 CREATE TABLE `v_team` (
  `teamID` int(11) NOT NULL DEFAULT '0',
  `teamTitle` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `teamDescript` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `langID` int(1) DEFAULT NULL,
  `status_id` int(1) DEFAULT NULL,
  `user_add` int(11) DEFAULT NULL,
  `date_add` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `statusText` varchar(255) DEFAULT NULL,
  `langName` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `langShort` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 */;

/*Table structure for table `v_user` */

DROP TABLE IF EXISTS `v_user`;

/*!50001 DROP VIEW IF EXISTS `v_user` */;
/*!50001 DROP TABLE IF EXISTS `v_user` */;

/*!50001 CREATE TABLE `v_user` (
  `user_id` int(11) NOT NULL DEFAULT '0',
  `status_id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `info_name` varchar(255) NOT NULL,
  `info_addr` varchar(255) NOT NULL,
  `info_tel` varchar(255) NOT NULL,
  `info_owner` varchar(255) NOT NULL,
  `info_logo` varchar(255) NOT NULL DEFAULT '',
  `exp_num` int(11) DEFAULT NULL,
  `user_add` int(11) DEFAULT NULL,
  `date_add` timestamp NULL DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `printReceive` int(1) DEFAULT NULL,
  `pricesaleID` int(11) DEFAULT NULL,
  `saveInfoCus` int(1) DEFAULT NULL,
  `infoNo` int(11) NOT NULL DEFAULT '0',
  `shopType` int(11) DEFAULT NULL,
  `info_id` int(11) NOT NULL,
  `sb` varchar(50) DEFAULT NULL,
  `expire_day` int(11) DEFAULT NULL,
  `interfaceUI` int(1) DEFAULT NULL,
  `touchscreen` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 */;

/*View structure for view v_about */

/*!50001 DROP TABLE IF EXISTS `v_about` */;
/*!50001 DROP VIEW IF EXISTS `v_about` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_about` AS select `tb_about`.`aboutID` AS `aboutID`,`tb_about`.`aboutTitle` AS `aboutTitle`,`tb_about`.`aboutDesctip` AS `aboutDesctip`,`tb_about`.`topNo` AS `topNo`,`tb_about`.`aboutImg` AS `aboutImg`,`tb_about`.`langID` AS `langID`,`tb_about`.`status_id` AS `status_id`,`tb_about`.`user_add` AS `user_add`,`tb_about`.`date_add` AS `date_add`,`tb_status`.`statusText` AS `statusText`,`tb_lang`.`langName` AS `langName`,`tb_lang`.`langShort` AS `langShort` from ((`tb_about` join `tb_status` on((`tb_about`.`status_id` = `tb_status`.`status_id`))) join `tb_lang` on((`tb_lang`.`langID` = `tb_about`.`langID`))) */;

/*View structure for view v_faq */

/*!50001 DROP TABLE IF EXISTS `v_faq` */;
/*!50001 DROP VIEW IF EXISTS `v_faq` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_faq` AS select `tb_faq`.`faqID` AS `faqID`,`tb_faq`.`faqTitle` AS `faqTitle`,`tb_faq`.`faqDescript` AS `faqDescript`,`tb_faq`.`topNo` AS `topNo`,`tb_faq`.`faqImg` AS `faqImg`,`tb_faq`.`status_id` AS `status_id`,`tb_faq`.`titleType` AS `titleType`,`tb_faq`.`langID` AS `langID`,`tb_faq`.`user_add` AS `user_add`,`tb_faq`.`date_add` AS `date_add`,`tb_status`.`statusText` AS `statusText`,`tb_lang`.`langName` AS `langName`,`tb_lang`.`langShort` AS `langShort` from ((`tb_faq` join `tb_status` on((`tb_faq`.`status_id` = `tb_status`.`status_id`))) join `tb_lang` on((`tb_lang`.`langID` = `tb_faq`.`langID`))) */;

/*View structure for view v_features */

/*!50001 DROP TABLE IF EXISTS `v_features` */;
/*!50001 DROP VIEW IF EXISTS `v_features` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_features` AS select `tb_features`.`featuresID` AS `featuresID`,`tb_features`.`featureTitle` AS `featureTitle`,`tb_features`.`featureDescript` AS `featureDescript`,`tb_features`.`topNo` AS `topNo`,`tb_features`.`featureImg` AS `featureImg`,`tb_features`.`status_id` AS `status_id`,`tb_status`.`statusText` AS `statusText`,`tb_features`.`titleType` AS `titleType`,`tb_features`.`langID` AS `langID`,`tb_lang`.`langName` AS `langName`,`tb_lang`.`langShort` AS `langShort`,`tb_features`.`user_add` AS `user_add`,`tb_features`.`date_add` AS `date_add` from ((`tb_features` join `tb_lang` on((`tb_features`.`langID` = `tb_lang`.`langID`))) join `tb_status` on((`tb_features`.`status_id` = `tb_status`.`status_id`))) */;

/*View structure for view v_member */

/*!50001 DROP TABLE IF EXISTS `v_member` */;
/*!50001 DROP VIEW IF EXISTS `v_member` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_member` AS select `tb_member`.`memberID` AS `memberID`,`tb_member`.`teamID` AS `teamID`,`tb_member`.`showNo` AS `showNo`,`tb_member`.`fullName` AS `fullName`,`tb_member`.`memDescript` AS `memDescript`,`tb_member`.`mbImg` AS `mbImg`,`tb_member`.`position` AS `position`,`tb_member`.`facebook` AS `facebook`,`tb_member`.`whatsapp` AS `whatsapp`,`tb_member`.`tel` AS `tel`,`tb_member`.`langID` AS `langID`,`tb_member`.`status_id` AS `status_id`,`tb_member`.`user_add` AS `user_add`,`tb_member`.`date_add` AS `date_add`,`tb_status`.`statusText` AS `statusText`,`tb_lang`.`langName` AS `langName`,`tb_lang`.`langShort` AS `langShort` from ((`tb_member` join `tb_status` on((`tb_member`.`status_id` = `tb_status`.`status_id`))) join `tb_lang` on((`tb_lang`.`langID` = `tb_member`.`langID`))) */;

/*View structure for view v_member_detail */

/*!50001 DROP TABLE IF EXISTS `v_member_detail` */;
/*!50001 DROP VIEW IF EXISTS `v_member_detail` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_member_detail` AS select `tb_member_detail`.`mdID` AS `mdID`,`tb_member_detail`.`memberID` AS `memberID`,`tb_member_detail`.`memTitle` AS `memTitle`,`tb_member_detail`.`langID` AS `langID`,`tb_member_detail`.`status_id` AS `status_id`,`tb_member_detail`.`user_add` AS `user_add`,`tb_member_detail`.`date_add` AS `date_add`,`tb_status`.`statusText` AS `statusText`,`tb_lang`.`langName` AS `langName`,`tb_lang`.`langShort` AS `langShort` from ((`tb_member_detail` join `tb_status` on((`tb_member_detail`.`status_id` = `tb_status`.`status_id`))) join `tb_lang` on((`tb_lang`.`langID` = `tb_member_detail`.`langID`))) */;

/*View structure for view v_partner */

/*!50001 DROP TABLE IF EXISTS `v_partner` */;
/*!50001 DROP VIEW IF EXISTS `v_partner` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_partner` AS select `tb_partner`.`partnerID` AS `partnerID`,`tb_partner`.`showNo` AS `showNo`,`tb_partner`.`partnerTitle` AS `partnerTitle`,`tb_partner`.`partnerDescript` AS `partnerDescript`,`tb_partner`.`partnerName` AS `partnerName`,`tb_partner`.`partnerLogo` AS `partnerLogo`,`tb_partner`.`partnerURL` AS `partnerURL`,`tb_partner`.`langID` AS `langID`,`tb_partner`.`titleType` AS `titleType`,`tb_partner`.`status_id` AS `status_id`,`tb_partner`.`user_add` AS `user_add`,`tb_partner`.`date_add` AS `date_add`,`tb_status`.`statusText` AS `statusText`,`tb_lang`.`langName` AS `langName`,`tb_lang`.`langShort` AS `langShort` from ((`tb_partner` join `tb_status` on((`tb_partner`.`status_id` = `tb_status`.`status_id`))) join `tb_lang` on((`tb_lang`.`langID` = `tb_partner`.`langID`))) */;

/*View structure for view v_services */

/*!50001 DROP TABLE IF EXISTS `v_services` */;
/*!50001 DROP VIEW IF EXISTS `v_services` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_services` AS select `tb_services`.`serviceID` AS `serviceID`,`tb_services`.`serviceTitle` AS `serviceTitle`,`tb_services`.`serviceDescript` AS `serviceDescript`,`tb_services`.`topNo` AS `topNo`,`tb_services`.`serviceImg` AS `serviceImg`,`tb_services`.`status_id` AS `status_id`,`tb_services`.`titleType` AS `titleType`,`tb_services`.`langID` AS `langID`,`tb_services`.`url` AS `url`,`tb_services`.`user_add` AS `user_add`,`tb_services`.`date_add` AS `date_add`,`tb_lang`.`langName` AS `langName`,`tb_lang`.`langShort` AS `langShort`,`tb_status`.`statusText` AS `statusText` from ((`tb_services` join `tb_status` on((`tb_services`.`status_id` = `tb_status`.`status_id`))) join `tb_lang` on((`tb_lang`.`langID` = `tb_services`.`langID`))) */;

/*View structure for view v_services_detail */

/*!50001 DROP TABLE IF EXISTS `v_services_detail` */;
/*!50001 DROP VIEW IF EXISTS `v_services_detail` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_services_detail` AS select `tb_service_detail`.`sdID` AS `sdID`,`tb_service_detail`.`serviceID` AS `serviceID`,`tb_service_detail`.`serviceTitle` AS `serviceTitle`,`tb_service_detail`.`langID` AS `langID`,`tb_service_detail`.`topNo` AS `topNo`,`tb_service_detail`.`status_id` AS `status_id`,`tb_service_detail`.`user_add` AS `user_add`,`tb_service_detail`.`date_add` AS `date_add`,`tb_status`.`statusText` AS `statusText`,`tb_lang`.`langName` AS `langName`,`tb_lang`.`langShort` AS `langShort` from ((`tb_service_detail` join `tb_status` on((`tb_service_detail`.`status_id` = `tb_status`.`status_id`))) join `tb_lang` on((`tb_lang`.`langID` = `tb_service_detail`.`langID`))) */;

/*View structure for view v_team */

/*!50001 DROP TABLE IF EXISTS `v_team` */;
/*!50001 DROP VIEW IF EXISTS `v_team` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_team` AS select `tb_team`.`teamID` AS `teamID`,`tb_team`.`teamTitle` AS `teamTitle`,`tb_team`.`teamDescript` AS `teamDescript`,`tb_team`.`langID` AS `langID`,`tb_team`.`status_id` AS `status_id`,`tb_team`.`user_add` AS `user_add`,`tb_team`.`date_add` AS `date_add`,`tb_status`.`statusText` AS `statusText`,`tb_lang`.`langName` AS `langName`,`tb_lang`.`langShort` AS `langShort` from ((`tb_team` join `tb_status` on((`tb_team`.`status_id` = `tb_status`.`status_id`))) join `tb_lang` on((`tb_lang`.`langID` = `tb_team`.`langID`))) */;

/*View structure for view v_user */

/*!50001 DROP TABLE IF EXISTS `v_user` */;
/*!50001 DROP VIEW IF EXISTS `v_user` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_user` AS select `tb_user`.`user_id` AS `user_id`,`tb_user`.`status_id` AS `status_id`,`tb_user`.`username` AS `username`,`tb_user`.`role_id` AS `role_id`,`tb_user`.`first_name` AS `first_name`,`tb_user`.`last_name` AS `last_name`,`tb_user`.`password` AS `password`,`tb_info`.`info_name` AS `info_name`,`tb_info`.`info_addr` AS `info_addr`,`tb_info`.`info_tel` AS `info_tel`,`tb_info`.`info_owner` AS `info_owner`,`tb_info`.`info_logo` AS `info_logo`,`tb_info`.`exp_num` AS `exp_num`,`tb_user`.`user_add` AS `user_add`,`tb_user`.`date_add` AS `date_add`,`tb_user`.`pic` AS `pic`,`tb_info`.`printReceive` AS `printReceive`,`tb_user`.`pricesaleID` AS `pricesaleID`,`tb_info`.`saveInfoCus` AS `saveInfoCus`,`tb_info`.`infoNo` AS `infoNo`,`tb_info`.`shopType` AS `shopType`,`tb_user`.`info_id` AS `info_id`,`tb_info`.`sb` AS `sb`,`tb_info`.`expire_day` AS `expire_day`,`tb_info`.`interfaceUI` AS `interfaceUI`,`tb_info`.`touchscreen` AS `touchscreen` from (`tb_user` join `tb_info` on((`tb_user`.`info_id` = `tb_info`.`info_id`))) where (`tb_user`.`status_id` = 3) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
