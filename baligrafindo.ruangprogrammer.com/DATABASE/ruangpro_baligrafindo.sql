-- MySQL dump 10.15  Distrib 10.0.30-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: ruangpro_baligrafindo
-- ------------------------------------------------------
-- Server version	10.0.30-MariaDB

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
-- Table structure for table `album`
--

DROP TABLE IF EXISTS `album`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `album` (
  `idalbum` int(11) NOT NULL AUTO_INCREMENT,
  `album` varchar(100) NOT NULL,
  PRIMARY KEY (`idalbum`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `album`
--

LOCK TABLES `album` WRITE;
/*!40000 ALTER TABLE `album` DISABLE KEYS */;
INSERT INTO `album` (`idalbum`, `album`) VALUES (2,'ALBUM FOTO PERUSAHAAN 6'),(3,'ALBUM FOTO PERUSAHAAN 5'),(4,'ALBUM FOTO PERUSAHAAN 4'),(5,'ALBUM FOTO PERUSAHAAN 3'),(7,'ALBUM FOTO PERUSAHAAN 2'),(8,'ALBUM FOTO PERUSAHAAN 1');
/*!40000 ALTER TABLE `album` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `berita`
--

DROP TABLE IF EXISTS `berita`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `berita` (
  `idberita` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_posting` date NOT NULL,
  `judul_berita` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  PRIMARY KEY (`idberita`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `berita`
--

LOCK TABLES `berita` WRITE;
/*!40000 ALTER TABLE `berita` DISABLE KEYS */;
INSERT INTO `berita` (`idberita`, `tgl_posting`, `judul_berita`, `deskripsi`, `gambar`) VALUES (1,'2016-10-20','Forum Rakyat Bali Serukan Tolak Reklamasi','Masyarakat aliansi Forum Rakyat Bali di Jakarta melakukan aksi saat Car Free Day (CFD) di Bundaran Hotel Indonesia, Jakarta, Minggu (4/9). Dalam aksinya mereka bernyanyi menyerukan Tolak Reklamasi Teluk Benoa. (Liputan6.com/Johan Tallo)\r\n\r\nSalah satu peserta memperlihatkan brosur saat aksi di Bundaran Hotel Indonesia, Jakarta, Minggu (4/9). Mereka menyerukan Tolak Reklamasi Teluk Benoa. (Liputan6.com/Johan Tallo)','berita1.jpg'),(2,'2016-10-20','Forum Rakyat Bali Serukan Tolak Reklamasi','Masyarakat aliansi Forum Rakyat Bali di Jakarta melakukan aksi saat Car Free Day (CFD) di Bundaran Hotel Indonesia, Jakarta, Minggu (4/9). Dalam aksinya mereka bernyanyi menyerukan Tolak Reklamasi Teluk Benoa. (Liputan6.com/Johan Tallo)\r\n\r\nSalah satu peserta memperlihatkan brosur saat aksi di Bundaran Hotel Indonesia, Jakarta, Minggu (4/9). Mereka menyerukan Tolak Reklamasi Teluk Benoa. (Liputan6.com/Johan Tallo)','berita1.jpg'),(3,'2016-10-20','Forum Rakyat Bali Serukan Tolak Reklamasi','Masyarakat aliansi Forum Rakyat Bali di Jakarta melakukan aksi saat Car Free Day (CFD) di Bundaran Hotel Indonesia, Jakarta, Minggu (4/9). Dalam aksinya mereka bernyanyi menyerukan Tolak Reklamasi Teluk Benoa. (Liputan6.com/Johan Tallo)\r\n\r\nSalah satu peserta memperlihatkan brosur saat aksi di Bundaran Hotel Indonesia, Jakarta, Minggu (4/9). Mereka menyerukan Tolak Reklamasi Teluk Benoa. (Liputan6.com/Johan Tallo)','berita1.jpg'),(4,'2016-10-20','Forum Rakyat Bali Serukan Tolak Reklamasi','Masyarakat aliansi Forum Rakyat Bali di Jakarta melakukan aksi saat Car Free Day (CFD) di Bundaran Hotel Indonesia, Jakarta, Minggu (4/9). Dalam aksinya mereka bernyanyi menyerukan Tolak Reklamasi Teluk Benoa. (Liputan6.com/Johan Tallo)\r\n\r\nSalah satu peserta memperlihatkan brosur saat aksi di Bundaran Hotel Indonesia, Jakarta, Minggu (4/9). Mereka menyerukan Tolak Reklamasi Teluk Benoa. (Liputan6.com/Johan Tallo)','berita1.jpg'),(5,'2016-10-20','Forum Rakyat Bali Serukan Tolak Reklamasi','Masyarakat aliansi Forum Rakyat Bali di Jakarta melakukan aksi saat Car Free Day (CFD) di Bundaran Hotel Indonesia, Jakarta, Minggu (4/9). Dalam aksinya mereka bernyanyi menyerukan Tolak Reklamasi Teluk Benoa. (Liputan6.com/Johan Tallo)\r\n\r\nSalah satu peserta memperlihatkan brosur saat aksi di Bundaran Hotel Indonesia, Jakarta, Minggu (4/9). Mereka menyerukan Tolak Reklamasi Teluk Benoa. (Liputan6.com/Johan Tallo)','berita1.jpg'),(6,'2016-10-20','Forum Rakyat Bali Serukan Tolak Reklamasi','Masyarakat aliansi Forum Rakyat Bali di Jakarta melakukan aksi saat Car Free Day (CFD) di Bundaran Hotel Indonesia, Jakarta, Minggu (4/9). Dalam aksinya mereka bernyanyi menyerukan Tolak Reklamasi Teluk Benoa. (Liputan6.com/Johan Tallo)\r\n\r\nSalah satu peserta memperlihatkan brosur saat aksi di Bundaran Hotel Indonesia, Jakarta, Minggu (4/9). Mereka menyerukan Tolak Reklamasi Teluk Benoa. (Liputan6.com/Johan Tallo)','berita1.jpg');
/*!40000 ALTER TABLE `berita` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `galeri`
--

DROP TABLE IF EXISTS `galeri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `galeri` (
  `idgaleri` int(11) NOT NULL AUTO_INCREMENT,
  `judul_foto` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `idalbum` int(11) NOT NULL,
  PRIMARY KEY (`idgaleri`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galeri`
--

LOCK TABLES `galeri` WRITE;
/*!40000 ALTER TABLE `galeri` DISABLE KEYS */;
INSERT INTO `galeri` (`idgaleri`, `judul_foto`, `gambar`, `idalbum`) VALUES (2,'galeri data perusahaan 1','produk2.png',2),(3,'data tes data tes dsata lakdnksa','produk1.png',3),(4,'lasnas','produk3.png',5),(5,'lkasndl','slider1.jpg',3);
/*!40000 ALTER TABLE `galeri` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategori_produk`
--

DROP TABLE IF EXISTS `kategori_produk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategori_produk` (
  `idkategori_produk` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(100) NOT NULL,
  PRIMARY KEY (`idkategori_produk`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori_produk`
--

LOCK TABLES `kategori_produk` WRITE;
/*!40000 ALTER TABLE `kategori_produk` DISABLE KEYS */;
INSERT INTO `kategori_produk` (`idkategori_produk`, `kategori`) VALUES (1,'KORAN'),(2,'MAJALAH'),(4,'PERCETAKAN');
/*!40000 ALTER TABLE `kategori_produk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pengguna`
--

DROP TABLE IF EXISTS `pengguna`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pengguna` (
  `idpengguna` int(11) NOT NULL AUTO_INCREMENT,
  `namalengkap` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nohp` char(15) NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`idpengguna`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pengguna`
--

LOCK TABLES `pengguna` WRITE;
/*!40000 ALTER TABLE `pengguna` DISABLE KEYS */;
INSERT INTO `pengguna` (`idpengguna`, `namalengkap`, `email`, `password`, `nohp`, `alamat`) VALUES (1,'ahmad bastiar','ahmad.bastiar@gin.co.id','21232f297a57a5a743894a0e4a801fc3','085226213902','jogjakarta'),(3,'ahmad bastiar sc','nsjm.cs@gmail.com','e807f1fcf82d132f9bb018ca6738a19f','087738121245','jl.taman siswa, yogyakarta');
/*!40000 ALTER TABLE `pengguna` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produk`
--

DROP TABLE IF EXISTS `produk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produk` (
  `idproduk` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_posting` date NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `idkategori_produk` int(11) NOT NULL,
  PRIMARY KEY (`idproduk`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produk`
--

LOCK TABLES `produk` WRITE;
/*!40000 ALTER TABLE `produk` DISABLE KEYS */;
INSERT INTO `produk` (`idproduk`, `tgl_posting`, `nama_produk`, `deskripsi_produk`, `gambar`, `idkategori_produk`) VALUES (2,'2016-10-20','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.','1.png',1),(3,'2016-10-20','some one else','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n','2.png',4),(5,'2016-10-26',' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod',' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.','devices.png',1);
/*!40000 ALTER TABLE `produk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profil`
--

DROP TABLE IF EXISTS `profil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profil` (
  `idprofil` int(11) NOT NULL AUTO_INCREMENT,
  `judul_profil` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  PRIMARY KEY (`idprofil`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profil`
--

LOCK TABLES `profil` WRITE;
/*!40000 ALTER TABLE `profil` DISABLE KEYS */;
INSERT INTO `profil` (`idprofil`, `judul_profil`, `deskripsi`, `gambar`) VALUES (1,'Visi Perusahaan','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo','home.png'),(2,'Misi Perusahaan','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo','laporan.png'),(3,'Sejarah Perusahaan','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo','1.png'),(4,'Dasar Hukum Perusahaan','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo','user.png');
/*!40000 ALTER TABLE `profil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testimoni`
--

DROP TABLE IF EXISTS `testimoni`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `testimoni` (
  `idtestimoni` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_posting` date NOT NULL,
  `namapengunjung` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  PRIMARY KEY (`idtestimoni`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testimoni`
--

LOCK TABLES `testimoni` WRITE;
/*!40000 ALTER TABLE `testimoni` DISABLE KEYS */;
INSERT INTO `testimoni` (`idtestimoni`, `tgl_posting`, `namapengunjung`, `email`, `pesan`) VALUES (2,'2016-10-21','ahmas bastiar','ahmad.bastiar@gin.co.id','pesan ini hanya testing saja .. terimah kasih ya'),(3,'2016-10-21','ochie','tre.ochi@ymail.com','pesan ini pun hanya sebagai sebagai sebagai'),(4,'2016-11-19','kjd','sk@gmail,com','dbdjhbdjh\r\n');
/*!40000 ALTER TABLE `testimoni` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'ruangpro_baligrafindo'
--

--
-- Dumping routines for database 'ruangpro_baligrafindo'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-03-20  8:45:09
