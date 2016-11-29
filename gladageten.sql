-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` tinytext COLLATE utf8_bin NOT NULL,
  `password` tinytext COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1,	'kristin',	'password');

DROP TABLE IF EXISTS `page_activities`;
CREATE TABLE `page_activities` (
  `title` tinytext CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `summary` text CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO `page_activities` (`title`, `summary`) VALUES
('Skotersafari',	'Du tillsammans med en ledare kan känna att du kör tryggt och säkert på en lagom lång tur i den underbara naturen i tjärnholmens omnejd. Under turerna stannar vi för korvgrillning! Någon form av körkort krävs, svenskt eller utländskt. Tidsåtgång 4 timmar pris 500 kr per person'),
('SPA',	'Boka en spaupplevelse på den glada getens egna SPA! Vi erbjuder: Massage 50 min – 350 kr Kurbad 30 min – 250 kr Kroppsscrubb 50 min – 350 kr Badtunna – 300 kr per timme, uppvärmning sköts av den glada geten.'),
('Getmatning',	'Bokningsbar aktivitet som innefattar mat till Gösta och Selma och kort information om getskötsel. Tidsåtgång: ca 30 min Pris: 100 kr pp'),
('Getklappning',	'Gå in i hagen och klappa getterna! Personal från glada geten följer med och ser till att du kommer nära både Gösta och Selma, och vid rätt tid på året även lammen. Tidsåtgång: ca 30 min Pris: 50 kr pp'),
('Skogspromenad',	'Guidad vandring runt området för den som är nyfiken på lite mer lokalkännedom. Tidsåtgång: ca 2 timmar Pris: 250 kr pp. Finns även kartor för kostnadsfria vandringar utan guide.'),
('Kalendarium',	'Julbord – festa loss på den glada getens julbord under hela december månad! Under juni firar vi Midsommar!');

-- 2016-11-29 22:15:46
