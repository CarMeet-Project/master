-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 16 jun 2020 om 22:45
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
-- Tabelstructuur voor tabel `cms`
--

CREATE TABLE `cms` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `file_name` text NOT NULL,
  `get_name` text NOT NULL,
  `get_action_name` text NOT NULL,
  `page_title` text NOT NULL,
  `header_title` text NOT NULL,
  `header_content` text NOT NULL,
  `midpage_content` text NOT NULL,
  `footer_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `cms`
--

INSERT INTO `cms` (`id`, `name`, `file_name`, `get_name`, `get_action_name`, `page_title`, `header_title`, `header_content`, `midpage_content`, `footer_content`) VALUES
(1, 'Home', 'index.php', 'action', 'welcome', 'Home', 'Home', 'Welkom bij carmeet website', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer tincidunt ligula ut dui posuere, non iaculis sapien lacinia. Vivamus ligula odio, efficitur non tellus at, efficitur tincidunt ante. Cras sit amet magna quis dui ornare congue. Donec luctus volutpat ligula. Integer ultrices justo et sapien dapibus, sit amet fermentum dui euismod. Nulla facilisi. Sed tincidunt, nisi eget elementum tincidunt, ipsum ante venenatis risus, eu luctus augue risus non dui. Proin tortor mi, posuere ut finibus sagittis, lacinia iaculis nisi. Nunc enim nibh, tincidunt non ornare nec, ornare rutrum purus. Mauris mauris nunc, tempus id blandit tristique, consequat a sapien. Aliquam erat volutpat. Morbi sagittis sit amet ex ut tempus. Nullam vitae lobortis sapien.Etiam tristique ligula eget euismod dapibus. Nam blandit magna in tortor malesuada tristique. Praesent accumsan pretium risus non blandit. Praesent ornare ex a risus interdum varius. Vivamus elementum vulputate tellus eu elementum. Nam porttitor ultrices nisi, et mollis turpis tempus a. Fusce pharetra sem sapien, vel aliquam erat faucibus et.', 'Mede Mogelijk Gemaakt door SmoothRoadCode');

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
-- Indexen voor tabel `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT voor een tabel `cms`
--
ALTER TABLE `cms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
