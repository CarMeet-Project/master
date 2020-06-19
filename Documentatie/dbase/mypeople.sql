-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 19 jun 2020 om 20:09
-- Serverversie: 10.1.38-MariaDB
-- PHP-versie: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mypeople`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `email` varchar(120) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `accounts`
--

INSERT INTO `accounts` (`id`, `email`, `username`, `password`) VALUES
(1, 'admin@admin.nl', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `footer_content`
--

CREATE TABLE `footer_content` (
  `id` int(11) NOT NULL,
  `footer_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `footer_content`
--

INSERT INTO `footer_content` (`id`, `footer_content`) VALUES
(1, 'Footer_content Home'),
(2, 'Footer_content Agenda'),
(3, 'Footer_content Info'),
(4, 'Footer_content Over Ons'),
(5, 'Footer_content Contact'),
(6, 'Footer_content WebWinkel'),
(7, 'Footer_content Product Lijst'),
(8, 'Footer_content Product Toevoegen'),
(9, 'Footer_content Product Updaten'),
(10, 'Footer_content Product Deactiveren'),
(11, 'Footer_content Product Activeren'),
(12, 'Footer_content Productdetails'),
(13, 'Footer_content CMS'),
(14, 'Footer_content Inloggen'),
(15, 'Footer_content Meet Toevoegen'),
(16, 'Footer_content Meetdetails'),
(17, 'Footer_content Voorbeeld Pagina'),
(18, 'Footer_content Pagina Details'),
(19, 'Footer_content Update Pagina');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `header_content`
--

