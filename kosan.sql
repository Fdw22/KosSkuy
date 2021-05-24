/*
SQLyog Ultimate v11.11 (32 bit)
MySQL - 5.5.5-10.4.8-MariaDB : Database - kosan
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`kosan` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `kosan`;

/*Table structure for table `company` */

DROP TABLE IF EXISTS `company`;

CREATE TABLE `company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) NOT NULL,
  `service_charge_value` varchar(255) NOT NULL,
  `vat_charge_value` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `currency` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `company` */

insert  into `company`(`id`,`company_name`,`service_charge_value`,`vat_charge_value`,`address`,`phone`,`country`,`message`,`currency`) values (1,'Infosys private','13','10','Madrid','758676851','Spain','hello everyone one','USD');

/*Table structure for table `groups` */

DROP TABLE IF EXISTS `groups`;

CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(255) NOT NULL,
  `permission` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `groups` */

insert  into `groups`(`id`,`group_name`,`permission`) values (1,'Administrator','a:28:{i:0;s:10:\"createUser\";i:1;s:10:\"updateUser\";i:2;s:8:\"viewUser\";i:3;s:10:\"deleteUser\";i:4;s:11:\"createGroup\";i:5;s:11:\"updateGroup\";i:6;s:9:\"viewGroup\";i:7;s:11:\"deleteGroup\";i:8;s:11:\"createOrder\";i:9;s:11:\"updateOrder\";i:10;s:9:\"viewOrder\";i:11;s:11:\"deleteOrder\";i:12;s:11:\"viewReports\";i:13;s:13:\"updateCompany\";i:14;s:11:\"viewProfile\";i:15;s:13:\"updateSetting\";i:16;s:15:\"create_kategori\";i:17;s:15:\"update_kategori\";i:18;s:13:\"view_kategori\";i:19;s:15:\"delete_kategori\";i:20;s:12:\"create_kamar\";i:21;s:12:\"update_kamar\";i:22;s:10:\"view_kamar\";i:23;s:12:\"delete_kamar\";i:24;s:16:\"create_transaksi\";i:25;s:16:\"update_transaksi\";i:26;s:14:\"view_transaksi\";i:27;s:16:\"delete_transaksi\";}'),(2,'Level 1','a:69:{i:0;s:10:\"createUser\";i:1;s:10:\"updateUser\";i:2;s:8:\"viewUser\";i:3;s:10:\"deleteUser\";i:4;s:11:\"createGroup\";i:5;s:11:\"updateGroup\";i:6;s:9:\"viewGroup\";i:7;s:11:\"deleteGroup\";i:8;s:11:\"createBrand\";i:9;s:11:\"updateBrand\";i:10;s:9:\"viewBrand\";i:11;s:11:\"deleteBrand\";i:12;s:14:\"createCategory\";i:13;s:14:\"updateCategory\";i:14;s:12:\"viewCategory\";i:15;s:14:\"deleteCategory\";i:16;s:14:\"createKelompok\";i:17;s:14:\"updateKelompok\";i:18;s:12:\"viewKelompok\";i:19;s:14:\"deleteKelompok\";i:20;s:11:\"createStore\";i:21;s:11:\"updateStore\";i:22;s:9:\"viewStore\";i:23;s:11:\"deleteStore\";i:24;s:15:\"createAttribute\";i:25;s:15:\"updateAttribute\";i:26;s:13:\"viewAttribute\";i:27;s:15:\"deleteAttribute\";i:28;s:13:\"createProduct\";i:29;s:13:\"updateProduct\";i:30;s:11:\"viewProduct\";i:31;s:13:\"deleteProduct\";i:32;s:11:\"createOrder\";i:33;s:11:\"updateOrder\";i:34;s:9:\"viewOrder\";i:35;s:11:\"deleteOrder\";i:36;s:12:\"createCabang\";i:37;s:12:\"updateCabang\";i:38;s:10:\"viewCabang\";i:39;s:12:\"deleteCabang\";i:40;s:11:\"viewReports\";i:41;s:13:\"updateCompany\";i:42;s:11:\"viewProfile\";i:43;s:13:\"updateSetting\";i:44;s:5:\"modul\";i:45;s:13:\"create_contoh\";i:46;s:13:\"update_contoh\";i:47;s:11:\"view_contoh\";i:48;s:13:\"delete_contoh\";i:49;s:11:\"create_baru\";i:50;s:11:\"update_baru\";i:51;s:9:\"view_baru\";i:52;s:11:\"delete_baru\";i:53;s:11:\"create_lama\";i:54;s:11:\"update_lama\";i:55;s:9:\"view_lama\";i:56;s:11:\"delete_lama\";i:57;s:13:\"create_contoh\";i:58;s:13:\"update_contoh\";i:59;s:11:\"view_contoh\";i:60;s:13:\"delete_contoh\";i:61;s:12:\"create_modul\";i:62;s:12:\"update_modul\";i:63;s:10:\"view_modul\";i:64;s:12:\"delete_modul\";i:65;s:11:\"create_buku\";i:66;s:11:\"update_buku\";i:67;s:9:\"view_buku\";i:68;s:11:\"delete_buku\";}');

/*Table structure for table `kamar` */

DROP TABLE IF EXISTS `kamar`;

CREATE TABLE `kamar` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `harga` int(16) NOT NULL,
  `kategori_id` int(2) NOT NULL,
  `fasilitas` text DEFAULT NULL,
  `tipe_bayar` enum('bulanan','tahunan') NOT NULL DEFAULT 'bulanan',
  `status_sewa` enum('kosong','terisi') DEFAULT 'kosong',
  `status_bayar` enum('lunas','belum','sebagian') DEFAULT 'belum',
  `tgl_terisi` date DEFAULT NULL,
  `tgl_habis` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `kamar` */

insert  into `kamar`(`id`,`name`,`harga`,`kategori_id`,`fasilitas`,`tipe_bayar`,`status_sewa`,`status_bayar`,`tgl_terisi`,`tgl_habis`) values (1,'Kamar 1',500000,2,NULL,'bulanan','kosong','belum','2019-10-21',NULL),(2,'Kamar 2',1000000,1,'ac','bulanan','kosong','belum',NULL,NULL);

/*Table structure for table `kategori` */

DROP TABLE IF EXISTS `kategori`;

CREATE TABLE `kategori` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `kategori` */

insert  into `kategori`(`id`,`name`,`keterangan`) values (1,'Kamar Kelas 1','Ruangan dengan Fasilitas Kumplit'),(2,'Kamar Kelas 2',NULL),(3,'Kategori 3','Ruangan murah meriah');

/*Table structure for table `modul` */

DROP TABLE IF EXISTS `modul`;

CREATE TABLE `modul` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `ket` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `modul` */

insert  into `modul`(`id`,`name`,`ket`) values (6,'kategori',NULL),(7,'kamar',NULL),(8,'transaksi',NULL);

/*Table structure for table `transaksi` */

DROP TABLE IF EXISTS `transaksi`;

CREATE TABLE `transaksi` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `tgl_transaksi` date NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_ktp` int(20) NOT NULL,
  `no_telp` varchar(16) NOT NULL,
  `orangtua` varchar(100) NOT NULL,
  `no_telp_ortu` varchar(16) NOT NULL,
  `alamat_ortu` varchar(255) NOT NULL,
  `kamar_id` int(2) NOT NULL,
  `bayar` int(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `transaksi` */

/*Table structure for table `user_group` */

DROP TABLE IF EXISTS `user_group`;

CREATE TABLE `user_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `user_group` */

insert  into `user_group`(`id`,`user_id`,`group_id`) values (1,1,1),(2,2,2);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`,`email`,`firstname`,`lastname`,`phone`,`gender`) values (1,'adminkosan','$2y$10$yfi5nUQGXUZtMdl27dWAyOd/jMOmATBpiUvJDmUu9hJ5Ro6BE5wsK','admin@admin.com','Admin','Aplikasi','80789998',1),(2,'admin1','$2y$10$M0mndUzE0GT0DbGxhr7gUOl3r1XEKa75Qgt83GO5FKsyJpv7T4F2S','admin1@admin.com','admin1','admin','08192222222',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
