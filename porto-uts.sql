-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table porto-uts.data_pribadi
CREATE TABLE IF NOT EXISTS `data_pribadi` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_desc` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `degree` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `freelance_s` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table porto-uts.data_pribadi: ~0 rows (approximately)
/*!40000 ALTER TABLE `data_pribadi` DISABLE KEYS */;
INSERT INTO `data_pribadi` (`id`, `name`, `about_desc`, `website`, `phone`, `address`, `degree`, `email`, `freelance_s`) VALUES
	(1, 'Barry Samuel', 'Hi there, my name is Barry Samuel and i am currently enrolled as student at Pembangunan Jaya University studying computer science. My current interest in the computer science field are <b>computer vision, artificial intelligent</b> and <b>full-stack web development</b>.', 'barry-samuel.github.io', '+123 456 7890', 'Tangerang Selatan, Indonesia', 'Bachelor (Ongoing)', 'barrysamuel[at]pm[dot]me', 'Available');
/*!40000 ALTER TABLE `data_pribadi` ENABLE KEYS */;

-- Dumping structure for table porto-uts.portofolio
CREATE TABLE IF NOT EXISTS `portofolio` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `entry_1` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entry_1_pic` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entry_1_desc` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entry_1_link` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entry_2` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entry_2_pic` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entry_2_desc` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entry_3` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entry_3_pic` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entry_3_desc` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table porto-uts.portofolio: ~1 rows (approximately)
/*!40000 ALTER TABLE `portofolio` DISABLE KEYS */;
INSERT INTO `portofolio` (`id`, `entry_1`, `entry_1_pic`, `entry_1_desc`, `entry_1_link`, `entry_2`, `entry_2_pic`, `entry_2_desc`, `entry_3`, `entry_3_pic`, `entry_3_desc`) VALUES
	(1, 'Personal Website', 'assets/img/portfolio/personalweb.png', 'Personal website on Github Pages', 'https://barry-samuel.github.io/dkv', '&quot;Foodstall&quot;', 'assets/img/portfolio/foodstall.jpg', 'Photography Work - Pasar Lama Night Market', '&quot;Seafood&quot;', 'assets/img/portfolio/seafood.jpg', 'Photography Work - Pasar Lama Night Market');
/*!40000 ALTER TABLE `portofolio` ENABLE KEYS */;

-- Dumping structure for table porto-uts.resume
CREATE TABLE IF NOT EXISTS `resume` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `summary_desc` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edu_1` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edu_1_dur` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edu_1_inst` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table porto-uts.resume: ~0 rows (approximately)
/*!40000 ALTER TABLE `resume` DISABLE KEYS */;
INSERT INTO `resume` (`id`, `summary_desc`, `edu_1`, `edu_1_dur`, `edu_1_inst`) VALUES
	(1, 'Aspiring full-stack web developer with experience designing and developing website from initial concept to final, polished deployable website.', 'Bachelor of Computer Science', '2019 - Present', 'Pembangunan Jaya University, Tangerang Selatan, Indonesia');
/*!40000 ALTER TABLE `resume` ENABLE KEYS */;

-- Dumping structure for table porto-uts.skill
CREATE TABLE IF NOT EXISTS `skill` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `c_cpp` int(3) DEFAULT NULL,
  `python` int(3) DEFAULT NULL,
  `php` int(3) DEFAULT NULL,
  `java` int(3) DEFAULT NULL,
  `html` int(3) DEFAULT NULL,
  `css` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table porto-uts.skill: ~0 rows (approximately)
/*!40000 ALTER TABLE `skill` DISABLE KEYS */;
INSERT INTO `skill` (`id`, `c_cpp`, `python`, `php`, `java`, `html`, `css`) VALUES
	(1, 70, 75, 40, 65, 50, 45);
/*!40000 ALTER TABLE `skill` ENABLE KEYS */;

-- Dumping structure for table porto-uts.sosial_media
CREATE TABLE IF NOT EXISTS `sosial_media` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `twitter` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table porto-uts.sosial_media: ~1 rows (approximately)
/*!40000 ALTER TABLE `sosial_media` DISABLE KEYS */;
INSERT INTO `sosial_media` (`id`, `twitter`, `instagram`, `github`) VALUES
	(1, 'https://twitter.com/sbarrysamuel', 'https://www.instagram.com/sbarrysamuel', 'https://github.com/barry-samuel/');
/*!40000 ALTER TABLE `sosial_media` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
