-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Úte 17. říj 2017, 18:54
-- Verze serveru: 10.1.25-MariaDB
-- Verze PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `rnw`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `events`
--

CREATE TABLE `events` (
  `idEvents` bigint(20) NOT NULL,
  `idCategories` bigint(20) DEFAULT NULL,
  `title` text,
  `info` text,
  `link` text,
  `date` datetime DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `events`
--

INSERT INTO `events` (`idEvents`, `idCategories`, `title`, `info`, `link`, `date`, `createdAt`, `active`) VALUES
(1, 2, 'Záviš', 'Koncert Pražské\r\nkapely. ', 'url', '2017-10-31 23:00:00', '2017-10-17 13:18:21', 0),
(2, 2, 'hahah', 'afsd', 'url', '2017-10-31 13:00:00', '2017-10-17 13:18:34', 0),
(3, 1, 'Závody', 'Rock´n´Wallování \r\nvol.02', 'https://www.facebook.com/events/1003177133156004/?acontext=%7B%22action_history%22%3A[%7B%22mechanism%22%3A%22bookmarks%22%2C%22surface%22%3A%22bookmarks_menu%22%2C%22extra_data%22%3A%22[]%22%7D%2C%7B%22surface%22%3A%22dashboard%22%2C%22mechanism%22%3A%22calendar_tab_invitation%22%2C%22extra_data%22%3A%22[]%22%7D]%2C%22ref%22%3A46%2C%22source%22%3A2%7D', '2017-12-13 12:00:00', '2017-10-17 15:13:44', NULL),
(4, 3, 'ahoj', 'asdfasdfsdfasdfas', 'URL', '2017-10-30 00:00:00', '2017-10-17 13:22:43', 1),
(5, 4, 'af', 'asdf', 'as', '2017-10-30 00:00:00', '2017-10-17 13:22:47', 0),
(6, 3, 'ahoj', 'asdfasdfsdfasdfas', 'URL', '2017-10-30 20:00:00', '2017-10-17 13:22:43', 1),
(7, 2, 'asdf', 'asdf', 'ass', '2017-10-18 13:10:00', '2017-10-17 15:02:40', NULL),
(8, 2, 's', 's', 's', '2017-10-04 02:10:00', '2017-10-17 15:04:20', 1),
(9, 1, 'sas', 's', 'asd', '2017-09-27 05:09:00', '2017-10-17 15:16:11', 1);

-- --------------------------------------------------------

--
-- Struktura tabulky `eventscategories`
--

CREATE TABLE `eventscategories` (
  `idCategories` bigint(20) NOT NULL,
  `Name` text,
  `picture` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `eventscategories`
--

INSERT INTO `eventscategories` (`idCategories`, `Name`, `picture`) VALUES
(1, 'Zavod', '/img/zavod.png'),
(2, 'koncert', '/img/koncert.png'),
(3, 'kurz', '/img/kurz.png'),
(4, 'prednaska', '/img/pokec.png');

-- --------------------------------------------------------

--
-- Struktura tabulky `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1506945517),
('m170924_094228_init', 1506945517);

-- --------------------------------------------------------

--
-- Struktura tabulky `news`
--

CREATE TABLE `news` (
  `idNews` bigint(20) NOT NULL,
  `title` text,
  `comment` text,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `activeTo` date DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`idEvents`),
  ADD KEY `idCategories` (`idCategories`);

--
-- Klíče pro tabulku `eventscategories`
--
ALTER TABLE `eventscategories`
  ADD PRIMARY KEY (`idCategories`);

--
-- Klíče pro tabulku `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Klíče pro tabulku `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`idNews`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `events`
--
ALTER TABLE `events`
  MODIFY `idEvents` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pro tabulku `eventscategories`
--
ALTER TABLE `eventscategories`
  MODIFY `idCategories` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pro tabulku `news`
--
ALTER TABLE `news`
  MODIFY `idNews` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- Omezení pro exportované tabulky
--

--
-- Omezení pro tabulku `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`idCategories`) REFERENCES `eventscategories` (`idCategories`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
