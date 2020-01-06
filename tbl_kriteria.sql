/*
SQLyog Ultimate v11.11 (32 bit)
MySQL - 5.6.21 : Database - codegoo_ahp
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`codegoo_ahp` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `codegoo_ahp`;

/*Table structure for table `tb_kriteria` */

DROP TABLE IF EXISTS `tb_kriteria`;

CREATE TABLE `tb_kriteria` (
  `id_kriteria` int(11) NOT NULL AUTO_INCREMENT,
  `kode_kriteria` varchar(2) NOT NULL,
  `nama_kriteria` varchar(32) NOT NULL,
  `nilai_kriteria` double NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_kriteria`),
  UNIQUE KEY `kode_kriteria` (`kode_kriteria`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `tb_kriteria` */

insert  into `tb_kriteria`(`id_kriteria`,`kode_kriteria`,`nama_kriteria`,`nilai_kriteria`) values (1,'K1','Usia',0.04),(2,'K2','Tanggungan Orang Tua',0.07),(3,'K3','Pendidikan Terakhir',0.11),(4,'K4','Kondisi Rumah',0.11),(5,'K5','Kendaraan',0.13),(6,'K6','Kesehatan',0.2),(7,'K7','Pekerjaan Orang Tua',0.18),(8,'K8','Penghasilan Orang Tua',0.16);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
