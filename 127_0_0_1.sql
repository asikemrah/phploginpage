-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 24 Nis 2020, 16:05:24
-- Sunucu sürümü: 5.7.17
-- PHP Sürümü: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `n11`
--
CREATE DATABASE IF NOT EXISTS `n11` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `n11`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeol`
--

CREATE TABLE `uyeol` (
  `uyeıd` int(11) NOT NULL,
  `ad` varchar(30) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(30) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `eposta` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(16) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(10) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `cinsiyet` varchar(5) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `dtarihi` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `uyeol`
--

INSERT INTO `uyeol` (`uyeıd`, `ad`, `soyad`, `eposta`, `sifre`, `telefon`, `cinsiyet`, `dtarihi`) VALUES
(1, 'Ziya', 'Doygun', 'ziyadygn@gmail.com', 'ZiyaDoygun123', '5315509956', 'Erkek', '1999-09-17'),
(2, 'Furkan', 'IÅŸÄ±k', 'cesetisik@gmail.com', 'Fk123321', '5315509957', 'Erkek', '1999-02-17'),
(4, 'Berkant 'Demir', 'berkantsabridemir5824@gmail.com', 'Berkant123Q', '5578557524', 'Erkek', '1999-09-17'),
(5, 'Arzu', 'Kandemir', 'arzu.knd@gmail.com', 'ArZu123QWe', '5472574553', 'Kadin', '1997-04-08');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `uyeol`
--
ALTER TABLE `uyeol`
  ADD PRIMARY KEY (`uyeıd`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `uyeol`
--
ALTER TABLE `uyeol`
  MODIFY `uyeıd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;--
-- Veritabanı: `n11_zd`
--
CREATE DATABASE IF NOT EXISTS `n11_zd` DEFAULT CHARACTER SET utf8 COLLATE utf8_turkish_ci;
USE `n11_zd`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
