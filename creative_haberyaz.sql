-- MySQL dump 10.13  Distrib 5.5.37, for Linux (x86_64)
--
-- Host: localhost    Database: creative_haberyaz
-- ------------------------------------------------------
-- Server version	5.5.37-cll

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
-- Table structure for table `analiz`
--

DROP TABLE IF EXISTS `analiz`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `analiz` (
  `anid` int(11) NOT NULL AUTO_INCREMENT,
  `analizadi` text COLLATE utf8_turkish_ci NOT NULL,
  `analizsifre` text COLLATE utf8_turkish_ci NOT NULL,
  `analizprof` text COLLATE utf8_turkish_ci NOT NULL,
  `analizkod` text COLLATE utf8_turkish_ci NOT NULL,
  `analizstil` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`anid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `analiz`
--

LOCK TABLES `analiz` WRITE;
/*!40000 ALTER TABLE `analiz` DISABLE KEYS */;
INSERT INTO `analiz` (`anid`, `analizadi`, `analizsifre`, `analizprof`, `analizkod`, `analizstil`) VALUES (1,'k3ykubad@gmail.com','unalnadiyeizmir1996','70275722','Kod buraya gelecek','line');
/*!40000 ALTER TABLE `analiz` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `anketcevap`
--

DROP TABLE IF EXISTS `anketcevap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `anketcevap` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ankid` int(11) NOT NULL,
  `cevaplar` text COLLATE utf8_turkish_ci NOT NULL,
  `oy` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anketcevap`
--

LOCK TABLES `anketcevap` WRITE;
/*!40000 ALTER TABLE `anketcevap` DISABLE KEYS */;
INSERT INTO `anketcevap` (`id`, `ankid`, `cevaplar`, `oy`) VALUES (1,1,'AKP',1),(2,1,'MHP',10),(3,1,'CHP',3),(4,1,'BDP',1),(5,1,'HEPAR',1);
/*!40000 ALTER TABLE `anketcevap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `anketip`
--

DROP TABLE IF EXISTS `anketip`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `anketip` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `ipno` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` text COLLATE utf8_turkish_ci NOT NULL,
  `damga` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anketip`
--

LOCK TABLES `anketip` WRITE;
/*!40000 ALTER TABLE `anketip` DISABLE KEYS */;
INSERT INTO `anketip` (`aid`, `ipno`, `tarih`, `damga`) VALUES (1,'127.0.0.1','06.06.2014 20:48:46','1402076926');
/*!40000 ALTER TABLE `anketip` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `anketsoru`
--

DROP TABLE IF EXISTS `anketsoru`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `anketsoru` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `durum` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anketsoru`
--

LOCK TABLES `anketsoru` WRITE;
/*!40000 ALTER TABLE `anketsoru` DISABLE KEYS */;
INSERT INTO `anketsoru` (`id`, `baslik`, `durum`) VALUES (1,'Seçimleri Kim Kazanır ?',1),(2,'fdddffdgfddf',1);
/*!40000 ALTER TABLE `anketsoru` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `galeri`
--

DROP TABLE IF EXISTS `galeri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `galeri` (
  `gid` int(11) NOT NULL AUTO_INCREMENT,
  `gustid` int(11) NOT NULL,
  `galeriad` text COLLATE utf8_turkish_ci NOT NULL,
  `galerianayazi` text COLLATE utf8_turkish_ci NOT NULL,
  `galerietiket` text COLLATE utf8_turkish_ci NOT NULL,
  `galeriresim` text COLLATE utf8_turkish_ci NOT NULL,
  `galeridurum` int(11) NOT NULL,
  PRIMARY KEY (`gid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galeri`
--

LOCK TABLES `galeri` WRITE;
/*!40000 ALTER TABLE `galeri` DISABLE KEYS */;
INSERT INTO `galeri` (`gid`, `gustid`, `galeriad`, `galerianayazi`, `galerietiket`, `galeriresim`, `galeridurum`) VALUES (1,0,'Marlyn Moore Resimleri','','deneme,galeri,etiket','yuklenenler/galeri/4308_content-2.png',1),(2,1,'Altkategori Test','fgdgfdgfd6545645454564546','asdsasd,sda,das,adasd','yuklenenler/galeri/4953_content-4.png',1);
/*!40000 ALTER TABLE `galeri` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `galeriresim`
--

DROP TABLE IF EXISTS `galeriresim`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `galeriresim` (
  `grid` int(11) NOT NULL AUTO_INCREMENT,
  `galustid` int(11) NOT NULL,
  `galeriaciklama` text COLLATE utf8_turkish_ci NOT NULL,
  `galerifoto` text COLLATE utf8_turkish_ci NOT NULL,
  `galerihit` int(11) NOT NULL,
  PRIMARY KEY (`grid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galeriresim`
--

LOCK TABLES `galeriresim` WRITE;
/*!40000 ALTER TABLE `galeriresim` DISABLE KEYS */;
INSERT INTO `galeriresim` (`grid`, `galustid`, `galeriaciklama`, `galerifoto`, `galerihit`) VALUES (1,2,'fdssfdfds','yuklenenler/galeri/1448_mainbg.png',0),(2,2,' dsadas saddsa sadd sasdsdads das dsadas das sdaasd dassda sada sdsadsadsasd dsadsadserwereew','../yuklenenler/galeri/6304_banner_tf_125x125_v3.gif',0),(3,1,'dsffdssfd34222222222222222222222222222222','../yuklenenler/galeri/6211_image3.jpg',0),(4,1,'fdsdfsfdsfds34343','yuklenenler/galeri/4391_gray_jean.png',0),(5,1,'dgfhhghgfhgf','../yuklenenler/galeri/59503174_gallery-9.png',0),(7,2,'654654645654','../yuklenenler/galeri/18530273_gallery-12.png',0);
/*!40000 ALTER TABLE `galeriresim` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gazete`
--

DROP TABLE IF EXISTS `gazete`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gazete` (
  `gazid` int(11) NOT NULL AUTO_INCREMENT,
  `gazeteresim` text NOT NULL,
  `gazeteust` int(11) NOT NULL,
  PRIMARY KEY (`gazid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gazete`
--

LOCK TABLES `gazete` WRITE;
/*!40000 ALTER TABLE `gazete` DISABLE KEYS */;
INSERT INTO `gazete` (`gazid`, `gazeteresim`, `gazeteust`) VALUES (1,'../yuklenenler/gazete/4638_image5.jpg',1),(2,'../yuklenenler/gazete/9182_alternative.png',1),(3,'../yuklenenler/gazete/20373535_manga1.png',1),(4,'../yuklenenler/gazete/5624_',1);
/*!40000 ALTER TABLE `gazete` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gazetetarih`
--

DROP TABLE IF EXISTS `gazetetarih`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gazetetarih` (
  `gazid` int(11) NOT NULL AUTO_INCREMENT,
  `gtarih` text NOT NULL,
  PRIMARY KEY (`gazid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gazetetarih`
--

LOCK TABLES `gazetetarih` WRITE;
/*!40000 ALTER TABLE `gazetetarih` DISABLE KEYS */;
INSERT INTO `gazetetarih` (`gazid`, `gtarih`) VALUES (1,'07/14/2014');
/*!40000 ALTER TABLE `gazetetarih` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `haberkategori`
--

DROP TABLE IF EXISTS `haberkategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `haberkategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `haberkatad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `habersira` int(11) NOT NULL,
  `haberresim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `altgoster` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ustgoster` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `yorumkapat` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ustkategori` int(11) NOT NULL,
  `kataktif` int(11) NOT NULL,
  `gundem` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `haberkategori`
--

LOCK TABLES `haberkategori` WRITE;
/*!40000 ALTER TABLE `haberkategori` DISABLE KEYS */;
INSERT INTO `haberkategori` (`id`, `haberkatad`, `habersira`, `haberresim`, `altgoster`, `ustgoster`, `yorumkapat`, `ustkategori`, `kataktif`, `gundem`) VALUES (1,'Gündem',1,'yuklenenler/haber/5250_logo.png','1','1','',0,1,1),(2,'Politika',2,'yuklenenler/haber/7060_custom_hsb_s.png','1','1','',0,1,1),(3,'EKONOMİ',3,'yuklenenler/haber/6530_f-logo.png','1','1','',0,1,1),(4,'Dünya',5,'yuklenenler/haber/985_1.png','1','1','1',0,1,1),(5,'Güncel',1,'yuklenenler/haber/723_985_1.png','1','1','',1,1,0),(6,'Spor',6,'yuklenenler/haber/6806_manga1.png','1','1','',0,1,0);
/*!40000 ALTER TABLE `haberkategori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `haberler`
--

DROP TABLE IF EXISTS `haberler`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `haberler` (
  `hid` int(11) NOT NULL AUTO_INCREMENT,
  `tarihsaat` text COLLATE utf8_turkish_ci NOT NULL,
  `haberkategori` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `koseid` int(11) NOT NULL,
  `hbaslik` text COLLATE utf8_turkish_ci NOT NULL,
  `hetiket` text COLLATE utf8_turkish_ci NOT NULL,
  `hkisa` text COLLATE utf8_turkish_ci NOT NULL,
  `hicerik` text COLLATE utf8_turkish_ci NOT NULL,
  `hmanset` text COLLATE utf8_turkish_ci NOT NULL,
  `videokod` text COLLATE utf8_turkish_ci NOT NULL,
  `aktif` int(11) NOT NULL,
  `mansetgoster` int(11) NOT NULL,
  `anasayfagoster` int(11) NOT NULL,
  `ustmanset` int(11) NOT NULL,
  `sondakika` int(11) NOT NULL,
  `flash` int(11) NOT NULL,
  `yorumakapa` int(11) NOT NULL,
  `yorumsayisi` int(11) NOT NULL,
  `okunmasayisi` int(11) NOT NULL,
  PRIMARY KEY (`hid`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `haberler`
--

LOCK TABLES `haberler` WRITE;
/*!40000 ALTER TABLE `haberler` DISABLE KEYS */;
INSERT INTO `haberler` (`hid`, `tarihsaat`, `haberkategori`, `koseid`, `hbaslik`, `hetiket`, `hkisa`, `hicerik`, `hmanset`, `videokod`, `aktif`, `mansetgoster`, `anasayfagoster`, `ustmanset`, `sondakika`, `flash`, `yorumakapa`, `yorumsayisi`, `okunmasayisi`) VALUES (1,'20/5/2014 1:53:46','1',0,'Soma faciasında patron tutuklandı!','Soma\'daki maden faciasıyla ilgili olarak Yönetim Kurulu Başkanı Can Gürkan tutuklandı. ','Soma\'daki maden faciasıyla ilgili olarak Yönetim Kurulu Başkanı Can Gürkan tutuklandı. ','<div><strong>Akhisar Cumhuriyet Başsavcılığı\'nın y&uuml;r&uuml;tt&uuml;ğ&uuml; Soma\'daki maden faciasıyla ilgili tutuklu sayısı 8\'e y&uuml;kseldi. Serbest bırakılacağı s&ouml;ylenen Can G&uuml;rkan, Genel M&uuml;d&uuml;r Ramazan Doğru\'nun \"imzalar sahte\" a&ccedil;ıklamasının ardından bir kez daha ifade verdi. G&uuml;rkan &ccedil;ıkarıldığı mahkemece tutuklanırken, tutuklu sayısı 8\'e y&uuml;kseldi.</strong><br /><br />Soma\'daki maden faciasıyla ilgili y&uuml;r&uuml;t&uuml;len soruşturma kapsamında g&ouml;zaltına alınan şirketin y&ouml;netim kurulu başkanı Can G&uuml;rkan tutuklandı.</div>\r\n<div>&nbsp;</div>\r\n<div>Akhisar Cumhuriyet Başsavcılığı\'nın koordinasyonunda y&uuml;r&uuml;t&uuml;len soruşturma kapsamında bug&uuml;n jandarma ekipleri tarafından g&ouml;zaltına alınan Soma Madencilik AŞ Genel Y&ouml;netim Kurulu Başkanı G&uuml;rkan,<a class=\"labels\" style=\"color: #4d4e53;\" href=\"http://www.internethaber.com/search_tag.php?tags=savc%C4%B1l%C4%B1k\" target=\"_blank\"> savcılık </a>sorgusunun ardından n&ouml;bet&ccedil;i mahkemeye sevk edildi.</div>\r\n<div>&nbsp;</div>\r\n<div>N&ouml;bet&ccedil;i mahkeme hakimi, ifadesi alınan G&uuml;rkan\'nın tutuklanmasını kararlaştırdı. B&ouml;ylece tutuklananların sayısı 8\'e y&uuml;kseldi.</div>\r\n<div>&nbsp;</div>\r\n<div>Manisa\'nın Soma il&ccedil;esinde 13 Mayıs\'ta 301 iş&ccedil;inin yaşamını yitirdiği, 486 kişinin yaralandığı facia sonrası Akhisar Cumhuriyet Başsavcılığı koordinasyonunda başlatılan soruşturmada, TCK\'nın 85/2 maddesi gereğince \"taksirle birden fazla insanın &ouml;l&uuml;m&uuml;ne sebebiyet vermek\" su&ccedil;lamasıyla 26 kişi g&ouml;zaltına alınmıştı.</div>\r\n<div>&nbsp;</div>\r\n<div>Adliyeye sevk edilen ş&uuml;phelilerden Soma Maden İşletme M&uuml;d&uuml;r&uuml; Akın &Ccedil;elik, m&uuml;hendisler Yal&ccedil;ın Erdoğan, Ertan Ersoy ile madenin Emniyet Vardiya amirleri Yasin Kurnaz, Hilmi Kazık, Mehmet Ali G&uuml;nay &Ccedil;elik ve maden ocağının genel m&uuml;d&uuml;r&uuml; Ramazan Doğru tutuklanmıştı.&nbsp;</div>','yuklenenler/haberler/291900_34205.jpg','kod',1,1,1,1,1,0,1,0,26),(2,'20/5/2014 1:57:35','2',0,'Soma\'da son durum! Gül maden ocağında','aas,saasas,sasaas,assa','Soma\'da son durum... Cumhurbaşkanı Abdullah Gül ile TBMM Başkanı Cemil Çiçek, facianın yaşandığı maden ocağında incelemelerde bulundu.','<p><span style=\"color: #ff0000;\"><strong>SOMA\'daki facianın yaşandığı madene giden Cumhurbaşkanı G&uuml;l, kaybın &ccedil;ok b&uuml;y&uuml;k olduğunu s&ouml;yledi. </strong></span></p>\r\n<p><span style=\"color: #ff0000;\"><strong>Soruşturmanın başladığını hatırlatan G&uuml;l, &ldquo;Bu t&uuml;r olayların yaşanmaması gerekir. Kurallar g&ouml;zden ge&ccedil;irilmeli&rdquo; uyarısında bulunuldu.</strong></span></p>\r\n<p>Cumhurbaşkanı Abdullah G&uuml;l ve TBMM Başkanı Cemil &Ccedil;i&ccedil;ek, Soma\'daki maden faciasının yaşandığı b&ouml;lgede incelemelerde bulundu. Akhisar Devlet Hastanesi\'nde tedavi g&ouml;ren yaralıları ziyaret eden G&uuml;l ve &Ccedil;i&ccedil;ek, daha sonra beraberindekilerle Eynez b&ouml;lgesindeki maden ocağına ge&ccedil;ti.</p>\r\n<p>Burada Enerji ve Tabii Kaynaklar Bakanı Taner Yıldız, Aile ve Sosyal Politikalar Bakanı Ayşenur İslam tarafından karşılanan G&uuml;l ve &Ccedil;i&ccedil;ek\'e &ccedil;alışmalarla ilgili bilgi verildi.</p>\r\n<p><span style=\"background-color: #ffcc00; color: #000000;\"><a href=\"http://www.internethaber.com/abdullah-gul-somada-foto-galerisi-33423-p1.htm\" target=\"_blank\"><span style=\"font-size: medium; background-color: #ffcc00; color: #000000;\"><strong>Soma\'da son durum! G&uuml;l maden ocağında<em>&nbsp;İşte o fotoğraflar</em></strong></span></a></span><span style=\"color: #000000;\"><br /><br />G&uuml;l, &Ccedil;i&ccedil;ek ve beraberindekiler daha sonra maden sahasında incelemelerde bulundu.İş&ccedil;i yakınlarıyla g&ouml;r&uuml;şen G&uuml;l ve &Ccedil;i&ccedil;ek TKİ Kurumu Eli M&uuml;essesi M&uuml;d&uuml;rl&uuml;ğ&uuml; Eynez Yeraltı Kontrol Şube M&uuml;d&uuml;rl&uuml;ğ&uuml;\'ne ge&ccedil;ti.</span></p>\r\n<p>Cumhurbaşkanı G&uuml;l ve TBMM Başkanı &Ccedil;i&ccedil;ek\'e, Enerji ve Tabii Kaynaklar Bakanı Yıldız, Aile ve Sosyal Politikalar Bakanı İslam, Sağlık Bakanı Mehmet M&uuml;ezzinoğlu eşlik etti.</p>\r\n<p>Cumhurbaşkanı Abdullah G&uuml;l, Soma\'da maden faciasının ardından arama kurtarma &ccedil;alışmalarının yapıldığı b&ouml;lgede incelemede bulunduktan sonra vatandaşlarla g&ouml;r&uuml;şt&uuml;.</p>\r\n<p>Bir vatandaşın maden ocağından &ccedil;ıkarılan iş&ccedil;ilerin isim listesine ulaşmakta zorluk yaşadıklarını belirtmesi &uuml;zerine Enerji ve Tabii Kaynaklar Bakanı Taner Yıldız, \"&Ccedil;ıkarttığımız iş&ccedil;i kardeşlerimizin otopsi ve teşhis işlemleri tamamlananlar ailelerine bildiriliyor\" dedi.</p>\r\n<p>Bu arada, Cumhurbaşkanı G&uuml;l, maden ocağı b&ouml;lgesinde incelemelerde bulunurken bir iş&ccedil;i yakını, cenazeleri alma konusunda yaşadıkları sıkıntıyı dile getirip, şikayet&ccedil;i oldu.</p>\r\n<p>Cumhurbaşkanı G&uuml;l, daha sonra kriz merkezine ge&ccedil;erek maden ocağında devam eden arama kurtarma &ccedil;alışmalarıyla ilgili bilgi aldı.</p>\r\n<p><span style=\"color: #ff0000;\"><strong>KURALLARIMIZI G&Ouml;ZDEN GE&Ccedil;İRMELİYİZ</strong></span></p>\r\n<p>Daha sonra basın toplantısı d&uuml;zenleyen G&uuml;l, <strong>\"Acı b&uuml;y&uuml;kt&uuml;r, bu acı hepimizin acısıdır, &ccedil;ok b&uuml;y&uuml;k bir faciayla karşı karşıyayız. Yaraları sarmak i&ccedil;in hepimizin el birliği i&ccedil;inde olmamız gerekiyor, b&uuml;y&uuml;k bir dayanışma g&ouml;stermemiz gerekiyor\"</strong> dedi.</p>\r\n<p>G&uuml;l, Soma K&ouml;m&uuml;r İşletmeleri Maden Ocağı\'ndaki incelemelerinin ardından TBMM Başkanı Cemil &Ccedil;i&ccedil;ek, Aile ve Sosyal Politikalar Bakanı Ayşenur İslam, Enerji ve Tabii Kaynaklar Bakanı Taner Yıldız ve Sağlık Bakanı Mehmet M&uuml;ezzinoğlu ile kriz merkezine ge&ccedil;ti. Burada brifing alan G&uuml;l, &ccedil;ıkışta basın mensuplarına a&ccedil;ıklamalarda bulundu.</p>\r\n<p>Soma\'da &ccedil;ok b&uuml;y&uuml;k bir facia ile karşı karşıya olunduğunu dile getiren G&uuml;l, hayatını kaybedenlerin mekanlarının cennet olmasını diledi. Hayatlarını kaybedenlerin ailelerine, anne, baba, eş ve &ccedil;ocuklarıyla millete başsağlığı dileklerini ileten G&uuml;l, maden ve yeraltında alınteri akıtarak, rızık i&ccedil;in &ccedil;alışmanın kutsal olduğunu vurguladı.</p>\r\n<p>G&uuml;l, facianın ardından elden gelen her şeyin yapıldığına dikkati &ccedil;ekerek, kurtarma &ccedil;alışmalarının ziyaret ve incelemelere rağmen kesintisiz devam ettiğini belirtti. Olayın haber alındığı anda işin vehametinin anlaşıldığına ve devletin de b&uuml;t&uuml;n imkanlarını seferber ettiğine dikkati &ccedil;eken G&uuml;l, s&ouml;zlerini ş&ouml;yle s&uuml;rd&uuml;rd&uuml;:</p>\r\n<p><strong>\"Maalesef kaybımız b&uuml;y&uuml;k. Her ailenin, her canının acısı, hepimizin acısıdır. Şunu herkesin bilmesini isterim ki bir kişi, bir kişidir. Bir kayıp o ailenin kıyameti demektir. Dolayısıyla \"Acı b&uuml;y&uuml;kt&uuml;r, bu acı hepimizin acısıdır, &ccedil;ok b&uuml;y&uuml;k bir faciayla karşı karşıyayız. Yaraları sarmak i&ccedil;in hepimizin el birliği i&ccedil;inde olmamız gerekiyor, b&uuml;y&uuml;k bir dayanışma g&ouml;stermemiz gerekiyor. Millet olarak, T&uuml;rk milleti bu dayanışmayı muhakkak g&ouml;sterecektir.\"</strong></p>\r\n<p>D&uuml;nyanın bir&ccedil;ok yerinden başsağlığı mesajları geldiğini, acıları paylaşarak yas ilan eden &uuml;lkeler bulunduğuna işaret eden G&uuml;l, <strong>\"Bu acıların yaşanmaması gerekir. Bu acıları gelişmiş &uuml;lkeler minimize ettilerse, yaşamıyorlarsa artık, biz de kurallarımızı tekrar g&ouml;zden ge&ccedil;irmeli, yapılması gereken tedbirleri tekrar hep almalıyız. Bu doğrultuda Devlet Denetleme Kurulu (DDK) olarak tavsiyelerimiz var. Eminim ki bunlar da ışık tutacaktır, bu d&uuml;zenlemelere\"</strong> değerlendirmesinde bulundu.</p>\r\n<p>G&uuml;l, bu acıların bir daha yaşanmaması i&ccedil;in ne gerekiyorsa hepsinin yapılacağını kaydederek, <strong>\"Biraz &ouml;nce verilen bilgilerde g&ouml;rd&uuml;m ki bu olayla ilgili hem idari hem diğer her t&uuml;rl&uuml; soruşturmalar başlamış, titizlikle muhakkak ki bunlar da devam edecektir\"</strong> diye konuştu.</p>\r\n<p>Madencilerin, eşleri, &ccedil;ocukları, anne ve babalarına Allah\'tan sabır dileyen G&uuml;l, \"Buralardan alacağımız derslerle bir daha bu acıları yaşamamak i&ccedil;in de ne gerekirse bunların muhakkak ki yapılması şarttır. Devletimiz, h&uuml;k&uuml;metimiz bu acılara bir nebze de olsa merhem olmak i&ccedil;in, ailelere yardım i&ccedil;in ne gerekiyorsa yapacaktır\" dedi.</p>\r\n<p><strong>\"Bir kez daha milletimizin başı sağolsun. B&uuml;t&uuml;n ailelerin acılarını ayrı ayrı paylaştığımı bir kez daha paylaşmak istiyorum\"</strong> diyerek bitiren G&uuml;l, madenden ayrılmadan &ouml;nce yanına gelen acılı bir madenci yakınıyla konuştu.</p>\r\n<p><span style=\"color: #ff0000;\"><strong>\'BİZE YARDIM EDİN NE OLUR\'</strong></span></p>\r\n<p>Bu arada, Abdullah G&uuml;l, konuşma yaparken bir kişi <strong>\"Acımız hepimizin, bize yardım edin ne olur&rdquo;</strong> diye bağırdı.</p>','yuklenenler/haberler/385895_33814.jpg','kodu',1,1,1,1,1,1,0,0,20),(3,'20/5/2014 1:1:6','3',0,'KİM 89. şubesini Beylikdüzü’nde açtı','KİM 89. şubesini Beylikdüzü’nde açtı','Market sektörünün öncü firmaları arasında yer alan KİM Marketler Zinciri, 89’uncu şubesini İstanbul Beylikdüzü’nde açtı.','<p><span id=\"contextual\" style=\"font-size: medium !important;\">Son d&ouml;nemde yaptığı satın alma ve yeni mağaza yatırımlarıyla hızlı b&uuml;y&uuml;mesini s&uuml;rd&uuml;ren Kim Marketler Zinciri, yeni mağazasının a&ccedil;ılışını yaptı. Beylikd&uuml;z&uuml;<span style=\"text-decoration: underline;\">&nbsp;</span>Mağazasıyla birlikte 89 şubeye ulaşan Kim, yıl sonu itibariyle 100 mağaza hedefliyor.<br /><br />Yerli s&uuml;permarket kategorisinde pazarın &ouml;nc&uuml; firmaları arasında yer alan Kim Marketler Zinciri, Beylikd&uuml;z&uuml; şubesini a&ccedil;tı. A&ccedil;ılış i&ccedil;in d&uuml;zenlenen t&ouml;rene Beylikd&uuml;z&uuml; Belediye Başkanı Ekrem İmamoğlu, Kim Grup Y&ouml;netim Kurulu Başkanı Erol Ersan, Genel M&uuml;d&uuml;r Hamit Ak&ccedil;ay ve &ccedil;ok sayıda davetli katıldı.<br /><br />Sekt&ouml;re bakkal d&uuml;kkanı olarak adım atan Kim Marketlerinin İstanbul&nbsp;ile başladığı yatırımlarını T&uuml;rkiye\'nin tamamında ve yurt dışında s&uuml;rd&uuml;rd&uuml;ğ&uuml;n&uuml; ifade eden Genel M&uuml;d&uuml;r Ak&ccedil;ay, \"B&uuml;y&uuml;memizi ve yatırımlarımızı hız kesmeden devam ettireceğiz. Başarı hikayemizle yerli perakendecilerin global vizyonla hareket ettiğinde neler başarabileceğini ispatlamak istiyoruz. B&uuml;y&uuml;yen, gelişen T&uuml;rkiye\'nin uluslararası markalar &ccedil;ıkarmak i&ccedil;in ilk yapması gerekenin perakendeci ihra&ccedil; etmek olduğunu d&uuml;ş&uuml;n&uuml;yoruz. Bu vizyonla yurt dışında mağazalar a&ccedil;arak bize inanan firmaların da mallarını d&uuml;nyaya a&ccedil;acağız. Perakende sekt&ouml;r&uuml;n&uuml;n yoğun rekabet nedeniyle daraldığı d&ouml;nemde y&uuml;zde 40\'a yakın b&uuml;y&uuml;me rakamlarına ulaştık. Kendimizden emin adımlarla kararlı yatırımlarımıza devam edeceğiz. T&uuml;rkiye\'nin istihdama, yatırıma ve b&uuml;y&uuml;meye ihtiyacı var\" diye konuştu.<br /><br /><strong>İLK ALIŞVERİŞİ BAŞKAN İMAMOĞLU YAPTI</strong><br />Beylikd&uuml;z&uuml;&rsquo;nde 89. Şubesi a&ccedil;ılan KİM Market&rsquo;in a&ccedil;ılışını ger&ccedil;ekleştiren Belediye Başkanı Ekrem İmamoğlu, bereket ve şans getirmesi dileği ile marketin ilk m&uuml;şterisi oldu. Kuruyemiş reyonundan fındık ve ceviz alan İmamoğlu, y&ouml;netime bol kazan&ccedil; diledi.<br />Girişimi tebrik eden İmamoğlu, &ldquo;B&uuml;nyenizde bol istihdam sağlayarak b&ouml;lgede yaşayan vatandaşlarımıza iş bulmaları konusunda yardım etmenizi ve &ccedil;evre konusunda da duyarlılık g&ouml;stermenizi diliyorum\" dedi.</span></p>','yuklenenler/haberler/736237_326751.jpg','sdds',1,1,1,1,1,1,0,0,19),(4,'20/5/2014 1:6:16','4',0,'Almanya\'dan Başbakan Erdoğan\'a mesaj','Almanya\'dan Başbakan Erdoğan\'a mesaj','Almanya Hükümet Sözcüsü Steffen Seibert, Başbakan Recep Tayyip Erdoğan\'ın 24 Mayıs\'ta Köln kentinde yapmayı planladığı etkinlikle ilgili açıklama yaptı.  Başbakan Erdoğan\'ın daha önce Berlin ve Köln\'de programlara katıldığını hatırlatan \"Bizim beklentimiz, konuşmanın duyarlı ve sorumluluk bilincinde olması\" dedi. Seibert, \"Bu şekilde Almanya\'da yaşayan farklı toplumların birlikte yaşamına katkı sağlanması, etkinliğin de amacına iyi bir şekilde ulaşmasını bekliyoruz\" ifadelerini kullandı.','<p>Seibert, Federal Basın Merkezi\'nde d&uuml;zenlendiği basın toplantısında, <a class=\"LinkBodyKeywords\" href=\"http://www.haberturk.com/etiket/ba%C5%9Fbakan_erdo%C4%9Fan\">Başbakan Erdoğan</a>\'ın daha &ouml;nce Berlin ve <a class=\"LinkBodyKeywords\" href=\"http://www.haberturk.com/etiket/k%C3%B6ln\">K&ouml;ln</a>\'de programlara katıldığını hatırlattı. \"Bizim beklentimiz, konuşmanın duyarlı ve sorumluluk bilincinde olması\" diyen Seibert, \"Bu şekilde <a class=\"LinkBodyKeywords\" href=\"http://www.haberturk.com/etiket/almanya\">Almanya</a>\'da yaşayan farklı toplumların birlikte yaşamına katkı sağlanması, etkinliğin de amacına iyi bir şekilde ulaşmasını bekliyoruz\" ifadesini kullandı.</p>\r\n<p>\"Alman h&uuml;k&uuml;metinin, programda hassas davranılmasını ve sorumluluk taşınmasını beklediğini\" kaydeden Seibert, \"<a class=\"LinkBodyKeywords\" href=\"http://www.haberturk.com/etiket/ba%C5%9Fbakan_erdo%C4%9Fan\">Başbakan Erdoğan</a>\'ı, &ccedil;ok yakın ve &ouml;nemli partner olan bir &uuml;lkenin başbakanı olarak <a class=\"LinkBodyKeywords\" href=\"http://www.haberturk.com/etiket/almanya\">Almanya</a>\'da memnuniyetle bekliyoruz\" dedi.<br /><br />Dışişleri Bakanlığı S&ouml;zc&uuml;s&uuml; Martin Schaefer ise Ukrayna\'da 25 Mayıs\'ta yapılacak devlet başkanlığı se&ccedil;imleriyle ilgili, \"Bazı şehirlerde, b&ouml;lgelerde ve k&ouml;ylerde se&ccedil;imlerin ger&ccedil;ekleşemeyeceği şimdiden belli\" dedi. Se&ccedil;imlerin Kırım\'da da yapılmasının m&uuml;mk&uuml;n olmayacağını belirten Schaefer, <a class=\"LinkBodyKeywords\" href=\"http://www.haberturk.com/etiket/almanya\">Almanya</a> a&ccedil;ısında Kırım\'ın hala Ukrayna\'ya ait olduğunu kaydetti.<br /><br />Se&ccedil;imler i&ccedil;in Avrupa G&uuml;venlik ve İşbirliği Teşkilatı\'nın (AGİT) 100 g&ouml;zlemcisinin uzun vadeli b&ouml;lgede bulunacağını belirten Schaefer, \"100 g&ouml;zlemciden 8\'i Almanya\'dan gidecek. 900 AGİT g&ouml;zlemcisi kısa vadeli s&uuml;re i&ccedil;in &ouml;n&uuml;m&uuml;zdeki g&uuml;nlerde &uuml;lkeye gidecek\" diye konuştu.<br /><br />Martin Schaefer, \"Rusya Devlet Başkanı Vladimir Putin\'in, Rus ordusuna Ukrayna-Rusya sınırından geri &ccedil;ekilme &ccedil;ağrısında bulunduğu y&ouml;n&uuml;ndeki haberleri işittik. Bu haberler doğru ise bunu gerilimin tırmanmasının gerilemesine y&ouml;nelik bir adım olarak karşılıyoruz\" ifadesini kullandı.</p>','yuklenenler/haberler/176910_949695_detay.jpg','',1,1,1,1,1,1,0,0,16),(5,'20/5/2014 21:15:0','4',0,'Sırplar\'a yardım eden Avrupa Bosna\'yı unuttu','Sırplar\'a yardım eden Avrupa Bosna\'yı unuttu','İngiltere, Fransa ve Almanya\'nın dahil olduğu 23 ülke, Bosna Hersek ve Sırbistan\'daki sel felaketi sonrası yalnızca Sırplar\'a yardımda bulundu','<p>T&uuml;rkiye, İHH, TİKA ve Kızılay gibi kuruluşlarıyla soluğu Boşnaklar\'ın yanında aldı. 4 kişinin hayatını kaybettiği Podjela, Dubrave, Kaleseija, Lukavica, Doboj İstok, Doboj, Matuzic, Maglaj\'ın bazı b&ouml;lgelerine yardım ulaştırıldı.</p>\r\n<h4>T&Uuml;RKİYE HEM BOSNA\'YA HEM SIRBİSTAN\'A GİTTİ</h4>\r\n<p>Yetkililer, bir&ccedil;ok evin sular altında kaldığını a&ccedil;ıkladı. Arama kurtarma ekipleri, insanları k&uuml;&ccedil;&uuml;k botlarla g&uuml;venli alana taşırken, bilan&ccedil;onun ağırlaşmasından endişe ettiklerini s&ouml;yledi. Bir ekip de,Sırbistan\'a gitti.</p>\r\n<p><a class=\"foto-galeri\" href=\"http://www.ensonhaber.com/galeri/bosnada-son-yillarin-en-buyuk-sel-felaketi\" target=\"_blank\">BOSNA\'DA SEL FELAKETİ</a></p>\r\n<p><img src=\"http://i.ensonhaber.com/resimler/diger/bosna_7379.jpg\" alt=\"\" width=\"470\" height=\"295\" /></p>\r\n<h4>AVRUPALILAR YALNIZCA SIRBİSTAN\'A</h4>\r\n<p>Ancak d&uuml;n aralarında İtalya, Fransa., Hollanda, Almanya İngiltere\'nin bulunduğu 23 &uuml;lkenin Sırbistan\'a yardım malzemeleri g&ouml;nderdiği ama Bosna\'yı g&ouml;rmezden geldiği ifade edildi. M&uuml;sl&uuml;manların fazla olması nedeniyle yardımların Hıristiyan n&uuml;fusa sahip Sırbistan\'a g&ouml;nderildiği iddia edildi.</p>\r\n<p>Bu arada Bosnalıların acil olarak gıda, temizlik malzemesi, battaniye, temiz su ve temiz elbiselere ihtiyacı olduğu belirtildi. D&uuml;nya tenisinin &ouml;nde gelen raketlerinden Novak Djokovic, Bosna Hersek ve Sırbistan\'ı vuran sel felaketine duyarsız kalmadı. Sırp raket, yardım kampanyası i&ccedil;in &ccedil;alışmalara başlayacağını s&ouml;yledi.</p>','yuklenenler/haberler/309143_bosna_1527.jpg','',1,1,1,1,1,1,0,0,4),(6,'20/5/2014 21:36:13','1',0,'Meclis\'in gündemi Soma','Meclis\'in gündemi Soma','Meclis Genel Kurulu bugünkü çalışmalarına, Soma\'daki maden faciasını konuşarak başladı. ','<p>Başkanvekili Sadık Yakut, T&uuml;rkiye\'yi yasa boğan Soma faciasına ilişkin&nbsp;milletvekillerine s&ouml;z verdi. Konuşmaların t&uuml;m&uuml;, Soma\'daki maden faciasına ayrıldı.</p>\r\n<p>Genel Kurul\'a&nbsp;Enerji ve Tabii Kaynaklar Bakanı Taner Yıldız ile &Ccedil;alışma ve Sosyal G&uuml;venlik Bakanı Faruk &Ccedil;elik de katıldı. Taner Yıldız, h&uuml;k&uuml;met olarak konuşmalara yanıt verdi.&nbsp;Meclis Genel Kurulu\'na hitap ederek milletvekillerini bilgilendirdi.</p>\r\n<h4>CHP\'DEN BAKANLAR HAKKINDA GENSORU&nbsp;</h4>\r\n<p>CHP, Soma\'da yaşanan maden faciasıyla ilgili olarak Enerji ve Tabii Kaynaklar Bakanı Taner Yıldız ile &Ccedil;alışma ve Sosyal G&uuml;venlik Bakanı Faruk &Ccedil;elik hakkında gensoru &ouml;nergesi verdi.</p>\r\n<p><img src=\"http://i.ensonhaber.com/resimler/diger/taner-yildiz-faruk-celik_9788.jpg\" alt=\"\" width=\"470\" height=\"265\" /></p>\r\n<h4>SORUMLU SADECE İŞLETMECİ DEĞİL</h4>\r\n<p>Yıldız, tek sorumlunun işletmeci olmadığını; T&uuml;rkiye K&ouml;m&uuml;r İşletmeleri (TKİ), Enerji ve &Ccedil;alışma bakanlıklarının da sorumlukluklarının olduğunu hatırlattı.<strong><em> \"Bir afet eğer doğal afet değilse bir kusur vardır.\"</em></strong> dedi.</p>','yuklenenler/haberler/477936_taner_7490.jpg','',1,1,1,1,1,1,0,0,6),(7,'21/5/2014 23:09:14','1',2,'UEFA\'dan iki Süper Lig kulübüne şok!','UEFA\'dan iki Süper Lig kulübüne şok!','UEFA, Spor Toto Süper Lig ekiplerinden Sivasspor ve Eskişehirspor\'a şike davası kapsamında disiplin soruşturması başlattığını açıkladı.','<div id=\"bodyText\" class=\"haber\">\r\n<p><span style=\"line-height: 13pt;\">Şikede sıfır tolerans ilkesini benimseyen ve ma&ccedil;ın sonucuna doğrudan veya dolaylı olarak etkide bulunan kul&uuml;plere cezai yaptırımda bulunma kararı alan <a class=\"link_keywords\" title=\"UEFA\" href=\"http://spor.haber7.com/etiket/uefa\" target=\"_blank\">UEFA</a>, bu tutumu kapsamında <a class=\"link_keywords\" title=\"Spor\" href=\"http://spor.haber7.com\" target=\"_blank\">Spor</a> Toto S&uuml;per Lig ekiplerinden <a class=\"link_keywords\" title=\"Sivasspor\" href=\"http://spor.haber7.com/etiket/sivasspor\" target=\"_blank\">Sivasspor</a> ve <a class=\"link_keywords\" title=\"Eskişehirspor\" href=\"http://spor.haber7.com/etiket/eski%C5%9Fehirspor\" target=\"_blank\">Eskişehirspor</a>\'a disiplin soruşturması a&ccedil;tı.&nbsp;</span></p>\r\n<p>UEFA\'nın resmi sitesinden yapılan a&ccedil;ıklamada cezai yaptırımlara ilişkin detaylı bilgi verilmezken, Eskişehirspor ve Sivasspor hakkında kararın 2-3 Haziran\'da Nyon\'da yapılacak toplantıda belli olacağı ifade edildi.</p>\r\n<p><span style=\"color: #0000ff;\"><strong>AVRUPA TEHLİKESİ KAPIDA!</strong></span></p>\r\n<p>UEFA resmi sitesi aracılığıyla yaptığı s&ouml;z konusu a&ccedil;ıklamada, talimatnamelerdeki maddelere dikkat &ccedil;ekerken, bu maddelere dayanarak soruşturmalarda bulunanlar i&ccedil;in men kararı verme yetkisinin altını şu ifade ile &ccedil;izdi;</p>\r\n<p><strong>\"Adı <a class=\"link_keywords\" title=\"şike\" href=\"http://spor.haber7.com/etiket/%C5%9Fike\" target=\"_blank\">şike</a>ye karışmış <span style=\"font-weight: bold; line-height: 1.7; ;color: #ff0000; border-bottom: 3px double #ff0000; cursor: hand;\">kul&uuml;plerin</span> UEFA <span style=\"font-weight: bold; line-height: 1.7; ;color: #ff0000; border-bottom: 3px double #ff0000; cursor: hand;\">organizasyonlarına</span> katılımı konusunda hassasiyetimiz devam edecek.\"</strong></p>\r\n<p>Bu a&ccedil;ıklamanın ardından, Spor Toto Spor Lig ekiplerimizden Eskişehir ve Sivasspor kul&uuml;plerimize men cezası verilmesi bekleniyor.</p>\r\n</div>','yuklenenler/haberler/64392_uefa_asbaskanindan_flas_aciklama13735408820_h1048269.jpg','',1,1,1,1,1,1,0,0,18),(8,'21/05/2000 23:04:07','1',4,'Tayvan\'da bir genç katliam yaptı: 4 ölü ','Tayvan\'da bir genç katliam yaptı: 4 ölü ',' Tayvan\'da alkollü bir genç metroda dehşet saçtı. Elindeki bıçakla rastgele etrafındakilere saldırmaya başlayan üniversite 2. sınıf öğrencisi 4 kişiyi öldürdü, 21 kişiyi ise yaraladı.\r\n','<p style=\"font-size: 100%;\">Olay mahalline gelen polisler tarafından etkisiz hale getirilen gen&ccedil; tutuklandı.Katilin alkoll&uuml; olduğu belirlendi. 21 yaşındaki erkek &ouml;ğrencinin ailesinin dedikleri ise dehşet vericiydi. İfadeye g&ouml;re &ccedil;ocukları evde devamlı şiddet i&ccedil;eren <a class=\"link_keywords\" style=\"font-size: 100%;\" title=\"oyun\" href=\"http://www.haber7.com/etiket/oyun\" target=\"_blank\">oyun</a>lar oynuyordu.<br style=\"font-size: 100%;\" /><br style=\"font-size: 100%;\" />Başkent Taypey\'deki Banqiao <a class=\"link_keywords\" style=\"font-size: 100%;\" title=\"metro\" href=\"http://www.haber7.com/etiket/metro\" target=\"_blank\">metro</a> istasyonunda ger&ccedil;ekleşen <a class=\"link_keywords\" style=\"font-size: 100%;\" title=\"katliam\" href=\"http://www.haber7.com/etiket/katliam\" target=\"_blank\">katliam</a>da metronun i&ccedil;i ve istasyon adeta kan g&ouml;l&uuml;ne d&ouml;nd&uuml;. 10 santimetre uzunluğundaki bı&ccedil;akla etrafına saldıran alkoll&uuml; gen&ccedil; metroda dehşet sa&ccedil;tı. Rastgele etrafına saldıran gencin bı&ccedil;ak darbeleri sonucu 47 yaşındaki bir bayan, 20 ve 30 yaşlarında iki erkek hayatını kaybetti. Saldırıda ağır yaralanan 62 yaşındaki kadın yapılan t&uuml;m m&uuml;dahalelere rağmen kurtarılamadı, 4 saat sonra hayata veda etti. Ayrıca olayda 21 kişinin de yaralandığı belirtildi.</p>\r\n<p style=\"font-size: 100%;\"><a style=\"font-size: 100%;\" href=\"http://www.haber7.com/foto-galeri/30076-tayvanda-bir-genc-katliam-yapti-4-olu/p1\" target=\"_blank\"><img style=\"border: 1px solid black; font-size: 100%;\" src=\"http://image.cdn.haber7.com/haber/haber7/archive/basliksiz_2jpg_h126.jpg\" alt=\"\" width=\"605\" /></a><br style=\"font-size: 100%;\" /><br style=\"font-size: 100%;\" />Polis tarafından etkisiz hale getirilen zanlı, tutuklandı. Gencin Taizhong şehrinde Tunhai &Uuml;niversitesi ikinci sınıf &ouml;ğrencisi olduğu belirlendi.<br style=\"font-size: 100%;\" /><br style=\"font-size: 100%;\" />Cinayetleri işleyen gencin bir ay &ouml;ncesine kadar psikolojik tedavi g&ouml;rd&uuml;ğ&uuml; belirtildi. Tedavi, iyileştiği gerek&ccedil;esiyle doktoru tarafından bir ay &ouml;nce sonlandırılmıştı.</p>\r\n<p class=\"source\" style=\"font-size: 100%;\">Kaynak: CİHAN</p>','yuklenenler/haberler/651123_tayvanda_bir_genc_katliam_yapti_4_olu14006806760_h1160326.jpg','',1,0,0,0,1,0,0,0,9),(9,'25/05/2014 15:39:04','5',0,'Lütfi Elvan: YHT açılışı Haziran\'a ertelendi','Lütfi Elvan: YHT açılışı Haziran\'a ertelendi','Ulaştırma Bakanı Lütfi Elvan, yüksek hızlı trene yapılan sabotajlar nedeniyle açılışın ertelendiğini açıkladı.','<p style=\"margin-bottom: 15px;\">L&uuml;tfi Elvan, Eskişehir-İstanbul Y&uuml;ksek Hızlı Tren (YHT) hattında son 2 haftada toplam 200 sinyalizasyon ve haberleşme kablosunun kesildiğini belirterek sabotaj yapıldığını a&ccedil;ıkladı.</p>\r\n<h4>\"SU&Ccedil; DUYURUSUNDA BULUNDUK\"</h4>\r\n<p style=\"margin-bottom: 15px;\">Bakan Elvan, <em><strong>\"Yine son 2 haftada 70 ray devresi bağlantı sistemi birileri tarafından kesildi. Tabii biz bununla ilgili savcılığa su&ccedil; duyurusunda bulunduk. Gerekli &ccedil;alışmalar yapılıyor\"</strong></em> dedi.</p>\r\n<h4>\"2 HAFTADA 200 SİNYALİZASYON KABLOMUZ KESİLDİ\"</h4>\r\n<p style=\"margin-bottom: 15px;\"><em><strong>\"Son 2 haftada toplam 200 sinyalizasyon ve haberleşme kablolarımız kesildi. Yine son 2 haftada 70 ray devresi bağlantı sistemi birileri tarafından kesildi. Tabii biz bununla ilgili savcılığa su&ccedil; duyurusunda bulunduk. Gerekli &ccedil;alışmalar yapılıyor. &Ouml;zellikle bu g&uuml;zergahta bulunan valiliklerimiz ve jandarma g&uuml;venlik &ouml;nlemlerini artırdı. Sinyalizasyon kanallarımızın kapakları a&ccedil;ılıp, bu sinyal kabloları kesilip o şekilde bırakılıyor. Bu tamamıyla bir sabotaj girişimi.</strong></em></p>\r\n<p style=\"margin-bottom: 15px;\"><em><strong><img src=\"http://i.ensonhaber.com/resimler/diger/yht_6322.jpg\" alt=\"\" width=\"470\" height=\"279\" /><br /></strong></em></p>\r\n<h4>\"HIZLI TRENİN A&Ccedil;ILMASINDAN RAHATSIZ OLANLAR VAR\"</h4>\r\n<p style=\"margin-bottom: 15px;\"><em><strong>Sabotaj dışında bir şey olduğunu a&ccedil;ık&ccedil;ası d&uuml;ş&uuml;nm&uuml;yoruz. &Ouml;zellikle İstanbul-Ankara hızlı trenin a&ccedil;ılmasından rahatsız olan kesimlerin olduğunu d&uuml;ş&uuml;n&uuml;yorum. Buna başka bir anlam veremiyorum ama biz s&uuml;ratle bu bağlantıları yeniden kurmaya başladık.</strong></em></p>\r\n<h4>\"MUHTEMELEN HAZİRAN AYINA SARKACAK\"</h4>\r\n<p style=\"margin-bottom: 15px;\"><em><strong>T&uuml;m engellemelere rağmen biz Eskişehir-İstanbul YHT hattını kısa bir s&uuml;re i&ccedil;erisinde a&ccedil;acağız. Mayıs ayının sonuna doğru y&uuml;ksek hızlı tren hattını a&ccedil;acağımızı ifade etmiştim. Bu muhtemelen Haziran ayına sarkacak. Haziran ayının muhtemelen ikinci yarısından sonra bu hızlı trenimizi inşallah a&ccedil;mış olacağız. Trenin kendisinin test &ccedil;alışmalarını tamamlamıştık, sadece sinyalizasyon b&ouml;l&uuml;m&uuml; kalmıştı.</strong></em></p>\r\n<p style=\"margin-bottom: 15px;\"><em><strong><img src=\"http://i.ensonhaber.com/resimler/diger/yht_5801.jpg\" alt=\"\" width=\"470\" height=\"365\" /><br /></strong></em></p>\r\n<h4>\"SABOTAJ GİRİŞİMLERİNDEN DOLAYI MAALESEF S&Uuml;REDE AKSAMA YAŞANACAK\"</h4>\r\n<p><em><strong>Sinyalizasyon b&ouml;l&uuml;m&uuml;nde de maalesef bu t&uuml;r bir sorunla karşı karşıya kaldık. Bu sorunları giderme y&ouml;n&uuml;nde arkadaşlarımız &ccedil;alışmalarını s&uuml;rd&uuml;r&uuml;yorlar. Haziran ayı i&ccedil;erisinde hem İstanbul\'daki vatandaşlarımız hem de Ankara\'daki vatandaşlarımız y&uuml;ksek hızlı trenimizi kullanma imkanına kavuşacaklar. Bu sabotaj girişimlerinden dolayı maalesef s&uuml;rede bir aksama s&ouml;z konusu oldu.\"</strong></em></p>','yuklenenler/haberler/91796_yht_6322.jpg','',1,1,1,1,1,1,0,0,1),(10,'25/05/2014 15:47:09','1',0,'Ege\'de deprem','Ege\'de deprem','Ege Denizi\'nde, Saros Körfezi\'nde art arda 4,8 ve 4,5 büyüklüklerinde iki artçı deprem meydana geldi.','<p style=\"margin-bottom: 15px;\">D&uuml;n merkez &uuml;ss&uuml; G&ouml;k&ccedil;eada a&ccedil;ıkları olan 6.5 b&uuml;y&uuml;kl&uuml;ğ&uuml;ndeki depremin ardından bug&uuml;n de &nbsp;4,8 ve 4,5 b&uuml;y&uuml;kl&uuml;klerinde iki art&ccedil;ı deprem meydana geldi.</p>\r\n<p style=\"margin-bottom: 15px;\">&Ccedil;anakkale\'nin Eceabat il&ccedil;esi a&ccedil;ıklarında saat 14.47\'de 28,6 kilometre derinliğinde bir deprem daha oldu. Depremin b&uuml;y&uuml;kl&uuml;ğ&uuml; 4,5 olarak &ouml;l&ccedil;&uuml;ld&uuml;.</p>\r\n<p style=\"margin-bottom: 15px;\">Başbakanlık Afet ve Acil Durum Y&ouml;netimi (AFAD) Başkanlığı Deprem Dairesinin tespitlerine g&ouml;re, saat 14.38\'de de merkez &uuml;ss&uuml; Saros K&ouml;rfezi olan 4,8 b&uuml;y&uuml;kl&uuml;ğ&uuml;nde sarsıntı kaydedildi.</p>\r\n<h4>İSTANBUL\'DA DA HİSSEDİLDİ</h4>\r\n<p style=\"margin-bottom: 15px;\">İki art&ccedil;ı sarsıntı İstanbul, &Ccedil;anakkale, Bursa ve Balıkesir il merkezleriyle bazı il&ccedil;elerinde hissedildi.&nbsp;Paniğe kapılan bazı insanlar evlerini terk etti ve apartmanlarının &ouml;nlerinde beklemeye başladı.</p>\r\n<p style=\"margin-bottom: 15px;\"><span style=\"color: #333333; font-size: 18px; font-weight: bold;\">SARSINTILAR DEVAM EDECEK</span></p>\r\n<p style=\"margin-bottom: 15px;\">Deprem kısa s&uuml;reli hissedilirken, g&ouml;revliler at&ccedil;ı depremlerin devam edeceğini ifade ediyorlar.&nbsp;D&uuml;n meydana gelen 6.5 b&uuml;y&uuml;kl&uuml;ğ&uuml;ndeki depremin ardından, d&uuml;n geceden itibaren Ege\'de b&uuml;y&uuml;kl&uuml;kleri 3.0 - 4.6 arasında değişen 22 art&ccedil;ı deprem meydana geldi.</p>\r\n<h4>\"BİRKA&Ccedil; HAFTA DAHA S&Uuml;RER\"</h4>\r\n<p style=\"margin-bottom: 15px;\">Saros K&ouml;rfez\'indeki depremi NTV canlı yayınında değerlendiren İT&Uuml; &Ouml;ğretim &uuml;yesi Okan T&uuml;ys&uuml;z, <strong><em>\"Bu deprem de aynı sistem &uuml;zerinde ger&ccedil;ekleşti. Bu nedenle art&ccedil;ı diyebiliriz. D&uuml;n de 5.0 b&uuml;y&uuml;kl&uuml;ğ&uuml;n&uuml; ge&ccedil;en art&ccedil;ılar olmuştu. Bu aktivite birka&ccedil; hafta varlığını s&uuml;rd&uuml;recektir\" </em></strong>dedi.</p>\r\n<h4>İSTANBUL\'LA BİR İLGİSİ YOK</h4>\r\n<p style=\"margin-bottom: 15px;\">Saros K&ouml;rfezi\'nde meydana gelen depremin İstanbul\'a yaklaşmasının s&ouml;z konusu olmadığını belirten İT&Uuml; &Ouml;ğretim &uuml;yesi Okan T&uuml;ys&uuml;z, <strong><em>\"Saros K&ouml;rfezi i&ccedil;inde kalması şartıyla biraz daha doğuya ilerleyebilir\" </em></strong>şeklinde konuştu.</p>','yuklenenler/haberler/26641_artci_2535.jpg','',1,1,1,1,1,0,0,0,1),(11,'25/05/2014 15:57:18','2',0,'MAK Danışmanlık\'tan Almanya\'da Cumhurbaşkanlığı anketi','MAK Danışmanlık\'tan Almanya\'da Cumhurbaşkanlığı anketi','MAK Danışmaklık, Almanya\'da 2650 kişiye Cumhurbaşkanı adayı olarak kimi görmek istediğini sordu.','<p style=\"margin-bottom: 15px;\">Halkın ilk defa oy kullanacağı Cumhurbaşkanlığı se&ccedil;imleri i&ccedil;in yurt dışında yaşayan T&uuml;rk vatandaşları da bulundukları &uuml;lkenin konsolosluklarında sandığa gidecek. T&uuml;rkiye dışında 2.7 milyon gurbet&ccedil;i se&ccedil;men var. Bunların 1 milyon 380 bin 909\'u Almanya\'da yaşıyor. Ardından gelen Fransa\'da 293 bin 412, Hollanda\'da ise 238 bin 968 se&ccedil;men var. 10 &uuml;lkede ise sadece birer se&ccedil;men var.</p>\r\n<h4>ALMANYA\'DA CUMHURBAŞKANLIĞI ANKETİ</h4>\r\n<p style=\"margin-bottom: 15px;\">MAK Danışmaklık, se&ccedil;imlerde en b&uuml;y&uuml;k rekabetin yaşanacağı, Almanya\'da 2650 kişiye Cumhurbaşkanı adayı olarak kimi g&ouml;rmek istediğini sordu. Buna g&ouml;re Başbakan Erdoğan birinci sırada yer alırken ikinci sıradaki Kemal Kılı&ccedil;daroğlu\'nu 6\'ya katladı.</p>\r\n<h4>İŞTE ORANLAR</h4>\r\n<p style=\"margin-bottom: 15px;\">Recep Tayyip Erdoğan y&uuml;zde 61</p>\r\n<p style=\"margin-bottom: 15px;\">Kemal Kılı&ccedil;daroğlu y&uuml;zde 13</p>\r\n<p style=\"margin-bottom: 15px;\">Meral Akşener y&uuml;zde 11</p>\r\n<p style=\"margin-bottom: 15px;\">Ahmet T&uuml;rk y&uuml;zde 5</p>\r\n<p style=\"margin-bottom: 15px;\">Diğer isimler y&uuml;zde 10</p>','yuklenenler/haberler/460388_mak-danismaliktan-avrupada-cumhurbaskanligi-anketi_1919.jpg','',1,1,1,1,1,0,0,0,0),(12,'25/05/2014 15:58:19','5',0,'Necip Fazıl Kısakürek\'in 31. ölüm yıl dönümü','Necip Fazıl Kısakürek\'in 31. ölüm yıl dönümü','Şair, yazar, düşünür Necip Fazıl Kısakürek\'in bu dünyadan ayrılışının 31. yılı. 26 Mayıs 1904\'te İstanbul\'da doğan Necip Fazıl, 25 Mayıs 1983\'te 79 yaşında yine İstanbul\'da vefat etti.','<p>Şair Necip Fazıl Kısak&uuml;rek, &ouml;l&uuml;m&uuml;n&uuml;n 31. yıl d&ouml;n&uuml;m&uuml;nde, başta Konya olmak &uuml;zere, yurdun farklı yerlerinde etkinliklerle anılıyor.</p>','yuklenenler/haberler/441864_necip_677.jpg','',1,1,1,1,1,0,0,0,1),(13,'25/05/2014 16:06:07','3',0,'Etyen Mahçupyan Zaman\'dan kovuldu mu ','Etyen Mahçupyan Zaman\'dan kovuldu mu ','Etyen Mahçupyan\'ın Zaman\'da yazılarının yayınlanmaması, akıllara \'Mahçupyan kovuldu mu?\' sorusunu getirdi.','<p style=\"margin-bottom: 15px;\">17 Aralık yolsuzluk operasyonundan sonra iyice belirginleşen AK Parti-cemaat kavgasının medyaya yansımaları devam ediyor.</p>\r\n<h4>SON 2 G&Uuml;ND&Uuml;R YAZILARI YAYINLANMIYOR</h4>\r\n<p style=\"margin-bottom: 15px;\">Zaman gazetesinde &ccedil;arşamba, perşembe ve pazar g&uuml;nleri k&ouml;şe yazan Etyen Mah&ccedil;upyan\'ın yazıları, 22 Mayıs &Ccedil;arşamba g&uuml;n&uuml;nden sonra yayımlanmadı. Zaman gazetesi, Mah&ccedil;upyan\'ın k&ouml;şesinin olduğu sayfada, Mah&ccedil;upyan\'ı eleştiren geniş yazılara da yer vermişti.</p>\r\n<h4>YAZISI SİTEDEN KALDIRILMIŞTI</h4>\r\n<p style=\"margin-bottom: 15px;\">Zaman.com.tr, Etyen Mah&ccedil;upyan\'ın son yazısı \'Manevi Yalnızlık Sendromu\'ndaki cemaat ironisini yanlış anlamış ve sayfadan yazıyı kaldırmıştı. Gece yarısından itibaren sosyal medyada gelen tepkiler &uuml;zerine site yazıyı yeniden yayınlamıştı.</p>\r\n<h4>ZAMAN\'DAN BİR A&Ccedil;IKLAMA YAPILMADI</h4>\r\n<p style=\"margin-bottom: 15px;\">Ayrıca Mah&ccedil;upyan\'ın son yayımlanan <em><strong>\'Manevi yalnızlık sendromu\'</strong></em> başlıklı yazısında ise, izin kullandığına veya yazılarına ara verdiğine dair bir not yoktu. Mah&ccedil;upyan\'ın neden yazmadığıyla ilgili olarak Zaman\'ın ne basılı n&uuml;shalarında ne de sitesinde herhangi bir a&ccedil;ıklama yer almadı. Sosyal medyada da konu tartışma yarattı.</p>\r\n<p style=\"margin-bottom: 15px;\"><a href=\"http://www.ensonhaber.com/etyen-mahcupyanin-yazisi-zamancomtrden-kaldirildi-2014-05-22.html\" target=\"_blank\"><img src=\"http://i.ensonhaber.com/resimler/diger/etyen_8639.jpg\" alt=\"\" width=\"470\" height=\"239\" /></a></p>','yuklenenler/haberler/590302_etyen-mahcupyan-zamandan-kovuldu-mu_7101.jpg','',1,1,1,1,1,0,0,0,0),(14,'25/05/2014 16:14:21','2',0,'Ahmet Hakan: Sinanoğlu\'nun eşi başörtülü olsaydı','Ahmet Hakan: Sinanoğlu\'nun eşi başörtülü olsaydı','Oktay Sinanoğlu\'nın eşine Ulusal Kanal\'da \"boş kafalı\" diyerek azarlamasına Ahmet Hakan, \"eğer başörtülü olsaydı dünyayı başına yıkardınız\" yorumunu getirdi.','<p style=\"margin-bottom: 15px;\">Hulki Cevizoğlu\'nun programına konuk olan profes&ouml;r Oktay Sinanoğlu, karısının araya girmesiyle deliye d&ouml;nd&uuml;. Canlı yayında eşine sert şekilde &ccedil;ıkışan profes&ouml;r, sinirine hakim olamayarak <strong><em>\"boş kafalı\"</em></strong> dedi.</p>\r\n<p style=\"margin-bottom: 15px;\">H&uuml;rriyet yazarı Ahmet Hakan, buna isyan etti. <strong><em>\"Muhafazakar bir profes&ouml;r, baş&ouml;rt&uuml;l&uuml; eşiyle televizyona &ccedil;ıksaydı, eşi&nbsp;\"peki, tamam\"\' diyerek sessizce başını &ouml;ne eğseydi... Ne yapardınız?\" </em></strong>dedi.&nbsp;<strong><em>\"Eğer baş&ouml;rt&uuml;l&uuml; olsaydı d&uuml;nyayı başına yıkardınız\"</em></strong> yorumunu getirdi.</p>\r\n<p style=\"margin-bottom: 15px;\"><a class=\"video-galeri\" href=\"http://videonuz.ensonhaber.com/izle/profesor-oktay-sinanoglu-canli-yayinda-karisini-azarladi\" target=\"_blank\">Oktay Sinanoğlu canlı yayında karısını azarladı</a></p>\r\n<h4>AYNŞTAYN\'IN KARISI BAŞ&Ouml;RT&Uuml;L&Uuml; OLSAYDI</h4>\r\n<p style=\"margin-bottom: 15px;\"><em>ULUSAL Kanal da bir program... Konuklar: Prof. Oktay Sinanoğlu ve eşi Dilek Sinanoğlu... &nbsp;</em></p>\r\n<p style=\"margin-bottom: 15px;\"><em>Olay şu: Programda Dilek Sinanoğlu\'nun ağzından \"inovasyon kelimesi &ccedil;ıkıyor. T&uuml;rk&ccedil;e konuşurken araya yabancı kelimelerin sıkıştırılmasına fena halde &ouml;fkelenen Oktay Sinanoğlu. eşini canlı yayında azarlıyor. Ve azarlamakla yetinmiyor. Eşine \"boş kafalı\" diyor. Eşi de bu hakaret karşısında \"peki, tamam\" diyerek karşılık veriyor.</em></p>\r\n<p style=\"margin-bottom: 15px;\"><em> \"T&uuml;rk Aynştayn\'ı\" sıfatıyla g&ouml;klere &ccedil;ıkanları Oktay Sinanoğlu kimdir? Nevi şahsına m&uuml;nhasır biridir. Ama aynu zamanda laik, Kemalist ve ulusalcıdır. Peki onun bu hoyrat tutumundan ve eşinin bu hoyrat tutum karşısın daki ezik tavrından yola &ccedil;ıkarak bir genelleme yapabilir miyiz? Katiyen yapamayız. Yapmamalıyız. Biit&uuml;n laik, Kemalist ve ulusalcılar b&ouml;yledir dememeliyiz.</em></p>\r\n<h4>DOĞRU S&Ouml;YLEYİN NE YAPARDINIZ?<em><br /></em></h4>\r\n<p style=\"margin-bottom: 15px;\"><em>Ama dininize imanınıza doğru s&ouml;yleyin: &nbsp;</em></p>\r\n<p style=\"margin-bottom: 15px;\"><em>Muhafazak&acirc;r bir profes&ouml;r, baş&ouml;rt&uuml;l&uuml; eşiyle televizyona &ccedil;ıksaydı... &nbsp;</em></p>\r\n<p style=\"margin-bottom: 15px;\"><em>Ekran &ouml;n&uuml;nde eşini azarlasaydı... </em></p>\r\n<p style=\"margin-bottom: 15px;\"><em>Hatta \"boş kafalı\" diyerek hakaret etseydi... &nbsp;</em></p>\r\n<p style=\"margin-bottom: 15px;\"><em>Yanındaki baş&ouml;rt&uuml;l&uuml; eşi de \"peki, tamam\"\' diyerek sessizce başını &ouml;ne eğseydi... Ne yapardınız? </em></p>\r\n<p style=\"margin-bottom: 15px;\"><em>\"Genelle babam genelle\" yarışında ipi g&ouml;ğ&uuml;sler miydiniz, g&ouml;ğ&uuml;slemez miydiniz? S&ouml;yleyin. S&ouml;yleyin ama dininize, imanınıza doğru s&ouml;yleyin.&nbsp; <br /></em></p>','yuklenenler/haberler/747193_ahmet-hakan-sinanoglunun-esi-basortulu-olsaydi_9630.jpg','',1,1,1,1,1,0,0,0,0),(15,'25/05/2014 16:34:09','6',0,'Arda Turan finalde neden oynamadı ','Arda Turan finalde neden oynamadı ','Atletico Madrid\'in yıldızı Arda Turan, Şampiyonlar Ligi Finali\'nde neden oynamadığını açıkladı. ','<p>Şampiyonlar Ligi\'nde sakatlığından dolayı forma giyemeyerek T&uuml;rk halkını &uuml;zen Arda Turan, neden oynamadığını a&ccedil;ıkladı.</p>\r\n<p>Sprint atmakta zorluk &ccedil;ektiğini ve topa vuramadığını s&ouml;yleyen milli futbolcu, her şeyi denediklerini fakat sakatlığının iyileşmediğini s&ouml;yledi.</p>\r\n<h4>\"İKİ DAKİKA DAHA DAYANABİLSEK\"</h4>\r\n<p><em><strong>NTV Spor\'a&nbsp;konuşan&nbsp;Arda Turan\'ın a&ccedil;ıklamaları şu şekilde:</strong></em></p>\r\n<p><strong><em>\"Sonu&ccedil;ta &ouml;nemli bir şey yaptık ama&nbsp;hayatta&nbsp;kimse&nbsp;ikinciyi hatırlamaz. Bu sezon b&uuml;y&uuml;k işler başardık, kupayı&nbsp;kazanmaya&nbsp;da &ccedil;ok yaklaştık, &uuml;zg&uuml;n&uuml;z. 2 dakika dayanabilseydik Şampiyonlar Ligi şampiyonuyduk.</em></strong></p>\r\n<p><strong><em>\"Bir &ouml;nceki sakatlığım pubis ile ilgili sorun yaşamıyorum, bu dedikodulara son verelim.\"</em></strong></p>\r\n<h4>\"OYNAMAK İ&Ccedil;İN HER ŞEYİ DENEDİK\"</h4>\r\n<p><em><strong>\"Sprint atamıyordum, topa vuramıyordum. Oynamam i&ccedil;in her şeyi denedik. İsterdim Şampiyonlar Ligi şampiyonu olup seremonide T&uuml;rk bayrağı dalgalandırmayı.\"</strong></em></p>\r\n<p><em><strong>\"Allah bir mani vermezse &ccedil;abuk iyileşirim diye d&uuml;ş&uuml;n&uuml;yorum. Sonradinlenip&nbsp;seneye hazırlanacağız.\"</strong></em></p>\r\n<p>Arda Turan ma&ccedil;ta forma giyebilseydi, Şampiyonlar Ligi finalinde oynayan T&uuml;rkiye doğumlu ilk T&uuml;rk futbolcu olacaktı.&nbsp;</p>\r\n<p><img src=\"http://kralspor.ensonhaber.com/resimler/01_4_600x359_6KT1F.jpg\" alt=\"\" width=\"450\" height=\"269\" /></p>\r\n<p>&nbsp;Bundan &ouml;nce Şampiyonlar Ligi finalinde oynayan 3 T&uuml;rk futbolcu da Almanya doğumluydu. Yıldıray Başt&uuml;rk, Hamit Altıntop ve Nuri Şahin\'in yanı sıra; Alman Milli Takımı forması giyen T&uuml;rk asıllı futbolcular Mehmet Scholl ve İlkay G&uuml;ndoğan da Devler Ligi finalinde oynamıştı.<em><strong><br /></strong></em></p>','yuklenenler/haberler/618317_arda_turan_finalde_neden_oynamadi.jpg','',1,1,1,1,1,0,0,0,1),(16,'25/05/2014 16:35:06','1',0,'Molotoflu ve maskeli eylemlerin cezaları artırılacak','Molotoflu ve maskeli eylemlerin cezaları artırılacak','Adalet Bakanlığı, Okmeydanı olayları sonrası maskeli ve molotoflu eylemlerin cezalarının artırılması için kolları sıvadı. ','<p style=\"margin-bottom: 15px;\">İki &ouml;l&uuml;m&uuml;n ger&ccedil;ekleştiği ve yaralıların bulunduğu Okmeydanı olaylarında aktif olarak maskeli grupların molotof ve havaifişeklerle polise saldırdığı g&ouml;r&uuml;ld&uuml;. Başbakan Erdoğan, molotoflu eylemleri i&ccedil;in <strong><em>&ldquo;Bu bir hak arama olayı değil. Bu bir ter&ouml;r olayı ve biz de bu t&uuml;r ter&ouml;r olaylarına m&uuml;saade etmeyeceğiz&rdquo; </em></strong>dedi.&nbsp;Erdoğan, molotofun ateşli silah sayılarak cezasının arttırılacağını, bu konuda gerekli talimatları verdiğini s&ouml;yledi. Bu a&ccedil;ıklamalar sonrasında Adalet Bakanlığı kolları sıvadı.</p>\r\n<h4>CEZA 3 YILDAN 15 YILA &Ccedil;IKACAK</h4>\r\n<p style=\"margin-bottom: 15px;\">Daha &ouml;nce konuya ilişkin &ccedil;alışmalar s&uuml;rd&uuml;ren bakanlık, molotofun ateşli silah olarak tanımlanıp, bulunduran kişiye 3 yıldan 5 yıla kadar hapis cezası verilmesini istiyordu. Fakat son olaylarla birlikte ceza 15 yıl bandına &ccedil;ekilecek. Ayrıca molotofun su&ccedil; işlemek i&ccedil;in kurulmuş bir &ouml;rg&uuml;t tarafından kullanılması halinde cezaların yarı oranında y&uuml;kseltilmesi &ouml;ng&ouml;r&uuml;l&uuml;yor.</p>\r\n<h4>MASKEYE DE CEZA</h4>\r\n<p style=\"margin-bottom: 15px;\">Aynı pakette, y&uuml;z&uuml;n gizlenmesine de ceza getirilirken, polise mukavemet ve kamu malına zarar vermenin cezaları da arttırılacak. &Ouml;te yandan eylemcilerin molotoflu saldırılarının dışında sadece maske takmalarının bile batı &uuml;lkerinde 10 yıla varan hapse kadar cezaları var.</p>\r\n<p style=\"margin-bottom: 15px;\"><a href=\"http://www.ensonhaber.com/maskeli-gosterinin-batida-agir-cezalari-var-2014-05-23.html\" target=\"_blank\"><img src=\"http://i.ensonhaber.com/resimler/diger/avrupa_5363.jpg\" alt=\"\" width=\"470\" height=\"239\" /></a></p>','yuklenenler/haberler/265075_molotof_7934.jpg','',1,1,1,1,1,0,0,0,0),(17,'25/05/2014 20:38:25','1',0,'\'Baş ve boyun kanseri diş sağlığını bozuyor\' ','Baş ve boyun kanseri diş sağlığını bozuyor','\'Baş ve boyun kanseri diş sağlığını bozuyor\' ','<div class=\"itemFullText\">\r\n<p><span style=\"color: #000000;\">İzmir K&acirc;tip &Ccedil;elebi &Uuml;niversitesi Diş Hekimliği Fak&uuml;ltesi Ağız, Diş ve &Ccedil;ene Radyolojisi ABD &Ouml;ğretim &Uuml;yesi Yrd. Do&ccedil;.Dr. Elif Tarım Ertaş,&nbsp;baş ve boyun b&ouml;lgesinde&nbsp;kanser nedeniyle tedavi g&ouml;ren hastaların sayısının her ge&ccedil;en g&uuml;n arttığını, tedavi s&uuml;recinde kullanılan y&ouml;ntemlerin ağız sağlığına olumsuz etkilerinin olabileceğini belirtti. Yrd. Do&ccedil;.Dr. Ertaş, diş hekimlerinin bu hastalardaki enfeksiyon belirtilerini iyi bir şekilde tanımlayabilmelerinin hayati &ouml;nem taşıdığını kaydetti.</span></p>\r\n<p><strong><span style=\"color: #000000;\">&ldquo;Tedavi s&uuml;resince diş eti sağlığı olduk&ccedil;a &ouml;nemli&rdquo;</span></strong></p>\r\n<p><span style=\"color: #000000;\">Baş ve boyun&nbsp;kanserlerinde&nbsp;&nbsp;tedaviye bağlı ağızda meydana gelen yan etkilerin, hastanın yaşam kalitesini ve tedaviye olan toleransını ciddi şekilde etkilediğini aktaran Yrd. Do&ccedil;.Dr. Elif Tarım Ertaş,&nbsp;&ldquo;Diş hekimleri onkologlarla birlikte tedavi ekibin &uuml;yesi olarak d&uuml;ş&uuml;n&uuml;lmelidir. Bu s&uuml;re&ccedil;te yer alan diş hekimi kanser tedavisini olumsuz etkileyebilecek ağız ve diş sağlığı sorunlarını kolayca tespit edebilir. Tedavi s&uuml;resince &nbsp;ağızda meydana gelen yan etkilerin şiddetini azaltmak i&ccedil;in, tedavi &ouml;ncesinde ve sonrasında gerekli koruyucu ve &ouml;nleyici uygulamalarla&nbsp;hastaları&nbsp;ağız hijyenlerini korumaya teşvik edilmelidir&rdquo; diye konuştu.</span></p>\r\n<p><strong><span style=\"color: #000000;\">&ldquo;Enfeksiyon riski artıyor&rdquo;</span></strong></p>\r\n<p><span style=\"color: #000000;\">&ldquo;Tedavi sırasında acil bir diş problemi olduğunda onkologlar hastayı diş hekimine y&ouml;nlendirmeli ve kan tablosu ile uygulanan tedavi hakkında bilgi&nbsp;vermelidir&rdquo; diyen Yrd. Do&ccedil;.Dr. Elif Tarım Ertaş, kanser hastalarının bu s&uuml;re&ccedil;te enfeksiyonlara karşı olduk&ccedil;a duyarlı olduğuna da dikkat &ccedil;ekti. Yrd. Do&ccedil;.Dr. Elif Tarım Ertaş, &ldquo;Kanser nedeni ile tedavi g&ouml;ren hastaların bağışıklık sistemi&nbsp;zayıfladığından&nbsp;uygulanan tedaviler nedeni ile enfeksiyonlara karşı risk artmaktadır. &Ouml;zellikle de ağız dokuları bu durumdan en &ccedil;ok etkilenen ve ciddi yan etkilerin oluştuğu yapıdır. Kanser tedavisine bağlı ağızda meydana gelen yan etkiler, hafif ve ge&ccedil;ici irritasyonlardan &ouml;nemli hastalıklara, hatta &ouml;l&uuml;me kadar uzanan bir &ccedil;er&ccedil;evede ger&ccedil;ekleşebilmektedir. Bu sebeple diş hekimleri, bu hastaların tedavi ekibinde yer almalıdır&rdquo; dedi.</span></p>\r\n<p><strong><span style=\"color: #000000;\">&ldquo;Uygun m&uuml;dahale &ouml;l&uuml;m riskini azaltır&rdquo;</span></strong></p>\r\n<p><span style=\"color: #000000;\">Diş hekimleri tarafından tedavi &ouml;ncesi yapılacak uygun m&uuml;dahalelerin, hastalıkları ve &ouml;l&uuml;mleri azalttığını s&ouml;yleyen Yrd. Do&ccedil;.Dr. Elif Tarım Ertaş, &ldquo;Kanser tedavisi &ouml;ncesi enfeksiyona sebep olabilecek unsurların yok edilmesi, tedavi s&uuml;resince ve sonrasında ağız sağlığının geliştirilmesi i&ccedil;in diş tedavileri uygulanmalıdır. Son bir yıl i&ccedil;inde diş hekimi kontrol&uuml;nden ge&ccedil;memiş, dişeti kanaması, dişeti hastalığı olan, uyumsuz proteze sahip, ortodontik bant ve braket taşıyan kanser tedavisi g&ouml;ren hastalar mutlaka diş hekimine y&ouml;nlendirilmelidir&rdquo; şeklinde konuştu.</span></p>\r\n</div>','yuklenenler/haberler/691620_f0b168a6511e746794a3a1d928910c34_M[1].jpg','',1,1,1,1,1,0,0,0,3),(18,'25/05/2014 20:39:57','3',0,'Bornova Belediyesi’nden spora tam destek ','Bornova Belediyesi’nden spora tam destek ','Bornova Belediyesi’nden spora tam destek ','<div class=\"itemImageBlock\">&nbsp;</div>\r\n<p><span style=\"color: #000000;\">Bornova Belediye Başkanı Olgun Atila,&nbsp; Bornova Belediyesi&rsquo;nin kullanımda olan ve inşaatları devam eden spor tesislerinde incelemelerde bulundu. Bornova&rsquo;nın gen&ccedil; bir n&uuml;fusa sahip olduğuna dikkat &ccedil;eken Başkan Atila, ama&ccedil;larının daha fazla vatandaşa, daha uygun koşullarda spor yaptırmak ve amat&ouml;r kul&uuml;plere destek vermek olduğunu s&ouml;yledi</span></p>\r\n<p><span style=\"color: #000000;\"><strong>&nbsp;</strong>Bornova Belediye Başkanı Olgun Atila, hafta sonu mesaisini sporculara ve spor tesislerine ayırdı.Başkan Atila, Bornova Belediyesi&rsquo;ne ait kullanımdaki mevcut tesisler ile yapımı s&uuml;ren Doğanlar Stadı ve Altındağ Spor Salonu&rsquo;nda incelemelerde bulundu. Gen&ccedil;lerle sohbet edip &ouml;zellikle spor alanında kendilerinden ne istediklerini soran Başkan Olgun Atila, saha ve &ccedil;evresini gezdi. Eksikleri tespit edip gerekenlerin yapılması talimatı verdi.</span></p>\r\n<p><strong><span style=\"color: #000000;\">Spor alt yapısına &ouml;zel &ouml;nem</span></strong></p>\r\n<p><span style=\"color: #000000;\">A&ccedil;ık ve kapalı olmak &uuml;zere yarı olimpik y&uuml;zme havuzları, fitness salonu ve bir takımın konaklayabileceği kamp merkezinin bulunduğu Işıkkent Spor Tesisleri&rsquo;ni de gezen Bornova Belediye Başkanı Olgun Atila&rsquo;nın spor turu, yapımı devam tesislerle s&uuml;rd&uuml;. Bornova Belediyespor Kul&uuml;b&uuml; y&ouml;neticileri ile birlikte 2 bin 500 seyirci kapasiteli Altındağ Spor Salonu ve 10 bin kişilik Doğanlar Stadı&rsquo;nda incelemelerde bulunan Başkan Atila, &ldquo;Spora ve spor alt yapısına &ouml;zel bir &ouml;nem veriyoruz. Bornova gen&ccedil; n&uuml;fus oranının fazla olduğu bir kent. Amacımız m&uuml;mk&uuml;n olduğunca daha fazla vatandaşımıza iyi şartlarda spor yaptırmak ve kul&uuml;plerimize destek olmak. İşte bu anlamda kullanımda olan spor tesislerindeki eksikler ile yapımı s&uuml;ren spor tesislerininin son durumunu g&ouml;rmek istedim&rdquo; diye konuştu.</span></p>\r\n<p><span style=\"color: #000000;\">&nbsp;</span></p>','yuklenenler/haberler/552734_d58cab47b69afe0c769c22dc28ec576a_M[1].jpg','',1,1,1,1,1,1,0,0,3),(19,'25/05/2000 20:00:00','5',0,'Alevi Dernekleri Alsancak’ta yürüdü ','Alevi Dernekleri Alsancak’ta yürüdü ','Alevi Dernekleri Alsancak’ta yürüdü ','<p><span style=\"color: #000000;\">İzmir&rsquo;de Kıbrıs Şehitleri Caddesi girişinde buluşan Alevi Bektaşi Federasyonu &uuml;yeleri ve İzmirli vatandaşlar slogan atarak Cumhuriyet Meydanı&rsquo;na y&uuml;r&uuml;y&uuml;şe ge&ccedil;ti. &lsquo;Katil devlet hesap verecek&rsquo;, Aleviyiz haklıyız, Kazanacağız&rsquo;, &lsquo;Kahrolsun faşist diktat&ouml;rl&uuml;k&rsquo;, &lsquo;Devrim şehitleri &ouml;l&uuml;ms&uuml;zd&uuml;r&rsquo; &lsquo;Bedel &ouml;dedik &ouml;deyeceğiz&rsquo; sloganları atan yaklaşık bin kişilik topluluk, &lsquo;Elini &ccedil;ocuklarımızdan &ccedil;ek katil diktat&ouml;r&rsquo; pankartının ardında Cumhuriyet meydanına y&uuml;r&uuml;d&uuml;. Emniyet\'in g&uuml;venlik &ouml;nlemi almadığı y&uuml;r&uuml;y&uuml;şte ve sadece sivil polisler g&ouml;rev yaptı.</span></p>\r\n<p><span style=\"color: #000000;\">Cumhuriyet Meydanı&rsquo;nda Alevi Bektaşi Dernek Federasyonu T&uuml;rkiye Genel Başkanı Selahaddin &Ouml;zel bir basın a&ccedil;ıklaması yaptı. &Ouml;zel şunları s&ouml;yledi: &ldquo;22 Mayıs 2014 tarihinde, Okmeydanı Cemevi&rsquo;nin &ccedil;evresindeki bir protesto gerek&ccedil;e g&ouml;sterilerek ibadethanemize yapılan polis saldırısı kabul edilemez. Uğur Kurt canımızın katledilmesi bilin&ccedil;lidir. Gezi s&uuml;recinde kaybettiğimiz canların t&uuml;m&uuml;n&uuml;n Alevi olması tesad&uuml;f olamaz. Katliamların sorumlusu olan devletin, katledilen canların, yoldaşların faillerini cezalandırmaması ise ayrı bir ger&ccedil;ekliktir. Bizler katillerin ve arkasındakilerin kimler olduğunu biliyoruz. Aleviler bu &uuml;lkenin barışı&nbsp; ve huzuru i&ccedil;in vardır. Aleviler ortak vatanda kardeş&ccedil;e barış i&ccedil;erisinde bir arada yaşama koşullarının geliştirilmesini istemektedir. Devlet &ndash; h&uuml;k&uuml;met ise b&ouml;l&uuml;c&uuml;l&uuml;k yapmaya, ayrımcılık yapmaya devam ediyor. Cinayet işliyor. H&uuml;k&uuml;meti &ndash; sistemi uyarıyoruz! Elinizi Alevilerin &uuml;st&uuml;nden &ccedil;ekiniz. G&uuml;n Hz. H&uuml;seyin g&uuml;n Pir Sultan olma g&uuml;n&uuml;d&uuml;r. &ldquo;</span></p>\r\n<p><span style=\"color: #000000;\">Kalabalık basın a&ccedil;ıklamasından sonra sessizce dağıldı.</span></p>','yuklenenler/haberler/614594_7303911be3f921531a1520626ef32ad0_M[1].jpg','',1,1,1,1,1,0,0,0,1),(20,'25/05/2014 21:55:32','1',3,'Deneme Haber Köşe Haber','Deneme Haber Köşe Haber','Deneme Haber Köşe Haber Deneme Haber Köşe Haber Deneme Haber Köşe Haber Deneme Haber Köşe Haber','<p>Deneme Haber K&ouml;şe HaberDeneme Haber K&ouml;şe HaberDeneme Haber K&ouml;şe HaberDeneme Haber K&ouml;şe HaberDeneme Haber K&ouml;şe HaberDeneme Haber K&ouml;şe Haber</p>\r\n<p>&nbsp;</p>\r\n<p>Deneme Haber K&ouml;şe HaberDeneme Haber K&ouml;şe HaberDeneme Haber K&ouml;şe HaberDeneme Haber K&ouml;şe HaberDeneme Haber K&ouml;şe HaberDeneme Haber K&ouml;şe HaberDeneme Haber K&ouml;şe HaberDeneme Haber K&ouml;şe HaberDeneme Haber K&ouml;şe HaberDeneme Haber K&ouml;şe HaberDeneme Haber K&ouml;şe HaberDeneme Haber K&ouml;şe Haber</p>\r\n<p>Deneme Haber K&ouml;şe HaberDeneme Haber K&ouml;şe HaberDeneme Haber K&ouml;şe HaberDeneme Haber K&ouml;şe HaberDeneme Haber K&ouml;şe HaberDeneme Haber K&ouml;şe HaberDeneme Haber K&ouml;şe HaberDeneme Haber K&ouml;şe HaberDeneme Haber K&ouml;şe Haber</p>','yuklenenler/haberler/28930_2CE2C90436A8CD1EE5615F46FD3_h85_w142_m6_q80_cpkAUGErH[1].jpg','',1,0,1,0,1,0,0,0,7);
/*!40000 ALTER TABLE `haberler` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ilanlar`
--

DROP TABLE IF EXISTS `ilanlar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ilanlar` (
  `ilanid` int(11) NOT NULL AUTO_INCREMENT,
  `ilanbaslik` text COLLATE utf8_turkish_ci NOT NULL,
  `ilantarih` text COLLATE utf8_turkish_ci NOT NULL,
  `ilanno` text COLLATE utf8_turkish_ci NOT NULL,
  `ilanicerik` text COLLATE utf8_turkish_ci NOT NULL,
  `ilanokunma` int(11) NOT NULL,
  `ilandurum` int(11) NOT NULL,
  PRIMARY KEY (`ilanid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ilanlar`
--

LOCK TABLES `ilanlar` WRITE;
/*!40000 ALTER TABLE `ilanlar` DISABLE KEYS */;
INSERT INTO `ilanlar` (`ilanid`, `ilanbaslik`, `ilantarih`, `ilanno`, `ilanicerik`, `ilanokunma`, `ilandurum`) VALUES (1,'TC İzmir 10. Asliye Hukuk Mahkemesi ilanı','01-06-2014 18:37:37',' İ_6422','<p><img src=\"http://egetelgraf.com/media/k2/items/cache/c423a91b9ad5896c796a64f1f036bc0b_XL.jpg\" alt=\"\" width=\"575\" height=\"597\" /></p>',0,1),(2,'S.S Hidayet Konut Yapı Kooperaftifi Yönetim Kurulu\'ndan olağan genel kurula çağrı ','01-06-2014 18:52:03',' İ_6468','<p><img src=\"http://egetelgraf.com/media/k2/items/cache/c8fb39c0b64c6ca61b71bbff2806700d_XL.jpg\" alt=\"\" width=\"500\" height=\"749\" /></p>',0,1);
/*!40000 ALTER TABLE `ilanlar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `koseyazarlari`
--

DROP TABLE IF EXISTS `koseyazarlari`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `koseyazarlari` (
  `kosid` int(11) NOT NULL AUTO_INCREMENT,
  `adisoyadi` text COLLATE utf8_turkish_ci NOT NULL,
  `telefon` text COLLATE utf8_turkish_ci NOT NULL,
  `adres` text COLLATE utf8_turkish_ci NOT NULL,
  `ozgecmis` text COLLATE utf8_turkish_ci NOT NULL,
  `koseresim` text COLLATE utf8_turkish_ci NOT NULL,
  `kosaktif` int(11) NOT NULL,
  PRIMARY KEY (`kosid`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `koseyazarlari`
--

LOCK TABLES `koseyazarlari` WRITE;
/*!40000 ALTER TABLE `koseyazarlari` DISABLE KEYS */;
INSERT INTO `koseyazarlari` (`kosid`, `adisoyadi`, `telefon`, `adres`, `ozgecmis`, `koseresim`, `kosaktif`) VALUES (3,'Ali Sürmeli','342342432432','erwrewrewrwer4342432','<p>432432432342342</p>\r\n<p>df</p>\r\n<p>&nbsp;</p>\r\n<p>dfs</p>\r\n<p>fsd</p>\r\n<p>sfd</p>\r\n<p>sfdfdfdssfdfsd</p>','yuklenenler/koseyazar/3826_67.png',1),(4,'Vahap Dabakan ','Vahap Dabakan ','Vahap Dabakan ','<p><a title=\"Vahap Dabakan \" href=\"http://egetelgraf.com/index.php?option=com_content&amp;view=article&amp;id=2119:soma-ehitleri-yasa-bodu&amp;catid=25:vahap-dabakan&amp;Itemid=61\"><strong><span style=\"color: #333333;\">Vahap Dabakan </span></strong></a></p>','yuklenenler/koseyazar/3012_68[1].png',1),(5,'Kutay GÜROCAK','Kutay GÜROCAK','Kutay GÜROCAK','<p><a title=\"Kutay G&Uuml;ROCAK\" href=\"http://egetelgraf.com/index.php?option=com_content&amp;view=article&amp;id=2125:tobbun-yeni-vergi-formuelue&amp;catid=54:can-suphandagli&amp;Itemid=103\"><strong><span style=\"color: #333333;\">Kutay G&Uuml;ROCAK</span></strong></a></p>','yuklenenler/koseyazar/8603_87[1].png',1),(6,'Mesut VARLIK','Mesut VARLIK','Mesut VARLIK','<p><a title=\"Mesut VARLIK\" href=\"http://egetelgraf.com/index.php?option=com_content&amp;view=article&amp;id=90:yeni-moda-reactable&amp;catid=51:mesut-varlik&amp;Itemid=93\"><strong><span style=\"color: #333333;\">Mesut VARLIK</span></strong></a></p>','yuklenenler/koseyazar/3201_86[1].png',1),(7,'Can SUPHANDAĞLI','Can SUPHANDAĞLI','Can SUPHANDAĞLI','<p><a title=\"Can SUPHANDAĞLI\" href=\"http://egetelgraf.com/index.php?option=com_content&amp;view=article&amp;id=2087:hesap-zaman-hizmet-guenue&amp;catid=54:can-suphandagli&amp;Itemid=103\"><strong><span style=\"color: #333333;\">Can SUPHANDAĞLI</span></strong></a></p>','yuklenenler/koseyazar/3524_90[1].png',1),(8,'Özge Önder','Özge Önder','Özge Önder','<p><a title=\"&Ouml;zge &Ouml;nder\" href=\"http://egetelgraf.com/index.php?option=com_content&amp;view=article&amp;id=2104:tuep-bebek-de-3-denemeye-destek-geliyor&amp;catid=55:oezge-oender&amp;Itemid=107\"><strong><span style=\"color: #333333;\">&Ouml;zge &Ouml;nder</span></strong></a></p>','yuklenenler/koseyazar/2042_92[1].png',1),(9,'Saadet Erciyas','Saadet Erciyas','Saadet Erciyas','<p><a title=\"Saadet Erciyas\" href=\"http://egetelgraf.com/index.php?option=com_content&amp;view=article&amp;id=2116:srebrenica-anneleri-zmirle-kucaklat&amp;catid=57:saadet-erciyas&amp;Itemid=110\"><strong><span style=\"color: #333333;\">Saadet Erciyas</span></strong></a></p>','yuklenenler/koseyazar/8144_94[1].png',1),(10,'Macit SEFİLOĞLU','Macit SEFİLOĞLU','Macit SEFİLOĞLU','<p><a title=\"Macit SEFİLOĞLU\" href=\"http://egetelgraf.com/index.php?option=com_content&amp;view=article&amp;id=1933:eski-bakann-geri-doenueue&amp;catid=60:macitsefiloglu&amp;Itemid=113\"><strong><span style=\"color: #333333;\">Macit SEFİLOĞLU</span></strong></a></p>','yuklenenler/koseyazar/8527_1B13CDE692A8DD5729BD18B16F613[1].jpg',1),(11,'Orhan BEŞİKÇİ (Kent Gözlemcisi)','Orhan BEŞİKÇİ (Kent Gözlemcisi)','Orhan BEŞİKÇİ (Kent Gözlemcisi)','<p><a title=\"Orhan BEŞİK&Ccedil;İ (Kent G&ouml;zlemcisi)\" href=\"http://egetelgraf.com/index.php?option=com_content&amp;view=article&amp;id=2120:zor-guenlerden-geciyoruz-&amp;catid=63:orhan-besikci&amp;Itemid=116\"><strong><span style=\"color: #333333;\">Orhan BEŞİK&Ccedil;İ (Kent G&ouml;zlemcisi)</span></strong></a></p>','yuklenenler/koseyazar/8670_100[1].png',1),(12,'Murat Şahin','Murat Şahin','Murat Şahin','<p><a title=\"Murat Şahin\" href=\"http://egetelgraf.com/index.php?option=com_content&amp;view=article&amp;id=2121:tuerkiyenin-rol-modeli-esba&amp;catid=64:murat-sahin&amp;Itemid=117\"><strong><span style=\"color: #333333;\">Murat Şahin</span></strong></a></p>','yuklenenler/koseyazar/2239_101[1].png',1),(13,'Engin VARDAR','Engin VARDAR','Engin VARDAR','<p><a title=\"Engin VARDAR\" href=\"http://egetelgraf.com/index.php?option=com_content&amp;view=article&amp;id=2122:qcizmelerimimi-ckaraym-m-sedye-kirlenmesinq&amp;catid=54:can-suphandagli&amp;Itemid=103\"><strong><span style=\"color: #333333;\">Engin VARDAR</span></strong></a></p>','yuklenenler/koseyazar/9925_103[1].png',1),(14,'Serdar AĞIR','Serdar AĞIR','Serdar AĞIR','<p><a title=\"Serdar AĞIR\" href=\"http://egetelgraf.com/index.php?option=com_content&amp;view=article&amp;id=2115:siyaset-neden-yaplr&amp;catid=67:serdar-agir\"><strong><span style=\"color: #333333;\">Serdar AĞIR</span></strong></a></p>','yuklenenler/koseyazar/4268_104[1].png',1),(15,'Sinan DOĞAN','Sinan DOĞAN','Sinan DOĞAN','<p><a title=\"Sinan DOĞAN\" href=\"http://egetelgraf.com/index.php?option=com_content&amp;view=article&amp;id=2124:kemal-derviin-recetesi-nedir&amp;catid=68:sinan-dogan&amp;Itemid=149\"><strong><span style=\"color: #333333;\">Sinan DOĞAN</span></strong></a></p>','yuklenenler/koseyazar/60_105[1].png',1);
/*!40000 ALTER TABLE `koseyazarlari` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modul`
--

DROP TABLE IF EXISTS `modul`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modul` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `msira` int(11) NOT NULL,
  `micerik` text COLLATE utf8_turkish_ci NOT NULL,
  `modulyeri` int(11) NOT NULL,
  `misim` text COLLATE utf8_turkish_ci NOT NULL,
  `durum` int(11) NOT NULL,
  `sabitmodul` int(11) NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modul`
--

LOCK TABLES `modul` WRITE;
/*!40000 ALTER TABLE `modul` DISABLE KEYS */;
INSERT INTO `modul` (`mid`, `msira`, `micerik`, `modulyeri`, `misim`, `durum`, `sabitmodul`) VALUES (1,1,'',2,'Çok Okunan Haberler',0,1),(2,8,'',1,'En Çok Yorumlananlar',0,1),(3,11,'<a href=\"#\"><img class=\"n_met_ad\" src=\"http://localhost/habersitesi/tema/default/photos/ADS/1.gif\" alt=\"\"/></a>',4,'Son Haberler Altı',1,0),(4,30,'<a href=\"#\"><img src=\"yuklenenler/modul/ebulten.png\" style=\"width:150px;height:40px;\"/></a>\nTüm gazete arşivimizi okumak için lütfen e-bültenimize abone olunuz.',1,'Ebülten Kayıt',0,0),(5,2,'<div style=\"width:375px; height:250px;\">\n    <object type=\"application/x-shockwave-flash\" data=\"http://swf.yowindow.com/yowidget3.swf\" width=\"375\" height=\"250\">\n    	<param name=\"movie\" value=\"http://swf.yowindow.com/yowidget3.swf\"/>\n    	<param name=\"allowfullscreen\" value=\"true\"/>\n    	<param name=\"wmode\" value=\"opaque\"/>\n    	<param name=\"bgcolor\" value=\"#FFFFFF\"/>\n    	<param name=\"flashvars\" \n    	value=\"location_id=gn:311046&amp;location_name=%C4%B0zmir&amp;time_format=24&amp;unit_system=metric&amp;lang=tr&amp;background=#FFFFFF&amp;copyright_bar=false\"\n    />\n        <a href=\"http://WeatherScreenSaver.com?client=widget&amp;link=copyright\"\n        style=\"width:375px;height:250px;display: block;text-indent: -50000px;font-size: 0px;background:#DDF url(http://yowindow.com/img/logo.png) no-repeat scroll 50% 50%;\"\n        >Hava durumu widget\'ı</a>\n    </object>\n</div>\n<div style=\"width: 375px; height: 15px; font-size: 14px; font-family: Arial,Helvetica,sans-serif;\">\n	<span style=\"float:left;\"><a target=\"_top\" href=\"http://WeatherScreenSaver.com?client=widget&amp;link=copyright\" style=\"color: #2fa900; font-weight:bold; text-decoration:none;\" title=\"Hava durumu widget\'ı\">YoWindow.com</a></span>\n	<span style=\"float:right; color:#888888;\">Forecast by&nbsp;<a href=\"http://yr.no\" style=\"color: #2fa900; text-decoration:none;\">yr.no</a></span>\n</div>\n',1,'Hava Durumu',0,0),(6,14,'',5,'Doviz',1,1),(7,14,'',1,'Anket',0,1),(8,13,'',4,'Haber Kategorileri',1,1),(9,2,'',2,'Köşe Yazarları',1,1),(10,1,'<p>sadsad</p>',4,'sadddsaads',0,0);
/*!40000 ALTER TABLE `modul` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reklamlar`
--

DROP TABLE IF EXISTS `reklamlar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reklamlar` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `reklamust` int(11) NOT NULL,
  `reklamsira` int(11) NOT NULL,
  `reklamyeri` int(11) NOT NULL,
  `reklamicerik` text COLLATE utf8_turkish_ci NOT NULL,
  `reklamdurum` int(11) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reklamlar`
--

LOCK TABLES `reklamlar` WRITE;
/*!40000 ALTER TABLE `reklamlar` DISABLE KEYS */;
INSERT INTO `reklamlar` (`rid`, `reklamust`, `reklamsira`, `reklamyeri`, `reklamicerik`, `reklamdurum`) VALUES (2,0,2,2,'<a href=\"index.php?sayfa=ilanlar\"><img width=\"389\" height=\"40\" src=\"http://www.egetelgraf.com/resmiilanlar.png\"></img></a>',1),(3,0,3,3,'<a href=\"#\"><img class=\"n_met_ad\" src=\"yuklenenler/reklam/reklamuzun.jpg\" alt=\"\"/></a>',0),(4,0,1,4,'<a href=\"#\"><img class=\"n_met_ad\" src=\"yuklenenler/reklam/reklamuzun.jpg\" alt=\"\"/></a>',1),(5,0,1,5,'		<div style=\"width:375px;\">\n			<div class=\"span12\">\n				<h4 class=\"n_news_cat_list_title\">EGE TELGRAF OKUYUN</h4>\n				<a href=\"#\"><img src=\"yuklenenler/modul/4dc5b6146a2904-et-01-r.jpg\" style=\"width:375px;height:500px;\"/></a>\n				<a href=\"#\" class=\"n_title_link\"><h5 class=\"n_little_title\">Daima Güncel</h5></a>\nOnline Gazetemizi Okumak İçin Ücretsiz Üye olup Gazetemizi okuyabilirsiniz...\n</div>\n</div>',1),(6,0,1,6,'<a href=\"#\">\n\n    <img alt=\"\" src=\"tema/default/photos/ADS/1.png\"></img>\n\n</a></li><br><br><br>',0),(7,0,2,7,'<a href=\"#\"><img class=\"n_met_ad\" src=\"http://egetelgraf.com/images/stories/karsiyakabel.gif\" alt=\"\"/></a><br><br>',1),(8,0,1,8,'<a href=\"#\">\n\n    <img alt=\"\" src=\"tema/default/photos/ADS/1.png\"></img>\n\n</a></li><br><br><br>',0),(9,0,2,9,'<a href=\"#\"><img class=\"n_met_ad\" src=\"http://egetelgraf.com/images/stories/karsiyakabel.gif\" alt=\"\"/></a><br><br>',1),(10,0,2,10,'<a href=\"#\"><img class=\"n_met_ad\" src=\"yuklenenler/reklam/336.jpg\" alt=\"\"/></a><br><br>',1),(11,0,2,11,'<a href=\"#\"><img class=\"n_met_ad\" src=\"yuklenenler/reklam/336.jpg\" alt=\"\"/></a><br><br>',1),(12,0,0,1,'<p>sadsdadsa</p>',0),(15,0,1,1,'<p><img src=\"http://firmastil.com/wp-content/uploads/2014/05/72890.png\" alt=\"\" width=\"728\" height=\"90\" /></p>',1);
/*!40000 ALTER TABLE `reklamlar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sayfalar`
--

DROP TABLE IF EXISTS `sayfalar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sayfalar` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `sustid` int(11) NOT NULL,
  `sayfasira` int(11) NOT NULL,
  `sayfabaslik` text COLLATE utf8_turkish_ci NOT NULL,
  `sayfaadres` text COLLATE utf8_turkish_ci NOT NULL,
  `sayfakey` text COLLATE utf8_turkish_ci NOT NULL,
  `sayfadesc` text COLLATE utf8_turkish_ci NOT NULL,
  `sayfaicerik` text COLLATE utf8_turkish_ci NOT NULL,
  `ustmenugor` int(11) NOT NULL,
  `altmenugor` int(11) NOT NULL,
  `anasayfagor` int(11) NOT NULL,
  `iletisimgor` int(11) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sayfalar`
--

LOCK TABLES `sayfalar` WRITE;
/*!40000 ALTER TABLE `sayfalar` DISABLE KEYS */;
INSERT INTO `sayfalar` (`sid`, `sustid`, `sayfasira`, `sayfabaslik`, `sayfaadres`, `sayfakey`, `sayfadesc`, `sayfaicerik`, `ustmenugor`, `altmenugor`, `anasayfagor`, `iletisimgor`) VALUES (1,1,5,'Anasayfa','index.html','deneme,etiket,sayfa5','sayfa açıklaması5','<p>sayfa i&ccedil;erikleri buradasayfa i&ccedil;erikleri buradasayfa i&ccedil;erikleri buradasayfa i&ccedil;erikleri burada sayfa i&ccedil;erikleri buradasayfa i&ccedil;erikleri buradasayfa i&ccedil;erikleri buradasayfa i&ccedil;erikleri buradasayfa i&ccedil;erikleri burada5</p>',1,1,0,1),(2,0,2,'İletisim','iletisim.php','iletisim,etiketi','iletisim,aciklama','<p>&nbsp;Deneme i&ccedil;erikler sayfa ile ilgili iletisimDeneme i&ccedil;erikler sayfa ile ilgili iletisimDeneme i&ccedil;erikler sayfa ile ilgili iletisimDeneme i&ccedil;erikler sayfa ile ilgili iletisim</p>\r\n<p>Deneme i&ccedil;erikler sayfa ile ilgili iletisimDeneme i&ccedil;erikler sayfa ile ilgili iletisimDeneme i&ccedil;erikler sayfa ile ilgili iletisimDeneme i&ccedil;erikler sayfa ile ilgili iletisimDeneme i&ccedil;erikler sayfa ile ilgili iletisim</p>\r\n<p>Deneme i&ccedil;erikler sayfa ile ilgili iletisimDeneme i&ccedil;erikler sayfa ile ilgili iletisimDeneme i&ccedil;erikler sayfa ile ilgili iletisimDeneme i&ccedil;erikler sayfa ile ilgili iletisim</p>\r\n<p>Deneme i&ccedil;erikler sayfa ile ilgili iletisimDeneme i&ccedil;erikler sayfa ile ilgili iletisim</p>\r\n<p>Deneme i&ccedil;erikler sayfa ile ilgili iletisimDeneme i&ccedil;erikler sayfa ile ilgili iletisimDeneme i&ccedil;erikler sayfa ile ilgili iletisim</p>',1,1,1,1);
/*!40000 ALTER TABLE `sayfalar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seogenel`
--

DROP TABLE IF EXISTS `seogenel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `seogenel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descr` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `keyw` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `head` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `analytics` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seogenel`
--

LOCK TABLES `seogenel` WRITE;
/*!40000 ALTER TABLE `seogenel` DISABLE KEYS */;
INSERT INTO `seogenel` (`id`, `descr`, `keyw`, `head`, `analytics`) VALUES (1,'Deneme Açıklama','deneme,anahtar,haber sitesi','<meta>','<script type=\"text/javascript\">\r\n\r\n  var _gaq = _gaq || [];\r\n  _gaq.push([\'_setAccount\', \'UA-38609542-1\']);\r\n  _gaq.push([\'_trackPageview\']);\r\n\r\n  (function() {\r\n    var ga = document.createElement(\'script\'); ga.type = \'text/javascript\'; ga.async = true;\r\n    ga.src = (\'https:\' == document.location.protocol ? \'https://ssl\' : \'http://www\') + \'.google-analytics.com/ga.js\';\r\n    var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(ga, s);\r\n  })();\r\n\r\n</script>   \r\n');
/*!40000 ALTER TABLE `seogenel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `videogaleri`
--

DROP TABLE IF EXISTS `videogaleri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `videogaleri` (
  `vid` int(11) NOT NULL AUTO_INCREMENT,
  `videogaleriad` text COLLATE utf8_turkish_ci NOT NULL,
  `videosira` int(11) NOT NULL,
  `gvideoresim` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`vid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videogaleri`
--

LOCK TABLES `videogaleri` WRITE;
/*!40000 ALTER TABLE `videogaleri` DISABLE KEYS */;
INSERT INTO `videogaleri` (`vid`, `videogaleriad`, `videosira`, `gvideoresim`) VALUES (1,'Komik Videolar',1,'yuklenenler/videogaleri/2053_manga1.png'),(2,'Youtube Videolari',2,'yuklenenler/videogaleri/946_image3.jpg');
/*!40000 ALTER TABLE `videogaleri` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `videolar`
--

DROP TABLE IF EXISTS `videolar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `videolar` (
  `vidid` int(11) NOT NULL AUTO_INCREMENT,
  `videobaslik` text COLLATE utf8_turkish_ci NOT NULL,
  `videoaciklama` text COLLATE utf8_turkish_ci NOT NULL,
  `videoetiket` text COLLATE utf8_turkish_ci NOT NULL,
  `videoembed` text COLLATE utf8_turkish_ci NOT NULL,
  `vidustid` int(11) NOT NULL,
  `videoresim` text COLLATE utf8_turkish_ci NOT NULL,
  `videodurum` int(11) NOT NULL,
  PRIMARY KEY (`vidid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videolar`
--

LOCK TABLES `videolar` WRITE;
/*!40000 ALTER TABLE `videolar` DISABLE KEYS */;
INSERT INTO `videolar` (`vidid`, `videobaslik`, `videoaciklama`, `videoetiket`, `videoembed`, `vidustid`, `videoresim`, `videodurum`) VALUES (1,'Güldüren canlı bağlantı','Uydu üzerinden yayın yapan Kaçkar Tv\'de \"Tele Kulis\" programına telefonla konuk olan Çaykur Rizespor kalecisi David Loriya ve Nijeryalı futbolcu Uche Kalu\'nun sunucu Alaattin Onay ile sohbeti izleyenleri güldürdü.\r\n','deneme,etiket,video','<div id=\"oroll_video_1362552241179\" title=\"{vname:\'video\', title:\'G%C3%BCld%C3%BCren+canl%C4%B1+ba%C4%9Flant%C4%B1\', file:\'http://ciner.mncdn.net/ht/2013/03/05/DFE252D5537FDA6BB34B095DEB2C81FB_c.mp4\', type:\'mp4\', rtmpserver:\'\', isLive:false, duration:318, keywords:\'Güldüren,canl?,ba?lant?\', width:460, height:360, background:\'#FFFFFF\', transparent:true, autoscreenshot:true, screenshot:\'http://mo.htimg.net/video/2013/03/05/DFE252D5537FDA6BB34B095DEB2C81FB.jpg?v=1362509541\', showSearch:false, showEmbedCode:true, showSuggestions:true, subtitle:\'\', scale:\'fit\', showGetLink:false, showtooltips:true, suggestion_path:\'http://video.haberturk.com/videoxml/player_xml/84899\', search_path:\'\', callback_videoStart:\'\', logoLink:\'\', category:\'1\', showLogo:false }\">video</div>\r\n<script language=\'javascript\' src=\'http://static.oroll.com/embed.js?embed=1362552241179&embed_base_url=http%3A//video.haberturk.com/spor/video/gulduren-canli-baglanti/84899&embed_base_site=30&skin_back=black&skin_buttons=black&logo=http%3A//static.oroll.com/player-logo/c4b9832c0c610afce62017416b46e2c6ebb64be2.png\'></script>',1,'yuklenenler/video/2409_content-1.png',0),(2,'Real Madrid Finalde2','ŞAMPİYONLAR LİGİ FİNALİN ADI : İSPANYA!!!222\r\n\r\nREAL MADRİD - ATLETİCO MADRİD\r\n\r\nSİZCE KUPAYI KİM ALIR ?','video,etiket,deneme22','<div id=\"oroll_video_1362640276018\" title=\"{vname:\'video\', title:\'Teker+teker+gelin%21\', file:\'http://ciner.mncdn.net/ht/2013/03/06/D1CB56FC0CBD9547DF386C5A5F9C2928_c.mp4\', type:\'mp4\', rtmpserver:\'\', isLive:false, duration:24, keywords:\'Teker,teker,gelin\', width:460, height:360, background:\'#FFFFFF\', transparent:true, autoscreenshot:true, screenshot:\'http://mo.htimg.net/video/2013/03/06/D1CB56FC0CBD9547DF386C5A5F9C2928.jpg?v=1362577997\', showSearch:false, showEmbedCode:true, showSuggestions:true, subtitle:\'\', scale:\'fit\', showGetLink:false, showtooltips:true, suggestion_path:\'http://video.haberturk.com/videoxml/player_xml/84953\', search_path:\'\', callback_videoStart:\'\', logoLink:\'\', category:\'15\', showLogo:false }\">video</div>\r\n<script language=\'javascript\' src=\'http://static.oroll.com/embed.js?embed=1362640276018&embed_base_url=http%3A//video.haberturk.com/haber/video/teker-teker-gelin/84953&embed_base_site=30&skin_back=black&skin_buttons=black&logo=http%3A//static.oroll.com/player-logo/c4b9832c0c610afce62017416b46e2c6ebb64be2.png\'></script>',2,'yuklenenler/video/6235_news-slider-bottom-5.png',1);
/*!40000 ALTER TABLE `videolar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `yonetici`
--

DROP TABLE IF EXISTS `yonetici`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `yonetici` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adminad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `adminsifre` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `siteadi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `siteadres` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sitetema` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `facebook` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `yonetici`
--

LOCK TABLES `yonetici` WRITE;
/*!40000 ALTER TABLE `yonetici` DISABLE KEYS */;
INSERT INTO `yonetici` (`id`, `adminad`, `adminsifre`, `siteadi`, `siteadres`, `sitetema`, `email`, `tarih`, `resim`, `facebook`) VALUES (1,'admin','d41d8cd98f00b204e9800998ecf8427e','Haber sitesi1','http://creativetasarim.com/haberozel/','default','info@habersitesi.com','22.03.2013','yuklenenler/resimler/831_logo.gif','');
/*!40000 ALTER TABLE `yonetici` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `yorumlar`
--

DROP TABLE IF EXISTS `yorumlar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `yorumlar` (
  `yid` int(11) NOT NULL AUTO_INCREMENT,
  `haberid` int(11) NOT NULL,
  `adsoyad` text COLLATE utf8_turkish_ci NOT NULL,
  `email` text COLLATE utf8_turkish_ci NOT NULL,
  `yorumu` text COLLATE utf8_turkish_ci NOT NULL,
  `ipno` text COLLATE utf8_turkish_ci NOT NULL,
  `ydurum` int(11) NOT NULL,
  `yorumokunma` int(11) NOT NULL,
  `ytarih` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`yid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `yorumlar`
--

LOCK TABLES `yorumlar` WRITE;
/*!40000 ALTER TABLE `yorumlar` DISABLE KEYS */;
INSERT INTO `yorumlar` (`yid`, `haberid`, `adsoyad`, `email`, `yorumu`, `ipno`, `ydurum`, `yorumokunma`, `ytarih`) VALUES (1,2,'Rıfat Bor','rifatbor@hotmail.com','Deneme yorum yazdım bakalım','127.0.0.1',1,23,'23/04/2014 13:20:16'),(2,2,'Gürkan Ersan1','','Denememe yorumum bakalım ne olacak boyle iyimi acaba ?1','8.8.8.8',1,2,'23/05/2014 13:20:16'),(3,0,'Hasan Ali','hasan@ali.com','deneme yorumdur bakalım','',0,0,''),(4,3,'Hasan Ali','hasan@ali.com','deneme yorumdur bakalım','',1,0,'');
/*!40000 ALTER TABLE `yorumlar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'creative_haberyaz'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-09-16  3:44:07
