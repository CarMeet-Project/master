-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 10 jun 2020 om 12:51
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
-- Database: `MyPeople`
--

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
(5, 'a', 'a', 'HTC Vive Cosmos.jpeg', 'a', 1, 'a', 'a', 'TRUE', 'FALSE');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `shop_products`
--
ALTER TABLE `shop_products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `shop_products`
--
ALTER TABLE `shop_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
