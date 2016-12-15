-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `bilder`;
CREATE TABLE `bilder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vag` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO `bilder` (`id`, `vag`) VALUES
(1,	'galleri/18.jpg'),
(2,	'galleri/2.jpg'),
(3,	'galleri/3.jpg'),
(4,	'galleri/4.jpg'),
(5,	'galleri/5.jpg'),
(6,	'galleri/6.jpg'),
(7,	'galleri/20.jpg'),
(8,	'galleri/23.jpg'),
(13,	'galleri/19.jpg'),
(14,	'galleri/Selma.jpg'),
(18,	'galleri/11.jpg'),
(19,	'galleri/14.jpg');

DROP TABLE IF EXISTS `texter`;
CREATE TABLE `texter` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Rubrik` varchar(150) COLLATE utf8_bin NOT NULL,
  `text` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO `texter` (`ID`, `Rubrik`, `text`) VALUES
(1,	'Skotersafari',	'Du tillsammans med en ledare kan k�nna att du k�r tryggt och s�kert p� en lagom l�ng tur i den underbara naturen i tj�rnholmens omnejd. Under turerna stannar vi f�r korvgrillning! N�gon form av k�rkort kr�vs, svenskt eller utl�ndskt. Tids�tg�ng 4 timmar pris 500 kr per person. '),
(2,	'SPA',	'Boka en spaupplevelse p� den glada getens egna SPA! Vi erbjuder: Massage 50 min � 350 kr Kurbad 30 min � 250 kr Kroppsscrubb 50 min � 350 kr Badtunna � 300 kr per timme, uppv�rmning sk�ts av den glada geten.'),
(3,	'Getmatning',	'Bokningsbar aktivitet som innefattar mat till G�sta och Selma och kort information om getsk�tsel. Tids�tg�ng: ca 30 min Pris: 100 kr pp.'),
(4,	'Getklappning',	'G� in i hagen och klappa getterna! Personal fr�n glada geten f�ljer med och ser till att du kommer n�ra b�de G�sta och Selma, och vid r�tt tid p� �ret �ven lammen. Tids�tg�ng: ca 30 min Pris: 50 kr pp.'),
(5,	'Skogspromenad',	'Guidad vandring runt omr�det f�r den som �r nyfiken p� lite mer lokalk�nnedom. Tids�tg�ng: ca 2 timmar Pris: 250 kr pp. Finns �ven kartor f�r kostnadsfria vandringar utan guide.'),
(6,	'Kalendarium',	'Julbord � festa loss p� den glada getens julbord under hela december m�nad! Under juni firar vi Midsommar!'),
(7,	'V�lkommen',	'Den glada geten ligger bel�get i det natursk�na omr�det Tj�rnholmen i Norrbotten. Ut�ver smakfullt inredda rum finns �ven aktiveter att boka in under din vistelse. G�rden �r en gammal sl�ktg�rd, som 2005 gjordes om till b&b och har sedan dess lockat bes�kare fr�n hela Sverige och �ven v�rlden.'),
(8,	'Aktiviteter p� Den Glada Geten',	'P� den glada geten har vi tv� �husgetter�, G�sta och Selma, som h�ller till i en liten hage alldeles bredvid g�rdshuset. Kring g�rden finns �ven trevliga vandringsslingor och v�gar min sig p� ett dopp i �lven kan man boka bastu p� den glada geten efter det svalkande doppet.'),
(9,	'Passa p� att unna dig en avkopplande spabehandling',	''),
(10,	'Julbord - festa loss p� den glada getens julbord under hela december m�nad!',	''),
(11,	'Guidad Skotersafari - ta en l�ng tur i den underbara naturen.',	''),
(13,	'Om Den Glada Geten B & B',	'Den Glada Geten B & B ligger bel�get i det natursk�na omr�det Tj�rnholmen i Norrbotten. Ut�ver smakfullt inredda rum finns �ven aktiveter att boka in under din vistelse. G�rden �r en gammal sl�ktg�rd, som 2005 gjordes om till b & b och har sedan dess lockat bes�kare fr�n hela Sverige och �ven v�rlden.'),
(14,	'Selma & G�sta',	'P� Den Glada Geten har vi tv� �husgetter�, G�sta och Selma, som h�ller till i en liten hage alldeles bredvid g�rdshuset. Kring g�rden finns �ven trevliga vandringsslingor och v�gar min sig p� ett dopp i �lven kan man boka bastu p� den glada geten efter det svalkande doppet.');

-- 2016-12-12 14:04:27