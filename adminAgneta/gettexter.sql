-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `allarum`;
CREATE TABLE `allarum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Rum` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO `allarum` (`id`, `Rum`) VALUES
(1,	1),
(2,	2),
(3,	3),
(4,	4),
(5,	5),
(6,	6),
(7,	7),
(8,	8);

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

DROP TABLE IF EXISTS `bokningstabell`;
CREATE TABLE `bokningstabell` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `startdatum` date NOT NULL,
  `slutdatum` date NOT NULL,
  `rumsNr` int(11) NOT NULL,
  `fornamn` varchar(100) COLLATE utf8_bin NOT NULL,
  `efternamn` varchar(100) COLLATE utf8_bin NOT NULL,
  `antalPers` int(11) NOT NULL,
  `onskemal` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO `bokningstabell` (`id`, `startdatum`, `slutdatum`, `rumsNr`, `fornamn`, `efternamn`, `antalPers`, `onskemal`) VALUES
(1,	'2016-12-17',	'2016-12-20',	2,	'Sverker',	'Johansson',	2,	'Allergisk mot smör'),
(2,	'2016-12-17',	'2016-12-28',	6,	'Johanna',	'Svensson',	2,	''),
(3,	'2016-12-28',	'2017-01-05',	5,	'Karl',	'Den Lille',	1,	'Vill ha extra kuddar!'),
(4,	'2017-01-04',	'2017-01-06',	2,	'Helga',	'Elch',	1,	'Ich willen ja Elchen sehen!'),
(5,	'2017-01-03',	'2017-01-07',	3,	'Lillegris',	'von Knorr',	1,	'Äntligen är julen över.'),
(6,	'2017-01-04',	'2017-01-06',	4,	'Greta',	'Andersson',	2,	''),
(7,	'2017-01-03',	'2017-01-06',	5,	'Hans',	'Hansson',	1,	''),
(8,	'2017-01-02',	'2017-01-08',	6,	'Gösta',	'Skogstomte',	3,	'Kan man äta getter?'),
(9,	'2017-01-03',	'2017-01-22',	7,	'Karl-Astrid',	'Sverkersson',	2,	''),
(10,	'2017-01-02',	'2017-01-07',	8,	'Karl',	'Den Tolfte',	3,	''),
(11,	'2017-01-03',	'2017-01-07',	1,	'Birgit',	'Nilsson',	1,	''),
(21,	'2016-12-20',	'2016-12-24',	1,	'Christina',	'Holgersson',	1,	'-'),
(27,	'2016-12-20',	'2016-12-29',	2,	'Sigge',	'Storflamman',	2,	'Gillar värme!'),
(28,	'2017-02-01',	'2017-02-04',	1,	'Hercule',	'Poirot',	1,	'Poirot wants his room in perfect condition!'),
(29,	'2017-01-18',	'2017-02-18',	2,	'Fam',	'Bernadotte',	3,	'');

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

-- 2016-12-19 15:12:42