/*
Navicat MySQL Data Transfer

Source Server         : ToUSmile
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : irobust-training

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2015-06-05 15:56:22
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `category`
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', 'Excel', '4', null, null);
INSERT INTO `category` VALUES ('2', 'Web', '2', null, null);
INSERT INTO `category` VALUES ('3', 'Programming', '2', null, null);
INSERT INTO `category` VALUES ('4', 'Database', '2', null, null);
INSERT INTO `category` VALUES ('5', 'Mobile', '2', null, null);
INSERT INTO `category` VALUES ('6', 'CMS', '2', null, null);
INSERT INTO `category` VALUES ('7', 'Teacher', '2', null, null);

-- ----------------------------
-- Table structure for `course`
-- ----------------------------
DROP TABLE IF EXISTS `course`;
CREATE TABLE `course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` text,
  `duration` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `is_new_release` bit(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of course
-- ----------------------------
INSERT INTO `course` VALUES ('1', '1', 'Microsoft Excel 2013 Advanced. Online Excel Training Course', 'Master Advanced Excel 2013 Features. Become A Expert And Learn To Use Excel Like A Pro With This Advanced Excel Training', '10 Hours', '99', '', null, null);
INSERT INTO `course` VALUES ('2', '1', 'Microsoft Excel 2010: Advanced Training', 'Master Advanced Excel 2010 Features. Become A Expert And Learn To Use Excel Like A Pro With This Advanced Excel Training', '9 Hours', '99', '', null, null);
INSERT INTO `course` VALUES ('3', '1', 'Excel with Excel Pivot Tables!', 'The Complete Excel Pivot Table Guide for Excel 2007, 2010 & 2013. Become an Advanced Excel user & get that Dream Job!', '11 Hours', '499', '', null, null);
INSERT INTO `course` VALUES ('4', '1', 'Learn Microsoft Excel 2010 Advanced Course', 'Learn advanced Excel 2010 features and get ready to take your Excel knowledge to the next level.', '10 Hours', '97', '', null, null);
INSERT INTO `course` VALUES ('5', '1', 'The Ultimate Excel Programmer Course', 'Learn Excel VBA from scratch with Dan Strong! I\'ve trained over 19K students on YouTube, check it out!', '10 Hours', '199', '', null, null);
INSERT INTO `course` VALUES ('6', '2', 'Master Web Design in Photoshop', 'Learn how to create stunning website designs in Photoshop', '9 Hours', '199', '', null, null);
INSERT INTO `course` VALUES ('7', '2', 'Become a Certified Web Developer', 'Complete coverage of HTML, CSS, Javascript and PHP for the Certified Web Developer Exam.', '13 Hours', '199', '', null, null);
INSERT INTO `course` VALUES ('8', '2', 'The Complete Web Developer Course - Build 14 Websites', 'Web development from scratch in 6 weeks. HTML, JS, CSS, PHP, MySQL, Bootstrap, Wordpress, APIs, Mobile Apps all covered.', '29 Hours', '199', '', null, null);
INSERT INTO `course` VALUES ('9', '2', 'Learn Photoshop, Web Design & Profitable Freelancing', 'Learn Photoshop and use it to create amazing website designs and earn money in design contests. No coding needed!', '17 Hours', '499', '', null, null);
INSERT INTO `course` VALUES ('10', '2', 'Become a Web Developer from Scratch', 'This course covers all you need to know about becoming a top skilled web developer even if you never programmed before!', '37 Hours', '199', '', null, null);
INSERT INTO `course` VALUES ('11', '3', 'Programming for Complete Beginners in C#', 'Learning to code C#? We have provided HD video lectures, live coding sessions, and nearly 100 exercises to learn on!', '7 Hours', '45', '', null, null);
INSERT INTO `course` VALUES ('12', '3', 'Beginners Ruby Programming Training - No Experience Required', 'A Ruby Programming Course Training Video. Learn Real-World Programming Techniques At Your Own Pace.', '6 Hours', '99', '', null, null);
INSERT INTO `course` VALUES ('13', '3', 'Coding for Entrepreneurs: Learn Python, Django, and More.', 'A Programming Class for Non-Technical Founder(s). Learn Django- the #1 Python Frameworks, APIs, HTML, CSS, + Payments.', '35 Hours', '199', '', null, null);
INSERT INTO `course` VALUES ('14', '3', 'The Professional Ruby on Rails Developer', 'Imagine, Design and Build Web Applications', '17 Hours', '499', '', null, null);
INSERT INTO `course` VALUES ('15', '3', 'Swift - Learn Apple\'s New Programming Language Step By Step', 'Learn the basics of new language that will help you go on to programme on Apple iOS 8 and Mac OSX', '11 Hours', '99', '', null, null);
INSERT INTO `course` VALUES ('16', '4', 'Database Relationships', 'Let this course take you from knowing nothing about databases all the way to structuring tables like a professional!', '2 Hours', '39', '', null, null);
INSERT INTO `course` VALUES ('17', '4', 'Relational Database Design', 'Learn how to create an effective relational database design to use in your IT career or even a personal project.', '3 Hours', '67', '', null, null);
INSERT INTO `course` VALUES ('18', '4', 'SQL Database for Beginners', 'Master SQL Database Creation and Development with Guru Martin Holzke. Use Your DB Skills to Create Mobile or Web Apps', '7 Hours', '99', '', null, null);
INSERT INTO `course` VALUES ('19', '4', 'SQL Database MasterClass: Go From Pupil To Master!', 'This is a SQL MasterClass that gets you immediate hands on experience with a database. From design to Mastery Class!', '6 Hours', '197', '', null, null);
INSERT INTO `course` VALUES ('20', '4', 'Learn NoSQL Database Design From Scratch', 'The Complete Guide to Master NoSQL and MongoDB', '5 Hours', '99', '', null, null);
INSERT INTO `course` VALUES ('21', '5', 'Mobile App Design from Scratch: Design Principles, and UX', 'A step by step guide to learn how to design a great mobile app.', '8 Hours', '99', '', null, null);
INSERT INTO `course` VALUES ('22', '5', 'Mobile User Experience: The Complete Guide to Mobile', 'The complete guide to understanding and designing user experience for mobile websites and applications', '27 Hours', '97', '', null, null);
INSERT INTO `course` VALUES ('23', '5', 'Sketch 3: learn to create mobile and web designs', 'Learn the latest version of Sketch that let\'s everyone to create designs and prototypes fast. Learn Sketch 3', '5 Hours', '59', '', null, null);
INSERT INTO `course` VALUES ('24', '5', 'Mobile App Design In Sketch 3: UX and UI Design From Scratch', 'Design Mobile Apps from scratch using Sketch 3. Master Sketch 3, UX methodology, icon design, and user interface design.', '9 Hours', '299', '', null, null);
INSERT INTO `course` VALUES ('25', '5', 'Adobe Illustrator for Mobile Game Art - A Beginners Guide', 'Create mobile game art in Adobe illustrator just by using basic concepts, essential tools and proven workflows.', '3 Hours', '99', '', null, null);

-- ----------------------------
-- Table structure for `member`
-- ----------------------------
DROP TABLE IF EXISTS `member`;
CREATE TABLE `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `company` varchar(20) DEFAULT NULL,
  `rank` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of member
-- ----------------------------
INSERT INTO `member` VALUES ('1', 'wajanachaiw55@email.nu.ac.th', 'wajanachai', 'Faith', '095-6345825', 'icb solution', 'student', '2015-06-05 15:39:07', '2015-06-05 15:39:07');

-- ----------------------------
-- Table structure for `section`
-- ----------------------------
DROP TABLE IF EXISTS `section`;
CREATE TABLE `section` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updatde_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of section
-- ----------------------------
INSERT INTO `section` VALUES ('1', '1', 'Getting Started', null, null);
INSERT INTO `section` VALUES ('2', '1', 'Using Mathematical Functions', null, null);
INSERT INTO `section` VALUES ('3', '1', 'IF Functionality', null, null);
INSERT INTO `section` VALUES ('4', '1', 'Performing Data Lookups', null, null);
INSERT INTO `section` VALUES ('5', '1', 'Sparklines', null, null);
INSERT INTO `section` VALUES ('6', '1', 'Further Mathematical Functions', null, null);
INSERT INTO `section` VALUES ('7', '1', 'Outlining', null, null);
INSERT INTO `section` VALUES ('8', '1', 'Scenarios', null, null);
INSERT INTO `section` VALUES ('9', '1', 'Custom Views', null, null);
INSERT INTO `section` VALUES ('10', '1', 'Functions For Manipulating Text', null, null);
INSERT INTO `section` VALUES ('11', '1', 'Arrays', null, null);
INSERT INTO `section` VALUES ('12', '1', 'Useful Data Functions', null, null);
INSERT INTO `section` VALUES ('13', '1', 'Some Other Useful Functions', null, null);
INSERT INTO `section` VALUES ('14', '1', 'Auditing And Troubleshooting Formulas', null, null);
INSERT INTO `section` VALUES ('15', '1', 'PivotTables', null, null);

-- ----------------------------
-- Table structure for `topic`
-- ----------------------------
DROP TABLE IF EXISTS `topic`;
CREATE TABLE `topic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `section` varchar(10) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `time` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of topic
-- ----------------------------
INSERT INTO `topic` VALUES ('1', '1', '0101 Will I Be Able To Keep Up?', '03:57', '0', null, null);
INSERT INTO `topic` VALUES ('2', '1', '0102 Using The Included Files', '01:17', '0', null, null);
INSERT INTO `topic` VALUES ('3', '1', '0103 New For 2013: Its All In The Cloud', '04:03', '0', null, null);
INSERT INTO `topic` VALUES ('4', '1', '0104 The Very Clever Flash Fill', '04:13', '0', null, null);
