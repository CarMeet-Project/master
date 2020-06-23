-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 23 jun 2020 om 13:34
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
  `password` varchar(80) NOT NULL,
  `verify_number` text NOT NULL,
  `verfied` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `accounts`
--

INSERT INTO `accounts` (`id`, `email`, `username`, `password`, `verify_number`, `verfied`) VALUES
(1, 'admin@admin.nl', 'admin', 'admin', '0167', 'TRUE');

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
(19, 'Footer_content Update Pagina'),
(20, 'Footer_content '),
(21, 'Footer_content '),
(22, 'Footer_content '),
(23, 'Footer_content '),
(24, 'Footer_content ');

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
(19, 'Header_content Update Pagina'),
(20, 'Header_content uitloggen'),
(21, 'Header_content Updaten producten'),
(22, 'Header_content productten deactiveren'),
(23, 'Header_content Gedeactiveerd producten'),
(24, 'Header_content Permanent Verwijderen');

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
(19, 'Header_title Update Pagina'),
(20, 'Header_title Uitloggen'),
(21, 'Header_title Update Producten'),
(22, 'Header_title Deactiveer Producten'),
(23, 'Header_title Gedeactiveerd Producten'),
(24, 'Header_title Permanent Verwijderen');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `meetup`
--

CREATE TABLE `meetup` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `header` text NOT NULL,
  `description` text NOT NULL,
  `place` text NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `ticketprice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `meetup`
--

INSERT INTO `meetup` (`id`, `userid`, `header`, `description`, `place`, `time`, `date`, `ticketprice`) VALUES
(7, 1, 'SmoothRoadCode', 'Smooth road code originele meetup', 'place here', '00:00:00', '2020-06-12', 0),
(8, 1, 'Bobs Auto shop meet', 'Een meet bij bobs enige echte auto shop.', 'Bij Bob', '00:00:00', '2001-09-11', 0),
(9, 1, 'Harisan Smoke en rem blok festival', 'Samen met harisan smoken en autos laten zien', 'Bij Harisan', '00:00:00', '2069-02-28', 0),
(10, 1, 'Marks firrari orgy', 'Mark houd van saaf', 'Bij Mark', '00:00:00', '2020-06-28', 0),
(11, 1, 'Haitam zijn hentai tesla truck', 'Bekijk nu haitam zijn gloed nieuwe hentai tesla truck!!!', 'Bij Haitam', '00:00:00', '2020-04-20', 0);

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
(19, 'Midpage_content Update Pagina'),
(20, 'Midpage_content '),
(21, 'Midpage_content '),
(22, 'Midpage_content '),
(23, 'Midpage_content '),
(24, 'Midpage_content ');

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
(19, 'Update CMS Pagina', 'update_cms', 'FALSE'),
(20, 'Uitloggen', 'logout', 'FALSE'),
(21, 'Update Producten', 'update_product', 'TRUE'),
(22, 'Deactiveer Producten', 'delete_product', 'FALSE'),
(23, 'Gedeactiveerde producten', 'deleted_product', 'FALSE'),
(24, 'Permanent verwijderen', 'archive_deleted_product', 'FALSE'),
(25, 'login beheer', 'login_admin', 'TRUE'),
(26, 'Maak account voor bezokers', 'create_user', 'TRUE'),
(27, 'mijn Account', 'my_account', ''),
(28, 'verify mijn account', 'verify_account', '');

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
(19, 'Update Pagina'),
(20, 'Uitloggen'),
(21, 'Update Producten'),
(22, 'Deactiveer Producten'),
(23, 'Gedeactiveerde producten'),
(24, 'Permanent verwijderen');

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
  `email` varchar(120) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `verify_number` varchar(4) NOT NULL,
  `verified` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `verify_number`, `verified`) VALUES
(9, 'boskaboutertje@outlook.com', 'Bob Nab', 'SuperGeheimWachtwoordVanBob', '3969', 'TRUE');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT voor een tabel `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT voor een tabel `shop_products`
--
ALTER TABLE `shop_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
