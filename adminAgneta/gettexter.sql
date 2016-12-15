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
(1,	'Skotersafari',	'Du tillsammans med en ledare kan känna att du kör tryggt och säkert på en lagom lång tur i den underbara naturen i tjärnholmens omnejd. Under turerna stannar vi för korvgrillning! Någon form av körkort krävs, svenskt eller utländskt. Tidsåtgång 4 timmar pris 500 kr per person. '),
(2,	'SPA',	'Boka en spaupplevelse på den glada getens egna SPA! Vi erbjuder: Massage 50 min – 350 kr Kurbad 30 min – 250 kr Kroppsscrubb 50 min – 350 kr Badtunna – 300 kr per timme, uppvärmning sköts av den glada geten.'),
(3,	'Getmatning',	'Bokningsbar aktivitet som innefattar mat till Gösta och Selma och kort information om getskötsel. Tidsåtgång: ca 30 min Pris: 100 kr pp.'),
(4,	'Getklappning',	'Gå in i hagen och klappa getterna! Personal från glada geten följer med och ser till att du kommer nära både Gösta och Selma, och vid rätt tid på året även lammen. Tidsåtgång: ca 30 min Pris: 50 kr pp.'),
(5,	'Skogspromenad',	'Guidad vandring runt området för den som är nyfiken på lite mer lokalkännedom. Tidsåtgång: ca 2 timmar Pris: 250 kr pp. Finns även kartor för kostnadsfria vandringar utan guide.'),
(6,	'Kalendarium',	'Julbord – festa loss på den glada getens julbord under hela december månad! Under juni firar vi Midsommar!'),
(7,	'Välkommen',	'Den glada geten ligger beläget i det natursköna området Tjärnholmen i Norrbotten. Utöver smakfullt inredda rum finns även aktiveter att boka in under din vistelse. Gården är en gammal släktgård, som 2005 gjordes om till b&b och har sedan dess lockat besökare från hela Sverige och även världen.'),
(8,	'Aktiviteter på Den Glada Geten',	'På den glada geten har vi två ”husgetter”, Gösta och Selma, som håller till i en liten hage alldeles bredvid gårdshuset. Kring gården finns även trevliga vandringsslingor och vågar min sig på ett dopp i älven kan man boka bastu på den glada geten efter det svalkande doppet.'),
(9,	'Passa på att unna dig en avkopplande spabehandling',	''),
(10,	'Julbord - festa loss på den glada getens julbord under hela december månad!',	''),
(11,	'Guidad Skotersafari - ta en lång tur i den underbara naturen.',	''),
(13,	'Om Den Glada Geten B & B',	'Den Glada Geten B & B ligger beläget i det natursköna området Tjärnholmen i Norrbotten. Utöver smakfullt inredda rum finns även aktiveter att boka in under din vistelse. Gården är en gammal släktgård, som 2005 gjordes om till b & b och har sedan dess lockat besökare från hela Sverige och även världen.'),
(14,	'Selma & Gösta',	'På Den Glada Geten har vi två ”husgetter”, Gösta och Selma, som håller till i en liten hage alldeles bredvid gårdshuset. Kring gården finns även trevliga vandringsslingor och vågar min sig på ett dopp i älven kan man boka bastu på den glada geten efter det svalkande doppet.');

-- 2016-12-12 14:04:27