CREATE TABLE `header_content` (
  `id` int(11) NOT NULL,
  `header_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `header_content`
--

INSERT INTO `header_content` (`id`, `header_content`) VALUES
(1, 'Header_content Home'),
(2, 'Header_content Agenda'),
(3, 'Header_content Info'),
(4, 'Header_content Over Ons'),
(5, 'Header_content Contact'),
(6, 'Header_content WebWinkel'),
(7, 'Header_content Product Lijst'),
(8, 'Header_content Product Toevoegen'),
(9, 'Header_content Product Updaten'),
(10, 'Header_content Product Deactiveren'),
(11, 'Header_content Product Activeren'),
(12, 'Header_content Product Details'),
(13, 'Header_content CMS'),
(14, 'Header_content Inloggen'),
(15, 'Header_content Meet Toevoegen'),
(16, 'Header_content Meetdetails'),
(17, 'Header_content Voorbeeld Pagina'),
(18, 'Header_content Pagina Details'),
(19, 'Header_content Update Pagina');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `header_title`
--

CREATE TABLE `header_title` (
  `id` int(11) NOT NULL,
  `header_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `header_title`
--

INSERT INTO `header_title` (`id`, `header_title`) VALUES
(1, 'Welkom bij Carmeet'),
(2, 'Header_title Agenda'),
(3, 'Header_title Info'),
(4, 'Header_title Over Ons'),
(5, 'Header_title Contact'),
(6, 'Header_title WebWinkel'),
(7, 'Header_title Product Lijst'),
(8, 'Header_title Product Toevoegen'),
(9, 'Header_title Product Updaten'),
(10, 'Header_title Product Deactiveren'),
(11, 'Header_title Product Activeren'),
(12, 'Header_title Productdetails'),
(13, 'Header_title CMS'),
(14, 'Header_title Inloggen'),
(15, 'Header_title Meet Toevoegen'),
(16, 'Header_title Meetdetails'),
(17, 'Header_title Voorbeeld Pagina'),
(18, 'Header_title Pagina Details'),
(19, 'Header_title Update Pagina');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `meetup`
--

CREATE TABLE `meetup` (
  `id` int(225) NOT NULL,
  `userid` int(225) NOT NULL,
  `header` varchar(225) NOT NULL,
  `description` varchar(225) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `meetup`
--

INSERT INTO `meetup` (`id`, `userid`, `header`, `description`, `date`) VALUES
(7, 1, 'SmoothRoadCode', 'Smooth road code originele meetup', '2020-06-12'),
(8, 1, 'Bobs Auto shop meet', 'Een meet bij bobs enige echte auto shop.', '2001-09-11'),
(9, 1, 'Harisan Smoke en rem blok festival', 'Samen met harisan smoken en autos laten zien', '2069-02-28'),
(10, 1, 'Marks firrari orgy', 'Mark houd van saaf', '2020-06-28'),
(11, 1, 'Haitam zijn hentai tesla truck', 'Bekijk nu haitam zijn gloed nieuwe hentai tesla truck!!!', '2020-04-20');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `voornaam` varchar(55) NOT NULL,
  `achternaam` varchar(55) NOT NULL,
  `authorisatie` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `members`
--

INSERT INTO `members` (`id`, `voornaam`, `achternaam`, `authorisatie`) VALUES
(2, 'Harisan', 'Nades', 'authorisatie');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `midpage_content`
--

CREATE TABLE `midpage_content` (
  `id` int(11) NOT NULL,
  `midpage_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `midpage_content`
--

INSERT INTO `midpage_content` (`id`, `midpage_content`) VALUES
(1, 'Midpage_content Home'),
(2, 'Midpage_content Agenda'),
(3, 'Midpage_content Info'),
(4, 'Midpage_content Over Ons'),
(5, 'Midpage_content Contact'),
(6, 'Midpage_content WebWinkel'),
(7, 'Midpage_content Product Lijst'),
(8, 'Midpage_content Product Toevoegen'),
(9, 'Midpage_content Product Updaten'),
(10, 'Midpage_content Product Deactiveren'),
(11, 'Midpage_content Product Activeren'),
(12, 'Midpage_content Productdetails'),
(13, 'Midpage_content CMS'),
(14, 'Midpage_content Inloggen'),
(15, 'Midpage_content Meet Toevoegen'),
(16, 'Midpage_content Meetdetails'),
(17, 'Midpage_content Voorbeeld Pagina'),
(18, 'Midpage_content Pagina Details'),
(19, 'Midpage_content Update Pagina');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `page_name` text NOT NULL,
  `action_name` text NOT NULL,
  `customer_page` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `page`
--

INSERT INTO `page` (`id`, `page_name`, `action_name`, `customer_page`) VALUES
(1, 'Home', 'welcome', 'TRUE'),
(2, 'Agenda', 'agenda', 'TRUE'),
(3, 'Info', 'info', 'TRUE'),
(4, 'Over Ons', 'aboutUs', 'TRUE'),
(5, 'Contact', 'contact', 'TRUE'),
(6, 'Winkel', 'shop', 'TRUE'),
(7, 'Overzicht Producten', 'read_product', 'FALSE'),
(8, 'Toevoeg Producten', 'add_product', 'FALSE'),
(9, 'Wijzig Producten', 'updatelist_product', 'FALSE'),
(10, 'Deactiveer Producten', 'deletelist_product', 'FALSE'),
(11, 'Gedeactiveerde Producten', 'deletedlist_product', 'FALSE'),
(12, 'Details Producten', 'read_details_product', 'TRUE'),
(13, 'CMS', 'cms', 'FALSE'),
(14, 'Inloggen', 'login', 'TRUE'),
(15, 'Meet Toevoegen', 'new_meet', 'FALSE'),
(16, 'Meet details', 'meet_page', 'TRUE'),
(17, 'Zie pagina in cms', 'page_cms', 'FALSE'),
(18, 'Details CMS Pagina', 'details_cms', 'FALSE'),
(19, 'Update CMS Pagina', 'update_cms', 'FALSE');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `page_title`
--

CREATE TABLE `page_title` (
  `id` int(11) NOT NULL,
  `page_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `page_title`
--

INSERT INTO `page_title` (`id`, `page_title`) VALUES
(1, 'Home'),
(2, 'Agenda'),
(3, 'Info'),
(4, 'Over Ons'),
(5, 'Contact'),
(6, 'WebWinkel'),
(7, 'Product Lijst'),
(8, 'Product Toevoegen'),
(9, 'Product Updaten'),
(10, 'Product Deactiveren'),
(11, 'Product Activeren'),
(12, 'Productdetails'),
(13, 'ContentManagementSystem'),
(14, 'Inloggen'),
(15, 'Meet Toevoegen'),
(16, 'Meetdetails'),
(17, 'Voorbeeld Pagina'),
(18, 'Pagina Details'),
(19, 'Update Pagina');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `shop_products`
--

CREATE TABLE `shop_products` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `price` text NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `qty` int(11) NOT NULL,
  `size` text NOT NULL,
  `sku` text NOT NULL,
  `active` text NOT NULL,
  `archived` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `shop_products`
--

INSERT INTO `shop_products` (`id`, `name`, `price`, `image`, `description`, `qty`, `size`, `sku`, `active`, `archived`) VALUES
(2, 'TEST1', '100.1', 'logo.png', 'aa', 1, 'XS', '123-456', 'TRUE', 'FALSE'),
(3, 'TEST2', '10.12', 'logo.png', 'Test2 zal deleted worden', 1, 'XL', 'S12-S14', 'TRUE', 'FALSE'),
(4, 'TEST3', '1145.66', 'qr-code.png', 'TEST123', 1, 'L', '789-LAM', 'TRUE', 'FALSE'),
(5, 'a', 'a', 'HTC Vive Cosmos.jpeg', 'a', 1, 'a', 'a', 'FALSE', 'FALSE');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(2, 'falco', '525451@edu.rocmn.nl', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `footer_content`
--
ALTER TABLE `footer_content`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexen voor tabel `header_content`
--
ALTER TABLE `header_content`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexen voor tabel `header_title`
--
ALTER TABLE `header_title`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexen voor tabel `meetup`
--
ALTER TABLE `meetup`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `midpage_content`
--
ALTER TABLE `midpage_content`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexen voor tabel `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `page_title`
--
ALTER TABLE `page_title`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexen voor tabel `shop_products`
--
ALTER TABLE `shop_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `meetup`
--
ALTER TABLE `meetup`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT voor een tabel `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT voor een tabel `shop_products`
--
ALTER TABLE `shop_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `footer_content`
--
ALTER TABLE `footer_content`
  ADD CONSTRAINT `footer_content_ibfk_1` FOREIGN KEY (`id`) REFERENCES `page` (`id`);

--
-- Beperkingen voor tabel `header_content`
--
ALTER TABLE `header_content`
  ADD CONSTRAINT `header_content_ibfk_1` FOREIGN KEY (`id`) REFERENCES `page` (`id`);

--
-- Beperkingen voor tabel `header_title`
--
ALTER TABLE `header_title`
  ADD CONSTRAINT `header_title_ibfk_1` FOREIGN KEY (`id`) REFERENCES `page` (`id`);

--
-- Beperkingen voor tabel `midpage_content`
--
ALTER TABLE `midpage_content`
  ADD CONSTRAINT `midpage_content_ibfk_1` FOREIGN KEY (`id`) REFERENCES `page` (`id`);

--
-- Beperkingen voor tabel `page_title`
--
ALTER TABLE `page_title`
  ADD CONSTRAINT `page_title_ibfk_1` FOREIGN KEY (`id`) REFERENCES `page` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
